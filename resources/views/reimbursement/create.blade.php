@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Create New - Reimbursement</h3>
    </div>

    <div class="card m-4">
        <div class="card-header">
            <a href="/reimbursement" class="btn-grad-danger btn-sm m-2 shadow-sm">Back to list</a>
        </div>
        <div class="card-body p-4 shadow-sm">
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                            <form method="POST" action="https://terrafm.dev.akseshr.com/transaction/reimbursement" accept-charset="UTF-8" class="" enctype="multipart/form-data"><input name="_token" type="hidden" value="CNgZAOhIdreheFTJrY6IyJ7hyxWImQcWrwetzBGn">
                            <input type="hidden" name="_token" value="CNgZAOhIdreheFTJrY6IyJ7hyxWImQcWrwetzBGn">
                            
                                <div class="card mb-4" style="border-color: #26d496">
                                    <div class="box-body">
                                        <div class="row form-horizontal ">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="request_date" class="col-md-5">Request Date</label>
                                                <div class="col-md-7">
                                                    <input id="request_date" class="form-control request_date" data-bv-message="Required" required name="request_date" type="date" value="2025-03-13">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="request_no" class="col-md-5">Request Number</label>
                                                <div class="col-md-7">
                                                    <input type="text" name="request_no" class="form-control" value="" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="request_type" class="col-md-5">Request Type</label>
                                                <div class="col-md-7">
                                                    <select id="request_type" class="form-control" required name="request_type"><option value="" selected="selected">-</option><option value="BT">Business Trip</option><option value="GE">General Expenses</option><option value="ME">Medical Expenses</option></select>
                                                </div>
                                            </div>
                                            <div class="form-group" id="cash_advance_container">
                                                <label for="cash_advance_id" class="col-md-5">Cash Advance No</label>
                                                <div class="col-md-7">
                                                    <select id="js-cash-advance-id" class="form-control select2" name="cash_advance_id"><option value="" selected="selected"></option></select>
                                                </div>
                                            </div>
                                            <div class="form-group" id="cash_advance_amount_container">
                                                <label for="cash_advance_amount" class="col-md-5">Cash Advance Amount</label>
                                                <div class="col-md-7">
                                                    <input type="text" name="cash_advance_amount" id="js-cash-advance-amount" class="form-control text-right" value="0" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group" id="medical_limit_container">
                                                <label for="medical_limit_amount" class="col-md-5">Medical Limit Amount</label>
                                                <div class="col-md-7">
                                                    <input id="medical_limit_amount" class="form-control" readonly name="medical_limit_amount" type="text">																									
                                                </div>
                                            </div>
                                            <div class="form-group" id="plafond">
                                                <label for="plafond_id" class="col-md-5">Plafond</label>
                                                <div class="col-md-7">
                                                    <select id="plafond_id" class="form-control select2" name="plafond_id"></select>
                                                </div>
                                            </div>										
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="employee_id" class="col-md-4">Name</label>
                                                <div class="col-md-8">
                                                    <select id="employee_id" class="form-control select2 js-employee-id" required name="employee_id"><option value="">-- Select --</option><option value="1" selected="selected">[E0001] JON SNOW</option><option value="2">[E0002] SAMWELL TARLY</option><option value="3">[E0003] DAENERYS TARGARYEN</option><option value="4">[E0004] PAUL ATREIDES</option><option value="5">[E0005] FEYD-RAUTHA HARKONNEN</option><option value="6">[E0006] VEROSHA ANISEYA</option><option value="542">[ASN230173] Andre Ramdhani</option><option value="543">[ASN230324] Pui Thian Loi</option></select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="employee_position" class="col-md-4">Position</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="employee_position" id="employee_position" class="form-control" value="Job Position 01" readonly>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="erf_department_code" class="col-md-4">Department</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="employee_department" id="employee_department" class="form-control" value="Department 01" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group" id="reference_type_container">
                                                <label for="reference_type" class="col-md-4">Reference Type</label>
                                                <div class="col-md-8">
                                                    <select id="reference_type" class="form-control select2 js-reference-type" name="reference_type"><option value="">No Reference</option><option value="BTR">Business Trip</option></select>
                                                </div>
                                            </div>
                                            <div class="form-group" id="reference_container">
                                                <label for="reference_id" class="col-md-4">Reference Number</label>
                                                <div class="col-md-8">
                                                    <select id="reference_id" class="form-control select2 js-reference-id" name="reference_id"></select>
                                                </div>
                                            </div>
                                            <div class="form-group" id="medical_balance_container">
                                                <label for="medical_balance_amount" class="col-md-4">Medical Balance Amount</label>
                                                <div class="col-md-8">
                                                    <input id="medical_balance_amount" class="form-control" readonly name="medical_balance_amount" type="text">																									
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="card mb-4" style="border-color: #26d496">
                                    <div class="card-header" style="background-color: #26d496">
                                        <span style="font-weight: bold;">Details</span>
                                    </div>
                                    <div class="card-body table-responsive">
                                            <table id="list-reimbursementitem" class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th width="10%">Date</th>
                                                        <th width="30%">Description</th>
                                                        <th width="35%">Details</th>
                                                        <th width="20%" class="text-right">Amount</th>
                                                        <th width="5%"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="date" name="reimbursementitem_date[]" class="form-control" required></td>
                                                        <td>
                                                            <select class="form-control select2 js-cost-code" required name="reimbursementitem_cost_code[]"><option value="" selected="selected">-</option><option value="6005">6005 - Allowance - Travel</option><option value="6008">6008 - Allowance - Car</option><option value="6009">6009 - Allowance - Relocation</option><option value="6011">6011 - Allowance - Other</option><option value="6033">6033 - Medical expenses</option><option value="6034">6034 - Medical examinations (MCU)</option><option value="6040">6040 - Domestic Travel - Airfares</option><option value="6041">6041 - Domestic Travel - Accomodation</option><option value="6042">6042 - Domestic Travel - Other</option><option value="6043">6043 - International Travel - Airfares</option><option value="6044">6044 - International Travel - Accomodation</option><option value="6045">6045 - International Travel - Other</option><option value="6054">6054 - Employee Donation</option><option value="6055">6055 - Training and seminars</option><option value="6118">6118 - Consultant Financial</option><option value="6119">6119 - Consultant IT</option><option value="6121">6121 - Consultant General</option><option value="6139">6139 - Vehicles maintenance</option><option value="6152">6152 - Legal fees</option><option value="6156">6156 - Electricity-Energy</option><option value="6158">6158 - Subscription</option><option value="6159">6159 - Stationery</option><option value="6160">6160 - Stamp Duties</option><option value="6161">6161 - Printing</option><option value="6162">6162 - Office Supplies</option><option value="6163">6163 - Transportation</option><option value="6164">6164 - Meeting Expenses</option><option value="6165">6165 - Roadshows, conference seminars</option><option value="6166">6166 - Vehicles - fuel toll parking</option><option value="6169">6169 - Telephone and mobile phone</option><option value="6170">6170 - Internet</option><option value="6175">6175 - Entertainment</option><option value="6178">6178 - Advertising / Promotional Expenses</option><option value="6180">6180 - Donations</option><option value="6331">6331 - IT consumeables</option><option value="6057">6057 - FIFO - Airfares</option><option value="6058">6058 - FIFO - Accommodation</option><option value="6059">6059 - FIFO - Other</option><option value="6143">6143 - Air freight</option><option value="6124">6124 - Assay</option><option value="8000">8000 - Bank charges</option><option value="6502">6502 - Building maintenance</option><option value="6305">6305 - Camp / Messing  supplies</option><option value="6001">6001 - Casual labour porter</option><option value="6176">6176 - Community - Development Project</option><option value="6125">6125 - Drilling</option><option value="6318">6318 - Drilling consumables</option><option value="6020">6020 - Employee Wellness</option><option value="6320">6320 - Environmental rehab supplies</option><option value="6323">6323 - Food &amp; Beverages</option><option value="6325">6325 - Gasoline fuel - usage</option><option value="6327">6327 - Geological / Field Supplies</option><option value="8002">8002 - Interest on bank accounts</option><option value="8001">8001 - Interest on term deposit</option><option value="6100">6100 - Land Compensation</option><option value="6142">6142 - Land freight</option><option value="6148">6148 - Lease of Equipment</option><option value="6146">6146 - Lease of heavy vehicles</option><option value="6147">6147 - Lease of light vehicles</option><option value="6149">6149 - Lease of real property - Rent</option><option value="6145">6145 - Lease of tractor/excavator</option><option value="1607">1607 - Low Value Asset</option><option value="6334">6334 - Medical Supplies</option><option value="6527">6527 - Occupational health and safety</option><option value="8200">8200 - Other Income</option><option value="6012">6012 - Over time</option><option value="6144">6144 - Shipping freight</option><option value="6140">6140 - Software maintenance</option><option value="8003">8003 - Tax of bank interests</option><option value="6174">6174 - Uniform</option><option value="6524">6524 - Uniform &amp; Safety Equipment</option><option value="1321">1321 - VAT In - Onshore</option><option value="6000">6000 - Wages &amp; Salaries</option><option value="6050">6050 - Travel Meals</option></select>
                                                        </td>
                                                        <td><input type="text" name="reimbursementitem_details[]" class="form-control" required></td>
                                                        <td><input type="text" name="reimbursementitem_amount[]" class="form-control js-amount text-right" required></td>
                                                        <td><a href="javascript:void(0)" class="text-danger btn-delete-reimbursementitem"><i class="fa fa-sm fa-times"></i></a></td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                          <td colspan="6" align="center">
                                                              <button type="button" class="btn btn-sm btn-defaut" id="btn-add-new-reimbursementitem">Add New Line</button>
                                                          </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total</th>
                                                        <th></th>
                                                        <th></th>
                                                        <th>
                                                            <input type="text" value="0" class="form-control text-right js-total" readonly>
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="3">Refund/(Reimburse)</th>
                                                        <th>
                                                            <input type="text" value="0" class="form-control text-right js-remain" readonly>
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                    </div>
                                </div>

                                <div class="card mb-4" style="border-color: #26d496">
                                    <div class="card-header" style="background-color: #26d496">
                                        <span style="font-weight: bold;">Remarks</span>

                                    </div>
                                    <div class="card-body">
                                        <textarea rows="3" class="form-control" name="remarks" cols="50"></textarea>
                                    </div>
                                </div>
    
                                <div class="card mb-4" style="border-color: #26d496">
                                    <div class="card-header" style="background-color: #26d496">
                                        <span style="font-weight: bold;">Attachments</span>

                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                              <input type="file" name="file_1" id="file_1" class="form-control-file js-file" style="margin-bottom: 5px;" required>
                                              <a href="javascript:void(0);" style="margin-left: 5px;" class="text-success btn-add-file">
                                                <i class="fa fa-lg fa-plus"></i>
                                              </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            <div class="box-footer">
                                <a href="https://terrafm.dev.akseshr.com/transaction/reimbursement" class="btn btn-default"> Back </a>
                                {{-- <input class="btn btn-success pull-right" type="submit" value="Submit"> --}}
                                <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm submit">Submit</a>
                                {{-- <a href="#" class="btn btn-success float-end" onclick="document.getElementById('submitBtn').submit();">Submit</a> --}}

                            </div>
                        </form>
                        
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection

