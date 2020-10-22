@extends('layout')
@section('content')
<section >
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="entity_wrapper">

<div class="row justify-content-center">
<h1>Добро пожаловать!</h1>
</div>
    <!-- <div class="entity_title">
        <h1><a href="#">Chevrolet car-saving technology delivers 'superhuman' sight when you need it most</a></h1>
    </div> -->
    <!-- entity_title -->
    @foreach($images as $key=>$img) @endforeach

    <div class="entity_thumb">
        <img class="img-responsive" src="/assets/images/{{$images[0]->name}}"
         alt="feature-top">
    </div>
    <!-- entity_thumb -->


    <div class="entity_content">
    @foreach($mainContent as $item)
    <p>{{$item->content}}</p>
    @endforeach
    </div>

    <div class="entity_thumb">
        <img class="img-responsive" src="/assets/images/{{$images[1]->name}}" alt="feature-top">
    </div>

    @include('blocks.subscribe')
    @include('blocks.calculator')
</div>
</div>
</div>
</div>
</section>
<!-- entity_wrapper -->

<!--Advertisement-->


@endsection
