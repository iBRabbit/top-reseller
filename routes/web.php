<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ItemController;    
use App\Models\Item;
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
    return view('home', [
        'title' => 'Home',
        'items' => Item::all()
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
});

Route::get('/brands', [BrandController::class, 'index']);
Route::get('/brands/{brand:id}', [BrandController::class, 'show']);
Route::get('/categories/{category:category_name}', [ItemController::class, 'showByCategory']);
Route::get('/item/{item:id}', [ItemController::class, 'show']);
