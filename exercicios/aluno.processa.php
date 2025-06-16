<?php
    include_once 'Aluno.class.php';

    $aluno = new Aluno("João Pedros", 8, 8);
    echo $aluno->getNome() . " - Média: " . $aluno->getMedia() . " - Situação: " . $aluno->verificarSituacao();
    echo "<hr>";
?>