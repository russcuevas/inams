<?php

use App\Http\Controllers\admin\AccountsController;
use App\Http\Controllers\admin\AppartmentController;
use App\Http\Controllers\admin\MaintenanceController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\PaymentController;
use App\Http\Controllers\admin\ReportsController;
use App\Http\Controllers\admin\SystemController;
use App\Http\Controllers\admin\TenantsController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\tenants\HomeController;
use Illuminate\Support\Facades\Route;

// TENANTS PAGE
Route::get('/', [HomeController::class, 'HomePage'])->name('homepage');
Route::get('/home', [HomeController::class, 'HomePage'])->name('homepage');
Route::get('/location', [HomeController::class, 'LocationPage'])->name('locationpage');
Route::get('/apartments', [HomeController::class, 'ApartmentsPage'])->name('apartmentspage');

// ADMIN PAGE
Route::get('/admin/tenants_list', [TenantsController::class,'TenantsPage'])->name('admin.tenants.list');


Route::get('/admin/maintenance_list', [MaintenanceController::class,'MaintenancePage'])->name('admin.maintenance.list');


Route::get('/admin/monthly_report_list', [ReportsController::class,'MonthlyReportsPage'])->name('admin.monthly_reports.list');


Route::get('/admin/payment_list', [PaymentController::class,'PaymentPage'])->name('admin.payment.list');

Route::get('/admin/message_list', [MessageController::class,'MessagePage'])->name('admin.message.list');

Route::get('/admin/account_list', [AccountsController::class,'AccountPage'])->name('admin.account.list');


Route::get('/admin/appartment_list', [AppartmentController::class,'AppartmentPage'])->name('admin.appartment.list');

Route::get('/admin/system_settings', [SystemController::class,'SystemPage'])->name('admin.system.settings');

// AUTH PAGE
Route::get('/tenants/login', [AuthController::class, 'TenantsLoginPage'])->name('tenants_login_page');
Route::get('/admin/login', [AuthController::class, 'AdminLoginPage'])->name('admin_login_page');


// 404
Route::get('/404-page', function() {
    return view('404');
});
