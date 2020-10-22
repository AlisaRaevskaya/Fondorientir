@extends('layout')
@section('content')
<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">

  <div class="row justify-content-center">
  <h1 style="text-decoration:underline">Вопрос-ответ</h1>
  </div>

@foreach($replies as $reply)
<div class="entity_wrapper">

    <div class="entity_title">
        <h2 style="text-decoration:underline" >
        <a href="{{route('faq.id', $reply->id)}}" target="_self">
           {{$reply->title}}</a>
        </h2>
    </div>
    <!-- entity_title -->

        <p>
           {{$reply->intro}}</a>
        </p>

    <div class="entity_meta">
        {{$reply->dateline}}
    </div>
    <!-- entity_meta -->

   </div>

    <div class="entity_social">
        <a href="#" class="icons-sm sh-ic"><i class="fa fa-share-alt"></i><b>424</b>
            <span class="share_ic">Shares</span>
        </a>
        <a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
        <!--Twitter-->
        <a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
        <!--Google +-->
        <a href="#" class="icons-sm inst-ic"><i class="fa fa-google-plus"> </i></a>
        <!--Linkedin-->
        <a href="#" class="icons-sm tmb-ic"><i class="fa fa-ge"> </i></a>
        <!--Pinterest-->
        <a href="#" class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
        <span class="arrow">&raquo;</span>
    </div>
    <!-- entity_social -->
    <h3 class="widget_divider"><a href="/faq/{{$reply->id}}" target="_self">
          Подробнее>></a></h3>

    <!-- entity_content -->

</div>
<!-- entity_wrapper -->
@endforeach


<nav aria-label="Page navigation" class="pagination_section">
    <ul class="pagination">
        <li>{{$replies->links()}}</li>
    </ul>
</nav>


<!--  -->

</div>
</div>
</div>
</section>
@endsection
