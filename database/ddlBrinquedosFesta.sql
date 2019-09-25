USE mysql;

DROP DATABASE BrinquedosFesta;

CREATE DATABASE BrinquedosFesta CHARACTER SET UTF8; -- criação do BD

USE BrinquedosFesta; -- usar o bd BRINQUEDOSFESTA

/*Tabelas de usuari separadas por ter diferente  dados armazenados */
/* Criação da tabela CLIENTE / Cadastro do cliente */
CREATE TABLE Cliente(
	CodCliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    CPF CHAR(14) NOT NULL,
    Nome VARCHAR(50),
    Telefone VARCHAR(11),
    Email VARCHAR(100) UNIQUE,
    Senha VARCHAR(40),/* 40 por causa da criptografia MD5 e sha1*/
    Endereco VARCHAR(200),
    NivelAcesso INT(1) 
);
/* Deixar o campo Email UNICO */
-- CREATE UNIQUE INDEX IDX_Email ON Cliente(Email);

CREATE TABLE Administrador(
	CodAdministrador INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(50),
    Email VARCHAR(100) UNIQUE,
	Senha VARCHAR(40),
    NivelAcesso INT(1) 
);

/* Visivel apenas para o ADMINISTRADOR */
CREATE TABLE Supervisor(
	CodSupervisor INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Nome VARCHAR(100),
    RG CHAR(9),
    CPF CHAR(11),
	Email VARCHAR(100) UNIQUE,
    DataNascimento DATE,
    Endereco VARCHAR(200)
);
    
-- Normalização, criação da tabela DATAS
CREATE TABLE Datas(
	DataDisponivel DATE NOT NULL,
	CodEquipamento INT NOT NULL -- pesquisar normalização
);
-- Criação de um índice no campo DataDisponivel para chave estrangeira
CREATE INDEX IDX_DataDisponivel ON Datas(DataDisponivel);

/* Criação da tabela EQUIPAMENTO Tudo relacionado com o EQUIPAMENTO */
CREATE TABLE Equipamento(
	CodEquipamento INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(20),
    Descricao VARCHAR(100),
    DataDisponivel DATE,
    Preco DECIMAL(8,2),
    CONSTRAINT FK__Datas_Equipamento FOREIGN KEY (DataDisponivel)/*Chave estrangeira de DATADISPONIVEL*/
		REFERENCES Datas(DataDisponivel)
);
    
ALTER TABLE Datas ADD 
	CONSTRAINT FK_Equipamento_Datas FOREIGN KEY (CodEquipamento)
    REFERENCES Equipamento(CodEquipamento);


/* Visivel para o CLIENTE e para o ADMINISTRADOR */
CREATE TABLE Supervisao(
	CodSupervisao INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    TipoSupervisao BIT, -- 0 sem supervisao , 1 com supervisao  
	ValorSupervisao DECIMAL(8,2),
    CodSupervisor INT NOT NULL,
    
    CONSTRAINT FK_Supervisor_Supervisao FOREIGN KEY (CodSupervisor)
		REFERENCES Supervisor (CodSupervisor),
        
	CodEquipamento INT NOT NULL, 
    
    CONSTRAINT FK_Equipamentos_Supervisao FOREIGN KEY (CodEquipamento)
		REFERENCES Equipamento (CodEquipamento)
);

/* Visivel para o CLIENTE e para o ADMINISTRADOR */
CREATE TABLE Aluguel(
	CodAluguel INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    CodCliente INT NOT NULL,
	CodEquipamento INT NULL,
    CodSupervisao INT NULL,
    DataAluguel DATETIME, -- hora do envio do pedido 
    Data_de_uso DATE, -- 1970-12-31
    HorasAlugado TIME,  -- Quantidade de horas de aluguel,aluguel cobrado por hora
    Data_Hora_Montagem DATETIME, -- 1970-01-01 00:00:00
    Data_Hora_Desmontagem TIME,-- fazer o calculo horamontagem mais horas usadas
    EnderecoMontagem VARCHAR(200),
    PrecoFinal DECIMAL(8,2),
    FormaPagamento VARCHAR(20),
    
    CONSTRAINT FK_Cliente_Aluguel FOREIGN KEY (CodCliente)
		REFERENCES Cliente(CodCliente),
    
    CONSTRAINT FK_Equipamento_Aluguel FOREIGN KEY (CodEquipamento)
		REFERENCES Equipamento(CodEquipamento),
    
    CONSTRAINT FK_Supervisao_Aluguel FOREIGN KEY (CodSupervisao)
		REFERENCES Supervisao(CodSupervisao)
); 

