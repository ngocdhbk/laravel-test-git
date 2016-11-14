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
    return view('welcome');
});

Route::get('/test', function () {
    return "Hello world";
});

Route::get('/test2/{ten}', function ($ten) {
    return $ten;
});

#Truyen tham so tren route
Route::get('/hoten/{ten}', function($ten) {
 return 'Họ Tên Bạn Là '.$ten;
});

#Truyen tham so mac dinh, phong truong hop thieu tham so
Route::get('/monan/{monan?}', function($monan = 'Gà KFC') {
 return $monan;
});

#Them dieu kien cho tham so
Route::get('/thongtin/{tuoi}/{ten}', function($tuoi, $ten) {
 return "Chào Bạn $ten có $tuoi tuổi";
}) ->where(['tuoi' => '[0-9]+', 'ten' => '[a-z]+']);


#Demo truyen tham so cho View
Route::get('/thong-tin',function () {
	$hoten = 'Tran Nguyen Ngoc';
	$view = "Admin";
	return view('ngocwelcome' ,compact('hoten', 'view'));
});

Route::get('/testController','Welcome@testAction');

Route::get('/testController2','Welcome@testAction2');

#Vi du ve alias
Route::get('/quoc-te',['as'=>'qt' ,function () {
	return 'Đây là trang tin quốc tế';
}]);

#Vi du ve group route
Route::group(['prefix' => '/quan-ly'],function () {
	Route::get('tin-tuc',function () {
		echo "Đây là trang quản lý tin tức";
	});
	Route::get('thanh-vien',function () {
		echo "Đây là trang quan lý thành viên";
	});
});

#----------------------------Vi du ve View--------------------------------------

#Vi du ve phan cap thu muc View (tintuc la thu muc)
#Luu y: khong dat ten thu muc co dau . (dot)
Route:: get('/them-tin-tuc',function () {
	return view('tintuc.themtintuc' );
});

#Vi du ve View Share nhung nen de trong app/Providers/AppServiceProvider, trong ham boot
View::share('title', 'Lap trinh Laravel 5.x');
View:: share('dongvat' ,['heo','vit','gà','ngỗng']);

#Vi du ve View Composer, nhung nen de trong 1 ham boot cua 1 file Service Provider trong app/Providers
View::composer('khoapham1', function($view) {
 	$view->with('giangvien','Mr Nguyen Ngoc Tran');
});
#Hoac gan View composer voi nhieu View
View:: composer([ 'khoapham2' ,'khoapham3'], function($abc) {
	$abc->with('giangvien','Mr Thanh Yen Vu');
});

#View composer co the dat trong 1 file Service Providers, tu tao
#Nho them Service Providers trong config/app.php
#View::composer('profile', 'App\Http\ViewComposers\ProfileComposer');
