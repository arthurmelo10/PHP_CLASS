<div class="titulo">$_POST[]</div>

<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
/**
 * 
 */
print('<b>Exatamente a parte do name que vai chegar no back end as chaves do $_POST[]</b>');
//echo '<br>'.$_POST;

echo '<br>';
print_r($_POST);
echo '<br>';
print_r($_GET);

echo '<br>O name de cada um dos inputs será enviado como chave para o $_POST[]';
echo '<br>'.count($_POST);