<?php

Create a PHP script that connects two or more tables using INNER
JOIN, LEFT JOIN, and RIGHT JOIN. Display data from these tables based on
specific conditions. 

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    product VARCHAR(255) NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

/*Sample Data*/
INSERT INTO users (name, email) VALUES ('Alice', 'alice@example.com'), ('Bob', 'bob@example.com'), ('Charlie', 'charlie@example.com');
INSERT INTO orders (user_id, product, amount) VALUES (1, 'Laptop', 999.99), (2, 'Tablet', 299.99), (3, 'Smartphone', 499.99), (1, 'Monitor', 199.99);

/*INNER JOIN: Users with Orders*/
SELECT users.name, orders.product, orders.amount FROM users INNER JOIN orders ON users.id = orders.user_id;

/*LEFT JOIN: All Users with Orders if Available*/
SELECT users.name, orders.product, orders.amount FROM users LEFT JOIN orders ON users.id = orders.user_id

/*RIGHT JOIN: All Orders with Users if Available */
SELECT users.name, orders.product, orders.amount FROM users RIGHT JOIN orders ON users.id = orders.user_id;


?>