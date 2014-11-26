-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2014 at 08:42 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `encuestinn`
--
CREATE DATABASE IF NOT EXISTS `encuestinn` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `encuestinn`;

-- --------------------------------------------------------

--
-- Table structure for table `respuestas`
--

CREATE TABLE IF NOT EXISTS `respuestas` (
  `id_empresa` int(11) NOT NULL,
  `AP1` int(11) NOT NULL,
  `AP2` int(11) NOT NULL,
  `AP3` int(11) NOT NULL,
  `AP4` int(11) NOT NULL,
  `AP5` int(11) NOT NULL,
  `AP6` int(11) NOT NULL,
  `AP7` int(11) NOT NULL,
  `AP8` int(11) NOT NULL,
  `AP9` int(11) NOT NULL,
  `BP1` int(11) NOT NULL,
  `BP2` int(11) NOT NULL,
  `BP3` int(11) NOT NULL,
  `BP4` int(11) NOT NULL,
  `BP5` int(11) NOT NULL,
  `BP6` int(11) NOT NULL,
  `BP7` int(11) NOT NULL,
  `BP8` int(11) NOT NULL,
  `BP9` int(11) NOT NULL,
  `BP10` int(11) NOT NULL,
  `BP11` int(11) NOT NULL,
  `BP12` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `secciona`
--

CREATE TABLE IF NOT EXISTS `secciona` (
  `id_empresa` int(11) NOT NULL,
  `AP1` int(11) NOT NULL,
  `AP2` int(11) NOT NULL,
  `AP3` int(11) NOT NULL,
  `AP4` int(11) NOT NULL,
  `AP5` int(11) NOT NULL,
  `AP6` int(11) NOT NULL,
  `AP7` int(11) NOT NULL,
  `AP8` int(11) NOT NULL,
  `AP9` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seccionb`
--

CREATE TABLE IF NOT EXISTS `seccionb` (
  `id_empresa` int(11) NOT NULL,
  `BP1` int(11) NOT NULL,
  `BP2` int(11) NOT NULL,
  `BP3` int(11) NOT NULL,
  `BP4` int(11) NOT NULL,
  `BP5` int(11) NOT NULL,
  `BP6` int(11) NOT NULL,
  `BP7` int(11) NOT NULL,
  `BP8` int(11) NOT NULL,
  `BP9` int(11) NOT NULL,
  `BP10` int(11) NOT NULL,
  `BP11` int(11) NOT NULL,
  `BP12` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seccionc`
--

CREATE TABLE IF NOT EXISTS `seccionc` (
  `id_empresa` int(11) NOT NULL,
  `CP1` int(11) NOT NULL,
  `CP2` int(11) NOT NULL,
  `CP3` int(11) NOT NULL,
  `CP4` int(11) NOT NULL,
  `CP5` int(11) NOT NULL,
  `CP6` int(11) NOT NULL,
  `CP7` int(11) NOT NULL,
  `CP8` int(11) NOT NULL,
  `CP9` int(11) NOT NULL,
  `CP10` int(11) NOT NULL,
  `CP11` int(11) NOT NULL,
  `CP12` int(11) NOT NULL,
  `CP13` int(11) NOT NULL,
  `CP14` int(11) NOT NULL,
  `CP15` int(11) NOT NULL,
  `CP16` int(11) NOT NULL,
  `CP17` int(11) NOT NULL,
  `CP18` int(11) NOT NULL,
  `CP19` int(11) NOT NULL,
  `CP20` int(11) NOT NULL,
  `CP21` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `secciond`
--

CREATE TABLE IF NOT EXISTS `secciond` (
  `id_empresa` int(11) NOT NULL,
  `DP1` int(11) NOT NULL,
  `DP2` int(11) NOT NULL,
  `DP3` int(11) NOT NULL,
  `DP4` int(11) NOT NULL,
  `DP5` varchar(100) NOT NULL,
  `DP6` int(11) NOT NULL,
  `DP7` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(100) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `actPrincipal` varchar(60) NOT NULL,
  `subsector` varchar(11) NOT NULL,
  `nvlVentas` varchar(60) NOT NULL,
  `razonSocial` varchar(60) NOT NULL,
  `origenCapital` varchar(11) NOT NULL,
  `numEmpleados` varchar(60) NOT NULL,
  `tamano` varchar(60) NOT NULL,
  `fechaCreacion` varchar(60) NOT NULL,
  `puestoEncuestado` varchar(60) NOT NULL,
  `sexo` varchar(11) NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
