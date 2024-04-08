-- TABLE
CREATE TABLE Colaboradores (
    ID TEXT PRIMARY KEY,
    Nome VARCHAR(255),
    DataNascimento DATE,
    CPF VARCHAR(14),
    Endereco VARCHAR(255),
    Telefone VARCHAR(15),
    Email VARCHAR(255)
);
CREATE TABLE Dependentes (
    ID TEXT PRIMARY KEY,
    ID_Colaborador TEXT,
    Nome VARCHAR(255),
    Parentesco VARCHAR(50),
    DataNascimento DATE,
    CPF VARCHAR(14),
    Genero VARCHAR(15),
    FOREIGN KEY (ID_Colaborador) REFERENCES Colaboradores(ID)
);
CREATE TABLE faturamento (
    id TEXT PRIMARY KEY,
    mes VARCHAR(20),
    faturamento_bruto DECIMAL (10,2),
    despesas DECIMAL (10,2),
    lucro_liquido DECIMAL (10,2),
    numero_clientes INT,
    numero_novos_clientes INT
);
CREATE TABLE HistoricoEmprego (
    ID TEXT PRIMARY KEY,
    ID_Colaborador TEXT,
    Cargo VARCHAR(255),
    DataContratacao DATE,
    DataTermino DATE,
    Salario DECIMAL(10, 2),
    Supervisor VARCHAR(255),
    FOREIGN KEY (ID_Colaborador) REFERENCES Colaboradores(ID)
);
CREATE TABLE Licencas (
    ID TEXT PRIMARY KEY,
    ID_Colaborador TEXT,
    TipoLicenca VARCHAR(255),
    DataInicio DATE,
    DataFim DATE,
    FOREIGN KEY (ID_Colaborador) REFERENCES Colaboradores(ID)
);
CREATE TABLE Treinamento (
    ID TEXT PRIMARY KEY,
    ID_Colaborador TEXT,
    Curso VARCHAR(255),
    DataConclusao DATE,
    Instituicao VARCHAR(255),
    FOREIGN KEY (ID_Colaborador) REFERENCES Colaboradores(ID)
);
 
-- INDEX
 
-- TRIGGER
 
-- VIEW
 
