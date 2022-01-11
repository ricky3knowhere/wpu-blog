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
          <a class="nav-link {{ $title == 'Home' ? 'active' : ''}}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $title == 'About' ? 'active' : ''}}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $title == 'Blog' ? 'active' : ''}}" href="/blog">Blog</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/c/programming">Programming</a></li>
            <li><a class="dropdown-item" href="/c/graphic-design">Graphic Design</a></li>
            <li><a class="dropdown-item" href="/c/personal">Personal</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>