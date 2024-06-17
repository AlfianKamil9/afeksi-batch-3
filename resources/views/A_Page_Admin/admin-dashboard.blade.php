<!-- {{--
@extends('../layout')
--}} -->
@extends('../layout-admin')

@section('title', 'Dashboard Admin | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="/assets/css/admin-dashboard.css">
@endsection

<!-- {{--
@php
    $sidebarContent = ''
--}} -->
@section('sidebarContent')
    <div class="main-content container d-flex flex-column mt-3" style="padding-left:  5dvh; padding-right: 5dvh;">
        <div style="font-size: 24px; font-weight: 500;">
            <p style="margin: 0;">Afeksi Dashboard</p>
            <p style="font-size: 14px; font-weight: 400;">Anda login menggunakan username <span style="color: #233DFF;">
                    admin</span></p>
        </div>

        <div class="container mb-3" style="padding-left:  5dvh; padding-right: 5dvh;">
            <div class="row mt-4">
                <div class="col-md-6 mb-4">
                    <div class="card py-3" style="background-color: #FFF9DB; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="card-body d-flex flex-row justify-content-around align-items-center">
                            <div class="d-flex flex-column">
                                <p style="font-size: 24px; font-weight: 600; margin: 0;">0</p>
                                <p style="font-size: 16px; font-weight: 400; margin: 0;">Total Transaksi</p>
                            </div>
                            <div
                                style="background-color: #FFD34E; width: 40px; height: 40px; border-radius: 20%; display: flex; justify-content: center; align-items: center;">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="#FFF9DB"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.5 2H3.5C2.4 2 1.5 2.9 1.5 4V16C1.5 17.1 2.4 18 3.5 18H10.5L8.87 20.45C8.43 21.11 8.9 22 9.7 22H15.3C16.1 22 16.58 21.11 16.13 20.45L14.5 18H21.5C22.6 18 23.5 17.1 23.5 16V4C23.5 2.9 22.6 2 21.5 2ZM21.5 14H3.5V5C3.5 4.45 3.95 4 4.5 4H20.5C21.05 4 21.5 4.45 21.5 5V14Z"
                                        fill="#FFF9DB" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card py-3" style="background-color: #D3DAFF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="card-body d-flex flex-row justify-content-around align-items-center">
                            <div class="d-flex flex-column">
                                <p style="font-size: 24px; font-weight: 600; margin: 0;">0</p>
                                <p style="font-size: 16px; font-weight: 400; margin: 0;">Jumlah Pengguna</p>
                            </div>
                            <div
                                style="background-color: #233DFF; width: 40px; height: 40px; border-radius: 20%; display: flex; justify-content: center; align-items: center;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="#FFF9DB"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4722_7679)">
                                        <path
                                            d="M19 0H5C4.45 0 4 0.45 4 1C4 1.55 4.45 2 5 2H19C19.55 2 20 1.55 20 1C20 0.45 19.55 0 19 0ZM5 24H19C19.55 24 20 23.55 20 23C20 22.45 19.55 22 19 22H5C4.45 22 4 22.45 4 23C4 23.55 4.45 24 5 24ZM20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM12 6.75C13.24 6.75 14.25 7.76 14.25 9C14.25 10.24 13.24 11.25 12 11.25C10.76 11.25 9.75 10.24 9.75 9C9.75 7.76 10.76 6.75 12 6.75ZM17 17H7V15.5C7 13.83 10.33 13 12 13C13.67 13 17 13.83 17 15.5V17Z"
                                            fill="#D3DAFF" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4722_7679">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card py-3" style="background-color: #E3D8FF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="card-body d-flex flex-row justify-content-around align-items-center">
                            <div class="d-flex flex-column">
                                <p style="font-size: 24px; font-weight: 600; margin: 0;">10</p>
                                <p style="font-size: 16px; font-weight: 400; margin: 0;">Acara Event</p>
                            </div>
                            <div
                                style="background-color: #8D6CFF; width: 40px; height: 40px; border-radius: 20%; display: flex; justify-content: center; align-items: center;">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4722_7686)">
                                        <path
                                            d="M5.50003 13.1798V15.9898C5.50003 16.7198 5.90003 17.3998 6.54003 17.7498L11.54 20.4798C12.14 20.8098 12.86 20.8098 13.46 20.4798L18.46 17.7498C19.1 17.3998 19.5 16.7198 19.5 15.9898V13.1798L13.46 16.4798C12.86 16.8098 12.14 16.8098 11.54 16.4798L5.50003 13.1798ZM11.54 3.51979L3.11003 8.11978C2.42003 8.49978 2.42003 9.49978 3.11003 9.87979L11.54 14.4798C12.14 14.8098 12.86 14.8098 13.46 14.4798L21.5 10.0898V15.9998C21.5 16.5498 21.95 16.9998 22.5 16.9998C23.05 16.9998 23.5 16.5498 23.5 15.9998V9.58979C23.5 9.21979 23.3 8.88978 22.98 8.70978L13.46 3.51979C12.86 3.19979 12.14 3.19979 11.54 3.51979Z"
                                            fill="#E3D8FF" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4722_7686">
                                            <rect width="24" height="24" fill="white" transform="translate(0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card py-3" style="background-color: #DDFCD1; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="card-body d-flex flex-row justify-content-around align-items-center">
                            <div class="d-flex flex-column">
                                <p style="font-size: 24px; font-weight: 600; margin: 0;">0</p>
                                <p style="font-size: 16px; font-weight: 400; margin: 0;">Artikel Terbuat</p>
                            </div>
                            <div
                                style="background-color: #51E252; width: 40px; height: 40px; border-radius: 20%; display: flex; justify-content: center; align-items: center;">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.5 2H3.5C2.4 2 1.5 2.9 1.5 4V16C1.5 17.1 2.4 18 3.5 18H10.5L8.87 20.45C8.43 21.11 8.9 22 9.7 22H15.3C16.1 22 16.58 21.11 16.13 20.45L14.5 18H21.5C22.6 18 23.5 17.1 23.5 16V4C23.5 2.9 22.6 2 21.5 2ZM21.5 14H3.5V5C3.5 4.45 3.95 4 4.5 4H20.5C21.05 4 21.5 4.45 21.5 5V14Z"
                                        fill="#FFF9DB" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 py-3 px-3"
                        style="background-color: #ffffff; border-radius: 2%; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <p style=" border-bottom: 3px solid #E8E8E8;">Grafik Pengguna Setiap Tahun</p>
                        <div style="display: flex; align-items: start; font-weight:w500;">
                            <p style="margin-right: 20px; align-items: center;">Tahun</p>
                            <select class= "px-2 py-1"id="yearDropdown"
                                style="border: none;  border-radius: 1%; box-shadow: 0px 1px 4px 1px rgba(0, 0, 0, 0.25);"
                                onchange="updateChart(this.value)">
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                            </select>
                        </div>
                        <canvas id="userChart" width="200" height="200"></canvas>
                    </div>
                    <div class="col-md-6 py-3 px-3"
                        style="background-color: #ffffff; border-radius: 2%; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <p style="border-bottom: 3px solid #E8E8E8;">Grafik Transaksi Harian</p>
                        <div style="display: flex; justify-content: start; margin-bottom: 10px;">
                            <button id="btn24Jam" onclick="updateTransactionChart('24Jam')" style="margin-right: 5px;"
                                class=" custom-btn">24 Jam</button>
                            <button id="btn7Hari" onclick="updateTransactionChart('7Hari')" class="custom-btn">7
                                Hari</button>
                        </div>
                        <canvas id="transactionChart" width="200" height="200"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="/assets/js/admin-dashboard.js"></script>
@endsection

