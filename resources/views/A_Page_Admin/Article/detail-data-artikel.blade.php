@extends('../layout-admin')

@section('title', 'Event Admin | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="../../assets/css/artikel/detailartikel.css">
@endsection

@section('sidebarContent')
    <div class="container p-4">
        <div>
            <h4 class="fw-bold">Pengelolaan Data Artikel</h4>
            <p>Kelola dan atur semua artikel terkait yang relevan dengan topik</p>
        </div>
        <div class="mt-3 bg-event shadow-sm">
            <div class="p-3">
                <h1 class="fw-bold fs-5 m-0">Detail Data Artikel</h1>
            </div>
            <hr />
            <div class="row p-3 mt-3 ">
                <div class="col-md-6">
                    <div class="mb-4 d-flex align-items-start">
                        <label class="form-label">Judul Artikel</label>
                        <span class="me-3">:</span>
                        <p>{{ $artikel->judul_artikel }}</p>
                    </div>
                    <div class="mb-4 d-flex align-items-start">
                        <label class="form-label ">Slug</label>
                        <span class="me-3">:</span>
                        <p>https://afeksi.ahay.my.id/{{ $artikel->slug }}</p>
                    </div>
                    <div class="mb-4 d-flex align-items-start">
                        <label class="form-label ">Topik</label>
                        <span class="me-3">:</span>
                        <p>{{ $artikel->topik }}</p>
                    </div>
                    <div class="mb-4 d-flex align-items-start">
                        <label class="form-label ">Tanggal Rilis</label>
                        <span class="me-3">:</span>
                        <p>{{ $artikel->tanggal_rilis }}</p>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="mb-4 d-flex align-items-start ">
                        <label for="formFile" class="form-label w-100">Gambar</label>
                        <span class="me-3">:</span>

                        <div class="mb-4">
                            <img src="/assets/img/artikel/{{$artikel->gambar}}" id="preview" alt="Preview Gambar"
                                class="img-preview w-50 h-50">
                        </div>
                    </div>
                    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img id="modalImage" src="#" class="img-fluid" alt="Gambar Preview">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4 d-md-grid align-items-start">
                    <div class="d-flex ">
                        <label class="form-label">Isi Artikel</label>
                        <span class="me-3 ms-0">:</span>
                    </div>
                    <textarea id="isi_artikel" class="form-control w-100" rows="10" disabled>
                        {!! $artikel->isi_artikel !!}
                    </textarea>
                </div>
            </div>
            <div class="text-center mt-3 mb-3 ">
                <button class="rounded-2 border-0 mb-3">Keluar</button>
            </div>
        </div>
    </div>

 
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#isi_artikel'))
            .then(editor => {
                editor.enableReadOnlyMode('read-only-mode');
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@section('script')
    <script src="/assets/js/detail-artikel.js"></script>
@endsection


@endsection
