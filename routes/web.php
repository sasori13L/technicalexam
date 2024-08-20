<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('thankyou', function () {
    return view('auth.thankyou');
})->middleware('auth');

Route::get('/', function () {
    return redirect()->route('contacts.index');
})->name('home')->middleware('auth');


Route::resource('contacts', Controllers\ContactsController::class)->middleware(['auth']);

Route::get('api/fetch', [Controllers\ContactsController::class, 'fetchContacts'])->name('contacts.fetch');
