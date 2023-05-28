CREATE TABLE products (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    description VARCHAR(255) NOT NULL,
    price INT(10) NOT NULL
);

INSERT INTO `products` (`id`, `title`, `description`, `price`) 
VALUES (NULL, 'samsung', 'มือถือ android', '1000'), 
(NULL, 'apple', 'มือถือ IOS', '200');
