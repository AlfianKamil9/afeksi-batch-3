@extends('../layout-admin')
@section('title', 'Psikologi Admin | AFEKSI')

@section('styles')
<link rel="stylesheet" href="/assets/css/admin-psychology.css">
@endsection

@section('sidebarContent')
<div class="m-4">
    <p class="fw-bold fs-4 mb-0">Pengelolaan Psikolog</p>
    <p class="fs-6 mb-0">Kelola dan atur semua psikolog dengan baik</p>
    <div class="container-fluid mt-2 p-0">
        <div class="box p-0 mb-0">
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
                    <p class="text-count p-0 m-0 fw-bolder text-center font-small">12 Psikolog</p>
                </div>
                <p class="mb-0 mt-2 font-small">Berikut ini daftar Guestar Psikolog yang telah dibuat</p>
            </div>
            <form action="" class="w-100 mt-1 table-responsive p-0">
                <table class="w-100 m-0">
                    <tr class="fw-bold text-center font-small t-head">
                        <th class="th photo">Foto</th>
                        <th class="th email">Email</th>
                        <th class="th name">Nama</th>
                        <th class="th profile">Profile</th>
                        <th class="th pendidikan">Pendidikan</th>
                        <th class="th aksi-gs">Aksi</th>
                        <th class="th detail">
                            <img class="m-0 p-0" src="/assets/img/admin/detail.png" alt="img_detail" style="width: 18px; height: 18px ;">
                        </th>
                    </tr>
                    <tr class="font-smaller fb">
                        <td class="p-1 px-2">
                            <img src="/assets/img/admin/psikolog.png" alt="img_psikolog" class="img-psy">
                        </td>
                        <td class="text-center p-1">fibeb50477@fincainc.com</td>
                        <td class="text-center p-1">Joanna Friska Ganessa</td>
                        <td class="p-1">Seorang psikolog berlisensi, pengalaman 5 tahun di kesehatan mental dan terapi.</td>
                        <td class="p-1">Magister Psikologi Klinis</td>
                        <td class="p-1">
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
                        <td class="text-center">
                            <img class="m-0 p-0" src="/assets/img/admin/detail-2.png" alt="img_detail" style="width: 18px; height: 18px ; cursor:pointer;">
                        </td>
                    </tr>
                    <tr class="font-smaller fb">
                        <td class="p-1 px-2">
                            <img src="/assets/img/admin/psikolog.png" alt="img_psikolog" class="img-psy">
                        </td>
                        <td class="text-center p-1">fibeb50477@fincainc.com</td>
                        <td class="text-center p-1">Joanna Friska Ganessa</td>
                        <td class="p-1">Seorang psikolog berlisensi, pengalaman 5 tahun di kesehatan mental dan terapi.</td>
                        <td class="p-1">Magister Psikologi Klinis</td>
                        <td class="p-1">
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
                        <td class="text-center">
                            <img class="m-0 p-0" src="/assets/img/admin/detail-2.png" alt="img_detail" style="width: 18px; height: 18px ; cursor:pointer;">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection