<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('dashboard.index');
    }

    public function statusLaundry(): \Illuminate\Http\JsonResponse
    {
        $dataStatusTransaksi = $this->GET('api/dashboard/status-transaksi?outlet_id='.Session::get('toko')->id, []);
        $statusTransaksi = $dataStatusTransaksi->data ?? [];

        return response()->json([
            'data'  => $statusTransaksi,
        ]);
    }

    public function transaksiHarian(): \Illuminate\Http\JsonResponse
    {
        $outlet_id = Session::get('toko')->id;
        $end = date('Y-m-d');
        $start = date('Y-m-d');
        $dataTransaksiHarian = $this->GET('api/dashboard/statistic-transaksi?outlet_id='.$outlet_id.'&start_date='.$start.'&end_date='.$end, []);
        $transaksi = $dataTransaksiHarian->data ?? [];

        return response()->json([
            'data'    => $transaksi,
        ]);
    }

    public function getChart(): \Illuminate\Http\JsonResponse
    {
        $dataTransaksiHarian = $this->GET('api/dashboard/chart?outlet_id='.Session::get('toko')->id, []);
        $transaksi = $dataTransaksiHarian->data ?? [];

        return response()->json([
            'data'    => $transaksi,
        ]);
    }
}
