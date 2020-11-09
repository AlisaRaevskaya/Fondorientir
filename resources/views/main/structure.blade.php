@extends('layout')
@section('content')

@foreach ($structure as $item)
    {!!$item->content!!}
@endforeach

@endsection
