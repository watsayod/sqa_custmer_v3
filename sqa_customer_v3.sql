-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2020 at 09:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sqa_customer_v3`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(5) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `company_name` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_position` varchar(999) NOT NULL,
  `customer_telephone` varchar(10) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_employee` varchar(2999) NOT NULL,
  `customer_service_cat` varchar(999) NOT NULL,
  `customer_service` varchar(999) NOT NULL,
  `customer_service_a` varchar(5000) NOT NULL,
  `customer_project` varchar(5000) NOT NULL,
  `q1_1` int(11) NOT NULL,
  `q1_2` int(11) NOT NULL,
  `q1_3` int(11) NOT NULL,
  `q1_4` int(11) NOT NULL,
  `q1_5` int(11) NOT NULL,
  `q2_1` int(11) NOT NULL,
  `q2_2` int(11) NOT NULL,
  `q2_3` int(11) NOT NULL,
  `q2_4` int(11) NOT NULL,
  `q2_5` int(11) NOT NULL,
  `q3_1` int(11) NOT NULL,
  `q3_2` int(11) NOT NULL,
  `q3_3` int(11) NOT NULL,
  `q3_4` int(11) NOT NULL,
  `suggestions_detail` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `user_id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'admin'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`user_id`, `username`, `pass`, `status`) VALUES
(1, 'sdiadmin', 'mis@Pass01', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(5) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_cat` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `service_cat`) VALUES
(3, 'Android', 'Developer'),
(2, 'AI Develop', 'Developer'),
(1, '.net', 'Developer'),
(4, 'API', 'Developer'),
(5, 'BA', 'Developer'),
(6, 'Banner photo ads', 'Developer'),
(7, 'Bannervads', 'Developer'),
(8, 'Business Development', 'Developer'),
(9, 'C#', 'Developer'),
(10, 'Cloud & Internet', 'Developer'),
(11, 'Config Fortigate', 'IT Support'),
(12, 'Consult', 'IT Support'),
(13, 'customer engage / customer service', 'etc.'),
(14, 'customer survey website', 'Developer'),
(15, 'DBA', 'Developer'),
(16, 'Develop Application', 'Developer'),
(17, 'Digital Marketing', 'Developer'),
(18, 'E-Tax invoice implementation', 'Developer'),
(19, 'Facebook ads (SOL)', 'Developer'),
(20, 'firebase, redux', 'Developer'),
(21, 'Frontend', 'Developer'),
(22, 'Implement and migrate AD + ค่า R&D', 'IT Support'),
(23, 'Implement Network', 'IT Support'),
(24, 'Implement Switch', 'IT Support'),
(25, 'IOS', 'Developer'),
(26, 'IT admin', 'Developer'),
(27, 'IT Remote Support', 'IT Support'),
(28, 'IT Support', 'IT Support'),
(29, 'JAVA', 'Developer'),
(30, 'Jmeter', 'Developer'),
(31, 'Junior Developer', 'Developer'),
(32, 'Migreat VM', 'IT Support'),
(33, 'NOC Tier1', 'IT Support'),
(34, 'Node JS', 'Developer'),
(35, 'Office & Facilities Rental', 'IT Support'),
(36, 'Migrate Web Hosting to Alibaba Cloud', 'IT Support'),
(37, 'PHP', 'Developer'),
(38, 'Platform', 'Developer'),
(39, 'PM', 'IT Support'),
(40, 'Programer & Developer', 'Developer'),
(41, 'Python', 'Developer'),
(42, 'React', 'Developer'),
(43, 'react wordpress', 'Developer'),
(44, 'Rest API', 'Developer'),
(45, 'SA', 'Developer'),
(46, 'Sale', 'etc.'),
(47, 'Sale Account Manager', 'etc.'),
(48, 'Sale-Co Outsource', 'etc.'),
(49, 'Sales Admin Outsource', 'etc.'),
(50, 'SE', 'Developer'),
(51, 'Software Development', 'Developer'),
(52, 'Software Engineer', 'Developer'),
(53, 'Software Project Management', 'Developer'),
(54, 'System Analysis', 'Developer'),
(55, 'Tester', 'Developer'),
(56, 'TTM Connect', 'Developer'),
(57, 'UXUI', 'Developer'),
(58, 'VA scan service', 'IT Support'),
(59, 'VMWare Esx upgrading. 6.5 to 6.7', 'IT Support'),
(60, 'web content', 'Developer'),
(61, 'Web Site', 'Developer'),
(62, 'งานระบบบัญชี', 'etc.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
