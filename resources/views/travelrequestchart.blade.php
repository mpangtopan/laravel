@extends('layouts.main')
@section('content')
<div class="content p-0">
    <section class="content">
      <div class="container-fluid">
        <div id="bg-swap" class="card mb-4">
          <div class="card-body p-2 m-2">
              <div class="greeting">
                <h4>
                  Travel Request Dashboard
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
                <h3>2.000<sup style="font-size: 20px"> Jakarta</sup></h3>
                <p>Top Point of Hire</p>
              </div>
              {{-- <i class="fa-solid fa-plane background-icon"></i> --}}
            </div>
          </div>
          <div class="col-lg-6 ">
            <div class="box-bg-yellow small-box">
              <div class="inner">
                <h3>2.000<sup style="font-size: 20px"></sup></h3>
                <p>Average per Month</p>
              </div>
              {{-- <i class="fa-solid fa-clipboard-user background-icon"></i>   --}}
            </div>
          </div>
          <div class="col-lg-6 ">
            <div class="box-bg-red small-box">
              <div class="inner">
                <h3>4.000<sup style="font-size: 20px"></sup></h3>
                <p>Travel Request Total</p>
              </div>
              {{-- <i class="fa-solid fa-percent background-icon"></i>   --}}
            </div>
          </div>
        </div>
  
        <div class="row">
            
            <section class="col-lg-4 connectedSortable mb-4">
              <div class="card">
              <div class="card-body">
                      <h4 class="box-title text-center">Travel Request by Business Unit</h4>
                    <div class="tab-content p-0">
                      <canvas id="TravelRequestBusinessUnitChart" style="height: 250px;"></canvas>
                    </div>
                  </div>
              </div>
            </section>

          <section class="col-lg-4 connectedSortable mb-4">
            <div class="card">
                <div class="card-body">
                <h4 class="box-title text-center">Travel Request by Department</h4>
                <div class="tab-content p-0">
                  <canvas id="TravelRequestDepartmentChart" style="height:250px"></canvas>
                </div>
              </div>
            </div>
          </section>
          
  
          <section class="col-lg-4 connectedSortable mb-4">
            <div class="card">
            <div class="card-body">
                  <h4 class="box-title text-center">Travel Request by Job Position</h4>
                <canvas id="TravelRequestJobPositionChart"></canvas>
              </div>
            </div>
          </section>

          <section class="col-lg-4 connectedSortable mb-4">
            <div class="card">
            <div class="card-body">
                  <h4 class="box-title text-center">Travel Request by Status</h4>
                <canvas id="TravelRequestStatusChart"></canvas>
              </div>
            </div>
          </section>

          <section class="col-lg-4 connectedSortable mb-4">
            <div class="card">
            <div class="card-body">
                  <h4 class="box-title text-center">Travel Request by Cost Project Code</h4>
                <canvas id="TravelRequestCostChart"></canvas>
              </div>
            </div>
          </section>

          <section class="col-lg-4 connectedSortable mb-4">
            <div class="card">
            <div class="card-body">
                  <h4 class="box-title text-center">Travel Request by Lumpsum Amount</h4>
                <canvas id="TravelRequestLumpsumChart"></canvas>
              </div>
            </div>
          </section>

          <section class="col-lg-6 connectedSortable mb-4">
            <div class="card">
            <div class="card-body">
                    <h4 class="box-title text-center">Map Summary by POH</h4>
                  <div class="tab-content p-0">
                    <canvas id="TravelRequestPOHChart" style="height: 250px;"></canvas>
                  </div>
                </div>
            </div>
          </section>

        </div>
      </div>
    </section>
</div>
@endsection