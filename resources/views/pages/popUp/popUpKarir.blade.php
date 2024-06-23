@extends('../layout')

@section('title', 'Coming Soon Karir | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="/assets/css/popUp/popUpKonseling.css">
@endsection



@section('content')
    <div class="mb-5 pt-5 bg-transparent text-white overflow-hidden">
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
                        <button id="button-ok">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    @include('../partials/footer')

    <script>
        const popUp = document.getElementById('button-ok');
        popUp.addEventListener('click', () => {
            window.location.href = '{{ route("karir") }}'
        });
    </script>

@endsection
