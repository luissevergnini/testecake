CREATE DATABASE todolist;

USE todolist;

CREATE TABLE tasks (
    id INT NOT NULL AUTO_INCREMENT,
    description VARCHAR(50) NOT NULL,
    priority INT,
    status TINYINT(2) DEFAULT 0,                  /* 0 -> pendente; 1 -> em andamento; 2 -> concluída  */
    created DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

INSERT INTO tasks (description, priority, status) VALUES ("Tirar o pó da casa", 1, 1);
INSERT INTO tasks (description, priority, status) VALUES ("Levar o cachorro para passear", 2, 0);
INSERT INTO tasks (description, priority, status) VALUES ("Lavar a louça", 3, 0);