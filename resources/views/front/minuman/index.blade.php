@extends('front.layouts')

@section('content')
<div class="row">
    
    @include('front.minuman.add-galeri')

    @foreach($Makanan as $minuman)
    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" data-toggle="modal" onclick="addPesanan({{$minuman->id_menu}});">
        <div class="card mb-4 py-2 border-left-primary">
            <img src="{{$minuman->gambar}}" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>{{$minuman->menu}}</h3>
                        <p>{{$minuman->label}}</p>
                    </div>
                    <div class="menu-price">
                    <span>{{$minuman->harga}}</span>
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
       $("#fMinuman").addClass("active");
    });
</script>
@endsection