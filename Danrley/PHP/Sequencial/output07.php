<?php

    if($_POST['submit'] == "Enviar") {

        $reajuste = ((int)$_POST['number'] * 1.1);

        echo "O valor digitado com reajuste de 10%: ", $reajuste;
    }
?>
