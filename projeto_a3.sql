CREATE DATABASE projeto_a3;
USE projeto_a3;

CREATE TABLE login (
	nome VARCHAR(300),
	login VARCHAR(100),
	senha VARCHAR(100),
	PRIMARY KEY (login)
);

INSERT INTO login (nome, login, senha)
VALUES 
	("Administrador", "admin", "fpb123" );projeto_a3
	
