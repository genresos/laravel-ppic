@extends('layout.app')

@section('title', 'Halaman Tambah User ')
@section('halaman', 'Halaman Tambah User')

@section('content')

<h2>Edit Data</h2>

<div class="col-12">


<form action="{{ route('user-update', $user->username) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Username</label>
        <input type="text" class="form-control" id="" placeholder="Username" name="username" value="{{ $user->username }}" readonly>
    </div>
    <div class="form-group">
        <label for="">Nama Lengkap</label>
        <input type="text" class="form-control" id="" placeholder="Nama Lengkap" name="fullname" value="{{ $user->nama_lengkap }}">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" id="" placeholder="Password" name="password">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Role Akses</label>
        <select name="level" id="">
            <option value="1" {{ $user->level == 1 ? 'selected' : ''}}>1</option> }}>1</option>
            <option value="2" {{ $user->level == 2 ? 'selected' : ''}}>2</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Simpan Data</button>
</form>
</div>

@endsection