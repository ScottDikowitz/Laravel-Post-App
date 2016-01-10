

  <h1>posts</h1>
  @foreach ($posts as $post)
  <article>
    <a href={{'/posts/' + $post->id}}><h2>{{$post->title}}</h2></a>
  </article>
  @endforeach
<hr/>
<a href="/posts/create">New Post</a>
