@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Create New - Vehicle</h3>
    </div>

    <div class="card m-4 col-sm-6">
        <div class="card-header">
            <a href="/systemsetting/transportation/vehicle" class="btn-grad-danger btn-sm m-2 shadow-sm">Back to list</a>
        </div>
        <div class="card-body p-4 shadow-sm">
            <section class="content">
                <form method="POST" action="" accept-charset="UTF-8"><input name="" type="hidden" value="">
                    <input type="hidden" name="" value="">
                        <div class="card mb-4" style="border-color: #26d496">
                            <div class="card-body">
                                <label>Code</label>
                                <input  placeholder="Code" class="form-control" type="text">
                                <label>Name</label>
                                <input placeholder="Name" class="form-control" type="text">
                                <label>Transportation Type</label>
                                <select class="form-control" type="text"><option value="Land Transportation">Land Transportation</option><option value="Sea Transportation">Sea Transportation</option><option value="Air Transportation">Air Transportation</option></select>
                                <label>Type</label>
                                <input placeholder="Type" class="form-control" type="text">
                                <label>Capacity</label>
                                <input placeholder="Capacity" class="form-control" type="number">
                                <label>Location</label>
                                <select class="form-control"><option value="1">Lokasi 01</option><option value="2">Morowali</option><option value="3">Jakarta</option><option value="4">Kutai</option><option value="5">Head Office</option></select>
                                <label>Plat Number</label>
                                <input placeholder="Plat Number" class="form-control" type="text">
                                <label>Manufacture</label>
                                <input placeholder="Manufacture" class="form-control" type="text">
                                <label>Last Service</label>
                                <input placeholder="Last Service" class="form-control" type="date">
                                <label>KM/HR</label>
                                <input placeholder="KM/HR" class="form-control" type="number">
                                <label>Life Span</label>
                                <input placeholder="Life Span" class="form-control" type="number">
                                <label>Acquisition Date</label>
                                <input class="form-control" type="date">
                                <label>Insurance Number</label>
                                <input placeholder="Insurance Number" class="form-control" type="text">
                                <label>Insurance Start Date</label>
                                <input class="form-control" type="date">
                                <label>Insurance Expired Date</label>
                                <input class="form-control" type="date">
                                <label>Image</label>
                                <input class="form-control" type="file">
                            </div>
                        </div>
                </form>
            </section>
        <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm pull-right">Create</a>
        </div>
    </div>

@endsection

