-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 04:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `port`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(3) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `nama`, `password`, `role_id`, `is_active`) VALUES
(6, 'nandana', 'Zada', '$2y$10$.F8exO1SayzAXyrxwwhMRecuYrc3h2Q8qc5UiUwlDeB.MeK3vl0l6', 1, 1),
(7, 'dinda', 'dinpat', '$2y$10$bYGk1vB0vqByt4a/wOWe9.GPfvp2YdQcFvFpMyfxi40XkguVgIp26', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `change_text_skills`
--

CREATE TABLE `change_text_skills` (
  `id` int(11) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `change_text_skills`
--

INSERT INTO `change_text_skills` (`id`, `subtitle`, `title`, `deskripsi`) VALUES
(1, 'SKILLS', 'MY SKILLS', 'Saya dapat menguasai beberapa bahasa pemrograman di samping. Saya belajar bahasa pemrograman ketika saya masih duduk dibangku sekolah dan juga belajar secara otodidak.');

-- --------------------------------------------------------

--
-- Table structure for table `change_text_title`
--

CREATE TABLE `change_text_title` (
  `id` int(11) NOT NULL,
  `text_nama` varchar(255) NOT NULL,
  `text_profesi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `change_text_title`
--

INSERT INTO `change_text_title` (`id`, `text_nama`, `text_profesi`) VALUES
(1, 'My Name is Zexel', 'Web Developer,Programmer,UI/UX');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `change_text_skills`
--
ALTER TABLE `change_text_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `change_text_title`
--
ALTER TABLE `change_text_title`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `change_text_skills`
--
ALTER TABLE `change_text_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `change_text_title`
--
ALTER TABLE `change_text_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
