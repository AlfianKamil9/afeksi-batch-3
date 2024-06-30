@extends('../../layout')

@section('title', 'Detail Pesanan Konseling | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="/assets/css/flow-design-baru/detail-pesanan.css">
@endsection

@section('content')
    <div class="content-container container wrapper">
        <div class="d-flex justify-content-center">
            <div class="col-9 col-md-10 text-center p-0 mb-2">
                <div class="px-0 pt-4 mt-3 mb-3">
                    <ul id="progressbar">
                        <li class="finish" id="step" data-content="1">Pilih Konselor</li>
                        <li class="finish" id="step" data-content="2">Pilih Platform</li>
                        <li class="finish" id="step" data-content="3">Data Diri</li>
                        <li class="finish fw-bold" id="step" data-content="4">Detail Pemesanan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-5 pt-4 pt-md-0">
        <div class="mb-5">
            <h2 class="fw-semibold text-primary">Detail Pesanan</h2>
            <p class="fs-5 fw-normal">Berikut adalah detail pesanan Anda:</p>
        </div>
        <div class="d-md-flex d-grid justify-content-between my-5">
            <div class="col-md-5 card-detail">
                <div>
                    <h3 class="text-primary fw-bold">Informasi</h3>
                </div>
                <div class="p-4 border border-2 border-secondary-subtle rounded-3 mt-5">
                    <div class="d-flex align-items-center gap-4">
                        <img src="./assets/img/flow-design-baru/card-paket-1.png" class="w-25 bg-body-tertiary" />
                        <div>
                            <h5 class="text-primary fw-bold">
                                Peers Konseling
                            </h5>
                            <p class="mb-0 text-secondary">Paket Gratis</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 border border-2 border-secondary-subtle rounded-3 mt-3 mb-5">
                    <div class="d-flex align-items-center gap-4">
                        <img src="./assets/img/flow-design-baru/konselor.png" class="w-25 rounded-circle" />
                        <div>
                            <h5 class="fw-bold">
                                Nadia Sarasvati, S.Psi
                            </h5>
                            <p class="mb-0 text-secondary">Psikolog Kesehatan Mental</p>
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="d-flex text-secondary">
                            <div class="col-lg-2 col-md-5">
                                <p class="mb-0">Topik</p>
                            </div>
                            <span>:</span>
                            <p class="ms-2 mb-0">Kesehatan Mental</p>
                        </div>
                        <div class="d-flex text-secondary pt-1">
                            <div class="col-lg-2 col-md-5">
                                <p class="mb-0">Tanggal</p>
                            </div>
                            <span>:</span>
                            <p class="ms-2 mb-0">10 Juni 2024</p>
                        </div>
                        <div class="d-flex text-secondary pt-1">
                            <div class="col-lg-2 col-md-5">
                                <p class="mb-0">Waktu</p>
                            </div>
                            <span>:</span>
                            <p class="ms-2 mb-0">15.00 WIB - 18.00 WIB</p>
                        </div>
                        <div class="d-flex text-secondary pt-1">
                            <div class="col-lg-2 col-md-5">
                                <p class="mb-0">Durasi</p>
                            </div>
                            <span>:</span>
                            <p class="ms-2 mb-0">60 Menit</p>
                        </div>
                    </div>
                </div>
                <hr class="custom-hr" />
                <div class="d-flex justify-content-between mt-4">
                    <h5 class="fw-bold text-secondary">Harga Paket</h5>
                    <h5 class="fw-bold text-primary">Rp0</h5>
                </div>
            </div>
            <div class="col-md-6 card-detail mt-4 mt-md-0">
                <h3 class="text-primary fw-bold">Pembayaran</h3>
                <p class="mb-0">Silahkan masukkan kode voucher dan lihat rincian pembayaran</p>
                <div class="pt-5">
                    <h5 class="fw-bold">
                        Voucher
                    </h5>
                    <div class="d-flex rounded-2 border border-secondary-subtle">
                        <div class="flex-grow-1  p-3">
                            <input class="fw-bold border-0 text-secondary w-100" placeholder="Masukkan Kode" />
                        </div>
                        <button class="ms-auto px-4 border-0 fw-bold">Pilih</button>
                    </div>
                </div>
                <div class="pt-4 mb-5">
                    <h5 class="fw-bold pb-1">
                        Rincian Pembayaran
                    </h5>
                    <div class="py-4 border border-2 border-secondary-subtle rounded-3">
                        <div class="d-flex px-4 justify-content-between">
                            <p class="mb-0 text-secondary">Sub Total</p>
                            <p class="mb-0">Rp0</p>
                        </div>
                        <div class="d-flex px-4 justify-content-between pt-2">
                            <p class="mb-0 text-secondary">Voucher Diskon</p>
                            <p class="mb-0">-Rp0</p>
                        </div>
                        <hr class="text-secondary border-2" />
                        <div class="d-flex px-4 justify-content-between pt-2">
                            <p class="mb-0 text-secondary fw-bold fs-5">Total Pembayaran</p>
                            <p class="mb-0 fs-5 fw-bold">Rp0</p>
                        </div>
                    </div>
                </div>
                <hr class="custom-hr" />
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-column">
                        <p class="mb-0 text-secondary fw-bold">Total Pembayaran</p>
                        <p class="mb-0 text-primary fw-bold">Rp0</p>
                    </div>
                    <button class="btn-detail px-4 border-0 rounded-3">Bayar</button>
                </div>
            </div>

        </div>
    </div>
    @include('../../partials/footer')
@endsection
