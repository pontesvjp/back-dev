SELECT Nome
FROM clientes
WHERE ID IN (
    SELECT ID_Cliente
    FROM pedidos
    WHERE strftime('%m', DataHoraPedido) = '01');
