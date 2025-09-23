<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Criar conta - {{ config('app.name', 'Laravel') }}</title>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                body{font-family:ui-sans-serif,system-ui,sans-serif;-webkit-font-smoothing:antialiased;display:flex;align-items:center;justify-content:center;min-height:100vh;background:#FDFDFC;padding:16px}
                .card{background:#fff;border:1px solid #e3e3e0;border-radius:16px;box-shadow:0 12px 32px rgba(0,0,0,.08);width:100%;max-width:440px;overflow:hidden}
                .box{border:1px solid #ececea;background:#fbfbfa;border-radius:14px;padding:18px;display:flex;flex-direction:column;gap:12px}
                .input{width:100%;border:1px solid #e9e9e7;background:#f6f6f5;border-radius:10px;padding:.75rem 1rem;padding-left:2.5rem}
                .field{position:relative}
                .field .fi{position:absolute;left:10px;top:50%;transform:translateY(-50%);opacity:.6}
                .btn{display:inline-block;width:100%;padding:.75rem 1rem;background:#F26A21;color:#fff;border:1px solid #F26A21;border-radius:24px;font-weight:600}
                a{color:#F26A21}
                @media (max-width:480px){.tabs{padding:6px}.tab{padding:10px 8px}}
            </style>
        @endif
    </head>
    <body class="min-h-screen bg-[#FDFDFC] dark:bg-[#0a0a0a] flex items-center justify-center p-6">
        <div class="w-full bg-white dark:bg-[#161615] rounded-lg p-6 card">
            <h1 class="text-xl font-medium mb-4 dark:text-[#EDEDEC]" style="text-align:center">Criar conta</h1>

            @if ($errors->any())
                <div class="mb-4 text-sm text-red-600">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register.attempt') }}" method="POST" class="space-y-4">
                @csrf
                <div class="box">
                    <div class="field">
                        <label for="name" class="block text-sm mb-1 dark:text-[#EDEDEC]">Nome</label>
                        <span class="fi">👤</span>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus class="input" />
                    </div>
                    <div class="field">
                        <label for="email" class="block text-sm mb-1 dark:text-[#EDEDEC]">E-mail</label>
                        <span class="fi">📧</span>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required class="input" />
                    </div>
                    <div class="field">
                        <label for="password" class="block text-sm mb-1 dark:text-[#EDEDEC]">Senha</label>
                        <span class="fi">🔒</span>
                        <input id="password" name="password" type="password" required class="input" />
                    </div>
                    <div class="field">
                        <label for="password_confirmation" class="block text-sm mb-1 dark:text-[#EDEDEC]">Confirmar senha</label>
                        <span class="fi">🔒</span>
                        <input id="password_confirmation" name="password_confirmation" type="password" required class="input" />
                    </div>
                </div>
                <button type="submit" class="btn">Criar conta</button>
            </form>
            <p class="mt-4 text-sm">
                Já tem conta?
                <a href="{{ route('login') }}" class="underline">Entrar</a>
            </p>
        </div>
    </body>
</html>


