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

Route::get('/', 'WelcomeController@index');

Route::get('/home', 'HomeController@index')->middleware(['role:admin']);

Route::group(['middleware'=>'auth'],function(){
		Route::resource('/Jabatan', 'JabatanController');
		Route::resource('/Golongan', 'GolonganController');
		Route::resource('/Kategori_Lembur', 'Kategori_LemburController');
		Route::resource('/Pegawai', 'PegawaiController');
		Route::resource('/Lembur_Pegawai', 'Lembur_PegawaiController');
		Route::resource('/Status', 'StatusController');
		Route::resource('/Jumlah', 'JumlahAnakController');
		Route::resource('/Tunjangan', 'TunjanganController');
		Route::resource('/Tunjangan_Pegawai', 'Tunjangan_PegawaiController');
		Route::resource('/Penggajian', 'PenggajianController');
		Route::get('/Gaji','GajiController@index');
		Route::get('/pdf', 'PDFController@pdf');

});
Route::get('/user',function (Request $request){
	return $request->user();
})->middleware('auth:api');

Route::post('auth/login', 'ApiController@login');
Auth::routes();
Route::get('/home', 'HomeController@index');


//api
Route::group(['middleware'=>'cors'],function(){
	Route::get('/listdata','ApiController@listdata');
});

Route::group(['middleware'=>'cors'],function(){
	Route::get('/listdata2','ApiController@listdata2');
});
