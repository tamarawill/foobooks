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

Route::get('/', function()
{
	return View::make('home');
});


Route::get('/visit', function()
{
	return 'We are open 24 hours a day, 7 days a week! Our phone number is 617-555-1212';
});

Route::get('/pastries', function()
{
	return 'We have a large selection of delicious pastries.';
});

Route::get('/pastries/{category}', function($category) {
        return 'Here are all the pastries in the category of '.$category.'.';
}); 

Route::get('/beverages/coffee', function()
{
	return 'Our coffee is all fair trade, and generally awesome.';
});

Route::get('/beverages/tea', function()
{
	return 'Our teas are estate grown, and super fabulous.';
});

Route::get('/talktous', function() {

    $view  = '<form method="POST">';
    $view .= 'What\'s on your mind? <input type="text" name="whatsup">';
    $view .= '<input type="submit">';
    $view .= '</form>';
    return $view;

});
Route::post('/talktous', function() {

    $input =  Input::all();
    print_r($input);

});

Route::get('mysql-test', function() {

    # Print environment
    echo 'Environment: '.App::environment().'<br>';

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    echo print_r($results);

});

Route::get('/get-environment',function() {

    echo "Environment: ".App::environment();

});

Route::get('/trigger-error',function() {

    # Class Foobar should not exist, so this should create an error
    $foo = new Foobar;

});