<?php
include_once "Veiculo.php";
include_once "classes/Carro.php";
include_once "classes/Moto.php";
include_once "classes/Onibus.php";
include_once "classes/Caminhao.php";

$car = new Carro();
$mot = new Moto();
$oni = new Onibus();
$cam = new Caminhao();

$car->setId('1');
$car->setMarca('Chevrolet');
$car->setModelo('Camaro');
$car->setCor('Amarelo');
$car->setAno('2016');
$car->setValor('R$20.000,00');

$mot->setId('2');
$mot->setMarca('Honda');
$mot->setModelo('PCX');
$mot->setCor('Cinza');
$mot->setAno('2015');
$mot->setValor('R$40.000,00');

$oni->setId('3');
$oni->setMarca('Mercedes-Benz');
$oni->setModelo('sprinter');
$oni->setCor('Cinza');
$oni->setAno('2020');
$oni->setValor('R$250.000,00');

$cam->setId('4');
$cam->setMarca('Mercedes-Benz');
$cam->setModelo('Actros');
$cam->setCor('Azul');
$cam->setAno('2018');
$cam->setValor('R$300.000,00');

?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Aula PHP - Orientado a Objetos</title>
</head>

<body>
  <main>
    <div class="container-md">
      <div class="row ">
        <div class="col">
          <h5>Card BootStrap</h5>
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Aula3_PHPOO</h5>
              <ol class="card-text">
                <li> Foi criada a classe Principal.php
                <li> Nesta classe instanciamos os objetos de todas as classes que criamos : <strong> Veiculo,carro,moto,onibus,caminhao</strong>
                <li> Em seguida inserimos os dados com o metodo de acesso <strong>set</strong>
                <li> Em seguida utilizamos uma tabela<strong>(BootStrap)</strong> para inserir os dados nas linhas com o metodo <strong>get</strong>
                <li> Para cada linha da tabela foi inserido os dados de um objeto diferente.
              </ol>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Number</th>
                    <th scope="col">Id_Veiculo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Tipo Combustivel</th>
                    <th scope="col">Potencia Motor</th>
                    <th scope="col">Painel Digital</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><?php echo $car->getId() ?></td>
                    <td><?php echo $car->getMarca() ?></td>
                    <td><?php echo $car->getModelo() ?></td>
                    <td><?php echo $car->getCor() ?></td>
                    <td><?php echo $car->getAno() ?></td>
                    <td><?php echo $car->getValor() ?></td>
                    <td><?php echo $car->tipoCombustivel() ?></td>
                    <td><?php echo $car->potenciaMotor() ?></td>
                    <td><?php echo $car->painelDigital() ?></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td><?php echo $mot->getId() ?></td>
                    <td><?php echo $mot->getMarca() ?></td>
                    <td><?php echo $mot->getModelo() ?></td>
                    <td><?php echo $mot->getCor() ?></td>
                    <td><?php echo $mot->getAno() ?></td>
                    <td><?php echo $mot->getValor() ?></td>
                    <td><?php echo $mot->tipoCombustivel() ?></td>
                    <td><?php echo $mot->potenciaMotor() ?></td>
                    <td><?php echo $mot->painelDigital() ?></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td><?php echo $oni->getId() ?></td>
                    <td><?php echo $oni->getMarca() ?></td>
                    <td><?php echo $oni->getModelo() ?></td>
                    <td><?php echo $oni->getCor() ?></td>
                    <td><?php echo $oni->getAno() ?></td>
                    <td><?php echo $oni->getValor() ?></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td><?php echo $cam->getId() ?></td>
                    <td><?php echo $cam->getMarca() ?></td>
                    <td><?php echo $cam->getModelo() ?></td>
                    <td><?php echo $cam->getCor() ?></td>
                    <td><?php echo $cam->getAno() ?></td>
                    <td><?php echo $cam->getValor() ?></td>
                    <td><?php echo $cam->tipoCombustivel() ?></td>
                    <td><?php echo $cam->potenciaMotor() ?></td>
                    <td><?php echo $cam->painelDigital() ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer"><a class="btn btn-primary" href="index.php" role="button">Voltar</a></div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>