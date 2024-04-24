@extends('../layout') 
@section('title', 'Dashboard Utama | AFEKSI')

<!-- path style disesuaikan dengan folder css masing-masing page -->
@section('styles')
<link rel="stylesheet" href="/assets/css/dashboard.css" />
@endsection 

@section('content')

<div class="row justify-content-end">
      <div class="col-12 position-relative">
        <!-- HERO
                ================================================================= -->
        <section>
          <div class="hero d-flex">
            <div class="container py-5 my-5">
              <div class="row justify-content-end">
                <div class="col-md-9 d-flex flex-column">
                  <h4 class="fw-semibold mt-5">
                    <span>Dashboard</span>
                  </h4>
                  <p class="fs-5 fw-light mt-3">
                    Bercerita dan Berbagi rasa. Tenangkan hati dan tenangkan diri.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Dashboard ============================== -->
        <div class="dashboard p-3 shadow-sm" >
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
      <div class="col-md-9 p-4 mb-3">
        @forelse ($dataProfesionalKonseling as $item)
              @if ($item->paket_profesional_conselings != null)
                <div class="card position-relative shadow-sm mb-3">

                    <div class="card-top d-flex row align-items-center">
                        <div class="py-3 px-4 col-4">
                            <div class="p-0">
                                <p class="m-0">Transaksi</p>
                                <span>{{ \Carbon\Carbon::parse($item->updated_at)->format('d F Y') }}</span>
                            </div>
                        </div>
                        <div class="py-3 px-4 col-4">
                            <div class="card-top-content py-0">
                                <p class="m-0">No invoice</p>
                                <span>{{ $item->ref_transaction_layanan }}</span>
                            </div>
                        </div>
                        <div class="py-3 px-4 col-4">
                            <div class="p-0">
                                <p class="m-0">Total Harga</p>
                                <span>Rp. {{ number_format($item->total_payment, 0,'.',',') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="card-middle d-flex px-4 py-3 gap-3 ">
                        <img src="assets/img/dashboard-profile/cardpic.png" alt="">
                        <div class="texts">
                            <p class="m-0">{{ $item->paket_profesional_conselings->nama_paket }}</p>
                            <span>{{ $item->paket_profesional_conselings->jumlah_sesi }} sesi</span>
                        </div>
                    </div>

                    <div class="card-bottom d-flex flex-column flex-lg-row align-items-center justify-content-between px-4 py-3">
                        <div class="card-bottom-content">
                            <span>Jadwal</span>
                            <p>{{ \Carbon\Carbon::parse($item->detail_pembayarans->tgl_konsultasi)->locale('id_ID')->format('d F Y') }} / {{ $item->detail_pembayarans->jam_konsultasi }} WIB</p>
                        </div>
                        <div class="card-bottom-content">
                            <span>Psikolog</span>
                            {{-- <p>{{ $item->psikolog->nama_psikolog }}</p> --}}
                        </div>
                        <div class="card-bottom-content">
                            <div class="btn btn-join me-2 py-2 px-3 rounded-3" style="background-color: #2139F9;">Join meeting</div>
                            <div class="btn btn-admin bg-secondary py-2 px-3 rounded-3">Hubungi admin</div>
                        </div>
                    </div>
                    
                </div>
             
              @elseif($item->paket_non_professionals != null)
                <div class="card position-relative shadow-sm mb-3">

                    <div class="card-top d-flex row align-items-center">
                        <div class="py-3 px-4 col-4">
                            <div class="p-0">
                                <p class="m-0">Transaksi</p>
                                <span>{{ \Carbon\Carbon::parse($item->updated_at)->format('d F Y') }}</span>
                            </div>
                        </div>
                        <div class="py-3 px-4 col-4">
                            <div class="card-top-content py-0">
                                <p class="m-0">No invoice</p>
                                <span>{{ $item->ref_transaction_layanan }}</span>
                            </div>
                        </div>
                        <div class="py-3 px-4 col-4">
                            <div class="p-0">
                                <p class="m-0">Total Harga</p>
                                <span>Rp. {{ number_format($item->total_payment, 0,'.',',') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="card-middle d-flex px-4 py-3 gap-3 ">
                        <img src="assets/img/dashboard-profile/cardpic.png" alt="">
                        <div class="texts">
                            <p class="m-0">{{ $item->paket_non_professionals->nama_paket }}</p>
                            <span>{{ $item->paket_non_professionals->jumlah_sesi }} 1 sesi</span>
                        </div>
                    </div>

                    <div class="card-bottom d-flex flex-column flex-lg-row align-items-center justify-content-between px-4 py-3">
                        <div class="card-bottom-content">
                            <span>Jadwal</span>
                            <p>{{ \Carbon\Carbon::parse($item->detail_pembayarans->tgl_konsultasi)->locale('id_ID')->format('d F Y') }} / {{ $item->detail_pembayarans->jam_konsultasi }} WIB</p>
                        </div>
                        <div class="card-bottom-content">
                            <span>Psikolog</span>
                            <p>{{ $item->psikolog->nama }}</p>
                        </div>
                        <div class="card-bottom-content">
                            <div class="btn btn-join me-2 py-2 px-3 rounded-3" style="background-color: #2139F9;">Join meeting</div>
                            <div class="btn btn-admin bg-secondary py-2 px-3 rounded-3">Hubungi admin</div>
                        </div>
                    </div>
                    
                </div>
              @endif

        @empty
               <center>
                <div class="m-5 p-5">
                  <img src="/assets/img/dashboard-profile/no_transaction.png" class="mb-5 img-fluid" width="70%" style="object-fit:cover">
                </div>
               </center>
        @endforelse
      </div>
    </div>

@include('../partials/footer')

<script>
        document.addEventListener("DOMContentLoaded", function () {
            flatpickr("#tanggalLahir", {
                dateFormat: "d/m/Y", // Format tanggal yang diinginkan
                locale: "id", // Lokal Bahasa Indonesia
                altInput: true, // Menggunakan input alternatif yang mudah diisi
                altFormat: "j F Y", // Format input alternatif
                allowInput: true // Memungkinkan pengguna menginputkan tanggal langsung
            });
        });
    </script>

@endsection
