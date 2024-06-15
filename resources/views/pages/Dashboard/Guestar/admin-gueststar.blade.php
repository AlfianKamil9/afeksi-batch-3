@extends('../layout-admin')

@section('title', 'Guestar Admin | AFEKSI')

@section('styles')
<link rel="stylesheet" href="/assets/css/artikel/admin-articleGueststar.css">
@endsection

@section('sidebarContent')
<div class="m-4">
    <p class="fw-bold fs-4 mb-0">Pengelolaan Guestar</p>
    <p class="fs-6 mb-0">Kelola dan atur semua Guestar webinar untuk setiap detailnya</p>
    <div class="container-fluid mt-2 p-0">
        <div class="box mb-0">
            <div class="d-flex justify-content-end gap-2 me-2 py-2">
                <div class="search-container position-relative">
                <img class="search-icon position-absolute" src="/assets/img/admin/search.png" alt="search_img">
                    <input class="inp-search font-small py-1" type="text" placeholder="Search...">
                </div>
                <div class="filter-container position-relative">
                    <button class="btn-filter font-small py-1">Filter</button>
                    <img class="filter-icon position-absolute" src="/assets/img/admin/filter.png" alt="filter_img">
                </div>
                <button class="btn-add font-small py-1 px-2 fw-bold">Tambahkan Data</button>
            </div>
        </div>
        <div class="box-2 mb-0">
            <div class="d-block ms-2 py-2">
                <div class="count-info">
                    <p class="text-count p-0 m-0 fw-bolder text-center font-small">12 Guestar</p>
                </div>
                <p class="mb-0 mt-2 font-small">Berikut ini daftar Guestar Webinar yang telah dibuat</p>
            </div>
            <form action="" class="w-100 mt-1 table-responsive p-0">
                <table class="w-100 m-0">
                    <tr class="fw-bold text-center font-small t-head">
                        <th class="th photo">Foto</th>
                        <th class="th name">Nama</th>
                        <th class="th profile">Profile Singkat</th>
                        <th class="th aksi-gs">Aksi</th>
                    </tr>
                    <tr class="font-smaller fb">
                        <td class="px-2 py-1 text-center">
                            <img class="photo-data" src="/assets/img/admin/mukcur.png" alt="photo_profile">
                        </td>
                        <td class="px-2 py-1 ">Barra Rafeyfa Zayann</td>
                        <td class="px-2 py-1">Ahli Teknologi dan Pengusaha Muda</td>
                        <td class="px-2 py-1 font-lg">
                            <div class="d-flex justify-content-center gap-2">
                                <div class="edit-container position-relative">
                                <img class="edit-icon position-absolute" src="/assets/img/admin/pencil.png" alt="edit_img">
                                    <button class="btn-edit fw-bolder py-1">Edit</button>
                                </div>
                                <div class="delete-container position-relative">
                                <img class="trash-icon position-absolute" src="/assets/img/admin/trash.png" alt="trash_img">
                                    <button class="btn-delete fw-bolder py-1">Hapus</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="font-smaller fb">
                        <td class="px-2 py-1 text-center">
                            <img class="photo-data" src="/assets/img/admin/mukcur.png" alt="photo_profile">
                        </td>
                        <td class="px-2 py-1 ">Barra Rafeyfa Zayann</td>
                        <td class="px-2 py-1">Ahli Teknologi dan Pengusaha Muda</td>
                        <td class="px-2 py-1 font-lg">
                            <div class="d-flex justify-content-center gap-2">
                                <div class="edit-container position-relative">
                                <img class="edit-icon position-absolute" src="/assets/img/admin/pencil.png" alt="edit_img">
                                    <button class="btn-edit fw-bolder py-1">Edit</button>
                                </div>
                                <div class="delete-container position-relative">
                                <img class="trash-icon position-absolute" src="/assets/img/admin/trash.png" alt="trash_img">
                                    <button class="btn-delete fw-bolder py-1">Hapus</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection