@extends('layouts.main')

@section('content')
<div class="card-header" style="font-style:italic"><h3 class="mt-0 p-3">Data Transaction - Unit</h3></div>
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
                                <label class="col-sm-4">Transaction Date</label>
                                <input class="form-control" type="date" value=""> 

                                <label class="col-sm-4">Vehicle Code</label>
                                <input class="form-control" type="text" value="">
                                    
                                <label class="col-sm-4">Vehicle Type</label>
                                <input class="form-control" type="text" value="">

                                <label class="col-sm-4">Vehicle Name</label>
                                <input class="form-control" type="text" value="">

                            </div>
                            <div class="col-md-6">
                                <label class="col-md-4">Driver</label>
                                <select class="form-control"><option value="">-- Select --</option><option value="1" selected="selected">[E0999] Budi Budiman</option><option value="2">[E0123] Iwan Darmawan</option></select>
                                
                                <label class="col-sm-4">Status</label>
                                <input class="form-control" type="text" value="">  

                                <label class="col-md-4">Precheck Type</label>
                                <select class="form-control"><option>Weekly</option><option>Monthly</option><option>Yearly</option></select>
                                
                                <label class="col-sm-4">Description</label>
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
                            <a href="/precheck/unit/transaction/create" class="btn-grad-primary btn-sm mb-2 shadow-sm"><i class="fa-solid fa-plus"></i> Add New</a>
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
                                            <th data-width="15%" data-formatter="commands" data-align="center" data-header-align="center" data-sortable="false">Action</th>
                                            <th>Transaction Date</th>
                                            <th>Vehicle Code</th>
                                            <th>Vehicle Type</th>
                                            <th>Vehicle Name</th>
                                            <th>Driver</th>
                                            <th>Status</th>
                                            <th>Precheck Type</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm">
                                        <tr>
                                            <td>
                                                <a href="" class="btn-grad-success shadow-sm btn-sm">Edit</a>
                                                <a href="/precheck/unit/transaction/detail" class="btn-grad-info shadow-sm btn-sm">Detail</a> 
                                            </td>
                                            <td>2025-04-07</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Weekly</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="" class="btn-grad-success shadow-sm btn-sm">Edit</a> 
                                                <a href="/precheck/unit/transaction/detail" class="btn-grad-info shadow-sm btn-sm">Detail</a> 
                                            </td>
                                            <td>2025-05-10</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Weekly</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="" class="btn-grad-success shadow-sm btn-sm">Edit</a> 
                                                <a href="/precheck/unit/transaction/detail" class="btn-grad-info shadow-sm btn-sm">Detail</a> 
                                            </td>
                                            <td>2025-04-07</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Monthly</td>
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
