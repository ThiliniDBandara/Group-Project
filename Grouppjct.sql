-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 02, 2019 at 03:55 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `73_27`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE IF NOT EXISTS "forms" (
  "form_id" int(11) NOT NULL,
  "first_Name" varchar(50) NOT NULL,
  "last_Name" varchar(50) NOT NULL,
  "Address" varchar(50) NOT NULL,
  "Mobile_Num" int(11) NOT NULL,
  "complain" varchar(500) NOT NULL,
  PRIMARY KEY ("form_id")
) AUTO_INCREMENT=1 ;

--
-- Dumping data for table `forms`
--


-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS "login" (
  "id" int(10) NOT NULL,
  "username" varchar(50) NOT NULL,
  "password" varchar(50) NOT NULL,
  "usertype" varchar(50) NOT NULL,
  PRIMARY KEY ("id")
) AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'abc', '123', 'user'),
(2, 'admin', '456', 'adm'),
(3, 'admin', '456', 'adm');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS "order" (
  "Order_ID" int(10) NOT NULL,
  "Product_name" varchar(50) NOT NULL,
  "Quantity" int(50) NOT NULL,
  "price" decimal(10,2) NOT NULL,
  PRIMARY KEY ("Order_ID")
) AUTO_INCREMENT=1 ;

--
-- Dumping data for table `order`
--


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS "products" (
  "id" int(10) NOT NULL,
  "p_name" varchar(50) NOT NULL,
  "image" varchar(256) NOT NULL,
  "price" double(10,2) NOT NULL,
  PRIMARY KEY ("id")
) AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_name`, `image`, `price`) VALUES
(1, 'Marble_tile', 'marble3.jpg', 250.00),
(2, 'Floor_tile', 'tile2.jpg', 350.00),
(3, 'Granite_Tile', 'granite.png', 345.50),
(4, 'Stone_Tile', 'stone.jpg', 150.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS "users" (
  "username" varchar(30) NOT NULL,
  "password" varchar(8) NOT NULL
);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('demo', '789'),
('abc', '123'),
('mohamed ifham', '456'),
('ihras', '987'),
('ADMIN', '321'),
('ifhy', '547');
