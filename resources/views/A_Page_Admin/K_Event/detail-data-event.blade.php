@extends('../layout-admin')

@section('title', 'Event Admin | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="../../assets/css/event/edit-detail-event.css">
@endsection

@section('sidebarContent')
    <div class="container p-4">
        <div>
            <h4 class="fw-bold">Pengelolaan Event</h4>
            <p>Kelola dan atur semua acara dan kegiatan terkait</p>
        </div>
        <div class="mt-3 bg-event shadow-sm">
            <div class="p-3">
                <h1 class="fw-bold fs-5 m-0 text-center">Detail Data</h1>
            </div>
            <hr />
            <div class="row p-3 mt-3">
                <div class="col-md-6">
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Category Event Id</label>
                        <input type="text" class="form-control"  disabled value="{{ $data->event_categories->category_event_name }}"/>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Activity Categori Event</label>
                        <select id="customSelect" class="form-select" disabled >
                            <option selected >{{ $data->activity_category_event }}</option>
                        </select>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label">Title Event</label>
                        <textarea class="form-control" disabled rows="3">{{ $data->title_event }}</textarea>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Slug Event</label>
                        <input type="text" class="form-control" disabled value="{{ $data->slug_event }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Time Categori Event</label>
                        <select id="customSelect" class="form-select" disabled>
                            <option selected>{{ $data->time_category_event }}</option>
                        </select>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Pay Categori Event</label>
                        <select id="customSelect" class="form-select" disabled>
                            <option selected>{{ $data->pay_category_event == 'FREE' ? 'GRATIS' : 'PAID' }}</option>
                        </select>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Registration Start</label>
                        <input type="date" class="form-control" disabled value="{{ $data->registration_start }}" placeholder="Masukkan Tanggal"/>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Registration End</label>
                        <input type="date" class="form-control" placeholder="Masukkan Tanggal" disabled value="{{ $data->registration_end }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Date Event</label>
                        <input type="date" class="form-control" placeholder="Masukkan Tanggal" disabled value="{{ $data->date_event }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0" for="timeStart">Time Start</label>
                        <input type="time" class="form-control" placeholder="Masukkan Jam" disabled value="{{ $data->time_start }}" />
                    </div>                    
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Time Finish</label>
                        <input type="time" class="form-control" placeholder="Masukkan Jam" disabled value="{{ $data->time_finish }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Price Event</label>
                        <input type="text" class="form-control" disabled value="{{ $data->price_event ? 'Rp. '.number_format($data->price_event) : 'Gratis' }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Status Event</label>
                        <select id="customSelect" class="form-select" disabled>
                            <option selected>{{ $data->status_event }}</option>
                        </select>
                    </div>

                </div>
                <div class="col-md-6 ms-auto">
                    <div>
                        <div class="mb-4 d-md-flex align-items-center">
                            <label for="formFile" class="form-label">Cover Event</label>
                            <input class="form-control" type="file" id="formFile" accept="image/*" disabled >
                        </div>
                        <div class="mb-4">
                            <img id="preview" style="width:200px; height:200px;"  alt="Preview Gambar" class="img-preview" src= '/assets/img/kegiatan/{{ $data->cover_event }}'>
                        </div>
                        <div class="modal fade" id="imageModal" tabindex="-1" role="dialog"
                            aria-labelledby="imageModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img id="modalImage" src="#" class="img-fluid" alt="Gambar Preview">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label">Descpription Event</label>
                        <textarea class="form-control" disabled style="height:200px">{!! $data->description_event !!}</textarea>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label me-4">Place</label>
                        <input type="text" class="form-control" disabled value="{{ $data->is_place }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label me-4">Link</label>
                        <input type="text" class="form-control" disabled value="{{ $data->isLink }}" />
                    </div>
                    <div>
                        <div class="mb-4 d-md-flex align-items-center">
                            <label for="formFile" class="form-label">Foto Acara</label>
                            <input class="form-control" type="file" id="previewFoto" accept="image/*" disabled >
                        </div>
                        <div class="mb-4">
                            @if ($data->foto_acara)
                                <img id="previewimg" style="width:400px; height:200px;" alt="Preview Gambar" class="img-preview" src='/assets/img/rekap-history/{{ $data->foto_acara }}' >
                            @else
                                <p>Belum Ada Foto</p>
                            @endif
                        </div>
                        <div class="modal fade" id="previewModal" tabindex="-1" role="dialog"
                            aria-labelledby="imageModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img id="modalImg" src="#" class="img-fluid" alt="Gambar Preview">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('admin.events.index') }}" class=" btn btn-primary rounded-2 border-0 mt-lg-3 mt-md-0 mb-3 mb-md-4 btn-keluar">Back</a>
            </div>
        </div>
    </div>

@section('script')
    <script src="/assets/js/tambah-event.js"></script>
@endsection

@endsection
