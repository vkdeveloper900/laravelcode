<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\HttpController;
use App\Http\Controllers\MassageController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ImageController;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('SetLang')->group(function () {
    Route::view('home', 'home');
    Route::view('about', 'about');
    Route::get('users', [UserController::class, 'users']);
    Route::get('userquery', [UserController::class, 'query']);
    Route::get('model', [UserController::class, 'model']);
    Route::get('students', [StudentsController::class, 'getstudents']);
    Route::get('http', [HttpController::class, 'http']);
    Route::get('submit', [UserController::class, 'submit']);
    Route::view('form', 'form');
    Route::view('login', 'login');
    Route::view('loginok', 'loginok');
    Route::get('loginok', [UserController::class, 'login']);
    Route::post('loginok', [UserController::class, 'login']);
    Route::get('logout', [UserController::class, 'logout']);
    Route::post('massage', [MassageController::class, 'massage']);
    Route::view('test', 'test');
    Route::view('upload', 'upload');
    Route::post('upload', [UploadController::class, 'upload']);
    Route::view('language', 'language');
    Route::get('language/{lang}', function ($lang) {
        Session::put('lang', $lang);
        App::setLocale($lang);
        return redirect('language');
    });
    Route::view('input', 'input-data');
    Route::post('input', [UploadController::class, 'input']);
    Route::get('inputStudent', [UploadController::class, 'inputStudent']);
    Route::get('deleteStudent/{id}', [UploadController::class, 'deleteStudent']);
    Route::get('deleteUser/{id}', [UploadController::class, 'deleteUser']);
    Route::get('updateStudent/{id}', [UploadController::class, 'updateStudent']);
    Route::get('updateUser/{id}', [UploadController::class, 'updateUser']);
    Route::post('updateuserquery/{id}', [UploadController::class, 'updateuserquery']);
    Route::post('updatestudentquery/{id}', [UploadController::class, 'updatestudentquery']);

    Route::get('searchstudent',[UploadController::class,'searchstudent']);
    Route::get('searchuser',[UploadController::class,'searchuser']);

    Route::post('deleteMultipleUsers',[UploadController::class,'deleteMultipleUsers']);
    Route::post('deleteMultipleStudents',[UploadController::class,'deleteMultipleStudents']);

    

    Route::view('uploaddb','uploaddb');
    Route::post('uploaddb',[ImageController::class,'uploaddb']);
    Route::get('getimage',[ImageController::class,'getimage']);
    Route::view('displayimage','displayimage');

});