
@extends('layout')
@section('content')
<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">

<div class="category_article_wrapper conatiner">
@if(isset($topics))
    @foreach ($topics as $top)

    <div class="entity_title">
        <h1>{{$top->title}}</h1>
    </div>
    <!-- entity_title -->

    <div class="entity_meta">
       {{$top->dateline}}
    </div>
    <!-- entity_meta -->
    <!-- rating -->

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

    <div class="entity_thumb">
        <img class="img-responsive" src="/assets/images/{{$top->image}}.jpg" alt="feature-top">
    </div>

    <div class="entity_content">
        <p>{{$top->body}} </p>
    </div>
    <!--entity_content-->

    <div class="entity_comments">
    <div class="entity_inner__title">
        <h2>Добавить комментарий</h2>
    </div>
    <!--Entity Title -->

    <div class="entity_comment_from">
        <form action="/commentForm" method="POST">
        @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="inputName" name="name"
                placeholder="Name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control"
                id="inputEmail" name="email"placeholder="Email">
            </div>
            <div class="form-group comment">
                <textarea class="form-control"
                id="inputComment" placeholder="Comment"></textarea>
            </div>
            <div class="form-group hidden">
                <input type="text" name="topic_reply_id" value="{{$top->id}}">
            </div>

            <div id="com_success"></div>
            <div class="form-group">
                <input type="submit" class="form-control"
                placeholder="Отправить" class="btn_comment">
            </div>
        </form>
    </div>
    <!--Entity Comments From -->

</div>
<!--Entity Comments -->

@if($comments)
@include('blocks.comments')
@endif

</div>
@endforeach
@endif

</div>
</div>
</div>
</section>
@endsection


