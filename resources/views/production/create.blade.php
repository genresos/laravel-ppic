@extends('layout.app')

@section('title', 'Halaman Tambah User ')
@section('halaman', 'Halaman Tambah User')

@section('content')

<h2>Tambah Data</h2>

<div class="col-12">


<form action="{{ route('production-store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Item</label>
        <select name="part_no" class="form-control part_no" id="part_no">
        @foreach($finishgood as $item)
            <option value="{{  $item->part_no }}">{{ $item->part_no }}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Jumlah</label>
        <input type="text" class="form-control {{ $errors->has('jumlah') ? 'is-invalid' : '' }}" id="jumlah" name="jumlah">
        @if ($errors->has('jumlah'))
            <div class="text-danger">
            <p>{{ $errors->first('jumlah')}}</p>
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="">Karyawan</label>
        <input type="text" class="form-control {{ $errors->has('karyawan') ? 'is-invalid' : '' }}" id="karyawan" name="karyawan">
        @if ($errors->has('karyawan'))
            <div class="text-danger">
            <p>{{ $errors->first('karyawan')}}</p>
            </div>
        @endif
    </div>
    <button type="submit" class="btn btn-success">Simpan Data</button>
</form>
</div>

@endsection

@section('css')
<!-- Select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('script')
<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>

    $(document).ready(function() {
      $('.part_no_id').select2();
    });
    $('#part_no_id').empty();
                for (var i = 0; i < data.length; i++) {
                    $('#part_no_id')
                    .append($('<option>', data[i]['id'])
                    .text(data[i]['part_no']));
                }
   
</script>
@endsection