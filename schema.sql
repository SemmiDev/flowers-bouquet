DROP DATABASE IF EXISTS `flowers_bouquet`;
CREATE DATABASE `flowers_bouquet`;
USE `flowers_bouquet`;

CREATE TABLE orders (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL DEFAULT 'anoymous',
    paymentMethod VARCHAR(255) NOT NULL,
    total VARCHAR(255) NOT NULL,
    data JSON NOT NULL
);
