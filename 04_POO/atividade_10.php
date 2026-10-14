<?php 
class Carro { 
    private $modelo; 
    private $consumo; 
    private $tanque; 

    public function __construct($modelo, $consumo = 10, $tanqueInicial = 0) { 
        $this->modelo = $modelo; 
        $this->consumo = $consumo; 
        $this->tanque = $tanqueInicial; 
    } 

    public function abastecer($litros) { 
        if ($litros > 0) { 
            $this->tanque += $litros; 
            echo "Sucesso: Foram adicionados {$litros} litros ao tanque. <br>"; 
        } else { 
            echo "Erro: A quantidade de litros para abastecer deve ser maior que zero. <br>"; 
        } 
    } 

    public function dirigir($km) { 
        if ($km <= 0) { 
            echo "Erro: A distância a ser percorrida deve ser maior que zero.<br>"; 
            return; 
        } 
        
        $combustivelNecessario = $km / $this->consumo; 
        
        if ($this->tanque >= $combustivelNecessario) { 
            $this->tanque -= $combustivelNecessario; 
            echo "Viagem realizada: Você dirigiu {$km} km e consumiu ($combustivelNecessario) litros.<br>"; 
        } else { 
            echo "Impossível viajar: Combustível insuficiente no tanque para percorrer {$km} km.\n"; 
        } 
    } 

    public function exibirInfo() { 
        echo "Modelo: $this->modelo <br>"; 
        echo "Consumo: $this->consumo km/L <br>"; 
        echo "Tanque Atual: $this->tanque litros <br>"; 
    } 
} 

$meuCarro = new Carro("Civic", 12, 20); 
$meuCarro->exibirInfo(); 
$meuCarro->dirigir(50); 
$meuCarro->abastecer(20);
