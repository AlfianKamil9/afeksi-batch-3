@extends('../layout-admin')

@section('title', 'Tambah Event | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="../../assets/css/event/dataevent.css">
@endsection

@section('sidebarContent')
<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="p-4">
        <div>
            <h4 class="fw-bold">Edit Data Event</h4>
            {{-- <p>Tambahkan data acara dan kegiatan terkait</p> --}}
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
                    {{-- <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Slug Event</label>
                        <input type="text" class="form-control" />
                    </div> --}}
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
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Status Event</label>
                        <select id="customSelect" class="form-select">
                            <option selected>-- Pilih Salah Satu --</option>
                            <option value="FINISH">Selesai</option>
                            <option value="ONGOING">Sedang Berjalan (ONGOING)</option>
                            <option value="DRAFT">Segera Hadir (DRAFT)</option>
                        </select>
                    </div>
                    <div>
                    </div>
                </div>

                <hr />
                <div class="p-3">
                    <div class="p-3 position-relative">
                        <div class="position-absolute top-0 start-0">
                            <h1 class="fw-bold fs-5 m-0">Sesi Acara</h1>
                        </div>
                        <div class="position-absolute top-0 end-0">
                            <button class="rounded-2 btn btn-primary" id="addSesi">Tambah Sesi</button>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="row p-3" id="formContainer">
                    <div  class="col-md-6 mb-2">
                         <h1 class="fw-bold fs-5 m-0">Sesi 1</h1>
                        <div class="mb-4 d-md-flex align-items-center">
                            <label class="form-label mb-0">Title Sesi</label>
                            <input type="text" name="title_sesi1" class="form-control" placeholder="Masukkan Judul Sesi" />
                        </div>
                        <div class="mb-4 d-md-flex align-items-center">
                            <label class="form-label mb-0">Guestars</label>
                            <select id="customSelect" name="pembicara_id1" class="form-select">
                                <option selected>-- Pilih Salah Satu --</option>
                                @foreach ($l as $l)    
                                <option value="{{ $l->id }}">{{ $l->nama_psikolog }}</option>
                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                </div>
        </div>
        
    </div>
    
</div>
    <div class="text-center mt-3 mb-3">
        <button class="rounded-2 border-0">Simpan</button>
    </div>
</form>
      

@section('script')
    <script>
         let c = 1;
         console.log(c);
        document.getElementById('addSesi').addEventListener('click', function (e) {
            e.preventDefault()
            c += 1;
            console.log(c);
            var formContainer = document.getElementById('formContainer');
            var newForm = document.createElement('div');
            newForm.classList.add('col-md-6');
            newForm.classList.add('mb-2');
            var items = @json($g)

            console.log('Items:', items);
                

            newForm.innerHTML = `
                <h1 class="fw-bold fs-5 m-0">Sesi ${c}</h1>
                 <div class="mb-4 d-md-flex align-items-center">
                            <label class="form-label mb-0">Title Sesi</label>
                            <input type="text" name="title_sesi${c}" class="form-control" placeholder="Masukkan Judul Sesi" />
                </div>
                 <div class="mb-4 d-md-flex align-items-center">
                            <label class="form-label mb-0">Guestars</label>
                            <select id="customSelect" name="pembicara_id${c}" class="form-select">
                                <option selected>-- Pilih Salah Satu --</option>
                                 ${items.map(item => `<option value="${item.id}">${item.nama_psikolog}</option>`).join('')}                            
                            </select>
                        </div>
                <button type="button" class="btn btn-danger" onclick="deleteForm(this)">Delete</button>
            `;

            formContainer.appendChild(newForm);
        });

        function deleteForm(button) {
        
            // Dapatkan elemen form sesi yang sesuai
            var form = button.closest('.col-md-6');
            // Hapus elemen form dari DOM
            form.remove();
            c -= 1;
            console.log(c);
        }
        </script>
    <script src="/assets/js/tambah-event.js"></script>
@endsection

@endsection
