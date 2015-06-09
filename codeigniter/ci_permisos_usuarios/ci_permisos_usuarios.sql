DROP DATABASE IF EXISTS ci_permisos_usuarios;
CREATE DATABASE IF NOT EXISTS ci_permisos_usuarios DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE ci_permisos_usuarios;

DROP TABLE IF EXISTS personas;
CREATE TABLE IF NOT EXISTS users (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  perfil VARCHAR(30) NOT NULL COLLATE utf8_spanish_ci,
  username VARCHAR(100) NOT NULL COLLATE utf8_spanish_ci,
  password VARCHAR(100) NOT NULL COLLATE utf8_spanish_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- ============================================================================================================================================================

INSERT INTO users (id, perfil, username, password) VALUES
(1, 'administrador', 'israel965', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(2, 'editor', 'vanessa78', 'ab41949825606da179db7c89ddcedcc167b64847'),
(3, 'suscriptor', 'jaime70', '1a248d7a471ad8d5993aa523c8397ce1d0bafe78');
