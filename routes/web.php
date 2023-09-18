<?php

use Illuminate\Support\Facades\Route;

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

// Route Dasar

Route::get ('/welcome',function (){
    return "Selamat Datang";
});
    
Route::get ('/beranda/news',function (){
    return "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui ex sapiente laborum deleniti, facere, repellat magni, nobis eos velit ratione dolores ducimus temporibus quod maxime necessitatibus commodi libero accusamus quia! Earum pariatur fugiat eius? Maiores perferendis vero labore sunt modi reiciendis enim culpa, hic magnam recusandae earum deserunt tenetur nobis?";
});

// Route dengan View
Route::get ('/berita',function (){
    return view ('user.berita.index');
});
Route::get ('/berita/detail',function (){
    return view ('user.berita.show');
});

// Route dengan Prefix
Route::prefix('admin')->group(function(){
    
});

// Dashboard
Route::get('/dashboard',function (){
    return view('admin.dashboard');
});
//news
Route::get('/news',function (){
    return view('admin.news.index');
});
// News > create
Route::get('/news/create',function(){
    return view('admin.news.create');
});
// News > edit
Route::get('/news/edit',function(){
    return view('admin.news.edit');
});
// News > show
Route::get('/news/show',function(){
    return view('admin.news.show');
});
// reports
Route::get('/reports',function (){
    return view('admin.reports.index');
});
// Settings
Route::get('/settings',function (){
    return view('admin.settings.index');
});
// users
Route::get('/users',function (){
    return view('admin.users.index');
});




