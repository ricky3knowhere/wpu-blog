<nav class="navbar navbar-expand-lg navbar-dark bg-info sticky-top">
  <div class="container">
    <a class="navbar-brand" href="/">
      <i class="bi bi-file-earmark-richtext me-2 h3"></i>
      <b>WPU Blog</b>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ $active == 'Home' ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $active == 'About' ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $active == 'Blog' ? 'active' : '' }}" href="/blog">Blog</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ $active == 'Category' ? 'active' : '' }}" href="#" id="navbarDropdown"
            role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/blog?category=programming">Programming</a></li>
            <li><a class="dropdown-item" href="/blog?category=graphic-design">Graphic Design</a></li>
            <li><a class="dropdown-item" href="/blog?category=personal">Personal</a></li>
          </ul>
        </li>

      </ul>
      <ul class="navbar-nav ms-auto">
        @auth()
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Wellcome, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-speedometer me-2"></i>Dashboard</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i
                      class="bi bi-box-arrow-right me-2"></i>Logout</a></button>
                </form>
            </ul>
          </li>

        @else()
          <li class="nav-item"><a href="/login" class="nav-link {{ $active == 'Login' ? 'active' : '' }}"><i
                class="bi bi-box-arrow-in-right me-2"></i>Login</a></li>
        @endauth()
      </ul>
    </div>
  </div>
</nav>
