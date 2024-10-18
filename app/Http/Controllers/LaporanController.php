<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class LaporanController extends Controller
{
    public function index(): View
    {
        return view('laporan.index');
    }

    public function laporanPelanggan(): View
    {
        return view('laporan.pelanggan');
    }

    public function laporanPegawai(): View
    {
        return view('laporan.pegawai');
    }

    public function laporanKeuangan(): View
    {
        return view('laporan.keuangan');
    }

    // Operasional

    public function jumlahTransaksi(Request $request): \Illuminate\Http\JsonResponse
    {
        $start = substr($request->get('start'), 0, 10);
        $end = substr($request->get('end'), 0, 10);

        $hit = $this->GET('api/laporan/jumlah-transaksi?outlet_id='.Session::get('toko')->id.'&start='.$start.'&end='.$end, []);

        return response()->json([
            'data'  => $hit->data
        ]);
    }

    public function layanan(Request $request): \Illuminate\Http\JsonResponse
    {
        $start = substr($request->get('start'), 0, 10);
        $end = substr($request->get('end'), 0, 10);

        $hit = $this->GET('api/laporan/layanan?outlet_id='.Session::get('toko')->id.'&start='.$start.'&end='.$end, []);

        return response()->json([
            'data'  => $hit->data
        ]);
    }

    public function parfum(Request $request): \Illuminate\Http\JsonResponse
    {
        $start = substr($request->get('start'), 0, 10);
        $end = substr($request->get('end'), 0, 10);

        $hit = $this->GET('api/laporan/parfum?outlet_id='.Session::get('toko')->id.'&start='.$start.'&end='.$end, []);

        return response()->json([
            'data'  => $hit->data
        ]);
    }

    public function diskon(Request $request): \Illuminate\Http\JsonResponse
    {
        $start = substr($request->get('start'), 0, 10);
        $end = substr($request->get('end'), 0, 10);

        $hit = $this->GET('api/laporan/diskon?outlet_id='.Session::get('toko')->id.'&start='.$start.'&end='.$end, []);

        return response()->json([
            'data'  => $hit->data
        ]);
    }

    public function pembayaran(Request $request): \Illuminate\Http\JsonResponse
    {
        $start = substr($request->get('start'), 0, 10);
        $end = substr($request->get('end'), 0, 10);

        $hit = $this->GET('api/laporan/pembayaran?outlet_id='.Session::get('toko')->id.'&start='.$start.'&end='.$end, []);

        return response()->json([
            'data'  => $hit->data
        ]);
    }
}
