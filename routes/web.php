<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\User\UserDashboardController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'role:administrator'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
});
Route::middleware(['auth', 'role:user'])->name('user.')->prefix('user')->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
    Route::get('/pay-transaction', [UserDashboardController::class, 'paytransaction'])->name('paytransaction');
    Route::get('/my-accounts', [UserDashboardController::class, 'myaccounts'])->name('myaccounts');
    Route::get('/add-account', [UserDashboardController::class, 'addaccount'])->name('addaccount');
    Route::post('/store-account', [UserDashboardController::class, 'storeaccount'])->name('storeaccount');
    Route::get('/edit-account/{slug}', [UserDashboardController::class, 'editaccount'])->name('editaccount');
    Route::patch('/update-account/{accountslug}', [UserDashboardController::class, 'updateaccount'])->name('updateaccount');
    Route::get('/top-up-account/{accountslug}', [UserDashboardController::class, 'topupaccount'])->name('topupaccount');
    Route::get('/account-transactions/{accountslug}', [UserDashboardController::class, 'accounttransactions'])->name('accounttransactions');
    Route::get('/my-recipients', [UserDashboardController::class, 'myrecipients'])->name('myrecipients');
    Route::get('/my-recipients/{recipientslug}', [UserDashboardController::class, 'myrecipientstransactions'])->name('myrecipientstransactions');
    Route::get('/all-transactions-accounts', [UserDashboardController::class, 'alltransactionaccounts'])->name('alltransactionaccounts');
    Route::get('/selected-recipient-account/{recipientslug}', [UserDashboardController::class, 'selectrecipientaccount'])->name('selectrecipientaccount');
    Route::get('/complete-transaction/{transslug}', [UserDashboardController::class, 'completetransaction'])->name('completetransaction');
    Route::post('/update-complete-transaction', [UserDashboardController::class, 'updatecompletetransaction'])->name('updatecompletetransaction');
    Route::get('/pending-transactions', [UserDashboardController::class, 'pendingtransactions'])->name('pendingtransactions');
    Route::get('/delete-pending-transactions/{transslug}', [UserDashboardController::class, 'deletependingtransactions'])->name('deletependingtransactions');
});
