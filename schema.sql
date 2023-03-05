DROP DATABASE IF EXISTS `flowers_bouquet`;
CREATE DATABASE `flowers_bouquet`;
USE `flowers_bouquet`;


CREATE TABLE flowers (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    discount FLOAT NOT NULL,
    rating FLOAT NOT NULL,
    picture VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);
