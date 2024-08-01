<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DbController;
use App\Http\Controllers\DbControllers;
use App\Http\Controllers\ModalController;


Route::get('ad',[DbControllers::class,'db']);


Route::get('users12',[DbController::class,'user22']);
Route::view('db','Db');

// Route::view('modal','modal');
Route::get('modal',[ModalController::class,'modal']);




Route::view('student/home','users');
// Route::get('student/show',[UsersController::class,'show']);
// Route::get('student/add',[UsersController::class,'add']);

Route::controller(UsersController::class)->group(function(){
    Route::get('show','show');
    Route::get('add','add');
});




// form work start 
Route::view('/userform','user-form')->middleware('chek1');
// Route::get('adduser',[UserController::class,'adduser']);

Route::post('adduser','user-form');
// Route::post('adduser',[UserController::class,'adduser']);

Route::view('/form','form')->middleware('chek2');
Route::post('/form',[UserController::class,'adduser1']);
Route::post('/form',[UserController::class,'requiredt']);



// form work end


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/dumy',function(){
//     return view('dumy');
// });


//         //  or

Route::view('/home','admin.login');
$i = 0;
if($i==0){
Route::view('/home','home');
}
else
{
echo "fail ";
}

Route::view('about','about');


Route::view('um','users')->name('uhm');

Route::get('/novanoticia', 'HomeController@getNovaNoticia')->name('route_name');

// Route::get('/get',[UserController::class,'userexists']);


// Route::view('/ok','components.massagebanner');




// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/home',[UserController::class,'getUser']);

// Route::get('/home',[UserController::class,'name']);

// Route::get('/user/{name}',[UserController::class,'users']);

// Route::get('/user',function()
// {
//     return view('user');
// });

// Route::get('/admin',function(){
//     return view('admin.login');
// });

//  Route::get('/admin1',[UserController::class,'adminlogin']);





// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
//     });

// Route::redirect('/', '/home2');

// Route::view('/home2', 'home');

// Route::get('/about/{name}', function ($name) {
//     return view('about', ['name' => $name]);
//      echo $name;
//      return view('about');
// });