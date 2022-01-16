@extends('../layouts/main')

@section('container')
<h2>Register Page</h2>

<div class="row justify-content-center mt-5">
  <div class="col-lg-5">
    <form action="/register" method="POST">
      @csrf
      <div class="form-floating mb-3">
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" name="name"
          value="{{old('name')}}" required placeholder="Full Name">
        <label for="floatingInput">Full name</label>
        @error('name')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput2"
          name="username" value="{{old('username')}}" required placeholder="Username">
        <label for="floatingInput2">Username</label>
        @error('username')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-floating mb-3">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInpu3t" name="email"
          value="{{old('email')}}" required placeholder="Email Address">
        <label for="floatingInpu3t">Email address</label>
        @error('email')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword"
          name="password" value="{{old('password')}}" required placeholder="Password">
        <label for="floatingPassword">Password</label>
        @error('password')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-info text-light mt-3 w-100">Submit</button>
    </form>
    <p class="text-center mt-5">Already have an accout? login <a href="/login" class="text-decoration-none">here</a></p>
  </div>
</div>

@endSection()