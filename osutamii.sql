-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Noi 2015 la 00:28
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `osutamii`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `hofwins`
--

CREATE TABLE IF NOT EXISTS `hofwins` (
  `ID` mediumint(2) NOT NULL AUTO_INCREMENT,
  `Nume` text NOT NULL,
  `Data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pp_email` text NOT NULL,
  PRIMARY KEY (`ID`),
  FULLTEXT KEY `Nume` (`Nume`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Salvarea datelor din tabel `hofwins`
--

INSERT INTO `hofwins` (`ID`, `Nume`, `Data`, `pp_email`) VALUES
(1, 'gegwagweagwe', '2015-09-10 22:46:18', ''),
(2, 'gewg ewgweg', '2015-09-10 22:46:27', ''),
(3, 'reg ', '2015-09-10 22:47:08', ''),
(4, 'fewafwefwaef', '2015-09-10 22:56:54', ''),
(5, 'ewgaweg ewga', '2015-09-10 23:02:14', ''),
(6, 'gewgewg', '2015-09-10 23:04:01', ''),
(7, 'gewgewg', '2015-09-10 23:04:28', ''),
(8, 'gewgewg', '2015-09-10 23:04:34', ''),
(9, 'gresgesrg', '2015-09-10 23:05:07', ''),
(10, 'gerasgrger', '2015-10-05 10:29:56', ''),
(11, 'fewafwe gwag', '2015-10-05 10:30:22', ''),
(12, 'cos cos cos', '2015-10-05 10:30:29', ''),
(13, 'sergiose', '2015-10-18 09:05:10', ''),
(14, 'gersgreg', '2015-10-24 10:48:33', ''),
(15, 'gsagreg', '2015-10-24 11:02:50', ''),
(16, 'aergewgerg', '2015-10-24 11:49:04', ''),
(17, 'sdfag', '2015-10-29 21:11:26', ''),
(18, 'sdfgsdfgsdfh', '2015-10-29 21:11:42', ''),
(19, 'sdfgsdfgsdfh', '2015-10-29 21:12:14', ''),
(20, 'sdfhsdfh fdh', '2015-10-29 21:12:20', ''),
(21, 'sdfhsdfh fdh', '2015-10-29 21:12:43', ''),
(22, 'dfsg fdsgsdf', '2015-10-29 21:13:38', ''),
(23, 'sdafadf', '2015-10-30 21:24:24', ''),
(24, 'dsaf', '2015-10-30 21:38:26', 'dsafsg@yahoo.com'),
(25, 'dsaffdg', '2015-10-30 21:39:02', 'dsaffdg@yahoo.com'),
(26, 'Mimi Valoare', '2015-11-02 17:51:35', ''),
(27, 'fdgsdfg', '2015-11-02 22:55:10', 'sggaeg');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `times_played` int(11) DEFAULT '-1',
  `email` text NOT NULL,
  `Date_joined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Salvarea datelor din tabel `members`
--

INSERT INTO `members` (`ID`, `user`, `pass`, `times_played`, `email`, `Date_joined`) VALUES
(1, 'user1', 'pass1', 76, 'email1@email.com', '2015-10-31 12:08:40'),
(2, 'user2', 'pass2', 55, '', '2015-10-31 12:08:40'),
(3, 'user3', 'pass3', 20, 'mail3', '2015-10-31 12:08:40'),
(4, 'user4', 'pass4', 21, 'sdf@yahoo.com', '2015-10-31 12:08:40'),
(6, 'user5', 'pass5', -1, 'dsmfp@gdgop.com', '2015-10-31 12:08:40'),
(7, 'user6', 'pass6', 1, 'fgs@hao.com', '2015-10-31 12:08:40'),
(8, 'user9', 'pass9', -1, 'sdpomgap@hgpdof.com', '2015-10-31 12:13:35'),
(10, 'user10', 'pass10', 9, '1010@yaho.10', '2015-11-01 08:57:19'),
(11, 'user11', 'pass11', -1, 'email1@email.com', '2015-11-01 09:35:26'),
(12, 'ieaog', 'sadonsadiogn', -1, 'email1@email.com', '2015-11-01 09:50:20'),
(13, 'user12', 'pass12', -1, 'mail12@12.com', '2015-11-01 09:50:52'),
(14, 'asdgsdfg', 'fdsgsdfg', -1, 'mail12@12.com', '2015-11-01 09:50:59'),
(15, 'fdags', 'dfsgsdfg', -1, 'mail12@12.com', '2015-11-01 09:51:41'),
(16, 'fdsgsdfg', 'sdagadfg', -1, 'mail12@12.com', '2015-11-01 09:52:58'),
(17, 'sadgdsf', 'sfdgsdfg', -1, 'mail12@12.com', '2015-11-01 09:55:57'),
(18, 'asdpfnpo', 'asdopfop', -1, 'mail13@13.com', '2015-11-01 09:56:25'),
(19, 'asgppogm', 'fdposgop', -1, 'mail13@13.com', '2015-11-01 09:56:31'),
(20, 'fdgsdfg', 'dsfagfsdg', -1, 'mail14@14.com', '2015-11-01 09:58:35'),
(21, 'fds', 'sdfgdsfg', -1, 'mail14@14.com', '2015-11-01 09:58:47'),
(22, 'fdsgsdfg', 'fdgsdfg', -1, 'mail15@15.com', '2015-11-01 09:59:36'),
(23, 'gfdfs', 'dfsgsdfg', -1, 'mail15@15.com', '2015-11-01 09:59:42'),
(24, 'fdgsdf', 'sdfgsdfgsd', -1, 'mail16@16.com', '2015-11-01 10:00:10'),
(25, 'dfsgdsfg', 'dfgsdfgsdf', -1, 'mail16@16.com', '2015-11-01 10:00:15'),
(26, 'fdsgsdf', 'fdsgdsfg', -1, 'mail17@17.com', '2015-11-01 10:01:23'),
(27, 'sdagfdsg', 'dfsgdfsg', -1, 'mail17@17.com', '2015-11-01 10:01:33'),
(28, 'fdsgdsfg', 'sfdgsdfg', -1, 'mail18@18.com', '2015-11-01 10:03:13'),
(29, 'sdfgsdfgs', 'sdfgsdfg', -1, 'mail18@18.com', '2015-11-01 10:03:20'),
(30, 'sdfgsdfg', 'fsdgsdfg', -1, 'sreg@sdfg.com', '2015-11-01 10:04:38'),
(31, 'sdfgsdfg', 'sfdgsdfg', -1, 'mail19@19.com', '2015-11-01 10:05:25'),
(32, 'sdfgdsfg', 'sdfgsdfg', -1, 'mail22@22.com', '2015-11-01 10:14:43'),
(33, 'dfsdf', 'sadfasdf', -1, 'dsopg@hdf.com', '2015-11-01 11:16:51');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
