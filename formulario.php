<?php
include_once('conexao.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
    <form method="POST" action="dados.php">
        
        <div class="container">
        <h2>Cadastro de Usuários</h2>
            <?php
                if(isset($_SESSION['msg']))
                {
                    echo "<p>" .$_SESSION['msg'] ."</p>";
                    unset($_SESSION['msg']);
                }
            ?>
            <div class="form-group">
                <input class="form-control" type="hidden" name="id">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="nome_completo" placeholder="Nome Completo">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="email" placeholder="Email">
            </div>

            <div class="form-group">
                <input class="form-control" type="telefone" name="telefone" placeholder="Telefone">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="cidade" placeholder="Cidade">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1" name="sigla">Estado</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="1">GO</option>
                  <option value="2">MA</option>
                  <option value="3">RJ</option>
                  <option value="4">SP</option>
                  <option value="5">RS</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Confirmar Cadastro">
    </form>
</div>
</body>
</html>