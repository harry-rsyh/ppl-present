@extends('front.layouts')

@section('content')
<div class="row">
    
    @include('front.dessert.add-galeri')
    
    @foreach($Makanan as $dessert)
    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" data-toggle="modal" data-target="#modalGaleri">
        <div class="card mb-4 py-2 border-left-primary">
            <img src="{{$dessert->foto}}" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>{{$dessert->menu}}</h3>
                        <p>{{$dessert->label}}</p>
                    </div>
                    <div class="menu-price">
                    <span>{{$dessert->harga}}</span>
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
       $("#fDessert").addClass("active");
    });
</script>
@endsection