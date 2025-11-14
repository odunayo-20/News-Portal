<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\TagController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Livewire\Admin\Post\Index as PostIndex;

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/articles', [App\Http\Controllers\Admin\ArticleController::class, 'index'])->name('admin.articles');
    Route::get('/articles/create', [App\Http\Controllers\Admin\ArticleController::class, 'create'])->name('admin.articles.create');
    Route::post('/articles/store', [App\Http\Controllers\Admin\ArticleController::class, 'store'])->name('admin.articles.store');

    Route::get('/posts', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('admin.posts');
    Route::get('/posts/create', [App\Http\Controllers\Admin\PostController::class, 'create'])->name('admin.posts.create');
    Route::post('/posts/store', [App\Http\Controllers\Admin\PostController::class, 'store'])->name('admin.posts.store');
    Route::get('/posts/edit/{slug}', [App\Http\Controllers\Admin\PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('/posts/update/{slug}', [App\Http\Controllers\Admin\PostController::class, 'update'])->name('admin.posts.update');
    Route::get('/posts/show/{slug}', [App\Http\Controllers\Admin\PostController::class, 'show'])->name('admin.posts.show');


    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::get('/tag', [TagController::class, 'index'])->name('admin.tag');
    Route::get('/post-tags', App\Livewire\Admin\PostTag\Index::class)->name('admin.post-tags');
 Route::get('/admin/tags', App\Livewire\Admin\Tag\Index::class)->name('admin.tags');

    //  Route::get('/posts', PostIndex::class)->name('admin.posts');
    //  Route::get('/post/create', App\Livewire\Admin\Post\Create::class)->name('admin.post.create');

     Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile');

});

// ROute::middlewareGroup('guest', function () {
Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register.post');
// });

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');
Route::get('/post', [App\Http\Controllers\FrontendController::class, 'Post'])->name('post.index');
Route::get('/post/show', [App\Http\Controllers\FrontendController::class, 'showPost'])->name('post.show');

Route::middleware(['auth', 'verified'])->group(function () {

    // Route::get('/admin/posts', PostIndex::class)->name('admin.posts');
});





