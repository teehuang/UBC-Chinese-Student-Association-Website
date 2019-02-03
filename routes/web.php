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

//front end

Route::get('/', function(){
	
	$carousels = DB::table('index_cars')->get();

	return view('frontend/index', ['index_cars', $carousels]);
});

Route::get('/about', function(){
	return view('frontend/about');
});

Route::get('/executives', function(){
	return view('frontend/executives');
});

Route::get('/member', function(){
	return view('frontend/member');
});
Route::get('/contact', function(){
	return view('frontend/contact');
});
Route::get('/hiring', function(){
	return view('frontend/hiring');
});
Route::get('/partners', function(){
	return view('frontend/partners');
});
Route::get('/pastevents', function(){
	return view('frontend/pastEvents');
});



//backend

Route::get('/be-admin', 'CreatesController@home')->middleware('auth');


Route::get('/create', function(){
	return view('backend/create');
});

Route::post('/insert', 'CreatesController@add');
Route::get('/update/{id}', 'CreatesController@update');
Route::post('/edit/{id}', 'CreatesController@edit');
Route::get('/read/{id}', 'CreatesController@read');
Route::get('/delete/{id}', 'CreatesController@delete');

Route::get('file', 'CreatesController@upload')->name('upload.file')->middleware('auth');
Route::post('file', 'CreatesController@store')->middleware('auth');

//Upcoming events carousel
Route::get('/be-admin/upcomingevents', function(){
	return view('backend/indexCarousel');
})->name('indexCarousel.image');

Route::post('/be-admin/upcomingevents', 'CreatesController@indexCarousel');

Auth::routes();




