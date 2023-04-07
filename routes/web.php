<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/',  'HomeController@index')->name('/');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact', 'HomeController@store')->name('contact');
Route::get('/service/{id?}', 'ServiceController@index')->name('service');
Route::get('/vendorservice/{id?}', 'UserVendorController@index')->name('vendorservice');
Route::get('/dobooking/{id?}', 'BookingController@create')->name('dobooking');
Route::post('/booking', 'BookingController@store')->name('booking');
Route::get('/mybooking', 'BookingController@index')->name('mybooking');
Route::get('/mybooking', 'BookingController@index')->name('mybooking');
Route::get('/myfeedback', 'FeedbackController@index')->name('myfeedback');
Route::get('/feedback', 'FeedbackController@create')->name('feedback');
Route::post('/feedback', 'FeedbackController@store')->name('feedback');
Route::get('/update', 'UserController@edit')->name('update');
Route::patch('/update/{id?}', 'UserController@update')->name('update');
//----------------------------------Admin Routes---------------------------------------//
Route::get('admin','AdminController@index')->name('admin');
Route::get('admin/login','AdminController@login')->name('admin/login');
Route::post('admin/login','AdminController@authenticate')->name('admin/login');
Route::get('admin/logout','AdminController@logout')->name('admin/logout');
                //----Category Route----//
Route::get('admin/addcategory','AdminCategoryController@create')->name('admin/addcategory');
Route::post('admin/addcategory','AdminCategoryController@store')->name('admin/addcategory');
Route::get('admin/viewcategory','AdminCategoryController@index')->name('admin/viewcategory');
Route::get('admin/editcategory/{id?}','AdminCategoryController@edit')->name('admin/editcategory');
Route::patch('admin/editcategory/{id?}','AdminCategoryController@update')->name('admin/editcategory');
Route::get('admin/deletecategory/{id?}','AdminCategoryController@destroy')->name('admin/deletecategory');
                //----Service Route----//
Route::get('admin/addservice','AdminServiceController@create')->name('admin/addservice');
Route::post('admin/addservice','AdminServiceController@store')->name('admin/addservice');
Route::get('admin/viewservice','AdminServiceController@index')->name('admin/viewservice');
Route::get('admin/editservice/{id?}','AdminServiceController@edit')->name('admin/editservice');
Route::patch('admin/editservice/{id?}','AdminServiceController@update')->name('admin/editservice');
Route::get('admin/deleteservice/{id?}','AdminServiceController@destroy')->name('admin/deleteservice');
                //----Vendor Route----//
Route::get('admin/addvendor','AdminVendorController@create')->name('admin/addvendor');
Route::post('admin/addvendor','AdminVendorController@store')->name('admin/addvendor');
Route::get('admin/viewvendor','AdminVendorController@index')->name('admin/viewvendor');
Route::get('admin/registervendor','AdminVendorController@register')->name('admin/registervendor');
Route::get('admin/checkvendor/{id?}','AdminVendorController@editvendor')->name('admin/checkvendor');
Route::patch('admin/checkvendor/{id?}','AdminVendorController@checkvendor')->name('admin/checkvendor');
Route::get('admin/editvendor/{id?}','AdminVendorController@edit')->name('admin/editvendor');
Route::patch('admin/editvendor/{id?}','AdminVendorController@update')->name('admin/editvendor');
Route::get('admin/deletevendor/{id?}','AdminVendorController@destroy')->name('admin/deletevendor');
                //----User Route----//
Route::get('admin/viewuser','AdminUserController@index')->name('admin/viewuser');
                //----Admin Orders Route----//
Route::get('admin/allbooking','AdminBookingController@index')->name('admin/allbooking');
Route::get('admin/pendingbooking','AdminBookingController@pending')->name('admin/pendingbooking');
Route::get('admin/completedbooking','AdminBookingController@completed')->name('admin/completedbooking');
Route::get('admin/acceptedbooking','AdminBookingController@accepted')->name('admin/acceptedbooking');
Route::get('admin/cancelledbooking','AdminBookingController@cancelled')->name('admin/cancelledbooking');
                //----Admin Feedback Route----//
Route::get('admin/viewfeedback','AdminFeedbackController@index')->name('admin/viewfeedback');
                //----Admin Contact Route----//
Route::get('admin/viewcontact','AdminContactController@index')->name('admin/viewcontact');
//--------------------------------Vendor Routes-----------------------------------------//
Route::get('vendor','VendorController@index')->name('vendor');
Route::get('vendor/login','VendorController@login')->name('vendor/login');
Route::post('vendor/login','VendorController@authenticate')->name('vendor/login');
Route::get('vendor/logout','VendorController@logout')->name('vendor/logout');
Route::get('vendor/update','VendorController@edit')->name('vendor/update');
Route::patch('vendor/update/{id?}','VendorController@update')->name('vendor/update');
                //----Vendor Service Route----//
Route::get('vendor/addvservice','VendorServiceController@create')->name('vendor/addvservice');
Route::post('vendor/addvservice','VendorServiceController@store')->name('vendor/addvservice');
Route::get('vendor/viewvservice','VendorServiceController@index')->name('vendor/viewvservice');
Route::get('vendor/editvservice/{id?}','VendorServiceController@edit')->name('vendor/editvservice');
Route::patch('vendor/editvservice/{id?}','VendorServiceController@update')->name('vendor/editvservice');
Route::get('vendor/deletevservice/{id?}','VendorServiceController@destroy')->name('vendor/deletevservice');
                //----Vendor Orders Route----//
Route::get('vendor/allbooking','VendorBookingController@index')->name('vendor/allbooking');
Route::get('vendor/pendingbooking','VendorBookingController@pending')->name('vendor/pendingbooking');
Route::get('vendor/editpending/{id?}','VendorBookingController@edit')->name('vendor/editpending');
Route::patch('vendor/editpending/{id?}','VendorBookingController@update')->name('vendor/editpending');
Route::get('vendor/completedbooking','VendorBookingController@completed')->name('vendor/completedbooking');
Route::get('vendor/acceptedbooking','VendorBookingController@accepted')->name('vendor/acceptedbooking');
Route::get('vendor/editaccepted/{id?}','VendorBookingController@editaccepted')->name('vendor/editaccepted');
Route::patch('vendor/editaccepted/{id?}','VendorBookingController@updateaccepted')->name('vendor/editaccepted');
//-------------------------------Ajax Routes-------------------------------------//
Route::post('vendor/getservice','AjaxController@getservice')->name('vendor/getservice');

