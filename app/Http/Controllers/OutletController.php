<?php

namespace App\Http\Controllers;

use App\Models\KategoriBarang;
use App\Models\Outlet as outlet;
use App\Models\StokBarang;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $outlet = outlet::all();
        return view('outlet/outlet', compact('outlet'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['stok_barang'] = StokBarang::all();
        $data['kategori_barang'] = KategoriBarang::all();
        return view('outlet/tambah-outlet', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_stokBr' => 'required',
            'id_kategoriBr' => 'required',
            'nama_outlet' => 'required',
            'alamat_outlet' => 'required',
        ]);

        outlet::create([
            'id_outlet' => rand(),
            'id_stokBr'  => $request->id_stokBr,
            'id_kategoriBr'  => $request->id_kategoriBr,
            'nama_outlet'  => $request->nama_outlet,
            'alamat_outlet'  => $request->alamat_outlet,
        ]);
        return redirect("outlet")->with("message", "Data berhasil disimpan");
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
    public function edit(outlet $outlet)
    {
        $data['stok_barang'] = StokBarang::all();
        $data['kategori_barang'] = KategoriBarang::all();
        return view('outlet/edit-outlet', compact('outlet'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, outlet $outlet)
    {
        $request->validate([
            'id_stokBr' => 'required',
            'id_kategoriBr' => 'required',
            'nama_outlet' => 'required',
            'alamat_outlet' => 'required',
        ]);

        $outlet->update([
            'id_stokBr'  => $request->id_stokBr,
            'id_kategoriBr'  => $request->id_kategoriBr,
            'nama_outlet'  => $request->nama_outlet,
            'alamat_outlet'  => $request->alamat_outlet,
        ]);
        return redirect("outlet")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(outlet $outlet)
    {
        $outlet->delete();
        return redirect("outlet");
    }

    public function print()
    {
        $outlet = outlet::all();
        $pdf = Pdf::loadview('bahan-baku/laporan-bahan-baku', ['outlet' => $outlet])->setPaper('a4', 'landscape');
        return $pdf->download('laporan-bahan-baku.pdf');
    }
}
