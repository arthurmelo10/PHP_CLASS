<?php namespace tratamento;

use DivisionByZeroError;
use Exception;

?>
<div class="titulo">Desafio IntDiv</div>

<div>
    <ul>
    Sobrescreva o método intdiv para:
        <li>Lançar uma exceção quando tentar dividir por zero</li>
        <li>Lançar uma exceção quando o resultado não for inteiro</li>
        <li>Dividir nos demais casos</li>
    </ul>
</div>

<?php

class ResultadoException extends Exception {
    public function __construct($message, $code = 0, $previous = null) 
    {
        //echo "Chamando Resultado Exception<br>";
        parent::__construct($message, $code, $previous);
    }
}

echo '
<pre>
class ResultadoException extends Exception {
    public function __construct($message, $code = 0, $previous = null) 
    {
        parent::__construct($message, $code, $previous);
    }
}
</pre>';

function intdiv(int $a, int $b): int
{
    $resultado = $a/$b;
    
    if ($b === 0) {
        throw new DivisionByZeroError("Denominador não pode ser 0, cabeção!!");
    }

    if (!is_int($resultado)) {
        throw new ResultadoException("O resultado não é um inteiro, esperto!!");
    }
    
    return $resultado;
}

echo '
<pre>
function intdiv(int $a, int $b): int
{
    $resultado = $a/$b;
    
    if ($b === 0) {
        throw new DivisionByZeroError("Denominador não pode ser 0, cabeção!!");
    }

    if (!is_int($resultado)) {
        throw new ResultadoException("O resultado não é um inteiro, esperto!!");
    }
    
    return $resultado;
}
</pre>';

echo '
<pre>
try {
    echo "O resultado é: " . intdiv(8,3);
} catch (ResultadoException $resultado) {
    echo "Não foi possível realizar a operação";
    echo "Motivo: {$resultado->getMessage()}";
} catch (DivisionByZeroError $resultado) {
    echo "Não foi possível realizar a operação";
    echo "Motivo: {$resultado->getMessage()}";
}
</pre>';

try {
    echo "O resultado é: ". intdiv(8,3);
} catch (ResultadoException $resultado) {
    echo "Não foi possível realizar a operação<br>";
    echo "Motivo: {$resultado->getMessage()}<br>";
} catch (DivisionByZeroError $resultado) {
    echo "Não foi possível realizar a operação<br>";
    echo "Motivo: {$resultado->getMessage()}<br>";
}

echo '
<pre>
try {
    echo "O resultado é: " . intdiv(8,0);
} catch (ResultadoException $resultado) {
    echo "Não foi possível realizar a operação";
    echo "Motivo: {$resultado->getMessage()}";
} catch (DivisionByZeroError $resultado) {
    echo "Não foi possível realizar a operação";
    echo "Motivo: {$resultado->getMessage()}";
}
</pre>';

try {
    echo "O resultado é: ".intdiv(8,0);
} catch (ResultadoException $resultado) {
    echo "Não foi possível realizar a operação<br>";
    echo "Motivo: {$resultado->getMessage()}";
} catch (DivisionByZeroError $resultado) {
    echo "Não foi possível realizar a operação<br>";
    echo "Motivo: {$resultado->getMessage()}";
}

echo '
<pre>
try {
    echo "O resultado é: " . intdiv(8,2);
} catch (ResultadoException $resultado) {
    echo "Não foi possível realizar a operação";
    echo "Motivo: {$resultado->getMessage()}";
} catch (DivisionByZeroError $resultado) {
    echo "Não foi possível realizar a operação";
    echo "Motivo: {$resultado->getMessage()}";
}
</pre>';

try {
    echo "O resultado é: ".intdiv(8,2);
} catch (ResultadoException $resultado) {
    echo "Não foi possível realizar a operação<br>";
    echo "Motivo: {$resultado->getMessage()}";
} catch (DivisionByZeroError $resultado) {
    echo "Não foi possível realizar a operação<br>";
    echo "Motivo: {$resultado->getMessage()}";
}

//var_dump(intdiv(8,2));

echo '<p>Chamada da função da api PHP -> \intdiv(8,3) = ';
echo \intdiv(8,3);