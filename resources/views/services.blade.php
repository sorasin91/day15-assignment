@extends('layout')

@section('content')
    <h1 style="text-align: center">Services</h1>

    @if(empty($services))
        <p style="text-align: center">No content found.</p>
    @else
        <ul style="list-style: none">
            @foreach($services as $service)
                <li style="text-align: center">{{ $service }}</li>
            @endforeach
        </ul>
    @endif
@endsection