@extends('../layout-admin')

@section('title', 'Event Admin | AFEKSI')

@section('styles')
<link rel="stylesheet" href="/assets/css/admin-event.css">
@endsection

@section('content')
@php
$sidebarContent = '
<div class="m-4">
    <p class="jdl fs-4 mb-0">Pengelolaan Event</p>
    <p class="fs-6 mb-0">Kelola dan atur semua acara dan kegiatan terkait.</p>
    <div class="container-fluid mt-2 p-0">
        <div class="box d-flex">
            <nav class="py-2 align-content-center w-100">
                <div class="nav" id="nav-tab" role="tab">
                    <p class="text-tab m-0 fs-5 fw-semibold nav-link active mt-1" id="nav-webinar-tab" data-bs-toggle="tab" data-bs-target="#nav-webinar" role="tab" aria-controls="nav-webinar" aria-selected="true">Webinar</p>
                    <p class="text-tab m-0 fs-5 fw-semibold nav-link mt-1" id="nav-campaign-tab" data-bs-toggle="tab" data-bs-target="#nav-campaign" role="tab" aria-controls="nav-campaign" aria-selected="false">Campaign</p>
                    <form class="form-inline d-flex align-content-center my-2 ms-auto gap-2 me-3">
                        <div class="search-container">
                            <img class="search-icon" src="/assets/img/admin/search.png" alt="search img" style="width: 20px; height:20px;">
                            <input class="inp-search h-100" type="text" placeholder="Search...">
                        </div>
                        <div class="filter-container">
                            <button class="btn btn-1 btn-filter fw-semibold h-100">Filter</button>
                            <img class="filter-icon" src="/assets/img/admin/filter.png" alt="filter img" style="width: 17px; height:17px;">
                        </div>
                        <button class="btn btn-1 btn-warning fw-bold" style="color: #060E7A;">Tambahkan Data</button>
                    </form>
                </div>
            </nav>
        </div>
        <div class="box-2 tab-content" id="tab-content">
            <div class="tab-pane fade show active" id="nav-webinar" role="tabpanel" aria-labelledby="content-event-tab">
                <div class="mt-1 ms-3 mb-3">
                    <button class="count btn fw-bold px-4 py-0 font-small my-1">12 Webinar</button>
                    <p class="mb-1 font-small">Ini adalah Webinar yang telah dibuat</p>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-campaign" role="tabpanel" aria-labelledby="content-campaign-tab">
                <div class="mt-1 ms-3 mb-3">
                    <button class="count btn fw-bold px-4 py-0 font-small my-1">12 Campaign</button>
                    <p class="mb-1 font-small">Ini adalah Campaign yang telah dibuat</p>
                </div>
            </div>
        </div>
    </div>
</div>
';
@endphp
@endsection