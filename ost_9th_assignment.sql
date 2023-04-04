-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 12:17 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ost_9th_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'imam', 'imam@gmail.com', 'Product demo', 'I want to show your demo'),
(2, 'Noman', 'noman@gmail.com', 'Software', 'I want to buy your software'),
(3, 'Noman', 'noman@gmail.com', 'Software', 'I want to buy your software'),
(4, 'Noman', 'noman@gmail.com', 'Software', 'I want to buy your software');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `date` date NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `details`, `date`, `photo`) VALUES
(1, 'Programming', 'Programming involves tasks such as analysis, generating algorithms, profiling algorithms\' accuracy and resource consumption, and the implementation of algorithms (usually in a chosen programming language, commonly referred to as coding)', '2023-04-04', '2023-04-04-09-32-46largest_number.png'),
(2, 'Politics of Bangladesh', 'Politics of Bangladesh takes place in a framework of a parliamentary representative democratic republic, whereby the Prime Minister of Bangladesh is the ...', '2023-04-04', '2023-04-04-09-34-561524683440.jpg'),
(3, 'Habijabi', 'jnhsdfhn vdsfng gfsdkmng fkdsmn vclsdk fo', '2023-04-04', '2023-04-04-09-48-44carbon.png'),
(4, 'International News', 'The most actual events happening in third worlds countries. News outside Europe. Listen To Podcasts. Meet The Staff. Highlights: Podcast Available, Newsletter Available.', '2023-04-04', '2023-04-04-09-59-00international.jpeg'),
(5, 'Travel | Popular destinations in Bangladesh', 'Bangladesh, to the east of India on the Bay of Bengal, is a South Asian country marked by lush greenery and many waterways. Its Padma (Ganges), Meghna and Jamuna rivers create fertile plains, and travel by boat is common. On the southern coast, the Sundarbans, an enormous mangrove forest shared with Eastern India, is home to the royal Bengal tiger.', '2023-04-04', '2023-04-04-10-58-20images.jpeg'),
(6, 'Bangladeshi Food', 'Alive with heat, spice, and mesmerizing flavor, Bangladeshi food is one of Asia’s most underrated yet wondrous cuisines.\r\nDefined by its tropical geography and diverse array of influences, from Persian to Indian, this beautiful country’s cuisine roars with richness, spices, and aromatic qualities.\r\nFoodie travelers yearning for new and exciting flavor combinations get excited as we delve deep into Bangladeshi foods. Here are 16 of the country’s most popular dishes, as described by a local.', '2023-04-04', '2023-04-04-11-01-55food.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
