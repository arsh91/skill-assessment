<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UsersAuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeesController;


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

Route::get('/',[UsersAuthController::class, 'getLogin'])->name('usersLogin');
Route::post('/login', [UsersAuthController::class, 'postLogin'])->name('usersLoginPost');
Route::get('/logout', [UsersAuthController::class, 'logout'])->name('usersLogout');

 Route::middleware(['auth'])->group(function () {

	Route::get('dashboard',[UsersController::class, 'dashboard'])->name('dashboard');
	Route::resource('companies', CompaniesController::class);
	Route::get('companies/edit/{id}', [CompaniesController::class, 'edit'])->name('companyEdit');
	Route::post('companies/update/{id}', [CompaniesController::class, 'update'])->name('companyUpdate');
	Route::get('companies/show/{id}', [CompaniesController::class, 'show'])->name('companyShow');
	Route::delete('companies/destroy/{id}', [CompaniesController::class, 'destroy'])->name('companyDestroy');

	Route::resource('employees', EmployeesController::class);
	Route::get('employees/edit/{id}', [EmployeesController::class, 'edit'])->name('employeeEdit');
	Route::post('employees/update/{id}', [EmployeesController::class, 'update'])->name('employeeUpdate');
	Route::get('employees/show/{id}', [EmployeesController::class, 'show'])->name('employeeShow');
	Route::delete('employees/destroy/{id}', [EmployeesController::class, 'destroy'])->name('employeeDestroy');

});