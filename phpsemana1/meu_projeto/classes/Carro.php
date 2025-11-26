<?php 

class Carro{
    public $marca;
    public $velocidade;
    public $valor;

    public function __construct($marca, $velocidade, $valor)
    {
        $this->marca = $marca;
        $this->velocidade = $velocidade;
        $this->valor = $valor;
    }

    public function mostrarInfo(){
        return "Marca: $this->marca | Velocidade: $this->velocidade km/h | Valor: R$ $this->valor";
    }
}


?>