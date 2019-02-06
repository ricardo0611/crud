<?php

	session_start();

	include_once("conexao.php");
	
	$id = mysqli_escape_string($conn, $_POST['id']);
	$nome_completo = mysqli_escape_string($conn, $_POST['nome_completo']);
	$email = mysqli_escape_string($conn, $_POST['email']);
	$telefone = mysqli_escape_string($conn, $_POST['telefone']);
	$sigla = mysqli_escape_string($conn, $_POST['sigla']);

	$sql = "UPDATE usuarios SET nome_completo = '{$nome_completo}', email = '{$email}', id_estado = '{$sigla}'  WHERE id = '{$id}'";
	
	$resultado = mysqli_query($conn, $sql);

	if (mysqli_query($conn, $sql)) :
	    $_SESSION['msg'] = "<span style='color: green;'>Usuário editado com sucesso! </span>";
	        header("Location: http://localhost/CRUD_PHP/listar.php");
	else:
	    $_SESSION['msg'] = "<span style='color: green;'>Usuário não foi editado! </span>";
	    header("Location: http://localhost/CRUD_PHP/editar_dados.php");
	endif;







