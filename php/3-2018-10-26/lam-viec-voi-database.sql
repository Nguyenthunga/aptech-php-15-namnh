-- xoa neu ton tai database aptech_php_15_ss3
DROP DATABASE IF EXISTS aptech_php_15_ss3;

-- tao moi database aptech_php_15_ss3
CREATE DATABASE aptech_php_15_ss3;

-- su dung database aptech_php_15_ss3 cho nhung cau lenh tiep theo
USE aptech_php_15_ss3;

-- tao moi table users
CREATE TABLE users (
id INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(255),
email VARCHAR(255),
password VARCHAR(255)
);

-- them 3 du lieu vao bang users
INSERT INTO users (name,email,password)
VALUES 
('Nam','nam@autointegrity.com.au','123456'),
('Coi','coi@gmail.com','secret'),
('Bruce','bruce@abc.com','flight');

-- xem 3 du lieu cua bang users
SELECT * FROM users;

-- xem user co email la nam@autointegrity.com.au
SELECT * FROM users WHERE email = 'nam@autointegrity.com.au';

-- tao bang categories
CREATE TABLE categories (
id INT PRIMARY KEY AUTO_INCREMENT,
name varchar(50)
);

-- tao bang posts
CREATE TABLE posts (
id INT PRIMARY KEY AUTO_INCREMENT,
title varchar(255),
category_id INT,
FOREIGN KEY (category_id) REFERENCES categories(id)
);

-- them 3 du lieu vao categories
INSERT INTO categories (name)
VALUES
('thoi su'),
('kinh te'),
('the gioi');

-- xem tat ca du lieu cua categories
SELECT * FROM categories;


-- them 10 du lieu vao posts
INSERT INTO posts (title,category_id)
VALUES 
('bai viet 1',3),
('bai viet 2',1),
('bai viet 3',3),
('bai viet 4',2),
('bai viet 5',3),
('bai viet 6',1),
('bai viet 7',1),
('bai viet 8',2),
('bai viet 9',2),
('bai viet 10',1);

-- xem tat ca bai viet
SELECT * FROM posts;

-- xem tat ca bai viet co category_id = 1
SELECT posts.id, posts.title,
posts.category_id, categories.name
FROM posts, categories
WHERE posts.category_id = 1
AND categories.id = 1;

-- sua category co id = 1 thanh tai chinh
UPDATE categories
SET name = 'tai chinh'
WHERE id = 1;

-- xem bai viet co id = 5 va ten category cua no
SELECT posts.id, posts.title,
categories.name
FROM posts, categories
WHERE posts.id = 5
AND posts.category_id = categories.id;

-- lay du lieu 1-n theo inner join
SELECT A.id, A.title, categories.name FROM categories
INNER JOIN
(SELECT * FROM posts WHERE id = 5) as A
ON categories.id = A.category_id;




