<?php
    if($_POST['submit'] == "Enviar"){

        $numero1 = filter_input(INPUT_POST, "numero1", FILTER_SANITIZE_NUMBER_INT);
        $numero2 = filter_input(INPUT_POST, "numero2", FILTER_SANITIZE_NUMBER_INT);
        $soma = ($numero1 + $numero2);

        echo "A soma dos números digitados é: ", $soma;

}
?>
