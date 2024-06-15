@extends('../layout') 

 @section('title', 'Pilih Paket Peers Konseling | AFEKSI')

@section('styles')
<link rel="stylesheet" href="/assets/css/pilihpaket.css" />
<link rel="stylesheet" href="/assets/css/stepper.css" />
@endsection 


@section('content')
<div class="container">
  <div class="container" style="padding-top: calc(70px + 94px)">
    <div class="position-relative">
      <div class="stepper-wrapper">
        <div class="stepper-item active">
          <div class="step-counter">
            <span class="step-checkmark">1</span>
          </div>
          <div class="step-name">Pilih Paket</div>
        </div>
        <div class="stepper-item">
          <div class="step-counter">
            <span class="step-checkmark">2</span>
          </div>
          <div class="step-name">Data Diri</div>
        </div>
        <div class="stepper-item">
          <!--add class active to enable active step progess-->
          <div class="step-counter">
            <span class="step-checkmark">3</span>
          </div>
          <div class="step-name">Pembayaran</div>
        </div>
      </div>
    </div>
  </div>
  <h5 class="fw-bold mt-5">Pilih Paket Layanan Peers Konseling</h5>
  <p class="text-secondary sub">
  Kami berharap bahwa layanan Konseling <span>Peers Konseling</span> kami akan membantu setiap orang dalam menciptakan
    hubungan yang <strong>harmonis</strong>.
  </p>
  <div class="row mb-5">
    @foreach ($data as $item)
    <div class="col-lg-6 p-2">
      <form action="{{ route('peers.konseling.process.paket', $slug) }}" method="POST">
        @csrf
      <div class="box rounded-3 shadow p-3">
        <h5>{{ $item->nama_paket }}</h5>
        <p class="text-secondary">{{ $item->deskripsi_singkat }}.</p>
        <div class="d-flex align-items-center gap-2">
          <h1 class="lg m-0">Rp. {{ number_format($item->harga, 0, ',', '.') }}</h1>
          <p class="sm m-0">/ 
            @if (Str::substr($item->nama_paket, 0, 13) == 'Sesi Kelompok')
                Peserta
            @else
              Sesi
            @endif
            </p>
        </div>
        <div class="mt-4">
          <div class="d-flex align-items-center gap-2 mb-2">
            <img src="/assets/img/pilih-paket/Frame 74.svg" alt="" />
            <p class="m-0">{{ $item->deskripsi_durasi }}</p>
          </div>
          <div class="d-flex align-items-center gap-2">
            <img src="/assets/img/pilih-paket/Frame 74.svg" alt="" />
            <p class="m-0">{{ $item->deskripsi_paket }}.</p>
          </div>
        </div>
        <button type="submit" name="id_paket" value="{{ $item->id }}" class="mt-4 rounded-5 btn text-white btn-pilih">Pilih paket</button>
      </div>
      </form>
    </div>
    @endforeach
  </div>
</div>

@include('../partials/footer') @endsection
