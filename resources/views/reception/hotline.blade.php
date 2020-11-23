@extends('layout')

@section('content')
    @foreach ($page as $item)
        {!! $item->content !!}
    @endforeach
@endsection
