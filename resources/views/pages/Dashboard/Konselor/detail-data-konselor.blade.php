@extends('../layout-admin')

@section('title', 'Konselor Admin | AFEKSI')


@section('styles')
    <link rel="stylesheet" href="../../assets/css/konselor/detail-konselor.css">
@endsection

@section('sidebarContent')
    <div class="container p-4">
        <div>
            <h4 class="fw-bold">Pengelolaan Data Konselor</h4>
            <p>Kelola dan atur semua konselor dengan baik</p>
        </div>
        <div class="mt-3 bg-event shadow-sm">
            <div class="p-3">
                <h1 class="fw-bold fs-5 m-0 ">Detail Data Konselor</h1>
            </div>
            <hr />
            <div class="row p-3 mt-3">
                <div class="col-md-12">
                    <div class="d-md-flex justify-content-md-start d-grid">
                        <div class="img-psikolog">
                            <img src="/assets/img/admin/profile.png" id="image" />
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="d-flex align-items-start mb-4">
                        <div class="col-md-2 col-4">
                            <label class="form-label">Email</label>
                        </div>
                        <span>:</span>
                        <div class="edit-psikolog ms-2">
                            <p class="mb-0">stefanyandriani@fincainc.com</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-4">
                        <div class="col-md-2 col-4">
                            <label class="form-label">Nama</label>
                        </div>
                        <span>:</span>
                        <div class="edit-psikolog ms-2">
                            <p class="mb-0">Stefany Andriani, S.Psi., M.Psi</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-4">
                        <div class="col-md-2 col-4">
                            <label class="form-label">Profile</label>
                        </div>
                        <span>:</span>
                        <div class="edit-psikolog ms-2 ">
                            <p class="mb-0">Seorang Konselor berlisensi, pengalaman 3 tahun dalam kesehatan mental.
                                Lulusan dari Universitas Indonesia dengan gelar Magister Psikologi, Stefany telah menangani
                                berbagai kasus mulai dari kecemasan, depresi, dan masalah keluarga.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-4">
                        <div class="col-md-2 col-4">
                            <label class="form-label">Pendidikan</label>
                        </div>
                        <span>:</span>
                        <div class="edit-psikolog ms-2 ">
                            <p class="mb-0">Magister Psikologi</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-md-5 mt-3">
                    <button class="btn-psikolog">Keluar</button>
                </div>

            </div>
        </div>
    </div>
@endsection
