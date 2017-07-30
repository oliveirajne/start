<?php
    if($_POST['submit'] == "Enviar") {
        $antecessor = (int)$_POST['number'] - 1;
        $sucessor = (int)$_POST['number'] + 1;

        echo "O antecessor do número digitado é: ", $antecessor;
        echo "</br> O sucessor do número digitado é: ", $sucessor;
    }
?>
