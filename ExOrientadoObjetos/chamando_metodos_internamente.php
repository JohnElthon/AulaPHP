<?php

class Times
{

    public $nome;
    public $titulos;

    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    function __get($atributo) {
        return $this->$atributo;
    }
    
    function escrever(){
        return "{$this->__get('nome')} possui {$this->__get('titulos')} títulos mundiais! <br><hr>";
    }
}

$Palmeiras = new Times;
$Santos = new Times;
$saoPaulo = new Times;

$Palmeiras-> __set("nome","Palmeiras");
$Palmeiras-> __set("titulos","1");

$Santos-> __set("nome","Santos");
$Santos-> __set("titulos","2");

$saoPaulo-> __set("nome","São Paulo");
$saoPaulo-> __set("titulos","3");

$Palmeiras -> escrever(); 
$Santos -> escrever(); 
$saoPaulo -> escrever();

?>



