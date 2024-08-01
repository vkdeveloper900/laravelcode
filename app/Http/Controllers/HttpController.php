<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HttpController extends Controller
{
    //
    function http()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return view('http', ['response' => $response->throw()]);
        // return $response;
    }
}
