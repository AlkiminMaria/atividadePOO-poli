<?php

 class veiculo {
    private $modelo;
    private $velocidadeMaxima;

    public function__construct ($modelo, $velocidadeMaxima){
         $this->modelo = 'dasdasdasdsd';
         $this->velocidadeMaxima = $velocidadeMaxima;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
 
    public function mover(){
    }

    public function mostrarInfo(){
    }

    public function getModelo(){
        echo $this->velocidadeMaxima;
    }
    public function getVelocidadeMaxima(){
        return $this->velocidadeMaxima;
    }
}

$v1 = new veiculo();
$v1->setModelo('Teste');
$v1->getModelo('Teste');




/*
exit();

 class patinete extends veiculo {
    public function mover(){
    echo "O patinete acelera com sensores inteligentes";
    }
}

 class drone extends veiculo {
    public function mover(){
    echo "O drone voa a $this->velocidadeMaxima km/h";
    }
} 

 class carro extends veiculo {
    public function mover(){
    echo "O carro se move a $this->velocidaMaxima km/h";"
    }
 }

 public function mostrarInfo($...){
    ECHO "modelo: $this-->modelo<br>";
    echo "velocidadeMaxima: $this-->velocidadeMaxima<br>";
 }
*/
?>



