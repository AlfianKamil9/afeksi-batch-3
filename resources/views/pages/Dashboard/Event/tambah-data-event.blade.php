@extends('../layout-admin')

@section('title', 'Event Admin | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="">
@endsection

@section('content')
    @php
        $sidebarContent = '
        <div class="p-4">
            <div>
                <h4 class="fw-bold">Tambah Data Event</h4>
                <p>Tambahkan data acara dan kegiatan terkait</p>
            </div>
            <div class="mt-3">
                <div class="d-flex">
                    <div>
                    </div>
                </div>
            </div>
        </div>
    ';
    @endphp
@endsection
