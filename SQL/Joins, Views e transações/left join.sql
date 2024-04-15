select c.nome, x.id
from clientes c
left join ( 
	select p.id, p.idcliente
   from pedidos p
   WHERE strftime('%m', p.DataHoraPedido) = '10'
)X

on c.id = x.idcliente
where x.idcliente IS NULL
 
 

