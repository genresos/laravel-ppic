@extends('layout.app')

@section('title', 'Halaman Tambah User ')
@section('halaman', 'Halaman Tambah User')

@section('content')

<h2>Tambah Data</h2>

<div class="col-12">


<form action="{{ route('purchaseorder-store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Kode Order</label>
        <input type="text" class="form-control  {{ $errors->has('kode_order') ? 'is-invalid' : '' }}" id="" value="{{ $kode_order }}" name="kode_order" readonly>
        @if ($errors->has('kode_no'))
            <div class="text-danger">
            <p>{{ $errors->first('kode_no')}}</p>
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="">Jenis</label>
        <select name="type_order" class="form-control" id="type_order">
        <option value="materials">Material</option>
        <option value="finish_goods">Finish Goods</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Item</label>
        <select name="type_order_id" class="form-control type_order_id" id="type_order_id">
            <option value="" selected hidden>--Pilih Item--</option>            
        </select>
    </div>
    <div class="form-group">
        <label for="">Customer</label>
        <input type="text" class="form-control {{ $errors->has('customer') ? 'is-invalid' : '' }}" name="customer">
        @if ($errors->has('customer'))
            <div class="text-danger">
            <p>{{ $errors->first('customer')}}</p>
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="">Jumlah</label>
        <input type="text" class="form-control {{ $errors->has('stock_id') ? 'is-invalid' : '' }}"  name="stock_id">
        @if ($errors->has('stock_id'))
            <div class="text-danger">
            <p>{{ $errors->first('stock_id')}}</p>
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Status</label>
        <select name="status" class="form-control">
            <option value="1">Berjalan</option>
            <option value="2">Selesai</option>
        </select>
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
      $('.type_order_id').select2();
    });
  
    $('#type_order').on('change', function() {
        var selected = $(this).find(":selected").val();
        $.ajax({
            type: 'get',
            data: {'type_order': selected},
            url: "{{ route('purchaseorder-item') }}",
            dataType: 'json',
            success: function(data){
                $('#type_order_id').empty('');
                for (var i = 0; i < data.length; i++) {
                    $('#type_order_id')
                    .append($('<option>', data[i]['id'])
                    .text(data[i]['part_no']));
                }
               console.log(data);
            },
            error: function(res){
                $('#message').text('Error!');
                $('.dvLoading').hide();
            }
        });
    });
</script>
@endsection