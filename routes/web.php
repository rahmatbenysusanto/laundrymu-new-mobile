<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\KodePosController;
use App\Http\Controllers\LainnyaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\ParfumController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'processLogin'])->name('processLogin');
Route::post('/register', [AuthController::class, 'processRegister'])->name('processRegister');
Route::get('/lupa-kata-sandi', [AuthController::class, 'lupaKataSandi'])->name('lupaKataSandi');
Route::post('/lupa-kata-sandi', [AuthController::class, 'lupaKataSandiProses'])->name('lupaKataSandiProses');

Route::middleware([AuthMiddleware::class])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/verifikasi-otp', 'verifikasiOtp')->name('verifikasiOtp');
        Route::get('/logout', 'logout')->name('logout');
    });

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/dashboard/get-data-status-laundry', 'statusLaundry')->name('statusLaundry');
        Route::get('/dashboard/transaksi-harian', 'transaksiHarian')->name('transaksiHarian');
        Route::get('/dashboard/chart-mobile', 'getChart')->name('getChart');
    });

    Route::controller(LaporanController::class)->group(function () {
        Route::get('/laporan', 'index')->name('laporan');
        Route::get('/laporan-pegawai', 'laporanPegawai')->name('laporanPegawai');
        Route::get('/laporan-pelanggan', 'laporanPelanggan')->name('laporanPelanggan');
        Route::get('/laporan-keuangan', 'laporanKeuangan')->name('laporanKeuangan');

        // Operasional API JSON
        Route::get('/laporan/jumlah-transaksi', 'jumlahTransaksi')->name('laporan.jumlahTransaksi');
        Route::get('/laporan/layanan', 'layanan')->name('laporan.layanan');
        Route::get('/laporan/parfum', 'parfum')->name('laporan.parfum');
        Route::get('/laporan/diskon', 'diskon')->name('laporan.diskon');
        Route::get('/laporan/pembayaran', 'pembayaran')->name('laporan.pembayaran');
    });

    Route::controller(LainnyaController::class)->group(function () {
        Route::get('/lainnya', 'index')->name('lainnya');
    });

    Route::controller(OutletController::class)->group(function () {
        Route::get('/outlet', 'outlet')->name('outlet');
        Route::get('/gunakan-outlet/{id}', 'gunakanOutlet')->name('gunakanOutlet');
        Route::get('/lihat-outlet/{id}', 'lihatOutlet');
        Route::get('/perpanjang-lisensi-outlet/{id}', 'perpanjangLisensi');
        Route::get('/tambah-outlet', 'tambahOutlet')->name('tambahOutlet');
        Route::post('/buat-outlet', 'createOutlet')->name('createOutlet');
        Route::get('/histori-pembayaran-outlet', 'historiPembayaran')->name('historiPembayaran');
        Route::get('/pembayaran-outlet/{nomorPembayaran}', 'detailPembayaran');
        Route::post('/upload-bukti-pembayaran', 'uploadBuktiPembayaran')->name('uploadBuktiPembayaran');
        Route::post('/perpanjang-lisensi-proses', 'perpanjangLisensiProses')->name('perpanjangLisensiProses');
    });

    Route::controller(PelangganController::class)->group(function () {
        Route::get('/pelanggan', 'index')->name('pelanggan');
        Route::get('/tambah-pelanggan', 'tambah')->name('tambahPelanggan');
        Route::post('/pelanggan', 'tambahPelangganProses')->name('tambahPelangganProses');
        Route::post('/tambah-pelanggan-ajax', 'tambahPelangganAjax')->name('tambahPelangganAjax');
        Route::get('/get-pelanggan', 'getPelanggan')->name('getPelanggan');
        Route::get('/hapus-pelanggan', 'hapusPelanggan')->name('hapusPelanggan');
        Route::get('/edit-pelanggan/{id}', 'editPelanggan');
        Route::post('/edit-pelanggan', 'prosesEditPelanggan')->name('prosesEditPelanggan');
        Route::get('/pelanggan-by-json', 'getByJson')->name('getByJson');
    });

    Route::controller(LayananController::class)->group(function () {
        Route::get('/layanan', 'index')->name('layanan');
        Route::get('/tambah-layanan', 'tambah')->name('tambahLayanan');
        Route::post('/tambah-layanan-proses', 'tambahLayananProses')->name('tambahLayananProses');
        Route::get('/hapus-layanan', 'hapusLayanan')->name('hapusLayanan');
        Route::get('/edit-layanan/{id}', 'editLayanan');
        Route::post('/edit-layanan', 'prosesEditLayanan')->name('prosesEditLayanan');
    });

    Route::controller(PembayaranController::class)->group(function () {
        Route::get('/pembayaran', 'index')->name('pembayaran');
        Route::get('/tambah-pembayaran', 'tambah')->name('tambahPembayaran');
        Route::post('/pembayaran', 'tambahPembayaranProses')->name('tambahPembayaranProses');
        Route::get('/hapus-pembayaran', 'hapusPembayaran')->name('hapusPembayaran');
        Route::get('/edit-pembayaran/{id}', 'editPembayaran');
        Route::post('/edit-pembayaran', 'prosesEditPembayaran')->name('prosesEditPembayaran');
    });

    Route::controller(DiskonController::class)->group(function () {
        Route::get('/diskon', 'index')->name('diskon');
        Route::get('/tambah-diskon', 'tambah')->name('tambahDiskon');
        Route::post('/diskon', 'tambahDiskonProses')->name('tambahDiskonProses');
        Route::get('/hapus-diskon', 'hapusDiskon')->name('hapusDiskon');
        Route::get('/edit-diskon/{id}', 'editDiskon');
        Route::post('/edit-diskon', 'prosesEditDiskon')->name('prosesEditDiskon');
    });

    Route::controller(ParfumController::class)->group(function () {
        Route::get('/parfum', 'index')->name('parfum');
        Route::get('/tambah-parfum', 'tambah')->name('tambahParfum');
        Route::post('/parfum', 'tambahParfumProses')->name('tambahParfumProses');
        Route::get('/hapus-parfum', 'hapusParfum')->name('hapusParfum');
        Route::get('/edit-parfum/{id}', 'editParfum');
        Route::post('/edit-parfum', 'prosesEditParfum')->name('prosesEditParfum');
    });

    Route::controller(ChatController::class)->group(function () {
        Route::get('/chat', 'index')->name('chat');
        Route::get('/chat/get-chat', 'getChat')->name('getChat');
        Route::post('/chat', 'create')->name('sendChat');
    });

    Route::controller(TransaksiController::class)->group(function () {
        Route::get('/transaksi', 'index')->name('transaksi');
        Route::get('/detail-transaksi/{orderNumber}', 'detail');
        Route::get('/proses-transaksi/{id}/{status}', 'prosesTransaksi')->name('prosesTransaksi');
        Route::get('/transaksi-list-layanan', 'listLayanan')->name('transaksiListLayanan');
        Route::get('/tambah-transaksi', 'tambahTransaksi')->name('tambahTransaksi');
        Route::post('/buat-transaksi', 'buatTransaksi')->name('buatTransaksi');
        Route::get('/notifikasi-berhasil', 'notifSuccessCreateTransaksi')->name('notifSuccessCreateTransaksi');
        Route::get('/detail-status-transaksi/{orderNumber}','detailStatusTransaksi');
        Route::get('/detail-transaksi-by-order-number', 'findTransaksiByOrderNumber')->name('findTransaksiByOrderNumber');
        Route::get('/transaksi/cancel', 'cancelTransaksi')->name('cancelTransaksi');
    });

    Route::controller(KodePosController::class)->group(function () {
        Route::get('/get-kota', 'getKota')->name('getKota');
        Route::get('/get-kecamatan', 'getKecamatan')->name('getKecamatan');
        Route::get('/get-kelurahan', 'getKelurahan')->name('getKelurahan');
        Route::get('/get-kode-pos', 'getKodePos')->name('getKodePos');
    });

    Route::controller(PengirimanController::class)->group(function () {
        Route::get('/pengiriman', 'index')->name('pengiriman');
        Route::get('/pengiriman-create', 'create')->name('pengirimanCreate');
        Route::post('/pengiriman', 'pengirimanProses')->name('pengirimanProses');
        Route::get('/edit-pengiriman/{id}', 'edit');
        Route::post('/edit-pengiriman', 'editPengiriman')->name('editPengiriman');
        Route::get('/hapus-pengiriman', 'hapusPengiriman')->name('hapusPengiriman');
    });

    Route::controller(NotificationController::class)->group(function () {
        Route::get('/notification', 'findByUserId')->name('notification');
        Route::get('/notification/count', 'count')->name('countNotification');
    });
});
