@extends('layout')
@section('content')


@foreach ($reports as $item)
    {!!$item->content!!}
@endforeach

@endsection
