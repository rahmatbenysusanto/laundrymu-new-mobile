<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class PembayaranController extends Controller
{
    public function index(): View
    {
        $dataPembayaran = $this->GET('api/pembayaran?outlet_id='.Session::get('toko')->id, []);

        $pembayaran = $dataPembayaran->data ?? [];

        $title = "pembayaran";
        return view('pembayaran.index', compact('title', 'pembayaran'));
    }

    public function tambah(): View
    {
        return view('pembayaran.tambah');
    }

    public function tambahPembayaranProses(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data['outlet_id'] = Session::get('toko')->id;
        $data['nama'] = $request->post('nama');

        $create = $this->POST('api/pembayaran', $data);

        if (isset($create) && $create->status) {
            Session::flash('success', 'Pembayaran berhasil ditambahkan');
        } else {
            Session::flash('error', 'Pembayaran gagal ditambahkan');
        }
        return back();
    }

    public function editPembayaran($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $result = $this->GET('api/pembayaran?id='.base64_decode($id), []);

        if (isset($result) && $result->status && $result->data != null) {
            $title = 'pembayaran';
            $pembayaran = $result->data;
            return view('pembayaran.edit', compact('title', 'pembayaran'));
        } else {
            Session::flash('error', 'Pembayaran tidak ditemukan');
            return back();
        }
    }

    public function prosesEditPembayaran(Request $request): \Illuminate\Http\RedirectResponse
    {
        $result = $this->PATCH('api/pembayaran?id='.$request->post('id'), [
            'outlet_id'   => Session::get('toko')->id,
            'nama'      => $request->post('nama'),
        ]);

        if (isset($result) && $result->status) {
            Session::flash('success', 'Edit pembayaran berhasil');
        } else {
            Session::flash('error', 'Edit pembayaran gagal');
        }
        return redirect()->route('pembayaran');
    }

    public function hapusPembayaran(Request $request): \Illuminate\Http\JsonResponse
    {
        $delete = $this->DELETE('api/pembayaran?id='.$request->id);
        if (isset($delete) && $delete->status) {
            return response()->json([
                'status'    => true,
                'message'   => $delete->message
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Pembayaran sudah dipakai dan tidak bisa dihapus'
            ]);
        }
    }
}
