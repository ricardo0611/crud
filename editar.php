<?php
    $conn = new mysqli("127.0.0.1", "root", "", "testebulla");
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $resultado = "SELECT * FROM usuarios WHERE id = '$id' LIMIT 1";
    $resultado_user = mysqli_query($conn, $resultado);
    $row_user = mysqli_fetch_assoc($resultado_user);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar dados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <script src="main.js"></script>
</head>
<body>

<form method="POST" action="http://localhost/CRUD_PHP/editar_dados.php">
        
        <div class="container">
        <h2>Editar Usuários</h2>
        
            <?php
                if(isset($_SESSION['msg']))
                {
                    echo "<p>" .$_SESSION['msg'] ."</p>";
                    unset($_SESSION['msg']);
                }
            ?>

            <div class="form-group">
                <input class="form-control" type="text" name="nome_completo" value="<?php echo $row_user['nome_completo'];?>" placeholder="Nome">
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" value="<?php echo $row_user['email'];?>" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="tel" name="telefone" value="<?php echo $row_user['telefone'];?>" placeholder="Telefone">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1" name="sigla">Estado</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="1">GO</option>
                  <option value="2">MA</option>
                  <option value="3">RJ</option>
                  <option value="4">SP</option>
                  <option value="5">RS</option>
                </select>
            </div>
            <div class="form-group">
                <input class="form-control" type="hidden" name="id" value="<?php echo $row_user['id'];?>">
            </div>
            <input type="submit" class="btn btn-primary" name="btn-editar" value="Editar">
        </div>
    </form>
    
</body>
</html>