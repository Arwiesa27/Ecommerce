<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    //
    function show(){
        $data['produk'] = Produk::all();
        return view('produk',$data);
    }
    function add(){
        $data = [
            'action' =>url('produk/create'),
            'tombol' =>'simpan',
            'produk' =>(object)[
                'foto' =>'',
                'nama' =>'',
                'harga' =>''
            ]
        ];
        return view('formproduk',$data);
    }
    function hapus($id){
        Produk::where('id',$id)->delete();
        return redirect('produk');
    }
    function edit($id){
        $data['produk'] = Produk::find($id);
        $data['action'] = url('produk/update') . '/' .$data['produk']->id;
        $data['tombol'] = 'update';
        return view('formproduk',$data);
    }
    function update(Request $req){
        if($req->file(foto)){
            $produk = Produk::where('id',$req->id)->first();
            Storage::delete($produk->foto);
            $file = $req->file('foto')->store('foto');
        }else{
            
        }



        // Produk::where('id',$req->id)->update([
        //     'foto' => $file,
        //     'nama' => $req->nama,
        //     'harga' => $req->harga
        // ]);
        // return redirect('produk');
    }
    function create(Request $req){
        $this->validate($req,[
            // 'foto' => 'required|mimes:jpeg,jpg,png',
            'nama' => 'required|string|max:15',
        ]);
        Produk::create([
            'foto' => $req->file('foto')->store('foto'),
            'nama' => $req->nama,
            'harga' => $req->harga,
        ]);
        return redirect('produk');
    }
}
