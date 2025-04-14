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

Route::get('/transportation', function () {
    return view('transportation.index');
});

Route::get('/transportation/create', function () {
    return view('transportation.create');
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

Route::get('/precheck/unit/master', function () {
    return view('precheck.unit.master.index');
});
Route::get('/precheck/unit/master/create', function () {
    return view('precheck.unit.master.create');
});
Route::get('/precheck/unit/master/group', function () {
    return view('precheck.unit.master.group');
});
Route::get('/precheck/unit/master/group/create', function () {
    return view('precheck.unit.master.groupcreate');
});
Route::get('/precheck/unit/master/detail/create', function () {
    return view('precheck.unit.master.detailcreate');
});
Route::get('/precheck/unit/master/detail', function () {
    return view('precheck.unit.master.detail');
});
Route::get('/precheck/unit/transaction', function () {
    return view('precheck.unit.transaction.index');
});
Route::get('/precheck/unit/transaction/detail', function () {
    return view('precheck.unit.transaction.detail');
});
Route::get('/precheck/unit/transaction/create', function () {
    return view('precheck.unit.transaction.create');
});
Route::get('/precheck/unit/transaction/input', function () {
    return view('precheck.unit.transaction.input');
});
Route::get('/precheck/unit/schedule', function () {
    return view('precheck.unit.schedule.index');
});
Route::get('/precheck/unit/schedule/create', function () {
    return view('precheck.unit.schedule.create');
});

Route::get('/precheck/driver/master', function () {
    return view('precheck.driver.master.index');
});
Route::get('/precheck/driver/master/create', function () {
    return view('precheck.driver.master.create');
});
Route::get('/precheck/driver/master/group', function () {
    return view('precheck.driver.master.group');
});
Route::get('/precheck/driver/master/group/create', function () {
    return view('precheck.driver.master.groupcreate');
});
Route::get('/precheck/driver/master/detail', function () {
    return view('precheck.driver.master.detail');
});
Route::get('/precheck/driver/master/detail/create', function () {
    return view('precheck.driver.master.detailcreate');
});
Route::get('/precheck/driver/transaction', function () {
    return view('precheck.driver.transaction.index');
});
Route::get('/precheck/driver/transaction/detail', function () {
    return view('precheck.driver.transaction.detail');
});
Route::get('/precheck/driver/transaction/create', function () {
    return view('precheck.driver.transaction.create');
});
Route::get('/precheck/driver/transaction/input', function () {
    return view('precheck.driver.transaction.input');
});

Route::get('/precheck/passenger/master', function () {
    return view('precheck.passenger.master.index');
});
Route::get('/precheck/passenger/master/create', function () {
    return view('precheck.passenger.master.create');
});
Route::get('/precheck/passenger/master/group', function () {
    return view('precheck.passenger.master.group');
});
Route::get('/precheck/passenger/master/group/create', function () {
    return view('precheck.passenger.master.groupcreate');
});
Route::get('/precheck/passenger/master/detail', function () {
    return view('precheck.passenger.master.detail');
});
Route::get('/precheck/passenger/master/detail/create', function () {
    return view('precheck.passenger.master.detailcreate');
});
Route::get('/precheck/passenger/transaction', function () {
    return view('precheck.passenger.transaction.index');
});
Route::get('/precheck/passenger/transaction/detail', function () {
    return view('precheck.passenger.transaction.detail');
});
Route::get('/precheck/passenger/transaction/create', function () {
    return view('precheck.passenger.transaction.create');
});
Route::get('/precheck/passenger/transaction/input', function () {
    return view('precheck.passenger.transaction.input');
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
Route::get('/systemsetting/company/costcenter', function () {
    return view('systemsetting.company.costcenter.index');
});
Route::get('/systemsetting/company/costcenter/create', function () {
    return view('systemsetting.company.costcenter.create');
});
Route::get('/systemsetting/company/department', function () {
    return view('systemsetting.company.department.index');
});
Route::get('/systemsetting/company/department/create', function () {
    return view('systemsetting.company.department.create');
});
Route::get('/systemsetting/company/location', function () {
    return view('systemsetting.company.location.index');
});
Route::get('/systemsetting/company/location/create', function () {
    return view('systemsetting.company.location.create');
});
Route::get('/systemsetting/company/project', function () {
    return view('systemsetting.company.project.index');
});
Route::get('/systemsetting/company/project/create', function () {
    return view('systemsetting.company.project.create');
});
Route::get('/systemsetting/company/shift', function () {
    return view('systemsetting.company.shift.index');
});
Route::get('/systemsetting/company/shift/create', function () {
    return view('systemsetting.company.shift.create');
});
Route::get('/systemsetting/company/timetable', function () {
    return view('systemsetting.company.timetable.index');
});
Route::get('/systemsetting/company/timetable/create', function () {
    return view('systemsetting.company.timetable.create');
});

Route::get('/systemsetting/employee/employee', function () {
    return view('systemsetting.employee.employee.index');
});
Route::get('/systemsetting/employee/employee/create', function () {
    return view('systemsetting.employee.employee.create');
});
Route::get('/systemsetting/employee/employeestatus', function () {
    return view('systemsetting.employee.employeestatus.index');
});
Route::get('/systemsetting/employee/employeestatus/create', function () {
    return view('systemsetting.employee.employeestatus.create');
});
Route::get('/systemsetting/employee/induction', function () {
    return view('systemsetting.employee.induction.index');
});
Route::get('/systemsetting/employee/induction/create', function () {
    return view('systemsetting.employee.induction.create');
});
Route::get('/systemsetting/employee/jobposition', function () {
    return view('systemsetting.employee.jobposition.index');
});
Route::get('/systemsetting/employee/jobposition/create', function () {
    return view('systemsetting.employee.jobposition.create');
});
Route::get('/systemsetting/employee/plafond', function () {
    return view('systemsetting.employee.plafond.index');
});
Route::get('/systemsetting/employee/plafond/create', function () {
    return view('systemsetting.employee.plafond.create');
});
Route::get('/systemsetting/employee/recruitment', function () {
    return view('systemsetting.employee.recruitment.index');
});
Route::get('/systemsetting/employee/recruitment/create', function () {
    return view('systemsetting.employee.recruitment.create');
});

Route::get('/systemsetting/room/room', function () {
    return view('systemsetting.room.room.index');
});
Route::get('/systemsetting/room/room/create', function () {
    return view('systemsetting.room.room.create');
});
Route::get('/systemsetting/room/roomarea', function () {
    return view('systemsetting.room.roomarea.index');
});
Route::get('/systemsetting/room/roomarea/create', function () {
    return view('systemsetting.room.roomarea.create');
});
Route::get('/systemsetting/room/roomfacility', function () {
    return view('systemsetting.room.roomfacility.index');
});
Route::get('/systemsetting/room/roomfacility/create', function () {
    return view('systemsetting.room.roomfacility.create');
});

Route::get('/systemsetting/transportation/driver', function () {
    return view('systemsetting.transportation.driver.index');
});
Route::get('/systemsetting/transportation/driver/create', function () {
    return view('systemsetting.transportation.driver.create');
});

Route::get('/systemsetting/transportation/location', function () {
    return view('systemsetting.transportation.transportationlocation.index');
});
Route::get('/systemsetting/transportation/location/create', function () {
    return view('systemsetting.transportation.transportationlocation.create');
});

Route::get('/systemsetting/transportation/vehicle', function () {
    return view('systemsetting.transportation.vehicle.index');
});
Route::get('/systemsetting/transportation/vehicle/create', function () {
    return view('systemsetting.transportation.vehicle.create');
});

Route::get('/systemsetting/workflow/approvalflow', function () {
    return view('systemsetting.workflow.approvalflow.index');
});
Route::get('/systemsetting/workflow/approvalflow/create', function () {
    return view('systemsetting.workflow.approvalflow.create');
});
Route::get('/systemsetting/workflow/approvalmaster', function () {
    return view('systemsetting.workflow.approvalmaster.index');
});
Route::get('/systemsetting/workflow/approvalmaster/create', function () {
    return view('systemsetting.workflow.approvalmaster.create');
});

Route::get('/systemadministrator/userrole', function () {
    return view('systemadministrator.userrole.index');
});
Route::get('/systemadministrator/userrole/create', function () {
    return view('systemadministrator.userrole.create');
});
Route::get('/systemadministrator/useradministration', function () {
    return view('systemadministrator.useradministration.index');
});
Route::get('/systemadministrator/useradministration/create', function () {
    return view('systemadministrator.useradministration.create');
});
Route::get('/systemadministrator/broadcast', function () {
    return view('systemadministrator.broadcastnotification.index');
});
Route::get('/systemadministrator/broadcast/create', function () {
    return view('systemadministrator.broadcastnotification.create');
});

Route::get('/compro', function () {
    return view('compro');
});
