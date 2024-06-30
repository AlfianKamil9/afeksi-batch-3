@extends('../../layout')

@section('title', 'Hubungi Admin | AFEKSI')

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
            <img src="/assets/img/flow-design-baru/admin.png" alt="" class="img-card">
            <p class="text text-center fw-bold my-3">Silahkan hubungi admin untuk pemesanan jadwal</p>
            <button class="btn-blue fw-bold mb-3">Hubungi Admin</button>
        </div>
    </div>
</div>
@include('../../partials/footer')
@endsection