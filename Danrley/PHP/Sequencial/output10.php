<?php

    if($_POST['submit'] == "Enviar") {

        $nascimento = filter_input(INPUT_POST, "nascimento", FILTER_SANITIZE_NUMBER_INT);
        $atual = filter_input(INPUT_POST, "atual", FILTER_SANITIZE_NUMBER_INT);

        $idade = $atual - $nascimento;

        echo "Sua idade é: ", $idade;

    }

?>
