@extends('front.layouts')

@section('content')
<div class="row">
    
    @include('front.makanan.add-galeri')
    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" data-toggle="modal" data-target="#modalGaleri">
        <div class="card mb-4 py-2 border-left-primary">
            <img src="img/menu-image111.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Pei Jeruk</h3>
                        <p>Jeruk & Cream</p>
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
            <img src="img/menu-image222.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Sup Buah</h3>
                        <p>Biasa / Komplit</p>
                    </div>
                    <div class="menu-price">
                    <span>Rp.11K</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kotak -->

    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" data-toggle="modal" data-target="#modalGaleri">
        <div class="card mb-4 py-2 border-left-primary">
            <img src="img/menu-image333.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>M Lenggang</h3>
                        <p>Rasa / Mix</p>
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
            <img src="img/menu-image444.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Es Cream </h3>
                        <p>Jeruk / Timun</p>
                    </div>
                    <div class="menu-price">
                    <span>Rp.7K</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kotak -->

    <!-- Kotak -->
    <div class="col-lg-3 col-md-4" role="button" data-toggle="modal" data-target="#modalGaleri">
        <div class="card mb-4 py-2 border-left-primary">
            <img src="img/menu-image555.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Kue Lapis</h3>
                        <p>Rasa / Mix</p>
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
            <img src="img/menu-image666.jpg" class="img-responsive img-fluid p-2">
            <div class="card-body">
                <div class="menu-info">
                    <div class="menu-item">
                        <h3>Serabi</h3>
                        <p>Rasa / Mix</p>
                    </div>
                    <div class="menu-price">
                    <span>Rp.10K</span>
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
       $("#fDessert").addClass("active");
    });
</script>
@endsection