<?php

 
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
    <div class="container">
      <form name="cadastra" method="POST" action="cadastra.php">
        
            <h2>Cadastro de Usuários</h2>

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
                <label for="exampleFormControlSelect1" name="id_estado">Estado</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="1">GO</option>
                  <option value="2">MA</option>
                  <option value="3">RJ</option>
                  <option value="4">SP</option>
                  <option value="5">RS</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1" name="cidade">Cidade</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="1">Goiania</option>
                  <option value="2">Imperatriz</option>
                  <option value="3">Rio de Janeiro</option>
                  <option value="4">Sao Paulo</option>
                  <option value="5">Porto Alegre</option>
                </select>
            </div>
            
            <input type="submit" class="btn btn-primary" name="cadastrar" value="cadastrar">
            <a href="listar.php">LISTA DE CLIENTES</a>
      </form>
    </div>
</body>
</html>