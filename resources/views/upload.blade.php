@extends('layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="md-1"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Uploader</div>
                    <div class="card-body">
                        <form action="{{ route('image.upload.post')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="file"></label>
                                <input type="file" class="form-control" name="file" id="file">
                            </div>
                            <div>
                            <input type="submit" class="btn btn-success form-control" value="Загрузить" style="">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="md-1"></div>
            </div>
        </div>
    </div>

@endsection
