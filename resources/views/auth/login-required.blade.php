<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Necessário - Lar dos Idosos</title>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                :root{--lar-orange:#F26A21;--lar-brown:#9a6f5b}
                *{box-sizing:border-box;margin:0;padding:0}
                body{font-family:ui-sans-serif,system-ui,sans-serif;color:#333;background:#f7f6f5;display:flex;align-items:center;justify-content:center;min-height:100vh}
                .nav{position:fixed;top:0;left:0;right:0;height:72px;display:flex;align-items:center;justify-content:space-between;padding:0 24px;background:#9a7662;color:#fff;z-index:10}
                .brand{display:flex;gap:12px;align-items:center}
                .brand img{height:60px}
                .menu a{margin:0 14px;color:#fff;text-decoration:none}
                .card{background:#fff;border-radius:16px;box-shadow:0 12px 32px rgba(0,0,0,.08);padding:40px;text-align:center;max-width:500px;margin:20px}
                .icon{font-size:64px;margin-bottom:20px}
                .title{font-size:24px;margin-bottom:12px;color:#333}
                .subtitle{color:#666;margin-bottom:32px;font-size:16px;line-height:1.5}
                .btn{display:inline-block;background:var(--lar-orange);color:#fff;text-decoration:none;padding:14px 28px;border-radius:8px;font-weight:600;margin:8px}
                .btn:hover{background:#e55a1a}
                .btn.secondary{background:#666;color:#fff}
                .btn.secondary:hover{background:#555}
            </style>
        @endif
    </head>
    <body>
        <header class="nav">
            <div class="brand">
                <img src="/images/logo.png" alt="Lar dos Idosos" />
                <div>
                    <strong>Lar dos Idosos</strong>
                    <div style="font-size:12px;opacity:.8">Rua Vinte e Quatro de Junho, Prudentópolis - PR</div>
                </div>
            </div>
            <nav class="menu">
                <a href="/">Home</a>
                <a href="#sobre">Sobre</a>
                <a href="#prioridades">Prioridades</a>
                <a href="#contato">Contato</a>
                <a href="/login" style="background:#F26A21;padding:8px 16px;border-radius:6px;margin-left:8px">Login</a>
            </nav>
        </header>

        <div class="card">
            <div class="icon">🔒</div>
            <h1 class="title">Login Necessário</h1>
            <p class="subtitle">
                Para fazer uma doação, você precisa ter uma conta em nosso sistema. 
                Isso nos ajuda a manter um registro seguro das doações e a entrar em contato com você.
            </p>
            <div>
                <a href="/login" class="btn">Fazer Login</a>
                <a href="/register" class="btn secondary">Criar Conta</a>
            </div>
            <p style="margin-top:20px;font-size:14px;color:#999">
                Já tem uma conta? <a href="/login" style="color:var(--lar-orange)">Clique aqui para entrar</a>
            </p>
        </div>
    </body>
</html>


