@extends('layout.app')

@section('title', 'Halaman User ')
@section('halaman', 'Halaman User Dinamis')

@section('content')


<div class="card">
    <div class="card-header">
    <h3 class="card-title">Data User</h3>

    <form action="{{ route('user-index') }}" method="GET"->
        <input type="text" class="form-control" placeholder="Cari" name="search">
    </form>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <a href="{{ route('user-create') }}" class="btn btn-primary">Tambah User</a>
    <table class="table table-bordered">
    <thead class="thead-dark"><tr>
            <th>No</th>
            <th>username</th>
            <th>Nama Lengkap</th>
            <th>Role</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $key => $user)
        <tr>
            <td>{{ $key+1}}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->fullname }}</td>
            <td>{{ $user->level }}</td>
            <td>
                <a href="{{ route('user-edit', $user->username) }}" class="btn btn-info">Edit</a>
                <a href="{{ route('user-delete', $user->username) }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <div class="text-center">

    {!! $users->links() !!}
    </div>
    </div>
  
</div>
@endsection
