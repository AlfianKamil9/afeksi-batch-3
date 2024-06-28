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
       <form action="{{ route('admin.articles.update', $artikel->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mt-3 bg-event shadow-sm">
        <div class="p-3">
            <h1 class="fw-bold fs-5 m-0">Edit Data Artikel</h1>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <hr />
        <div class="row p-3 mt-3">
            <div class="col-md-6">
                <div class="mb-4 d-md-flex align-items-center">
                    <label class="form-label">Judul Artikel</label>
                    <textarea class="form-control" rows="3" name="judul_artikel">{{ $artikel->judul_artikel }}</textarea>
                </div>
                <div class="mb-4 d-md-flex align-items-center">
                    <label class="form-label mb-0">Slug</label>
                    <input type="text" class="form-control ms-3" value="{{$artikel->slug}}" />
                </div>
                <div class="mb-4 d-md-flex align-items-center">
                    <label class="form-label mb-0">Topik</label>
                    <select id="customSelect" class="form-select ms-3" name="topik">
                        <option value="">-- Pilih Salah Satu --</option>
                        <option value="RELATIONSHIP">RELATIONSHIP</option>
                        <option value="PENDIDIKAN">PENDIDIKAN</option>
                        <option value="KESETARAAN">KESETARAAN</option>
                        <option value="KESEHATAN">KESEHATAN</option>
                        <option value="FAMILY ISSUE">FAMILY ISSUE</option>
                    </select>
                </div>
                
                <div class="mb-4 d-md-flex align-items-center">
                    <label class="form-label mb-0">Tanggal Rilis</label>
                    <input type="date" class="form-control ms-3" name="tanggal_rilis" placeholder="Masukkan Tanggal" value="{{$artikel->tanggal_rilis}}"/>
                </div>
            </div>
            <div class="col-md-6 ms-auto">
                <div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label for="formFile" class="form-label">Gambar</label>
                        <input class="form-control ms-3" name="gambar" type="file" id="formFile" accept="image/*" >
                    </div>
                    <div class="mb-4">
                        <img id="preview" alt="Preview Gambar" class="img-preview" src="/assets/img/artikel/{{$artikel->gambar}}" height="100">
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
                    <textarea class="form-control w-100 ms-3" name="isi_artikel" id="editor" rows="30">{{$artikel->isi_artikel}}</textarea>
                </div>
            </div>
        </div>
        <div class="text-center mt-3 mb-3 ">
            <input type="submit" class="rounded-2 border-0 mb-3" value="Update">
        </div>
    </div>
</form>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
{{-- @section('script')
    <script src="/assets/js/artikel-dashboard.js"></script>
@endsection --}}

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>




@endsection
