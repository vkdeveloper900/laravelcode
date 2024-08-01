<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    //
    function uploaddb(Request $request){
        $path = $request->file('file')->store('public');
        $fileNameArray = explode('/', $path);
        $fileName = $fileNameArray[1];
        $image = new Image();
        $image->path = $fileName;
        $image->save();
        $request->session()->flash('massagesuccess', ' Image uploaded successfully.  👍');
         return redirect('getimage');
    }

    function getimage(){
        $images = Image::all();
        return view('displayimage', ['user' => $images]);
        
    }


}
