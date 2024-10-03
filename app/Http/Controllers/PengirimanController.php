<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class PengirimanController extends Controller
{
    public function index(): View
    {
        $hit = $this->GET('api/pengiriman?outlet_id='.Session::get('toko')->id, []);
        $pengiriman = $hit->data ?? [];

        $title = 'pengiriman';
        return view('pengiriman.index', compact('title', 'pengiriman'));
    }

    public function create(): View
    {
        $title = 'pengiriman';
        return view('pengiriman.tambah', compact('title'));
    }

    public function pengirimanProses(Request $request): \Illuminate\Http\RedirectResponse
    {
        $hit = $this->POST('api/pengiriman', [
            'outlet_id' => Session::get('toko')->id,
            'nama'      => $request->post('nama'),
            'harga'     => $request->post('harga'),
        ]);

        if ($hit->status) {
            Session::flash('success', 'Pengiriman Berhasil Ditambahkan');
            return redirect()->action([PengirimanController::class, 'index']);
        } else {
            Session::flash('error', 'Pengiriman gagal dibuat');
            return back();
        }
    }
}
