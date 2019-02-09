<?php

include 'conexao.php';

$id = $_POST['id'];

if(empty($id))
{
	header("Location: ../listar.php");
}

else
{
	$sql1 = "DELETE FROM telefone WHERE id_usuario = $id";
	$sql2 = "DELETE FROM usuarios WHERE id = $id";

	try{
		$consulta = $conexao->prepare($sql1);
		$consulta->execute();
		echo "Usuário excluido com sucesso!";

		$consulta = $conexao->prepare($sql2);
		$consulta->execute();

	}catch(Exception $e){
		echo "Ocorreu um erro ao excluir" .$e->getMessage();
	}
}