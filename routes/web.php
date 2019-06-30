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

Auth::routes();
Route::get('/admin', 'adminController@index')->name('admin');

Route::resource('/admin/addCategory', 'categoryController');

Route::get('/category', 'Categoryviewcontroller@index')->name('category');

Route::resource('/admin/addbikes','addBikescontroller');

Route::resource('/addBlog','BlogController');

Route::get('/blog','BlogController@index')->name('Blog');

Route::resource('/admin/adminDash','HomeController');

Route::get('/welcome', 'HomeController@index')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ViewBlog', 'blogController@viewblog')->name('ViewBlog');

Route::get('/Blog','HomeController@blog')->name('blog');

Route::get('/Bikes','bikeController@index')->name('Bikes');

Route::get('/home','HomeController@home')->name('home');


Route::get('/Aboutus','HomeController@about')->name('aboutus');

Route::get('/Services','HomeController@service')->name('service');

Route::post('/Login/custom','Logincustomcontroller@login')->name('Login.custom');

Route::get('/Logincustom','Logincustomcontroller@index')->name('Logincustom');

Route::resource('/profile','UserprofileController');

Route::resource('/admin/manageuser','Usermanagementcontroller');

Route::get('/welcome','HomeController@index')->name('welcome');

Route::resource('/Blog/Blogdetails','blogController');

Route::resource('/rent','rentController');

Route::resource('/transcation','transcationController');

Route::resource('/admin/addparts','productController');