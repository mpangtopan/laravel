@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Fill The Form</h3>
    </div>

    <div class="card m-4">
        <div class="card-header">
            <a href="/precheck/unit/transaction/create" class="btn-grad-danger btn-sm m-2 shadow-sm">Close</a>
        </div>
        <div class="card-body p-4 shadow-sm">
            <section class="content">
                
                <form method="POST">
                    <div class="card mb-4" style="border-color: #26d496">
                        <div class="card-body">
                            {{-- <label>Cek Kondisi Ban</label>
                            <select class="form-control">
                                <option value="Non-Employee">Rusak</option>
                                <option value="Employee">Baik</option>
                                <option value="Non-Employee">N/A</option>
                            </select>
                            <label>Cek Kondisi Rem</label>
                            <select class="form-control">
                                <option value="Non-Employee">Rusak</option>
                                <option value="Employee">Baik</option>
                                <option value="Non-Employee">N/A</option>
                            </select> --}}
                            <div class="form-group">
                                <label>Cek Kondisi Ban :</label>
                                <label><input type="radio" name="ban" id="ban1" value="option1"> Baik</label> <label><input type="radio" name="ban" id="ban2" value="option2" checked> Rusak</label> <label><input type="radio" name="ban" id="ban3" value="option3"> N/A</label>
                            </div>
                            <div class="form-group">
                                <label>Cek Kondisi Rem :</label>
                                <label><input type="radio" name="rem" id="rem1" value="option1"> Baik</label> <label><input type="radio" name="rem" id="rem2" value="option2" checked> Rusak</label> <label><input type="radio" name="rem" id="rem3" value="option3"> N/A</label>
                            </div>
                    </div>
                </form>
            </section>
        </div>
        <div class="card-footer">
            <a href="/precheck/unit/transaction" class="btn-grad-primary btn-sm mb-2 shadow-sm  pull-right">Submit</a>
        </div>
            
    </div>

@endsection

