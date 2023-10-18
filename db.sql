CREATE DATABASE friends;

CREATE TABLE Utilisateur (
    ID INT PRIMARY KEY,
    Password VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
);


CREATE TABLE Status (
    ID INT PRIMARY KEY,
    NomStatus VARCHAR(50) NOT NULL
);

CREATE TABLE DemandeAmitie (
    ID INT PRIMARY KEY,
    UtilisateurDemandeurID INT,
    UtilisateurDestinataireID INT,
    StatutID INT NOT NULL,
    FOREIGN KEY (UtilisateurDemandeurID) REFERENCES Utilisateur(ID),
    FOREIGN KEY (UtilisateurDestinataireID) REFERENCES Utilisateur(ID),
    FOREIGN KEY (StatutID) REFERENCES Status(ID)
);

INSERT INTO Status (ID, NomStatus) VALUES (1, 'En attente');
INSERT INTO Status (ID, NomStatus) VALUES (2, 'Acceptée');
INSERT INTO Status (ID, NomStatus) VALUES (3, 'Refusée');