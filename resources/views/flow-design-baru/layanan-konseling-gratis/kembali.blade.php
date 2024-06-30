@extends('../../layout')

@section('title', 'Selesai | AFEKSI')

@section('styles')
<link rel="stylesheet" href="/assets/css/flow-design-baru/hubungi-kembali.css">
@endsection

@section('content')
<div class="content-container container wrapper">
    <div class="d-flex justify-content-center">
        <div class="col-9 col-md-10 text-center p-0 mb-2">
            <div class="px-0 pt-4 mt-3 mb-3">
                <ul id="progressbar">
                    <!-- finish (background green), active (background blue) -->
                    <li class="finish" id="step" data-content="1">Pilih Konselor</li>
                    <li class="finish" id="step" data-content="2">Pilih Platform</li>
                    <li class="finish" id="step" data-content="3">Data Diri</li>
                    <li class="finish" id="step" data-content="4"><b>Detail Pemesanan</b></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="w-100 d-flex justify-content-center mb-5">
    <div class="card p-4 shadow">
        <div class="d-flex flex-column align-items-center">
            <img src="/assets/img/flow-design-baru/back.png" alt="img_card" class="img-card">
            <p class="text-2 text-center fw-bold my-3">Terima kasih telah mendaftar konsultasi! Kami akan mengingatkan Anda satu hari sebelum jadwal yang dipilih.</p>
            <div class="btn-container position-relative">
                <button class="btn-blue-2 fw-bold mb-3">Kembali ke Halaman Utama</button>
                <img class="icon-back position-absolute" src="/assets/img/flow-design-baru/icon-back.png" alt="img_icon_back">
            </div>
        </div>
    </div>
</div>
@include('../../partials/footer')
@endsection