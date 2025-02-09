<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class InventoryController extends Controller
{
    public function index(): View
    {
        $hit = $this->GET('api/inventory?outlet_id='.Session::get('toko')->id, []);
        $inventory = $hit->data ?? [];

        return view('inventory.index', compact('inventory'));
    }

    public function tambahBarang(): View
    {
        $hit = $this->GET('api/inventory/satuan', []);
        $satuan = $hit->data ?? [];

        return view('inventory.tambah_barang', compact('satuan'));
    }

    public function tambahBarangProses(Request $request): \Illuminate\Http\RedirectResponse
    {
        if ($request->post('satuan') == null) {
            Session::flash('error', 'Satuan wajib diisi');
            return back();
        }

        $hit = $this->POST('api/inventory/barang', [
            'outlet_id'     => Session::get('toko')->id,
            'nama'          => $request->post('nama'),
            'satuan_id'     => $request->post('satuan'),
            'stock_minimum' => $request->post('stock_minimum') ?? 0,
        ]);

        if (isset($hit) && $hit->status) {
            Session::flash('success', 'Barang berhasil ditambahkan');
        } else {
            Session::flash('error', 'Barang gagal ditambahkan');
        }
        return back();
    }

    public function listPembelian(): View
    {
        $hit = $this->GET('api/inventory/pembelian?outlet_id='.Session::get('toko')->id, []);
        $pembelian = $hit->data ?? [];

        return view('inventory.pembelian.index', compact('pembelian'));
    }

    public function tambahPembelianBarang(): View
    {
        $hit = $this->GET('api/inventory/supplier?outlet_id='.Session::get('toko')->id, []);
        $supplier = $hit->data ?? [];

        $hit = $this->GET('api/inventory?outlet_id='.Session::get('toko')->id, []);
        $barang = $hit->data ?? [];

        return view('inventory.pembelian.tambah', compact('supplier', 'barang'));
    }

    public function tambahPembelianProses(Request $request): \Illuminate\Http\RedirectResponse
    {
        $hit = $this->POST('api/inventory/pembelian', [
            'outlet_id'     => Session::get('toko')->id,
            'qty'           => $request->post('qty'),
            'harga'         => $request->post('harga'),
            'status_pembayaran' => $request->post('pembayaran'),
            'supplier_id'       => $request->post('supplier_id'),
            'tanggal_pembelian' => $request->post('tanggal'),
            'note'              => $request->post('catatan'),
            'barang_id'         => $request->post('barang_id'),
        ]);

        if (isset($hit) && $hit->status) {
            Session::flash('success', 'Pembalian Barang berhasil ditambahkan');
        } else {
            Session::flash('error', 'Pembalian Barang gagal ditambahkan');
        }
        return back();
    }

    public function listPenggunaan(): View
    {
        return view('inventory.penggunaan.index');
    }

    public function getDataPenggunaan(Request $request): \Illuminate\Http\JsonResponse
    {
        $data = DB::table('inv_penggunaan_barang')
            ->where('outlet_id', Session::get('toko')->id)
            ->orderBy('id', 'desc')
            ->cursorPaginate(10);

        return response()->json($data);
    }
}
