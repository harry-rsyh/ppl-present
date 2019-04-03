@extends('front.layouts')

@section('content')
<div class="row">
    
    @include('front.makanan.add-galeri')
    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" data-toggle="modal" data-target="#modalGaleri">
        <div class="card shadow mb-4 py-2 border-left-primary">
            <img src="img/menu-image1.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Udang Kecap</h3>
                        <p>Udang / Bumbu Kecap</p>
                    </div>
                    <div class="menu-price">
                    <span>Rp.25K</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kotak -->


<!-- Kotak -->
<div class="col-lg-3 col-md-4" role="button" data-toggle="modal" data-target="#modalGaleri">
        <div class="card shadow mb-4 py-2 border-left-primary">
            <img src="img/menu-image1.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Udang Kecap</h3>
                        <p>Udang / Bumbu Kecap</p>
                    </div>
                    <div class="menu-price">
                    <span>Rp.25K</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kotak -->


    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" data-toggle="modal" data-target="#modalGaleri">
        <div class="card shadow mb-4 py-2 border-left-primary">
            <img src="img/menu-image2.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Ikan Bakar</h3>
                        <p>Bandeng / Bawal</p>
                    </div>
                    <div class="menu-price">
                    <span>Rp.20K</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kotak -->

    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" data-toggle="modal" data-target="#modalGaleri">
        <div class="card mb-4 py-2 border-left-primary">
            <img src="img/menu-image3.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Mie Goreng</h3>
                        <p>Jumbo / Pedas</p>
                    </div>
                    <div class="menu-price">
                    <span>Rp.18K</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kotak -->
    
    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" data-toggle="modal" data-target="#modalGaleri">
        <div class="card mb-4 py-2 border-left-primary">
            <img src="img/menu-image4.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Nasgor Telor</h3>
                        <p>Biasa / Jumbo</p>
                    </div>
                    <div class="menu-price">
                    <span>Rp.20K</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kotak -->

    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" data-toggle="modal" data-target="#modalGaleri">
        <div class="card mb-4 py-2 border-left-primary">
            <img src="img/menu-image6.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Ketoprak</h3>
                        <p>Non Sayur / Sayur</p>
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
            <img src="img/menu-image5.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Soto Kudus</h3>
                        <p>Besar / Kecil</p>
                    </div>
                    <div class="menu-price">
                    <span>Rp.14K</span>
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