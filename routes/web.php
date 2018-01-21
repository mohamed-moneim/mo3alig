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



Route::group(['prefix' => '/admin'], function () {


    Route::get('/', function () { return view('admin.index'); });

    Route::resource('patients', 'PatientController');

    Route::resource('doctors', 'DoctorController');
    Route::post('visit-order/{id}','VisitOrderController@index');
    Route::get('visits','VisitController@index');

    Route::get('doctors/approve/{id}','DoctorController@approve')->name('doctors.approve');
    Route::get('doctors/show/{id}','DoctorController@show')->name('doctors.show');


    Route::get('visit-order/{id}','VisitOrderController@index')->name('visit_order.show');

    Route::get('visits-report', 'VisitController@report');

});
