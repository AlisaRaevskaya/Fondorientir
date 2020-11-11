@extends('layout')
@section('content')


<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">

<div class="col-md-1"></div>

<div class="col-md-10">
<div class="entity-wrapper">
@foreach ($bankinfo as $item)
    {!!$item->content!!}
@endforeach
</div>
</div>
<div class="col-md-1"></div>
</div></div>
</section>
@endsection
