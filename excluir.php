<?php

	session_start();
	include_once('conexao.php');

	$id = mysqli_escape_string($conn, $_POST['id']);

	$sql = "DELETE FROM usuarios WHERE id = '$id";
	$resultado_usuario = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($sql))
	{
		$_SESSION['msg'] = "<span style='color: green;'> Usuário excluido </span>";
		header("Location: listar.php");
	} else
	{
		$_SESSION['msg'] = "<span style='color: red;'> Usuário não foi excluido </span>";
		header("Location: editar.php");
	}
