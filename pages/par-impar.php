<?php

    /******************************************************************
    * Objetivo: Arquivo responsável pela aplicação 'par-impar', que, de
    acordo com os números selecionado pelo usuário, ele classifica em 
    números pares e ímpares.
    * Autor: Florbela
    * Data: 10/02/2022
    * Versão: 1.0
    ******************************************************************/

    //Import do arquivo de variáveis e constantes
    require_once('../modulo/config.php');

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
    for ($i = 0; $i <= 500; $i++) {
        $num1Acumulador .= '<option value"' . $i . '" >' . $i . '</option>';
    }
    for ($i = 100; $i <= 1000; $i++) {
        $num2Acumulador .= '<option value"' . $i . '" >' . $i . '</option>';
    }

    //Validação para tratar se o botão foi clicado
    if (isset($_POST['btnCalc'])) {

        //Recebendo dados utilizando POST do formulário
        $numInicial = $_POST['sltInicial'];
        $numFinal = $_POST['sltFinal'];

        //Validação para select vazio
        if ($_POST['sltInicial'] == 'Por favor selecione um número' || $_POST['sltFinal'] == 'Por favor selecione um número') {
            echo (ERRO_MSG_SELECT_VAZIO);
        } else {
            if ($_POST['sltInicial'] > $_POST['sltFinal']) {
                echo (ERRO_MSG_NUMERO_INICIAL_MAIOR);
            } else {
                if ($_POST['sltInicial'] == $_POST['sltFinal']) {
                    echo (ERRO_MSG_NUMEROS_IGUAIS);
                } else {
                    //Looping para validar os números pares
                    for ($i = $numInicial; $i <= $numFinal; $i++) {
                        if ($i % 2 == 0) {
                            $pares = '<p>' . $i . '</p>';
                            $contPares++;
                            $arrayPares[$contPares] = $pares;
                        } else {
                            $impares = '<p>' . $i . '</p>';
                            $contImpares++;
                            $arrayImpares[$contImpares] = $impares;
                        }
                    }
                }
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
    <link rel="stylesheet" href="../css/reset.css"/>
	<link rel="stylesheet" href="../css/style.css"/>
	<link rel="stylesheet" href="../css/header.css">
	<link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/par-impar.css">
    <title>Par ou Ímpar?</title>
</head>

<body>
    <header>
        <!-- Barra de navegação -->
        <nav class="menu">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../pages/calculadora.php">Calculadora</a></li>
                <li><a href="../pages/media.php">Média</a></li>
                <li><a href="../pages/par-impar.php">Par ou ímpar</a></li>
                <link rel="stylesheet" href="../css/footer.css">
                <li><a href="../pages/tabuada.php">Tabuada</a></li>
            </ul>
        </nav>
    </header>
    <form name="frmParImpar" class="formulario" method="post" action="par-impar.php">
        <p>N° Inicial:</p>
        <select name="sltInicial"><?= $num1Acumulador; ?></select>
        <p class="final">N° Final:</p>
        <select name="sltFinal"><?= $num2Acumulador; ?></select>

        <input type="submit" name="btnCalc" value="Calcular">

        <p>Números pares:</p>
        <div class="numPares">
            <?php
            foreach ($arrayPares as $value) {
                echo ($value);
            }
            echo ($contPares);
            ?>
        </div>

        <p>Números Ímpares:</p>
        <div class="numImpares">
            <?php
            foreach ($arrayImpares as $value) {
                echo ($value);
            }
            echo ($contImpares);
            ?>
        </div>
    </form>
    <footer>Copyright 2022 © | Florbela Freitas</footer>
</body>

</html>