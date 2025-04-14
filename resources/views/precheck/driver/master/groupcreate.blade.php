@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Create New - Master Driver Group Precheck</h3>
    </div>

    <div class="card m-4">
        <div class="card-header">
            <a href="/precheck/driver/master/group" class="btn-grad-danger btn-sm m-2 shadow-sm">Back to list</a>
        </div>
        <div class="card-body p-4 shadow-sm">
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="https://terrafm.dev.akseshr.com/transaction/reimbursement" accept-charset="UTF-8" class="" enctype="multipart/form-data"><input name="_token" type="hidden" value="CNgZAOhIdreheFTJrY6IyJ7hyxWImQcWrwetzBGn">
                        <input type="hidden" name="_token" value="CNgZAOhIdreheFTJrY6IyJ7hyxWImQcWrwetzBGn">
                            <div class="card mb-4" style="border-color: #26d496">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Question Group</label>
                                                <input type="text" class="form-control">
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
            <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm  pull-right">Submit</a>
        </div>
            </form>
    </div>

@endsection

