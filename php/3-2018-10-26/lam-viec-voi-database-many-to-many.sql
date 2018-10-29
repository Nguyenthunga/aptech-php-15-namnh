-- tao database aptech_php_15_ss4;
CREATE DATABASE aptech_php_15_ss4;

-- su dung database aptech_php_15_ss4 cho cac cau lenh phia duoi
USE aptech_php_15_ss4;

-- tao bang categories
CREATE TABLE categories
(id INT PRIMARY KEY AUTO_INCREMENT,
name varchar(50)
);

-- them du lieu vao bang categories
INSERT INTO categories (name)
VALUES
('kinh te'),
('hinh su'),
('phap luat');

-- xem bang categories
SELECT * FROM categories;

-- tao bang posts
CREATE TABLE posts
(id INT PRIMARY KEY AUTO_INCREMENT,
title varchar(50)
);

-- them du lieu vao bang posts
INSERT INTO posts (title)
VALUES 
('bai viet 1'),
('bai viet 2'),
('bai viet 3'),
('bai viet 4'),
('bai viet 5'),
('bai viet 6');

-- tao bang category_post
CREATE TABLE category_post
(id INT PRIMARY KEY AUTO_INCREMENT,
category_id INT,
post_id INT,
FOREIGN KEY (category_id) REFERENCES categories(id),
FOREIGN KEY (post_id) REFERENCES posts(id),
UNIQUE category_post_id (category_id,post_id)
);

-- xem bang category_post;
SELECT * FROM category_post;

-- them du lieu vao bang category_post
INSERT INTO category_post (category_id,post_id)
VALUES
(1,1),
(3,1),
(2,2),
(3,2),
(3,3),
(2,4),
(1,4),
(3,5),
(1,6),
(2,6),
(3,6);

-- lay ra category cua post co id = 6
SELECT B.name FROM category_post
JOIN
(SELECT id FROM posts WHERE id = 6) as A
JOIN
(SELECT * FROM categories) as B
ON category_post.post_id = A.id and B.id = category_post.category_id;
 


