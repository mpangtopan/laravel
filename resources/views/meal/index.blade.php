@extends('layouts.main')

@section('content')
<div class="card-header" style="font-style:italic"><h3 class="mt-0 p-3">Meal Order Management</h3></div>
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
                                    <label for="order_no" class="col-sm-4">Order No.</label>
                                    <input id="order_no" class="form-control" name="order_no" type="text" value="">
                               
                                    <label class="col-sm-4 control-label" style="text-align: left;" for="date_range">Date</label>
                                    <input id="date_range" class="form-control" autocomplete="off" name="date_range" type="text" value="">
                            </div>
                        
                            <div class="col-md-6">
                                    <label for="status" class="col-sm-4">Status</label>
                                    <select class="form-control " name="status[]"><option value="Open">Open</option><option value="Cancelled">Cancelled</option><option value="Completed">Completed</option></select>
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
                            <a href="/meal/create" class="btn-grad-primary btn-sm mb-2 shadow-sm"><i class="fa-solid fa-plus"></i> Add New</a>
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
                                <table class="table-striped table-hover table-bordered" style="width: 100%">
                                    <thead class="bg-bl" style="font-size: 16px">
                                        <tr>
                                            <th data-column-id="id" data-type="numeric" data-width="5%" data-align="center" 
                data-header-align="center" data-sortable="false">
                <input type="checkbox" id="select-all"></th>
                                            <th data-column-id="commands" data-width="15%" data-formatter="commands" data-align="center"
                                            data-header-align="center" data-sortable="false">Action</th>
                                            <th data-column-id="order_no">Order No.</th>
                                            <th data-column-id="order_date">Order Date</th>
                                            <th data-column-id="status">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm">
                                        <tr>
                                            <td><input type="checkbox" class="row-checkbox"></td>
                                            <td>
                                                <a href="" class="btn-grad-warning shadow-sm btn-sm">View</a>
                                                <a href="" class="btn-grad-success shadow-sm btn-sm">Edit</a>
                                                <a href="" class="btn-grad-danger shadow-sm btn-sm">Delete</a> 
                                            </td>
                                            <td>000000009</td>
                                            <td>21-03-2025</td>
                                            <td>open</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="row-checkbox"></td>
                                            <td>
                                                <a href="" class="btn-grad-warning shadow-sm btn-sm">View</a>
                                                <a href="" class="btn-grad-danger shadow-sm btn-sm">Delete</a> 
                                            </td>
                                            <td>000000008</td>
                                            <td>11-02-2025</td>
                                            <td>completed</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="row-checkbox"></td>
                                            <td>
                                                <a href="" class="btn-grad-warning shadow-sm btn-sm">View</a>
                                                <a href="" class="btn-grad-danger shadow-sm btn-sm">Delete</a> 
                                            </td>
                                            <td>000000005</td>
                                            <td>11-02-2025</td>
                                            <td>canceled</td>
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
