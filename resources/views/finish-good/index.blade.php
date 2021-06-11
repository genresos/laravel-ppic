@extends('layout.app')

@section('title', 'Halaman User ')
@section('halaman', 'Halaman User Dinamis')

@section('content')
<h2>Finish Good</h2>

<div class="card">
    <div class="card-header">
    <h1 class="card-title">Data Finishgood</h1>

    <form action="{{ route('finish-good-index') }}" method="GET"->
        <input type="text" class="form-control" placeholder="Cari" name="search">
    </form>
    </div>  
    <!-- /.card-header -->
    <div class="card-body">
    <a href="{{ route('finish-good-create') }}" class="btn btn-primary">Tambah Item</a>

    <table class="table table-bordered">
    <thead class="thead-dark"><tr>
            <th>No</th>
            <th>Part No</th>
            <th>Job No</th>
            <th>Monthly Need</th>
            <th>Daily Need</th>
            <th>Stock</th>
            <th>Aksi</th>

        </tr>
        </thead>
        <tbody>
            @foreach($finish as $key => $good)
        <tr>
            <td>{{ $key+1}}</td>
            <td>{{ $good->part_no }}</td>
            <td>{{ $good->job_no }}</td>
            <td>{{ $good->m_need }}</td>
            <td>{{ $good->d_need }}</td>
            <td>{{ $good->stock }}</td>
            <td>
                <a href="{{ route('finish-good-edit', $good->id) }}" class="btn btn-info">Edit</a>
                <a href="{{ route('finish-good-delete', $good ->id) }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach 
        </tbody>
    </table>
    <br>
    <div class="text-center">

    {!! $finish->links() !!}
    </div>
    </div>
    <!-- /.card-body -->
</div>
@endsection