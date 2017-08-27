<?php
    include('Programa.php');
    $programa = new Sequencial;
    session_start();
?>

    <html>

    <head>
        <title>Meu programa em PHP</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
        <style>
            .footer.segment {
                padding: 5em 0em;
            }

            #footer {
                position: fixed;
                left: 0px;
                bottom: 0px;
                width: 100%;
            }

            body {
                overflow: hidden;
            }
        </style>
    </head>

    <body>

        <div class="ui container">
            <div class="ui pointing fixed menu">
                <a id="i1" class="active item">#1</a>
                <a id="i2" class="item">#2</a>
                <a id="i3" class="item">#3</a>
                <a id="i4" class="item">#4</a>
                <a id="i5" class="item">#5</a>
                <a id="i6" class="item">#6</a>
                <a id="i7" class="item">#7</a>
                <a id="i8" class="item">#8</a>
                <a id="i9" class="item">#9</a>
                <a id="i10" class="item">#10</a>
            </div>
            <br><br><br>
        </div>
        <div id="content" class="ui container">
            <div id="1" class="conteudo" hidden>
                <center>
                    <h1>
                        <?php $programa->hello('Olá mundo!'); ?>
                    </h1>
                </center>
            </div>
            <div id="2" class="conteudo" hidden>
                <center>
                    <h1>Impressão de dados</h1>
                    <div class="ui grid center aligned">
                        <form class="ui form" id="formulario" method="post">
                            <div class="field">
                                <label>Seu nome:</label>
                                <input type="text" name="nome" placeholder="Seu nome">
                            </div>
                            <div class="field">
                                <label>Endereço:</label>
                                <input type="text" name="endereco" placeholder="Seu endereço">
                            </div>
                            <div class="field">
                                <label>Seu telefone:</label>
                                <input type="number" name="telefone" pattern="[09]{9}" placeholder="Seu telefone">
                            </div>
                            <input class="ui green button" name="dados" type="submit">
                        </form>
                    </div>
                    <?php
                    if (isset($_POST['dados'])) {
                        $programa->printInfo($_POST['nome'], $_POST['endereco'], $_POST['telefone']);
                    } else {
                        echo("Insira seus dados!");
                    }
                ?>
                </center>
            </div>
            <div id="3" class="conteudo" hidden>
                <center>
                    <h1>Mostrar número</h1>
                    <div class="ui grid center aligned">
                        <form class="ui form" id="calculadora" method="post">
                            <div class="field">
                                <label>Número</label>
                                <input type="number" name="num" placeholder="Qualquer número" required>
                            </div>
                            <input class="ui green button" name="numsub" type="submit">
                        </form>
                        <br>
                        <h2>
                            <?php if(isset($_POST['num'])) { $programa->showNum($_POST['num']); } ?>
                        </h2>
                    </div>
                </center>
            </div>
            <div id="4" class="conteudo" hidden>
                <center>
                    <h1>Calculadora</h1>
                    <div class="ui grid center aligned">
                        <form class="ui form" id="calculadora" method="post">
                            <div class="field">
                                <label>Número 1:</label>
                                <input type="number" name="calc1" placeholder="Qualquer número" title="Deve ser um número" required>
                            </div>
                            <div class="field">
                                <label>Número 2:</label>
                                <input type="number" name="calc2" placeholder="Qualquer número" title="Deve ser um número" required>
                            </div>
                            <input class="ui green button" name="calc" type="submit">
                        </form>
                    </div>
                    <h2>
                        <?php
                            if (isset($_POST['calc'])) {
                                 $programa->somar($_POST['calc1'], $_POST['calc2']);
                            } else {
                                    }
                        ?>
                    </h2>
                </center>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="pages.js"></script>
        <?php
            $programa->showPage();
        ?>
    </body>

    </html>