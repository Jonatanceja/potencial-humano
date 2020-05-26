@extends('layouts.default')
@section('content')

@foreach($page->children()->listed() as $part)
@include($part->intendedTemplate(), ['page' => $part])
@endforeach

@endsection