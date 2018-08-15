@extends('_layouts.master')

@section('title', 'Daniel Morgan - Software development blog')

@section('body')
    <div class="Content">
        <h3 class="text-xl font-semibold text-blue-darkest">Blog posts</h3>

        @foreach ($posts as $post)
            <div class="mt-4 text-xl text-blue-darkest">
                <a href="{{ $post->getPath() }}">
                    {{ $post->title }}
                </a>
                &nbsp;
                <span>&hellip;</span>
                &nbsp;
                {{ date('M d, Y', $post->date) }}
            </div>
        @endforeach
    </div>
@endsection
