<?php
class Caminhao extends Veiculo{

    private $_tipoCombutivel;
    private $_motor;
    
        public function tipoCombustivel(): void
        {
            echo "Diesel";
        }
        public function potenciaMotor(): void
        {
            echo "60 Km/h";
        }
    
        public function painelDigital(): void
        {
            echo "De vidro";
        }

}
?>
