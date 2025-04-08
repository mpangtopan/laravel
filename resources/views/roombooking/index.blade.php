@extends('layouts.main')

@section('content')
<div class="card-header" style="font-style:italic"><h3 class="mt-0 p-3">Room Booking</h3></div>
<div class="card">
    <div class="card-header">
        <h2 class="mt-0">
            <a href="#collapseExample" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn-filter btn-sm bg-olive waves-effect waves-themed">
                <span class="fa-solid fa-filter"></span> Advance Search (Filtered)
            </a>
        </h2>
        <div class="panel-content">
            <!-- advance search -->
            <div class="collapse" id="collapseExample">
                <div id="searchForm" name="searchForm" method="POST">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-md-6">
                                
                                    <label for="no" >Room Booking No.</label>
                                    <input id="booking_no" class="form-control" name="booking_no" type="text" value="">
                                    
                                    {{-- <label class="control-label" style="text-align: left;" for="date_range">Date</label>
                                    <input id="date_range" class="form-control" autocomplete="off" name="date_range" type="text" value=""> --}}
                                    
                                    <label for="request_date">Date</label>
                                    <input id="request_date" class="form-control request_date" data-bv-message="Required" required name="request_date" type="date" value="2025-02-26">
                                    
                                    <label for="room_id" >Employee</label>
                                    <select id="employee_id" class="form-control" name="employee_id[]"><option value="1">[E0001] JON SNOW</option><option value="2">[E0002] SAMWELL TARLY</option><option value="3">[E0003] DAENERYS TARGARYEN</option><option value="4">[E0004] PAUL ATREIDES</option><option value="5">[E0005] FEYD-RAUTHA HARKONNEN</option></select>
                                    
                                    <label for="status" >Area</label>
                                    <select class="form-control" name="status[]"><option value="Open">Area 1</option><option value="Cancelled">Area 2</option></select>
                                    
                            </div>
                            <div class="col-md-6">
                                    <label for="room_id" >Room</label>
                                    <select id="room_id" class="form-control" name="room_id[]"><option value="2">[R001] - Deluxe</option></select>
                                    
                                    <label for="room_bed_id" >Bed</label>
                                    <select id="room_bed_id" class="form-control" name="room_bed_id[]"><option value="7">[R00101] Bed 1</option><option value="8">[R00102] Bed 2</option><option value="10">[R00103] Bed 3</option></select>
                                    
                                    <label for="remarks" >Remarks</label>
                                    <input id="remarks" class="form-control" name="remarks" type="text" value="">
                                        
                                    <label for="status" >Status</label>
                                    <select class="form-control" name="status[]"><option value="Open">Open</option><option value="Cancelled">Cancelled</option><option value="Completed">Completed</option></select>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div>
                            
                        </div>
                        <div>
                            {{-- <a href="" class="btn-grad-danger btn-sm mb-2 shadow-sm">Close</a> --}}
                            <a href="" class="btn-filter btn-sm mb-2 shadow-sm">Filter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <div class="card-body">
        <div class="row">
            <div class="col-xl-12">
                <div class="table-responsive col-lg p-2">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div>
                            <a href="/roombooking/create" class="btn-grad-primary btn-sm mb-2 shadow-sm"><i class="fa-solid fa-plus"></i> Add New</a>
                            <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm">Mass Cancel</a>
                            <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm">Mass Done</a>
                        </div>
                        <div>
                            <a href="" class="btn-grad-success btn-sm mb-2 shadow-sm">Export</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body p-2 shadow-sm">
                            <div class="table-responsive">
                                <table class="table-striped table-hover table-bordered">
                                    <thead class="bg-bl" style="font-size: 16px">
                                        <tr>
                                            <th><input type="checkbox" id="select-all"></th>
                                            <th>Action</th>
                                            <th data-column-id="id" data-type="numeric" data-visible="false" data-identifier="true">ID</th>
                                            <th data-column-id="booking_no">Booking No.</th>
                                            <th data-column-id="date">Date</th>
                                            <th data-column-id="employee">Employee</th>
                                            <th data-column-id="area">Area</th>
                                            <th data-column-id="room">Room</th>
                                            <th data-column-id="bed">Bed</th>
                                            <th data-column-id="start_date">Start Date</th>
                                            <th data-column-id="end_date">End Date</th>
                                            <th data-column-id="remarks">Remarks</th>
                                            <th data-column-id="status">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" class="row-checkbox"></td>
                                            <td>
                                                <a href="" class="btn-grad-warning shadow-sm btn-sm">View</a>
                                                <a href="" class="btn-grad-danger shadow-sm btn-sm">Delete</a> 
                                            </td>
                                            <td></td>
                                            <td>000000003</td>
                                            <td>2025-02-03</td>
                                            <td>Boby Aditya Aguinda</td>
                                            <td>Area1</td>
                                            <td>[R9] Standard</td>
                                            <td>[NB] Bed NANa</td>
                                            <td>2025-02-03</td>
                                            <td>2025-02-04</td>
                                            <td>tiga</td>
                                            <td>Completed</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="row-checkbox"></td>
                                            <td>
                                                <a href="" class="btn-grad-warning shadow-sm btn-sm">View</a>
                                                <a href="" class="btn-grad-success shadow-sm btn-sm">Edit</a>
                                                <a href="" class="btn-grad-danger shadow-sm btn-sm">Delete</a> 
                                            </td>
                                            <td></td>
                                            <td>000000003</td>
                                            <td>2025-02-03</td>
                                            <td>Boby Aditya Aguinda</td>
                                            <td>Area1</td>
                                            <td>[R9] Standard</td>
                                            <td>[NB] Bed NANa</td>
                                            <td>2025-02-03</td>
                                            <td>2025-02-04</td>
                                            <td>tiga</td>
                                            <td>Open</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="row-checkbox"></td>
                                            <td>
                                                <a href="" class="btn-grad-warning shadow-sm btn-sm">View</a>
                                                <a href="" class="btn-grad-danger shadow-sm btn-sm">Delete</a> 
                                            </td>
                                            <td></td>
                                            <td>000000003</td>
                                            <td>2025-02-03</td>
                                            <td>Boby Aditya Aguinda</td>
                                            <td>Area1</td>
                                            <td>[R9] Standard</td>
                                            <td>[NB] Bed NANa</td>
                                            <td>2025-02-03</td>
                                            <td>2025-02-04</td>
                                            <td>tiga</td>
                                            <td>Canceled</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                     
                </div>               
            </div>           
        </div>        
      </div>
      
      <nav class="p-2" aria-label="Page navigation">
        <ul class="pagination-animated">
          <li><a href="#" aria-label="Previous">&laquo;</a></li>
          <li><a href="#">&lt;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">&gt;</a></li>
          <li><a href="#" aria-label="Next">&raquo;</a></li>
        </ul>
      </nav>   
</div>

@endsection
