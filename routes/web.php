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

Route::get('/', function () {

    $data=[

        "name"=>'Simone',
        "surname"=>'Severini',
        "links"=>[
           [
            "linkName"=>'LinkedIn' ,
            "url"=>'https://linkedin.com/in/simone-severini-397634224',
           ],
           [
            "linkName"=>'GitHub' ,
            "url"=>'https://github.com/SamSepiool',
           ],
           
        ]

    ];


    return view('home', $data);
});
