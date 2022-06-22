<?php

use App\Events\WebsocketDemoEvent;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // broadcast(new WebsocketDemoEvent('test data'));
    return view('welcome');
});

Route::get('/chats', 'ChatsController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/chats', [App\Http\Controllers\ChatsController::class, 'index'])->name('chats');
Route::get('/messages', [App\Http\Controllers\ChatsController::class, 'fetchmessages'])->name('fetch.messages');
Route::post('/message', [App\Http\Controllers\ChatsController::class, 'sendMessage'])->name('send.message');

