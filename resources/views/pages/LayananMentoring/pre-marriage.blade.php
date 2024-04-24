@extends('../layout') 
@section('title', 'Pre-marriage | AFEKSI')

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
                <li class="breadcrumb-item active" aria-current="page">Pre - Marriage</li>
              </ol>
            </nav>
            <div class="text text-white mt-5">
              <h1 class="mb-4 fw-bold">Pre - Marriage</h1>
              <p class="fs-6">
                Pre-Marriage Mentoring di Afeksi adalah program yang dirancang khusus untuk pasangan yang akan menikah. Program ini memberikan
                bimbingan dan persiapan yang diperlukan untuk membangun dasar yang kuat dalam pernikahan mereka. Para mentor yang berpengalaman akan
                membantu pasangan dalam mengatasi tantangan dan masalah yang sering muncul dalam pernikahan, serta memberikan panduan untuk komunikasi
                yang sehat dan membangun hubungan yang langgeng.
              </p>
            </div>
            <a href="/mentoring/{{ $slug }}/pilih-paket-yang-diinginkan" type="button" class="btn btn-join mt-3 fw-bold">Pilih Paket</a>
          </div>
          <div class="col-lg-3 m-3">
            <img class="hero-image" src="assets/img/parenting-mentoring/heropre.png" />
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
        <p class="text-muted mb-3">
          Program Pre-Marriage Mentoring membahas berbagai masalah yang sering dihadapi oleh pasangan yang akan menikah, termasuk:
        </p>
      </div>

      <div class="row g-5 mb-3 mt-1">
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-masalah" style="background-color: #5a74fd">
            <div class="card-body text-white">
              <div class="d-flex flex-column justify-content-start align-items-start white">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/parenting-mentoring/komunikasi.png" alt="Komunikasi" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Komunikasi</h5>
                <p class="card-text mt-3">
                  Membantu pasangan dalam meningkatkan keterampilan komunikasi mereka, sehingga mereka dapat berbicara terbuka dan efektif satu sama
                  lain.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-masalah" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start white">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/parenting-mentoring/konflik.png" alt="konflik" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Konflik</h5>
                <p class="card-text mt-3">Memberikan strategi untuk mengatasi konflik dan pertengkaran dengan cara yang sehat dan konstruktif.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-masalah" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/parenting-mentoring/perbedaan.png" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Perbedaan</h5>
                <p class="card-text mt-3">Mengatasi perbedaan nilai, kepercayaan, dan ekspektasi yang mungkin timbul dalam pernikahan.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-masalah" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/parenting-mentoring/keuangan.png" alt="keaungan" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Manajemen Keuangan</h5>
                <p class="card-text mt-3">
                  Memberikan panduan tentang bagaimana mengelola keuangan bersama-sama dan merencanakan masa depan finansial yang stabil.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-masalah" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/parenting-mentoring/intimasi.png" alt="Intimasi" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Intimasi</h5>
                <p class="card-text mt-3">Membantu pasangan dalam membangun kedekatan fisik dan emosional dalam pernikahan mereka.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-masalah" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/parenting-mentoring/tanggungjwab.png" alt="Tanggung jawab" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Peran dan Tanggung Jawab</h5>
                <p class="card-text mt-3">Membahas peran dan tanggung jawab masing-masing pasangan dalam pernikahan.</p>
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
