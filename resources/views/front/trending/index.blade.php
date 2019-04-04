@extends('front.layouts')

@section('content')
    <div class="owl-carousel owl-theme">
        <img src="img/slider-image1.jpg" class="img-responsive img-fluid p-2">
        <img src="img/slider-image2.jpg" class="img-responsive img-fluid p-2">
        <img src="img/slider-image3.jpg" class="img-responsive img-fluid p-2">
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
        autoplayTimeout:3000,
       });
    });
</script>
@endsection