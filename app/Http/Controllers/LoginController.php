<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Answer1;

class LoginController extends Controller
{

    public function index(){
        return view('auth.login');
    }
    
    public function mulai(){
        return view('pages.mulai');
    }

    public function login(Request $request){
        $this->validate($request,
            ['id'=>'required'],
        );
        
        $id = $request->input('id');
        //cek dalam database
        $ada = Answer1::where('id',$id)->first();
        if($ada){
            return redirect('/cbt/'.$id.'/81');
        }else{
            $ids = DB::table('users')->where(['id' => $id])->first();
                if($ids){
                    $answer1 = new Answer1;
                    $answer1->id = request()->input('id');
                    $answer1->save();
                    return redirect('/cbt/'.$id.'/81');
                }else{
                    return redirect()->back()->with('failed','Login gagal');
                }
        }
    }
}