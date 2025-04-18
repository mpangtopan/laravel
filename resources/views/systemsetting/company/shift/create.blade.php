@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Create New - Shift</h3>
    </div>

    <div class="card m-4">
        <div class="card-header">
            <a href="/systemsetting/company/shift" class="btn-grad-danger btn-sm m-2 shadow-sm">Back to list</a>
        </div>
        <div class="card-body p-4 shadow-sm">
            <section class="content" style="min-height: 0px">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="https://terrafm.dev.akseshr.com/master/business_unit" accept-charset="UTF-8"><input name="_token" type="hidden" value="PTTb9noIFaASUyrFAz1iSUkuurHV2adQLDxkfgtU">
                            <input type="hidden" name="_token" value="PTTb9noIFaASUyrFAz1iSUkuurHV2adQLDxkfgtU">
                            <div class="card mb-4" style="border-color: #26d496">
                                <div class="card-body">
                                    <div class="col-md-6">
                                        <label for="code">Code</label>
                                        <input class="form-control" type="text">
                                    
                                        <label>Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="code">Number of Days</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="card mb-4" style="border-color: #26d496">
                                <table class="table table-hover table-striped" id="table_item">
                                    <tr>
                                        <th style="width:5%">Day</th>
                                        <th>Shift</th>
                                        <th style="width:10%">Work Day ?</th>
                                        <th style="width:15%">Time In</th>
                                        <th style="width:15%">Time Out</th>
                                    </tr>    
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm">Create</a>
        </div>
    </div>

@endsection

