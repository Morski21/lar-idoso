<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Debug - Lar dos Idosos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: linear-gradient(135deg, #f97316, #ea580c);
            color: white;
            min-height: 100vh;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 16px;
            backdrop-filter: blur(10px);
        }
        .test-item {
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
        }
        .success {
            background: rgba(34, 197, 94, 0.3);
            border-left: 4px solid #22c55e;
        }
        .error {
            background: rgba(239, 68, 68, 0.3);
            border-left: 4px solid #ef4444;
        }
        .btn {
            display: inline-block;
            background: white;
            color: #f97316;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            margin: 10px 5px;
            transition: all 0.3s;
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔧 Debug - Lar dos Idosos</h1>
        
        <div class="test-item success">
            <h3>✅ Laravel Funcionando</h3>
            <p>Se você está vendo esta página, o Laravel está funcionando corretamente!</p>
        </div>
        
        <div class="test-item success">
            <h3>✅ CSS Inline Funcionando</h3>
            <p>O background laranja e os estilos estão sendo aplicados corretamente.</p>
        </div>
        
        <div class="test-item">
            <h3>📁 Teste de Arquivos CSS</h3>
            <p>Vamos testar se os arquivos CSS externos estão carregando:</p>
            <p><strong>Arquivo app.css:</strong> <a href="{{ asset('css/app.css') }}" target="_blank">Ver arquivo</a></p>
            <p><strong>Arquivo priorities.css:</strong> <a href="{{ asset('css/priorities.css') }}" target="_blank">Ver arquivo</a></p>
        </div>
        
        <div class="test-item">
            <h3>🧪 Teste de Rotas</h3>
            <p>Teste as diferentes páginas do sistema:</p>
            <a href="/" class="btn">🏠 Home</a>
            <a href="/prioridades" class="btn">📋 Prioridades</a>
            <a href="/test" class="btn">🧪 Teste Simples</a>
            <a href="/login" class="btn">🔐 Login</a>
        </div>
        
        <div class="test-item">
            <h3>📊 Informações do Sistema</h3>
            <p><strong>Laravel Version:</strong> {{ app()->version() }}</p>
            <p><strong>PHP Version:</strong> {{ PHP_VERSION }}</p>
            <p><strong>Environment:</strong> {{ app()->environment() }}</p>
            <p><strong>Debug Mode:</strong> {{ config('app.debug') ? 'Ativado' : 'Desativado' }}</p>
        </div>
        
        <div class="test-item">
            <h3>🎨 Próximos Passos</h3>
            <p>Se tudo estiver funcionando aqui, o problema pode ser:</p>
            <ul>
                <li>Cache do navegador - tente Ctrl+F5</li>
                <li>Arquivos CSS não estão sendo servidos corretamente</li>
                <li>Problema com o layout blade</li>
            </ul>
        </div>
    </div>
</body>
</html>

