@extends('../../layout')

@section('title', 'Pilih Layanan | AFEKSI')

@section('styles')
<link rel="stylesheet" href="/assets/css/flow-design-baru/layanan.css">
@endsection

@section('content')
<div class="content-container container wrapper">
    <div class="d-flex justify-content-center">
        <div class="col-9 col-md-10 text-center p-0 mb-2">
            <div class="px-0 pt-4 mt-3 mb-3">
                <ul id="progressbar">
                    <!-- finish (background green), active (background blue) -->
                    <li class="finish" id="step" data-content="1">Pilih Konselor</li>
                    <li class="active" id="step" data-content="2">Pilih Platform</li>
                    <li id="step" data-content="3">Data Diri</li>
                    <li id="step" data-content="4">Detail Pemesanan</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="px-5 pb-5">
    <p class="fw-bold font-head mb-0">Pilih Plaform Layanan Peers Konseling</p>
    <p class="font-s mb-0">Tersedia Layanan Peers Konseling melalui plaform Chat, Panggilan Suara, dan Panggilan Video.</p>
    <div class="container-fluid">
        <div class="row row-cols-3 justify-content-center gap-4 mt-5">
            <div class="card col p-2">
                <img class="img-layanan" src="/assets/img/flow-design-baru/platform-chat.png" alt="img_konselor">
                <p class="text-center fw-bold font-head2 mt-4 mb-3">Platform Chat</p>
                <div class="d-flex justify-content-center">
                    <form action="{{ route('peers-new.process-pilih-layanan', $ref ) }}" method="post">
                    @csrf
                    <button type="submit" name="platform" value="chat" class="btn-blue font-ss fw-semi-bold mt-2 px-5 py-2">Pilih Platform</button>
                    </form>
                </div>
            </div>
            <div class="card col p-2">
                <img class="img-layanan" src="/assets/img/flow-design-baru/platform-panggilan.png" alt="img_konselor">
                <p class="text-center fw-bold font-head2 mt-4 mb-3">Platform Panggilan Suara</p>
                <div class="d-flex justify-content-center">
                    <form action="{{ route('peers-new.process-pilih-layanan', $ref ) }}" method="post">
                    @csrf
                    <button type="submit" name="platform" value="call" class="btn-blue font-ss fw-semi-bold mt-2 px-5 py-2">Pilih Platform</button>
                    </form>
                </div>
            </div>
            <div class="card col p-2">
                <img class="img-layanan" src="/assets/img/flow-design-baru/platform-vc.png" alt="img_konselor">
                <p class="text-center fw-bold font-head2 mt-4 mb-3">Platform Panggilan Video</p>
                <div class="d-flex justify-content-center">
                    <form action="{{ route('peers-new.process-pilih-layanan', $ref ) }}" method="post">
                    @csrf
                    <button type="submit" name="platform" value="video" class="btn-blue font-ss fw-semi-bold mt-2 px-5 py-2">Pilih Platform</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('../../partials/footer')
@endsection