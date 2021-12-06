  -- phpMyAdmin SQL Dump
  -- version 4.6.6
  -- https://www.phpmyadmin.net/
  --
  -- Host: localhost
  -- Generation Time: May 14, 2020 at 10:23 AM
  -- Server version: 5.7.17-log
  -- PHP Version: 7.1.1

  SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
  SET time_zone = "+00:00";


  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
  /*!40101 SET NAMES utf8mb4 */;

  --
  -- Database: `LMSQuiz`
  --

  -- --------------------------------------------------------

  --
  -- Structure fot the table options`
  --

  CREATE TABLE `options` (
    `id` int(11) NOT NULL,
    `question_number` int(11) NOT NULL,
    `is_correct` tinyint(1) NOT NULL DEFAULT '0',
    `caption` text NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

  --
  -- Dumping data for table `options`
  --

  INSERT INTO `options` (`id`, `question_number`, `is_correct`, `caption`) VALUES

  (33, 10, 0, 'dumb answer');

  -- --------------------------------------------------------

  --
  -- Table structure for table `questions`
  --

  CREATE TABLE `questions` (
    `question_number` int(11) NOT NULL,
    `question_text` text NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

  --
  -- Dumping data for table `questions`
  --

  INSERT INTO `questions` (`question_number`, `question_text`) VALUES
  (10, 'Dumb question to add');

  --
  -- Indexes for dumped tables
  --

  --
  -- Indexes for table `options`
  --
  ALTER TABLE `options`
    ADD PRIMARY KEY (`id`);

  --
  -- Indexes for table `questions`
  --
  ALTER TABLE `questions`
    ADD PRIMARY KEY (`question_number`);

  --
  -- AUTO_INCREMENT for dumped tables
  --

  --
  -- AUTO_INCREMENT for table `options`
  --
  ALTER TABLE `options`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
