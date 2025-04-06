<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;


//client
//Route::get('/', function () { return view('Client.index');})->name('inicio');
Route::get('/', [App\Http\Controllers\ClientController::class,'index'])->name('inicio');
Route::resource(('/products'),App\Http\Controllers\ProductController::class);


route::middleware(['auth'])->group(function(){
    Route::resource(('/services'),App\Http\Controllers\ServiceController::class);

//Route::get('/suppliers/{supplier}/destroy',[App\Http\Controllers\ProductController::class, 'destroy'])
//-> name('suppliers.destroy');

//Route::get('/suppliers/{supplier/delete',[App\Http\Controllers\ProductController::class, 'delete'])
//-> name('suppliers.delete');

});


//login
route::get('register',[App\Http\Controllers\Auth\RegisterController::class,'show'])->name('register');
route::post('register',[App\Http\Controllers\Auth\RegisterController::class,'handle'])->name('register.handle');

route::get('login',[App\Http\Controllers\Auth\LoginController::class,'show'])->name('login');
route::post('login',[App\Http\Controllers\Auth\LoginController::class,'handle'])->name('login.handle');

route::post('logout',[App\Http\Controllers\Auth\LogoutController::class,'handle'])->name('logout');


//admin

route::middleware(['auth'])->group(function(){
    Route::get('/admin', function () { return view('Admin.index');})->middleware('role:admin')->name('admin');


    Route::resource(('/suppliers'),App\Http\Controllers\SupplierController::class)->middleware('role:admin');


    Route::get('/suppliers/{supplier}/delete',[App\Http\Controllers\SupplierController::class, 'delete'])->middleware('role:admin')
    -> name('suppliers.delete');

    //COdigo ALAN DEL ADMIN

    Route::resource(('/inventario'),App\Http\Controllers\AdminInventarioController::class)->middleware('role:admin');
    Route::get('/inventario/{product}/delete',[App\Http\Controllers\AdminInventarioController::class, 'delete'])->middleware('role:admin')
    -> name('inventario.delete');


    Route::resource(('/servicios'),App\Http\Controllers\AdminReparacionesController::class)->middleware('role:admin');
    Route::get('/servicios/{servicio}/delete',[App\Http\Controllers\AdminReparacionesController::class, 'delete'])->middleware('role:admin')
    -> name('servicios.delete');


});







