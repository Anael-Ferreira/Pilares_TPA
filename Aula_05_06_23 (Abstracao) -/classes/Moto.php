<?php
class Moto extends Veiculo{

    private $_tipoCombutivel;
    private $_motor;
    
        public function tipoCombustivel(): void
        {
            echo "Gasolina";
        }
        public function potenciaMotor(): void
        {
            echo "160 cilindradas";
        }
    
        public function painelDigital(): void
        {
            echo "painel Led";
        }


}
?>