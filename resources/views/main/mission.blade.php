@extends('layout')
@section('content')


@foreach ($mission as $item)
    {!!$item->content!!}
@endforeach

@endsection
