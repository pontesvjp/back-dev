CREATE TABLE itensPedido (
       idPedido TEXT,
        idProduto TEXT,
       quantidade INTEGER,
        precoUnitario DECIMAL(10, 2),
PRIMARY KEY (idPedido, idProduto),
FOREIGN KEY (idPedido) REFERENCES Pedidos(id) ON DELETE CASCADE,
FOREIGN KEY (idProduto) REFERENCES Produtos(id) ON DELETE CASCADE
);
