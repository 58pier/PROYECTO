DROP TABLE IF EXISTS categorias;
CREATE TABLE categorias
(
  id              smallint unsigned NOT NULL auto_increment,
  nombre            varchar(255) NOT NULL,                      # Name of the category
  descripcion     text NOT NULL,                              # A short description of the category

  PRIMARY KEY     (id)
);