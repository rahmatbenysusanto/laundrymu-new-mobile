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

    public function edit($id): View
    {
        $result = $this->GET('api/pengiriman?id='.base64_decode($id), []);

        if (isset($result) && $result->status && $result->data != null) {
            $title = 'pengiriman';
            $pengiriman = $result->data;
            return view('pengiriman.edit', compact('title', 'pengiriman'));
        } else {
            Session::flash('error', 'Parfum tidak ditemukan');
            return back();
        }
    }

    public function editPengiriman(Request $request): \Illuminate\Http\RedirectResponse
    {
        $result = $this->PATCH('api/pengiriman?id='.$request->post('id'), [
            'outlet_id'   => Session::get('toko')->id,
            'nama'      => $request->post('nama'),
            'harga'     => $request->post('harga'),
        ]);

        if (isset($result) && $result->status) {
            Session::flash('success', 'Edit pengiriman berhasil');
        } else {
            Session::flash('error', 'Edit pengiriman gagal');
        }
        return redirect()->route('pengiriman');
    }

    public function hapusPengiriman(Request $request): \Illuminate\Http\JsonResponse
    {
        $delete = $this->DELETE('api/pengiriman?id='.$request->get('id'), []);
        if (isset($delete) && $delete->status) {
            return response()->json([
                'status'    => true,
                'message'   => $delete->message
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Parfum sudah digunakan dalam transaksi, pengiriman tidak bisa dihapus'
            ]);
        }
    }
}
