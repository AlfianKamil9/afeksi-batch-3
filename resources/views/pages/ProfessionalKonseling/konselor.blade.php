@extends('../layout') 
@section('title', 'Pilihan Konselor | AFEKSI')

<!-- path style disesuaikan dengan folder css masing-masing page -->
@section('styles')
<link rel="stylesheet" href="/assets/css/psikolog-konselor.css" />
 <link rel="stylesheet" href="/assets/css/stepper.css">
@endsection 

@section('content')

<!-- Step -->
    <div class="container" style="padding-top:calc(70px + 60px);">
        <div class="position-relative">
            <div class="stepper-wrapper">
                <div class="stepper-item active">
                    <div class="step-counter">
                        <span class="step-checkmark">1</span>
                    </div>
                    <div class="step-name">Pilih Konselor</div>
                </div>
                <div class="stepper-item">
                    <div class="step-counter">
                        <span class="step-checkmark">2</span>
                    </div>
                    <div class="step-name">Pilih Paket</div>
                </div>
                <div class="stepper-item">
                    <div class="step-counter">
                        <span class="step-checkmark">3</span>
                    </div>
                    <div class="step-name">Data Diri</div>
                </div>
                <div class="stepper-item">
                    <!--add class active to enable active step progess-->
                    <div class="step-counter">
                        <span class="step-checkmark">4</span>
                    </div>
                    <div class="step-name">Pembayaran</div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Step -->

<div class="contents row">
      <h1 style="color: #233dff">Konselor</h1>
      <div class="side col-lg-3 col-md-4 mb-5">
        <form method="get" action="{{ route('professional.konseling.konselor') }}">
        <div class="form-group">
          <p class="side-heading fw-semibold">Filter</p>
          <div class="password-container">
            <input type="text" class="form-control" name="input_search" placeholder="Search" />
            <img class="password-icon" src="/assets/img/kegiatan/material-symbols_search.png" alt="" />
          </div>
        </div>

        <hr class="mt-4" />

        <div class="form-group">
          <p class="side-heading fw-semibold">Urutkan</p>
          <select class="form-select" name="sort_date" aria-label="Default select example">
            <option value="latest" selected>Terbaru</option>
            <option value="oldest">Terlama</option>
          </select>
        </div>

        <hr class="mt-4" />

        <div class="form-group">
          <p class="side-heading fw-semibold">Topik</p>
          @foreach ($topic as $item)     
          <div class="form-check">
            {{-- {{ request('topic') }} --}}
            @if (!request('topic'))
              <input class="form-check-input" name="topic" type="radio" @if($item->nama_layanan == 'Relationship' ) checked  @endif  value="{{ $item->nama_layanan }}" id="relationshipCheckbox" />
            <label class="form-check-label" for="relationshipCheckbox"> {{ $item->nama_layanan }} </label>
            @else
              <input class="form-check-input" name="topic" type="radio" @if(request('topic') ==  $item->nama_layanan  ) checked  @endif  value="{{ $item->nama_layanan }}" id="relationshipCheckbox" />
              <label class="form-check-label" for="relationshipCheckbox"> {{ $item->nama_layanan }} </label>
            @endif
          </div>
          @endforeach
        </div>
        

        <hr class="mt-4" />

        <div class="d-flex flex-column mt-4">
          <button type="submit" class="btn side-btn">Terapkan Filter</button>
          <a href="{{ route('professional.konseling.konselor') }}" class="btn side-btn btn-outline">Hapus Filter</a>
        </div>
        </form>
      </div>
    

      <div class="content col-lg-9 col-md-8">
        <div class="row d-flex ps-3">
          {{-- {{ request('topic') }} --}}
          @forelse ($data as $item)
              <div class="col-lg-6 p-2">
                <form action="{{ route('professional.konseling.process.pilih-konselor') }}" method="POST">
                  @csrf
                <div class="card border-0">
                  <div class="card-top d-flex align-items-center justify-content-between">
                    <img src="assets/img/psikolog-konselor/Ellipse 1216.png" alt="" class="elips">
                    <div class="stars">
                      <img src="/assets/img/psikolog-konselor/star.png" alt="" class="star">
                      <img src="/assets/img/psikolog-konselor/star.png" alt="" class="star">
                      <img src="/assets/img/psikolog-konselor/star.png" alt="" class="star">
                      <img src="/assets/img/psikolog-konselor/star.png" alt="" class="star">
                      <img src="/assets/img/psikolog-konselor/star.png" alt="" class="star">
                    </div>
                    <span>(500)</span>
                  </div>
                  <div class="person">
                    <h5 class="m-0">{{ $item->user->nama }} </h5>
                    <span>
                     
                     {{ $item->user->education[$item->user->education->count() - 1]->jenjang}}  {{ $item->user->education[$item->user->education->count() - 1]->instansi }} </span>
                  </div>
                  <img src="/assets/img/psikolog-konselor/Rectangle 816.png" alt="" class="main-img">
                  <input type="hidden" name="konseling_id" value="{{ $p }}">
                  <button type="submit" class="btn side-btn" name="value_id" value="{{ $item->id }}">Jadwalkan Sesi Sekarang</button>
                </div>
                </form>
              </div>
          @empty
              <center>
                  <h5>Tidak Ditemukan</h5>
              </center>
          @endforelse
        </div>
      </div>
    </div>

@include('../partials/footer') @endsection
