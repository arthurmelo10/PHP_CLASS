<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
//Printf
  //$prod = "leite";
  //$preço = 4.5;
  //echo "O $prod custa R$ $preço<br/>";
  //echo "O $prod custa R$ " .number_format($preço,2) ;
  //printf("<br/>O %s custa R$ %.2f<br/>", $prod, $preço);//%s - mostar uma string / %.2f mostrar um número real, com duas casas decimais
  
  // Print_r
  	/*$v[0] = 4;
	$v[1] = 3;
	$v{2} = 8;
	
	//print_r ($v);
    
    $v2 = array (3,7,6,2,1,9);
	//print_r($v2);
    var_dump($v2);
    var_export($v2);*/
    
    //wordwrap
    $txt = "Este é um exemplo de string gigante que ...";
	$res = wordwrap($txt,5,"<br/>\n", true); // quebra por palavra
	//echo $res;
    
    //strlen
    
    $t ="Curso em Video";
	$tamanho = strlen($t);
    
    //printf("<br/>$tamanho<br/>");
    
    //trim 
    
    /*$nome= "   Jose da Silva   ";
	echo (strlen($nome));
    $novo = trim($nome);
    echo "<br/>$novo";
    echo (strlen($novo));*/
    
    
    //ltrim
    
     /*$nome1 = "   Jose da Silva   ";
	 $novo1 = ltrim($nome1);
	 echo "<br/>$novo1";
     echo (strlen($novo1));*/
     
    //rtrim
    
    /* $nome2 = "   Jose da Silva   ";
	 $novo2 = rtrim($nome2);
	 echo "<br/>$novo2";
     echo (strlen($novo2));*/
     
     // str_word_count
     
    $frase = "Eu vou estudar PHP";
	$cont = str_word_count($frase,2);// 0 vai contar as palavras/ 1 gera um vetor / 2 gerar um vetor vai manter o posicionamento de cada palavras dentro da string
	//echo "<br/>$cont";
    //print_r($cont);
    
    // Explode - Criação de um vetor - versão mais nova da função str_word_count
    
   /* $site = "Curso em Vídeo";
	$vetor = explode(" ",$site);
	print_r($vetor);*/
    
    // str_split
    
    /*$n = "Arthur";
    $v = str_split($n);
    print_r($v);*/
    
    //implode
    
    $vetor [0] = "Curso";
	$vetor [1] = "em";
    $vetor [2] = "Vídeo";
	$texto = implode (" ", $vetor);
	print($texto);
    
    //chr
    
    $letra= chr(99);
    echo " <br/> A letra de código 99 é $letra";
    
    //ord
    
    $l = "C";
	$cd = ord($l);
    echo " <br/> O código da $l é $cd"
     
</body>
</html>