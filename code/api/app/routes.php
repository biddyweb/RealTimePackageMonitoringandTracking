<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


/*Routes to get configurations Data*/

Route::get('/configs', 'ConfigController@configurations');

Route::get('/alltrucks', 'ConfigController@listAllTrucks');

//returns all packages having in specified truck_id
Route::get('/packages/{truck_id}', 'ConfigController@listPackagesInTruckWithtruck_id'); 

Route::get('/latestEntry', 'ConfigController@latestEntry');


Route::get('truck/{truck_id}/package/{package_id}', 'ConfigController@configsPackageInTruck');

//returns all documents having package_id
Route::get('/package/{package_id}', 'ConfigController@packagesWithpackage_id'); 


/*Routes to get Temperature Data*/

Route::get('/temperature','TemperatureController@temperatureOf');

Route::get('/temperature/{truck_id}/{package_id}', 'TemperatureController@temperatureOfPackageInTruck');

Route::get('/temperature/{package_id}', 'TemperatureController@temperatureOfPackage');

Route::get('/temperatureLatestEntry', 'TemperatureController@latestEntry');

Route::get('temperatureEntry/{truck_id}/{package_id}/{timestamp}', 'TemperatureController@TemperatureAfterTimestamp');

/*Routes to get Humidity Data*/

Route::get('/humidity','HumidityController@humidityOf');

Route::get('/humidity/{truck_id}/{package_id}', 'HumidityController@humidityOfPackageInTruck');

Route::get('/humidity/{package_id}', 'HumidityController@humidityOfPackage');

Route::get('/humidityLatestEntry', 'HumidityController@latestEntry');

Route::get('/humidityEntry/{truck_id}/{package_id}/{timestamp}', 'HumidityController@HumidityAfterTimestamp');

/*Routes to get Vibration Data*/

Route::get('/vibration', 'VibrationController@vibration');

Route::get('/vibration/{truck_id}/{package_id}', 'VibrationController@vibrationOfPackageInTruck');

Route::get('/vibrationgraph/{id}', 'VibrationController@vibrationgraphdata');

Route::get('/psd/{id}', 'PSDController@getPSDArray');

Route::get('/vibrationLatestEntry', 'VibrationController@latestEntry');

Route::get('/vibrationEntry/{truck_id}/{package_id}/{timestamp}', 'VibrationController@VibrationAfterTimestamp');




/*Routes to get Shock Data*/

Route::get('/shock', 'ShockController@shockData');

Route::get('/shock/{truck_id}/{package_id}', 'ShockController@shockData');

Route::get('/shockgraph/{id}', 'ShockController@shockGraphData');

Route::get('/shockLatestEntry', 'ShockController@latestEntry');


/*Routes to get Map Data*/



/*Routes to get Dashboards Data*/