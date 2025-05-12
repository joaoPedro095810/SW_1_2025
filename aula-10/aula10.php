<?php
    include_once 'conta.class.php';

    $conta1 = new Conta();

    $conta1 ->Nome = "Joãozin Pedrin";
    $conta1 ->Cpf = "000.000.000-00";
    $conta1 ->Saldo = 34;
    $conta1 ->MostrarSaldo();

    echo $conta1->Depositar(540);

    $conta1 ->MostrarSaldo();

    echo $conta1->Sacar(500)

    




?>