@extends('layout.app')

@section('title', 'Halaman Tambah User ')
@section('halaman', 'Halaman Tambah User')

@section('content')

<h2>Edit Data</h2>

<div class="col-12">


<form action="{{ route('material-update', $material->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Job</label>
        <input type="text" class="form-control" id="" name="job" value="{{ $material->job }}"  readonly> 
    </div>
    <div class="form-group">
        <label for="">Part No</label>
        <input type="text" class="form-control" id="" name="part_no" value="{{ $material->part_no }}" readonly>
    </div>
    <div class="form-group">
        <label for="">Job No</label>
        <input type="text" class="form-control" id="" name="job_no" value="{{ $material->job_no }}" readonly>
    </div>
    <div class="form-group">
        <label for="">Stock</label>
        <input type="text" class="form-control" id="" name="stock" value="{{ $material->stock }}">
    </div>
    <!-- <div class="form-group">
        <label for="">Spec</label>
        <input type="text" class="form-control" id="" name="spec" value="{{ $material->spec }}">
    </div> -->
    <button type="submit" class="btn btn-success">Simpan Data</button>
</form>
</div>

@endsection