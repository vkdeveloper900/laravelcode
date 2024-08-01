<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class DbController extends Controller
{
    //
    function user22(){
        echo"
        <h1 style=' text-align: center'> Form </h1>
            <table border=3 width=100%  >
                <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Email Verified At</th>
                <th>password</th>
                <th>Remember_Token</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
                ";
        $users = DB::select('select * from users');
        foreach ($users as $user) {
        

        echo"
             
                
                <tr>
                    <td>".$user->id."</td>
                    <td>".$user->name."</td>
                    <td>".$user->email."</td>
                    <td>".$user->email_verified_at."</td> 
                    <td>".$user->password."</td>
                    <td>".$user->remember_token."</td>
                    <td>".$user->created_at."</td>
                    <td>".$user->updated_at."</td>
                </tr>
            
            

        ";

        //  return DB::select('select * from users');

}
            echo "</table>";
    }
    
}