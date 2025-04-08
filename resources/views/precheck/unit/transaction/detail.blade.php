@extends('layouts.main')

@section('content')
<div class="card-header" style="font-style:italic"><h3 class="mt-0 p-3">Transaction Details - Unit</h3></div>
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
                                <label class="col-sm-4 control-label">Question</label>
                                <input class="form-control" type="text" value="">
                                    
                                <label class="col-sm-4 control-label">Answer</label>
                                <input class="form-control" type="text" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-4 control-label">Notes</label>
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
                            <a href="/precheck/unit/transaction" class="btn-grad-danger btn-sm m-2 shadow-sm">Back</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body p-2 shadow-sm">
                            <div class="table-responsive">
                                <table class="table-striped table-hover table-bordered" style="width: 100%">
                                    <thead class="bg-bl" style="font-size: 16px">
                                        <tr>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th>Notes</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm">
                                        <tr>
                                            <td>Cek Kondisi Ban</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Cek Kondisi Rem</td>
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
