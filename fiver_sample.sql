-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 11, 2022 at 11:29 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiver_sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_title` varchar(150) DEFAULT '',
  `course_description` varchar(150) DEFAULT '',
  `course_audio_tag` char(1) DEFAULT 'F',
  `course_video_tag` varchar(1) DEFAULT 'F',
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS `section` (
  `section_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_title` varchar(150) NOT NULL DEFAULT '',
  `section_num` varchar(150) NOT NULL DEFAULT '',
  `section_description` text NOT NULL,
  `section_audio_tag` char(1) NOT NULL DEFAULT 'F',
  `section_video_tag` char(1) NOT NULL DEFAULT 'F',
  PRIMARY KEY (`section_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `snippet`
--

DROP TABLE IF EXISTS `snippet`;
CREATE TABLE IF NOT EXISTS `snippet` (
  `snippet_id` int(11) NOT NULL AUTO_INCREMENT,
  `snippet_audio_tag` char(1) NOT NULL DEFAULT 'F',
  `snippet_video_tag` char(1) NOT NULL DEFAULT 'F',
  PRIMARY KEY (`snippet_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
