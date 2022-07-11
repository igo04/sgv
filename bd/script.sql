
create database if not exists sgv;
use sgv;

create or replace table produto(
    id int primary key auto_increment,
    nome varchar(250) not null,
    description varchar(250) not null ,
    price double(9,2) not null ,
    created_at TIMESTAMP not null default CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

alter table produto add column foto text not null default "imagens\\avatar.png" after nome;
alter table produto change column foto foto longtext not null default "imagens\\avatar.png";

create or replace table login(
    id int primary key auto_increment,
    email varchar(250) not null unique,
    senha varchar(255) not null,
    created_at TIMESTAMP not null default CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into login(email, senha) values ('admin@pedacinhos.com.br', md5('admin@123'));