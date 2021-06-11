@extends('layout.app')

@section('title', 'Halaman Tambah User ')
@section('halaman', 'Halaman Tambah User')

@section('content')

<h2>Tambah Data</h2>

<div class="col-12">


<form action="{{ route('material-store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Job</label>
        <input type="text" class="form-control  {{ $errors->has('job') ? 'is-invalid' : '' }}" id="" name="job">
        @if ($errors->has('job'))
            <div class="text-danger">
            <p>{{ $errors->first('job')}}</p>
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="">Part No</label>
        <input type="text" class="form-control {{ $errors->has('part_no') ? 'is-invalid' : '' }}" id="" name="part_no">
        @if ($errors->has('part_no'))
            <div class="text-danger">
            <p>{{ $errors->first('part_no')}}</p>
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="">Job No</label>
        <input type="text" class="form-control {{ $errors->has('job_no') ? 'is-invalid' : '' }}" id="" name="job_no">
        @if ($errors->has('job_no'))
            <div class="text-danger">
            <p>{{ $errors->first('job_no')}}</p>
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="">Model</label>
        <input type="text" class="form-control {{ $errors->has('model') ? 'is-invalid' : '' }}" id="" name="model">
        @if ($errors->has('model'))
            <div class="text-danger">
            <p>{{ $errors->first('model')}}</p>
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="">Spec</label>
        <input type="text" class="form-control {{ $errors->has('spec') ? 'is-invalid' : '' }}" id="" name="spec">
        @if ($errors->has('spec'))
            <div class="text-danger">
            <p>{{ $errors->first('spec')}}</p>
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="">Stock</label>
        <input type="text" class="form-control {{ $errors->has('stock') ? 'is-invalid' : '' }}" id="" name="stock">
        @if ($errors->has('stock'))
            <div class="text-danger">
            <p>{{ $errors->first('stock')}}</p>
            </div>
        @endif
    </div>
    <button type="submit" class="btn btn-success">Simpan Data</button>
</form>
</div>

@endsection