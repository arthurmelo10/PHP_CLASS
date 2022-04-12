<?php

interface CRUD
{
    public function create();
    public function read();
    public function update();
    public function delete();

}

class Noticias implements CRUD 
{
    public function create()
    {
        echo "Criado";
    }

    public function read()
    {
        echo "<hr>lido";
    }

    public function update()
    {
        echo "<hr>atualizado";
    }

    public function delete()
    {
        echo "<hr>deletado";
    }
}

$news = new Noticias();
$news->create();
$news->read();
$news->update();
$news->delete();

