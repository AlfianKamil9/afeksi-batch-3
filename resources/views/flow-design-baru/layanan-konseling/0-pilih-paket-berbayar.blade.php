@extends('../../layout')

@section('title', 'Data Diri | AFEKSI')

@section('styles')
<link rel="stylesheet" href="/assets/css/flow-design-baru/pilih-paket-berbayar.css">
@endsection

@section('content')
<div class="content-container container wrapper">
    <div class="d-flex justify-content-center">
        <div class="col-9 col-md-10 text-center p-0 mb-2">
            <div class="px-0 pt-4 mt-3 mb-3">
                <ul id="progressbar">
                    <li class="active" id="step" data-content="1">Pilih Konselor</li>
                    <li id="step" data-content="2">Pilih Platform</li>
                    <li id="step" data-content="3">Data Diri</li>
                    <li id="step" data-content="4">Detail Pemesanan</li>
                    <li id="step" data-content="5">Pembayaran</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="px-3 px-md-5 pb-5">
    <div class="container-fluid mb-1">
        <p class="fw-bold font-head mb-0">Pilih Paket Layanan Konseling Peers Konseling </p>
        <p class="font-s mb-0">Pilih Paket Single untuk Layanan Pribadi atau Paket Pasangan untuk Mendapatkan Dukungan Bersama dengan Pasangan Anda.</p>
    </div>

    <div class="container-fluid my-1">
        <div class="row">
            @foreach ($paket as $paket)    
            <div class="col-lg-6 col-md-12">
                <div class="package-card">
                    <form action="{{ route('peers-new.pilih-paket-berbayar') }}" method="post">
                    @csrf
                    <div>
                        <h4 class="fw-bold pt-3 pt-md-0">{{ $paket->nama_paket }}</h4>
                        <p>{{ $paket->headline_paket }}</p>
                        <div class="package-price mb-3">
                            <span class="price-amount">Rp {{ number_format($paket->harga_paket, 0,',', '.' ) }}</span>
                            <span class="price-session">/ Sesi</span>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex gap-lg-3 gap-2 align-items-center pb-2">
                                <div class="p-2 bg-info-subtle rounded-circle">
                                    <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="12" height="12" focusable="false" viewBox="0 0 12 12">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 7l3 3 7-7" />
                                    </svg>
                                </div>
                                <p class="mb-0 text-dark text-start">Durasi: {{ $paket->durasi_paket }} menit</p>
                            </div>
                            <div class="d-flex gap-lg-3 gap-2 align-items-center">
                                <div class="p-2 bg-info-subtle rounded-circle">
                                    <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="12" height="12" focusable="false" viewBox="0 0 12 12">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 7l3 3 7-7" />
                                    </svg>
                                </div>
                                <p class="mb-0 text-dark text-start">{{ $paket->deskripsi_paket }}</p>
                            </div>
                            <button name="paket_id" value="{{ $paket->id }}" type="submit" class="mt-4 p-2 rounded-4 bg-primary text-white border-0">Pilih Paket</button>
                        </div>
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
