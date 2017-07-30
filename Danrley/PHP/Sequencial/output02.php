<?php
    if ($_POST['submit']=='Enviar') {
        $nome = filter_input (INPUT_POST,'username',FILTER_SANITIZE_STRING);
        $endereco = filter_input (INPUT_POST,'endereco',FILTER_SANITIZE_STRING);
        $telefone = filter_input (INPUT_POST,'telefone',FILTER_SANITIZE_NUMBER_INT);

        echo "Seu nome: ", $nome;
        echo "</br> Seu Endereço: ", $endereco;
        echo "</br> Seu Telefone: ", $telefone;
    }
?>
