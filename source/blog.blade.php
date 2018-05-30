@extends('_layouts.master')

@section('title', 'Daniel Morgan - Software development blog')

@section('body')
    @foreach ($posts as $post)
        <div class="content">
            <a href="{{ $post->getPath() }}">
                {{ $post->title }}
            </a>
        </div>
    @endforeach
@endsection
