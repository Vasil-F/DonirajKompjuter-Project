<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\ApplicationController;

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
    
    Route::get('/maintenance', [AdminController::class, 'index'])->name('maintenance.index');
   
    Route::get('/maintenance/blogs', [BlogsController::class, 'index'])->name('blogs.index');
    Route::get('/maintenance/blogs/create', [BlogsController::class, 'create'])->name('blogs.create');
    Route::post('/maintenance/blogs', [BlogsController::class, 'store'])->name('blogs.store');
    Route::get('/maintenance/blogs/{blog}/edit', [BlogsController::class, 'edit'])->name('blogs.edit');
    Route::put('/maintenance/blogs/{blog}', [BlogsController::class, 'update'])->name('blogs.update');
    Route::delete('/maintenance/blogs/{blog}', [BlogsController::class, 'destroy'])->name('blogs.destroy');
   
    Route::get('/maintenance/videos', [VideosController::class, 'index'])->name('videos.index');
    Route::get('/maintenance/videos/create', [VideosController::class, 'create'])->name('videos.create');
    Route::post('/maintenance/videos', [VideosController::class, 'store'])->name('videos.store');
    Route::get('/maintenance/videos/{video}/edit', [VideosController::class, 'edit'])->name('videos.edit');
    Route::put('/maintenance/videos/{video}', [VideosController::class, 'update'])->name('videos.update');
    Route::delete('/maintenance/videos/{video}', [VideosController::class, 'destroy'])->name('videos.destroy');
    
    Route::get('/maintenance/partners', [PartnersController::class, 'index'])->name('partners.index');
    Route::get('/maintenance/partners/create', [PartnersController::class, 'create'])->name('partners.create');
    Route::post('/maintenance/partners', [PartnersController::class, 'store'])->name('partners.store');
    Route::get('/maintenance/partners/{partner}/edit', [PartnersController::class, 'edit'])->name('partners.edit');
    Route::put('/maintenance/partners/{partner}', [PartnersController::class, 'update'])->name('partners.update');
    Route::delete('/maintenance/partners/{partner}', [PartnersController::class, 'destroy'])->name('partners.destroy');

    Route::get('/maintenance/contacts', [ContactsController::class, 'index'])->name('contacts.index');
    Route::get('/maintenance/contacts/{contact}/edit', [ContactsController::class, 'edit'])->name('contacts.edit');
    Route::put('/maintenance/contacts/{contact}/update', [ContactsController::class, 'update'])->name('contacts.update');
    Route::put('/maintenance/contacts/{contact}/archive', [ContactsController::class, 'archive'])->name('contacts.archive');
    Route::put('/maintenance/contacts/{contact}/return', [ContactsController::class, 'return'])->name('contacts.return');
    Route::delete('/maintenance/contacts/{contact}', [ContactsController::class, 'destroy'])->name('contacts.destroy');
   
    Route::get('/maintenance/volunteers', [VolunteerController::class, 'index'])->name('volunteers.index');
    Route::get('/maintenance/volunteers/{volunteer}/edit', [VolunteerController::class, 'edit'])->name('volunteers.edit');
    Route::put('/maintenance/volunteers/{volunteer}/update', [VolunteerController::class, 'update'])->name('volunteers.update');
    Route::put('/maintenance/volunteers/{volunteer}/archive', [VolunteerController::class, 'archive'])->name('volunteers.archive');
    Route::put('/maintenance/volunteers/{volunteer}/return', [VolunteerController::class, 'return'])->name('volunteers.return');
    Route::delete('/maintenance/volunteers/{volunteer}', [VolunteerController::class, 'destroy'])->name('volunteers.destroy');
    
    Route::get('/maintenance/applications', [ApplicationController::class, 'index'])->name('applications.index');
    Route::get('/maintenance/applications/create', [ApplicationController::class, 'create'])->name('applications.create');
    Route::post('/maintenance/applications/store', [ApplicationController::class, 'store'])->name('applications.store');
    Route::get('/maintenance/applications/{application}/edit', [ApplicationController::class, 'edit'])->name('applications.edit');
    Route::put('/maintenance/applications/{application}/update', [ApplicationController::class, 'update'])->name('applications.update');
    Route::put('/maintenance/applications/{application}/archive', [ApplicationController::class, 'archive'])->name('applications.archive');
    Route::put('/maintenance/applications/{application}/return', [ApplicationController::class, 'return'])->name('applications.return');
    Route::delete('/maintenance/applications/{application}', [ApplicationController::class, 'destroy'])->name('applications.destroy');
    
    Route::get('/maintenance/clients', [ClientController::class, 'index'])->name('clients.index');

    Route::get('/maintenance/donations', [DonationController::class, 'index'])->name('donations.index');
    Route::get('/maintenance/donations/create', [DonationController::class, 'create'])->name('donations.create');
    Route::post('/maintenance/donations/store', [DonationController::class, 'store'])->name('donations.store');
    Route::get('/maintenance/donations/{donation}/edit', [DonationController::class, 'edit'])->name('donations.edit');
    Route::put('/maintenance/donations/{donation}/update', [DonationController::class, 'update'])->name('donations.update');
    Route::delete('/maintenance/donations/{donation}', [DonationController::class, 'destroy'])->name('donations.destroy');
});

require __DIR__.'/auth.php';
