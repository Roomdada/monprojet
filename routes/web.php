<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactCreated;
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

Route::get('/',
    [
    	'as'=>'path_home',
    	'uses'=>'PageController@home'
    ]
);



Route::get('/about',
    [
    	'as'=>'path_about',
    	'uses'=>'PageController@about'
    ]
);

Route::get('/contact',
    [
    	'as'=>'path_contact',
    	'uses'=>'ContactController@create'
    ]
);

Route::post('/contact',
    [
    	'as'=>'post_path_contact',
    	'uses'=>'ContactController@store'
    ]
);


Route::get('/test-email',function()
{
	return new ContactCreated('Room','dsieroger@gmail','je suis fier de moi.');
}
);

