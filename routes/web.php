<?php

use App\Models\LayananKonseling;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Karir\Volunteer;
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
use App\Http\Controllers\PeersKonselingNew\PeersConselingNew;
use App\Http\Controllers\AF_Admin_Web\adminDashboardController;
use App\Http\Controllers\AF_Admin_Web\eventDashboardController;
use App\Http\Controllers\API\NotificationPaymentEventController;
use App\Http\Controllers\AF_Admin_Web\articleDashboardController;
use App\Http\Controllers\AF_Admin_Web\psikologDashboardController;
use App\Http\Controllers\AF_Admin_Web\guestStarDashboardController;
use App\Http\Controllers\Transaksi\Event\WebinarTransaksiController;
use App\Http\Controllers\AF_Admin_Web\transactionDashboardController;
use App\Http\Controllers\Transaksi\Layanan\KonselingTransaksiController;
use App\Http\Controllers\Transaksi\Layanan\MentoringTransaksiController;

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
    return view('pages.AboutMe.tentang-kami');
})->name('tentang-kami');

// KEBIJAKAN PRIVASI
Route::get('/kebijakan-privasi', function () {
    return view('pages.AboutMe.kebijakan-privasi');
})->name('kebijakan-privasi');

// FAQ
Route::get('/FAQ', function () {
    return view('pages.AboutMe.faq-konseling');
})->name('FAQ');

// KEGIATAN
Route::get('/kegiatan-webinar', [WebinarController::class, 'index'])->name('webinar');
Route::get('/kegiatan-webinar/{slug}', [WebinarController::class, 'show'])->name('webinar.detail');
Route::get('/kegiatan-campaign', [CampaignController::class, 'index'])->name('campaign');
Route::get('/kegiatan-campaign/{slug}', [CampaignController::class, 'show'])->name('campaign.detail');
Route::get('/rekap-history', [RekapHistoriController::class, 'showRekapHistory'])->name('recap.history');
Route::get('/rekaphistory/{slug}', [RekapHistoriController::class, 'showRekapHistoryDetail'])->name('recap.history.detail');

// KARIER
Route::prefix('/career')->group(function () {
    Route::view('/next-develop', 'pages.popUp.popUpKarir')->name('career.next.develop');

    Route::get('', [karirController::class, 'index'])->name('karir');
    Route::get('/join-konselor', function () {
        return view('pages.Karir.pendaftaran-konselor');
    })->name('pendaftaran.konselor');
    Route::get('/join-volunteer', [Volunteer::class, 'index'])->name('join.volunteer');
});

// KONSELING
Route::get('/konseling', function () {
    $data = LayananKonseling::where('tipe_layanan', 'PROFESSIONAL KONSELING')->get();

    return view('pages.page-konseling', compact('data'));
})->name('konseling');

// ARTIKEL
Route::get('/artikel', [artikelController::class, 'index'])->name('artikel');
Route::get('/artikel/detail/{slug}', [artikelController::class, 'show'])->name('artikel.detail');

// MENTORING
Route::get('/mentoring', function () {
    // return view('pages.page-mentoring');
    return view('pages.popUp.popUpMentoring');
    //Route::view('/next-develop', 'pages.popUp.popUpMentoring')->name('popUpMentoring');
})->name('mentoring');

// MIDLLEWARE HALAMAN YANG PERLU LOGIN
Route::middleware(['auth', 'verified'])->group(function () {
    //--------------------------------------MENTORING---------------------------------------------------
    Route::get('/pre-marriage', [MentoringController::class, 'showPreMarriage'])->name('mentoring.pre-marriage');
    Route::get('/parenting-mentoring', [MentoringController::class, 'showParenting'])->name('mentoring.parenting');
    Route::get('/relationship-mentoring', [MentoringController::class, 'showRelationship'])->name('mentoring.relationship');


    //END LAYANAN MENTORING

    //--------------------------------------KONSELING---------------------------------------------------
    Route::prefix('/konseling')->group(function () {
        // NEXT DEVELOP
        Route::view('/next-develop', 'pages.popUp.popUpKonseling')->name('next.develop');

        //PEERS KONSELING
        Route::name('peers.')->prefix('/peers-konseling')->group(function () {
            Route::post('/pilih-sub-topic', [PeersConselingController::class, 'processFirstPeers'])->name('konseling.create.first');
            // GET PAKET
            Route::get('/{ref_transaction_layanan}/pilihan-paket-peers-konseling', [peersConselingController::class, 'showPaketKonseling'])->name('konseling.pilihan.paket');
            Route::post('/{ref_transaction_layanan}/pilihan-paket-peers-konseling', [peersConselingController::class, 'processPaketKonseling'])->name('konseling.process.paket');
            // FORM PEERS KONSELING
            Route::get('/{ref_transaction_layanan}/data-diri', [peersConselingController::class, 'showFormDataDiri'])->name('konseling.show.form');
            Route::post('/{ref_transaction_layanan}/submit-form-peers-konseling', [peersConselingController::class, 'submitDataDiri'])->name('konseling.process.form');
            //CHECKOUT
            Route::get('/{ref_transaction_layanan}/pembayaran', [peersConselingController::class, 'showPembayaran'])->name('konseling.checkout');
            Route::post('/{ref_transaction_layanan}/checkout', [peersConselingController::class, 'processCheckout'])->name('konseling.process.checkout');
            Route::get('/{ref_transaction_layanan}/konfirmasi', [peersConselingController::class, 'showCheckout'])->name('konseling.show.confirmation');
        });

        // PEERS FLOW BARU
        Route::name('peers-new.')->prefix('/peers-konseling-new')->group(function () {
            // SHOW PILIH PAKET
            Route::get('/pilih-paket-konseling', [PeersConselingNew::class, 'show_pilih_paket'])->name('paket-konseling');
            // PAKET NON BAYAR
            Route::post('/process-paket-konseling', [PeersConselingNew::class, 'pilih_paket'])->name('pilih-paket');
            // PILIH PAKET BERBAYAR
            Route::get('/pilih-paket-berbayar', [PeersConselingNew::class, 'show_pilih_berbayar'])->name('paket-berbayar');
            Route::post('/pilih-paket-berbayar', [PeersConselingNew::class, 'pilih_berbayar'])->name('pilih-paket-berbayar');
            // PILIH KONSELOR
            Route::get('/{ref}/pilih-konselor', [PeersConselingNew::class, 'pilih_konselor'])->name('pilih-konselor');
            Route::post('/{ref}/pilih-konselor', [PeersConselingNew::class, 'process_pilih_konselor'])->name('process-pilih-konselor');
            // LAYANAN SERVICE
            Route::get('/{ref}/pilih-layanan', [PeersConselingNew::class, 'pilih_layanan'])->name('pilih-layanan');
            Route::post('/{ref}/pilih-layanan', [PeersConselingNew::class, 'process_pilih_layanan'])->name('process-pilih-layanan');
            // FORMULIR
            Route::get('/{ref}/formulir', [PeersConselingNew::class, 'formulir'])->name('formulir');
            Route::post('/{ref}/formulir', [PeersConselingNew::class, 'process_formulir'])->name('process-formulir');
            // CHECKOUT
            Route::get('/{ref}/pembayaran', [PeersConselingNew::class, 'view_pembayaran'])->name('view-pembayaran');
        });
    });

    // ----------------------------------------------------------------------------------------

    Route::prefix('/career')->group(function () {
        // PENDAFTARAN RELATIONSHIP KONSELOR
        Route::get('/pendaftaran-relationship-konselor', [RelationshipKonselor::class, 'index'])->name('pendaftaran-relationship-konselor');
        Route::post('/pendaftaran-relationship-konselor/create', [RelationshipKonselor::class, 'store']);
        // PENDAFTARAN PEER KONSELOR
        Route::get('/pendaftaran-peer-konselor', [PeerKonselor::class, 'index'])->name('pendaftaran-peer-konselor');
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
    });
    //--------------------------------------------------------------------------------------

    // PENDAFTARAN KEGIATAN
    //PENDAFTARAN WEBINAR
    Route::post('/kegiatan-webinar/{slug}', [WebinarController::class, 'store'])->name('daftar-webinar');

    Route::get('/{ref_transaction_event}/pembayaran-webinar', [WebinarTransaksiController::class, 'pembayaran'])->name('checkout-webinar');
    Route::post('/{ref_transaction_event}/checkout/webinar', [WebinarTransaksiController::class, 'checkoutWebinar']);
    Route::get('/{ref_transaction_event}/notification-webinar/success', [NotificationWebinar::class, 'index'])->name('notification.success.webinar');
    // PENDAFTARAN CAMPAIGN
    Route::post('/kegitan-campaign/{slug}', [CampaignController::class, 'store'])->name('daftar-campaign');

    Route::middleware(['auth', 'only-user'])->group(function () {
        Route::name('dashboard.')->prefix('/dashboard')->group(function () {
            // DASHBOARD USER
            //Dasboard Utama
            Route::get('', [IndexController::class, 'showDashboardIndex'])->name('index');
            // PROFILE
            Route::name('profile.')->prefix('/profile')->group(function () {
                Route::get('', [ProfileController::class, 'showDashboardProfile'])->name('index');
                Route::post('/changes-data', [ProfileController::class, 'processChanges'])->name('changes.data');
                Route::get('/ubah-password', [ProfileController::class, 'showUbahPassword'])->name('show.changePassword');
                Route::post('/change-password', [ProfileController::class, 'processChangePassword'])->name('changes.password');
                Route::get('/ubah-foto-profile', [ProfileController::class, 'showUbahFoto'])->name('show.changeFoto');
                Route::post('/ubah-foto-profile', [ProfileController::class, 'processChangeFoto'])->name('process.changeFoto');
            });
            // E-Book
            Route::get('/e-book', [MyBookController::class, 'showMyBook'])->name('show.e-book');
            // Rekap Transaksi
            Route::get('/recap-transactions', [RekapTransaction::class, 'showRecapTransaction'])->name('show.rekap.transaksi');
            Route::post('/cancel-order', [RekapTransaction::class, 'cancelingOrder'])->name('cancel.order.transaksi');
        });
    });

    // DASHBOARD ADMIN
    Route::middleware(['auth', 'only-admin'])->group(function () {
        Route::name('admin.')->prefix('/admin')->group(function () {
            // DASHBOARD ADMIN
            // DASHBOARD ADMIN
            Route::get('/dashboard', [adminDashboardController::class, 'index'])->name('dashboard.index');
            // KELOLA EVENT (WEBINAR & CAMPAIGN)
            Route::name('events.')->prefix('/event')->group(function () {
                Route::get('', [eventDashboardController::class, 'index'])->name('index');
                Route::get('/add', [eventDashboardController::class, 'showAdd'])->name('add');
                Route::post('/add', [eventDashboardController::class, 'createEvent'])->name('create');
                Route::get('/{activity_category_event}/detail/{id}', [eventDashboardController::class, 'showDetail'])->name('detail');
                Route::get('/edit/{id}', [eventDashboardController::class, 'showEdit'])->name('edit');
                Route::post('/update/{id}', [eventDashboardController::class, 'update'])->name('update');
                Route::get('/delete/{id}', [eventDashboardController::class, 'delete'])->name('delete');
            });
            // KELOLA PEMESANAN
            Route::name('transactions.')->prefix('/transaction')->group(function () {
                Route::get('', [transactionDashboardController::class, 'index'])->name('index');
                Route::get('/{ref_transaction_event}', [transactionDashboardController::class, 'showDetail'])->name('detail');
                Route::post('/{ref_transaction_event}/delete', [transactionDashboardController::class, 'delete'])->name('delete');
            });
            // KELOLA ARTIKEL
            Route::name('articles.')->prefix('/article')->group(function () {
                Route::get('', [articleDashboardController::class, 'index'])->name('index');
                Route::get('/{id}', [articleDashboardController::class, 'show'])->name('detail');
                Route::get('/add', [articleDashboardController::class, 'create'])->name('create');
                Route::get('/edit/{id}', [articleDashboardController::class, 'edit'])->name('edit');
            });
            // KELOLA GUESTSTAR
            Route::name('gueststar.')->prefix('/gueststar')->group(function () {
                Route::get('', [guestStarDashboardController::class, 'index'])->name('index');
                Route::get('/add', [guestStarDashboardController::class, 'showAdd'])->name('add');
                Route::post('/add', [guestStarDashboardController::class, 'createGuestStar'])->name('create');
                Route::get('/edit/{id}', [guestStarDashboardController::class, 'showEdit'])->name('edit');
                Route::post('/update/{id}', [guestStarDashboardController::class, 'update'])->name('update');
                Route::get('/delete/{id}', [guestStarDashboardController::class, 'delete'])->name('delete');
            });
            // KELOLA PSYCOLOG
            Route::name('psikolog.')->prefix('/psycolog')->group(function () {
                Route::get('', [psikologDashboardController::class, 'index'])->name('index');
                Route::get('/{id}', [psikologDashboardController::class, 'show'])->name('detail');
                Route::get('/add', [psikologDashboardController::class, 'create'])->name('create');
                Route::get('/edit/{id}', [psikologDashboardController::class, 'edit'])->name('edit');
            });
            Route::get('/events/{id}', [eventDashboardController::class, 'Update'])->name(('event.update'));
        });
    });

    // DASHBOARD KONSELOR
    Route::middleware(['auth', 'only-konselor'])->group(function () {
    });
    // DASHBOARD PSIKOLOG
    Route::middleware(['auth', 'only-psikolog'])->group(function () {
    });

    //DASHBOARD WRITTER
    Route::middleware(['auth', 'only-writter'])->group(function () {
    });
});


require __DIR__ . '/auth.php';
Route::fallback(function () {
    return view('errors.404'); // Menampilkan halaman 404
});


// // login and register
// Route::view('/admin/login', 'pages.auth.admin.login')->name('login.admin');
// Route::view('/admin/register', 'pages.auth.admin.register')->name('register.admin');
// // main dashboard
// Route::view('/admin/dashboard', 'pages.admin-dashboard')->name('admin-dashboard');
// // events
// Route::view('/admin/events', 'pages.Dashboard.Event.admin-event')->name('admin.event');
// Route::view('/admin/events/add', 'pages.Dashboard.Event.tambah-data-event')->name('tambah-data-event');
// Route::view('/admin/events/detail', 'pages.Dashboard.Event.detail-data-event')->name('detail-data-event');
// Route::view('/admin/events/edit', 'pages.Dashboard.Event.edit-data-event')->name('edit-data-event');
// // orders
// Route::view('/admin/orders', 'pages.admin-orders')->name('admin.orders');
// Route::view('/admin/orders/detail', 'pages.admin-order-detail')->name('admin.order-detail');

// // article
// Route::view('/admin/articles', 'pages.Dashboard.Artikel.admin-article')->name('admin.article');
// Route::view('/admin/articles/add', 'pages.Dashboard.Artikel.tambah-data-artikel')->name('tambah-data-artikel');
// Route::view('/admin/articles/detail', 'pages.Dashboard.Artikel.detail-data-artikel')->name('detail-data-artikel');
// Route::view('/admin/articles/edit', 'pages.Dashboard.Artikel.edit-data-artikel')->name('edit-data-artikel');


// // guestars
// Route::view('/admin/guestars', 'pages.Dashboard.Guestar.admin-gueststar')->name('admin.gueststar');
// Route::view('/admin/guestars/edit', 'pages..Dashboard.Guestar.admin-edit-guestar')->name('admin.edit-guestar');
// Route::view('/admin/guestars/add', 'pages.Dashboard.Guestar.admin-add-guestar')->name('admin.add-guestar');
// >>>>>>> be0301f8693c1ee253e369ec06c4d0624adebada

// // psychologist
// Route::view('/admin/psychologist', 'pages.Dashboard.Psikolog.admin-psychology')->name('admin.psychology');
// Route::view('/admin/psychologist/add', 'pages.Dashboard.Psikolog.admin-add-psychologist')->name('admin.add-psychologist');
// Route::view('/admin/psychologist/edit', 'pages.Dashboard.Psikolog.edit-data-psikolog')->name('edit-data-psikolog');
// Route::view('/admin/psychologist/detail', 'pages.Dashboard.Psikolog.detail-data-psikolog')->name('detail-data-psikolog');


// // counselor
// Route::view('/admin/counselor', 'pages.Dashboard.Konselor.konselor')->name('admin.konselor');
// Route::view('/admin/counselor/add', 'pages.Dashboard.Konselor.admin-add-counselor')->name('admin.add-counselor');
// Route::view('/admin/counselor/edit', 'pages.Dashboard.Konselor.edit-data-konselor')->name('edit-data-konselor');
// Route::view('/admin/counselor/detail', 'pages.Dashboard.Konselor.detail-data-konselor')->name('detail-data-konselor');

// PopUp Konseling dan mentoring
Route::view('/next-develop', 'pages.popUp.popUpMentoring')->name('popUpMentoring');
Route::view('/konseling/popupkonseling', 'pages.popUp.popUpKonseling')->name('popUpKonseling');


// Peers Konseling
Route::view('/paket-konseling', 'flow-design-baru.paket-konseling')->name('paket-konseling');
Route::view('/pilih-konselor', 'flow-design-baru.layanan-konseling.1-pilih-konselor')->name('pilih-konselor');
Route::view('/pilih-layanan', 'flow-design-baru.layanan-konseling.2-pilih-layanan')->name('pilih-layanan');
Route::view('/data-diri', 'flow-design-baru.layanan-konseling.3-data-diri')->name('data-diri');
Route::view('/pilih-paket-berbayar', 'flow-design-baru.layanan-konseling.1-pilih-paket-berbayar')->name('pilih-paket-berbayar');
