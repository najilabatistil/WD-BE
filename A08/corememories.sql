-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2024 at 03:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'movie/1.png', 'La La Land <br> (2016)', NULL),
(2, 1, 'movie/2.png', 'Little Women <br> (2019)', NULL),
(3, 1, 'movie/3.png', 'Aftersun <br> (2022)', NULL),
(4, 1, 'movie/4.png', 'Scott Pilgrim vs. The World <br> (2010)', NULL),
(5, 1, 'movie/5.png', 'Frances Ha <br> (2012)', NULL),
(6, 1, 'movie/6.png', 'The Worst Person in the World <br> (2021)', NULL),
(7, 2, 'music/7.png', 'High Visceral, Pt. 1', NULL),
(8, 2, 'music/8.png', 'Submarine', NULL),
(9, 2, 'music/9.png', 'The New Abnormal', NULL),
(10, 2, 'music/10.png', 'The Slow Rush', NULL),
(11, 2, 'music/11.png', 'Everything Not Saved Will Be Lost Part I', NULL),
(12, 2, 'music/12.png', 'Nonagon Infinity', NULL),
(13, 3, 'game/13.png', 'Stardew Valley', NULL),
(14, 3, 'game/14.png', 'Portal 2', NULL),
(15, 3, 'game/15.png', 'Life Is Strange', NULL),
(16, 3, 'game/16.png', 'Prince of Persia (2008)', NULL),
(17, 3, 'game/17.png', 'Gris', NULL),
(18, 3, 'game/18.png', 'TOEM', NULL),
(19, 4, 'book/19.png', 'The Little Prince', NULL),
(20, 4, 'book/20.png', 'Perks of Being a Wallflower', NULL),
(21, 4, 'book/21.png', 'To Kill a Mockingbird', NULL),
(22, 4, 'book/22.png', 'The Fault in Our Stars', NULL),
(24, 4, 'book/24.png', 'Good Omens', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Movie Island', 'The movies that shaped my emotions, perspectives, and love for storytelling', 'These are the films that resonated with me deeply. It\'s where I turn when I want to reflect on life, experience new perspectives, or simply get lost in a story that feels real.', '#E97B7D', 'island/movie.png', NULL),
(2, 'Music Island', 'The music that reflects my mood and vibe', 'These are the albums that have soundtracked my life. It\'s where I go to lose myself in the music, letting each note and rhythm take me to a place of pure immersion.', '#B392CD', 'island/music.png', NULL),
(3, 'Video Game Island', 'The games that bring me comfort and escape', 'These are the games that let me escape into different worlds, offering fun, challenges, and moments of reflection. It\'s where I go to unwind or explore different narratives that make me reflect on life and my own journey.', '#87C08E', 'island/game.png', NULL),
(4, 'Book Island', 'The books that inspire, comfort, and shape the way I see the world', 'These are the books that have shaped my thoughts and expanded my horizons. It’s where I go to discover new ideas, explore different perspectives, and get lost in stories.', '#7CB7CF', 'island/book.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
