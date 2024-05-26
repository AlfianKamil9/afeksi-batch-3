<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
// */
// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/user', function (Request $request) {
//         return $request->user();
//     });
//     Route::post('/logout', [LoginController::class, 'logout']);
// });

use App\Models\Event;
use Illuminate\Support\Facades\Route;
use App\Models\LayananMentoring;
use App\Http\Controllers\API\KlaimCode;
use App\Http\Controllers\API\HandleAfterPayment;
use App\Http\Controllers\API\NotificationPaymentEventController;
use App\Http\Controllers\Transaksi\Event\WebinarTransaksiController;

//MIDTRANS NOTIFICATION
Route::post('/midtrans/callback', [NotificationPaymentEventController::class, 'callback']);

