<!DOCTYPE html>
<html>
<body>
<pre>
<table border="1"><tr>
<?php
// funções para manipulação de strings

// Função strtolower - função para deixar todas as letras em minúsculo

  /*$nome = "ArThUr MeLo";
  $nome2 = strtolower($nome);
  print("Seu nome é $nome2"); 

// strtoupper

	$nome = "Gustavo Guanabara";
	echo("<br/>Seu nome é ".strtoupper($nome));
    
// ucfirst
	$nome = "julliA Melo";
    $nome2 = ucfirst(strtolower($nome));
	print ("<br/>seu nome é $nome2");

// ucwords
	$nome = "ilDa melo";
    $nome2 = ucwords($nome);
	print ("<br/>seu nome é $nome2<br/>");

// strrev
	$nome = "djair melo";
	print( strrev($nome));

// strpos
	$frase = "Estou aprendendo PHP";
	$pos = strpos($frase, "php");
    echo "<br/> A string foi encontrada na posição $pos";
    
// stripos
	$frase = "Estou aprendendo PHP";
	$pos = stripos($frase, "php");
    echo "<br/> A string foi encontrada na posição $pos";

// substr_count

	$frase1 = "Estou aprendendo PHP no curso em Vídeo de PHP";
	$count = substr_count($frase1,"PHP");
    //print("<br/>$frase1");
    echo "<br/>$count";
	print("<br/>PHP encontrado $count vezes");
    
 // substr
 
 	$site = "Curso em video";
	$sub1 = substr($site,0,5); //reparti a string a parir da posição de seus caracteres
    $sub2 = substr($site,6); // conta a partir da posição declarada
    $sub3 = substr($site,-5); // coloca a quantidade de últimas posições declaradas
    $sub4 = substr($site,-5,2);// vai pegar as últimas posições declaradas, mas somente a quantidade do segndo atributo
    
    echo "<br/>$sub1 ";
    echo "<br/>$sub2 ";
    echo "<br/>$sub3 ";
    echo "<br/>$sub4 <br/>";

// str_pad

		$nome = "Arthur";
        $novo = str_pad($nome,30," ",STR_PAD_RIGHT);
        $novo2 = str_pad($nome,30," ",STR_PAD_LEFT);
        $novo3 = str_pad($nome,30," ",STR_PAD_BOTH);
        $sub5 = substr($novo,10,20); 
        print (strlen($novo));
        echo "<br/>$sub5";
        echo "<br/>$novo";
        echo "<br/>$novo2"; 
        echo "<br/>$novo3"; 
        print ("<br/>O $novo é palmeiras !!");
        print ("<br/>O $novo2 é palmeiras !!");
        print ("<br/>O $novo3 é palmeiras !!");
    
// str_repeat

	$txt = str_repeat("Php",5);
	print("<br/>O texto gerado foi $txt<br/>");
	print (str_repeat("-",20));
    
// str_replace

	$frase = "Gosto de estudar matemática!!Matemática é muito legal";
	$novaFrase = str_replace("Matemática","PHP", $frase);
    $novaFrase2 = str_ireplace("Matemática","PHP", $frase);
	print("<br/>$novaFrase");
    print("<p>$novaFrase2</p>");*/
    
////////////////////////////////////////////////

// Vetores
$n = array(3,5,8,2);
//$n[]=7;

//print_r($n);
//echo "<br/>$n";
//Range
$c = range(5,20,2);
//print_r($c);
/*foreach($c as $v){
	echo "$v ";
}*/

// Chaves Personalizadas

/*$v = array(2=> 5, 
		   1=> 9, 
           2=> 8,
           1=> 7);
$v[] = "E";
unset($v[2]);
print_r($v);

//Chaves Associativas
	$cad = array("nome"=>"Anna",
				 "idade"=>27,
				 "peso"=>68.5);

$cad[] = "empregada";
$cad[fuma] = "false";
$cad[] = "boleira";

foreach($cad as $campo => $valor){
	echo "O campo $campo possui o conteúdo $valor<br/>";
}
 // print_r($cad);*/
 
//Matrizes

/*$n = array(
	array(2,3),
	array(3,4),
	array(9,5)
);
$n[2][1] = $n[0][0];

print_r($n);*/

//////////////////////////////////////////////


//Formas de Exibição e contagem de elementos de array
$n = array("A", "J", "M", "X", "K");
$n1 = array(100, "JA", "M", "X", "K");
$n2 = array(9,8,3,6,5,2,7);
$tot = count($n1);
print_r($n);
echo "O vetor possui ". count($n) . " elementos<br/>";     
var_dump($n1);
echo "O vetor possui $tot elementos<br/>";  

//Inclusão e Exclusão de elementos no vetor
array_push ($n,"B"); // inclusão no final
print_r($n);
array_pop($n1); // Exclusão no final
var_dump($n1);
array_unshift($n, "H"); // Inclusão no início
print_r($n);
array_shift($n1); // Exclusão no início
var_dump($n1);

//Ordenação Padrão
sort($n); // ordenação crescente
print_r($n);
sort($n1);
var_dump($n1);
rsort($n); // ordenação decrescente
print_r($n);
rsort($n1);
var_dump($n1);

//Ordenação Associativa
asort($n);
print_r($n);
arsort($n2);
print_r($n2);

//Ordenação por chaves
ksort($n2);
print_r($n2);

krsort($n2);
print_r($n2);
    
?>
</table>
</pre>

</body>
</html>