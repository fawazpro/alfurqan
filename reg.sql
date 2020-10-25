-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `reg`;
CREATE TABLE `reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(220) NOT NULL,
  `lname` varchar(220) NOT NULL,
  `dob` date NOT NULL,
  `passport` text NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(6) NOT NULL,
  `doc` varchar(220) NOT NULL,
  `pfname` varchar(220) NOT NULL,
  `plname` varchar(220) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` tinytext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2020-10-25 20:08:59
