@extends('layouts.main')

@section('content')
    <div class="p-0">
        <h3 class="mt-0 p-3"><i class="fa-solid fa-pen-to-square"></i> Fill The Form</h3>
    </div>

    <div class="card m-4">
        <div class="card-header">
            <a href="/precheck/driver/transaction/create" class="btn-grad-danger btn-sm m-2 shadow-sm">Close</a>
        </div>
        <div class="card-body p-4 shadow-sm">
            <section class="content">
                
                <form method="POST">
                    <div class="card mb-4" style="border-color: #26d496">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Tidur 8 Jam :</label>
                                <label><input type="radio" name="tidur" id="tidur1" value="option1"> Ya</label> <label><input type="radio" name="tidur" id="tidur2" value="option2" checked> Tidak</label> <label><input type="radio" name="tidur" id="tidur3" value="option3"> N/A</label>
                            </div>
                            <div class="form-group">
                                <label>Konsumsi Obat :</label>
                                <label><input type="radio" name="obat" id="obat1" value="option1"> Ya</label> <label><input type="radio" name="obat" id="obat2" value="option2" checked> Tidak</label> <label><input type="radio" name="obat" id="obat3" value="option3"> N/A</label>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
        <div class="card-footer">
            <a href="/precheck/passenger/transaction" class="btn-grad-primary btn-sm mb-2 shadow-sm  pull-right">Submit</a>
        </div>
            
    </div>

@endsection

