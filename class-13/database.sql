-- user query 

INSERT INTO user (username, age, phone, address) values ('nurul', '30', 0124579610, 'Kushtia Bangladesh');
UPDATE user SET username ='nurul123' WHERE id = 1;
DELETE FROM user WHERE id = 1;

-- commernts query 

INSERT INTO `comments`( `comment`, `post_id`) VALUES ('nice', 1)
UPDATE `comments` SET `comment`='[value-3]' WHERE id = 1;
DELETE FROM `comments` WHERE id = 1;