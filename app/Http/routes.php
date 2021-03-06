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

Route::get('/', 'PageController@index');
Route::get('/WhereIsTheChalet',['as'=>'WhereIsTheChalet', 'uses'=>'PageController@Where']);
Route::get('/DansVotreBaluchon',['as'=>'Baluchon', 'uses'=>'PageController@Baluchon']);
Route::resource('InvitationEntry','InvitationEntryController',
['only'=>['index','create','store']]
);