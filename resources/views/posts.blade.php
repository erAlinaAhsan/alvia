<!DOCTYPE html>
<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>
     @foreach($posts as $post)
    <article>
  <h1>
    <a href="/posts/{slug}">
       
    </a>
</h1>
{!!$post!!} 


    </article>
    @endforeach 

</body>