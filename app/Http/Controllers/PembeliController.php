<?php

namespace App\Http\Controllers;

use App\Models\pembeli;
use App\Models\pengguna;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembeli = pembeli::join('pengguna', 'pengguna.id_pengguna', 'pembeli.id_pengguna')
            ->select('pembeli.*', 'pengguna.*')
            ->paginate(10);
        return view('pembeli/pembeli', compact('pembeli'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['pengguna'] = pengguna::all();
        return view('pembeli/tambah-pembeli', $data);
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

        pembeli::create([
            'id_pembeli' => rand(),
            'id_pengguna'  => $request->id_pengguna,
            'nama'  => $request->nama,
            'usia' => $request->usia,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        return redirect("pembeli")->with("message", "Data berhasil disimpan");
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
    public function edit(pembeli $pembeli)
    {
        $data['pengguna'] = pengguna::all();
        return view('pembeli/edit-pembeli', compact('pembeli'), $data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pembeli $pembeli)
    {
        $request->validate([
            'nama' => 'required',
            'usia' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $pembeli->update([
            'id_pembeli' => rand(),
            'id_pengguna' => $request->id_pengguna,
            'nama'  => $request->nama,
            'usia' => $request->usia,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        return redirect("pembeli")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pembeli $pembeli)
    {
        $pembeli->delete();
        return redirect("pembeli");
    }
    public function print()
    {
        $pembeli = pembeli::all();
        $pdf = Pdf::loadview('pembeli/laporan-pembeli', ['pembeli' => $pembeli])->setPaper('a4', 'landscape');
        return $pdf->download('laporan-pembeli.pdf');
    }
}
