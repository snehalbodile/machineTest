<?php

use app\Users;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('welcome');
});

// Display 

// Route::get('/users', function () {
//     echo "mksdmldsm";die;
//     return view('users');
// });

// Route::get('/user', 'UserController@showProfile');
