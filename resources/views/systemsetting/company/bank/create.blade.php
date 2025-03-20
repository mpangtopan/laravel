@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Create New - Bank</h3>
    </div>

    <div class="card m-4 col-6">
        <div class="card-header">
            <a href="/systemsetting/company/bank" class="btn-grad-danger btn-sm m-2 shadow-sm">Back to list</a>
        </div>
        <div class="card-body p-4 shadow-sm">
            <section class="content" style="min-height: 0px">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="https://terrafm.dev.akseshr.com/master/bank" accept-charset="UTF-8"><input name="_token" type="hidden" value="rR7g9ZOjxibrRJdPHxBFnrtZDEKl2tAztXqnZwcy">
                            <input type="hidden" name="_token" value="rR7g9ZOjxibrRJdPHxBFnrtZDEKl2tAztXqnZwcy">
                            <div class="card mb-4" style="border-color: #26d496">
                                <div class="card-body">
                                    <label for="name">Name</label>
                                    <input placeholder="Name" class="form-control" name="name" type="text">
                                </div>
                            </div>
                            {{-- <div class="box-footer">
                                <a href="https://terrafm.dev.akseshr.com/master/bank" class="btn btn-default"> Back </a>
                                <input class="btn btn-success pull-right" type="submit" value="Create">
                            </div> --}}
                        </form>
                    </div>
                </div>
            </section>
        <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm">Create</a>
        </div>
    </div>

@endsection

