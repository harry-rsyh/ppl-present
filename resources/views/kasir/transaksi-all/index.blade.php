@extends('kasir.layouts')

@section('content')
<div class="col-lg-6 col-md-6">
    <div class="card shadow mb-4 border-left-primary">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> 
                <i class="mdi mdi-playlist-check" style="font-size: 1.2em"></i> List Transaksi
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataPesanan" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Meja</th>
                            <th>Email</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>7</td>
                            <td>udangkecap@gmail.com</td>
                            <td>Rp 120.000</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>kacangijo@gmail.com</td>
                            <td>Rp 67.000</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>esteh@gmail.com</td>
                            <td>Rp 45.000</td>
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
       $("#fallTransaksi").addClass("active");
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
    });
</script>
@endsection