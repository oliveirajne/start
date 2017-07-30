<?php
    if($_POST['submit'] == "Enviar") {
        $media = ((int)$_POST['nota1'] + (int)$_POST['nota2'] + (int)$_POST['nota3'] + (int)$_POST['nota4']) / 4;

        echo "Sua média é: ", $media;
    }
?>
