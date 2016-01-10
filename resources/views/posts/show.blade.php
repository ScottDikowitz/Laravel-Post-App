
@extends('app')

@section('content')
<h2>{{$post->title}}</h2>
<h3>{{$post->body}}</h3>
<hr/>
<a href="/posts/">index</a>
@stop
