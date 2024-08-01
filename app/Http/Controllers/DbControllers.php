<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DbControllers extends Controller
{
    //
    function db(){
        // $result = DB::table('users')->get();
        // return view('Db',['users'=>$result]);
        // return "hello from db funtion";
        // diplay data from  db 
        // $result = DB::table('users')->get();
        // return $result;
        // $result = DB::table('users')->where('id','12')->get();
        // return $result;
        // return view('Db',['users'=>$result]);

        $result = DB::table('users')->insert([

            'id'=>'7',
            'name'=>'ramesh',
            'email'=>'ramesh@yaho.com.com',
            'password'=>'12345667647'            
        ]);
        if ($result) {
            # code...
            echo "Data inserted";
             $result = DB::table('users')->get();
             return view('Db',['users'=>$result]);
        }
        else{
            return "Data not inserted";
            }
        // return "hello from db funtion";


        // data update in db 

        // $result = DB::table('users')->where('id','2')->update(['name'=>'vikash']);
        
        // if ($result) {
        //     # code...
        //     echo "Data updated";
        //     $result = DB::table('users')->get();
        //     return view('Db',['users'=>$result]);
        // }
        // else{
        //     return "Data already updated";
        //     }


            // data delete in db 

            // $result =DB::table('users')->where('id','4')->delete();
            // if ($result) {
            //     # code...
            //     echo "Data deleted";
            //     $result = DB::table('users')->get();
            //     return view('Db',['users'=>$result]);
            //     }
            //     else{
            //         return "Data already deleted";
            //         }

            






        // `id`, `name`, `email`,
    }
}
