<?php
DEFINE("SERVIDOR","mysql:host=localhost;dbname=teste;charset=utf8");
DEFINE("USUARIO","root");
DEFINE("SENHA","");

class fabricaConexao{
private $conn;

public function __construct()
{
    try{
        $this->conn = new PDO(SERVIDOR,USUARIO,SENHA);
        echo "Conectado com Sucesso";
    }
    catch (PDOException $err){
        echo "Houve um Erro: ".$err->getMessage(); 
    }

    }

}
?>