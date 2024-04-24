@extends('../layout')

@section('title')
    {{ ucwords($data->judul_artikel) }} | AFEKSI
@endsection

@section('styles')
    <link rel="stylesheet" href="/assets/css/artikel-detail.css">
@endsection


{{-- @include('../partials/navbar')  --}}

@section('content')

<div class="contents row" style="padding-top:94px;">
      <div class="content">
        <center>
        <img class="mb-2" style="object-fit: cover; width:70%;" src="{{ $data->gambar ? '/assets/img/article/'.$data->gambar : '/assets/img/article/contentImg.png' }}" alt="{{ $data->judul_artikel }}" />
        </center>
        <div class="title mb-5">
          <h1 style="color: #233dff;">{{ ucwords($data->judul_artikel) }}</h1>
          <span class="text-secondary">{{ \Carbon\Carbon::parse($data->tanggal_rilis)->format('d F Y') }}</span>
        </div>
        <p>
          {!! $data->isi_artikel !!}
        </p>
      </div>
    </div>

@include('../partials/footer') 
@endsection

