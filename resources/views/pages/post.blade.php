@extends('../layouts/main')

@section('container')

<article class="mb-2">
  <h3>
    {{ $article ->title }}
  </h3>
  <a href="#" class=" text-muted mb-5 text-decoration-none">by : {{ $article ->user ->name }}</a><br>
  <p class="mt-4">
    {!! $article ->body !!}
  </p>

  <a href="/blog" class="btn btn-warning mt-3">Back to Posts List</a>
</article>

@endSection()