{{-- @extends('../layout')

@section('title', 'Profile Dashboard | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="/assets/css/dashboard-profile.css">
@endsection


@section('content')
    <!-- HERO  ================================================================= -->
    <section>
      <div class="hero d-flex pt-5">
        <div class="container-fluid py-4">
          <div class="row justify-content-end">
            <div class="col-lg-8">
              <h4 class="fw-semibold mt-5">
                <span>Welcome</span>, {{ Auth::user()->nama }}
              </h4>
              <p class="fw-light mt-3">
                Untuk memudahkan proses konsultasi kamu, harap masukkan
                informasi yang valid.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- sidebar -->
    <div class="card-dashboard navbar-expand-lg col-sm-5 col-lg-3 mt-4">
      <button class="navbar-toggler sidebar-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideBar" aria-controls="navbarOffcanvas">
        <img src="/assets/img/dashboard-profile/user.svg" class="card-img-top" alt="Dashboard " />
      </button>

      <div class="offcanvas offcanvas-start" tabindex="-1" id="sideBar" aria-labelledby="thisSideBar">
      <div class="offcanvas-header">
          <button type="button" class="btn-close ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="card border-0">
          <img src="/assets/img/dashboard-profile/user.svg" id="profile" class="p-4 rounded-circle" alt="Dashboard " style="background-color: #cccccc; width: 35%;"/>
          <div class="card-body">
            <div class="card-title mb-5 ms-md-2">
              <h5 class="fw-bold mb-1">{{ Auth::user()->nama }}</h5>
              <p class="mb-3">{{ Auth::user()->email }}</p>
            </div>
            <div class="col-md-12 col-lg-12 d-md-block dashboard-menu mb-3">
              <div class="position-sticky">
                <ul class="nav flex-column">
                  <li class="nav-item mb-3">
                    <a class="nav-link @if(Route::currentRouteName() == 'dashboard.index') active @endif " href="{{ route('dashboard.index') }}">
                      <img src="/assets/img/dashboard-profile/dashboard.svg" alt="Dashboard" />
                      Dashboard
                    </a>
                  </li>
                  <li class="nav-item mb-3">
                    <a class="nav-link @if(Route::currentRouteName() == 'dashboard.profile.index') active @endif" href="{{ route('dashboard.profile.index') }}">
                      <img src="/assets/img/dashboard-profile/user-blue.svg" alt="Dashboard" />
                      Profile
                    </a>
                  </li>
                  <li class="nav-item mb-3">
                    <a class="nav-link" href="#">
                      <img src="/assets/img/dashboard-profile/voucher.svg" alt="Dashboard" />
                      Voucher
                    </a>
                  </li>
                  <li class="nav-item mb-3">
                    <a class="nav-link" href="#">
                      <img src="/assets/img/dashboard-profile/courses.svg" alt="Dashboard" />
                      My Courses
                    </a>
                  </li>
                  <li class="nav-item mb-3">
                    <a class="nav-link @if(Route::currentRouteName() == 'dashboard.show.e-book') active @endif " href="{{ route('dashboard.show.e-book') }}">
                      <img src="/assets/img/dashboard-profile/e-book.svg" alt="Dashboard" />
                      My E-Book
                    </a>
                  </li>
                  <li class="nav-item mb-3">
                    <a class="nav-link @if(Route::currentRouteName() == 'dashboard.show.rekap.transaksi') active @endif " href="{{ route('dashboard.show.rekap.transaksi') }}">
                      <img src="/assets/img/dashboard-profile/transaction.svg" alt="Dashboard" />
                      Rekap Transaksi
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>


    
   
    <!-- end Sidebar -->
    <main>
      <div class="row mt-5 mx-1 me-lg-5 justify-content-end">
        <form class="col-lg-8" method="POST" action="{{ route('dashboard.profile.changes.data') }}">
        @csrf
          <div class="row">
            <div class="col-12">
                <div class="mb-3">
                     <!-- Nama Lengkap -->
                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namaLengkap" name="nama" placeholder="Masukkan Nama Lengkap" value="{{ Auth::user()->nama }}">
                </div>
               <div class="mb-3">
                     <!-- Email -->
                    <label for="email" class="form-label">Email</label>
                     <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="{{ Auth::user()->email }}">
               </div>
            
            </div>

            <div class="col-12 col-md-6">
              <div class="mb-3">
                    <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="tanggalLahir" name="tgl_lahir" placeholder="Pilih Tanggal Lahir" value="{{ Auth::user()->tgl_lahir }}">
                        <span class="input-group-text" data-toggle="datepicker" data-input="#tanggalLahir">
                            <i class="bi bi-calendar"></i>
                        </span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="noHP" class="form-label">No. HP</label>
                    <input type="tel" class="form-control" id="noHP" placeholder="Masukkan No. HP" name="no_whatsapp" value="{{ Auth::user()->no_whatsapp }}">
                </div>
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" placeholder="Pekerjaan Kamu" name="pekerjaan" value="{{ Auth::user()->pekerjaan }}">
                </div>
            </div>

            <div class="col-12 col-md-6 ">
              <div class="mb-3">
                    <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jenisKelamin" name="jenisKelamin">
                        <option hidden>Pilihan</option>
                        <option value="Laki-laki" @if (Auth::user()->jenisKelamin == 'Laki-Laki')
                            selected
                        @endif>Laki-laki</option>
                        <option value="Perempuan" @if (Auth::user()->jenisKelamin == 'Perempuan')
                            selected
                        @endif>Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kota" class="form-label">Kota</label>
                    <input type="text" class="form-control" id="kota" name="domisili" placeholder="Masukkan Kota" value="{{ Auth::user()->domisili }}">
                </div>
                <div class="mb-3">
                    <label for="instansi" class="form-label">Instansi</label>
                    <input type="text" class="form-control" id="instansi" name="institusi" placeholder="Instansi Kamu" value="{{ Auth::user()->institusi }}">
                </div>
            </div>
            
            <div class="col-12">
              <div class="row">
                <div class="col-12 col-md">
                  <div class="d-flex my-md-5 my-4 gap-3">
                    <a type="button" href="{{ route('dashboard.profile.show.changePassword') }}" class="btn btn-outline-primary">Ubah Password</a>
                    <a type="button" href="{{ route('dashboard.profile.show.changeFoto') }}" class="btn btn-outline-primary">Ubah Foto Profile</a>
                  </div>
                </div>
                <div class="col-12 col-md">
                  <div class="my-md-5 pb-5">
                    <button type="submit" class="btn btn-primary w-100">
                      Simpan Perubahan
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </main>

    <!-- end-main ======================================== -->
      

      <script>
        document.addEventListener("DOMContentLoaded", function () {
            flatpickr("#tanggalLahir", {
                dateFormat: "Y-m-d", // Format tanggal yang diinginkan
                locale: "id", // Lokal Bahasa Indonesia
                altInput: true, // Menggunakan input alternatif yang mudah diisi
                altFormat: "j F Y", // Format input alternatif
                allowInput: true, // Memungkinkan pengguna menginputkan tanggal langsung
                enableTime:false
            });
        });
        
       
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script
      type="text/javascript"
      src="https://unpkg.com/external-svg-loader@1.0.0/svg-loader.min.js"
      async
    ></script>
    <!-- Tambahkan file JavaScript Flatpickr -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
  
    
    
    

@include('../partials/footer') 
@endsection --}}

@extends('../layout')
@section('title', 'Profile Dashboard | AFEKSI')
@section('styles')
    <link rel="stylesheet" href="/assets/css/dashboard-profile.css">
@endsection
@section('content')
<div class="row justify-content-end">    
<div class="col-12 position-relative">
    <!-- HERO
      ================================================================= -->
    <section>
        <div class="hero d-flex">
            <div class="container py-5 my-5 ">
                <div class="row justify-content-end">
                    <div class="col-md-9 d-flex flex-column">
                        <h4 class="fw-semibold mt-5"><span>Welcome</span>, {{ Auth::user()->nama }}</h4>
                        <p class="fs-5 fw-light mt-3">Untuk memudahkan proses konsultasi kamu, harap masukkan informasi yang valid.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard ============================== -->
    <div class="dashboard p-3 shadow-sm">
        <div class="bg-light rounded-circle d-flex justify-content-center align-items-center border" id="profile-foto" style="width: 125px; height: 125px;cursor:pointer;">
          @if (Auth::user()->avatar)
              <img src ="/assets/img/profile/{{ Auth()->user()->avatar }}" class="rounded-circle"  width="125x" height="125px">
          @else 
              <svg data-src="/assets/img/dashboard-profile/user.svg" width="50px" height="50px"></svg>
          @endif
        </div>
        <div class="mt-3" id="profile-foto" style="cursor:pointer;">
            <h6 class="fw-bold">{{ Auth::user()->nama }}</h6>
            <p>{{ Auth::user()->email }}</p>
        </div>
        
        <div class="mb-4 mt-5 p-1  @if(Route::currentRouteName() == 'dashboard.index') active @endif "><a href="{{ route('dashboard.index') }}" class="text-secondary"><svg data-src="/assets/img/dashboard-profile/dashboard.svg" class="me-2" width="20" height="20" fill="#828282"></svg>Dashboard</a></div>
        <div class="mb-4 @if(Route::currentRouteName() == 'dashboard.profile.index') active @endif p-1"><a href="{{ route('dashboard.profile.index') }}" class="text-secondary"><svg data-src="/assets/img/dashboard-profile/user.svg" class="me-2" width="20" height="20"></svg>Profile</a></div>
        {{-- <div class="mb-4 p-1"><a href="#" class="text-secondary"><img src="/assets/img/dashboard-profile/voucher.svg" width="20" height="20" class="me-2">Voucher</a></div> --}}
        {{-- <div class="mb-4 p-1"><a href="#" class="text-secondary"><svg data-src="/assets/img/dashboard-profile/courses.svg" width="20" height="20" fill="#828282" class="me-2"></svg>My Courses</a></div> --}}
        {{-- <div class="mb-4 @if(Route::currentRouteName() == 'dashboard.show.e-book') active @endif p-1"><a href="{{ route('dashboard.show.e-book') }}" class="text-secondary"><svg data-src="/assets/img/dashboard-profile/e-book.svg" width="20" height="20" fill="#828282" class="me-2"></svg>My E-Book</a></div> --}}
        <div class="mb-4 @if(Route::currentRouteName() == 'dashboard.show.rekap.transaksi') active @endif p-1"><a href="{{ route('dashboard.show.rekap.transaksi') }}" class="text-secondary"><img src="/assets/img/dashboard-profile/transaction.svg" alt="" width="20" height="20" fill="#828282" class="me-2">Rekap Transaksi</a></div>
    </div>
    </div>

<!-- End of dashboard profile  ===================================-->
  <div class="col-md-9">
      <!-- FORM ===================== -->
      <div class="container mt-5">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success</strong> {{ session('success') }}.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Gagal</strong> {{ session('error') }}.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form class="mx-3" method="POST" action="{{ route('dashboard.profile.changes.data') }}">
          @csrf
              <div class="row">
              <div class="col-12">
                  <div class="mb-3">
                      <!-- Nama Lengkap -->
                      <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="namaLengkap" name="nama" placeholder="Masukkan Nama Lengkap" value="{{ Auth::user()->nama }}">
                  </div>
                <div class="mb-3">
                      <!-- Email -->
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="{{ Auth::user()->email }}">
                </div>
              </div>
              <div class="col-6">
                  <div class="mb-3">
                      <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="tanggalLahir" name="tgl_lahir" placeholder="Pilih Tanggal Lahir" value="{{ Auth::user()->tgl_lahir }}">
                          <span class="input-group-text" data-toggle="datepicker" data-input="#tanggalLahir">
                              <i class="bi bi-calendar"></i>
                          </span>
                      </div>
                  </div>
                  <div class="mb-3">
                      <label for="noHP" class="form-label">No. HP</label>
                      <input type="tel" class="form-control" id="noHP" placeholder="Masukkan No. HP" name="no_whatsapp" value="{{ Auth::user()->no_whatsapp }}">
                  </div>
                  <div class="mb-3">
                      <label for="pekerjaan" class="form-label">Pekerjaan</label>
                      <input type="text" class="form-control" id="pekerjaan" placeholder="Pekerjaan Kamu" name="pekerjaan" value="{{ Auth::user()->pekerjaan }}">
                  </div>
                  <div class="my-5 pb-5">
                    @if (Auth::user()->google_id)
                    <a type="button" href="{{ route('dashboard.profile.show.changeFoto') }}" class="btn btn-outline-primary">Ubah Foto Profile</a>
                    @else
                    <a type="button" href="{{ route('dashboard.profile.show.changePassword') }}" class="btn btn-outline-primary">Ubah Password</a>
                    <a type="button" href="{{ route('dashboard.profile.show.changeFoto') }}" class="btn btn-outline-primary">Ubah Foto Profile</a>
                    @endif
                  </div>
                  
              </div>
              <div class="col-6">
                  <div class="mb-3">
                      <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                      <select class="form-select" id="jenisKelamin" name="jenisKelamin">
                          <option hidden>Pilihan</option>
                          <option value="Laki-laki" @if (Auth::user()->jenisKelamin == 'Laki-Laki')
                              selected
                          @endif>Laki-laki</option>
                          <option value="Perempuan" @if (Auth::user()->jenisKelamin == 'Perempuan')
                              selected
                          @endif>Perempuan</option>
                      </select>
                  </div>
                  <div class="mb-3">
                      <label for="kota" class="form-label">Kota</label>
                      <input type="text" class="form-control" id="kota" name="domisili" placeholder="Masukkan Kota" value="{{ Auth::user()->domisili }}">
                  </div>
                  <div class="mb-3">
                      <label for="instansi" class="form-label">Instansi</label>
                      <input type="text" class="form-control" id="instansi" name="institusi" placeholder="Instansi Kamu" value="{{ Auth::user()->institusi }}">
                  </div>
                  <div class="my-5 pb-5">
                      <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
                  </div>
                </div>
              </div>
          </form>
      </div>
  </div>
</div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            flatpickr("#tanggalLahir", {
                dateFormat: "Y-m-d", // Format tanggal yang diinginkan
                locale: "id", // Lokal Bahasa Indonesia
                altInput: true, // Menggunakan input alternatif yang mudah diisi
                altFormat: "j F Y", // Format input alternatif
                allowInput: true, // Memungkinkan pengguna menginputkan tanggal langsung
                enableTime:false
            });
        });
    </script>
    
    
    
@include('../partials/footer') 
@endsection            
