@extends('pelayan.layouts')

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
                        
 <ul>
                    <li>
                    <a href="#">
                        <h2>Title #1</h2>
                        <p>Text Content #1</p>
                    </a>
                    </li>
                    <li>
                    <a href="#">
                        <h2>Title #2</h2>
                        <p>Text Content #2</p>
                    </a>
                    </li>
                    <li>
                    <a href="#">
                        <h2>Title #3</h2>
                        <p>Text Content #3</p>
                    </a>
                    </li>
                    <li>
                    <a href="#">
                        <h2>Title #4</h2>
                        <p>Text Content #4</p>
                    </a>
                    </li>
                    <li>
                    <a href="#">
                        <h2>Title #5</h2>
                        <p>Text Content #5</p>
                    </a>
                    </li>
                    <li>
                    <a href="#">
                        <h2>Title #6</h2>
                        <p>Text Content #6</p>
                    </a>
                    </li>
                    <li>
                    <a href="#">
                        <h2>Title #2</h2>
                        <p>Text Content #2</p>
                    </a>
                    </li>
                    <li>
                    <a href="#">
                        <h2>Title #7</h2>
                        <p>Text Content #7</p>
                    </a>
                    </li>
                    <li>
                    <a href="#">
                        <h2>Title #8</h2>
                        <p>Text Content #8</p>
                    </a>
                    </li>
                </ul>
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