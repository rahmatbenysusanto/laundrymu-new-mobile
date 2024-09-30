<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class ParfumController extends Controller
{
    public function index(): View
    {
        $dataParfum = $this->GET('api/parfum?outlet_id='.Session::get('toko')->id, []);

        $parfum = $dataParfum->data ?? [];

        $title = "parfum";
        return view('parfum.index', compact('title', 'parfum'));
    }

    public function tambah(): View
    {
        return view('parfum.tambah');
    }

    public function tambahParfumProses(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data['outlet_id'] = Session::get('toko')->id;
        $data['nama'] = $request->post('nama');
        $data['harga'] = $request->post('harga');

        $create = $this->POST('api/parfum', $data);
        if (isset($create) && $create->status) {
            Session::flash('success', 'Parfum berhasil ditambahkan');
        } else {
            Session::flash('error', 'Parfum gagal ditambahkan');
        }
        return back();
    }

    public function hapusParfum(Request $request): \Illuminate\Http\JsonResponse
    {
        $delete = $this->DELETE('api/parfum?id='.$request->get('id'), []);
        if (isset($delete) && $delete->status) {
            return response()->json([
                'status'    => true,
                'message'   => $delete->message
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Parfum sudah digunakan dalam transaksi, parfum tidak bisa dihapus'
            ]);
        }
    }

    public function editParfum($id)
    {
        $result = $this->GET('api/parfum?id='.base64_decode($id), []);

        if (isset($result) && $result->status && $result->data != null) {
            $title = 'parfum';
            $parfum = $result->data;
            return view('parfum.edit', compact('title', 'parfum'));
        } else {
            Session::flash('error', 'Parfum tidak ditemukan');
            return back();
        }
    }

    public function prosesEditParfum(Request $request): \Illuminate\Http\RedirectResponse
    {
        $result = $this->PATCH('api/parfum?id='.$request->post('id'), [
            'outlet_id'   => Session::get('toko')->id,
            'nama'      => $request->post('nama'),
            'harga'     => $request->post('harga'),
        ]);

        if (isset($result) && $result->status) {
            Session::flash('success', 'Edit parfum berhasil');
        } else {
            Session::flash('error', 'Edit parfum gagal');
        }
        return redirect()->route('parfum');
    }
}
