<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
           ////////////////// Laravel Routing /////////////////////////

 
Route::get('userprofile1/{name?}' , function ($name = 'Ali'){
    return 'User name is:' . $name;
})->name('login');


Route::get('user/{name}' , function ($name){
        return 'User name is:' . $name;
});

Route::get('user/{id}/collage/{UID}' , function($id , $UID){
    return 'user is is :' . $id . 'collage: '.   $UID ; 
});

Route::view('welcome' . 'admin.welcomeAdmin' , [ 'age'=> '35' ,'name'=>'Mohammed']);

Route::redirect('google' , 'https://www.google.com');

Route::redirect('oldlogin' , 'login');
//Route::redirect('oldlogin' , 'login' , 301);


Route::get('login' , 'App\Http\controllers\controller@login');

Route::get('myname' , function(){
    return 'My name is Mohammed';

});

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('MM' , function (){
    return redirect()->route('home');
});

Route::middleware('auth')->group(function(){

      Route::get('userprofile' , function(){
          return 'user Profile';
      });

      Route::get('changePassword' , function(){
        return 'Change Password';
    });

    Route::get('layout' , function(){
        return 'layout';
    });
});
  //  Route::prefix('admin')->group(function(){
//});

Route::middleware('throttle:3,1')->group(function(){
    Route::get('layout' , function(){
        return 'layout';
    });
        
});


                 ////////////////////// Laravel Migrations &&&&  Laravel Model //////////////////

 





