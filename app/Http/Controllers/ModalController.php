<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class ModalController extends Controller
{
    //

    function modal(){
        $ans = User::all();
        return $ans;
        // return view('modal',compact('ans'));
        // return view('modal');
    }
}
