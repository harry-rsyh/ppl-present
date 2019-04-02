@extends('front.layouts')

@section('content')
<h4>trending</h4>
@endsection

@section('addScript')
<script>
    $(function(){
       $("#fTrending").addClass("active");
    });
</script>
@endsection