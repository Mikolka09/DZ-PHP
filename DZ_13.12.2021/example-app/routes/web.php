<?php

use App\Http\Controllers\UsersTableController;
use App\Models\User;
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

Route::get("/userstable",[UsersTableController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $users = new User();
    return view('dashboard');
})->middleware(['verified'])->name('dashboard');

require __DIR__.'/auth.php';
