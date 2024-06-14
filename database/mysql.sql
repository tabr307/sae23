CREATE TABLE batiment (
    id_batiment INTEGER PRIMARY KEY AUTO_INCREMENT,
    nom_batiment VARCHAR(50) UNIQUE,
    pseudo VARCHAR(20) UNIQUE,
    mdp VARCHAR(50)
);

CREATE TABLE salle (
    id_salle INTEGER PRIMARY KEY AUTO_INCREMENT,
    nom_salle VARCHAR(50) UNIQUE,
    id_batiment INTEGER,
    FOREIGN KEY (id_batiment) REFERENCES batiment(id_batiment)
);

CREATE TABLE capteur (
    id_capteur INTEGER PRIMARY KEY AUTO_INCREMENT,
    nom_capteur VARCHAR(100) UNIQUE,
    id_salle INTEGER,
    FOREIGN KEY (id_salle) REFERENCES salle(id_salle)
);

CREATE TABLE mesures (
    id_mesure INTEGER PRIMARY KEY AUTO_INCREMENT,
    unite VARCHAR(50),
    valeur FLOAT,
    heure TIME,            -- We can add this option to lighten the python code on newer versions of mysql -> DEFAULT CURRENT_TIME
    date DATE,             -- We can add this option to lighten the python code on newer versions of mysql -> DEFAULT CURRENT_DATE
    id_capteur INTEGER,
    FOREIGN KEY (id_capteur) REFERENCES capteur(id_capteur)
);

CREATE TABLE administration (
    login VARCHAR(20) PRIMARY KEY,
    mdp VARCHAR(50)
);