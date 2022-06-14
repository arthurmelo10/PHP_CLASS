<div class="titulo">If Else</div>

<?php
print('<b>Primeiro Exemplo de Condicional</b><br>');
echo 'a expressão obrigatoriamente precisa resolver para verdadeiro ou falso<br>';

//A conndicional é associada somente a primeira sentença de código

// o código php é organizado em sentenças de código
// {
//     echo "linha 1";
//     echo "linha 2";
// }

ECHO '<br> A condicional pode ser executada sem o uso de chaves, ou bloco de código. Neste caso,
ele será referente a primeira linha subsequente à expressão lógica. Com o uso de chaves, tudo que estiver dentro delas, será inncluído no 
retorno da condicional </br>';
echo '<b>Sem uso de chaves: </b>';

if (false)
    echo "Serei Impresso?";
    echo "Serei Impresso novamente?";
      
echo '<br><b>Com uso de chaves: </b>';

if (false) {
    echo "Serei Impresso?";
    echo "Serei Impresso novamente?";
}      

echo '<br><b>Exemplo com sentença avulsa e bloco de código: </b>';
if (true)

echo '<br>sentença avulsa</br>';
{
    echo 'bloco de código';
} // someente o bloco de código é exibido ao usuário, pois ele não tem relação nenhuma com a condicional

print('<p><b>Colocar ; ao final da expressão lógica</b><br>');
if (false); //vira uma sentença vazia, não faz mais nada
{
    echo "Serei Impresso por causa do ;?";
}
// sentença de código vazia, o bloco de código não tem nenhuma relação com a condicional
print('<p><b>Primeiro Exemplo de condicional if else</b><br>');
echo 'Exemplo com sentenças simples: ';
if (0.0) {
    echo "verdadeiro<br>";
} else {
    echo "falso<br>";
}
// o que estiver dentro do bloco de código será retornado
echo 'Exemplo com sentenças múltiplas: ';
if (0.1) {
    echo "verdadeiro_1<br>";
    echo "verdadeiro_2<br>";
} else; {
    echo "falso_1<br>";
    echo "falso_2<br>";
}

echo '<p><b>Exemplo com intermediários(else if): </b><br>';
if (false) {
    echo "Passo A<br>";
} elseif (false) {
    echo "Passo B<br>";
} else {
    echo "Último Passo<br>";
}

echo "Fim<br>";
print('<br>Podemos ter blocos de códigos aninhados entre si</br>');
print('<br>Somente um bloco será chamado em uma condicional com else if, nn]unca dois blocos serão chamados</br>');
//não podemos ter um else solto no código