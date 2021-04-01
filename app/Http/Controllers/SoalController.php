<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SoalController extends Controller
{
    public function soal1($id, $no){
        $nama = DB::table('users')->where('id',$id)->value('name');
        // dd($no);
        return view('pages.soal.1',[
            'id'=>$id,
            'no'=>$no,
            'nama' =>$nama,
        ]);
    }
}