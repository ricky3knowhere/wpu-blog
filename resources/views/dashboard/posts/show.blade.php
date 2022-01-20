@extends('/dashboard/layouts/main')

@section('container')


  <div class="row">
    <div class="col-lg-8 my-4">

      <h4 class="card-title fs-3 pb-3">{{ $post->title }}</h4>
      <a href="/dashboard/posts" class="btn btn-sm btn-info"><span class="me-1"
          data-feather="arrow-left"></span>Back</a>
      <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-warning"><span class="me-1"
          data-feather="edit"></span>Edit</a>
      <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this blog..?')"><span
            class="me-1" data-feather="trash-2"></span>Delete</button>
      </form>

      @if ($post->image)
        <div style="max-height: 400px;overflow: hidden;">
          <img src="/storage/{{ $post->image }}" class="mt-5 card-img-top" alt="{{ $post->category->name }}">
        </div>
      @else
        <img src="https://source.unsplash.com/random/200x80?{{ $post->category->name }}" class="mt-5 card-img-top"
          alt="{{ $post->category->name }}">
      @endif

      <article class="card-text pt-4" style="text-align: justify;">
        {!! $post->body !!}
      </article>

    </div>
  </div>


@endSection()
