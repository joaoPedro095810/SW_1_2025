<?php
    class Conta{
        public $Nome;
        public $Cpf;
        public $Saldo;

        public function Sacar($valor) {
            if($this->Saldo < $valor){
                return "Saldo insuficiente. <br>  <hr>";
            }else{
                $this->Saldo = $this->Saldo - $valor;
                $texto_saque = "Saque Realizado. Saldo atual é de: R$" . $this->Saldo . "<br>" . "<hr>";
                return $texto_saque;
            }
            $this->Saldo = $this->Saldo - $valor;
            return $this -> Saldo;
        }

        public function Depositar($valor) {
            $this -> Saldo += $valor;
            $texto_deposito = "Depósito realizado. Saldo atual é de: R$" . $this->Saldo . "<br>" . "<hr>";
            return $texto_deposito;
        }
    
        public function MostrarSaldo() : void {
            echo "Nome do cliente: " . $this->Nome . "<br>";
            echo "Seu CPF é " . $this->Cpf . "<br>";
            echo "O seu saldo atual é : R$" . $this->Saldo . "<br>";
            echo"<hr>";    
        }
    }
?>