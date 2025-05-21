{{-- <nav class="navbar">
    <a href="{{ route('home') }}" class="navbar-logo">Summit<span>Kalcer.</span></a>

    <div class="navbar-nav">
        <a href="{{ route('cara.sewa') }}">Cara Sewa</a>
        <a href="{{ route('katalog.produk') }}">Katalog Produk</a>
        <a href="{{ route('hubungi.kami') }}">Hubungi Kami</a>
        <div class="navbar-login">
            <!-- Login / User Dropdown -->
            @guest
                <a href="{{ route('login') }}" class="btn btn-login rounded-pill px-3 py-1 me-3">
                    <i class="fas fa-user me-1">Login</i>
                </a>
            @else
                <div class="dropdown me-3">
                    <button class="btn btn-user rounded-pill px-3 py-1 dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle me-1"></i> {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item text-danger" type="submit">
                                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endguest
        </div>
    </div>

    <div class="navbar-extra d-flex align-items-center">
        <!-- Icon Search -->
        <a href="#" id="search" class="me-3 text-white"><i data-feather="search"></i></a>

        <!-- Icon Keranjang -->
        <a href="{{ route('keranjang') }}" id="shopping-cart" class="me-3 text-white"><i
                data-feather="shopping-cart"></i></a>



        <!-- Hamburger Menu -->
        <a href="#" id="hamburger-menu" class="text-white"><i data-feather="menu"></i></a>
    </div>
</nav> --}}

<nav class="navbar">
    <div class="navbar-left">
        <button class="hamburger" id="hamburger">
            <i class="fas fa-bars"></i>
        </button>
        <a href="{{ route('home') }}" class="logo">Summit<span>Kalcer.</span></a>
    </div>

    <ul class="nav-links" id="nav-links">
        <li><a href="{{ route('cara.sewa') }}">Cara Sewa</a></li>
        <li><a href="{{ route('katalog.produk') }}">Katalog Produk</a></li>
        <li><a href="{{ route('hubungi.kami') }}">Hubungi Kami</a></li>
        {{-- <li class="mobile-only"><a href="#">Profil</a></li> --}}
        {{-- <div class="navbar-login">
            <!-- Login / User Dropdown -->
            @guest
                <a href="{{ route('login') }}" class="btn btn-login rounded-pill px-3 py-1 me-3">
                    <i class="fas fa-user me-1">Login</i>
                </a>
            @else
                <div class="dropdown me-3">
                    <button class="btn btn-user rounded-pill px-3 py-1 dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle me-1"></i> {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item text-danger" type="submit">
                                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endguest
        </div> --}}
    </ul>

    <div class="navbar-right">
        <button class="icon-button"><i class="fas fa-search"></i></button>
        <button class="icon-button"><i class="fas fa-shopping-cart"></i></button>
        {{-- <button class="icon-button desktop-only"><i class="fas fa-user"></i></button> --}}
        <div class="navbar-login">
            @guest
                <a href="{{ route('login') }}" class="btn btn-outline-primary rounded-pill px-3 py-1 me-3">
                    <i class="fas fa-sign-in-alt me-1"></i> Login
                </a>
            @else
                <div class="dropdown me-3">
                    <button class="btn btn-outline-secondary rounded-pill px-3 py-1 dropdown-toggle" type="button"
                        id="dropdownUserButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle me-1"></i> {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUserButton">
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item text-danger" type="submit">
                                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endguest
        </div>

    </div>
</nav>
