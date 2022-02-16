<?php
    //Declaração das variáreis
    $num1Acumulador = '<option>Por favor selecione um número</option>';
    $num2Acumulador = '<option>Por favor selecione um número</option>';
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

        </div>

        <div id="numImpares">

        </div>

    </form>
</body>
</html>