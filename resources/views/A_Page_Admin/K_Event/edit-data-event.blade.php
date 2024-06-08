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
                <h1 class="fw-bold fs-5 m-0 text-center">Edit Data</h1>
            </div>
            <hr />
            <div class="row p-3 mt-3">
                <div class="col-md-6">
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Category Event</label>
                        <select id="customSelect" class="form-select" name="category_event_id">
                            @foreach ($e as $item)
                                <option value="{{ $item->id }}" @if($item->id == $event->category_event_id) selected @endif >{{ $item->category_event_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Activity Categori Event</label>
                        <select id="customSelect" class="form-select">
                            <option value="WEBINAR" {{ $event->activity_category_event == 'WEBINAR' ? 'selected' : '' }}>Webinar</option>
                            <option value="CAMPAIGN" {{ $event->activity_category_event == 'CAMPAIGN' ? 'selected' : '' }}>Campaign</option>
                        </select>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label">Title Event</label>
                        <textarea class="form-control" rows="3" name="title_event" >{{ $event->title_event }}</textarea>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Slug Event</label>
                        <input type="text" class="form-control"  name="slug_event" value="{{ $event->slug_event }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Time Categori Event</label>
                        <select id="customSelect" class="form-select">
                            <option value="ONLINE" {{ $event->time_category_event == 'ONLINE' ? 'selected' : '' }}>Online Via Zoom</option>
                             <option value="OFFLINE" {{ $event->time_category_event == 'OFFLINE' ? 'selected' : '' }}>Offline</option>
                        </select>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Pay Category Event</label>
                        <select id="customSelect" class="form-select">
                             <option value="PAID" {{ $event->pay_category_event == 'PAID' ? 'selected' : '' }}>Berbayar</option>
                              <option value="FREE" {{ $event->pay_category_event == 'FREE' ? 'selected' : '' }}>Gratis</option>
                        </select>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Registration Start</label>
                        <input type="date" class="form-control" placeholder="Masukkan Tanggal" name="registration_start" value="{{ $event->registration_start }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Registration End</label>
                        <input type="date" class="form-control" placeholder="Masukkan Tanggal"  name="registration_end" value="{{ $event->registration_end }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Date Event</label>
                        <input type="date" class="form-control" placeholder="Masukkan Tanggal"  name="date_event" value="{{ $event->date_event }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Time Start</label>
                        <input type="time" class="form-control" placeholder="Masukkan Jam"  name="time_start" value="{{ $event->time_start }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Time Finish</label>
                        <input type="time" class="form-control" placeholder="Masukkan Jam"  name="time_finish" value="{{ $event->time_finish }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Price Event</label>
                        <input type="text" class="form-control" name="price_event" value="{{ $event->price_event }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Status Event</label>
                        <select id="customSelect" class="form-select">
                            <option value="ONGOING" {{ $event->status_event == 'ONGOING' ? 'selected' : '' }}>ONGOING</option>
                            <option value="FINISH" {{ $event->status_event == 'FINISH' ? 'selected' : '' }}>FINISH</option>
                            <option value="DRAFT" {{ $event->status_event == 'DRAFT' ? 'selected' : '' }}>DRAFT</option>
                        </select>
                    </div>

                </div>
                <div class="col-md-6 ms-auto">
                    <div>
                        <div class="mb-4 d-md-flex align-items-center">
                            <label for="formFile" class="form-label">Cover Event</label>
                            <input class="form-control" type="file" id="formFile" accept="image/*">
                        </div>
                        <div class="mb-4">
                            <img id="preview" alt="Preview Gambar" class="img-preview">
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
                        <label class="form-label">Description Event</label>
                        <textarea class="form-control" rows="3" name="description_event">{{ $event->description_event }}</textarea>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label me-2">Place</label>
                        <input type="text" class="form-control" name="is_place" value="{{ $event->is_place }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label me-2">Link</label>
                        <input type="text" class="form-control" name="isLink" value="{{ $event->isLink }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Total Partisipan</label>
                        <input type="text" class="form-control" name="partisipan" value="{{ $event->partisipan }}" />
                    </div>
                    <div>
                        <div class="mb-4 d-md-flex align-items-center">
                            <label for="formFile" class="form-label">Foto Acara</label>
                            <input class="form-control" type="file" name="foto_acara" id="previewFoto" accept="image/*">
                        </div>
                        <div class="mb-4">
                            <img id="previewimg" alt="Preview Gambar" class="img-preview">
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
            <div class="d-flex gap-2 justify-content-center">
                <button class="rounded-2 border-0 mt-md-0 mb-3 mb-md-4 btn-simpan">Simpan</button>
                <button class="rounded-2 border-0 mt-md-0 mb-3 mb-md-4 btn-hapus">Hapus</button>
                <button class="rounded-2 border-0 mt-md-0 mb-3 mb-md-4 btn-keluar">Keluar</button>
            </div>
        </div>
    </div>

@section('script')
    <script src="/assets/js/tambah-event.js"></script>
@endsection

@endsection
