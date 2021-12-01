@extends('components.layout')

@section('title', 'Relatório')

@section('content')

@extends('adminlte::master')
<!-- Conteúdo -->
<div id="conteudo" class="container-lg">

  <div id="box" class="d-flex">
    <ul class="fs-4 px-1"> 
      @foreach ($totalPostos as $value )
      <li class="list-group"> Total de postos : {{$value->postos}}</li>
      <li class="list-group">Total de GNV Vendido: {{$value->quantidade}}</li>
      @endforeach
      </ul>
    </div>
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row ">
          <div class="col-md-6">
            <!-- AREA CHART -->
            <div class="card card-primary">
              <div class="card-header bg-royal-blue">
                <h3 class="card-title">GNV</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>
<!-- ChartJS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : [{{ $subDt5 }}, {{ $subDt4 }}, {{ $subDt3 }}, {{ $subDt2 }}, {{ $subDt1 }},{{ $dt }}],
      datasets: [
        {
          label               : 'GNV vendido',
          backgroundColor     : '#060A6F',
          borderColor         : '#060A6F',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [29900, 48000, 40000, 10900, 80006, 20700, 90000]
        },
        {
          label               : 'GNV perdido',
          backgroundColor     : '#C4CAD0',
          borderColor         : '#C4CAD0',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :  [{{$quantidade[0]}}, {{$quantidade[1]}},{{$quantidade[2]}},{{$quantidade[3]}}, {{$quantidade[4]}}, {{$quantidade[5]}}]
        },
      ]
    }
    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })
                                    

  })
</script>

@endsection