DROP TABLE IF EXISTS digitalkey;
CREATE TABLE digitalkey
(
    idjuego              smallint unsigned NOT NULL ,
    digitalkey      varchar (255) NOT NULL,

    PRIMARY KEY (digitalkey)
);