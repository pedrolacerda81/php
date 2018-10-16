/* create database db_aula1706;

use db_aula1706;

create table tbl_contatos(
id_cont int not null primary key auto_increment,
nome_cont varchar(250) not null,
end_cont varchar(250) not null,
tel_cont varchar(15) not null,
email_cont varchar(250) not null
);

select * from tbl_contatos;

------------------------------- */
/* Criar o Banco de Dados */
CREATE DATABASE projeto_db
DEFAULT character SET utf8
DEFAULT collate utf8_general_ci;
/* Selecionar o Banco de Dados */
USE projeto_db;
/* Criar a Tabela */
CREATE TABLE IF NOT EXISTS tbl_cadastro (
	id_cont int not null auto_increment,
	nome_cont varchar(250) not null,
	email_cont varchar(250) not null,
	user_id_cont varchar(250) not null,
	senha_cont varchar(250) not null,
	primary key (id_cont)
) DEFAULT CHARSET = utf8;
/* Selecionar Tabela */
SELECT * FROM tbl_cadastro;
SELECT * FROM tbl_cadastro WHERE id_cont = '1';
/* Inserir registros na Tabela */
INSERT INTO tbl_cadastro(
			id_cont, 
			nome_cont,
			email_cont,
            user_id_cont,
            senha_cont
            )
     VALUES (
     		DEFAULT,
     		'Pedro Lacerda',
     		'pedro.lac@email.com',
     		'peidom81',
            '123'
     		);
/*  Selecionar Tabela */
SELECT * FROM tbl_cadastro;
/* Alterar Registro no Banco de Dados */
UPDATE tbl_cadastro
   SET nome_cont = 'Pedro Lacerda', 
       email_cont = 'pedrolacerda@email.com',
       user_id_cont = 'peidom81'
 WHERE id_cont = '1';

SELECT * FROM tbl_cadastro;
/* Deletar registro */
DELETE FROM tbl_cadastro WHERE id_cont = '1';
/* Query do Login */
SELECT * 
  FROM tbl_cadastro 
 WHERE (user_id_cont = 'peidom81') 
   AND (senha_cont = '$2y$10$J3UFQG8s.KQGPsgC6wy8WesDVWKZv.qWggtssT5GRhUzEnBVlRxXm');