<?php
class Carro
{

  public $nome = null;
  public $cor = null;
  public $montadora = null;
  public $potencia = null;

  public function exibirAtributos()
  {
    return


      "Modelo: $this->montadora <br>
       Potência: $this->potencia <br>";
  }
  public function alteraAtributos($montadora, $potencia)
  {

    $this->montadora = $montadora;
    $this->potencia = $potencia;
  }


  function setNome($nome)
  {
    $this->nome = $nome;
  }

  function getNome()
  {
    return $this->nome;
  }


  function setCor($cor)
  {
    $this->cor = $cor;
  }

  function getCor()
  {
    return $this->cor;
  }

  function __set($atributo, $valor)
  {
    $this->$atributo = $valor;
  }

  function __get($atributo)
  {
    return $this->$atributo;
  }
}

$Mobi = new Carro;
$Mobi->setNome("Mobi");
$Mobi->setCor("Branco");
$Mobi->alteraAtributos('Fiat', '80cv');

echo "Nome: " . $Mobi->getNome() . "<br>";
echo "Cor: " . $Mobi->getCor() . "<br>";
echo $Mobi->exibirAtributos() . "<hr>";



$Gol = new Carro;
$Gol -> __set("nome","Gol");
$Gol -> __set("cor","Vermelho");
$Gol -> __set("montadora","volkswagen");
$Gol -> __set("potencia","95cv");

echo "Nome: " . $Gol-> __get("nome") . "<br>";
echo "Cor: " . $Gol-> __get("cor") . "<br>";
echo "Montadora: " . $Gol-> __get("montadora") . "<br>";
echo "Potencia: " . $Gol-> __get("potencia") . "<hr>";

$Palio = new Carro;
$Palio -> __set("nome","Palio");
$Palio -> __set("cor","Azul");
$Palio -> alteraAtributos("Fiat","90cv");

echo "Nome: " . $Palio-> __get("nome") . "<br>";
echo "Cor: " . $Palio-> __get("cor") . "<br>";
echo $Palio ->exibirAtributos();


