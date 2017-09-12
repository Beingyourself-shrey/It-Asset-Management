-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 12, 2017 at 08:09 PM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id765132_shrey`
--

-- --------------------------------------------------------

--
-- Table structure for table `itm`
--

CREATE TABLE `itm` (
  `s.no` int(200) NOT NULL,
  `user's workplace` varchar(51) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(51) COLLATE utf8_unicode_ci NOT NULL,
  `floor` varchar(51) COLLATE utf8_unicode_ci NOT NULL,
  `user name` varchar(51) COLLATE utf8_unicode_ci NOT NULL,
  `host name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `desktop` varchar(51) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(51) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(51) COLLATE utf8_unicode_ci NOT NULL,
  `serial no` varchar(51) COLLATE utf8_unicode_ci NOT NULL,
  `cpu` varchar(51) COLLATE utf8_unicode_ci NOT NULL,
  `cpu speed` varchar(51) COLLATE utf8_unicode_ci NOT NULL,
  `hdd` varchar(51) COLLATE utf8_unicode_ci NOT NULL,
  `ram` varchar(51) COLLATE utf8_unicode_ci NOT NULL,
  `cd rom` varchar(51) COLLATE utf8_unicode_ci NOT NULL,
  `cdwriter` varchar(51) COLLATE utf8_unicode_ci NOT NULL,
  `make` varchar(51) COLLATE utf8_unicode_ci NOT NULL,
  `sr.no` varchar(51) COLLATE utf8_unicode_ci NOT NULL,
  `software's loaded` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `installation date` date NOT NULL,
  `validated` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `instrument connected` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `po#` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gatepass` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `itm`
--

INSERT INTO `itm` (`s.no`, `user's workplace`, `department`, `floor`, `user name`, `host name`, `desktop`, `type`, `model`, `serial no`, `cpu`, `cpu speed`, `hdd`, `ram`, `cd rom`, `cdwriter`, `make`, `sr.no`, `software's loaded`, `installation date`, `validated`, `instrument connected`, `po#`, `gatepass`) VALUES
(7, 'yug', 'nd', 'Ground Floor', 'shrey', 'shrey', 'LAPTOP', 'mono', '111', '123', 'shrey', 'nd', 'nd', '78', 'Yes', 'Yes', 'd', 'd', 'd', '0000-00-00', 'Yes', 'd', 'd', 'd'),
(8, ' jg', 's', 'Second Floor', 's', 'sg', 'LAPTOP', 's', 's', 's', 's', 's', 's', 'ss', 'Yes', 'Yes', 's', 's', 'ss', '0000-00-00', 'Yes', 's', 's', 's'),
(9, 'Spil', 'Information Technology', 'Ground Floor', 'pradeep rajput', 'PSR', 'DESKTOP', '12', 'dell optimax', '12NMJ12', 'lenovo k3', '123.7ghz', '5000', '20000', 'Yes', 'Yes', 'sony', '124566099', 'os', '0000-00-00', 'Yes', 'yes', 'sh12215454', 'yes'),
(10, 'h', 'h', 'Ground Floor', 'shrey', 'h', 'LAPTOP', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'Yes', 'Yes', 'h', 'h', 'h', '0000-00-00', 'Yes', 'h', 'h', 'h'),
(11, 'Hsh', 'Bshs', 'Ground Floor', 's', 's', 'LAPTOP', 'Bsb', 'Shbbbsb', 'Hshhhsshsh', 'Hsbsb', 'Sbsbs', 'Hshs', 'Hshs', 'No', 'No', 'Bbsb', 'Hssh', 'Bsbs', '2017-07-20', 'No', 'Bb', 'Bsbs', 'Hshs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itm`
--
ALTER TABLE `itm`
  ADD PRIMARY KEY (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itm`
--
ALTER TABLE `itm`
  MODIFY `s.no` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
