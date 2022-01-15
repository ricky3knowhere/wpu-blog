@extends('../layouts/main')

@section('container')
<h3 class="pb-4">
  {{$title}}
</h3>

<div class="row justify-content-end mb-3">
  <div class="col-md-4">
    <form action="/blog">
      <div class="input-group mb-3">

        @if(request('category'))
        <input type="text" value="{{request('category')}}" name="category" hidden>
        @endif

        @if(request('author'))
        <input type="text" value="{{request('author')}}" name="author" hidden>
        @endif

        <input type="text" class="form-control" placeholder="Type a keywords..." name="search"
          value="{{request('search')}}">
        <button class="btn btn-info text-light" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>

@if($articles-> count())
<div class="container">
  <div class="card text-center">
    <a href="/blog?category={{$articles[0] ->category ->slug}}"
      style="position:absolute; opacity: .7;margin-top: .5em;">
      <span class="badge bg-warning rounded-pill text-dark ms-2 mb-1">{{ $articles[0] ->category ->name }}</span>
    </a>

    <img src="https://source.unsplash.com/random/200x50?{{$articles[0] ->category ->name}}" class="card-img-top"
      alt="{{$articles[0]-> category ->name}}">
    <div class="card-body">
      <h5 class="card-title fs-4"><a href="/blog/post/{{$articles[0] ->slug}}"
          class="text-decoration-none text-dark">{{$articles[0]-> title}}</a></h5>
      <span class="text-muted" style="font-size: .8rem;">by
        <a href="/blog?author={{$articles[0] ->author ->username}}"
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
        <a href="/blog?category={{$article ->category ->slug}}"
          style="position:absolute; opacity: .7;margin-top: .5em;">
          <span class="badge bg-warning rounded-pill text-dark ms-2 mb-1">{{ $article ->category ->name }}</span>
        </a>

        <img src="https://source.unsplash.com/random/150x80?{{$article ->category ->name}}" class="card-img-top"
          alt="{{$article ->category ->name}}">

        <div class="card-body">
          <h5 class="card-title fs-5"><a href="/blog/post/{{$article ->slug}}"
              class="text-decoration-none text-dark">{{$article-> title}}</a></h5>
          <span class="text-muted" style="font-size: .8rem;">by
            <a href="/blog?author={{$article ->author ->username}}"
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
</div>
@else
<div class="card text-dark bg-warning mb-3" style="width: 20em;">
  <div class="card-header">Alert!</div>
  <div class="card-body">
    <h5 class="card-title">404 Not Found</h5>
    <p class="card-text">No any posts that cotain <b>{{request('search')}}</b> keywords</p>
  </div>
</div>
@endif

<div class="d-flex justify-content-end">
  {{ $articles ->links() }}
</div>
@endSection()