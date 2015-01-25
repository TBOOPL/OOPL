-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2015 at 12:52 AM
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
(1, 'The Imitation Games', 5.0, 'During the winter of 1952, British authorities entered the home of mathematician, cryptanalyst and war hero Alan Turing (Benedict Cumberbatch) to investigate a reported burglary. They instead ended up arresting Turing himself on charges of ''gross indecency'', an accusation that would lead to his devastating conviction for the criminal offense of homosexuality - little did officials know, they were actually incriminating the pioneer of modern-day computing. Famously leading a motley group of scholars, linguists, chess champions and intelligence officers, he was credited with cracking the so-called unbreakable codes of Germany''s World War II Enigma machine. An intense and haunting portrayal of a brilliant, complicated man, THE IMITATION GAME follows a genius who under nail-biting pressure helped to shorten the war and, in turn, save thousands of lives. (c) Weinstein', '2014-12-25', '2015-02-12', '0001.jpg', 'https://www.youtube.com/watch?v=S5CjKEFb-sM'),
(2, 'Annie', 3.0, 'As a boy, Louis "Louie" Zamperini is always in trouble, but with the help of his older brother, he turns his life around and channels his energy into running, later qualifying for the 1936 Olympics. When World War II breaks out, Louie enlists in the military. After his plane crashes in the Pacific, he survives an incredible 47 days adrift in a raft, until his capture by the Japanese navy. Sent to a POW camp, Louie becomes the favorite target of a particularly cruel prison commander.', '2014-12-30', '2015-02-11', '0002.jpg', 'https://www.youtube.com/watch?v=F6lNi7cZ-Ho'),
(3, 'Penguins of Madagaskar', 3.5, 'Plucky penguins Skipper (Tom McGrath), Kowalski (Chris Miller), Rico (Conrad Vernon) and Private (Christopher Knights) -- the most elite spies ever hatched -- join forces with a chic undercover organization known as the North Wind. Led by highly trained, handsome and arrogant Agent Classified (Benedict Cumberbatch), this special inter-species task force must stop a many-tentacled villain, Dr. Octavius Brine (John Malkovich), from destroying the world.', '2015-01-04', '2015-02-28', '0003.jpg', 'https://www.youtube.com/watch?v=retX8Wj7JdM'),
(4, 'Two Night Stand', 2.8, 'A no-strings-attached, online hook-up turns into a morning-after disaster for twenty-something New Yorkers Megan (Analeigh Tipton) and Alec (Miles Teller). When a paralyzing blizzard hits the city trapping them in Alec''s cramped Brooklyn apartment, they are forced to get to know each other far beyond the confines of a typical one-night stand. Marking the directorial debut of Max Nichols, Two Night Stand is a sexy, romantic comedy about finding love in the digital age. The film also stars Jessica Szohr and Scott Mescudi (aka Kid Cudi). (C) eOne', '2015-02-14', '2015-02-28', '0004.jpg', 'https://www.youtube.com/watch?v=VcSosCe0B-A'),
(5, 'Inside Out', 4.8, 'Growing up can be a bumpy road, and it''s no exception for Riley, who is uprooted from her Midwest life when her father starts a new job in San Francisco. Like all of us, Riley is guided by her emotions - Joy (Amy Poehler), Fear (Bill Hader), Anger (Lewis Black), Disgust (Mindy Kaling) and Sadness (Phyllis Smith). The emotions live in Headquarters, the control center inside Riley''s mind, where they help advise her through everyday life. As Riley and her emotions struggle to adjust to a new life in San Francisco, turmoil ensues in Headquarters. Although Joy, Riley''s main and most important emotion, tries to keep things positive, the emotions conflict on how best to navigate a new city, house and school. -- (C) Pixar', '2015-01-10', '2015-02-20', '0005.jpg', 'https://www.youtube.com/watch?v=_MC3XuMvsDI'),
(6, 'Big Hero 6', 4.8, 'Robotics prodigy Hiro (Ryan Potter) lives in the city of San Fransokyo. Besides his older brother, Tadashi, Hiro''s closest companion is Baymax (Scott Adsit), a robot whose sole purpose is to take care of people. When a devastating turn of events throws Hiro into the middle of a dangerous plot, he transforms Baymax and his other friends, Go Go Tamago (Jamie Chung), Wasabi (Damon Wayans Jr.), Honey Lemon (Genesis Rodriguez) and Fred (T.J. Miller) into a band of high-tech heroes.', '2014-11-30', '2015-01-30', '0006.jpg', 'https://www.youtube.com/watch?v=z3biFxZIJOQ'),
(7, 'Unbroken', 0.0, 'As a boy, Louis "Louie" Zamperini is always in trouble, but with the help of his older brother, he turns his life around and channels his energy into running, later qualifying for the 1936 Olympics. When World War II breaks out, Louie enlists in the military. After his plane crashes in the Pacific, he survives an incredible 47 days adrift in a raft, until his capture by the Japanese navy. Sent to a POW camp, Louie becomes the favorite target of a particularly cruel prison commander.', '2015-02-15', '2015-03-14', '0007.jpg', 'https://www.youtube.com/watch?v=XrjJbl7kRrI'),
(8, 'The Hunger Games : Mockingjay Part 1', 4.5, 'Following her rescue from the devastating Quarter Quell, Katniss (Jennifer Lawrence) awakes in the complex beneath the supposedly destroyed District 13. Her home, District 12, has been reduced to rubble, and Peeta Mellark (Josh Hutcherson) is now the brainwashed captive of President Snow (Donald Sutherland). At the same time, Katniss also learns about a secret rebellion spreading throughout all of Panem -- a rebellion that will place her at the center of a plot to turn the tables on Snow.', '2014-11-30', '2015-01-31', '0008.jpg', 'https://www.youtube.com/watch?v=3PkkHsuMrho'),
(9, 'Paddington', 0.0, 'From the beloved novels by Michael Bond and producer David Heyman (HARRY POTTER), PADDINGTON tells the story of the comic misadventures of a young Peruvian bear (voiced by Firth) who travels to the city in search of a home. Finding himself lost and alone, he begins to realize that city life is not all he had imagined - until he meets the kindly Brown family who read the label around his neck that says "Please look after this bear. Thank you," and offer him a temporary haven. It looks as though his luck has changed until this rarest of bears catches the eye of a museum taxidermist. (c) Weinstein', '2015-01-30', '2015-03-05', '0009.jpg', 'https://www.youtube.com/watch?v=X-d-V9jXYDE'),
(10, 'Kumiko, The Treasure Hunter', 0.0, 'In this darkly comedic odyssey, Academy Award nominee Rinko Kikuchi (Babel, Pacific Rim) stars as Kumiko, a frustrated Office Lady whose imagination transcends the confines of her mundane life. Kumiko becomes obsessed with a mysterious, battered VHS tape of a popular film she''s mistaken for a documentary, fixating on a scene where a suitcase of stolen cash is buried in the desolate, frozen landscape of North Dakota. Believing this treasure to be real, she leaves behind Tokyo and her beloved rabbit Bunzo to recover it - and finds herself on a dangerous adventure unlike anything she''s seen in the movies. With Kumiko, The Treasure Hunter, indie mavericks the Zellner Bros. spin a strangely touching underdog fable, populated by eccentrics and elevated to sonic heights by a Sundance award-winning score from electro-indie outfit The Octopus Project, that will leave audiences rooting for the impossible. (C) Amplify', '2015-03-02', '2015-04-10', '0010.jpg', 'https://www.youtube.com/watch?v=8htA6LR6u-Y'),
(11, 'Still Alice', 0.0, 'Dr. Alice Howland (Julianne Moore) is a renowned linguistics professor at Columbia University. When words begin to escape her and she starts becoming lost on her daily jogs, Alice must come face-to-face with a devastating diagnosis: early-onset Alzheimer''s disease. As the once-vibrant woman struggles to hang on to her sense of self for as long as possible, Alice''s three grown children must watch helplessly as their mother disappears more and more with each passing day.', '2015-03-05', '2015-04-04', '0011.jpg', 'https://www.youtube.com/watch?v=ZrXrZ5iiR0o'),
(12, 'Spare Parts', 0.0, 'With the help of their high school''s newest teacher (George Lopez), four Hispanic students form a robotics club. Although they have no experience, the youths set their sights on a national robotics contest. With $800 and parts scavenged from old cars, they build a robot and compete against reigning champion MIT. Along the way, the students learn not only how to build a robot but something far more important: how to forge bonds that will last a lifetime.', '2015-04-10', '2015-05-05', '0012.jpg', 'https://www.youtube.com/watch?v=GXOLwIIHuCs');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=187 ;

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
(12, 'Velvet', '12A'),
(13, 'Velvet', '13B'),
(14, 'Velvet', '14B'),
(15, 'Velvet', '15B'),
(16, 'Velvet', '16B'),
(17, 'Velvet', '17B'),
(18, 'Velvet', '18B'),
(19, 'Velvet', '19B'),
(20, 'Velvet', '20B'),
(21, 'Velvet', '21B'),
(22, 'Velvet', '22B'),
(23, 'Velvet', '23B'),
(24, 'Velvet', '24B'),
(25, 'Velvet', '25C'),
(26, 'Velvet', '26C'),
(27, 'Velvet', '27C'),
(28, 'Velvet', '28C'),
(29, 'Velvet', '29C'),
(30, 'Velvet', '30C'),
(31, 'Velvet', '31C'),
(32, 'Velvet', '32C'),
(33, 'Velvet', '33C'),
(34, 'Velvet', '34C'),
(35, 'Velvet', '35C'),
(36, 'Velvet', '36C'),
(37, 'Velvet', '37D'),
(38, 'Velvet', '38D'),
(39, 'Velvet', '39D'),
(40, 'Velvet', '40D'),
(41, 'Velvet', '41D'),
(42, 'Velvet', '42D'),
(43, 'Velvet', '43D'),
(44, 'Velvet', '44D'),
(45, 'Velvet', '45E'),
(46, 'Velvet', '46E'),
(47, 'Velvet', '47E'),
(48, 'Velvet', '48E'),
(49, 'Velvet', '49E'),
(50, 'Velvet', '50E'),
(51, 'Velvet', '51E'),
(52, 'Velvet', '52E'),
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
(64, 'Rose', '12A'),
(65, 'Rose', '13B'),
(66, 'Rose', '14B'),
(67, 'Rose', '15B'),
(68, 'Rose', '16B'),
(69, 'Rose', '17B'),
(70, 'Rose', '18B'),
(71, 'Rose', '19B'),
(72, 'Rose', '20B'),
(73, 'Rose', '21B'),
(74, 'Rose', '22B'),
(75, 'Rose', '23B'),
(76, 'Rose', '24B'),
(77, 'Rose', '25C'),
(78, 'Rose', '26C'),
(79, 'Rose', '27C'),
(80, 'Rose', '28C'),
(81, 'Rose', '29C'),
(82, 'Rose', '30C'),
(83, 'Rose', '31C'),
(84, 'Rose', '32C'),
(85, 'Rose', '33C'),
(86, 'Rose', '34C'),
(87, 'Rose', '35C'),
(88, 'Rose', '36C'),
(89, 'Rose', '37D'),
(90, 'Rose', '38D'),
(91, 'Rose', '39D'),
(92, 'Rose', '40D'),
(93, 'Rose', '41D'),
(94, 'Rose', '42D'),
(95, 'Rose', '43D'),
(96, 'Rose', '44D'),
(97, 'Rose', '45E'),
(98, 'Rose', '46E'),
(99, 'Rose', '47E'),
(100, 'Rose', '48E'),
(101, 'Rose', '49E'),
(102, 'Rose', '50E'),
(103, 'Rose', '51E'),
(104, 'Rose', '52E'),
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
(120, 'Minimalist', '16B'),
(121, 'Minimalist', '17B'),
(122, 'Minimalist', '18B'),
(123, 'Minimalist', '19C'),
(124, 'Minimalist', '20C'),
(125, 'Minimalist', '21C'),
(126, 'Minimalist', '22C'),
(127, 'Minimalist', '23C'),
(128, 'Minimalist', '24C'),
(129, 'Minimalist', '25D'),
(130, 'Minimalist', '26D'),
(131, 'Minimalist', '27D'),
(132, 'Minimalist', '28D'),
(133, 'Minimalist', '29D'),
(134, 'Minimalist', '30D'),
(135, 'Diamond', '1A'),
(136, 'Diamond', '2A'),
(137, 'Diamond', '3A'),
(138, 'Diamond', '4A'),
(139, 'Diamond', '5A'),
(140, 'Diamond', '6A'),
(141, 'Diamond', '7A'),
(142, 'Diamond', '8A'),
(143, 'Diamond', '9A'),
(144, 'Diamond', '10A'),
(145, 'Diamond', '11A'),
(146, 'Diamond', '12A'),
(147, 'Diamond', '13B'),
(148, 'Diamond', '14B'),
(149, 'Diamond', '15B'),
(150, 'Diamond', '16B'),
(151, 'Diamond', '17B'),
(152, 'Diamond', '18B'),
(153, 'Diamond', '19B'),
(154, 'Diamond', '20B'),
(155, 'Diamond', '21B'),
(156, 'Diamond', '22B'),
(157, 'Diamond', '23B'),
(158, 'Diamond', '24B'),
(159, 'Diamond', '25C'),
(160, 'Diamond', '26C'),
(161, 'Diamond', '27C'),
(162, 'Diamond', '28C'),
(163, 'Diamond', '29C'),
(164, 'Diamond', '30C'),
(165, 'Diamond', '31C'),
(166, 'Diamond', '32C'),
(167, 'Diamond', '33C'),
(168, 'Diamond', '34C'),
(169, 'Diamond', '35C'),
(170, 'Diamond', '36C'),
(171, 'Diamond', '37D'),
(172, 'Diamond', '38D'),
(173, 'Diamond', '39D'),
(174, 'Diamond', '40D'),
(175, 'Diamond', '41D'),
(176, 'Diamond', '42D'),
(177, 'Diamond', '43D'),
(178, 'Diamond', '44D'),
(179, 'Diamond', '45E'),
(180, 'Diamond', '46E'),
(181, 'Diamond', '47E'),
(182, 'Diamond', '48E'),
(183, 'Diamond', '49E'),
(184, 'Diamond', '50E'),
(185, 'Diamond', '51E'),
(186, 'Diamond', '52E');

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
(46, 3, 'Velvet', '2015-01-26 18:30:00'),
(47, 3, 'Velvet', '2015-01-26 20:00:00'),
(48, 3, 'Velvet', '2015-01-27 18:30:00'),
(49, 3, 'Velvet', '2015-01-27 20:00:00'),
(50, 3, 'Velvet', '2015-01-28 18:30:00'),
(51, 3, 'Velvet', '2015-01-28 20:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id_pesan`, `username`, `id_seat`, `id_having`, `harga`) VALUES
(1, 'mireedo', 87, 14, 35000),
(2, 'mireedo', 88, 14, 35000);

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
