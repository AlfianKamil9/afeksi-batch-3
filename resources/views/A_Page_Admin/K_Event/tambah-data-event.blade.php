@extends('../layout-admin')

@section('title', 'Tambah Event | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="../../assets/css/event/dataevent.css">
@endsection

@section('sidebarContent')
    <div class="p-4">
        <div>
            <h4 class="fw-bold">Tambah Data Event</h4>
            <p>Tambahkan data acara dan kegiatan terkait</p>
        </div>
        <div class="mt-3 bg-event shadow-sm">
            <div class="p-3">
                <h1 class="fw-bold fs-5 m-0">Data Formulir</h1>
            </div>
            <hr />
            <div class="row p-3 mt-3">
                <div class="col-md-6">
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Category Event Id</label>
                        <select id="customSelect" class="form-select">
                            <option selected>-- Pilih Salah Satu --</option>
                            @foreach ($e as $t)    
                            <option value="{{ $t->id }}">{{ $t->category_event_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Activity Categori Event</label>
                        <select id="customSelect" class="form-select">
                            <option selected>-- Pilih Salah Satu --</option>
                            <option value="WEBINAR">Webinar</option>
                            <option value="CAMPAIGN">Campaign</option>
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
                            <option value="ONLINE">Online Zoom</option>
                            <option value="OFFLINE">Offline</option>
                        </select>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Pay Categori Event</label>
                        <select id="customSelect" class="form-select">
                            <option selected>-- Pilih Salah Satu --</option>
                            <option value="FREE">Gratis</option>
                            <option value="PAID">Berbayar</option>
                        </select>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Registration Start</label>
                        <input type="date" class="form-control" placeholder="Masukkan Tanggal" />
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
                        <label class="form-label mb-0">Time Start</label>
                        <input type="time" class="form-control" placeholder="Masukkan Jam" />
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
                            <option value="FINISH">Selesai</option>
                            <option value="ONGOING">Sedang Berjalan</option>
                            <option value="DRAFT">Segera Hadir</option>
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
                        {{-- <div class="mb-4 d-md-flex align-items-center">
                            <label for="formFile" class="form-label">Foto Acara</label>
                            <input class="form-control" type="file" id="previewFoto" accept="image/*">
                        </div> --}}
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
    </div>
    <div class="text-center mt-3 mb-3">
        <button class="rounded-2 border-0">Simpan</button>
    </div>

@section('script')
    <script src="/assets/js/tambah-event.js"></script>
@endsection

@endsection
