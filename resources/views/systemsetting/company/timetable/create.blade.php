@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Create New - Timetable</h3>
    </div>

    <div class="card m-4 col-6">
        <div class="card-header">
            <a href="/systemsetting/company/timetable" class="btn-grad-danger btn-sm m-2 shadow-sm">Back to list</a>
        </div>
        <div class="card-body p-4 shadow-sm">
            <section class="content" style="min-height: 0px">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="" accept-charset="UTF-8"><input name="" type="hidden" value="">
                            <input type="hidden" name="" value="">
                            <div class="card mb-4" style="border-color: #26d496">
                                <div class="card-body">
                                        <label for="code">Code</label>
                                        <input class="form-control" type="text">
                                    
                                        <label>Name</label>
                                        <input class="form-control" type="text">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm">Create</a>
        </div>
    </div>

@endsection

