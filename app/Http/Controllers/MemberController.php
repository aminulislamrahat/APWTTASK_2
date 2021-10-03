<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    //
    function addData(Request $req)
    {
        $member = new Member;

        $req->validate([
            'name' => 'required|min:4|max:10',
            'email' => 'required',
            'password' => 'required|min:3|max:6'

        ]);

        $member->name = $req->name;
        $member->email = $req->email;
        $member->password = $req->password;
        $member->save();

        $data = $req->name;
        $req->session()->flash('user',$data);
        return redirect ('signup');
    }
}
