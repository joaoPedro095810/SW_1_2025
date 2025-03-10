<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data_nascimento = $_POST['data_nascimento'];
    $bandeira_cartao = $_POST['bandeira_cartao'];

    echo "<h3>Dados Informados:</h3>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Data de Nascimento:</strong> $data_nascimento</p>";
    echo "<p><strong>Bandeira do Cartão de Crédito:</strong> $bandeira_cartao</p>";
?>