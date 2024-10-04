<?php

use App\Http\Controllers\SearchController;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\AdminAddServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminAddServiceComponent;
use App\Http\Livewire\Admin\AdminAddSliderComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminEditServiceComponent;
use App\Http\Livewire\Admin\AdminEditServiceProvidersComponent;
use App\Http\Livewire\Admin\AdminEditSliderComponent;
use App\Http\Livewire\Admin\AdminServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminServiceComponent;
use App\Http\Livewire\Admin\AdminServiceProvidersComponent;
use App\Http\Livewire\Admin\AdminServicesByCategoryComponent;
use App\Http\Livewire\Admin\AdminSliderComponent;
use App\Http\Livewire\CGUComponent;
use App\Http\Livewire\ChangeLocationComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use App\Http\Livewire\Customer\CustomerOrderdetailsComponent;
use App\Http\Livewire\Customer\CustomerOrdersComponent;
use App\Http\Livewire\Customer\CustomerReviewComponent;
use App\Http\Livewire\FaqComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PrivacyComponent;
use App\Http\Livewire\ReservationComponent;
use App\Http\Livewire\ServiceCategoriesComponent;
use App\Http\Livewire\ServiceDetailComponent;
use App\Http\Livewire\ServicesByCategoryComponent;
use App\Http\Livewire\Sprovider\EditSproviderProfileComponent;
use App\Http\Livewire\Sprovider\SproviderDashboardComponent;
use App\Http\Livewire\Sprovider\SproviderOrderComponent;
use App\Http\Livewire\Sprovider\SproviderOrderDetailsComponent;
use App\Http\Livewire\Sprovider\SproviderProfileComponent;
use App\Http\Livewire\SproviderComponent;
use App\Http\Livewire\ThankYouComponent;
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
Route::get('/thank-you', ThankYouComponent::class)->name('thankyou');
Route::get('/service-categories', ServiceCategoriesComponent::class)->name('service.categories');
Route::get('/{category_slug}/service', ServicesByCategoryComponent::class)->name('home.service');
Route::get('/service/{service_slug}', SproviderComponent::class)->name('home.service.sprovider');
Route::get('/service/{service_slug}/reservation', ReservationComponent::class)->name('home.reservation');
Route::get('service/{service_slug}/details', ServiceDetailComponent::class)->name('home.service.detail');



Route::get('/autocomplete', [SearchController::class, 'autoComplete'])->name('autocomplete');
Route::post('/search', [SearchController::class, 'search'])->name('search');


Route::get('/change-location', ChangeLocationComponent::class)->name('home.change.location');

Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/about', AboutComponent::class)->name('about');
Route::get('/cgu', CGUComponent::class)->name('cgu');
Route::get('/faq', FaqComponent::class)->name('faq');
Route::get('/privacy', PrivacyComponent::class)->name('privacy');


//Pour les clients
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/client-dashboard', CustomerDashboardComponent::class)->name('customer.dashboard');
    Route::get('/client/reservation', CustomerOrdersComponent::class)->name('customer.orders');
    Route::get('/client/reservation/{order_id}', CustomerOrderdetailsComponent::class)->name('customer.orderdetails');
    Route::get('/client/review/{order_item_id}', CustomerReviewComponent::class)->name('customer.review');
});


//Pour les Prestataires de services
Route::middleware(['auth:sanctum', 'verified', 'authsprovider'])->group(function () {
    Route::get('/prestaire/{slug}', SproviderProfileComponent::class)->name('sprovider.profile');
    Route::get('/prestaire/{slug}/dashboard', SproviderDashboardComponent::class)->name('sprovider.dashboard');
    Route::get('/prestaire/{slug}/edit', EditSproviderProfileComponent::class)->name('sprovider.profile.edit');
    Route::get('/prestaire/{slug}/reservation', SproviderOrderComponent::class)->name('sprovider.orders');
    Route::get('/prestaire/{slug}/reservation/{order_id}', SproviderOrderDetailsComponent::class)->name('sprovider.orderdetails');
});


//Pour les Admins
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/service-categories', AdminServiceCategoryComponent::class)->name('admin.service_categories');
    Route::get('/admin/service-categories/add', AdminAddServiceCategoryComponent::class)->name('admin.service_cat.add');
    Route::get('/admin/service-categories/edit/{category_id}', AdminEditServiceCategoryComponent::class)->name('admin.service_cat.edit');
    Route::get('/admin/all-service', AdminServiceComponent::class)->name('admin.service');
    Route::get('/admin/{category_slug}/services', AdminServicesByCategoryComponent::class)->name('admin.services_by_cat');
    Route::get('/admin/service/add', AdminAddServiceComponent::class)->name('admin.service.add');
    Route::get('/admin/service/edit/{service_slug}', AdminEditServiceComponent::class)->name('amin.service.edit');

    Route::get('/admin/slider', AdminSliderComponent::class)->name('admin.slider');
    Route::get('/admin/slider/add', AdminAddSliderComponent::class)->name('admin.add_slider');
    Route::get('/admin/slider/edit/{slide_id}', AdminEditSliderComponent::class)->name('admin.edit_slider');

    Route::get('/admin-contact', AdminContactComponent::class)->name('admin.contact');

    Route::get('/admin-service-provider', AdminServiceProvidersComponent::class)->name('admin.sprovider');
    Route::get('/admin-edit-service-provider/{id}', AdminEditServiceProvidersComponent::class)->name('admin.edit.sprovider');
});
