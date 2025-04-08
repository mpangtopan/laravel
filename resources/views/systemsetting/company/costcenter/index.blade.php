@extends('layouts.main')

@section('content')
<div class="card-header" style="font-style:italic"><h3 class="mt-0 p-3">Cost Center</h3></div>
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
                                <label >Code</label>
                                <input class="form-control" name="code" type="text" value="">
                                    
                                <label >Group</label>
                                <input class="form-control" name="group" type="text" value="">
                                
                                <label >Cluster</label>
                                <input class="form-control" name="cluster" type="text" value="">
                                
                                <label >Department</label>
                                <select class="form-control" name="department_id[]"><option value="1">Department 01</option><option value="2">Department 02</option><option value="3">Acid Plant</option><option value="4">Chloride Plant</option><option value="5">Civil &amp; Infrastructure</option><option value="6">Commercial</option><option value="7">Concentrator</option><option value="8">Copper Cathode Plant</option><option value="9">Environment</option><option value="10">External Affair</option><option value="11">General Management</option><option value="12">Health, Safety &amp; Environment</option><option value="13">Human Resource</option><option value="14">Human Resources</option><option value="15">Maintenance</option><option value="16">OHSE</option><option value="17">Pyrite Plant</option><option value="18">Supply Chain Management</option><option value="19">Technical Service</option><option value="20">Management</option><option value="21">ADMIN</option><option value="22">IT</option></select>
                            </div>
                            <div class="col-md-6">  
                                <label>Account (Basic Salary)</label>
                                <input class="form-control" name="account_basic_salary" type="text" value="">
                                
                                <label>Account (Fee)</label>
                                <input class="form-control" name="account_fee" type="text" value="">
                                
                                <label>Account (VAT)</label>
                                <input class="form-control" name="account_vat" type="text" value="">
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
                            <a href="/systemsetting/company/costcenter/create" class="btn-grad-primary btn-sm mb-2 shadow-sm"><i class="fa-solid fa-plus"></i> Add New</a>
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
                                            <th data-column-id="code">Group</th>
                                            <th data-column-id="name">Cluster</th>
                                            <th data-column-id="name">Department</th>
                                            <th data-column-id="name">Account (Basic Salary)</th>
                                            <th data-column-id="name">Account (Fee)</th>
                                            <th data-column-id="name">Account (VAT)</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm">
                                        <tr>
                                            <td>
                                                <a href="" class="btn-grad-success shadow-sm btn-sm">Edit</a>
                                                <a href="" class="btn-grad-danger shadow-sm btn-sm">Delete</a> 
                                            </td>
                                            <td>C0001</td>
                                            <td>HPP</td>
                                            <td>Direct</td>
                                            <td>Acid Plant</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="" class="btn-grad-success shadow-sm btn-sm">Edit</a>
                                                <a href="" class="btn-grad-danger shadow-sm btn-sm">Delete</a> 
                                            </td>
                                            <td>C0002</td>
                                            <td>HPP</td>
                                            <td>Direct</td>
                                            <td>Chloride Plant</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="" class="btn-grad-success shadow-sm btn-sm">Edit</a>
                                                <a href="" class="btn-grad-danger shadow-sm btn-sm">Delete</a> 
                                            </td>
                                            <td>C0003</td>
                                            <td>HPP</td>
                                            <td>Direct</td>
                                            <td>Civil & Infrastructure</td>
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
