<?php
    //Declaração das variáveis
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/par-impar.css">
    <title>Document</title>
</head>
<body>
    <form name="frmParImpar" method="post" action="par-impar.php">
        N° Inicial
        <input type="text" name="txtNumInicial">
        <br>
        N° Final
        <input type="text" name="txtNumFinal">

        <input type="submit" name="btnCalc" value="Calcular">

        <div id="numPares">

        </div>

        <div id="numImpares">

        </div>

    </form>
</body>
</html>