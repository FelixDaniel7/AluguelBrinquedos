USE BrinquedosFesta;

INSERT INTO Cliente(CPF,Nome,Telefone,Email,Senha,Endereco)
	VALUES ('12345678912','Rodolfo da Silva Santos','11976753358',
			'rodolfo.santos@gmail.com','abc1234567','Rua das rosas, 485-Jardim çççãaaáááá´´aããã  ??Nemus');
INSERT INTO Cliente (CPF,Nome,Telefone,Email,Senha,Endereco)
	VALUES ('98745621365','Robersval Silveira Pinheiro','11963236521',
			'robersval1985_silveira@hotmail','jhf1234567','Rua 10, 265-Jd.Represa');
            
           INSERT INTO  Administrador(Nome,Email,Login,Senha,NivelAcesso)
           Values ('blabla', 'daniel@gmail.com','blaba213','123',1);
           
           INSERT INTO  Administrador(Nome,Email,Login,Senha,NivelAcesso)
           Values ('blabla2', 'daniel@gmail.com','blaba3658','123456',1);
           
           select * from administrador;
	
INSERT INTO Equipamento (Nome,Descricao,Preco) 
	VALUES ('Piscina de Bolinhas','100m X 200m',80.00);
INSERT INTO Equipamento (Nome,Descricao,Preco) 
	VALUES ('Cama elástica','165m X 298m Material Super Elastico',120.00);
INSERT INTO Equipamento (Nome,Descricao,Preco) 
	VALUES ('Castelo inflável','138m X 120m Anti-furo',150.00);
INSERT INTO Equipamento (Nome,Descricao,Preco) 
	VALUES ('Alogão Doce','3 velocidades',100.00);
    INSERT INTO Equipamento (Nome,Descricao,Preco) 
	VALUES ('blaaaaáaaãaaaa','3 velocidades',15500.00);
    
INSERT INTO Datas (DataDisponivel,CodEquipamento)
	VALUES ('2019-08-06',4);
    
select * from Datas;

Select nome from equipamento where nome LIKE '%cama%';

SELECT E.Nome , E.Preco , D.DataDisponivel 
FROM Equipamento AS E INNER JOIN Datas AS D 
ON E.CodEquipamento = D.CodEquipamento; 
SELECT * FROM Cliente WHERE Nome LIKE 'Rodolfo%';

INSERT INTO Supervisao(CodSupervisao,TipoSupervisao,ValorSupervisao)
VALUES(0,0);

select * from Equipamento;
    
INSERT INTO Aluguel (CodCliente,CodEquipamento,DataAluguel,Data_de_uso,
					HorasAlugado,DataMontagem,DataDesmontagem,EnderecoMontagem,
                    Supervisao,PrecoFinal,FormaPagamento) 
	VALUES (1,4,'2019-07-30 02:30:55','2019-08-05',
			3.5,'2019-08-05 14:00:00','2019-08-05 17:00:00','Rua das rosas, 485-Jardim Nemus',
            0,556.47,'Cartão');
select * from Aluguel;
    
