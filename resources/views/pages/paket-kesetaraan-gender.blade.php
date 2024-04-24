@extends('../layout') 

@section('title', 'junior psikolog') 

@section('styles')
<link rel="stylesheet" href="assets/css/pilihpaket.css" />
<link rel="stylesheet" href="assets/css/stepper.css" />
@endsection 

@include('../partials/navbar-new') 

@section('content')
<div class="container">
  <div class="container" style="padding-top: calc(70px + 94px)">
    <div class="position-relative">
      <div class="stepper-wrapper">
        <div class="stepper-item completed">
          <!-- add class COMPLETED to enable checklist -->
          <div class="step-counter">
            <span class="step-checkmark">✓</span>
          </div>
          <div class="step-name text-center">
            Pilih <br />
            Pengalaman Psikologi
          </div>
        </div>
        <div class="stepper-item active">
          <div class="step-counter">
            <span class="step-checkmark">✓</span>
          </div>
          <div class="step-name">Pilih Paket</div>
        </div>
        <div class="stepper-item">
          <div class="step-counter">
            <span class="step-checkmark">3</span>
          </div>
          <div class="step-name">Data Diri</div>
        </div>
        <div class="stepper-item">
          <!--add class active to enable active step progess-->
          <div class="step-counter">
            <span class="step-checkmark">4</span>
          </div>
          <div class="step-name">Pembayaran</div>
        </div>
      </div>
    </div>
  </div>
  <h5 class="fw-bold mt-5">Pilih Paket Layanan Konseling Kesetaraan Gender</h5>
  <p class="text-secondary sub">
  Kami berharap bahwa layanan Konseling <span>Kesetaraan Gender</span> kami akan membantu setiap orang memahami, menghormati, dan merayakan kesetaraan gender serta menciptakan <span>hubungan</span> yang lebih <span>seimbang</span> dan <span>setara</span>.
  </p>
  <div class="row mb-5">
    <div class="col-lg-6 p-2">
      <div class="box rounded-3 shadow p-3">
        <h5>Sesi Konseling Individu</h5>
        <p class="text-secondary">Sesi konseling individu dengan seorang konselor berlisensi yang berspesialisasi dalam isu kesetaraan gender.</p>
        <div class="d-flex align-items-center gap-2">
          <h1 class="lg m-0">Rp 150.000</h1>
          <p class="sm m-0">/ Sesi</p>
        </div>
        <div class="mt-4">
          <div class="d-flex align-items-center gap-2 mb-2">
            <img src="assets/img/pilih-paket/Frame 74.svg" alt="" />
            <p class="m-0">Durasi: 60 menit</p>
          </div>
          <div class="d-flex align-items-center gap-2">
            <img src="assets/img/pilih-paket/Frame 74.svg" alt="" />
            <p class="m-0">Diskusi mendalam tentang peran gender dalam kehidupan individu.</p>
          </div>
        </div>
        <div class="mt-4 rounded-5 btn text-white btn-pilih">Pilih paket</div>
      </div>
    </div>
    <div class="col-lg-6 p-2">
      <div class="box rounded-3 shadow p-3">
        <h5>Sesi Konseling Pasangan</h5>
        <p class="text-secondary">Sesi konseling pasangan dengan seorang konselor berlisensi yang berpengalaman dalam mendukung hubungan yang seimbang dan setara.</p>
        <div class="d-flex align-items-center gap-2">
          <h1 class="lg m-0">Rp 250.000</h1>
          <p class="sm m-0">/ Sesi</p>
        </div>
        <div class="mt-4">
          <div class="d-flex align-items-center gap-2 mb-2">
            <img src="assets/img/pilih-paket/Frame 74.svg" alt="" />
            <p class="m-0">Durasi: 75 menit</p>
          </div>
          <div class="d-flex align-items-center gap-2">
            <img src="assets/img/pilih-paket/Frame 74.svg" alt="" />
            <p class="m-0">Fokus pada pemahaman dan penerapan kesetaraan gender dalam hubungan.</p>
          </div>
        </div>
        <div class="mt-4 rounded-5 btn text-white btn-pilih">Pilih paket</div>
      </div>
    </div>
    <div class="col-lg-6 p-2">
      <div class="box rounded-3 shadow p-3">
        <h5>Sesi Kelompok Kesetaraan Gender</h5>
        <p class="text-secondary">Sesi konseling dalam kelompok dengan peserta lain yang memiliki minat dalam isu kesetaraan gender.</p>
        <div class="d-flex align-items-center gap-2">
          <h1 class="lg m-0">Rp 75.000</h1>
          <p class="sm m-0">/ Peserta</p>
        </div>
        <div class="mt-4">
          <div class="d-flex align-items-center gap-2 mb-2">
            <img src="assets/img/pilih-paket/Frame 74.svg" alt="" />
            <p class="m-0">Durasi: 90 menit</p>
          </div>
          <div class="d-flex align-items-center gap-2">
            <img src="assets/img/pilih-paket/Frame 74.svg" alt="" />
            <p class="m-0">Diskusi terbuka dan berbagi pengalaman tentang kesetaraan gender.</p>
          </div>
        </div>
        <div class="mt-4 rounded-5 btn text-white btn-pilih">Pilih paket</div>
      </div>
    </div>
    <div class="col-lg-6 p-2">
      <div class="box rounded-3 shadow p-3">
        <h5>Paket Bulanan Kesetaraan Gender</h5>
        <p class="text-secondary">Sesi konseling dengan seorang konselor berlisensi yang berpengalaman dalam mendukung hubungan yang seimbang dan setara.</p>
        <div class="d-flex align-items-center gap-2">
          <h1 class="lg m-0">Rp 400.000</h1>
          <p class="sm m-0">/ Bulan</p>
        </div>
        <div class="mt-4">
          <div class="d-flex align-items-center gap-2 mb-2">
            <img src="assets/img/pilih-paket/Frame 74.svg" alt="" />
            <p class="m-0">Akses ke 4 sesi Konseling Kesetaraan Gender selama sebulan (satu sesi per minggu).</p>
          </div>
          <div class="d-flex align-items-center gap-2">
            <img src="assets/img/pilih-paket/Frame 74.svg" alt="" />
            <p class="m-0">Fleksibilitas untuk memilih sesi individu, sesi pasangan, atau sesi kelompok.</p>
          </div>
        </div>
        <div class="mt-4 rounded-5 btn text-white btn-pilih">Pilih paket</div>
      </div>
    </div>
  </div>
</div>

@include('../partials/footer') @endsection
