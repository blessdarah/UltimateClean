<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\EventsController;
use App\Http\Controllers\Pages\PostsController;
use App\Http\Controllers\Pages\ProjectsController;
use App\Http\Controllers\Pages\ServiceController;
use App\Http\Controllers\Pages\TeamMemberController;
use App\Http\Controllers\Pages\WelcomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', WelcomeController::class)->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/blog', [PostsController::class, 'index'])->name('pages.blog');
Route::get('/blog/{slug}', [PostsController::class, 'show'])->name('pages.blog.show');
Route::get('/services', [ServiceController::class, 'index'])->name('pages.services');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('pages.services.show');
Route::get('/members', [TeamMemberController::class, 'index'])->name('pages.members');
Route::get('/members/{slug}', [TeamMemberController::class, 'show'])->name('pages.members.show');
Route::get('/projects', [ProjectsController::class, 'index'])->name('pages.projects');
Route::get('/projects/{slug}', [ProjectsController::class, 'show'])->name('pages.projects.show');
Route::get('/events', [EventsController::class, 'index'])->name('pages.events');
Route::get('/events/{slug}', [EventsController::class, 'show'])->name('pages.events.show');
Route::view('/about-us', 'pages.about')->name('pages.about');
Route::get('/contact', [ContactController::class, 'index'])->name('pages.contact');
Route::post('/contact', [ContactController::class, 'store'])->name('pages.contact.store');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
