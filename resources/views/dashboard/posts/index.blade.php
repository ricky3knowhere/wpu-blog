@extends('/dashboard/layouts/main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
    <h1 class="h2">Posts list by {{ auth()->user()->name }}</h1>
  </div>
  <div class="table-responsive col-lg-8">
    @if (session('notif'))
      <div class="alert alert-success" role="alert">
        <h6>Success</h6>
        {{ session('notif') }}
      </div>
    @endif
    <div class="d-flex justify-content-end my-4">
      <a href="/dashboard/posts/create" class="btn btn-sm btn-success"><span data-feather="file-plus"
          class="me-2"></span>New Post</a>
    </div>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr>
            <td>{{ $loop->iteration }}. </td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
              <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-primary"><span data-feather="eye"></span></a>
              <a href="/dashboard/posts/edit/{{ $post->slug }}" class="badge bg-warning"><span
                  data-feather="edit"></span></a>
              <a href="/dashboard/posts/delete/{{ $post->slug }}" class="badge bg-danger"><span
                  data-feather="trash-2"></span></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endSection()
