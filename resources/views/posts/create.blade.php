
@extends('app')

@section('content')
Make Post
<form method="POST" action="/posts">
    {!! csrf_field() !!}

    <div>
        Title
        <input type="text" name="title">
    </div>

    <div>
      <input type="hidden" name="user_id" value="1">

    <div>
        Body
        <input type="text" name="body">
    </div>

    <div>
        <button type="submit">Create</button>
    </div>
</form>
<hr/>
<a href="/posts/">index</a>
@stop
