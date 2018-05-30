@extends('_layouts.master')

@section('title', $page->title . ' - Daniel Morgan')

@section('body')
    <h2>{{ $page->year }} {{ $page->title }}</h2>

    <div class="content">
        @yield('content')
    </div>
@endsection
