<?php
    class Lampada{
        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $Status;

        public function ligar(){

        }
        public function Desligar(){

        }
        public function MostrarDados(){
            echo "Fabricante:" . $this->Fabricante . "<br>";
            echo "Tensão:" . $this->Tensao . "<br>";
            echo "Potencia:" . $this->Potencia . "<br>";
            echo "Cor:" . $this->Cor . "<br>";
            echo "Está ligada?:" . $this->Status . "<br>";
            if ($this->Status == True){
                echo "Está ligada?: SIM <br>";
            }else{
                echo "Está ligada?: NÃO <br>";
            }
        }
    }

?>