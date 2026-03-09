<nav class="navbar navbar-expand-lg bg-black shadow-sm py-3">
    <div class="container align-items-center">

        <!-- Logo -->
        <a class="navbar-brand me-3" href="/">
            <img src="{{ asset('images/logo1.png') }}" 
                 alt="Wings of Jewels" 
                 class="logo-img">
        </a>

       

        <!-- Hamburger -->
        <button class="navbar-toggler border-0 ms-2"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mobileMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Desktop Menu -->
        <div class="collapse navbar-collapse justify-content-end bg-black" id="mobileMenu">

            <div class="d-flex flex-column flex-lg-row gap-3 gap-lg-4 nav-links mt-3 mt-lg-0">

                <a href="/" class="nav-item {{ request()->is('/') ? 'active-link' : '' }}">Home</a>

                <a href="/about" class="nav-item {{ request()->is('about') ? 'active-link' : '' }}">About</a>

                <a href="/contact" class="nav-item {{ request()->is('contact') ? 'active-link' : '' }}">Contact</a>

                <a href="/admin/login" class="nav-item">Admin</a>
                
            </div>

        </div>

    </div>
</nav>