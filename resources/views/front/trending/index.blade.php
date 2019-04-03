@extends('front.layouts')

@section('content')
<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller">
                        <h2 class="tm-block-title">Storage Information</h2>
                        <div id="pieChartContainer">
                            <canvas id="pieChart" class="chartjs-render-monitor" width="200" height="200"></canvas>
                        </div>                        
                    </div>
                </div>
        <!-- Set up your HTML -->
                <div class="owl-carousel">
                <img src="img/slider-image1.jpg" class="img-responsive img-fluid p-2">
                <img src="img/slider-image2.jpg" class="img-responsive img-fluid p-2">
                <img src="img/slider-image3.jpg" class="img-responsive img-fluid p-2">
                    <!-- <div> Your Content </div>
                    <div> Your Content </div>
                    <div> Your Content </div>
                    <div> Your Content </div>
                    <div> Your Content </div>
                    <div> Your Content </div> -->
                </div>
                
@endsection

@section('addScript')
<script>
    $(function(){
       $("#fTrending").addClass("active");
       $(".owl-carousel").owlCarousel();
    });
</script>
@endsection