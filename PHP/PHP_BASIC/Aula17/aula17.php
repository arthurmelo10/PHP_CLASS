<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // funções para manipulação de strings

// Função strtolower - função para deixar todas as letras em minúsculo

  $nome = "ArThUr MeLo";
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
	print("O texto gerado foi $txt")
	print (str_repeat("-",20));

// str_replace

    $frase = "Gosto de estudar matemática!!Matemática é muito legal";
    $novaFrase = str_replace("Matemática","PHP", $frase);
    $novaFrase2 = str_ireplace("Matemática","PHP", $frase);
    print("<br/>$novaFrase");
    print("<br/>$novaFrase2");

    ?>
</body>
</html>