<?php

namespace App\Http\Controllers;

use App\Models\BahanBaku as bahan_baku;
use App\Models\BahanBaku;
use App\Models\TenagaKerja;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class BahanBakuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bahan_baku = bahan_baku::all();
        return view('bahan-baku/bahan-baku', compact('bahan_baku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['tenaga_kerja'] = TenagaKerja::all();
        return view('bahan-baku/tambah-bahan-baku', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_bahanbaku' => 'required',
            'harga_bahanbaku' => 'required',
        ]);

        bahan_baku::create([
            'id_bahanBk' => rand(),
            'id_tenagakerja' => $request->id_tenagakerja,
            'nama_bahanbaku'  => $request->nama_bahanbaku,
            'harga_bahanbaku' => $request->harga_bahanbaku,
        ]);
        return redirect("bahan_baku")->with("message", "Data berhasil disimpan");
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
    public function edit(bahan_baku $bahan_baku)
    {
        $data['tenaga_kerja'] = TenagaKerja::all();
        return view('bahan-baku/edit-bahan-baku', compact('bahan_baku'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bahan_baku $bahan_baku)
    {
        $request->validate([
            'nama_bahanbaku' => 'required',
            'harga_bahanbaku' => 'required',
        ]);

        $bahan_baku->update([
            'id_bahanBk' => rand(),
            'id_tenagakerja' => $request->id_tenagakerja,
            'nama_bahanbaku'  => $request->nama_bahanbaku,
            'harga_bahanbaku' => $request->harga_bahanbaku,
        ]);
        return redirect("bahan_baku")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bahan_baku $bahan_baku)
    {
        $bahan_baku->delete();
        return redirect("bahan_baku");
    }

    public function print()
    {
        $bahan_baku = BahanBaku::all();
        $pdf = Pdf::loadview('bahan-baku/laporan-bahan-baku', ['bahan_baku' => $bahan_baku])->setPaper('a4', 'landscape');
        return $pdf->download('laporan-bahan-baku.pdf');
    }
}
