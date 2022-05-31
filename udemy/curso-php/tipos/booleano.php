<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE; 
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False) . '<br>';

print("Transformando em TRUE or FALSE<br>");
echo '<br>' . var_dump('false');
echo '<p>Regras: </p>';
echo '<br>' . var_dump((bool) 0) . 'inteiro 0' . '</br>';// false
echo '<br>' . var_dump((bool) 20) . 'inteiro 20' . '</br>';
echo '<br>' . var_dump((bool) -1) . 'inteiro-1' . '</br>';
echo '<br>' . var_dump((bool) 0.0). 'float 0.0' . '</br>';// false
echo '<br>' . var_dump((bool) 0.000001) . 'float 0.000001' . '</br>';
echo '<br>' . var_dump((bool) "") . 'string ""' . '</br>'; // false
echo '<br>' . var_dump((bool) " ") . 'string " "' . '</br>';
echo '<br>' . var_dump((bool) "0") . 'string "0"' . '</br>';// false
echo '<br>' . var_dump((bool) "00") . 'string "00"' . '</br>';
echo '<br>' . var_dump(!!'false'); //
echo '<br>' . var_dump(!!0) . 'inteiro 0' . '</br>';


print("<br>Função is_bool");
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');