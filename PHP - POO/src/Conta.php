<?php
class Conta
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo = 0;
    private static $numeroDeContas = 0;

    public function __construct(string $nomeTitular, string $cpfTitular)
    {
        $this->saldo = 0;
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->validaNomeTitular($nomeTitular);

        self::$numeroDeContas++;
    }
    
    public function __destruct()
    {
        if (self::$numeroDeContas > 2){
            self::$numeroDeContas--;
        }
    }
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

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "nome pprecisa ter 5 caracteres";
            exit();
        }
    }

    public static function recuperarNumeroDeContas() : int {
        return self::$numeroDeContas;
    }
}
