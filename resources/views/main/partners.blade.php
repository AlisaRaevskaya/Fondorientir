@extends('layout')
@section('content')

@foreach ($partners as $item)
    {!!$item->content!!}
@endforeach

@endsection
