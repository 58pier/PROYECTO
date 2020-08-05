DROP TABLE IF EXISTS boletas;
CREATE TABLE boletas
(
  id              smallint unsigned NOT NULL auto_increment,
  nombres         varchar(255) NOT NULL,                      
  apellidos       varchar(255) NOT NULL, 
  direccion       varchar(255) NOT NULL,                              
  dni             varchar(255) NOT NULL, 
  correo          varchar(255) NOT NULL, 
  juego           varchar(255) NOT NULL, 
  importe         smallint unsigned NOT NULL,
  fecha           DATETIME NOT NULL,
  
  PRIMARY KEY     (id)
);