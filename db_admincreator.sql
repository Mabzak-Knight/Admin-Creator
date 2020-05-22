-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 01:33 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_admincreator`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_setting`
--

CREATE TABLE `basic_setting` (
  `website_name` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `database_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic_setting`
--

INSERT INTO `basic_setting` (`website_name`, `link`, `logo`, `database_name`) VALUES
('WebCreation', '', 'logo.png', 'db_admincreator');

-- --------------------------------------------------------

--
-- Table structure for table `control_nav`
--

CREATE TABLE `control_nav` (
  `id_nav` int(11) NOT NULL,
  `name_nav` varchar(100) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `name_tabel` varchar(100) NOT NULL,
  `count_tabel` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `control_nav`
--
ALTER TABLE `control_nav`
  ADD PRIMARY KEY (`id_nav`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `control_nav`
--
ALTER TABLE `control_nav`
  MODIFY `id_nav` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
