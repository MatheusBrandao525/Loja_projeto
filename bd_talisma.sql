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
values(default,'Design'),
(default, 'Infraestrutura'),
(default, 'Dados'),
(default, 'Front-end'),
(default, 'Mobile');


insert into tbl_vendedor
values(default,'Talismã'),		-- codigo 1
(default, 'Talismã'),					-- codigo 2	
(default, 'Talismã'),					-- codigo 3
(default, 'Talismã'),				-- codigo 4
(default, 'Talismã'),				-- codigo 5
(default, 'Talismã'),				-- codigo 6
(default, 'Talismã'),					-- codigo 7
(default, 'Talismã'),			-- codigo 8
(default, 'Talismã'),					-- codigo 9
(default, 'Talismã'),				    -- codigo 10
(default, 'Talismã'),				    -- codigo 11
(default, 'Talismã'),		-- codigo 12
(default, 'Talismã'),				-- codigo 13
(default, 'Talismã'),				    -- codigo 14
(default, 'Talismã'),		-- codigo 15
(default, 'Talismã'),				    -- codigo 16
(default, 'Talismã'),			    -- codigo 17
(default, 'Talismã');				    -- codigo 18

create user 'Matheus'@'localhost' identified WITH mysql_native_passwword by 'brandao1010';
grant all privileges on Matheus.* to 'Matheus'@'localhost' with grant option;