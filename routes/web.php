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

Route::get('/home', function () {
    return view('templates.default');
});

Route::get('/calendar', function () {
    return view('templates.calendar');
});

Route::get('/upload', function () {
    return view('templates.upload');
});

Route::get('/gallery', 'VideoController@gallery');

Route::get('/', function(){
    return view('templates.login');
});
Route::get('/agama', 'VideoController@agama');
//Route::get('/agama/cari', 'VideoController@agama');
Route::get('/antropologi', 'VideoController@antropologi');
Route::get('/indo', 'VideoController@indonesia');
Route::get('/inggris', 'VideoController@inggris');
Route::get('/bk', 'VideoController@bk');
Route::get('/biologi', 'VideoController@biologi');
Route::get('/ekonomi', 'VideoController@ekonomi');
Route::get('/fisika', 'VideoController@fisika');

Route::get('/geografi', function(){
    return view('templates.Matkul.geografi');
});
Route::get('/jerman', function(){
    return view('templates.Matkul.jerman');
});
Route::get('/kimia', function(){
    return view('templates.Matkul.kimia');
});
Route::get('/mandarin', function(){
    return view('templates.Matkul.mandarin');
});
Route::get('/matematika', function(){
    return view('templates.Matkul.matematika');
});
Route::get('/penjas', function(){
    return view('templates.Matkul.penjas');
});
Route::get('/pendidikannilai', function(){
    return view('templates.Matkul.pendidikannilai');
});
Route::get('/perancis', function(){
    return view('templates.Matkul.perancis');
});
Route::get('/pkn', function(){
    return view('templates.Matkul.pkn');
});
Route::get('/pkwu', function(){
    return view('templates.Matkul.pkwu');
});
Route::get('/sejarah', function(){
    return view('templates.Matkul.sejarah');
});
Route::get('/senirupa', function(){
    return view('templates.Matkul.senirupa');
});
Route::get('/sosiologi', function(){
    return view('templates.Matkul.sosiologi');
});

Route::get('/profile', function(){
   return view('templates.profile');
});


Route::get('/edit','User@showData');

Route::get('/defaultadmin', function(){
   return view('templates.defaultadmin');
});
Route::get('/testvideo', function(){
   return view('templates.mapel.testvideo');
});
Route::get('/tontonvideo', function(){
    return view('templates.tontonvideo');
 });
 
Route::get('/cari', function(){
    return view('templates.cari');
 });
Route::get('/search','UploadVideoController@search');

//Route::get('/profile', 'User@show_profile');

Route::get('/foto','User@uploads_pic');
// Route::put('/foto/upload/','User@update_avatar');
//Route::put('/foto/upload/{id}', 'User@update_avatar');

Auth::routes();

Route::resource('usrctrl', 'User');
Route::resource('videoctrl', 'UploadVideoController');
Route::resource('videoajactrl', 'VideoController');
Route::resource('noindukctrl', 'NomorIndukController');
Route::resource('komentarctrl','KomentarController');

Route::get('/tontonvideo/{id}','VideoController@tontonvideo');

Route::get('/login', 'User@login');
Route::post('/loginPost', 'User@loginPost')->name('login');
Route::get('/loginAdmin', 'User@loginAdmin');
Route::post('/loginAdminPost', 'User@loginAdminPost');

Route::get('/logout', 'User@logout');
//Route::get('/home', 'User@index');

//Route::get('video','VideoController@index');

Route::get('/upload','UploadVideoController@upload_vid');
Route::put('/upload/proses','UploadVideoController@proses');

//Route::put('/komentar/simpanKomentar','KomentarController@simpanKomentar');
Route::post('/simpanKomentar/{id}', 'KomentarController@simpanKomentar');
Route::post('/user/updatepass','User@updatePass');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register', 'User@Register');
Route::get('/registerguru', 'User@RegisterGuru');
Route::post('/registerPost', 'User@RegisterPost');
Route::post('/cekNIS', 'NomorIndukController@cekNIS');
Route::post('/cekNIP', 'NomorIndukController@cekNIP');

Route::get('/post/{id}/islikedbyme', 'VideoController@isLikedByMe');
Route::post('/post/like', 'VideoController@like');

//Route::post('/deleteUser', 'User@deleteUser');