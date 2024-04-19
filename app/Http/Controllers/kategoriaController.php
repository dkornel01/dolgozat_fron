<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kategoriaController extends Controller
{
    public function kategoria(){
        $kate=DB::table('kategorias as kat')
        ->select('kat.*')
        ->get();
        return view('teszt.teszt',['kate'=>$kate]);
    }
}
