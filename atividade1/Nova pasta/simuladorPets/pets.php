<?php
 class Pet{
    private $nome;
    protected $nivelFome = 0;
    protected $nivelFelicidade = 0;

    public function __construct ($nome){
        $this->nome = $nome;
    }

 public function interagir(){
 }

 public function alimentar(){
 }

 public function status(){
        echo "<br>" . str_repeat("-", 30) . "<br>";
        echo "Nome: $this->nome<br>";
        echo "nivelFome: $this->nivelFome<br>";
        echo "nivelFelicidade: $this->nivelFelicidade<br>";
        echo str_repeat("-", 30) . "<br>";
    }
 }

 class petBrincalhao extends Pet{
     public function interagir(){
        $this->nivelFelicidade += 20;
     }
     public function alimentar(){ 
        $this->nivelFome += 10;       
    }    
}

class petPreguicoso extends Pet{
     public function interagir(){
        $this->nivelFelicidade +=5;
     }
     public function alimentar(){
        $this->nivelFome -=30;
     }
}

class petImpusivo extends Pet{
     public function interagir(){
        $this->nivelFelicidade = rand(-50,50);
     }
     public function alimentar(){
        $this->nivelFome = rand(-50,50);
     }

}
 
 
$tipo = 3;


if($tipo==1){ 
    $p = new petBrincalhao('Dudinha');
}
elseif($tipo==2){
    $p = new petPreguicoso('Dudinha');
}
else{
    $p = new petImpusivo('Dudinha');
}

$p->alimentar();
$p->interagir();
$p->status(); 

?>
