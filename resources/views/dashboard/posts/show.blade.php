@extends('/dashboard/layouts/main')

@section('container')


  <div class="row">
    <div class="col-lg-8 my-4">

      <h4 class="card-title fs-3 pb-3">{{ $post->title }}</h4>
      <a href="/dashboard/posts" class="btn btn-sm btn-info"><span class="me-1"
          data-feather="arrow-left"></span>Back</a>
      <a href="/dashboard/" class="btn btn-sm btn-warning"><span class="me-1" data-feather="edit"></span>Edit</a>
      <a href="/dashboard/" class="btn btn-sm btn-danger"><span class="me-1"
          data-feather="trash-2"></span>Delete</a>

      <img src="https://source.unsplash.com/random/200x80?{{ $post->category->name }}" class="mt-5 card-img-top"
        alt="{{ $post->category->name }}">

      <article class="card-text pt-4" style="text-align: justify;">
        {!! $post->body !!}
      </article>

    </div>
  </div>


@endSection()
