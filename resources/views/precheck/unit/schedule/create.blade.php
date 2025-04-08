@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Generate New - Schedule</h3>
    </div>

    <div class="card m-4">
        <div class="card-header">
            <a href="/precheck/unit/schedule" class="btn-grad-danger btn-sm m-2 shadow-sm">Back</a>
        </div>
        <div class="card-body p-4 shadow-sm">
            <section class="content">
                <form method="POST" action="" accept-charset="UTF-8"><input name="" type="hidden" value="">
                    <input type="hidden" name="" value="">
                        <div class="card mb-4">
                            <div class="card-header" style="background-color: #26d496">
                                <span style="font-weight: bold;">Precheck Unit Schedule</span>
                            </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Vehicle Type</label>
                                            <select class="form-control"><option>LV</option><option>MPV</option><option>Bus</option></select>
                                    
                                            <label>Schedule Type</label>
                                            <select class="form-control"><option>Weekly</option><option>Monthly</option><option>Yearly</option></select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Start Pre-Check Date</label>
                                            <input class="form-control request_date" type="date" value="2025-03-03">

                                            <label>End Pre-Check Date</label>
                                            <input class="form-control request_date" type="date" value="2025-03-03">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm">Generate</a>
                </form>
            </section>
        </div>
    </div>

@endsection

