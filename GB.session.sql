/*
CREATE TABLE Images 
(
    id          integer not null AUTO_INCREMENT,
    URL  VARCHAR(64) not null,
    name   VARCHAR(64) not null,
    size         INTEGER(5),
    primary key (id)
) CHARACTER SET utf8;


alter TABLE Images
add count INTEGER(5);


UPDATE Images
SET count = '0'
WHERE id = 3;


-- INSERT INTO Images (URL, name, size)
-- VALUES (
--     'http://gb.loc:8888/php_stg1/images/img_mountains.jpeg',
--     'img_mountains.jpeg',
--     24
--   ), 
--   (
--     'http://gb.loc:8888/php_stg1/images/img_nature.jpeg',
--     'img_nature.jpeg',
--     24
--   ),
--     (
--     'http://gb.loc:8888/php_stg1/images/img_snow.jpeg',
--     'img_snow.jpeg',
--     24
--   );

-- select URL from images where id =2

CREATE TABLE `user` (
	`id_user` INT(11) NOT NULL AUTO_INCREMENT,
	`first_name` VARCHAR(50),
    `last_name` VARCHAR(50),
	`email` VARCHAR(50) NOT NULL,
	`password` VARCHAR(60) NOT NULL,
	`last_action` TIMESTAMP,
	PRIMARY KEY (`id_user`)
)
ENGINE=InnoDB;
*/

--insert into user set email='maskishe@gmail.com', password='$2y$10$iduVhBVHYtF8pKSBo0JKHODoVqmpYm13J8n/moZS2G.bvsxujjUbC', first_name='', last_name='';
