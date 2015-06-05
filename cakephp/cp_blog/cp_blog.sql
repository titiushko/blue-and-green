DROP DATABASE IF EXISTS cp_blog;
CREATE DATABASE IF NOT EXISTS cp_blog DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE cp_blog;

/* tabla para nuestros articulos */
CREATE TABLE posts(
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(50),
	body TEXT,
	created DATETIME DEFAULT NULL,
	modified DATETIME DEFAULT NULL
);

/* algunos valores de test */
INSERT INTO posts(title,body,created) VALUES('The title', 'This is the post body.', NOW());
INSERT INTO posts(title,body,created) VALUES('A title once again', 'And the post body follows.', NOW());
INSERT INTO posts(title,body,created) VALUES('Title strikes back', 'This is really exciting! Not.', NOW());
