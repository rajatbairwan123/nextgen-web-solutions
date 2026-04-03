<nav class="navbar navbar-expand-lg navbar-light sticky-top custom-navbar">

    <div class="container">

        <a class="navbar-brand" href="/">
            <span class="logo-text">NextGen</span>
            <span class="logo-highlight">WebSolutions</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('services') ? 'active' : '' }}" href="/services">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('portfolio') ? 'active' : '' }}" href="/portfolio">Portfolio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
                </li>

                <li class="nav-item ms-3">
                    <a href="/contact" class="btn btn-primary navbar-btn">
                        Get Quote
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>
