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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//rhema stars route//
Route::get('/rhemastars', 'RhemastarsController@rhemastars')->name('rhemastars');
Route::post('/store_rhemastars', 'RhemastarsController@post_rhemastars')->name('store_rhemastars');
Route::get('/rhemastars_table', 'RhemastarsController@rhemastars_table')->name('rhemastars_table');

//testimonials route//
Route::get('/testimony', 'TestimonyController@testimony')->name('testimony');
Route::post('/create/testimony', 'TestimonyController@post_testimony')->name('create_testimony');
Route::get('/testimony_table', 'TestimonyController@testimony_table')->name('testimony_table');

//rhema routes//
Route::get('/rhema', 'RhemaController@rhema')->name('rhema');
//Route::post('/create/rhema', 'RhemaController@post_rhema')->name('create_rhema')->middleware('CheckAdmin');
Route::post('/create/rhema', 'RhemaController@post_rhema')->name('create_rhema');

//gallery routes//
Route::get('/gallery', 'GalleryController@gallery')->name('gallery');
Route::post('/create_gallery', 'GalleryController@post_gallery')->name('create_gallery');
Route::get('/gallery_table', 'GalleryController@gallery_table')->name('gallery_table');

//outreach routes//
Route::get('/outreach', 'OutreachController@outreach')->name('outreach');
Route::post('/create_outreach', 'OutreachController@post_outreach')->name('create_outreach');
Route::get('/outreach_table', 'OutreachController@outreach_table')->name('outreach_table');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
