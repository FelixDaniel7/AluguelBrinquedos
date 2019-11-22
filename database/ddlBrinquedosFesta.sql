USE mysql;

DROP DATABASE BrinquedosFesta;

CREATE DATABASE BrinquedosFesta CHARACTER SET UTF8 COLLATE=utf8_unicode_ci; /* criação do BD */

USE BrinquedosFesta; -- usar o bd BRINQUEDOSFESTA

/*Tabelas de usuarios são separadas por terem diferentes dados armazenados*/

-- para admin, supervisor e cliente
CREATE TABLE Usuario(
	CodUsuario SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(50),
    Email VARCHAR(50) unique,-- para recuperar senha
    Login VARCHAR(25),
    Senha VARCHAR(40),/*para criptografia*/
    Tipo ENUM('super','Administrador','Moderador') -- moderador pode fazer os pedidos
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

    CPF CHAR(11) NOT NULL,/*opcinal para o cliente */
    Nome VARCHAR(50),
    Telefone CHAR(10),
    Celular CHAR(11),
    Email VARCHAR(50),
    
    CEP CHAR(8),
    Endereco VARCHAR(200),
    Numero VARCHAR(5),
    Bairro VARCHAR(50),
    Complemento VARCHAR(50),
    
    
    DataPedido DATETIME, -- hora do envio do pedido 
    Data_de_uso DATE, -- 1970-12-31
    HorasAlugado DOUBLE,  -- Quantidade de horas de aluguel,aluguel cobrado por hora
    Data_Hora_Montagem DATETIME, -- 1970-01-01 00:00:00
    PrecoFinal DECIMAL(8,2),-- preço com o frete
    FormaPagamento ENUM('Dinheiro','Cartão','Mercado Pago'),
    Status BIT, -- saber se o pedido ja foi realizado 
    Supervisao BIT-- se tem supervisor adiciona tanto no preço
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