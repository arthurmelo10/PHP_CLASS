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
        // Vetores
//$n = array(3,5,8,2);
//$n[]=7;

print_r($n);
//echo "<br/>$n";
//Range
$c = range(5,20,2);
//print_r($c);
/*foreach($c as $v){
	echo "$v ";
}*/

// Chaves Personalizadas

$v = array(2=> 5, 
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
 // print_r($cad);
 
//Matrizes

$n = array(
	array(2,3),
	array(3,4),
	array(9,5)
);
$n[2][1] = $n[0][0];

print_r($n);
    ?>
</body>
</html>