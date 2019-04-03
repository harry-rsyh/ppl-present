@extends('front.layouts')

@section('content')
<div class="row">
    
    @include('front.minuman.add-galeri')
    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" data-toggle="modal" data-target="#modalGaleri">
        <div class="card mb-4 py-2 border-left-primary">
            <img src="img/menu-image11.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Lemon Tea</h3>
                        <p>Es / Panas</p>
                    </div>
                    <div class="menu-price">
                    <span>Rp.10K</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kotak -->

    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" data-toggle="modal" data-target="#modalGaleri">
        <div class="card mb-4 py-2 border-left-primary">
            <img src="img/menu-image22.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Milshake</h3>
                        <p>Oreo / Coklat</p>
                    </div>
                    <div class="menu-price">
                    <span>Rp.12K</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kotak -->

    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" data-toggle="modal" data-target="#modalGaleri">
        <div class="card mb-4 py-2 border-left-primary">
            <img src="img/menu-image33.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Teh</h3>
                        <p>Es / Panas</p>
                    </div>
                    <div class="menu-price">
                    <span>Rp.5K</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kotak -->
    
    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" data-toggle="modal" data-target="#modalGaleri">
        <div class="card mb-4 py-2 border-left-primary">
            <img src="img/menu-image44.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Es Cendol</h3>
                        <p>Biasa / Jumbo</p>
                    </div>
                    <div class="menu-price">
                    <span>Rp.13K</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kotak -->

    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" data-toggle="modal" data-target="#modalGaleri">
        <div class="card mb-4 py-2 border-left-primary">
            <img src="img/menu-image55.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Es Kelapa</h3>
                        <p>Rasa / Murni</p>
                    </div>
                    <div class="menu-price">
                    <span>Rp.15K</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kotak -->

    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" data-toggle="modal" data-target="#modalGaleri">
        <div class="card mb-4 py-2 border-left-primary">
            <img src="img/menu-image66.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Es Tebu</h3>
                        <p>Murni / Es <p>
                    </div>
                    <div class="menu-price">
                    <span>Rp.8K</span>
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
       $("#fMinuman").addClass("active");
    });
</script>
@endsection