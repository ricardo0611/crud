<?php include_once("conexao.php");

/*-------CONTANDO USUÁRIOS --------- */
$quant_usuarios = "SELECT COUNT(id) as qtd_usuario FROM usuarios";
$retorno_usuarios = mysqli_query($conn, $quant_usuarios);
$resultado = mysqli_fetch_assoc($retorno_usuarios);

/*--------LISTANDO USUÁRIOS---------*/

$result_usuarios = "SELECT * FROM usuarios";
$tabela = mysqli_query($conn, $result_usuarios);


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

<?php echo "<h3> Listagem de Usuários" . "</h3>"."<hr>"; ?>

 <table class="table">
 	<button type="submit" class="btn btn-outline-primary right"><a href="formulario.php">Cadastrar</a></button>
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col" colspan="2">Ações</th>
        </tr>
    </thead>
	<tbody>

	<?php
	while ($row_users = mysqli_fetch_assoc($tabela)) {
		echo '<tr>';
		echo '<td>'. $row_users['id'] .'</td>';
	    echo '<td>'. $row_users['nome_completo'] .'</td>';
	    echo '<td>'. $row_users['email'] .'</td>';
	    echo '<td>'. "<a href='editar.php?id=".$row_users['id']." '> Editar </a>".'</td>';
	    echo '<td>'. "<a href='excluir.php?id=".$row_users['id']." '> Excluir </a>".'</td>';
	    echo '</tr>';  
	}
	?>
	</tbody>
</table>
</div>
</body>