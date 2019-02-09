<?php 

	include_once("conexao.php");

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
		 	<button style="margin-bottom: 12px;" type="submit" class="btn btn-outline-primary right">
				<a style="font-size: 14px; outline-offset: none;" href="formulario.php">NOVO USUÁRIO</a>
			</button>
		    <thead class="thead-dark">
		        <tr>
		          <th scope="col">#</th>
		          <th scope="col">Nome</th>
		          <th scope="col">Email</th>
		          <th scope="col">Telefone</th>
		          <th scope="col"></th>
		          <th scope="col">Estado</th>
		          <th scope="col">Ações</th>
		        </tr>
		    </thead>
		    <?php
			    $sql = "
						SELECT U.id, U.nome_completo, U.email, T.numero, E.sigla, E.nome_estado
						FROM telefone as T
						INNER JOIN usuarios as U
						ON T.id_usuario = U.id
						INNER JOIN estados as E
						ON E.id = U.id_estado
						";
				try{
					
					$listar = $conexao->prepare($sql);
					$listar->execute();

				}catch(Exception $e)
				{
					echo "Não foi possível listar" .$e->getMessage();
				}
				while ($resultado = $listar->fetch(PDO::FETCH_OBJ)) {

				?>

				<tbody>
					<tr>
						<td><?php echo $resultado->id; ?></td>
						<td><?php echo $resultado->nome_completo; ?></td>
						<td><?php echo $resultado->email; ?></td>
						<td><?php echo $resultado->numero; ?></td>
						<td><?php echo $resultado->sigla; ?></td>
						<td><?php echo $resultado->nome_estado; ?></td>
						<td>
							<form method="POST" action="excluir.php" name="excluir">
								<input type="hidden" name="id" value="<?php echo $resultado->id; ?>" EXCLUIR />
								<input type="submit" value="excluir" name="">
							</form>&nbsp;
							<form method="POST" action="editar.php" name="editar">
								<input type="hidden" name="id" value="<?php echo $resultado->id; ?>" EDITAR />
								<input type="submit" value="editar" name="">
							<form>
						</td>

					</tr>
				</tbody>

				<?php } ?>
		</table>
	</div>
</body>
