@extends('layout')
@section('content')

@foreach ($history as $item)
    {!!$item->content!!}
@endforeach

@endsection
