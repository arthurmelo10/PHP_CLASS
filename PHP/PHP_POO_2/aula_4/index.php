<?php
    abstract class Banco
    {
        protected $saldo;
        protected $limiteSaque;
        protected $juros;

        public function setSaldo($saldo)
        {
            $this->saldo = $saldo;
        }

        public function getSaldo()
        {
            return $this->saldo;
        }

        abstract protected function sacar($saldo);

        abstract protected function depositar($deposito);
    }

    class Itau extends Banco
    {
        public function sacar($saldo)
        {
            $this->setSaldo($this->getSaldo() - $saldo);
            echo "<hr> Sacou: ".$saldo;
        }

        public function depositar($deposito)
        {
            $this->setSaldo($this->getSaldo() + $deposito);
            echo "<hr> Depositou: ".$deposito;
        }
    }

    // class Bradesco extends Banco
    // {
    //     public function sacar()
    //     {
    //         echo "Sacou";
    //     }

    //     public function depositar()
    //     {
    //         echo "Depositou";
    //     }
    // }

    $itau = new Itau;
    $itau->setSaldo(1000);
    $itau->sacar(560);
    $itau->depositar(1000);

    echo "<hr>Saldo Total: ".$itau->getSaldo();