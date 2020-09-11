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

Route::get('/home', 'User@home')->middleware('cekLogin');


Route::get('/gallery', 'VideoController@gallery')->middleware('cekLogin');


Route::get('/logout', 'User@logout');
Route::get('/', function(){
    return view('templates.login');
});
Route::get('/agama', 'VideoController@agama');
//Route::get('/agama/cari', 'VideoController@agama');
Route::get('/antropologi', 'VideoController@antropologi');


Route::get('/profile', function(){
   return view('templates.profile');
});


Route::get('/edit','User@showData')->middleware('cekLogin');

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

Route::get('/destroyAll','User@destroyAll');

Route::get('/searchAdmin','UploadVideoController@searchAdmin');
//Route::get('/profile', 'User@show_profile');

Route::get('/foto','User@uploads_pic');

//Route::get('/editpass','NomorIndukController@updatePass');
Route::get('/tambahUser', function(){
   return view('admin.tambah');
});
Route::put('/tambah','NomorIndukController@store')->middleware('cekLogin');

// Route::put('/foto/upload/','User@update_avatar');
//Route::put('/foto/upload/{id}', 'User@update_avatar');

Auth::routes();

Route::resource('usrctrl', 'User');
Route::resource('videoctrl', 'UploadVideoController');
Route::resource('videoajactrl', 'VideoController');
Route::resource('noindukctrl', 'NomorIndukController');
Route::resource('komentarctrl','KomentarController');
Route::resource('mapelctrl','MataPelajaranController');

Route::put('/inputmapel','MataPelajaranController@store')->middleware('cekLogin');

Route::get('/tontonvideo/{id}','VideoController@tontonvideo');

Route::get('/loginUser', 'User@loginUser');
Route::post('/loginUserPost', 'User@loginUserPost')->name('login');
//Route::get('/defaultUser', function(){
  //  return view('templates.default');
//});

Route::get('/defaultUser', 'User@index')->middleware('cekLogin');
Route::get('/loginAdmin', 'User@loginAdmin');
Route::post('/loginAdminPost', 'User@loginAdminPost');

Route::get('/defaultadmin', 'MataPelajaranController@index')->middleware('cekLogin');

Route::get('/formupload', 'MataPelajaranController@showmapel')->middleware('cekLogin');

Route::get('/mapeladmin/{namamatapelajaran}', 'MataPelajaranController@showAdmin')->middleware('cekLogin');

Route::get('/tontonAdmin/{id}', 'VideoController@showAdmin')->middleware('cekLogin');

Route::get('/addcourse', function(){
   return view('admin.addcourse');
});
Route::get('/uploadadmin', function(){
   return view('admin.uploadAdmin');
});
Route::get('/galleryadmin', function(){
   return view('admin.galleryAdmin');
});
Route::get('/profileadmin', function(){
   return view('admin.profileAdmin');
});
Route::get('/tontonvideoadmin', function(){
   return view('admin.tontonvideoAdmin');
});

Route::get('/import', 'User@import_view')->middleware('cekLogin');
Route::post('/import_excel', 'User@import_excel');
Route::get('/logout', 'User@logout');
//Route::get('/home', 'User@index');

//Route::get('video','VideoController@index');

Route::get('/upload','UploadVideoController@upload_vid');
Route::put('/upload/proses','UploadVideoController@proses');

//Route::get('/editpassuser','NomorIndukController@updateUser');
Route::put('/updateUser/{id}','User@passUser');
//Route::put('/komentar/simpanKomentar','KomentarController@simpanKomentar');
Route::post('/simpanKomentar/{id}', 'KomentarController@simpanKomentar');
//Route::post('/user/updatepass','User@updatePass');
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

Route::get('/reply/like/{id}', 'VideoController@like');

//Route::get('/editpass','User@updatePass');