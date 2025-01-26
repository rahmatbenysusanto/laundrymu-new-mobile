<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class OutletController extends Controller
{
    public function outlet(): View
    {
        $dataOutlet = $this->GET('api/outlet/user', []);

        $outlet = $dataOutlet->data ?? [];

        return view('outlet.index', compact('outlet'));
    }

    public function gunakanOutlet($outletId): \Illuminate\Http\JsonResponse
    {
        $dataOutlet = $this->GET('api/outlet?id='.$outletId, []);

        Session::put('toko', $dataOutlet->data);

        return response()->json([
            'status' => true
        ]);
    }

    public function lihatOutlet($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $dataToko = $this->GET('api/toko/'.(int)base64_decode($id), []);
        if (isset($dataToko) && $dataToko->status) {
            $toko = $dataToko->data;
            $title = "outlet";
            return view('outlet.lihat', compact('title', 'toko'));
        } else {
            Session::flash('error', 'Outlet tidak ditemukan');
            return back();
        }
    }

    function perpanjangLisensi($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $dataToko = $this->GET('api/outlet?id='.$id.'&user_id='.Session::get('user_id'), []);
        if (isset($dataToko) && $dataToko->status) {
            $dataLisensi = $this->GET('api/lisensi', []);
            $lisensi = $dataLisensi->data ?? [];
            $outlet = $dataToko->data;

            $title = "outlet";
            return view('outlet.perpanjang_lisensi', compact('title', 'outlet', 'lisensi'));
        } else {
            return back();
        }
    }

    public function perpanjangLisensiProses(Request $request): \Illuminate\Http\RedirectResponse
    {
        $result = $this->POST('api/outlet/pembayaran', [
            'outlet_id'             => Session::get('toko')->id,
            'user_id'               => Session::get('user_id'),
            'lisensi_id'            => $request->post('lisensi')
        ]);

        if (isset($result) && $result->status) {
            Session::flash('success', 'Perpanjang Lisensi Berhasil, Silahkan melakukan pembayaran');
            return redirect()->route('historiPembayaran');
        } else {
            Session::flash('error', 'Perpanjang Lisensi Gagal');
            return back();
        }
    }

    public function tambahOutlet(): View
    {
        $dataProvinsi = $this->GET('api/alamat/provinsi', []);
        $dataLisensi = $this->GET('api/lisensi', []);
        $provinsi = $dataProvinsi->data ?? [];
        $lisensi = $dataLisensi->data ?? [];

        $title = "outlet";
        return view('outlet.tambah', compact('title', 'provinsi', 'lisensi'));
    }

    public function createOutlet(Request $request): \Illuminate\Http\JsonResponse
    {
        $create = $this->POST('api/outlet', [
            'user_id'               => Session::get('user_id') ?? 1,
            'nama'                  => $request->post('nama'),
            'no_hp'                 => $request->post('no_hp'),
            'logo'                  => 'image.png',
            'alamat'                => $request->post('alamat'),
            'provinsi'              => $request->post('provinsi'),
            'kabupaten'             => $request->post('kota'),
            'kecamatan'             => $request->post('kecamatan'),
            'kelurahan'             => $request->post('kelurahan'),
            'kode_pos'              => $request->post('kodePos'),
            'lisensi_id'            => $request->post('lisensi')
        ]);

        if (isset($create) && $create->status) {
            return response()->json([
                'status'    => true,
            ]);
        } else {
            return response()->json([
                'status'    => true,
                'message'   => $create->message
            ]);
        }
    }

    public function historiPembayaran(): View
    {
        $dataPembayaran = $this->GET('api/outlet/history-pembayaran?outlet_id='.Session::get('toko')->id, []);

        $pembayaran = $dataPembayaran->data ?? [];

        $title = "pembayaran outlet";
        return view('outlet.histori_pembayaran', compact('title', 'pembayaran'));
    }

    public function detailPembayaran($nomor_pembayaran): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $dataPembayaran = $this->GET('api/outlet/detail-pembayaran?nomor_pembayaran='.$nomor_pembayaran, []);

        if ($dataPembayaran->data != null) {
            $pembayaran = $dataPembayaran->data;

            $title = "pembayaran outlet";
            return view('outlet.detail_pembayaran', compact('title', 'pembayaran'));
        } else {
            return back();
        }
    }

    public function uploadBuktiPembayaran(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('bukti_pembayaran'), $imageName);

        $result = $this->POST('api/toko/upload-bukti-pembayaran', [
            'id'    => $request->post('pembayaran_id'),
            'image' => $imageName
        ]);

        if (isset($result) && $result->status) {
            Session::flash('success', 'Upload bukti pembayaran berhasil');
        } else {
            Session::flash('error', 'Upload bukti pembayaran gagal');
        }

        return back();
    }
}
