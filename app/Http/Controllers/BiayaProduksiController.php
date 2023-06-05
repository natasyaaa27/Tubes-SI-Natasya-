<?php

namespace App\Http\Controllers;

use App\Models\BiayaProduksi;
use App\Models\Produksi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class BiayaProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biaya_produksi = BiayaProduksi::all();
        return view('biaya-produksi/biaya-produksi', compact('biaya_produksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['produksi'] = Produksi::all();
        return view('biaya-produksi/tambah-biaya-produksi', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_produksi' => 'required',
            'biaya_bahanbaku' => 'required',
            'biaya_total' => 'required',
        ]);

        BiayaProduksi::create([
            'id_biayaPr' => rand(),
            'id_produksi'  => $request->id_produksi,
            'biaya_bahanbaku'  => $request->biaya_bahanbaku,
            'biaya_total' => $request->biaya_total,
        ]);
        return redirect("biaya_produksi")->with("message", "Data berhasil disimpan");
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
    public function edit(BiayaProduksi $biaya_produksi)
    {
        $data['produksi'] = Produksi::all();
        return view('biaya-produksi/edit-biaya-produksi', compact('biaya_produksi'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BiayaProduksi $biaya_produksi)
    {
        $request->validate([
            'biaya_bahanbaku' => 'required',
            'biaya_total' => 'required',
        ]);

        $biaya_produksi->update([

            'id_biayaPr' => rand(),
            'id_produksi' => $request->id_produksi,
            'biaya_bahanbaku'  => $request->biaya_bahanbaku,
            'biaya_total' => $request->biaya_total,
        ]);
        return redirect("biaya_produksi")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BiayaProduksi $biaya_produksi)
    {
        $biaya_produksi->delete();
        return redirect("biaya_produksi");
    }
    public function print()
    {
        $biaya_produksi = BiayaProduksi::all();
        $pdf = Pdf::loadview('biaya-produksi/laporan-biaya-produksi', ['biaya_produksi' => $biaya_produksi])->setPaper('a4', 'landscape');
        return $pdf->download('laporan-biaya-produksi.pdf');
    }
}
