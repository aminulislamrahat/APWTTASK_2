<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    function getData(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required'

        ]);
        return $req->input();
    }

    function index()
    {
        $data = Http::get("https://reqres.in/api/users?page=1");

        return view('profile',['collection'=>$data['data']]);
    }
}
