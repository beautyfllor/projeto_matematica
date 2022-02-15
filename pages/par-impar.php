<?php
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
        N° Inicial
        <select name="sltInicial">
        <option value="" selected>Por favor selecione um número</option>
        <?php
            for($i = 0; $i <= 500; $i++) {
                <option value=""><?=$i; ?></option>
            }
        ?>
        </select>
        <br>
        N° Final
        <select name="sltFinal">
        <option value="" selected> Por favor selecione um número</option>
        </select>
        <br>
        <input type="submit" name="btnCalc" value="Calcular">

        <div id="numPares">

        </div>

        <div id="numImpares">

        </div>

    </form>
</body>
</html>