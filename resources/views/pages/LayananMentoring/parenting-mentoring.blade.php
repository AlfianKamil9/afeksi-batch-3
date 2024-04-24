@extends('../layout')
 @section('title', 'Parenting Mentoring | AFEKSI')

<!-- path style disesuaikan dengan folder css masing-masing page -->
@section('styles')
<link rel="stylesheet" href="/assets/css/parenting-mentoring.css" />
@endsection 

@section('content')


<div class="mb-5 text-white position-relative">
      <div class="hero">
        <div class="container d-flex justify-content-between flex-column flex-lg-row gap-5 text-center text-lg-start">
          <div class="left col-lg-7">
            <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('mentoring') }}">Mentoring</a></li>
                <li class="breadcrumb-item active" aria-current="page">Parenting Mentoring</li>
              </ol>
            </nav>
            <div class="text text-white mt-5">
              <h1 class="mb-4 fw-bold">Parenting Mentoring</h1>
              <p class="fs-6">
                Parenting Mentoring di Afeksi adalah program khusus yang dirancang untuk membantu ibu baru dalam menghadapi perubahan dan tantangan yang datang dengan kehadiran bayi baru dalam keluarga. Program ini tidak hanya memberikan
                dukungan untuk ibu, tetapi juga memberikan panduan tentang perawatan bayi dan perkembangannya.
              </p>
            </div>
            <a href="/mentoring/{{ $slug }}/pilih-paket-yang-diinginkan" type="button" class="btn btn-join mt-3 fw-bold">Pilih Paket</a>
          </div>
          <div class="col-lg-3 m-3">
            <img class="hero-image" src="assets/img/parenting-mentoring/hero-img.png" />
          </div>
        </div>
      </div>
    </div>

    <!-- End HEADER -->

    <!-- MASALAH SECTION -->
    <div class="container mb-5">
      <img class="background-masalah" src="assets/img/parenting-mentoring/Frame 1501.png " alt="" />
      <div class="col d-grid justify-content-center text-center">
        <h4 class="fw-bold mt-4" style="color: #233dff">Masalah Yang Dibahas</h4>
        <p class="text-muted mb-3">Program Mom & Baby Mentoring adalah sumber dukungan penting bagi ibu baru yang ingin merasa lebih percaya diri dalam menghadapi peran barunya sebagai ibu dan memberikan yang terbaik untuk bayinya.</p>
      </div>

      <div class="row g-5 mb-3 mt-1">
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-masalah" style="background-color: #5a74fd">
            <div class="card-body text-white">
              <div class="d-flex flex-column justify-content-start align-items-start white">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/parenting-mentoring/box-1.png" alt="Baby Care" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Baby Care</h5>
                <p class="card-text mt-3">Memberikan panduan tentang perawatan bayi, seperti menyusui, mengganti popok, dan tidur bayi.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-masalah" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start white">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/parenting-mentoring/box-2.png" alt="Postpartum" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Postpartum</h5>
                <p class="card-text mt-3">Mendukung ibu dalam mengatasi perubahan fisik dan emosional yang terjadi setelah melahirkan.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-masalah" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/parenting-mentoring/box-3.png" alt="Kesehatan dan Nutrisi" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Kesehatan dan Nutrisi</h5>
                <p class="card-text mt-3">Memberikan informasi tentang nutrisi yang penting selama masa menyusui dan pemulihan pasca melahirkan.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-masalah" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/parenting-mentoring/box-4.png" alt="Manajemen Waktu" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Manajemen Waktu</h5>
                <p class="card-text mt-3">Membantu ibu dalam mengatur waktu dengan efisien untuk mengatasi perawatan bayi dan kebutuhan pribadi.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-masalah" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/parenting-mentoring/box-5.png" alt="Dukungan Emosi" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Dukungan Emosi</h5>
                <p class="card-text mt-3">Kami menyediakan tempat yang aman dan mendukung bagi individu atau pasangan untuk berbicara tentang perasaan mereka dan menghadapi tantangan dalam hubungan.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END MASALAH SECTION -->

    <!-- slider -->
    <div class="contents px-lg-5 px-4 mb-5">
      <div class="slide-container px-lg-2 swiper">
        <h2 class="fw-bold text-white">Apa Kata Mereka Tentang Afeksi</h2>
        <div class="slide-content">
          <div class="card-wrapper swiper-wrapper">
            <div class="swiper-slide">
              <img src="assets/img/parenting-mentoring/slider-profile.png" alt="" style="width: 50px" />
              <h4>Nama Client</h4>
              <p>Psikolog</p>
              <span>Sangat Rekomendasi Psikolog di Afeksi ini, karena masalah saya cepat teratasi dengan konsultasi dengan psikolog dari afeksi</span>
            </div>
            <div class="swiper-slide">
              <img src="assets/img/parenting-mentoring/slider-profile.png" alt="" style="width: 50px" />
              <h4>Nama Client</h4>
              <p>Psikolog</p>
              <span>Sangat Rekomendasi Psikolog di Afeksi ini, karena masalah saya cepat teratasi dengan konsultasi dengan psikolog dari afeksi</span>
            </div>
            <div class="swiper-slide">
              <img src="assets/img/parenting-mentoring/slider-profile.png" alt="" style="width: 50px" />
              <h4>Nama Client</h4>
              <p>Psikolog</p>
              <span>Sangat Rekomendasi Psikolog di Afeksi ini, karena masalah saya cepat teratasi dengan konsultasi dengan psikolog dari afeksi</span>
            </div>
            <div class="swiper-slide">
              <img src="assets/img/parenting-mentoring/slider-profile.png" alt="" style="width: 50px" />
              <h4>Nama Client</h4>
              <p>Psikolog</p>
              <span>Sangat Rekomendasi Psikolog di Afeksi ini, karena masalah saya cepat teratasi dengan konsultasi dengan psikolog dari afeksi</span>
            </div>
            <div class="swiper-slide">
              <img src="assets/img/parenting-mentoring/slider-profile.png" alt="" style="width: 50px" />
              <h4>Nama Client</h4>
              <p>Psikolog</p>
              <span>Sangat Rekomendasi Psikolog di Afeksi ini, karena masalah saya cepat teratasi dengan konsultasi dengan psikolog dari afeksi</span>
            </div>
          </div>
        </div>

        <div class="swiper-pagination"></div>
        <!-- If we need navigation buttons -->

        <div class="s-btn swiper-button-prev"></div>
        <div class="s-btn swiper-button-next"></div>
      </div>
    </div>
    <!-- slider end -->

@include('../partials/footer')

@section('script')
   <script src="assets/js/landingpage.js"></script>
@endsection

@endsection
