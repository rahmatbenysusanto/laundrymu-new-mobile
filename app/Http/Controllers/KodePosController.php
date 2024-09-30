<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KodePosController extends Controller
{
    public function getKota(Request $request): \Illuminate\Http\JsonResponse
    {
        $dataKota = $this->GET('api/alamat/kota', [
            'nama_provinsi'  => $request->provinsi
        ]);

        $kota = $dataKota->data ?? [];

        return response()->json([
            'data'  => $kota
        ]);
    }

    public function getKecamatan(Request $request): \Illuminate\Http\JsonResponse
    {
        $dataKecamatan = $this->GET('api/alamat/kecamatan', [
            'nama_kota'      => $request->kota,
            'nama_provinsi'  => $request->provinsi
        ]);

        $kecamatan = $dataKecamatan->data ?? [];

        return response()->json([
            'data'  => $kecamatan
        ]);
    }

    public function getKelurahan(Request $request): \Illuminate\Http\JsonResponse
    {
        $dataKelurahan = $this->GET('api/alamat/kelurahan', [
            'nama_kecamatan' => $request->kecamatan,
            'nama_kota'      => $request->kota,
            'nama_provinsi'  => $request->provinsi
        ]);

        $kelurahan = $dataKelurahan->data ?? [];

        return response()->json([
            'data'  => $kelurahan
        ]);
    }

    public function getKodePos(Request $request): \Illuminate\Http\JsonResponse
    {
        $dataKodePos = $this->GET('api/alamat/kodepos', [
            'nama_kelurahan' => $request->kelurahan,
            'nama_kecamatan' => $request->kecamatan,
            'nama_kota'      => $request->kota,
            'nama_provinsi'  => $request->provinsi
        ]);

        $kodePos = $dataKodePos->data ?? [];

        return response()->json([
            'data'  => $kodePos
        ]);
    }
}
