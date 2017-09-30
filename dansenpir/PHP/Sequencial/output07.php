<?php

    if($_POST['submit'] == "Enviar") {

        $reajuste = filter_input(INPUT_POST, "number", FILTER_SANITIZE_NUMBER_INT) * 1.1;

        echo "O valor digitado com reajuste de 10%: ", $reajuste;
    }
?>
