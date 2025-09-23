<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login - {{ config('app.name', 'Laravel') }}</title>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                body{font-family:ui-sans-serif,system-ui,sans-serif;-webkit-font-smoothing:antialiased;display:flex;align-items:center;justify-content:center;min-height:100vh;background:#FDFDFC;padding:16px}
                .card{background:#fff;border:1px solid #e3e3e0;border-radius:16px;box-shadow:0 12px 32px rgba(0,0,0,.08);width:100%;max-width:900px;overflow:hidden}
                .split{display:grid;grid-template-columns:1fr 1fr}
                .left{background:#F26A21;color:#fff;padding:32px;display:flex;flex-direction:column;justify-content:center;align-items:center;gap:16px}
                .left .logo{width:120px;height:120px;border-radius:50%;background:#fff2;display:flex;align-items:center;justify-content:center;border:2px solid #ffffff55;overflow:hidden}
                .left h2{font-size:22px;margin:0}
                .left p{opacity:.95;text-align:center;max-width:280px}
                .right{padding:32px}
                .box{border:1px solid #ececea;background:#fbfbfa;border-radius:14px;padding:18px;display:flex;flex-direction:column;gap:12px}
                .input{width:100%;border:1px solid #e9e9e7;background:#f6f6f5;border-radius:10px;padding:.75rem 1rem;padding-left:2.5rem}
                .field{position:relative}
                .field .fi{position:absolute;left:10px;top:50%;transform:translateY(-50%);opacity:.6}
                .btn{display:inline-block;width:100%;padding:.5rem .75rem;background:#1b1b18;color:#fff;border:1px solid #1b1b18;border-radius:4px}
                .btn.primary{background:#F26A21;border-color:#F26A21;border-radius:24px;padding:.75rem 1rem;font-weight:600}
                .row{display:flex;justify-content:space-between;gap:12px;font-size:.85rem;color:#666}
                @media (max-width:480px){.tabs{padding:6px}.tab{padding:10px 8px}}
            </style>
        @endif
    </head>
    <body class="min-h-screen bg-[#FDFDFC] dark:bg-[#0a0a0a] flex items-center justify-center p-6">
        <div class="w-full bg-white dark:bg-[#161615] rounded-lg card">
            <div class="split">
                <div class="left">
                    <div class="logo"><img src="/images/logo.png" alt="Lar" style="max-width:100%;height:100%;object-fit:contain"/></div>
                    <h2>Lar dos Idosos</h2>
                    <p>Seja bem-vindo(a)! Sua ajuda transforma vidas. Acesse sua conta para continuar.</p>
                </div>
                <div class="right">
                    <h1 class="text-xl font-medium mb-1 mt-2" style="text-align:center;color:#1b1b18">Bem-vindo</h1>
                    <p style="text-align:center;color:#555;margin-bottom:16px">Entre na sua conta para continuar</p>

            @if ($errors->any())
                <div class="mb-4 text-sm text-red-600">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('login.attempt') }}" method="POST" class="space-y-4">
                @csrf
                <div class="box">
                    <div class="field">
                        <label for="email" class="block text-sm mb-1 dark:text-[#EDEDEC]">E-mail</label>
                        <span class="fi">📧</span>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus class="input" />
                    </div>
                    <div class="field">
                        <label for="password" class="block text-sm mb-1 dark:text-[#EDEDEC]">Senha</label>
                        <span class="fi">🔒</span>
                        <input id="password" name="password" type="password" required class="input" />
                    </div>
                </div>
                <label class="inline-flex items-center gap-2 text-sm dark:text-[#EDEDEC]">
                    <input type="checkbox" name="remember" value="1" class="rounded-sm border-[#e3e3e0] dark:border-[#3E3E3A]">
                    Lembrar-me
                </label>
                <button type="submit" class="btn primary">Entrar</button>
            </form>
            <p class="mt-4 text-sm">
                Não tem uma conta? <a href="{{ route('register') }}" class="underline" style="color:#F26A21">Crie agora</a>
            </p>
                </div>
            </div>
        </div>
    </body>
</html>


