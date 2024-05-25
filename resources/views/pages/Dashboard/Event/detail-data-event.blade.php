@extends('../layout-admin')

@section('title', 'Event Admin | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="../../assets/css/event/edit-detail-event.css">
@endsection

@section('sidebarContent')
    <div class="p-4">
        <div class="blur">
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
                        <input type="text" class="form-control" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Activity Categori Event</label>
                        <select id="customSelect" class="form-select">
                            <option selected>-- Pilih Salah Satu --</option>
                            <option>Webinar</option>
                            <option>Campaign</option>
                        </select>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label">Title Event</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Slug Event</label>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Time Categori Event</label>
                        <select id="customSelect" class="form-select">
                            <option selected>-- Pilih Salah Satu --</option>
                            <option>Online Zoom</option>
                            <option>Offline</option>
                        </select>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Pay Categori Event</label>
                        <select id="customSelect" class="form-select">
                            <option selected>-- Pilih Salah Satu --</option>
                            <option>Gratis</option>
                            <option>Berbayar</option>
                        </select>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Registration Start</label>
                        <input type="date" class="form-control" placeholder="Masukkan Tanggal"/>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Registration End</label>
                        <input type="date" class="form-control" placeholder="Masukkan Tanggal" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Date Event</label>
                        <input type="date" class="form-control" placeholder="Masukkan Tanggal" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0" for="timeStart">Time Start</label>
                        <input type="time" class="form-control" placeholder="Masukkan Jam" id="timeStart" data-timezone="WIB" />
                    </div>                    
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Time Finish</label>
                        <input type="time" class="form-control" placeholder="Masukkan Jam" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Price Event</label>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Status Event</label>
                        <select id="customSelect" class="form-select">
                            <option selected>-- Pilih Salah Satu --</option>
                            <option>Selesai</option>
                            <option>Pending</option>
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
                        <label class="form-label">Title Event</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Place</label>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Link</label>
                        <input type="text" class="form-control" />
                    </div>
                    <div>
                        <div class="mb-4 d-md-flex align-items-center">
                            <label for="formFile" class="form-label">Foto Acara</label>
                            <input class="form-control" type="file" id="previewFoto" accept="image/*">
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
            <div class="text-center">
                <button class="rounded-2 border-0 mt-lg-3 mt-md-0 mb-3 mb-md-4 btn-keluar">Keluar</button>
            </div>
        </div>
    </div>

@section('script')
    <script src="/assets/js/tambah-event.js"></script>
@endsection

@endsection