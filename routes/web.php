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

// Route::view('dashboard/dashboard2', 'dashboard.dashboardv2')->name('dashboard_version_2');

// Auth::routes();
Route::group(['middleware' => 'auth:sanctum', 'verified'], function () {
    Route::post('admin/leads/save', [AdminLeadsController::class, 'store']);
});

Route::get('/admin/leads/create', [AdminLeadsController::class, 'create']);
Route::get('/admin/leads', [AdminLeadsController::class, 'index'])->name('admin.leads.index');


// forms
Route::view('forms/basic-action-bar', 'forms.basic-action-bar')->name('basic-action-bar');
Route::view('forms/multi-column-forms', 'forms.multi-column-forms')->name('multi-column-forms');
Route::view('forms/smartWizard', 'forms.smartWizard')->name('smartWizard');
Route::view('forms/tagInput', 'forms.tagInput')->name('tagInput');
Route::view('forms/forms-basic', 'forms.forms-basic')->name('forms-basic');
Route::view('forms/form-layouts', 'forms.form-layouts')->name('form-layouts');
Route::view('forms/form-input-group', 'forms.form-input-group')->name('form-input-group');
Route::view('forms/form-validation', 'forms.form-validation')->name('form-validation');
Route::view('forms/form-editor', 'forms.form-editor')->name('form-editor');



Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin');
Route::get('/admin/leads/delete/{id}', [AdminLeadsController::class, 'destroy']);
Route::view('/membership/card', 'membership.card')->name('membership-card');


