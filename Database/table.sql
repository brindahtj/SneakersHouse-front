CREATE DATABASE SneakersHouse;

USE SneakersHouse;

CREATE TABLE users (
  id int NOT NULL AUTO_INCREMENT,
  nom varchar(255) NOT NULL,
  prenom varchar(255) NOT NULL,
  email varchar(255)  NOT NULL,
  avatar varchar(255)  NOT NULL,
  hashed_password varchar(255) NOT NULL,
  token varchar(255) NOT NULL,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP() NOT NULL,
  PRIMARY KEY (id)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE produits (
  id_produits int NOT NULL AUTO_INCREMENT,
  id_marques int DEFAULT NULL, 
  id_pointures int DEFAULT NULL, 
  id_genres int DEFAULT NULL, 
  titre varchar(255) NOT NULL,
  image varchar(255)  NOT NULL,
  description text  NOT NULL,
  prix float NOT NULL,
  prix_barre float NOT NULL,
  vedette boolean NOT NULL,
  new boolean NOT NULL,
  promo boolean NOT NULL,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP() NOT NULL,
  PRIMARY KEY (id_produits),
  FOREIGN KEY(id_marques) REFERENCES marques(id_marques),
  FOREIGN KEY(id_pointures) REFERENCES pointures(id_pointures),
  FOREIGN KEY(id_genres) REFERENCES genres(id_genres)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE marques (
  id_marques int NOT NULL AUTO_INCREMENT,
  marque varchar(255) NOT NULL,
  logo varchar(255) NOT NULL,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP() NOT NULL,
  PRIMARY KEY (id_marques)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE pointures (
  id_pointures int NOT NULL AUTO_INCREMENT,
  pointure int NOT NULL,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP() NOT NULL,
  PRIMARY KEY (id_pointures)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO pointures (pointure) VALUES(36),(37),(38),(39),(40),(41),(42),(43),(44),(45),(46)

CREATE TABLE genres (
  id_genres int NOT NULL AUTO_INCREMENT,
  libelle varchar(255) NOT NULL,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP() NOT NULL,
  PRIMARY KEY (id_genres)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE panier (
id_users INTEGER NOT NULL,
id_produits INTEGER NOT NULL,
FOREIGN KEY(id_users) REFERENCES users(id),
FOREIGN KEY(id_produits) REFERENCES produits(id));