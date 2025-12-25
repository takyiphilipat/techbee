<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-lg-5">
    <a href="{{ route('users.welcome') }}" class="navbar-brand d-flex align-items-center gap-2 ms-4 ms-lg-0">
        <img src="{{ asset('assets/img/logo.png') }}" alt="The TechBee" style="height:60px;">
        <span class="h4 mb-0 text-primary text-uppercase">The TechBee</span>
     </a>

    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto p-4 p-lg-0">
            <a href="{{ route('users.welcome') }}" class="nav-item nav-link {{ request()->routeIs('users.welcome') ? 'active' : '' }}">Home</a>
            <a href="{{ route('users.about') }}" class="nav-item nav-link {{ request()->routeIs('users.about') ? 'active' : '' }}">About</a>
            <a href="{{ route('users.services') }}" class="nav-item nav-link {{ request()->routeIs('users.services') ? 'active' : '' }}">Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('users.work') || request()->routeIs('users.testimonial') ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('users.work') }}" class="dropdown-item {{ request()->routeIs('users.work') ? 'active' : '' }}">Skills & Works</a>
                    <a href="{{ route('users.testimonial') }}" class="dropdown-item {{ request()->routeIs('users.testimonial') ? 'active' : '' }}">Testimonial</a>
                </div>
            </div>
            <a href="{{ route('users.contact') }}" class="nav-item nav-link {{ request()->routeIs('users.contact') ? 'active' : '' }}">Contact</a>
        </div>
    </div>
</nav>
