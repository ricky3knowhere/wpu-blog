@extends('/dashboard/layouts/main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Blog</h1>
  </div>

  <div class="col-lg-7 mb-5">
    <form action="/dashboard/posts/{{ $post->slug }}" method="post">
      @method('put')
      @csrf
      <div class="form-floating mb-3">
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
          value="{{ old('title', $post->title) }}" required autofocus placeholder="Title">
        <label for="title">Blog Title</label>
        @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly
          placeholder="slug" value="{{ old('slug', $post->slug) }}">
        <label for="slug">Blog Slug</label>
        @error('slug')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group mb-3">
        <label for="category-id" class="pb-2">Category</label>
        <select class="form-select" id="category-id" name="category_id">
          @foreach ($categories as $category)
            <option value="{{ $category->id }}"
              {{ old('category_id', $post->category->id) == $category->id ? 'selected' : '' }}>
              {{ $category->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group mb-3">
        <label for="body" class="pb-2">Blog Body</label>
        @error('body')
          <p class="text-danger">{{ $message }}</p>
        @enderror
        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
        <trix-editor input="body"></trix-editor>
      </div>
      <button type="submit" class="btn btn-info text-light mt-3 w-100">Update</button>
    </form>
  </div>

  <script>
    const title = document.querySelector('#title')
    const slug = document.querySelector('#slug')

    title.addEventListener('change', function() {
      fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(res => res.json())
        .then(data => slug.value = data.slug)
    })

    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault()
    })
  </script>
@endsection
