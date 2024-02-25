@extends('layout')

@section('content')
    <p>YouTube: "Laravel From Scratch 2022 | +4 Hour Course</p>
    <p>Voltooid tem "Creating a layout and sections" 25/2/2024</p>
    <h2>{{$heading}}</h2>
    @unless(count($listings)==0)
        @foreach($listings as $listing)
            <a href="/listings/{{$listing['id']}}"><h3>{{$listing['title']}}</h3></a>
            <p>{{$listing['description']}}</p>
        @endforeach
    @else
        <p>No listings found.</p>
        {{-- @if (count($listings)==0)
        <p>No listings found.</p>
        @endif --}}
    @endunless
@endsection
