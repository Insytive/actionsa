<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

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

Route::get('large-compact-sidebar/admin/blank-compact', function () {
    // set layout sesion(key)
    session(['layout' => 'compact']);
    return view('admin.blank-compact');
})->name('compact');

Route::get('large-sidebar/admin/blank-large', function () {
    // set layout sesion(key)
    session(['layout' => 'normal']);
    return view('admin.blank-large');
})->name('normal');

Route::get('horizontal-bar/admin/blank-horizontal', function () {
    // set layout sesion(key)
    session(['layout' => 'horizontal']);
    return view('admin.blank-horizontal');
})->name('horizontal');

Route::get('vertical/admin/blank-vertical', function () {
    // set layout sesion(key)
    session(['layout' => 'vertical']);
    return view('admin.blank-vertical');
})->name('vertical');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia\Inertia::render('Dashboard');
// })->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\LeadController@index')->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/leads/view/{lead}', 'App\Http\Controllers\LeadController@index')->name('lead.view');

Route::middleware(['auth:sanctum', 'verified'])->get('/add-lead', function () {
    return Inertia\Inertia::render('AddLead');
})->name('add-lead');

//Route::group(['middleware' => 'auth:sanctum', 'verified'], function () {
//    Route::post('leads/save', [LeadController::class, 'store']);
//});

Route::post('leads/save', [LeadController::class, 'store']);



