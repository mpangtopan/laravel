@extends('layouts.main',['title' => 'Blank Page'])

@section('content')

<div class="content p-0">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="m-0">Dashboard</h3>
        </div>
      </div>
    </div>
  </div>
  
  <section class="content">
    <div class="container-fluid">
      <div id="bg-swap" class="card mb-4">
        <div class="card-body p-2 m-2">
            <div class="greeting">
              <h4>
                <b>Welcome,</b> <span>Jon Snow</span>
              </h4>
            </div>
            <div class="date">
              <h5>
                It's Monday, 24 February 2025
              </h5>
            </div>
            {{-- <i class="fa-solid fa-user background-icon"></i> --}}
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="box-bg-blue small-box">
            <div class="inner">
              <h3>150</h3>
              <p>Number of Employee</p>
            </div>
            <i class="fa-solid fa-users background-icon"></i>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="box-bg-green small-box">
            <div class="inner">
              <h3>95<sup style="font-size: 20px"></sup></h3>
              <p>Average Travel /Month</p>
            </div>
            {{-- <i class="fa-solid fa-sack-dollar background-icon"></i> --}}
            <i class="fa-solid fa-plane background-icon"></i>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="box-bg-yellow small-box">
            <div class="inner">
              <h3>46<sup style="font-size: 20px"></sup></h3>
              <p>Average Site Entry /Month</p>
            </div>
            <i class="fa-solid fa-clipboard-user background-icon"></i>  
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="box-bg-red small-box">
            <div class="inner">
              <h3>2.50<sup style="font-size: 20px">%</sup></h3>
              <p>Cancelled Rate</p>
            </div>
            <i class="fa-solid fa-percent background-icon"></i>  
          </div>
        </div>
      </div>

      <div class="row">
        <section class="col-lg-4 connectedSortable mb-4">
          <div class="card" style="border-color: #26d496">
            <div id="bg-swap" class="card-header">
              <h4 class="box-title"><i class="fa-solid fa-chart-pie"></i> Employees</h4>
              <h8 class="small small-chartname">by GENDER</h8>
            </div>
            <div class="card-body">
              <div class="tab-content p-0">
                <canvas id="genderChart" style="height:250px"></canvas>
              </div>
            </div>
          </div>
        </section>
        
        <section class="col-lg-4 connectedSortable mb-4">
          <div class="card" style="border-color: #26d496">
            <div id="bg-swap" class="card-header">
              <h4 class="box-title"><i class="fa-solid fa-chart-pie"></i> Employees</h4>
              <h8 class="small small-chartname">by General</h8>
            </div>
              <div class="card-body">
                <div class="tab-content p-0">
                  <div class="chart tab-pane active" id="revenue-chart"
                      style="position: relative; height: 270px;"><canvas id="generalChart" style="height: 250px;"></canvas>
                  </div>
                </div>
              </div>
          </div>
        </section>

        <section class="col-lg-4 connectedSortable mb-4">
          <div class="card" style="border-color: #26d496">
            <div id="bg-swap" class="card-header">
              <h4 class="box-title"><i class="fa-solid fa-chart-simple"></i> Employees</h4>
              <h8 class="small small-chartname">by DISCIPLINE</h8>
            </div>
            <div class="card-body">
              <canvas id="disciplineChart" height="300" style="height: 300px;"></canvas>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
</div>

@endsection
