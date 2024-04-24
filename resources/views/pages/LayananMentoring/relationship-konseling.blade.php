@extends('../layout') @section('title', 'Relationship Mentoring | AFEKSI')

<!-- path style disesuaikan dengan folder css masing-masing page -->
@section('styles')
<link rel="stylesheet" href="assets/css/parenting-mentoring.css" />
@endsection  

@section('content')
<div class="mb-5 text-white position-relative">
      <div class="hero">
        <div class="container d-flex justify-content-between flex-column flex-lg-row gap-5 text-center text-lg-start">
          <div class="left col-lg-7">
            <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('mentoring') }}">Mentoring</a></li>
                <li class="breadcrumb-item active" aria-current="page">Relationship Konseling</li>
              </ol>
            </nav>
            <div class="text text-white mt-5">
              <h1 class="mb-4 fw-bold">Relationship Konseling</h1>
              <p class="fs-6">
                Layanan Konseling Hubungan di Afeksi adalah salah satu pilar utama dari layanan kami yang didedikasikan untuk membantu individu dan pasangan membangun hubungan yang sehat, harmonis, dan berkelanjutan. Layanan ini dirancang
                untuk memberikan pemahaman, dukungan, dan alat yang diperlukan untuk mengatasi masalah yang mungkin muncul dalam hubungan, serta memperkuat ikatan antarindividu dan pasangan.
              </p>
            </div>
            <a href="/mentoring/{{ $slug }}/pilih-paket-yang-diinginkan" type="button" class="btn btn-join mt-3 fw-bold">Pilih Paket</a>
          </div>
          <div class="col-lg-4 m-3">
            <img class="hero-image" src="assets/img/relationship-konseling/hero-img.png" />
          </div>
        </div>
      </div>
    </div>

    <!-- End HEADER -->

    <!-- MASALAH SECTION -->
    <div class="container mb-5">
      <img class="background-masalah" src="assets/img/relationship-konseling/Frame 1501.png" alt="" />
      <div class="col d-grid justify-content-center text-center">
        <h4 class="fw-bold mt-4" style="color: #233dff">Masalah Yang Dibahas</h4>
        <p class="text-muted mb-3">
          Layanan Konseling Hubungan di Afeksi adalah pendekatan profesional yang bertujuan untuk membantu individu atau pasangan dalam memahami, mengatasi, dan mengatasi tantangan yang dapat memengaruhi kualitas hubungan mereka. Layanan
          ini mencakup berbagai aspek, termasuk.
        </p>
      </div>

      <div class="row g-5 mb-3 mt-1">
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-masalah" style="background-color: #5a74fd">
            <div class="card-body text-white">
              <div class="d-flex flex-column justify-content-start align-items-start white">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/relationship-konseling/box-1.png" alt="Pemahaman Hubungan" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Pemahaman Hubungan</h5>
                <p class="card-text mt-3">
                  Kami membantu individu atau pasangan untuk memahami dinamika kompleks dalam hubungan mereka, mengidentifikasi faktor-faktor yang memengaruhi kualitas hubungan, dan mengidentifikasi area yang memerlukan perhatian lebih.
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
                  <img src="assets/img/relationship-konseling/box-2.png" alt="Konseling Pribadi" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Konseling Pribadi</h5>
                <p class="card-text mt-3">Layanan ini memberikan kesempatan bagi individu untuk mengeksplorasi perasaan, kebutuhan, dan harapan mereka dalam hubungan. Ini melibatkan pemahaman diri yang lebih dalam.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-masalah" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/relationship-konseling/box-3.png" alt="Konseling Pasangan" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Konseling Pasangan</h5>
                <p class="card-text mt-3">Untuk pasangan, kami menyediakan konseling yang memungkinkan mereka berbicara terbuka, berkomunikasi dengan lebih baik, dan mengatasi konflik dengan cara yang sehat dan produktif.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-masalah" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/relationship-konseling/box-4.png" alt="Pengembangan Keterampilan" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Pengembangan Keterampilan</h5>
                <p class="card-text mt-3">Kami bekerja sama dengan individu atau pasangan untuk mengembangkan keterampilan penting seperti komunikasi efektif, pemecahan masalah, dan manajemen konflik.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-masalah" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/relationship-konseling/box-5.png" alt="Membangun Intimasi" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Membangun Intimasi</h5>
                <p class="card-text mt-3">Kami membantu pasangan dalam membangun dan memelihara tingkat kedekatan, keintiman, dan kepercayaan yang sehat dalam hubungan mereka.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-masalah" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/relationship-konseling/box-6.png" alt="Perencanaan Masa Depan" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Gaji Kompetitif</h5>
                <p class="card-text mt-3">Layanan ini juga mencakup perencanaan untuk masa depan, termasuk perencanaan keluarga, pernikahan, atau langkah-langkah untuk menjaga hubungan yang kuat.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-masalah" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/relationship-konseling/box-7.png" alt="Dukungan Emosional" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Dukungan Emosional</h5>
                <p class="card-text mt-3">Kami menyediakan tempat yang aman dan mendukung bagi individu atau pasangan untuk berbicara tentang perasaan mereka dan menghadapi tantangan dalam hubungan.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded-4 p-3 border-0 shadow card-masalah" style="background-color: #fafafa">
            <div class="card-body">
              <div class="d-flex flex-column justify-content-start align-items-start">
                <div class="justify-content-lg-start mb-4 mt-2">
                  <img src="assets/img/relationship-konseling/box-8.png" alt="Privasi dan Keamanan" class="card-img" />
                </div>
                <h5 class="card-title fw-semibold">Privasi dan Keamanan</h5>
                <p class="card-text mt-3">Kerahasiaan dan keamanan informasi pribadi adalah prioritas kami, sehingga individu merasa nyaman dan aman dalam berbicara tentang isu-isu yang sensitif.</p>
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
              <img src="assets/img/relationship-konseling/slider-profile.png" alt="" style="width: 50px" />
              <h4>Nama Client</h4>
              <p>Psikolog</p>
              <span>Sangat Rekomendasi Psikolog di Afeksi ini, karena masalah saya cepat teratasi dengan konsultasi dengan psikolog dari afeksi</span>
            </div>
            <div class="swiper-slide">
              <img src="assets/img/relationship-konseling/slider-profile.png" alt="" style="width: 50px" />
              <h4>Nama Client</h4>
              <p>Psikolog</p>
              <span>Sangat Rekomendasi Psikolog di Afeksi ini, karena masalah saya cepat teratasi dengan konsultasi dengan psikolog dari afeksi</span>
            </div>
            <div class="swiper-slide">
              <img src="assets/img/relationship-konseling/slider-profile.png" alt="" style="width: 50px" />
              <h4>Nama Client</h4>
              <p>Psikolog</p>
              <span>Sangat Rekomendasi Psikolog di Afeksi ini, karena masalah saya cepat teratasi dengan konsultasi dengan psikolog dari afeksi</span>
            </div>
            <div class="swiper-slide">
              <img src="assets/img/relationship-konseling/slider-profile.png" alt="" style="width: 50px" />
              <h4>Nama Client</h4>
              <p>Psikolog</p>
              <span>Sangat Rekomendasi Psikolog di Afeksi ini, karena masalah saya cepat teratasi dengan konsultasi dengan psikolog dari afeksi</span>
            </div>
            <div class="swiper-slide">
              <img src="assets/img/relationship-konseling/slider-profile.png" alt="" style="width: 50px" />
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
