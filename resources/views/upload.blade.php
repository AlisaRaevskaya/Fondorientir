@extends('layout')
@section('content')

    <div class="container" >
        <div class="row container">
            <div class="md-1"></div>
            <div class="col-md-6 m30">
                <div class="card">
                    <div class="card-header">Загрузка картинки</div>
                    <div class="card-body">
                        <form action="{{route('image.store.post', $news_id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="file"></label>
                                <input type="file"class="form-control" name="image" id="file">
                            </div>

                            <div class="form-group" >
                            <input type="submit" class="btn btn-success form-control" value="Загрузить">
                            </div>
                        </form>

                   @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<a href="{{ url()->previous()}}" class="btn btn-default">Назад</a>
                </div>
            </div>
                <div class="md-1"></div>
            </div>
        </div>
    </div>

@endsection
