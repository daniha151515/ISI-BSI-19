-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 04:00 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `aumentarValorCustom` (IN `nombreEditorial` VARCHAR(20), IN `valorAumento` DECIMAL(13,2))  MODIFIES SQL DATA
IF (valorAumento = 0 OR valorAumento IS NULL) AND (nombreEditorial = '' OR nombreEditorial IS NULL) THEN

UPDATE libreria SET precio = precio + (precio * 0.10);
    
ELSEIF (valorAumento = 0 OR valorAumento IS NULL) AND (nombreEditorial != '' OR nombreEditorial IS NOT NULL) THEN

UPDATE libreria SET precio = precio + (precio * 0.10) WHERE editorial = nombreEditorial;

ELSE

UPDATE libreria SET precio = precio + (precio * valorAumento) WHERE editorial = nombreEditorial;

END IF$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `libreria`
--

CREATE TABLE `libreria` (
  `titulo` varchar(40) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `editorial` varchar(20) NOT NULL,
  `precio` decimal(13,2) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `libreria`
--

INSERT INTO `libreria` (`titulo`, `autor`, `editorial`, `precio`, `id`) VALUES
('Mamita Yunai', 'Carlos Luis Fallas', 'Editorial Costa Rica', '3631.21', 1),
('DrÃ¡cula', 'Bram Stoker', 'Constable & Robinson', '3630.00', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `libreria`
--
ALTER TABLE `libreria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `libreria`
--
ALTER TABLE `libreria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
