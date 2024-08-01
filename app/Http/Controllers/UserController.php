<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

// Your code here



class UserController extends Controller
{

    // FORM CONTROL START
     function adduser(Request $request){
        echo "this is add user funtion"."<br>" ;
        echo $request->name ."<br>" ;
        echo $request->email;
        // echo $request;
    }

        function adduser1 (Request $request){
            // echo "this is add user funtion"."<br>" ;
            // echo "hello";
            return $request;
            // print_r($request->skill);
            // echo $request->dropdownn;
            // echo $request->gender;
            // echo $request->range;

        }

        function requiredt(Request $request){
            $request->validate([
                'gender'=> 'required'
            ]);
        }
     





    // FORM CONTROL  END





















    // function userexists(){
    // if (View::exists('dumy')) {
    //     return view('welcome');
    //     }
    //     else
    //     {
    //         echo "file not found";
    //         }
    //     }


    // function userexists(){
    //     View::exists('welcome');
    //     }
        

        // $i=15;
        // if ($i==1) {
        //     return view('dumy');
        //     }
        //     else
        //     {
        //         echo "file not found";
        //         }
        //     }
    
    








    function getUser()
    {
        return 'vinod suthar';
    }

    // function name(){     
    //     echo 'me hu don '. '<br>';
    //     echo 'ram lal';
    // }

    // function user($name){
    //     echo "hello i am  ".$name;
    // }
    // function users($name){
    //     // return "hello i am  ".$name;
    //     return view('getuser',['name'=>$name]);

    // }

    // function adminlogin(){
    //     return view('admin.login');
    // }
}
