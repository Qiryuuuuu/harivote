-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 12, 2024 at 09:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(60) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `created_on` date NOT NULL DEFAULT current_timestamp(),
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `photo`, `created_on`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(1, 'Daryll', 'Banal', 'admindaryll', NULL, '$2y$10$26kwUurO0HsMXVgT.ia4R.7HEpQ2tGUelvyFda76q9HbeH7N/fmMu', 'Banal.png', '2018-04-02', NULL, NULL),
(2, 'Jastine', 'De Guzman', 'adminJastine', NULL, 'password', '', '0000-00-00', NULL, NULL),
(10, 'Daryll', 'Banal', 'Harivote_admin', NULL, 'Harivote_Daryll12345', 'Banal.jpg', '2023-06-01', NULL, NULL),
(25, 'JONIEL', 'BOLOCON', 'adminJoniel', 'jonielbolocon51@gmail.com', '$2y$10$FcyCB.ShmSGhJv4NBpaJBO6j8fvxWAW7VZZrfUZQq/Mp2LzOMuS/O', '', '2023-12-24', NULL, NULL),
(31, 'JONIEL', 'BOLOCON', 'adminJoniel', 'qiryuq@gmail.com', '$2y$10$I6uf9ozq3lPYksfwT2bj3.sGb2CbrbnU7Q1GUtQOQmcv7vU.g5Lme', '', '2024-01-03', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `approvecandidates`
--

CREATE TABLE `approvecandidates` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `approvecandidates`
--

INSERT INTO `approvecandidates` (`id`, `firstname`, `lastname`, `photo`, `platform`, `email`, `position`, `date`) VALUES
(1, 'Daryll', 'Banal', '', 'daryulll', 'daryll.gikt@gmail.com', ' President', '0000-00-00 00:00:00'),
(2, 'Mariana', 'Mariano', '', 'asdfasf', 'anquizon2021@plm.edu.ph', ' Auditor', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `platform` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `position_id`, `firstname`, `lastname`, `photo`, `platform`) VALUES
(26, 11, 'Andrei ', 'Quizon', 'download (1).jpg', 'Nasa inyong harapan, Andrei, today! Aksyong mabilis at maaasahan, problema’y maaksyunan, kaban ng Pamantasan, aking iingatan! '),
(27, 11, 'Isabella Jane', 'Mangahas', 'Nicole.jpg', 'Boses ng isa, Boses ni Isabella! Hayaan ninyo akong pakinggan ang boses ng bawat estudyante sa CET, at akin itong isisigaw nang may buong tapang kasama ang Partidong Maka-Pamantasan!'),
(28, 13, 'Marie Chelsea', 'Tollosa', 'Nicole.jpg', 'Tollosa, tool niyo sa Pamantasan! Samahan niyo ako! Isang Pamantasan, ating isusulong! Kasama ang buong CET, isulong natin ang mas epektibong Pamantasan sa Partidong Maka-Pamantasan!'),
(29, 13, 'Mariana', 'Mariano', '', 'Tollosa, tool niyo sa Pamantasan! Samahan niyo ako! Isang Pamantasan, ating isusulong! Kasama ang buong CET, isulong natin ang mas epektibong Pamantasan sa Partidong Maka-Pamantasan!'),
(30, 14, 'Daniel', 'Albano', '1.jpg', 'Daniel Albano para sa CET! CET para sa mga estudyante! Mga estudyante para sa mas progresibong Pamantasan! Pamantasa’y paglilingkuran ni Albano! '),
(31, 14, 'Lana', 'Delos Reyes', '6.jpg', 'Lana at your service! Lana mahihirapan sa Pamantasang Maka-Pamantasan! Vice President ng CET, libreng music concerts at tutorial sessions, isusulong natin yan!'),
(32, 15, 'Kali', 'Mutya', '2.jpg', 'Kali Mutya, pangalang hindi niyo makalilimutan! Kali, inyong kaagapay! Maka-estudyanteng ICpEP, execute natin yan! Free developer bootcamps, execute din natin yan! '),
(33, 15, 'Keagan', 'Santos', '4.jpg', 'Keagan tayo! Keagan, walang engineer ang maiiwan! Keagan, may printing area tayo! Keagan, mabibigyan ng sapat na training ang engineers! Keagan tayo, ICpEP!'),
(34, 16, 'Kyle', 'Surmeon', 'photo_2022-06-17_16-16-24.jpg', 'Kyle tayo! Kyle, walang engineer ang maiiwan! Keagan, may printing area tayo! Keagan, mabibigyan ng sapat na training ang engineers! Keagan tayo, ICpEP!'),
(35, 16, 'Wilhelmina', 'Cruz', 'kyle.jpg', 'Wilhelmina, walang engineer ang maiiwan! Keagan, may printing area tayo! Keagan, mabibigyan ng sapat na training ang engineers! Keagan tayo, ICpEP!'),
(36, 17, 'Daryll', 'Banal', '3.jpg', 'Platform');

-- --------------------------------------------------------

--
-- Table structure for table `candidateslist`
--

CREATE TABLE `candidateslist` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `photo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `platform` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `position` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `candidateslist`
--

INSERT INTO `candidateslist` (`id`, `firstname`, `lastname`, `photo`, `platform`, `email`, `position`, `date`) VALUES
(45, 'Jastine', 'De Guzman', '', 'Platform', 'jastinedeguzman01@gmail.com', 'President', '2023-06-10 09:52:54');

-- --------------------------------------------------------

--
-- Table structure for table `filereport`
--

CREATE TABLE `filereport` (
  `id` tinyint(4) NOT NULL,
  `help_name` text NOT NULL,
  `help_email` text NOT NULL,
  `help_subject` text NOT NULL,
  `help_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filereport`
--

INSERT INTO `filereport` (`id`, `help_name`, `help_email`, `help_subject`, `help_description`) VALUES
(1, 'Joseph Alambra', 'jnalambra2021@plm.edu.ph', 'Error Report', 'I had a problem clicking the link.'),
(2, 'Marie Chelsea Tollosa', 'mctollosa2020@plm.edu.ph', 'Error Report', 'I cannot apply as a candidate.'),
(3, ' Isabella Jane Mangahas ', 'ijmangahas2022@plm.edu.ph', 'Cannot make an election', 'Cannot make an election'),
(4, ' Isabella Jane Mangahas ', 'ijmangahas2022@plm.edu.ph', 'Cannot make an election', 'asdf'),
(5, ' Isabella Jane Mangahas ', 'ijmangahas2022@plm.edu.ph', 'asdf', 'asdf'),
(6, ' Isabella Jane Mangahas ', 'ijmangahas2022@plm.edu.ph', 'asdf', 'asdf'),
(7, ' Isabella Jane Mangahas ', 'ijmangahas2022@plm.edu.ph', 'asdf', 'asdf'),
(8, 'Jastine De Guzman', 'jvdeguzman2021@plm.edu.ph', 'Cannot submit a candidacy form', 'I am Jastine De Guzman, and I Cannot submit a candidacy form'),
(9, 'Jastine De Guzman', 'jvdeguzman2021@plm.edu.ph', 'Cannot make an election', 'asdf'),
(10, 'joni', 'secret', 'test', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `max_vote` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `description`, `max_vote`, `priority`) VALUES
(11, 'President of Harivote', 1, 1),
(13, 'Vice President', 1, 2),
(14, 'Secretary ', 1, 3),
(15, 'Treasurer', 1, 4),
(16, 'PRO', 1, 5),
(17, 'Representatives', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `voters_id` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `studno` int(10) NOT NULL,
  `degree` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `year` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `voters_id`, `password`, `firstname`, `lastname`, `studno`, `degree`, `year`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(23, 'XztMG6Y9KgmvxAd', '$2y$10$RLzMLUn6wdMzWVxY5Dkp2uRbjyeq3iSCPlYIxiacxEhtn/gO.Epny', 'Daryll Banal', 'daryllbanal1030@gmail.com', 202100863, 'Computer Engineering', '2nd', NULL, NULL),
(24, '5jxnBmMIYNgh1uo', '$2y$10$sWxnYFuTYbv3wpnjLd9wDONKJ4LxBc4mWGkGjH1UZFFY1sen0Y0Ou', 'Jastine De Guzman', 'jastinedeguzman01@gmail.com', 202110287, 'Computer Engineering', '2nd', NULL, NULL),
(25, 'ZjVFMcBAIWi658v', '$2y$10$4vmXBHyUhyyo1poW54jp.ui/PvK50h5JS9jTtr3fzOPTypEzC6IIm', 'Joseph Alambra', 'jnialambra2021@plm.edu.ph', 202100859, 'Computer Engineering', '2nd', NULL, NULL),
(26, 'wly4gvEFZeMQPR2', '$2y$10$XXLu.ugviY.SjBYhNn4paOSSe61JOK1z0YMDdptJpc9DhbB552qcK', 'Patrick Laurence Aragon', 'plmaragon2021@plm.edu.ph', 202100906, 'Computer Engineering', '2nd', NULL, NULL),
(27, 'Pef9o5dcQYUi86b', '$2y$10$MvdVr1hNxcuDiPJUhCgorONQtivzlUIR4kYgXakKrvjopsxUF.4I.', 'Brayden Banal', 'daryll.gikt@gmail.com', 202100123, 'Computer Engineering', '2nd', NULL, NULL),
(28, 'AcJdSv2rlsiDgbR', '$2y$10$fw0RKdoDrVFhFLS5suZRw.ndxaDUO9xyOODKl/Z9W6zmnXyHHbyvu', 'Kyle Surmeon', 'surmeon@gmail.com', 202100861, 'Computer Engineering', '3rd', NULL, NULL),
(29, 'V5YnyPDdSw4se1T', '$2y$10$deyfBcbv0WqRIRHwIMtJR.lpS3J05VMfF4S1DpiYS8zZRNiBTB8Ju', 'Joniel Bolocon', 'JonielBolocon@gmail.com', 202102023, 'Computer Engineering', '3rd', NULL, NULL),
(33, 'a5Z9TmVANgbELso', '$2y$10$B4RoHERZhBK1lydpSPG7AuvRSo9C39f07SVstQ4mpgIpZEExXyrlS', 'Daryll Banal', 'darylllbanal@gmail.com', 202102022, 'Computer Engineering', '3rd', NULL, NULL),
(34, 'OSHqtPXE97FB2rd', '$2y$10$7A1m29hnY2i5.k/T7aC1nuTrHwdcG2ZXVrFViKIdcl8h10Yk.yQ4a', 'Joniel Bolocon', 'qqiryu@gmail.com', 202100913, 'Computer Engineering', '3rd', NULL, NULL),
(35, 'nRwUS9gdiGfaWry', '$2y$10$Lw.FFR8wrtnmEUmUT8Ej/uRn4Ea/btI.M7/.HqDYexjwWgGhwYMem', 'Joniel', 'jonielbolocon51@gmail.com', 123, 'Computer Engineering', '3rd', NULL, NULL),
(36, 'lEIZ7NfrSnkM3dF', '$2y$10$A1ddxreZnS9etrbo/Fj3eeEhmp6pXPu5mzg9Z0phupjxxE62WMVJO', 'JONIEL', 'jonielbolocon51@gmail.com', 1234, 'Computer Engineering', '3rd', '071a84602b981fda276bf9b4ee2b463520e4f040e715ad57a164b3ee1217aa77', '2024-01-12 10:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `voters_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `voters_id`, `candidate_id`, `position_id`) VALUES
(176, 24, 27, 11),
(177, 24, 28, 13),
(178, 24, 31, 14),
(179, 24, 33, 15),
(180, 24, 34, 16),
(181, 24, 36, 17),
(182, 27, 26, 11),
(183, 27, 29, 13),
(184, 27, 30, 14),
(185, 27, 32, 15),
(186, 27, 34, 16),
(187, 27, 36, 17),
(188, 25, 27, 11),
(189, 25, 29, 13),
(190, 25, 31, 14),
(191, 25, 32, 15),
(192, 25, 35, 16),
(193, 25, 36, 17),
(194, 25, 36, 19),
(195, 28, 26, 11),
(196, 28, 28, 13),
(197, 28, 31, 14),
(198, 28, 35, 16),
(199, 28, 36, 17),
(200, 30, 26, 11),
(201, 30, 28, 13),
(202, 30, 30, 14),
(203, 30, 33, 15),
(204, 30, 34, 16),
(205, 30, 36, 17),
(206, 32, 26, 11),
(207, 32, 28, 13),
(208, 32, 30, 14),
(209, 32, 32, 15),
(210, 32, 34, 16),
(211, 32, 36, 17),
(212, 33, 26, 11),
(213, 33, 29, 13),
(214, 33, 30, 14),
(215, 33, 32, 15),
(216, 33, 34, 16),
(217, 33, 36, 17),
(218, 35, 26, 11),
(219, 35, 29, 13),
(220, 35, 31, 14),
(221, 35, 32, 15),
(222, 35, 34, 16),
(223, 35, 36, 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- Indexes for table `approvecandidates`
--
ALTER TABLE `approvecandidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidateslist`
--
ALTER TABLE `candidateslist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filereport`
--
ALTER TABLE `filereport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reset_token_hash` (`reset_token_hash`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `approvecandidates`
--
ALTER TABLE `approvecandidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `candidateslist`
--
ALTER TABLE `candidateslist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `filereport`
--
ALTER TABLE `filereport`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
