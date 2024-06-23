@extends('../layout-admin')

@section('title', 'Konselor Admin | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="../../assets/css/konselor/edit-konselor.css">
@endsection

@section('sidebarContent')
    <div class="container p-4">
        <div>
            <h4 class="fw-bold">Pengelolaan Data Konselor</h4>
            <p>Kelola dan atur semua konselor dengan baik</p>
        </div>
        <div class="mt-3 bg-event shadow-sm">
            <div class="p-3">
                <h1 class="fw-bold fs-5 m-0 ">Edit Data Konselor</h1>
            </div>
            <hr />
            <div class="row p-3 mt-3">
                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center justify-content-center justify-content-md-start ">
                        <div class="img-psikolog">
                            <img src="/assets/img/admin/profile.png" id="image" class="text-center" />
                        </div>
                        <div class="ms-md-5 mt-md-0 mt-4 d-flex gap-md-3 gap-2">
                            <div>
                                <button id="pilihfile">Pilih Foto</button>
                                <input type="file" id="fileInput" accept="image/*" />
                            </div>
                            <div>
                                <button id="hapusfile">Hapus Foto</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="d-md-flex align-items-start mb-4">
                        <div class="col-md-2">
                            <label class="form-label">Email</label>
                        </div>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="d-md-flex align-items-start mb-4">
                        <div class="col-md-2">
                            <label class="form-label">Nama</label>
                        </div>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="d-md-flex align-items-start mb-4">
                        <div class="col-md-2">
                            <label class="form-label">Profile</label>
                        </div>
                        <textarea rows="3" class="form-control"></textarea>
                    </div>
                    <div class="d-md-flex align-items-start mb-4">
                        <div class="col-md-2">
                            <label class="form-label">Pendidikan</label>
                        </div>
                        <input type="text" class="form-control" />
                    </div>
                </div>
                <div class="text-center mt-md-5 mt-3">
                    <button class="btn-psikolog">Update</button>
                </div>

            </div>
        </div>
    </div>

@section('script')
    <script src="/assets/js/konselor.js"></script>
@endsection

@endsection
