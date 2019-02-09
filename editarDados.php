<?php


include 'conexao.php';

$id = $_POST['id'];
$nome_completo = $_POST['nome_completo'];
$email = $_POST['email'];
$sigla = $_POST['sigla'];

if (empty($id)) {
	header("Location: editar.php");
}
else
{
	$sql = "UPDATE usuarios SET nome_completo='$nome_completo', email='$email' WHERE id=$id";

	try{
		$atualizar = $conexao->prepare($sql);
		$atualizar->execute();
		echo "Atualização realizada com sucesso <br />";
	}catch(Exception $e){
		echo "Ocorreu um erro ao atualizar" .$e->getMessage();
	}

}
