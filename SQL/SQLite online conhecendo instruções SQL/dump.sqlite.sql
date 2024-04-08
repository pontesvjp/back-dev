-- TABLE
CREATE TABLE demo (ID integer primary key, Name varchar(20), Hint text );
CREATE TABLE tabelaclientes (
  ID_Cliente INT PRIMARY KEY,
  Nome_Cliente VARCHAR (250),
  informações_de_Contato VARCHAT (250)
, endereco_cliente VARCHAR (250));
CREATE TABLE "tabelafornecedores" ('ID' INTEGER,'Nome_do_Fornecedor' TEXT,'País_de_Origem' TEXT,'Informações_de_Contato' TEXT,'Data_de_Início' TEXT);
CREATE TABLE "tabelapedidos" ('ID' INTEGER,'Data_do_Pedido' TEXT,'Status' TEXT,'Total_do_Pedido' REAL,'Cliente' INTEGER,'Data_de_Envio_Estimada' TEXT);
CREATE TABLE tabelapedidosgold (
 ID_pedido_gold INT PRIMARY KEY,
 Data_Do_Pedido_gold DATE,
 Status_gold VARCHAR(50),
 Total_Do_Pedido_gold DECIMAL(10, 2),
 Cliente_gold INT,
 Data_De_Envio_Estimada_gold DATE,
 FOREIGN KEY (cliente_gold) REFERENCES tabelaclientes(id_cliente)
);
CREATE TABLE tabelaprodutos (
  ID_Produto INT PRIMARY KEY,
  Nome_do_Produto VARCHAR (250),
  Descrição TEXT,
  Categoria INT,
  Preco_de_Compra DECIMAL (10,2),
  Unidade Varchar (50),
  Fornecedor INT,
  Data_de_Inclusao DATE,
  FOREIGN KEY (Categoria) REFERENCES tabelacategorias (id_categoria),
  FOREIGN KEY (Fornecedor) REFERENCES tabelafornecedores (id)
  );
 
-- INDEX
 
-- TRIGGER
 
-- VIEW
 
