@extends('layouts.simple')

@section('title', 'Teste de Responsividade')

@push('styles')
<style>
.responsive-test {
    padding: 20px;
    background: #f8f9fa;
    min-height: 100vh;
}

.device-info {
    background: white;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.test-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
}

.test-card {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    text-align: center;
}

.test-card h3 {
    color: var(--primary);
    margin-bottom: 10px;
}

.test-card p {
    color: var(--gray-600);
    font-size: 14px;
}

.breakpoint-indicator {
    position: fixed;
    top: 10px;
    right: 10px;
    background: var(--primary);
    color: white;
    padding: 8px 12px;
    border-radius: 4px;
    font-size: 12px;
    font-weight: bold;
    z-index: 1000;
}

@media (max-width: 768px) {
    .breakpoint-indicator::after {
        content: "Tablet";
    }
}

@media (max-width: 480px) {
    .breakpoint-indicator::after {
        content: "Mobile";
    }
}

@media (min-width: 769px) {
    .breakpoint-indicator::after {
        content: "Desktop";
    }
}
</style>
@endpush

@section('content')
<div class="responsive-test">
    <div class="breakpoint-indicator"></div>
    
    <div class="device-info">
        <h1>Teste de Responsividade</h1>
        <p>Esta página mostra como o site se adapta a diferentes tamanhos de tela.</p>
        <p><strong>Instruções:</strong> Redimensione a janela do navegador ou use as ferramentas de desenvolvedor para testar diferentes dispositivos.</p>
    </div>

    <div class="test-grid">
        <div class="test-card">
            <h3>📱 Mobile</h3>
            <p>Até 480px de largura</p>
            <p>Layout em coluna única, navegação compacta</p>
        </div>
        
        <div class="test-card">
            <h3>📱 Tablet</h3>
            <p>481px a 768px de largura</p>
            <p>Layout adaptativo, elementos reorganizados</p>
        </div>
        
        <div class="test-card">
            <h3>💻 Desktop</h3>
            <p>Acima de 768px de largura</p>
            <p>Layout completo com múltiplas colunas</p>
        </div>
    </div>

    <div class="test-grid">
        <div class="test-card">
            <h3>🎠 Carrossel</h3>
            <p>Teste o carrossel na página inicial</p>
            <a href="/" class="btn">Ver Carrossel</a>
        </div>
        
        <div class="test-card">
            <h3>📋 Prioridades</h3>
            <p>Teste a página de prioridades</p>
            <a href="/prioridades" class="btn">Ver Prioridades</a>
        </div>
        
        <div class="test-card">
            <h3>💝 Doação</h3>
            <p>Teste o formulário de doação</p>
            <a href="/doar" class="btn">Ver Doação</a>
        </div>
    </div>

    <div class="device-info">
        <h2>Checklist de Responsividade:</h2>
        <ul style="text-align: left; max-width: 600px; margin: 0 auto;">
            <li>✅ Menu hambúrguer funcional no mobile</li>
            <li>✅ Navegação funciona em todas as telas</li>
            <li>✅ Textos são legíveis em dispositivos móveis</li>
            <li>✅ Botões têm tamanho adequado para touch</li>
            <li>✅ Imagens se adaptam ao container</li>
            <li>✅ Formulários são usáveis em mobile</li>
            <li>✅ Carrossel funciona em touch</li>
            <li>✅ Cards se reorganizam automaticamente</li>
            <li>✅ Espaçamentos são adequados</li>
            <li>✅ Animações suaves no menu</li>
        </ul>
    </div>
    
    <div class="device-info">
        <h2>🍔 Menu Hambúrguer:</h2>
        <p><strong>Como testar:</strong></p>
        <ol style="text-align: left; max-width: 600px; margin: 0 auto;">
            <li>Redimensione a janela para menos de 768px de largura</li>
            <li>Clique no ícone de hambúrguer (três linhas) no canto superior direito</li>
            <li>Observe a animação de abertura do menu</li>
            <li>Teste os links do menu</li>
            <li>Clique fora do menu para fechá-lo</li>
            <li>Observe a animação de fechamento</li>
        </ol>
    </div>
</div>
@endsection
