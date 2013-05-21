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
    $postSlug = 'rodri';

	$tour = Tour::where('slug', '=', $postSlug)->where('wrh_id', '=', 1)->first();
    if (!is_null($tour)) {

        var_dump($tour->tourItem);

        foreach ($tour->tourItem as $item) {
            var_dump($item->texto);
        }
    }

});