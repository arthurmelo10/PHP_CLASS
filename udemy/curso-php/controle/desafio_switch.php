<div class="titulo">Desafio Switch</div>
<b>Conversor de Unidades</b><br>
<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha"> Km -> Milha</option>
        <option value="milha-km"> Milha -> Km </option>
        <option value="metro-km"> Metros -> Km</option>
        <option value="km-metro"> Km -> Metro</option>
        <option value="celsius-fahrenheit"> Celsius -> Fahrenheit</option>
        <option value="fahrenheit-celsius"> Fahrenheit -> Celsius</option>
    </select>
    <button>Calcular</button>
    <!--<input type="submit" value="Converter">-->
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
$valor = $_POST['param'] ?? 0; //verificar se o valor está setado, ṕe diferente de nulo - coalesce
$categoria = $_POST['conversao'];
const FATOR_KM_MILHA = 0.621371;//utilizar a constante é interessante, pois podemos salvar o valor da conversão em um único local, e utilizá-lo em mais de um local
const FATOR_METRO_KM = 1000;
const FATOR_TEMPERATURA = 1.8;
const FATOR_ACRESC_TEMP = 32;
//$valorConvertido = 0.0;

switch ($categoria) {
    case 'km-milha':
        $valorConvertido = $valor * FATOR_KM_MILHA;
        $mensagem = "$valor km(s) = $valorConvertido milha(s)";
        break;
    case 'milha-km':
        $valorConvertido = $valor / FATOR_KM_MILHA;
        $mensagem = "$valor milha(s) = $valorConvertido km(s)";
        break;
    case 'metro-km':
        $valorConvertido = $valor / FATOR_METRO_KM;
        $mensagem = "$valor metro(s) = $valorConvertido km(s)";
        break;
    case 'km-metro':
        $valorConvertido = $valor * FATOR_METRO_KM;
        $mensagem = "$valor km(s) = $valorConvertido metro(s)";
        break;
    case 'celsius-fahrenheit':
        $valorConvertido = ($valor * FATOR_TEMPERATURA) + FATOR_ACRESC_TEMP;
        $mensagem = "{$valor}° Celsius = {$valorConvertido}° Fahrenheit";
        break;
    case 'fahrenheit-celsius':
        $valorConvertido = ($valor - FATOR_ACRESC_TEMP)/FATOR_TEMPERATURA;
        $mensagem = "{$valor}° Fahrenheit = {$valorConvertido}° Celsius";
        break;
    default:
        $mensagem = "Nenhum valor calculado";
}

echo "<b>$mensagem</b>";