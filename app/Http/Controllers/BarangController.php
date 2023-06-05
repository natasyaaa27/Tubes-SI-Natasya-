<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\gudang;
use App\Models\Pegawai;
use App\Models\Pembeli;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = barang::all();
        return view('barang/barang', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['gudang'] = gudang::all();
        $data['pembeli'] = Pembeli::all();
        $data['pegawai'] = Pegawai::all();
        return view('barang/tambah-barang', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_gudang' => 'required',
            'id_pembeli' => 'required',
            'id_pegawai' => 'required',
            'nama_barang' => 'required',
            'stok_barang' => 'required',
            'kategori_barang' => 'required',
        ]);

        barang::create([
            'id_barang' => rand(),
            'id_gudang'  => $request->id_gudang,
            'id_pembeli'  => $request->id_pembeli,
            'id_pegawai'  => $request->id_pegawai,
            'nama_barang'  => $request->nama_barang,
            'stok_barang' => $request->stok_barang,
            'kategori_barang' => $request->kategori_barang,
        ]);
        return redirect("barang")->with("message", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(barang $barang)
    {
        $data['gudang'] = gudang::all();
        $data['pembeli'] = Pembeli::all();
        $data['pegawai'] = Pegawai::all();
        return view('barang/edit-barang', compact('barang'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, barang $barang)
    {
        $request->validate([
            'id_gudang' => 'required',
            'id_pembeli' => 'required',
            'id_pegawai' => 'required',
            'nama_barang' => 'required',
            'stok_barang' => 'required',
            'kategori_barang' => 'required',
        ]);

        $barang->update([
            'id_gudang'  => $request->id_gudang,
            'id_pembeli'  => $request->id_pembeli,
            'id_pegawai'  => $request->id_pegawai,
            'nama_barang'  => $request->nama_barang,
            'stok_barang' => $request->stok_barang,
            'kategori_barang' => $request->kategori_barang,
        ]);
        return redirect("barang")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(barang $barang)
    {
        $barang->delete();
        return redirect("barang");
    }

    public function print()
    {
        $barang = barang::all();
        $pdf = Pdf::loadview('barang/laporan-barang', ['barang' => $barang])->setPaper('a4', 'landscape');
        return $pdf->download('laporan-barang.pdf');
    }
}
