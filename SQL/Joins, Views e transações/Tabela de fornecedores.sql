CREATE TABLE Fornecedores (
         id TEXT PRIMARY KEY,
       nome VARCHAR(255) NOT NULL,
        contato VARCHAR(100),
        telefone VARCHAR(20),
        email VARCHAR(100),
rua VARCHAR(100) NOT NULL,
    bairro VARCHAR(100) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    estado VARCHAR(2) NOT NULL,
    cep VARCHAR(8) NOT NULL
);
