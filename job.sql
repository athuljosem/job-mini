-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2018 at 05:10 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `apply_job`
--

INSERT INTO `apply_job` (`id_applyjob`, `id_company`, `id_jobpost`, `id_user`) VALUES
(13, 4, 13, 5),
(14, 4, 14, 5);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id_company`, `companyname`, `contactno`, `website`, `companytype`, `email`, `password`, `country`, `state`, `city`, `aboutme`, `logo`, `createdAt`, `active`) VALUES
(1, 'google', '1234567890', 'www.google.com', NULL, 'google@gmail.com', '1234', 'india', 'kerala', 'ernakulam', 'well known company', NULL, '2018-02-22 23:13:59', 1),
(3, 'TCS', NULL, NULL, NULL, 'tcs@gmail.com', '1234', NULL, NULL, NULL, NULL, NULL, '2018-03-21 09:45:12', 0),
(4, 'lcc', NULL, NULL, NULL, 'lcckothamangalam@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, '2018-03-21 18:44:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company_mailbox`
--

CREATE TABLE IF NOT EXISTS `company_mailbox` (
  `id_mail` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_jobpost` int(11) DEFAULT NULL,
  `mail_title` varchar(500) CHARACTER SET utf8 NOT NULL,
  `mail_content` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `company_mailbox`
--

INSERT INTO `company_mailbox` (`id_mail`, `id_company`, `id_user`, `id_jobpost`, `mail_title`, `mail_content`, `createdAt`) VALUES
(9, 4, 5, NULL, 'db devloper', '<p>you can come on 25 march</p>', '2018-03-21 19:08:10'),
(10, 4, NULL, 14, 'interview', '<p style="text-align: left;">interview scheduled on 30 march</p>', '2018-03-21 19:09:38');

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
  `ug_course` varchar(255) DEFAULT NULL,
  `ug_mark` int(11) DEFAULT NULL,
  `pg_course` varchar(255) DEFAULT NULL,
  `pg_mark` int(11) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_jobpost`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`id_jobpost`, `id_company`, `jobtitle`, `description`, `minimumsalary`, `maximumsalary`, `experience`, `ug_course`, `ug_mark`, `pg_course`, `pg_mark`, `createdAt`, `active`) VALUES
(13, 4, 'website designer', '<p>those who have experince in website design can apply for the job</p>', '25000', '35000', '2', '', NULL, '', NULL, '2018-03-21 18:54:33', 1),
(14, 4, 'Database developer', '<p>those who are interested in managing database can apply</p>', '30000', '40000', '0', ' Bsc CS-COMPUTER', NULL, ' MCA-Computer', NULL, '2018-03-21 19:05:13', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `password`, `address`, `city`, `state`, `country`, `contactno`, `qualification`, `stream`, `passingyear`, `dob`, `age`, `designation`, `photo`, `active`) VALUES
(1, 'arjun', 't k', 'arjuntk6258@gmail.com', '1234', 'Thazhathetharayil house\r\nkulayettikkara p.o\r\nkeechery', 'ernakulam', 'kerala', 'india', '9496633406', 'mca', 'computer application', '2018-04-03', '1994-09-13', '24', 'student', '5aaf8202cfff6.jpg', 1),
(2, 'athul', 'jose', 'athuljosemenachery@gmail.com', '123', '', 'ernakulam', 'kerala', 'india', '', 'mca', '', '', '', '', '', '5a9c3bffb8a45.png', 1),
(4, 'test', 'test', 'test@a.com', '1234', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(5, 'vishnu', 's', '7694vishnus@gmail.com', '1234', 'Nellikuzhi', 'Ernakulam', 'kerala', NULL, '9400827569', 'MCA', 'Computer', '2018-11-20', '1994-06-07', '23', 'Web designer', '5ab25ddfcf387.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_mailbox`
--

CREATE TABLE IF NOT EXISTS `user_mailbox` (
  `id_usermail` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `id_jobpost` int(11) DEFAULT NULL,
  `mail_title` varchar(255) NOT NULL,
  `mail_content` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usermail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_mailbox`
--

INSERT INTO `user_mailbox` (`id_usermail`, `id_user`, `id_company`, `id_jobpost`, `mail_title`, `mail_content`, `createdAt`) VALUES
(2, 5, 4, NULL, 'DB devloper', 'i would like to have an appointment i', '2018-03-21 19:06:49');

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
  `institution` varchar(200) DEFAULT NULL,
  `university` varchar(200) DEFAULT NULL,
  `percentage` float DEFAULT NULL,
  `grade` varchar(2) DEFAULT NULL,
  `passout` int(11) DEFAULT NULL,
  `register_number` int(100) DEFAULT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user_qualification`
--

INSERT INTO `user_qualification` (`q_id`, `user_id`, `q_level`, `qualification`, `subject`, `institution`, `university`, `percentage`, `grade`, `passout`, `register_number`) VALUES
(9, 5, 'UG', 'Bsc CS', 'COMPUTER', 'IGC', 'MG', 65, 'B', 2015, 12156744),
(10, 5, 'PG', 'MCA', 'Computer', 'FISAT', 'MG', 75, 'B+', 2018, 700115),
(11, 0, 'UG', 'BCA', 'Computer Application', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 0, 'PG', 'MTech', 'Computer Science', NULL, NULL, NULL, NULL, NULL, NULL);
