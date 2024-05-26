@extends('../layout-admin')
@section('title', 'Orders Admin | AFEKSI')

@section('styles')
@endsection

@section('sidebarContent')
    <div class="main-content container d-flex flex-column mt-3" style="padding-left: 5dvh; padding-right: 5dvh;">
        <div style="font-size: 24px; font-weight: 500;">
            <h3 style="margin: 0;">Pengelolaan Pesanan</h3>
            <p style="font-size: 16px; font-weight: 400;">Kelola dan atur semua pesanan dengan baik. </p>
        </div>
        <div class="container mt-1">
            <div class="card" style="border: 1px solid #7B7B7B;">
                <div class="card-body">
                    <h4 class="card-title" style="font-size: 20px; font-weight: 500;">Detail Pesanan</h4>
                    <hr style="border: none; border-top: 1px solid #7B7B7B; margin-top: 14px; margin-bottom: 0;">
                    <div class="flex">
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="d-flex align-items-center flex-wrap">
                                <div class="rounded-circle"
                                    style="width: 100px; height: 100px; background-color: #BDBDBD; display: flex; align-items: center; justify-content: center;">
                                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M33.5833 0.25H4.39583C2.08333 0.25 0.25 2.125 0.25 4.41667V33.5833C0.25 35.875 2.08333 37.75 4.39583 37.75H33.5833C35.875 37.75 37.75 35.875 37.75 33.5833V4.41667C37.75 2.125 35.875 0.25 33.5833 0.25ZM33.5833 25.25H27.0625C26.0833 25.25 25.2917 25.9583 25.0208 26.9167C24.2917 29.5625 21.8542 31.5 19 31.5C16.1458 31.5 13.7083 29.5625 12.9792 26.9167C12.7083 25.9583 11.9167 25.25 10.9375 25.25H4.39583V6.5C4.39583 5.35417 5.33333 4.41667 6.47917 4.41667H31.5C32.6458 4.41667 33.5833 5.35417 33.5833 6.5V25.25ZM27.3333 14.8333H23.1667V8.58333H14.8333V14.8333H10.6667L18.2708 22.4375C18.6875 22.8542 19.3333 22.8542 19.75 22.4375L27.3333 14.8333Z"
                                            fill="#060E7A" />
                                    </svg>
                                </div>
                                <div class="mx-2">
                                    <p class="card-text" style="font-size: 24px; font-weight: 700; color: #060E7A;">Kode
                                        Referensi #{{ $order->ref_transaction_layanan }}</p>
                                    <p class="card-text"
                                        style="font-size: 14px; font-weight: 600; color: #003881; background-color: #98E7FB; display: inline-block; padding: 4px 8px; border-radius: 8px;"
                                        id="status">{{ $order->status != 'UNPAID' ? $order->status : 'EXPIRED' }}</p>
                                    <p class="card-text" style="font-size: 16px; font-weight: 400; color: #060E7A;">Detail
                                        dari
                                        Pesanan #{{ $order->ref_transaction_layanan }}</p>
                                    <div class="d-flex flex-wrap">
                                        <div>
                                            <p class="card-text bg-light rounded-pill px-2"
                                                style="font-size: 14px; font-weight: 600; color: #242424;">Dibayarkan pada:
                                                {{ $order->status == 'PAID' ? $order->updated_at : '-' }}</p>
                                        </div>
                                        <div>
                                            <p class="card-text bg-light rounded-pill px-2"
                                                style="font-size: 14px; font-weight: 600; color: #242424;">Dipesan pada:
                                                {{ $order->detail_pembayarans ? $order->detail_pembayarans->created_at : '-'  }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex">
                                <button class="btn btn-primary"
                                    style="background-color:#596FFF; font-size: 14px; font-weight: 600; padding: 8px 16px;"><svg
                                        width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_6002_2503)">
                                            <path
                                                d="M13.5 12V8.25C13.5 5.9475 12.27 4.02 10.125 3.51V3C10.125 2.3775 9.61498 1.875 8.99248 1.875C8.36998 1.875 7.87498 2.3775 7.87498 3V3.51C5.72248 4.02 4.49998 5.94 4.49998 8.25V12L3.52498 12.9675C3.05248 13.44 3.38248 14.25 4.04998 14.25H13.9275C14.595 14.25 14.9325 13.44 14.46 12.9675L13.5 12ZM8.99248 16.5C9.81748 16.5 10.4925 15.825 10.4925 15H7.49248C7.49248 15.825 8.15998 16.5 8.99248 16.5ZM5.07748 3.5475C5.39248 3.2625 5.39998 2.775 5.09998 2.475C4.81498 2.19 4.34998 2.1825 4.05748 2.46C2.77498 3.63 1.88998 5.22 1.60498 7.005C1.53748 7.4625 1.88998 7.875 2.35498 7.875C2.71498 7.875 3.02998 7.6125 3.08998 7.2525C3.31498 5.7975 4.03498 4.5 5.07748 3.5475ZM13.95 2.46C13.65 2.1825 13.185 2.19 12.9 2.475C12.6 2.775 12.615 3.255 12.9225 3.54C13.9575 4.4925 14.685 5.79 14.91 7.245C14.9625 7.605 15.2775 7.8675 15.645 7.8675C16.1025 7.8675 16.4625 7.455 16.3875 6.9975C16.1025 5.22 15.225 3.6375 13.95 2.46Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_6002_2503">
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Pengingat</button>
                                <button class="btn btn-warning mx-2"
                                    style="background-color:#FFD34E; font-size: 14px; font-weight: 600; padding: 8px 16px; color:#060E7A;">
                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.4425 4.75H8.25V1C8.25 0.5875 7.9125 0.25 7.5 0.25H4.5C4.0875 0.25 3.75 0.5875 3.75 1V4.75H2.5575C1.89 4.75 1.5525 5.56 2.025 6.0325L5.4675 9.475C5.76 9.7675 6.2325 9.7675 6.525 9.475L9.9675 6.0325C10.44 5.56 10.11 4.75 9.4425 4.75ZM0.75 12.25C0.75 12.6625 1.0875 13 1.5 13H10.5C10.9125 13 11.25 12.6625 11.25 12.25C11.25 11.8375 10.9125 11.5 10.5 11.5H1.5C1.0875 11.5 0.75 11.8375 0.75 12.25Z"
                                            fill="#060E7A" />
                                    </svg>
                                    Download
                                </button>
                            </div>

                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div
                                                    style="width: 40px; height: 40px; background-color: #FFD34E; border-radius: 10px; padding: 0 8px; display: flex; align-items: center; justify-content: center;">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 8.5C10.21 8.5 12 6.71 12 4.5C12 2.29 10.21 0.5 8 0.5C5.79 0.5 4 2.29 4 4.5C4 6.71 5.79 8.5 8 8.5ZM8 10.5C5.33 10.5 0 11.84 0 14.5V15.5C0 16.05 0.45 16.5 1 16.5H15C15.55 16.5 16 16.05 16 15.5V14.5C16 11.84 10.67 10.5 8 10.5Z"
                                                            fill="#242424" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col mt-3">
                                                <h5 class="card-title" style="font-size: 20px; font-weight: 700;">Informasi
                                                    Pengguna</h5>
                                                <p class="card-text" style="font-weight: 400; font-size:16;"><span
                                                        style="color: #606060; font-weight: bold;">Nama:
                                                    </span><span style="color: #000000;">{{ $order->user->nama }}</span></p>
                                                <p class="card-text" style="font-weight: 400; font-size:16;"><span
                                                        style="color: #606060; font-weight: bold;">Email:
                                                    </span><span style="color: #000000;">{{ $order->user->email }}</span></p>
                                                <p class="card-text" style="font-weight: 400; font-size:16;"><span
                                                        style="color: #606060; font-weight: bold;">Nomor
                                                        HP: </span><span style="color: #000000;">{{ $order->user->no_whatsapp }}</span></p>
                                                <p class="card-text" style="font-weight: 400; font-size:16;"><span
                                                        style="color: #606060; font-weight: bold;">Jenis
                                                        Kelamin: </span><span style="color: #000000;">{{ $order->user->jenisKelamin }}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div
                                                    style="width: 40px; height: 40px; background-color: #FFD34E; border-radius: 10px; padding: 0 8px; display: flex; align-items: center; justify-content: center;">
                                                    <svg width="20" height="17" viewBox="0 0 20 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18 0.5H2C0.89 0.5 0.00999999 1.39 0.00999999 2.5L0 14.5C0 15.61 0.89 16.5 2 16.5H18C19.11 16.5 20 15.61 20 14.5V2.5C20 1.39 19.11 0.5 18 0.5ZM17 14.5H3C2.45 14.5 2 14.05 2 13.5V8.5H18V13.5C18 14.05 17.55 14.5 17 14.5ZM18 4.5H2V3.5C2 2.95 2.45 2.5 3 2.5H17C17.55 2.5 18 2.95 18 3.5V4.5Z"
                                                            fill="#242424" />
                                                    </svg>

                                                </div>
                                            </div>
                                            <div class="col mt-3">
                                                <h5 class="card-title" style="font-size: 20px; font-weight: 700;">
                                                    Informasi
                                                    Pembayaran</h5>
                                                <p class="card-text" style="font-weight: 400; font-size:16;"><span
                                                        style="color: #606060; font-weight: bold;">Total Biaya:
                                                    </span><span style="color: #000000;">Rp.
                                                    @if ($order->total_payment)
                                                        {{ number_format( $order->total_payment, '0', '.' ) }}
                                                    @else
                                                        @if ($order->paket_layanan_mentoring)
                                                            {{ number_format( $order->paket_layanan_mentoring->harga, '0', '.' ) }}
                                                        @else
                                                            {{ number_format( $order->paket_layanan_konseling->harga, '0', '.' ) }}
                                                        @endif
                                                    @endif
                                                    </span></p>
                                                {{-- <p class="card-text" style="font-weight: 400; font-size:16;"><span
                                                        style="color: #606060; font-weight: bold;">No. Rekening:
                                                    </span><span style="color: #000000;">xxxxx80582308</span></p>
                                                <p class="card-text" style="font-weight: 400; font-size:16;"><span
                                                        style="color: #606060; font-weight: bold;">E-wallet/Bank:
                                                        HP: </span><span style="color: #000000;">BCA</span></p> --}}
                                                <p class="card-text" style="font-weight: 400; font-size:16;"><span
                                                        style="color: #606060; font-weight: bold;">Nama:
                                                    </span><span style="color: #000000;">{{ $order->user->nama }}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div
                                                    style="width: 40px; height: 40px; background-color: #FFD34E; border-radius: 10px; padding: 0 8px; display: flex; align-items: center; justify-content: center;">
                                                    <svg width="18" height="23" viewBox="0 0 18 23"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16 0.5H2C0.9 0.5 0.00999999 1.4 0.00999999 2.5L0 15.43C0 16.12 0.35 16.73 0.88 17.09L8.45 22.13C8.79 22.35 9.22 22.35 9.56 22.13L17.12 17.09C17.65 16.73 18 16.12 18 15.43V2.5C18 1.4 17.1 0.5 16 0.5ZM15.3 7.2L7.71 14.79C7.32 15.18 6.69 15.18 6.3 14.79L2.71 11.2C2.32 10.81 2.32 10.18 2.71 9.79C3.1 9.4 3.73 9.4 4.12 9.79L7 12.67L13.88 5.79C14.27 5.4 14.9 5.4 15.29 5.79C15.68 6.18 15.69 6.81 15.3 7.2Z"
                                                            fill="#242424" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col mt-3">
                                                <h5 class="card-title" style="font-size: 20px; font-weight: 700;">
                                                    Informasi
                                                    Layanan
                                                </h5>
                                                @if ( $order->paket_layanan_mentoring )
                                                     <p class="card-text"
                                                    style="font-weight: 400; font-size:16; color:#233DFF;">Mentoring</p>
                                                    <p class="card-text" style="font-weight: 400; font-size:16;"><span
                                                            style="color: #606060; font-weight: bold;">Nama Paket:
                                                        </span><span style="color: #000000;">{{ $order->paket_layanan_mentoring->nama_paket }}</span></p>
                                                    <p class="card-text" style="font-weight: 400; font-size:16;"><span
                                                            style="color: #606060; font-weight: bold;">Jumlah Sesi:
                                                        </span><span style="color: #000000;">{{ $order->paket_layanan_mentoring->jumlah_sesi }} Sesi</span></p>
                                                    <p class="card-text" style="font-weight: 400; font-size:16;"><span
                                                            style="color: #606060; font-weight: bold;">Durasi: </span><span
                                                            style="color: #000000;">{{ $order->paket_layanan_mentoring->durasi }} Menit</span></p>
                                                @else
                                                    <p class="card-text"
                                                    style="font-weight: 400; font-size:16; color:#233DFF;">{{ Str::substr($order->ref_transaction_layanan, 0, 5) == 'PEERS' ?  'Peers Konseling' : 'Profesional Konseling' }}</p>
                                                    <p class="card-text" style="font-weight: 400; font-size:16;"><span
                                                            style="color: #606060; font-weight: bold;">Nama Paket:
                                                        </span><span style="color: #000000;">{{ $order->paket_layanan_konseling->nama_paket }}</span></p>
                                                    <p class="card-text" style="font-weight: 400; font-size:16;"><span
                                                            style="color: #606060; font-weight: bold;">Jumlah Sesi:
                                                        </span><span style="color: #000000;">{{ $order->paket_layanan_konseling->jumlah_sesi }} Sesi</span></p>
                                                    <p class="card-text" style="font-weight: 400; font-size:16;"><span
                                                            style="color: #606060; font-weight: bold;">Durasi: </span><span
                                                            style="color: #000000;">{{ $order->paket_layanan_konseling->durasi }} Menit</span></p>
                                                @endif
                                                <p class="card-text" style="font-weight: 400; font-size:16;"><span
                                                        style="color: #606060; font-weight: bold;">Tanggal Layanan:
                                                    </span><span style="color: #000000;">{{ $order->detail_pembayarans ? $order->detail_pembayarans->tgl_konsultasi : '-' }}</span></p>
                                                <p class="card-text" style="font-weight: 400; font-size:16;"><span
                                                        style="color: #606060; font-weight: bold;">Waktu Layanan:
                                                    </span><span style="color: #000000;">{{ $order->detail_pembayarans ? $order->detail_pembayarans->jam_konsultasi . ' WIB' : '-' }} </span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div
                                                    style="width: 40px; height: 40px; background-color: #FFD34E; border-radius: 10px; padding: 0 8px; display: flex; align-items: center; justify-content: center;">
                                                    <svg width="18" height="13" viewBox="0 0 18 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17 5.5H1C0.45 5.5 0 5.95 0 6.5C0 7.05 0.45 7.5 1 7.5H17C17.55 7.5 18 7.05 18 6.5C18 5.95 17.55 5.5 17 5.5ZM1 12.5H11C11.55 12.5 12 12.05 12 11.5C12 10.95 11.55 10.5 11 10.5H1C0.45 10.5 0 10.95 0 11.5C0 12.05 0.45 12.5 1 12.5ZM17 0.5H1C0.45 0.5 0 0.95 0 1.5V1.51C0 2.06 0.45 2.51 1 2.51H17C17.55 2.51 18 2.06 18 1.51V1.5C18 0.95 17.55 0.5 17 0.5Z"
                                                            fill="#242424" />
                                                    </svg>

                                                </div>
                                            </div>
                                            <div class="col mt-3">
                                                <h5 class="card-title" style="font-size: 20px; font-weight: 700;">
                                                    Catatan Pembelian</h5>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="card-text" style="font-weight: 400; font-size:16;">Tidak
                                                            ada catatan...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
