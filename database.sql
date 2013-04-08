-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2013 at 01:33 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci2.3`
--

USE `xmagecom_mrtu1`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `status`, `password`) VALUES
(1, 'mrtu', 'tuna@vnecoms.com', 'inactive', 'admin123'),
(2, 'admin', 'hungvt_it@gmail.com', 'active', 'admin123'),
(3, 'hiepnt', 'hiepnt@vnecoms.com', 'inactive', 'admin123'),
(4, 'mrtux', 'mrtux-hdb@gmail.com', 'active', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `shortdesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longdesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parentid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `shortdesc`, `longdesc`, `parentid`) VALUES
(1, 'Shop Optical Departments', 'active', 'shortdesc', 'longdesc', 0),
(2, 'Sales and Style Guides', 'active', 'shortdesc', 'longdesc', 0),
(3, 'Specialty Eyewear', 'active', 'shortdesc', 'longdesc', 0),
(4, 'Premium Lenses', 'active', 'shortdesc', 'longdesc', 0),
(5, 'Buying Glassese Online', 'active', 'shortdesc', 'longdesc', 0),
(6, 'Buy Contact Lenses', 'active', 'shortdesc', 'longdesc', 0),
(7, 'Top Eyeglass Brands', 'active', 'shortdesc', 'longdesc', 0),
(8, 'Featured Sunglass Brands', 'active', 'shortdesc', 'longdesc', 0),
(9, 'Best Prescription Sunglasses', 'active', 'shortdesc', 'longdesc', 0),
(10, 'Militiary Discounts', 'active', 'shortdesc', 'longdesc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `title`, `content`) VALUES
(1, 'my new titile', 'info goes here'),
(2, 'my new titile', 'info goes here'),
(3, 'my new titile', 'info goes here'),
(4, 'my new titile', 'info goes here'),
(5, 'my new titile', 'info goes here'),
(6, 'my new titile', 'info goes here'),
(7, 'my new titile', 'info goes here'),
(8, 'my new titile', 'info goes here'),
(9, 'my new titile', 'info goes here'),
(10, 'my new titile', 'info goes here'),
(11, 'my new titile', 'info goes here'),
(12, 'my new titile', 'info goes here'),
(13, 'my new titile', 'info goes here'),
(14, 'my new titile', 'info goes here'),
(15, 'my new titile', 'info goes here'),
(16, 'my new titile', 'info goes here'),
(17, 'my new titile', 'info goes here'),
(18, 'my new titile', 'info goes here'),
(19, 'my new titile', 'info goes here'),
(20, 'my new titile', 'info goes here');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shortdesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longdesc` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sizes` enum('s','m','l','xl') COLLATE utf8_unicode_ci NOT NULL,
  `colors` enum('red','blue','green','brown','black','white') COLLATE utf8_unicode_ci NOT NULL,
  `grouping` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `featured` enum('true','false') COLLATE utf8_unicode_ci NOT NULL,
  `price` float(4,2) NOT NULL,
  `option_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_values` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `shortdesc`, `longdesc`, `image`, `thumbnail`, `sizes`, `colors`, `grouping`, `status`, `category_id`, `featured`, `price`, `option_name`, `option_values`) VALUES
(1, 'ContactLensesHomeV2_2_60', 'this is short description', 'this is long descripton', 'template/images/ContactLensesHomeV2_2_60.jpg', '', 'm', 'blue', '1', 'active', 2, 'true', 99.99, '', ''),
(2, 'ContactLensesHomeV2_2_60', 'this is short description', 'this is long descripton', 'template/images/ContactLensesHomeV2_2_60.jpg', '', 'm', 'blue', '1', 'active', 2, 'true', 99.00, 'Color', 'white,black,brown'),
(3, 'ducky', 'duck shortdescription', 'long description', 'template/images/ducky.jpg', '', 'm', 'blue', '1', 'active', 1, 'true', 10.88, '', ''),
(4, 'horse', 'horse short description', 'long ddesscription here', 'template/images/horse.jpg', '', 'l', 'green', '1', 'active', 1, 'true', 25.98, '', ''),
(5, 'tshirt', 'tshirt short description', 'this is long description here', 'template/images/tshirt.jpg', '', 'xl', 'brown', '1', 'active', 1, 'true', 63.12, 'Size', 'small,medium,large'),
(6, 'Ray-Ban RX RX5184 Eyeglasses', 'short description', 'long description', 'template/images/ContactLensesHomeV2_2_62.jpg', '', 'xl', 'blue', '1', 'active', 1, 'true', 56.00, 'frames', 'oval,rectangle'),
(7, 'Ray-Ban RB2132 New Wayfarer', 'short description', 'long description', 'template/images/ContactLensesHomeV2_2_64.jpg', '', 'l', 'green', '1', 'active', 1, 'true', 88.25, 'frames', 'oval,rangtle'),
(8, 'Ray-Ban RB2132 New Wayfarer', 'short desciription', 'long description', 'template/images/ContactLensesHomeV2_2_64.jpg', '', 'm', 'red', '1', 'active', 1, 'true', 55.66, 'frames', 'oval,rectangle'),
(9, 'Ray-Ban RB2132 OLD Wayfarer', 'short', 'long description', 'template/images/ContactLensesHomeV2_2_64.jpg', '', 'm', 'brown', '1', 'active', 1, 'true', 76.00, 'frames', 'oval,ractangle'),
(10, 'Ray-Ban Extras RB2132 New Wayfarer', 'short desc', 'long description', 'template/images/ContactLensesHomeV2_2_64.jpg', '', 'm', 'blue', '1', 'active', 1, 'true', 88.00, 'frames', 'oval,rectangle'),
(11, 'Ray-Ban RB2132 New Wayfarerssssssssssss', 'short desc', 'long description', 'template/images/ContactLensesHomeV2_2_64.jpg', '', 'l', 'black', '1', 'active', 1, 'true', 78.66, 'frames', 'oval,rectangle'),
(12, 'Ray-Ban SuperCool New Wayfarer', 'short desc', 'long description', 'template/images/ContactLensesHomeV2_2_64.jpg', '', 'xl', 'green', '1', 'active', 1, 'true', 59.88, 'frames', 'oval,rectangle'),
(13, 'Ray-Baness RB2132 New Wayfarer', 'short desc', 'long description', 'template/images/ContactLensesHomeV2_2_64.jpg', '', 'l', 'black', '1', 'active', 1, 'true', 89.77, 'frames', 'oval,rectangle'),
(14, 'Ray-Ban RB2132 Protecteye New Wayfarer', 'short desc', 'long description', 'template/images/ContactLensesHomeV2_2_64.jpg', '', 'l', 'red', '1', 'active', 1, 'true', 66.66, 'frames', 'oval,rectangle'),
(15, 'Glass over brand', 'short desc', 'long description', 'template/images/ContactLensesHomeV2_2_64.jpg', '', 'm', 'red', '1', 'active', 1, 'true', 89.89, 'frames', 'oval,rectangle'),
(16, 'Ray-Ban RB2132 New Wayfarer 123', 'short desc', 'long description', 'template/images/ContactLensesHomeV2_2_64.jpg', '', 'm', 'blue', '1', 'active', 1, 'true', 89.99, 'frames', 'oval,rectangle');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
