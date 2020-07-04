DROP TABLE IF EXISTS juegos;
CREATE TABLE juegos
(
    id              smallint unsigned NOT NULL auto_increment,
    nombre          varchar(255) NOT NULL,  
    fecha           date NOT NULL,
    idiomas         text NOT NULL,
    precio          smallint unsigned NOT NULL,
    desarrollador   varchar(255) NOT NULL, 
    plataforma      text NOT NULL,
    clasificacion   mediumtext NOT NULL,
    resumen         text NOT NULL,
    requerimientos  text NOT NULL,
    pagina_web      mediumtext NOT NULL,
    derechos_autor  text NOT NULL,
    trailer         text NOT NULL,
    descripcion     text NOT NULL,

    PRIMARY KEY     (id)
);