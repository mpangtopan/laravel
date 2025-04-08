@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Create New - Room</h3>
    </div>

    <div class="card m-4">
        <div class="card-header">
            <a href="/systemsetting/room/room" class="btn-grad-danger btn-sm m-2 shadow-sm">Back to list</a>
        </div>
        <div class="card-body p-4 shadow-sm">
            <section class="content">
                <form method="POST" action="" accept-charset="UTF-8"><input name="" type="hidden" value="">
                    <input type="hidden" name="" value="">
                        <div class="card mb-4" style="border-color: #26d496">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                                <label for="code">Code</label>
                                                <input class="form-control" placeholder="Enter room code" id="code" required name="code" type="text">
                                            
                                                <label for="type">Type</label>
                                                <select class="form-control" id="type" required name="type"><option value="Standard">Standard</option><option value="Superior">Superior</option><option value="Deluxe">Deluxe</option></select>
                                            
                                                <label for="gender">Gender</label>
                                                <select class="form-control" id="gender" required name="gender"><option value="M">Male</option><option value="F">Female</option></select>
                                            
                                                <label for="room_area_id">Room Area</label>
                                                <select class="form-control" id="room_area_id" required name="room_area_id"><option value="1">Jasmine</option><option value="3">Rose</option></select>
                                                
                                    </div>
                                    <div class="col-md-6">
                                                <label for="maximum_capacity">Maximum Capacity</label>
                                                <input class="form-control" placeholder="Enter maximum capacity" id="maximum_capacity" required name="maximum_capacity" type="number">
                                            
                                                <label for="status">Status</label>
                                                <select class="form-control" id="status" required name="status"><option value="Available">Available</option><option value="On Maintenance">On Maintenance</option></select>
                                                
                                            <!-- Field Photo -->
                                                <label for="photo">Photo</label>
                                                <input class="form-control" name="photo" type="file">
                                                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header" style="background-color: #26d496">
                                <span style="font-weight: bold;">Beds And Facilities</span>
                            </div>
                                <div class="card-body">
                                    <div class="nav-tabs-custom tab-success">
                                        <!-- Tabs Navigation -->
                                        <ul class="nav nav-tabs" style="font-weight: bold;">
                                            <li class="active"><a href="#beds" data-toggle="tab">Beds</a></li>
                                            <li><a href="#facilities" data-toggle="tab">Facilities</a></li>
                                        </ul>
                                        <!-- Tab Content -->
                                        <div class="tab-content">
                                            <!-- Beds Tab -->
                                            <div class="tab-pane active" id="beds">
                                                    <table id="beds-table" class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 100px;">Code</th>
                                                                <th>Description</th>
                                                                <th>Photo</th>
                                                                <th style="width: 100px;">Grade</th>
                                                                <th style="width: 150px;">Owner</th>
                                                                <th style="width: 150px;">Status</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="beds-table-body">
                                                            <!-- Baris akan ditambahkan secara dinamis dengan JS -->
                                                        </tbody>
                                                    </table>
                                                <button type="button" class="add-row btn btn-default btn-sm">+ Add Row</button>
                                            </div>
    
                                            <!-- Facilities Tab -->
                                            <div class="tab-pane" id="facilities">
                                                <table id="facilities-table" class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 500px;">Facility</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="facilities-table-body">
                                                        <!-- Baris akan ditambahkan secara dinamis dengan JS -->
                                                    </tbody>
                                                </table>
                                                <button type="button" class="add-row-facility btn btn-default btn-sm">+ Add Row</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </form>
            </section>
        <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm">Create</a>
        </div>
    </div>

@endsection

