<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Medidas</title>
    <meta name="author" content="Hugo Barbosa da Silva">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
<body>
    <h1>Conversor de Medidas</h1>

    @if(session('resultado'))
        <p>Resultado: {{ session('resultado') }}</p>
    @endif

    @if($errors->any())
        <p style="color: red;">Erro: {{ $errors->first() }}</p>
    @endif

    <form action="{{ route('converter') }}" method="POST">
        @csrf
        <input type="number" step="0.01" name="valor" placeholder="Valor">
        <select name="origem">
            <option value="mm">Milímetros</option>
            <option value="cm">Centímetros</option>
            <option value="m">Metros</option>
            <option value="km">Quilômetros</option>
        </select>
        <select name="destino">
            <option value="mm">Milímetros</option>
            <option value="cm">Centímetros</option>
            <option value="m">Metros</option>
            <option value="km">Quilômetros</option>
        </select>
        <button type="submit">Converter</button>
    </form>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
