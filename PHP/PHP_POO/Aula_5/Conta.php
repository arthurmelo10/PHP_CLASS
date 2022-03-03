<?php
class Conta {
    public int $numConta;
    protected string $tipo;
    private string $dono;
    private float $saldo;
    private bool $status;

//métodos especiais
    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        /*echo "Conta criada com sucesso";
        echo "Estou aqui";*/
        
    }
    public function getnumConta(){
        return $this->numConta;
    }
    public function setnumConta(int $nc){
        $this->numConta = $nc;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo(string $t){
        $this->tipo = $t;
    }
    public function getDono(){
        return $this->dono;
    }
    public function setDono(string $d){
        $this->dono = $d;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo(float $s){
        
        $this->saldo = $s;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus(bool $st){
        $this->status = $st;
    }


    // métodos da classe
    public function abrirConta( string $t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "CC") {
        $this->setSaldo(50.00);
        }
        if ($t == "CP") {
            $this->setSaldo(150.00);
        }
        
    }

    public function fecharConta(){
        if($this->getSaldo() < 0){
            echo"<br/> Débito Pendente !!";
        }
        if($this-> getSaldo() > 0){
            echo "<p>Faça o saque ".$this->getDono()."</p>";
        }
        if($this->getSaldo() == 0){
            $this->setStatus(false);
            echo"Conta ".$this->getnumConta()."de ".$this->getDono()." está encerrada"; 
        }
    }

    public function depositar(float $x){
        if($this->getStatus() == false){
            echo "<br/>Conta Inexistente";
        }
        $this->setSaldo($this->getSaldo() + $x);
        echo "<br/>Depósito de $x na conta de ".$this->getDono();
    }

    public function sacar(float $y){
        if($this->getStatus() == false){
            echo "Conta Inexistente";
        }
        if($y > $this->getSaldo()) {
            echo "<br/>Saldo Insuficiente";
        }
        if($y <= $this->getSaldo()){
            $this->setSaldo($this->getSaldo() - $y);
            echo "<br/>Saque de $y autorizado na conta de ".$this->getDono();
        }
    }

    public function pagarMensal(){
        if($this->getStatus() == false){
            echo "<br/>Conta Inexistente";
        }
        if($this->getTipo() == "CC"){
            $this->setSaldo($this->getSaldo() - 12.00);
            echo "<p>Mensalidade de R$ 12.00 debitada na conta de ".$this->getDono()."</p>";
        }
        
        if($this->getTipo() == "CP"){
            $this->setSaldo($this->getSaldo() - 20.00);
            echo "<p>Mensalidade de R$20.00 debitada na conta de ".$this->getDono()."</p>";
        }
    }
}
    	
?>