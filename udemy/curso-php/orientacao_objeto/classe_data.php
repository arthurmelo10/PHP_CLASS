<div class="titulo">Desafio Classe Data</div>

<ul>
    <li>
        A classe vai ter o nome Data
    </li>
    <li>
        Data vai ter atributo dia, meês e ano
    </li>
    <li>
        Valores Default => 
        <ul>
            <li>dia 01;</li>
            <li>mês 01;</li>
            <li>ano 1970;</li>  
        </ul>
    </li>
    <li>
        Definnir um método apresentar para a data no formato DD/MM/AAAA
    </li>    
</ul>


<?php
print('<h3>Resposta !!</h3>');

class Data 
{
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;

    public function apresentar()
    {
        echo "{$this->dia}/{$this->mes}/{$this->ano}";
    }

}

echo '
<pre>
class Data 
{
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;

    public function apresentar()
    {
        echo "$this->dia/$this->mes/$this->ano";
    }

}
</pre>';

echo '<br>';
echo '$data = new Data';
$data = new Data;
echo '<br>';
echo '$data->apresentar() = ';
$data->apresentar();

echo '<hr>';
print('<b>Alterando o valor dos atributos</b>');
echo '<br>';
$day = new Data();
echo '$day = new Data()';
echo '<br>';
$day->dia = 10;
echo '$day->dia = 10';
echo '<br>';
$day->mes = 12;
echo '$day->mes = 12';
echo '<br>';
$day->ano = 2022;
echo '$day->ano = 2022';

echo '<br>';
echo '$day->apresentar() = ';
$day->apresentar();


