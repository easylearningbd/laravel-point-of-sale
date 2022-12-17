<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\CustomerController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');

Route::get('/logout', [AdminController::class, 'AdminLogoutPage'])->name('admin.logout.page');


Route::middleware(['auth'])->group(function(){ 

Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');

Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
 

Route::get('/change/password', [AdminController::class, 'ChangePassword'])->name('change.password');

Route::post('/update/password', [AdminController::class, 'UpdatePassword'])->name('update.password');



/// Employee All Route 
Route::controller(EmployeeController::class)->group(function(){

Route::get('/all/employee','AllEmployee')->name('all.employee');
Route::get('/add/employee','AddEmployee')->name('add.employee');
Route::post('/store/employee','StoreEmployee')->name('employee.store');
Route::get('/edit/employee/{id}','EditEmployee')->name('edit.employee');
Route::post('/update/employee','UpdateEmployee')->name('employee.update');
Route::get('/delete/employee/{id}','DeleteEmployee')->name('delete.employee');
});


/// Customer All Route 
Route::controller(CustomerController::class)->group(function(){

Route::get('/all/customer','AllCustomer')->name('all.customer');
Route::get('/add/customer','AddCustomer')->name('add.customer');
Route::post('/store/customer','StoreCustomer')->name('customer.store');
Route::get('/edit/customer/{id}','EditCustomer')->name('edit.customer');
Route::post('/update/customer','UpdateCustomer')->name('customer.update');
Route::get('/delete/customer/{id}','DeleteCustomer')->name('delete.customer');
});




}); // End User Middleware 