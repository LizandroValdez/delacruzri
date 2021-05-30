CREATE DATABASE `login`
use login
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