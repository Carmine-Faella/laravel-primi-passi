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

    $data = [
        'welcome'=>'Hello World',
        'list'=>[
            'HTML',
            'CSS',
            'JavaScript',
            'Vue',
            'PHP'
        ]
    ];

    return view('Home', $data);
})->name('Home');

Route::get('Other', function () {

    $data = [
        'hello'=>'Ciao Sono laltra pagina'
    ];

    return view('Other', $data);
})->name('Other');
