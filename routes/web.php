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
use App\User;
use App\Photo;
use App\Product;
use App\Staff;

Route::get('/', function () {
    return view('welcome');//welcome.blade.php
});

Route::get('/test',function(){
    return view('test');
});

Route::get('/t',function(){
    return 'Testing route';
});


Route::get('/user/{name}/{age}',function($name,$age){
    return $name.$age;
})->name('user.detail');



Route::resource('/user','TestController');//== 8 route

























Route::get('/create', function () {
	$staff = Staff::find(1);
	$staff->photos()->create(["path"=>"staff1.jpg"]);
	$staff->photos()->create(["path"=>"staff1_another.jpg"]);

	$staff = Staff::find(2);
	$staff->photos()->create(["path"=>"staff2.jpg"]);
	
	$product = Product::find(1);
	$product->photos()->create(["path"=>"product1.jpg"]);

	
	echo " Inserted Succssfully";

});

Route::get('/read', function () {
	$staff = Staff::find(1);

	foreach($staff->photos as $photo){
		echo $photo->path . "<br>";
	}
});






Route::get('/show/view/{name}','TestController@index')->name('show.view');
