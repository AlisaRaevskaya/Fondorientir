<!-- Left Section -->
@extends('layout')

@section('content')

<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">

<div class="col-md-1"></div>

<div class="col-md-10">
<div class="entity-wrapper">

<div class="row justify-content-center">
<h1 style="text-decoration:underline">Новости</h1>
</div>

@foreach($news as $item)
    <div class="entity_title">
        <h1><a href="{{route('news.category.id', [$category->name, $item->id])}}" target="_self">
        {{$item->title}}</a>
        </h1>
    </div>
    <!-- entity_title -->

    <div class="entity_meta">
        <p>{{$item->dateline}}</p>
    </div>
    <!-- entity_meta -->
    <div class="entity_img">
        <img src="/assets/images/news/{!!$item->image!!}" alt="{{$item->title}}">
    </div>

    <div class="">
        <p>{!!$item->intro!!}</p>
    </div>

<div>
    <a href="{{route('news.category.id', [$category->name, $item->id])}}" class="btn btn-outline-primary btn-lg active" role="button" aria-pressed="true">
        Подробнее>>></a>
</div>
<hr>

@endforeach


    <nav aria-label="Page navigation" class="pagination_section">
    <ul class="pagination">
        <li>{{$news->links()}}</li>
    </ul>
</nav>



</div>
<!-- entity_wrapper -->


<!--Advertisement-->
</div>
<!-- col-md-4 -->
<div class="col-md-1"></div>

</div>
<!-- row -->

</div>
<!-- container -->

</section>
<!-- entity_section -->



@endsection
<!-- Popular News -->
