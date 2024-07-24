<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Sprovider\SproviderDashboardComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class)->name('home');


//Pour les clients
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/client/dashboard', CustomerDashboardComponent::class)->name('customer.dashboard');
});

//Pour les Prestataires de services
Route::middleware(['auth:sanctum', 'verified', 'authsprovider'])->group(function () {
    Route::get('/service-provider/dashboard', SproviderDashboardComponent::class)->name('sprovider.dashboard');
});


//Pour les Admins
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});
