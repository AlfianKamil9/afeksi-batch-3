@extends('../layout')
@section('title')
Recap of {{ $data->title_event }} | AFEKSI
@endsection

<!-- path style disesuaikan dengan folder css masing-masing page -->
@section('styles')
<link rel="stylesheet" href="/assets/css/rekaphistory-detail.css" />
@endsection


@section('content')
<div class="container main-image px-lg-5">
    <div style="padding-top:150px;"></div>
    <div class="row">
        <div class="col col-lg-12 mb-4">
            <h4 class="fw-bold mb-4">{{ $data->title_event }}</h4>
            @if ($data->partisipan == null)     
            <img src="/assets/img/rekap-history/foto_webinar_1.png" alt="" />
            @else
             <img src="/assets/img/rekap-history/{{ $data->foto_acara }}" alt="" />
            @endif
        </div>
    </div>
</div>

<!-- KONTENT -->
<div class="container px-lg-5">
    <!-- PROFIL PEMBACA -->
    <div class="row profil-pembaca">
        <div class="col-lg-8">
            <h5 class="fw-bold mb-3">Profil Pembicara</h5>
             <?php $i = 1; ?>
           @foreach ($data->webinar_session as $item)
            @if ($data->webinar_session->count() > 1)
                <h6 class="text-secondary mt-2"> <span class="fw-bold text-dark">Sesi {{ $i++ }} :</span> {{ $item->title_sesi }}</h6>
            @endif    
           <div class="d-flex mt-lg-3 mt-0">
               <div class="flex-shrink-0" style="max-width: 125px">
                   <img src="/assets/img/pembicara_webinar/{{ $item->pembicara->avatar }}" class="img-fluid rounded-circle" alt="Foto Profil Pembaca" />
               </div>
               <div class="flex-grow-1 ms-3 mt-4 mb-5">
                   <h6 class="fw-bold">{{ $item->pembicara->nama_psikolog }}</h6>
                   <p class="text-muted mb-0">{{ $item->pembicara->profil }}</p>
               </div>
           </div>
           @endforeach
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg-12">
            <p style="text-align: justify">
                 {!! $data->description_event !!}
            </p>
        </div>
    </div>
    <!-- DETAIL KEGIATAN -->
    <div class="row kegiatan">
        <div class="col-lg-8">
            <h5 class="fw-bold mb-3">Detail Kegiatan</h5>
            <p class="text-muted">Webinar ini akan dilaksanakan pada :</p>
            <ul class="list-unstyled m-1 text-muted">
                <li class="mb-2 gap-3">
                    <img src="/assets/img/rekap-history/kalender.svg" width="21" height="23" alt="Tanggal Kegiatan" />
                    {{ \Carbon\Carbon::parse($data->date_event)->format('l, d M Y') }}
                </li>
                <li class="mb-2"><img src="/assets/img/rekap-history/location.svg" width="21" height="23"
                        alt="Lokasi Kegiatan" /> 
                    @if ( $data->time_category_event != "ONLINE")
                    Offline Di {{ $data->is_place }}
                    @else
                    Online Via {{ $data->is_place }} </li>
                    @endif
                </li>
                <li class="mb-2"><img src="/assets/img/rekap-history/time.svg" width="21" height="23"
                        alt="Waktu Kegiatan" /> {{ $data->time_start }} - {{ $data->time_finish }} WIB
                </li>
                <li class="mb-2"><img src="/assets/img/rekap-history/time.svg" width="21" height="23"
                        alt="Waktu Kegiatan" /> Jumlah Peserta {{ $data->partisipan }}
                </li>
            </ul>
        </div>
    </div>
    <!-- BENEFITS -->
    <div class="row mt-3 mb-5 benefits">
        <div class="col-lg-8">
            <h5 class="fw-bold mb-3">Benefit Kegiatan</h5>
            <p class="text-muted">Keuntungan yang kamu dapetin</p>
            <ul class="list-unstyled m-1 text-muted">
                <li class="mb-1"><img src="/assets/img/rekap-history/certificate.svg" alt="E-Certificate" />
                    E-Certificate</li>
                <li class="mb-1"><img src="/assets/img/rekap-history/softcopy.svg" alt="SoftCopy" /> Softcopy Material
                </li>
                <li class="mb-1"><img src="/assets/img/rekap-history/knowledge.svg" alt="Knowledge" /> Knowledge</li>
                <li class="mb-1"><img src="/assets/img/rekap-history/doorprize.svg" alt="Doorprize" /> Doorprize</li>
                <li class="mb-1"><img src="/assets/img/rekap-history/diskusi.svg" alt="Diskusi" /> Diskusi</li>
            </ul>
        </div>
    </div>
</div>

@include('../partials/footer')
@endsection
