<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class PelangganController extends Controller
{
    public function index(): View
    {
        $dataPelanggan = $this->GET('api/pelanggan?outlet_id='.Session::get('toko')->id, []);
        $pelanggan = $dataPelanggan->data ?? [];

        $title = "pelanggan";
        return view('pelanggan.index', compact('title', 'pelanggan'));
    }

    public function getByJson(): \Illuminate\Http\JsonResponse
    {
        $dataPelanggan = $this->GET('api/pelanggan?outlet_id='.Session::get('toko')->id, []);

        if (isset($dataPelanggan) && $dataPelanggan->status) {
            return response()->json([
                'status'    => true,
                'data'      => $dataPelanggan->data
            ], 200);
        } else {
            return response()->json([
                'status'    => false,
            ], 200);
        }
    }

    public function tambah(): View
    {
        return view('pelanggan.tambah');
    }

    public function tambahPelangganProses(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data['outlet_id'] = Session::get('toko')->id;
        $data['nama'] = $request->post('nama');
        $data['no_hp'] = $request->post('no_hp');

        $create = $this->POST('api/pelanggan', $data);
        if (isset($create) && $create->status) {
            Session::flash('success', 'Pelanggan berhasil ditambahkan');
        } else {
            Session::flash('error', 'Pelanggan gagal ditambahkan');
        }
        return back();
    }

    public function tambahPelangganAjax(Request $request): \Illuminate\Http\JsonResponse
    {
        $data['toko_id'] = Session::get('toko')->id;
        $data['nama'] = $request->post('nama');
        $data['no_hp'] = $request->post('no_hp');

        $create = $this->POST('api/pelanggan', $data);
        if (isset($create) && $create->status) {
            return response()->json([
                'status'    => true,
                'data'      => $create->data
            ]);
        } else {
            return response()->json([
                'status'    => false
            ]);
        }
    }

    public function getPelanggan(): \Illuminate\Http\JsonResponse
    {
        $dataPelanggan = $this->GET('api/pelanggan/toko/'.Session::get('toko')->id, []);

        $pelanggan = $dataPelanggan->data ?? [];

        return response()->json([
            'data'  => $pelanggan
        ]);
    }

    public function editPelanggan($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $result = $this->GET('api/pelanggan?id='.base64_decode($id), []);

        if (isset($result) && $result->status && $result->data != null) {
            $title = 'pelanggan';
            $pelanggan = $result->data;
            return view('pelanggan.edit', compact('title', 'pelanggan'));
        } else {
            Session::flash('error', 'Pelanggan tidak ditemukan');
            return back();
        }
    }

    public function prosesEditPelanggan(Request $request): \Illuminate\Http\RedirectResponse
    {
        $result = $this->PATCH('api/pelanggan?id='.$request->post('id'), [
            'outlet_id' => Session::get('toko')->id,
            'nama'      => $request->post('nama'),
            'no_hp'     => $request->post('no_hp'),
        ]);

        if (isset($result) && $result->status) {
            Session::flash('success', 'Edit pelanggan berhasil');
        } else {
            Session::flash('error', 'Edit pelanggan gagal');
        }
        return redirect()->route('pelanggan');
    }

    public function hapusPelanggan(Request $request): \Illuminate\Http\JsonResponse
    {
        $delete = $this->DELETE('api/pelanggan?id='.$request->id);
        if (isset($delete) && $delete->status) {
            return response()->json([
                'status'    => true,
                'message'   => $delete->message
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Pelanggan sudah dipakai dan tidak bisa dihapus'
            ]);
        }
    }
}
