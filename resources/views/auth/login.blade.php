@extends('../layouts/main')

@section('container')
  <h2>Login Page</h2>

  <div class="row justify-content-center mt-5">
    <div class="col-lg-5 justify-content-end">
      @if (session('notif'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <h6>Success</h6>
          {{ session('notif') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif()

      @if (session('loginNotif'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <h6>Warning!</h6>
          {{ session('loginNotif') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif()

      <form action="/login" method="POST">
        @csrf
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" name="email" required autofocus
            value="{{ old('email') }}" placeholder="Email address">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <button type="submit" class="btn btn-info text-light mt-3 w-100">Login</button>
      </form>
      <p class="text-center mt-5">Don't have an account? register <a href="/register"
          class="text-decoration-none">here</a></p>
    </div>

  </div>

@endSection()
