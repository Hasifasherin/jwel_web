<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
    <div class="container d-flex align-items-center justify-content-between">

        <!-- Logo -->
       <a class="navbar-brand" href="/">
          <img src="{{ asset('images/logo1.png') }}" 
            alt="Wings of Jewels" 
            class="logo-img">
        </a>

        <!-- Search -->
        <form class="d-none d-md-flex w-50 mx-4 position-relative">
            <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
            <input class="form-control rounded-pill ps-5"
                   type="search"
                   placeholder="Search for diamond jewellery">
        </form>

        <!-- Navigation -->
        <div class="d-flex align-items-center gap-4">

            <div class="d-none d-lg-flex gap-4 nav-links">
                <a href="/" class="nav-item {{ request()->is('/') ? 'active-link' : '' }}">Home</a>
                <a href="/about" class="nav-item {{ request()->is('about') ? 'active-link' : '' }}">About</a>
                <a href="/contact" class="nav-item {{ request()->is('contact') ? 'active-link' : '' }}">Contact</a>
            </div>

           

        </div>
    </div>
</nav>