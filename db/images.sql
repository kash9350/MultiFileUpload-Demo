-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 17, 2015 at 08:11 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `images`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_dir` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `image_dir`) VALUES
(56, '10957339_592163027586204_5377968201807179295_n.jpg', '56'),
(57, '10957339_592163027586204_5377968201807179295_n.jpg', '57'),
(58, '11148457_890961960925948_5856222529497236170_n.jpg', '58'),
(59, '11148457_890961960925948_5856222529497236170_n.jpg', '59'),
(60, '10904505_575795349222972_3590658698566290572_o.jpg', '60'),
(61, '10957339_592163027586204_5377968201807179295_n.jpg', '61'),
(62, '10904505_575795349222972_3590658698566290572_o.jpg', '62'),
(63, '10957339_592163027586204_5377968201807179295_n.jpg', ''),
(64, '10904505_575795349222972_3590658698566290572_o.jpg', ''),
(65, '10957339_592163027586204_5377968201807179295_n.jpg', ''),
(66, '10957339_592163027586204_5377968201807179295_n.jpg', ''),
(67, '11148457_890961960925948_5856222529497236170_n.jpg', ''),
(68, 'libra_srs.doc', ''),
(71, '05-Use-Cases.ppt', '71'),
(72, '10904505_575795349222972_3590658698566290572_o.jpg', '72'),
(73, 'Asx6afNEuhSmhGVRR3Ivh91b6iudks38ffQiRVNgB333.jpg', '73'),
(74, '11148457_890961960925948_5856222529497236170_n.jpg', '74'),
(75, '10957339_592163027586204_5377968201807179295_n.jpg', '75'),
(76, '11148457_890961960925948_5856222529497236170_n.jpg', '76'),
(77, '11148457_890961960925948_5856222529497236170_n.jpg', '77'),
(82, '10957339_592163027586204_5377968201807179295_n.jpg', '82'),
(83, '11148457_890961960925948_5856222529497236170_n.jpg', ''),
(84, '10957339_592163027586204_5377968201807179295_n.jpg', '84'),
(85, '11148457_890961960925948_5856222529497236170_n.jpg', ''),
(86, '10957339_592163027586204_5377968201807179295_n.jpg', '86'),
(87, '11148457_890961960925948_5856222529497236170_n.jpg', ''),
(88, 'Screenshot from 2015-05-17 00:48:43.png', '88'),
(89, 'Screenshot from 2015-05-17 00:50:30.png', ''),
(90, 'Screenshot from 2015-05-17 00:50:30.png', '90'),
(91, 'Screenshot from 2015-05-17 12:10:21.png', ''),
(96, 'Screenshot from 2015-05-17 00:48:43.png', '96'),
(97, 'Screenshot from 2015-05-17 00:50:30.png', ''),
(98, 'Screenshot from 2015-05-17 00:48:43.png', '98'),
(99, 'Screenshot from 2015-05-17 00:50:30.png', ''),
(100, 'CakePHPCookbook.pdf', ''),
(101, 'fullbook.pdf', ''),
(102, 'fullbook.pdf', ''),
(103, 'fullbook.pdf', ''),
(104, 'CakePHPCookbook.pdf', ''),
(105, 'CakePHPCookbook.pdf', ''),
(106, 'fullbook.pdf', ''),
(107, 'fullbook.pdf', ''),
(108, 'CakePHPCookbook.pdf', ''),
(109, 'fullbook.pdf', ''),
(110, 'CakePHPCookbook.pdf', '110'),
(111, 'cropped-EV_LOGO42.png', '111'),
(112, 'DSCN0032.JPG', ''),
(113, 'Resume_design.docx', ''),
(114, 'CakePHPCookbook.pdf', '114'),
(115, 'fullbook.pdf', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=116;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
