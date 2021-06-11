@extends('layout.app')

@section('title', 'Halaman User ')
@section('halaman', 'Halaman User Dinamis')

@section('content')

<div class="card-body">
<div class="card-header">

<h1 class="h4 text-gray-900">PT. Tri Centrum Fortuna </h1>
<div class="text-left mt-4">
<a class="small" href="https://www.google.com/maps/dir//tri+centrum+fortuna+gmaps/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x2e698521f3f71299:0x55872f6793f14ad8?sa=X&ved=2ahUKEwiZ1q-4vvTqAhWslEsFHbtrB-UQ9RcwE3oECA4QDw">Jl. Jababeka IV Blok V/81A Kawasan Industri Jabebeka</a>
</div>
</div>
</div>

<!-- <script src="https://code.highcharts.com/highcharts.js"></script>
<script>
      Highcharts.chart('chartDashboard', {
          chart: {
              type: 'column'
          },
          title: {
              text: 'Purchase Order History'
          },
          xAxis: {
              categories: {},
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
            name: ('Material'),
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

            }, {
                name: 'Finishgood',
                data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]
            }]
      });
</script> -->
      <div class="col-10">
      <div class="text-center mt-4">
      <h2 class="text-gray-900">Visi & Misi Perusahaan</h2>
      </div>
      <table class="table table-borderless">
        <thead class="thead-borderless">
            <tr>
                <th>VISI    :</th>
                <td>Memberikan service yang terbaik dalam mendukung industri otomotif regional khususnya produk OEM.</td>
            </tr>
            <tr>
                <th>MISI    :</th>
                <td>Menjadi pemain komponen otomotif global yang didukung level manufacture tingkat dunia.</td>

            </tr>
            </thead>
        </table>

      </div>
      <div class="col-10">
      <div class="text-center mt-4">
      <h2 class="text-gray-900">Kebijakan Mutu Perusahaan</h1>
      </div>
      <table class="table table-borderless">
        <thead class="thead-borderless">
            <tr>
                <th>KEBIJAKAN MUTU</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>1.	Mengutamakan kepuasan pelanggan dengan cara : Zero Claim, Zero Defect, Zero Accident & On time Delivery.</td>
            </tr>
            <tr> <td>2.	Memproduksi produk dengan standar kualitas dunia.</td>
            </tr>
            <tr><td>3.	Cepat tanggap terhadap problem pelanggan.</td>
            </tr>
            <tr><td>4.	Membudayakan continues improvement.</td>
            </tr>
            </tbody>
        </table>
      </div>
      <div class="col-10">
      <style>
        img {
            width: 300px;
            height: 200px;
            border: 4px solid #575D6
        }
        </style>
        <body>
        <img src="{{ asset('1.jpg')}}">
        <img src="{{ asset('2.jpg')}}">
        <img src="{{ asset('welcome.jpg')}}">
        </body>
        </div>  
@endsection