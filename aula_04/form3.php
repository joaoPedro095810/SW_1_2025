<?php

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($login === "etec" and $senha === "informática") {
        echo "<h1>Logado com sucesso!</h1>";
    } else {
        echo "<h1>Login ou senha incorretos!</h1>";
    }

    ?>