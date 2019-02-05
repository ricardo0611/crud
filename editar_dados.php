<?php

session_start();
$conn = new mysqli_connect("127.0.0.1", "root", "", "testebulla");

	$nome_completo = filter_input(INPUT_POST, 'nome_completo', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
	$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
	$sigla = filter_input(INPUT_POST, 'sigla', FILTER_SANITIZE_NUMBER_INT);

	$sql = "UPDATE usuarios SET nome_completo = '{$nome_completo}', email = '{$email}', id_estado = '{$sigla}'  WHERE id = '{$id}'";

	$resultado = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn)) {
	    $_SESSION['msg'] = "<span style='color: green;'>Usuário editado com sucesso! </span>";
	        header("Location: http://localhost/CRUD_PHP/listar.php");
	}else
	{
	    $_SESSION['msg'] = "<span style='color: green;'>Usuário não foi editado! </span>";
	    header("Location: http://localhost/CRUD_PHP/editar_dados.php");
	}


if(isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
}





