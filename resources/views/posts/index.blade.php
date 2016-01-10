

  <h1>posts</h1>
  @foreach ($posts as $post)
  <article>
    <h2>{{$post->title}}</h2>
    <div class="body">{{$post->body}}</div>
  </article>
  @endforeach
