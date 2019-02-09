<?php

include 'conexao.php';

$id = $_POST['id'];

if(empty($id))
{
	header("Location: ../listar.php");
}

else
{
	$sql = "SELECT * FROM usuarios WHERE id = $id";

	try{
		$consulta = $conexao->prepare($sql);
		$consulta->execute();

	}catch(Exception $e){
		echo "Ocorreu um erro ao editar" .$e->getMessage();
	}

	while ($resultado = $consulta->fetch(PDO::FETCH_OBJ)) {
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD PHP - EDITAR DADOS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="main.js"></script>
</head>

<form method="POST" action="editarDados.php">
        
        <div class="container">
        <h2>Editar Usuários</h2>
            <div class="form-group">
                <input class="form-control" type="hidden" name="id" value="<?php echo $resultado->id;?>">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="nome_completo" value="<?php echo $resultado->nome_completo;?>" placeholder="Nome">
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" value="<?php echo $resultado->email;?>" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="tel" name="telefone" value="<?php echo $resultado->numero;?>" placeholder="Telefone">
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
            <input type="submit" class="btn btn-primary" name="editar" value="ATUALIZAR">
        </div>
</form>
<?php
	}
}

?>








