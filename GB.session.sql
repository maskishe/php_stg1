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
*/

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