@extends('layout.app')

@section('title', 'Halaman Tambah User ')
@section('halaman', 'Halaman Tambah User')

@section('content')

<h2>Edit Data</h2>

<div class="col-12">


<form action="{{ route('finish-good-update', $finish->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Part No</label>
        <input type="text" class="form-control" id="" name="part_no" value="{{ $finish->part_no }}" >
    </div>
    <div class="form-group">
        <label for="">Job No</label>
        <input type="text" class="form-control" id="" name="job_no" value="{{ $finish->job_no }}" >
    </div>
    <div class="form-group">
        <label for="">Monthly Need</label>
        <input type="text" class="form-control" id="" name="m_need" value="{{ $finish->m_need }}">
    </div>
    <div class="form-group">
        <label for="">Daily Need</label>
        <input type="text" class="form-control" id="" name="d_need" value="{{ $finish->d_need }}">
    </div>
    <button type="submit" class="btn btn-success">Simpan Data</button>
</form>
</div>

@endsection