-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2018 at 03:09 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `apply_job`
--

INSERT INTO `apply_job` (`id_applyjob`, `id_company`, `id_jobpost`, `id_user`) VALUES
(17, 8, 17, 9);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id_company` int(11) NOT NULL AUTO_INCREMENT,
  `companyname` varchar(255) NOT NULL,
  `contactno` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id_company`, `companyname`, `contactno`, `website`, `email`, `password`, `country`, `state`, `city`, `aboutme`, `logo`, `createdAt`, `active`) VALUES
(8, 'Recwire', '9496820863', 'recwire.in', 'company1@gmail.com', '123', 'India', 'Kerala', 'Ernakulam', 'Description of the Company', '5accb4b8d4480.png', '2018-04-10 17:45:24', 1),
(10, 'company3', NULL, NULL, 'company3@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, '2018-04-10 17:49:24', 1),
(11, 'company2', NULL, NULL, 'company2@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, '2018-04-10 18:05:44', 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `company_mailbox`
--

INSERT INTO `company_mailbox` (`id_mail`, `id_company`, `id_user`, `id_jobpost`, `mail_title`, `mail_content`, `createdAt`) VALUES
(12, 8, 9, NULL, 'Reply to Austin', '<p>Personal Reply to Austins Message</p>', '2018-04-10 18:46:40'),
(13, 8, NULL, 17, 'Common Mail', '<p>Mail to Every registered Candidates of JOBPOST1</p>', '2018-04-10 18:49:40');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`id_jobpost`, `id_company`, `jobtitle`, `description`, `minimumsalary`, `maximumsalary`, `experience`, `ug_course`, `ug_mark`, `pg_course`, `pg_mark`, `createdAt`, `active`) VALUES
(17, 8, 'Job Post 1', '<p>Details of the Job Post1</p>', '12000', '15000', '0', ' Bsc-Computer Science', 50, ' MCA-Computer Applications', 50, '2018-04-10 18:30:59', 1),
(18, 8, 'Job Post 2', '<p>Jobpost 2 Description</p>', '25000', '30000', '0', ' Bsc-Computer Science', 70, ' MCA-Computer Applications', 70, '2018-04-10 18:31:52', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `password`, `address`, `city`, `state`, `country`, `contactno`, `qualification`, `stream`, `passingyear`, `dob`, `age`, `designation`, `photo`, `active`) VALUES
(6, 'Pramod', 'M', 'pramodm@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, 'Manzad', 'Musthafa', 'manzadm@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(8, 'Deepak', 'Rajan', 'deepakr@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, 'Austin', 'Jose', 'austinjose@gmail.com', '123', '64/577,Lilly Cottage\r\nMathai Manjooran Road', 'Ernakulam', 'Kerala', NULL, '9497024355', 'MCA', 'Computer Application', '2018-10-25', '1995-03-11', '23', 'Student', '5accb2c4478f9.jpg', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_mailbox`
--

INSERT INTO `user_mailbox` (`id_usermail`, `id_user`, `id_company`, `id_jobpost`, `mail_title`, `mail_content`, `createdAt`) VALUES
(4, 9, 8, NULL, 'Regarding the date of the Interview', 'Mail content towards the particular company.', '2018-04-10 18:38:28');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `user_qualification`
--

INSERT INTO `user_qualification` (`q_id`, `user_id`, `q_level`, `qualification`, `subject`, `institution`, `university`, `percentage`, `grade`, `passout`, `register_number`) VALUES
(17, 9, 'UG', 'Bsc', 'Computer Science', 'College1', 'MGU', 61, 'C', 2015, 12157525),
(18, 9, 'PG', 'MCA', 'Computer Applications', 'FISAT', 'MGU', 75, 'B', 2018, 800000);
