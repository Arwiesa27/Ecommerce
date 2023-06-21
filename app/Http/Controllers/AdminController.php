<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    function show (){
        return view('admin');
    }

    function add(){
        $data=[
            'action'=> url('admin/create'),
            'tombol'=> 'Simpan',
            'admin'=> (object)[
                'id'=> '',
                'nama'=> '',
                'foto' => '',
                'harga' => '',
            ]
            ];
        return view('formAdmin',$data);
    }
    function create(Request $req){
        $this->validate($req , [
            'id' => 'required|min:2|numeric',
            'nama' => 'required|string|max:15',
            'foto' => 'mimes:jpg,png'
        ]);
        Admin::create ([
            'id' => $req->id,
            'nama' => $req->nama,
            'foto' => $req->file('foto')->store('foto'),
            'harga' => $req->harga,
        ]);
        return redirect('admin');
    }
    function hapus($id){
        $admin = Admin::where('id',$id)->first();
        $admin-> delete();
        Storage::delete($admin->foto);
        return redirect('admin');
     }
     function edit($id){
         $data['admin']= Admin::find($id);
         $data['action']= url('admin/update').'/'.$data['admin']->id;
         $data['tombol']= 'update';
         return view('formAdmin',$data);
     }
     function update(Request $req){
         $this->validate($req , [
             'id' => 'required|min:2|numeric',
             'nama' => 'required|string|max:15',
             'foto' => 'mimes:jpg,png'
         ]);
         if($req->file('foto')){
             $admin = Admin::where('id',$req->id)->first();
             Storage::delete($admin->foto);
             $file = $req->file('foto')->store('foto');
         }else{
             $file = DB::raw('foto');
         }
         Admin::where('id',$req->nis)->update([
             'id'=>$req->id,
             'nama'=>$req->nama,
             'foto' =>$file,
             'harga'=>$req->harga,
         ]);
         return redirect('admin');
     }
    function cari(Request $req){
        $data['admin'] = Admin::where('id',$req->cari)->orWhere('nama',$req->cari)->get();
        return view('admin',$data);
    }
}
