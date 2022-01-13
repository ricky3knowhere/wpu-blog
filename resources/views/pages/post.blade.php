@extends('../layouts/main')

@section('container')


<div class="row justify-content-center">
  <div class="col-md-10 my-3">

    <h4 class="card-title fs-3">{{$article -> title}}</h4>
    <span class="text-muted" style="font-size: .8rem;">by
      <a href="/author/{{$article ->author ->username}}" class="text-decoration-none">{{$article -> author ->name}}</a>
      |
      posted at {{$article ->created_at ->diffForHumans() }}
      <a href="/c/{{$article ->category ->slug}}" style="position:absolute; opacity: .7;margin-top: .5em;">
        <span class="badge bg-warning rounded-pill text-dark ms-2 mb-1">{{ $article ->category ->name }}</span>
      </a>
    </span>

    <img src="https://source.unsplash.com/random/200x80?{{$article ->category ->name}}" class="mt-5 card-img-top"
      alt="{{$article ->category ->name}}">

    <article class="card-text pt-4" style="text-align: justify;">
      {!!$article ->body!!}
    </article>

    <a href="/blog/" class="btn text-light btn-info mt-3">Back</a>
  </div>
</div>


@endSection()