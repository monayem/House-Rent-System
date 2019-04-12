-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2017 at 07:19 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house_rent_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `barisal_table`
--

CREATE TABLE `barisal_table` (
  `area_id` int(3) NOT NULL,
  `area_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barisal_table`
--

INSERT INTO `barisal_table` (`area_id`, `area_name`) VALUES
(1, 'Patharghata'),
(2, 'Patuakhali'),
(3, 'Barguna'),
(4, 'Nalchhiti'),
(5, 'Bauphal'),
(6, 'Galachipa'),
(7, 'Pirojpur'),
(8, 'Bakergonj'),
(9, 'Kalapara'),
(10, 'Kuakata');

-- --------------------------------------------------------

--
-- Table structure for table `chittagong_table`
--

CREATE TABLE `chittagong_table` (
  `area_id` int(3) NOT NULL,
  `area_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chittagong_table`
--

INSERT INTO `chittagong_table` (`area_id`, `area_name`) VALUES
(1, 'Agrabad'),
(2, 'Jalalabad'),
(3, 'Nasirabad'),
(4, 'Mirsorai'),
(5, 'Cox''s Bazar'),
(6, 'Rangamati'),
(7, 'Khagrachori'),
(8, 'Bandarban'),
(9, 'Boubazar'),
(10, 'Muradpur');

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
  `customer_id` int(5) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_password` varchar(150) NOT NULL,
  `customer_phone_number` varchar(15) NOT NULL,
  `customer_occupation` varchar(20) NOT NULL,
  `customer_picture` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`customer_id`, `customer_email`, `customer_name`, `customer_password`, `customer_phone_number`, `customer_occupation`, `customer_picture`) VALUES
(1, 'murad@gmail.com', 'Murad', '25d55ad283aa400af464c76d713c07ad', '', '', ''),
(2, 'shuvashishpaul@gmail.com', 'Shuvashish', '25d55ad283aa400af464c76d713c07ad', '', '', ''),
(3, 'shuval@gmail.com', 'Shuvashish', '25d55ad283aa400af464c76d713c07ad', '', '', ''),
(4, 'torres@gmail.com', 'Torres', '25d55ad283aa400af464c76d713c07ad', '01814351854', 'Teacher', 'resized_20270002_1944718302471227_575591143_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dhaka_table`
--

CREATE TABLE `dhaka_table` (
  `area_id` int(3) NOT NULL,
  `area_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dhaka_table`
--

INSERT INTO `dhaka_table` (`area_id`, `area_name`) VALUES
(1, 'Gabtoli'),
(2, 'Farmgate'),
(3, 'Motijheel'),
(4, 'Mohammadpur'),
(5, 'Dhanmondi'),
(6, 'Gulshan'),
(7, 'Banani'),
(8, 'Uttara'),
(9, 'Badda'),
(10, 'Mohakhali'),
(11, 'Mogbazar'),
(12, 'Ajimpur'),
(13, 'Old Dhaka'),
(14, 'Baridhara'),
(15, 'Khilgaon'),
(16, 'Mirpur'),
(17, 'Shaymoli'),
(18, 'Kallyanpur'),
(19, 'Cantonment'),
(20, 'Lalmatia');

-- --------------------------------------------------------

--
-- Table structure for table `district_table`
--

CREATE TABLE `district_table` (
  `district_id` int(2) NOT NULL,
  `district_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district_table`
--

INSERT INTO `district_table` (`district_id`, `district_name`) VALUES
(1, 'Dhaka'),
(2, 'Chittagong'),
(3, 'Barisal'),
(4, 'Rajshahi'),
(5, 'Sylhet'),
(6, 'Khulna'),
(7, 'Dinajpur');

-- --------------------------------------------------------

--
-- Table structure for table `flat_table`
--

CREATE TABLE `flat_table` (
  `flat_id` int(4) NOT NULL,
  `flat_owner_id` int(3) NOT NULL,
  `flat_division` varchar(16) NOT NULL,
  `flat_type` varchar(16) NOT NULL,
  `flat_area` varchar(16) NOT NULL,
  `flat_rent` int(6) NOT NULL,
  `flat_rent_advance` int(7) NOT NULL,
  `flat_details` varchar(500) NOT NULL,
  `flat_picture` varchar(200) NOT NULL,
  `flat_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flat_table`
--

INSERT INTO `flat_table` (`flat_id`, `flat_owner_id`, `flat_division`, `flat_type`, `flat_area`, `flat_rent`, `flat_rent_advance`, `flat_details`, `flat_picture`, `flat_date`) VALUES
(1, 1, 'Dhaka', 'For family', 'Gabtoli', 15000, 100000, 'Nice House to be in really', 'resized_AIVC-head.jpg', '30 july,2017'),
(3, 1, 'Dhaka', 'For family', 'Gabtoli', 12000, 120000, 'nice bedroom', 'resized_20270002_1944718302471227_575591143_n.jpg', '2017/07/30'),
(4, 1, 'Dhaka', 'For family', 'Dhanmondi', 15000, 1500000, '3 bedroom, 1 dyning, 1 kitchen\r\nbeautiful place to live in. You will like it', 'resized_Bangladesh-Cox-Bazar-Coastal-Tourism.jpg', '2017/07/31'),
(5, 1, 'Chittagong', 'Sharing', 'Mirsorai', 15000, 1500000, 'cool', 'resized_1syxsv.jpg', '2017/08/01');

-- --------------------------------------------------------

--
-- Table structure for table `house_owner_table`
--

CREATE TABLE `house_owner_table` (
  `house_owner_id` int(4) NOT NULL,
  `house_owner_password` varchar(150) NOT NULL,
  `house_owner_name` varchar(50) NOT NULL,
  `house_owner_occupation` varchar(30) NOT NULL,
  `house_owner_email` varchar(50) NOT NULL,
  `house_owner_phone` varchar(15) NOT NULL,
  `house_owner_mobile` varchar(15) NOT NULL,
  `house_owner_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house_owner_table`
--

INSERT INTO `house_owner_table` (`house_owner_id`, `house_owner_password`, `house_owner_name`, `house_owner_occupation`, `house_owner_email`, `house_owner_phone`, `house_owner_mobile`, `house_owner_image`) VALUES
(1, '25d55ad283aa400af464c76d713c07ad', 'sagar', 'Student', 'admin@gmail.com', '01710684220', '01710684220', 'resized_how-to-use-faceapp--the-popular-new-app-that-can-make-you-smile-and-change-your-gender.jpg'),
(2, '25d55ad283aa400af464c76d713c07ad', 'sagar', '', 'adminsdfas@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `khulna_table`
--

CREATE TABLE `khulna_table` (
  `area_id` int(3) NOT NULL,
  `area_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khulna_table`
--

INSERT INTO `khulna_table` (`area_id`, `area_name`) VALUES
(1, 'Khulna'),
(2, 'Magura'),
(3, 'Jessore'),
(4, 'Satkhira'),
(5, 'Kalia'),
(6, 'Bagerhat'),
(7, 'Mongla');

-- --------------------------------------------------------

--
-- Table structure for table `rajshahi_table`
--

CREATE TABLE `rajshahi_table` (
  `area_id` int(3) NOT NULL,
  `area_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rajshahi_table`
--

INSERT INTO `rajshahi_table` (`area_id`, `area_name`) VALUES
(1, 'Chapai'),
(2, 'Joypurhat'),
(3, 'Bogra'),
(4, 'Sirajganj'),
(5, 'Ishwardi'),
(6, 'Natore'),
(7, 'Bagmara');

-- --------------------------------------------------------

--
-- Table structure for table `rangpur_table`
--

CREATE TABLE `rangpur_table` (
  `area_id` int(3) NOT NULL,
  `area_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rangpur_table`
--

INSERT INTO `rangpur_table` (`area_id`, `area_name`) VALUES
(1, 'Jalpaiguri'),
(2, 'Rangpur'),
(3, 'Dinajpur'),
(4, 'Kurigram'),
(5, 'Birampur'),
(6, 'Baliadangi'),
(7, 'Phulbari');

-- --------------------------------------------------------

--
-- Table structure for table `sylhet_table`
--

CREATE TABLE `sylhet_table` (
  `area_id` int(3) NOT NULL,
  `area_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sylhet_table`
--

INSERT INTO `sylhet_table` (`area_id`, `area_name`) VALUES
(1, 'Habiganj'),
(2, 'Sylhet'),
(3, 'Sreemangal'),
(4, 'Sunamganj'),
(5, 'Chhatak'),
(6, 'Barlekha'),
(7, 'Nabiganj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barisal_table`
--
ALTER TABLE `barisal_table`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `chittagong_table`
--
ALTER TABLE `chittagong_table`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `customer_table`
--
ALTER TABLE `customer_table`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `dhaka_table`
--
ALTER TABLE `dhaka_table`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `district_table`
--
ALTER TABLE `district_table`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `flat_table`
--
ALTER TABLE `flat_table`
  ADD PRIMARY KEY (`flat_id`);

--
-- Indexes for table `house_owner_table`
--
ALTER TABLE `house_owner_table`
  ADD PRIMARY KEY (`house_owner_id`);

--
-- Indexes for table `khulna_table`
--
ALTER TABLE `khulna_table`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `rajshahi_table`
--
ALTER TABLE `rajshahi_table`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `rangpur_table`
--
ALTER TABLE `rangpur_table`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `sylhet_table`
--
ALTER TABLE `sylhet_table`
  ADD PRIMARY KEY (`area_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barisal_table`
--
ALTER TABLE `barisal_table`
  MODIFY `area_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `chittagong_table`
--
ALTER TABLE `chittagong_table`
  MODIFY `area_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `customer_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dhaka_table`
--
ALTER TABLE `dhaka_table`
  MODIFY `area_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `district_table`
--
ALTER TABLE `district_table`
  MODIFY `district_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `flat_table`
--
ALTER TABLE `flat_table`
  MODIFY `flat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `house_owner_table`
--
ALTER TABLE `house_owner_table`
  MODIFY `house_owner_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `khulna_table`
--
ALTER TABLE `khulna_table`
  MODIFY `area_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rajshahi_table`
--
ALTER TABLE `rajshahi_table`
  MODIFY `area_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rangpur_table`
--
ALTER TABLE `rangpur_table`
  MODIFY `area_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sylhet_table`
--
ALTER TABLE `sylhet_table`
  MODIFY `area_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
