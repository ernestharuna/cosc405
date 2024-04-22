-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 04:02 PM
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
-- Database: `news_item`
--

-- --------------------------------------------------------

--
-- Table structure for table `news_item`
--

CREATE TABLE `news_item` (
  `id` bigint(20) NOT NULL,
  `title` text NOT NULL,
  `link` text NOT NULL,
  `summary` text NOT NULL,
  `category` text DEFAULT NULL,
  `submittor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_item`
--

INSERT INTO `news_item` (`id`, `title`, `link`, `summary`, `category`, `submittor`) VALUES
(2, 'FBI turning to private sector to hack phones, exploit unknown security holes', 'http://www.engadget.com/2013/08/02/fbi-cyber-spying-def-con/', 'Thanks to the NSA PRISM revelations we\'ve all lost our innocence about government cyber-spying, but how far down that rabbit-hole has law-enforcement gone? Revelations from the Def Con hacking conference in Las Vegas show that such tactics are old hat for another US anti-crime department: the FBI.', 'Technology', 'Steve Dent'),
(3, 'Liverpool make £21.8m bid for Atlético Madrid striker Diego Costa', 'http://www.theguardian.com/football/2013/aug/01/liverpool-diego-costa-atletico-madrid', 'Liverpool have bid €25m (£21.8m) for the Atlético Madrid striker Diego Costa as the manager, Brendan Rodgers, looks to add quality to his squad before the transfer deadline.', 'Sport', 'Andy Hunter'),
(4, 'England coach Stuart Lancaster places emphasis on experimentation', 'http://www.theguardian.com/sport/2013/aug/01/england-stuart-lancaster-elite-squad', 'Phase two of Stuart Lancaster\'s revolution has started. The England head coach has invigorated his elite squad with youth and in opting more for specialisation, especially in the back row, he will spend the next three months pondering whether Chris Robshaw should continue as captain.', 'Sport', 'Paul Rees'),
(5, 'JCB chief Bamford and Brian Paddick among 30 new peers', 'http://www.bbc.co.uk/news/uk-politics-23529208', 'Businessman and Conservative donor Sir Anthony Bamford, former police officer Brian Paddick and the Green Party\'s Jenny Jones are among 30 new peers set to join the House of Lords. Journalist Danny Finkelstein and former Welsh AM Nick Bourne are among other Tory peers while Ministry of Sound boss James Palumbo takes the Lib Dem whip.', 'Politics', 'Frank Jones'),
(6, '\'WWIII Queen\'s speech\' script revealed', 'http://www.bbc.co.uk/news/uk-politics-23518587', 'The Queen was expected to urge Britons to pray and remain united and resolute in the event of the \'madness\' of nuclear war, papers from 1983 show. The script for a hypothetical broadcast has the monarch describing the threat to the \'brave country\' as \'greater\' than any other in history.', 'Poltics', 'Polly Smith'),
(7, 'Test article', 'https://owenahub.com', 'This is testing', 'sport', 'Ernest Haruna'),
(8, 'Top 5 apps to learn to code', 'owenahub.com', 'Learn about the most popular apps to learn to write code', 'technology', 'Ernest Haruna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news_item`
--
ALTER TABLE `news_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news_item`
--
ALTER TABLE `news_item`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
