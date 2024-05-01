@extends('../layout')

@section('title', 'Masuk Admin | AFEKSI')

@section('styles')
<link rel="stylesheet" href="/assets/css/loginregis-admin.css">
@endsection

@section('content')

{{--
@if (session('success'))
<div class="alert alert-success">
 {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif --}}


<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="box mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6 d-none d-md-inline">
                <div class="content d-flex flex-column justify-content-center align-items-center mt-4">
                    <img class="img d-flex" src="{{ asset('assets/img/auth-admin/login.png') }}" alt="Img_login">
                    <p class="fw-bold mt-4 fs-7 mb-0" style="color: #232323;">Selamat Datang, Admin!</p>
                    <p class="font mt-2" style="color: #52525B;">Bercerita & berbagi rasa. Tenangkan hati & tenangkan diri.</p>
                </div>
            </div>
            <div class="col-lg-6 d-none d-md-inline">
                <div class="form-card my-4 mx-4 d-flex flex-column">
                    <div class="px-2 py-3">
                        <div class="d-flex flex-column justify-content-center align-items-center mt-1">
                            <p class="fw-bold mb-0">Buat Akun Baru</p>
                            <p class="font mt-2">Silahkan isi data berikut untuk melanjutkan.</p>
                        </div>
                        <form class="form justify-content-start px-1 d-flex flex-column" method="POST" action="">
                            <div class="input-group-sm">
                                <label for="name" class="font-2 form-label mb-0">Nama Lengkap</label>
                                <input type="text" id="name" class="form-control" placeholder="Masukkan Nama Lengkap" required>
                            </div>
                            <div class="input-group-sm mt-2">
                                <label for="email" class="font-2 form-label mb-0">Email</label>
                                <input type="email" id="email" class="form-control" placeholder="Masukkan Email" required>
                            </div>
                            <div class="mt-2">
                                <label for="passwordInput" class="font-2 form-label mb-0">Password</label>
                                <div class="password password-container input-group-sm ">
                                    <input type="password" id="passwordInput" class="form-control" placeholder="Masukkan Password" name="password" required>
                                    <img class="password-icon" src="{{ asset('assets/img/login-register/mdi_eye.png') }}" alt="" style="width: 18px ;">
                                </div>
                            </div>
                            <div class="mt-2 mb-0">
                                <label for="confirmPasswordInput" class="font-2 form-label mb-0">Konfirmasi Password</label>
                                <div class="password password-container input-group-sm ">
                                    <input type="password" id="confirmPasswordInput" class="form-control" placeholder="Konfirmasi Password" name="password" required>
                                    <img class="password-icon-2" src="{{ asset('assets/img/login-register/mdi_eye.png') }}" alt="" style="width: 18px ;">
                                </div>
                            </div>
                            <div class="mt-2">
                                <p class="font-3 text-center" style="color: #667085;">Dengan membuat akun, saya setuju dengan <a href="#" class="redir">Persyaratan Layanan</a> dan <a href="#" class="redir">Kebijakan Privasi</a> AFEKSI.</p>
                            </div>
                            <div class="mt-2 d-flex flex-column">
                                <button class="btn fw-bold font-2">Daftar</button>
                                <div class="other align-items-center justify-content-center d-flex align-content-center mt-3 mb-0">
                                    <div class="line mb-3 ms-4"></div>
                                    <p class="font mx-3" style="color: #7B7B7B;">Atau Daftar Dengan</p>
                                    <div class="line mb-3 me-4"></div>
                                </div>
                                <a type="button" href="{{ route('auth.google') }}" class="btn-transparent mb-2 fw-semibold d-flex align-items-center justify-content-center border p-1">
                                    <img src="{{ asset('assets/img/login-register/Google.png') }}" alt="google_img" style="width: 20px;"><span class="font-3 mx-3 text-dark">Masuk dengan Google</span>
                                </a>
                            </div>
                            <div>
                                <p class="text-center font" style="color: #7B7B7B;">Sudah punya akun? <a class="redir" href="#">Masuk Sekarang</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@section('script')
<script src="/assets/js/login-regis.js"></script>
@endsection
@endsection