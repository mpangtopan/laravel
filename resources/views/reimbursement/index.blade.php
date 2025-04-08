@extends('layouts.main')

@section('content')
<div class="card-header" style="font-style:italic"><h3 class="mt-0 p-3">Reimbursement</h3></div>
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
                                    <label>Business Unit</label>
                                    <select class="form-control"><option value="1">Akses Solusi Nusantara (ASN)</option><option value="2">Akses Solusi Nusantara (ASN)</option></select>
                                      
                                    <label for="department_id">Department</label>
                                    <select class="form-control"><option value="1">Department 01</option><option value="2">Department 02</option></select>
                                    
                                    <label class=" control-label">Request No.</label>
                                    <input id="request_no" class="form-control" name="request_no" type="text" value="">
                                    
                                    <label class=" control-label" style="text-align: left;" for="code">Code</label>
                                    <input id="code" class="form-control" name="code" type="text" value="">
                                    
                                    <label class=" control-label" style="text-align: left;" for="name">Name</label>
                                    <input id="name" class="form-control" name="name" type="text" value="">
                                        
                                    <label class=" control-label" style="text-align: left;" for="date_range">Request Date</label>                                    
                                    <input id="date_range" class="form-control" autocomplete="off" name="date_range" type="text" value="">
                                                              
                            </div>
                            <div class="col-md-6">                                
                                    <label class=" control-label" style="text-align: left;" for="requestor_name">Requestor Name</label>
                                    <input id="requestor_name" class="form-control" name="requestor_name" type="text" value="">

                                    <label class=" control-label" style="text-align: left;" for="amount">Requested Amount</label>
                                    <input class="form-control" id="amount" name="amount" type="text" value="">

                                    <label class=" control-label" style="text-align: left;" for="amount_approved">Approved Amount</label>
                                    <input class="form-control" id="amount_approved" name="amount_approved" type="text" value="">
                                
                                    <label for="status" class="">Status</label>
                                    <select class="form-control "><option value="WAITING_APPROVAL">WAITING_APPROVAL</option><option value="COMPLETED">COMPLETED</option><option value="REJECTED">REJECTED</option></select>
                                
                                    
                                    <label class=" control-label" style="text-align: left;" for="next_action">Next Action</label>
                                    <input id="next_action" class="form-control" name="next_action" type="text" value="">
                                    
                                    <label class=" control-label" style="text-align: left;" for="next_user_id">Next User</label>
                                    <select id="next_user_id" class="form-control "><option value="1">Jon Snow</option><option value="4">Paul Atreides</option><option value="1030">Wu Yinglin</option><option value="1032">Li Jianjun</option></select>  
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
                            <a href="/reimbursement/create" class="btn-grad-primary btn-sm mb-2 shadow-sm"><i class="fa-solid fa-plus"></i> Add New</a>
                            <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm">My Request</a>
                            <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm">My Approval</a>
                            <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm">My History</a>
                            <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm">Monitor</a>
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
                                            <th data-column-id="commands" data-formatter="commands" data-align="center" data-header-align="center" data-sortable="false">Action</th>
                                            <th data-column-id="request_date" data-css-class="nowrap" data-order="desc">Request Date</th>
                                            <th data-column-id="request_no" data-css-class="nowrap">Request No.</th>
                                            <th data-column-id="employee_code" data-header-css-class="nowrap">Employee Code</th>
                                            <th data-column-id="employee_name" data-header-css-class="nowrap">Employee Name</th>
                                            <th data-column-id="total" data-header-css-class="nowrap" data-formatter="total" data-align="right" data-header-align="right">Requested Amount</th>
                                            <th data-column-id="total_approved" data-header-css-class="nowrap" data-formatter="total_approved" data-align="right" data-header-align="right">Approved Amount</th>
                                            <th data-column-id="requestor_name" data-header-css-class="nowrap">Requestor Name</th>
                                            <th data-column-id="status">Status</th>
                                            <th data-column-id="next_action" data-header-css-class="nowrap">Next Action</th>
                                            <th data-column-id="next_user" data-header-css-class="nowrap">Next User</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm">
                                        <tr>
                                            <td><a href="" class="btn-grad-warning shadow-sm btn-sm">
                                                View
                                                </a></td>
                                            <td>2025-03-25</td>
                                            <td>000000018</td>
                                            <td>E0001</td>
                                            <td>JON SNOW</td>
                                            <td>400000</td>
                                            <td>400000</td>
                                            <td>Jon Snow</td>
                                            <td>WAITING_APPROVAL</td>
                                            <td>APPROVAL LEVEL 1</td>
                                            <td>Daenerys Targaryen</td>
                                        </tr>
                                        <tr>
                                            <td><a href="" class="btn-grad-warning shadow-sm btn-sm">
                                                View
                                                </a></td>
                                            <td>2025-03-25</td>
                                            <td>000000018</td>
                                            <td>E0002</td>
                                            <td>JON SNOW</td>
                                            <td>400000</td>
                                            <td>400000</td>
                                            <td>Jon Snow</td>
                                            <td>WAITING_APPROVAL</td>
                                            <td>APPROVAL LEVEL 1</td>
                                            <td>Daenerys Targaryen</td>
                                        </tr>
                                        <tr>
                                            <td><a href="" class="btn-grad-warning shadow-sm btn-sm">
                                                View
                                                </a></td>
                                            <td>2025-03-25</td>
                                            <td>000000018</td>
                                            <td>E0003</td>
                                            <td>JON SNOW</td>
                                            <td>400000</td>
                                            <td>400000</td>
                                            <td>Jon Snow</td>
                                            <td>WAITING_APPROVAL</td>
                                            <td>APPROVAL LEVEL 1</td>
                                            <td>Daenerys Targaryen</td>
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
