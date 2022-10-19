<div class="titulo">Erro Personalizado</div>

<?php
echo 'Throwable existe uma hierarquia de hernaça nesta classe<br> 
Isso será utilizado para a criação do erro personalizado<br>';

echo 'Exemplo 1: <br>';
/**
     * Não mapear como erro
     * Erro é algo mais grave, como por exemplo, fazer um require de um arquivo, e o arquivo não existir
     * Exception seria algo mais voltado a validação de sua aplicação, como uma regra de negócio
     * Exceção faz parte da sua lógica
     * Não significa que é um erro no código
     * Isso faz parte da lógica
     * Programação defensiva
     */
class FaixaEtariaException extends Exception
{
    public function __construct($message, $code = 0, $previous = null)
    {
        /**
         * Erro pode ser causado por outros erros
         * 
         */
        //echo "Erro Personalizado: $message<br>";
        parent::__construct($message, $code, $previous);
    }
}

echo '
/**
 * Não mapear como erro<br>
 * Erro é algo mais grave, como por exemplo, fazer um require de um arquivo, e o arquivo não existir<br>
 * Exception seria algo mais voltado a validação de sua aplicação, como uma regra de negócio<br>
 * Exceção faz parte da sua lógica<br>
 * Não significa que é um erro no código<br>
 * Isso faz parte da lógica<br>
 * Programação defensiva<br>
 */
<pre>
class FaixaEtariaException extends Exception
{
    public function __construct($message, $code = 0, $previous = null)
    {
        /**
         * Erro pode ser causado por outros erros = previous
         */
        //echo "Erro Personalizado: $message";
        parent::__construct($message, $code, $previous);
    }
}
</pre>';

function calcularTempoAposentadoria(int $idade) 
{
    if ($idade<18) {
        throw new FaixaEtariaException('Ainda está muito longe');
    }

    if ($idade>70) {
        throw new FaixaEtariaException('Já deveria ter aposentado');
    }

    return 70 - $idade;
}

echo '
<pre>
function calcularTempoAposentadoria(int $idade) 
{
    if ($idade<18) {
        throw new FaixaEtariaException("Ainda está muito longe");
    }

    if ($idade>70) {
        throw new FaixaEtariaException("Já deveria ter aposentado");
    }

    return 70 - $idade;
}
</pre>';

$idadeAvaliadas = [15, 30, 60, 80];

echo '<pre>$idadeAvaliadas = [15, 30, 60, 80]</pre>';

echo '
<pre>
foreach($idadeAvaliadas as $idade) {
    try {
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "Idade = $idade, $tempoRestante anos restantes";
    } catch (FaixaEtariaException $faixa) {
        echo "Não foi possível calcular para $idade anos";
        echo "Motivo: {$faixa->getMessage()}";
    } finally {
        ECHO "Fim da iteração !!";
    }
}
</pre>';

foreach($idadeAvaliadas as $idade) {
    try {
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "Idade = $idade, $tempoRestante anos restantes<br>";
    } catch (FaixaEtariaException $faixa) {
        echo "Não foi possível calcular para $idade anos<br>";
        echo "Motivo: {$faixa->getMessage()}<br>";
    } finally {
        ECHO "Fim da iteração !!<br>";
    }
}

ECHO "FIM !!";