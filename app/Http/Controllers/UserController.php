<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;

class UserController extends Controller
{
    //
    function users()
    {
        // return "hello from funtion users";
        // $users = DB::table('users')->get();
        // return DB::select('select * from users ');

        $users = DB::select('select * from users  ');
        return view('users', ['user' => $users]);
        //    yha par $users ka data user me assign ho gya hai

        //    print_r($users);
    }

    function logout(Request $request)
    {
        session()->pull('user');
        $request->session()->flash('massagesuccess', 'Log Out Success👍');
        return redirect('home');
    }

    function query()
    {
        // for all data
        $query = DB::table('users')->get();

        // for  where

        // $query = DB::table('users')->where('name','vinod')->get();
        // $query = DB::table('users')->where('created_at','2024-07-23 01:56:41')->get();

        // display first result
        // $query = DB::table('users')->first();
        // $query = [$query];
        return view('userquery', ['query' => $query]);

        // insert data in to database

        //     $query = DB::table('users')->insert(['name' => 'vinod suthar',
        //      'email' => 'vk900@gmail.com',
        //       'email_verified_at' => '2024-07-10 23:21:06' ,
        //       'password' => '1234',
        //       'remember_token' => '1234' ,
        //       'created_at' => '2024-07-02 23:21:06' ,
        //       'updated_at' =>' 2024-07-17 23:21:06']);

        // if ($query) {
        //     # code...
        //     return "data inserted";
        // }
        // else{
        //     return "data not inserted";
        //     }

        // data update

        // $query = DB::table('students')->where(['id' => $id])->update(['name' => 'macbook']);

        // if ($query) {
        //     return "data updated";
        // } else {
        //     return "data not updated";
        // }

        // data delete

        // $query = DB::table('users')->where('name','vinod')->delete();
        // if($query){
        //     return "data deleted";
        //     }
        //     else{
        //         return "data not deleted";
        //         }
        // return view('userquery');
    }

    function model()
    {
        $response = User::paginate(10);
        return view('model', ['model' => $response]);
    }

    function submit(Request $request)
    {
        $response = [$request->name, $request->email, $request->password, $request->confirmPassword];
        return view('submit', ['submit' => $response]);
        // return $response;

        // return view('submit');

        // return $request;
        // return view('submit',['submit' => $request]);
        // return "form submited";
    }

    // function login(Request $request){
    //     $request->$request->session()->put('username', 'hello');
    //     echo session('username');
    // $response = [$request->username];
    // return view('loginok',['submit' => $response]);

    // return view('loginok');
    // }

    function login(Request $request)
    {
        $request->session()->put('user', $request->input('username'));
        $request->session()->put('alldata', $request->input());
        // return redirect ('loginok');
        return view('loginok');
        // return redirect('loginok');

        // redirect('loginok');
    }
}

// function login(Request $request){
//     echo "url : ";
//     echo  $request->url();
//     echo "<br>";
//     echo "<br>";
//     echo "method : ";
//     echo  $request->method();
//     echo "<br>";
//     echo "<br>";
//     echo "path : ";
//     echo  $request->path();
//     echo "<br>";
//     echo "<br>";
//     echo "full url : ";
//     echo  $request->fullUrl();
//     echo "<br>";
//     echo "<br>";
//     echo "ip : ";
//     echo  $request->ip();
//     echo "<br>";
//     echo "<br>";
//     echo "header host : ";
//     echo  $request->header('Host');
//     echo "<br>";
//     echo "<br>";
//     echo "header agent : ";
//     echo  $request->header('User-Agent');
//     echo "<br>";
//     echo "<br>";
//     echo "header accept : ";
//     echo  $request->header('Accept');
//     echo "<br>";
//     echo "<br>";
//     echo "header accept language : ";
//     echo  $request->header('Accept-Language');
//     echo "<br>";
//     echo "<br>";
//     echo "header accept encoding : ";
//     echo  $request->header('Accept-Encoding');
//     echo "<br>";
//     echo "<br>";
//     echo "header accept charset : ";
//     echo  $request->header('Accept-Charset');
//     echo "<br>";
//     echo "<br>";
//     echo "header Accept-Datetime : ";
//     echo  $request->header('Accept-Datetime');
//     echo "<br>";
//     echo "<br>";
//     echo "header Authorization : ";
//     echo  $request->header('Authorization');
//     echo "<br>";
//     echo "<br>";
//     echo "header Cache-Control : ";
//     echo  $request->header('Cache-Control');
//     echo "<br>";
//     echo "<br>";
//     echo "header Connection : ";
//     echo  $request->header('Connection');
//     echo "<br>";
//     echo "<br>";
//     echo "header Cookie : ";
//     echo  $request->header('Cookie');
//     echo "<br>";
//     echo "<br>";
//     echo "header Content-Length : ";
//     echo  $request->header('Content-Length');
//     echo "<br>";
//     echo "<br>";
//     echo "header Content-Type : ";
//     echo  $request->header('Content-Type');
//     echo "<br>";
//     echo "<br>";
//     echo "header Host : ";
//     echo  $request->header('Host');
//     echo "<br>";
//     echo "<br>";
//     echo "header If-Modified-Since : ";
//     echo  $request->header('If-Modified-Since');
//     echo "<br>";
//     echo "<br>";
//     echo "header If-None-Match : ";
//     echo  $request->header('If-None-Match');
//     echo "<br>";
//     echo "<br>";
//     echo "header Origin : ";
//     echo  $request->header('Origin');
//     echo "<br>";
//     echo "<br>";
//     echo "header Referer : ";
//     echo  $request->header('Referer');
//     echo "<br>";
//     echo "<br>";
//     echo "header User-Agent : ";
//     echo  $request->header('User-Agent');
//     echo "<br>";
//     echo "<br>";
//     echo "header X-Requested-With : ";
//     echo  $request->header('X-Requested-With');
//     echo "<br>";
//     echo "<br>";

// return $request;
// return "login success";
// }