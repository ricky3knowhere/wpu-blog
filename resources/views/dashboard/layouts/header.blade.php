<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">WPU Blog</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <form action="/logout" method="post" class="form-logout">
        @csrf
        <button type="button" class="nav-link px-3 border-0 bg-dark btn-logout" onclick="logoutConfirm()"> <span
            data-feather="log-out" class="me-2"></span>
          Logout</a></button>
      </form>
    </div>
  </div>
</header>

<script>
  // Logout Confirm Handler
  function logoutConfirm() {
    const isLogout = confirm('Are you sure to logout..?')
    if (isLogout) {
      document.querySelector('.form-logout').submit()
    }
  }
</script>
