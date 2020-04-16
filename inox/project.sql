-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2019 at 08:39 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `password`) VALUES
('ashish kumar ', 'ashish@gmail.com', '123'),
('rajan ram', 'ram@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `inox`
--

CREATE TABLE `inox` (
  `inoxid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inox`
--

INSERT INTO `inox` (`inoxid`, `name`, `phonenumber`, `email`) VALUES
('1', 'liluahs', '1234567890', 'ram@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movieid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `releasedate` date NOT NULL,
  `language` varchar(10) NOT NULL,
  `totalduretion` int(6) NOT NULL,
  `filename` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movieid`, `name`, `description`, `releasedate`, `language`, `totalduretion`, `filename`) VALUES
('B154', 'BATLA HOUSE', 'Based on the 2008 Delhi Batla House case, the crime thriller Batla House chronicles the police encounter and investigation of the case.', '2019-08-30', 'english', 179, 'batla1.jpg'),
('K102', 'KABIR SINGH', 'Kabir Singh, a senior medical student with a passion for old English motorcycles and football, is heartbroken when his girlfriend is forced to marry another man. Already struggling with anger issues, he falls into a self-destructive spiral', '2019-06-21', 'hindi', 185, 'kabirsingh.jpg'),
('m10102', 'MISSION MANGAL', 'mission mangal is the upcoming movie of akshay kumar which is about the mission mangal of isro . bidya balan,sonakshi sinha and tapsee pannu are also featuring in this movie.', '2019-08-16', 'hindi', 160, 'main-mission_0.jpeg'),
('s101', 'SPIDER MAN:FAR FROM HOME', 'In the latest chapter of MCU`s Spider-Man series, our friendly neighborhood superhero decides to join his best friends Ned, MJ and the rest of the gang on a European vacation. However, Peter`s plans to leave heroics behind for a few weeks are quickly scrapped when he begrudgingly agrees to help Nick Fury uncover the mystery of several elemental creature attacks, creating havoc across the continent!', '2019-07-05', 'hindi', 160, 'spider.jpg'),
('S120', 'SUPER 30', 'Brilliant mathematician Anand Kumar helps 30 smart but underprivileged students prepare for entrance exams for the Indian Institutes of Technology.\r\n', '2019-07-12', 'hindi', 180, 'super30.jpg'),
('s142', 'SAHO', 'The Story is about a power battle which is taking place in the higher echelons of power unrelated and unconnected episodes occurring in different parts of the globe, Intertwine in an unforeseen manner to revelation of mind games.', '2019-08-09', 'hindi', 182, 'saaho.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `screen`
--

CREATE TABLE `screen` (
  `inoxid` varchar(30) NOT NULL,
  `screenno` varchar(30) NOT NULL,
  `goldenseat` int(30) NOT NULL,
  `platinumseat` int(30) NOT NULL,
  `silverseat` int(30) NOT NULL,
  `totalseat` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `screen`
--

INSERT INTO `screen` (`inoxid`, `screenno`, `goldenseat`, `platinumseat`, `silverseat`, `totalseat`) VALUES
(' 1 ', '10y', 20, 30, 10, 60),
(' 1 ', '20A', 20, 40, 10, 70),
(' 1 ', '30s', 10, 20, 30, 60),
(' 1 ', '40h', 10, 20, 10, 40),
(' 1 ', '50k', 10, 40, 20, 70);

-- --------------------------------------------------------

--
-- Table structure for table `showtime`
--

CREATE TABLE `showtime` (
  `inoxid` varchar(30) NOT NULL,
  `screenno` varchar(30) NOT NULL,
  `movieid` varchar(30) NOT NULL,
  `showid` varchar(30) NOT NULL,
  `frametime` int(3) NOT NULL,
  `interveltime` int(3) NOT NULL,
  `totaltime` int(3) NOT NULL,
  `showdate` date NOT NULL,
  `showtime` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showtime`
--

INSERT INTO `showtime` (`inoxid`, `screenno`, `movieid`, `showid`, `frametime`, `interveltime`, `totaltime`, `showdate`, `showtime`) VALUES
(' 1 ', '20A', 'B154', 'h110', 180, 15, 195, '2019-07-20', '14:00:00.000000'),
(' 1 ', '10y', 'B154', 's1', 179, 15, 194, '2019-08-30', '13:00:00.000000'),
(' 1 ', '50k', 'm10102', 's100', 180, 20, 200, '2019-08-18', '14:00:00.000000'),
(' 1 ', '40h', 's142', 's11', 182, 15, 197, '2019-08-09', '14:00:00.000000'),
(' 1 ', '50k', 'm10102', 's190', 180, 20, 200, '2019-08-16', '14:30:00.000000'),
(' 1 ', '10y', 'B154', 's2', 179, 15, 194, '2019-08-31', '12:00:00.000000'),
(' 1 ', '20A', 'K102', 's3', 185, 20, 205, '2019-07-22', '13:00:00.000000'),
(' 1 ', '20A', 'K102', 's4', 185, 20, 205, '2019-07-24', '18:00:00.000000'),
(' 1 ', '50k', 'w101', 's43', 160, 12, 172, '2019-07-30', '10:00:00.000000'),
(' 1 ', '50k', 'w101', 's45', 160, 12, 172, '2019-07-26', '17:00:00.000000'),
(' 1 ', '30s', 's101', 's5', 160, 20, 180, '2019-07-22', '19:00:00.000000'),
(' 1 ', '40h', 'S120', 's6', 180, 20, 200, '2019-07-24', '17:00:00.000000'),
(' 1 ', '40h', 'S120', 's7', 180, 20, 200, '2019-07-29', '17:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `userid` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `seat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`userid`, `date`, `time`, `seat`) VALUES
('s@gmail.com', '2019-07-24', '17:00:00.000000', ' D5,'),
('s@gmail.com', '2019-07-24', '18:00:00.000000', ' D8,'),
('ram@gmail.com', '2019-07-24', '18:00:00.000000', ' D4,'),
('ram@gmail.com', '2019-07-24', '18:00:00.000000', ' C5,');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `age`, `city`, `password`) VALUES
('ram', 'ram@gmail.com', '21', 'kolkata', '123'),
('ml', 's@gmail.com', '12', 'lk', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `inox`
--
ALTER TABLE `inox`
  ADD PRIMARY KEY (`inoxid`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movieid`);

--
-- Indexes for table `screen`
--
ALTER TABLE `screen`
  ADD UNIQUE KEY `screenno` (`screenno`);

--
-- Indexes for table `showtime`
--
ALTER TABLE `showtime`
  ADD PRIMARY KEY (`showid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
