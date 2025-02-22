<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RealEstateInterestController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\FaqController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [FrontEndController::class, 'index'])->name('index');
Route::get('/about-us', [FrontEndController::class, 'about'])->name('about');
Route::get('/all-projects', [FrontEndController::class, 'projects'])->name('projects');
Route::get('/projects/{id}/show', [FrontEndController::class, 'project'])->name('project');

Route::get('/consulting', [FrontEndController::class, 'consulting'])->name('consulting');
Route::post('consultations', [ConsultationController::class, 'store'])->name('consultations.store');
Route::post('real-estate-interests', [RealEstateInterestController::class, 'store'])->name('real_estate_interests.store');


Route::get('/faqs', [FrontEndController::class, 'faqs'])->name('faqs');
Route::get('/contact-us', [FrontEndController::class, 'contact'])->name('contact');
Route::post('contacts', [ContactController::class, 'store'])->name('contacts.store');


Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');

    Route::get('sliders', [SliderController::class, 'index'])->name('sliders.index');
    Route::get('sliders/create', [SliderController::class, 'create'])->name('sliders.create');
    Route::get('sliders/{id}', [SliderController::class, 'show'])->name('sliders.show');
    Route::post('sliders', [SliderController::class, 'store'])->name('sliders.store');
    Route::get('sliders/{id}/edit', [SliderController::class, 'edit'])->name('sliders.edit');
    Route::put('sliders/{id}', [SliderController::class, 'update'])->name('sliders.update');
    Route::delete('sliders/{id}', [SliderController::class, 'destroy'])->name('sliders.destroy');

    // Admin Routes - Contacts
    Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('contacts/create', [ContactController::class, 'create'])->name('contacts.create');
    Route::get('contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');
    Route::get('contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::put('contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');
    Route::delete('contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');

    // Admin Routes - Services
    Route::get('services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::get('services/{id}', [ServiceController::class, 'show'])->name('services.show');
    Route::post('services', [ServiceController::class, 'store'])->name('services.store');
    Route::get('services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('services/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

    // Admin Routes - Statistics
    Route::get('statistics', [StatisticsController::class, 'index'])->name('statistics.index');
    Route::get('statistics/create', [StatisticsController::class, 'create'])->name('statistics.create');
    Route::get('statistics/{id}', [StatisticsController::class, 'show'])->name('statistics.show');
    Route::post('statistics', [StatisticsController::class, 'store'])->name('statistics.store');
    Route::get('statistics/{id}/edit', [StatisticsController::class, 'edit'])->name('statistics.edit');
    Route::put('statistics/{id}', [StatisticsController::class, 'update'])->name('statistics.update');
    Route::delete('statistics/{id}', [StatisticsController::class, 'destroy'])->name('statistics.destroy');

    // Admin Routes - Partners
    Route::get('partners', [PartnerController::class, 'index'])->name('partners.index');
    Route::get('partners/create', [PartnerController::class, 'create'])->name('partners.create');
    Route::get('partners/{id}', [PartnerController::class, 'show'])->name('partners.show');
    Route::post('partners', [PartnerController::class, 'store'])->name('partners.store');
    Route::get('partners/{id}/edit', [PartnerController::class, 'edit'])->name('partners.edit');
    Route::put('partners/{id}', [PartnerController::class, 'update'])->name('partners.update');
    Route::delete('partners/{id}', [PartnerController::class, 'destroy'])->name('partners.destroy');

    // Admin Routes - Projects
    Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::get('projects/{id}', [ProjectController::class, 'show'])->name('projects.show');
    Route::post('projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('projects/{id}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');

    // *Admin Routes - Real estate interests
    Route::get('real-estate-interests', [RealEstateInterestController::class,'index'])->name('real-estate-interests.index');
    Route::get('real-estate-interests/{id}', [RealEstateInterestController::class, 'show'])->name('real-estate-interests.show');
    Route::put('real-estate-interests/{id}', [RealEstateInterestController::class, 'update'])->name('real-estate-interests.update');
    Route::delete('real-estate-interests/{id}', [RealEstateInterestController::class, 'destroy'])->name('real-estate-interests.destroy');


    // Admin Routes - Reviews
    Route::get('reviews', [ReviewController::class, 'index'])->name('reviews.index');
    Route::get('reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
    Route::get('reviews/{id}', [ReviewController::class, 'show'])->name('reviews.show');
    Route::post('reviews', [ReviewController::class, 'store'])->name('reviews.store');
    Route::get('reviews/{id}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
    Route::put('reviews/{id}', [ReviewController::class, 'update'])->name('reviews.update');
    Route::delete('reviews/{id}', [ReviewController::class, 'destroy'])->name('reviews.destroy');

    // Admin Routes - Gallery
    Route::get('gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::get('gallery/{id}', [GalleryController::class, 'show'])->name('gallery.show');
    Route::post('gallery', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('gallery/{id}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::put('gallery/{id}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::delete('gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');

    // Admin Routes - Settings
    Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::put('settings', [SettingsController::class, 'update'])->name('settings.update');

    // Admin Routes - Consultations
    Route::get('consultations', [ConsultationController::class, 'index'])->name('consultations.index');
    Route::get('consultations/create', [ConsultationController::class, 'create'])->name('consultations.create');
    Route::get('consultations/{id}', [ConsultationController::class, 'show'])->name('consultations.show');
    Route::get('consultations/{id}/edit', [ConsultationController::class, 'edit'])->name('consultations.edit');
    Route::put('consultations/{id}', [ConsultationController::class, 'update'])->name('consultations.update');
    Route::delete('consultations/{id}', [ConsultationController::class, 'destroy'])->name('consultations.destroy');

    // Admin Routes - Faqs
    Route::get('faqs', [FaqController::class, 'index'])->name('faqs.index');
    Route::get('faqs/create', [FaqController::class, 'create'])->name('faqs.create');
    Route::get('faqs/{id}', [FaqController::class, 'show'])->name('faqs.show');
    Route::post('faqs', [FaqController::class, 'store'])->name('faqs.store');
    Route::get('faqs/{id}/edit', [FaqController::class, 'edit'])->name('faqs.edit');
    Route::put('faqs/{id}', [FaqController::class, 'update'])->name('faqs.update');
    Route::delete('faqs/{id}', [FaqController::class, 'destroy'])->name('faqs.destroy');
});
