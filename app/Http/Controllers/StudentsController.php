<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

use PhpParser\Node\Name\Relative;
use function Laravel\Prompts\select;

class StudentsController extends Controller
{
    //
    function getstudents(){
        // return view('Students');
        // return "hello";
        
        // $students = DB::select('select * from students');
        // return view('Students', ['student' => $students]);
        // print_r($students);


        // data display using  model 
        // all() get all data from Relative table 

        $student = \App\Models\Student::all();
        return view('Students', ['student' => $student]);
    }
}
