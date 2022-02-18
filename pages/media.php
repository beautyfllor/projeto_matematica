<?php

    /******************************************************************
    * Objetivo: Arquivo responsável pela aplicação 'media', que calcula
    a média de acordo com os valores inseridos pelo usuário. 
    * Autor: Florbela
    * Data: 10/02/2022
    * Versão: 1.0
    ******************************************************************/

    //Import do arquivo de variáveis e constantes
    require_once('../modulo/config.php');

    //Import do arquivo de funções para cálculos matemáticos
    require_once('../modulo/calculos.php');

    //Declaração de variáveis
    //nomeVar = (tipoDados) valorInicial
    $nota1 = (double) 0;
    $nota2 = (double) 0;
    $nota3 = (double) 0;
    $nota4 = (double) 0;
    $resultadoMedia = (double) null;

    //Validação para tratar se o botão foi clicado
    if(isset($_POST["btncalc"])) {

         //Recebendo dados utilizando POST do formulário
         $nota1 = $_POST["txtn1"];
         $nota2 = $_POST["txtn2"];
         $nota3 = $_POST["txtn3"];
         $nota4 = $_POST["txtn4"];

         //Validação  para tratamento de caixa vazia
        if($_POST["txtn1"] == "" || $_POST["txtn2"] == "" || $_POST["txtn3"] == "" || $_POST["txtn4"] == "") {
            echo (ERRO_MSG_CAIXA_VAZIA);
        } else {
            //Validação para tratamento de valores inválidos
            if(!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3) || !is_numeric($nota4)) {
                echo (ERRO_MSG_CARACTER_INVALIDO_TEXTO);
            } else {
                $resultadoMedia = calculoMedia($nota1, $nota2, $nota3, $nota4);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Média</title>
        <link rel="stylesheet" href="../css/reset.css"/>
	    <link rel="stylesheet" href="../css/style.css"/>
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" type="text/css" href="../css/media.css">
        <meta charset="utf-8">
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
                <li><a href="../pages/tabuada.php">Tabuada</a></li>
            </ul>
        </nav>
    </header>
        
        <div id="conteudo">
            <div id="titulo">
                Calculo de Médias
            </div>

            <div id="form">
                <form name="frmMedia" method="post" action="media.php">
                    <div>
                        <label>Nota 1:</label>
                        <input type="text" name="txtn1" value="<?php echo($nota1)?>"  > 
                    </div>
                    
                    <div>
                        <label>Nota 2:</label>
                        <input type="text" name="txtn2" value="<?php echo($nota2)?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 3:</label>
                        <input type="text" name="txtn3" value="<?php echo($nota3)?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 4:</label>
                        <input type="text" name="txtn4" value="<?php echo($nota4)?>" >
                    </div>
                    <div>
                        <input type="submit" name="btncalc" value ="Calcular" >
                        <div id="botaoReset">
                            <a href="media.php">
                                Novo Cálculo
                            </a>    
                        </div>
                    </div>
                </form>

            </div>
            <div id="resultadoMedia">
                A média é: <?= $resultadoMedia; ?>
            </div>
        </div>
        <footer>Copyright 2022 © | Florbela Freitas</footer>
	</body>

</html>
