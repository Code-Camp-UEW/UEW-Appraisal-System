CREATE DATABASE `uew`;

USE `uew`;

CREATE TABLE `dblogin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `utype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `dblogin` (`username`, `password`, `utype`) VALUES
('admin', 'admin', 'admin'),
('admin', '1234', 'student');
COMMIT;
