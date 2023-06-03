<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// route::get('/register', function(){
//     return view('register');
// });

route::get('/register', [RegisterController::class, 'index'])->name('register');
route::post('/register/actionregister', [RegisterController::class, 'actionregister'])->name('actionregister');

route::get('/production', [ProduksiController::class, 'index'])->name('production');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/prodcat', function () {
    return view('prodcat');
});
Route::get('/prodstock', function () {
    return view('prodstock');
});
Route::get('/inventory', function () {
    return view('inventory');
});
Route::get('/outlet', function () {
    return view('outlet');
});
Route::get('/material', function () {
    return view('material');
});
Route::get('/labor', function () {
    return view('labor');
});
Route::get('/prodcost', function () {
    return view('prodcost');
});
Route::get('/productionstock', function () {
    return view('productionstock');
});
Route::get('/employee', function () {
    return view('employee');
});
Route::get('/client', function () {
    return view('client');
});