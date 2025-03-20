@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Create New - Room Booking</h3>
    </div>

    <div class="card m-4 col-6">
        <div class="card-header">
            <a href="/" class="btn-grad-danger btn-sm m-2 shadow-sm">Back to list</a>
        </div>
        <div class="card-body p-4 shadow-sm">

            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                            <div class="card mb-4" style="border-color: #26d496">
                                <div class="card-header" style="background-color: #26d496">
                                    <h3>Fill the form</h3>
                                </div>
                                <form method="POST" action="https://hris.dev.akseshr.com/transaction/room_booking" accept-charset="UTF-8"><input name="_token" type="hidden" value="S0RP2aBrZ0R5QrNzpl9bdPeiWv5CtFxiGP6PkAd2">
                                <input type="hidden" name="_token" value="S0RP2aBrZ0R5QrNzpl9bdPeiWv5CtFxiGP6PkAd2">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="booking_no">Booking No.</label>
                                        <input class="form-control" readonly="readonly" name="booking_no" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input class="form-control" name="date" type="date" value="2025-03-10">
                                    </div>
                                    <div class="form-group">
                                        <label for="employee_id">Employee</label>
                                        <select class="form-control select2" id="employee_id" name="employee_id"><option value="" selected="selected">-- Select Employee --</option><option value="1">[E0001] JON SNOW</option><option value="2">[E0002] SAMWELL TARLY</option><option value="3">[E0003] DAENERYS TARGARYEN</option><option value="4">[E0004] PAUL ATREIDES</option></select>
                                    </div>
                                    <div class="form-group">
                                        <label for="business_unit_name">Business Unit</label>
                                        <input id="business_unit_name" class="form-control" readonly="true" name="business_unit_name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="room_id">Room</label>
                                        <select class="form-control select2" id="room_id" name="room_id"><option value="" selected="selected">-- Select Room --</option><option value="2">[R001] </option></select>
                                    </div>
                                    <div class="form-group">
                                        <label for="room_bed_id">Bed</label>
                                        <select class="form-control select2" id="room_bed_id" name="room_bed_id"></select>
                                    </div>
                                    <div class="form-group">
                                        <label for="start_date">Start Date</label>
                                        <input class="form-control" name="start_date" type="date" value="2025-03-10">
                                    </div>
                                    <div class="form-group">
                                        <label for="end_date">End Date</label>
                                        <input class="form-control" name="end_date" type="date" value="2025-03-10">
                                    </div>
                                    <div class="form-group">
                                        <label for="remarks">Remarks</label>
                                        <input class="form-control" rows="3" placeholder="Remarks" name="remarks" type="text">
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm">Submit</a>
                                </div>
                                </form>
                            </div>
                    </div>
                </div>
        </section>
        </div>
    </div>

        
@endsection

