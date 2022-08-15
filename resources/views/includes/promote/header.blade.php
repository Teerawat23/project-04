<!-- Header Section Begin -->
<header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header__nav">
                    <div class="header__logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('template/promote/img/headerlogo.png') }}" alt="">
                        </a>
                    <div class="header__right">
                        <nav class="header__menu mobile-menu">
                            <ul>
                            <li class="active"><a href="{{ url('/') }}">Homepage</a></li>
                                <li><a href="{{ url('/categories') }}">Categories</a></li>
                                <li><a href="{{ url('/content') }}">Content</a></li>
                                <li><a href="{{ url('/blog') }}">Our Blog</a></li>
                                <li><a href="{{ url('/') }}">Contacts</a></li>
                                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <li><a href="{{ url('/admin/home') }}" class="nav-link scrollto">admin</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="nav-link scrollto">Log in</a></li>

                        @if (Route::has('register'))
                           <li> <a href="{{ route('register') }}" class="nav-link scrollto">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
            
            
                                <a href="#" class="search-switch"><span class="icon_search"></span></a>
                                <a href="./login.php"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
