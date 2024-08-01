<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\DB;



class UploadController extends Controller
{
    //
    function upload(Request $request)
    {
        $path = $request->file('file')->store('public');
        $fileNameArray = explode('/', $path);
        $fileName = $fileNameArray[1];
        return view('display', ['path' => $fileName]);
    }

    function input(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->remember_token = $request->remember_token;
        $user->save();

        if ($user) {
            # code...
            $request->session()->flash('massagesuccess', 'new user created 👍');
            return redirect('login');

        } else {
            $request->session()->flash('massageerror', 'something went wrong 😢');
            return redirect()->route('input');
        }
    }


    function inputStudent(Request $request)
    {
        // return $request->input();
        $student = new Student();
        $student->name = $request->name;
        $student->class = $request->class;
        $student->part = $request->part;
        $student->timestamps = false;
        $student->save();


        if ($student) {
            # code...
            $request->session()->flash('massagesuccess', 'new student added 👍');
            return redirect('students');

        } else {
            $request->session()->flash('massageerror', 'something went wrong 😢');
            return redirect()->route('input');
        }
    }

    function deleteStudent($id, Request $request)
    {
        $isDeleted = Student::destroy($id);
        if ($isDeleted) {
            # code...
            $request->session()->flash('massagesuccess', 'Data Deleted 👍');
            return redirect('students');
        } else {
            $request->session()->flash('massageerror', 'something went wrong Data Not Deleted  😢');
            return redirect('students');
        }
    }

    function deleteUser($id, Request $request)
    {
        $isDeleted = User::destroy($id);
        if ($isDeleted) {
            # code...
            $request->session()->flash('massagesuccess', 'Data Deleted 👍');
            return redirect('users');
        } else {
            $request->session()->flash('massageerror', 'something went wrong Data Not Deleted  😢');
            return redirect('users');
        }

    }

    function updateStudent($id)
    {
        $query = DB::table('students')->where('id', $id)->get();
        return view('updatestudent', ['query' => $query]);
    }

    function updateUser($id)
    {
        $query = DB::table('users')->where('id', $id)->get();
        return view('updateuser', ['query' => $query]);
    }

    function updateuserquery($id, Request $request)
    {

        $query = DB::table('users')->where('id', $id)->update(['name' => $request->name, 'email' => $request->email, 'password' => $request->password, 'remember_token' => $request->remember_token]);
        if ($query) {
            $request->session()->flash('massagesuccess', 'Data Updated 👍');
            return redirect('users');
        } else {
            $request->session()->flash('massageerror', 'something went wrong Data Not Updated 😢');
            return redirect('users');
        }
    }

    function updatestudentquery($id, Request $request)
    {
        $query = DB::table('students')->where('id', $id)->update(['name' => $request->name, 'class' => $request->class, 'part' => $request->part,]);

        if ($query) {
            $request->session()->flash('massagesuccess', 'Data Updated 👍');
            return redirect('students');
        } else {
            $request->session()->flash('massageerror', 'something went wrong Data Not Updated 😢');
            return redirect('students');
        }
    }


    function searchstudent(Request $request){
        $search = DB::table('students')->where('name','like',"%$request->search%")->get();
        $rowCount = $search->count();

        if ($rowCount) {
            $request->session()->flash('massagesuccess', $rowCount.' Row Found for '.$request->search.'👍');
            return view('students', ['student' => $search]);
        } 
        else
         {
            $request->session()->flash('massageerror', 'Data Not Found 😢');
            return redirect('students');
        }
    }
    function searchuser(Request $request){
        $search = DB::table('users')->where('name','like',"%$request->search%")->get();
        $rowCount = $search->count();

        if ($rowCount) {
            $request->session()->flash('massagesuccess', $rowCount.' Row Found for '.$request->search.'👍');
            return view('users', ['user' => $search]);
        } 
        else
         {
            $request->session()->flash('massageerror', 'Data Not Found 😢');
            return redirect('users');
        }
    }

    function deleteMultipleUsers(Request $request){
        $ids = $request->ids;
        if (!empty($ids)) 
        {
            DB::table('users')->whereIn('id', $ids)->delete();            
            return redirect()->back()->with('massagesuccess', 'Selected users deleted successfully');
        } else {
            return redirect()->back()->with('massageerror', 'No users selected');
        }

    }

    function deleteMultipleStudents(Request $request){
        $ids = $request->ids;
        if (!empty($ids)) 
        {
            DB::table('students')->whereIn('id', $ids)->delete();            
            return redirect()->back()->with('massagesuccess', 'Selected Students deleted successfully');
        } else {
            return redirect()->back()->with('massageerror', 'No users selected');
        }

    }
}