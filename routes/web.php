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
})->name('welcome');

Route::get('/containerdetail/create','ContainerLineController@create')->name('containerdetail.create');
Route::post('/containerdetail/store','ContainerLineController@store')->name('containerdetail.store');
Route::get('/containerdetail/show','ContainerLineController@show')->name('containerdetail.show');
Route::get('/containerdetail/delete/{id}','ContainerLineController@destroy')->name('containerdetail.delete');
Route::post('/containerdetail/update/{id}','ContainerLineController@update')->name('containerdetail.update');
Route::get('/containerdetail/edit/{id}','ContainerLineController@edit')->name('containerdetail.edit');


Route::get('/charges/create','ChargesController@create')->name('charges.create');
Route::post('/charges/store','ChargesController@store')->name('charges.store');
Route::get('/charges/show','ChargesController@show')->name('charges.show');
Route::get('/charges/delete/{id}','ChargesController@destroy')->name('charges.delete');
Route::post('/charges/update/{id}','ChargesController@update')->name('charges.update');
Route::get('/charges/edit/{id}','ChargesController@edit')->name('charges.edit');

Route::get('/containertype/create','ContainerTypeController@create')->name('containertype.create');
Route::post('/containertype/store','ContainerTypeController@store')->name('containertype.store');
Route::get('/containertype/show','ContainerTypeController@show')->name('containertype.show');
Route::get('/containertype/delete/{id}','ContainerTypeController@destroy')->name('containertype.delete');
Route::post('/containertype/update/{id}','ContainerTypeController@update')->name('containertype.update');
Route::get('/containertype/edit/{id}','ContainerTypeController@edit')->name('containertype.edit');

Route::get('/port/create','PortController@create')->name('port.create');
Route::post('/port/store','PortController@store')->name('port.store');
Route::get('/port/show','PortController@show')->name('port.show');
Route::get('/port/delete/{id}','PortController@destroy')->name('port.delete');
Route::post('/port/update/{id}','PortController@update')->name('port.update');
Route::get('/port/edit/{id}','PortController@edit')->name('port.edit');
Route::get('/port/index/{id}','PortController@index')->name('port.index');
Route::get('/port/portchargestype','PortController@portchargestype')->name('port.portchargestype');
Route::post('/port/save','PortController@save')->name('port.save');

Route::get('/shipper/create','ShipperController@create')->name('shipper.create');
Route::post('/shipper/store','ShipperController@store')->name('shipper.store');
Route::get('/shipper/show','ShipperController@show')->name('shipper.show');
Route::get('/shipper/delete/{id}','ShipperController@destroy')->name('shipper.delete');
Route::post('/shipper/update/{id}','ShipperController@update')->name('shipper.update');
Route::get('/shipper/edit/{id}','ShipperController@edit')->name('shipper.edit');

Route::get('/forwarder/create','ForwarderController@create')->name('forwarder.create');
Route::post('/forwarder/store','ForwarderController@store')->name('forwarder.store');
Route::get('/forwarder/show','ForwarderController@show')->name('forwarder.show');
Route::get('/forwarder/delete/{id}','ForwarderController@destroy')->name('forwarder.delete');
Route::post('/forwarder/update/{id}','ForwarderController@update')->name('forwarder.update');
Route::get('/forwarder/edit/{id}','ForwarderController@edit')->name('forwarder.edit');

Route::get('/consignee/create','ConsigneeController@create')->name('consignee.create');
Route::post('/consignee/store','ConsigneeController@store')->name('consignee.store');
Route::get('/consignee/show','ConsigneeController@show')->name('consignee.show');
Route::get('/consignee/delete/{id}','ConsigneeController@destroy')->name('consignee.delete');
Route::post('/consignee/update/{id}','ConsigneeController@update')->name('consignee.update');
Route::get('/consignee/edit/{id}','ConsigneeController@edit')->name('consignee.edit');

Route::get('/container/create','ContainerController@create')->name('container.create');
Route::post('/container/store','ContainerController@store')->name('container.store');
Route::get('/container/show','ContainerController@show')->name('container.show');
Route::get('/container/delete/{id}','ContainerController@destroy')->name('container.delete');
Route::post('/container/update/{id}','ContainerController@update')->name('container.update');
Route::get('/container/edit/{id}','ContainerController@edit')->name('container.edit');

Route::get('/depot/create','DepotController@create')->name('depot.create');
Route::post('/depot/store','DepotController@store')->name('depot.store');
Route::get('/depot/show','DepotController@show')->name('depot.show');
Route::get('/depot/delete/{id}','DepotController@destroy')->name('depot.delete');
Route::post('/depot/update/{id}','DepotController@update')->name('depot.update');
Route::get('/depot/edit/{id}','DepotController@edit')->name('depot.edit');

Route::get('/vessel/create','VesselController@create')->name('vessel.create');
Route::post('/vessel/store','VesselController@store')->name('vessel.store');
Route::get('/vessel/show','VesselController@show')->name('vessel.show');
Route::get('/vessel/delete/{id}','VesselController@destroy')->name('vessel.delete');
Route::post('/vessel/update/{id}','VesselController@update')->name('vessel.update');
Route::get('/vessel/edit/{id}','VesselController@edit')->name('vessel.edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
