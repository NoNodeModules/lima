<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Answer1;

class BreakController extends Controller
{

    public function break1(){
        return view('pages.break1');
    }
}