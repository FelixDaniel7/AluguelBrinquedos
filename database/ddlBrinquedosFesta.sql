USE mysql;

DROP DATABASE BrinquedosFesta;

CREATE DATABASE BrinquedosFesta CHARACTER SET UTF8 COLLATE=utf8_unicode_ci; /* criação do BD */

USE BrinquedosFesta; -- usar o bd BRINQUEDOSFESTA

/*Tabelas de usuarios são separadas por terem diferentes dados armazenados*/
/* Criação da tabela CLIENTE / Cadastro do cliente */
CREATE TABLE Cliente(
	CodCliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    CPF CHAR(14) NOT NULL,/*opcinal para o cliente */
    Nome VARCHAR(50),
    Telefone VARCHAR(11),
    Endereco VARCHAR(200),
    /*Dados de login*/
    Email VARCHAR(100),
    Login VARCHAR(25),
    Senha VARCHAR(40),/* 40 por causa da criptografia MD5 e sha1*/
    NivelAcesso INT(1) 
);
CREATE TABLE Administrador(
	CodAdministrador INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(50),
    /*Dados de login*/
    Email VARCHAR(100) unique,
    Login VARCHAR(25) unique,
	Senha VARCHAR(40),
    NivelAcesso INT(1) 
);
/* Visivel apenas para o ADMINISTRADOR */
CREATE TABLE Supervisor(
	CodSupervisor INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Nome VARCHAR(100),
    RG CHAR(9),
    CPF CHAR(11),
    DataNascimento DATE,
    Endereco VARCHAR(200),
    /*Dados de login*/
	Email VARCHAR(100) UNIQUE,
    Login VARCHAR(25),
    Senha VARCHAR(40),
    NivelAcesso INT(1) 
);
/* Criação da tabela EQUIPAMENTO Tudo relacionado com o EQUIPAMENTO */
CREATE TABLE Equipamento(
	CodEquipamento INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(20),
    Descricao VARCHAR(100),
    Peso DECIMAL(4,2),
    Altura DECIMAL(4,2),
    Comprimento DECIMAL(4,2),
    Largura DECIMAL(4,2),
    Preco DECIMAL(8,2)
);	
    
-- Normalização, criação da tabela DATAS
CREATE TABLE DatasDisponivel(
	DataInicial DATETIME NOT NULL,
    DataFinal DATETIME NOT NULL,
	
    CodEquipamento INT NOT NULL, -- pesquisar normalização
    
    CONSTRAINT FK_Equipamento_Datas FOREIGN KEY (CodEquipamento)
    REFERENCES Equipamento(CodEquipamento)
);

/* Visivel para o CLIENTE e para o ADMINISTRADOR */
CREATE TABLE Supervisao(
	CodSupervisao INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	ValorSupervisao DECIMAL(8,2),
    CodSupervisor INT NOT NULL,
    
    CONSTRAINT FK_Supervisor_Supervisao FOREIGN KEY (CodSupervisor)
		REFERENCES Supervisor (CodSupervisor),
        
	-- em qual brinquedos foi feita a supervisao
	CodEquipamento INT NOT NULL, 
    CONSTRAINT FK_Equipamentos_Supervisao FOREIGN KEY (CodEquipamento)
		REFERENCES Equipamento (CodEquipamento)
);



/* Visivel para o CLIENTE e para o ADMINISTRADOR */
CREATE TABLE Pedido(
	CodPedido INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    CodCliente INT NOT NULL,
    EnderecoMontagem VARCHAR(200),
    DataPedido DATETIME, -- hora do envio do pedido 
    Data_de_uso DATE, -- 1970-12-31
    HorasAlugado DOUBLE,  -- Quantidade de horas de aluguel,aluguel cobrado por hora
    Data_Hora_Montagem DATETIME, -- 1970-01-01 00:00:00
    -- Data_Hora_Desmontagem TIME,-- fazer o calculo hora montagem mais horas usadas 
    --  não precisa pq é calculavel
    PrecoFinal DECIMAL(8,2),-- preço com o frete
    FormaPagamento VARCHAR(20),
    
    CONSTRAINT FK_Cliente_Pedido FOREIGN KEY (CodCliente)
		REFERENCES Cliente(CodCliente),
        
	CONSTRAINT FK_Frete_Pedido FOREIGN KEY (CodCliente)
		REFERENCES Cliente(CodCliente)
); 

CREATE TABLE Itens(
	CodItem INT NOT NULL PRIMARY KEY auto_increment,
    CodPedido INT NOT NULL,
    CodEquipamento INT NOT NULL,
    Preco DECIMAL(8,2), -- preço do equipamento novamente, campo a ser preenchido depois / não vai pegar esse preço do banco de dados
    
    
	CONSTRAINT FK_Pedido_Itens FOREIGN KEY (CodPedido) 
		REFERENCES Pedido(CodPedido),
 
	CONSTRAINT FK_Equipamento_Itens FOREIGN KEY (CodEquipamento) 
		REFERENCES Equipamento(CodEquipamento)
);