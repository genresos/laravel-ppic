    @extends('layout.app')

@section('title', 'Halaman Tambah User ')
@section('halaman', 'Halaman Tambah User')

@section('content')

<h2>Cetak Laporan</h2>

<div class="col-12">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/datepicker/daterangepicker.css') }}"/>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/datepicker/daterangepicker.js') }}"></script>

<form action="{{ route('laporan-cetak') }}" method="GET">
    @csrf
    <div class="form-group">
        <label for="">Jenis Laporan</label>
        <select name="jenis_laporan" id="jenis_laporan" class="form-control">
            <option value="1">Purchase Order</option>
            <option value="2">Data In</option>
            <option value="3">Delivery</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Tanggal Awal</label>
        <input type="date" name="actual_start_date" required value="{{\Carbon\Carbon::parse(now())->format('Y-m-d')}}" class="form-control">
    </div>   
    <div class="form-group">
        <label for="">Tanggal Akhir</label>
        <input type="date" name="actual_end_date" required value="{{\Carbon\Carbon::parse(now())->format('Y-m-d')}}" class="form-control">
    </div>   
    <div class="form-group">
    <button type="submit" class="btn btn-success">Cetak</button>
    </div>   

</script>
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
                $('#type_order_id').empty();
                for (var i = 0; i < data.length; i++) {

                    // alert(data[i]['part_no']);
                    $('#type_order_id')
                    .append($('<option>', data[i]['part_no'])
                    .text(data[i]['part_no']));


                    // $('#type_order').appendTo('<option>'+ data[i]['part_no'] +'</option>');
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