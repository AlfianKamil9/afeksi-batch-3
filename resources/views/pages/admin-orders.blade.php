@extends('../layout-admin')
@section('title', 'Orders Admin | AFEKSI')

@section('styles')
<link rel="stylesheet" href="/assets/css/admin-orders.css">
@endsection

@section('sidebarContent')
<div class="content">
    <div class="m-4">
        <p class="jdl fs-4 mb-0">Pengelolaan Pesanan</p>
        <p class="fs-6 mb-0">Lakukan pengecekan semua pesanan dengan baik.</p>
        <div class="container-fluid mt-2 p-0">
            <div class="row gap-3">
                <div class="col col-lg-2">
                    <div class="box-1 py-5 d-flex justify-content-center align-items-center align-content-center" style="background-color: #DDFCD1;">
                        <div class="d-flex w-100 justify-content-center ">
                            <div class="box-content">
                                <p class="text-jml h-0 p-0 m-0">3</p>
                                <p class="text-det h-0 p-0 m-0">Semua Transaksi</p>
                            </div>
                            <div class="d-block m-0 p-0 ml-1 mt-1">
                                <img class="img-card" src="/assets/img/admin-order/order.png" alt="img_order">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-2">
                    <div class="box-1 py-5 d-flex justify-content-center align-items-center align-content-center" style="background-color: #98E7FB;">
                        <div class="d-flex w-100 justify-content-center ">
                            <div class="box-content">
                                <p class="text-jml h-0 p-0 m-0">2</p>
                                <p class="text-det h-0 p-0 m-0">Transaksi Sukses</p>
                            </div>
                            <div class="d-block m-0 p-0 ml-1 mt-1">
                                <img class="img-card" src="/assets/img/admin-order/transaction.png" alt="img_transaction">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-2">
                    <div class="box-1 py-5 d-flex justify-content-center align-items-center align-content-center" style="background-color: #FEDF9F;">
                        <div class="d-flex w-100 justify-content-center ">
                            <div class="box-content">
                                <p class="text-jml h-0 p-0 m-0">1</p>
                                <p class="text-det h-0 p-0 m-0">Transaksi Pending</p>
                            </div>
                            <div class="d-block m-0 p-0 ml-1 mt-1">
                                <img class="img-card" src="/assets/img/admin-order/pending.png" alt="img_transaction">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box mt-4">
            <div class="d-flex justify-content-end p-2">
                <form class="form-inline d-flex align-content-end my-2 gap-2 me-3 form-action">
                    <div class="search-container">
                        <img class="search-icon" src="/assets/img/admin/search.png" alt="search img" style="width: 20px; height:20px;">
                        <input class="inp-search h-100" type="text" placeholder="Search...">
                    </div>
                    <div class="filter-container">
                        <button class="btn btn-1 btn-filter fw-semibold h-100">Filter</button>
                        <img class="filter-icon" src="/assets/img/admin/filter.png" alt="filter img" style="width: 17px; height:17px;">
                    </div>
                </form>
            </div>
            <div class="table-responsive mt-1 mb-1 w-100">
                <table class="w-100">
                    <tr class="fw-semibold text-center font-small" style="background-color : #1121B7; color: white; height: 47px;">
                        <th class="code">Kode Referensi</th>
                        <th class="layanan">Layanan</th>
                        <th class="status" id="status">Status</th>
                        <th class="total">Total Bayar</th>
                        <th class="action">Aksi</th>
                        <th class="detail">
                            <img class="m-0 p-0" src="/assets/img/admin/detail.png" alt="img_detail" style="width: 18px; height: 18px ;">
                        </th>
                    </tr>
                    <tr class="dataTab text-center font-small fw-semibold">
                        <td>#123456</td>
                        <td>Konseling</td>
                        <td>
                            <div class="d-flex justify-content-center align-content-center">
                                <button class="status-event fw-bold font-small">Sukses</button>
                            </div>
                        </td>
                        <td>Rp. 95,000,.</td>
                        <td>
                            <div class="d-flex justify-content-center align-content-center align-content-lg-center gap-1 px-1">
                                <div class="alert-container position-relative">
                                    <img class="btn-icon-1 position-absolute" src="/assets/img/admin-order/alert.png" alt="alert_img">
                                    <button class="btn btn-alert fw-bold font-small">Pengingat</button>
                                </div>
                                <div class="delete-container position-relative">
                                    <img class="btn-icon-2 position-absolute" src="/assets/img/admin/trash.png" alt="trash_img">
                                    <button class="btn btn-delete fw-bold font-small">Hapus</button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <img class="m-0 p-0" src="/assets/img/admin-order/detail.png" alt="img_detail" style="width: 18px; height: 18px ;">
                        </td>
                    </tr>
                    <tr class="dataTab text-center font-small fw-semibold">
                        <td>#123456</td>
                        <td>Konseling</td>
                        <td>
                        <div class="d-flex justify-content-center align-content-center">
                                <button class="status-event fw-bold font-small">Pending</button>
                            </div>
                        </td>
                        <td>Rp. 95,000,.</td>
                        <td>
                            <div class="d-flex justify-content-center align-content-center align-content-lg-center gap-1 px-1">
                                <div class="alert-container position-relative">
                                    <img class="btn-icon-1 position-absolute" src="/assets/img/admin-order/alert.png" alt="alert_img">
                                    <button class="btn btn-alert fw-bold font-small">Pengingat</button>
                                </div>
                                <div class="delete-container position-relative">
                                    <img class="btn-icon-2 position-absolute" src="/assets/img/admin/trash.png" alt="trash_img">
                                    <button class="btn btn-delete fw-bold font-small">Hapus</button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <img class="m-0 p-0" src="/assets/img/admin-order/detail.png" alt="img_detail" style="width: 18px; height: 18px ;">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@section('script')
<script>
    const statusTags = document.querySelectorAll('.status-event');
    statusTags.forEach((statusTag) => {
        const status = statusTag.textContent.trim()
        if (status === 'Sukses') {
            statusTag.style.backgroundColor = '#98E7FB';
            statusTag.style.color = '#003881';
        } else if (status === 'Pending') {
            statusTag.style.backgroundColor = '#FEDF9F';
            statusTag.style.color = '#903C05';
        }
    })
</script>
@endsection
@endsection