<?php

    if($_POST['submit'] == "Enviar") {

        $number = filter_input(INPUT_POST, "number", FILTER_SANITIZE_NUMBER_INT);
        $exponent = filter_input(INPUT_POST, "exponent", FILTER_SANITIZE_NUMBER_INT);

        echo "O quadrado do número digitado é: ", pow($number, $exponent);
    }

?>
