<?php

use App\Http\Controllers\CompletedTaskController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
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
    return view('auth.login');
});

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', [TaskController::class, 'dashboard'])->name('dashboard');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/completed', [TaskController::class, 'completed'])->name('completed');
    Route::get('/completed-admin', [TaskController::class, 'completedAdmin'])->name('completed.admin');
    Route::get('/created-admin', [TaskController::class, 'createdAdmin'])->name('created.admin');
    Route::delete('/delete/{id}', [TaskController::class, 'destroy'])->name('admin.delete');
    Route::get('/users', [TaskController::class, 'adminUsers'])->name('admin.users');
    Route::get('/today-task', [TaskController::class, 'today'])->name('today');
    Route::get('/weekly-task', [TaskController::class, 'weekly'])->name('weekly');
    Route::get('/monthly-task', [TaskController::class, 'monthly'])->name('monthly');

    Route::post('/store',[TaskController::class, 'store'])->name('store');

    Route::get('/template',[PdfController::class, 'generatePDF'])->name('generate');


    // user do the task
    Route::get('/take/{id}',[TaskController::class, 'take'])->name('take');

    // completed task fr user
    Route::post('/completed-task',[CompletedTaskController::class, 'completed'])->name('completed.task');

    // notification
    Route::get('/notification', [NotificationController::class, 'notifs'])->name('notification');
    Route::post('/notification-update/{id}', [NotificationController::class, 'notificationUpdate'])->name('notification.update');
});

require __DIR__.'/auth.php';
