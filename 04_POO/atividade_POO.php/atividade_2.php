<?php 
class Carro { 
    private $modelo; 
    private $velocidade; 

    public function __construct($modelo, $velocidade = 0) { 
        $this->modelo = $modelo; 
        $this->velocidade = $velocidade; 
    } 

    public function acelerar($velocidade) { 
        $this->velocidade = $this->velocidade + $velocidade; 
        echo "O carro acelerou. <br>"; 
        echo "Velocidade atual: " . $this->velocidade . " km/h<br>"; 
    } 

    public function frear($velocidade) { 
        $this->velocidade = $this->velocidade - $velocidade; 
        if ($this->velocidade < 0) { 
            $this->velocidade = 0; 
        } 
        echo "O carro freou. <br>"; 
        echo "Velocidade atual: " . $this->velocidade . " km/h<br>"; 
    } 

    public function aumentar() { 
        $this->acelerar(10); 
    } 
    public function diminuir() { 
        $this->frear(10); 
    } 

    public function verVelocidade() { 
        echo "O modelo " . $this->modelo . " está a " . $this->velocidade . " km/h.<br>";
    } 
} 


$meuCarro = new Carro("jetta", 0);
$meuCarro->verVelocidade();
$meuCarro->acelerar(10);
$meuCarro->aumentar();
$meuCarro->diminuir();
$meuCarro->frear(10);
?>
