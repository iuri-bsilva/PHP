<?php 
class Carro {

    public $marca;
    public $velocidade;
    public $valor;

    public function getMarca (){
        return "Esse carro é da marca: " . $this->marca;
    }
    public function getVelocidade (){
        return "Esse carro anda a uma velocidade de: " . $this->velocidade;
    }
    public function getValor (){
        return "Esse carro custa: " . $this->valor;
    }           
}
    $carro = new Carro();
    $carro->marca = "BMW <br>";
    $carro->velocidade = "240 <br>";
    $carro->valor = 200000;
    echo $carro->getMarca();
    echo $carro->getVelocidade();
    echo $carro->getValor();

?>