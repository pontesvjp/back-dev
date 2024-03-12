<?php
class Conta
{
    public $cpfTitular;
    public $nomeTitular;
    public $saldo = 0;

    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "saldo indisponivel";
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar)
    {
        if ($valorADepositar < 0) {
            echo 'vc precisa depositar mais';
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function tranferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo 'valor indisponivel';
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}
