@extends('layouts.main')

@section('content')
<div class="card-header" style="font-style:italic"><h3 class="mt-0 p-3"> Travel Request</h3></div>
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
                        {{-- <div class="row">
                            <div class=""> --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Business Unit</label>
                                        <input type="text" class="form-control" value=""> 
                                    </div>
                                    <div class="col-md-6">
                                        <label>Department</label>
                                        <input type="text" class="form-control" value=""> 
                                    </div>
                                    <div class="col-md-6">
                                        <label>Status</label>
                                        <input type="text" class="form-control" value=""> 
                                    </div>
                                </div>
                            {{-- </div>
                        </div> --}}
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
                            <a href="/travelrequest/create" class="btn-grad-primary btn-sm mb-2 shadow-sm"><i class="fa-solid fa-plus"></i> Add New</a>
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
                                <table class="table-striped table-bordered table-hover">
                                    <thead class="bg-bl" style="font-size: 14px">
                                        <tr>
                                            <th>Action</th>
                                            <th data-order="desc">Request No</th>
                                            <th>Request Date</th>
                                            <th>Traveler Type</th>
                                            <th>Traveler Name</th>
                                            <th>Purpose</th>
                                            <th>Requestor Name</th>
                                            <th>Status</th>
                                            <th>Next Action</th>
                                            <th>Next User</th>
                                            <th>Last Update</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm">
                                        <tr>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning">
                                                View
                                                </a>
                                                <a href="#" class="btn-grad-info btn-sm">
                                                    Room
                                                </a>
                                            </td>
                                            <td>001</td>
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
                                            <td><a href="" class="btn btn-sm btn-warning">
                                                View
                                                </a></td>
                                            <td>002</td>
                                            <td>2025-03-03</td>
                                            <td>Employee</td>
                                            <td>2025-03-03</td>
                                            <td>2025-03-07</td>
                                            <td>Jon Snow</td>
                                            <td>WAITING_APPROVAL</td>
                                            <td>APPROVAL LEVEL 1</td>
                                            <td>Daenerys Targaryen</td>
                                            <td>2025-02-21 10:26:09</td>
                                        </tr>
                                        <tr>
                                            <td><a href="" class="btn btn-sm btn-warning">
                                                View
                                                </a></td>
                                            <td>003</td>
                                            <td>2025-03-03</td>
                                            <td>Employee</td>
                                            <td>2025-03-03</td>
                                            <td>2025-03-07</td>
                                            <td>Jon Snow</td>
                                            <td>WAITING_APPROVAL</td>
                                            <td>APPROVAL LEVEL 1</td>
                                            <td>Daenerys Targaryen</td>
                                            <td>2025-02-21 10:26:09</td>
                                        </tr>
                                        <tr>
                                            <td><a href="" class="btn btn-sm btn-warning">
                                                View
                                                </a></td>
                                            <td>004</td>
                                            <td>2025-03-03</td>
                                            <td>Employee</td>
                                            <td>2025-03-03</td>
                                            <td>2025-03-07</td>
                                            <td>Jon Snow</td>
                                            <td>WAITING_APPROVAL</td>
                                            <td>APPROVAL LEVEL 1</td>
                                            <td>Daenerys Targaryen</td>
                                            <td>2025-02-21 10:26:09</td>
                                        </tr>
                                        <tr>
                                            <td><a href="" class="btn btn-sm btn-warning">
                                                View
                                                </a></td>
                                            <td>005</td>
                                            <td>2025-03-03</td>
                                            <td>Employee</td>
                                            <td>2025-03-03</td>
                                            <td>2025-03-07</td>
                                            <td>Jon Snow</td>
                                            <td>WAITING_APPROVAL</td>
                                            <td>APPROVAL LEVEL 1</td>
                                            <td>Daenerys Targaryen</td>
                                            <td>2025-02-21 10:26:09</td>
                                        </tr>
                                        <tr>
                                            <td><a href="" class="btn btn-sm btn-warning">
                                                View
                                                </a></td>
                                            <td>006</td>
                                            <td>2025-03-03</td>
                                            <td>Employee</td>
                                            <td>2025-03-03</td>
                                            <td>2025-03-07</td>
                                            <td>Jon Snow</td>
                                            <td>WAITING_APPROVAL</td>
                                            <td>APPROVAL LEVEL 1</td>
                                            <td>Daenerys Targaryen</td>
                                            <td>2025-02-21 10:26:09</td>
                                        </tr>
                                        <tr>
                                            <td><a href="" class="btn btn-sm btn-warning">
                                                View
                                                </a></td>
                                            <td>007</td>
                                            <td>2025-03-03</td>
                                            <td>Employee</td>
                                            <td>2025-03-03</td>
                                            <td>2025-03-07</td>
                                            <td>Jon Snow</td>
                                            <td>WAITING_APPROVAL</td>
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
        <ul class="pagination-animated">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">&lt;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">&gt;</a></li>
          <li><a href="#" aria-label="Next">&raquo;</a></li>
        </ul>
      </nav>
</div>
@endsection
