<?php
 class Carros{

   public $nome;
   public $cor;
   public $montadora;
   public $potencia;

   public function exibirAtributos(){
    return 
   "Nome: $this->nome <br>
    Cor: $this->cor <br>
    Modelo: $this->montadora <br>
    Potência: $this->potencia <br>";
   }

   public function alteraAtributos($nome, $cor, $montadora, $potencia){
    $this ->nome = $nome;
    $this ->cor = $cor;
    $this ->montadora = $montadora;
    $this ->potencia = $potencia;
   }
    

 }

$Mobi = new Carros;
$Gol = new Carros;
$Onix = new Carros;


$Mobi -> alteraAtributos('Mobi', 'Branco', 'Fiat', '80cv');
$Gol -> alteraAtributos('Gol', 'Vermelho', 'volkswagen','85cv');
$Onix -> alteraAtributos('Onix','Cinza','Chevrolet','110cv');

echo $Mobi -> exibirAtributos() . "<br>";
echo $Gol -> exibirAtributos() . "<br>";
echo $Onix -> exibirAtributos() . "<br>";


?>