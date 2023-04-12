DROP TABLE IF EXISTS utilizador;

CREATE TABLE utilizador(
    id INT PRIMARY KEY AUTO_INCREMENT, 
    username VARCHAR(100),
    password VARCHAR(100)
);

INSERT INTO utilizador (username, password) VALUES ('admin','pass');
INSERT INTO utilizador (username, password) VALUES ('user','pass');
INSERT INTO utilizador (username, password) VALUES ('outro','pass');