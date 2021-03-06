<?php

use App\Http\Controllers\authUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_admin;
use App\Http\Controllers\main;

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

Route::get('/', [main::class, 'index']);
Route::get('/about_us/', [main::class, 'about']);
Route::get('/our_services/', [main::class, 'services']);
Route::get('/login/', [main::class, 'login']);
Route::post('/authuser/', [authUser::class, 'auth'])->name('user.auth');
Route::get('/logout', [authUser::class, 'logout']);
Route::get('/contact_us/', [main::class, 'contact']);
Route::post('/contactinfo', [main::class, 'contactReg'])->name('contact.post');
// content manager routes
Route::get('/c_dashboard', [c_admin::class, 'index']);

Route::get('/c_pages', [c_admin::class, 'pages']);
Route::post('/c_post_pages', [c_admin::class, 'addpages'])->name('pages.add');
// Route::get('/c_pages/{id}', [c_admin::class, 'editpages'])->name('pages.edit');
Route::get('/c_delete_pages/{id}', [c_admin::class, 'dpages'])->name('pages.delete');

Route::get('/c_gallery', [c_admin::class, 'gallery']);
Route::post('/c_pgallery', [c_admin::class, 'pgallery'])->name('gallery.post');
Route::get('/c_editgallery/{id}', [c_admin::class, 'editgallery'])->name('gallery.edit');
Route::put('/c_updategallery/{id}', [c_admin::class, 'updategallery'])->name('gallery.update');


Route::get('/c_web_content', [c_admin::class, 'content']);
Route::post('/c_add_content', [c_admin::class, 'storeContent'])->name('content.store');
Route::get('/editContent/{id}', [c_admin::class, 'editContent'])->name('content.edit');
Route::post('/updateContent', [c_admin::class, 'updateContent'])->name('content.update');
Route::get('/deleteContent/{id}', [c_admin::class, 'deleteContent'])->name('content.delete');

Route::get('/c_adverts', [c_admin::class, 'advert']);
Route::post('c_advertAdd', [c_admin::class, 'addAdvert'])->name('advert.add');
Route::get('/deleteAdvert/{id}', [c_admin::class, 'deleteAdvert'])->name('advert.delete');

Route::get('/c_blogs', [c_admin::class, 'blogs']);
Route::post('/addblog', [c_admin::class, 'addBlog'])->name('blog.add');
Route::get('/deleteBlog/{id}', [c_admin::class, 'deleteBlog'])->name('blog.delete');
Route::get('/editBlog/{id}', [c_admin::class, 'editBlog'])->name('blog.edit');
Route::put('/updateBlog', [c_admin::class, 'updateBlog'])->name('blog.update');

Route::get('/doctor_dashboard', [authUser::class, 'logedin']);
Route::get('/doctor', [authUser::class, 'logedin']);
Route::post('/reg_patient', [authUser::class, 'register'])->name('patient.reg');
Route::get('/doctor/view/patients', [authUser::class, 'patients']);
