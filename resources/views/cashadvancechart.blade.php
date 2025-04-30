@extends('layouts.main')
@section('content')
<div class="content p-0">
    <section class="content">
      <div class="container-fluid">
        <div id="bg-swap" class="card mb-4">
          <div class="card-body p-2 m-2">
              <div class="greeting">
                <h4 style="font-style:italic">
                  Cash Advance Dashboard
                </h4>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 ">
            <div class="box-bg-blue small-box">
              <div class="inner">
                <h3>4.000</h3>
                <p>Number of Employee</p>
              </div>
              {{-- <i class="fa-solid fa-users background-icon"></i> --}}
            </div>
          </div>
          <div class="col-lg-6 ">
            <div class="box-bg-green small-box">
              <div class="inner">
                <h3>200.000<sup style="font-size: 20px"> IDR</sup></h3>
                <p>Average /Employee</p>
              </div>
              {{-- <i class="fa-solid fa-plane background-icon"></i> --}}
            </div>
          </div>
          <div class="col-lg-6 ">
            <div class="box-bg-yellow small-box">
              <div class="inner">
                <h3>200.000.000<sup style="font-size: 20px"> IDR</sup></h3>
                <p>Average /Month</p>
              </div>
              {{-- <i class="fa-solid fa-clipboard-user background-icon"></i>   --}}
            </div>
          </div>
          <div class="col-lg-6 ">
            <div class="box-bg-red small-box">
              <div class="inner">
                <h3>200.000.000<sup style="font-size: 20px"> IDR</sup></h3>
                <p>Total This Month</p>
              </div>
              {{-- <i class="fa-solid fa-percent background-icon"></i>   --}}
            </div>
          </div>
        </div>
  
        <div class="row">
            <section class="col-lg-6 connectedSortable mb-4">
              <div class="card">
              <div class="card-body">
                      <h4 class="box-title text-center">Cash Advance by Business Unit</h4>
                    <div class="tab-content p-0">
                      <canvas id="CashAdvanceBusinessUnitChart" style="height: 250px;"></canvas>
                    </div>
                  </div>
              </div>
            </section>

          <section class="col-lg-6 connectedSortable mb-4">
            <div class="card">
                <div class="card-body">
                <h4 class="box-title text-center">Cash Advance by Department</h4>
                <div class="tab-content p-0">
                  <canvas id="CashAdvanceDepartmentChart" style="height:250px"></canvas>
                </div>
              </div>
            </div>
          </section>
          
  
          <section class="col-lg-6 connectedSortable mb-4">
            <div class="card">
            <div class="card-body">
                  <h4 class="box-title text-center">Cash Advance by Job Position</h4>
                <canvas id="CashAdvanceJobPositionChart"></canvas>
              </div>
            </div>
          </section>

          <section class="col-lg-6 connectedSortable mb-4">
            <div class="card">
            <div class="card-body">
                  <h4 class="box-title text-center">Cash Advance by Status</h4>
                <canvas id="CashAdvanceStatusChart"></canvas>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
</div>
@endsection