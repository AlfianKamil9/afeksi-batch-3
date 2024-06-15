@extends('../layout')

@section('title', 'Pembayaran Peers Konseling | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="/assets/css/pembayaran.css">
    <link rel="stylesheet" href="/assets/css/stepper.css">
@endsection


@section('headForPayment')
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.midtrans.client_key') }}"></script>
@endsection

@section('content')

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Select2 Library JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <!-- PEMBAYARAN -->
    <hr>
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center mb-5 mt-5">
            <div class="col-lg-7">
                <div class="card mb-4" style="border-color: #2139f9; z-index: 0">
                    <div class="card-body">
                        <h5 class="fw-bolder" style="color: #2139f9">Checkout</h5>

                        <h6 class="fw-bold">Rincian Pembayaran</h6>
                        <div class="card p-1 mb-5">
                            <div class="container mt-4">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td class="text-muted fw-bold">Layanan</td>
                                            <td class="text-end fw-bold">
                                                {{ $pembayaran->paket_layanan_konseling->layanan_konseling->nama_layanan }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold">Topik</td>
                                            <td class="text-end fw-bold">
                                                {{ $pembayaran->paket_layanan_konseling->nama_paket }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold">Tanggal</td>
                                            <td class="text-end fw-bold">
                                                {{ \Carbon\Carbon::parse($pembayaran->detail_pembayarans->tgl_konsultasi)->translatedFormat('l, d F Y') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold">Waktu</td>
                                            <td class="text-end fw-bold">
                                                {{ \Carbon\Carbon::parse($pembayaran->detail_pembayarans->jam_konsultasi)->addMinutes($pembayaran->paket_layanan_konseling->durasi)->format('H:i') }}
                                                WIB</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="horinzontal">
                                                    <hr />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bold text-muted">Total Pembayaran</td>
                                            <td class="text-end fw-bold fs-5">Rp.
                                                {{ number_format($pembayaran->total_payment, 0, ',', '.') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Total Pembayaran -->
                        <div class="horizontal-line"></div>
                        <div class="container">
                            <div class="row mb-3">
                                <div class="col text-center">
                                    <button id="pay-button" class="btn button-next"
                                        style="background-color: #2139f9; color: #fff; width: 10rem">Bayar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="/assets/js/pembayaran.js"></script>
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token.
            snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    window.location.href = '/'
                    // alert("payment success!");
                    // console.log(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("waiting your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            });
        });
    </script>
@endsection

{{-- @section('script') --}}
    
{{-- @endsection --}}