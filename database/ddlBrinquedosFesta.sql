USE mysql;

DROP DATABASE BrinquedosFesta;

CREATE DATABASE BrinquedosFesta CHARACTER SET UTF8 COLLATE=utf8_unicode_ci; /* criação do BD */

USE BrinquedosFesta; -- usar o bd BRINQUEDOSFESTA

/*Tabelas de usuarios são separadas por terem diferentes dados armazenados*/
/* Criação da tabela CLIENTE / Cadastro do cliente */
CREATE TABLE Cliente(
	CodCliente SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT, -- TINYINT menos q Smallint e int
    CPF CHAR(11) NOT NULL,/*opcinal para o cliente */
    Nome VARCHAR(50),
    Telefone VARCHAR(10),
    Celular CHAR(11),
    
    CEP CHAR(8),
    Endereco VARCHAR(200),
    Numero VARCHAR(5),
    Bairro VARCHAR(50),
    Complemento VARCHAR(50)
);

-- para admin, supervisor e cliente
CREATE TABLE Usuario(
	CodUsuario SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(50),
    Email VARCHAR(50),-- para recuperar senha
    Login VARCHAR(25),
    Senha VARCHAR(40),/*para criptografia*/
    Tipo ENUM('super','administrador','moderador') -- moderador pode fazer os pedidos
);

/* Visivel apenas para o ADMINISTRADOR */
CREATE TABLE Supervisor(
	CodSupervisor SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Nome VARCHAR(100),
    RG CHAR(9),
    CPF CHAR(11),
    DataNascimento DATE,
    Endereco VARCHAR(200),
    Email VARCHAR(50)
);

/* Criação da tabela EQUIPAMENTO Tudo relacionado com o EQUIPAMENTO */
CREATE TABLE Equipamento(
	CodEquipamento SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(20),
    Descricao VARCHAR(100),
    Peso DECIMAL(7,2),/*em KG*/
    Altura DECIMAL(7,2),/*em Metros*/
    Comprimento DECIMAL(7,2),/*em Metros*/
    Largura DECIMAL(7,2),/*em Metros*/
    Preco DECIMAL(8,2)
);	
    
-- Normalização, criação da tabela DATAS
CREATE TABLE DatasDisponivel(
	DataInicial DATETIME NOT NULL,
    DataFinal DATETIME NOT NULL,
	
    CodEquipamento SMALLINT NOT NULL, -- pesquisar normalização
    
    CONSTRAINT FK_Equipamento_Datas FOREIGN KEY (CodEquipamento)
    REFERENCES Equipamento(CodEquipamento)
);

/* Visivel para o CLIENTE e para o ADMINISTRADOR */
CREATE TABLE Pedido(
	CodPedido INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    CodCliente SMALLINT NOT NULL,
    CodUsuario SMALLINT NOT NULL,-- para caso alguem faça um pedido
    EnderecoMontagem VARCHAR(200),
    DataPedido DATETIME, -- hora do envio do pedido 
    Data_de_uso DATE, -- 1970-12-31
    HorasAlugado DOUBLE,  -- Quantidade de horas de aluguel,aluguel cobrado por hora
    Data_Hora_Montagem DATETIME, -- 1970-01-01 00:00:00
    -- Data_Hora_Desmontagem TIME,-- fazer o calculo hora montagem mais horas usadas 
    --  não precisa pq é calculavel
    PrecoFinal DECIMAL(8,2),-- preço com o frete
    FormaPagamento VARCHAR(20),
    
    CodSupervisor SMALLINT,-- se tem supervisor adiciona tanto no preço
    
    CONSTRAINT FK_Supervisor_Pedido FOREIGN KEY (CodSupervisor)
		REFERENCES Supervisor(CodSupervisor),
    
    CONSTRAINT FK_Cliente_Pedido FOREIGN KEY (CodCliente)
		REFERENCES Cliente(CodCliente)
); 

CREATE TABLE Itens(
	CodItem SMALLINT NOT NULL PRIMARY KEY auto_increment,
    CodPedido INT NOT NULL,
    CodEquipamento SMALLINT NOT NULL,
    Preco DECIMAL(8,2), -- preço do equipamento novamente, campo a ser preenchido depois / não vai pegar esse preço do banco de dados
    
    
	CONSTRAINT FK_Pedido_Itens FOREIGN KEY (CodPedido) 
		REFERENCES Pedido(CodPedido),
 
	CONSTRAINT FK_Equipamento_Itens FOREIGN KEY (CodEquipamento) 
		REFERENCES Equipamento(CodEquipamento)
);