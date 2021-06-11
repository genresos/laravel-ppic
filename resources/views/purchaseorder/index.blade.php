@extends('layout.app')

@section('title', 'Halaman User ')
@section('halaman', 'Halaman User Dinamis')

@section('content')

<h2>Purchase Order</h2>


<div class="card">
    <div class="card-header">
    <h3 class="card-title">Data Purchase Order</h3>
    <form action="{{ route('purchaseorder-index') }}" method="GET"->
        <input type="text" class="form-control" placeholder="Cari" name="search">
    </form>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
    <a href="{{ route('purchaseorder-create') }}" class="btn btn-primary">Tambah Data</a>
    <table class="table table-bordered">
    <thead class="thead-dark"><tr>
            <th>No</th>
            <th>Kode Order</th>
            <th>Jenis Order</th>
            <th>Item</th>
            <th>Customer</th>
            <th>Jumlah</th>
            <th>Terkirim</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach($purchase as $key => $po)
        <tr>
            <td>{{ $key+1}}</td>
            <td>{{ $po->kode_order }}</td>
            <td>{{ $po->type_order }}</td>
            <td>{{ $po->type_order_id }}</td>
            <td>{{ $po->customer }}</td>
            <td>{{ $po->stock_id }}</td>
            <td>{{ $po->terkirim }}</td>
            <td>{{ $po->created_at }}</td>
            <td>{{ $po->status }}</td>
            <td>
            <a href="{{ route('purchaseorder-edit', $po->id) }}" class="btn btn-info">Edit</a>
            <a href="{{ route('purchaseorder-delete', $po->id) }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <div class="text-center">

    {!! $purchase->links() !!}
    </div>
    </div>
    <!-- /.card-body -->
</div>
@endsection