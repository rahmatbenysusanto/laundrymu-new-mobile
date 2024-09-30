<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.index');
    }

    public function ops_transaksi(): \Illuminate\Http\JsonResponse
    {
        $dataTransaksi = $this->GET('api/laporan/transaksi-hari-ini/'.Session::get('toko')->id, []);
        $transaksi = $dataTransaksi->data ?? [];

        return response()->json([
            'data'  => $transaksi
        ]);
    }

    public function ops_layanan(): \Illuminate\Http\JsonResponse
    {
        $dataLayanan = $this->GET('api/laporan/layanan/'.Session::get('toko')->id, []);
        $layanan = $dataLayanan->data ?? [];

        return response()->json([
            'data'  => $layanan
        ]);
    }

    public function ops_diskon(): \Illuminate\Http\JsonResponse
    {
        $dataTransaksi = $this->GET('api/laporan/diskon/'.Session::get('toko')->id, []);
        $transaksi = $dataTransaksi->data ?? [];

        return response()->json([
            'data'  => $transaksi
        ]);
    }

    public function ops_parfum(): \Illuminate\Http\JsonResponse
    {
        $dataTransaksi = $this->GET('api/laporan/parfum/'.Session::get('toko')->id, []);
        $transaksi = $dataTransaksi->data ?? [];

        return response()->json([
            'data'  => $transaksi
        ]);
    }

    public function laporan_ops_pembayaran(): \Illuminate\Http\JsonResponse
    {
        $dataTransaksi = $this->GET('api/laporan/pembayaran/'.Session::get('toko')->id, []);
        $transaksi = $dataTransaksi->data ?? [];

        Log::info(json_encode($transaksi));

        if (isset($transaksi)) {
            return response()->json([
                'data'  => $transaksi
            ]);
        } else {
            return response()->json([
                'data'  => []
            ]);
        }
    }

    public function ops_pembayaran(): \Illuminate\Http\JsonResponse
    {
        $dataTransaksi = $this->GET('api/laporan/pembayaran/'.Session::get('toko')->id, []);
        $transaksi = $dataTransaksi->data ?? [];

        return response()->json([
            'data'  => $transaksi
        ]);
    }
}
