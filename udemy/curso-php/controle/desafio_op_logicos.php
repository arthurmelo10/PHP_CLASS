<div class="titulo">Desafio Operadores</div>
<!--
    Dois trabalhos -> terça e quinta
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->
<form action="#" method="post">
    <!--vai executar uma requisição de get ou post-->
    <div>
        <label for="t1"> 
            Trabalho 1 (Terça):
        </label>
        <select name="t1" id="t1">
            <option value="1">
                Executado
            </option>
            <option value="0">
                Não Executado
            </option>
        </select>
    </div>
    <div>
        <label for="t2"> 
            Trabalho 2 (Quinta):
        </label>
        <select name="t2" id="t2">
            <option value="1">
                Executado
            </option>
            <option value="0">
                Não Executado
            </option>
        </select>
    </div>
    <button>
        Executar
    </button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php
// $trabalho_1 = $_POST['t1'];
// $trabalho_2 = $_POST['t2'];
// $televisao_1  = 50;
// $televisao_2  = 32;

// if ($trabalho_1 && $trabalho_2) {
//     echo 'Vamos comprar uma tv de '.$televisao_1.' e tomar sorvete';
// } else if ($trabalho_1 xor $trabalho_2) {
//     echo 'Vamos comprar uma tv de '.$televisao_2.' e tomar sorvete';
// } else {
//     echo 'vamos ser saudáveis';
// }

$trabalho_1 = $_POST['t1'] === "1";
$trabalho_2 = !!$_POST['t2'];
$televisao = '';
$sorvete = false;


if (isset($_POST['t1']) && isset($_POST['t2'])) {
    if ($trabalho_1 && $trabalho_2) {
        $televisao = '50"';
    } else if ($trabalho_1 xor $trabalho_2) {
        $televisao = '32"';
    }
     
     if ($trabalho_1 or $trabalho_2) {
         $sorvete = true;
         //echo '<br>Vamos tomar Sorvete';
    }
     
    $televisao ? 
         $resultado = "Vamos comprar a televisão de $televisao polegdas" 
         : $resultado = "Sem televisão desta vez";
    
    !$sorvete ? 
         $resultado .= '<br> Estamos mais saudáveis'
         : $resultado .= '<br>Vamos tomar Sorvete';
     
    echo "<p>$resultado</p>";
}

// A função isset verifica se a requisição está com valor setado, isto é, faz necessário que o usuário insira a resposta dentro do formulário
    


