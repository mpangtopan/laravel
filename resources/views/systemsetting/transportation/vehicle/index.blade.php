@extends('layouts.main')

@section('content')
<div class="card-header" style="font-style:italic"><h3 class="mt-0 p-3">Vehicle</h3></div>
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
                <div name="searchForm" method="POST">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-sm-4 control-label">Code</label>
                                <input class="form-control" type="text" value="">
                                <label class="col-sm-4 control-label">Name</label>
                                <input class="form-control" type="text" value="">
                                <label class="col-sm-4 control-label">Type</label>
                                <input class="form-control" type="text" value="">
                                <label class="col-sm-4 control-label">Type</label>
                                <input class="form-control" type="text" value="">
                                <label class="col-sm-4 control-label">Type</label>
                                <input class="form-control" type="text" value="">
                                <label class="col-sm-4 control-label">Type</label>
                                <input class="form-control" type="text" value="">
                                <label class="col-sm-4 control-label">Type</label>
                                <input class="form-control" type="text" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-4 control-label">Code</label>
                                <input class="form-control" type="text" value="">
                                <label class="col-sm-4 control-label">Name</label>
                                <input class="form-control" type="text" value="">
                                <label class="col-sm-4 control-label">Type</label>
                                <input class="form-control" type="text" value="">
                                <label class="col-sm-4 control-label">Type</label>
                                <input class="form-control" type="text" value="">
                                <label class="col-sm-4 control-label">Type</label>
                                <input class="form-control" type="text" value="">
                                <label class="col-sm-4 control-label">Type</label>
                                <input class="form-control" type="text" value="">
                                <label class="col-sm-4 control-label">Type</label>
                                <input class="form-control" type="text" value="">
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
                            <a href="/systemsetting/transportation/vehicle/create" class="btn-grad-primary btn-sm mb-2 shadow-sm"><i class="fa-solid fa-plus"></i> Add New</a>
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
                                            <th>Action</th>
                                            <th>Code</th>
                                            <th>Name</th>
                                            <th>Transport Type</th>
                                            <th>Type</th>
                                            <th>Capacity</th>
                                            <th>Location</th>
                                            <th>Plat Number</th>
                                            <th>Manufacture</th>
                                            <th>Last Service</th>
                                            <th>KM/MH</th>
                                            <th>Life Span</th>
                                            <th>Acquisition Date</th>
                                            <th>Insurance Number</th>
                                            <th>Insurance Start Date</th>
                                            <th>Insurance Exp. Date</th>
                                            <th>Precheck Type</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm">
                                        <tr>
                                            <td>
                                                <a href="" class="btn-grad-success shadow-sm btn-sm">Edit</a>
                                                <a href="" class="btn-grad-danger shadow-sm btn-sm">Delete</a> 
                                            </td>
                                            <td>B909</td>
                                            <td>Sabrina</td>
                                            <td>Land</td>
                                            <td>Bus</td>
                                            <td>30</td>
                                            <td></td>
                                            <td>AE 3456 KS</td>
                                            <td>M09</td>
                                            <td>07-12-2024</td>
                                            <td>873900</td>
                                            <td>10</td>
                                            <td>07-12-2024</td>
                                            <td>98043490394</td>
                                            <td>03-01-2025</td>
                                            <td>11-01-2025</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="" class="btn-grad-success shadow-sm btn-sm">Edit</a>
                                                <a href="" class="btn-grad-danger shadow-sm btn-sm">Delete</a> 
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
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
