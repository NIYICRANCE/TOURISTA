-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 03:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `publish`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `description`, `tag`) VALUES
(8, 'Hotels', 'this describes hotel stories', 'boatsantorini');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comments` text NOT NULL,
  `storiesId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comments`, `storiesId`, `userId`, `dateTime`) VALUES
(18, 'From New York Times bestselling author Catherine Bybee comes a new First Wives novel about wanting a family…and finding love. Shannon Wentworth’s biological clock is ticking, and she isn’t going to let her single status keep her from having a baby.', 27, 1, '2019-03-28 19:31:34'),
(19, 'This book serves as guide to prepare for interviews, exams, and campus work. In short, this book offers solutions to various complex data structures and algorithmic problems', 31, 1, '2019-03-28 19:32:06'),
(20, 'After a simple introduction to discrete math, it presents common algorithms and data structures. It also outlines the principles that make computers and programming languages work.', 29, 1, '2019-03-28 19:32:26'),
(21, 'The key to exercising regularly, losing weight, being more productive, and achieving success is understanding how habits work. As Duhigg shows, by harnessing this new science, we can transform our businesses, our communities, and our lives.', 32, 1, '2019-03-28 19:32:54'),
(22, 'In The Power of Habit, award-winning business reporter Charles Duhigg takes us to the thrilling edge of scientific discoveries that explain why habits exist and how they can be changed.', 32, 1, '2019-03-28 19:33:17'),
(23, 'Distilling vast amounts of information into engrossing narratives that take us from the boardrooms of Procter &amp;amp;amp; Gamble to the sidelines of the NFL to the front lines of the civil rights movement!', 32, 19, '2019-03-28 19:35:04'),
(24, 'They strike a deal: wait three months, cool off, and see if their tropical beach attraction is worth taking up when they go back home. Unfortunately, that’s just enough time for the past to come calling. All their best-laid plans are at risk. So is the last thing Shannon expected to matter the most: her heart.', 27, 19, '2019-03-28 19:35:34'),
(25, 'Data Structures and Algorithmic Puzzles is a solution bank for various complex problems related to data structures and algorithms.', 31, 19, '2019-03-28 19:36:14'),
(26, 'The key to exercising regularly, losing weight, being more productive, and achieving success is understanding how habits work. As Duhigg shows, by harnessing this new science, we can transform our businesses, our communities, and our lives.', 32, 7, '2019-03-28 19:37:33'),
(28, 'The key to exercising regularly, losing weight, being more productive, and achieving success is understanding how habits work. As Duhigg shows, by harnessing this new science, we can transform our businesses, our communities, and our lives.', 29, 7, '2019-03-28 19:38:11'),
(29, 'A data structure is a specialized format for organizing and storing data. General data structure types include the array, the file, the record, the table, the tree, and so on. Any data structure is designed to organize data to suit a specific purpose so that it can be accessed and worked with in appropriate ways.', 31, 7, '2019-03-28 19:39:41'),
(30, 'Etty and Dorothy survived the orphanage with the help of one another and neither sister can forget the awful betrayal of their mother, which has haunted them their whole lives. But when a shocking secret about their painful childhood comes to light, will the sisters ever be the same again?', 28, 7, '2019-03-28 19:40:49'),
(31, 'The Wall blends the most compelling issues of our time?rising waters, rising fear, rising political division?into a suspenseful story of love, trust, and survival.', 38, 7, '2019-03-29 06:18:24'),
(40, ' The Wall blends the most compelling issues of our time?rising waters, rising fear, rising political division?into a suspenseful story of love, trust, and survival.\r\n', 39, 7, '2019-03-29 11:19:18'),
(41, ' A dark part of him wonders whether it would be interesting if something did happen, if they came, if he had to fight for his life…', 39, 1, '2019-03-29 11:20:06'),
(42, 'This book is very useful for beginners, who want to be a successful programmer.', 30, 1, '2019-03-29 17:03:53'),
(43, 'You CAN learn to program professionally. The path is there. Will you take it?', 30, 21, '2019-03-30 18:23:19'),
(44, 'This book is awesome.', 39, 1, '2019-04-11 04:33:21'),
(45, 'A dark part of him wonders whether it would be interesting if something did happen, if they came, if he had to fight for his life…', 39, 1, '2019-04-15 04:44:11'),
(46, 'Victor Brooks never could have imagined that he’d be on a honeymoon for one. Only here he is, taking a hard look at his life after the younger women he thought he loved walked out. The woman who volunteers to help him reflect is the last person he expects to be attracted to.!', 27, 1, '2019-04-15 05:05:12'),
(47, 'In The Power of Habit, award-winning business reporter Charles Duhigg takes us to the thrilling edge of scientific discoveries that explain why habits exist and how they can be changed. Distilling vast amounts of information into engrossing narratives that take us from the boardrooms of Procter &amp;amp;amp;amp; Gamble to the sidelines of the NFL to the front lines of the civil rights movement, Duhigg presents a whole new understanding of human nature and its potential. At its core, The Power of Habit contains an exhilarating argument: The key to exercising regularly, losing weight, being more productive, and achieving success is understanding how habits work. As Duhigg shows, by harnessing this new science, we can transform our businesses, our communities, and our lives.', 32, 1, '2019-04-16 07:47:33'),
(48, 'PHP stands for Hypertext Preprocessor (no, the acronym doesn\'t follow the name). It\'s an open source, server-side, scripting language used for the development of web applications. By scripting language, we mean a program that is script-based (lines of code) written for the automation of tasks', 15, 1, '2019-04-21 07:05:41'),
(49, ' Reiciendis voluptate minima culpa pariatur, quae accusamus modi natus temporibus cupiditate aliquid officiis at sit quo dolorum fuga libero alias.', 47, 7, '2019-04-21 17:22:52'),
(50, 'qwwwwqqqqqqqqqq', 49, 24, '2023-03-25 01:25:16'),
(51, 'qqqqqqqqqqqqwdwdwdwdwdwaas', 49, 24, '2023-03-25 01:25:31'),
(52, 'nice story, i love it', 50, 25, '2023-03-25 13:46:45'),
(53, 'lo, thats a nice story', 52, 25, '2023-03-26 05:34:33'),
(54, 'lol, wonderful story, i like it', 51, 25, '2023-03-26 05:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` int(11) NOT NULL,
  `stories_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `flight` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `stories_image` varchar(200) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `userId` int(11) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1 = published | 0 = unpublished'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `stories_name`, `description`, `flight`, `price`, `categoryId`, `stories_image`, `create_date`, `userId`, `status`) VALUES
(50, 'My Time in Bali', 'As you stepped off the plane and onto the tarmac, you couldn\'t help but feel a sense of excitement and wonder wash over you. You had dreamt of visiting Bali for years, and now you were finally here. The warm, humid air enveloped you as you made your way through the airport, collecting your luggage and passing through customs.\r\n\r\nYour first stop was the town of Ubud, nestled in the lush forests and rice paddies of central Bali. You spent your days exploring the town&amp;amp;#039;s winding streets, admiring the intricate carvings and colorful textiles that adorned the storefronts. You visited the famed Monkey Forest, where cheeky macaques roamed freely and stole bananas from unsuspecting visitors. You also took part in a traditional Balinese dance performance, marveling at the dancers&amp;amp;#039; graceful movements and intricate costumes.\r\n\r\nOne day, you decided to venture out of town and explore the surrounding countryside. You rented a motorbike and set off early in the morning, weaving your way through narrow roads lined with verdant rice paddies and towering palm trees. As you rode, you felt a sense of freedom and adventure that you hadn&amp;amp;#039;t experienced in years.\r\n\r\nYour destination was a hidden waterfall, rumored to be one of the most beautiful spots on the island. After a few wrong turns and a bumpy ride down a rocky path, you arrived at the waterfall&amp;amp;#039;s base. The sound of rushing water and the mist rising from the pool below filled your senses, and you felt a sense of peace wash over you.\r\n\r\nYou spent the rest of your time in Bali exploring the island&amp;amp;#039;s stunning beaches, trying new foods, and immersing yourself in the local culture. As your trip came to a close, you realized that Bali had captured your heart in a way that no other place had. You vowed to return someday, to continue your exploration of this enchanting island and to create more memories that would last a lifetime.', 'Luftansa', '120000', 8, 'http://localhost/tor/uploads/image/Young-male-and-female-on-rowing-boat-on-alpine-lake-1024x683.jpg', '2023-03-25 12:47:41', 24, '1'),
(51, 'Spending time in saint tropez', 'As you stepped off the yacht and onto the docks of Saint Tropez, you couldn\'t help but feel a sense of excitement and awe. The glitz and glamour of the French Riviera were on full display, with sleek sports cars, luxury yachts, and designer boutiques lining the streets.\r\n\r\nYou spent your days exploring the town\'s narrow streets, admiring the colorful buildings and charming cafes that dotted the landscape. You took in the sights and sounds of the famous Place des Lices market, where vendors sold everything from fresh produce to handmade crafts.\r\n\r\nOne day, you decided to venture out of town and explore the surrounding countryside. You rented a car and set off early in the morning, winding your way through narrow roads lined with fragrant lavender fields and picturesque vineyards. As you drove, you felt a sense of freedom and adventure that you hadn\'t experienced in years.\r\n\r\nYour destination was a hidden beach, rumored to be one of the most beautiful spots on the coast. After a few wrong turns and a bumpy ride down a rocky path, you arrived at the beach\'s secluded cove. The crystal-clear waters and white sand beach filled your senses, and you felt a sense of peace wash over you.\r\n\r\nYou spent the rest of your time in Saint Tropez exploring the town\'s stunning beaches, trying new foods, and immersing yourself in the local culture. As your trip came to a close, you realized that the French Riviera had captured your heart in a way that no other place had. You vowed to return someday, to continue your exploration of this enchanting region and to create more memories that would last a lifetime.', 'France Air', '260000', 8, 'http://localhost/tor/uploads/image/265278014.jpg', '2023-03-26 04:52:12', 24, '1'),
(52, 'Me in paris', 'As you stepped off the train and onto the platform at Gare de Lyon, you couldn&#039;t help but feel a sense of excitement and wonder wash over you. You had dreamt of visiting Paris for years, and now you were finally here. The hustle and bustle of the city enveloped you as you made your way through the station, ready to explore all that the City of Light had to offer.\r\n\r\nYour first stop was the iconic Eiffel Tower, towering over the city and offering stunning views from its observation decks. You spent your days wandering the charming neighborhoods, admiring the grand architecture and vibrant street art that adorned the city&#039;s streets. You visited the famed Louvre Museum, marveling at the world-renowned art collections and historic artifacts.\r\n\r\nOne day, you decided to venture out of the city and explore the surrounding countryside. You took a train to Versailles, the opulent palace and gardens that served as the seat of power for the French monarchy. You strolled through the manicured gardens, taking in the stunning fountains and sculptures that dotted the landscape. Inside the palace, you marveled at the ornate decor and rich history that was on full display.\r\n\r\nYou spent the rest of your time in Paris exploring the city&#039;s world-class restaurants, trying new foods, and immersing yourself in the local culture. You sipped espresso in cozy cafes, strolled along the Seine River, and people-watched from the comfort of outdoor patios. As your trip came to a close, you realized that Paris had captured your heart in a way that no other place had. You vowed to return someday, to continue your exploration of this enchanting city and to create more memories that would last a lifetime.', 'France Air', '7560000', 8, 'http://localhost/tor/uploads/image/st-tropez-1-large.jpg', '2023-03-26 04:54:15', 24, '1'),
(53, 'My Holiday in Santorini', 'As you stepped off the plane and onto the tarmac at Santorini Airport, you couldn&#039;t help but feel a sense of excitement and anticipation. You had heard so much about the idyllic Greek island, with its whitewashed buildings, crystal-clear waters, and stunning sunsets.\r\n\r\nYour first stop was the town of Oia, perched on the northern edge of the island and famous for its sweeping views of the Aegean Sea. You spent your days exploring the town&#039;s narrow streets, admiring the iconic blue-domed churches and colorful bougainvillea that adorned the storefronts. You visited the famed Amoudi Bay, where you enjoyed fresh seafood while watching the sun set over the water.\r\n\r\nOne day, you decided to venture out of town and explore the surrounding countryside. You rented a car and set off early in the morning, winding your way through narrow roads lined with fragrant olive groves and picturesque vineyards. As you drove, you felt a sense of freedom and adventure that you hadn&#039;t experienced in years.\r\n\r\nYour destination was the black sand beach of Perissa, one of the most beautiful spots on the island. The contrast between the dark sand and turquoise waters filled your senses, and you felt a sense of peace wash over you.\r\n\r\nYou spent the rest of your time in Santorini exploring the island&#039;s stunning beaches, trying new foods, and immersing yourself in the local culture. You sipped wine at traditional tavernas, strolled along the caldera&#039;s edge, and took a boat tour of the nearby volcanic islands. As your trip came to a close, you realized that Santorini had captured your heart in a way that no other place had. You vowed to return someday, to continue your exploration of this enchanting island and to create more memories that would last a lifetime.', 'Turkish Airlines, Aegean', '370000', 8, 'http://localhost/tor/uploads/image/98451c86a0c36b6501e10f70cd04c267.jpg', '2023-03-27 07:27:34', 24, '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'U',
  `createdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact`, `email`, `password`, `address`, `city`, `type`, `createdate`) VALUES
(24, 'MAIN ADMIN', '08157532266', 'admin@admin.com', '$2y$12$Y6E4HiSt1x.Hh06nEbsbMOxmpXgHNTPuIUc3JLUuZbu/rp6V/ha6W', '11 ibok street, parliamentary road', 'CALABAR', 'A', '2023-03-20 17:15:31'),
(25, 'JONES JAMES', '09022556252', 'jones@gmail.com', '$2y$12$1nBFrNUJLzAT2s8twUVlROGz428PbAHf73V0gBNPyr5fij68Orz6K', 'ian 11 ab', 'london town', 'U', '2023-03-22 08:41:48'),
(27, 'reader', '08157532266', 'reader@gmail.com', '$2y$12$Y6E4HiSt1x.Hh06nEbsbMOxmpXgHNTPuIUc3JLUuZbu/rp6V/ha6W', 'china town', 'london', 'A', '2023-03-26 05:57:58'),
(28, 'TEST USER', '+44897625222', 'testuser@gmail.com', '$2y$12$2nCuqy/HRIMBhGc6TpEL..sl7L3L0w5hlpQn2NeJwxqSUFFdxRFYa', 'flyover estate, apartment 2, test user road', 'London', 'U', '2023-03-27 07:09:21'),
(29, 'STORY GUY', '+44897625225', 'storyguy@gmail.com', '$2y$12$iB0v8b0pLTEtJ7qhH45ZleBOPcTnBGaDp0d1.zu8rPY9TKs3ctbZy', 'story guy avenue, london town', 'London', 'SA', '2023-03-27 07:25:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
