-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 12:15 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ektr7ly`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(3, 'Mangaa', 'mm@m.com', '$2y$10$EF3c.Sni4enqC08XDV8S6upu7C8vPghzFFqMXnx3nXmivW4IOW2/e', '2019-05-28 02:40:30', '2019-06-17 04:44:09'),
(4, 'alo', 'a@a.com', '$2y$10$o7CzGK/xNOTVJLSaliNoR.kwKGoxTOrEnsPIEId4VbRdSvKwaUW2G', '2019-06-17 04:44:46', '2019-06-17 04:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Action', '2019-05-20 14:16:48', '2019-05-20 14:16:48'),
(2, 'comedy', '2019-05-20 14:16:54', '2019-05-20 14:16:54'),
(3, 'Thriller', '2019-05-20 21:59:14', '2019-05-20 21:59:14'),
(4, 'Drama', '2019-05-20 21:59:21', '2019-05-20 21:59:21'),
(5, 'Romance', '2019-05-20 21:59:26', '2019-05-20 21:59:26'),
(6, 'Horror', '2019-05-20 21:59:31', '2019-05-20 21:59:31'),
(7, 'War', '2019-05-20 21:59:46', '2019-05-20 21:59:46'),
(8, 'Sports', '2019-05-20 22:00:11', '2019-05-20 22:00:11'),
(9, 'Musical', '2019-05-20 22:00:37', '2019-05-20 22:00:37'),
(10, 'Advanture', '2019-05-20 22:00:56', '2019-05-20 22:00:56'),
(11, 'Fantasy', '2019-05-20 22:01:10', '2019-05-20 22:01:10'),
(12, 'Mystery', '2019-05-28 03:06:39', '2019-05-28 03:06:39'),
(13, 'Animation', '2019-06-08 15:05:45', '2019-06-08 15:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2019_04_29_181654_create_users_table', 1),
(8, '2019_05_15_150604_create_categories_table', 1),
(9, '2019_05_20_150556_create_movies_table', 1),
(10, '2019_05_20_151508_create_movie_categories_table', 1),
(11, '2019_05_25_144104_create_admins_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `disc`, `image`, `link`, `rate`, `created_at`, `updated_at`) VALUES
(4, 'The Matrix', 'Neo (Keanu Reeves) believes that Morpheus (Laurence Fishburne), an elusive figure considered to be the most dangerous man alive, can answer his question -- What is the Matrix? Neo is contacted by Trinity (Carrie-Anne Moss), a beautiful stranger who leads him into an underworld where he meets Morpheus. They fight a brutal battle for their lives against a cadre of viciously intelligent secret agents. It is a truth that could cost Neo something more precious than his life.', '1559030291.jpg', 'https://www.123moviesgot.com/the-matrix/', 8.7, '2019-05-20 22:29:29', '2019-05-28 18:42:00'),
(5, 'Avengers: Endgame 2019', 'Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow, Captain America and Bruce Banner -- must figure out a way to bring back their vanquished allies for an epic showdown with Thanos -- the evil demigod who decimated the planet and the universe.', '1559030318.jpg', 'https://cima4film.net/avengers-endgame-2019-5may2019/', 8.8, '2019-05-28 03:04:43', '2019-05-28 18:42:25'),
(6, 'John Wick 3: Parabellum', 'After gunning down a member of the High Table -- the shadowy international assassin\'s guild -- legendary hit man John Wick finds himself stripped of the organization\'s protective services. Now stuck with a $14 million bounty on his head, Wick must fight his way through the streets of New York as he becomes the target of the world\'s most ruthless killers.', '1559030326.jpg', 'https://cima4film.net/john-wick-3-parabellum-2019-whatch-download/', 8.1, '2019-05-28 03:06:20', '2019-05-28 18:42:51'),
(7, 'Cold Pursuit', 'Nels Coxman\'s quiet life as a snowplow driver comes crashing down when his beloved son dies under mysterious circumstances. His search for the truth soon becomes a quest for revenge against a psychotic drug lord named Viking and his sleazy henchmen. Transformed from upstanding citizen to coldblooded vigilante, Coxman unwittingly sets off a chain of events that includes a kidnapping, a series of deadly misunderstandings and a turf war between Viking and a rival boss.', '1559030340.jpg', 'https://cima4film.net/%D9%81%D9%8A%D9%84%D9%85-cold-pursuit-2019-hd-%D9%85%D8%AA%D8%B1%D8%AC%D9%85-stem8/', 6.2, '2019-05-28 03:11:47', '2019-05-28 18:43:17'),
(8, 'Godzilla: King of the Monsters', 'Members of the crypto-zoological agency Monarch face off against a battery of god-sized monsters, including the mighty Godzilla, who collides with Mothra, Rodan, and his ultimate nemesis, the three-headed King Ghidorah. When these ancient super-species-thought to be mere myths-rise again, they all vie for supremacy, leaving humanity\'s very existence hanging in the balance.', '1559030357.jpg', 'https://cima4film.net/?s=Godzilla%3A+King+of+the+Monsters', 6.5, '2019-05-28 03:19:04', '2019-05-28 18:43:42'),
(9, 'The Fault in Our Stars', 'Hazel Grace Lancaster (Shailene Woodley), a 16-year-old cancer patient, meets and falls in love with Gus Waters (Ansel Elgort), a similarly afflicted teen from her cancer support group. Hazel feels that Gus really understands her. They both share the same acerbic wit and a love of books, especially Grace\'s touchstone, \"An Imperial Affliction\" by Peter Van Houten. When Gus scores an invitation to meet the reclusive author, he and Hazel embark on the adventure of their brief lives.', '1559030370.png', 'https://cima4film.net/?s=The+Fault+in+Our+Stars', 7.7, '2019-05-28 03:21:07', '2019-05-28 18:44:16'),
(10, 'About Time', 'When Tim Lake (Domhnall Gleeson) is 21, his father (Bill Nighy) tells him a secret: The men in their family can travel through time. Although he can\'t change history, Tim resolves to improve his life by getting a girlfriend. He meets Mary (Rachel McAdams), falls in love and finally wins her heart via time-travel and a little cunning. However, as his unusual life progresses, Tim finds that his special ability can\'t shield him and those he loves from the problems of ordinary life.', '1559030382.jpg', 'https://cima4film.net/?s=About+Time', 7.8, '2019-05-28 03:22:31', '2019-05-28 18:44:53'),
(11, 'The Hangover', 'DescriptionTwo days before his wedding, Doug (Justin Bartha) and three friends (Bradley Cooper, Ed Helms, Zach Galifianakis) drive to Las Vegas for a wild and memorable stag party. In fact, when the three groomsmen wake up the next morning, they can\'t remember a thing; nor can they find Doug. With little time to spare, the three hazy pals try to re-trace their steps and find Doug so they can get him back to Los Angeles in time to walk down the aisle.', '1559030403.jpg', 'https://cima4film.net/?s=The+Hangover', 7.7, '2019-05-28 03:24:13', '2019-05-28 18:45:30'),
(12, '21 Jump Street', 'When cops Schmidt (Jonah Hill) and Jenko (Channing Tatum) join the secret Jump Street unit, they use their youthful appearances to go under cover as high-school students. They trade in their guns and badges for backpacks, and set out to shut down a dangerous drug ring. But, as time goes on, Schmidt and Jenko discover that high school is nothing like it was just a few years earlier -- and, what\'s more, they must again confront the teenage terror and anxiety they thought they had left behind.', '1559030420.jpg', 'https://cima4film.net/?s=21+Jump+Street', 7.2, '2019-05-28 03:25:13', '2019-05-28 18:45:51'),
(13, 'Get Out', 'Now that Chris (Daniel Kaluuya) and his girlfriend, Rose (Allison Williams), have reached the meet-the-parents milestone of dating, she invites him for a weekend getaway upstate with Missy and Dean. At first, Chris reads the family\'s overly accommodating behavior as nervous attempts to deal with their daughter\'s interracial relationship, but as the weekend progresses, a series of increasingly disturbing discoveries lead him to a truth that he never could have imagined.', '1559030482.jpg', 'https://cima4film.net/?s=Get+Out', 7.7, '2019-05-28 03:26:44', '2019-05-28 18:46:34'),
(15, 'it', 'Seven young outcasts in Derry, Maine, are about to face their worst nightmare -- an ancient, shape-shifting evil that emerges from the sewer every 27 years to prey on the town\'s children. Banding together over the course of one horrifying summer, the friends must overcome their own personal fears to battle the murderous, bloodthirsty clown known as Pennywise.', '1559030583.jpg', 'https://cima4film.net/?s=it', 6.5, '2019-05-28 06:03:03', '2019-05-28 18:46:13'),
(16, '12 Strong', 'In the wake of the September 11 attacks, Captain Mitch Nelson leads a US Special Forces team into Afghanistan for an extremely dangerous mission. Once there, the soldiers develop an uneasy partnership with the Northern Alliance to take down the Taliban and its al-Qaida allies. Outgunned and outnumbered, Nelson and his forces face overwhelming odds in a fight against a ruthless enemy that takes no prisoners.', '1560013082.jpg', 'https://www.directv.com/movies/12-Strong-VHdFcGk5V256L3FKd2lBQ3RvOWJWZz09', 6.6, '2019-06-08 14:58:03', '2019-06-08 14:58:03'),
(17, 'A street cat named bob', 'A stray ginger cat changes the life of James Bowen (Luke Treadaway), a homeless London street musician and recovering drug addict.', '1560013254.jpg', 'https://www.moviefone.com/movie/a-street-cat-named-bob/20087832/where-to-watch/', 7.4, '2019-06-08 15:00:54', '2019-06-08 15:00:54'),
(18, 'Boyka: Undisputed', 'Boyka (Scott Adkins) accidentally kills an opponent in the ring, forcing him to question everything he\'s worked for. When he finds out his opponent\'s widow is in trouble, he becomes her champion in a series of seemingly impossible fights.', '1560013381.jpg', 'https://www.youtube.com/watch?v=IpiiszdktB4', 7, '2019-06-08 15:03:01', '2019-06-08 15:03:01'),
(19, 'Breath', 'In the 1970s, in a remote corner of the Western Australian coast, two teenage boys, Pikelet and Loonie, are hungry for discovery. The pair form an unlikely friendship with Sando, a mysterious older surfer and adventurer who pushes the boys to take risks that will have a lasting and profound impact on their lives.', '1560013499.jpg', 'https://ww2.putlockerfree.sc/films/breath-2017-21/', 6.8, '2019-06-08 15:04:59', '2019-06-08 15:04:59'),
(20, 'Coco', 'Despite his family\'s generations-old ban on music, young Miguel dreams of becoming an accomplished musician like his idol Ernesto de la Cruz. Desperate to prove his talent, Miguel finds himself in the stunning and colorful Land of the Dead. After meeting a charming trickster named Héctor, the two new friends embark on an extraordinary journey to unlock the real story behind Miguel\'s family history.', '1560013682.jpg', 'https://old123movies.com/coco-2017/', 8.4, '2019-06-08 15:08:02', '2019-06-08 15:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `movie_categories`
--

CREATE TABLE `movie_categories` (
  `movie_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie_categories`
--

INSERT INTO `movie_categories` (`movie_id`, `category_id`, `created_at`, `updated_at`) VALUES
(4, 1, NULL, NULL),
(4, 2, NULL, NULL),
(5, 1, NULL, NULL),
(5, 10, NULL, NULL),
(5, 11, NULL, NULL),
(6, 1, NULL, NULL),
(6, 3, NULL, NULL),
(6, 12, NULL, NULL),
(7, 1, NULL, NULL),
(7, 3, NULL, NULL),
(7, 4, NULL, NULL),
(8, 1, NULL, NULL),
(8, 10, NULL, NULL),
(8, 11, NULL, NULL),
(9, 4, NULL, NULL),
(9, 5, NULL, NULL),
(10, 4, NULL, NULL),
(10, 11, NULL, NULL),
(11, 2, NULL, NULL),
(12, 1, NULL, NULL),
(12, 2, NULL, NULL),
(13, 6, NULL, NULL),
(15, 6, NULL, NULL),
(16, 1, NULL, NULL),
(16, 4, NULL, NULL),
(17, 2, NULL, NULL),
(17, 4, NULL, NULL),
(18, 1, NULL, NULL),
(18, 4, NULL, NULL),
(19, 4, NULL, NULL),
(19, 8, NULL, NULL),
(20, 11, NULL, NULL),
(20, 12, NULL, NULL),
(20, 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mood` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `groupID` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mood`, `groupID`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Elmasry', 'a@a.com', '$2y$10$6xaUbKUuMMPiI7CNf4ysoOxfn6vE77nRIH/.hxgw57aibE2KuhYB2', NULL, 1, '2019-05-21 21:19:15', '2019-05-25 11:58:51'),
(2, 'Ali Elsayed', 'ali@ali.com', '$2y$10$u5fun8plQdnuu7NY0cWVM.ORU51/3ty6BBlhWV8tuBZQ2mFRnBaOi', NULL, 0, '2019-05-24 02:01:00', '2019-05-25 11:57:38'),
(4, 'hossam mohamed', 'h@h.com', '$2y$10$.A0PnofuGDs5hjqJE1nRH.L7crKgAjBAFjHnITkymA8fDgQ0X5ob.', NULL, 0, '2019-05-26 23:22:37', '2019-05-26 23:22:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_categories`
--
ALTER TABLE `movie_categories`
  ADD KEY `movie_categories_movie_id_index` (`movie_id`),
  ADD KEY `movie_categories_category_id_index` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie_categories`
--
ALTER TABLE `movie_categories`
  ADD CONSTRAINT `movie_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_categories_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
