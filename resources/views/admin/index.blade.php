@extends('templates.app')
@section('title')
    Admin - Dashboard
@endsection
@section('heading')
    Dashboard
@endsection
@section('heading', 'Dashboard')
@section('content')
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="far fa-user"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Guru</h4>
          </div>
          <div class="card-body">
            10
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
          <i class="far fa-user"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Siswa</h4>
          </div>
          <div class="card-body">
            42
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning">
          <i class="far fa-file"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Kelas</h4>
          </div>
          <div class="card-body">
            1,201
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success">
          <i class="fas fa-file"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Mapel</h4>
          </div>
          <div class="card-body">
            47
          </div>
        </div>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="chart-responsive">
                            <canvas id="pieChartGuru" height="50"></canvas>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="chart-legend clearfix">
                            <li><i class="far fa-circle text-primary"></i> Laki-laki</li>
                            <li><i class="far fa-circle text-danger"></i> Perempuan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            'use strict'

            var pieChartCanvasGuru = $('#pieChartGuru').get(0).getContext('2d')
            var pieDataGuru        = {
                labels: [
                    'Laki-laki', 
                    'Perempuan',
                ],
                datasets: [
                    {
                    data: [{{ $maleTeacher }}, {{ $femaleTeacher }}],
                    backgroundColor : ['#007BFF', '#DC3545'],
                    }
                ]
            }
            var pieOptions     = {
                legend: {
                    display: false
                }
            }
            var pieChart = new Chart(pieChartCanvasGuru, {
                type: 'doughnut',
                data: pieDataGuru,
                options: pieOptions      
            })

            
        })
        
        $("#Dashboard").addClass("active");
        $("#liDashboard").addClass("menu-open");
        $("#AdminHome").addClass("active");
    </script>
@endsection