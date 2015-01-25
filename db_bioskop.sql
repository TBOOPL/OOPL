-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 25, 2015 at 12:53 PM
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
(9, 'Paddington', 0.0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2015-01-22', '2015-03-05', '0009.jpg', ''),
(10, 'Kumiko, The Treasure Hunter', 0.0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2015-03-02', '2015-04-10', '0010.jpg', ''),
(11, 'Still Alice', 0.0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2015-03-05', '2015-04-04', '0011.jpg', ''),
(12, 'Spare Parts', 0.0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2015-04-10', '2015-05-05', '0012.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id_seat`, `nama_studio`, `no_kursi`) VALUES
(93, 'studio 1', 'a1'),
(94, 'studio 1', 'a2'),
(95, 'studio 1', 'a3'),
(96, 'studio 1', 'a4'),
(97, 'studio 1', 'a5'),
(98, 'studio 1', 'a6'),
(99, 'studio 1', 'b1'),
(100, 'studio 1', 'b2'),
(101, 'studio 1', 'b3'),
(102, 'studio 1', 'b4'),
(103, 'studio 1', 'b5'),
(104, 'studio 1', 'b6'),
(105, 'studio 1', 'b7'),
(106, 'studio 1', 'b8'),
(107, 'studio 1', 'c1'),
(108, 'studio 1', 'c2'),
(109, 'studio 1', 'c3'),
(110, 'studio 1', 'c4'),
(111, 'studio 1', 'c5'),
(112, 'studio 1', 'c6'),
(113, 'studio 1', 'c7'),
(114, 'studio 1', 'c8'),
(115, 'studio 1', 'd1'),
(116, 'studio 1', 'd2'),
(117, 'studio 1', 'd3'),
(118, 'studio 1', 'd4'),
(119, 'studio 1', 'd5'),
(120, 'studio 1', 'd6'),
(121, 'studio 1', 'd7'),
(122, 'studio 1', 'd8'),
(123, 'studio 2', 'a1'),
(124, 'studio 2', 'a2'),
(125, 'studio 2', 'a3'),
(126, 'studio 2', 'a4'),
(127, 'studio 2', 'a5'),
(128, 'studio 2', 'a6'),
(129, 'studio 2', 'b1'),
(130, 'studio 2', 'b2'),
(131, 'studio 2', 'b3'),
(132, 'studio 2', 'b4'),
(133, 'studio 2', 'b5'),
(134, 'studio 2', 'b6'),
(135, 'studio 2', 'b7'),
(136, 'studio 2', 'b8'),
(137, 'studio 2', 'c1'),
(138, 'studio 2', 'c2'),
(139, 'studio 2', 'c3'),
(140, 'studio 2', 'c4'),
(141, 'studio 2', 'c5'),
(142, 'studio 2', 'c6'),
(143, 'studio 2', 'c7'),
(144, 'studio 2', 'c8'),
(145, 'studio 2', 'd1'),
(146, 'studio 2', 'd2'),
(147, 'studio 2', 'd3'),
(148, 'studio 2', 'd4'),
(149, 'studio 2', 'd5'),
(150, 'studio 2', 'd6'),
(151, 'studio 2', 'd7'),
(152, 'studio 2', 'd8'),
(153, 'studio 3', 'a1'),
(154, 'studio 3', 'a2'),
(155, 'studio 3', 'a3'),
(156, 'studio 3', 'a4'),
(157, 'studio 3', 'a5'),
(158, 'studio 3', 'a6'),
(159, 'studio 3', 'b1'),
(160, 'studio 3', 'b2'),
(161, 'studio 3', 'b3'),
(162, 'studio 3', 'b4'),
(163, 'studio 3', 'b5'),
(164, 'studio 3', 'b6'),
(165, 'studio 3', 'b7'),
(166, 'studio 3', 'b8'),
(167, 'studio 3', 'c1'),
(168, 'studio 3', 'c2'),
(169, 'studio 3', 'c3'),
(170, 'studio 3', 'c4'),
(171, 'studio 3', 'c5'),
(172, 'studio 3', 'c6'),
(173, 'studio 3', 'c7'),
(174, 'studio 3', 'c8'),
(175, 'studio 3', 'd1'),
(176, 'studio 3', 'd2'),
(177, 'studio 3', 'd3'),
(178, 'studio 3', 'd4'),
(179, 'studio 3', 'd5'),
(180, 'studio 3', 'd6'),
(181, 'studio 3', 'd7'),
(182, 'studio 3', 'd8');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`nama_studio`, `jenis`) VALUES
('studio 1', 'vip'),
('studio 2', 'vip'),
('studio 3', 'vip');

-- --------------------------------------------------------

--
-- Table structure for table `tayang`
--

--
-- Dumping data for table `tayang`
--

INSERT INTO `tayang` (`id_tayang`, `id_film`, `nama_studio`, `schedule`) VALUES
(1, 1, 'studio 1', '2015-01-23 13:00:00'),
(2, 1, 'studio 2', '2015-01-24 12:00:00'),
(3, 1, 'studio 1', '2015-01-31 11:00:00'),
(4, 1, 'studio 3', '2015-01-26 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id_pesan`, `username`, `id_seat`, `id_having`, `harga`) VALUES
(1, 'lala', 93, 1, 35000),
(2, 'lala', 95, 1, 35000),
(3, 'lala', 101, 1, 35000),
(4, 'lala', 111, 1, 35000),
(5, 'lala', 112, 1, 35000),
(6, 'lala', 114, 1, 35000),
(7, 'lala', 122, 1, 35000),
(8, 'lala', 97, 1, 35000),
(9, 'lala', 98, 1, 35000),
(10, 'lala', 105, 1, 35000),
(11, 'lala', 106, 1, 35000),
(12, 'lala', 113, 1, 35000),
(13, 'lala', 121, 1, 35000),
(14, 'lala', 108, 1, 35000),
(15, 'lala', 109, 1, 35000),
(16, 'lala', 117, 1, 35000),
(17, 'lala', 96, 1, 35000),
(18, 'lala', 103, 1, 35000),
(19, 'lala', 104, 1, 35000),
(20, 'lala', 120, 1, 35000),
(21, 'lala', 128, 2, 35000),
(22, 'lala', 136, 2, 35000),
(23, 'lala', 144, 2, 35000),
(24, 'lala', 152, 2, 35000),
(25, 'yami', 153, 4, 35000),
(26, 'yami', 154, 4, 35000),
(27, 'yami', 160, 4, 35000),
(28, 'yami', 172, 4, 35000),
(29, 'yami', 173, 4, 35000),
(30, 'yami', 180, 4, 35000),
(31, 'yami', 170, 4, 35000),
(32, 'yami', 178, 4, 35000),
(33, 'yami', 179, 4, 35000),
(34, 'yami', 155, 4, 35000),
(35, 'yami', 161, 4, 35000),
(36, 'yami', 157, 4, 35000),
(37, 'yami', 158, 4, 35000),
(38, 'yami', 166, 4, 35000),
(39, 'yami', 182, 4, 35000),
(41, 'yami', 175, 4, 35000),
(42, 'yami', 167, 4, 35000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `email`) VALUES
('yami', 'b02dd1f9ddf82871026edd1786c47ed3', 'rizky yoga', 'rizkyyoga0@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user2`
--

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
  ADD CONSTRAINT `FK_F505496C964A220` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `FK_F505496CC8199A01` FOREIGN KEY (`nama_studio`) REFERENCES `studio` (`nama_studio`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `FK_723705D1B67C2A64` FOREIGN KEY (`id_seat`) REFERENCES `seat` (`id_seat`),
  ADD CONSTRAINT `FK_723705D1F6FA7AB9` FOREIGN KEY (`id_having`) REFERENCES `tayang` (`id_tayang`),
  ADD CONSTRAINT `FK_723705D1F85E0677` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `user2`
--
ALTER TABLE `user2`
  ADD CONSTRAINT `FK_1558D4EFFE54D947` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
