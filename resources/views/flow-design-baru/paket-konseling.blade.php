@extends('../layout')

@section('title', 'Paket Konseling | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="/assets/css/flow-design-baru/paket-konseling.css">
@endsection


@section('content')
    <div class="pt-5 mx-5">
        <div class="pt-5 mt-5">
            <div>
                <h2 class="fw-bold ">Pilih Paket Layanan Peers Konseling</h2>
                <p>Tersedia pilihan <span class="fw-bold">Paket Gratis</span> untuk layanan dasar dan <span
                        class="fw-bold">Paket Berbayar</span> untuk
                    layanan premium dengan benefit tambahan </p>
            </div>
            <div class="card-paket d-md-flex">
                <img src="/assets/img/flow-design-baru/card-paket-1.png" alt="Card Paket Konseling 1" />
                <div>
                    <h4 class="fw-bold pt-3 pt-md-0">Paket Gratis</h4>
                    <p>Dapatkan sesi konseling dengan seorang konsuler berlisensi dan bebas memilih platfrom konsultasi yang
                        anda inginkan.</p>
                    <div class="d-flex justify-content-md-between gap-2">
                        <p class="layanan-1">Layanan chat durasi 60 menit</p>
                        <p class="layanan-2">Layanan voice call durasi 60 menit</p>
                        <p class="layanan-3">Layanan video call durasi 60 menit</p>
                    </div>
                    <p>Syarat dan Ketentuan</p>
                    <div class="d-flex flex-column">
                        <div class="d-flex gap-lg-3 gap-2 align-items-center pb-2">
                            <div class="p-2 bg-info-subtle rounded-circle">
                                <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                    focusable="false" viewBox="0 0 12 12">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" d="M1 7l3 3 7-7" />
                                </svg>
                            </div>
                            <p class="mb-0 text-dark text-start">Wajib follow instagram dan linkedin Afeksi</p>
                        </div>
                        <div class="d-flex gap-lg-3 gap-2 align-items-center pb-2">
                            <div class="p-2 bg-info-subtle rounded-circle">
                                <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                    focusable="false" viewBox="0 0 12 12">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" d="M1 7l3 3 7-7" />
                                </svg>
                            </div>
                            <p class="mb-0 text-dark text-start">Layanan free hanya berlaku untuk paket single</p>
                        </div>
                        <div class="d-flex gap-lg-3 gap-2 align-items-center">
                            <div class="p-2 bg-info-subtle rounded-circle">
                                <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                    focusable="false" viewBox="0 0 12 12">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" d="M1 7l3 3 7-7" />
                                </svg>
                            </div>
                            <p class="mb-0 text-dark text-start">Memberikan feedback/testimoni layanan konseling</p>
                        </div>
                        <form method="post" class="w-100" action="{{ route('peers-new.pilih-paket') }}">
                            @csrf
                            <div class="d-flex flex-column">
                            <button type="submit" name="select_paket" value="0" class="mt-4 p-2 rounded-4 bg-primary text-white border-0">Pilih Paket</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-paket d-md-flex">
                <img src="/assets/img/flow-design-baru/card-paket-2.png" alt="Card Paket Konseling 1" />
                <div>
                    <h4 class="fw-bold pt-3 pt-md-0">Paket Berbayar</h4>
                    <p>Dapatkan sesi konseling dengan seorang konsuler berlisensi dan bebas memilih platfrom konsultasi yang
                        anda inginkan.</p>
                    <div class="d-flex justify-content-md-between gap-2">
                        <p class="layanan-1">Layanan chat durasi 60 menit</p>
                        <p class="layanan-2">Layanan voice call durasi 60 menit</p>
                        <p class="layanan-3">Layanan video call durasi 60 menit</p>
                    </div>
                    <p>Benefit Khusus</p>
                    <div class="d-flex flex-column">
                        <div class="d-flex gap-lg-3 gap-2 align-items-center pb-2">
                            <div class="p-2 bg-info-subtle rounded-circle">
                                <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                    focusable="false" viewBox="0 0 12 12">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" d="M1 7l3 3 7-7" />
                                </svg>
                            </div>
                            <p class="mb-0 text-dark text-start">Free akses 1x event Afeksi [Webinar]</p>
                        </div>
                        <div class="d-flex gap-lg-3 gap-2 align-items-center pb-2">
                            <div class="p-2 bg-info-subtle rounded-circle">
                                <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                    focusable="false" viewBox="0 0 12 12">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" d="M1 7l3 3 7-7" />
                                </svg>
                            </div>
                            <p class="mb-0 text-dark text-start">Free e-book [khusus bundling session]</p>
                        </div>
                        <form method="post" class="w-100" action="{{ route('peers-new.pilih-paket') }}">
                            @csrf
                            <div class="d-flex flex-column">
                            <button type="submit" name="select_paket" value="1" class="mt-4 p-2 rounded-4 bg-primary text-white border-0">Pilih Paket</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('../partials/footer')

@endsection
