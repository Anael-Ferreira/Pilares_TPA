<?php
class Carro extends Veiculo{

public $_m;
private $_tipoCombutivel;
private $_motor;

    public function tipoCombustivel(): void
    {
        echo "Gasolina";
    }
    public function potenciaMotor(): void
    {
        echo "3.5";
    }

    public function painelDigital(): void
    {
        echo null;
    }
}
