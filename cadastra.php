<?php

include 'conexao.php';


if(isset($_GET['cadastra']))
{
	$id = $_POST['id'];
	$nome_completo = $_POST['nome_completo'];
	$email = $_POST['email'];
	$id_estado = $_POST['id_estado'];

	try{
		$stmt = $conexao->prepare('INSERT INTO usuarios(nome_completo, email, id_estado) VALUES(:nome_completo, :email, :id_estado)');
		$nome_completo = $nome_completo;
		$email = $email;
		$id_estado = $id_estado;

		$stmt->bindValue(':nome_completo', $nome_completo);
		$stmt->bindValue(':email', $email);
		$stmt->bindValue(':id_estado', $id_estado);

		$stmt->execute();

		header('Location: ../usuario.php');
		exit;

	}catch(Exception $e)
	{
		echo "Não foi possível cadastrar" .$e->getMessage();
	}
}