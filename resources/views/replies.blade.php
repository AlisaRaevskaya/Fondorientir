
@extends('layout')
@section('content')
<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-10">


<div class="category_article_wrapper container">
@if(isset($topics))
@foreach ($topics as $top)

    <div class="entity_title">
        <h1>{!!$top->title!!}</h1>
    </div>
    <!-- entity_title -->

    <div class="entity_meta">
       {{$top->dateline}}
    </div>
    <!-- entity_meta -->

    @if(isset($top->image))
    <div class="entity_thumb">
        <img class="img-responsive" src="/assets/images/{{$top->image}}" alt="feature-top">
    </div>
    @endif
    <div class="entity_content">
        <p>{!!$top->body!!}</p>
    </div>
    <!--entity_content-->


<div class="entity_comments">
    <div class="entity_inner__title">
        <h2>Добавить комментарий</h2>
    </div>
    <!--Entity Title -->

    <div class="entity_comment_from">
        <form action="/commentForm" method="POST" name="comForm">
        @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="inputName"
                name="name"
                placeholder="Name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control"
                id="inputEmail" name="email" placeholder="Email">
            </div>
            <div class="form-group comment">
                <textarea class="form-control"
                id="inputComment" placeholder="Comment" name="body"></textarea>
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
@endforeach
    @endif



@if($comments)
<!--Readers Comment-->
<div class="readers_comment">

    <div class="entity_inner__title header_purple">
        <h2>Комментарии</h2>
    </div>
    <!-- entity_title -->

    <div class="media">
        @foreach($comments as $comment)

        <div class="media-left">
            <a href="#">
                <img alt="64x64" class="media-object" data-src="assets/img/reader_img1.jpg"
                     src="assets/img/reader_img1.jpg" data-holder-rendered="true">
            </a>
        </div>

        <div class="media-body">
            <h2 class="media-heading"><a href="#">{{$comment->name}}</a></h2>
            {{$comment->body}}

            <div class="entity_vote">
                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>

                <a href="/comment_reply"><span class="reply_ic">Ответить</span></a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
</div>

</div>
</div>
</div>
</section>
<script src="/assets/js/com-ajax.js"></script>
<script src="/assets/js/law-ajax.js"></script>
@endsection


