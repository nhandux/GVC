-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2017 at 09:30 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dnw_ct`
--

-- --------------------------------------------------------

--
-- Table structure for table `dnt_online`
--

CREATE TABLE IF NOT EXISTS `dnt_online` (
  `ip` varchar(255) NOT NULL DEFAULT '',
  `session_id` varchar(255) DEFAULT '',
  `expire_time` varchar(255) DEFAULT '',
  `time` varchar(255) DEFAULT '',
  `site` varchar(255) DEFAULT '',
  `agent` varchar(255) DEFAULT '',
  `user` varchar(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dnt_online`
--

INSERT INTO `dnt_online` (`ip`, `session_id`, `expire_time`, `time`, `site`, `agent`, `user`) VALUES
('113.22.156.91', '89rqerj2rufk74i229tmpcu7r7', '1508070598', '1508070498', 'http://congthanh.vn/', '', ''),
('113.22.156.91', '6961e4s3qngsoa7qsbf0c86pd1', '1508070600', '1508070500', 'http://congthanh.vn/', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
