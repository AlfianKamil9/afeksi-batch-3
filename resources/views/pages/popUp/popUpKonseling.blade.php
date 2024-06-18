@extends('../layout')

@section('title', 'Popup Konseling | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="/assets/css/popUp/popUpKonseling.css">
@endsection



@section('content')
    <div class="mb-5 pt-5 bg-transparent text-white overflow-hidden">
        <div class="container-fluid py-5" style="height: 31.9rem">
            <div class="row mt-5 pt-5">
                <div class="col-md">
                    <h1 class="mb-3 fw-bold mb-md-5">Apa Itu Konseling</h1>
                    <p class="w-75">Konseling adalah hubungan pribadi yang dilakukan secara tatap muka antara dua orang
                        dalam mana konselor melalui hubungan itu dengan kemampuan-kemampuan khusus yang dimilikinya,
                        menyediakan situasi belajar.</p>
                </div>
                <div class="col-md">
                    <img src="/assets/img/konseling/hero.png" alt="Header" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    {{-- PopUp Konseling --}}
    <div class="container-md overflow-hidden">
        <div class="row align-items-center justify-content-center  ">
            <div class="col-md-12 mt-5 d-flex justify-content-center align-items-center">
                <div class="card-popUp" id="popUp">
                    <div class="d-flex justify-content-center">
                        <img src="/assets/img/popUp/popUp.png" alt="Header" class="w-75" />
                    </div>
                    <div class="d-md-flex d-grid justify-content-center align-items-center gap-3 mt-3 mb-2">
                        <p class="mb-0">Sesuatu yang istimewa akan segera hadir</p>
                        <button>Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('../partials/footer')

@endsection
