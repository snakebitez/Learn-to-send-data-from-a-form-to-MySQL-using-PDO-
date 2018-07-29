<?php

START TRANSACTION;
SET time_zone = "+10:00";

DROP TABLE IF EXISTS `tablename`;
CREATE TABLE IF NOT EXISTS `tablename` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(35) NOT NULL,
  `lastname` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usrtel` varchar(16) NOT NULL,
  `country_code` varchar(3) NOT NULL,
  `homepage` varchar(50) NOT NULL,
  `address` varchar(35) NOT NULL,
  `street` varchar(35) NOT NULL,
  `city` varchar(35) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `myFile` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `gender` varchar(1) NOT NULL,
  `vehicle1` varchar(5) NOT NULL,
  `vehicle2` varchar(5) NOT NULL,
  `favcolour` varchar(12) NOT NULL,
  `bday` date NOT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `daytime` datetime NOT NULL,
  `usr_time` time NOT NULL,
  `week_year` date NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `points` smallint(6) NOT NULL,
  `points1` smallint(6) NOT NULL,
  `a` smallint(6) NOT NULL,
  `b` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

?>
