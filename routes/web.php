<?php

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
    return view('inicio');
})->name('inicio');

Route::get('Catalogo-Colchones', function () {
    return view('colchones');
})->name('colchones');

Route::get('Catalogo-Muebles_Medida', function () {
    return view('muebles');
})->name('muebles');

Route::get('Como-llegar', function () {
    return view('ubicacion');
})->name('ubicacion');

Route::get('Contactanos', function () {
    return view('contacto');
})->name('contacto');

Route::get('Catalago-Variedad', function () {
    return view('mas');
})->name('mas');

Route::post('messages', function(){

	//enviar un correo
	$data = request()->all();
	
	Mail::send("emails.message" , $data,function($message) use ($data) {
		$message->from($data['correo'], $data['nombre'])
				->to('gvelizzuniga@gmail.com','gabo')
				->subject('Correo desde sitio web');
	});
	//responder al usuario
	return back()->with('flash', $data['nombre'] . ', tu mensaje ha sido recibido');

})->name('messages');

