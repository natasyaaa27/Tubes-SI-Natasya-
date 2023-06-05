<?php

namespace App\Http\Controllers;

use App\Models\Barang as barang;
use App\Models\StokBarang as stok_barang;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class StokBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stok_barang = stok_barang::all();
        return view('stok-barang/stok-barang', compact('stok_barang'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['barang'] = barang::all();
        return view('stok-barang/tambah-stok-barang', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required',
            'stok_produksi' => 'required',
        ]);

        stok_barang::create([
            'id_stokBr' => rand(),
            'id_barang'  => $request->id_barang,
            'stok_produksi'  => $request->stok_produksi,
        ]);
        return redirect("stok_barang")->with("message", "Data berhasil disimpan");
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
    public function edit(stok_barang $stok_barang)
    {
        $data['barang'] = barang::all();
        return view('stok-barang/edit-stok-barang', compact('stok_barang'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, stok_barang $stok_barang)
    {
        $request->validate([
            'stok_produksi' => 'required',
        ]);

        $stok_barang->update([
            'id_barang' => $request->id_barang,
            'stok_produksi'  => $request->stok_produksi,
        ]);
        return redirect("stok_barang")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stok_barang $stok_barang)
    {
        $stok_barang->delete();
        return redirect("stok_barang");
    }
    public function print()
    {
        $stok_barang = stok_barang::all();
        $pdf = Pdf::loadview('stok-barang/laporan-stok-barang', ['stok_barang' => $stok_barang])->setPaper('a4', 'landscape');
        return $pdf->download('laporan-stok-barang.pdf');
    }
}
