<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer1;
use Illuminate\Support\Facades\DB;

class JawabController extends Controller
{
    public function jawab($id, $no, $jawab){
        
        //cek dalam database
        // $ada = Answer1::where('id',$id)->first();
        // if($ada){
            $nomornya = 'n'.$no;
        $jawaban = new Answer1;
        $jawaban->where('id',$id)->update([
            $nomornya => $jawab,
        ]);
        return redirect()->back();
        // }
    }
}