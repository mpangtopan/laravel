@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Create New - Travel Request</h3>
    </div>
    <div class="card m-4">
        <div class="card-header">
            <a href="/travelrequest" class="btn-grad-danger btn-sm m-2 shadow-sm">Back to list</a>
        </div>
        <div class="card-body p-4 shadow-sm">
            <div class="card mb-4" style="border-color: #26d496">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="request_date" class="col-md-4">Request Date</label>
                                <div class="col-md-4">
                                    <input id="request_date" class="form-control request_date" data-bv-message="Required" required name="request_date" type="date" value="2025-02-26">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="request_no" class="col-md-4">Request Number</label>
                                <div class="col-md-4">
                                    <input type="text" name="request_no" class="form-control" value="" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="requestor_name" class="col-md-4">Requestor</label>
                                <div class="col-md-8">
                                    <input type="text" name="requestor_name" class="form-control" value="Jon Snow" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="department_name" class="col-md-4">Department</label>
                                <div class="col-md-8">
                                    <input type="text" name="department_name" class="form-control" value="Department 01" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4" style="border-color: #26d496">
                <div class="card-header" style="background-color: #26d496">
                    <span style="font-weight: bold;">Traveller Details</span>
                </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="traveller_type" class="col-md-4">Type</label>
                                    <div class="col-md-8">
                                        <select name="traveller_type" id="traveller_type" class="form-control">
                                            <option value="Employee">Employee</option>
                                            <option value="Non-Employee">Non-Employee</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="traveller_company" class="col-md-4">Company</label>
                                    <div class="col-md-8">
                                        <input id="traveller_company" class="form-control" required name="traveller_company" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="traveller_employee_id" class="col-md-4">Employee ID</label>
                                    <div class="col-md-8">
                                        <input id="traveller_employee_id" class="form-control" required name="traveller_employee_id" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="traveller_id_card" class="col-md-4">ID Card</label>
                                    <div class="col-md-8">
                                        <input id="traveller_id_card" class="form-control" required name="traveller_id_card" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="traveller_mobile_no" class="col-md-4">Mobile No</label>
                                    <div class="col-md-8">
                                        <input id="traveller_mobile_no" class="form-control" required name="traveller_mobile_no" type="text">
                                    </div>
                                </div>
                                <div class="form-group row" id="lumpsum_container">
                                    <label for="lumpsum_amount" class="col-md-4">Lumpsum Amount</label>
                                    <div class="col-md-8">
                                        <input id="lumpsum_amount" class="form-control" name="lumpsum_amount" type="text">																									
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="employee_id" class="col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <div id="card_employee_id">
                                            <select id="employee_id" class="form-control " required="required" name="employee_id"><option value="">--Select--</option><option value="E0001" selected="selected">JON SNOW</option><option value="E0002">SAMWELL TARLY</option><option value="E0003">DAENERYS TARGARYEN</option></select>
                                        </div>
                                        <input id="traveller_name" class="form-control" style="display: none;" name="traveller_name" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="traveller_point_of_hire" class="col-md-4">Point of Hire</label>
                                    <div class="col-md-8">
                                        <input id="traveller_point_of_hire" class="form-control" required name="traveller_point_of_hire" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="traveller_roster" class="col-md-4">Roster</label>
                                    <div class="col-md-8">
                                        <input id="traveller_roster" class="form-control" required name="traveller_roster" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="traveller_position" class="col-md-4">Position</label>
                                    <div class="col-md-8">
                                        <input id="traveller_position" class="form-control" required name="traveller_position" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="traveller_department" class="col-md-4">Department</label>
                                    <div class="col-md-8">
                                        <input id="traveller_department" class="form-control" required name="traveller_department" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="traveller_email" class="col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input id="traveller_email" class="form-control" required name="traveller_email" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="card mb-4" style="border-color: #26d496">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="frequent_flyer_program" class="col-md-4">Frequent Flyer Program</label>
                                <div class="col-md-8">
                                    <input id="frequent_flyer_program" class="form-control" name="frequent_flyer_program" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="traveller_emergency_contact_name" class="col-md-4">Emergency Contact</label>
                                <div class="col-md-8">
                                    <input id="traveller_emergency_contact_name" class="form-control" required name="traveller_emergency_contact_name" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="traveller_emergency_contact_mobile_no" class="col-md-4">Mobile No</label>
                                <div class="col-md-8">
                                    <input id="traveller_emergency_contact_mobile_no" class="form-control" required name="traveller_emergency_contact_mobile_no" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="frequent_flyer_no" class="col-md-4">Frequent Flyer No</label>
                                <div class="col-md-8">
                                    <input id="frequent_flyer_no" class="form-control" name="frequent_flyer_no" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="traveller_emergency_contact_relationship" class="col-md-4">Relationship</label>
                                <div class="col-md-8">
                                    <input id="traveller_emergency_contact_relationship" class="form-control" required name="traveller_emergency_contact_relationship" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="traveller_emergency_contact_alternative_no" class="col-md-4">Alternative No</label>
                                <div class="col-md-8">
                                    <input id="traveller_emergency_contact_alternative_no" class="form-control" required name="traveller_emergency_contact_alternative_no" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4" style="border-color: #26d496">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="purpose" class="col-md-4">Purpose</label>
                                <div class="col-md-8">
                                    <select id="Purpose" class="form-control " required name="purpose[]"><option value="AL">Annual Leave</option><option value="BT">Business Trip</option><option value="FB">Field Break</option><option value="ME">Medical Evacuation</option></select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="start_date" class="col-md-4">Start Date</label>
                                <div class="col-md-4">
                                    <input id="start_date" class="form-control request_date" data-bv-message="Required" required name="start_date" type="date" value="2025-02-26">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="end_date" class="col-md-4">End Date</label>
                                <div class="col-md-4">
                                    <input id="end_date" class="form-control request_date" data-bv-message="Required" required name="end_date" type="date" value="2025-02-26">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="brief_agenda" class="col-md-4">Brief Agenda</label>
                                <div class="col-md-8">
                                    <textarea rows="2" id="brief_agenda" class="form-control" required name="brief_agenda" cols="50"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="file" class="col-md-4">Detail Agenda</label>
                                <div class="col-md-8">
                                    <div class="row"> 
                                        <div class="col-md-12">
                                          <input type="file" name="file_1" id="file_1" class="form-control-file" style="margin-bottom: 5px;">
                                          <a href="javascript:void(0);" style="margin-left: 5px;" class="text-success btn-add-file">
                                            <i class="fa fa-lg fa-plus"></i>
                                          </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4" style="border-color: #26d496">
                <div class="card-header" style="background-color: #26d496">
                    <span style="font-weight: bold;">Flight Details</span>
                </div>
                <div class="card-body table-responsive">
                    <table id="list-transportation-air" class="table table-hover table-striped text-center">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Remarks</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="row-0">
                                <td><input type="date" name="transportation_air_date[]" class="form-control" required></td>
                                <td><input type="time" name="transportation_air_time[]" class="form-control"></td>
                                <td><select class="form-control " name="transportation_air_origin[]">
                                    <option value="" selected="selected">--Select--</option>
                                    <option value="2">Adi Soemarmo</option>
                                    <option value="7">Djuanda</option>
                                    <option value="1">YIA</option></select></td>
                                <td><select class="form-control " name="transportation_air_destination[]">
                                    <option value="" selected="selected">--Select--</option>
                                    <option value="2">Adi Soemarmo</option><option value="7">Djuanda</option>
                                    <option value="1">YIA</option></select></td>
                                <td><input type="text" name="transportation_air_remarks[]" class="form-control"></td>
                                <td><a href="javascript:void(0)" class="text-danger btn-delete-transportation-air"><i class="fa fa-sm fa-times"></i></a></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                  <td colspan="6" align="center">
                                      <button type="button" id="btn-add-new-transportation-air" class="btn btn-sm btn-default shadow-sm">Add New Line</button>
                                  </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="card mb-4" style="border-color: #26d496">
                <div class="card-header" style="background-color: #26d496">
                <span style="font-weight: bold;">Land Transportation Details</span>
                </div>
                <div class="card-body table-responsive">
                    <table id="list-transportation-land" class="table table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>From</th>
                                <th>To</th>
                                <th>By</th>
                                <th>Remarks</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="date" name="transportation_land_date[]" class="form-control" required></td>
                                <td><input type="time" name="transportation_land_time[]" class="form-control"></td>
                                <td>
                                    <select class="form-control  transportation-land-origin" name="transportation_land_origin[]"><option value="" selected="selected">--Select--</option><option value="12">CIREBON</option><option value="9">KEDIRI</option><option value="10">MADIUN</option><option value="3">MANADO</option><option value="11">SEMARANG</option><option value="4">SURABAYA</option><option value="8">SURAKARTA</option><option value="13">YOGYAKARTA</option></select>
                                </td>
                                <td>
                                    <select class="form-control  transportation-land-destination" name="transportation_land_destination[]"><option value="" selected="selected">--Select--</option><option value="12">CIREBON</option><option value="9">KEDIRI</option><option value="10">MADIUN</option><option value="3">MANADO</option><option value="11">SEMARANG</option><option value="4">SURABAYA</option><option value="8">SURAKARTA</option><option value="13">YOGYAKARTA</option></select>
                                </td>
                                <td><input type="text" name="transportation_land_provider[]" class="form-control" required></td>
                                <td><input type="text" name="transportation_land_remarks[]" class="form-control"></td>
                                <td><a href="javascript:void(0)" class="text-danger btn-delete-transportation-land"><i class="fa fa-sm fa-times"></i></a></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                  <td colspan="6" align="center">
                                      <button type="button" id="btn-add-new-transportation-land" class="btn btn-sm btn-default shadow-sm">Add New Line</button>
                                  </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="card mb-4" style="border-color: #26d496">
                <div class="card-header" style="background-color: #26d496">
                <span style="font-weight: bold;">Accommodation Details</span>
                </div>
                <div class="card-body table-responsive">
                    <table id="list-accommodation" class="table table-hover">
                        <thead>
                            <tr>
                                <th>Location</th>
                                <th>Check In Date</th>
                                <th>Check Out Date</th>
                                <th>Hotel Name</th>
                                <th>Remarks</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" name="accommodation_location[]" class="form-control" required></td>
                                <td><input type="date" name="accommodation_check_in_date[]" class="form-control" required></td>
                                <td><input type="date" name="accommodation_check_out_date[]" class="form-control" required></td>
                                <td><input type="text" name="accommodation_hotel_name[]" class="form-control" required></td>
                                <td><input type="text" name="accommodation_remarks[]" class="form-control"></td>
                                <td><a href="javascript:void(0)" class="text-danger btn-delete-accommodation"><i class="fa fa-sm fa-times"></i></a></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                  <td colspan="6" align="center">
                                      <button type="button" class="btn btn-sm btn-default shadow-sm" id="btn-add-new-accommodation">Add New Line</button>
                                  </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="card mb-4" style="border-color: #26d496">
                <div class="card-header" style="background-color: #26d496">

                    <span style="font-weight: bold;">Cash Advance</span>

                </div>
                <div class="card-body">
                    <label for="cash-advanced-options" class="control-label" style="margin-right: 80px; font-weight: normal;">
                        Uang Muka Perjalanan Dinas <span class="text-danger">*</span>
                    </label>
                    <div style="display: inline-block;">
                        <label class="mr-4">
                            <input type="radio" id="cash-advanced-yes" name="is_cash_advanced" value="1" style="margin-right: 5px;">
                            Yes
                        </label>
                        <label>
                            <input type="radio" id="cash-advanced-no" name="is_cash_advanced" value="0" checked style="margin-left: 30px; margin-right: 5px;">
                            No
                        </label>
                    </div>
                </div>
            </div>
            <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm pull-right">Submit</a>
        </div>
    </div>

@endsection

