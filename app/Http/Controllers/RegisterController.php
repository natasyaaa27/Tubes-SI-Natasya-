<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use App\Models\pembeli;
use App\Models\tenaga_kerja;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }
    public function actionregister(Request $request){

        $cekhak_akses= $request->hak_akses;
        if ($cekhak_akses=='pegawai'){
                $user=User::create([
                'username'=>$request->username,
                'password'=>bcrypt($request['password'])
                
            ]);
            pegawai::create([
                'nama_pegawai'=>$request->nama,
                'usia'=>$request->usia,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'id_pengguna'=>$user->id
            ]);
        }    
        else if ($cekhak_akses=='pembeli'){
            $user=User::create([
            'username'=>$request->username,
            'password'=>bcrypt($request['password'])
            
            ]);
            pembeli::create([
                'nama_pembeli'=>$request->nama,
                'usia'=>$request->usia,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'id_pengguna'=>$user->id
            ]);
        }  
        else  if ($cekhak_akses=='Tkerja'){
            $user=User::create([
            'username'=>$request->username,
            'password'=>bcrypt($request['password'])
            
            ]);
            tenaga_kerja::create([
                'nama_tenagakerja'=>$request->nama,
                'usia'=>$request->usia,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'id_pengguna'=>$user->id
            ]);
        }   
        return redirect('/register');
    }
}
