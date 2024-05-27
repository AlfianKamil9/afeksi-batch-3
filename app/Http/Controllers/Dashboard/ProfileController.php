<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserEducation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function showDashboardProfile()
    {
        $userEducation = UserEducation::where('user_id', auth()->user()->id)->first();
        $instansi = $userEducation ? $userEducation->instansi : null;

        return view('pages.dashboard-profile', compact('instansi'));
    }

    public function processChanges(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required|email:dns',
            'tgl_lahir' => 'required',
            'no_whatsapp' => 'required',
            'pekerjaan' => 'required',
            'jenisKelamin' => 'required',
            'domisili' => 'required',
            'institusi' => 'required',
        ], [
            'nama.required' => 'nama harus diisi.',
            'email.required' => 'email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'tgl_lahir.required' => 'tanggal lahir harus diisi.',
            'no_whatsapp.required' => 'nomor WhatsApp harus diisi.',
            'pekerjaan.required' => 'pekerjaan harus diisi.',
            'jenisKelamin.required' => 'jenis kelamin harus diisi.',
            'domisili.required' => 'domisili harus diisi.',
            'institusi.required' => 'institusi harus diisi.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        User::where('id', auth()->user()->id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'tgl_lahir' => $request->tgl_lahir,
            'no_whatsapp' => $request->no_whatsapp,
            'domisili' => $request->domisili,
            'pekerjaan' => $request->pekerjaan,
            'jenisKelamin' => $request->jenisKelamin,
        ]);

        // mencari apakah instansi user sudah ada atau belum

        $instansi = UserEducation::where('user_id', auth()->user()->id)->first();

        if ($instansi) {
            UserEducation::where('user_id', auth()->user()->id)->update([
                'user_id' => auth()->user()->id,
                'instansi' => $request->institusi,
            ]);
        } else {
            UserEducation::create([
                'user_id' => auth()->user()->id,
                'instansi' => $request->institusi,
            ]);
        }

        return back()->with('success', 'Sukses Update Profile');
    }

    public function showUbahPassword()
    {
        return view('pages.ubah-password');
    }

    public function processChangePassword(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'current_password' => ['required', 'max:32', 'password_no_number_first', Password::defaults()],
            'new_password' => ['required', 'max:32', 'password_no_number_first', 'confirmed', Password::defaults()],
        ]);
        if (Auth::user()->google_id) {
            return redirect()->route('dashboard.profile.index')->with('error', 'Mohon maaf, Anda terdaftar dengan akun Google ');
        }
        if ($validate->fails()) {
            return back()->with('error', $validate->messages());
        }

        $credentials = [
            'email' => Auth::user()->email,
            'password' => $request->input('current_password'),
        ];

        if (! Auth::attempt($credentials)) {
            return redirect()->back()->withErrors(['current_password' => 'Password lama tidak sesuai']);
        }

        User::where('id', Auth::user()->id)->update([
            'password' => Hash::make($request->input('new_password')),
        ]);

        return redirect()->route('dashboard.profile.index')->with('success', 'Success update Password');

    }

    public function showUbahFoto()
    {
        return view('pages.ubah-foto-profile');
    }

    public function processChangeFoto(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'upload_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($validate->fails()) {
            return back()->with('error', $validate->message());
        }
        $user = Auth::user();
        $adaFile = public_path('/assets/img/profile/'.$user->avatar);
        if ($user->avatar && file_exists($adaFile)) {
            unlink($adaFile);
            //Storage::delete('public/user/profile_pictures/'.$user->avatar);
        }
        $file = $request->file('upload_image');
        $fileName = Str::lower(Str::random(5)).'_'.time().'.'.$file->getClientOriginalExtension();
        //$file->storeAs('public/user/profile_pictures', $fileName); // Simpan gambar di direktori storage/app/public/profile_pictures
        $file->move(public_path('/assets/img/profile'), $fileName);
        User::where('id', $user->id)->update([
            'avatar' => $fileName,
        ]);

        return redirect()->route('dashboard.profile.index')->with('success', 'Berhasil Ganti Foto Profile');
    }
}
