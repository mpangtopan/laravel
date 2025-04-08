@extends('layouts.main')

@section('content')
<div class="card-header" style="font-style:italic"><h3 class="mt-0 p-3">Room Cleaning</h3></div>
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
                                <label for="no" >Room Cleaning No.</label>
                                <input id="no" class="form-control" name="no" type="text" value="">

                                <label for="area" >Area</label>
                                <select class="form-control" name="status[]"><option value="Open">Area 1</option><option value="Cancelled">Area 2</option></select>
                                    
                                <label for="room_id" >Room</label>
                                <select id="room_id" class="form-control" name="room_id[]"><option value="2">[R001] - Deluxe</option><option value="3">[R9] - Standard</option></select>
                                    
                            </div>
                            <div class="col-md-6"> 
                                <label for="status" >Status</label>
                                <select class="form-control" name="status[]"><option value="Open">Open</option><option value="On Process">On Process</option><option value="Done">Done</option></select>
                                     
                                <label for="note" >Note</label>
                                <input id="note" class="form-control" name="note" type="text" value="">        
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
                            <a href="/roomcleaning/create" class="btn-grad-primary btn-sm mb-2 shadow-sm"><i class="fa-solid fa-plus"></i> Add New</a>
                            <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm">Mass Process</a>
                            <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm">Mass Done</a>
                        </div>
                        <div>
                            <a href="" class="btn-grad-success btn-sm mb-2 shadow-sm">Export</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body p-2 shadow-sm">
                            <div class="table-responsive">
                                <table class="table-striped table-hover table-bordered" style="width: 100%">
                                    <thead class="bg-bl" style="font-size: 16px">
                                        <tr>
                                            <th><input type="checkbox" id="select-all"></th>
                                            <th data-column-id="commands" data-width="15%" data-formatter="commands" data-align="center"
                                            data-header-align="center" data-sortable="false">Action</th>
                                            <th data-column-id="id" data-type="numeric" data-visible="false" data-identifier="true">ID</th>
                                            <th data-column-id="no">Room Cleaning No.</th>
                                            <th data-column-id="area">Area</th>
                                            <th data-column-id="room_name">Room</th>
                                            <th data-column-id="status">Status</th>
                                            <th data-column-id="note">Note</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" class="row-checkbox"></td>
                                            <td>
                                                <a href="" class="btn-grad-warning shadow-sm btn-sm">View</a>
                                                <a href="" class="btn-grad-success shadow-sm btn-sm">Edit</a>
                                                <a href="" class="btn-grad-danger shadow-sm btn-sm">Delete</a> 
                                            </td>
                                            <td></td>
                                            <td>000000001</td>
                                            <td>Area1</td>
                                            <td>[R001] - Deluxe</td>
                                            <td>On Process</td>
                                            <td>OK</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="row-checkbox"></td>
                                            <td>
                                                <a href="" class="btn-grad-warning shadow-sm btn-sm">View</a>
                                                <a href="" class="btn-grad-danger shadow-sm btn-sm">Delete</a> 
                                            </td>
                                            <td></td>
                                            <td>000000002</td>
                                            <td>Area1</td>
                                            <td>[R001] - Deluxe</td>
                                            <td>Done</td>
                                            <td>OK</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="row-checkbox"></td>
                                            <td>
                                                <a href="" class="btn-grad-warning shadow-sm btn-sm">View</a>
                                                <a href="" class="btn-grad-danger shadow-sm btn-sm">Delete</a> 
                                            </td>
                                            <td></td>
                                            <td>000000001</td>
                                            <td>Area1</td>
                                            <td>[R001] - Deluxe</td>
                                            <td>Done</td>
                                            <td>OK</td>
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
