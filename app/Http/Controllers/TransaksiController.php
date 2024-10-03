<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class TransaksiController extends Controller
{
    public function index(): View
    {
        $dataTransaksi = $this->GET('api/transaksi?outlet_id='.Session::get('toko')->id, [
            'status'    => [
                'baru', 'diproses', 'selesai'
            ]
        ]);
        $dataTransaksiDiambil = $this->GET('api/transaksi/toko/'.Session::get('toko')->id.'/'.'diambil', []);
        $transaksi = $dataTransaksi->data ?? [];
        $transaksiDiambil = $dataTransaksiDiambil->data ?? [];

        return view('transaksi.list_transaksi', compact('transaksi', 'transaksiDiambil'));
    }

    public function detail($orderNumber): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $dataTransaksi = $this->GET('api/transaksi/detail?order-number='.$orderNumber, []);

        if (isset($dataTransaksi) && $dataTransaksi->status) {
            $transaksi = $dataTransaksi->data;
            $detail = $dataTransaksi->data->transaksi_detail;
            $histori = $dataTransaksi->data->transaksi_detail;
            $title = "list transaksi";
            return view('transaksi.detail', compact('title', 'transaksi', 'detail', 'histori'));
        } else {
            return back();
        }
    }

    public function prosesTransaksi($id, $status): \Illuminate\Http\JsonResponse
    {
        $prosesTransaksi = $this->PATCH('api/transaksi', [
            'id'        => $id,
            'status'    => $status
        ]);
        if (isset($prosesTransaksi) && $prosesTransaksi->status) {
            return response()->json([
                'status'    => true,
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => $prosesTransaksi->message ?? 'error',
            ]);
        }
    }

    public function listLayanan(): View
    {
        $dataLayanan = $this->GET('api/layanan?outlet_id='.Session::get('toko')->id, []);
        $layanan = $dataLayanan->data ?? [];

        return view('transaksi.list_layanan', compact('layanan'));
    }

    public function tambahTransaksi(): View
    {
        $dataParfum = $this->GET('api/parfum?outlet_id='.Session::get('toko')->id, []);
        $dataDiskon = $this->GET('api/diskon?outlet_id='.Session::get('toko')->id, []);
        $dataPembayaran = $this->GET('api/pembayaran?outlet_id='.Session::get('toko')->id, []);
        $dataPengiriman = $this->GET('api/pengiriman?outlet_id='.Session::get('toko')->id, []);
        $dataPelanggan = $this->GET('api/pelanggan?outlet_id='.Session::get('toko')->id, []);

        $pelanggan = $dataPelanggan->data ?? [];
        $parfum = $dataParfum->data ?? [];
        $diskon = $dataDiskon->data ?? [];
        $pembayaran = $dataPembayaran->data ?? [];
        $pengiriman = $dataPengiriman->data ?? [];

        return view('transaksi.tambah_transaksi', compact('parfum', 'diskon', 'pembayaran', 'pengiriman', 'pelanggan'));
    }

    public function buatTransaksi(Request $request): \Illuminate\Http\JsonResponse
    {
        $pelanggan = $request->post('pelanggan');

        $diskon = $request->post('diskon');
        if ($diskon == null) {
            $dataDiskon = $this->GET('api/diskon?outlet_id='.Session::get('toko')->id, []);
            $diskon = $dataDiskon->data ?? [];
            $diskon_id = $diskon[0]->id;
        } else {
            $diskon_id = $diskon['id'];
        }

        $parfum = $request->post('parfum');
        if ($parfum == null) {
            $dataParfum = $this->GET('api/parfum?outlet_id='.Session::get('toko')->id, []);
            $parfum = $dataParfum->data ?? [];
            $parfum_id = $parfum[0]->id;
        } else {
            $parfum_id = $parfum['id'];
        }

        $dataBiayaParfum = $this->GET('api/parfum?id='.$parfum_id, []);
        $biayaParfum = $dataBiayaParfum->data ?? [];

        $pengiriman = $request->post('pengiriman');
        if ($pengiriman == null) {
            $dataPengiriman = $this->GET('api/pengiriman?outlet_id='.Session::get('toko')->id, []);
            $pengiriman = $dataPengiriman->data ?? [];
            $pengiriman_id = $pengiriman[0]->id;
        } else {
            $pengiriman_id = $pengiriman['id'];
        }

        $dataBiayaPengiriman = $this->GET('api/pengiriman?id='.$pengiriman_id, []);
        $biayaPengiriman = $dataBiayaPengiriman->data ?? [];

        $layanan = [];
        foreach ($request->post('layanan') as $lay) {
            $layanan[] = [
                'layanan_id'    => $lay['id'],
                'jumlah'        => $lay['total'],
                'harga'         => $lay['harga'],
                'total_harga'   => $lay['total'] * $lay['harga'],
                'parfum_id'     => $parfum_id,
            ];
        }

        $dataApi['outlet_id'] = Session::get('toko')->id;
        $dataApi['pelanggan_id'] = $pelanggan['id'];
        $dataApi['diskon_id'] = $diskon_id;
        $dataApi['parfum_id'] = $parfum_id;
        $dataApi['pengiriman_id'] = $pengiriman_id;
        $dataApi['pembayaran_id'] = $request->post('pembayaran');
        $dataApi['status_pembayaran'] = $request->post('statusPembayaran');
        $dataApi['harga'] = $request->post('harga');
        $dataApi['harga_diskon'] = $request->post('biayaDiskon');
        $dataApi['biaya_pengiriman'] = $biayaPengiriman->harga ?? 0;
        $dataApi['total_harga'] = $request->post('totalHarga');
        $dataApi['catatan'] = $request->post('catatan');
        $dataApi['detail'] = $layanan;
        $dataApi['status'] = 'baru';
        $dataApi['harga_parfum'] = $biayaParfum->harga ?? 0;

        $create = $this->POST('api/transaksi', $dataApi);
        Log::info(json_encode($create));
        if (isset($create) && $create->status) {
            return response()->json([
                'status'    => true
            ], 200);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => $create->message ?? null
            ], 200);
        }
    }

    public function notifSuccessCreateTransaksi(): View
    {
        return view('transaksi.notif_berhasil');
    }

    public function detailStatusTransaksi($order_number)
    {
        $dataTransaksi = $this->GET('api/transaksi/history?order-number='.$order_number, []);

        if (isset($dataTransaksi) && $dataTransaksi->status) {
            $transaksi = $dataTransaksi->data;
            $histori = $dataTransaksi->data->transaksi_history;

            return view('transaksi.detail_status', compact('transaksi', 'histori'));
        } else {
            return back();
        }
    }

    public function findTransaksiByOrderNumber(Request $request): \Illuminate\Http\JsonResponse
    {
        $dataTransaksi = $this->GET('api/transaksi/'.$request->orderNumber, []);

        if (isset($dataTransaksi) && $dataTransaksi->status) {
            return response()->json([
                'status' => true,
                'data'   => $dataTransaksi->data
            ]);
        } else {
            return response()->json([
                'status' => false,
            ]);
        }
    }

    public function cancelTransaksi(Request $request): \Illuminate\Http\JsonResponse
    {
        $cancel = $this->PATCH('api/transaksi/cancel?id='.$request->get('id'), []);

        if (isset($cancel) && $cancel->status) {
            return response()->json([
                'status' => true
            ]);
        } else {
            return response()->json([
                'status' => false
            ]);
        }
    }

    public function cetakStrukTransaksi()
    {

    }
}
