@extends('layout')
@section('content')

@foreach ($bankinfo as $item)
    {!!$item->content!!}
@endforeach
@endsection
