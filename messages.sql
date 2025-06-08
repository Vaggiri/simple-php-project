CREATE TABLE `messages` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(100),
  `email` VARCHAR(100),
  `message` TEXT,
  `submitted_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `admin` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(50),
  `password` VARCHAR(255)
);

INSERT INTO admin (username, password) VALUES ('admin', MD5('1234'));