<?php 
class Carro {

    public $marca;
    public $velocidade;
    public $valor;

    /*public function getMarca (){
        return "Esse carro é da marca: " . $this->marca;
    }
    public function getVelocidade (){
        return "Esse carro anda a uma velocidade de: " . $this->velocidade;
    }
    public function getValor (){
        return "Esse carro custa: " . $this->valor;
    }   */ 
     public function __construct($marca, $velocidade, $valor) {
        $this->marca = $marca;
        $this->velocidade = $velocidade;
        $this->valor = $valor;
    }

    
        
}
   $carro1 = new Carro("Ferrari", 320, 2500000);
$carro2 = new Carro("Gol", 160, 45000);
$carro3 = new Carro("BMW", 280, 550000);

$carros = [$carro1, $carro2, $carro3];

    foreach ($carros as $carro) {
    echo "Marca: " . $carro->marca . "<br>";
    echo "Velocidade: " . $carro->velocidade . " km/h<br>";
    echo "Valor: R$ " . $carro->valor . "<br><br>";
}

?>