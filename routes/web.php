<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\Admin\AdminLeadsController;
use App\Http\Controllers\Admin\AdminDashboardController;
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
    return Inertia\Inertia::render('Home');
})->name('home');

Route::get('/become-a-supporter', function () {
    return Inertia\Inertia::render('BecomeSupporter');
})->name('become-a-supporter');

Route::get('/leads', function () {
    return Inertia\Inertia::render('Admin/Leads/Index');
})->name('leads');

Route::get('/success', function () {
    return Inertia\Inertia::render('Success');
})->name('success');

Route::get('/registration-error', function () {
    return Inertia\Inertia::render('RegistrationError');
})->name('registration-error');

Route::get('/become-a-member', function () {
    return Inertia\Inertia::render('BecomeMember');
})->name('become-a-member');

Route::get('/become-a-volunteer', function () {
    return Inertia\Inertia::render('BecomeVolunteer');
})->name('become-a-volunteer');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia\Inertia::render('Dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\LeadController@index')->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/leads/view/{lead}', 'App\Http\Controllers\LeadController@index')->name('lead.view');

Route::middleware(['auth:sanctum', 'verified'])->get('/add/supporter', function () {
    return Inertia\Inertia::render('AddLead');
})->name('add/supporter');

Route::middleware(['auth:sanctum', 'verified'])->get('/add/member', function () {
    return Inertia\Inertia::render('AddMember');
})->name('add/member');

Route::post('leads/save', [LeadController::class, 'store']);

//Route::view('admin', 'dashboard.dashboardv1')->name('dashboard_version_1');

// Auth::routes();
Route::group(['middleware' => 'auth:sanctum', 'verified'], function () {
    Route::post('admin/leads/save', [AdminLeadsController::class, 'store']);
});

Route::get('/admin/leads/add', [AdminLeadsController::class, 'create']);
Route::get('/admin/leads', [AdminLeadsController::class, 'index'])->name('admin.leads.index');;
Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin');
Route::get('/admin/leads/delete/{id}', [AdminLeadsController::class, 'destroy']);
Route::view('/membership/card', 'membership.card')->name('membership-card');


