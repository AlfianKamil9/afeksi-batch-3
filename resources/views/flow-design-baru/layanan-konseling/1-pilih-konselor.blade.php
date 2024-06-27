@extends('../../layout')

@section('title', 'Pilih Konselor | AFEKSI')

@section('styles')
<link rel="stylesheet" href="/assets/css/flow-design-baru/konselor.css">
@endsection

@section('content')
<div class="content-container container wrapper">
    <div class="d-flex justify-content-center">
        <div class="col-9 col-md-10 text-center p-0 mb-2">
            <div class="px-0 pt-4 mt-3 mb-3">
                <ul id="progressbar">
                    <!-- finish (background green), active (background blue) -->
                    <li class="active" id="step" data-content="1">Pilih Konselor</li>
                    <li id="step" data-content="2">Pilih Platform</li>
                    <li id="step" data-content="3">Data Diri</li>
                    <li id="step" data-content="4">Detail Pemesanan</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="px-5 pb-5">
    <p class="fw-bold font-head mb-0">Pilih Konselor Layanan Peers Konseling</p>
    <p class="font-s mb-0">Temukan Konselor yang Tepat untuk Anda. Jelajahi Profil dan Spesialisasi untuk Mendapatkan Dukungan yang Anda Butuhkan.</p>
    <div class="container-fluid">
        <div class="row row-cols-3 gap-5 justify-content-center mt-5">
            @foreach ($konselors as $konselor)
            <div class="card col p-0">
                <img class="img-konselor" src="/assets/img/flow-design-baru/konselor.png" alt="img_konselor">
                <div class="py-2">
                    <div class="intro p-0">
                        <div class="px-3">
                            <p class="font-head2 fw-bold mb-1">{{ $konselor->nama_konselor }}</p>
                            <p class="font-ss mb-1">Sarjana Psikologi ITB</p>
                        </div>
                    </div>
                    <div class="px-3 mt-1">
                        <div class="d-flex">
                            <p class="font-ss">Jadwal Praktik :</p>
                            <div class="ms-1">
                                <p class="font-ss mb-1">Senin, 15.00 WIB - 18.00 WIB</p>
                                <p class="font-ss m-0">Rabu, 15.00 WIB - 18.00 WIB</p>
                            </div>
                        </div>
                        <div class="d-flex mt-1">
                            <div class="row row-w">
                                <p class="font-ss mb-0">Isu</p>
                                <p class="font-ss mb-0">Instagram</p>
                            </div>
                            <div class="content-konselor">
                                <p class="font-ss mb-0">: Kesehatan Mental</p>
                                <p class="font-ss mb-0">: {{ $konselor->instagram }}</p>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('peers-new.process-pilih-konselor', $ref ) }}" method="post">
                    @csrf
                        <div class="d-flex justify-content-center">
                            <button type="submit" name="konselor_id" value="{{ $konselor->id }}" class="btn-blue font-ss fw-semi-bold mt-2 px-5 py-2">Pilih Konselor</button>
                        </div>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@include('../../partials/footer')
@endsection