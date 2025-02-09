<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class LainnyaController extends Controller
{
    public function index(): View
    {
        $end = date('Y-m-d');
        $start = date('Y-m-d');
        $dataTransaksiHarian = $this->GET('api/dashboard/statistic-transaksi?outlet_id='.Session::get('toko')->id.'&start_date='.$start.'&end_date='.$end, []);
        $transaksi = $dataTransaksiHarian->data ?? [];

        $outlet = $this->GET('api/outlet?id='.Session::get('toko')->id, []);
        $expired = $outlet->data->expired ?? [];

        return view('lainnya.index', compact('transaksi', 'expired'));
    }
}
