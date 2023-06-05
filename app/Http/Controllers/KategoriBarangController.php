<?php

namespace App\Http\Controllers;

use App\Models\Barang as barang;
use App\Models\KategoriBarang as kategori_barang;
use App\Models\KategoriBarang;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class KategoriBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori_barang = kategori_barang::all();
        return view('kategori-barang/kategori-barang', compact('kategori_barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['barang'] = barang::all();
        return view('kategori-barang/tambah-kategori-barang', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required',
            'kategori_barang' => 'required',
        ]);

        kategori_barang::create([
            'id_kategoriBr' => rand(),
            'id_barang'  => $request->id_barang,
            'kategori_barang'  => $request->kategori_barang,
        ]);
        return redirect("kategori_barang")->with("message", "Data berhasil disimpan");
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
    public function edit(kategori_barang $kategori_barang)
    {
        $data["id_kategori_barang"] = kategori_barang::find($kategori_barang->id_kategori_barang);
        $data["id_barang"] = kategori_barang::find($kategori_barang->id_barang);
        $data["kategori_barang"] = kategori_barang::all();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kategori_barang $kategori_barang)
    {
        $request->validate([
            'kategori_barang' => 'required',
        ]);

        $kategori_barang->update([

            'id_bahanBk' => rand(),
            'id_barang' => $request->id_barang,
            'kategori_barang'  => $request->kategori_barang,
        ]);
        return redirect("kategori_barang")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kategori_barang $kategori_barang)
    {
        $kategori_barang->delete();
        return redirect("kategori_barang");
    }

    public function print()
    {
        $kategori_barang = KategoriBarang::all();
        $pdf = Pdf::loadview('kategori_barang/laporan-kategori_barang', ['kategori_barang' => $kategori_barang])->setPaper('a4', 'landscape');
        return $pdf->download('laporan-kategori_barang.pdf');
    }
}
