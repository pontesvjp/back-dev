CREATE TABLE pedidos (
       id TEXT PRIMARY KEY,
        idCliente INTEGER,
        dataHoraPedido DATETIME,
        Status VARCHAR(50),
FOREIGN KEY (idCliente) REFERENCES Clientes(id) ON DELETE CASCADE
);
