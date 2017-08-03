<?php

    if($_POST['submit'] == "Enviar") {

        $hora_aula = filter_input(INPUT_POST, "hora_aula", FILTER_SANITIZE_NUMBER_INT);
        $numero_aulas = filter_input(INPUT_POST, "numero_aulas", FILTER_SANITIZE_NUMBER_INT);
        $INSS = filter_input(INPUT_POST, "INSS", FILTER_SANITIZE_NUMBER_INT);

        $salario_liquido = (($hora_aula * $numero_aulas) * (1 - ($INSS / 100)));

        echo "Seu salário líquido é: R$", (float)$salario_liquido;
    }

?>
