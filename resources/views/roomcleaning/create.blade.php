@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Create New - Room Cleaning</h3>
    </div>

    <div class="card m-4 col-6">
        <div class="card-header">
            <a href="/roomcleaning" class="btn-grad-danger btn-sm m-2 shadow-sm">Back to list</a>
        </div>
        <div class="card-body p-4 shadow-sm">
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4" style="border-color: #26d496">
                            <div class="card-header" style="background-color: #26d496">
                                <h3>Fill the form</h3>
                            </div>
                            <form method="POST" action="https://terrafm.dev.akseshr.com/transaction/room_cleaning" accept-charset="UTF-8"><input name="_token" type="hidden" value="nR7bAAyBBBMQHg6hRCDGoV0OolKuvRVd67g1cupE">
                            <input type="hidden" name="_token" value="nR7bAAyBBBMQHg6hRCDGoV0OolKuvRVd67g1cupE">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="no">Cleaning No.</label>
                                    <input class="form-control" readonly="readonly" name="no" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="room_id">Room</label>
                                    <select class="form-control select2" id="room_id" name="room_id"><option value="" selected="selected">-- Select Room --</option><option value="2">[R001] - Deluxe</option><option value="3">[R9] - Standard</option></select>
                                </div>
                                <div class="form-group">
                                    <label for="note">Note</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter note" name="note" cols="50"></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm">Submit</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

        
@endsection

