@extends('layout')

@section('title', 'About')

@section('content')
<h1 style="text-align: center">About us</h1>

@if(empty($about))
    <p style="text-align: center">No content found.</p>
@else
    <ul>
        @foreach($about as $about)
            <li>{{ $about }}</li>
        @endforeach
    </ul>
@endif
@endsection