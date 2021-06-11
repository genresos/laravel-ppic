@extends('layout.app')

@section('title', 'Halaman Tambah User ')
@section('halaman', 'Halaman Tambah User')

@section('content')

<h2>Edit Data</h2>

<div class="col-12">


<form action="{{ route('purchaseorder-update', $purchase->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Kode Order</label>
        <input type="text" class="form-control" id="" name="kode_order" value="{{ $purchase->kode_order }}"  readonly> 
    </div>
    <div class="form-group">
        <label for="">Jumlah</label>
        <input type="text" class="form-control" id="" name="stock_id" value="{{ $purchase->stock_id }}"  readonly> 
    </div>
    <div class="form-group">
        <label for="">Terkirim</label>
        <input type="text" class="form-control" id="" name="terkirim" value="{{ $purchase->terkirim }}" readonly>
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