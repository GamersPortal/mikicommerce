<?php

/**
 * Frontend Access Controllers.
 */
Route::group(['namespace' => 'Auth'], function () {
    /*
     * These routes require the user to be logged in
     */
    Route::group(['middleware' => 'auth'], function () {
        Route::get('auth/logout', 'AuthController@getLogout');
        Route::get('auth/password/change', 'PasswordController@getChangePassword');
        Route::post('auth/password/change', 'PasswordController@postChangePassword')->name('password.change');
    });

    /*
     * These routes require the user NOT be logged in
     */
    Route::group(['middleware' => 'guest'], function () {
        Route::get('auth/login/{provider}', 'AuthController@loginThirdParty')->name('auth.provider');

        Route::get('account/confirm/{token}', 'AuthController@confirmAccount')->name('account.confirm');
        Route::get('account/confirm/resend/{user_id}', 'AuthController@resendConfirmationEmail')->name('account.confirm.resend');

// Authentication routes...
        Route::get( 'auth/login',               ['as' => 'login',                   'uses' => 'AuthController@getLogin']);
        Route::post('auth/login',               ['as' => 'loginPost',               'uses' => 'AuthController@postLogin']);
        Route::get( 'auth/logout',              ['as' => 'logout',                  'uses' => 'AuthController@getLogout']);
// Registration routes...
        Route::get( 'auth/register',            ['as' => 'register',                'uses' => 'AuthController@getRegister']);
        Route::post('auth/register',            ['as' => 'registerPost',            'uses' => 'AuthController@postRegister']);


        //Route::controller('auth', 'AuthController');
        //Route::controller('password', 'PasswordController');
    });
});
