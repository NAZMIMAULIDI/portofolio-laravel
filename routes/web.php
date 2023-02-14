<?php

use App\Models\Portofolio;
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

/**//*Route::get('/index', function () {
    return view('home',[
        "nama" => "NAZMI MAULIDI",
        "telp" => "08xxxx",
        "email" => "nazmiunbaja@gmail.com",
        "alamat" => "pandeglang"
    ]);
});*/

Route::get('/', function () {
    $portofolio =Portofolio::all();
    return view('index',[
    	"nama" => "NAZMI MAULIDI",
    	"telp" => "087772386495",
    	"email" => "nazmiunbaja@gmail.com",
    	"alamat" => "pandeglang",
    	"graduate" => "2023",
        "image" => "nazmip3ppp.jpg",
        "portofolio" => $portofolio 


    ]);
  });
