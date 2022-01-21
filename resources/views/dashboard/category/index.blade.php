@extends('/dashboard/layouts/main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories List</h1>
  </div>
  <div class="table-responsive col-lg-6">
    @if (session('notif'))
      <div class="alert alert-success" role="alert">
        <h6>Success</h6>
        {{ session('notif') }}
      </div>
    @endif
    <div class="d-flex justify-content-end my-4">
      <a href="/dashboard/category/create" class="btn btn-sm btn-success"><span data-feather="file-plus"
          class="me-2"></span>New Category</a>
    </div>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
          <tr>
            <td>{{ $loop->iteration }}. </td>
            <td>{{ $category->name }}</td>
            <td>
              <a href="/dashboard/category/{{ $category->slug }}" class="badge bg-primary"><span
                  data-feather="eye"></span></a>
              <a href="/dashboard/category/{{ $category->slug }}/edit" class="badge bg-warning"><span
                  data-feather="edit"></span></a>

              <form action="/dashboard/category/{{ $category->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="badge bg-danger border-0"
                  onclick="return confirm('Delete this blog..?')"><span data-feather="trash-2"></span></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endSection()
