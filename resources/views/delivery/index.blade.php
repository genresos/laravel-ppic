@extends('layout.app')

@section('title', 'Halaman User ')
@section('halaman', 'Halaman User Dinamis')

@section('content')

<h2>Delivery</h2>

<div class="card">
    <div class="card-header">
    <h3 class="card-title">Data Delivery</h3>

    <form action="/" method="GET"->
        <input type="text" class="form-control" placeholder="Cari" name="search">
    </form>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <a href="{{ route('delivery-create') }}" class="btn btn-primary">Tambah Delivery</a>
    <table class="table table-bordered">
    <thead class="thead-dark"><tr>
            <th>No</th>
            <th>Kode Order</th>
            <th>Jumlah</th>
            <th>Driver</th>
            <th>Tanggal</th>
        </tr>
        </thead>
        <tbody>
            @foreach($delivery as $key => $deliv)
        <tr>
            <td>{{ $key+1}}</td>
            <td>{{ $deliv->kode_order }}</td>
            <td>{{ $deliv->terkirim_id }}</td>
            <td>{{ $deliv->driver }}</td>
            <td>{{ $deliv->created_at }}</td>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <div class="text-center">

    {!! $delivery->links() !!}
    </div>
    </div>
    <!-- /.card-body -->
</div>
@endsection