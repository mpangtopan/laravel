@extends('layouts.main')

@section('content')
<div class="card-header" style="font-style:italic"><h3 class="mt-0 p-3">Unit Schedules</h3></div>
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
                                <label class="col-sm-4 control-label">Vehicle Code</label>
                                <input class="form-control" type="text" value="">
                                    
                                <label class="col-sm-4 control-label">Vehicle Type</label>
                                <select class="form-control"><option>LV</option><option>MPV</option><option>Bus</option></select>
                                
                                <label class="col-sm-4 control-label">Vehicle Name</label>
                                <input class="form-control" type="text" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-4 control-label">Schedule Type</label>
                                <select class="form-control"><option>Weekly</option><option>Monthly</option><option>Yearly</option></select>
                                <label class="col-sm-4 control-label">Due Date</label>
                                <input class="form-control request_date" type="date" value="">         

                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div></div>
                        <div>
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
                            <a href="/precheck/unit/schedule/create" class="btn-grad-primary btn-sm mb-2 shadow-sm"><i class="fa-solid fa-plus"></i> Add New</a>
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
                                            <th>Vehicle Code</th>
                                            <th>Vehicle Type</th>
                                            <th>Vehicle Name</th>
                                            <th>Schedule Type</th>
                                            <th>Due Date</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm">
                                        <tr>
                                            <td>001</td>
                                            <td>LV</td>
                                            <td>Sabrina</td>
                                            <td>Weekly</td>
                                            <td>2025-04-01</td>
                                        </tr>
                                        <tr>
                                            <td>001</td>
                                            <td>LV</td>
                                            <td></td>
                                            <td>Weekly</td>
                                            <td>2025-05-01</td>
                                        </tr>
                                        <tr>
                                            <td>002</td>
                                            <td>MPV</td>
                                            <td></td>
                                            <td>Monthly</td>
                                            <td>2025-04-07</td>
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
