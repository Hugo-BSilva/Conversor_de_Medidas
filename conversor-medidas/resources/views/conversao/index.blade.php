<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Medidas</title>
    <meta name="author" content="Hugo Barbosa da Silva">
    <!-- Google Fonts: Fira Code + Work Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600;700&family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <script>
        const toggleBtn = document.getElementById('toggle-theme');
        const html = document.documentElement;

        toggleBtn.addEventListener('click', () => {
            html.classList.toggle('dark-mode');
            // Salva o estado
            localStorage.setItem('theme', html.classList.contains('dark-mode') ? 'dark' : 'light');
        });

        // Aplica o tema salvo
        window.addEventListener('DOMContentLoaded', () => {
            const saved = localStorage.getItem('theme');
            if (saved === 'dark') {
            html.classList.add('dark-mode');
            }
        });
        </script> -->
</head>
<body>
    <h1>Conversor de Medidas</h1>
    <!-- <button id="toggle-theme">Alternar Tema</button> -->

    <div class="formulario">
        <form action="{{ route('converter.executar') }}" method="POST">
        @csrf
        <input type="number" step="0.01" name="valor" placeholder="Valor">
        <select name="unidadeOrigem">
            @foreach($unidades as $index => $nome)
                <option value="{{ $index }}">{{ ucfirst($nome) }}</option>
            @endforeach
        </select>
        <select name="unidadeDestino">
            @foreach($unidades as $index => $nome)
                <option value="{{ $index }}">{{ ucfirst($nome) }}</option>
            @endforeach
        </select>
        <button type="submit">Converter</button>
    </form>
    </div>

    @if(session('resultado'))
        <div class="resultado">
            <h2>Resultado:</h2>
            <p>{{ session('resultado') }}</p>
        </div>
    @endif

    @if(session('erro'))
        <div class="error">
            <h2>Erro:</h2>
            <p>{{ session('erro') }}</p>
        </div>
    @endif

    @if($errors->any())
        <div class="error">
            <h2>Erro:</h2>
            <p>{{ session('erro') }}</p>
        </div>
    @endif
</body>
</html>
