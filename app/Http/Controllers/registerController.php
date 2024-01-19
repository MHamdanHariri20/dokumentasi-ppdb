<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class registerController extends Controller
{
    public function register(){
        return view('register');
    }

    public function registerAccount(Request $request){

        $school = $request->sekolah;
        if($school == "sekolah_lainnya"){
            $select = $request->sekolah_lainnya;
        }else{
            $select = $request->sekolah;
        }

        $school = $request->sekolah_lainnya;
        if($school == "sekolah"){
            $select2 = $request->sekolah;
        }else{
            $select2 = $request->sekolah_lainnya;
        }

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'jenis_kelamin' => 'required',
            'email' => 'required',
            'jurusan' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
            'sekolah' => $select,
            'role' => 'user',
            'sekolah_lainnya' => $select2,
            'password' => Hash::make($request->phone)
        ]);

        return redirect('/');
    }

    public function cetak(){
        $users = User::latest()->paginate(1);
        return view('/cetak', compact('users'));
    }
}














// public function registerAccount(Request $request)
//     {

//         $select = $request->sekolah;

//         if($select == "sekolah_lainnya" ){
//             $ambil = $request->sekolah_lainnya;
//         }else{
//             $ambil = $request->sekolah;
//         }

//         $select2 = $request->sekolah_lainnya;

//         if($select2 == "sekolah" ){
//             $ambil1 = $request->sekolah;
//         }else{
//             $ambil2 = $request->sekolah_lainnya;
//         }

//         $request->validate([
//             'nisn' => 'required',
//             'jenis_kelamin' => 'required',
//             'name' => 'required',
//             'email' => 'required',
//             'no_hp' => 'required',
//             'no_hp_a' => 'required',
//             'no_hp_i' => 'required',
//         ]);

//         User::create([
//             'nisn' => $request->nisn,
//             'jenis_kelamin' => $request->jenis_kelamin,
//             'name' => $request->name,
//             'sekolah_lainnya' => $ambil2,
//             'sekolah' => $ambil,
//             'email' => $request->email,
//             'no_hp' => $request->no_hp,
//             'no_hp_a' => $request->no_hp_a,
//             'no_hp_i' => $request->no_hp_i,
//             'password' =>  Hash::make($request->nisn),
//             'role' => 'user',
//         ]);
//         return redirect('/cetak');
//     }
