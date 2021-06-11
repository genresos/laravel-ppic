@extends('layout.app')

@section('title', 'Halaman User ')
@section('halaman', 'Halaman User Dinamis')

@section('content')

<h2>Finishgood Masuk</h2>

<div class="card">
    <div class="card-header">
    <h3 class="card-title">Data Masuk</h3>

    <form action="/" method="GET"->
        <input type="text" class="form-control" placeholder="Cari" name="search">
    </form>
    </div>
    <!-- /.card-header -->
    <div class="card-body"> 
    <a href="{{ route('production-create') }}" class="btn btn-primary">Tambah Data</a>
    <table class="table table-bordered">
    <thead class="thead-dark"><tr>
            <th>No</th>
            <th>Part No</th>
            <th>Jumlah</th>
            <th>Karyawan</th>
            <th>Tanggal</th>
        </tr>
        </thead>
        <tbody>
            @foreach($production as $key => $prod)
        <tr>
            <td>{{ $key+1}}</td>
            <td>{{ $prod->part_no }}</td>
            <td>{{ $prod->jumlah }}</td>
            <td>{{ $prod->karyawan }}</td>
            <td>{{ $prod->created_at }}</td>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <div class="text-center">

    {!! $production->links() !!}
    </div>
    </div>
    <!-- /.card-body -->
</div>
@endsection