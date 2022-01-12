@extends('../layouts/main')

@section('container')

<article class="mb-2">
  <h3>
    {{ $article ->title }}
  </h3>
  <a href="/author/{{$article-> author-> username}}" class=" text-muted mb-5 text-decoration-none">by :
    {{ $article ->author ->name }}</a> |
  <span class="badge bg-warning rounded-pill text-dark ms-2 mb-1">{{ $article ->category ->name }}</span><br>
  <p class="mt-4">
    {!! $article ->body !!}
  </p>

  <a href="/blog" class="btn btn-warning mt-3">Back to Posts List</a>
</article>

@endSection()