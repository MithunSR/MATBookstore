-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 10:10 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matbookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `total_price` float(6,2) NOT NULL DEFAULT 0.00,
  `order_status` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `email`, `address`, `address2`, `country`, `state`, `zipcode`, `total_price`, `order_status`, `created_at`, `updated_at`) VALUES
(4, 'mi', 'ds', 'rrgmithun@gmail.com', 'da', 'da', 'United States', 'California', '23', 22.15, 'confirmed', '2022-04-13 09:46:45', '2022-04-13 09:46:45'),
(5, 'hgh', 'ghgh', 'rrgmithun@gmail.com', 'rtr', 'rtr', 'United States', 'California', '23', 22.15, 'confirmed', '2022-04-13 09:51:51', '2022-04-13 09:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_price` float(6,2) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `total_price` double(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `qty`, `total_price`) VALUES
(4, 4, 2, 'ECLIPSE 1', 9.50, 1, 9.50),
(5, 4, 3, 'BARACK OBAMA', 12.65, 1, 12.65),
(6, 5, 2, 'ECLIPSE 1', 9.50, 1, 9.50),
(7, 5, 3, 'BARACK OBAMA', 12.65, 1, 12.65);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_slug` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `full_description` text DEFAULT NULL,
  `price` double(4,2) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_slug`, `short_description`, `full_description`, `price`, `is_featured`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'WILL smith', 'will-smith', 'Language	English\r\nAuthor	will smith\r\nPublisher	century\r\nISBN 13	9781529124163\r\nISBN 10	1529124166', 'PRAISE FOR WILL\r\n\r\n\'The best memoir I ever read\' Oprah Winfrey\r\n\r\n\'If you read one book this year, make it this one\' Jay Shetty\r\n\r\n\'Incredible\' Idris Elba\r\n\r\n\'The book is awesome. So candid and considered...fascinating\' Chris Evans\r\n\r\n\'A triumph...really inspiring, so well written, vulnerable and deep. I highly recommend it\' Mindy Kaling\r\n\r\n\'It\'s fantastic...very moving\' Zoe Ball\r\n\r\n\'Incredibly honest...inspiring\' Greg James\r\n\r\n\'A wild ride\' New York Times\r\n\r\n\'Raw, comedic, inspirational\' GQ', 7.25, 0, 1, '2021-02-11 22:02:17', '2021-02-11 22:02:21'),
(2, 'ECLIPSE 1', 'eclipse-1', 'Language	English\r\nAuthor	stephenie meyer\r\nPublisher	atom books\r\nISBN 13	9781904233916\r\nISBN 10	1904233910', 'Bella?\' Edward\'s soft voice came from behind me. I turned to see him spring lightly up the porch steps, his hair windblown from running. He pulled me into his arms at once, and kissed me again. His kiss frightened me. There was too much tension, too strong an edge to the way his lips crushed mine - like he was afraid we had only so much time left to us. As Seattle is ravaged by a string of mysterious killings and a malicious vampire continues her quest for revenge, Bella once again finds herself surrounded by danger. In the midst of it all, she is forced to choose between her love for Edward and her friendship with Jacob - knowing that her decision has the potential to ignite the ageless struggle between vampire and werewolf. With her graduation approaching, Bella has one more decision to make: life or death. But which is which? Following the international bestsellers Twilight and New Moon, Eclipse is the much-anticipated third book in Stephenie Meyer\'s captivating saga of vampire romance.', 9.50, 0, 1, '2021-02-11 22:02:50', '2021-02-11 22:02:53'),
(3, 'BARACK OBAMA', 'barack-obama', 'Language	English\r\nAuthor	barack obama\r\nPublisher	crown publihers incnew yo\r\nISBN 13	9781524763169\r\nISBN 10	1524763160', '* Available after 15th January 2021\r\n\r\nIn the stirring, highly anticipated first volume of his presidential memoirs, Barack Obama tells the story of his improbable odyssey from young man searching for his identity to leader of the free world, describing in strikingly personal detail both his political education and the landmark moments of the first term of his historic presidency—a time of dramatic transformation and turmoil.\r\n\r\nObama takes readers on a compelling journey from his earliest political aspirations to the pivotal Iowa caucus victory that demonstrated the power of grassroots activism to the watershed night of November 4, 2008, when he was elected 44th president of the United States, becoming the first African American to hold the nation’s highest office.', 12.65, 1, 1, '2021-02-11 22:03:21', '2021-02-11 22:03:24'),
(4, 'The World As It Is', 'the-world-as-it-is', 'Language	English\r\nAuthor	\r\nPublisher	penguin books\r\nISBN 13	9781984881274\r\nISBN 10	1984881272', 'lorem ipsum gfdhg jdhj Sarasavi.lk is a website for an extensive collection of books, stationery and magazines.Not only a “one-stop shop” for book lovers but also an interactive and innovative destination designed to make it fun and exciting to discover and shop for new books and gifts online.book lovers but also an interactive and innovative destination designed to make it fun and exciting to discover and shop for new books and gifts online', 8.50, 1, 1, '2022-04-05 11:52:22', '2022-04-13 11:52:22'),
(5, 'Ikigai part1', 'ikigai-part1', 'Language	Sinhala\r\nAuthor	siril chandrasekara gunawardana\r\nPublisher	sarasavi publishers\r\nISBN 13	9789553118653\r\nISBN 10	9553118658', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2.80, 1, 1, '2022-04-03 12:41:57', '2022-04-15 12:41:57'),
(6, 'Christmas Pig', 'Christmas-pig', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1.99, 1, 1, '2022-04-11 12:53:19', '2022-04-21 12:53:19'),
(7, 'Bitter Part1', 'bitter-part1', 'Language	English\r\nAuthor	nora roberts\r\nPublisher	berkley books\r\nISBN 13	9780593545638\r\nISBN 10	059354563X', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5.67, 1, 1, '2022-04-21 12:56:42', '2022-04-04 12:56:42'),
(8, 'Senkottan part1', 'senkottan-part1', 'Language	Sinhala\r\nAuthor	siril chandrasekara gunawardana\r\nPublisher	sarasavi publishers\r\nISBN 13	9789553118653\r\nISBN 10	9553118658', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 7.25, 1, 1, '2014-04-08 13:04:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `img`, `display_order`, `is_featured`) VALUES
(1, 1, 'will-smith.jpg', 1, 1),
(2, 2, 'eclipse-1.jpg', 1, 1),
(3, 3, 'barack-obama.jpg', 1, 1),
(4, 4, 'the-world-as-it-is.jpg', 1, 1),
(5, 5, 'ikigai-part1.jpg', 1, 1),
(6, 6, 'christmas-pig.jpg', 1, 1),
(7, 7, 'bitter-part1.jpg', 1, 1),
(8, 8, 'senkottan-part1.jpg', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
