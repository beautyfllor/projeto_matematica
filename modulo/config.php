<?php

    /***************************************************************
    * Objetivo: Arquivo responsável por reunir e padronizar todas as 
    variáveis e constantes que serão utilizadas em todo o projeto.
    * Autor: Florbela
    * Data: 11/02/2022
    * Versão: 1.0
    ***************************************************************/

    //Constantes do projeto
    //Modo 01 de criar uma constante
    define('ERRO_MSG_CAIXA_VAZIA', '<script> alert("Favor preencher todas as caixas!");</script>');
    define('ERRO_MSG_SELECT_VAZIO', '<script> alert("Favor preencher todos os campos!"); </script>');

    //Modo 02 de criar uma constante
    const ERRO_MSG_OPERACAO_CALCULO = '<script> alert("Favor escolher uma operação válida!");</script>';
    const ERRO_MSG_CARACTER_INVALIDO_TEXTO = '<script> alert("Não é possível realizar cálculos de dados não numéricos!"); </script>';
    const ERRO_MSG_DIVISAO_ZERO = '<script> alert("Não é possível realizar divisão onde o valor 2 é igual a 0!"); </script>';
    const ERRO_MSG_TABUADA_ZERO = '<script> alert("Não existe tabuada do zero!!"); </script>';
    const ERRO_MSG_NUMERO_INICIAL_MAIOR = '<script> alert("O número inicial não pode ser maior que o número final!!"); </script>';
    const ERRO_MSG_NUMEROS_IGUAIS = '<script> alert("Favor escolher números diferentes!!!"); </script>';
?>