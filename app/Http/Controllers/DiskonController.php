<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DiskonController extends Controller
{
    public function index(): View
    {
        $dataDiskon = $this->GET('api/diskon?outlet_id='.Session::get('toko')->id, []);

        $diskon = $dataDiskon->data ?? [];

        $title = "diskon";
        return view('diskon.index', compact('title', 'diskon'));
    }

    public function tambah(): View
    {
        return view('diskon.tambah');
    }

    public function tambahDiskonProses(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data['outlet_id'] = Session::get('toko')->id;
        $data['nama'] = $request->post('nama');
        $data['type'] = $request->post('tipe');
        $data['nominal'] = $request->post('nominal');

        $create = $this->POST('api/diskon', $data);
        if (isset($create) && $create->status) {
            Session::flash('success', 'Diskon berhasil ditambahkan');
        } else {
            Session::flash('error', 'Diskon gagal ditambahkan');
        }
        return back();
    }

    public function editDiskon($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $result = $this->GET('api/diskon?id='.base64_decode($id), []);

        if (isset($result) && $result->status && $result->data != null) {
            $title = 'diskon';
            $diskon = $result->data;
            return view('diskon.edit', compact('title', 'diskon'));
        } else {
            return back();
        }
    }

    public function prosesEditDiskon(Request $request): \Illuminate\Http\RedirectResponse
    {
        $result = $this->PATCH('api/diskon?id='.$request->post('id'), [
            'outlet_id'   => Session::get('toko')->id,
            'nama'      => $request->post('nama'),
            'type'      => $request->post('tipe'),
            'nominal'   => $request->post('nominal'),
        ]);

        if (isset($result) && $result->status) {
            Session::flash('success', 'Edit diskon berhasil');
        } else {
            Session::flash('error', 'Edit diskon gagal');
        }
        return redirect()->route('diskon');
    }

    public function hapusDiskon(Request $request): \Illuminate\Http\JsonResponse
    {
        $delete = $this->DELETE('api/diskon?id='.$request->id);
        if (isset($delete) && $delete->status) {
            return response()->json([
                'status'    => true,
                'message'   => $delete->message
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Diskon sudah dipakai dan tidak bisa dihapus'
            ]);
        }
    }
}
