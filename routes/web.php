<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserrController;
use App\Http\Controllers\ClientController;





use App\Models\Userr;
use app\Models\Client;

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

// Route::get('/', function () {
//     return view('users');
// });

//Route::post('user/store', [UserrController::class, 'store'])->name('users.store');

// Route::get('/clients', function () {
//     return view('clients');
// });




Route::get('users',[UserrController::class,'index'])->name('users.index');
Route::get('users/create',[UserrController::class,'create']);
Route::post('users/store', [UserrController::class, 'store'])->name('users.store');
Route::get('users/edit/{id}', [UserrController::class, 'edit'])->name('users.edit');
Route::post('users/update/{id}', [UserrController::class, 'update'])->name('user.update');
Route::get('users/destory/{userid}', [UserrController::class, 'destroy'])->name('users.destory');

Route::get('clients',[ClientController::class,'index'])->name('client.index');
Route::get('clients/create',[ClientController::class,'create'])->name('client.create');
Route::post('clients/store',[ClientController::class,'store'])->name('client.store');
Route::get('clients/edit/{id}', [ClientController::class, 'edit'])->name('clients.edit');



Route::get('/users_roles', function () {
    return view('users_roles');
});
Route::get('/search', function () {
    return view('search');
});


