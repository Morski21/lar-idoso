<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Lar dos Idosos')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body>
            <nav class="navbar">
                <div class="nav-container">
                    <a href="/" class="logo">
                        <img src="/images/logo.png" alt="Lar dos Idosos" />
                        <div class="logo-text">
                            <div class="logo-title">Lar dos Idosos</div>
                            <div class="logo-subtitle">Prudentópolis - PR</div>
                        </div>
                    </a>
                    
                    <!-- Menu Hambúrguer -->
                    <button class="hamburger" id="hamburger">
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line"></span>
                    </button>
                    
                    <ul class="nav-menu" id="nav-menu">
                        <li class="nav-item">
                            <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#sobre" class="nav-link">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a href="/prioridades" class="nav-link {{ request()->is('prioridades') ? 'active' : '' }}">Prioridades</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contato" class="nav-link">Contato</a>
                        </li>
                        <li class="nav-item">
                            @auth
                                <form action="{{ route('logout') }}" method="POST" style="display:inline">
                                    @csrf
                                    <button type="submit" class="cta-button danger">Sair</button>
                                </form>
                            @else
                                <a href="/login" class="cta-button">Login</a>
                            @endauth
                        </li>
                    </ul>
                </div>
            </nav>
    
    <main>
        @yield('content')
    </main>
    
    @stack('scripts')
    
    <script>
        // Menu Hambúrguer
        document.addEventListener('DOMContentLoaded', function() {
            const hamburger = document.getElementById('hamburger');
            const navMenu = document.getElementById('nav-menu');
            
            hamburger.addEventListener('click', function() {
                hamburger.classList.toggle('active');
                navMenu.classList.toggle('active');
            });
            
            // Fechar menu ao clicar em um link
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    hamburger.classList.remove('active');
                    navMenu.classList.remove('active');
                });
            });
            
            // Fechar menu ao clicar fora dele
            document.addEventListener('click', function(event) {
                if (!hamburger.contains(event.target) && !navMenu.contains(event.target)) {
                    hamburger.classList.remove('active');
                    navMenu.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>
