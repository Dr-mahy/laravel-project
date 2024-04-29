<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
Route::get('test20',[Mycontroller::class,'my_data']);
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
Route::post('recform1',function(){
    return $_POST['fname'] ." ". $_POST['lname'];
    // return "recieved";
})->name('receiveform1');
// Route::fallback(function(){
//     // return 'the page not found';
//     return redirect('/');
// });
