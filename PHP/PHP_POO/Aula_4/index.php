<?php

require_once 'Caneta.php';


 $c1 = new Caneta("BIC","Azul",0.5);
 $c2 = new Caneta("KKK","Verde",1.0);
 //$c1 -> setModelo("BIC");
 //$c1 -> modelo = "Nic"; // como a variável é pública, eu consigo acessar livremente o atributo;
 //$c1 -> setPonta(0.5); // via método, eu consigo acessar o atributo privado;
 //$c1 -> ponta = 0.1; // não pode ter acesso a propriedade caneta;
 
 // técnica super recomendada
 
 //print "Eu tenho uma caneta {$c1 -> getModelo()} de ponta {$c1 -> getPonta()}";
 
 print_r($c1);
 print_r($c2);