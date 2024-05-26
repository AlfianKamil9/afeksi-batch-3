@extends('.../layout-admin')

@section('title', 'Kelola Event | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="/assets/css/admin-event.css">
@endsection

@section('sidebarContent')
    <div class="m-4">
        <p class="jdl fs-4 mb-0">Pengelolaan Event</p>
        <p class="fs-6 mb-0">Kelola dan atur semua acara dan kegiatan terkait.</p>
        <div class="container-fluid mt-2 p-0">
            <div class="box d-flex">
                <nav class="py-2 align-content-center w-100">
                    <div class="nav" id="nav-tab" role="tab">
                        <p class="text-tab m-0 fs-5 fw-semibold nav-link active mt-1" id="nav-webinar-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-webinar" role="tab" aria-controls="nav-webinar"
                            aria-selected="true">Webinar</p>
                        <p class="text-tab m-0 fs-5 fw-semibold nav-link mt-1" id="nav-campaign-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-campaign" role="tab" aria-controls="nav-campaign"
                            aria-selected="false">Campaign</p>
                        <form class="form-inline d-flex align-content-center my-2 gap-2 me-3 form-action">
                            <form action="{{ route('admin.events') }}" method="GET">
                                <div class="search-container">
                                    <img class="search-icon" src="/assets/img/admin/search.png" alt="search img"
                                        style="width: 20px; height:20px;">
                                    <input class="inp-search h-100" type="text" name="search" placeholder="Search..."
                                        value="{{ request('search') }}">
                                </div>
                            </form>
                            <div class="filter-container">
                                <button class="btn btn-1 btn-filter fw-semibold h-100">Filter</button>
                                <img class="filter-icon" src="/assets/img/admin/filter.png" alt="filter img"
                                    style="width: 17px; height:17px;">
                            </div>
                            <a href="{{ route('admin.event.add') }}" type="button" class="btn btn-1 btn-warning fw-bold"
                                style="color: #060E7A;">Tambahkan Data</a>
                        </form>
                    </div>
                </nav>
            </div>
            <div class="box-2 tab-content" id="tab-content">
                <div class="tab-pane fade show active" id="nav-webinar" role="tabpanel" aria-labelledby="content-event-tab">
                    <div class="mt-1 ms-3">
                        <button class="count btn fw-bold px-4 py-0 font-small my-1">2 Webinar</button>
                        <p class="mb-1 font-small">Ini adalah Webinar yang telah dibuat</p>
                    </div>
                    <div class="mt-1 w-100 table-responsive mb-1">
                        <table class="w-100">
                            <tr class="fw-semibold text-center font-small"
                                style="background-color: #1121B7; color: #FFFFFF; height: 47px;">
                                <th class="id">ID</th>
                                <th class="title">Title</th>
                                <th class="date">Date</th>
                                <th class="ts">Time Start</th>
                                <th class="category">Category</th>
                                <th class="part">Participant</th>
                                <th class="status">Status</th>
                                <th class="action">Aksi</th>
                                <th class="detail">
                                    <img class="m-0 p-0" src="/assets/img/admin/detail.png" alt="img_detail"
                                        style="width: 18px; height: 18px ;">
                                </th>
                            </tr>
                            <tr class="dataTab text-center font-small">
                                <td>1</td>
                                <td class="text text-start ps-2">lorem ipsum</td>
                                <td>Sabtu, 24/09/23</td>
                                <td>09:30 WIB</td>
                                <td>Online Zoom</td>
                                <td>500</td>
                                <td class="text-center align-items-center px-2" style="height: 47px;">
                                    <button id="status" class="status-event p-0 w-100 fw-semibold">Selesai</button>
                                </td>
                                <td>
                                    <div class="inline d-flex justify-content-center align-items-center">
                                        <div class="edit-container d-flex align-items-center w-75">
                                            <img class="edit-icon" src="/assets/img/admin/pencil.png" alt="edit_img">
                                            <button class="btn btn-edit fw-bold p-0 m-0 ps-3 ms-1 pe-1">
                                                <p class="m-0 p-0 ps-1">Edit</p>
                                            </button>
                                        </div>
                                        <div class="d-flex align-items-center w-75 position-relative">
                                            <img class="trash-icon" src="/assets/img/admin/trash.png" alt="trash_img">
                                            <button class="btn btn-delete fw-bold p-0 m-0 w-100 me-1 ps-3 pe-1">
                                                <p class="m-0 p-0 ps-1">Hapus</p>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn">
                                        <img class="m-0 p-0" src="/assets/img/admin/detail-2.png" alt="img_detail"
                                            style="width: 18px; height: 18px ; cursor:pointer;">
                                    </button>
                                </td>
                            </tr>
                            <tr class="dataTab text-center font-small">
                                <td>2</td>
                                <td class="text text-start ps-2">lorem ipsum</td>
                                <td>Sabtu, 24/09/23</td>
                                <td>09:30 WIB</td>
                                <td>Online Zoom</td>
                                <td>500</td>
                                <td class="text-center align-items-center px-2" style="height: 47px;">
                                    <button id="status" class="status-event w-100 fw-semibold">Pending</button>
                                </td>
                                <td>
                                    <div class="inline d-flex justify-content-center align-items-center">
                                        <div class="edit-container d-flex align-items-center w-75">
                                            <img class="edit-icon" src="/assets/img/admin/pencil.png" alt="edit_img">
                                            <button class="btn btn-edit fw-bold p-0 m-0 ps-3 ms-1 pe-1">
                                                <p class="m-0 p-0 ps-1">Edit</p>
                                            </button>
                                        </div>
                                        <div class="d-flex align-items-center w-75 position-relative">
                                            <img class="trash-icon" src="/assets/img/admin/trash.png" alt="trash_img">
                                            <button class="btn btn-delete fw-bold p-0 m-0 w-100 me-1 ps-3 pe-1">
                                                <p class="m-0 p-0 ps-1">Hapus</p>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn">
                                        <img class="m-0 p-0" src="/assets/img/admin/detail-2.png" alt="img_detail"
                                            style="width: 18px; height: 18px ; cursor:pointer;">
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-campaign" role="tabpanel" aria-labelledby="content-campaign-tab">
                    <div class="mt-1 ms-3">
                        <button class="count btn fw-bold px-4 py-0 font-small my-1">{{ $jumlahCampaign }} Campaign</button>
                        <p class="mb-1 font-small">Ini adalah Campaign yang telah dibuat</p>
                    </div>
                    <div class="mt-1 w-100 table-responsive mb-1">
                        <table class="w-100">
                            <tr class="fw-semibold text-center font-small"
                                style="background-color: #1121B7; color: #FFFFFF; height: 47px;">
                                <th class="id">ID</th>
                                <th class="title">Title</th>
                                <th class="date">Date</th>
                                <th class="ts">Time Start</th>
                                <th class="category">Category</th>
                                <th class="part">Participant</th>
                                <th class="status">Status</th>
                                <th class="action">Aksi</th>
                                <th class="detail">
                                    <img class="m-0 p-0" src="/assets/img/admin/detail.png" alt="img_detail"
                                        style="width: 18px; height: 18px ;">
                                </th>
                            </tr>
                            @foreach ($dataCampaign as $index => $data)
                                <tr class="dataTab text-center font-small">
                                    <td>{{ ++$index }}</td>
                                    <td class="text text-start ps-2">{{ $data->title_event }}</td>
                                    <td>{{ $data->date_event }}</td>
                                    <td>{{ $data->time_start }}</td>
                                    <td>{{ $data->event_categories->category_event_name }}</td>
                                    <td>{{ $data->partisipan == null ? '-' : $data->partisipan }}</td>
                                    <td class="text-center align-items-center px-2" style="height: 47px;">
                                        <button id="status"
                                            class="status-event 
                                            @if ($data->status_event == 'ONGOING') bg-primary text-light
                                            @elseif($data->status_event == 'FINISH')
                                                bg-success text-light
                                            @else
                                                bg-dark text-light @endif
                                                p-0 w-100 fw-semibold">{{ $data->status_event }}</button>
                                    </td>
                                    <td>
                                        <div class="inline d-flex justify-content-center align-items-center">
                                            <div class="edit-container d-flex align-items-center w-75">
                                                <img class="edit-icon" src="/assets/img/admin/pencil.png" alt="edit_img">
                                                <button class="btn btn-edit fw-bold p-0 m-0 ps-3 ms-1 pe-1">
                                                    <p class="m-0 p-0 ps-1">Edit</p>
                                                </button>
                                            </div>
                                            <div class="d-flex align-items-center w-75 position-relative">
                                                <img class="trash-icon" src="/assets/img/admin/trash.png"
                                                    alt="trash_img">
                                                <button class="btn btn-delete fw-bold p-0 m-0 w-100 me-1 ps-3 pe-1" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $data->id }}">
                                                    <p class="m-0 p-0 ps-1">Hapus</p>
                                                </button>

                                                <div class="modal fade" id="deleteModal{{ $data->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Apakah Anda yakin ingin menghapus?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <a id="deleteLink" href="/admin/delete/{{ $data->id }}" class="btn btn-danger">Hapus</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn">
                                            <img class="m-0 p-0" src="/assets/img/admin/detail-2.png" alt="img_detail"
                                                style="width: 18px; height: 18px ; cursor:pointer;">
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    {{ $dataCampaign->links() }}
                </div>
            </div>
        </div>
    </div>

@section('script')
    <script>
        const statusTags = document.querySelectorAll('.status-event');
        statusTags.forEach((statusTag) => {
            const status = statusTag.textContent.trim()
            if (status === 'Selesai') {
                statusTag.style.backgroundColor = '#B4FAA5';
                statusTag.style.color = '#056331';
            } else if (status === 'Pending') {
                statusTag.style.backgroundColor = '#FFF2B8';
                statusTag.style.color = '#772B03';
            }
        })
    </script>
@endsection
@endsection
