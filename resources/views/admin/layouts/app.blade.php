<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'PlantiCanhas')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('styles')
</head>

<body>
    <!-- Mobile Header -->
    <header class="mobile-header d-lg-none">
        <div class="container-fluid">
            <div class="mobile-header-content">
                <a href="{{ route('admin.dashboard') }}" class="mobile-logo">
                    <span class="logo-icon">🌿</span>
                    <span class="logo-text">PlantiCanhas</span>
                </a>

                <button class="menu-toggle" id="menuToggle" aria-label="Toggle Menu">
                    <span class="hamburger-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                    <span class="close-icon d-none">
                        <i class="fas fa-times"></i>
                    </span>
                </button>
            </div>
        </div>
    </header>

    <!-- Menu Mobile -->
    <ul class="nav-menu" id="mobileMenu">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}">
                <span class="nav-icon">📊</span>
                <span class="nav-text">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.products.index') }}">
                <span class="nav-icon">📦</span>
                <span class="nav-text">Produtos</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.banners.index') }}">
                <span class="nav-icon">🖼️</span>
                <span class="nav-text">Banners</span>
            </a>
        </li>
        <li class="nav-item logout">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">
                    <span class="nav-icon">🚪</span>
                    <span class="nav-text">Sair</span>
                </button>
            </form>
        </li>
    </ul>

    <div class="container-fluid">
        <div class="row">
            <!-- Navbar Desktop -->
            <nav class="navbar-main d-none d-lg-flex">
                <div class="navbar-header">
                    <a href="{{ route('admin.dashboard') }}" class="logo">
                        <span class="logo-icon">🌿</span>
                        <span class="logo-text">PlantiCanhas</span>
                    </a>
                </div>

                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}">
                            <span class="nav-icon">📊</span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.products.index') }}">
                            <span class="nav-icon">📦</span>
                            <span class="nav-text">Produtos</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.banners.index') }}">
                            <span class="nav-icon">🖼️</span>
                            <span class="nav-text">Banners</span>
                        </a>
                    </li>
                    <li class="nav-item logout">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">
                                <span class="nav-icon">🚪</span>
                                <span class="nav-text">Sair</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>

            <!-- Content -->
            <main class="main-content">
                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
                </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menuToggle');
            const hamburgerIcon = document.querySelector('.hamburger-icon');
            const closeIcon = document.querySelector('.close-icon');
            const navMenu = document.getElementById('mobileMenu');

            // Toggle menu on menu button click
            menuToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
                hamburgerIcon.classList.toggle('d-none');
                closeIcon.classList.toggle('d-none');
            });

            // Close menu when clicking on menu items on mobile
            const navLinks = document.querySelectorAll('#mobileMenu .nav-item a, #mobileMenu .nav-item button');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth < 992) {
                        navMenu.classList.remove('active');
                        hamburgerIcon.classList.remove('d-none');
                        closeIcon.classList.add('d-none');
                    }
                });
            });

            // Fechar menu ao clicar fora dele
            document.addEventListener('click', function(event) {
                // Verificar se o menu está ativo e se o clique foi fora do menu e do botão toggle
                if (
                    navMenu.classList.contains('active') &&
                    !navMenu.contains(event.target) &&
                    !menuToggle.contains(event.target)
                ) {
                    navMenu.classList.remove('active');
                    hamburgerIcon.classList.remove('d-none');
                    closeIcon.classList.add('d-none');
                }
            });

        });
    </script>
</body>

</html>