@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Create New - Meal Order</h3>
    </div>

    <div class="card m-4">
        <div class="card-header">
            <a href="/meal" class="btn-grad-danger btn-sm m-2 shadow-sm">Back to list</a>
        </div>
        <div class="card-body p-4 shadow-sm">

            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="https://terrafm.dev.akseshr.com/transaction/meal_order" accept-charset="UTF-8" class="form-horizontal" id="meal-order-form"><input name="_token" type="hidden" value="CNgZAOhIdreheFTJrY6IyJ7hyxWImQcWrwetzBGn">
                    <input type="hidden" name="_token" value="CNgZAOhIdreheFTJrY6IyJ7hyxWImQcWrwetzBGn">
                    <div class="box-body">
                        <div class="card mb-4" style="border-color: #26d496">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="order_date" class="col-md-4">Order Date</label>
                                            <div class="col-md-4">
                                                <input class="form-control" name="order_date" type="date" value="2025-03-13">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Order Details Section -->
                        <div class="card mb-4" style="border-color: #26d496">
                            <div class="card-header" style="background-color: #26d496">
                                <span style="font-weight: bold;">Order Details</span>

                            </div>
                            <div class="box-body">
                                <table class="table table-bordered table-details" id="order-details-table">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Name</th>
                                            <th>Department</th>
                                            <th>Company</th>
                                            <th>Breakfast</th>
                                            <th>Lunch</th>
                                            <th>Dinner</th>
                                            <th>Remarks</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Default Row -->
                                        <tr>
                                            <td>
                                                <select class="form-control type-select" name="order_details[0][type]"><option value="Employee">Employee</option><option value="Non-Employee">Non-Employee</option></select>
                                            </td>
                                            <td>
                                                <div class="employee-select-container">
                                                    <select class="form-control select2 employee-select" name="order_details[0][employee_id]"><option value="" selected="selected">--Select Employee--</option><option value="1">JON SNOW</option><option value="2">SAMWELL TARLY</option><option value="3">DAENERYS TARGARYEN</option><option value="4">PAUL ATREIDES</option><option value="5">FEYD-RAUTHA HARKONNEN</option></select>
                                                </div>
                                                <input class="form-control employee-freetext" placeholder="Name" style="display: none;" name="order_details[0][name]" type="text">
                                            </td>
                                            <td><input class="form-control department" placeholder="Department" readonly name="order_details[0][department]" type="text"></td>
                                            <td><input class="form-control company" placeholder="Company" readonly name="order_details[0][company]" type="text"></td>
                                            <td>
                                                <select class="form-control" name="order_details[0][breakfast]"><option value="No">No</option><option value="DineIn">Dine In</option><option value="TakeAway">Take Away</option></select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="order_details[0][lunch]"><option value="No">No</option><option value="DineIn">Dine In</option><option value="TakeAway">Take Away</option></select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="order_details[0][dinner]"><option value="No">No</option><option value="DineIn">Dine In</option><option value="TakeAway">Take Away</option></select>
                                            </td>
                                            <td><input class="form-control" placeholder="Remarks" name="order_details[0][remarks]" type="text"></td>
                                            <td>
                                                <button type="button" class="btn btn-danger btn-remove-row">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="button" class="add-row btn btn-default btn-sm" id="add-detail-row">+ Add Row</button>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm pull-right">Submit</a>
                    </div>
                    </form>
                    </div>
                </div>
        </section>
        </div>
    </div>

@endsection

