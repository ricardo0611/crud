<?php include_once ('conexao.php');


    /**Dados passado do fomulário */
    $id = $_POST['id'];
    $nome_completo = $_POST['nome_completo'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $sigla = $_POST['sigla'];
    $telefone = $_POST['telefone'];

    mysqli_autocommit($conn, false);
    mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);

    try{
        
        $conn->begin_transaction();

        $sql = "INSERT INTO estados(nome_estado, sigla) VALUES ('$estado','$sigla')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('is', $loginUltimoRegistro, $_POST['inputPriGrupo']);
        $stmt->execute();
        $ultimoGrupo = $mysqli->insert_id;

        $sql = "INSERT INTO usuarios(nome_completo, email, id_estado)  VALUES('$nome_completo' , '$email', '$ultimoGrupo')";
        $stmt = $conn->prepare($sql);
        $nome = "Doge";
        $stmt->bind_param('iis', $loginUltimoRegistro, $_POST['inputPriGrupo'], $nome);
        $stmt->execute();
        $ultimoUnidade = $mypresqli->insert_id;

        $sql = "INSERT INTO telefone(numero, id_usuario) VALUES('$telefone', '$ultimoUnidade')";

        $mysqli->commit();

    }catch(mysqli_sql_exception $e)
    {
        echo 'erro ao inserir, código: '. $e->getCode() .' mensagem: '. $e->getMessage();
        $conn->rollback();
    }

    $insercao_users = mysqli_query($conn, $sql);

    if(mysqli_insert_id($conn))
    {
        $_SESSION['msg'] = "<span style='color: green;'>Usuário cadastrado com sucesso! </span>";
        header("Location: listar.php");
    }else{
        $_SESSION['msg'] = "<span style='color: red;'>Usuário cadastrado com sucesso! </span>";
        header("Locarion: dados.php");
    }

?>




