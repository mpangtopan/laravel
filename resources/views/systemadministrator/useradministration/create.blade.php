@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Create New - User Administration</h3>
    </div>

    <div class="card m-4 col-sm-6">
        <div class="card-header">
            <a href="/systemadministrator/useradministration" class="btn-grad-danger btn-sm m-2 shadow-sm">Back to list</a>
        </div>
        <div class="card-body p-4 shadow-sm">
            <section class="content">
                <form method="POST" action="" accept-charset="UTF-8"><input name="" type="hidden" value="">
                    <input type="hidden" name="" value="">
                        <div class="card mb-4" style="border-color: #26d496">
                            <div class="card-body">
                                <label>Username</label>
                                <input  placeholder="Username" class="form-control" type="text">
                                <label>Name</label>
                                <input placeholder="Name" class="form-control" type="text">
                                <label>Email</label>
                                <input placeholder="Email" class="form-control" type="text">
                                <label>Role</label>
                                <select class="form-control" type="text"><option value="1">Administrator</option><option value="2">PAYROLL</option><option value="3">Human Capital</option><option value="4">Admin Bagian</option><option value="5">Kepala Bagian</option><option value="6">Vendor</option><option value="7">API</option><option value="8">HRBP</option><option value="9">Super Admin</option><option value="10">Junior</option><option value="11">Senior</option><option value="12">Suptent</option><option value="13">Admin</option><option value="14">Manager</option></select>
                                <label>Suppliers</label>
                                <select placeholder="Suppliers" class="form-control" type="text"><option value="1">Internal Supplier</option></select>
                                <label>Business Units</label>
                                <select placeholder="Business Units" class="form-control" type="text"><option value="1">Akses Solusi Nusantara (ASN)</option><option value="2">Testing business unit testing</option><option value="3">Top Solusion Service</option><option value="4">Indo Bara Nusantara</option></select>
                                <label>Departments</label>
                                <select placeholder="Departments" class="form-control" type="text"><option value="1">Department 01 [Akses Solusi Nusantara (ASN)]</option><option value="2">Department 02 [Akses Solusi Nusantara (ASN)]</option><option value="3">Acid Plant [Akses Solusi Nusantara (ASN)]</option><option value="4">Chloride Plant [Akses Solusi Nusantara (ASN)]</option><option value="5">Civil &amp; Infrastructure [Akses Solusi Nusantara (ASN)]</option><option value="6">Commercial [Akses Solusi Nusantara (ASN)]</option><option value="7">Concentrator [Akses Solusi Nusantara (ASN)]</option><option value="8">Copper Cathode Plant [Akses Solusi Nusantara (ASN)]</option><option value="9">Environment [Akses Solusi Nusantara (ASN)]</option><option value="10">External Affair [Akses Solusi Nusantara (ASN)]</option><option value="11">General Management [Akses Solusi Nusantara (ASN)]</option><option value="12">Health, Safety &amp; Environment [Akses Solusi Nusantara (ASN)]</option><option value="13">Human Resource [Akses Solusi Nusantara (ASN)]</option><option value="14">Human Resources [Akses Solusi Nusantara (ASN)]</option><option value="15">Maintenance [Akses Solusi Nusantara (ASN)]</option><option value="16">OHSE [Akses Solusi Nusantara (ASN)]</option><option value="17">Pyrite Plant [Akses Solusi Nusantara (ASN)]</option><option value="18">Supply Chain Management [Akses Solusi Nusantara (ASN)]</option><option value="19">Technical Service [Akses Solusi Nusantara (ASN)]</option><option value="20">Management [Akses Solusi Nusantara (ASN)]</option><option value="21">ADMIN [Akses Solusi Nusantara (ASN)]</option><option value="22">IT [Indo Bara Nusantara]</option></select>
                                <label>Employee Name</label>
                                <select placeholder="Employee Name" class="form-control" type="text"></select>
                                <label>Supervisor Name</label>
                                <select placeholder="Supervisor Name" class="form-control" type="text"></select>
                                <label>Password</label>
                                <input placeholder="Password" class="form-control" type="text">
                                <label>Password Confirmation</label>
                                <input placeholder="Password Confirmation" class="form-control" type="text">
                                <label></label>
                                <input class="form-control" type="file">
                            </div>
                        </div>
                </form>
            </section>
        <a href="" class="btn-grad-primary btn-sm mb-2 shadow-sm pull-right">Create</a>
        </div>
    </div>

@endsection

