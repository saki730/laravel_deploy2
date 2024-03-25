<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController; //追加
use App\Http\Controllers\TeamController;//追記
use App\Models\Book; //追加

use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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

//本：ダッシュボード表示(books.blade.php)
Route::get('/', [DashboardController::class,'index'])->middleware(['auth']);

//本：追加 
Route::post('/books',[BookController::class,"store"]);

//本：削除 
Route::delete('/book/{book}', [BookController::class,"destroy"]);

//本：更新画面表示
Route::post('/booksedit/{book}',[BookController::class,"edit"]); //通常

//本：更新処理
Route::post('/books/update',[BookController::class,"update"]);

//チーム一覧表示（管理画面）
Route::get('teams',[TeamController::class,"index"])->middleware(['auth']);

//チーム登録処理
Route::post('teamadd', [TeamController::class, 'store']);

//チーム所属処理
Route::get('team/{team_id}', [TeamController::class, 'join']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/user/profile/edit', [UserController::class, 'showUserForm']);


require __DIR__.'/auth.php';

