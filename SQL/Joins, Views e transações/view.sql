create VIEW ViewCliente AS 
select nome, endereco from clientes

SELECT * from ViewTotalPedido


create VIEW ViewTotalPedido AS 
select p.id, c.nome, p.datahorapedido, SUM(ip.precounitario) AS ValorTotalPedido
from clientes c
JOIN pedidos p on c.id = p.idcliente
join ItensPedido ip on p.id = ip.IDPedido
GROUP BY P.ID, C.nome