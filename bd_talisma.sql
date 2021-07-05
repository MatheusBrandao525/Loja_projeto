create database db_talisma
default character set utf8
default collate utf8_general_ci;

use db_talisma;

create table tbl_categoria
(
	cd_categoria int primary key auto_increment,
    ds_categoria varchar(25) not null
)
default character set utf8;

create table tbl_vendedor
(
	cd_vendedor int primary key auto_increment,
    nm_vendedor varchar(45) not null
)
default character set utf8;
    
create table tbl_produto
(
	cd_produto int primary key auto_increment,
    no_isbm varchar(17) not null,
    cd_categoria int not null,
    nm_produto varchar(70) not null,
    cd_vendedor int not null,
    vl_preco decimal(6,2) not null,
    qt_estoque int not null,
    ds_descricao_produto text not null,
    ds_capa varchar(255) not null,
    sg_lancamento enum('S', 'N') not null,
    constraint fk_cat foreign key(cd_categoria) references tbl_categoria(cd_categoria),
    constraint fk_vendedor foreign key(cd_vendedor) references tbl_vendedor(cd_vendedor)
    )
    default character set utf8;
    
insert into tbl_categoria
values(default,'Decoração'),
(default, 'Construção'),
(default, 'Pintura'),
(default, 'Vidraçaria'),
(default, 'Marmoraria');

select * from tbl_categoria;

insert into tbl_vendedor
values(default,"Matheus Felipe");

insert into tbl_produto
values(default, '4','1','Nome do produto','1', '59.70', '999', 'Descrição do produto', 'adobe-lightroom', 'S'),
(default, '85445-5455','2','Nome do produto','1', '87.70', '999', 'Descrição do produto', 'bancomysql', 'N'),
(default, '85445-5455','4','Nome do produto','1', '87.70', '999', 'Descrição do produto', 'bigdata', 'S'),
(default, '85445-5455','5','Nome do produto','1', '87.70', '0', 'Descrição do produto', 'bootstrap', 'N');

select * from tbl_produto;

create view vw_produto
as select
	tbl_produto.cd_produto,
    tbl_produto.no_isbm,
    tbl_categoria.ds_categoria,
    tbl_produto.nm_produto,
    tbl_vendedor.nm_vendedor,
    tbl_produto.vl_preco,
    tbl_produto.qt_estoque,
    tbl_produto.ds_descricao_produto,
    tbl_produto.ds_capa,
    tbl_produto.sg_lancamento
from tbl_produto inner join tbl_vendedor
	on tbl_produto.cd_vendedor = tbl_vendedor.cd_vendedor
inner join tbl_categoria 
	on tbl_produto.cd_categoria = tbl_categoria.cd_categoria;
    
select * from vw_produto where cd_produto = '5';

select nm_produto, vl_preco, ds_capa, qt_estoque from vw_produto where ds_categoria ="";

create table db_usuario(
	cd_usuario int primary key auto_increment,
    nm_usuario varchar(80) not null,
    ds_email varchar(80) not null,
    ds_senha varchar(10) not null,
    ds_status boolean not null,
    ds_endereco varchar(80) not null,
    ds_cidade varchar(30) not null,
    no_cep char(9) not null
) 	default charset utf8;

insert db_usuario
values(default,'Matheus Felipe', 'mafe123silva@gmail.com', 'matheus525', '1', 'Br429 km90', 'São Francisco', '76935-000'); 

insert db_usuario
values(default,'Jaine Rodrigues', 'rodrigues@gmail.com', 'jaine525', '0', 'Br429 km93', 'São Francisco', '76935-000'); 

select * from db_usuario;


create user "Matheus"@"localhost" identified with mysql_native_password by"matheus525";
grant all privileges on db_talisma.* to "Matheus"@"localhost" with grant option;

