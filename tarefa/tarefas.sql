create database tarefa;
use tarefa;

create table tb_status(
	id int not null auto_increment primary key,
    stats varchar(25) not null
);

insert into tb_status (stats) values
('pendente'),
('realizado');

create table tb_tarefas(
	id int not null auto_increment primary key,
    id_status int not null,
    tarefa text not null,
    data_cadastro datetime not null default 
                            current_timestamp(),
    constraint fk_status_tarefa foreign key 
    (id_status) references tb_status(id)                      
);






