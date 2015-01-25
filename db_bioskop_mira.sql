-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 25, 2015 at 02:51 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rating` decimal(2,1) NOT NULL,
  `synopsis` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trailer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `title`, `rating`, `synopsis`, `start`, `end`, `image`, `trailer`) VALUES
(1, 'The Imitation Games', 5.0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2014-12-25', '2015-02-12', '0001.jpg', ''),
(2, 'Annie', 3.0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2014-12-30', '2015-02-11', '0002.jpg', ''),
(3, 'Penguins of Madagaskar', 3.5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2015-01-04', '2015-02-28', '0003.jpg', ''),
(4, 'Two Night Stands', 2.8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2015-02-14', '2015-02-28', '0004.jpg', ''),
(5, 'Inside Out', 4.8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2015-01-10', '2015-02-20', '0005.jpg', ''),
(6, 'Big Hero 6', 4.8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2014-11-30', '2015-01-30', '0006.jpg', ''),
(7, 'Unbroken', 0.0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2015-02-15', '2015-03-14', '0007.jpg', ''),
(8, 'The Hunger Games : Mockingjay Part 1', 4.5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2014-11-30', '2015-01-31', '0008.jpg', ''),
(9, 'Paddington', 0.0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2015-01-30', '2015-03-05', '0009.jpg', ''),
(10, 'Kumiko, The Treasure Hunter', 0.0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2015-03-02', '2015-04-10', '0010.jpg', ''),
(11, 'Still Alice', 0.0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2015-03-05', '2015-04-04', '0011.jpg', ''),
(12, 'Spare Parts', 0.0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2015-04-10', '2015-05-05', '0012.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE IF NOT EXISTS `seat` (
  `id_seat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_studio` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `no_kursi` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_seat`),
  KEY `IDX_9D6E9958C8199A01` (`nama_studio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=184 ;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id_seat`, `nama_studio`, `no_kursi`) VALUES
(1, 'Velvet', '1A'),
(2, 'Velvet', '2A'),
(3, 'Velvet', '3A'),
(4, 'Velvet', '4A'),
(5, 'Velvet', '5A'),
(6, 'Velvet', '6A'),
(7, 'Velvet', '7A'),
(8, 'Velvet', '8A'),
(9, 'Velvet', '9A'),
(10, 'Velvet', '10A'),
(11, 'Velvet', '11A'),
(12, 'Velvet', '12B'),
(13, 'Velvet', '13B'),
(14, 'Velvet', '14B'),
(15, 'Velvet', '15B'),
(16, 'Velvet', '16B'),
(17, 'Velvet', '17B'),
(18, 'Velvet', '18B'),
(19, 'Velvet', '19B'),
(20, 'Velvet', '20C'),
(21, 'Velvet', '21C'),
(22, 'Velvet', '22C'),
(23, 'Velvet', '23C'),
(24, 'Velvet', '24C'),
(25, 'Velvet', '25C'),
(26, 'Velvet', '26C'),
(27, 'Velvet', '27C'),
(28, 'Velvet', '28D'),
(29, 'Velvet', '29D'),
(30, 'Velvet', '30D'),
(31, 'Velvet', '31D'),
(32, 'Velvet', '32D'),
(33, 'Velvet', '33D'),
(34, 'Velvet', '34D'),
(35, 'Velvet', '35D'),
(36, 'Velvet', '36E'),
(37, 'Velvet', '37E'),
(38, 'Velvet', '38E'),
(39, 'Velvet', '39E'),
(40, 'Velvet', '40E'),
(41, 'Velvet', '41E'),
(42, 'Velvet', '42E'),
(43, 'Velvet', '43E'),
(44, 'Velvet', '44F'),
(45, 'Velvet', '45F'),
(46, 'Velvet', '46F'),
(47, 'Velvet', '47F'),
(48, 'Velvet', '48F'),
(49, 'Velvet', '49F'),
(50, 'Velvet', '50F'),
(51, 'Velvet', '51F'),
(52, 'Velvet', '52F'),
(53, 'Rose', '1A'),
(54, 'Rose', '2A'),
(55, 'Rose', '3A'),
(56, 'Rose', '4A'),
(57, 'Rose', '5A'),
(58, 'Rose', '6A'),
(59, 'Rose', '7A'),
(60, 'Rose', '8A'),
(61, 'Rose', '9A'),
(62, 'Rose', '10A'),
(63, 'Rose', '11A'),
(64, 'Rose', '12B'),
(65, 'Rose', '13B'),
(66, 'Rose', '14B'),
(67, 'Rose', '15B'),
(68, 'Rose', '16B'),
(69, 'Rose', '17B'),
(70, 'Rose', '18B'),
(71, 'Rose', '19B'),
(72, 'Rose', '20C'),
(73, 'Rose', '21C'),
(74, 'Rose', '22C'),
(75, 'Rose', '23C'),
(76, 'Rose', '24C'),
(77, 'Rose', '25C'),
(78, 'Rose', '26C'),
(79, 'Rose', '27C'),
(80, 'Rose', '28D'),
(81, 'Rose', '29D'),
(82, 'Rose', '30D'),
(83, 'Rose', '31D'),
(84, 'Rose', '32D'),
(85, 'Rose', '33D'),
(86, 'Rose', '34D'),
(87, 'Rose', '35D'),
(88, 'Rose', '36E'),
(89, 'Rose', '37E'),
(90, 'Rose', '38E'),
(91, 'Rose', '39E'),
(92, 'Rose', '40E'),
(93, 'Rose', '41E'),
(94, 'Rose', '42E'),
(95, 'Rose', '43E'),
(96, 'Rose', '44F'),
(97, 'Rose', '45F'),
(98, 'Rose', '46F'),
(99, 'Rose', '47F'),
(100, 'Rose', '48F'),
(101, 'Rose', '49F'),
(102, 'Rose', '50F'),
(103, 'Rose', '51F'),
(104, 'Rose', '52F'),
(105, 'Minimalist', '1A'),
(106, 'Minimalist', '2A'),
(107, 'Minimalist', '3A'),
(108, 'Minimalist', '4A'),
(109, 'Minimalist', '5A'),
(110, 'Minimalist', '6A'),
(111, 'Minimalist', '7A'),
(112, 'Minimalist', '8A'),
(113, 'Minimalist', '9A'),
(114, 'Minimalist', '10B'),
(115, 'Minimalist', '11B'),
(116, 'Minimalist', '12B'),
(117, 'Minimalist', '13B'),
(118, 'Minimalist', '14B'),
(119, 'Minimalist', '15B'),
(120, 'Minimalist', '16C'),
(121, 'Minimalist', '17C'),
(122, 'Minimalist', '18C'),
(123, 'Minimalist', '19C'),
(124, 'Minimalist', '20C'),
(125, 'Minimalist', '21C'),
(126, 'Minimalist', '22D'),
(127, 'Minimalist', '23D'),
(128, 'Minimalist', '24D'),
(129, 'Minimalist', '25D'),
(130, 'Minimalist', '26D'),
(131, 'Minimalist', '27D'),
(132, 'Diamond', '1A'),
(133, 'Diamond', '2A'),
(134, 'Diamond', '3A'),
(135, 'Diamond', '4A'),
(136, 'Diamond', '5A'),
(137, 'Diamond', '6A'),
(138, 'Diamond', '7A'),
(139, 'Diamond', '8A'),
(140, 'Diamond', '9A'),
(141, 'Diamond', '10A'),
(142, 'Diamond', '11A'),
(143, 'Diamond', '12B'),
(144, 'Diamond', '13B'),
(145, 'Diamond', '14B'),
(146, 'Diamond', '15B'),
(147, 'Diamond', '16B'),
(148, 'Diamond', '17B'),
(149, 'Diamond', '18B'),
(150, 'Diamond', '19B'),
(151, 'Diamond', '20C'),
(152, 'Diamond', '21C'),
(153, 'Diamond', '22C'),
(154, 'Diamond', '23C'),
(155, 'Diamond', '24C'),
(156, 'Diamond', '25C'),
(157, 'Diamond', '26C'),
(158, 'Diamond', '27C'),
(159, 'Diamond', '28D'),
(160, 'Diamond', '29D'),
(161, 'Diamond', '30D'),
(162, 'Diamond', '31D'),
(163, 'Diamond', '32D'),
(164, 'Diamond', '33D'),
(165, 'Diamond', '34D'),
(166, 'Diamond', '35D'),
(167, 'Diamond', '36E'),
(168, 'Diamond', '37E'),
(169, 'Diamond', '38E'),
(170, 'Diamond', '39E'),
(171, 'Diamond', '40E'),
(172, 'Diamond', '41E'),
(173, 'Diamond', '42E'),
(174, 'Diamond', '43E'),
(175, 'Diamond', '44F'),
(176, 'Diamond', '45F'),
(177, 'Diamond', '46F'),
(178, 'Diamond', '47F'),
(179, 'Diamond', '48F'),
(180, 'Diamond', '49F'),
(181, 'Diamond', '50F'),
(182, 'Diamond', '51F'),
(183, 'Diamond', '52F');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE IF NOT EXISTS `studio` (
  `nama_studio` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`nama_studio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`nama_studio`, `jenis`) VALUES
('Diamond', 'Premium'),
('Minimalist', 'Economy'),
('Rose', 'Regular'),
('Velvet', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `tayang`
--

CREATE TABLE IF NOT EXISTS `tayang` (
  `id_tayang` int(11) NOT NULL AUTO_INCREMENT,
  `id_film` int(11) NOT NULL,
  `nama_studio` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `schedule` datetime NOT NULL,
  PRIMARY KEY (`id_tayang`),
  KEY `IDX_F505496C964A220` (`id_film`),
  KEY `IDX_F505496CC8199A01` (`nama_studio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=52 ;

--
-- Dumping data for table `tayang`
--

INSERT INTO `tayang` (`id_tayang`, `id_film`, `nama_studio`, `schedule`) VALUES
(1, 1, 'Diamond', '2015-01-26 12:00:00'),
(2, 1, 'Diamond', '2015-01-26 14:45:00'),
(3, 1, 'Diamond', '2015-01-26 17:30:00'),
(4, 1, 'Diamond', '2015-01-26 21:00:00'),
(5, 1, 'Diamond', '2015-01-27 12:00:00'),
(6, 1, 'Diamond', '2015-01-27 14:45:00'),
(7, 1, 'Diamond', '2015-01-27 17:30:00'),
(8, 1, 'Diamond', '2015-01-27 21:00:00'),
(9, 1, 'Diamond', '2015-01-28 12:00:00'),
(10, 1, 'Diamond', '2015-01-28 14:45:00'),
(11, 1, 'Diamond', '2015-01-28 17:30:00'),
(12, 1, 'Diamond', '2015-01-28 21:00:00'),
(13, 5, 'Rose', '2015-01-26 12:00:00'),
(14, 5, 'Rose', '2015-01-26 14:45:00'),
(15, 5, 'Rose', '2015-01-26 17:30:00'),
(16, 5, 'Rose', '2015-01-26 21:00:00'),
(17, 5, 'Rose', '2015-01-27 12:00:00'),
(18, 5, 'Rose', '2015-01-27 14:45:00'),
(19, 5, 'Rose', '2015-01-27 17:30:00'),
(20, 5, 'Rose', '2015-01-27 21:00:00'),
(21, 5, 'Rose', '2015-01-28 12:00:00'),
(22, 5, 'Rose', '2015-01-28 14:45:00'),
(23, 5, 'Rose', '2015-01-28 17:30:00'),
(24, 5, 'Rose', '2015-01-28 21:00:00'),
(25, 2, 'Minimalist', '2015-01-26 12:00:00'),
(26, 2, 'Minimalist', '2015-01-26 13:30:00'),
(27, 2, 'Minimalist', '2015-01-27 12:00:00'),
(28, 2, 'Minimalist', '2015-01-27 13:30:00'),
(29, 2, 'Minimalist', '2015-01-28 12:00:00'),
(30, 2, 'Minimalist', '2015-01-28 13:30:00'),
(31, 8, 'Minimalist', '2015-01-26 16:00:00'),
(32, 8, 'Minimalist', '2015-01-26 19:00:00'),
(33, 8, 'Minimalist', '2015-01-27 16:00:00'),
(34, 8, 'Minimalist', '2015-01-27 19:00:00'),
(35, 8, 'Minimalist', '2015-01-28 16:00:00'),
(36, 8, 'Minimalist', '2015-01-28 19:00:00'),
(37, 6, 'Velvet', '2015-01-26 12:15:00'),
(38, 6, 'Velvet', '2015-01-26 14:00:00'),
(39, 6, 'Velvet', '2015-01-26 16:00:00'),
(40, 6, 'Velvet', '2015-01-27 12:15:00'),
(41, 6, 'Velvet', '2015-01-27 14:00:00'),
(42, 6, 'Velvet', '2015-01-27 16:00:00'),
(43, 6, 'Velvet', '2015-01-28 12:15:00'),
(44, 6, 'Velvet', '2015-01-28 14:00:00'),
(45, 6, 'Velvet', '2015-01-28 16:00:00'),
(46, 6, 'Velvet', '2015-01-26 18:30:00'),
(47, 6, 'Velvet', '2015-01-26 20:00:00'),
(48, 6, 'Velvet', '2015-01-27 18:30:00'),
(49, 6, 'Velvet', '2015-01-27 20:00:00'),
(50, 6, 'Velvet', '2015-01-28 18:30:00'),
(51, 6, 'Velvet', '2015-01-28 20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id_pesan` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `id_seat` int(11) NOT NULL,
  `id_having` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id_pesan`),
  UNIQUE KEY `UNIQ_723705D1B67C2A64` (`id_seat`),
  KEY `IDX_723705D1F85E0677` (`username`),
  KEY `IDX_723705D1F6FA7AB9` (`id_having`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `email`) VALUES
('mireedo', '5201858a094bca7b1f455cafa45c7f8f', 'Mira', 'mirasaraswati.jtk12@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `FK_9D6E9958C8199A01` FOREIGN KEY (`nama_studio`) REFERENCES `studio` (`nama_studio`);

--
-- Constraints for table `tayang`
--
ALTER TABLE `tayang`
  ADD CONSTRAINT `FK_F505496CC8199A01` FOREIGN KEY (`nama_studio`) REFERENCES `studio` (`nama_studio`),
  ADD CONSTRAINT `FK_F505496C964A220` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `FK_723705D1F6FA7AB9` FOREIGN KEY (`id_having`) REFERENCES `tayang` (`id_tayang`),
  ADD CONSTRAINT `FK_723705D1B67C2A64` FOREIGN KEY (`id_seat`) REFERENCES `seat` (`id_seat`),
  ADD CONSTRAINT `FK_723705D1F85E0677` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
