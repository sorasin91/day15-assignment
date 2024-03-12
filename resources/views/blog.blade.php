@extends('layout')

@section('title', 'Blog')

@section('content')
<h1 style="text-align: center">Blog</h1>

@if(empty($blog))
    <p style="text-align: center">No content found.</p>
@else
    <ul>
        @foreach($blog as $blog)
            <li>{{ $blog }}</li>
        @endforeach
    </ul>
@endif
@endsection