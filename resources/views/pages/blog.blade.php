@extends('../layouts/main')

@section('container')

@foreach($articles as $article)
<article class="mb-2">
  <h5>
    <a href="/blog/post/{{ $article['slug'] }}">
      {{ $article['title']}}
    </a>
  </h5>
  <h6 class="text-muted">by : {{ $article['author']}}</h6>
  <p>{{ $article['article']}}</p>
</article>

@endforeach()
@endSection()