<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - POO</title>
</head>
<body>
    <?php
        class Caneta
        {
            public string $modelo;
            public string $cor;
            public float $ponta;
            public int $carga;
            public bool $tampada;
            
            
            public function rabiscar(){
               if($this -> tampada == true ){ // avaliar um atributo dentro de um método
                   echo "Erro, não posso rabiscar";
               } else {
                   echo "Estou rabiscando...";
               }   
            }
            
            public function tampar(){
                $this -> tampada = true;
            }
            
            public function destampar(){
                $this -> tamapda = false;
            }
            
        }
        
         $c1 = new Caneta;
         $c1 -> modelo = "BIC CRISTAL";
         $c1 -> cor = "Azul";
         $c1 -> ponta = 0.5;
         $c1 -> destampar();
         print_r($c1);
        
         $c2 = new Caneta;
         $c2 -> cor = "Verde";
         $c2 -> carga = 50;
         $c2 ->tampar(); // posso utilizar a chamada do método direto, ao invés de usar a chamada para o atributo
         print_r($c2);
         
         // dois objetos sem relacionamento entre eles, duas instâncias diferentes
    ?>
</body>
</html>