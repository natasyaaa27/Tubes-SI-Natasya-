<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use App\Models\StokProduksi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gudang = Gudang::all();
        return view('gudang/gudang', compact('gudang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['stok_produksi'] = StokProduksi::all();
        return view('gudang/tambah-gudang', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_stokPr' => 'required',
            'hasil_produksi' => 'required',
            'jumlah_stok' => 'required',
        ]);

        Gudang::create([
            'id_gudang' => rand(),
            'id_stokPr'  => $request->id_stokPr,
            'hasil_produksi'  => $request->hasil_produksi,
            'jumlah_stok' => $request->jumlah_stok,
        ]);
        return redirect("gudang")->with("message", "Data berhasil disimpan");
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
    public function edit(Gudang $gudang)
    {
        $data['stok_produksi'] = StokProduksi::all();
        return view('gudang/edit-gudang', compact('gudang'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gudang $gudang)
    {
        $request->validate([
            'hasil_produksi' => 'required',
            'jumlah_stok' => 'required',
        ]);

        $gudang->update([

            'id_gudang' => rand(),
            'id_stokPr' => $request->id_stokPr,
            'hasil_produksi'  => $request->hasil_produksi,
            'jumlah_stok' => $request->jumlah_stok,
        ]);
        return redirect("gudang")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gudang $gudang)
    {
        $gudang->delete();
        return redirect("gudang");
    }

    public function print()
    {
        $gudang = Gudang::all();
        $pdf = Pdf::loadview('gudang/laporan-gudang', ['gudang' => $gudang])->setPaper('a4', 'landscape');
        return $pdf->download('laporan-gudang.pdf');
    }
}
