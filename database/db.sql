create database sistema_ifood;
use sistema_ifood;

create table clientes (
    id int auto_increment primary key,
    nome varchar(100) not null,
    email varchar(100) not null,
    telefone varchar(20) not null,
    endereco varchar(200) not null
);

create table restaurante (
    id int auto_increment primary key,
    nome varchar(100) not null,
    categoria varchar(50) not null,
    telefone varchar(20) not null,
    endereco varchar(200) not null
);

create table pedido (
    id int auto_increment primary key,
    data_pedido datetime not null,
    status varchar(20) not null,
    valor decimal(10,2) not null,
    cliente_id int,
    restaurante_id int,
    foreign key (cliente_id) references clientes(id),
    foreign key (restaurante_id) references restaurante(id)
);