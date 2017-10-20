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


INSERT INTO Projets
values (2, 'Projet 2', "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.", FALSE, '2017-10-18 18:25:42', '2018-01-01');

INSERT INTO Projets
values (3, 'Projet 3', "Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?", FALSE, '2017-10-18 19:03:12', '2018-01-01');

INSERT INTO Projets
values (4, 'Projet 4', "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.", FALSE, '2017-10-18 20:55:00', '2018-01-01');

