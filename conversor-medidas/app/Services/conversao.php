<?php
declare(strict_types=1);

const NOMES_UNIDADES =
[
    0 => "Milímetros",
    1 => "Centímetros",
    2 => "Metros",
    3 => "Quilômetros"
];

const ESCALAS =
[
    0 => 0.001, // Milímetros
    1 => 0.01,  // Centímetros
    2 => 1,     // Metros
    3 => 1000   // Quilômetros
];

function calcularConversao($valor, $unidadeOrigem, $unidadeDestino)
{
    return $valor * ESCALAS[$unidadeOrigem] / ESCALAS[$unidadeDestino];
}

function exibirConversao($valor, $unidadeOrigem, $unidadeDestino)
{
    $resultado = calcularConversao($valor, $unidadeOrigem, $unidadeDestino);
    echo "<label>$valor " . NOMES_UNIDADES[$unidadeOrigem] . " = $resultado " . NOMES_UNIDADES[$unidadeDestino] . ".</label>";
}

function exibirErro()
{
    echo "<label>Você não digitou nenhum número, volte e tente novamente.</label>";
}

function exibirErroMesmoTipo($unidade)
{
    echo "<label>Você escolheu o mesmo tipo, '$unidade' + '$unidade' volte e tente novamente. </label>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Hugo Barbosa da Silva">
    <link rel="stylesheet" href="style.css">
    <title>Conversão: arquivo PHP</title>
</head>
<body>
    <main class="converte">
        <article class="secao">
        <h1>Resultado da conversão:</h1>
        <?php
            //Recebendo valores do formulário
            $unidadeOrigem = (int) $_POST["unidadeOrigem"];
            $unidadeDestino = (int) $_POST["unidadeDestino"];
            $valor = str_replace(',', '.', $_POST["valor"]);
            $valor = (float) $valor;

            if (empty($valor)) {
                exibirErro();
            } elseif ($unidadeOrigem === $unidadeDestino) {
                exibirErroMesmoTipo(NOMES_UNIDADES[$unidadeOrigem]);
            } else {
                exibirConversao($valor, $unidadeOrigem, $unidadeDestino);
            }
        ?>
        <a href="index.html"><button>Voltar</button></a>
        </article>
    </main>
</body>
</html>
