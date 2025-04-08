@extends('layouts.main')

@section('content')
<div class="card-header" style="font-style:italic"><h3 class="mt-0 p-3">Department</h3></div>
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
                                <label class="control-label" style="text-align: left;" for="code">Code</label>
                                <input class="form-control" name="code" type="text" value="">
                                <label class="control-label" style="text-align: left;" for="name">Name</label>
                                <input class="form-control" name="name" type="text" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" style="text-align: left;" for="business_unit_id">Business Unit</label>
                                <select class="form-control" name="business_unit_id[]"><option value="1">Akses Solusi Nusantara (ASN)</option><option value="2">Testing business unit testing</option><option value="3">Top Solusion Service</option><option value="4">Indo Bara Nusantara</option></select>
                                <label class="control-label" style="text-align: left;" for="cost_center_ids">Cost Center Code</label>
                                <select class="form-control" name="cost_center_ids[]"><option value="1">C0001</option><option value="2">C0002</option><option value="3">C0003</option><option value="4">C0004</option><option value="5">C0005</option><option value="6">C0006</option><option value="7">C0007</option><option value="8">C0008</option><option value="9">C0009</option><option value="10">C0010</option><option value="11">C0011</option><option value="12">C0012</option><option value="13">C0013</option><option value="14">C0014</option><option value="15">C0015</option><option value="16">C0016</option><option value="17">C0017</option><option value="18">C0018</option></select>
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
                            <a href="/systemsetting/company/department/create" class="btn-grad-primary btn-sm mb-2 shadow-sm"><i class="fa-solid fa-plus"></i> Add New</a>
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
                                            <th data-column-id="commands" data-width="15%" data-formatter="commands" data-align="center"
                                                data-header-align="center" data-sortable="false">Action</th>
                                            <th data-column-id="code">Code</th>
                                            <th data-column-id="code">Name</th>
                                            <th data-column-id="name">Business Unit</th>
                                            <th data-column-id="name">Cost Center Code</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm">
                                        <tr>
                                            <td>
                                                <a href="" class="btn-grad-success shadow-sm btn-sm">Edit</a>
                                                <a href="" class="btn-grad-danger shadow-sm btn-sm">Delete</a> 
                                            </td>
                                            <td>D0001</td>
                                            <td>IT</td>
                                            <td>Akses Solusi Nusantara (ASN)</td>
                                            <td>C0001</td>
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
