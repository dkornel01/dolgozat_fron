<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tesztController extends Controller
{
    public function teszt(){
    $tes=DB::table('teszts as teszt')     
        ->select('teszt.*','kategorias.*')
        ->join('kategorias','kategorias.id','=','teszt.kategoriaId')
        ->get();
        return view('teszt.teszt',['tes'=>$tes]);
    }
    public function tesztkat($id){
        $tesztke=DB::table('teszts as teszt')
            ->select('teszt.*')
            ->join('kategorias','kategorias.id','=','teszt.kategoriaId')
            ->where('kategoriaId','=',$id)
            ->get();
            return view('teszt.teszt',['tesztke'=>$tesztke]);
        }
}
