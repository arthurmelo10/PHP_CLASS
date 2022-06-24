<div class="titulo">Arrays Multidimensionais</div>

<?php
print("<b>Exemplo 1</b>");
$dados = [
    "pessoa_1" => [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo",
    ],
    "pessoa_2" => [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia",
    ],
];
echo '<br>$dados = ';
print_r($dados);

print("<p><b>Como acessar a idade de cada pessoa?</b><br>");
echo '$dados[pessoa_1]["idade"] = '.$dados["pessoa_1"]["idade"];
echo '<br>$dados[pessoa_2]["idade"] = '.$dados["pessoa_2"]["idade"];

print("<p><b>Como adicionar informações no array?</b><br>");
$dados["pessoa_3"] = [
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México",
];
echo '$dados["pessoa_3"] = [
    "nome" => "Florinnda",
    "idade" => 30,
    "naturalidade" => "Cidade do México",
]';
echo"<br>";
print_r($dados);
echo '$dados["pessoa_3"]["idade"] = '.$dados["pessoa_3"]["idade"];

print("<p><b>Como adicionar informações no elemento do array?</b><br>");
$dados["pessoa_3"]["vizinho"] = "Chaves";

echo '$dados["pessoa_3"]["vizinho"] = "Chaves"';
echo '<br>';
print_r($dados);

print("<p><b>Como remover informações no array?</b><br>");
echo 'Com a função unset() -> unset($dados["pessoa_2"] = ';
unset($dados["pessoa_2"]);
print_r($dados);
echo '<br><b>o php não reoderna os índices do array, quando utilizamos a função unset(), cada elemento continua com o seu índice original</b>';
echo '<br> Acessar a pessoa que foi excluída -> var_dump($dados["pessoa_2"]) = ';
var_dump($dados["pessoa_2"]);

print("<p><b>Como remover informações em umn elemento do array?</b><br>");
echo 'Com a função unset() -> unset($dados["pessoa_3"]["vizinho"]) = ';
unset($dados["pessoa_3"]["vizinho"]);
print_r($dados);