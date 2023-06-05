<?php

namespace App\Http\Controllers;

use App\Models\Pengguna as pengguna;
use App\Models\TenagaKerja as tenaga_kerja;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class TenagaKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenaga_kerja = tenaga_kerja::all();
        return view('tenaga-kerja/tenaga-kerja', compact('tenaga_kerja'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['pengguna'] = pengguna::all();
        return view('tenaga-kerja/tambah-tenaga-kerja', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_pengguna' => 'required',
            'nama' => 'required',
            'usia' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        tenaga_kerja::create([
            'id_tenagakerja' => rand(),
            'id_pengguna'  => $request->id_pengguna,
            'nama'  => $request->nama,
            'usia' => $request->usia,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        return redirect("tenaga_kerja")->with("message", "Data berhasil disimpan");
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
    public function edit(tenaga_kerja $tenaga_kerja)
    {
        $data['pengguna'] = pengguna::all();
        return view('tenaga-kerja/edit-tenaga-kerja', compact('tenaga_kerja'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tenaga_kerja $tenaga_kerja)
    {
        $request->validate([
            'nama' => 'required',
            'usia' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $tenaga_kerja->update([
            'id_tenaga_kerja' => rand(),
            'id_pengguna' => $request->id_pengguna,
            'nama'  => $request->nama,
            'usia' => $request->usia,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        return redirect("tenaga_kerja")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tenaga_kerja $tenaga_kerja)
    {
        $tenaga_kerja->delete();
        return redirect("tenaga_kerja");
    }

    public function print()
    {
        $tenaga_kerja = tenaga_kerja::all();
        $pdf = Pdf::loadview('tenaga-kerja/laporan-tenaga-kerja', ['tenaga_kerja' => $tenaga_kerja])->setPaper('a4', 'landscape');
        return $pdf->download('laporan-tenaga-kerja.pdf');
    }
}
