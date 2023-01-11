-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 11:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `ID` int(3) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Details` varchar(200) NOT NULL,
  `Watts` varchar(10) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Budget` varchar(20) NOT NULL,
  `WattRange` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`ID`, `Name`, `Details`, `Watts`, `Price`, `Budget`, `WattRange`) VALUES
(1, 'Grid Tie', '3x Jinko 405 Watts mono panel <br>\n1x 1KW Sofar GTI Inverter with current limiter and Wi-Fi', '1.2 KW', 'P 62,000 - 66,000', 'P 0 - 100,000', '1.0 - 2.5 KW'),
(2, 'Grid Tie ', '5 X Canadian solar 450 watts mono panel <br>\n1 x 2 KW Sofar GTI Inverter with current limiter and Wi-fi', '2.2 KW', 'P 96,000 - 100,000', 'P 0 - 100,000', '1.0 - 2.5 KW'),
(3, 'Grid Tie', '7 X Canadian solar 450 watts mono <br>\n1 x 3 KW Sofar Mass Grid Tie Inverter w/ current limiter and Wi-fi', '3.1 KW', 'P 127,500 - 132,500', 'P 100,001 - 250,000', '2.6 - 6.0 KW'),
(4, 'Grid Tie', '9 X Canadian solar 450 watts mono <br>\n1 x 4 KW Sofar Mass Grid Tie Inverter w/ current limiter and Wi-fi', '4.0 KW ', 'P 162,500 - 169,500', 'P 100,001 - 250,000', '2.6 - 6.0 KW'),
(5, 'Grid Tie', '10 X Jinko 545 watts mono <br>\n5 KW Sofar Mass Grid Tie Inverter w/ current limiter and Wi-Fi\n', '5.4 KW ', 'P 192,000 - 198,500', 'P 100,001 - 250,000', '2.6 - 6.0 KW'),
(7, 'Grid Tie', '11 X Jinko 545 watts mono <br>\n1 x 6 KW Sofar Mass Grid Tie Inverter w/ current limiter and Wi-Fi\n', '6.0 KW', 'P 210,000 - 223,000', 'P 100,001 - 250,000', '2.6 - 6.0 KW'),
(8, 'Grid Tie', '13 x Jinko 545 watts mono panel <br>\n1 x 8 KW Solax Smart GTI with current limiter\n', '7.0 KW', 'P248,000 - 257,000', 'P 100,001 - 250,000', '6.1 KW or Higher'),
(9, 'Grid Tie', '15 X Jinko 545 watts mono <br>\n1 x 10 KW Sofar Mass Grid Tie Inverter w/ current limiter and Wi-Fi ', '8.1 KW', 'P 300,000 - 312,500', 'P 250,001 or Higher', '6.1 KW or Higher'),
(10, 'Grid Tie', '19 X Jinko 545 watts mono <br>\n1 x 10 KW Sofar Mass Grid Tie Inverter w/ current limiter and Wi-Fi\n', '10.3 KW', 'P360,000 - 375,000', 'P 250,001 or Higher', '6.1 KW or Higher'),
(11, 'Grid Tie', '28 x Jinko 545 watts mono panel <br>\n1 x 10 KW Sofar Mass GTI Inverter with current limiter and Wi-fi', '15.2 KW', 'P530,000 - 552,000', 'P 250,001 or Higher', '6.1 KW or Higher'),
(12, 'Hybrid Grid Tie', '6 X Jinko 545 watts mono <br>\n3 KW Deye Hybrid Grid Tie Inverter w/ current limiter and Wi-Fi\n', '3.2 KW', 'P 222,500 - 230,500', 'P 100,001 - 250,000', '2.6 - 6.0 KW'),
(13, 'Hybrid Grid Tie', '10 X Jinko 545 watts mono <br>\n1 x 5 KW Deye Hybrid Grid Tie Inverter w/ current limiter and Wi-Fi <br>\nBlue Carbon 10 KW/HR. Lithium Ion Phosphate battery ', '5.4 KW ', 'P 320,500 - 330,500', 'P 250,001 or Higher', '2.6 - 6.0 KW'),
(14, 'Hybrid Grid Tie', '15 X Jinko 545 watts mono <br>\r\n1 x 8 KW Deye Hybrid Grid Tie Inverter w/ current limiter and Wi-Fi <br>\r\nBlue Carbon 10 KW/HR. Lithium Ion Phosphate battery', '8.1 KW', 'P 430,500 - 445,000', 'P 250,001 or Higher', '6.1 KW or Higher'),
(15, 'Hybrid Grid Tie', '19 x Jinko 545 watts mono panel <br>\n1 x 8 KW Deye Hybrid Grid Tie inverter w/ current limiter and Wi-fi <br>\nBlue Carbon 10 KW/HR. Lithium Ion Phosphate battery', '10.3 KW', 'P490,500 - 500,500', 'P 250,001 or Higher', '6.1 KW or Higher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
