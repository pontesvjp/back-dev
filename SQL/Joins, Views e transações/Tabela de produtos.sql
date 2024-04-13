CREATE TABLE produtos (
id TEXT, 
nome VARCHAR(255) NOT NULL, 
descricao TEXT, 
preco DECIMAL(10, 2) NOT NULL, -- 10 dígitos no total, 2 casas decimais 
categoria VARCHAR(50), 
PRIMARY KEY (id) );
