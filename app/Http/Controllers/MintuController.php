<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MintuController extends Controller
{


    public function index(){


        return view("testcomp");

    }

    public function store (Request $request){
        echo "<pre>";
       print_r( $request->all());

    }



    //
}
