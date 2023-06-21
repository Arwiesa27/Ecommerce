<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    //
    function auth(Request $request){
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect('produk');
        }
        return redirect()->back();
    }
    function daftar(){
        return view('register');
    }
    function create(Request $request){
        $validate = $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        $validate['password'] = bcrypt($request->password);

        User::create($validate);

        return redirect('daftar');
    }
    function logout(){
        Auth::logout();
        return redirect('/');
    }
}
