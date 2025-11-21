<?php

use Laravel\Fortify\Features;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Settings\Appearance;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TagController;
use App\Livewire\Admin\Post\Index as PostIndex;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\CategoryController;

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

     Route::get('/notification', [App\Http\Controllers\Admin\NotificationController::class, 'index'])->name('admin.notification');

    Route::post('/notifications/mark-read/{id}', [App\Http\Controllers\Admin\NotificationController::class, 'markRead'])->name('notifications.markRead');
    Route::post('/notifications/mark-all-read', [App\Http\Controllers\Admin\NotificationController::class, 'markAllRead'])->name('notifications.markAll');


     Route::get('/contact', [App\Http\Controllers\Admin\ContactContoller::class, 'index'])->name('admin.contact');
     Route::get('/contact/show/{id}', [App\Http\Controllers\Admin\ContactContoller::class, 'show'])->name('admin.contact.show');


     Route::get('/comment', [App\Http\Controllers\Admin\CommentContoller::class, 'index'])->name('admin.comment');
    //  Route::get('/post/create', App\Livewire\Admin\Post\Create::class)->name('admin.post.create');

     Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile');
     Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('admin.profile.edit');
     Route::put('/profile/update/{id}', [ProfileController::class, 'update'])->name('admin.profile.update');

});

// Auth::routes();



// ROute::middlewareGroup('guest', function () {
Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.post');
// Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout.post');

Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register.post');
// });

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');
Route::get('/post', [App\Http\Controllers\FrontendController::class, 'post'])->name('post.index');
Route::get('/post/show/{slug}', [App\Http\Controllers\FrontendController::class, 'showPost'])->name('post.show');
Route::get('/trending', [App\Http\Controllers\FrontendController::class, 'trend'])->name('trends');
Route::get('/trending', [App\Http\Controllers\FrontendController::class, 'trend'])->name('trends');
Route::get('/news-grid', [App\Http\Controllers\FrontendController::class, 'newsGrid'])->name('news.grid');

Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/category', [App\Http\Controllers\FrontendController::class, 'category'])->name('category');
Route::get('/category/show/{slug}', [App\Http\Controllers\FrontendController::class, 'categoryShow'])->name('category.show');
Route::get('/tag/{slug}', [App\Http\Controllers\TagController::class, 'show'])->name('tag.show');
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
Route::post('/contact/submit', [App\Http\Controllers\FrontendController::class, 'storeContact'])->name('contact.submit');
Route::get('/terms', [App\Http\Controllers\FrontendController::class, 'terms'])->name('terms');
Route::get('/privacy', [App\Http\Controllers\FrontendController::class, 'privacy'])->name('privacy');

Route::get('/sitemap', [App\Http\Controllers\frontend\SiteMapController::class, 'htmlSitemap'])->name('sitemap.html');
Route::get('/sitemap.xml', [App\Http\Controllers\frontend\SiteMapController::class, 'index']);



Route::middleware('auth')->group(function () {
Route::post('/comments/store/{post}', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');
Route::post('/comments/reply/store/{comment}', [App\Http\Controllers\CommentController::class, 'storeReply'])->name('comments.reply.store');
Route::post('/comments/like/{comment}', [App\Http\Controllers\CommentController::class, 'like'])->name('comments.like');
Route::post('/comments/unlike/{comment}', [App\Http\Controllers\CommentController::class, 'unlike'])->name('comments.unlike');
Route::delete('/comments/delete/{comment}', [App\Http\Controllers\CommentController::class, 'destroy'])->name('comments.delete');

});

Route::middleware(['auth', 'verified'])->group(function () {

    // Route::get('/admin/posts', PostIndex::class)->name('admin.posts');
});





