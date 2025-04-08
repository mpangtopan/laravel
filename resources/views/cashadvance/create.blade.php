@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Create New - Cash Advance</h3>
    </div>

    <div class="card m-4">
        <div class="card-header">
            <a href="/cashadvance" class="btn-grad-danger btn-sm m-2 shadow-sm">Back to list</a>
        </div>
        <div class="card-body p-4 shadow-sm">
            <section class="content">
                <div class="row">
                    <div class="col">
                        <form method="POST">
                        <div class="card mb-4" style="border-color: #26d496">
                            <div class="box-body">
                                <div class="row form-horizontal ">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="request_date" class="col-md-5">Request Date</label>
                                            <div class="col-md-7">
                                                <input id="request_date" class="form-control request_date" data-bv-message="Required" required name="request_date" type="date" value="2025-03-07">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="request_no" class="col-md-5">Request Number</label>
                                            <div class="col-md-7">
                                                <input type="text" name="request_no" class="form-control" value="" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reference_type" class="col-md-5">Reference Type</label>
                                            <div class="col-md-7">
                                                <select id="reference_type" class="form-control " name="reference_type"><option value="">No Reference</option><option value="BTR">Business Trip</option></select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reference_id" class="col-md-5">Reference Number</label>
                                            <div class="col-md-7">
                                                <select id="reference_id" class="form-control" name="reference_id"></select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="employee_id" class="col-md-4">Name</label>
                                            <div class="col-md-8">
                                                        <select id="employee_id" class="form-control" required name="employee_id"><option value="">-- Select --</option><option value="1" selected="selected">[E0001] JON SNOW</option><option value="2">[E0002] SAMWELL TARLY</option><option value="3">[E0003] DAENERYS TARGARYEN</option><option value="4">[E0004] PAUL ATREIDES</option><option value="5">[E0005] FEYD-RAUTHA HARKONNEN</option></select>
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
                                        <div class="form-group">
                                            <label for="charge_to_id" class="col-md-4">Charge To</label>
                                            <div class="col-md-8">
                                                <select id="charge_to_id" class="form-control" name="charge_to_id"><option value="">-- Select --</option><option value="1" selected="selected">Akses Solusi Nusantara (ASN)</option><option value="2">Testing business unit testing</option><option value="3">Indo Bara Nusantara</option></select>											
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4" style="border-color: #26d496">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="purpose">Purpose</label>
                                                <textarea rows="2" class="form-control" required name="purpose" cols="50"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="amount">Amount</label>
                                                <input class="form-control js-amount" required name="amount" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="event_date">Event Date</label>
                                                <input class="form-control js-event-date" required name="event_date" type="date">
                                            </div>
                                            <div class="form-group">
                                                <label for="settlement_due_date">Settlement Due Date</label>
                                                <input class="form-control js-settlement-due-date" readonly name="settlement_due_date" type="date">
                                            </div>
                                        </div>
                        </div>
                        <div class="card mb-4" style="border-color: #26d496">
                                        <div class="card-header" style="background-color: #26d496">
                                            <span style="font-weight: bold;">Attachments</span>
                                        </div>
                                        <div class="box-body">
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
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <div class="card-footer">
        <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm pull-right">Submit</a>
        </div>
    </div>

@endsection

