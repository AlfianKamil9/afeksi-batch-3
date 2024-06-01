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
                        <p>Pentingnya membangun hubungan yang sehat dalam kehidupan</p>
                    </div>
                    <div class="mb-4 d-flex align-items-start">
                        <label class="form-label ">Slug</label>
                        <span class="me-3">:</span>
                        <p>https://afeksi.ahay.my.id/artikel</p>
                    </div>
                    <div class="mb-4 d-flex align-items-start">
                        <label class="form-label ">Topik</label>
                        <span class="me-3">:</span>
                        <p>Pendidikan</p>
                    </div>
                    <div class="mb-4 d-flex align-items-start">
                        <label class="form-label ">Tanggal Rilis</label>
                        <span class="me-3">:</span>
                        <p>Sabtu, 29/04/2024</p>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="mb-4 d-flex align-items-start ">
                        <label for="formFile" class="form-label w-100">Gambar</label>
                        <span class="me-3">:</span>

                        <div class="mb-4">
                            <img src="/assets/img/article/cardImg.png" id="preview" alt="Preview Gambar"
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
                <div class="col-md-12">
                    <div class="mb-4 d-md-grid align-items-start">
                        <div class="d-flex ">
                            <label class="form-label">Isi Artikel</label>
                            <span class="me-3 ms-0">:</span>
                        </div>
                        <textarea class="form-control w-100" rows="10">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus dolor. Mauris at feugiat nulla. Morbi a risus at risus molestie euismod vel sit amet erat. Morbi et facilisis nunc. Etiam rhoncus vitae felis vel ultrices. Cras tincidunt fermentum gravida. In in orci et nibh pretium ultrices id id turpis. Nam nec justo sed justo efficitur vestibulum in id nulla. Proin at tristique felis. Vivamus id libero sed dolor tempor eleifend. Mauris suscipit eget magna eget lacinia.

                            Cras convallis commodo neque vel venenatis. Aenean augue risus, congue sed dui ullamcorper, ultricies pretium sem. Vivamus sit amet hendrerit eros. Mauris vitae nisi mi. Maecenas placerat mi ac ultrices tincidunt. Phasellus blandit leo in ligula faucibus, vel feugiat neque feugiat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum quis arcu magna. Maecenas molestie massa vel euismod dapibus.

                            Proin eu faucibus felis. In elit odio, tempus auctor volutpat sit amet, condimentum sed est. Sed egestas odio sem, non placerat mauris sagittis non. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras placerat nisi tincidunt ligula dapibus, vel interdum orci mollis.
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3 mb-3 ">
                <button class="rounded-2 border-0 mb-3">Keluar</button>
            </div>
        </div>
    </div>


@section('script')
    <script src="/assets/js/detail-artikel.js"></script>
@endsection


@endsection
