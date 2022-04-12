<?php

    class Animal 
    {
        public function andar()
        {
            echo "o animal andou";
        }

        public function correr()
        {
            echo "O animal correu";
        }
    }

    class Cavalo extends Animal
    {
        //public function andar()
        //{
        //    $this->correr();
        //}
    }

    //$animal = new Animal();
    $animal = new Cavalo();
    $animal->andar();