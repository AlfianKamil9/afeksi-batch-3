<?php

namespace App\Http\Controllers\AF_Admin_Web;

use App\Http\Controllers\Controller;
use App\Models\GuestStar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class guestStarDashboardController extends Controller
{
    public function index(Request $request)
    {
        $guestStar = new GuestStar();
        if ($request->has('search')) {
            $search = $request->input('search');
            $guestStar = $guestStar->where('nama_psikolog', 'LIKE', '%' . $search . '%');
        }

        $dataFilter = $request->input('sort_data');
        if ($dataFilter == 'latest') {
            $guestStar->orderBy('id', 'desc');
        }
        $guestStar = $guestStar->paginate(10);

        return view('A_Page_Admin.GuestStar.admin-gueststar', compact('guestStar'));
    }

    public function showAdd()
    {
        return view('A_Page_Admin.GuestStar.admin-add-guestar');
    }

    public function createGuestStar(Request $request)
    {
        //validasi
        $messages = [
            'avatar.required' => 'Avatar wajib diupload.',
            'avatar.image' => 'Avatar harus berupa gambar.',
            'avatar.mimes' => 'Avatar harus berupa file dengan format jpeg, png atau jpg.',
            'nama_psikolog.required' => 'Nama wajib diisi.',
            'profil.required' => 'Profil wajib diisi.'
        ];

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg',
            'nama_psikolog' => 'required',
            'profil' => 'required|max:255'
        ], $messages);

        // mengupload file gambar
        $photoName = $request->file('avatar')->getClientOriginalName();
        $request->file('avatar')->storeAs('assets/img/guest-star/', $photoName);

        GuestStar::create([
            'avatar' => $photoName,
            'nama_psikolog' => $request->nama_psikolog,
            'profil' => $request->profil,
        ]);

        return redirect()->route('admin.gueststar.index')->with('success', 'Data berhasil ditambahkan.');
    }


    public function showEdit($id)
    {
        $guestStar = GuestStar::find($id);
        return view('A_Page_Admin.GuestStar.admin-edit-guestar', compact('guestStar', 'id'));
    }

    public function update(Request $request, $id)
    {
        $guestStar = GuestStar::find($id);
        
        // Validasi
        $messages = [
            'photo.required' => 'Foto Profil wajib diisi.',
            'avatar.image' => 'Avatar harus berupa gambar.',
            'avatar.mimes' => 'Avatar harus berupa file dengan format jpeg, png atau jpg.',
            'nama_psikolog.required' => 'Nama wajib diisi.',
            'profil.required' => 'Profil wajib diisi.'
        ];

        $request->validate([
            'photo' => 'required',
            'avatar' => 'image|mimes:jpeg,png,jpg',
            'nama_psikolog' => 'required',
            'profil' => 'required|max:255'
        ], $messages);

        $guestStar->nama_psikolog = $request->nama_psikolog;
        $guestStar->profil = $request->profil;

        if (request()->hasFile('avatar')) {
            // Hapus file gambar lama
            $avatarFileName = $guestStar->avatar;
            Storage::delete('assets/img/guest-star/' . $avatarFileName);

            // Upload file gambar baru
            $photoName = request()->file('avatar')->getClientOriginalName();
            request()->file('avatar')->storeAs('assets/img/guest-star/', $photoName);
            $guestStar->avatar = $photoName;
        }

        // Simpan data
        $guestStar->save();

        return redirect()->route('admin.gueststar.index')->with('success', 'Data berhasil diubah.');
    }

    public function delete($id)
    {
        $guestStar = GuestStar::find($id);

        if (!$guestStar) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        $avatarFileName = $guestStar->avatar;
        $guestStar->delete();

        if ($avatarFileName) {
            Storage::delete('assets/img/guest-star/' . $avatarFileName);
        }

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.gueststar.index')->with('success', 'Data berhasil dihapus.');
    }
}
