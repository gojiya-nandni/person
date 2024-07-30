DROP DATABASE IF EXISTS `person`;
CREATE DATABASE `person`;
USE `person`;

CREATE TABLE  `person_detail`(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    age INT,
    addr VARCHAR(100),
    mobile INT, 
    gender VARCHAR(100)
);