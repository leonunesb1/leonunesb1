<?php

include_once('config.php');


if (isset($_POST['submit'])) {

    $nome = $_POST['nome'];
    $cidade =$_POST['cidade'];
    $data = $_POST['data'];
    $setor = $_POST['setor'];
    $informacoes = $_POST['informacoes'];

    $data = date("Y-m-d",strtotime(str_replace('/','-',$data)));

    $sql="INSERT INTO funcionarios(nome,cidade,data,informacoes,setor) VALUES ('".$nome."','".$cidade."','".$data."','".$informacoes."','".$setor."')";
    $result = mysqli_query($conexao, $sql);

    // print_r($result);
    // exit;
}


$sql = "SELECT * FROM funcionarios";
$result = mysqli_query($conexao, $sql);
$funcionarios = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>


<!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="formulario.css" media="screen">

        <title>Cadastro</title>
    </head>

    <body background="usina.jpg">

        <div>
            <h1 id="titulo">Cadastro de Funcionarios</h1>
            <br>
        </div>

        <form action="index.php" method="POST">

            <fieldset class="grupo">
                <div class="campo">
                    <label for="nome"><strong>Nome</strong></label>
                    <input type="text" name="nome" id="nome" required>
                </div>

                <div class="campo">
                    <label for="sobrenome"><strong>Cidade</strong></label>
                    <input type="text" name="cidade" id="cidade" required>
                </div>

                <div class="campo">
                    <label for="diaa"><strong>Data de nascimento:</strong></label>
                    <input id="date" name="data" type="date"> 
                </div>
            </fieldset> 

            <div class="campo">
                <label><strong>Selecione o Setor:</strong></label>
                <label>
                    <input type="radio" name="setor" value="agricola" checked>Agrícola
                </label>
                <label>
                    <input type="radio" name="setor" value="adm">Administrativo
                </label>
                <label>
                    <input type="radio" name="setor" value="campo">Campo
                </label>
            </div>

            <div class="campo">
                <br>
                <label for="informacoes"><strong>Informações Adicionais: </strong></label>
                <textarea rows="6" style="width: 26em" id="informacoes" name="informacoes"></textarea>
            </div>

            <input type="submit" name="submit" id="submit"></input>            


            <div>
                <h1 id="titulo2">Funcionarios Cadastrados</h1>
                <br>
            </div>



            <table class="tabela">
              <tr>
                <th>Nome</th>
                <th>Data de nascimento</th>
                <th>Cidade</th>
                <th>Setor</th>
            </tr>
            
            <?php
            foreach ($funcionarios as $funcionario)
            {

                ?>

                <tr> 
                    <td><?=$funcionario["nome"];?></td>
                    <td><?=$funcionario["data"];?></td>
                    <td><?=$funcionario["cidade"]?></td>
                    <td><?=$funcionario["setor"]?></td> 
                </tr>

                <?php
            }

            ?>


        </table>

    </body>
    </form>
    </html>

