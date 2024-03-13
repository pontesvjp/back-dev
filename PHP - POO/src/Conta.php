<?php
class Conta
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo = 0;

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

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarCpf(): string
    {
        return $this->cpfTitular;
    }

    public function recuperarNometitular(): string
    {
        return $this->nomeTitular;
    }

    public function definirCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }

    public function definirNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }
}
