@extends('../layout') @section('title', 'Rekap History | AFEKSI')

<!-- path style disesuaikan dengan folder css masing-masing page -->
@section('styles')
<link rel="stylesheet" href="/assets/css/rekaphistory.css" />
@endsection 


@section('content')


<div class="hero" style="background-image: url(assets/img/kegiatan/Banner.svg)">
      <div class="py-5"></div>
      <div class="d-flex justify-content-between flex-column flex-lg-row gap-5 text-center text-lg-start">
        <div class="left col-lg-6">
        <div class="bread-crumbs d-flex gap-2 fw-semibold text-white">
                <p>Kegiatan</p>
                <span>&gt;</span>
                <p>Rekap History</p>
            </div>
          <div class="text text-white mt-5">
            <h1 class="mb-4" >Temukan beragam webinar menarik dan bermanfaat dari Afeksi</h1>
            <p>
              Jangan lewatkan kesempatan untuk belajar dari para ahli, mendapatkan wawasan baru, dan berinteraksi dengan orang-orang lain yang
              memiliki minat yang sama. Bersama-sama, mari kita bangun hubungan yang lebih mendalam, intim, dan penuh makna!
            </p>
          </div>
        </div>
        <div class="right col-lg-6 ">
          <img src="assets/img/kegiatan/Hero.svg" />
        </div>
      </div>
    </div>

    <div class="contents row">
      <div class="side col-lg-3 col-md-4 mb-5">
        <div class="form-group">
          <p class="side-heading fw-semibold">Filter</p>
          <div class="password-container">
             <form action="{{ route('recap.history') }}" method="get">
            <input type="text" class="form-control" placeholder="Search" />
            <img class="password-icon" src="/assets/img/kegiatan/material-symbols_search.png" alt="" />
             </form>
          </div>
        </div>

        <hr class="mt-4">
            <form action="{{ route('recap.history') }}" method="get">
                {{-- Terbaru - Terlama --}}
                <div class="form-group">
                    <p class="side-heading fw-semibold">Urutkan</p>
                    <select class="form-select" name="sort_date" aria-label="Default select example">
                        <option selected value="latest">Terbaru</option>
                        <option value="oldest">Terlama</option>
                    </select>
                </div>

                <hr class="mt-4">

                {{-- Filter Harga --}}
                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <p class="side-heading fw-semibold">Harga</p>
                        <!-- <p><img style="height: 22px; margin-right: 9px;" src="assets/img/kegiatan/keyboard_arrow_up.png" alt=""></p> -->
                    </div>
                    <div class=" d-flex align-items-center">
                        <div class="p-2 bg-body-secondary rounded-start-2">
                            <label for="inputRp" style="font-size: 14px;" >Rp</label>
                        </div>
                        <input type="text" name="max_price" class="form-control rounded-0 rounded-end-2" id="inputRp" placeholder="Harga Maksimum" />
                    </div>
                    <div class="mt-3 d-flex align-items-center">
                        <div class="p-2 bg-body-secondary rounded-start-2">
                            <label for="inputRp" style="font-size: 14px;" >Rp</label>
                        </div>
                        <input type="text" name="min_price" class="form-control rounded-0 rounded-end-2" id="inputRp" placeholder="Harga Minimum" />
                    </div>
                </div>

                <hr class="mt-4">

                {{-- Filter Topik --}}
                <div class="form-group">
                    <p class="side-heading fw-semibold">Topik</p>
                    <div class="form-check">
                        <input name="category_event_id" class="form-check-input" type="radio" @if(request('category_event_id') == 1) checked @endif value="1" id="category_event_id">
                        <label class="form-check-label" for="category_event_id">
                            Relationship
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="category_event_id" class="form-check-input" type="radio" @if(request('category_event_id') == 2) checked @endif value="2" id="category_event_id">
                        <label class="form-check-label" for="category_event_id">
                        Self Love
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="category_event_id" class="form-check-input" type="radio" @if(request('category_event_id') == 3) checked @endif value="3" id="category_event_id">
                        <label class="form-check-label" for="category_event_id">
                        Parenting
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="category_event_id" class="form-check-input" type="radio" @if(request('category_event_id') == 4) checked @endif value="4" id="category_event_id">
                        <label class="form-check-label" for="category_event_id">
                        Pre-Marriage
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="category_event_id" class="form-check-input" type="radio" @if(request('category_event_id') == 5) checked @endif value="5" id="category_event_id">
                        <label class="form-check-label" for="category_event_id">
                        Emotional Management
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="category_event_id" class="form-check-input" type="radio" @if(request('category_event_id') == 6) checked @endif value="6" id="category_event_id">
                        <label class="form-check-label" for="category_event_id">
                        Family Issue
                        </label>
                    </div>
                </div>

                <hr class="mt-4">

                {{-- Filter Kategori --}}
                <div class="form-group">
                    <p class="side-heading fw-semibold">Kategori</p>
                    <div class="form-check">
                        <input name="time_category_event" class="form-check-input" type="checkbox" value="OFFLINE" id="time_category_event">
                        <label class="form-check-label" for="time_category_event">
                        Offline
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="time_category_event" class="form-check-input" type="checkbox" value="ONLINE" id="time_category_event">
                        <label class="form-check-label" for="time_category_event">
                        Online
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="pay_category_event" class="form-check-input" type="checkbox" value="FREE" id="pay_category_event">
                        <label class="form-check-label" for="pay_category_event">
                        Gratis
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="pay_category_event" class="form-check-input" type="checkbox" value="PAID" id="pay_category_event">
                        <label class="form-check-label" for="pay_category_event">
                        Berbayar
                        </label>
                    </div>
                </div>

                <div class="d-flex flex-column mt-4">
                    <button class="btn side-btn">Terapkan Filter</button>
                    <a type="button" href="{{ route('recap.history') }}" class="btn side-btn btn-outline">Hapus Filter</a>
                </div>
            </form>
      </div>

      <div class="content col-md-8 ms-lg-4">
        <div class="row d-flex">
          @forelse ($data as $item)
          <div class="col my-2 box shadow rounded-4 d-flex flex-md-row flex-column p-5 gap-5 align-items-center">
            <div class="left d-flex flex-column gap-1">
              <div style="max-width: 1000px; max-height: 150px; overflow:hidden">
                  <img class="img-fluid" src="{{ asset('/assets/img/kegiatan/'.$item->cover_event) }}" alt="foto webinar"/>
              </div>
              <span class="date text-secondary">{{ \Carbon\Carbon::parse($item->date_event)->format('l, d F Y') }}</span>
              <div class="bio py-2 row align-content-center gap-2">
                @foreach ($item->webinar_session as $pembicara)
                <div class="d-flex">
                  <div class="img-fluid rounded-circle me-2">
                    <img src="/assets/img/pembicara_webinar/{{ $pembicara->pembicara->avatar }}" class="rounded-circle" alt="" />
                  </div>
                  <div class="nama d-flex flex-column">
                    <p>{{ $pembicara->pembicara->nama_psikolog }}</p>
                    <span>{{ $pembicara->pembicara->profil }}</span>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            <div class="right pe-md-5 ps-md-3">
              <h5>{{ $item->title_event }}</h5>
              <p class="my-3">
                {!! Str::substr($item->description_event, 0, 150). "..." !!}
              </p>
              <a href="{{ route('recap.history.detail', $item->slug_event) }}" class="btn side-btn d-inline">Selengkapnya</a>
            </div>
          </div>
              
          @empty
              <h4 class="text-center mt-3">Tidak Ada History</h4>
          @endforelse

        </div>
      </div>
    </div>

@include('../partials/footer') @endsection
