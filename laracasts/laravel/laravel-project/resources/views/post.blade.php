@extends('layout')

@section('content')
    <article>
        <h1>
            {{$post->title}}
        </h1>
        <div>
            {!! $post->body !!}
        </div>
    </article>
    <div style="margin-top: 1rem;">
        <a href="/">Go back</a>
    </div>
@endsection