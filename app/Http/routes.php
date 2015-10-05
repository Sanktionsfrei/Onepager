<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as' => 'onepager.welcome',
    'uses' => 'WelcomeController@show'
]);

Route::post('/subscribe', [
   'as' => 'onepager.subscribe',
   'uses' => 'WelcomeController@subscribe'
]);

Route::get('/impressum', function(){
   return view('imprint');
});
