@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Create New - Trasportation</h3>
    </div>

    <div class="card m-4">
        <div class="card-header">
            <a href="/transportation" class="btn-grad-danger btn-sm m-2 shadow-sm">Back to list</a>
        </div>
        <div class="card-body p-4 shadow-sm">

            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        
                            <form method="POST" action="https://hris.dev.akseshr.com/transaction/cash_advance" accept-charset="UTF-8" class="" enctype="multipart/form-data"><input name="_token" type="hidden" value="SJDehEdk4AoHMSdt6sVhem1d7w9Bv0YfCw5CUrus">
                            <input type="hidden" name="_token" value="SJDehEdk4AoHMSdt6sVhem1d7w9Bv0YfCw5CUrus">
                                    <div class="card mb-4" style="border-color: #26d496">
                                        <div class="card-body">
                                            <div class="row form-horizontal ">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="no" class="col-md-4">Transportation No.</label>
                                                        <div class="col-md-8">
                                                            <input class="form-control" readonly name="no" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="date" class="col-md-4">Date</label>
                                                        <div class="col-md-8">
                                                            <input class="form-control" required name="date" type="date">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vehicle_id" class="col-md-4">Vehicle</label>
                                                        <div class="col-md-8">
                                                            <select class="form-control select2" id="vehicle_id" required name="vehicle_id"><option value="1">[B909] - Sabrina</option></select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="driver1_id" class="col-md-4">Primary Driver</label>
                                                        <div class="col-md-8">
                                                            <select class="form-control select2" id="driver1_id" required name="driver1_id"><option value="" selected="selected">--Select Driver Primary--</option><option value="1">[D1] - Supri</option><option value="2">[D2] - Jajang</option><option value="3">[D09] - Harijo</option></select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="driver2_id" class="col-md-4">Secondary Driver</label>
                                                        <div class="col-md-8">
                                                            <select class="form-control select2" id="driver2_id" name="driver2_id"><option value="" selected="selected">--Select Driver Secondary--</option><option value="1">[D1] - Supri</option><option value="2">[D2] - Jajang</option><option value="3">[D09] - Harijo</option></select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-4">User</label>
                                                        <div class="col-md-8">
                                                            <select class="form-control select2"><option value="1">Jon Snow</option><option value="2">Samwell Tarly</option><option value="3">Daenerys Targaryen</option><option value="4">Paul Atreides</option><option value="5">Feyd-Rautha Harkonnen</option><option value="6">Verosha Aniseya</option><option value="7">Andre Ramdhani</option></select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-4" style="border-color: #26d496">
                                        <div class="card-header" style="background-color: #26d496">
                                            <span style="font-weight: bold;">Passenger Details</span>
                                            <!-- Tombol Search Passenger -->
                                            <button type="button" class="btn btn-info btn-xs pull-right" id="searchPassenger" data-toggle="modal" data-target="#searchPassengerModal">
                                                <i class="fa fa-search"></i> Search Passenger
                                            </button>
                                        </div>
                                        
                                        <div class="card">                                            
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table-bordered table-striped table-hover" id="passengerDetailsTable">
                                                        <thead>
                                                            <tr>
                                                                <th>Type</th>
                                                                <th>Name</th>
                                                                <th>Job Position</th>
                                                                <th>Company</th>
                                                                <th>From</th>
                                                                <th>To</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                                    <!-- Data penumpang akan dimasukkan di sini oleh JavaScript -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                            </form>
                    </div>
                </div>
        </section>
        <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm pull-right">Submit</a>
        </div>
    </div>

@endsection

