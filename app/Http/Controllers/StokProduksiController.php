<?php

namespace App\Http\Controllers;

use App\Models\Produksi as produksi;
use App\Models\StokProduksi as stok_produksi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class StokProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stok_produksi = stok_produksi::all();
        return view('stok-produksi/stok-produksi', compact('stok_produksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['produksi'] = produksi::all();
        return view('stok-produksi/tambah-stok-produksi', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_produksi' => 'required',
            'stok_produksi' => 'required',
        ]);

        stok_produksi::create([
            'id_stokPr' => rand(),
            'id_produksi'  => $request->id_produksi,
            'stok_produksi'  => $request->stok_produksi,
        ]);
        return redirect("stok_produksi")->with("message", "Data berhasil disimpan");
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
    public function edit(stok_produksi $stok_produksi)
    {
        $data['produksi'] = produksi::all();
        return view('stok-produksi/edit-stok-produksi', compact('stok_produksi'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, stok_produksi $stok_produksi)
    {
        $request->validate([
            'id_produksi' => 'required',
            'stok_produksi' => 'required',
        ]);

        $stok_produksi->update([
            'id_produksi' => $request->id_produksi,
            'stok_produksi'  => $request->stok_produksi,
        ]);
        return redirect("stok_produksi")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stok_produksi $stok_produksi)
    {
        $stok_produksi->delete();
        return redirect("stok_produksi");
    }

    public function print()
    {
        $stok_produksi = stok_produksi::all();
        $pdf = Pdf::loadview('stok-produksi/laporan-stok-produksi', ['stok_produksi' => $stok_produksi])->setPaper('a4', 'landscape');
        return $pdf->download('laporan-stok-produksi.pdf');
    }
}
