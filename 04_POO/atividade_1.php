<?php
class Celular {
    public $marca;
    public $modelo;
    public $cor;
    public $bateria;
    public $ligado;

    function ligar() {
        $this->ligado = true;
        echo "O celular está ligado!<br>";
    }

    function desligar() {
      $this->ligado = false;
        echo "O celular está desligado!<br>";
    }

    function Bateria($consumir) {
        $this->bateria = $this->bateria - $consumir;
        if ($this->bateria < 0) {
            $this->bateria = 0;
        }
        echo "A bateria consumida foi de: $consumir. ";
        echo "Sobrando um total de: $this->bateria.<br>";
    }

    function carregar($carga) {
        $this->bateria = $this->bateria + $carga;
        if ($this->bateria > 100) {
            $this->bateria = 100;
        }
        echo "O celular foi carregado com: $carga. Bateria atual: $this->bateria.<br>";
    }
}

$celular1 = new Celular();
$celular1->marca = "Iphone";
$celular1->modelo = "18";
$celular1->cor = "Azul";
$celular1->bateria = 100;
$celular1->ligado = true;

echo "Marca: " . $celular1->marca . "<br>";
echo "Modelo:" . $celular1->modelo . "<br>";
echo "Cor:" . $celular1->cor . "<br>";
echo "Bateria:" . $celular1->bateria . "<br>"; 
echo "Ligado:" . $celular1->ligado . "<br>";

$celular2 = new Celular();
$celular2->marca = "Motorola";
$celular2->modelo = "Moto G Max";
$celular2->cor = "Preto";
$celular2->bateria = 100;
$celular2->ligado = false;

$celular1->ligar();
$celular1->desligar();
$celular1->Bateria(10);
$celular1->carregar(10); 

echo "Marca: " . $celular2->marca . "<br>";
echo "Modelo:" . $celular2->modelo . "<br>";
echo "Cor:" . $celular2->cor . "<br>";
echo "Bateria:" . $celular2->bateria . "<br>"; 
echo "Ligado:" . $celular2->ligado . "<br>";

$celular2->ligar();
$celular2->desligar();
$celular2->Bateria(80);
$celular2->carregar(50);
?>


