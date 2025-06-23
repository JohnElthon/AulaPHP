<?php
 class Carro{

   public $nome = null;
   public $cor = null;
   public $montadora = null;
   public $potencia = null;

   public function exibirAtributos(){
    return 
   
   
    "Modelo: $this->montadora <br>
    Potência: $this->potencia <br>";
   }
     public function alteraAtributos($montadora, $potencia){
  
    $this ->montadora = $montadora;
    $this ->potencia = $potencia;
   }


   function setNome($nome){
    $this ->nome = $nome;
   }
     function getNome(){
    return $this ->nome;
   }


    function setCor($cor){
    $this ->cor = $cor;
   }
 
    function getCor(){
    return $this ->cor;
   }
 }

 $Mobi = new Carro;
 $Mobi -> setNome("Mobi");
 $Mobi -> setCor("Branco");
 $Mobi -> alteraAtributos('Fiat', '80cv');
 
 echo "Nome: " . $Mobi -> getNome() . "<br>";
 echo "Cor: " . $Mobi -> getCor() . "<br>";
 echo $Mobi -> exibirAtributos() . "<br>"; 

 ?>