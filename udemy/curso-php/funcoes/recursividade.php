<div class="titulo">Recursividade</div>

<?php
print('<b>Definição</b><br>');

echo '</b>Recursividade é a característica da função que chama ela mesma !!! </b>';

echo '<br>Características necessárias para a recursividade = Condição de parada e a função chamar ela mesma</br>';

print('<p><b>Exemplo - Fatorial</b><br>');

echo '
<pre>
7! = 5040
    => 7 * 6! = 5040
        => 6 * 5! = 720
            => 5 * 4! = 120
                => 4 * 3! = 24
                    => 3 * 2! = 6
                        => 2 * 1! = 2
                            => 1 // <strong>condição de parada</strong>
                            </pre>
                            ';

echo '
<br> Fatorial pode ser definido como um <b>problema recursivo</b>:
<ul>
    <li>
        Quebrar um problema maior e problemas menores dentro dele mesmo => fatorial de 6, de 5 ... 
    </li>
    <li>
        Condição de parada => Fatorial de 1
        <br>Chegando na condição de parada, sai voltando e resolvendo as demais chamadas que ficaram sem a devida resposta
    </li>
</ul>
';

print('<p>Nosso exemplo vai ser, passar um número e somar desde 1 até este número<br>'); 

echo '
<pre>
$numero = 4 // vai somar de 4 até 1
4a1 = 10
    => 4 + 3a1 = 10
        => 3 + 2a1 = 6
            => 2 +1a1 = 3
                => 1 // condição de parada não preciso fazer uma chamada recursiva para encontrar seu valor, pois o mesmo já é conhecido
<pre>
';

echo 'Como se fosse um ciclo, começa e termina na mesma chamada da função. 
<br>Sempre deve cair na condição de parada, sendo esta um valor/parâmetro conhecido</br>';

echo '<hr>';

print('<p><strong>Exemplo 1 = Função Soma até Um (sem recursividade)</strong><br>');

function somaAteUm($numero)
{
    $resultado = 0;
    for ($i = $numero; $i >= 1 ; $i--) {
        $resultado += $i;
    }

    return $resultado;
}

echo '
<pre>
function somaAteUm($numero)
{
    $resultado = 0;
    for ($i = $numero; $i >= 1 ; $i--) {
        $resultado += $i;
    }

    return $resultado;
}
</pre>';

echo 'Chamando a função somaAteUm(4) = ';
echo somaAteUm(4);
echo '<br>';
echo 'Chamando a função somaAteUm(5) = ';
echo somaAteUm(5);
echo '<br>';
echo 'Chamando a função somaAteUm(10) = ';
echo somaAteUm(10);
echo '<br>';
echo 'Chamando a função somaAteUm(1) = ';
echo somaAteUm(1);

print('<p><strong>Exemplo 2 = Função Soma até Um (com recursividade)</strong><br>');
function somaRecursivaAteUm($numero)
{    
    //Condição de parada
    if ($numero === 1) {
        return 1;
    }

    return $numero + somaRecursivaAteUm($numero - 1);
}

echo '
<pre>
function somaRecursivaAteUm($numero)
{    
    <b>//Condição de parada
    if ($numero === 1) {
        return 1;
    }</b>

    return $numero + somaRecursivaAteUm($numero - 1);
}
</pre>';

echo 'Chamando a função somaRecursivaAteUm(4) = ';
echo somaRecursivaAteUm(4);
echo '<br>';
echo 'Chamando a função somaRecursivaAteUm(5) = ';
echo somaRecursivaAteUm(5);
echo '<br>';
echo 'Chamando a função somaRecursivaAteUm(10) = ';
echo somaRecursivaAteUm(10);
echo '<br>';
echo 'Chamando a função somaRecursivaAteUm(1) = ';
echo somaRecursivaAteUm(1);
echo '<br>';

print('<br><strong>Outra forma de fazer a função recursiva</strong><br>');
function somaRecursivaEconomica($numero)
{
    return $numero===1 
        ? 1 
        : $numero + somaRecursivaEconomica($numero - 1);
}

echo '
<pre>
function somaRecursivaEconomica($numero)
{
    return $numero===1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}
</pre>';

echo 'Chamando a função somaRecursivaEconomica(10) = ';
echo somaRecursivaEconomica(10);
echo '<br>';
echo 'Chamando a função somaRecursivaEconomica(1) = ';
echo somaRecursivaEconomica(1);
echo '<br>';