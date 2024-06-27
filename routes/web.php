<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StudentController;
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
Route::get('insertclient',[ClientController::class,'store']);
Route::get('test20',[Mycontroller::class,'my_data']);
Route::post('studentdata',[StudentController::class,'store'])->name('studentdata');
Route::get('students',[StudentController::class,'index'])->name('students');
Route::get('editstudents/{id}',[StudentController::class,'edit'])->name('editstudents');
Route::put('updatestudents/{id}',[StudentController::class,'update'])->name('updatestudents');
Route::get('showstudents/{id}',[StudentController::class,'show'])->name('showstudents');
Route::delete('deletestudents/{id}',[StudentController::class,'destroy'])->name('deletestudents');
Route::get('trashstudents',[StudentController::class,'trash'])->name('trashstudents');
Route::get('restorestudents/{id}',[StudentController::class,'restore'])->name('restorestudents');
Route::delete('forcedelstudents/{id}',[StudentController::class,'forcedelete'])->name('forcedelstudents');
Route::get('/', function () {
    return view('welcome');
});

Route::get('mahy/{id?}',function($id=0){
    return "welcome to my website" .$id;
})->whereNumber('id');
Route::get('course/{name}',function($name){
    return "this is " .$name;
})->whereIn('name',['mahy','ali','ahmed']);
Route::prefix('cars')->group(function(){
Route::get('bmw',function(){
    return "category is bmw";
});
Route::get('mercedes',function(){
    return "category is mercedes";
});
});
// Route::get('test20',function(){
//     return view('test');
// });
Route::get('form1',function(){
    return view('form1');
});
Route::get('stack',function(){
    return view('stacked');
});
Route::post('recform1',function(){
    return $_POST['fname'] ." ". $_POST['lname'];
    // return "recieved";
})->name('receiveform1');
// Route::fallback(function(){
//     // return 'the page not found';
//     return redirect('/');
// });
// _______other way to view the form inputs through view________
// Route::post('input',function(){
//     return view('input');
// })->name('inputdata');
Route::get('addclient', [ClientController::class,'create'])->name('addclient');
Route::post('insertclient',[ClientController::class,'store'])->name('insertclient');
Route::get('clients',[ClientController::class,'index'])->middleware('verified')->name('clients');
Route::get('editclient/{id}',[ClientController::class,'edit'])->name('editclient');
Route::put('updateclient/{id}',[ClientController::class,'update'])->name('updateclient');
Route::get('showclient/{id}',[ClientController::class,'show'])->name('showclient');
Route::delete('delclient/{id}',[ClientController::class,'destroy'])->name('delclient');
Route::get('trashedclients',[ClientController::class,'trash'])->name('trashedclients');
Route::get('restoreclients/{id}',[ClientController::class,'restore'])->name('restoreclients');
Route::delete('deleteclients/{id}',[ClientController::class,'forcedelete'])->name('deleteclients');
Route::get('addstudent',[StudentController::class,'create'])->name('addstudent');
Route::get('session',[MyController::class,'myval'])->name('session');
Route::get('mysession',[MyController::class,'restoreval'])->name('mysession');
Route::get('delsession',[MyController::class,'deleteval'])->name('delsession');
Route::get('sendclientmail',[MyController::class,'sendclientmail'])->name('sendemail');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});