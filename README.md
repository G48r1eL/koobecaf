# Koobecaf
Projet pour tester de nouvelles fonctionnalités

Utilisation de : 
* PDO et MYSQL 
* HTML CSS 
* Jquery pour faire une requête AJAX et utiliser post.php directement
* PHP 

Base de donnée :

```SQL
CREATE DATABASE IF NOT EXISTS `koobecaf` DEFAULT CHARSET=latin1 COLLATE latin1_swedish_ci;
CREATE TABLE `koobecaf`.`users` (
  `ID` int(11) NOT NULL,
  `mail` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `ip` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
ALTER TABLE `koobecaf`.`users` ADD PRIMARY KEY (`ID`);
ALTER TABLE `koobecaf`.`users` MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
```

[Aperçu](http://koobecaf.free.fr)
