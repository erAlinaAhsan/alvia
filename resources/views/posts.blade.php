<!DOCTYPE html>
<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>
     @foreach($posts as $post)
    <article>
  <h1>
    <a href="/posts/{{$post->slug}}">
      {!! $post->title!!}
    </a>
  </h1>
  <p>

    By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}
  </p>

<div>
  {{$post->excerpt}}
</div>s


    </article>
    @endforeach 

</body>