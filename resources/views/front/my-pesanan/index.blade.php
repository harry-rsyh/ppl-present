@extends('front.layouts')

@section('content')
<div class="col-lg-6 col-md-6">
    <div class="card shadow mb-4 border-left-primary">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> 
          <i class="mdi mdi-file-document-edit" style="font-size: 1.2em"></i> Info Pesanan
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataPesanan" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Menu Pesanan</th>
                <th>Jumlah Pesanan</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Udang Kecap</td>
                <td>1</td>
                <td>Rp 25.000</td>
            </tr>
            <tr>
                <td>Mie Goreng</td>
                <td>2</td>
                <td>Rp 36.000</td>
            </tr>
            <tr>
                <td>Es Cendol</td>
                <td>2</td>
                <td>Rp 26.000</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2" style="text-align:right">Total:</th>
                <th></th>
            </tr>
        </tfoot>
    </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('addScript')
<script>
    $(function(){
       $("#fPesanan").addClass("active");
       $('#dataPesanan').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false,
        // "dom": '<"top"i>rt<"bottom"flp><"clear">',
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 2 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            pageTotal = api
                .column( 2, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update footer
            $( api.column( 2 ).footer() ).html(
                // '$'+ total
                'Rp 87.000'
            );
        }
        });
    });
</script>
@endsection