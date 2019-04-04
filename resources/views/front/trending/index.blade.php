@extends('front.layouts')

@section('content')
        <!-- Set up your HTML -->
            <div class="owl-carousel">
                <div style="background-image: url('img/slider-image1.jpg');"width="100%" height="480" ></div>
                <img src="img/slider-image1.jpg" class="img-responsive img-fluid p-2">
                <img src="img/slider-image2.jpg" class="img-responsive img-fluid p-2">
                <img src="img/slider-image3.jpg" class="img-responsive img-fluid p-2">
                <img src="img/slider-image1.jpg" class="img-responsive img-fluid p-2">
                <img src="img/slider-image2.jpg" class="img-responsive img-fluid p-2">
                <img src="img/slider-image3.jpg" >
            </div>
                
                
@endsection

@section('addScript')
<script>
    $(function(){
       $("#fTrending").addClass("active");
       $(".owl-carousel").owlCarousel({
        items:1,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true
       });
    });
</script>
@endsection