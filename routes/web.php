<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
use App\Http\Controllers\Sms;
use App\Http\Controllers\Emails_control;
use App\Http\Controllers\Account;



Route::get('/', [Main::class, 'index']);
Route::get('/terms-of-use', [Main::class, 'tos']);
Route::get('/privacy-policy', [Main::class, 'pp']);

Route::get('/form', [Main::class, 'form']);
Route::get('/admin-login', [Main::class, 'login']);
Route::get('/dashboard', [Main::class, 'dashboard']);
Route::Post('/post-login', [Account::class, 'post_login']);

Route::Post('/send-sms', [Sms::class, 'index']);
Route::post('/sms-response', [Sms::class, 'response']);
Route::Post('/post-sms-group', [Sms::class, 'add_group']);
Route::Post('/post-email-group', [Emails_control::class, 'add_email_group']);
Route::Post('/post-email', [Emails_control::class, 'add_email']);
Route::Post('/post-number', [Sms::class, 'add_phone']);
Route::Post('/shoot-email', [Emails_control::class, 'sending_email']);
Route::Post('/bulk-number', [Sms::class, 'bulk_number']);
Route::Post('/bulk-email', [Emails_control::class, 'bulk_email']);
Route::get('/delete/email_group/{id}', [Emails_control::class, 'delete']);
Route::get('/delete/phone_group/{id}', [Sms::class, 'delete']);
Route::get('/delete/phone/{id}', [Sms::class, 'single_delete']);
Route::get('/delete/email/{id}', [Emails_control::class, 'single_delete']);
Route::Post('/single-phone', [Sms::class, 'single_phone']);


Route::get('/logout', function () {
    Session::flush();
    return redirect('/admin-login');
});

Route::get('/approved', [Emails_control::class, 'approved'])->name('approved');
Route::get('/noapproval', [Emails_control::class, 'noapproval'])->name('noapproval');
