<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Account\TransactionController;
use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Account\WithdrawalController;
use App\Http\Controllers\Account\ProfileController;
use App\Http\Controllers\Account\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


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

/*

Route::get('/', function () {
    return view('welcome');
});
*/



Route::get('/pages/affiliate', function () {
    return view('pages.affiliate');
});

Route::get('/pages/creator', function () {
    return view('pagescreator');
});



Route::get('/', [HomeController::class, 'index'])->name('home');  
Route::get('/home', [HomeController::class, 'index']);
  


Route::prefix('account')->name('account.')->group(function() {
    Route::get('', [AccountController::class, 'index'])->name('index');
    Route::get('transactions', [TransactionController::class, 'index'])->name('transaction');
    Route::get('downlines', [AccountController::class, 'downline'])->name('downlines');
    Route::get('withdraw', [WithdrawalController::class, 'index'])->name('withdrawal');
  
});

Route::middleware('auth')->group(function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');  
    Route::get('profile/{username}', [ProfileController::class, 'index'])->name('profile');
    Route::post('profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
 
    //Route Resources

    Route::resource('categories', CategoryController::class);

    Route::resource('products', ProductController::class);

    Route::resource('transactions', TransactionController::class);  

   
});

 Route::middleware('admin')->prefix('admin')->name('admin.')->group(function() {
        Route::get('dashboard', [DashboarfdController::class, 'index'])->name('dashsboard');
    });


//add auth routes

require __DIR__.'/auth.php';
