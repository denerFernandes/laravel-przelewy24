<?php

Route::group([
    'prefix' => 'p24',
    'namespace' => 'NetborgTeam\P24\Controllers',
    'middleware' => ['web']
], function () {
    Route::get('/status', 'P24ListenerController@getTransactionStatus')->name('getTransactionStatusListener');
    Route::get('/return/{transaction_id?}', 'P24ListenerController@getReturn')->name('getTransactionReturn');
});
