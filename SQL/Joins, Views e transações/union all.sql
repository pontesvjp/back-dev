SELECT Nome, Rua, Bairro, Cidade, Estado, CEP  
FROM Fornecedores f 
UNION ALL 
SELECT Nome, Rua, Bairro, Cidade, Estado, CEP  
FROM Colaboradores c  ;
