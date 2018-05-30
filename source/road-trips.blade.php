@extends('_layouts.master')

@section('title', 'Daniel Morgan - Software development blog')

@section('body')
    @foreach ($roadTrips as $roadTrip)
        <div class="content">
            <a href="{{ $roadTrip->getPath() }}">
                {{ $roadTrip->title }}
            </a>
        </div>
    @endforeach
@endsection
