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

CREATE DATABASE projeto_db
DEFAULT character SET utf8
DEFAULT collate utf8_general_ci;

USE projeto_db;

CREATE TABLE IF NOT EXISTS tbl_cadastro (
	id_cont int not null auto_increment,
	nome_cont varchar(250) not null,
	end_cont varchar(250) not null,
	tel_cont varchar(15) not null,
	email_cont varchar(250) not null,
	primary key (id_cont)
) DEFAULT CHARSET = utf8;

SELECT * FROM tbl_cadastro;
SELECT * FROM tbl_cadastro WHERE id_cont = '1';

INSERT INTO tbl_cadastro(
			id_cont, 
			nome_cont,
			end_cont,
			tel_cont,
			email_cont)
     VALUES (
     		DEFAULT,
     		'Pedro Lacerda',
     		'Rua A, 234',
     		'65999332211',
     		'pedro.lac@email.com'
     		);

SELECT * FROM tbl_cadastro;

UPDATE tbl_cadastro
   SET nome_cont = 'Pedro Lacerda', 
       end_cont = 'Rua B, 12', 
       tel_cont = '65998776655',
       email_cont = 'pedrolacerda@email.com'
 WHERE id_cont = '1';

SELECT * FROM tbl_cadastro;

DELETE FROM tbl_cadastro WHERE id_cont = '1';