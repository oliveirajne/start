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

                <a id="i8" class="item">#8</a>
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
            <div id="5" class="conteudo" hidden>
                <center>
                    <h1>Média do Semestre</h1>
                    <div class="ui grid center aligned">
                        <form class="ui form" id="calculadora" method="post">
                            <div class="field">
                                <label>1º Bimestre</label>
                                <input type="number" name="bim1" title="Digite a nota" required>
                            </div>
                            <div class="field">
                                <label>2º Bimestre</label>
                                <input type="number" name="bim2" title="Digite a nota" required>
                            </div>
                            <div class="field">
                                <label>3º Bimestre</label>
                                <input type="number" name="bim3" title="Digite a nota" required>
                            </div>
                            <div class="field">
                                <label>4º Bimestre</label>
                                <input type="number" name="bim4" title="Digite a nota" required>
                            </div>
                            <input class="ui green button" name="bim" type="submit">
                        </form>
                    </div>
                    <h2>
                        <?php
                        if (isset($_POST['bim'])) {
                            $programa->calcMedia($_POST['bim1'], $_POST['bim2'], $_POST['bim3'], $_POST['bim4']);
                        } else {
                        } 
                        ?>
                    </h2>
                </center>
            </div>
            <div id="6" class="conteudo" hidden>
                <center>
                    <h1>Irmão e Irmã</h1>
                    <div class="ui grid center aligned">
                        <form class="ui form" id="calculadora" method="post">
                            <div class="field">
                                <input type="number" name="filho" placeholder="Qualquer número" required>
                            </div>
                            <input class="ui green button" name="filho-submit" type="submit">
                        </form>
                        <br>

                    </div>
                    <h2>
                        <?php if (isset($_POST['filho-submit'])) {
                                $programa->showBrothers($_POST['filho']);
                            } ?>
                    </h2>
                </center>
            </div>
            <div id="8" class="conteudo" hidden>
                <center>
                    <h1>Faz quadradinho de <?php if (isset($_POST['num-quadrado'])){echo $_POST['numquadrado'];} else { echo("{seu numero aqui}"); } ?></h1>
                    <div class="ui grid center aligned">
                        <form class="ui form" id="calculadora" method="post">
                            <div class="field">
                                <input type="number" name="numquadrado" placeholder="Qualquer número" required>
                            </div>
                            <input class="ui green button" name="num-quadrado" type="submit">
                        </form>
                        <br>

                    </div>
                    <h2>
                        <?php if (isset($_POST['num-quadrado'])) {
                                $programa->showQuadradinho($_POST['numquadrado']);
                            } ?>
                    </h2>
                </center>
            </div>
        </div>

        <script src="assets/jquery-3.2.1.js"></script>
        <script src="assets/pages.js"></script>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="pages.js"></script>
        <?php
            $programa->showPage();
        ?>
    </body>

    </html>