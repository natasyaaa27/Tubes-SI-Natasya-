<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pengguna'] = pengguna::all();
        return view('pengguna.pengguna', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.tambah-pengguna');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        pengguna::create([
            'id_pengguna' => rand(),
            'username'  => $request->username,
            'password' => $request->password,
        ]);
        return redirect("pengguna")->with("message", "Data berhasil disimpan");
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
    public function edit(pengguna $pengguna)
    {
        return view('pengguna/edit-pengguna', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pengguna $pengguna)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $pengguna->update([
            'username'  => $request->username,
            'password' => $request->password,
        ]);
        return redirect("pengguna")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pengguna $pengguna)
    {
        $pengguna->delete();
        return redirect("pengguna");
    }
    public function print()
    {
        $pengguna = pengguna::all();
        $pdf = Pdf::loadview('pengguna/laporan-pengguna', ['pengguna' => $pengguna])->setPaper('a4', 'landscape');
        return $pdf->download('laporan-pengguna.pdf');
    }
}
