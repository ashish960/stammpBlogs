<?php
use App\Http\Controllers\userController;
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
    return view('homePage');
});



//login and registation routes
Route::get('/registration', function () { return view('registration');});
Route::post('/registration',[userController::class,'Registration'])->name('user.register');

Route::get('/login', function () {return view('login');});
Route::post('/login',[userController::class,'Login'])->name('user.login');


//sessionend
Route::get('/sessionend',[userController::class,'sessionend'])->name('user.sessionend');

//add blog

Route::post('/addBlog',[userController::class,'addBlog'])->name('addBlog');

//profile view

Route::get('/profileView',[userController::class,'profileView'])->name('profile.view');

//edit post
Route::get('/editPost/{postId}',[userController::class,'editPost'])->name('post.edit');
Route::post('/editPost',[userController::class,'editPosts'])->name('editPosts');

//delete post
Route::get('/deletePost/{postId}',[userController::class,'deletePost'])->name('post.delete');


//search
Route::post('/search',[userController::class,'searches'])->name('searches');