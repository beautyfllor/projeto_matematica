<?php
    //Declaração das variáreis
    $numInicial = null;
    $numFinal = null;
    $num1Acumulador = '<option>Por favor selecione um número</option>';
    $num2Acumulador = '<option>Por favor selecione um número</option>';
    $pares = null;
    $impares = null;
    $contPares = null;
    $contImpares = null;
    $arrayPares = [];
    $arrayImpares = [];

    //Loopings para o select
    for($i = 0; $i <= 500; $i++) {
        $num1Acumulador .= '<option value"' . $i . '" >' . $i . '</option>';
    }
    for($i = 100; $i <= 1000; $i++) {
        $num2Acumulador .= '<option value"' . $i . '" >' . $i . '</option>';
    }

    //Validação para tratar se o botão foi clicado
    if(isset($_POST['btnCalc'])) {

        //Recebendo dados utilizando POST do formulário
        $numInicial = $_POST['sltInicial'];
        $numFinal = $_POST['sltFinal'];
        
        //Looping para validar os números pares
        for($i = $numInicial; $i <= $numFinal; $i++) {
            if($i % 2 == 0) {
                $pares = '<p>' . $i . '</p>';
                $contPares++;
                $arrayPares[$contPares] = $pares;
            } else {
                $impares = '<p>' . $i . '</p>';
                $contImpares++;
                $arrayImpares[$contImpares] = $impares;
            }
        }
        $contPares = '<p> Quantidade de números pares: ' . $contPares . '</p>';
        $contImpares = '<p> Quantidade de números ímpares: ' . $contImpares . '</p>';
    }
    
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/par-impar.css">
    <title>Par ou Ímpar?</title>
</head>
<body>
    <form name="frmParImpar" method="post" action="par-impar.php">
        <p>N° Inicial</p>
        <select name="sltInicial"><?=$num1Acumulador; ?></select>
        <p>N° Final</p>
        <select name="sltFinal"><?=$num2Acumulador; ?></select>

        <input type="submit" name="btnCalc" value="Calcular">

        <div id="numPares">
            <?php
                foreach($arrayPares as $value) {
                    echo($value);
                }
            ?>
        </div>

        <div id="numImpares">
        <?php
            foreach($arrayImpares as $value) {
                echo($value);
            }
            ?>
        </div>
    </form>
</body>
</html>