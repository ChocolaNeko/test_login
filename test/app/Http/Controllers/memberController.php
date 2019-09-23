<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class memberController extends Controller
{
    function member() {
        return view('test.member');
    }

    function printData(Request $request) {
        // dd($request);
        // dd($request->input("acc"));
        // dd($request->input("pwd"));
        // return "Account: " . $request->acc . ", Password: " . $request->pwd;
        return view('test.member', [
            "acc" => $request->acc,
            "pwd" => $request->pwd
        ]);
    }
}
