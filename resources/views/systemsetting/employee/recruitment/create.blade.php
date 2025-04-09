@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Create New - Employee</h3>
    </div>

    <div class="card m-4 col-sm-6">
        <div class="card-header">
            <a href="/systemsetting/employee/recruitment" class="btn-grad-danger btn-sm m-2 shadow-sm">Back to list</a>
        </div>
        <div class="card-body p-4 shadow-sm">

            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST"><input type="hidden">
                        <input type="hidden">
                        <div class="card mb-4" style="border-color: #26d496">
                            <div class="box-body">
                                <div class="row">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Supplier</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Code</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Name</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Citizen ID</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Birth Place</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Birth Date</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Gender</label>
                                            <div class="col-sm-8">
                                                <label class="radio-inline">
                                                    <input type="radio" name="gender" value="male" checked required>
                                                    Male
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="gender" value="female"  required>
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Religion</label>
                                            <div class="col-sm-8">
                                                <select class="form-control"><option value="" selected="selected">-- Select --</option><option value="Islam">Islam</option><option value="Kristen">Kristen</option><option value="Katolik">Katolik</option><option value="Hindu">Hindu</option><option value="Buddha">Buddha</option><option value="Konghucu">Konghucu</option></select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Nationality</label>
                                            <div class="col-sm-8">
                                                <select class="form-control"><option value="" selected="selected">-- Select --</option><option value="Indonesia">Indonesia</option><option value="Malaysia">Malaysia</option><option value="Singapore">Singapore</option><option value="Philippines">Philippines</option><option value="Thailand">Thailand</option><option value="Vietnam">Vietnam</option><option value="Japan">Japan</option><option value="South Korea">South Korea</option><option value="China">China</option><option value="India">India</option><option value="Australia">Australia</option><option value="United States">United States</option><option value="United Kingdom">United Kingdom</option><option value="Germany">Germany</option><option value="France">France</option></select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Ethnicity</label>
                                            <div class="col-sm-8">
                                                <select class="form-control"><option value="" selected="selected">-- Select --</option><option value="Jawa">Jawa</option><option value="Sunda">Sunda</option><option value="Batak">Batak</option><option value="Minangkabau">Minangkabau</option><option value="Betawi">Betawi</option><option value="Bugis">Bugis</option><option value="Madura">Madura</option><option value="Bali">Bali</option><option value="Sasak">Sasak</option><option value="Dayak">Dayak</option><option value="Melayu">Melayu</option><option value="Aceh">Aceh</option><option value="Toraja">Toraja</option><option value="Minahasa">Minahasa</option><option value="Ambon">Ambon</option><option value="Papua">Papua</option><option value="Tionghoa">Tionghoa</option></select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Blood Type</label>
                                            <div class="col-sm-8">
                                                <select class="form-control"><option value="" selected="selected">-- Select --</option><option value="A+">A+</option><option value="A-">A-</option><option value="B+">B+</option><option value="B-">B-</option><option value="AB+">AB+</option><option value="AB-">AB-</option><option value="O+">O+</option><option value="O-">O-</option></select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Marital Status</label>
                                            <div class="col-sm-8">
                                                <select class="form-control"><option value="" selected="selected">-- Select --</option><option value="Single">Single</option><option value="Married">Married</option></select>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4" style="border-color: #26d496">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4" style="border-color: #26d496">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4" style="border-color: #26d496">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4" style="border-color: #26d496">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4" style="border-color: #26d496">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4" style="border-color: #26d496">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4" style="border-color: #26d496">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4" style="border-color: #26d496">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            
                                        </div>
                                    </div>
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

