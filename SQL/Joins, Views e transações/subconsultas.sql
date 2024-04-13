SELECT Nome 
FROM clientes 
WHERE ID = (
SELECT ID_Cliente 
FROM pedidos 
WHERE DataHoraPedido = '2023-01-02 08:15:00');
