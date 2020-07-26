DROP TABLE IF EXISTS categories;
CREATE TABLE categories
(
  id              smallint unsigned NOT NULL auto_increment,
  name            varchar(255) NOT NULL,                      # Name of the category
  description     text NOT NULL,                              # A short description of the category

  PRIMARY KEY     (id)
);