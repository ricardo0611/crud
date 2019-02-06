<?php 
    session_start();
    
    include_once('conexao.php');


    if (isset($_POST['cadastrar'])):
        /**Dados passado do fomulário */
        $id = mysqli_escape_string($conn, $_POST['id']);
        $nome_completo = mysqli_escape_string($conn, $_POST['nome_completo']);
        $email = mysqli_escape_string($conn, $_POST['email']);
        $cidade = mysqli_escape_string($conn, $_POST['cidade']);
        $sigla = mysqli_escape_string($conn, $_POST['sigla']);
        $telefone = mysqli_escape_string($conn, $_POST['telefone']);

        $sql .= "INSERT INTO usuarios(nome_completo, email, id_estado) VALUES ('{$nome_completo}','{$email}', '{$sigla}')";


        if (mysqli_query($conn, $sql)):

            $_SESSION['msg'] = "Cadastrado com sucesso!";
            header('Location: ../listar.php?sucesso');
    
        else:
            $_SESSION['msg'] = "Não foi cadastrado!";
            header('Location: ../listar.php?erro');
        endif;
       
    endif;
?>




