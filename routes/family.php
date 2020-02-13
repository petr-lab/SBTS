<?php

Route::group(['namespace' => 'Family'], function() {
    Route::get('/', 'HomeController@index')->name('family.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('family.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('family.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('family.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('family.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('family.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('family.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('family.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('family.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('family.verification.verify');

});