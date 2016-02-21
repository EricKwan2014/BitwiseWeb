<?php
$api = app('Dingo\Api\Routing\Router');

// Version 1 of our API
$api->version('v1', function ($api) {

	// Set our namespace for the underlying routes
	$api->group(['namespace' => 'Api\Controllers', 'middleware' => 'cors'], function ($api) {

		$api->get('elderly/getlist', 'ElderlyController@index');
		$api->post('elderly/addData', 'ElderlyController@store');
		$api->get('elderly/{id}', 'ElderlyController@show');

		$api->get('report/getlist', 'ReportController@index');
		$api->post('report/addData', 'ReportController@store');
		$api->get('report/{id}', 'ReportController@show');
		
	});

});