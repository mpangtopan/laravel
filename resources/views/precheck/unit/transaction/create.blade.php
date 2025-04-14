@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Create New - Transaction</h3>
    </div>

    <div class="card m-4">
        <div class="card-header">
            <a href="/precheck/unit/transaction" class="btn-grad-danger btn-sm m-2 shadow-sm">Back to list</a>
        </div>
        <div class="card-body p-4 shadow-sm">
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                            <form method="POST" action="https://terrafm.dev.akseshr.com/transaction/reimbursement" accept-charset="UTF-8" class="" enctype="multipart/form-data"><input name="_token" type="hidden" value="CNgZAOhIdreheFTJrY6IyJ7hyxWImQcWrwetzBGn">
                            <input type="hidden" name="_token" value="CNgZAOhIdreheFTJrY6IyJ7hyxWImQcWrwetzBGn">
                            
                                <div class="card mb-4" style="border-color: #26d496">
                                    <div class="box-body">
                                        <div class="row form-horizontal ">
                                            <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="col-md-5">Transaction Date</label>
                                                <div class="col-md-7">
                                                    <input class="form-control" data-bv-message="Required" required name="request_date" type="date" value="2025-03-13">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5">Vehicle Code</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5">Vehicle Type</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" value="" readonly="readonly">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5">Vehicle Name</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" value="" readonly="readonly">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label class="col-md-5">Driver</label>
                                                <div class="col-md-7">
                                                    <select class="form-control"><option value="">-- Select --</option><option value="1" selected="selected">[E0999] Budi Budiman</option><option value="2">[E0123] Iwan Darmawan</option></select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5">Status</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" value="" readonly="readonly">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5">Precheck Type</label>
                                                <div class="col-md-7">
                                                    <select class="form-control"><option>Daily</option><option>Weekly</option><option>Monthly</option><option>Yearly</option></select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5">Description</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="card-footer">
                    <a href="/precheck/unit/transaction/input" class="btn-grad-primary btn-sm mb-2 shadow-sm  pull-right">Go</a>
        </div>
            </form>
    </div>

@endsection

