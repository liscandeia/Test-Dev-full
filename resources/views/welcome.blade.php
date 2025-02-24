<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'VochTech') }}</title>
    <style>
        body {
            background-color: #f4f4f9;
            color: #575757;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        header, footer {
            width: 100%;
            padding: 0 1rem;
        }
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 0;
            background-color: #4b5563;
            color: #fff;
        }
        .logo img {
            margin-left: 1rem;
            max-width: 70px;
        }
        nav a {
            margin-right: 1rem;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #ffca44;
        }
        main {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }
        main .container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1200px;
            text-align: center;
        }
        footer {
            padding: 1rem 0;
            background-color: #4b5563;
            color: #fff;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" />
        </div>
        @if (Route::has('login'))
            <nav>
                @auth
                    <a href="{{ url('/dashboard') }}">Pagina Inicial</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Cadastro</a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
    <main>
        <div class="container">
            <h1>Sistema de Gestão</h1>
        </div>
    </main>
    <footer>
        <p>&copy; vochtech</p>
    </footer>
</body>
</html>
