<?php

use App\Http\Livewire\Admin\AdminAddServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminAddServiceComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminServiceComponent;
use App\Http\Livewire\Admin\AdminServicesByCategoryComponent;
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ServiceCategoriesComponent;
use App\Http\Livewire\ServicesByCategoryComponent;
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
Route::get('/service-categories', ServiceCategoriesComponent::class)->name('service.categories');
Route::get('/{category_slug}/service', ServicesByCategoryComponent::class)->name('home.service');


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
    Route::get('/admin/service-categories', AdminServiceCategoryComponent::class)->name('admin.service_categories');
    Route::get('/admin/service-categories/add', AdminAddServiceCategoryComponent::class)->name('admin.service_cat.add');
    Route::get('/admin/service-categories/edit/{category_id}', AdminEditServiceCategoryComponent::class)->name('admin.service_cat.edit');
    Route::get('admin/all-service',AdminServiceComponent::class)->name('admin.service');
    Route::get('/admin/{category_slug}/services', AdminServicesByCategoryComponent::class)->name('admin.services_by_cat');
    Route::get('/admin/service/add', AdminAddServiceComponent::class)->name('admin.service.add');
});
