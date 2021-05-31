-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Loomise aeg: Mai 11, 2021 kell 01:38 PL
-- Serveri versioon: 10.4.18-MariaDB
-- PHP versioon: 7.4.16

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `kpr`
--
CREATE DATABASE IF NOT EXISTS `kpr` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kpr`;

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `providers`
--

DROP TABLE IF EXISTS `providers`;
CREATE TABLE IF NOT EXISTS `providers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(244) NOT NULL,
  `email` varchar(244) NOT NULL,
  `phone_number` int(10) UNSIGNED NOT NULL,
  `speciality` varchar(244) NOT NULL,
  `location` text DEFAULT NULL,
  `comment` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `location` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Loomise aeg: Mai 25, 2021 kell 09:14 EL
-- Serveri versioon: 10.4.18-MariaDB
-- PHP versioon: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Andmebaas: `kpr`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `contracts`
--

DROP TABLE IF EXISTS `contracts`;
CREATE TABLE IF NOT EXISTS `contracts` (
    `contract_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `provider_id` int(10) UNSIGNED NOT NULL,
    `customer_phone` varchar(14) NOT NULL,
    `customer_email` varchar(255) NOT NULL,
    `Task` varchar(255) NOT NULL,
    `Money` decimal(15,2) NOT NULL,
    `Location` varchar(255) NOT NULL,
    `customer_name` varchar(255) NOT NULL,
    PRIMARY KEY (`contract_id`),
    KEY `provider_id` (`provider_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- TABELI SEOSED `contracts`:
--   `provider_id`
--       `providers` -> `id`
--

--
-- Tõmmistatud tabelite piirangud
--

--
-- Piirangud tabelile `contracts`
--
ALTER TABLE `contracts`
    ADD CONSTRAINT `contracts_ibfk_1` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`);
COMMIT;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Loomise aeg: Mai 31, 2021 kell 08:10 EL
-- Serveri versioon: 10.4.18-MariaDB
-- PHP versioon: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `kpr`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
    `provider_id` int(10) UNSIGNED NOT NULL,
    `customer_phone` int(14) NOT NULL,
    `customer_email` varchar(255) NOT NULL,
    `task` varchar(255) NOT NULL,
    `money` decimal(15,2) NOT NULL,
    `location` varchar(255) NOT NULL,
    `customer_name` varchar(255) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

/* Trigger andmete contractist logi saamiseks:*/

INSERT INTO log VALUES (old.provider_id, old.customer_phone, old.customer_email, old.task, old.money, old.location, old.customer_name)