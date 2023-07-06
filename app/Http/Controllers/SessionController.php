<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;

class SessionController extends Controller
{
    //
    public function index(){
        return view("sesi.index");

    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        dd('berhasil login');

        // $request->validate([
        //     'email'=>'required',
        //     'password'=> 'required'
        // ],[
        //     'email.required'=>'wajib diisi',
        //     'password.required'=>' password wajib diisi'
        // ]
        // );

        // $infologin=[
        //     'email'=>$request->email,
        //     'password'=>$request->password,
        // ];

        // if(Auth::attempt($infologin)){
        //     return 'sukses';
            
        // }else{
        //     return 'gagal';

        // }


    }
}
