<?php

class Sequencial
{
    function __construct()
    {
        $_SESSION['page'] = '#1';
    }
    function hello($msg)
    {
        echo ($msg);
    }
    function printInfo($nome, $rua, $tel)
    {
        $_SESSION['page'] = "#2";
        echo ("Seu nome é $nome <br>");
        echo ("Endereço: $rua <br>");
        echo ("Seu telefone é $tel");
        session_destroy();
    }
    function showNum()
    {
        $_SESSION['page'] = "#3";
        echo ($_POST['num']);
        session_destroy();
    }
    function somar($num1, $num2)
    {
        $_SESSION['page'] = "#4";
        echo ($num1 + $num2);
        session_destroy();
    }
    function calcMedia($bim1, $bim2, $bim3, $bim4)
    {
        $_SESSION['page'] = "#5";
        $soma = $bim1 + $bim2 + $bim3 + $bim4;
        $media = $soma/4;
        echo ($media);
        session_destroy();
    }
    function showBrothers($filho)
    {
        $_SESSION['page'] = "#6";
        $irmao = $filho - 1;
        $irma = $filho + 1;
        echo ($irmao. " e " .$irma);
        session_destroy();
    }
    function showQuadradinho($num)
    {
        $_SESSION['page'] = "#8";
        echo($num*$num);
        session_destroy();
    }
    function showPage()
    {
        if (isset($_SESSION['page'])) {
            $page = $_SESSION['page'];
            $id = substr($page, -1);
            echo("<script>mostrar('$page', $('#i$id'));</script>");
        } else {
        }
    }
}
