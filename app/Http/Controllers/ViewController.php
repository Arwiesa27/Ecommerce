<?php

namespace App\Http\Controllers;

use Illuminate\Request;
use App\Models\Produk;

class ViewController extends Controller
{
    //
    function show(){
        $data['produk'] = Produk::first();
        return view('viewop', $data);
    }
    function viewop($id){
        $data['produk']= Produk::find($id);
        return view('viewop',$data);
    }
}
