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
    'as'   => 'onepager.welcome',
    'uses' => 'WelcomeController@show',
]);

Route::post('/subscribe', [
    'as'   => 'onepager.subscribe',
    'uses' => 'WelcomeController@subscribe',
]);

Route::get('/impressum', function () {
    return view('imprint');
});

Route::get('/faq', function(){
    return view('faq');
});

Route::get('/presse', function () {
    return view('press');
});

Route::get('/hartzhurts', function () {
    return view('hartzhurts');
});

Route::get('/stream', function () {
    return redirect('https://www.youtube.com/watch?v=gS65yoNcq88', 307);
});

Route::get('/live', function () {
    return redirect('https://www.youtube.com/watch?v=gS65yoNcq88', 307);
});

Route::group(['prefix' => 'api/v1' ], function(){

    Route::post('/subscribe', [
        'as'   => 'api.onepager.subscribe',
        'uses' => 'WelcomeController@subscribe',
    ]);

});


/*
 * Newsletter routes
 *
 */
Route::group(['middleware' => 'auth', 'prefix' => 'dashboard', 'namespace' => 'Dashboard'], function () {


    Route::get('/', function () {
        return redirect()->route('dashboard.newsletter.index');
    });

    Route::get('/export', function () {

        $newsletters = \App\Newsletter::get();

        $subscriber = new \Illuminate\Support\Collection();

        foreach ($newsletters as $newsletter) {
            $subscriber->push([
                'id'    => $newsletter->id,
                'email' => $newsletter->email,
            ]);
        }


        Excel::create('Newsletter_Subscriber', function ($excel) use ($subscriber) {

            $excel->sheet('Subscriber', function ($sheet) use ($subscriber) {

                $sheet->fromArray($subscriber, null, 'A1', false);
            });

        })->download('csv');

    });

    Route::get('/newsletter', [
        'as'   => 'dashboard.newsletter.index',
        'uses' => 'NewsletterController@index',
    ]);

});

/*
 * Authentication routes
 */
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['uses' => 'Auth\AuthController@postRegister']);
