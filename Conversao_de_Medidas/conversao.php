<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Hugo Barbosa da Silva">
    <link rel="icon" href="foto/icon.jpg">
    <link rel="stylesheet" href="style.css">
    <title>Conversão: arquivo PHP</title>
</head>
<body>
    <main class="converte">
        <article class="secao">            
        <h1>Resultado da conversão:</h1>
        <?php
        //Recebendo valores do formulário
            $n1 = $_POST["num1"];
            $valor = $_POST["valor"];
            $conversao = $_POST["converter"];
            $resultado = 0;

        //Condição switch case, para o segundo select do formulário
            switch ($conversao) {
            //Milímetros
                case 0: 
                    if ($valor == 1){ //Centímetro para milímetros
                        $resultado = $n1 * 10;
                        echo "<label>$n1 centímetros = $resultado milímetros.</label>";
                    } elseif ($valor == 2){ //Metros para milímetros
                        $resultado = $n1 * 1000;
                        echo "<label>$n1 metros = $resultado milímetros.</label>";
                    } elseif ($valor == 3) { //Kilômetros para milímetros
                        $resultado = $n1 * 1000000;
                        echo "<label>$n1 kilômetros = $resultado milímetros.</label>";
                    } else {
                        echo "<label>Você escolheu o mesmo tipo, 'milímetro' + 'milímetro'
                            volte e tente novamente !</label>";
                    }
                break;
            //Centímetros
                case 1: 
                    if ($valor == 0) { //Milímetros para centímetros
                        $resultado = $n1/10;
                        echo "<label>$n1 milímetros = $resultado centímetros.</label>";
                    } elseif ($valor == 2) { //Metros para centímetros
                        $resultado=$n1/100;
                        echo "<label>$n1 metros = $resultado centímetros.</label>";
                    } elseif ($valor == 3){ //Kilômetros para centímetros
                        $resultado=$n1/100000;
                        echo "<label>$n1 kilômetros = $resultado centímetros.</label>";
                    } else {
                        echo " <label> Você escolheu o mesmo tipo, 'centímetro' + 
                            'centímetro' volte e tente novamente !</label>";
                    }
                break;
            //Metros
                case 2:
                    if ($valor == 0) { //Milímetros para metros
                        $resultado = $n1 / 1000;
                        echo "<label>$n1 milímetros = $resultado metros.</label>";
                    } elseif ($valor == 1) { //Centímetros para metros
                        $resultado=$n1/100;
                        echo "<label>$n1 centímetros = $resultado metros.</label>";
                    } elseif ($valor == 3){ //Kilômetros para metros
                        $resultado=$n1*1000;
                        echo "<label>$n1 kilômetros = $resultado metros.</label>";
                    } else {
                        echo "<label>Você escolheu o mesmo tipo,
                         'metros' + 'metros' 
                        volte e tente novamente !</label>";
                    }
                break;
            //Kilômetros
                case 3:
                    if ($valor == 0) { //Milímetros para kilômetros
                        $resultado = $n1 / 1000000;
                        echo "<label>$n1 milímetros = $resultado kilômetros.</label>";
                    } elseif ($valor == 1) { //Centímetros para kilômetros
                        $resultado = $n1 / 100000;
                        echo "<label>$n1 centímetros = $resultado kilômetros.</label>";
                    } elseif ($valor == 2) {
                        $resultado = $n1 / 1000; //Metros para kilômetros
                        echo "<label>$n1 metros = $resultado kilômetros.</label>";
                    } else {
                        echo "<label>Você escolheu o mesmo tipo, 
                        'kilômetros' + 'kilômetros'
                         volte e tente novamente !</label>";
                    }                    
                break;

                default:
                    echo "<label>Você não digitou nenhum número,
                     volte e tente novamente.</label>";
                    break;
            }
        ?>
        <a href="index.html"><button>Voltar</button></a>
        </article>
    </main>
</body>
</html>