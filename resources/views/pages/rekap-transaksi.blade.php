
@extends('../layout') 
@section('title', 'Rekap Transaksi Dashboard | AFEKSI')


@section('styles')

<link rel="stylesheet" href="/assets/css/rekap-transaksi.css" />
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
                    <span>Rekap Transaksi</span>
                  </h4>
                  <p class="fs-5 fw-light mt-3">
                    Anda dapat melihat semua rekap transaksi anda di sini.
                  </p>
                </div>
            </div>
          </div>
        </section>
        <!-- Dashboard ============================== -->
        <div class="dashboard p-3 shadow-sm mb-5" >
          <div class="bg-light rounded-circle d-flex justify-content-center align-items-center border" id="profile-foto" style="width: 125px; height: 125px;cursor:pointer;">
                @if (Auth::user()->avatar)
                    <img src ="/assets/img/profile/{{Auth()->user()->avatar }}" class="rounded-circle"  width="125x" height="125px">
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
      <!-- CARD -->
        <div class="col-md-9 p-4 mt-3" style="position:relative; top:-60px">
            <div class="card p-1">
                <div class="row m-2 justify-content-center">
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0">
                            <i class="bi bi-search border-end-0"></i>
                            </span>
                            <input type="search" class="form-control border-start-0" placeholder="Cari Transaksi">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0">
                            <i class="bi bi-clock border-end-0"></i>
                            </span>
                            <select type="search" class="form-select border-start-0" placeholder="Status Transaksi">
                                <option value="" selected disabled>Status Transaksi</option>
                                <option value="selesai">Selesai</option>
                                <option value="gagal">Gagal</option>
                                <option value="menunggu">Menunggu Pembayaran</option>
                            </select>                              
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0">
                            <i class="bi bi-calendar3 border-end-0"></i>
                            </span>
                            <input type="search" class="form-control border-start-0" placeholder="Tanggal">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex">
                            <button class="btn btn-primary temukan-btn me-1">Find</button>
                            <button class="btn btn-outline-primary">All Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- End of dashboard profile  ===================================-->
      <div class="col-md-9 p-4" style="min-height: 90vh;margin-top:-80px">
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
                        <div class="py-3 px-4 col-4 text-center">
                            <div class="p-0">
                                <p class="status @if($item->status == 'PAID') selesai @elseif($item->status == 'PENDING' || $item->status == 'UNPAID(BUTUH BAYAR)') menunggu @else gagal @endif ">
                                  @if($item->status == 'PAID') Selesai @elseif($item->status == 'PENDING') Menunggu Pembayaran @elseif($item->status == 'UNPAID(BUTUH BAYAR)') Langkapi Metode Pembayaran @elseif($item->status == 'EXPIRED') Gagal @endif
                                  </p>                      
                            </div>
                        </div>
                    </div>

                    <div class="card-middle d-flex px-4 py-3 gap-3 ">
                        <img src="assets/img/dashboard-profile/cardpic.png" alt="">
                        <div class="texts">
                            <p class="m-0">[{{ $item->paket_profesional_conselings->professional_conseling->jenis_layanan }}] Paket - {{ $item->paket_profesional_conselings->nama_paket }} - {{ $item->paket_profesional_conselings->professional_conseling->namaPengalaman }}</p>
                            <span>{{ $item->paket_profesional_conselings->jumlah_sesi }} sesi</span>
                        </div>
                    </div>

                    <div class="card-bottom d-flex flex-column flex-lg-row align-items-center justify-content-between px-4 py-3">
                        <div class="card-bottom-content">
                            <span>Jadwal</span>
                            <p>{{ \Carbon\Carbon::parse($item->detail_pembayarans->tgl_konsultasi)->locale('id_ID')->format('d F Y') }} / {{ $item->detail_pembayarans->jam_konsultasi }} WIB</p>
                        </div>
                        <div class="card-bottom-content">
                            <span>Konselor</span>
                            <p>{{ $item->konselor->nama }}</p>
                        </div>
                        <div class="card-bottom-content">
                            @if($item->status == 'PAID') 
                                <a href="#" class="btn btn-join me-2 py-2 px-3 rounded-3" style="background-color: #2139F9;">Detail Produk</a>
                            @elseif($item->status == 'PENDING' || $item->status == 'UNPAID(BUTUH BAYAR)') 
                                @if ($item->status == 'UNPAID(BUTUH BAYAR)')
                                    <a href="{{  route('professional.konseling.checkout', $item->ref_transaction_layanan) }}" class="btn btn-join me-2 py-2 px-3 rounded-3" style="background-color: #2139F9;">Lanjutkan</a>
                                    <a href="#" class="btn btn-join me-2 py-2 px-3 rounded-3" style="background-color: #D60F27;">Batalkan</a>
                                    <a href="https://wa.me/6282142625552" class="btn btn-admin bg-secondary py-2 px-3 rounded-3">Hubungi admin</a>
                                @elseif($item->status == 'PENDING')
                                    <a href="#" class="btn btn-join me-2 py-2 px-3 rounded-3" style="background-color: #F9D770;">Pending</a>
                                    <a href="https://wa.me/6282142625552" class="btn btn-admin bg-secondary py-2 px-3 rounded-3">Hubungi admin</a>    
                                @endif
                            @elseif($item->status == 'EXPIRED') 
                              <a href="https://wa.me/6282142625552" class="btn btn-admin bg-secondary py-2 px-3 rounded-3">Hubungi admin</a>
                            @endif
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
                        <div class="py-3 px-4 col-4 text-center">
                            <div class="p-0">
                                <p class="status @if($item->status == 'PAID') selesai @elseif($item->status == 'PENDING' || $item->status == 'UNPAID(BUTUH BAYAR)') menunggu @else gagal @endif ">
                                  @if($item->status == 'PAID') Selesai @elseif($item->status == 'PENDING') Menunggu Pembayaran @elseif($item->status == 'UNPAID(BUTUH BAYAR)') Lengkapi Metode Pembayaran @elseif($item->status == 'EXPIRED') Gagal @endif
                                  </p>                        
                            </div>
                        </div>
                    </div>

                    <div class="card-middle d-flex px-4 py-3 gap-3 ">
                        <img src="assets/img/dashboard-profile/cardpic.png" alt="">
                        <div class="texts">
                            <p class="m-0">[{{ $item->paket_non_professionals->layanan_non_professionals->jenis_layanan }}] {{ $item->paket_non_professionals->nama_paket }} - {{ $item->paket_non_professionals->layanan_non_professionals->nama_layanan  }} </p>
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
                            @if($item->status == 'PAID')
                                <a href="#" class="btn btn-join me-2 py-2 px-3 rounded-3" style="background-color: #2139F9;">Detail Produk</a>
                            @elseif($item->status == 'PENDING' || $item->status == 'UNPAID(BUTUH BAYAR)') 
                                @if ($item->status == 'UNPAID(BUTUH BAYAR)')
                                    <a href="{{ route('checkout.layanan.mentoring', $item->ref_transaction_layanan) }}" class="btn btn-join me-2 py-2 px-3 rounded-3" style="background-color: #2139F9;">Lanjutkan</a>
                                    <a href="#" class="btn btn-join me-2 py-2 px-3 rounded-3" style="background-color: #D60F27;">Batalkan</a>
                                @elseif($item->status == 'PENDING')
                                    <a href="#" class="btn btn-join me-2 py-2 px-3 rounded-3" style="background-color: #F9D770;">Pending</a>    
                                @endif
                                <a href="https://wa.me/6282142625552" class="btn btn-admin bg-secondary py-2 px-3 rounded-3">Hubungi admin</a>
                            @elseif($item->status == 'EXPIRED') 
                              <a href="https://wa.me/6282142625552" class="btn btn-admin bg-secondary py-2 px-3 rounded-3">Hubungi admin</a>
                            @endif
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

@endsection