
ELECT c.nome, p.id, p.datahorapedido 
from clientes c
inner join pedidos p
on c.id = p.idcliente