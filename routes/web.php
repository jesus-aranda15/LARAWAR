<?php
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
//-----------------Rutas de las vistas de shop y shop single-------------------
Route::get('/shop', [ComputerController::class, 'index']);//ruta shop
Route::get('/shop/{comp}', [ComputerController::class, 'show']);//ruta shop-single
//--------------------------------------------------------------------------------

// -----------------Rutas del carrito------------------------------------------------------
Route::post('/cart/{compId}/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::delete('/cart/{cartId}/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::put('/cart/{cartId}/update', [CartController::class, 'updateCart'])->name('cart.update');


//--------------------------------------------------------------------------------------------
Route::get('/', function () {
    return view('index');
});

// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/politica-privacidad', function () {
  return view('politica-privacidad');
});

Route::get('/terminos-servicio', function () {
  return view('terminos-servicio');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/mantenimiento', function () {
    return view('mantenimiento');
});

Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name ('register');
Route::view('/index', 'index')->name('index');

Route::post('/register',[SessionsController::class, 'register'])->name('validacion');
Route::post('/login',[SessionsController::class, 'login'])->name('Sesion iniciada');

//Route::get('/shop-single', function () {
  //  return view('shop-single');
//});

//Route::get('/shop', function () {
  //  return view('shop');
//});