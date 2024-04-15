select c.nome, p.id 
from clientes c 
full join pedidos p
on c.id = p.idcliente
where c.id IS NULL