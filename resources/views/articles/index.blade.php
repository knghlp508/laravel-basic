@extends('app')

@section('content')

    <h1>Articles @if(\Illuminate\Support\Facades\Auth::user()!=null) : {{ \Illuminate\Support\Facades\Auth::user()->name }} @endif</h1>
    <hr>
    @foreach($articles as $article)
        <h2><a href="{{ url('articles',$article->id) }}">{{ $article->title }}</a></h2>
        <article>
            <div class="body">
                {{ $article->content }}
            </div>
        </article>
    @endforeach

@stop