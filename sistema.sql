CREATE database sistema; create table if not exists datos ( id int not null primary key,
       nombre varchar (25),
       dirrecion varchar(25),
       telefono varchar(15) ) Engine=InnoDB default charset=latin1; 