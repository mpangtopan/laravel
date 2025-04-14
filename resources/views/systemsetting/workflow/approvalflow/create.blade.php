@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Create New - Approval Flow</h3>
    </div>

    <div class="card m-4 col-sm-6">
        <div class="card-header">
            <a href="/systemsetting/workflow/approvalflow" class="btn-grad-danger btn-sm m-2 shadow-sm">Back to list</a>
        </div>
        <div class="card-body p-4 shadow-sm">
            <section class="content">
                <form method="POST" action="" accept-charset="UTF-8"><input name="" type="hidden" value="">
                    <input type="hidden" name="" value="">
                        <div class="card mb-4" style="border-color: #26d496">
                            <div class="card-body">
                                <label>Process</label>
                                <select class="form-control" type="text"><option value="" selected="selected">--Select--</option><option>ATTENDANCE_ADJUSTMENT</option><option>BLACKLIST</option><option>CAREER_TRANSITION</option><option>OVERTIME</option></select>
                                <label>Level</label>
                                <input class="form-control" type="number">
                                <label>Action</label>
                                <select class="form-control" type="text"><option value="" selected="selected">--Select--</option><option>APPROVAL</option><option>NOTIFICATION</option></select>
                                <label>Type</label>
                                <select class="form-control" type="text"><option value="" selected="selected">--Select--</option><option></option><option></option></select>
                                <label>Department</label>
                                <select class="form-control" type="text"><option value="" selected="selected">--Select--</option><option></option><option></option></select>
                                <label>User</label>
                                <select class="form-control" type="text"><option value="" selected="selected">--Select--</option><option></option><option></option></select>
                            </div>
                        </div>
                </form>
            </section>
        <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm pull-right">Create</a>
        </div>
    </div>

@endsection

