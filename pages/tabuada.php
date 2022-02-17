<?php

    /******************************************************************
    * Objetivo: Arquivo responsável pela aplicação 'tabuada', que cria 
    uma tabuada de acordo com os números que o usuário inseriu.
    * Autor: Florbela
    * Data: 10/02/2022
    * Versão: 1.0
    ******************************************************************/

    //Import do arquivo com variáveis e costantes
    require_once('../modulo/config.php');

    //Import do arquivo de funções para cálculos matemáticos
    require_once('../modulo/calculos.php');
    
    //Declaração das variáveis
    $num1 = (int) 0;
    $num2 = (int) 0;
    $resultado = (int) null;
    $resultUser = (string) null;

    //Verificando se o botão foi clicado
    if(isset($_POST['btnCalc'])) {
        //Recebendo os dados do formulário
        $num1 = $_POST['txtNum1'];
        $num2 = $_POST['txtNum2'];

        //Validação para tratamento de caixa vazia
        if($_POST['txtNum1'] == null || $_POST['txtNum2'] == null) {
            echo(ERRO_MSG_CAIXA_VAZIA);
        } else {
            if(!is_numeric($num1) || !is_numeric($num2)) {
                echo(ERRO_MSG_CARACTER_INVALIDO_TEXTO);
            } else {
                if($num1 == 0) {
                    echo(ERRO_MSG_TABUADA_ZERO);
                } else {
                    for($i = 0; $i <= $num2; $i++) {
                        $resultado = operacaoMatematica($num1, $i, "MULTIPLICAR");
                        $resultUser .= $num1 . ' X ' . $i . ' = ' . $resultado . '<br>';
                    }
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tabuada.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Tabuada</title>
</head>
<body>
    <form name="frmTabuada" method="post" action="tabuada.php">
        Tabuada:
        <input type="text" name="txtNum1">
        <br>
       Contador:
        <input type="text" name="txtNum2">

        <input type="submit" name="btnCalc" value="Calcular">

        <div id="resultado"><?=$resultUser; ?></div>
    </form>    

    <footer>Copyright 2022 © | Florbela Freitas</footer>
</body>
</html>