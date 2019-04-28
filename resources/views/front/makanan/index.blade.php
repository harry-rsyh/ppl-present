@extends('front.layouts')

@section('content')
<div class="row">
    
    @include('front.makanan.add-galeri')
    
    @foreach($Makanan as $makanan)
    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" data-toggle="modal" data-target="#modalGaleri">
        <div class="card shadow mb-4 py-2 border-left-primary">
            <img src="{{$makanan->foto}}" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>{{$makanan->menu}}</h3>
                        <p>{{$makanan->label}}</p>
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
<script>
    $(function(){
       $("#fMakanan").addClass("active");
    });
</script>
@endsection