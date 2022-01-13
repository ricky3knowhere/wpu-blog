@extends('../layouts/main')

@section('container')
<h3 class="pb-4">
  {{$title}}
</h3>


<div class="card text-center">
  <a href="/c/{{$articles[0] ->category ->slug}}" style="position:absolute; opacity: .7;margin-top: .5em;">
    <span class="badge bg-warning rounded-pill text-dark ms-2 mb-1">{{ $articles[0] ->category ->name }}</span>
  </a>

  <img src="https://source.unsplash.com/random/200x50?{{$articles[0] ->category ->name}}" class="card-img-top"
    alt="{{$articles[0]-> category ->name}}">
  <div class="card-body">
    <h5 class="card-title fs-4"><a href="/blog/post/{{$articles[0] ->slug}}"
        class="text-decoration-none text-dark">{{$articles[0]-> title}}</a></h5>
    <span class="text-muted" style="font-size: .8rem;">by
      <a href="/author/{{$articles[0] ->author ->username}}"
        class="text-decoration-none">{{$articles[0]-> author ->name}}</a>
      posted at {{$articles[0] ->created_at ->diffForHumans()}}
    </span>

    <p class="card-text pt-3">
      {{$articles[0] ->excerpt}}
    </p>

    <a href="/blog/post/{{$articles[0] ->slug}}" class="btn text-light btn-info mt-3">Details</a>
  </div>
</div>

<div class="row">
  @foreach($articles ->skip(1) as $article)
  <div class="col-md-4 my-3">

    <div class="card">
      <a href="/c/{{$article ->category ->slug}}" style="position:absolute; opacity: .7;margin-top: .5em;">
        <span class="badge bg-warning rounded-pill text-dark ms-2 mb-1">{{ $article ->category ->name }}</span>
      </a>

      <img src="https://source.unsplash.com/random/150x80?{{$article ->category ->name}}" class="card-img-top"
        alt="{{$article ->category ->name}}">

      <div class="card-body">
        <h5 class="card-title fs-5"><a href="/blog/post/{{$article ->slug}}"
            class="text-decoration-none text-dark">{{$article-> title}}</a></h5>
        <span class="text-muted" style="font-size: .8rem;">by
          <a href="/author/{{$article ->author ->username}}"
            class="text-decoration-none">{{$article -> author ->name}}</a> |
          posted at {{$article ->created_at ->diffForHumans() }}
        </span>

        <p class="card-text pt-3" style="text-align: justify;font-size: .9rem;">
          {{$article ->excerpt}}
        </p>

        <a href="/blog/post/{{$article ->slug}}" class="btn text-light btn-info mt-3">Details</a>
      </div>
    </div>
  </div>
  @endforeach()
</div>

@endSection()