CREATE DATABASE `crud`
use crud
CREATE TABLE usuario (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `appaterno` varchar(25) NOT NULL,
  `apmaterno` varchar(25) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) 
) 
insert into usuario(nombre,appaterno,apmaterno,usuario,password) 
values ("Antonio", "De la cruz", "Rivera", "antonio", "$2y$10$B/vWXiGN74e0o95R7dG.ZO.Fa6TYqh12Ka8I0087aoxKxtdHF1Fsm")

CREATE TABLE producto (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `prec_compra` decimal(15,2) NOT NULL,
  `prec_venta` decimal(15,2) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `proveedor` varchar(25) NOT NULL,
  PRIMARY KEY (`id_producto`) 
) 

insert into producto (nombre,prec_compra,prec_venta,categoria,proveedor)
values ("Papas fritas", 10,15,"Botanas", "Sabritas"),
("Papas fritas", 11,16,"Botanas", "Ruffles"),
("Refresco", 7,12,"Bebidas", "Coca Cola"),
("Refresco", 6,11,"Bebidas", "Pepsi"),
("Leche entera", 16,21,"Lacteos", "Lala"),
("Crema", 9,14,"Lacteos", "Lala"),
("Queso", 40,49,"Lacteos", "La Villita"),
("Tortillas de harina", 11,16,"Harina", "Tia Rosa");
