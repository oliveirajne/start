<?php
    if($_POST['submit'] == 'Enviar') {

        $numero = filter_input(INPUT_POST, "numero", FILTER_SANITIZE_NUMBER_INT);

        echo "O número informado foi: ", $_POST['numero'];
    }
?>
