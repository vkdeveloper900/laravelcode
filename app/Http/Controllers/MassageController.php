<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MassageController extends Controller
{
    //
    function massage(Request $request)
    {
        $request->session()->put('user', $request->input('username'));
        $request->session()->flash('massagesuccess', 'Login Done 👍');
        return redirect('home');
    }
}
