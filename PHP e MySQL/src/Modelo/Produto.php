<?php 

class Produto {
    private ?int $id;
    private string $tipo;
    private string $nome;
    private string $descricao;
    private string $imagem;
    private float $preco;

    public function __construct(?int $id, string $tipo, string $nome, string $descricao, float $preco, string $imagem = "logo-serenatto.png") 
    {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->imagem = $imagem;
        $this->preco = $preco;
    }
    public function getId()
    {
        return $this->id;
    }

    public function getTipo()
    {      return $this->tipo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getImagem()
    {
        return $this->imagem;
    }

    
    public function getPreco()
    {
        return $this->preco;
    }

    public function getPrecoFormatado(): string{
        return number_format(  $this->preco, 2);
    }

    public function getImagemDiretorio(): string{
        return "img/" . $this->imagem;
    }
}