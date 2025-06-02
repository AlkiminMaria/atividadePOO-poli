<!DOCTYPE html>

<head> 
</head>
<body>

<?php
// 01.Sintaxe
print "Olá, mundo!<br>";

// 02.Comentário

// 03.Variaveis
$nome ="Duda";
 echo "Meu nome é: $nome<br>";
 
// 04.Echo e Print
echo "Espero conseguir entender melhor php!<br>";

// 05.Vardump
$dados = array(
"nome"=>"Duda",
"idade"=>"17",
"cidade"=>"Belo Horizonte",
);
var_dump($dados);
 echo "<br><br>";

// 06.Tipos de Dados - Inteiro
$a = 6;
 echo "a é igual a: $a<br>";

// 07.Tipos de Dados - Float
$b = 7.0;
 echo "b é igual a: $b<br>";

// 08.Tipos de Dados - String
$A ="amor";
 print "Familia é $A<br><br>";

// 09.Tipos de Dados - Booleano
$idade = 18;
$adulto = ($idade >= 17); // $adulto agora é um booleano (true ou false)
 echo"Minha idade é $idade anos<br>";

if ($adulto) {
    echo " Sou adulto(a).";
} else {
    echo "Você é menor de idade.<br><br>";
}

// 10.Tipos de Dados - Array
$cores = array(
"laranja" => "amarelo e vermelho",
"rosa" => "vermelho e branco",
"verde" => "azul e amarelo",
);
 print "<br>Esssa são algumas das combinações de cores:<br>";
var_dump($cores);

// 11.Tipos de Dados - Objeto
class Pessoa {
    public $nome;
    public $idade;
}
     $nome = "Maria Eduarda";
     print "Meu nome é: $nome e";

     $idade = "17";
     print "Tenho $idade anos "

// 12.Tipos de Dados - Null
$x = "Musica";
$x = Null;
var_dump($x);

// 13.Operadores Aritméticos
$x = 12;
$y = 6;
 echo "<br><br> $x + $y =";
 echo $x+$y;
 echo "<br> $x - $y =";
 echo $x-$y;
 echo "<br> $x * $y =";
 echo $x*$y;
 echo "<br> $x : $y =";
 echo $x/$y;

// 14.Operadores de Comparação
print "<br><br>";
$m = 10;
$n = 10;
print "m é igual ao n?";
var_dump($m==$n);
print "<br>m não é igual ao n?";
var_dump($m!=$n);
print "<br>m é maior que o n?";
var_dump($m>$n);
print "<br>m é menor que o n?";
var_dump($m<$n);
print "<br>m é maior ou igual ao n?";
var_dump($m>=$n);
print "<br>m é menor ou igual ao n?";
var_dump($m<=$n);

// 15.Operadores Lógicos
$j = 60;
$k = 30;
if ($j == 60 && $k == 30){
    echo "<br><br>Essa mensagem esta aparecendo porque ambas as condições são verdadeiras";
}
if ($j == 15 || $k == 30){;
    echo "<br>Essa mensagem esta aparecendo porque pelo menos uma das condições é verdadeira";
}
if (! ($j == 9)){;
    echo "<br>Essa mensagem esta aparecendo porque a condição não é verdadeira";
}
    

// 16.Estruturas Condicionais - If:
$l = 1;
if ($l %2==0){ 
    echo "<br>$l é um número par ";
}
else{
    echo "<br>$l é um número ímpar";
}

// 17.Estruturas Condicionais - Switch
$i = rand (0,5);
switch ($i) {
    case 0:
        echo "<br>Você perdeu a vez! Tente novamente";
        break;
    case 1:
        echo "<br>Você ganhou!!";
        break;
    default:
        echo "<br>Você perdeu.";
        break;
}

// 18.Estruturas de Repetição - For
echo "<br><br> Repetição em for:";
for($f =1; $f <=10; $f++){
    echo $f;
};

// 19.Estruturas de Repetição - While
echo "<br> Repetição em while:";
$w = 1;
while ($w <= 10){;
    echo $w;
    $w++;
}

// 20.Funções
function somar ($n1, $n2){
    return ($n1 + $n2);
}
$resu = somar (17, 7);
    print "<br><br>O resultado da soma entre o número 1 e número 2 é: $resu";
?>    
</body>
</html>