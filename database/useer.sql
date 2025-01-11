CREATE TABLE `useer` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `useer` (`username`, `PASSWORD`, `email`) VALUES ('testuser', 'testpassword', 'test@example.com');

SELECT * FROM `useer`;