--> criando o banco cadastro
create database cadastro;
use cadastro;

--> criando tabela cadastros
create table cadastros(
id_cad int primary key auto_increment, 
nome_completo varchar(300), 
email varchar(300),
senha  varchar(300)
); 

--> criando tabela tarefas 
CREATE TABLE tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(255) NOT NULL
);

select * from cadastros;
select * from tarefas;

--> Auterando a tabela e adicionando atributo
ALTER TABLE tarefas
ADD user_id INT UNIQUE;
