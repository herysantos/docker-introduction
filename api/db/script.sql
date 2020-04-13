CREATE DATABASE IF NOT EXISTS docker_introduction;

USE docker_introduction;

CREATE TABLE IF NOT EXISTS products(
    id INT(11) AUTO_INCREMENT,
    name VARCHAR(255),
    price DECIMAL(10, 2),
    PRIMARY KEY(id)
);

INSERT INTO products VALUE (0, 'Curso Front-End', 2500);
INSERT INTO products VALUE (0, 'Curso Js FullStack', 900);
INSERT INTO products VALUE (0, 'Curso de Introducao Docker', 1400);