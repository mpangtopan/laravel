<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/siteentry', function () {
    return view('siteentry.index');
});

Route::get('/siteentry/create', function () {
    return view('siteentry.create');
});

Route::get('/siteentry/monitoring', function () {
    return view('siteentry.monitoring');
});

Route::get('/siteentry/report', function () {
    return view('siteentry.report');
});

Route::get('/siteentry/chart', function () {
    return view('siteentrychart');
});

Route::get('/siteentry/transportation', function () {
    return view('siteentry.transportation.index');
});

Route::get('/siteentry/transportation/create', function () {
    return view('siteentry.transportation.create');
});

Route::get('/travelrequest', function () {
    return view('travelrequest.index');
});

Route::get('/travelrequest/create', function () {
    return view('travelrequest.create');
});

Route::get('/travelrequest/monitoring', function () {
    return view('travelrequest.monitoring');
});

Route::get('/travelrequest/report', function () {
    return view('travelrequest.report');
});

Route::get('/travelrequest/chart', function () {
    return view('travelrequestchart');
});

Route::get('/cashadvance', function () {
    return view('cashadvance.index');
});

Route::get('/cashadvance/create', function () {
    return view('cashadvance.create');
});

Route::get('/cashadvance/report', function () {
    return view('cashadvance.report');
});

Route::get('/cashadvance/chart', function () {
    return view('cashadvancechart');
});

Route::get('/reimbursement', function () {
    return view('reimbursement.index');
});

Route::get('/reimbursement/create', function () {
    return view('reimbursement.create');
});

Route::get('/reimbursement/report', function () {
    return view('reimbursement.report');
});
Route::get('/reimbursement/chart', function () {
    return view('reimbursementchart');
});

Route::get('/roomfacility', function () {
    return view('roomfacility.index');
});

Route::get('/roomfacility/create', function () {
    return view('roomfacility.create');
});

Route::get('/roombooking', function () {
    return view('roombooking.index');
});

Route::get('/roombooking/create', function () {
    return view('roombooking.create');
});
Route::get('/roomcleaning', function () {
    return view('roomcleaning.index');
});

Route::get('/roomcleaning/create', function () {
    return view('roomcleaning.create');
});

Route::get('/meal', function () {
    return view('meal.index');
});

Route::get('/meal/create', function () {
    return view('meal.create');
});
Route::get('/meal/report', function () {
    return view('meal.report');
});

Route::get('/systemsetting/company/bank', function () {
    return view('systemsetting.company.bank.index');
});
Route::get('/systemsetting/company/bank/create', function () {
    return view('systemsetting.company.bank.create');
});
Route::get('/systemsetting/company/businessunit', function () {
    return view('systemsetting.company.businessunit.index');
});
Route::get('/systemsetting/company/businessunit/create', function () {
    return view('systemsetting.company.businessunit.create');
});

Route::get('/systemsetting/employee', function () {
    return view('systemsetting.employee.index');
});
Route::get('/systemsetting/employee/create', function () {
    return view('systemsetting.employee.create');
});

Route::get('/compro', function () {
    return view('compro');
});
