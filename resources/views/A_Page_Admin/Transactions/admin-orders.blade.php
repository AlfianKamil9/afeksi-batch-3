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
                                <p class="text-jml h-0 p-0 m-0">{{ $order->count() }}</p>
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
                                <p class="text-jml h-0 p-0 m-0">{{ $order->where('status', 'PAID')->count() }}</p>
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
                                <p class="text-jml h-0 p-0 m-0">{{ $order->where('status', 'PENDING')->count() }}</p>
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
        <div class="box mt-4 mb-3">
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
            <div class="table-responsive mt-1 mb-1 w-100 p-2">
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
                    @if ($order->count() != 0)
                        @foreach ($order as $item)     
                        <tr class="dataTab text-center font-small fw-semibold">
                            <td>{{ $item->ref_transaction_layanan }}</td>
                            <td>
                                @if (Str::substr($item->ref_transaction_layanan, 0, 3) == "DEV")
                                    Mentoring
                                @elseif(Str::substr($item->ref_transaction_layanan, 0, 5) == 'PEERS')
                                    Peers Konseling
                                @else
                                   Profesional Konseling                        
                                @endif
                            </td>
                            <td>
                                <div class="d-flex justify-content-center align-content-center">
                                    @if ($item->status == 'PENDING')
                                        <button class="status-event fw-bold font-small  btn btn-warning ">{{ $item->status }}</button>
                                    @elseif($item->status == 'PAID')
                                        <button class="status-event fw-bold font-small  btn btn-success">{{ $item->status }}</button>
                                    @elseif($item->status == 'UNPAID')
                                        <button class="status-event fw-bold font-small  btn btn-dark">EXPIRED</button>
                                    @else
                                        <button class="status-event fw-bold font-small btn  btn-danger">{{ $item->status }}</button>
                                    @endif
                                </div>
                            </td>
                            <td>Rp.
                                @if ($item->total_payment)
                                    {{ number_format( $item->total_payment, '0', '.' ) }}
                                @else
                                    @if ($item->paket_layanan_mentoring)
                                        {{ number_format( $item->paket_layanan_mentoring->harga, '0', '.' ) }}
                                    @else
                                        {{ number_format( $item->paket_layanan_konseling->harga, '0', '.' ) }}
                                    @endif
                                @endif
                                </td>
                            <td>
                                <div class="d-flex justify-content-center align-content-center align-content-lg-center gap-1 px-1">
                                    <div class="alert-container position-relative">
                                        @if ($item->status != 'UNPAID')
                                            @if ($item->status == 'PAID')
                                                Selesai
                                            @else
                                                 <img class="btn-icon-1 position-absolute" src="/assets/img/admin-order/alert.png" alt="alert_img">
                                                 <button class="btn btn-alert fw-bold font-small">Pengingat</button> 
                                            @endif
                                        @endif
                                    </div>
                                    @if ($item->status == 'UNPAID' || $item->status == 'EXPIRED')    
                                    <div class="delete-container position-relative">
                                        <form action="{{ route('admin.transactions.delete', $item->ref_transaction_layanan) }}" method="post">
                                            @csrf
                                            <img class="btn-icon-2 position-absolute" src="/assets/img/admin/trash.png" alt="trash_img">
                                            <button type="submit" class="btn btn-delete fw-bold font-small">Hapus</button>
                                        </form>
                                    </div>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('admin.transactions.detail', $item->ref_transaction_layanan) }}">
                                    <img class="m-0 p-0" src="/assets/img/admin-order/detail.png" alt="img_detail" style="width: 18px; height: 18px ;">
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    @else
                        <p class="text-center p-2">Belum Ada Data</p>
                    @endif
                    
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