<header class="site-header fixed-top">
    <div class="container d-flex align-items-center justify-content-between h-100">

        <a href="{{ url('/home') }}" class="logo">
            <img src="{{ asset('build/assets/images/649e9869b2d9a15af742ff2ce2a9d5a0-removebg-preview.png') }}"
                alt="" class="header-logo">

            <nav class="main-nav d-none d-md-flex gap-4 align-items-center">

                <a href="{{ url('/home') }}"
                    class="{{ request()->is('home') ? 'active' : '' }}">
                    Home
                </a>

                <a href="{{ url('/about') }}"
                 class="{{ request()->is('about') ? 'active' : '' }}">
                    About
                </a>

                <a href="{{ url('/blog') }}"
                    class="{{ request()->is('blog') || request()->is('blog/*') ? 'active' : '' }}">
                    Blogs
                </a>

                <a href="{{ url('/gallery') }}"
                class="{{ request()->is('gallery') ? 'active' : '' }}">
                    Gallery
                </a>

                <a href="{{ url('/home#contact') }}">
                    Contact Us
                </a>

            </nav>

            <a href="#contact" class="btn btn-light inquire-btn">Contact</a>

    </div>
</header>