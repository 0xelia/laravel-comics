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
        'products' => config('comics')
    ];
    return view('comics', $data);
})->name('comics');




Route::get('/comics/{id}', function($id){
    
    $comics = config('comics');

    $data = [
        'comic' => $comic = $comics[$id]
    ];

    if($id < count($comics)){
        return view('comics.show', $data);
    } else{
        return abort(404);
    }

})->name('comic_details');