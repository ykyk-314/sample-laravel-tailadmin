<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->as('admin.')->group(function () {
    Route::get('/', fn() => view('admin.index'))->name('index');

    Route::get('login', fn() => view('admin.signin'))->name('login');

    Route::get('signup', fn() => view('admin.signup'))->name('signup');

    Route::get('calendar', fn() => view('admin.calendar'))->name('calendar');

    Route::get('profile', fn() => view('admin.profile'))->name('profile');

    Route::get('settings', fn() => view('admin.settings'))->name('settings');

    Route::get('tables', fn() => view('admin.tables'))->name('tables');

    Route::get('chart', fn() => view('admin.chart'))->name('chart');

    Route::get('form-elements', fn() => view('admin.form-elements'))->name('form-elements');

    Route::get('form-layout', fn() => view('admin.form-layout'))->name('form-layout');

    Route::get(('alerts'), fn() => view('admin.alerts'))->name('alerts');

    Route::get('buttons', fn() => view('admin.buttons'))->name('buttons');
});

require __DIR__.'/auth.php';
