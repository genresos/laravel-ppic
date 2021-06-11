@extends('layout.app')

@section('title', 'Halaman Tambah User ')
@section('halaman', 'Halaman Tambah User')

@section('content')

<h2>Tambah Data</h2>

<div class="col-12">


<form action="{{ route('delivery-store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Item</label>
        <select name="kode_order" class="form-control kode_order" id="kode_order">
        @foreach($purchase as $item)
            <option value="{{  $item->kode_order }}" selected hidden>{{ $item->kode_order }}</option>  
            @endforeach         
        </select>
    </div>
    <!-- <div class="form-group">
        <label for="">Customer</label>
        <input type="text" class="form-control customer {{ $errors->has('customer') ? 'is-invalid' : '' }}" id="customer" placeholder="Nama Customer" name="customer">
        @if ($errors->has('customer'))
            <div class="text-danger">
            <p>{{ $errors->first('customer')}}</p>
            </div>
        @endif
    </div> -->
    <div class="form-group">
        <label for="">Jumlah</label>
        <input type="text" class="form-control {{ $errors->has('jumlah') ? 'is-invalid' : '' }}" id="terkirim_id" placeholder="Jumlah" name="terkirim_id" >
        @if ($errors->has('jumlah'))
            <div class="text-danger">
            <p>{{ $errors->first('jumlah')}}</p>
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="">Driver</label>
        <input type="text" class="form-control {{ $errors->has('driver') ? 'is-invalid' : '' }}" id="driver" placeholder="Nama Driver" name="driver">
        @if ($errors->has('driver'))
            <div class="text-danger">
            <p>{{ $errors->first('driver')}}</p>
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
      $('.kode_order').select2();
    });
    $('#kode_order_id').empty();
                for (var i = 0; i < data.length; i++) {
                    $('#kode_order_id')
                    .append($('<option>', data[i]['id'])
                    .text(data[i]['kode_order']));
                }
   
</script>
@endsection