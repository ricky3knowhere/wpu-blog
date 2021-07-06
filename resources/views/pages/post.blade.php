@extends('../layouts/main')

@section('container')

<article class="mb-2">
  <h3>
    {{ $article['title'] }}
  </h3>
  <h6 class="text-muted mb-5">by : {{ $article['author'] }}</h6>
  <p>{{ $article['article'] }}</p>

  <a href="/blog" class="btn btn-warning mt-3">Back to Posts List</a>
</article>

@endSection()