-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2018 at 09:06 AM
-- Server version: 5.5.28
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `apply_job`
--

CREATE TABLE IF NOT EXISTS `apply_job` (
  `id_applyjob` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `id_jobpost` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_applyjob`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `apply_job`
--

INSERT INTO `apply_job` (`id_applyjob`, `id_company`, `id_jobpost`, `id_user`) VALUES
(10, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id_company` int(11) NOT NULL AUTO_INCREMENT,
  `companyname` varchar(255) NOT NULL,
  `contactno` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `companytype` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `aboutme` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_company`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id_company`, `companyname`, `contactno`, `website`, `companytype`, `email`, `password`, `country`, `state`, `city`, `aboutme`, `logo`, `createdAt`, `active`) VALUES
(1, 'google', '1234567890', 'www.google.com', NULL, 'google@gmail.com', '1234', 'india', 'kerala', 'ernakulam', 'well known company', NULL, '2018-02-22 23:13:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_mailbox`
--

CREATE TABLE IF NOT EXISTS `company_mailbox` (
  `id_mail` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `id_jobpost` int(11) NOT NULL,
  `mail_title` varchar(500) CHARACTER SET utf8 NOT NULL,
  `mail_content` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `company_mailbox`
--

INSERT INTO `company_mailbox` (`id_mail`, `id_company`, `id_jobpost`, `mail_title`, `mail_content`, `createdAt`) VALUES
(1, 1, 2, 'Test Title', 'Testing', '2018-03-17 15:04:26'),
(2, 1, 2, 'AAA', '<p>abc</p>', '2018-03-17 15:39:11'),
(3, 1, 1, 'test 2', '<p>test 2</p>', '2018-03-17 15:39:45');

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE IF NOT EXISTS `job_post` (
  `id_jobpost` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `jobtitle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `minimumsalary` varchar(255) NOT NULL,
  `maximumsalary` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_jobpost`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`id_jobpost`, `id_company`, `jobtitle`, `description`, `minimumsalary`, `maximumsalary`, `experience`, `qualification`, `createdAt`) VALUES
(1, 1, 'bpo', '<p>well-knowlede in java,php and dbms</p>', '20000', '50000', '0', 'mca', '2018-02-24 16:54:44'),
(2, 1, 'manager', '<p>The managing post of ernakulam branch</p>', '40000', '50000', '5', 'btech', '2018-03-01 11:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `contactno` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `stream` varchar(255) DEFAULT NULL,
  `passingyear` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `password`, `address`, `city`, `state`, `country`, `contactno`, `qualification`, `stream`, `passingyear`, `dob`, `age`, `designation`, `photo`, `active`) VALUES
(1, 'arjun', 't k', 'arjuntk6258@gmail.com', '1234', 'Thazhathetharayil house\r\nkulayettikkara p.o\r\nkeechery', 'ernakulam', 'kerala', 'india', '9496633406', 'mca', 'computer application', '2018-04-03', '1994-09-13', '23', 'student', '5a9797a943ada.png', 1),
(2, 'athul', 'jose', 'athuljosemenachery@gmail.com', '123', '', 'ernakulam', 'kerala', 'india', '', 'mca', '', '', '', '', '', '5a9c3bffb8a45.png', 1),
(4, 'test', 'test', 'test@a.com', '1234', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_mailbox`
--

CREATE TABLE IF NOT EXISTS `user_mailbox` (
  `id_usermail` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `id_jobpost` int(11) NOT NULL,
  `mail_title` varchar(255) NOT NULL,
  `mail_content` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_mailbox`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_qualification`
--

CREATE TABLE IF NOT EXISTS `user_qualification` (
  `q_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `q_level` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `institution` varchar(200) NOT NULL,
  `university` varchar(200) NOT NULL,
  `percentage` float NOT NULL,
  `grade` varchar(2) NOT NULL,
  `passout` date NOT NULL,
  `register_number` int(100) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_qualification`
--

