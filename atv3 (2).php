<?php 

 class Item { 
    public $nome;
    public $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->vida = $preco;
 }

    public function getNome () {
        return $this->nome;
    }

    public function getPreco () {
        return $this->preco;
    }

    

class ItemCura  extends Item {
    private int $quantidadeCura;

    public function __construct($nome,$preco,$quantidadeCura){
        parent::__construct($nome, $preco);
        $this->$quantidadeCura = $quantidadeCura;
    }
}
    public function usar(){
        echo "Usando {$this->nome}: ganhou {$this->quantidadeCura} pontos de vida.\n";

    }
    
class ItemDano extends Item {
    private int $dano;

    public function __construct($nome,$preco,$dano){
        parent::__construct($nome,$preco);
        $this->dano = $dano;
    }
}
    public function usar(): { 
        echo "usando {$this->nome} causou {$this->dano} pontos de dano. \n";
    }

class ItemBuff extends Item {
    private string $tipoBuff; 
    private int $valor;

    public function __construct($nome,$preco,$tipoBuff,$valor){
        parent::__construct($nome,$preco);
        $this->$tipoBuff = $tipoBuff;
        $this->valor = $valor;
    }
}
    public function usar(): {
        echo "usando {$this->nome}: aumentou {$this->tipoBuff} em {$this->valor} pontos. \n"
    }  

$itens = [
    new ItemCura("Poção de Vida", 50.0, 30),
    new ItemDano("Bola de Fogo", 70.0, 45),
    new ItemBuff("Anel de Força", 100.0, "força", 10),
];

foreach ($itens as $item) {
    $item->usar();   
}
 }
?>