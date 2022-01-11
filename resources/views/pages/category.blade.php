@extends('../layouts/main')

@section('container')

<h3 class="pb-4">
  Post Category : {{ $category }}
</h3>
@foreach($articles as $article)
<article class="mb-5">
  <h5>
    <a href="/blog/post/{{ $article ->slug }}">
      {{ $article ->title }}
    </a>
  </h5>
  <a href="#" class=" text-muted mb-5 text-decoration-none">by : {{ $article ->user ->name }}</a> |
  <span class="badge bg-warning rounded-pill text-dark ms-2 mb-1">{{ $article ->category ->name }}</span>
  <p>{{ $article ->excerpt }}</p>
</article>

@endforeach()
@endSection()