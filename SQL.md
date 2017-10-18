mysql -u root -p

GRANT ALL PRIVILEGES ON projets.* TO 'projetsusers'@'localhost' IDENTIFIED BY 'monmotdepasse';

CREATE DATABASE projets CHARACTER SET 'utf8';

USE projets

CREATE TABLE Projets (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(80) NOT NULL,
    description TEXT NOT NULL ,
    etat BOOLEAN NOT NULL,
    dateCreation DATETIME NOT NULL,
    dateFin DATE NOT NULL,
    PRIMARY KEY (id)
)
ENGINE=INNODB;

INSERT INTO Projets
values (1, 'Projet 1', "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", TRUE, '2017-10-18 17:00:00', '2018-01-01');

