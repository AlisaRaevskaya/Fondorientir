@extends('layout')
@section('content')
<section >
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="entity_wrapper">
    <!-- <div class="entity_title">
        <h1><a href="#">Chevrolet car-saving technology delivers 'superhuman' sight when you need it most</a></h1>
    </div> -->
    <!-- entity_title -->

    <div class="entity_thumb">
        <img class="img-responsive" src="assets/images/main.jpg" alt="feature-top">
    </div>
    <!-- entity_thumb -->


    <div class="entity_content">
    @foreach($mainContent as $item)
    <p>{{$item->content}}</p>
    @endforeach
    </div>

    @include('blocks.subscribe')

</div>
</div>
</div>
</div>
</section>
<!-- entity_wrapper -->

<!--Advertisement-->


@endsection
