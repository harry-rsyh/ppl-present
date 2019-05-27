@extends('front.layouts')

@section('content')
<div class="row">
    
    @include('front.makanan.add-galeri')
    
    @foreach($Makanan as $makanan)
    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" onclick="addPesanan({{$makanan->id_menu}});">
        <div class="card shadow mb-4 py-2 border-left-primary">
            <img src="{{$makanan->gambar}}" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>{{$makanan->menu}}</h3>
                        <p>{{$makanan->keterangan}}</p>
                    </div>
                    <div class="menu-price">
                    <span>{{$makanan->harga}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kotak -->
    @endforeach

</div>
@endsection

@section('addScript')
<!--MDBootstrap PRO --> -->
<script src="{{ asset('vendor/MDBootstrap-PRO/css')}}"></script>

<script>
    $(function(){
       $("#fMakanan").addClass("active");
    });
    
    function addPesanan(id){
        $('#modalGaleri').modal('show');
        console.log(id);
        $.ajax({
            url : "getId/"+id+"/Makanan",
            type : "GET",
            dataType : "JSON",
            success : function(data){
                $('#exampleModalLabel').text(data.menu);
            },
            error : function(){
                alert("Tidak dapat menyimpan data!");
            }   
        });
    }
</script>
@endsection