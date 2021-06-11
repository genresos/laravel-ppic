@extends('layout.app')

@section('title', 'Halaman User ')
@section('halaman', 'Halaman User Dinamis')

@section('content')

<div class="card-body">
<div id="chartDashboard"> </div>
<!-- <img src="{{ asset('welcome.jpg')}}" class="css-class" alt="alt text" width=100%> -->

</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
      Highcharts.chart('chartDashboard', {
          chart: {
              type: 'column'
          },
          title: {
              text: 'Purchase Order History'
          },
          xAxis: {
              categories: [
                  'Material',
                  'Finishgood'
              ],
              crosshair: true
          },
          yAxis: {
              min: 0,
              title: {
                  text: 'Jumlah PO Masuk'
              }
          },
          tooltip: {
              headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
              pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                  '<td style="padding:0"><b>{point.y:.1f} item</b></td></tr>',
              footerFormat: '</table>',
              shared: true,
              useHTML: true
          },
          plotOptions: {
              column: {
                  pointPadding: 0.2,
                  borderWidth: 0
              }
          },
          series: [{
              name: 'Purchase Order',
              data: [49.9, 71.5,]

          }]
      });
</script>
      <div class="card-body">
        <img src="{{ asset('welcome.jpg')}}" class="css-class" alt="alt text" width=100%>
      </div>
@endsection