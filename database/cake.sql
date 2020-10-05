-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 03:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dt_created` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `dt_created`) VALUES
(1, 'admin', 'e6e061838856bf47e1de730719fb2609', '2019-04-17 15:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(10) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `bg` varchar(255) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `basic` varchar(255) NOT NULL,
  `call_us` varchar(255) NOT NULL,
  `watsapp` varchar(255) NOT NULL,
  `direction` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `map_link` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mail_link` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `web_link` varchar(255) NOT NULL,
  `call_number` varchar(255) NOT NULL,
  `call_link` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `year` varchar(25) NOT NULL,
  `about` mediumtext NOT NULL,
  `location` varchar(1000) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `ac_name` varchar(255) NOT NULL,
  `ac_number` varchar(255) NOT NULL,
  `qr_image` varchar(255) NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `logo`, `bg`, `shop_name`, `label`, `basic`, `call_us`, `watsapp`, `direction`, `mail`, `facebook`, `insta`, `address`, `map_link`, `email`, `mail_link`, `website`, `web_link`, `call_number`, `call_link`, `company_name`, `year`, `about`, `location`, `bank_name`, `ifsc_code`, `ac_name`, `ac_number`, `qr_image`, `dt_created`, `dt_updated`) VALUES
(11, '../../images/5f59eaee79945img1.png', '../../images/5f59eaee79e0fbody-background - Copy.jpg', 'Cake Shop', 'Nikunj Patel', '<p>riya patel: 9898131812</p>', '+919426058433', 'https://wa.me/message/WYBE3BQJ5CJ6O1', 'https://www.google.com/maps/dir//niktechsolution/@22.3585411,73.193372,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x395fcf70965550f7:0x7c3515a13edf947c!2m2!1d73.1963033!2d22.3593057?shorturl=1', 'info@niktechsolution.com', 'https://www.facebook.com/Niktech-Solution-111393477311416', 'https://www.instagram.com/niktechsol/?hl=en', ' TF-9-A Lotus Aura 1, Sama-Savli Rd, opp. Lileria party plot, Vemali, Vadodara, Gujarat.', 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3689.8698914242746!2d73.1933720149557!3d22.358541085293346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d22.3578974!2d73.19394969999999!4m5!1s0x395fcf70965550f7%3A0x7c3515a13edf947c!2snikt', ' info@niktechsolution.com', 'info@niktechsolution.com', ' www.niktechsolution.com', 'https://niktechsolution.com', '+91 9429812012 / 9537112012', '+919429812012', 'Cake Shop', '2018', '<br></span></p>\" >\" >\" >', 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3689.8698914242746!2d73.1933720149557!3d22.358541085293346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d22.3578974!2d73.19394969999999!4m5!1s0x395fcf70965550f7%3A0x7c3515a13edf947c!2sniktech%20solution!3m2!1d22.3593057!2d73.1963033!5e0!3m2!1sen!2sin!4v1597385258766!5m2!1sen!2sin', 'SBI BANK', 'SBIN0****93', 'NikTech Solution', '32********49', '../../images/5f59eaee7c0d6qr.jpeg', '2020-09-10 12:13:03', '2020-09-09 20:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `ecard`
--

CREATE TABLE `ecard` (
  `id` int(10) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `bg` varchar(255) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `basic` varchar(255) NOT NULL,
  `call_us` varchar(255) NOT NULL,
  `watsapp` varchar(255) NOT NULL,
  `direction` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `map_link` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mail_link` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `web_link` varchar(255) NOT NULL,
  `call_number` varchar(255) NOT NULL,
  `call_link` varchar(255) NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ecard`
--

INSERT INTO `ecard` (`id`, `logo`, `bg`, `shop_name`, `label`, `basic`, `call_us`, `watsapp`, `direction`, `mail`, `facebook`, `insta`, `address`, `map_link`, `email`, `mail_link`, `website`, `web_link`, `call_number`, `call_link`, `dt_created`, `dt_updated`) VALUES
(13, '../../images/5f59d3cbeac4eimg1.png', '../../images/5f59d3cbec595body-background.jpg', 'Cake Shop', 'Nikunj Patel', '<p>riya patel:236287361237</p>', '+919426058433', 'https://wa.me/message/WYBE3BQJ5CJ6O1', 'https://www.google.com/maps/dir//niktechsolution/@22.3585411,73.193372,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x395fcf70965550f7:0x7c3515a13edf947c!2m2!1d73.1963033!2d22.3593057?shorturl=1', 'info@niktechsolution.com', 'https://www.facebook.com/Niktech-Solution-111393477311416', 'https://www.instagram.com/niktechsol/?hl=en', 'B-301, Samruddhi Complex, Near Geeta Khaman House', 'https://www.google.com/maps/dir//niktechsolution/@22.3585411,73.193372,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x395fcf70965550f7:0x7c3515a13edf947c!2m2!1d73.1963033!2d22.3593057?shorturl=1', 'patelria288@gmail.com', 'info@niktechsolution.com', 'www.niktechsolution.com', 'https://niktechsolution.com', ' +91 9429812012 / 9537112012', '+919429812012', '2020-09-10 12:50:43', '2020-09-10 07:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `id` int(10) NOT NULL,
  `cat_name` mediumtext NOT NULL,
  `image` mediumtext NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `cat_name`, `image`, `dt_created`, `dt_updated`) VALUES
(49, 'Pastry', '../../images/gallary/5f59cf797b3dc02.jpg', '2020-09-10 12:32:17', '2020-09-10 07:02:17'),
(50, 'Pastry', '../../images/gallary/5f59cf7fbd5f704.jpg', '2020-09-10 12:32:23', '2020-09-10 07:02:23'),
(51, 'Pastry', '../../images/gallary/5f59cf864724102.jpg', '2020-09-10 12:32:30', '2020-09-10 07:02:30'),
(52, 'DESIGNER CAKES', '../../images/gallary/5f59cf9c6b88502.jpg', '2020-09-10 12:32:52', '2020-09-10 07:02:52'),
(53, 'DESIGNER CAKES', '../../images/gallary/5f59cfa1ed2c404.jpg', '2020-09-10 12:32:57', '2020-09-10 07:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `gallary_category`
--

CREATE TABLE `gallary_category` (
  `id` int(10) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallary_category`
--

INSERT INTO `gallary_category` (`id`, `cat_name`, `image`, `dt_created`, `dt_updated`) VALUES
(4, 'CAKES', '../../images/gallary/5f59ce419e81c01.jpg', '2020-09-10 12:27:05', '2020-09-10 06:57:05'),
(5, 'PREMIUM CAKES', '../../images/gallary/5f59ce5b62b8c02.jpg', '2020-09-10 12:27:31', '2020-09-10 06:57:31'),
(6, 'DESIGNER CAKES', '../../images/gallary/5f59ce628565c03.jpg', '2020-09-10 12:27:38', '2020-09-10 06:57:38'),
(7, 'Pastry', '../../images/gallary/5f59ce74bd39f04.jpg', '2020-09-10 12:27:56', '2020-09-10 06:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `enquiry` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `mobile`, `enquiry`, `message`, `dt_created`, `dt_updated`) VALUES
(13, 'riya', '3423524524', 'thr', 'B-301, Samruddhi Complex, Near Geeta Khaman House\nBeside Makarpura depo', '2020-09-10 05:47:27', '2020-09-10 12:17:27'),
(14, 'riya', '3423524524', 'thr', 'B-301, Samruddhi Complex, Near Geeta Khaman House\nBeside Makarpura depo', '2020-09-10 05:48:49', '2020-09-10 12:18:49'),
(15, 'riya', '3423524524', 'thr', 'B-301, Samruddhi Complex, Near Geeta Khaman House\nBeside Makarpura depo', '2020-09-10 05:53:50', '2020-09-10 12:23:50'),
(16, 'riya', '3423524524', 'thr', 'B-301, Samruddhi Complex, Near Geeta Khaman House\nBeside Makarpura depo', '2020-09-10 05:54:33', '2020-09-10 12:24:33'),
(17, 'BANKO DESIGN', '8155925891', 'thr', 'B-301, Samruddhi Complex, Near Geeta Khaman House\nBeside Makarpura depo', '2020-09-10 05:55:39', '2020-09-10 12:25:39'),
(18, 'nikunj', '8155925891', 'thr', 'B-301, Samruddhi Complex, Near Geeta Khaman House\nBeside Makarpura depo', '2020-09-10 05:56:55', '2020-09-10 12:26:55'),
(19, 'riya', '3423524524', 'thr', 'B-301, Samruddhi Complex, Near Geeta Khaman House\nBeside Makarpura depo', '2020-09-10 05:57:22', '2020-09-10 12:27:22'),
(20, 'nikunj', '3423524524', 'thr', 'B-301, Samruddhi Complex, Near Geeta Khaman House\nBeside Makarpura depo', '2020-09-10 05:58:56', '2020-09-10 12:28:56'),
(21, 'nikunj', '3423524524', 'thr', 'HIII', '2020-09-10 06:00:05', '2020-09-10 12:30:05'),
(22, 'riya', '8155925891', 'thr', 'B-301, Samruddhi Complex, Near Geeta Khaman House\nBeside Makarpura depo', '2020-09-10 06:03:05', '2020-09-10 12:33:05'),
(23, 'riya', '3423524524', 'thr', 'B-301, Samruddhi Complex, Near Geeta Khaman House\nBeside Makarpura depo', '2020-09-10 06:18:20', '2020-09-10 12:48:20'),
(24, 'nikunj', '3423524524', 'thr', 'B-301, Samruddhi Complex, Near Geeta Khaman House\nBeside Makarpura depo', '2020-09-10 06:19:55', '2020-09-10 12:49:55'),
(25, 'riya', '8155925891', 'thr', 'B-301, Samruddhi Complex, Near Geeta Khaman House\nBeside Makarpura depo', '2020-09-10 06:22:00', '2020-09-10 12:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `watsapp_link` varchar(255) NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cat_name`, `image`, `watsapp_link`, `dt_created`, `dt_updated`) VALUES
(6, 'chocolate', '../../images/product/5f59cde6a300701.jpg', 'https://wa.me/message/WYBE3BQJ5CJ6O1', '2020-09-10 12:25:34', '2020-09-10 06:55:34'),
(7, 'forest', '../../images/product/5f59cdf004c4702.jpg', 'https://wa.me/message/WYBE3BQJ5CJ6O1', '2020-09-10 12:25:44', '2020-09-10 06:55:44'),
(8, 'venila', '../../images/product/5f59cdf7e264502.jpg', 'https://wa.me/message/WYBE3BQJ5CJ6O1', '2020-09-10 12:25:51', '2020-09-10 06:55:51'),
(9, 'blue berry', '../../images/product/5f59ce0482fa704.jpg', 'https://wa.me/message/WYBE3BQJ5CJ6O1', '2020-09-10 12:26:04', '2020-09-10 06:56:04');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(10) NOT NULL,
  `cat_name` mediumtext NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `cat_name`, `dt_created`, `dt_updated`) VALUES
(17, 'chocolate', '2020-09-10 12:20:15', '2020-09-10 06:50:39'),
(18, 'blue berry', '2020-09-10 12:20:55', '2020-09-10 06:50:55'),
(19, 'venila', '2020-09-10 12:21:03', '2020-09-10 06:51:03'),
(20, 'forest', '2020-09-10 12:21:32', '2020-09-10 06:51:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecard`
--
ALTER TABLE `ecard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary_category`
--
ALTER TABLE `gallary_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ecard`
--
ALTER TABLE `ecard`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `gallary_category`
--
ALTER TABLE `gallary_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
