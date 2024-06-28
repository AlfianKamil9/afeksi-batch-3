@extends('../layout-admin')

@section('title', 'Artikel Admin | AFEKSI')

@section('styles')
<link rel="stylesheet" href="/assets/css/artikel/admin-articleGueststar.css">
@endsection

@section('sidebarContent')
<div class="m-4">
    <p class="fw-bold fs-4 mb-0">Pengelolaan Artikel</p>
    <p class="fs-6 mb-0">Berikut ini daftar Artikel yang telah dibuat</p>
    <div class="container-fluid mt-2 p-0">
        <div class="box mb-0">
            <div class="d-flex justify-content-end gap-2 me-2 py-2">
                <form action="{{ route('admin.articles.search') }}" method="post">
                    @csrf
                    <div class="search-container position-relative">
                        <img class="search-icon position-absolute" src="/assets/img/admin/search.png" alt="search_img">
                            <input class="inp-search font-small py-1" type="text" name="search" placeholder="Search...">
                        </div>
                </form>
                
                <a type="button" href="{{ route('admin.articles.create') }}" class="btn btn-warning btn-add font-small py-1 px-2 fw-bold">Tambahkan Data</a>
            </div>
        </div>
        <div class="box-2 mb-0">
            <div class="d-block ms-2 py-2">
                <div class="count-info">
                    <p class="text-count p-0 m-0 fw-bolder text-center font-small">{{ $artikels->count() }} Artikel</p>
                </div>
                <p class="mb-0 mt-2 font-small">Berikut ini daftar Artikel yang telah dibuat</p>
            </div>
            <form action="" class="w-100 mt-1 table-responsive p-0">
                <table class="w-100 m-0">
                    <tr class="fw-bold text-center font-small t-head">
                        <th class="th title">Title</th>
                        <th class="th date">Date</th>
                        <th class="th jdl">Topik</th>
                        <th class="th slug">Slug</th>
                        <th class="th aksi">Aksi</th>
                        <th class="th detail">
                        <img class="m-0 p-0" src="/assets/img/admin/detail.png" alt="img_detail" style="width: 18px; height: 18px ;">
                        </th>
                    </tr>
                     @foreach ($artikels as $artikel)
                        <tr class="font-smaller fb">
                            <td class="px-2 py-1">{{ $artikel->judul_artikel }}</td>
                            <td class="px-2 py-1 text-center">{{ $artikel->created_at }}</td>
                            <td class="px-2 py-1 ">{{ $artikel->topik }}</td>
                            <td class="px-2 py-1">{{ $artikel->slug }}</td>
                            <td class="px-2 py-1 font-lg">
                                <div class="d-flex justify-content-center gap-2">
                                    <div class="edit-container position-relative">
                                    <img class="edit-icon position-absolute" src="/assets/img/admin/pencil.png" alt="edit_img">
                                        <a href="{{ route('admin.articles.edit', $artikel->id) }}" type="button" class="btn btn-primary btn-edit fw-bolder py-1">Edit</a>
                                    </div>
                                    <div class="delete-container position-relative">
                                    <img class="trash-icon position-absolute" src="/assets/img/admin/trash.png" alt="trash_img">
                                        <a href="{{ route('admin.articles.delete', $artikel->id) }}" class="btn-delete fw-bolder py-1">Hapus</a>
                                    </div>
                                </div>
                            </td>
                            <td class="px-2 py-1 text-center">
                                <a href="{{ route('admin.articles.detail', $artikel->id) }}"><img class="m-0 p-0" src="/assets/img/admin/detail-2.png" alt="img_detail" style="width: 18px; height: 18px ; cursor:pointer;"></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </form>
        </div>
    </div>
</div>
@endsection