@extends('front.layouts')

@section('content')
<div class="row">
    
    @include('front.makanan.add-galeri')
    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" data-toggle="modal" data-target="#modalGaleri">
        <div class="card mb-4 py-2 border-left-primary">
            <img src="img/menu.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Self-made Salad</h3>
                        <p>Green / Fruits / Healthy</p>
                    </div>
                    <div class="menu-price">
                        <span>$18</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kotak -->

    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" data-toggle="modal" data-target="#modalGaleri">
        <div class="card mb-4 py-2 border-left-primary">
            <img src="img/menu.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Self-made Salad</h3>
                        <p>Green / Fruits / Healthy</p>
                    </div>
                    <div class="menu-price">
                        <span>$18</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kotak -->

</div>
@endsection

@section('addScript')
<script>
    $(function(){
       $("#fMakanan").addClass("active");
    });
</script>
@endsection