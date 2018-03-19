<?php

Route::group(['middleware' => 'web', 'prefix' => 'platform', 'namespace' => 'Modules\Platform\Http\Controllers'], function()
{
    Route::get('/', 'PlatformController@index');
});
