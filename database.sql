-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2013 at 10:18 AM
-- Server version: 5.1.72-cll
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smssandb_p4_smssandbox_biz`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderid`
--

CREATE TABLE IF NOT EXISTS `orderid` (
  `order_no` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT 'foreign key',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_no`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='breaking up a many to many' AUTO_INCREMENT=9 ;

--
-- Dumping data for table `orderid`
--

INSERT INTO `orderid` (`order_no`, `user_id`, `timestamp`) VALUES
(1, 63, '2013-12-14 10:00:00'),
(6, 63, '2013-12-17 16:30:42'),
(7, 63, '2013-12-17 16:30:46'),
(8, 63, '2013-12-19 01:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_no` int(11) NOT NULL COMMENT 'composite primary',
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_no`,`productID`),
  KEY `product_no` (`productID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_no`, `productID`, `quantity`, `created`) VALUES
(1, 4, 4, '2013-12-18 19:22:10'),
(1, 5, 5, '2013-12-18 19:22:10'),
(1, 7, 8, '2013-12-18 19:22:10'),
(6, 4, 6, '2013-12-18 19:22:10'),
(7, 5, 7, '2013-12-18 19:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(255) NOT NULL,
  `pricePerUnit` int(11) NOT NULL,
  PRIMARY KEY (`productID`),
  UNIQUE KEY `productID` (`productID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `pricePerUnit`) VALUES
(1, 'Muddy Buddies 25mg', 30),
(2, 'Muddy Buddies 50mg', 50),
(3, 'Oatmeal Scotchies 25mg', 30),
(4, 'Oatmeal Sctochies 50mg', 50),
(5, 'Coconut Oatmeal 25mg', 30),
(6, 'Coconut Oatmeal 50mg', 50),
(7, 'Caramel Peanut Butter Brownie 25mg', 45),
(8, 'Caramel Peanut Butter Brownies 50mg', 60),
(9, 'Butterfinger Brownies 25mg', 45),
(10, 'Butterfinger Brownies 50mg', 60),
(11, 'Whoopie Pies 25mg', 45),
(12, 'Whoopie Pies 50mg', 60),
(13, 'Pumpkin Bread 25mg', 45),
(14, 'Pumpkin Bread 50mg', 60);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNo` varchar(255) DEFAULT NULL,
  `billingAddress` varchar(255) DEFAULT NULL,
  `billingAddress2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `licenseNo` varchar(255) NOT NULL,
  `avatar` varchar(55) DEFAULT 'example.gif',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `created`, `modified`, `token`, `password`, `last_login`, `timezone`, `first_name`, `last_name`, `email`, `phoneNo`, `billingAddress`, `billingAddress2`, `city`, `state`, `zipcode`, `licenseNo`, `avatar`) VALUES
(63, 1387043074, 1387043074, 'eb2e3b408ce7638601a6d8950bf443a17149bc4f', 'fa8cbb7f440573351d7427c805e3b1524ce5cc49', 0, '', 'shawna', 'spoor', 'shawna@spoor.org', '7146557645', '14 Island Hill Ave', 'unit 105', 'Melrose', 'MA - Massachusetts', '02176', 'asb12345678', 'example.gif');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderid`
--
ALTER TABLE `orderid`
  ADD CONSTRAINT `orderid_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`order_no`) REFERENCES `orderid` (`order_no`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
