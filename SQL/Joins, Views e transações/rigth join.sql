SELECT pr.nome,  x.idproduto,  x.idpedido 
FROM(
    SELECT ip.idpedido, ip.idproduto
    FROM pedidos p
    JOIN ItensPedido ip 
    ON p.id = ip.idpedido
    WHERE strftime('%m', p.DataHoraPedido) = '10' ) x
RIGHT JOIN produtos pr
ON pr.id =  x.idproduto;
