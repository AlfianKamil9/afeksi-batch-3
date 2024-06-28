@extends('../layout')

@section('title', 'Popup Konseling | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="/assets/css/popUp/popUpMentoring.css">
@endsection



@section('content')
    <div class="mb-5 pt-5 bg-transparent text-white overflow-hidden">
        <div class="container-fluid py-5" style="height: 31.9rem">
            <div class="row mt-5 pt-5">
                <div class="col-md">
                    <h1 class="mb-3 fw-bold mb-md-5">Apa Itu Mentoring</h1>
                    <p class="w-75">Mentoring adalah sebuah kegiatan pendampingan untuk beberapa orang baik itu dari
                        perusahaan ataupun tempat lain seperti universitas. Dimana mereka yang akan didampingi biasanya
                        memiliki keterbatasan wawasan atau bisa dikatakan kurang mahir dalam melakukan sesuatu.</p>
                </div>
                <div class="col-md">
                    <img src="/assets/img/mentoring/hero-removebg.png" alt="Header" class="img-fluid h-100" />
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
                        <button id="button-ok" type="submit">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('../partials/footer')

    <script>
        const popUp = document.getElementById('button-ok');
        popUp.addEventListener('click', () => {
            window.location.href = '/'
        });
    </script>

@endsection
