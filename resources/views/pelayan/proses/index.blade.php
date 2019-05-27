@extends('pelayan.layouts')
@section('content')
<div class="col-lg-6 col-md-6">
    <div class="card shadow mb-4 border-left-primary">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> 
                <i class="mdi mdi-checkbox-marked-circle-outline   style="font-size: 1.2em></i> Proses Pesanan 
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataPesanan" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomer</th>
                            <th>Pesanan</th>
                            <th>Banyak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Udang Kecap</td>
                            <td>2</td>
                            <!-- <td>@include('kasir.pembayaran.action-button')</td> -->
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ikan Bakar</td>
                            <td>3</td>
                            <!-- <td>@include('kasir.pembayaran.action-button')</td> -->
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Mie Goreng</td>
                            <td>4</td>
                            <!-- <td>@include('kasir.pembayaran.action-button')</td> -->
                        </tr>
                        

                    </tbody>
                </table>                
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataPesanan" width="0%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Aksi</th>       
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>@include('pelayan.proses.action-button')</td>
                        </tr>
                    </tbody>
                </table>   
            </div>
        </div>
    </div>
</div>
@endsection

@section('addScript')
<script>
    $(function(){
       $("#fPembayaran").addClass("active");
       $('#dataPesanan').DataTable( {
            "paging":   false,
            "ordering": false,
            "info":     false,
            'columnDefs': [
            {
                "targets": 0,
                "className": "text-center",
            }],
        });
        $('#dataPesanan').dataTable( {
            "bDestroy": true,
            "paging":   false,
            "ordering": false,
            "info":     false,
            "searching": false,
        });
    });
</script>
@endsection