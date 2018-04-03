<?php
use App\Models\SinhVien;
use App\Models\khoahoc;
use App\Models\lophoc;
use App\Models\giangvien;
Route::group(['middleware' => ['web']], function () {

// Home
	Route::get('/', [
		'uses' => 'HomeController@index', 
		'as' => 'home'
	]);
	// Admin
	Route::get('admin', [
		'uses' => 'AdminController@admin',
		'as' => 'admin',
		'middleware' => 'admin'
	]);

	Route::get('medias', [
		'uses' => 'AdminController@filemanager',
		'as' => 'medias',
		'middleware' => 'redac'
	]);
// User
	Route::get('user/sort/{role}', 'UserController@indexSort');
	
	Route::get('user/roles', 'UserController@getRoles');
	Route::post('user/roles', 'UserController@postRoles');

	Route::put('userseen/{user}', 'UserController@updateSeen');
// Authentication routes...
	Route::resource('user', 'UserController');
	Route::get('auth/login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', 'Auth\AuthController@getLogout');
	Route::get('auth/confirm/{token}', 'Auth\AuthController@getConfirm');
	Route::group(['middleware' => ['admin']], function () {
		Route::post("/themgiangvien", 'AdminController@postAddGiangVien');
		Route::post('themsinhvienajax', 'AdminController@ThemSinhVienAjax');
		Route::post('/listgiangvien/deletegiangvien', 'AdminController@DeleteGiangVien');
		Route::get('/listgiangvien', 'AdminController@GetGiangVien');
		//end manager giang vien
		Route::get('/listsinhvien', 'AdminController@AllSinhVien');
		
	
	
		//api 
		
		
		//api
		//end manager sinh vien theo 3 loai
		
		Route::get('listlopmonhoc', 'AdminController@ViewLopMonHoc');
	//end manager lop hoc
	});
	
	Route::get(
		'/listsinhvientheolophoc/{idlophoc}',
		['uses' => 'AdminController@AllSinhVienTheoLop']
	);
	Route::get('/listsinhvientheokhoa/{idkhoa}', 'AdminController@AllSinhVienTheoKhoa');
	Route::get('/listlophoc', 'AdminController@LayToanBoLopHoc');
	Route::get('listkhoahoc', 'AdminController@AllKhoaHoc');

	//end middlware admin access
	
	Route::get('listlopmonhocviewgiangvien','GiangVienController@viewListLopMonHoc');
	Route::get('test',"GiangVienController@test");

	//ajax giang viên đăng ký môn học
	Route::post('/ajaxgiangviendangkylopmonhoc', 'GiangVienController@GiangVienDangKyLopMonHoc');
	Route::get('/ajaxlistlopsinhvien/{idlopmonhoc}', "GiangVienController@GetSinhVienAjax");




	Route::get('routes', function () {
		\Artisan::call('route:list');
		return '<pre>' . \Artisan::output() . '</pre>';
	});
	Route::get('bcrypt', function () {
		return bcrypt('admin');
	});
	Route::get('test',function(){
		return giangvien::where('IdGiangVien', 3)->get(['TenGiangVien'])->first()->TenGiangVien;
		
	});
});