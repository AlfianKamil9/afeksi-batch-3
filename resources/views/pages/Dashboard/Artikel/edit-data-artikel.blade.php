@extends('../layout-admin')

@section('title', 'Event Admin | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="../../assets/css/artikel/tambahartikel.css">
@endsection

@section('sidebarContent')
    <div class="container p-4">
        <div>
            <h4 class="fw-bold">Pengelolaan Data Artikel</h4>
            <p>Kelola dan atur semua artikel terkait yang relevan dengan topik</p>
        </div>
        <div class="mt-3 bg-event shadow-sm">
            <div class="p-3">
                <h1 class="fw-bold fs-5 m-0">Edit Data Artikel</h1>
            </div>
            <hr />
            <div class="row p-3 mt-3">
                <div class="col-md-6">
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label">Judul Artikel</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Slug</label>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Topik</label>
                        <select id="customSelect" class="form-select">
                            <option selected>-- Pilih Salah Satu --</option>
                            <option>Relationship</option>
                            <option>Pendidikan</option>
                            <option>Kesetaraan</option>
                            <option>Kesehatan</option>
                            <option>Family Issue</option>
                        </select>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Tanggal Rilis</label>
                        <input type="date" class="form-control" placeholder="Masukkan Tanggal" />
                    </div>
                </div>
                <div class="col-md-6 ms-auto">
                    <div>
                        <div class="mb-4 d-md-flex align-items-center">
                            <label for="formFile" class="form-label">Gambar</label>
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
                </div>
                <div class="col-md-12">
                    <div class="mb-4 d-md-flex align-items-start">
                        <label class="form-label">Isi Artikel</label>
                        <textarea class="form-control w-100" name="editor1" rows="10"></textarea>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3 mb-3 ">
                <button class="rounded-2 border-0 mb-3">Update</button>
            </div>
        </div>
    </div>


@section('script')
    <script src="/assets/js/artikel-dashboard.js"></script>
@endsection


@endsection
