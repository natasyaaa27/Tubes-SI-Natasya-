<?php

namespace App\Http\Controllers;

use App\Models\Produksi as produksi;
use App\Models\TenagaKerja as tenaga_kerja;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produksi = produksi::all();
        return view('produksi/produksi', compact('produksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['tenaga_kerja'] = tenaga_kerja::all();
        return view('produksi/tambah-produksi', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_tenagakerja' => 'required',
            'stok_produksi' => 'required',
            'biaya_produksi' => 'required',
        ]);

        produksi::create([
            'id_produksi' => rand(),
            'id_tenagakerja'  => $request->id_tenagakerja,
            'stok_produksi'  => $request->stok_produksi,
            'biaya_produksi' => $request->biaya_produksi,
        ]);
        return redirect("produksi")->with("message", "Data berhasil disimpan");
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
    public function edit(produksi $produksi)
    {
        $data['tenaga_kerja'] = tenaga_kerja::all();
        return view('produksi/edit-produksi', compact('produksi'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produksi $produksi)
    {
        $request->validate([
            'stok_produksi' => 'required',
            'biaya_produksi' => 'required',
        ]);

        $produksi->update([
            'id_produksi' => rand(),
            'id_tenagakerja' => $request->id_tenagakerja,
            'stok_produksi'  => $request->stok_produksi,
            'biaya_produksi' => $request->biaya_produksi,
        ]);
        return redirect("produksi")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produksi $produksi)
    {
        $produksi->delete();
        return redirect("produksi");
    }

    public function print()
    {
        $produksi = produksi::all();
        $pdf = Pdf::loadview('produksi/laporan-produksi', ['produksi' => $produksi])->setPaper('a4', 'landscape');
        return $pdf->download('laporan-produksi.pdf');
    }
}
