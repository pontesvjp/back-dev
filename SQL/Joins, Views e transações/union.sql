SELECT Rua, Bairro, Cidade, Estado, CEP  
FROM Fornecedores f 
UNION 
SELECT Rua, Bairro, Cidade, Estado, CEP  
FROM Colaboradores c  ;
