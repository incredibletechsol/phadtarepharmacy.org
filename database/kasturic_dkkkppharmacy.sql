-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 04, 2021 at 06:17 AM
-- Server version: 10.2.38-MariaDB-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasturic_dkkkppharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE `tbl_enquiry` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

CREATE TABLE `tbl_faculty` (
  `id` int(30) NOT NULL,
  `type` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `experience` int(2) NOT NULL,
  `photo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`id`, `type`, `name`, `designation`, `qualification`, `experience`, `photo`) VALUES
(1, 'Teaching', 'Prof. K.D. Dhekale', 'Principal', 'M.Pharm PhD (a)', 6, 'K.D.Dhekale.jpg'),
(2, 'Teaching', 'Prof. S.S. Shivpuje', 'Asst. Prof.', 'M.Pharm ', 4, 'Miss Kanika Gupta.png'),
(3, 'Teaching', 'Prof. S.S.Pingale', 'Asst. Prof.', 'M.Pharm', 2, 'Prof. S.S.Pingale.jpg'),
(4, 'Teaching', 'Prof. A.H. Sathe', 'Asst. Prof.', 'M.Pharm', 2, 'Prof. A.H. Sathe.jpg'),
(5, 'Teaching', 'Miss Priyanka Sunil Jadhav', 'Leceturer', 'B.Pharm', 1, 'Miss Priyanka Sunil Jadhav.png'),
(6, 'Teaching', 'Miss Sonali Raju Pratape', 'Leceturer', 'B.Pharm', 1, 'Miss Sonali Raju Pratape.png'),
(7, 'Teaching', 'Prof. M. R. Deokar', 'Asst. Prof.', 'M.Pharm', 4, 'Prof. M. R. Deokar.jpg'),
(8, 'Teaching', 'Prof. A.H. Chandanshive', 'Asst. Prof.', 'M.Pharm', 1, 'Mr.Hemant Ramachandra Badwaik.png'),
(9, 'Teaching', 'Mr.D.Madhu', 'Leceturer', 'M.Pharm', 3, 'Mr.D.Madhu.png'),
(10, 'Teaching', 'Miss.Deepali', 'Leceturer', 'M.Pharm', 4, 'Miss.Deepali.png'),
(11, 'Non-Teaching', 'Miss.Monica Akhade', 'Chief Accountant', 'M.Com', 10, 'Miss.Monica Akhade.png'),
(12, 'Non-Teaching', 'Mr.Bhosale H.J', 'Libriean', 'B.Lib', 6, 'Mr.Bhosale H.J.png'),
(13, 'Non-Teaching', 'Mr.Amol Patil', 'Store Keeper', 'M.A', 8, 'Mr.Amol Patil.png'),
(14, 'Non-Teaching', 'Mr.Kedari Sunil', 'Clark', 'M.A', 4, 'Mr.Kedari Sunil.png'),
(15, 'Non-Teaching', 'Mr.Waghmode G.D', 'Clark', 'B.Com', 6, 'Mr.Waghmode G.D.png'),
(16, 'Non-Teaching', 'Mr. Vaibhav Jadhav', 'Accountant', 'M.B.A Fianace', 8, 'Mr. Vaibhav Jadhav.png'),
(17, 'Non-Teaching', 'Mr.Nilesh Nimbhalkar', 'Accountant', 'M.Com', 6, 'Mr.Nilesh Nimbhalkar.png'),
(18, 'Non-Teaching', 'Mr.Rajendra Kadam', 'Clark', 'M.A', 6, 'Mr.Rajendra Kadam.png'),
(19, 'Non-Teaching', 'Mr.Pandurang Dannane', 'Peon', 'S.S.c', 6, 'Mr.Pandurang Dannane.png'),
(20, 'Non-Teaching', 'Mrs.Ghate A.D', 'Peon', 'S.S.c', 6, 'Mrs.Ghate A.D.png'),
(21, 'Non-Teaching', 'Mrs.Dhumal A.s', 'Peon', 'S.S.c', 6, 'Mrs.Dhumal A.s.png'),
(22, 'Non-Teaching', 'Mr.Chitare U.A', 'Peon', 'S.S.c', 5, 'Mr.Chitare U.A.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `photoid` int(10) NOT NULL,
  `name` text NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `member_id` int(11) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`member_id`, `UserName`, `Password`, `FirstName`, `LastName`) VALUES
(10, 'phadmin', 'Phadtare12#$', 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `newsdate` date NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `attachment` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `newsdate`, `subject`, `description`, `image`, `attachment`) VALUES
(3, '2020-12-29', 'D. Pharmacy Admission 2020-21', 'Applications are invited under the Institute Level Seats & Against CAP Seats.', '', 'Against CAP Advertise.pdf'),
(4, '2021-01-05', 'D. Pharmacy Admission 2020-21', 'Merit list of D.Pharm admission against CAP seats', '', 'D. Pharm Merit List.jpg'),
(6, '2021-01-22', 'B. Pharmacy Admission 2020-21', 'Applications are invited to B. Pharmacy Admission 2020-21 under the Institute Level Seats & Against CAP Seats. ', 'Sakal Add.jpg', 'Advt. (1).pdf'),
(7, '2021-02-03', 'B. Pharmacy Admission 2020-21', 'Merit list of D.Pharm admission against CAP seats', '', 'B. Pharm Merit List.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`photoid`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `photoid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
