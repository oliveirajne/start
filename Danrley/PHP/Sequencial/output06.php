<?php
    if($_POST['submit'] == "Enviar") {

        $number = filter_input(INPUT_POST, "number", FILTER_SANITIZE_NUMBER_INT);
        $antecessor = $number - 1;
        $sucessor = $number + 1 ;

        echo "O antecessor do número digitado é: ", $antecessor;
        echo "</br> O sucessor do número digitado é: ", $sucessor;
    }
?>
