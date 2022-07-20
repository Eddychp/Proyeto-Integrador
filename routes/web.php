<?php

use App\Http\Livewire\Activity;
use App\Http\Livewire\Assistence;
use App\Http\Livewire\Associate as LivewireAssociate;
use App\Http\Livewire\Association;
use App\Http\Livewire\Debit;
use App\Http\Livewire\Payment;
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
    return view('welcome');
});
Route::get('associations',Association::class)->name('associations');
Route::get('activities',Activity::class)->name('activities');
Route::get('assistences',Assistence::class)->name('assistences');
Route::get('associates',LivewireAssociate::class)->name('associates');
Route::get('payments',Payment::class)->name('payments');
Route::get('debits',Debit::class)->name('debits');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
