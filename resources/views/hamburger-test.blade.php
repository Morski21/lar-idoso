@extends('layouts.simple')

@section('title', 'Teste do Menu Hambúrguer')

@push('styles')
<style>
.hamburger-test {
    padding: 20px;
    background: #f8f9fa;
    min-height: 100vh;
}

.test-info {
    background: white;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    text-align: center;
}

.hamburger-debug {
    background: #e3f2fd;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    border-left: 4px solid #2196f3;
}

.hamburger-debug h3 {
    color: #1976d2;
    margin-bottom: 10px;
}

.hamburger-debug ul {
    text-align: left;
    max-width: 600px;
    margin: 0 auto;
}

.hamburger-debug li {
    margin-bottom: 8px;
    font-family: monospace;
    background: rgba(255,255,255,0.7);
    padding: 4px 8px;
    border-radius: 4px;
}

.screen-size {
    position: fixed;
    top: 10px;
    left: 10px;
    background: #333;
    color: white;
    padding: 8px 12px;
    border-radius: 4px;
    font-size: 12px;
    font-weight: bold;
    z-index: 1000;
}

.hamburger-visible {
    position: fixed;
    top: 50px;
    left: 10px;
    background: #4caf50;
    color: white;
    padding: 8px 12px;
    border-radius: 4px;
    font-size: 12px;
    font-weight: bold;
    z-index: 1000;
}

.hamburger-hidden {
    position: fixed;
    top: 50px;
    left: 10px;
    background: #f44336;
    color: white;
    padding: 8px 12px;
    border-radius: 4px;
    font-size: 12px;
    font-weight: bold;
    z-index: 1000;
}
</style>
@endpush

@section('content')
<div class="hamburger-test">
    <div class="screen-size" id="screenSize"></div>
    <div id="hamburgerStatus"></div>
    
    <div class="test-info">
        <h1>🍔 Teste do Menu Hambúrguer</h1>
        <p>Esta página ajuda a debugar o menu hambúrguer em diferentes tamanhos de tela.</p>
    </div>

    <div class="hamburger-debug">
        <h3>🔍 Debug do Menu Hambúrguer:</h3>
        <ul>
            <li>Largura da tela: <span id="screenWidth">-</span>px</li>
            <li>Altura da tela: <span id="screenHeight">-</span>px</li>
            <li>Breakpoint ativo: <span id="breakpoint">-</span></li>
            <li>Hambúrguer visível: <span id="hamburgerVisible">-</span></li>
            <li>Menu ativo: <span id="menuActive">-</span></li>
        </ul>
    </div>

    <div class="test-info">
        <h2>📱 Como Testar:</h2>
        <ol style="text-align: left; max-width: 600px; margin: 0 auto;">
            <li><strong>Redimensione a janela</strong> para menos de 768px de largura</li>
            <li><strong>Observe o indicador</strong> no canto superior esquerdo</li>
            <li><strong>Procure o ícone hambúrguer</strong> (três linhas) no canto superior direito</li>
            <li><strong>Clique no hambúrguer</strong> para abrir o menu</li>
            <li><strong>Teste os links</strong> do menu</li>
            <li><strong>Clique fora</strong> para fechar o menu</li>
        </ol>
    </div>

    <div class="test-info">
        <h2>🎯 Problemas Comuns:</h2>
        <ul style="text-align: left; max-width: 600px; margin: 0 auto;">
            <li><strong>Hambúrguer não aparece:</strong> Verifique se a largura é menor que 768px</li>
            <li><strong>Hambúrguer muito pequeno:</strong> Ajuste o zoom do navegador</li>
            <li><strong>Menu não abre:</strong> Verifique o console do navegador (F12)</li>
            <li><strong>Links não funcionam:</strong> Verifique se o JavaScript está carregando</li>
        </ul>
    </div>

    <div class="test-info">
        <h2>🔧 Links de Teste:</h2>
        <p>
            <a href="/" class="btn" style="margin: 5px;">Home</a>
            <a href="/prioridades" class="btn" style="margin: 5px;">Prioridades</a>
            <a href="/doar" class="btn" style="margin: 5px;">Doação</a>
            <a href="/responsive-test" class="btn" style="margin: 5px;">Teste Responsivo</a>
        </p>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const screenSize = document.getElementById('screenSize');
    const screenWidth = document.getElementById('screenWidth');
    const screenHeight = document.getElementById('screenHeight');
    const breakpoint = document.getElementById('breakpoint');
    const hamburgerVisible = document.getElementById('hamburgerVisible');
    const menuActive = document.getElementById('menuActive');
    const hamburgerStatus = document.getElementById('hamburgerStatus');
    
    function updateScreenInfo() {
        const width = window.innerWidth;
        const height = window.innerHeight;
        
        screenWidth.textContent = width;
        screenHeight.textContent = height;
        
        if (width <= 480) {
            breakpoint.textContent = 'Mobile (≤480px)';
        } else if (width <= 768) {
            breakpoint.textContent = 'Tablet (≤768px)';
        } else {
            breakpoint.textContent = 'Desktop (>768px)';
        }
        
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('nav-menu');
        
        if (hamburger) {
            const isVisible = window.getComputedStyle(hamburger).display !== 'none';
            hamburgerVisible.textContent = isVisible ? 'Sim' : 'Não';
            
            if (isVisible) {
                hamburgerStatus.innerHTML = '<div class="hamburger-visible">✅ Hambúrguer Visível</div>';
            } else {
                hamburgerStatus.innerHTML = '<div class="hamburger-hidden">❌ Hambúrguer Oculto</div>';
            }
        }
        
        if (navMenu) {
            menuActive.textContent = navMenu.classList.contains('active') ? 'Sim' : 'Não';
        }
    }
    
    // Atualizar informações
    updateScreenInfo();
    window.addEventListener('resize', updateScreenInfo);
    
    // Atualizar status do menu
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');
    
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function() {
            setTimeout(updateScreenInfo, 100);
        });
        
        // Observar mudanças no menu
        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.attributeName === 'class') {
                    updateScreenInfo();
                }
            });
        });
        
        observer.observe(navMenu, { attributes: true });
    }
});
</script>
@endsection

