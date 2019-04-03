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


    
</div>
@endsection

@section('addScript')
<script>
    $(function(){
       $("#fMakanan").addClass("active");
    });
</script>
@endsection