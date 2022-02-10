<?php
    //Declaração das variáveis
    $multiplicador = (int) 0;
    $multiplicando = (int) 0;
    $resultado = (int) null;

    //Verificando se o botão foi clicado
    if(isset($_POST['btnCalc'])) {
        //Recebendo os dados do formulário
        $multiplicador = $_POST['txtMultiplicador'];
        $multiplicando = $_POST['txtMultiplicando'];

        $resultado = $multiplicador * $multiplicando;
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
        Multiplicador:
        <input type="text" name="txtMultiplicador">
        <br>
        Multiplicando:
        <input type="text" name="txtMultiplicando">

        <input type="submit" name="btnCal" value="Calcular">

        <div id="resultado"><?=$resultado; ?></div>
    </form>    

    <footer>Copyright 2022 © | Florbela Freitas</footer>
</body>
</html>