CREATE TABLE customers (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
  age INT NOT NULL,
  email VARCHAR(50) NOT NULL,
  address VARCHAR(100) NOT NULL,
  user_id INT NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO customers (name, age, email, address, user_id) VALUES
('John Doe', 32, 'john.doe@example.com', '123 Main St, Anytown USA',1),
('Jane Smith', 27, 'jane.smith@example.com', '456 Oak St, Somewhere USA',1),
('Bob Johnson', 45, 'bob.johnson@example.com', '789 Maple St, Nowhere USA',1);