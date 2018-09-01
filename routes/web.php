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

/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'administrator'], function () {
    Voyager::routes();
});

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
*/
// Trang Chủ
Route::get('/', function () {
    return view('theme-default.pages.home');
})->name('frontend.pages.home');

// Giới Thiệu
Route::get('/gioi-thieu.html', function (){
    return view('theme-default.pages.about');
})->name('frontend.pages.about');

// Bán BĐS
Route::get('/ban-bat-dong-san.html', function (){
    return view('theme-default.pages.land-buy');
})->name('frontend.pages.land-buy');

// Cho Thuê BĐS
Route::get('/cho-thue-bat-dong-san.html', function (){
    return view('theme-default.pages.land-rent');
})->name('frontend.pages.land-rent');

// Chi Tiết BĐS
Route::get('/{slug}_{id}.html', 'FrontendController@landDetail')
    ->name('frontend.pages.land-detail');

// Liên Hệ
Route::get('/lien-he.html', function (){
    return view('theme-default.pages.contact');
})->name('frontend.pages.contact');

// Thiết kế nội thất
Route::get('/thiet-ke-noi-that.html', [
    'uses'  => 'FrontendController@thietKeNoiThat',
    'as'    => 'frontend.pages.thietKeNoiThat'
]);

// Thi công nội thất
Route::get('/thi-cong-noi-that.html', [
    'uses'  => 'FrontendController@thiCongNoiThat',
    'as'    => 'frontend.pages.thiCongNoiThat'
]);