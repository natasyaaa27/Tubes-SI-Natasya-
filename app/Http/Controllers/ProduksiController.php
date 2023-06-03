<?php

namespace App\Http\Controllers;
use App\Models\produksi;
use App\Models\tenaga_kerja;
use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    public function index(){
            $tkerja = tenaga_kerja::all();
            $data = [
                'tkerja' => $tkerja
            ];
            return view('produksi', $data);
    }

    public function actionproduksi(request $request){
        produksi::create([
           'biaya_produksi'=>$request->biaya,
           'stok_produksi'=>$request->stok,
           'id_tk'=>$request->id_tk
        ]);
    }       

}