<?php
    session_start();
    include_once 'conexao.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $consulta = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $email);
    $stmt->bindParam(':preco', $senha);

    $resultado = $stmt->execute();
    $num_registros = $stmt->rowCount();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($resultado);

    if($num_registros == 0){
        //echo "VOCÊ NÃO TEM PERMISSÃO";
        header('Location: index.php');
    }else{
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['nome'] = $resultado['id'];
        $_SESSION['email'] = $resultado['email'];
        header['Location: restrita.php'];


        //echo "ACESSO PERMITIDO PARA A RESTRITA.PHP";
    }
    
?>