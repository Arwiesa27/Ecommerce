<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\layout;
use App\Models\Produk;
class LayoutController extends Controller
{
    //
    function show (){
        $data['produk'] = Produk::all();
        return view('layout',$data);
    }
}
