@extends('layouts.main')

@section('content')
<div class="card-header" style="font-style:italic"><h3 class="mt-0 p-3"> Travel Request Report</h3></div>

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
                                        <!-- Date range -->
                                        <div class="form-group">
                                            <label>Request Date</label>
                                            <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="reservation">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form group -->
                                    </div>
                                    <div class="col-md-6">
                                        <label>Request Location</label>
                                        <input type="text" class="form-control" value=""> 
                                    </div>
                                    <div class="col-md-6">
                                        <label>Request Department</label>
                                        <input type="text" class="form-control" value=""> 
                                    </div>
                                    <div class="col-md-6">
                                        <label>Request Business Unit</label>
                                        <input type="text" class="form-control" value=""> 
                                    </div>
                                    <div class="col-md-6">
                                        <label>Request Purpose</label>
                                        <input type="text" class="form-control" value=""> 
                                    </div>
                                    <div class="col-md-6">
                                        <label>Request Status</label>
                                        <select class="form-control">
                                            <option>COMPLETED</option>
                                            <option>REJECTED</option>
                                            <option>WAITING_APPROVAL</option>
                                        </select>
                                    </div>
                                    
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div></div>
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
                            {{-- <a href="/travelrequest/create" class="btn-grad-primary btn-sm mb-2 shadow-sm"><i class="fa-solid fa-plus"></i> Add New</a>
                            <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm">Request</a>
                            <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm">Approval</a>
                            <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm">History</a> --}}
                        </div>
                        <div>
                            <a href="" class="btn-grad-success btn-sm mb-2 shadow-sm">Print</a>
                            <a href="" class="btn-grad-success btn-sm mb-2 shadow-sm">Export</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body p-2 shadow-sm">
                            <div class="table-responsive">
                                <table class="table-striped table-bordered table-hover">
                                    <thead class="bg-bl" style="font-size: 14px">
                                        <tr>
                                            <th>Request Date</th>
                                            <th>Request No</th>
                                            <th>Request Status</th>
                                            <th>Requestor Name</th>
                                            <th>Job Position</th>
                                            <th>Department</th>
                                            <th>Job Location</th>
                                            <th>Business Unit</th>
                                            <th>Requestor Type</th>
                                            <th>Point Of Hire</th>
                                            <th>Employee ID</th>
                                            <th>ID Card</th>
                                            <th>Phone Number</th>
                                            <th>Lumpsum Amount</th>
                                            <th>Emergency Contact</th>
                                            <th>Request Purpose</th>
                                            <th>Request Start Date</th>
                                            <th>Request End Date</th>
                                            <th>Flight Option</th>
                                            <th>Land Option</th>
                                            <th>Accomodation Option</th>
                                            <th>Cash Advance Option</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm">
                                        <tr>
                                            <td>2025-03-03</td>
                                            <td>001</td>
                                            <td>COMPLETED</td>
                                            <td>Jon Snow</td>
                                            <td>Employee</td>
                                            <td>IT</td>
                                            <td>Head Office</td>
                                            <td>IT</td>
                                            <td>Employee</td>
                                            <td>Head Office</td>
                                            <td>EMP001</td>
                                            <td>123456</td>
                                            <td>123456</td>
                                            <td>2025-03-03</td>
                                            <td>Employee</td>
                                            <td>2025-03-03</td>
                                            <td>2025-03-07</td>
                                            <td>Jon Snow</td>
                                            <td>COMPLETED</td>
                                            <td>APPROVAL LEVEL 1</td>
                                            <td>Daenerys Targaryen</td>
                                            <td>2025-02-21 10:26:09</td>
                                        </tr>
                                        <tr>
                                            <td>2025-03-03</td>
                                            <td>001</td>
                                            <td>COMPLETED</td>
                                            <td>Jon Snow</td>
                                            <td>Employee</td>
                                            <td>IT</td>
                                            <td>Head Office</td>
                                            <td>IT</td>
                                            <td>Employee</td>
                                            <td>Head Office</td>
                                            <td>EMP001</td>
                                            <td>123456</td>
                                            <td>123456</td>
                                            <td>2025-03-03</td>
                                            <td>Employee</td>
                                            <td>2025-03-03</td>
                                            <td>2025-03-07</td>
                                            <td>Jon Snow</td>
                                            <td>COMPLETED</td>
                                            <td>APPROVAL LEVEL 1</td>
                                            <td>Daenerys Targaryen</td>
                                            <td>2025-02-21 10:26:09</td>
                                        </tr>
                                        <tr>
                                            <td>2025-03-03</td>
                                            <td>001</td>
                                            <td>COMPLETED</td>
                                            <td>Jon Snow</td>
                                            <td>Employee</td>
                                            <td>IT</td>
                                            <td>Head Office</td>
                                            <td>IT</td>
                                            <td>Employee</td>
                                            <td>Head Office</td>
                                            <td>EMP001</td>
                                            <td>123456</td>
                                            <td>123456</td>
                                            <td>2025-03-03</td>
                                            <td>Employee</td>
                                            <td>2025-03-03</td>
                                            <td>2025-03-07</td>
                                            <td>Jon Snow</td>
                                            <td>COMPLETED</td>
                                            <td>APPROVAL LEVEL 1</td>
                                            <td>Daenerys Targaryen</td>
                                            <td>2025-02-21 10:26:09</td>
                                        </tr>
                                        <tr>
                                            <td>2025-03-03</td>
                                            <td>001</td>
                                            <td>COMPLETED</td>
                                            <td>Jon Snow</td>
                                            <td>Employee</td>
                                            <td>IT</td>
                                            <td>Head Office</td>
                                            <td>IT</td>
                                            <td>Employee</td>
                                            <td>Head Office</td>
                                            <td>EMP001</td>
                                            <td>123456</td>
                                            <td>123456</td>
                                            <td>2025-03-03</td>
                                            <td>Employee</td>
                                            <td>2025-03-03</td>
                                            <td>2025-03-07</td>
                                            <td>Jon Snow</td>
                                            <td>COMPLETED</td>
                                            <td>APPROVAL LEVEL 1</td>
                                            <td>Daenerys Targaryen</td>
                                            <td>2025-02-21 10:26:09</td>
                                        </tr>
                                        <tr>
                                            <td>2025-03-03</td>
                                            <td>001</td>
                                            <td>COMPLETED</td>
                                            <td>Jon Snow</td>
                                            <td>Employee</td>
                                            <td>IT</td>
                                            <td>Head Office</td>
                                            <td>IT</td>
                                            <td>Employee</td>
                                            <td>Head Office</td>
                                            <td>EMP001</td>
                                            <td>123456</td>
                                            <td>123456</td>
                                            <td>2025-03-03</td>
                                            <td>Employee</td>
                                            <td>2025-03-03</td>
                                            <td>2025-03-07</td>
                                            <td>Jon Snow</td>
                                            <td>COMPLETED</td>
                                            <td>APPROVAL LEVEL 1</td>
                                            <td>Daenerys Targaryen</td>
                                            <td>2025-02-21 10:26:09</td>
                                        </tr>
                                        <tr>
                                            <td>2025-03-03</td>
                                            <td>001</td>
                                            <td>COMPLETED</td>
                                            <td>Jon Snow</td>
                                            <td>Employee</td>
                                            <td>IT</td>
                                            <td>Head Office</td>
                                            <td>IT</td>
                                            <td>Employee</td>
                                            <td>Head Office</td>
                                            <td>EMP001</td>
                                            <td>123456</td>
                                            <td>123456</td>
                                            <td>2025-03-03</td>
                                            <td>Employee</td>
                                            <td>2025-03-03</td>
                                            <td>2025-03-07</td>
                                            <td>Jon Snow</td>
                                            <td>COMPLETED</td>
                                            <td>APPROVAL LEVEL 1</td>
                                            <td>Daenerys Targaryen</td>
                                            <td>2025-02-21 10:26:09</td>
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
        <ul class="pagination pagination-animated justify-center">
          <li><a href="#" aria-label="Previous">&laquo;</a></li>
          <li><a href="#">&lt;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">&gt;</a></li>
          <li><a href="#" aria-label="Next">&raquo;</a></li>
        </ul>
      </nav>
</div>
@endsection
