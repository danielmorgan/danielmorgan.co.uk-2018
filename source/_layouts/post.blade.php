@extends('_layouts.master')

@section('title', $page->title . ' - Daniel Morgan')

@section('body')
    <h3 class="text-xl font-semibold text-blue-darkest">{{ $page->title }}</h3>

    <div class="Metadata mt-4">
        {{--<div class="level-left">--}}
            {{--@foreach ($page->tags as $tag)--}}
                {{--<div class="level-item">--}}
                    {{--<span class="tag is-light">{{ $tag }}</span>--}}
                {{--</div>--}}
            {{--@endforeach--}}
        {{--</div>--}}

        {{--<div class="level-right">--}}
            {{--<div class="level-item">--}}
                {{--<i class="icon icon-calendar"></i>--}}
            {{--</div>--}}
            {{--<div class="level-item">--}}
                {{--{{ date('M d, Y', $page->date) }}--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>

    <div class="Content">
        @yield('content')
    </div>
@endsection
