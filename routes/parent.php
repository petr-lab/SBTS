<?php

Route::group(['namespace' => 'Parent'], function() {
    Route::get('/', 'HomeController@index')->name('parent.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('parent.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('parent.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('parent.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('parent.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('parent.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('parent.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('parent.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('parent.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('parent.verification.verify');

});