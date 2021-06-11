@extends('layout.app')

@section('title', 'Halaman User ')
@section('halaman', 'Halaman User Dinamis')

@section('content')
<h2>Material</h2>

<div class="card">
    <div class="card-header">
    <h3 class="card-title">Data Material</h3>

    <form action="{{ route('material-index') }}" method="GET"->
        <input type="text" class="form-control" placeholder="Cari" name="search">
    </form>
    </div>  
    <!-- /.card-header -->
    <div class="card-body">
    <a href="{{ route('material-create') }}" class="btn btn-primary">Tambah Data</a>

    <table class="table table-bordered">
    <thead class="thead-dark"><tr>
            <th>No</th>
            <th>Job</th>
            <th>Part No</th>
            <th>Job No</th>
            <th>Model</th>
            <th>Spec</th>
            <th>Stock</th>
            <th>Terakhir Di Update</th>
            <th>Aksi</th>

        </tr>
        </thead>
        <tbody>
            @foreach($material as $key => $item)
        <tr>
            <td>{{ $key+1}}</td>
            <td>{{ $item->job }}</td>
            <td>{{ $item->part_no }}</td>
            <td>{{ $item->job_no }}</td>
            <td>{{ $item->model }}</td>
            <td>{{ $item->spec }}</td>
            <td>{{ $item->stock }}</td>
            <td>{{ $item->updated_at }}</td>
            <td>
                <a href="{{ route('material-edit', $item->id) }}" class="btn btn-info">Edit</a>
                <a href="{{ route('material-delete', $item ->id) }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach 
        </tbody>
    </table>
    <br>
    <div class="text-center">

    {!! $material->links() !!}
    </div>
    </div>
    <!-- /.card-body -->
</div>
@endsection