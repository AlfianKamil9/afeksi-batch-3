<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Karir\Internship;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\Karir\PeerKonselor;
use App\Http\Controllers\Karir\BrandAmbasador;
use App\Http\Controllers\Karir\karirController;
use App\Http\Controllers\Event\WebinarController;
use App\Http\Controllers\Event\CampaignController;
use App\Http\Controllers\Karir\RelationshipHeroes;
use App\Http\Controllers\Artikel\artikelController;
use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\Event\NotificationWebinar;
use App\Http\Controllers\Dashboard\MyBookController;
use App\Http\Controllers\Dashboard\RekapTransaction;
use App\Http\Controllers\Karir\RelationshipKonselor;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Rekap\RekapHistoriController;
use App\Http\Controllers\Mentoring\MentoringController;
use App\Http\Controllers\Transaksi\NotifikasiKonseling;
use App\Http\Controllers\Transaksi\NotifikasiMentoring;
use App\Http\Controllers\Konseling\ProfessionalController;
use App\Http\Controllers\Konseling\PeersConselingController;
use App\Http\Controllers\API\NotificationPaymentEventController;
use App\Http\Controllers\Transaksi\Event\WebinarTransaksiController;
use App\Http\Controllers\Transaksi\Layanan\KonselingTransaksiController;
use App\Http\Controllers\Transaksi\Layanan\MentoringTransaksiController;
use App\Http\Controllers\Transaksi\Layanan\PeersConselingTransaksiController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// BERANDA
Route::get('/', [berandaController::class, 'showBeranda'])->name('homepage');

// TENTANG KAMI
Route::get('/tentang-kami', function () {
    return view('pages.tentang-kami');
})->name("tentang-kami");

// KEBIJAKAN PRIVASI
Route::get('/kebijakan-privasi', function () {
    return view('pages.kebijakan-privasi');
})->name("kebijakan-privasi");

// FAQ
Route::get('/FAQ', function () {
    return view('pages.faq-konseling');
})->name('FAQ');

// KEGIATAN
Route::get('/kegiatan-webinar', [WebinarController::class, 'index'])->name('webinar');
Route::get('/kegiatan-webinar/{slug}', [WebinarController::class, 'show'])->name('webinar.detail');
Route::get('/kegiatan-campaign', [CampaignController::class, 'index'])->name('campaign');
Route::get('/kegiatan-campaign/{slug}', [CampaignController::class, 'show'])->name('campaign.detail');
Route::get('/rekap-history',[RekapHistoriController::class, 'showRekapHistory'])->name('recap.history');
Route::get('/rekaphistory/{slug}',[RekapHistoriController::class, 'showRekapHistoryDetail'])->name('recap.history.detail');
    


// KARIER
Route::get('/karir', [karirController::class, 'index'])->name('karir');
Route::get('/join-konselor', function () {
    return view('pages.Karir.pendaftaran-konselor');
})->name('pendaftaran.konselor');
Route::get('/join-volunteer', function () {
    return view('pages.Karir.volunteer');
})->name('join.volunteer');

// MENTORING
Route::get('/mentoring', function () {
    return view('pages.page-mentoring');
})->name('mentoring');
// KONSELING
Route::get('/konseling', function () {
    return view('pages.page-konseling');
})->name('konseling');

// ARTIKEL
Route::get('/artikel', [artikelController::class, 'index'])->name('artikel');
Route::get('/artikel/detail/{slug}', [artikelController::class, 'show'])->name('artikel.detail');



// MIDLLEWARE HALAMAN YANG PERLU LOGIN
Route::middleware(['auth', 'verified'])->group(function () {
//--------------------------------------MENTORING---------------------------------------------------
    Route::get('/pre-marriage', [MentoringController::class, 'showPreMarriage'])->name('mentoring.pre-marriage');
    Route::get('/parenting-mentoring', [MentoringController::class, 'showParenting'])->name('mentoring.parenting');
    Route::get('/relationship-mentoring',[MentoringController::class, 'showRelationship'])->name('mentoring.relationship');
    // PILIH PAKET MENTORING
    Route::get('/mentoring/{slug_item_mentoring}/pilih-paket-yang-diinginkan', [MentoringController::class, 'showPaketMentoring']);
    Route::post('/save-pilih-paket-mentoring', [MentoringController::class, 'savePaketYangDipilih']);
    // ISI FORM DATA DIRI KHUSUS MENTORING
    Route::get('/mentoring/{ref_transaction_layanan}/data-diri', [MentoringTransaksiController::class, 'showFormDataDiri'])->name('form.datadiri.mentoring');
    Route::post('/mentoring/{ref_transaction_layanan}/submit-form-mentoring', [MentoringTransaksiController::class, 'submitFormDataDiri'])->name('submit.form.datadiri.mentoring');
    // CHECKOUT KHUSUS MENTORING
    Route::get('/mentoring/{ref_transaction_layanan}/pembayaran', [MentoringTransaksiController::class, 'layananNonProfesional'])->name('checkout.layanan.mentoring');
    Route::post('/mentoring/{ref_transaction_layanan}/checkout', [MentoringTransaksiController::class, 'checkoutLayananNonProfessional']);
    // NOTIFICATION AFTER PEMBAYARAN MENTORING
    Route::get('/{ref_transaction_layanan}/notification-mentoring/success', [NotifikasiMentoring::class, 'index'])->name('notification.mentoring.success');
    //END LAYANAN MENTORING


//--------------------------------------KONSELING---------------------------------------------------
//PROFESSIONAL KONSELING
  // PILIHAN SUB PROFESSIONAL KONSELING
    Route::post('/professional-konseling/pilih-sub-topic', [ProfessionalController::class, 'createProfessional'])->name('professional.konseling.create.first');
  // PILIHAN KONSELOR
    Route::get('/professional-konseling/{ref_transaction_layanan}/pilihan-konselor-professional-konseling',[ProfessionalController::class, 'showAllKonselor'])->name('professional.konseling.konselor');
    Route::post('/professional-konseling/{ref_transaction_layanan}/pilihan-konselor-professional-konseling',[ProfessionalController::class, 'processPilihKonselor'])->name('professional.konseling.process.pilih-konselor');
    // PAKET PROFESSIONAL KONSELING
    Route::get('/professional-konseling/{ref_transaction_layanan}/pilihan-paket-professional-konseling', [ProfessionalController::class, 'showPaketKonseling'])->name('professional.konseling.pilihan.paket');
    Route::post('/professional-konseling/{ref_transaction_layanan}/pilihan-paket-professional-konseling', [ProfessionalController::class, 'processPaketKonseling'])->name('professional.konseling.process.paket');
    // FORM PROFESSIONAL KONSELING
    Route::get('/professional-konseling/{ref_transaction_layanan}/data-diri', [KonselingTransaksiController::class, 'showFormDataDiri'])->name('professional.konseling.show.form');
    Route::post('/professional-konseling/{ref_transaction_layanan}/submit-form-konseling', [KonselingTransaksiController::class, 'submitDataDiri'])->name('professional.konseling.process.form');
    //CHECKOUT
    Route::get('/professional-konseling/{ref_transaction_layanan}/pembayaran', [KonselingTransaksiController::class, 'showPembayaran'])->name('professional.konseling.checkout');
    Route::post('/professional-konseling/{ref_transaction_layanan}/checkout', [KonselingTransaksiController::class, 'checkoutProfessionalKonseling'])->name('professional.konseling.process.checkout');
    
//PEERS KONSELING 
    Route::post('/peers-konseling/pilih-sub-topic', [PeersConselingController::class, 'processFirstPeers'])->name('peers.konseling.create.first');
    // PILIHAN KONSELOR
    // Route::get('/peers-konseling/{ref_transaction_layanan}/peers-konseling',[peersConselingController::class, 'showKonselorPeers'])->name('peers.konseling.konselor');
    // Route::post('/peers-konseling/{ref_transaction_layanan}/peers-konseling',[peersConselingController::class, 'processPilihKonselor'])->name('peers.konseling.process.pilih-konselor');
    // PAKET PEERS KONSELING
    Route::get('/peers-konseling/{ref_transaction_layanan}/pilihan-paket-peers-konseling', [peersConselingController::class, 'showPaketKonseling'])->name('peers.konseling.pilihan.paket');
    Route::post('/peers-konseling/{ref_transaction_layanan}/pilihan-paket-peers-konseling', [peersConselingController::class, 'processPaketKonseling'])->name('peers.konseling.process.paket');
    // FORM PEERS KONSELING
    Route::get('/peers-konseling/{ref_transaction_layanan}/data-diri', [PeersConselingTransaksiController::class, 'showFormDataDiri'])->name('peers.konseling.show.form');
    Route::post('/peers-konseling/{ref_transaction_layanan}/submit-form-konseling', [PeersConselingTransaksiController::class, 'submitDataDiri'])->name('peers.konseling.process.form');
    //CHECKOUT
    Route::get('/peers-konseling/{ref_transaction_layanan}/pembayaran', [PeersConselingTransaksiController::class, 'showPembayaran'])->name('peers.konseling.checkout');
    Route::post('/peers-konseling/{ref_transaction_layanan}/checkout', [PeersConselingTransaksiController::class, 'checkoutProfessionalKonseling'])->name('peers.konseling.process.checkout');
    
    
    // NOTIFICATION AFTER PEMBAYARAN PROFESIONAL KONSELING---
    Route::get('/{ref_transaction_layanan}/notification-konseling/success', [NotifikasiKonseling::class, 'index'])->name('notification.konseling.success');

    
// ----------------------------------------------------------------------------------------


    // PENDAFTARAN RELATIONSHIP KONSELOR
    Route::get('/pendaftaran-relationship-konselor', [RelationshipKonselor::class, 'index'])->name('pendaftaran-relationship-konselor');
    Route::post('/pendaftaran-relationship-konselor/create', [RelationshipKonselor::class, 'store']);
    // PENDAFTARAN PEER KONSELOR
    Route::get('/pendaftaran-peer-konselor',  [PeerKonselor::class, 'index'])->name('pendaftaran-peer-konselor');
    Route::post('/pendaftaran-peer-konselor', [PeerKonselor::class, 'store'])->name('store-peer-konselor');
    // PENDAFTARAN INTERNSHIP
    Route::get('/internship/{slug}', [Internship::class, 'show'])->name('internship.detail');
    Route::post('/Registerinternship', [Internship::class, 'store'])->name('internship.register');
    // PENDAFTARAN BRAND AMBASSADOR (VOLUNTEER)
    Route::get('/pendaftaran-brand-ambassador', [BrandAmbasador::class, 'index'])->name('volunteer.brand-ambassador');
    Route::post('/pendaftaran-brand-ambassador/create', [BrandAmbasador::class, 'store'])->name('volunteer.register-brand-ambassador');
    // PENDAFTARAN RELATIONSHIP HEROES (VOLUNTEER)
    Route::get('/pendaftaran-relationship-heroes', [RelationshipHeroes::class, 'index'])->name('volunteer.relationship-heroes'); 
    Route::post('/pendaftaran-relationship-heroes', [RelationshipHeroes::class, 'store'])->name('volunteer.store-relationship-heroes'); 

//--------------------------------------------------------------------------------------

    // PENDAFTARAN KEGIATAN
    //PENDAFTARAN WEBINAR
    Route::post('/kegiatan-webinar/{slug}', [WebinarController::class, 'store'])->name('daftar-webinar');

    Route::get('/{ref_transaction_event}/pembayaran-webinar', [WebinarTransaksiController::class, 'pembayaran'])->name('checkout-webinar');
    Route::post('/{ref_transaction_event}/checkout/webinar', [WebinarTransaksiController::class, 'checkoutWebinar']);
    Route::get('/{ref_transaction_event}/notification-webinar/success', [NotificationWebinar::class, 'index'])->name('notification.success.webinar');
    // PENDAFTARAN CAMPAIGN
    Route::post('/kegitan-campaign/{slug}', [CampaignController::class, 'store'])->name('daftar-campaign');
  

   
  



    // DASHBOARD USER
    Route::name('dashboard.')->prefix('/dashboard')->group(function() {
        //Dasboard Utama
        Route::get('', [IndexController::class, 'showDashboardIndex'])->name('index');
        // PROFILE
        Route::name('profile.')->prefix('/profile')->group(function() {
            Route::get('', [ProfileController::class, 'showDashboardProfile'])->name('index');
            Route::post('/changes-data', [ProfileController::class, 'processChanges'])->name('changes.data');
            Route::get('/ubah-password',[ ProfileController::class, 'showUbahPassword'])->name('show.changePassword');
            Route::post('/change-password', [ProfileController::class, 'processChangePassword'])->name('changes.password');
            Route::get('/ubah-foto-profile', [ProfileController::class, 'showUbahFoto'])->name('show.changeFoto');
            Route::post('/ubah-foto-profile', [ProfileController::class, 'processChangeFoto'])->name('process.changeFoto');
        });
        // E-Book
        Route::get('/e-book', [MyBookController::class, 'showMyBook'])->name('show.e-book');
        // Rekap Transaksi
        Route::get('/recap-transactions',[RekapTransaction::class, 'showRecapTransaction'])->name('show.rekap.transaksi');
    });
});




// API CALLBACK
Route::post('/midtrans/callback', [NotificationPaymentEventController::class, 'callback']);
Route::get('/midtrans/finish', [NotificationPaymentEventController::class, 'finishRedirect']);
Route::get('/midtrans/unfinish', [NotificationPaymentEventController::class, 'unfinishRedirect']);
Route::get('/midtrans/error', [NotificationPaymentEventController::class, 'errorRedirect']);
// Route::post('/midtrans/notification-hooks', HandleAfterPayment::class);



require __DIR__ . '/auth.php';
Route::fallback(function () {
    return view('errors.404'); // Menampilkan halaman 404
});



