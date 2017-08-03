<?php
    if($_POST['submit'] == "Enviar") {

        $nota1 = filter_input(INPUT_POST, "nota1", FILTER_SANITIZE_NUMBER_INT);
        $nota2 = filter_input(INPUT_POST, "nota2", FILTER_SANITIZE_NUMBER_INT);
        $nota3 = filter_input(INPUT_POST, "nota3", FILTER_SANITIZE_NUMBER_INT);
        $nota4 = filter_input(INPUT_POST, "nota4", FILTER_SANITIZE_NUMBER_INT);
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        echo "Sua média é: ". $media;
    }
?>
