@extends('../../layout')

@section('title', 'Data Diri | AFEKSI')

@section('styles')
<link rel="stylesheet" href="/assets/css/flow-design-baru/data-diri.css">
@endsection

@section('content')
<div class="content-container container wrapper">
    <div class="d-flex justify-content-center">
        <div class="col-9 col-md-10 text-center p-0 mb-2">
            <div class="px-0 pt-4 mt-3 mb-3">
                <ul id="progressbar">
                    <li class="finish" id="step" data-content="1">Pilih Konselor</li>
                    <li class="finish" id="step" data-content="2">Pilih Platform</li>
                    <li class="active" id="step" data-content="3">Data Diri</li>
                    <li id="step" data-content="4">Detail Pemesanan</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="px-5 pb-5">
    <div class="container-fluid mb-5">
        <h2 class="fs- fw-semibold text-primary">Data Diri</h2>
        <p class="fs-5 fw-normal">Isi data diri anda dengan benar!</p>
    </div>
    <div class="container-fluid my-5">
        <form method="post" action="{{ route('peers-new.process-formulir', $ref) }}">
            @csrf
            <div class="mb-3">
                <label for="namaLengkap" class="fs-5 fw-semibold form-label">Nama Lengkap</label>
                <input type="text" class="form-control fs-6 fw-normal" id="namaLengkap" name="nama_lengkap" value="{{ auth()->user()->nama }}" placeholder="Jawaban anda">
            </div>
            <div class="mb-3">
                <label for="jenisKelamin" class="fs-5 fw-semibold form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenisKelamin" name="jenis_kelamin">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="fs-5 fw-semibold form-label">Email</label>
                <input type="email" name="email" value="{{ auth()->user()->email }}" class="form-control fs-6 fw-normal" id="email" placeholder="Jawaban anda">
            </div>
            <div class="mb-3">
                <label for="noWhatsapp" class="fs-5 fw-semibold form-label">No WhatsApp</label>
                <input type="text" name="whatsapp" value="{{ auth()->user()->no_whatsapp }}" class="form-control fs-6 fw-normal" id="noWhatsapp"  placeholder="Jawaban anda">
            </div>
            <div class="mb-3">
                <label for="umur" class="fs-5 fw-semibold form-label">Umur</label>
                <input type="text" class="form-control fs-6 fw-normal" value="{{ auth()->user()->umur }}" id="umur" name="umur" placeholder="Jawaban anda">
            </div>
            <div class="mb-3">
                <label for="buktiFollow" class="fs-5 fw-semibold form-label d-block buktiLabel">Bukti Follow Instagram @afeksidn & LinkedIn @AFEKSI.IDN</label>
                <small class="fs-6 fw-normal labelSmall d-block">Masukan Link Google Drive File Bukti Follow</small>
                <input type="text" class="form-control fs-6 fw-normal" id="buktiFollow" name="bukti" placeholder="Jawaban anda">
            </div>
            <div class="mb-3">
                <label for="detailMasalah" class="fs-5 fw-semibold form-label">Detail Masalah</label>
                <textarea class="form-control fs-6 fw-normal" id="detailMasalah" rows="3" name="detail_formulir" placeholder="Jawaban anda"></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Simpan dan Daftar</button>
            </div>
        </form>
    </div>
</div>
@include('../../partials/footer')
@endsection
