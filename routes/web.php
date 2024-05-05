<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\FollowUpController;
use App\Http\Controllers\HomeController; //
use App\Http\Controllers\adminauth\AuthenticatedSessionController;



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
//Route::get('/vaccine', [VaccineController::class, 'index'])->name('Vaccine.index');
Route::namespace('Admin')->prefix('admin')->group(function () {
    Route::get('/child', [ChildController::class, 'index'])->name('child.index');
    Route::get('/parents', [ParentsController::class, 'index'])->name('parents.index');
    Route::get('/vaccine', [VaccineController::class, 'index'])->name('vaccine.index');

    Route::get('/child/create', [ChildController::class, 'create'])->name('Child.create');
    Route::post('/child', [ChildController::class, 'store'])->name('Child.store');
    Route::get('/{child}', [ChildController::class, 'show'])->name('child.show');
    Route::get('/child/{id}/edit', [ChildController::class, 'edit'])->name('child.edit');
    Route::put('/child/{id}', [ChildController::class, 'update'])->name('child.update');
    Route::delete('/child/{id}', [ChildController::class, 'destroy'])->name('child.destroy');

    Route::get('/vaccine/create', [VaccineController::class, 'create'])->name('vaccine.create');
    Route::post('/vaccine', [VaccineController::class, 'store'])->name('vaccine.store');
    Route::get('/{vaccine}', [VaccineController::class, 'show'])->name('vaccine.show');
    Route::get('/vaccine/{id}/edit', [VaccineController::class, 'edit'])->name('vaccine.edit');
    Route::put('/vaccine/{id}', [VaccineController::class, 'update'])->name('vaccine.update');
    Route::delete('/vaccine/{id}', [VaccineController::class, 'destroy'])->name('vaccine.destroy');

    Route::post('/parents/create', [ParentsController::class, 'create'])->name('parents.create');
    Route::post('/parents', [ParentsController::class, 'store'])->name('parents.store');
    Route::get('/{parents}', [ParentsController::class, 'show'])->name('parents.show');
    Route::get('/parents/{id}/edit', [ParentsController::class, 'edit'])->name('parents.edit');
    Route::put('/parents/{id}', [ParentsController::class, 'update'])->name('parents.update');
    Route::delete('/parents{id}', [ParentsController::class, 'destroy'])->name('parents.destroy');

    Route::get('/followUp', [FollowUpController::class, 'index'])->name('followUp.index');
    Route::get('/followUp/create', [FollowUpController::class, 'create'])->name('followUp.create');
    Route::post('/followUp', [FollowUpController::class, 'store'])->name('followUp.store');
    Route::get('/followUp/{followUp}', [FollowUpController::class, 'show'])->name('followUp.show');
    Route::get('/followUp/{followUp}/edit', [FollowUpController::class, 'edit'])->name('followUp.edit');
    Route::put('/followUp/{followUp}', 'FollowUpController@update')->name('followUp.update');
    Route::delete('/followUp/{followUp}', [FollowUpController::class, 'destroy'])->name('followUp.destroy');

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest:admin')
        ->name('admin.login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware('guest:admin');
});
//use App\Http\Controllers\ParentController;

Route::namespace('App\Http\Controllers\ParentsController')->group(function () {
    //Route::get('/parents', [ParentsController::class, 'index'])->name('parents.index');
    Route::get('/parents/create', [ParentsController::class, 'create'])->name('parents.create');
    //Route::post('/parents', [ParentsController::class, 'store'])->name('parents.store');
    Route::get('/parents/{id}/edit', [ParentsController::class, 'edit'])->name('parents.edit');
    Route::put('/parents/{id}', [ParentsController::class, 'update'])->name('parents.update');
    Route::delete('/parents/{id}', [ParentsController::class, 'destroy'])->name('parents.destroy');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::get('/admin/dashboard', function () {
    return view('admin.auth.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');
require __DIR__ . '/adminauth.php';
Route::get('/childinfo', function () {
    return view('vaccination.child_information');
})->name('child.information');
Route::get('/parentinfo', function () {
    return view('vaccination.parentsinfo');
})->name('parents.information');

