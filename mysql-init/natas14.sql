CREATE DATABASE `natas14`;
GRANT SELECT ON `natas14`.* TO `natas14` IDENTIFIED BY "natas14";

USE `natas14`;

CREATE TABLE `users` (
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
);

INSERT INTO `users` (`username`, `password`)
VALUES ("user", "6b4189f32a217035f1f7a92d2b1b0b86");
