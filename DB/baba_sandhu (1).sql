-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2020 at 02:34 AM
-- Server version: 5.7.27
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baba_sandhu`
--

-- --------------------------------------------------------

--
-- Table structure for table `its_category`
--

CREATE TABLE `its_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `process` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `is_default` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_category`
--

INSERT INTO `its_category` (`id`, `category_name`, `description`, `process`, `is_active`, `is_default`, `created_by`, `deleted_by`, `deleted_date`, `created_at`, `updated_at`) VALUES
(9, 'Mother Coil', 'Mother Coil', 1, 1, NULL, NULL, NULL, NULL, '2020-02-15', NULL),
(10, 'Slitted Coil', 'Slitted Coil', 0, 1, NULL, NULL, NULL, NULL, '2020-02-15', NULL),
(11, 'Finished Goods', 'Finished Goods', 0, 1, NULL, NULL, NULL, NULL, '2020-02-15', NULL),
(12, 'Scrap', 'Scrap', 0, 1, NULL, NULL, NULL, NULL, '2020-02-15', NULL),
(13, 'Invisible Lose', 'Invisible Lose', 0, 1, NULL, NULL, NULL, NULL, '2020-02-15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_cities`
--

CREATE TABLE `its_cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0' COMMENT '1 ="Delete"',
  `ip_address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` decimal(10,0) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_cities`
--

INSERT INTO `its_cities` (`id`, `org_id`, `country_id`, `state_id`, `city`, `state`, `status`, `is_deleted`, `ip_address`, `modified_date`, `created_at`) VALUES
(1, NULL, 0, 0, 'Mumbai', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(2, NULL, 0, 0, 'Delhi', 'Delhi', 1, 0, '', '2020-02-11 13:48:15', NULL),
(3, NULL, 0, 0, 'Bengaluru', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(4, NULL, 0, 0, 'Ahmedabad', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(5, NULL, 0, 0, 'Hyderabad', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(6, NULL, 0, 0, 'Chennai', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(7, NULL, 0, 0, 'Kolkata', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(8, NULL, 0, 0, 'Pune', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(9, NULL, 0, 0, 'Jaipur', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(10, NULL, 0, 0, 'Surat', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(11, NULL, 0, 0, 'Lucknow', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(12, NULL, 0, 0, 'Kanpur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(13, NULL, 0, 0, 'Nagpur', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(14, NULL, 0, 0, 'Patna', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(15, NULL, 0, 0, 'Indore', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(16, NULL, 0, 0, 'Thane', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(17, NULL, 0, 0, 'Bhopal', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(18, NULL, 0, 0, 'Visakhapatnam', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(19, NULL, 0, 0, 'Vadodara', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(20, NULL, 0, 0, 'Firozabad', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(21, NULL, 0, 0, 'Ludhiana', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(22, NULL, 0, 0, 'Rajkot', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(23, NULL, 0, 0, 'Agra', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(24, NULL, 0, 0, 'Siliguri', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(25, NULL, 0, 0, 'Nashik', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(26, NULL, 0, 0, 'Faridabad', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(27, NULL, 0, 0, 'Patiala', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(28, NULL, 0, 0, 'Meerut', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(29, NULL, 0, 0, 'Kalyan-Dombivali', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(30, NULL, 0, 0, 'Vasai-Virar', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(31, NULL, 0, 0, 'Varanasi', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(32, NULL, 0, 0, 'Srinagar', 'Jammu and Kashmir', 1, 0, '', '2020-02-11 13:48:15', NULL),
(33, NULL, 0, 0, 'Dhanbad', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(34, NULL, 0, 0, 'Jodhpur', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(35, NULL, 0, 0, 'Amritsar', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(36, NULL, 0, 0, 'Raipur', 'Chhattisgarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(37, NULL, 0, 0, 'Allahabad', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(38, NULL, 0, 0, 'Coimbatore', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(39, NULL, 0, 0, 'Jabalpur', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(40, NULL, 0, 0, 'Gwalior', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(41, NULL, 0, 0, 'Vijayawada', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(42, NULL, 0, 0, 'Madurai', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(43, NULL, 0, 0, 'Guwahati', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(44, NULL, 0, 0, 'Chandigarh', 'Chandigarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(45, NULL, 0, 0, 'Hubli-Dharwad', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(46, NULL, 0, 0, 'Amroha', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(47, NULL, 0, 0, 'Moradabad', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(48, NULL, 0, 0, 'Gurgaon', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(49, NULL, 0, 0, 'Aligarh', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(50, NULL, 0, 0, 'Solapur', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(51, NULL, 0, 0, 'Ranchi', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(52, NULL, 0, 0, 'Jalandhar', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(53, NULL, 0, 0, 'Tiruchirappalli', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(54, NULL, 0, 0, 'Bhubaneswar', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(55, NULL, 0, 0, 'Salem', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(56, NULL, 0, 0, 'Warangal', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(57, NULL, 0, 0, 'Mira-Bhayandar', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(58, NULL, 0, 0, 'Thiruvananthapuram', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(59, NULL, 0, 0, 'Bhiwandi', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(60, NULL, 0, 0, 'Saharanpur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(61, NULL, 0, 0, 'Guntur', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(62, NULL, 0, 0, 'Amravati', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(63, NULL, 0, 0, 'Bikaner', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(64, NULL, 0, 0, 'Noida', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(65, NULL, 0, 0, 'Jamshedpur', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(66, NULL, 0, 0, 'Bhilai Nagar', 'Chhattisgarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(67, NULL, 0, 0, 'Cuttack', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(68, NULL, 0, 0, 'Kochi', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(69, NULL, 0, 0, 'Udaipur', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(70, NULL, 0, 0, 'Bhavnagar', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(71, NULL, 0, 0, 'Dehradun', 'Uttarakhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(72, NULL, 0, 0, 'Asansol', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(73, NULL, 0, 0, 'Nanded-Waghala', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(74, NULL, 0, 0, 'Ajmer', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(75, NULL, 0, 0, 'Jamnagar', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(76, NULL, 0, 0, 'Ujjain', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(77, NULL, 0, 0, 'Sangli', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(78, NULL, 0, 0, 'Loni', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(79, NULL, 0, 0, 'Jhansi', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(80, NULL, 0, 0, 'Pondicherry', 'Puducherry', 1, 0, '', '2020-02-11 13:48:15', NULL),
(81, NULL, 0, 0, 'Nellore', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(82, NULL, 0, 0, 'Jammu', 'Jammu and Kashmir', 1, 0, '', '2020-02-11 13:48:15', NULL),
(83, NULL, 0, 0, 'Belagavi', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(84, NULL, 0, 0, 'Raurkela', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(85, NULL, 0, 0, 'Mangaluru', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(86, NULL, 0, 0, 'Tirunelveli', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(87, NULL, 0, 0, 'Malegaon', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(88, NULL, 0, 0, 'Gaya', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(89, NULL, 0, 0, 'Tiruppur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(90, NULL, 0, 0, 'Davanagere', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(91, NULL, 0, 0, 'Kozhikode', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(92, NULL, 0, 0, 'Akola', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(93, NULL, 0, 0, 'Kurnool', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(94, NULL, 0, 0, 'Bokaro Steel City', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(95, NULL, 0, 0, 'Rajahmundry', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(96, NULL, 0, 0, 'Ballari', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(97, NULL, 0, 0, 'Agartala', 'Tripura', 1, 0, '', '2020-02-11 13:48:15', NULL),
(98, NULL, 0, 0, 'Bhagalpur', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(99, NULL, 0, 0, 'Latur', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(100, NULL, 0, 0, 'Dhule', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(101, NULL, 0, 0, 'Korba', 'Chhattisgarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(102, NULL, 0, 0, 'Bhilwara', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(103, NULL, 0, 0, 'Brahmapur', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(104, NULL, 0, 0, 'Mysore', 'Karnatka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(105, NULL, 0, 0, 'Muzaffarpur', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(106, NULL, 0, 0, 'Ahmednagar', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(107, NULL, 0, 0, 'Kollam', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(108, NULL, 0, 0, 'Raghunathganj', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(109, NULL, 0, 0, 'Bilaspur', 'Chhattisgarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(110, NULL, 0, 0, 'Shahjahanpur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(111, NULL, 0, 0, 'Thrissur', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(112, NULL, 0, 0, 'Alwar', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(113, NULL, 0, 0, 'Kakinada', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(114, NULL, 0, 0, 'Nizamabad', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(115, NULL, 0, 0, 'Sagar', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(116, NULL, 0, 0, 'Tumkur', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(117, NULL, 0, 0, 'Hisar', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(118, NULL, 0, 0, 'Rohtak', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(119, NULL, 0, 0, 'Panipat', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(120, NULL, 0, 0, 'Darbhanga', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(121, NULL, 0, 0, 'Kharagpur', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(122, NULL, 0, 0, 'Aizawl', 'Mizoram', 1, 0, '', '2020-02-11 13:48:15', NULL),
(123, NULL, 0, 0, 'Ichalkaranji', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(124, NULL, 0, 0, 'Tirupati', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(125, NULL, 0, 0, 'Karnal', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(126, NULL, 0, 0, 'Bathinda', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(127, NULL, 0, 0, 'Rampur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(128, NULL, 0, 0, 'Shivamogga', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(129, NULL, 0, 0, 'Ratlam', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(130, NULL, 0, 0, 'Modinagar', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(131, NULL, 0, 0, 'Durg', 'Chhattisgarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(132, NULL, 0, 0, 'Shillong', 'Meghalaya', 1, 0, '', '2020-02-11 13:48:15', NULL),
(133, NULL, 0, 0, 'Imphal', 'Manipur', 1, 0, '', '2020-02-11 13:48:15', NULL),
(134, NULL, 0, 0, 'Hapur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(135, NULL, 0, 0, 'Ranipet', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(136, NULL, 0, 0, 'Anantapur', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(137, NULL, 0, 0, 'Arrah', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(138, NULL, 0, 0, 'Karimnagar', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(139, NULL, 0, 0, 'Parbhani', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(140, NULL, 0, 0, 'Etawah', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(141, NULL, 0, 0, 'Bharatpur', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(142, NULL, 0, 0, 'Begusarai', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(143, NULL, 0, 0, 'New Delhi', 'Delhi', 1, 0, '', '2020-02-11 13:48:15', NULL),
(144, NULL, 0, 0, 'Chhapra', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(145, NULL, 0, 0, 'Kadapa', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(146, NULL, 0, 0, 'Ramagundam', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(147, NULL, 0, 0, 'Pali', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(148, NULL, 0, 0, 'Satna', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(149, NULL, 0, 0, 'Vizianagaram', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(150, NULL, 0, 0, 'Katihar', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(151, NULL, 0, 0, 'Hardwar', 'Uttarakhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(152, NULL, 0, 0, 'Sonipat', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(153, NULL, 0, 0, 'Nagercoil', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(154, NULL, 0, 0, 'Thanjavur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(155, NULL, 0, 0, 'Murwara (Katni)', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(156, NULL, 0, 0, 'Naihati', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(157, NULL, 0, 0, 'Sambhal', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(158, NULL, 0, 0, 'Nadiad', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(159, NULL, 0, 0, 'Yamunanagar', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(160, NULL, 0, 0, 'English Bazar', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(161, NULL, 0, 0, 'Eluru', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(162, NULL, 0, 0, 'Munger', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(163, NULL, 0, 0, 'Panchkula', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(164, NULL, 0, 0, 'Raayachuru', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(165, NULL, 0, 0, 'Panvel', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(166, NULL, 0, 0, 'Deoghar', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(167, NULL, 0, 0, 'Ongole', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(168, NULL, 0, 0, 'Nandyal', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(169, NULL, 0, 0, 'Morena', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(170, NULL, 0, 0, 'Bhiwani', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(171, NULL, 0, 0, 'Porbandar', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(172, NULL, 0, 0, 'Palakkad', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(173, NULL, 0, 0, 'Anand', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(174, NULL, 0, 0, 'Purnia', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(175, NULL, 0, 0, 'Baharampur', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(176, NULL, 0, 0, 'Barmer', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(177, NULL, 0, 0, 'Morvi', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(178, NULL, 0, 0, 'Orai', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(179, NULL, 0, 0, 'Bahraich', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(180, NULL, 0, 0, 'Sikar', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(181, NULL, 0, 0, 'Vellore', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(182, NULL, 0, 0, 'Singrauli', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(183, NULL, 0, 0, 'Khammam', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(184, NULL, 0, 0, 'Mahesana', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(185, NULL, 0, 0, 'Silchar', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(186, NULL, 0, 0, 'Sambalpur', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(187, NULL, 0, 0, 'Rewa', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(188, NULL, 0, 0, 'Unnao', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(189, NULL, 0, 0, 'Hugli-Chinsurah', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(190, NULL, 0, 0, 'Raiganj', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(191, NULL, 0, 0, 'Phusro', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(192, NULL, 0, 0, 'Adityapur', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(193, NULL, 0, 0, 'Alappuzha', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(194, NULL, 0, 0, 'Bahadurgarh', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(195, NULL, 0, 0, 'Machilipatnam', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(196, NULL, 0, 0, 'Rae Bareli', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(197, NULL, 0, 0, 'Jalpaiguri', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(198, NULL, 0, 0, 'Bharuch', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(199, NULL, 0, 0, 'Pathankot', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(200, NULL, 0, 0, 'Hoshiarpur', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(201, NULL, 0, 0, 'Baramula', 'Jammu and Kashmir', 1, 0, '', '2020-02-11 13:48:15', NULL),
(202, NULL, 0, 0, 'Adoni', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(203, NULL, 0, 0, 'Jind', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(204, NULL, 0, 0, 'Tonk', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(205, NULL, 0, 0, 'Tenali', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(206, NULL, 0, 0, 'Kancheepuram', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(207, NULL, 0, 0, 'Vapi', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(208, NULL, 0, 0, 'Sirsa', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(209, NULL, 0, 0, 'Navsari', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(210, NULL, 0, 0, 'Mahbubnagar', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(211, NULL, 0, 0, 'Puri', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(212, NULL, 0, 0, 'Robertson Pet', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(213, NULL, 0, 0, 'Erode', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(214, NULL, 0, 0, 'Batala', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(215, NULL, 0, 0, 'Haldwani-cum-Kathgodam', 'Uttarakhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(216, NULL, 0, 0, 'Vidisha', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(217, NULL, 0, 0, 'Saharsa', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(218, NULL, 0, 0, 'Thanesar', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(219, NULL, 0, 0, 'Chittoor', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(220, NULL, 0, 0, 'Veraval', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(221, NULL, 0, 0, 'Lakhimpur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(222, NULL, 0, 0, 'Sitapur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(223, NULL, 0, 0, 'Hindupur', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(224, NULL, 0, 0, 'Santipur', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(225, NULL, 0, 0, 'Balurghat', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(226, NULL, 0, 0, 'Ganjbasoda', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(227, NULL, 0, 0, 'Moga', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(228, NULL, 0, 0, 'Proddatur', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(229, NULL, 0, 0, 'Srinagar', 'Uttarakhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(230, NULL, 0, 0, 'Medinipur', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(231, NULL, 0, 0, 'Habra', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(232, NULL, 0, 0, 'Sasaram', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(233, NULL, 0, 0, 'Hajipur', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(234, NULL, 0, 0, 'Bhuj', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(235, NULL, 0, 0, 'Shivpuri', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(236, NULL, 0, 0, 'Ranaghat', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(237, NULL, 0, 0, 'Shimla', 'Himachal Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(238, NULL, 0, 0, 'Tiruvannamalai', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(239, NULL, 0, 0, 'Kaithal', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(240, NULL, 0, 0, 'Rajnandgaon', 'Chhattisgarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(241, NULL, 0, 0, 'Godhra', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(242, NULL, 0, 0, 'Hazaribag', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(243, NULL, 0, 0, 'Bhimavaram', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(244, NULL, 0, 0, 'Mandsaur', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(245, NULL, 0, 0, 'Dibrugarh', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(246, NULL, 0, 0, 'Kolar', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(247, NULL, 0, 0, 'Bankura', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(248, NULL, 0, 0, 'Mandya', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(249, NULL, 0, 0, 'Dehri-on-Sone', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(250, NULL, 0, 0, 'Madanapalle', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(251, NULL, 0, 0, 'Malerkotla', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(252, NULL, 0, 0, 'Lalitpur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(253, NULL, 0, 0, 'Bettiah', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(254, NULL, 0, 0, 'Pollachi', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(255, NULL, 0, 0, 'Khanna', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(256, NULL, 0, 0, 'Neemuch', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(257, NULL, 0, 0, 'Palwal', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(258, NULL, 0, 0, 'Palanpur', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(259, NULL, 0, 0, 'Guntakal', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(260, NULL, 0, 0, 'Nabadwip', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(261, NULL, 0, 0, 'Udupi', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(262, NULL, 0, 0, 'Jagdalpur', 'Chhattisgarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(263, NULL, 0, 0, 'Motihari', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(264, NULL, 0, 0, 'Pilibhit', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(265, NULL, 0, 0, 'Dimapur', 'Nagaland', 1, 0, '', '2020-02-11 13:48:15', NULL),
(266, NULL, 0, 0, 'Mohali', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(267, NULL, 0, 0, 'Sadulpur', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(268, NULL, 0, 0, 'Rajapalayam', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(269, NULL, 0, 0, 'Dharmavaram', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(270, NULL, 0, 0, 'Kashipur', 'Uttarakhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(271, NULL, 0, 0, 'Sivakasi', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(272, NULL, 0, 0, 'Darjiling', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(273, NULL, 0, 0, 'Chikkamagaluru', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(274, NULL, 0, 0, 'Gudivada', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(275, NULL, 0, 0, 'Baleshwar Town', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(276, NULL, 0, 0, 'Mancherial', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(277, NULL, 0, 0, 'Srikakulam', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(278, NULL, 0, 0, 'Adilabad', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(279, NULL, 0, 0, 'Yavatmal', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(280, NULL, 0, 0, 'Barnala', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(281, NULL, 0, 0, 'Nagaon', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(282, NULL, 0, 0, 'Narasaraopet', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(283, NULL, 0, 0, 'Raigarh', 'Chhattisgarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(284, NULL, 0, 0, 'Roorkee', 'Uttarakhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(285, NULL, 0, 0, 'Valsad', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(286, NULL, 0, 0, 'Ambikapur', 'Chhattisgarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(287, NULL, 0, 0, 'Giridih', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(288, NULL, 0, 0, 'Chandausi', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(289, NULL, 0, 0, 'Purulia', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(290, NULL, 0, 0, 'Patan', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(291, NULL, 0, 0, 'Bagaha', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(292, NULL, 0, 0, 'Hardoi ', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(293, NULL, 0, 0, 'Achalpur', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(294, NULL, 0, 0, 'Osmanabad', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(295, NULL, 0, 0, 'Deesa', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(296, NULL, 0, 0, 'Nandurbar', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(297, NULL, 0, 0, 'Azamgarh', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(298, NULL, 0, 0, 'Ramgarh', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(299, NULL, 0, 0, 'Firozpur', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(300, NULL, 0, 0, 'Baripada Town', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(301, NULL, 0, 0, 'Karwar', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(302, NULL, 0, 0, 'Siwan', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(303, NULL, 0, 0, 'Rajampet', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(304, NULL, 0, 0, 'Pudukkottai', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(305, NULL, 0, 0, 'Anantnag', 'Jammu and Kashmir', 1, 0, '', '2020-02-11 13:48:15', NULL),
(306, NULL, 0, 0, 'Tadpatri', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(307, NULL, 0, 0, 'Satara', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(308, NULL, 0, 0, 'Bhadrak', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(309, NULL, 0, 0, 'Kishanganj', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(310, NULL, 0, 0, 'Suryapet', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(311, NULL, 0, 0, 'Wardha', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(312, NULL, 0, 0, 'Ranebennuru', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(313, NULL, 0, 0, 'Amreli', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(314, NULL, 0, 0, 'Neyveli (TS)', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(315, NULL, 0, 0, 'Jamalpur', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(316, NULL, 0, 0, 'Marmagao', 'Goa', 1, 0, '', '2020-02-11 13:48:15', NULL),
(317, NULL, 0, 0, 'Udgir', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(318, NULL, 0, 0, 'Tadepalligudem', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(319, NULL, 0, 0, 'Nagapattinam', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(320, NULL, 0, 0, 'Buxar', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(321, NULL, 0, 0, 'Aurangabad', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(322, NULL, 0, 0, 'Jehanabad', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(323, NULL, 0, 0, 'Phagwara', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(324, NULL, 0, 0, 'Khair', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(325, NULL, 0, 0, 'Sawai Madhopur', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(326, NULL, 0, 0, 'Kapurthala', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(327, NULL, 0, 0, 'Chilakaluripet', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(328, NULL, 0, 0, 'Aurangabad', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(329, NULL, 0, 0, 'Malappuram', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(330, NULL, 0, 0, 'Rewari', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(331, NULL, 0, 0, 'Nagaur', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(332, NULL, 0, 0, 'Sultanpur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(333, NULL, 0, 0, 'Nagda', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(334, NULL, 0, 0, 'Port Blair', 'Andaman and Nicobar Islands', 1, 0, '', '2020-02-11 13:48:15', NULL),
(335, NULL, 0, 0, 'Lakhisarai', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(336, NULL, 0, 0, 'Panaji', 'Goa', 1, 0, '', '2020-02-11 13:48:15', NULL),
(337, NULL, 0, 0, 'Tinsukia', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(338, NULL, 0, 0, 'Itarsi', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(339, NULL, 0, 0, 'Kohima', 'Nagaland', 1, 0, '', '2020-02-11 13:48:15', NULL),
(340, NULL, 0, 0, 'Balangir', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(341, NULL, 0, 0, 'Nawada', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(342, NULL, 0, 0, 'Jharsuguda', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(343, NULL, 0, 0, 'Jagtial', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(344, NULL, 0, 0, 'Viluppuram', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(345, NULL, 0, 0, 'Amalner', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(346, NULL, 0, 0, 'Zirakpur', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(347, NULL, 0, 0, 'Tanda', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(348, NULL, 0, 0, 'Tiruchengode', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(349, NULL, 0, 0, 'Nagina', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(350, NULL, 0, 0, 'Yemmiganur', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(351, NULL, 0, 0, 'Vaniyambadi', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(352, NULL, 0, 0, 'Sarni', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(353, NULL, 0, 0, 'Theni Allinagaram', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(354, NULL, 0, 0, 'Margao', 'Goa', 1, 0, '', '2020-02-11 13:48:15', NULL),
(355, NULL, 0, 0, 'Akot', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(356, NULL, 0, 0, 'Sehore', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(357, NULL, 0, 0, 'Mhow Cantonment', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(358, NULL, 0, 0, 'Kot Kapura', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(359, NULL, 0, 0, 'Makrana', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(360, NULL, 0, 0, 'Pandharpur', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(361, NULL, 0, 0, 'Miryalaguda', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(362, NULL, 0, 0, 'Shamli', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(363, NULL, 0, 0, 'Seoni', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(364, NULL, 0, 0, 'Ranibennur', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(365, NULL, 0, 0, 'Kadiri', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(366, NULL, 0, 0, 'Shrirampur', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(367, NULL, 0, 0, 'Rudrapur', 'Uttarakhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(368, NULL, 0, 0, 'Parli', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(369, NULL, 0, 0, 'Najibabad', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(370, NULL, 0, 0, 'Nirmal', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(371, NULL, 0, 0, 'Udhagamandalam', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(372, NULL, 0, 0, 'Shikohabad', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(373, NULL, 0, 0, 'Jhumri Tilaiya', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(374, NULL, 0, 0, 'Aruppukkottai', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(375, NULL, 0, 0, 'Ponnani', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(376, NULL, 0, 0, 'Jamui', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(377, NULL, 0, 0, 'Sitamarhi', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(378, NULL, 0, 0, 'Chirala', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(379, NULL, 0, 0, 'Anjar', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(380, NULL, 0, 0, 'Karaikal', 'Puducherry', 1, 0, '', '2020-02-11 13:48:15', NULL),
(381, NULL, 0, 0, 'Hansi', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(382, NULL, 0, 0, 'Anakapalle', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(383, NULL, 0, 0, 'Mahasamund', 'Chhattisgarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(384, NULL, 0, 0, 'Faridkot', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(385, NULL, 0, 0, 'Saunda', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(386, NULL, 0, 0, 'Dhoraji', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(387, NULL, 0, 0, 'Paramakudi', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(388, NULL, 0, 0, 'Balaghat', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(389, NULL, 0, 0, 'Sujangarh', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(390, NULL, 0, 0, 'Khambhat', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(391, NULL, 0, 0, 'Muktsar', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(392, NULL, 0, 0, 'Rajpura', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(393, NULL, 0, 0, 'Kavali', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(394, NULL, 0, 0, 'Dhamtari', 'Chhattisgarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(395, NULL, 0, 0, 'Ashok Nagar', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(396, NULL, 0, 0, 'Sardarshahar', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(397, NULL, 0, 0, 'Mahuva', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(398, NULL, 0, 0, 'Bargarh', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(399, NULL, 0, 0, 'Kamareddy', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(400, NULL, 0, 0, 'Sahibganj', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(401, NULL, 0, 0, 'Kothagudem', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(402, NULL, 0, 0, 'Ramanagaram', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(403, NULL, 0, 0, 'Gokak', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(404, NULL, 0, 0, 'Tikamgarh', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(405, NULL, 0, 0, 'Araria', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(406, NULL, 0, 0, 'Rishikesh', 'Uttarakhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(407, NULL, 0, 0, 'Shahdol', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(408, NULL, 0, 0, 'Medininagar (Daltonganj)', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(409, NULL, 0, 0, 'Arakkonam', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(410, NULL, 0, 0, 'Washim', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(411, NULL, 0, 0, 'Sangrur', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(412, NULL, 0, 0, 'Bodhan', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(413, NULL, 0, 0, 'Fazilka', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(414, NULL, 0, 0, 'Palacole', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(415, NULL, 0, 0, 'Keshod', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(416, NULL, 0, 0, 'Sullurpeta', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(417, NULL, 0, 0, 'Wadhwan', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(418, NULL, 0, 0, 'Gurdaspur', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(419, NULL, 0, 0, 'Vatakara', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(420, NULL, 0, 0, 'Tura', 'Meghalaya', 1, 0, '', '2020-02-11 13:48:15', NULL),
(421, NULL, 0, 0, 'Narnaul', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(422, NULL, 0, 0, 'Kharar', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(423, NULL, 0, 0, 'Yadgir', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(424, NULL, 0, 0, 'Ambejogai', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(425, NULL, 0, 0, 'Ankleshwar', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(426, NULL, 0, 0, 'Savarkundla', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(427, NULL, 0, 0, 'Paradip', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(428, NULL, 0, 0, 'Virudhachalam', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(429, NULL, 0, 0, 'Kanhangad', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(430, NULL, 0, 0, 'Kadi', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(431, NULL, 0, 0, 'Srivilliputhur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(432, NULL, 0, 0, 'Gobindgarh', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(433, NULL, 0, 0, 'Tindivanam', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(434, NULL, 0, 0, 'Mansa', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(435, NULL, 0, 0, 'Taliparamba', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(436, NULL, 0, 0, 'Manmad', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(437, NULL, 0, 0, 'Tanuku', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(438, NULL, 0, 0, 'Rayachoti', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(439, NULL, 0, 0, 'Virudhunagar', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(440, NULL, 0, 0, 'Koyilandy', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(441, NULL, 0, 0, 'Jorhat', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(442, NULL, 0, 0, 'Karur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(443, NULL, 0, 0, 'Valparai', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(444, NULL, 0, 0, 'Srikalahasti', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(445, NULL, 0, 0, 'Neyyattinkara', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(446, NULL, 0, 0, 'Bapatla', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(447, NULL, 0, 0, 'Fatehabad', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(448, NULL, 0, 0, 'Malout', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(449, NULL, 0, 0, 'Sankarankovil', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(450, NULL, 0, 0, 'Tenkasi', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(451, NULL, 0, 0, 'Ratnagiri', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(452, NULL, 0, 0, 'Rabkavi Banhatti', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(453, NULL, 0, 0, 'Sikandrabad', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(454, NULL, 0, 0, 'Chaibasa', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(455, NULL, 0, 0, 'Chirmiri', 'Chhattisgarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(456, NULL, 0, 0, 'Palwancha', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(457, NULL, 0, 0, 'Bhawanipatna', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(458, NULL, 0, 0, 'Kayamkulam', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(459, NULL, 0, 0, 'Pithampur', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(460, NULL, 0, 0, 'Nabha', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(461, NULL, 0, 0, 'Shahabad, Hardoi', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(462, NULL, 0, 0, 'Dhenkanal', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(463, NULL, 0, 0, 'Uran Islampur', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(464, NULL, 0, 0, 'Gopalganj', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(465, NULL, 0, 0, 'Bongaigaon City', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(466, NULL, 0, 0, 'Palani', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(467, NULL, 0, 0, 'Pusad', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(468, NULL, 0, 0, 'Sopore', 'Jammu and Kashmir', 1, 0, '', '2020-02-11 13:48:15', NULL),
(469, NULL, 0, 0, 'Pilkhuwa', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(470, NULL, 0, 0, 'Tarn Taran', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(471, NULL, 0, 0, 'Renukoot', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(472, NULL, 0, 0, 'Mandamarri', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(473, NULL, 0, 0, 'Shahabad', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(474, NULL, 0, 0, 'Barbil', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(475, NULL, 0, 0, 'Koratla', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(476, NULL, 0, 0, 'Madhubani', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(477, NULL, 0, 0, 'Arambagh', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(478, NULL, 0, 0, 'Gohana', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(479, NULL, 0, 0, 'Ladnu', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(480, NULL, 0, 0, 'Pattukkottai', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(481, NULL, 0, 0, 'Sirsi', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(482, NULL, 0, 0, 'Sircilla', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(483, NULL, 0, 0, 'Tamluk', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(484, NULL, 0, 0, 'Jagraon', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(485, NULL, 0, 0, 'AlipurdUrban Agglomerationr', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(486, NULL, 0, 0, 'Alirajpur', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(487, NULL, 0, 0, 'Tandur', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(488, NULL, 0, 0, 'Naidupet', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(489, NULL, 0, 0, 'Tirupathur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(490, NULL, 0, 0, 'Tohana', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(491, NULL, 0, 0, 'Ratangarh', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(492, NULL, 0, 0, 'Dhubri', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(493, NULL, 0, 0, 'Masaurhi', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(494, NULL, 0, 0, 'Visnagar', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(495, NULL, 0, 0, 'Vrindavan', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(496, NULL, 0, 0, 'Nokha', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(497, NULL, 0, 0, 'Nagari', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(498, NULL, 0, 0, 'Narwana', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(499, NULL, 0, 0, 'Ramanathapuram', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(500, NULL, 0, 0, 'Ujhani', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(501, NULL, 0, 0, 'Samastipur', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(502, NULL, 0, 0, 'Laharpur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(503, NULL, 0, 0, 'Sangamner', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(504, NULL, 0, 0, 'Nimbahera', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(505, NULL, 0, 0, 'Siddipet', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(506, NULL, 0, 0, 'Suri', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(507, NULL, 0, 0, 'Diphu', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(508, NULL, 0, 0, 'Jhargram', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(509, NULL, 0, 0, 'Shirpur-Warwade', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(510, NULL, 0, 0, 'Tilhar', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(511, NULL, 0, 0, 'Sindhnur', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(512, NULL, 0, 0, 'Udumalaipettai', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(513, NULL, 0, 0, 'Malkapur', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(514, NULL, 0, 0, 'Wanaparthy', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(515, NULL, 0, 0, 'Gudur', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(516, NULL, 0, 0, 'Kendujhar', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(517, NULL, 0, 0, 'Mandla', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(518, NULL, 0, 0, 'Mandi', 'Himachal Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(519, NULL, 0, 0, 'Nedumangad', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(520, NULL, 0, 0, 'North Lakhimpur', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(521, NULL, 0, 0, 'Vinukonda', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(522, NULL, 0, 0, 'Tiptur', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(523, NULL, 0, 0, 'Gobichettipalayam', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(524, NULL, 0, 0, 'Sunabeda', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(525, NULL, 0, 0, 'Wani', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(526, NULL, 0, 0, 'Upleta', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(527, NULL, 0, 0, 'Narasapuram', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(528, NULL, 0, 0, 'Nuzvid', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(529, NULL, 0, 0, 'Tezpur', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(530, NULL, 0, 0, 'Una', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(531, NULL, 0, 0, 'Markapur', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(532, NULL, 0, 0, 'Sheopur', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(533, NULL, 0, 0, 'Thiruvarur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(534, NULL, 0, 0, 'Sidhpur', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(535, NULL, 0, 0, 'Sahaswan', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(536, NULL, 0, 0, 'Suratgarh', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(537, NULL, 0, 0, 'Shajapur', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(538, NULL, 0, 0, 'Rayagada', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(539, NULL, 0, 0, 'Lonavla', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(540, NULL, 0, 0, 'Ponnur', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(541, NULL, 0, 0, 'Kagaznagar', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(542, NULL, 0, 0, 'Gadwal', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(543, NULL, 0, 0, 'Bhatapara', 'Chhattisgarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(544, NULL, 0, 0, 'Kandukur', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(545, NULL, 0, 0, 'Sangareddy', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(546, NULL, 0, 0, 'Unjha', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(547, NULL, 0, 0, 'Lunglei', 'Mizoram', 1, 0, '', '2020-02-11 13:48:15', NULL),
(548, NULL, 0, 0, 'Karimganj', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(549, NULL, 0, 0, 'Kannur', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(550, NULL, 0, 0, 'Bobbili', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(551, NULL, 0, 0, 'Mokameh', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(552, NULL, 0, 0, 'Talegaon Dabhade', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(553, NULL, 0, 0, 'Anjangaon', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(554, NULL, 0, 0, 'Mangrol', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(555, NULL, 0, 0, 'Sunam', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(556, NULL, 0, 0, 'Gangarampur', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(557, NULL, 0, 0, 'Thiruvallur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(558, NULL, 0, 0, 'Tirur', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(559, NULL, 0, 0, 'Rath', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(560, NULL, 0, 0, 'Jatani', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(561, NULL, 0, 0, 'Viramgam', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(562, NULL, 0, 0, 'Rajsamand', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(563, NULL, 0, 0, 'Yanam', 'Puducherry', 1, 0, '', '2020-02-11 13:48:15', NULL),
(564, NULL, 0, 0, 'Kottayam', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(565, NULL, 0, 0, 'Panruti', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(566, NULL, 0, 0, 'Dhuri', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(567, NULL, 0, 0, 'Namakkal', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(568, NULL, 0, 0, 'Kasaragod', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(569, NULL, 0, 0, 'Modasa', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(570, NULL, 0, 0, 'Rayadurg', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(571, NULL, 0, 0, 'Supaul', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(572, NULL, 0, 0, 'Kunnamkulam', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(573, NULL, 0, 0, 'Umred', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(574, NULL, 0, 0, 'Bellampalle', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(575, NULL, 0, 0, 'Sibsagar', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(576, NULL, 0, 0, 'Mandi Dabwali', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(577, NULL, 0, 0, 'Ottappalam', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(578, NULL, 0, 0, 'Dumraon', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(579, NULL, 0, 0, 'Samalkot', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(580, NULL, 0, 0, 'Jaggaiahpet', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(581, NULL, 0, 0, 'Goalpara', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(582, NULL, 0, 0, 'Tuni', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(583, NULL, 0, 0, 'Lachhmangarh', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(584, NULL, 0, 0, 'Bhongir', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(585, NULL, 0, 0, 'Amalapuram', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(586, NULL, 0, 0, 'Firozpur Cantt.', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(587, NULL, 0, 0, 'Vikarabad', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(588, NULL, 0, 0, 'Thiruvalla', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(589, NULL, 0, 0, 'Sherkot', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(590, NULL, 0, 0, 'Palghar', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(591, NULL, 0, 0, 'Shegaon', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(592, NULL, 0, 0, 'Jangaon', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(593, NULL, 0, 0, 'Bheemunipatnam', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(594, NULL, 0, 0, 'Panna', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(595, NULL, 0, 0, 'Thodupuzha', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(596, NULL, 0, 0, 'KathUrban Agglomeration', 'Jammu and Kashmir', 1, 0, '', '2020-02-11 13:48:15', NULL),
(597, NULL, 0, 0, 'Palitana', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(598, NULL, 0, 0, 'Arwal', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(599, NULL, 0, 0, 'Venkatagiri', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(600, NULL, 0, 0, 'Kalpi', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(601, NULL, 0, 0, 'Rajgarh (Churu)', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(602, NULL, 0, 0, 'Sattenapalle', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(603, NULL, 0, 0, 'Arsikere', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(604, NULL, 0, 0, 'Ozar', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(605, NULL, 0, 0, 'Thirumangalam', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(606, NULL, 0, 0, 'Petlad', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(607, NULL, 0, 0, 'Nasirabad', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(608, NULL, 0, 0, 'Phaltan', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(609, NULL, 0, 0, 'Rampurhat', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(610, NULL, 0, 0, 'Nanjangud', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL);
INSERT INTO `its_cities` (`id`, `org_id`, `country_id`, `state_id`, `city`, `state`, `status`, `is_deleted`, `ip_address`, `modified_date`, `created_at`) VALUES
(611, NULL, 0, 0, 'Forbesganj', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(612, NULL, 0, 0, 'Tundla', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(613, NULL, 0, 0, 'BhabUrban Agglomeration', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(614, NULL, 0, 0, 'Sagara', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(615, NULL, 0, 0, 'Pithapuram', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(616, NULL, 0, 0, 'Sira', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(617, NULL, 0, 0, 'Bhadrachalam', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(618, NULL, 0, 0, 'Charkhi Dadri', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(619, NULL, 0, 0, 'Chatra', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(620, NULL, 0, 0, 'Palasa Kasibugga', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(621, NULL, 0, 0, 'Nohar', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(622, NULL, 0, 0, 'Yevla', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(623, NULL, 0, 0, 'Sirhind Fatehgarh Sahib', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(624, NULL, 0, 0, 'Bhainsa', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(625, NULL, 0, 0, 'Parvathipuram', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(626, NULL, 0, 0, 'Shahade', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(627, NULL, 0, 0, 'Chalakudy', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(628, NULL, 0, 0, 'Narkatiaganj', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(629, NULL, 0, 0, 'Kapadvanj', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(630, NULL, 0, 0, 'Macherla', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(631, NULL, 0, 0, 'Raghogarh-Vijaypur', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(632, NULL, 0, 0, 'Rupnagar', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(633, NULL, 0, 0, 'Naugachhia', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(634, NULL, 0, 0, 'Sendhwa', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(635, NULL, 0, 0, 'Byasanagar', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(636, NULL, 0, 0, 'Sandila', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(637, NULL, 0, 0, 'Gooty', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(638, NULL, 0, 0, 'Salur', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(639, NULL, 0, 0, 'Nanpara', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(640, NULL, 0, 0, 'Sardhana', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(641, NULL, 0, 0, 'Vita', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(642, NULL, 0, 0, 'Gumia', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(643, NULL, 0, 0, 'Puttur', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(644, NULL, 0, 0, 'Jalandhar Cantt.', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(645, NULL, 0, 0, 'Nehtaur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(646, NULL, 0, 0, 'Changanassery', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(647, NULL, 0, 0, 'Mandapeta', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(648, NULL, 0, 0, 'Dumka', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(649, NULL, 0, 0, 'Seohara', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(650, NULL, 0, 0, 'Umarkhed', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(651, NULL, 0, 0, 'Madhupur', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(652, NULL, 0, 0, 'Vikramasingapuram', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(653, NULL, 0, 0, 'Punalur', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(654, NULL, 0, 0, 'Kendrapara', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(655, NULL, 0, 0, 'Sihor', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(656, NULL, 0, 0, 'Nellikuppam', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(657, NULL, 0, 0, 'Samana', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(658, NULL, 0, 0, 'Warora', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(659, NULL, 0, 0, 'Nilambur', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(660, NULL, 0, 0, 'Rasipuram', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(661, NULL, 0, 0, 'Ramnagar', 'Uttarakhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(662, NULL, 0, 0, 'Jammalamadugu', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(663, NULL, 0, 0, 'Nawanshahr', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(664, NULL, 0, 0, 'Thoubal', 'Manipur', 1, 0, '', '2020-02-11 13:48:15', NULL),
(665, NULL, 0, 0, 'Athni', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(666, NULL, 0, 0, 'Cherthala', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(667, NULL, 0, 0, 'Sidhi', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(668, NULL, 0, 0, 'Farooqnagar', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(669, NULL, 0, 0, 'Peddapuram', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(670, NULL, 0, 0, 'Chirkunda', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(671, NULL, 0, 0, 'Pachora', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(672, NULL, 0, 0, 'Madhepura', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(673, NULL, 0, 0, 'Pithoragarh', 'Uttarakhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(674, NULL, 0, 0, 'Tumsar', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(675, NULL, 0, 0, 'Phalodi', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(676, NULL, 0, 0, 'Tiruttani', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(677, NULL, 0, 0, 'Rampura Phul', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(678, NULL, 0, 0, 'Perinthalmanna', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(679, NULL, 0, 0, 'Padrauna', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(680, NULL, 0, 0, 'Pipariya', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(681, NULL, 0, 0, 'Dalli-Rajhara', 'Chhattisgarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(682, NULL, 0, 0, 'Punganur', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(683, NULL, 0, 0, 'Mattannur', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(684, NULL, 0, 0, 'Mathura', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(685, NULL, 0, 0, 'Thakurdwara', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(686, NULL, 0, 0, 'Nandivaram-Guduvancheri', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(687, NULL, 0, 0, 'Mulbagal', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(688, NULL, 0, 0, 'Manjlegaon', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(689, NULL, 0, 0, 'Wankaner', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(690, NULL, 0, 0, 'Sillod', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(691, NULL, 0, 0, 'Nidadavole', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(692, NULL, 0, 0, 'Surapura', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(693, NULL, 0, 0, 'Rajagangapur', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(694, NULL, 0, 0, 'Sheikhpura', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(695, NULL, 0, 0, 'Parlakhemundi', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(696, NULL, 0, 0, 'Kalimpong', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(697, NULL, 0, 0, 'Siruguppa', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(698, NULL, 0, 0, 'Arvi', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(699, NULL, 0, 0, 'Limbdi', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(700, NULL, 0, 0, 'Barpeta', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(701, NULL, 0, 0, 'Manglaur', 'Uttarakhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(702, NULL, 0, 0, 'Repalle', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(703, NULL, 0, 0, 'Mudhol', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(704, NULL, 0, 0, 'Shujalpur', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(705, NULL, 0, 0, 'Mandvi', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(706, NULL, 0, 0, 'Thangadh', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(707, NULL, 0, 0, 'Sironj', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(708, NULL, 0, 0, 'Nandura', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(709, NULL, 0, 0, 'Shoranur', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(710, NULL, 0, 0, 'Nathdwara', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(711, NULL, 0, 0, 'Periyakulam', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(712, NULL, 0, 0, 'Sultanganj', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(713, NULL, 0, 0, 'Medak', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(714, NULL, 0, 0, 'Narayanpet', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(715, NULL, 0, 0, 'Raxaul Bazar', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(716, NULL, 0, 0, 'Rajauri', 'Jammu and Kashmir', 1, 0, '', '2020-02-11 13:48:15', NULL),
(717, NULL, 0, 0, 'Pernampattu', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(718, NULL, 0, 0, 'Nainital', 'Uttarakhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(719, NULL, 0, 0, 'Ramachandrapuram', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(720, NULL, 0, 0, 'Vaijapur', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(721, NULL, 0, 0, 'Nangal', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(722, NULL, 0, 0, 'Sidlaghatta', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(723, NULL, 0, 0, 'Punch', 'Jammu and Kashmir', 1, 0, '', '2020-02-11 13:48:15', NULL),
(724, NULL, 0, 0, 'Pandhurna', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(725, NULL, 0, 0, 'Wadgaon Road', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(726, NULL, 0, 0, 'Talcher', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(727, NULL, 0, 0, 'Varkala', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(728, NULL, 0, 0, 'Pilani', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(729, NULL, 0, 0, 'Nowgong', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(730, NULL, 0, 0, 'Naila Janjgir', 'Chhattisgarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(731, NULL, 0, 0, 'Mapusa', 'Goa', 1, 0, '', '2020-02-11 13:48:15', NULL),
(732, NULL, 0, 0, 'Vellakoil', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(733, NULL, 0, 0, 'Merta City', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(734, NULL, 0, 0, 'Sivaganga', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(735, NULL, 0, 0, 'Mandideep', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(736, NULL, 0, 0, 'Sailu', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(737, NULL, 0, 0, 'Vyara', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(738, NULL, 0, 0, 'Kovvur', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(739, NULL, 0, 0, 'Vadalur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(740, NULL, 0, 0, 'Nawabganj', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(741, NULL, 0, 0, 'Padra', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(742, NULL, 0, 0, 'Sainthia', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(743, NULL, 0, 0, 'Siana', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(744, NULL, 0, 0, 'Shahpur', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(745, NULL, 0, 0, 'Sojat', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(746, NULL, 0, 0, 'Noorpur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(747, NULL, 0, 0, 'Paravoor', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(748, NULL, 0, 0, 'Murtijapur', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(749, NULL, 0, 0, 'Ramnagar', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(750, NULL, 0, 0, 'Sundargarh', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(751, NULL, 0, 0, 'Taki', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(752, NULL, 0, 0, 'Saundatti-Yellamma', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(753, NULL, 0, 0, 'Pathanamthitta', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(754, NULL, 0, 0, 'Wadi', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(755, NULL, 0, 0, 'Rameshwaram', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(756, NULL, 0, 0, 'Tasgaon', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(757, NULL, 0, 0, 'Sikandra Rao', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(758, NULL, 0, 0, 'Sihora', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(759, NULL, 0, 0, 'Tiruvethipuram', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(760, NULL, 0, 0, 'Tiruvuru', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(761, NULL, 0, 0, 'Mehkar', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(762, NULL, 0, 0, 'Peringathur', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(763, NULL, 0, 0, 'Perambalur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(764, NULL, 0, 0, 'Manvi', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(765, NULL, 0, 0, 'Zunheboto', 'Nagaland', 1, 0, '', '2020-02-11 13:48:15', NULL),
(766, NULL, 0, 0, 'Mahnar Bazar', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(767, NULL, 0, 0, 'Attingal', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(768, NULL, 0, 0, 'Shahbad', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(769, NULL, 0, 0, 'Puranpur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(770, NULL, 0, 0, 'Nelamangala', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(771, NULL, 0, 0, 'Nakodar', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(772, NULL, 0, 0, 'Lunawada', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(773, NULL, 0, 0, 'Murshidabad', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(774, NULL, 0, 0, 'Mahe', 'Puducherry', 1, 0, '', '2020-02-11 13:48:15', NULL),
(775, NULL, 0, 0, 'Lanka', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(776, NULL, 0, 0, 'Rudauli', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(777, NULL, 0, 0, 'Tuensang', 'Nagaland', 1, 0, '', '2020-02-11 13:48:15', NULL),
(778, NULL, 0, 0, 'Lakshmeshwar', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(779, NULL, 0, 0, 'Zira', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(780, NULL, 0, 0, 'Yawal', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(781, NULL, 0, 0, 'Thana Bhawan', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(782, NULL, 0, 0, 'Ramdurg', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(783, NULL, 0, 0, 'Pulgaon', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(784, NULL, 0, 0, 'Sadasivpet', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(785, NULL, 0, 0, 'Nargund', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(786, NULL, 0, 0, 'Neem-Ka-Thana', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(787, NULL, 0, 0, 'Memari', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(788, NULL, 0, 0, 'Nilanga', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(789, NULL, 0, 0, 'Naharlagun', 'Arunachal Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(790, NULL, 0, 0, 'Pakaur', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(791, NULL, 0, 0, 'Wai', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(792, NULL, 0, 0, 'Tarikere', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(793, NULL, 0, 0, 'Malavalli', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(794, NULL, 0, 0, 'Raisen', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(795, NULL, 0, 0, 'Lahar', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(796, NULL, 0, 0, 'Uravakonda', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(797, NULL, 0, 0, 'Savanur', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(798, NULL, 0, 0, 'Sirohi', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(799, NULL, 0, 0, 'Udhampur', 'Jammu and Kashmir', 1, 0, '', '2020-02-11 13:48:15', NULL),
(800, NULL, 0, 0, 'Umarga', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(801, NULL, 0, 0, 'Pratapgarh', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(802, NULL, 0, 0, 'Lingsugur', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(803, NULL, 0, 0, 'Usilampatti', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(804, NULL, 0, 0, 'Palia Kalan', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(805, NULL, 0, 0, 'Wokha', 'Nagaland', 1, 0, '', '2020-02-11 13:48:15', NULL),
(806, NULL, 0, 0, 'Rajpipla', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(807, NULL, 0, 0, 'Vijayapura', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(808, NULL, 0, 0, 'Rawatbhata', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(809, NULL, 0, 0, 'Sangaria', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(810, NULL, 0, 0, 'Paithan', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(811, NULL, 0, 0, 'Rahuri', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(812, NULL, 0, 0, 'Patti', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(813, NULL, 0, 0, 'Zaidpur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(814, NULL, 0, 0, 'Lalsot', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(815, NULL, 0, 0, 'Maihar', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(816, NULL, 0, 0, 'Vedaranyam', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(817, NULL, 0, 0, 'Nawapur', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(818, NULL, 0, 0, 'Solan', 'Himachal Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(819, NULL, 0, 0, 'Vapi', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(820, NULL, 0, 0, 'Sanawad', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(821, NULL, 0, 0, 'Warisaliganj', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(822, NULL, 0, 0, 'Revelganj', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(823, NULL, 0, 0, 'Sabalgarh', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(824, NULL, 0, 0, 'Tuljapur', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(825, NULL, 0, 0, 'Simdega', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(826, NULL, 0, 0, 'Musabani', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(827, NULL, 0, 0, 'Kodungallur', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(828, NULL, 0, 0, 'Phulabani', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(829, NULL, 0, 0, 'Umreth', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(830, NULL, 0, 0, 'Narsipatnam', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(831, NULL, 0, 0, 'Nautanwa', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(832, NULL, 0, 0, 'Rajgir', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(833, NULL, 0, 0, 'Yellandu', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(834, NULL, 0, 0, 'Sathyamangalam', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(835, NULL, 0, 0, 'Pilibanga', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(836, NULL, 0, 0, 'Morshi', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(837, NULL, 0, 0, 'Pehowa', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(838, NULL, 0, 0, 'Sonepur', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(839, NULL, 0, 0, 'Pappinisseri', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(840, NULL, 0, 0, 'Zamania', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(841, NULL, 0, 0, 'Mihijam', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(842, NULL, 0, 0, 'Purna', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(843, NULL, 0, 0, 'Puliyankudi', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(844, NULL, 0, 0, 'Shikarpur, Bulandshahr', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(845, NULL, 0, 0, 'Umaria', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(846, NULL, 0, 0, 'Porsa', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(847, NULL, 0, 0, 'Naugawan Sadat', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(848, NULL, 0, 0, 'Fatehpur Sikri', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(849, NULL, 0, 0, 'Manuguru', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(850, NULL, 0, 0, 'Udaipur', 'Tripura', 1, 0, '', '2020-02-11 13:48:15', NULL),
(851, NULL, 0, 0, 'Pipar City', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(852, NULL, 0, 0, 'Pattamundai', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(853, NULL, 0, 0, 'Nanjikottai', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(854, NULL, 0, 0, 'Taranagar', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(855, NULL, 0, 0, 'Yerraguntla', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(856, NULL, 0, 0, 'Satana', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(857, NULL, 0, 0, 'Sherghati', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(858, NULL, 0, 0, 'Sankeshwara', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(859, NULL, 0, 0, 'Madikeri', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(860, NULL, 0, 0, 'Thuraiyur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(861, NULL, 0, 0, 'Sanand', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(862, NULL, 0, 0, 'Rajula', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(863, NULL, 0, 0, 'Kyathampalle', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(864, NULL, 0, 0, 'Shahabad, Rampur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(865, NULL, 0, 0, 'Tilda Newra', 'Chhattisgarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(866, NULL, 0, 0, 'Narsinghgarh', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(867, NULL, 0, 0, 'Chittur-Thathamangalam', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(868, NULL, 0, 0, 'Malaj Khand', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(869, NULL, 0, 0, 'Sarangpur', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(870, NULL, 0, 0, 'Robertsganj', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(871, NULL, 0, 0, 'Sirkali', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(872, NULL, 0, 0, 'Radhanpur', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(873, NULL, 0, 0, 'Tiruchendur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(874, NULL, 0, 0, 'Utraula', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(875, NULL, 0, 0, 'Patratu', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(876, NULL, 0, 0, 'Vijainagar, Ajmer', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(877, NULL, 0, 0, 'Periyasemur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(878, NULL, 0, 0, 'Pathri', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(879, NULL, 0, 0, 'Sadabad', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(880, NULL, 0, 0, 'Talikota', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(881, NULL, 0, 0, 'Sinnar', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(882, NULL, 0, 0, 'Mungeli', 'Chhattisgarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(883, NULL, 0, 0, 'Sedam', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(884, NULL, 0, 0, 'Shikaripur', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(885, NULL, 0, 0, 'Sumerpur', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(886, NULL, 0, 0, 'Sattur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(887, NULL, 0, 0, 'Sugauli', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(888, NULL, 0, 0, 'Lumding', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(889, NULL, 0, 0, 'Vandavasi', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(890, NULL, 0, 0, 'Titlagarh', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(891, NULL, 0, 0, 'Uchgaon', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(892, NULL, 0, 0, 'Mokokchung', 'Nagaland', 1, 0, '', '2020-02-11 13:48:15', NULL),
(893, NULL, 0, 0, 'Paschim Punropara', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(894, NULL, 0, 0, 'Sagwara', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(895, NULL, 0, 0, 'Ramganj Mandi', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(896, NULL, 0, 0, 'Tarakeswar', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(897, NULL, 0, 0, 'Mahalingapura', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(898, NULL, 0, 0, 'Dharmanagar', 'Tripura', 1, 0, '', '2020-02-11 13:48:15', NULL),
(899, NULL, 0, 0, 'Mahemdabad', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(900, NULL, 0, 0, 'Manendragarh', 'Chhattisgarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(901, NULL, 0, 0, 'Uran', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(902, NULL, 0, 0, 'Tharamangalam', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(903, NULL, 0, 0, 'Tirukkoyilur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(904, NULL, 0, 0, 'Pen', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(905, NULL, 0, 0, 'Makhdumpur', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(906, NULL, 0, 0, 'Maner', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(907, NULL, 0, 0, 'Oddanchatram', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(908, NULL, 0, 0, 'Palladam', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(909, NULL, 0, 0, 'Mundi', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(910, NULL, 0, 0, 'Nabarangapur', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(911, NULL, 0, 0, 'Mudalagi', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(912, NULL, 0, 0, 'Samalkha', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(913, NULL, 0, 0, 'Nepanagar', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(914, NULL, 0, 0, 'Karjat', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(915, NULL, 0, 0, 'Ranavav', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(916, NULL, 0, 0, 'Pedana', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(917, NULL, 0, 0, 'Pinjore', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(918, NULL, 0, 0, 'Lakheri', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(919, NULL, 0, 0, 'Pasan', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(920, NULL, 0, 0, 'Puttur', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(921, NULL, 0, 0, 'Vadakkuvalliyur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(922, NULL, 0, 0, 'Tirukalukundram', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(923, NULL, 0, 0, 'Mahidpur', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(924, NULL, 0, 0, 'Mussoorie', 'Uttarakhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(925, NULL, 0, 0, 'Muvattupuzha', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(926, NULL, 0, 0, 'Rasra', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(927, NULL, 0, 0, 'Udaipurwati', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(928, NULL, 0, 0, 'Manwath', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(929, NULL, 0, 0, 'Adoor', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(930, NULL, 0, 0, 'Uthamapalayam', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(931, NULL, 0, 0, 'Partur', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(932, NULL, 0, 0, 'Nahan', 'Himachal Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(933, NULL, 0, 0, 'Ladwa', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(934, NULL, 0, 0, 'Mankachar', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(935, NULL, 0, 0, 'Nongstoin', 'Meghalaya', 1, 0, '', '2020-02-11 13:48:15', NULL),
(936, NULL, 0, 0, 'Losal', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(937, NULL, 0, 0, 'Sri Madhopur', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(938, NULL, 0, 0, 'Ramngarh', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(939, NULL, 0, 0, 'Mavelikkara', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(940, NULL, 0, 0, 'Rawatsar', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(941, NULL, 0, 0, 'Rajakhera', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(942, NULL, 0, 0, 'Lar', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(943, NULL, 0, 0, 'Lal Gopalganj Nindaura', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(944, NULL, 0, 0, 'Muddebihal', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(945, NULL, 0, 0, 'Sirsaganj', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(946, NULL, 0, 0, 'Shahpura', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(947, NULL, 0, 0, 'Surandai', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(948, NULL, 0, 0, 'Sangole', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(949, NULL, 0, 0, 'Pavagada', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(950, NULL, 0, 0, 'Tharad', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(951, NULL, 0, 0, 'Mansa', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(952, NULL, 0, 0, 'Umbergaon', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(953, NULL, 0, 0, 'Mavoor', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(954, NULL, 0, 0, 'Nalbari', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(955, NULL, 0, 0, 'Talaja', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(956, NULL, 0, 0, 'Malur', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(957, NULL, 0, 0, 'Mangrulpir', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(958, NULL, 0, 0, 'Soro', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(959, NULL, 0, 0, 'Shahpura', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(960, NULL, 0, 0, 'Vadnagar', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(961, NULL, 0, 0, 'Raisinghnagar', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(962, NULL, 0, 0, 'Sindhagi', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(963, NULL, 0, 0, 'Sanduru', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(964, NULL, 0, 0, 'Sohna', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(965, NULL, 0, 0, 'Manavadar', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(966, NULL, 0, 0, 'Pihani', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(967, NULL, 0, 0, 'Safidon', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(968, NULL, 0, 0, 'Risod', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(969, NULL, 0, 0, 'Rosera', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(970, NULL, 0, 0, 'Sankari', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(971, NULL, 0, 0, 'Malpura', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(972, NULL, 0, 0, 'Sonamukhi', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(973, NULL, 0, 0, 'Shamsabad, Agra', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(974, NULL, 0, 0, 'Nokha', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(975, NULL, 0, 0, 'PandUrban Agglomeration', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(976, NULL, 0, 0, 'Mainaguri', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(977, NULL, 0, 0, 'Afzalpur', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(978, NULL, 0, 0, 'Shirur', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(979, NULL, 0, 0, 'Salaya', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(980, NULL, 0, 0, 'Shenkottai', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(981, NULL, 0, 0, 'Pratapgarh', 'Tripura', 1, 0, '', '2020-02-11 13:48:15', NULL),
(982, NULL, 0, 0, 'Vadipatti', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(983, NULL, 0, 0, 'Nagarkurnool', 'Telangana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(984, NULL, 0, 0, 'Savner', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(985, NULL, 0, 0, 'Sasvad', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(986, NULL, 0, 0, 'Rudrapur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(987, NULL, 0, 0, 'Soron', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(988, NULL, 0, 0, 'Sholingur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(989, NULL, 0, 0, 'Pandharkaoda', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(990, NULL, 0, 0, 'Perumbavoor', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(991, NULL, 0, 0, 'Maddur', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(992, NULL, 0, 0, 'Nadbai', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(993, NULL, 0, 0, 'Talode', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(994, NULL, 0, 0, 'Shrigonda', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(995, NULL, 0, 0, 'Madhugiri', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(996, NULL, 0, 0, 'Tekkalakote', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(997, NULL, 0, 0, 'Seoni-Malwa', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(998, NULL, 0, 0, 'Shirdi', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(999, NULL, 0, 0, 'SUrban Agglomerationr', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1000, NULL, 0, 0, 'Terdal', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1001, NULL, 0, 0, 'Raver', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1002, NULL, 0, 0, 'Tirupathur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1003, NULL, 0, 0, 'Taraori', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1004, NULL, 0, 0, 'Mukhed', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1005, NULL, 0, 0, 'Manachanallur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1006, NULL, 0, 0, 'Rehli', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1007, NULL, 0, 0, 'Sanchore', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1008, NULL, 0, 0, 'Rajura', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1009, NULL, 0, 0, 'Piro', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1010, NULL, 0, 0, 'Mudabidri', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1011, NULL, 0, 0, 'Vadgaon Kasba', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1012, NULL, 0, 0, 'Nagar', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1013, NULL, 0, 0, 'Vijapur', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1014, NULL, 0, 0, 'Viswanatham', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1015, NULL, 0, 0, 'Polur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1016, NULL, 0, 0, 'Panagudi', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1017, NULL, 0, 0, 'Manawar', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1018, NULL, 0, 0, 'Tehri', 'Uttarakhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1019, NULL, 0, 0, 'Samdhan', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1020, NULL, 0, 0, 'Pardi', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1021, NULL, 0, 0, 'Rahatgarh', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1022, NULL, 0, 0, 'Panagar', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1023, NULL, 0, 0, 'Uthiramerur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1024, NULL, 0, 0, 'Tirora', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1025, NULL, 0, 0, 'Rangia', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1026, NULL, 0, 0, 'Sahjanwa', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1027, NULL, 0, 0, 'Wara Seoni', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1028, NULL, 0, 0, 'Magadi', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1029, NULL, 0, 0, 'Rajgarh (Alwar)', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1030, NULL, 0, 0, 'Rafiganj', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1031, NULL, 0, 0, 'Tarana', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1032, NULL, 0, 0, 'Rampur Maniharan', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1033, NULL, 0, 0, 'Sheoganj', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1034, NULL, 0, 0, 'Raikot', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1035, NULL, 0, 0, 'Pauri', 'Uttarakhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1036, NULL, 0, 0, 'Sumerpur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1037, NULL, 0, 0, 'Navalgund', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1038, NULL, 0, 0, 'Shahganj', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1039, NULL, 0, 0, 'Marhaura', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1040, NULL, 0, 0, 'Tulsipur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1041, NULL, 0, 0, 'Sadri', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1042, NULL, 0, 0, 'Thiruthuraipoondi', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1043, NULL, 0, 0, 'Shiggaon', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1044, NULL, 0, 0, 'Pallapatti', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1045, NULL, 0, 0, 'Mahendragarh', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1046, NULL, 0, 0, 'Sausar', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1047, NULL, 0, 0, 'Ponneri', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1048, NULL, 0, 0, 'Mahad', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1049, NULL, 0, 0, 'Lohardaga', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1050, NULL, 0, 0, 'Tirwaganj', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1051, NULL, 0, 0, 'Margherita', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1052, NULL, 0, 0, 'Sundarnagar', 'Himachal Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1053, NULL, 0, 0, 'Rajgarh', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1054, NULL, 0, 0, 'Mangaldoi', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1055, NULL, 0, 0, 'Renigunta', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1056, NULL, 0, 0, 'Longowal', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1057, NULL, 0, 0, 'Ratia', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1058, NULL, 0, 0, 'Lalgudi', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1059, NULL, 0, 0, 'Shrirangapattana', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1060, NULL, 0, 0, 'Niwari', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1061, NULL, 0, 0, 'Natham', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1062, NULL, 0, 0, 'Unnamalaikadai', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1063, NULL, 0, 0, 'PurqUrban Agglomerationzi', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1064, NULL, 0, 0, 'Shamsabad, Farrukhabad', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1065, NULL, 0, 0, 'Mirganj', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1066, NULL, 0, 0, 'Todaraisingh', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1067, NULL, 0, 0, 'Warhapur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1068, NULL, 0, 0, 'Rajam', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1069, NULL, 0, 0, 'Urmar Tanda', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1070, NULL, 0, 0, 'Lonar', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1071, NULL, 0, 0, 'Powayan', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1072, NULL, 0, 0, 'P.N.Patti', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1073, NULL, 0, 0, 'Palampur', 'Himachal Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1074, NULL, 0, 0, 'Srisailam Project (Right Flank Colony) Township', 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1075, NULL, 0, 0, 'Sindagi', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1076, NULL, 0, 0, 'Sandi', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1077, NULL, 0, 0, 'Vaikom', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1078, NULL, 0, 0, 'Malda', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1079, NULL, 0, 0, 'Tharangambadi', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1080, NULL, 0, 0, 'Sakaleshapura', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1081, NULL, 0, 0, 'Lalganj', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1082, NULL, 0, 0, 'Malkangiri', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1083, NULL, 0, 0, 'Rapar', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1084, NULL, 0, 0, 'Mauganj', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1085, NULL, 0, 0, 'Todabhim', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1086, NULL, 0, 0, 'Srinivaspur', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1087, NULL, 0, 0, 'Murliganj', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1088, NULL, 0, 0, 'Reengus', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1089, NULL, 0, 0, 'Sawantwadi', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1090, NULL, 0, 0, 'Tittakudi', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1091, NULL, 0, 0, 'Lilong', 'Manipur', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1092, NULL, 0, 0, 'Rajaldesar', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1093, NULL, 0, 0, 'Pathardi', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1094, NULL, 0, 0, 'Achhnera', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1095, NULL, 0, 0, 'Pacode', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1096, NULL, 0, 0, 'Naraura', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1097, NULL, 0, 0, 'Nakur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1098, NULL, 0, 0, 'Palai', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1099, NULL, 0, 0, 'Morinda, India', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1100, NULL, 0, 0, 'Manasa', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1101, NULL, 0, 0, 'Nainpur', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1102, NULL, 0, 0, 'Sahaspur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1103, NULL, 0, 0, 'Pauni', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1104, NULL, 0, 0, 'Prithvipur', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1105, NULL, 0, 0, 'Ramtek', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1106, NULL, 0, 0, 'Silapathar', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1107, NULL, 0, 0, 'Songadh', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1108, NULL, 0, 0, 'Safipur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1109, NULL, 0, 0, 'Sohagpur', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1110, NULL, 0, 0, 'Mul', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1111, NULL, 0, 0, 'Sadulshahar', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1112, NULL, 0, 0, 'Phillaur', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1113, NULL, 0, 0, 'Sambhar', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1114, NULL, 0, 0, 'Prantij', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1115, NULL, 0, 0, 'Nagla', 'Uttarakhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1116, NULL, 0, 0, 'Pattran', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1117, NULL, 0, 0, 'Mount Abu', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1118, NULL, 0, 0, 'Reoti', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1119, NULL, 0, 0, 'Tenu dam-cum-Kathhara', 'Jharkhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1120, NULL, 0, 0, 'Panchla', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1121, NULL, 0, 0, 'Sitarganj', 'Uttarakhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1122, NULL, 0, 0, 'Pasighat', 'Arunachal Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1123, NULL, 0, 0, 'Motipur', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1124, NULL, 0, 0, 'O\' Valley', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1125, NULL, 0, 0, 'Raghunathpur', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1126, NULL, 0, 0, 'Suriyampalayam', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1127, NULL, 0, 0, 'Qadian', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1128, NULL, 0, 0, 'Rairangpur', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1129, NULL, 0, 0, 'Silvassa', 'Dadra and Nagar Haveli', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1130, NULL, 0, 0, 'Nowrozabad (Khodargama)', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1131, NULL, 0, 0, 'Mangrol', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1132, NULL, 0, 0, 'Soyagaon', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1133, NULL, 0, 0, 'Sujanpur', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1134, NULL, 0, 0, 'Manihari', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1135, NULL, 0, 0, 'Sikanderpur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1136, NULL, 0, 0, 'Mangalvedhe', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1137, NULL, 0, 0, 'Phulera', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1138, NULL, 0, 0, 'Ron', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1139, NULL, 0, 0, 'Sholavandan', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1140, NULL, 0, 0, 'Saidpur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1141, NULL, 0, 0, 'Shamgarh', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1142, NULL, 0, 0, 'Thammampatti', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1143, NULL, 0, 0, 'Maharajpur', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1144, NULL, 0, 0, 'Multai', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1145, NULL, 0, 0, 'Mukerian', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1146, NULL, 0, 0, 'Sirsi', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1147, NULL, 0, 0, 'Purwa', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1148, NULL, 0, 0, 'Sheohar', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1149, NULL, 0, 0, 'Namagiripettai', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1150, NULL, 0, 0, 'Parasi', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1151, NULL, 0, 0, 'Lathi', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1152, NULL, 0, 0, 'Lalganj', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1153, NULL, 0, 0, 'Narkhed', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1154, NULL, 0, 0, 'Mathabhanga', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1155, NULL, 0, 0, 'Shendurjana', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1156, NULL, 0, 0, 'Peravurani', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1157, NULL, 0, 0, 'Mariani', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1158, NULL, 0, 0, 'Phulpur', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1159, NULL, 0, 0, 'Rania', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1160, NULL, 0, 0, 'Pali', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1161, NULL, 0, 0, 'Pachore', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1162, NULL, 0, 0, 'Parangipettai', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1163, NULL, 0, 0, 'Pudupattinam', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1164, NULL, 0, 0, 'Panniyannur', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1165, NULL, 0, 0, 'Maharajganj', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1166, NULL, 0, 0, 'Rau', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1167, NULL, 0, 0, 'Monoharpur', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1168, NULL, 0, 0, 'Mandawa', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1169, NULL, 0, 0, 'Marigaon', 'Assam', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1170, NULL, 0, 0, 'Pallikonda', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1171, NULL, 0, 0, 'Pindwara', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1172, NULL, 0, 0, 'Shishgarh', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1173, NULL, 0, 0, 'Patur', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1174, NULL, 0, 0, 'Mayang Imphal', 'Manipur', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1175, NULL, 0, 0, 'Mhowgaon', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1176, NULL, 0, 0, 'Guruvayoor', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1177, NULL, 0, 0, 'Mhaswad', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1178, NULL, 0, 0, 'Sahawar', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1179, NULL, 0, 0, 'Sivagiri', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1180, NULL, 0, 0, 'Mundargi', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1181, NULL, 0, 0, 'Punjaipugalur', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1182, NULL, 0, 0, 'Kailasahar', 'Tripura', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1183, NULL, 0, 0, 'Samthar', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1184, NULL, 0, 0, 'Sakti', 'Chhattisgarh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1185, NULL, 0, 0, 'Sadalagi', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1186, NULL, 0, 0, 'Silao', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1187, NULL, 0, 0, 'Mandalgarh', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1188, NULL, 0, 0, 'Loha', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1189, NULL, 0, 0, 'Pukhrayan', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1190, NULL, 0, 0, 'Padmanabhapuram', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1191, NULL, 0, 0, 'Belonia', 'Tripura', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1192, NULL, 0, 0, 'Saiha', 'Mizoram', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1193, NULL, 0, 0, 'Srirampore', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1194, NULL, 0, 0, 'Talwara', 'Punjab', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1195, NULL, 0, 0, 'Puthuppally', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1196, NULL, 0, 0, 'Khowai', 'Tripura', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1197, NULL, 0, 0, 'Vijaypur', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1198, NULL, 0, 0, 'Takhatgarh', 'Rajasthan', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1199, NULL, 0, 0, 'Thirupuvanam', 'Tamil Nadu', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1200, NULL, 0, 0, 'Adra', 'West Bengal', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1201, NULL, 0, 0, 'Piriyapatna', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1202, NULL, 0, 0, 'Obra', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1203, NULL, 0, 0, 'Adalaj', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1204, NULL, 0, 0, 'Nandgaon', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1205, NULL, 0, 0, 'Barh', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1206, NULL, 0, 0, 'Chhapra', 'Gujarat', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1207, NULL, 0, 0, 'Panamattom', 'Kerala', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1208, NULL, 0, 0, 'Niwai', 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1209, NULL, 0, 0, 'Bageshwar', 'Uttarakhand', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1210, NULL, 0, 0, 'Tarbha', 'Odisha', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1211, NULL, 0, 0, 'Adyar', 'Karnataka', 1, 0, '', '2020-02-11 13:48:15', NULL);
INSERT INTO `its_cities` (`id`, `org_id`, `country_id`, `state_id`, `city`, `state`, `status`, `is_deleted`, `ip_address`, `modified_date`, `created_at`) VALUES
(1212, NULL, 0, 0, 'Narsinghgarh', 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1213, NULL, 0, 0, 'Warud', 'Maharashtra', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1214, NULL, 0, 0, 'Asarganj', 'Bihar', 1, 0, '', '2020-02-11 13:48:15', NULL),
(1215, NULL, 0, 0, 'Sarsod', 'Haryana', 1, 0, '', '2020-02-11 13:48:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_company_product`
--

CREATE TABLE `its_company_product` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) NOT NULL,
  `product_name` varchar(256) DEFAULT NULL,
  `product_image` varchar(256) DEFAULT NULL,
  `product_heading` varchar(256) DEFAULT NULL,
  `product_description` text,
  `status` tinyint(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_company_product`
--

INSERT INTO `its_company_product` (`id`, `comp_id`, `product_name`, `product_image`, `product_heading`, `product_description`, `status`, `created_by`, `created_at`) VALUES
(1, 2, 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'screencapture-localhost-jiada-new-create-compan-website-1-2019-12-30-18_52_21.png', 'hhhhhhhhhhhhhhhhhhhhhhhhhh', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 1, 1, '2020-01-02 18:05:28'),
(2, 2, 'pppppppppppppp', 'screencapture-localhost-jiada-new-pcc-pcc-actionview-2-2019-12-26-18_45_48.png', 'ppppppppppppppp', 'pppppppppppppp', 1, 1, '2020-01-02 18:05:28'),
(5, 3, 'paatham', 'paatham.PNG', 'Paatham e-learning', 'paatham is E-learning Management System . Which have Multiple Feature  Like :- Inventory management System. Fee management System. Etc', 1, 1, '2020-01-03 10:37:10'),
(6, 4, 'ddddddddddddddddd', 'screencapture-localhost-jiada-new-create-compan-website-1-2019-12-30-18_52_21.png', 'dddddddddddddd', 'fgggggggggggggggggg', 1, 1, '2020-01-03 14:08:56'),
(7, 3, 'Ats', 'jpg.jpg', 'ATS(Application Tracking System)', 'ATS Is Application Tracking System Where You can Track Your Application Status. Like Pending, Interview schedule And Interview Notification Etc.', 1, 1, '2020-01-03 14:40:35');

-- --------------------------------------------------------

--
-- Table structure for table `its_company_services`
--

CREATE TABLE `its_company_services` (
  `id` int(11) NOT NULL,
  `comp_id` varchar(256) NOT NULL,
  `services_name` varchar(256) NOT NULL,
  `services_heading` text NOT NULL,
  `services_description` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_by` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_company_services`
--

INSERT INTO `its_company_services` (`id`, `comp_id`, `services_name`, `services_heading`, `services_description`, `status`, `created_by`, `created_at`) VALUES
(1, '2', 'sadaasas', 'sddddddddddddddd', 's', 1, '1', '2020-01-02 18:05:28'),
(2, '2', 'sssssssssssssssss', 'sssssssss', 's', 1, '1', '2020-01-02 18:05:28'),
(6, '3', 'IT Software', 'Software Development', 'XYZ Consulting is a new company that provides expertise in search marketing solutions for businesses worldwide, including website promotion, online advertising, and search engine optimization techniques to improve its clients\' positioning in search engines. We cater to the higher education market, including colleges, universities, and professional educational institutions.', 1, '1', '2020-01-03 10:38:06'),
(7, '3', 'Software Sale', 'IT Software Sales', 'we Are Sales Multiple Software . Like E-learning , School management, Free management, Aplication Tracking System, etc', 1, '1', '2020-01-03 10:38:06'),
(8, '4', 'hjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'gggdfffffffffffffffffffffffffffffffffff', 'ffffffffffffffffffffffffffffg\r\nfdddddddd\r\n\r\nfdg\r\ndfg\r\n\r\ndfg\r\ndfg\r\ndf\r\ng\r\ndfg\r\ndf\r\ng\r\ndfg\r\ndfg\r\ngf\r\nfdg\r\nf\r\n\r\nfg', 1, '1', '2020-01-03 14:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `its_company_types`
--

CREATE TABLE `its_company_types` (
  `id` int(11) NOT NULL,
  `company_type` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '1',
  `updated_by` int(11) NOT NULL DEFAULT '1',
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `its_company_types`
--

INSERT INTO `its_company_types` (`id`, `company_type`, `description`, `is_active`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'proprietorship', 'proprietorship', 1, 1, 1, NULL, '2019-12-23 13:58:33', '2019-12-23 13:58:33'),
(2, 'llp', 'LLP', 1, 1, 1, NULL, '2019-12-24 05:04:59', '2019-12-24 05:04:59'),
(3, 'ltd', 'LTD', 1, 1, 1, NULL, '2019-12-24 05:04:59', '2019-12-24 05:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `its_conversion`
--

CREATE TABLE `its_conversion` (
  `id` int(11) NOT NULL,
  `from_si_unit` varchar(200) DEFAULT NULL,
  `to_si_unit` varchar(200) DEFAULT NULL,
  `multiplication_value` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_conversion`
--

INSERT INTO `its_conversion` (`id`, `from_si_unit`, `to_si_unit`, `multiplication_value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'KG', 'GRAM', '1000', 1, '2020-02-18 09:59:24', '2020-02-18 09:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `its_convertions`
--

CREATE TABLE `its_convertions` (
  `convertions_id` int(11) NOT NULL,
  `from_si_unit` varchar(200) DEFAULT NULL,
  `to_si_unit` varchar(200) DEFAULT NULL,
  `multiplication_value` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_convertions`
--

INSERT INTO `its_convertions` (`convertions_id`, `from_si_unit`, `to_si_unit`, `multiplication_value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kg', 'Ton', '0.001', 1, '2020-02-10 10:46:00', '2020-02-10 10:46:00'),
(2, 'Ton', 'Kg', '1000', 1, '2020-02-10 10:46:27', '2020-02-10 10:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `its_countries`
--

CREATE TABLE `its_countries` (
  `id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `code` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `phone_code` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0' COMMENT '1 =''Delete''',
  `ip_address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_countries`
--

INSERT INTO `its_countries` (`id`, `org_id`, `code`, `country`, `phone_code`, `status`, `is_deleted`, `ip_address`, `modified_date`, `created_date`) VALUES
(1, NULL, '', 'India', 91, 1, 0, '::1', '2019-10-07 23:30:00', '2019-10-15 00:00:00'),
(2, NULL, '', 'UK', 22, 1, 0, '::1', '2019-10-14 23:30:00', '2019-10-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `its_customers`
--

CREATE TABLE `its_customers` (
  `id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `land_id` int(11) DEFAULT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `is_director` int(11) NOT NULL DEFAULT '0',
  `party_types` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `l_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_proprietor` int(1) NOT NULL DEFAULT '0',
  `location` text COLLATE utf8_unicode_ci,
  `location_types` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_uses` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `party_relationships` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_points` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `landline_no` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `occupation` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `svalue` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `svalue_percentage` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_type` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_type` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_address` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_city` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_state` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_country` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_pin` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_landmark` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_phone` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_email` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_address` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_city` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_state` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_country` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_pin` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_landmark` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_phone` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_reg_no` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_email` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `description` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `company_addrerss` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_customers`
--

INSERT INTO `its_customers` (`id`, `org_id`, `land_id`, `comp_id`, `is_director`, `party_types`, `f_name`, `l_name`, `is_proprietor`, `location`, `location_types`, `location_uses`, `party_relationships`, `contact_points`, `phone`, `landline_no`, `email`, `gender`, `occupation`, `svalue`, `svalue_percentage`, `contact_type`, `location_type`, `mailing_address`, `mailing_city`, `mailing_state`, `mailing_country`, `mailing_pin`, `mailing_landmark`, `mailing_phone`, `mailing_email`, `shiping_address`, `shiping_city`, `shiping_state`, `shiping_country`, `shiping_pin`, `shiping_landmark`, `shiping_phone`, `mobile`, `dob`, `company_reg_no`, `company`, `company_type`, `shiping_email`, `state_id`, `country_id`, `description`, `address`, `company_addrerss`, `created_at`, `updated_at`, `created_by`, `status`) VALUES
(1, 1, NULL, 1, 0, NULL, 'Sachin', 'Kumar', 0, 'This Share Holder 1 Address', NULL, NULL, NULL, NULL, NULL, NULL, 'sachin@gmail.com', NULL, 'web3', '25000', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3256565656', '28-12-2019', '7878', 'Its  LTD', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 1, NULL, 1, 0, NULL, 'Abhishek', 'kuamr', 0, 'This is Shareholder2 Address', NULL, NULL, NULL, NULL, NULL, NULL, 'abhishek@gmail.com', 'male', 'web4', '25000', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3586565656', '28-12-2019', '7878', 'Its  LTD', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, 1, NULL, 3, 1, NULL, 'Rohit', 'Singh', 1, 'This Is Customer 1 Addresss', NULL, NULL, NULL, NULL, NULL, 'Ajman', 'rohitSingh@gmail.com', 'male', 'pro desiganation', '25000', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8656565656', '10-12-2019', '2562', 'A&R Propertorship', 'proprietorship', NULL, NULL, NULL, NULL, 'This is Proprietorship user', 'This is Proprietorship User', NULL, '2020-01-09 00:00:00', NULL, 1),
(4, 1, NULL, 1, 1, NULL, 'Rohit', 'Kuamr', 0, 'This is Customer2 Address', NULL, NULL, NULL, NULL, NULL, NULL, 'rohit@gmail.com', NULL, 'web2', '2500', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8095656865', '28-12-2019', '7878', 'Its  LTD', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, 1, NULL, 3, 0, NULL, 'Rohit', 'Singh', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Ajman', 'rohitSingh@gmail.com', 'male', 'pro desiganation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8656565656', '10-12-2019', '2562', 'A&R Propertorship', 'proprietorship', NULL, NULL, NULL, NULL, 'This is Proprietorship user', 'This is Proprietorship User', NULL, '2019-12-24 00:00:00', NULL, 1),
(9, 1, NULL, 9, 0, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '78', 'Abhiskek Company', 'proprietorship', NULL, NULL, NULL, NULL, NULL, 'bhuiyadih\r\n1306', NULL, '2020-01-09 00:00:00', NULL, 1),
(10, 1, NULL, 5, 0, NULL, 'Rohit', 'Singh', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'jharkhand', 'amit@gmail.com', 'male', 'Web Dev', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8092181759', '08-01-2020', '111111', 'Rohit Enterprises', 'proprietorship', NULL, NULL, NULL, NULL, 'This is Test', 'bhuiyadih\r\n1306', NULL, '2020-01-08 00:00:00', NULL, 1),
(11, 1, NULL, 8, 0, NULL, 'amit', 'kumar', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'jharkhand', 'amit@gmail.com', 'male', 'rrrrrrrrrr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8092181759', '06-01-2020', 'its', 'its', 'proprietorship', NULL, NULL, NULL, NULL, 'dffffffffffffffffff', 'bhuiyadih\r\n1306', NULL, '2020-01-08 00:00:00', NULL, 1),
(12, 1, NULL, 6, 0, NULL, 'amit', 'kumar', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'jharkhand', 'amit@gmail.com', 'male', 'sssssssss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8092181759', '01-01-2020', 'its', 'its', 'proprietorship', NULL, NULL, NULL, NULL, NULL, 'bhuiyadih\r\n1306', NULL, '2020-01-08 00:00:00', NULL, 1),
(13, 1, NULL, 7, 0, NULL, 'amit', 'kumar', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'jharkhand', 'amit@gmail.com', 'male', 'ssssssssss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8092181759', '07-01-2020', 'its', 'its', 'proprietorship', NULL, NULL, NULL, NULL, 'ssssssssssss', 'bhuiyadih\r\n1306', NULL, '2020-01-08 00:00:00', NULL, 1),
(14, 1, NULL, 9, 0, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '78', 'Abhiskek Company', 'proprietorship', NULL, NULL, NULL, NULL, NULL, 'bhuiyadih\r\n1306', NULL, '2020-01-08 00:00:00', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_customer_company`
--

CREATE TABLE `its_customer_company` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `org_code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_email` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_description` text COLLATE utf8_unicode_ci,
  `company_portal_url` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `established_date` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_reg_no` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_no` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `land_line` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_person` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_logo` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `industry_id` int(11) DEFAULT NULL,
  `sub_industry_id` int(11) DEFAULT NULL,
  `turn_over` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_of_employees` int(11) DEFAULT NULL,
  `unit_size` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input_details_id` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input_materials_quanity` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input_materials_type` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `waste_materials_id` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `waste_materials_quanity` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wase_materials_type` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_type` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pf_no` bigint(11) DEFAULT NULL,
  `esic_no` bigint(11) DEFAULT NULL,
  `tax_no` bigint(11) DEFAULT NULL,
  `policy_no` bigint(11) DEFAULT NULL,
  `gratuity_no` bigint(11) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT '0' COMMENT '1 = ''Delete''',
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` timestamp NULL DEFAULT NULL,
  `login_status` int(11) DEFAULT '0' COMMENT '1=''Active'' ,0=''Inactive''',
  `status` int(11) DEFAULT '0' COMMENT '1=''Active'' , 0=''Inactive''',
  `ip_address` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_customer_company`
--

INSERT INTO `its_customer_company` (`id`, `cust_id`, `org_code`, `company`, `company_email`, `company_description`, `company_portal_url`, `established_date`, `company_reg_no`, `contact_no`, `mobile`, `land_line`, `contact_person`, `company_logo`, `email`, `address`, `industry_id`, `sub_industry_id`, `turn_over`, `number_of_employees`, `unit_size`, `input_details_id`, `input_materials_quanity`, `input_materials_type`, `waste_materials_id`, `waste_materials_quanity`, `wase_materials_type`, `website`, `city_id`, `state_id`, `country_id`, `zipcode`, `photo`, `company_type`, `pf_no`, `esic_no`, `tax_no`, `policy_no`, `gratuity_no`, `is_deleted`, `deleted_by`, `deleted_date`, `login_status`, `status`, `ip_address`, `created_by`, `modified_by`, `modified_date`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Its  LTD', NULL, NULL, 'http://jiada.baba.software/portal/itsltd', '2019-12-04', '7878', NULL, NULL, NULL, NULL, 'j2.jpg', NULL, 'This is test Company Address', 1, NULL, '50', 200, NULL, '1,1,', NULL, NULL, '1,', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ltd', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, 1, NULL, NULL, NULL, '2020-01-10 07:56:04', '2019-12-24 17:10:53', NULL, '2020-01-08 08:58:04'),
(3, NULL, NULL, 'A&R Propertorship', 'amit@gmail.com', 'Starbucks\' company profile has it all -- the company\'s mission, background story, products, store atmosphere, and even folklore regarding the name. Best of all, they somehow manage to pull off sounding both genuine and grandiose. I don\'t know many other coffee stores that could claim, \"our mission: to inspire and nurture the human spirit\". Starbucks\' company profile is a fantastic example of a store with a common household product -- coffee -- managing to stand out from the competition through their mission and values.', 'http://jiada.baba.software/portal/a&r', '2019-12-19', '2562', NULL, NULL, NULL, NULL, 'jida-logo.jpg', NULL, 'This is Proprietorship User', 2, NULL, '10', 75, NULL, ',', '', '', ',', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'proprietorship', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, 1, NULL, NULL, NULL, '2020-01-10 07:45:20', '2019-12-24 17:22:08', NULL, '2020-01-09 04:32:50'),
(4, NULL, NULL, 'Its Jsr', NULL, 'uyyyyyyyyyyyyyyyyyyyyyy', 'http://localhost/jiada_new/portal/itsjsr', '2020-01-02', '88888888888', NULL, NULL, NULL, NULL, 'j4.jpg', NULL, 'bhuiyadih\r\n1306', 1, NULL, '88888888', 888888888, NULL, ',', NULL, NULL, ',', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'proprietorship', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, 1, NULL, NULL, NULL, '2020-01-10 07:56:31', '2020-01-03 14:07:03', NULL, '2020-01-03 08:37:03'),
(5, NULL, NULL, 'Rohit Enterprises', NULL, NULL, NULL, '2020-01-07', '111111', NULL, NULL, NULL, NULL, 'j2.jpg', NULL, 'bhuiyadih\r\n1306', 1, NULL, '11111111', 1111111, NULL, '1,1,', NULL, NULL, '2,2,', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'proprietorship', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, 1, NULL, NULL, NULL, '2020-01-10 07:45:50', '2020-01-08 09:39:37', NULL, '2020-01-08 04:52:57'),
(6, NULL, NULL, 'its', NULL, NULL, NULL, '2020-01-08', 'its', NULL, NULL, NULL, NULL, 'j3.jpg', NULL, 'bhuiyadih\r\n1306', 1, NULL, '555555', 567, NULL, ',', NULL, NULL, ',', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'proprietorship', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, 1, NULL, NULL, NULL, '2020-01-10 07:46:19', '2020-01-08 10:03:31', NULL, '2020-01-08 05:32:31'),
(7, NULL, NULL, 'its', NULL, NULL, NULL, '2020-01-08', 'its', NULL, NULL, NULL, NULL, 'j4.jpg', NULL, 'bhuiyadih\r\n1306', 1, NULL, '5555555', 555, NULL, ',', NULL, NULL, ',', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'proprietorship', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, 1, NULL, NULL, NULL, '2020-01-10 07:46:53', '2020-01-08 10:04:18', NULL, '2020-01-08 05:33:06'),
(8, NULL, NULL, 'its', NULL, NULL, NULL, '2020-01-08', 'its', NULL, NULL, NULL, NULL, '', NULL, 'bhuiyadih\r\n1306', 1, NULL, '5555555', 555, NULL, ',', NULL, NULL, ',', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'proprietorship', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, 1, NULL, NULL, NULL, '2020-01-08 04:45:54', '2020-01-08 10:15:54', NULL, '2020-01-08 04:45:54'),
(9, NULL, NULL, 'Abhiskek Company', '', NULL, NULL, '2019-12-31', '78', NULL, NULL, NULL, NULL, 'Curl_used1.png', NULL, 'bhuiyadih\r\n1306', 1, NULL, '112', 12, NULL, '1,2,', '', '', '1,1,', ',', ',', NULL, NULL, NULL, NULL, NULL, NULL, 'proprietorship', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, 1, NULL, NULL, NULL, '2020-01-09 05:01:45', '2020-01-08 17:58:36', NULL, '2020-01-09 05:01:45'),
(10, NULL, NULL, 'raj PVT', 'raj@itscient.com', NULL, NULL, '2020-01-07', '78', NULL, NULL, NULL, NULL, 'download.png', NULL, 'bhuiyadih\r\n1306', 2, NULL, '12', 1212, NULL, '1,2,', '45,4', 'Hazard,Non-Hazard', '1,1,', '45454,444', 'Hazard,Hazard', NULL, NULL, NULL, NULL, NULL, NULL, 'proprietorship', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, 1, NULL, NULL, NULL, '2020-01-08 12:47:17', '2020-01-08 18:17:17', NULL, '2020-01-08 12:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `its_departments`
--

CREATE TABLE `its_departments` (
  `id` int(11) NOT NULL,
  `department_name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `pos_id` int(11) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_departments`
--

INSERT INTO `its_departments` (`id`, `department_name`, `description`, `pos_id`, `is_active`, `is_default`, `ip_address`, `created_by`, `deleted_by`, `deleted_date`, `created_at`, `updated_at`) VALUES
(3, 'Production', 'Production', 19, 1, NULL, NULL, NULL, NULL, NULL, '2020-02-10', NULL),
(4, 'Financial', 'Financial Dept', 21, 1, NULL, NULL, NULL, NULL, NULL, '2020-02-10', NULL),
(10, 'Administration', 'Administration Department', NULL, 1, NULL, NULL, NULL, NULL, NULL, '2020-02-10', NULL),
(11, 'Security', 'Security', NULL, 1, NULL, NULL, NULL, NULL, NULL, '2020-02-10', NULL),
(12, 'Quality', 'Quality Dept', NULL, 1, NULL, NULL, NULL, NULL, NULL, '2020-02-10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_entity_master`
--

CREATE TABLE `its_entity_master` (
  `id` int(11) NOT NULL,
  `entity_name` varchar(255) NOT NULL,
  `entity_description` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_entity_master`
--

INSERT INTO `its_entity_master` (`id`, `entity_name`, `entity_description`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Land', 'Land', 1, 1, 1, '2019-12-15 04:22:47', '2019-12-14 16:52:47'),
(5, 'Unit', 'Unit', 1, 1, 1, '2019-12-15 04:23:05', '2019-12-14 16:53:05'),
(9, 'Transfer', 'In We Need Land And Unit Name Also', 1, 1, 1, '2019-12-27 09:52:23', '2019-12-27 09:52:23');

-- --------------------------------------------------------

--
-- Table structure for table `its_fst`
--

CREATE TABLE `its_fst` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fst_code` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fst_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `deleted_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_fst`
--

INSERT INTO `its_fst` (`id`, `user_id`, `fst_code`, `fst_name`, `mobile`, `is_deleted`, `deleted_at`, `created_at`, `updated_at`, `status`) VALUES
(1, 24, 'jk02', 'Avinash', NULL, 1, '2019-11-12', '2019-11-10', NULL, NULL),
(2, 100, 'FST-50-1-A', 'Rajiv Gari', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(3, 101, 'FST-50-1-B', 'Chandra Mahato', NULL, 1, '2019-11-12', '2019-11-10', NULL, NULL),
(4, 102, 'FST-50-1-C', 'Gopal Kumar', NULL, 1, '2019-11-12', '2019-11-10', NULL, NULL),
(5, 103, 'FST-50-2-A', 'Dhiraj Kumar', NULL, 1, '2019-11-12', '2019-11-10', NULL, NULL),
(6, 104, 'FST-50-2-B', 'Kemandra Nath Mahato', NULL, 1, '2019-11-12', '2019-11-10', NULL, NULL),
(7, 105, 'FST-50-2-C', 'Lal Kishore Mahato', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(8, 106, 'FST-50-3-A', 'Amit Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(9, 107, 'FST-50-3-B', 'Abhay Kumar Himansu', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(10, 108, 'FST-50-3-C', 'Sabtosh Kumar', NULL, 1, '2019-11-12', '2019-11-10', NULL, NULL),
(11, 109, 'FST-51-1-A', 'Gopi Nath Dey', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(12, 110, 'FST-51-1-B', 'Sunil Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(13, 111, 'FST-51-1-C', 'Ashwani Kumar', NULL, 1, '2019-11-12', '2019-11-10', NULL, NULL),
(14, 112, 'FST-51-2-A', 'Manish Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(15, 113, 'FST-51-2-B', 'Jayram Prasad Sah', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(16, 114, 'FST-51-2-C', 'Shyam Sundar Prasad', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(17, 115, 'FST-51-3-A', 'Sudhanshu Sekhar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(18, 116, 'FST-51-3-B', 'ShantiRam Mahato', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(19, 117, 'FST-51-3-C', 'Manoj Kumar Gupta', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(20, 118, 'FST-57-1-A', 'Bhim Chandra Mahato', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(21, 120, 'FST-57-1-C', 'Madan Mohan Kerai', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(22, 121, 'FST-57-2-A', 'Kaushal Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(23, 122, 'FST-57-2-B', 'Suresh Prasad Varma', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(24, 123, 'FST-57-2-C', 'Anil Kr. Singh', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(25, 124, 'FST-57-3-A', 'Vimal Kr. Karwa', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(26, 125, 'FST-57-3-B', 'Rakesh Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(28, 119, 'FST-57-1-B', 'Ashwani Kr. Hembrom', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(29, 156, 'FST-57-3-C', 'Kalipad Mahato', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(30, 103, 'FST-50-2-A', 'Padmalochan Mahato', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(31, 102, 'FST-50-1-C', 'Anand Mandal', NULL, 1, '2019-11-12', '2019-11-10', NULL, NULL),
(32, 111, 'FST-51-1-C', 'Ashwani Kr. Mahato', NULL, 1, '2019-11-12', '2019-11-10', NULL, NULL),
(33, 108, 'FST-50-3-C', 'Santosh Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(34, 101, 'FST-50-1-B', 'SheoChandra Mahato', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(35, 104, 'FST-50-2-B', 'Shiv Charan Mahato', 9934102758, 0, NULL, '2019-11-12', NULL, NULL),
(36, 160, 'FST-51-1-C', 'Ashwani Kr. Mahato', 9431122464, 0, NULL, '2019-11-12', NULL, NULL),
(37, 162, 'FST-50-1-C', 'Anand Mandal', 99341860033, 1, '2019-11-12', '2019-11-12', NULL, NULL),
(38, 163, 'FST-50-1-C', 'Anand Mandal', 9934186033, 0, NULL, '2019-11-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_history_inv_item`
--

CREATE TABLE `its_history_inv_item` (
  `id` int(50) NOT NULL,
  `inv_item_id` int(50) DEFAULT NULL,
  `item_type` int(50) DEFAULT NULL,
  `quantity` int(50) DEFAULT NULL,
  `uom_id` int(50) DEFAULT NULL,
  `opening_quantity` int(50) DEFAULT NULL,
  `closing_quantity` int(50) DEFAULT NULL,
  `update_value` int(50) DEFAULT NULL,
  `table_id` int(11) DEFAULT NULL COMMENT '1:Inv_iem , 2:shipment_in , 3:shipment_out',
  `created_by` int(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `its_history_inv_item`
--

INSERT INTO `its_history_inv_item` (`id`, `inv_item_id`, `item_type`, `quantity`, `uom_id`, `opening_quantity`, `closing_quantity`, `update_value`, `table_id`, `created_by`, `created_date`) VALUES
(1, 7, 8, 200, 6, 200, 200, 0, 1, 1, '2020-02-17 07:12:17'),
(2, 7, 8, 150, 6, 200, 350, 150, 1, 1, '2020-02-17 07:12:57'),
(3, 7, 8, 140, 6, 350, 490, 140, 1, 1, '2020-02-17 07:13:21'),
(4, 8, 11, 300, 6, 300, 300, 0, 1, 1, '2020-02-17 07:32:41'),
(5, 9, 11, 123, 6, 123, 123, 0, 1, 1, '2020-02-17 07:33:22'),
(6, 10, 12, 109, 6, 109, 109, 0, 1, 1, '2020-02-17 07:34:00'),
(7, 11, 12, 350, 6, 350, 350, 0, 1, 1, '2020-02-17 07:34:38'),
(10, 8, 11, 30, 6, 300, 330, 30, 2, 1, '2020-02-17 09:00:28'),
(11, 7, 8, 40, 6, 490, 530, 40, 2, 1, '2020-02-17 09:00:28'),
(12, 7, 12, 5545, 4, 530, 5545, 5545, 1, 1, '2020-02-18 09:23:45'),
(13, 10, 13, 3, 4, 3, 3, 0, 1, 1, '2020-02-18 09:24:52'),
(14, 10, 9, 3, 4, 3, 3, 3, 1, 1, '2020-02-18 10:18:44'),
(15, 10, 9, 100, NULL, 3, 103, 100, 2, 1, '2020-02-18 10:20:33'),
(16, 8, 13, 1000, 4, 330, 1000, 1000, 1, 1, '2020-02-18 11:12:55'),
(17, 8, 9, 1000, 4, 1000, 1000, 1000, 1, 1, '2020-02-18 11:13:54');

-- --------------------------------------------------------

--
-- Table structure for table `its_history_shipment`
--

CREATE TABLE `its_history_shipment` (
  `id` int(11) NOT NULL,
  `shipment_id` int(11) DEFAULT NULL,
  `created_by` date NOT NULL,
  `create_date` date NOT NULL,
  `shipment_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `its_industries`
--

CREATE TABLE `its_industries` (
  `id` int(11) NOT NULL,
  `industires_name` varchar(255) NOT NULL,
  `industires_description` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_industries`
--

INSERT INTO `its_industries` (`id`, `industires_name`, `industires_description`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'testing', 'this Is Test', 1, 1, 1, '2019-12-14 15:20:28', '2019-12-14 15:20:28'),
(2, 'Steel', 'Steel Industry', 1, 1, 1, '2019-12-15 05:40:42', '2019-12-14 18:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `its_input_details`
--

CREATE TABLE `its_input_details` (
  `id` int(11) NOT NULL,
  `input_details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `its_input_details`
--

INSERT INTO `its_input_details` (`id`, `input_details`) VALUES
(1, 'gbgf'),
(2, 'fd');

-- --------------------------------------------------------

--
-- Table structure for table `its_inventory_location`
--

CREATE TABLE `its_inventory_location` (
  `id` int(11) NOT NULL,
  `location_id` varchar(100) DEFAULT NULL,
  `location_name` varchar(255) DEFAULT NULL,
  `location_description` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_inventory_location`
--

INSERT INTO `its_inventory_location` (`id`, `location_id`, `location_name`, `location_description`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '100', 'Production Unit', 'it is used for production', 1, NULL, NULL, '2020-02-08 07:21:28', '2020-02-08 07:21:28'),
(2, '101', 'Machine Area', 'Machine Area', 1, NULL, NULL, '2020-02-08 07:25:08', '2020-02-08 07:25:08'),
(3, '102', 'Gamharia Area', 'Area', 1, NULL, NULL, '2020-02-08 07:42:39', '2020-02-08 07:42:39'),
(4, '333', 'Sakchi Area', 'Sakchi Area', 1, NULL, NULL, '2020-02-14 08:40:47', '2020-02-14 08:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `its_inv_item`
--

CREATE TABLE `its_inv_item` (
  `id` int(11) NOT NULL,
  `item_category_id` int(50) DEFAULT NULL,
  `uom_id` int(50) DEFAULT NULL,
  `inv_location_id` int(50) DEFAULT NULL,
  `batch_no` varchar(256) DEFAULT NULL,
  `item_name` varchar(250) DEFAULT NULL,
  `item_code` varchar(250) DEFAULT NULL,
  `quantity` varchar(500) DEFAULT NULL,
  `seralized` varchar(25) DEFAULT NULL,
  `serial_no` varchar(250) DEFAULT NULL,
  `description` text,
  `leasable` varchar(50) DEFAULT NULL,
  `created_by` int(50) NOT NULL,
  `modified_by` int(50) DEFAULT NULL,
  `created_date` date NOT NULL,
  `modified_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `its_inv_item`
--

INSERT INTO `its_inv_item` (`id`, `item_category_id`, `uom_id`, `inv_location_id`, `batch_no`, `item_name`, `item_code`, `quantity`, `seralized`, `serial_no`, `description`, `leasable`, `created_by`, `modified_by`, `created_date`, `modified_date`) VALUES
(1, 10, 4, 1, NULL, '3', 'SC124', '1034', '0', NULL, 'Sales department', '0', 1, 1, '2020-02-08', '2020-02-15'),
(2, 11, 4, 3, NULL, '3', 'SS123', '100', '1', '5555555555555555', NULL, '0', 1, 1, '2020-02-08', '2020-02-15'),
(7, 12, 4, 1, NULL, '1', 'TC321', '5545', '1', '5555555555555555', NULL, '0', 41, 1, '2020-02-10', '2020-02-18'),
(8, 9, 4, 1, 'BT123', '1', '001245', '1000', '1', 'SL123', NULL, '0', 1, 1, '2020-02-10', '2020-02-18'),
(10, 9, 4, 2, 'BT127', '10', 'SC124', '103', '1', 'si1234', NULL, '1', 1, 1, '2020-02-18', '2020-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `its_item`
--

CREATE TABLE `its_item` (
  `id` int(11) NOT NULL,
  `items_name` varchar(250) NOT NULL,
  `status` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `its_item`
--

INSERT INTO `its_item` (`id`, `items_name`, `status`, `created_at`, `updated_at`) VALUES
(1, '110 X 5.80', 1, '2020-02-12 18:30:00', '2020-02-12 18:30:00'),
(3, '120 X 3.05', 1, '2020-02-13 07:50:42', '2020-02-13 07:50:42'),
(4, '1050 X 2.00', 1, '2020-02-17 06:57:38', '2020-02-17 06:57:38'),
(5, '1065 X 4.60', 1, '2020-02-17 06:58:06', '2020-02-17 06:58:06'),
(6, '1090 X 4.40', 1, '2020-02-17 06:58:28', '2020-02-17 06:58:28'),
(7, '1100 X 2.75', 1, '2020-02-17 06:58:52', '2020-02-17 06:58:52'),
(8, '1115 X 3.50', 1, '2020-02-17 06:59:11', '2020-02-17 06:59:11'),
(9, '1130 X 2.50', 1, '2020-02-17 06:59:33', '2020-02-17 06:59:33'),
(10, '1130 X 2.05', 1, '2020-02-17 06:59:56', '2020-02-17 06:59:56'),
(11, '1170 X 2.50', 1, '2020-02-17 07:00:23', '2020-02-17 07:00:23'),
(12, '1200 X 2.30', 1, '2020-02-17 07:00:43', '2020-02-17 07:00:43'),
(13, '1200 X 2.50', 1, '2020-02-17 07:01:01', '2020-02-17 07:01:01'),
(14, '1220 X 2.80', 1, '2020-02-17 07:01:20', '2020-02-17 07:01:20'),
(15, '1225 X 2.70', 1, '2020-02-17 07:01:36', '2020-02-17 07:01:36'),
(16, '1240 X 2.50', 1, '2020-02-17 07:01:50', '2020-02-17 07:01:50'),
(17, '1250 X 2.50', 1, '2020-02-17 07:02:03', '2020-02-17 07:02:03'),
(18, '1250 X 2.00', 1, '2020-02-17 07:02:20', '2020-02-17 07:02:20'),
(19, '1275 X 2.80', 1, '2020-02-17 07:02:39', '2020-02-17 07:02:39'),
(20, '1320 X 2.50', 1, '2020-02-17 07:02:52', '2020-02-17 07:02:52'),
(21, '1360 X 2.75', 1, '2020-02-17 07:03:12', '2020-02-17 07:03:12');

-- --------------------------------------------------------

--
-- Table structure for table `its_lands`
--

CREATE TABLE `its_lands` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `area` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sector` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `block` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `land_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `plot_no` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `plot_size` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uom` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pincode` bigint(20) DEFAULT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` text COLLATE utf8_unicode_ci,
  `address2` text COLLATE utf8_unicode_ci,
  `latitute` text COLLATE utf8_unicode_ci,
  `longitute` text COLLATE utf8_unicode_ci,
  `documents` text COLLATE utf8_unicode_ci,
  `is_register` int(11) NOT NULL DEFAULT '0',
  `is_transfer` int(11) NOT NULL DEFAULT '0',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_lands`
--

INSERT INTO `its_lands` (`id`, `cust_id`, `area`, `sector`, `block`, `land_name`, `plot_no`, `plot_size`, `uom`, `city`, `state`, `pincode`, `country`, `address1`, `address2`, `latitute`, `longitute`, `documents`, `is_register`, `is_transfer`, `created_at`, `updated_at`, `status`) VALUES
(1, NULL, 'Jamsedpur', 'a block', 'test land', 'NS-Land', 'NS-65', '2000', 'sq.ft', 'Jamshedpur', 'Jharkhand', 831009, 'india', 'This is test Land', NULL, '12', '12', '1577957023.png', 1, 0, '2019-12-24', '2020-01-02', 1),
(2, NULL, 'Noida', 'Aditiyapur', 'test land', 'United Arab Emirates', '78', '2', 'acre', 'Dhanbad', 'Jharkhand', 831225, 'india', 'dfsdf', NULL, NULL, NULL, NULL, 0, 0, '2019-12-24', NULL, 0),
(3, NULL, 'Jamsedpur', 'a block', 'test land', 'India', '14', '12', 'sq.inch', 'Ranchi', 'Jharkhand', 201301, 'india', 'Noida sec -62 , 201301', NULL, '1', '2', NULL, 0, 0, '2020-02-07', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_leasedata`
--

CREATE TABLE `its_leasedata` (
  `id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `land_id` int(11) DEFAULT NULL,
  `cust_id` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trans_cust_id` int(11) DEFAULT NULL,
  `application_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `application_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `allotment_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `allotment_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `registration_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `registration_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `possession_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ssi_reg_no` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dakhal_kabja` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `based_rent` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insurance` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maintanance` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `additional_charge` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `net_payable` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `net_pay` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lease_duration` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lease_time` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transfer_amount` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `land_price` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `end_date` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_transfer` int(11) NOT NULL DEFAULT '0',
  `transfer_date` date DEFAULT NULL,
  `pcc_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_cancelled` int(11) DEFAULT '0',
  `created_at` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_pcc` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_leasedata`
--

INSERT INTO `its_leasedata` (`id`, `org_id`, `land_id`, `cust_id`, `trans_cust_id`, `application_no`, `application_date`, `allotment_no`, `allotment_date`, `registration_no`, `registration_date`, `possession_date`, `ssi_reg_no`, `dakhal_kabja`, `based_rent`, `tax`, `insurance`, `maintanance`, `additional_charge`, `net_payable`, `net_pay`, `lease_duration`, `lease_time`, `transfer_amount`, `land_price`, `start_date`, `end_date`, `is_transfer`, `transfer_date`, `pcc_date`, `is_cancelled`, `created_at`, `updated_at`, `is_pcc`, `status`) VALUES
(1, 1, 1, '1', NULL, '1111111333', '24-12-2019', '111111113', '24-12-2019', '11111133', '333', '24-12-2019', '11111133', NULL, '11113', '1113', '11113', '11113', '1113', 'yearly', '25563', NULL, '13', NULL, NULL, '24-12-2019', NULL, 0, NULL, NULL, 0, '2019-12-24', '2019-12-24 17:29:19', 0, 0),
(2, 1, 1, '3', NULL, '22222', '18-12-2019', '22222', '06-12-2019', '22222', NULL, '24-12-2019', '11111133', NULL, '2', '2', '2', '2', '2', 'yearly', '10', NULL, '2', '222', '222', '24-12-2019', NULL, 1, '2019-12-24', '2019-12-13', 0, '2019-12-24', NULL, 0, 0),
(3, 1, 1, '2', NULL, '33333', '24-12-2019', '3333333', '24-12-2019', '3333333', NULL, '24-12-2019', '11111133', NULL, '44', '44', '44', '44', '44', 'yearly', '220', NULL, '4', '4444444444', '444444', '24-12-2019', NULL, 1, '2019-12-24', '2019-12-13', 0, '2019-12-24', NULL, 0, 0),
(4, 1, 1, '3', NULL, '88888', '10-12-2019', '888888', '12-12-2019', '8888', NULL, '24-12-2019', '11111133', NULL, '888', '88', '88', '88', '88', 'yearly', '1240', NULL, '8', '888', '88', '24-12-2019', NULL, 1, '2019-12-24', '2019-12-23', 0, '2019-12-24', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_lease_invoice`
--

CREATE TABLE `its_lease_invoice` (
  `id` int(11) NOT NULL,
  `lease_data_id` int(11) NOT NULL,
  `org_id` varchar(256) NOT NULL,
  `land_id` int(11) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `trans_cust_id` int(11) DEFAULT NULL,
  `based_rent` int(11) DEFAULT NULL,
  `insurance` int(11) DEFAULT NULL,
  `maintanance` int(11) DEFAULT NULL,
  `additional_charge` int(11) DEFAULT NULL,
  `net_payable` varchar(256) DEFAULT NULL,
  `tax` int(11) DEFAULT NULL,
  `net_pay` int(11) DEFAULT NULL,
  `lease_time` varchar(256) DEFAULT NULL,
  `lease_duration` varchar(256) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_lease_invoice`
--

INSERT INTO `its_lease_invoice` (`id`, `lease_data_id`, `org_id`, `land_id`, `cust_id`, `trans_cust_id`, `based_rent`, `insurance`, `maintanance`, `additional_charge`, `net_payable`, `tax`, `net_pay`, `lease_time`, `lease_duration`, `start_date`, `created_at`, `status`) VALUES
(2, 1, '1', 1, NULL, NULL, 1111, 1111, 1111, 111, 'yearly', 111, 3555, '1', NULL, '2019-12-24', '2019-12-24', 1),
(3, 2, '1', 1, NULL, NULL, 2, 2, 2, 2, NULL, 2, 10, '2', NULL, '2019-12-24', '2019-12-24', 1),
(4, 3, '1', 1, NULL, NULL, 44, 44, 44, 44, NULL, 44, 220, '4', NULL, '2019-12-24', '2019-12-24', 1),
(5, 4, '1', 1, NULL, NULL, 888, 88, 88, 88, NULL, 88, 1240, '8', NULL, '2019-12-24', '2019-12-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_locationusers`
--

CREATE TABLE `its_locationusers` (
  `id` int(11) NOT NULL,
  `users_role` int(11) DEFAULT NULL,
  `users_type` int(11) DEFAULT NULL COMMENT '''1'' Employee',
  `parent_id` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `username` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` bigint(111) DEFAULT NULL,
  `address` mediumtext COLLATE utf8_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token_expire` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '''0'' Inactive , ''1'' Active',
  `user_image` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_deleted` int(11) DEFAULT '0' COMMENT '''1'' =>delete',
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `ip_address` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longitude` text COLLATE utf8_unicode_ci,
  `latitude` text COLLATE utf8_unicode_ci,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_date` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_locationusers`
--

INSERT INTO `its_locationusers` (`id`, `users_role`, `users_type`, `parent_id`, `emp_id`, `username`, `name`, `password`, `email`, `phone`, `address`, `email_verified_at`, `remember_token`, `token_expire`, `status`, `user_image`, `is_deleted`, `deleted_by`, `deleted_at`, `ip_address`, `longitude`, `latitude`, `modified_date`, `created_at`, `updated_at`, `created_date`, `last_login`) VALUES
(1, 1, 0, 0, 0, 'admin', 'Shri Anjaneyulu Dodde', '$2a$08$TnLUue010iZQcUVL.b0bPeCaFvVqa221s0MmNopcnzeIg4q4jjxQa', 'amitrajput270@gmail.com', 7409969352, 'Noida 63', NULL, 'eOCqNgRDnPl4SnByI4FZQhWtEpTNUSuCPJBE91IJHunuiE6LmjKQ8InbmVlT', NULL, 0, 'dc.jpg', 0, 0, NULL, '', NULL, NULL, '2019-12-09 12:45:11', '2019-06-28 14:27:00', '2019-12-10 00:15:11', NULL, NULL),
(100, 3, NULL, NULL, NULL, 'Rajiv(RG)', 'Rajiv Gari', '$2y$10$A3tKxV8dptxuS9wC/W8C5eBl1QMgI4aXQUe8nKpfofI2sq2ONP9f6', NULL, 7091775406, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 09:42:35', '2019-11-11 13:50:53', '2019-11-11 08:20:56', NULL, NULL),
(101, 3, NULL, NULL, NULL, 'SCM', 'Sheo Chandra Mahato', '$2y$10$aEj2nCI.6qpjPZJv.HahLevJEDPpibRBOOwQ0j79RySOr4.XvENGK', NULL, 7903689326, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-11-12', NULL, NULL, NULL, '2019-11-12 12:08:59', '2019-11-11 13:52:03', '2019-11-12 17:38:58', NULL, NULL),
(102, 3, NULL, NULL, NULL, 'AM', 'Anand Mandal', '$2y$10$nJmeUi6Aq6/XLK9RNe1j2O5RvM9NrEFBwLzXIONIkFVwODUXYKvPq', NULL, 9934186033, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-11-12', NULL, NULL, NULL, '2019-11-12 20:05:38', '2019-11-11 13:53:09', '2019-11-13 01:35:37', NULL, NULL),
(103, 3, NULL, NULL, NULL, 'PM', 'Padmalochan Mahato', '$2y$10$pfMPvnzT.SO1QTB49B69Jei00lseY8WqPpj0YbPhr41fwheNDBRhi', NULL, 9931332797, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-11-12', NULL, NULL, NULL, '2019-11-12 12:10:47', '2019-11-11 13:54:04', '2019-11-12 17:40:46', NULL, NULL),
(104, 3, NULL, NULL, NULL, 'Shiv (SCM)', 'Shiv Charan Mahato', '$2y$10$R7jUTj14Sg6JHJ2ROLauCOq0OzimElhbfLhL4SC1Xl6WqeA/HPaUm', NULL, 9934102758, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-11-12', NULL, NULL, NULL, '2019-11-12 12:13:40', '2019-11-11 13:54:54', '2019-11-12 17:43:39', NULL, NULL),
(105, 3, NULL, NULL, NULL, 'LKM', 'Lal Kishore Mahato', '$2y$10$nL.rZoU8aSP6BESEwxuDS.MFg5utZcp2jYVj8Flm/THj686UfqBlu', NULL, 9608397903, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:25:39', '2019-11-11 13:55:36', '2019-11-11 08:25:39', NULL, NULL),
(106, 3, NULL, NULL, NULL, 'AK', 'Amit Kumar', '$2y$10$/0bgWyP325Zb4LSL/DHMGOl7/pfpqvWM18MkG/gzduIpZZ3QCzCZ.', NULL, 9631854478, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:26:12', '2019-11-11 13:56:09', '2019-11-11 08:26:12', NULL, NULL),
(107, 3, NULL, NULL, NULL, 'AKH', 'Abhay Kumar Himansu', '$2y$10$zsqPUM2ogoKLK.sUQcr7TOltXKeUT1tgCbe3/LUie.80jX36YeBhG', NULL, 7762934464, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:26:49', '2019-11-11 13:56:46', '2019-11-11 08:26:49', NULL, NULL),
(108, 3, NULL, NULL, NULL, 'SK', 'Santosh Kumar', '$2y$10$jL3/ryLsgierHOyU8BlSse2wSDfhZorN2QW86h9tXLGe6MUP7K0VG', NULL, 7903350150, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-11-12', NULL, NULL, NULL, '2019-11-12 12:14:04', '2019-11-11 13:57:26', '2019-11-12 17:44:03', NULL, NULL),
(109, 3, NULL, NULL, NULL, 'GND', 'Gopi Nath Dey', '$2y$10$pp/R1Y1u/jRehP8cHtRGWOjagSg4YyQOrG68FEok5wqdO9MaDZNXS', NULL, 8210153790, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:28:11', '2019-11-11 13:58:07', '2019-11-11 08:28:11', NULL, NULL),
(110, 3, NULL, NULL, NULL, 'Sunil(SK)', 'Sunil Kumar', '$2y$10$elO0gt.HISTcUaFIRKfKDu.TAWkI4JHqdYZ7xWcGHu.pGIaSGxElO', NULL, 8709766415, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:28:57', '2019-11-11 13:58:54', '2019-11-11 08:28:57', NULL, NULL),
(111, 3, NULL, NULL, NULL, 'Ashwani(AKM)', 'Ashwani Kumar Mahato', '$2y$10$s5ZOgiUzorHxkTMhk4E16.oQegYAq1Xi3ES/YyU8A8PvB4R/223fC', NULL, 9431122464, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-11-12', NULL, NULL, NULL, '2019-11-12 14:08:32', '2019-11-11 13:59:40', '2019-11-12 19:38:31', NULL, NULL),
(112, 3, NULL, NULL, NULL, 'Manish(MK)', 'Manish Kumar', '$2y$10$b2fR.d2Cp9HvCSp0y3cereY7MDz2WIJNu0C4RdgJUu183aF0zJtoa', NULL, 9708682745, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:30:22', '2019-11-11 14:00:19', '2019-11-11 08:30:22', NULL, NULL),
(113, 3, NULL, NULL, NULL, 'Jayram(JPS)', 'Jayram Prasad Sah', '$2y$10$hI4cyTdO2raiITKO.EPCDurCt4FFSMp37l9U1iliMHS3Vnfb4sSpu', NULL, 7992396824, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:31:18', '2019-11-11 14:01:15', '2019-11-11 08:31:18', NULL, NULL),
(114, 3, NULL, NULL, NULL, 'Shyam (SSP)', 'Shyam Sundar Prasad', '$2y$10$xOUku7GJJ2YZlEJXO4nfP.3CWHqesAaIxWsK8wkpelr3FrvTZl9py', NULL, 9934250608, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:32:14', '2019-11-11 14:02:11', '2019-11-11 08:32:14', NULL, NULL),
(115, 3, NULL, NULL, NULL, 'Sudhanshu(SSP)', 'Sudhanshu Sekhar Pradhan', '$2y$10$RcydUprfckclK2vRaKY3H.ckD7QWG6/1foVRUs.bZMHwve1N2Tw8C', NULL, 8298086868, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:33:08', '2019-11-11 14:03:05', '2019-11-11 08:33:08', NULL, NULL),
(116, 3, NULL, NULL, NULL, 'SRM', 'Shanti Ram Mahato', '$2y$10$R2vLfRI/J/n6x63gKdgKyOmaF8.pbbQMo9di.7oH6lv0ZWV7OUI.u', NULL, 7632008070, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:33:46', '2019-11-11 14:03:43', '2019-11-11 08:33:46', NULL, NULL),
(117, 3, NULL, NULL, NULL, 'Manoj(MKG)', 'Manoj Kr. Gupta', '$2y$10$9O4/qdfzPkFxwDR/V5i.4eXwJdsRhXjAJWoxMHKa.Cs0MLwPEgYJ.', NULL, 9523174134, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:34:32', '2019-11-11 14:04:29', '2019-11-11 08:34:32', NULL, NULL),
(118, 3, NULL, NULL, NULL, 'Bhim(BCM)', 'Bhim Chandra Mahato', '$2y$10$ljWzkLq2fmjwk1qwKZ1hzeveyKvdvzeV5pwgCAWsbCEfQm5mZRAza', NULL, 9572654883, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:35:13', '2019-11-11 14:05:10', '2019-11-11 08:35:13', NULL, NULL),
(119, 3, NULL, NULL, NULL, 'AShwani(AKM)', 'Ashwani Kr. Hembrom', '$2y$10$zAIGg7kHWvLB47JSB7bfA.PzDZvu2.vM8Q4WNOqp4Ue4wrdX8rFF.', NULL, 6207899686, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:36:06', '2019-11-11 14:06:03', '2019-11-11 08:36:06', NULL, NULL),
(120, 3, NULL, NULL, NULL, 'MMK', 'Madan Mohan Kerai', '$2y$10$kjtmg8ZNhJ7tOp5Y.8tcN.uo9AIoVTrGq6KUxGOuOGbDc3QXV1O7e', NULL, 9934087249, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:36:54', '2019-11-11 14:06:51', '2019-11-11 08:36:54', NULL, NULL),
(121, 3, NULL, NULL, NULL, 'Kaushal(KK)', 'Kaushal Kumar', '$2y$10$oruN0HDe9sbwW.gHueMsFex/YTTWGDo4lAaVat1IIV4EdpS9Gqj8.', NULL, 8987728988, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:37:41', '2019-11-11 14:07:38', '2019-11-11 08:37:41', NULL, NULL),
(122, 3, NULL, NULL, NULL, 'Suresh(SPV)', 'Suresh Prasad Varma', '$2y$10$MnEx8R4NKDWBdjvG406tTuUYhNWfpSaIDH4CG3iev4xKH.1vsjss.', NULL, 9431302741, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:38:26', '2019-11-11 14:08:23', '2019-11-11 08:38:26', NULL, NULL),
(123, 3, NULL, NULL, NULL, 'AKS', 'Anil Kr. Singh', '$2y$10$NoDrIc4XBxPVuUZesPyfGeGxCKHhqugDeAGC/OPv.bcUwuUScwlgy', NULL, 8294995812, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:39:08', '2019-11-11 14:09:05', '2019-11-11 08:39:08', NULL, NULL),
(124, 3, NULL, NULL, NULL, 'VKK', 'Vimal Kr. Karwa', '$2y$10$YF69n5mPKHt9pXA8s5X9.esPXTN9iZ33umiM2WSao3stEN9prAJzy', NULL, 8210235100, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:39:45', '2019-11-11 14:09:42', '2019-11-11 08:39:45', NULL, NULL),
(125, 3, NULL, NULL, NULL, 'RK', 'Rakesh Kumar', '$2y$10$yumq3IKcxCrGIakCR4mo8.b789f8YqpnrYMjNpy4PTwASTOrRs3Aa', NULL, 9411428278, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:40:15', '2019-11-11 14:10:12', '2019-11-11 08:40:15', NULL, NULL),
(126, 3, NULL, NULL, NULL, 'BS', 'Brajendra Risi', '$2y$10$2VYG2CJm4vOC09KPw.vKGelIzBrYVXmVJUiGIsMoeKSGqQnHoiPIm', NULL, 7209660018, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:41:06', '2019-11-11 14:11:03', '2019-11-11 08:41:06', NULL, NULL),
(127, 3, NULL, NULL, NULL, 'LR', 'Lali Ram', '$2y$10$O7IheE9xFRYVhyoNiI46LussAg2eRCll0FIU3eMoqL01Ac7SVjaQi', NULL, 7209972699, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:41:45', '2019-11-11 14:11:42', '2019-11-11 08:41:45', NULL, NULL),
(128, 3, NULL, NULL, NULL, 'PK', 'Paikash Toppo', '$2y$10$RAbwR5MSz.M4Aho/Ba5KMeDOGIDMVuWUmLmtsltur/mXhotSjUZfq', NULL, 8809314458, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:42:23', '2019-11-11 14:12:21', '2019-11-11 08:42:23', NULL, NULL),
(129, 3, NULL, NULL, NULL, 'GS', 'Gourav Sukla', '$2y$10$Jxmqcd3HiLA0/kXKexoCwOLbj8DeLLpN3/7AAgVvgSZEGkqylDTpa', NULL, 8982932481, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:43:03', '2019-11-11 14:13:00', '2019-11-11 08:43:03', NULL, NULL),
(130, 3, NULL, NULL, NULL, 'SM', 'Sanjay Munda', '$2y$10$JFDKY2jSBXQtof/R1FiRDeWVjUHq32muoPMyXwvSU2XNdGT.kdhpK', NULL, 7903037501, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:43:37', '2019-11-11 14:13:34', '2019-11-11 08:43:37', NULL, NULL),
(131, 3, NULL, NULL, NULL, 'JPB', 'Jai Prakash Barik', '$2y$10$QzHG6VTPcPOlp0r6E6AIAu7Jxygj7evJCdN0M7ndJcqO4dTPG3wVq', NULL, 9431519778, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:44:37', '2019-11-11 14:14:34', '2019-11-11 08:44:37', NULL, NULL),
(132, 3, NULL, NULL, NULL, 'SKD', 'Sunil Kr Das', '$2y$10$E50dBly4nsNEhmZNl4AaBuQsspIK0RYW6MMz3DfTtOoQwXAaA.PFW', NULL, 8789632843, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:45:27', '2019-11-11 14:15:24', '2019-11-11 08:45:27', NULL, NULL),
(133, 3, NULL, NULL, NULL, 'RM', 'Rajesh Hembram', '$2y$10$WL41/7ikt3QIhg/VEOa0neoE0.cDfkwAm3DivKmHy0MvbWmBo4Yfq', NULL, 9608849291, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:46:09', '2019-11-11 14:16:06', '2019-11-11 08:46:09', NULL, NULL),
(134, 3, NULL, NULL, NULL, 'JD', 'John Bodra', '$2y$10$2xBRdvmYHgxWTQybNulRDewsmXK1w0QqKu2vERlLj859IkKUDPAqm', NULL, 9572092053, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:46:43', '2019-11-11 14:16:40', '2019-11-11 08:46:43', NULL, NULL),
(135, 3, NULL, NULL, NULL, 'MB', 'Manai Bari', '$2y$10$CBci7artr9CySgoCzYnrzec26/xGswz4Ra7WMoNdEre9wuYkSXQYC', NULL, 9771845484, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:47:17', '2019-11-11 14:17:14', '2019-11-11 08:47:17', NULL, NULL),
(136, 3, NULL, NULL, NULL, 'Ranglal (RM)', 'Ranglal Mahato', '$2y$10$RFBQcQ48q5uJSVhFe5lVSeQCRM.PEfkL3BD8hC0Cq1K3zIOy0XHQm', NULL, 9123275125, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:48:06', '2019-11-11 14:18:03', '2019-11-11 08:48:06', NULL, NULL),
(137, 3, NULL, NULL, NULL, 'RK', 'Rathin Kumar', '$2y$10$NcDjQsqS4Sg.Z3hsQu/mJ.dDBbzAyNfdNcYlhnTJITe5uuY/wZA.K', NULL, 8084778507, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:48:45', '2019-11-11 14:18:42', '2019-11-11 08:48:45', NULL, NULL),
(138, 3, NULL, NULL, NULL, 'SR', 'Sona Ram', '$2y$10$qmOkjrdhcr4VipseUTFjSOk0qJRyF39DPt2gFIvNEIhFXJ8mWCOG6', NULL, 8709523118, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:49:23', '2019-11-11 14:19:20', '2019-11-11 08:49:23', NULL, NULL),
(139, 3, NULL, NULL, NULL, 'SK', 'Sumit Kumar', '$2y$10$LjMjgoB2juwMUxkFEELwbOAd4zctgbgcTYwqzVX6G4/kIo6xnNv6S', NULL, 7541524824, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:50:08', '2019-11-11 14:20:05', '2019-11-11 08:50:08', NULL, NULL),
(140, 3, NULL, NULL, NULL, 'LD', 'Lopo Deogam', '$2y$10$a.x3Cmww0LBwEkH3fhaXAeYn7WxD/H7pnifEFDMzXO0I/aDrvg8TO', NULL, 8877152854, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:50:45', '2019-11-11 14:20:42', '2019-11-11 08:50:45', NULL, NULL),
(141, 3, NULL, NULL, NULL, 'CKM', 'Chaitanya Kr. Mishra', '$2y$10$3ZfqXZ1pDzygVIxIhC44kOqGAlgzr9c3lG4HPOENQUUo7m6mCB/iW', NULL, 8935916591, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:51:27', '2019-11-11 14:21:24', '2019-11-11 08:51:27', NULL, NULL),
(142, 3, NULL, NULL, NULL, 'NK', 'Nakul Thakur', '$2y$10$.Vu.jpOBvE2MtgDY2D1.quxo27zyLXRIYQjWV0HvKYFoi7PhrvC0S', NULL, 9234685223, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-12 12:52:28', '2019-11-12 18:22:25', '2019-11-11 08:52:03', NULL, NULL),
(143, 3, NULL, NULL, NULL, 'DK', 'Dhananjay Kumar', '$2y$10$.8zngORRnTPJLGtqCxteEufSfmBLO11XR1lgPADyIziOYjOkfzyXW', NULL, 9973511891, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:52:51', '2019-11-11 14:22:48', '2019-11-11 08:52:51', NULL, NULL),
(144, 3, NULL, NULL, NULL, 'Dhirendra(DK)', 'Dhirendra Kumar', '$2y$10$J2S2nYoa1jNuor.1Sx7AdO37mbvJdM4jOua.Egwvt9/de.EErnc06', NULL, 9431327787, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:53:34', '2019-11-11 14:23:31', '2019-11-11 08:53:34', NULL, NULL),
(145, 3, NULL, NULL, NULL, 'PD', 'Pradhan Hansda', '$2y$10$2vy1RhWYQM6q2sEsb6q6H.TURwjc/v52G1Z8b6QET2BE4w5N.fhI.', NULL, 7783839703, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:54:13', '2019-11-11 14:24:10', '2019-11-11 08:54:13', NULL, NULL),
(146, 3, NULL, NULL, NULL, 'KSM', 'Kalicharan Singh Munda', '$2y$10$hC5IcDMZZoq1eQQ4iXwgcesYFN3xZstkqbvXbh4z20cXttXY0MLxy', NULL, 8210150729, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:55:32', '2019-11-11 14:25:29', '2019-11-11 08:55:32', NULL, NULL),
(147, 3, NULL, NULL, NULL, 'KM', 'Kalish Ram', '$2y$10$/55SInMJRTV8dB8uyMO.V.hyg5VahkGZ7YM8UXW5hXd14NBI2PBLi', NULL, 9204220106, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:56:08', '2019-11-11 14:26:05', '2019-11-11 08:56:08', NULL, NULL),
(148, 3, NULL, NULL, NULL, 'RMP', 'Ram Naresh Parswan', '$2y$10$Ex0xTklHlE3Hm3IcedBz0.xfJiWZ0/yE0KJbD7AKQcbQt9TXytn22', NULL, 8986654544, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:56:50', '2019-11-11 14:26:47', '2019-11-11 08:56:50', NULL, NULL),
(149, 3, NULL, NULL, NULL, 'AS', 'Abhishek Shresth', '$2y$10$.f1WAbUhTbT9UyAMxBe5hO3oyfFDwztpQ0yODKJT0wVi1GAa4aDZu', NULL, 9931591351, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:57:29', '2019-11-11 14:27:26', '2019-11-11 08:57:29', NULL, NULL),
(150, 3, NULL, NULL, NULL, 'Ravinder(RM)', 'Ravinder Murmu', '$2y$10$Ykw4VaTTt409dUwL1/nEou1cKaVOUAsFPa85X/HRmPNK2TO36rAUu', NULL, 6207066122, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:58:11', '2019-11-11 14:28:08', '2019-11-11 08:58:11', NULL, NULL),
(151, 3, NULL, NULL, NULL, 'Ramakant(RK)', 'Ramakant Kumar', '$2y$10$0PWTA.V.cAa9ns.OJLj61.hJGIzlotKyPd4oTN0k20tPpLClLljlq', NULL, 9162665006, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:58:58', '2019-11-11 14:28:55', '2019-11-11 08:58:58', NULL, NULL),
(152, 3, NULL, NULL, NULL, 'Ashok(AK)', 'Ashok Kumar', '$2y$10$o5Uqk7qMw4//qGoO2AiMc.cgDw/0YA0Ll01HjR/ImAZk6uLM1STPi', NULL, 8292641598, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:59:36', '2019-11-11 14:29:33', '2019-11-11 08:59:36', NULL, NULL),
(153, 3, NULL, NULL, NULL, 'AA', 'Anurag Anand', '$2y$10$PJaOlIHjx4mHH3gDIBCpb.RQqNe5DTvwamHaRtjn2TCgigGrq/MUO', NULL, 6201352097, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 09:00:22', '2019-11-11 14:30:19', '2019-11-11 09:00:22', NULL, NULL),
(154, 3, NULL, NULL, NULL, 'SS', 'Suneel Swaraj', '$2y$10$UqeL5HfiEUvjV6z/2SFiGerBZJmNIF1A/vwPIk9wRVZYlHKluYGeS', NULL, 9334555664, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 09:01:05', '2019-11-11 14:31:02', '2019-11-11 09:01:05', NULL, NULL),
(155, 3, NULL, NULL, NULL, 'Shishir(SK)', 'Shishir Kumar', '$2y$10$eWwbSW9teIakvRzOEGnN9OU1XMT9Nk4n2TmynTwW2vT18IDc9U7Vq', NULL, 9835795810, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 09:01:41', '2019-11-11 14:31:38', '2019-11-11 09:01:41', NULL, NULL),
(156, 3, NULL, NULL, NULL, 'KM', 'Kalipad Mahato', '$2y$10$pYN77q2dQy8lnYYEP/9I/uv8p1MSfjaMX0JwXri4ivG6k4ENKD/Aq', NULL, 8340653603, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 09:03:54', '2019-11-11 14:33:51', '2019-11-11 09:03:54', NULL, NULL),
(157, 3, NULL, NULL, NULL, 'rajiv', 'Rajiv', '$2y$10$A3tKxV8dptxuS9wC/W8C5eBl1QMgI4aXQUe8nKpfofI2sq2ONP9f6', NULL, 9716555394, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-11-12', NULL, NULL, NULL, '2019-11-12 12:07:22', '2019-11-11 15:10:53', '2019-11-12 17:37:19', NULL, NULL),
(159, 3, NULL, NULL, NULL, 'Shiv(SCM)', 'Shiv Charan Mahato', '$2y$10$cde9Sw0BirGlYcCVJqFG8eBNAQE.pUt6T6DoH3YN6ET2K1dZo3jgu', NULL, 9934102758, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-12 12:12:15', '2019-11-12 17:42:12', '2019-11-12 12:12:15', NULL, NULL),
(160, 3, NULL, NULL, NULL, 'Ashwani(AKM)', 'Ashwani Kr. Mahato', '$2y$10$4i/wJMai1bKunzue5QX0C.QQ8gdx9gAhFWEZYi9IbHytbIafpbFKm', NULL, 9431122464, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-12 13:29:35', '2019-11-12 18:59:32', '2019-11-12 13:28:47', NULL, NULL),
(161, 3, NULL, NULL, NULL, 'DK', 'Devendra Kumar', '$2y$10$bXf4njgpwGNIQ.2G0gdsMu6xed.urDMaiz223.7nKPmDSr0VIJuTm', NULL, 9934138041, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '4545555', '454545454545454', '2019-12-09 06:26:47', '2019-11-12 19:09:10', '2019-12-09 17:56:47', NULL, NULL),
(162, 3, NULL, NULL, NULL, 'AM', 'Anand Mandal', '$2y$10$2yOak2tjNgXGZSaLGG/2nuhJQkdA.fLwJrVWWcnHE0kseRatShGcS', NULL, 99341860033, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-11-12', NULL, NULL, NULL, '2019-11-12 20:20:35', '2019-11-13 01:32:27', '2019-11-13 01:50:34', NULL, NULL),
(163, 3, NULL, NULL, NULL, 'AM', 'Anand Mandal', '$2y$10$lDmfD9StsNx3AYTEpM6dv.A1HA1OSHxBIZHoIY8JgAheUS50rK4cu', NULL, 9934186033, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-12 20:21:53', '2019-11-13 01:51:50', '2019-11-12 20:21:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_location_block`
--

CREATE TABLE `its_location_block` (
  `id` int(11) NOT NULL,
  `phase_id` int(11) DEFAULT NULL,
  `block` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_location_block`
--

INSERT INTO `its_location_block` (`id`, `phase_id`, `block`, `created_at`, `updated_at`, `status`) VALUES
(5, 4, 'test land', '2019-12-23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_location_phase`
--

CREATE TABLE `its_location_phase` (
  `id` int(11) NOT NULL,
  `zone_id` int(11) DEFAULT NULL,
  `phase` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_location_phase`
--

INSERT INTO `its_location_phase` (`id`, `zone_id`, `phase`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 'A/44/456', '2019-11-20', '2019-11-20', NULL),
(2, 2, 'a block', '2019-11-20', NULL, NULL),
(4, 3, 'Aditiyapur', '2019-11-28', NULL, NULL),
(5, 4, 'sector - 62', '2019-11-28', NULL, NULL),
(6, 5, 'NS', '2019-12-11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_location_zone`
--

CREATE TABLE `its_location_zone` (
  `id` int(11) NOT NULL,
  `sector_zone` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_location_zone`
--

INSERT INTO `its_location_zone` (`id`, `sector_zone`, `created_at`, `updated_at`, `status`) VALUES
(3, 'Jamsedpur', '2019-11-28', NULL, NULL),
(4, 'Noida', '2019-11-28', NULL, NULL),
(5, 'Adityapur', '2019-12-11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_manage_pcc_action`
--

CREATE TABLE `its_manage_pcc_action` (
  `id` int(11) NOT NULL,
  `pcc_date` date NOT NULL,
  `pcc_desc` text,
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(256) DEFAULT NULL,
  `updated_by` varchar(256) DEFAULT NULL,
  `created_at` varchar(256) DEFAULT NULL,
  `updated_at` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_manage_pcc_action`
--

INSERT INTO `its_manage_pcc_action` (`id`, `pcc_date`, `pcc_desc`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '2020-01-11', 'PCC descfddfs', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_manufacturing_details`
--

CREATE TABLE `its_manufacturing_details` (
  `id` int(11) NOT NULL,
  `input_items_id` varchar(256) DEFAULT NULL,
  `input_items_quantity` varchar(255) DEFAULT NULL,
  `input_items_uom` varchar(255) DEFAULT NULL,
  `input_items_location` varchar(256) DEFAULT NULL,
  `finished_goods_quantity` varchar(256) DEFAULT NULL,
  `finished_goods_name` varchar(256) DEFAULT NULL,
  `finished_goods_uom` varchar(256) DEFAULT NULL,
  `finished_goods_location` varchar(256) DEFAULT NULL,
  `metal_scrap_name` varchar(256) DEFAULT NULL,
  `metal_scrap_quantity` varchar(256) DEFAULT NULL,
  `metal_scrap_uom` varchar(256) DEFAULT NULL,
  `metal_scrap_location` varchar(256) DEFAULT NULL,
  `invisible_loss_name` varchar(256) DEFAULT NULL,
  `invisible_loss_quantity` varchar(256) DEFAULT NULL,
  `invisible_loss_uom` varchar(256) DEFAULT NULL,
  `invisible_loss_auto` varchar(256) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `qa_check` int(50) DEFAULT NULL,
  `input_item_type` int(50) DEFAULT NULL,
  `finished_item_type` int(50) DEFAULT NULL,
  `scrap_item_type` int(50) DEFAULT NULL,
  `loss_item_type` int(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` varchar(256) DEFAULT NULL,
  `created_by` varchar(256) DEFAULT NULL,
  `update_by` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_manufacturing_details`
--

INSERT INTO `its_manufacturing_details` (`id`, `input_items_id`, `input_items_quantity`, `input_items_uom`, `input_items_location`, `finished_goods_quantity`, `finished_goods_name`, `finished_goods_uom`, `finished_goods_location`, `metal_scrap_name`, `metal_scrap_quantity`, `metal_scrap_uom`, `metal_scrap_location`, `invisible_loss_name`, `invisible_loss_quantity`, `invisible_loss_uom`, `invisible_loss_auto`, `status`, `qa_check`, `input_item_type`, `finished_item_type`, `scrap_item_type`, `loss_item_type`, `created_at`, `updated_at`, `created_by`, `update_by`) VALUES
(1, '1', '20', '6', '1', '10', '2', '6', '1', '3', '9.93', '6', '1', '3', '0.07', '6', '1', 1, 1, 8, 12, 13, 14, '2020-02-15 16:04:10', '2020-02-15', '1', '1'),
(2, '1', '50', '6', '1', '40', '3', '6', '1', '3', '9.83', '6', '1', '3', '0.17', '6', '1', 1, 1, 11, 12, 13, 14, '2020-02-15 16:04:56', '2020-02-15', '1', '1'),
(3, '8', '456', '6', '1', '400', '2', '6', NULL, '7', '54.48', '6', NULL, '10', '1.52', '6', NULL, 1, 1, 9, 11, 12, 13, '2020-02-15 16:13:02', '2020-02-18', '1', '1'),
(4, '7', '30', '6', '1', '20', '1', '6', '2', '1', '9.9', '6', '1', '3', '0.10', '6', '1', 1, 1, 11, 12, 13, 14, '2020-02-17 14:50:32', '2020-02-17', '1', '1'),
(5, '7', '40', '6', '2', '30', '9', '6', '3', '3', '9.87', '6', '3', '3', '0.13', '6', '1', 1, 1, 8, 12, 13, 14, '2020-02-17 15:09:11', '2020-02-17', '1', '1'),
(6, '8', '444', '4', '1', '44', '10', '5', NULL, '10', '398.52', '5', NULL, '10', '1.48', '6', NULL, 1, 1, 11, 12, 12, 12, '2020-02-18 10:09:29', '2020-02-18', '1', '1'),
(7, '8', '129', '6', '3', '120', '2', '5', NULL, '7', '8.57', '6', NULL, '8', '0.43', '5', NULL, 1, 1, 9, 11, 12, 13, '2020-02-18 05:13:35', '2020-02-18', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `its_materials`
--

CREATE TABLE `its_materials` (
  `id` int(11) NOT NULL,
  `material_name` varchar(255) NOT NULL,
  `material_description` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_materials`
--

INSERT INTO `its_materials` (`id`, `material_name`, `material_description`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'added new material', 'iron or fines', 1, 1, 1, '2019-12-16 05:04:43', '2019-12-16 05:04:43'),
(2, 'any thing', 'new material added', 1, 1, 1, '2019-12-16 05:05:20', '2019-12-16 05:05:20');

-- --------------------------------------------------------

--
-- Table structure for table `its_module`
--

CREATE TABLE `its_module` (
  `ID` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `module_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_module`
--

INSERT INTO `its_module` (`ID`, `module_id`, `module_name`) VALUES
(1, 1, 'DASHBOARD'),
(2, 2, 'INVENTORY ITEMS'),
(3, 3, 'MAUNFACTURING'),
(4, 4, 'ORGNIZATIONS'),
(5, 5, 'SHIPMENT'),
(6, 6, 'SETTINGS');

-- --------------------------------------------------------

--
-- Table structure for table `its_org`
--

CREATE TABLE `its_org` (
  `id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `org_code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `org_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_no` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_person` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `org_type` int(11) DEFAULT '0' COMMENT '1=''Live'' , 0=''Demo''',
  `pf_no` bigint(11) DEFAULT NULL,
  `esic_no` bigint(11) DEFAULT NULL,
  `tax_no` bigint(11) DEFAULT NULL,
  `policy_no` bigint(11) NOT NULL,
  `gratuity_no` bigint(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `is_deleted` int(11) DEFAULT '0' COMMENT '1 = ''Delete''',
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` timestamp NULL DEFAULT NULL,
  `login_status` int(11) DEFAULT '0' COMMENT '1=''Active'' ,0=''Inactive''',
  `status` int(11) DEFAULT '0' COMMENT '1=''Active'' , 0=''Inactive''',
  `ip_address` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_org`
--

INSERT INTO `its_org` (`id`, `org_id`, `users_id`, `parent_id`, `org_code`, `org_name`, `contact_no`, `contact_person`, `email`, `address`, `website`, `city_id`, `state_id`, `country_id`, `zipcode`, `photo`, `org_type`, `pf_no`, `esic_no`, `tax_no`, `policy_no`, `gratuity_no`, `start_date`, `end_date`, `is_deleted`, `deleted_by`, `deleted_date`, `login_status`, `status`, `ip_address`, `created_by`, `modified_by`, `modified_date`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, NULL, 5, NULL, 'ITS2132', 'IT SCIENT', '885559998', NULL, 'itscient@gmail.com', 'Noida sec-63 , Pin - 201301', 'www.itscient.in', 64, 26, 1, 201301, '1567778233.jpg', 0, 454544, 5454, 111111, 22222, 3333333, NULL, NULL, 0, NULL, NULL, 1, 0, '::1', NULL, NULL, '2019-09-24 04:53:43', '2019-09-24 04:53:43', NULL, '2019-09-24 04:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `its_organization`
--

CREATE TABLE `its_organization` (
  `id` int(11) NOT NULL,
  `organization_name` varchar(256) DEFAULT NULL,
  `city` varchar(256) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(256) DEFAULT NULL,
  `cin` varchar(256) DEFAULT NULL,
  `revenue` varchar(256) DEFAULT NULL,
  `relationships` varchar(256) DEFAULT NULL,
  `contact_name` varchar(256) DEFAULT NULL,
  `contact_phone` varchar(256) DEFAULT NULL,
  `contact_email` varchar(256) DEFAULT NULL,
  `contact_role` varchar(256) DEFAULT NULL,
  `contact_department` varchar(256) DEFAULT NULL,
  `contact_type` varchar(256) DEFAULT NULL,
  `status` varchar(256) DEFAULT NULL,
  `created_by` varchar(256) DEFAULT NULL,
  `updated_by` varchar(256) DEFAULT NULL,
  `update_at` varchar(256) DEFAULT NULL,
  `ceated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_organization`
--

INSERT INTO `its_organization` (`id`, `organization_name`, `city`, `state`, `country`, `cin`, `revenue`, `relationships`, `contact_name`, `contact_phone`, `contact_email`, `contact_role`, `contact_department`, `contact_type`, `status`, `created_by`, `updated_by`, `update_at`, `ceated_at`) VALUES
(1, 'Tata Tubes', 'Jamshedpur', 'jharkhand', 'India', 'Cin4567', '50000000', '1', 'Sachin', '6549879878', 'schin@gmail.com', 'Leader', '2', '1', '1', '1', '41', '2020-02-10', '2020-02-09 00:00:00'),
(2, 'Tata Steel', 'Jamshedpur', 'jharkhand', NULL, 'CIn123', '2000000', '1', 'Amit', '9876547898', 'ait@gmail.com', 'Admin', '3', '1', '1', NULL, '41', '2020-02-10', '2020-02-09 13:31:32'),
(3, 'TCS', 'Jamshedpur', 'Jharkhand', 'India', 'CIN999', '3000000', '1', 'Sachin', '6549879878', 'sachin@gmail.com', 'Leader', '2', '3', '1', '1', NULL, NULL, '2020-02-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `its_org_contact_type`
--

CREATE TABLE `its_org_contact_type` (
  `org_contact_type_id` int(11) NOT NULL,
  `org_contact_type_name` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_org_contact_type`
--

INSERT INTO `its_org_contact_type` (`org_contact_type_id`, `org_contact_type_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Billing', 1, '2020-02-10 10:35:52', '2020-02-10 10:35:52'),
(2, 'HR', 1, '2020-02-10 10:36:05', '2020-02-10 10:36:05'),
(3, 'Manager', 1, '2020-02-10 10:36:16', '2020-02-10 10:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `its_org_designation`
--

CREATE TABLE `its_org_designation` (
  `org_designation_id` int(11) NOT NULL,
  `org_designation_name` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_org_designation`
--

INSERT INTO `its_org_designation` (`org_designation_id`, `org_designation_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Chief Legal Officer', 1, '2020-02-10 10:38:09', '2020-02-10 10:38:09'),
(2, 'CEO', 1, '2020-02-10 10:38:31', '2020-02-10 10:38:31'),
(3, 'Manager', 1, '2020-02-10 10:38:46', '2020-02-10 10:38:46'),
(4, 'Quality', 1, '2020-02-10 10:39:00', '2020-02-10 10:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `its_org_relation`
--

CREATE TABLE `its_org_relation` (
  `org_relation_id` int(11) NOT NULL,
  `relation_name` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_org_relation`
--

INSERT INTO `its_org_relation` (`org_relation_id`, `relation_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Supplier', 1, '2020-02-10 10:34:22', '2020-02-10 10:34:22'),
(2, 'Client', 1, '2020-02-10 10:34:36', '2020-02-10 10:34:36'),
(3, 'Partner', 1, '2020-02-10 10:34:53', '2020-02-10 10:34:53'),
(4, 'Parent Org', 1, '2020-02-10 10:35:09', '2020-02-10 10:35:09'),
(5, 'Subsidiary', 1, '2020-02-10 10:35:22', '2020-02-10 10:35:22');

-- --------------------------------------------------------

--
-- Table structure for table `its_password_resets`
--

CREATE TABLE `its_password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_password_resets`
--

INSERT INTO `its_password_resets` (`id`, `email`, `token`, `created_at`) VALUES
(3, 'amitrajput270@gmail.com', '$2y$10$76W7f6SQelcX2q3f/qwFbuwXJ2BfJx/puK6/9aMR62xbYdfVRI6KW', '2019-11-01 02:00:50'),
(9, 'amit2019.itscient@gmail.com', '$2y$10$eNdU6vaUXwfXM5yh//C.0eKV7afRw1bnCYyW/NKlA8X.NWeuUhmPu', '2020-02-10 21:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `its_pccdata`
--

CREATE TABLE `its_pccdata` (
  `id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `land_id` int(11) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `trans_cust_id` int(11) DEFAULT NULL,
  `application_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `application_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ssi_reg_no` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `allotment_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `allotment_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `registration_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `registration_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `based_rent` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insurance` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maintanance` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `additional_charge` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `net_payable` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `net_pay` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lease_duration` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lease_time` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `end_date` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_transfer` int(11) NOT NULL DEFAULT '0',
  `transfer_date` date DEFAULT NULL,
  `is_cancelled` int(11) DEFAULT '0',
  `created_at` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_pcc` tinyint(1) DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_pccdata`
--

INSERT INTO `its_pccdata` (`id`, `org_id`, `land_id`, `cust_id`, `trans_cust_id`, `application_no`, `application_date`, `ssi_reg_no`, `allotment_no`, `allotment_date`, `registration_no`, `registration_date`, `position_date`, `based_rent`, `tax`, `insurance`, `maintanance`, `additional_charge`, `net_payable`, `net_pay`, `lease_duration`, `lease_time`, `start_date`, `end_date`, `is_transfer`, `transfer_date`, `is_cancelled`, `created_at`, `updated_at`, `is_pcc`, `status`) VALUES
(1, 1, 1, 2, NULL, '123456', '2019-11-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2019-11-20', NULL, 0, 1),
(2, 18, 3, 2, NULL, 'gdagdgdfg', '02-08-2019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2019-11-28', NULL, 0, 1),
(3, 22, 6, 6, NULL, 'app100', '12-12-2019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2019-12-17', NULL, 0, 1),
(4, 22, 6, 21, NULL, 'app101', '13-12-2019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2019-12-17', NULL, 0, 1),
(5, 22, 6, 1, NULL, 'app102', '14-12-2019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2019-12-17', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_pcc_agenda_final_save`
--

CREATE TABLE `its_pcc_agenda_final_save` (
  `id` int(11) NOT NULL,
  `manage_pcc_id` bigint(22) NOT NULL,
  `pcc_enitity_record_id` bigint(22) NOT NULL,
  `pcc_action` varchar(256) DEFAULT NULL,
  `pcc_enitity` varchar(256) DEFAULT NULL,
  `pcc_entity_id` varchar(256) DEFAULT NULL,
  `pcc_Entity_name` varchar(256) DEFAULT NULL,
  `pcc_Entity_name_id` int(11) NOT NULL,
  `pcc_comment` varchar(256) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `Remarks` varchar(1005) DEFAULT NULL,
  `created_by` varchar(256) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `its_pcc_enitity_record`
--

CREATE TABLE `its_pcc_enitity_record` (
  `id` int(11) NOT NULL,
  `manage_pcc_id` bigint(22) NOT NULL,
  `pcc_action` varchar(256) DEFAULT NULL,
  `pcc_enitity` varchar(256) DEFAULT NULL,
  `pcc_entity_id` varchar(256) DEFAULT NULL,
  `pcc_Entity_search` varchar(256) DEFAULT NULL,
  `pcc_Entity_name` varchar(256) DEFAULT NULL,
  `pcc_comment` varchar(256) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_pcc_enitity_record`
--

INSERT INTO `its_pcc_enitity_record` (`id`, `manage_pcc_id`, `pcc_action`, `pcc_enitity`, `pcc_entity_id`, `pcc_Entity_search`, `pcc_Entity_name`, `pcc_comment`, `status`) VALUES
(1, 1, '4', '4', '2', 'i', 'United Arab Emirates', 'This is Test Company', 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_pcc_master`
--

CREATE TABLE `its_pcc_master` (
  `id` int(11) NOT NULL,
  `entry_pcc_name` varchar(255) NOT NULL,
  `pcc_action_name` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_pcc_master`
--

INSERT INTO `its_pcc_master` (`id`, `entry_pcc_name`, `pcc_action_name`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Add', 'Add', 1, 1, 1, '2019-12-15 04:21:56', '2019-12-14 16:51:22'),
(4, 'Update', 'Update', 1, 1, 1, '2019-12-15 04:21:39', '2019-12-14 16:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `its_priority_levels`
--

CREATE TABLE `its_priority_levels` (
  `id` int(11) NOT NULL,
  `priority_name` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_priority_levels`
--

INSERT INTO `its_priority_levels` (`id`, `priority_name`, `description`, `is_active`, `is_default`, `deleted_by`, `deleted_date`, `created_at`, `updated_at`, `created_by`) VALUES
(12, 'active', NULL, 1, NULL, NULL, NULL, '2019-12-16', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_product`
--

CREATE TABLE `its_product` (
  `id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `land_id` int(11) DEFAULT NULL,
  `product_code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_category_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT 'NULL',
  `product_sub_category_id` int(11) DEFAULT NULL,
  `product_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `serial_number` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `product_condition` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `quantity_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `installed_location_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_type_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_1` mediumtext COLLATE utf8_unicode_ci,
  `address_2` mediumtext COLLATE utf8_unicode_ci,
  `state1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pin1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `area_square_fit` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `landmark1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `long_lat1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pin2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_of_measure_type_id` int(11) DEFAULT NULL,
  `unit_of_measure_name_id` int(11) DEFAULT NULL,
  `unit_of_measure` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `landmark2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `long_lat2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci,
  `status` tinyint(1) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_by` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modify_by` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_serviceable_item` varchar(111) COLLATE utf8_unicode_ci DEFAULT '0',
  `is_service_item` varchar(111) COLLATE utf8_unicode_ci DEFAULT '0',
  `is_serialized` varchar(111) COLLATE utf8_unicode_ci DEFAULT '0',
  `is_leasable` int(11) DEFAULT '1',
  `num_column1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txt_column_value1` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txt_column_value2` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txt_column_value3` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txt_column_value4` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txt_column3` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `its_service`
--

CREATE TABLE `its_service` (
  `id` int(11) NOT NULL,
  `service_type_id` int(50) NOT NULL,
  `item_type_id` int(50) NOT NULL,
  `inv_item_id` int(50) NOT NULL,
  `input_quantity` int(50) DEFAULT NULL,
  `input_uom_id` int(50) DEFAULT NULL,
  `qa` int(50) DEFAULT NULL,
  `finished_good_id` int(20) DEFAULT NULL,
  `finished_good_uom` int(50) DEFAULT NULL,
  `finished_good_quantity` int(50) DEFAULT NULL,
  `scrap` int(50) DEFAULT NULL,
  `scrap_uom` int(50) DEFAULT NULL,
  `scrap_quantity` int(50) DEFAULT NULL,
  `invisible_loss` int(50) DEFAULT NULL,
  `invisible_uom` int(50) DEFAULT NULL,
  `invisible_quantity` int(50) DEFAULT NULL,
  `status` int(50) DEFAULT NULL,
  `created_at` date NOT NULL,
  `created_by` int(50) NOT NULL,
  `update_at` date DEFAULT NULL,
  `update_by` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `its_service`
--

INSERT INTO `its_service` (`id`, `service_type_id`, `item_type_id`, `inv_item_id`, `input_quantity`, `input_uom_id`, `qa`, `finished_good_id`, `finished_good_uom`, `finished_good_quantity`, `scrap`, `scrap_uom`, `scrap_quantity`, `invisible_loss`, `invisible_uom`, `invisible_quantity`, `status`, `created_at`, `created_by`, `update_at`, `update_by`) VALUES
(1, 2, 9, 3, 15, 6, 1, 1, 6, 6, 1, 6, 9, 3, 6, 0, 1, '2020-02-14', 1, '2020-02-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_service_type`
--

CREATE TABLE `its_service_type` (
  `id` int(11) NOT NULL,
  `service_name` varchar(256) DEFAULT NULL,
  `service_description` text,
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(256) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` int(11) DEFAULT NULL,
  `update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_service_type`
--

INSERT INTO `its_service_type` (`id`, `service_name`, `service_description`, `status`, `created_by`, `created_at`, `update_by`, `update_at`) VALUES
(2, 'Slitting', 'Slitting', 1, '1', '2020-02-13 18:34:08', 1, '2020-02-15'),
(3, 'Cut to Length', 'Cut to Length', 1, '1', '2020-02-13 18:35:52', 1, '2020-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `its_shareholders`
--

CREATE TABLE `its_shareholders` (
  `id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `cust_id` bigint(20) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `f_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `l_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8_unicode_ci,
  `phone` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `occupation` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_reg_no` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_type` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_director` tinyint(1) DEFAULT NULL,
  `s_svalue` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `svalue_percentage` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `description` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_shareholders`
--

INSERT INTO `its_shareholders` (`id`, `org_id`, `cust_id`, `comp_id`, `p_id`, `f_name`, `l_name`, `location`, `phone`, `email`, `gender`, `occupation`, `mobile`, `dob`, `company_reg_no`, `company`, `company_type`, `is_director`, `s_svalue`, `svalue_percentage`, `state_id`, `country_id`, `description`, `address`, `created_at`, `updated_at`, `created_by`, `status`) VALUES
(1, 1, 1, 1, 1, 'Sachin', 'Kumar', 'This Share Holder 1 Address', NULL, 'sachin@gmail.com', NULL, 'web3', '3256565656', '28-12-2019', '7878', 'Its', 'ltd', 0, '25000', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 1, 1, 1, 1, 'Abhishek', 'kuamr', 'This is Shareholder2 Address', NULL, 'abhishek@gmail.com', 'male', 'web4', '3586565656', '28-12-2019', '7878', 'Its', 'ltd', 0, '25000', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, 1, 1, 1, 1, 'Amit', 'kumar', 'This Is Customer 1 Addresss', NULL, 'amit@gmail.comom', NULL, 'web Dev', '8709218656', '04-12-2019', '7878', 'Its', 'ltd', 1, '25000', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, 1, 1, 1, 1, 'Rohit', 'Kuamr', 'This is Customer2 Address', NULL, 'rohit@gmail.com', 'male', 'web2', '8095656865', '28-12-2019', '7878', 'Its', 'ltd', 1, '2500', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 1, 2, 2, 2, 'Shivani', 'mahto', 'This is test LLp Director address', NULL, 'shivanifeb@gmail.com', NULL, 'director1', '8204545454', '12-12-2019', '75454544', 'HP LLP', 'llp', 1, '25000', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, 1, 2, 2, 2, 'tanuja', NULL, 'This  is Director2 Address', NULL, 'tanuja@gmail.com', 'male', 'llp directorer 2', '8015545445', NULL, '75454544', 'HP LLP', 'llp', 1, '25000', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_shipment`
--

CREATE TABLE `its_shipment` (
  `id` int(50) NOT NULL,
  `supplier_name` varchar(250) NOT NULL,
  `shipment_type` varchar(100) NOT NULL,
  `address` varchar(500) DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL,
  `state` varchar(500) DEFAULT NULL,
  `qa` int(50) DEFAULT NULL,
  `pincode` varchar(80) DEFAULT NULL,
  `vehicle_type` varchar(20) DEFAULT NULL,
  `vehicle_make` varchar(200) DEFAULT NULL,
  `model` varchar(200) DEFAULT NULL,
  `license_no` varchar(200) DEFAULT NULL,
  `driver_name` varchar(200) DEFAULT NULL,
  `phone1` varchar(20) DEFAULT NULL,
  `phone2` varchar(20) DEFAULT NULL,
  `driver_address` varchar(300) DEFAULT NULL,
  `shiped_item` text,
  `status` int(50) NOT NULL,
  `shipping_date` varchar(250) DEFAULT NULL,
  `created_by` int(20) NOT NULL,
  `modified_by` int(20) DEFAULT NULL,
  `created_date` date NOT NULL,
  `modified_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `its_shipment`
--

INSERT INTO `its_shipment` (`id`, `supplier_name`, `shipment_type`, `address`, `city`, `state`, `qa`, `pincode`, `vehicle_type`, `vehicle_make`, `model`, `license_no`, `driver_name`, `phone1`, `phone2`, `driver_address`, `shiped_item`, `status`, `shipping_date`, `created_by`, `modified_by`, `created_date`, `modified_date`) VALUES
(1, 'Rohit', '1', 'Sakchi Jamshedpur', '65', '11', NULL, '832108', 'Bus', 'SSS', 'SSS123', '123', 'Abhi', '987654321', '9876543234', 'JSR', '[{\"item_id\":\"2\",\"item_location_id\":\"3\",\"item_quantity\":\"100\",\"item_serial_no\":null},{\"item_id\":\"8\",\"item_location_id\":\"1\",\"item_quantity\":\"100\",\"item_serial_no\":null}]', 1, NULL, 1, 1, '2020-02-08', '2020-02-11'),
(2, 'Amit', '0', 'Sakchi Jamshedpur', '293', NULL, NULL, '253463', 'Bus', NULL, NULL, '123', 'Singh', NULL, NULL, NULL, '[{\"item_id\":\"2\",\"item_location_id\":\"1\",\"item_quantity\":\"100\",\"item_serial_no\":null},{\"item_id\":\"8\",\"item_location_id\":\"2\",\"item_quantity\":\"100\",\"item_serial_no\":null}]', 1, NULL, 1, 1, '2020-02-08', '2020-02-11'),
(4, 'Abhi', '1', 'Gamharia', NULL, NULL, NULL, '832108', 'Truck', NULL, NULL, 'LC123', 'Sultan', '9879877898', NULL, NULL, NULL, 1, NULL, 41, NULL, '2020-02-10', NULL),
(5, 'Abhi', '0', 'Kadma', NULL, NULL, NULL, '832107', 'Truck', NULL, NULL, 'LC12345', 'Kali', '9876547898', NULL, NULL, NULL, 1, NULL, 41, NULL, '2020-02-10', NULL),
(6, 'Tata motors', '1', 'JSR', NULL, NULL, NULL, '221711', 'Truck', '2012', 'DL00458', 'DLRK4512', 'Rakesh', '9311959563', NULL, NULL, NULL, 1, NULL, 1, NULL, '2020-02-10', NULL),
(7, 'Rakesh', '0', 'Noida', NULL, NULL, NULL, '221711', 'Bus', '2012', 'DL2202', 'DLSSD555', 'Rakesh', '9311959563', NULL, NULL, NULL, 1, NULL, 1, 1, '2020-02-10', '2020-02-10'),
(8, 'RohitG', '1', 'bhuiyadih, 1306', '1203', '11', 1, '831009', 'Bus', NULL, NULL, NULL, 'Abhi', '+918092181759', '+918092181759', 'bhuiyadih', '[{\"item_type_id\":\"9\",\"item_id\":\"10\",\"item_grn_no\":null,\"item_invoice_no\":null,\"item_location_id\":null,\"item_quantity\":\"100\",\"item_uom_id\":null,\"item_serial_no\":\"si1234\"}]', 1, '13-02-2020', 1, NULL, '2020-02-18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_sst`
--

CREATE TABLE `its_sst` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `sst_code` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `sst_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `deleted_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_sst`
--

INSERT INTO `its_sst` (`id`, `user_id`, `sst_code`, `type`, `sst_name`, `mobile`, `is_deleted`, `deleted_at`, `created_at`, `updated_at`, `status`) VALUES
(2, 127, 'SST-50-1-A', 1, 'Lali Ram', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(4, 128, 'SST-50-1-B', 1, 'Paikash Toppo', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(5, 129, 'SST-50-1-C', 1, 'Gourav Sukla', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(6, 130, 'SST-50-2-A', 1, 'Sanjay Munda', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(7, 131, 'SST-50-2-B', 1, 'JaiParkash Barik', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(8, 132, 'SST-50-2-C', 1, 'Sunil Kumar Das', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(9, 133, 'SST-50-3-A', 1, 'Rajesh Hembram', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(10, 134, 'SST-50-3-B', 1, 'John Bodra', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(11, 135, 'SST-50-3-C', 1, 'Manai Bari', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(12, 137, 'SST-50-4-B', 1, 'Rathin Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(13, 138, 'SST-50-4-C', 1, 'Sona Ram', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(14, 139, 'SST-51-1-A', 1, 'Sumit Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(15, 140, 'SST-51-1-B', 1, 'Lopo Deogam', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(16, 141, 'SST-51-1-C', 1, 'Chaitanya Kr. Mishra', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(17, 142, 'SST-51-2-A', 1, 'Nakul Thakur', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(18, 143, 'SST-51-2-B', 1, 'Dhananjay Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(19, 144, 'SST-51-2-C', 1, 'Dhirendra Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(20, 145, 'SST-51-3-A', 1, 'Pradhan Hansda', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(21, 146, 'SST-51-3-C', 1, 'Kalicharan Singh Munda', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(22, 147, 'SST-51-4-A', 1, 'Kalish Ram', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(23, 148, 'SST-51-4-B', 1, 'Ram Naresh Parswan', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(24, 149, 'SST-51-4-C', 1, 'Abhishek Shresth', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(25, 150, 'SST-57-1-A', 1, 'Ravindra Murmu', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(26, 151, 'SST-57-1-B', 1, 'Ramakant Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(27, 152, 'SST-57-1-C', 1, 'Ashok Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(28, 153, 'SST-57-2-A', 1, 'Anurag Anand', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(29, 154, 'SST-57-2-B', 1, 'Suneel Swaraj', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(30, 155, 'SST-57-2-C', 1, 'Shishir Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(31, 136, 'SST-50-4-A', 1, 'Ranglal Mahato', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(32, 161, 'SST-51-3-B', 1, 'Devendra Kumar', 9934138041, 0, NULL, '2019-11-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_state`
--

CREATE TABLE `its_state` (
  `id` int(10) UNSIGNED NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0' COMMENT '1 = ''delete''',
  `ip_address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_state`
--

INSERT INTO `its_state` (`id`, `org_id`, `state`, `status`, `is_deleted`, `ip_address`, `modified_date`, `created_at`) VALUES
(1, NULL, 'Andhra Pradesh', 1, 0, '', '2020-02-11 13:49:26', NULL),
(2, NULL, 'Arunachal Pradesh', 1, 0, '', '2020-02-11 13:49:26', NULL),
(3, NULL, 'Assam', 1, 0, '', '2020-02-11 13:49:26', NULL),
(4, NULL, 'Bihar', 1, 0, '', '2020-02-11 13:49:26', NULL),
(5, NULL, 'Chhattisgarh', 1, 0, '', '2020-02-11 13:49:26', NULL),
(6, NULL, 'Goa', 1, 0, '', '2020-02-11 13:49:26', NULL),
(7, NULL, 'Gujarat', 1, 0, '', '2020-02-11 13:49:26', NULL),
(8, NULL, 'Haryana', 1, 0, '', '2020-02-11 13:49:26', NULL),
(9, NULL, 'Himachal Pradesh', 1, 0, '', '2020-02-11 13:49:26', NULL),
(10, NULL, 'Jammu and Kashmir', 1, 0, '', '2020-02-11 13:49:26', NULL),
(11, NULL, 'Jharkhand', 1, 0, '', '2020-02-11 13:49:26', NULL),
(12, NULL, 'Karnataka', 1, 0, '', '2020-02-11 13:49:26', NULL),
(13, NULL, 'Kerala', 1, 0, '', '2020-02-11 13:49:26', NULL),
(14, NULL, 'Madhya Pradesh', 1, 0, '', '2020-02-11 13:49:26', NULL),
(15, NULL, 'Maharashtra', 1, 0, '', '2020-02-11 13:49:26', NULL),
(16, NULL, 'Manipur', 1, 0, '', '2020-02-11 13:49:26', NULL),
(17, NULL, 'Meghalaya', 1, 0, '', '2020-02-11 13:49:26', NULL),
(18, NULL, 'Mizoram', 1, 0, '', '2020-02-11 13:49:26', NULL),
(19, NULL, 'Nagaland', 1, 0, '', '2020-02-11 13:49:26', NULL),
(20, NULL, 'Odisha', 1, 0, '', '2020-02-11 13:49:26', NULL),
(21, NULL, 'Punjab', 1, 0, '', '2020-02-11 13:49:26', NULL),
(22, NULL, 'Rajasthan', 1, 0, '', '2020-02-11 13:49:26', NULL),
(23, NULL, 'Sikkim', 1, 0, '', '2020-02-11 13:49:26', NULL),
(24, NULL, 'Tamil Nadu', 1, 0, '', '2020-02-11 13:49:26', NULL),
(25, NULL, 'Tripura', 1, 0, '', '2020-02-11 13:49:26', NULL),
(26, NULL, 'Uttar Pradesh', 1, 0, '', '2020-02-11 13:49:26', NULL),
(27, NULL, 'Uttarakhand', 1, 0, '', '2020-02-11 13:49:26', NULL),
(28, NULL, 'West Bengal', 1, 0, '', '2020-02-11 13:49:26', NULL),
(29, NULL, 'Telangana', 1, 0, '', '2020-02-11 13:49:26', NULL),
(30, NULL, 'Andaman and Nicobar', 1, 0, '', '2020-02-11 13:49:26', NULL),
(31, NULL, 'Chandigarh', 1, 0, '', '2020-02-11 13:49:26', NULL),
(32, NULL, 'Dadra and Nagar Haveli', 1, 0, '', '2020-02-11 13:49:26', NULL),
(33, NULL, 'Daman and Diu', 1, 0, '', '2020-02-11 13:49:26', NULL),
(34, NULL, 'Lakshadweep', 1, 0, '', '2020-02-11 13:49:26', NULL),
(35, NULL, 'NCT Delhi', 1, 0, '', '2020-02-11 13:49:26', NULL),
(36, NULL, 'Puducherry', 1, 0, '', '2020-02-11 13:49:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_status`
--

CREATE TABLE `its_status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `pos_id` int(11) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_status`
--

INSERT INTO `its_status` (`id`, `status_name`, `description`, `pos_id`, `is_active`, `is_default`, `ip_address`, `created_by`, `deleted_by`, `deleted_date`, `created_at`, `updated_at`) VALUES
(1, 'Open', 'Here the create ticket', 21, 1, NULL, NULL, 1, NULL, NULL, '2019-12-20 09:07:50', '2019-12-20 09:07:50'),
(2, 'Assigned', 'Assigned to any one', 21, 1, NULL, NULL, 1, NULL, NULL, '2019-12-20 09:09:23', '2019-12-20 09:09:23'),
(3, 'Closed', 'Done the PROCESS', 21, 1, NULL, NULL, 1, NULL, NULL, '2019-12-20 09:10:06', '2019-12-20 09:10:06'),
(4, 'On Hold', 'This is holding', 21, 1, NULL, NULL, 1, NULL, NULL, '2019-12-20 09:10:49', '2019-12-20 09:10:49'),
(5, 'Reopen', 'it Should be reopen', 21, 1, NULL, NULL, 1, NULL, NULL, '2019-12-20 09:11:18', '2019-12-20 09:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `its_subcategory`
--

CREATE TABLE `its_subcategory` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_name` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `pos_id` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `is_default` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_subcategory`
--

INSERT INTO `its_subcategory` (`id`, `category_id`, `subcategory_name`, `description`, `pos_id`, `is_active`, `is_default`, `created_by`, `deleted_by`, `deleted_date`, `created_at`, `updated_at`) VALUES
(1, 11, 'sw', 'all sw requirement', NULL, 1, NULL, NULL, NULL, NULL, '2019-11-20', NULL),
(2, 13, 'subcatone', 'sub cat one', 21, 1, NULL, NULL, NULL, NULL, '2019-12-16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_subdepartment`
--

CREATE TABLE `its_subdepartment` (
  `id` int(11) NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `subdepartment_name` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `pos_id` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_subdepartment`
--

INSERT INTO `its_subdepartment` (`id`, `department_id`, `subdepartment_name`, `description`, `pos_id`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 's/w', 'software desc', 21, 1, NULL, NULL, '2019-12-17 13:21:09', '2019-12-17 13:21:09'),
(2, 1, 'h/w', 'hardware', 21, 1, NULL, NULL, '2019-12-17 13:21:39', '2019-12-17 13:21:39');

-- --------------------------------------------------------

--
-- Table structure for table `its_sub_industries`
--

CREATE TABLE `its_sub_industries` (
  `id` int(11) NOT NULL,
  `sub_industry_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `its_sub_industries`
--

INSERT INTO `its_sub_industries` (`id`, `sub_industry_name`) VALUES
(1, 'gnngf'),
(2, 'gfngf');

-- --------------------------------------------------------

--
-- Table structure for table `its_ticket`
--

CREATE TABLE `its_ticket` (
  `id` int(11) NOT NULL,
  `ticket_id` varchar(50) DEFAULT NULL,
  `request_id` int(11) DEFAULT NULL,
  `technician_id` int(11) DEFAULT NULL,
  `request_type` varchar(50) DEFAULT NULL,
  `status_id` varchar(50) DEFAULT NULL,
  `ticket_mode` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `requester_name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `item` int(11) DEFAULT NULL,
  `impact` varchar(50) DEFAULT NULL,
  `priority` varchar(256) DEFAULT NULL,
  `urgency` int(11) DEFAULT NULL,
  `department_id` varchar(256) DEFAULT NULL,
  `subdepartment_id` int(11) DEFAULT NULL,
  `poc_id` int(11) DEFAULT NULL,
  `assigne_to` int(11) DEFAULT NULL,
  `assigned_by` int(11) DEFAULT NULL,
  `location` int(11) DEFAULT NULL,
  `file_no` varchar(50) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `attachment` varchar(50) DEFAULT NULL,
  `resolution` varchar(1000) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL,
  `deleted_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `resolved_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_ticket`
--

INSERT INTO `its_ticket` (`id`, `ticket_id`, `request_id`, `technician_id`, `request_type`, `status_id`, `ticket_mode`, `level`, `category`, `requester_name`, `email`, `phone`, `subcategory_id`, `item`, `impact`, `priority`, `urgency`, `department_id`, `subdepartment_id`, `poc_id`, `assigne_to`, `assigned_by`, `location`, `file_no`, `due_date`, `subject`, `description`, `attachment`, `resolution`, `ip_address`, `created_by`, `deleted_by`, `deleted_date`, `created_at`, `updated_at`, `resolved_date`) VALUES
(1, '789455', NULL, NULL, 'incident', NULL, NULL, NULL, NULL, 'Firdfdfd', 'amit@gmail.comdfd', '8092181759', NULL, NULL, NULL, NULL, NULL, NULL, 2, 38, 38, 1, NULL, NULL, NULL, NULL, 'this is testdfdfd', NULL, 'dfd', '::1', 1, NULL, NULL, '2019-12-19 13:49:57', '2019-12-24 06:55:09', NULL),
(2, '445454', NULL, NULL, 'incident', NULL, NULL, NULL, NULL, 'amit kumar', 'amit@gmail.com', '8092181759', NULL, NULL, NULL, 'Low', NULL, 'jkjfkjds', NULL, NULL, NULL, NULL, NULL, 'dfdfsd', NULL, NULL, 'sada', '1577532971.css', NULL, '::1', NULL, NULL, NULL, '2019-12-28 11:36:11', NULL, NULL),
(3, '445454', NULL, NULL, 'incident', NULL, NULL, NULL, NULL, 'amit kumar', 'amit@gmail.com', '8092181759', NULL, NULL, NULL, 'Low', NULL, 'jkjfkjds', NULL, NULL, NULL, NULL, NULL, 'dfdfsd', NULL, NULL, 'sada', '1577533073.css', NULL, '::1', NULL, NULL, NULL, '2019-12-28 11:37:53', NULL, NULL),
(4, '445454', NULL, NULL, 'request_for_information', NULL, NULL, NULL, NULL, 'rohit', 'rohit@gmail.com', '7903609225', NULL, NULL, NULL, 'Low', NULL, NULL, NULL, NULL, 1, 1, NULL, '565656', NULL, NULL, 'hghgh', '1577535374.txt', NULL, '::1', 1, NULL, NULL, '2019-12-28 12:16:14', NULL, NULL),
(5, '555555555555', NULL, NULL, 'request_for_information', NULL, NULL, NULL, NULL, 'Raj', 'raj@gmail.com', '8092181759', NULL, NULL, NULL, 'Medium', NULL, NULL, NULL, NULL, 1, 1, NULL, 'dfdfsd', NULL, NULL, 'dsfs', '1577535557.txt', NULL, '::1', 1, NULL, NULL, '2019-12-28 12:19:17', NULL, NULL),
(6, '88888888888', NULL, NULL, 'service_request', '2', NULL, NULL, NULL, 'Shivani', 'Shiavni@gmail.com', '7903658655', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 38, 38, 1, NULL, NULL, '2019-12-03', NULL, '88888888888888', NULL, NULL, '::1', 1, NULL, NULL, '2019-12-28 12:25:30', NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dddddddddddddddd', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ddddddddddddddddddd\r\nd\r\nd\r\nd\r\nd\r\nd\r\nd', '1578383854.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 07:57:34', NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dddddddddddddddd', 'ffffffffff@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dddddddddddddddd', '1578387015.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 08:50:15', NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dddddddddddddddd', 'ffffffffff@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dddddddddddddddd', '1578387250.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 08:54:10', NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'iiiiiiiiiii', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'iiiiiiiiiiiiiiii', '1578387378.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 08:56:18', NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ggggggggggggggggg', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gggggggggg', '1578390082.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 09:41:22', NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ggggggggggg', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gggggggggggg', '1578390141.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 09:42:21', NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hhhhhhhhhhhh', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hhhhhhhhhhhhh', '1578390192.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 09:43:12', NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkkkk', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkk', '1578390362.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 09:46:02', NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkkkk', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkk', '1578390371.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 09:46:11', NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkkkk', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkk', '1578390405.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 09:46:45', NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkkkk', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkk', '1578390879.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 09:54:39', NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkkkk', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkk', '1578390900.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 09:55:00', NULL, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkkkk', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkk', '1578390950.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 09:55:50', NULL, NULL),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkkkk', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkk', '1578391102.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 09:58:22', NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkkkk', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkk', '1578391127.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 09:58:47', NULL, NULL),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkkkk', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkk', '1578391157.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 09:59:17', NULL, NULL),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkkkk', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkk', '1578391334.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 10:02:14', NULL, NULL),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkkkk', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkkkkkk', '1578391411.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 10:03:31', NULL, NULL),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lllllllllllllllll', 'amit@gmail.coml', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'llllllllllllllllll', '1578391948.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 10:12:28', NULL, NULL),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aaaaaaaaaaaaa', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aaaaaaaaaaa', '1578392500.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 10:21:40', NULL, NULL),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aaaaaaaaaaaaa', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aaaaaaaaaaa', '1578392521.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 10:22:01', NULL, NULL),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aaaaaaaaaaaaa', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aaaaaaaaaaa', '1578392709.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 10:25:09', NULL, NULL),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jjjjjjjjjjj', 'jjjjjjjjjjj@gmail.com', '554545454', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dfdfdf', '1578393008.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 10:30:08', NULL, NULL),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jjjjjjjjjjj', 'jjjjjjjjjjj@gmail.com', '554545454', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dfdfdf', '1578393014.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 10:30:14', NULL, NULL),
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jjjjjjjjjjj', 'jjjjjjjjjjj@gmail.com', '554545454', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dfdfdf', '1578393020.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 10:30:20', NULL, NULL),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nnnnnnnnnnnnn', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nnnnnnnnnnnnnn', '1578393364.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 10:36:04', NULL, NULL),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nnnnnnnnnnnnn', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nnnnnnnnnnnnnn', '1578393432.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 10:37:12', NULL, NULL),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nnnnnnnnnnnnn', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nnnnnnnnnnnnnn', '1578393466.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 10:37:46', NULL, NULL),
(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hqqqqqqqqqqqqq', 'amit@gmail.com', '08092181759', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'qqqqqqqqqqqqqq', '1578393665.png', NULL, '::1', NULL, NULL, NULL, '2020-01-07 10:41:05', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_ticket_file`
--

CREATE TABLE `its_ticket_file` (
  `id` int(11) NOT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `attachment` varchar(50) DEFAULT NULL,
  `file_name` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `its_ticket_history`
--

CREATE TABLE `its_ticket_history` (
  `id` int(11) NOT NULL,
  `assigned_by` int(11) DEFAULT NULL,
  `assigned_to` int(11) DEFAULT NULL,
  `ticket_id` int(11) NOT NULL,
  `ticket_description` text NOT NULL,
  `assigned_date` date NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_ticket_history`
--

INSERT INTO `its_ticket_history` (`id`, `assigned_by`, `assigned_to`, `ticket_id`, `ticket_description`, `assigned_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 38, 1, '', '2019-12-19', NULL, '2019-12-19 13:49:57', NULL),
(2, 1, 38, 1, '', '2019-12-24', NULL, '2019-12-24 06:55:09', NULL),
(3, NULL, NULL, 3, 'sada', '2019-12-28', NULL, '2019-12-28 11:37:53', NULL),
(4, 1, 1, 4, 'hghgh', '2019-12-28', NULL, '2019-12-28 12:16:14', NULL),
(5, 1, 1, 5, 'dsfs', '2019-12-28', NULL, '2019-12-28 12:19:17', NULL),
(6, 1, 38, 6, '88888888888888', '2019-12-28', NULL, '2019-12-28 12:25:30', NULL),
(7, NULL, NULL, 7, 'ddddddddddddddddddd\r\nd\r\nd\r\nd\r\nd\r\nd\r\nd', '2020-01-07', NULL, '2020-01-07 07:57:34', NULL),
(8, NULL, NULL, 9, 'dddddddddddddddd', '2020-01-07', NULL, '2020-01-07 08:54:10', NULL),
(9, NULL, NULL, 10, 'iiiiiiiiiiiiiiii', '2020-01-07', NULL, '2020-01-07 08:56:18', NULL),
(10, NULL, NULL, 11, 'gggggggggg', '2020-01-07', NULL, '2020-01-07 09:41:23', NULL),
(11, NULL, NULL, 12, 'gggggggggggg', '2020-01-07', NULL, '2020-01-07 09:42:21', NULL),
(12, NULL, NULL, 13, 'hhhhhhhhhhhhh', '2020-01-07', NULL, '2020-01-07 09:43:12', NULL),
(13, NULL, NULL, 14, 'kkkkkkkkk', '2020-01-07', NULL, '2020-01-07 09:46:02', NULL),
(14, NULL, NULL, 15, 'kkkkkkkkk', '2020-01-07', NULL, '2020-01-07 09:46:11', NULL),
(15, NULL, NULL, 16, 'kkkkkkkkk', '2020-01-07', NULL, '2020-01-07 09:46:45', NULL),
(16, NULL, NULL, 17, 'kkkkkkkkk', '2020-01-07', NULL, '2020-01-07 09:54:39', NULL),
(17, NULL, NULL, 18, 'kkkkkkkkk', '2020-01-07', NULL, '2020-01-07 09:55:00', NULL),
(18, NULL, NULL, 19, 'kkkkkkkkk', '2020-01-07', NULL, '2020-01-07 09:55:51', NULL),
(19, NULL, NULL, 20, 'kkkkkkkkk', '2020-01-07', NULL, '2020-01-07 09:58:22', NULL),
(20, NULL, NULL, 21, 'kkkkkkkkk', '2020-01-07', NULL, '2020-01-07 09:58:47', NULL),
(21, NULL, NULL, 22, 'kkkkkkkkk', '2020-01-07', NULL, '2020-01-07 09:59:17', NULL),
(22, NULL, NULL, 23, 'kkkkkkkkk', '2020-01-07', NULL, '2020-01-07 10:02:14', NULL),
(23, NULL, NULL, 24, 'kkkkkkkkk', '2020-01-07', NULL, '2020-01-07 10:03:31', NULL),
(24, NULL, NULL, 25, 'llllllllllllllllll', '2020-01-07', NULL, '2020-01-07 10:12:28', NULL),
(25, NULL, NULL, 26, 'aaaaaaaaaaa', '2020-01-07', NULL, '2020-01-07 10:21:40', NULL),
(26, NULL, NULL, 27, 'aaaaaaaaaaa', '2020-01-07', NULL, '2020-01-07 10:22:01', NULL),
(27, NULL, NULL, 28, 'aaaaaaaaaaa', '2020-01-07', NULL, '2020-01-07 10:25:09', NULL),
(28, NULL, NULL, 29, 'dfdfdf', '2020-01-07', NULL, '2020-01-07 10:30:08', NULL),
(29, NULL, NULL, 30, 'dfdfdf', '2020-01-07', NULL, '2020-01-07 10:30:14', NULL),
(30, NULL, NULL, 31, 'dfdfdf', '2020-01-07', NULL, '2020-01-07 10:30:20', NULL),
(31, NULL, NULL, 32, 'nnnnnnnnnnnnnn', '2020-01-07', NULL, '2020-01-07 10:36:04', NULL),
(32, NULL, NULL, 33, 'nnnnnnnnnnnnnn', '2020-01-07', NULL, '2020-01-07 10:37:12', NULL),
(33, NULL, NULL, 34, 'nnnnnnnnnnnnnn', '2020-01-07', NULL, '2020-01-07 10:37:46', NULL),
(34, NULL, NULL, 35, 'qqqqqqqqqqqqqq', '2020-01-07', NULL, '2020-01-07 10:41:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_uom`
--

CREATE TABLE `its_uom` (
  `id` int(11) NOT NULL,
  `uom_name` varchar(255) DEFAULT NULL,
  `uom_description` varchar(255) DEFAULT NULL,
  `uom_type` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_uom`
--

INSERT INTO `its_uom` (`id`, `uom_name`, `uom_description`, `uom_type`, `status`, `created_at`, `created_by`, `updated_by`) VALUES
(4, 'Kg', 'Kilogram', 'Material', 1, '2020-02-10', 1, 1),
(5, 'LB', 'Pound', 'Land', 1, '2020-02-10', 1, 1),
(6, 'GAL', 'Gallon', 'Land', 1, '2020-02-10', 1, 1),
(7, 'ML', 'Milliliter', 'Land', 1, '2020-02-10', 1, 1),
(8, 'W', 'Watt', NULL, 1, '2020-02-10', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_uom_table`
--

CREATE TABLE `its_uom_table` (
  `id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `uom_type` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_short_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_plural_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_plural_shortname` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stauts` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci,
  `created_at` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_uom_table`
--

INSERT INTO `its_uom_table` (`id`, `org_id`, `type_id`, `uom_type`, `unit_name`, `unit_short_name`, `unit_plural_name`, `unit_plural_shortname`, `stauts`, `description`, `created_at`, `updated_at`, `modified_by`, `created_by`) VALUES
(1, 1, 1, 'number', 'unit', 'mt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 1, 'number', 'piece', 'mt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 2, 'length', 'meter', 'mt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 1, 2, 'length', 'inch', 'inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 1, 6, 'time', 'days', 'd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 1, 6, 'time', 'month', 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 1, 6, 'time', 'week', 'w', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 1, 6, 'time', 'yaer', 'y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 1, 3, 'Area', 'Square Meter', 'am', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 1, 3, 'Area', 'Square Inch', 'si', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 1, 3, 'Area', 'Square feet', 'sf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 1, 3, 'Area', 'Acre', 'ar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 1, 3, 'Area', 'Hectare', 'ar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 1, 5, 'weight', 'Gram', 'g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 1, 5, 'weight', 'Pound', 'p', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 1, 5, 'weight', 'Quintol', 'q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 1, 5, 'weight', 'Tonne', 't', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 1, 4, 'volume', 'Litre', 'lt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 1, 4, 'volume', 'Gallon', 'gl', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 1, 4, 'volume', 'Cubic Feet', 'cf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 1, 4, 'volume', 'Cubic Meter', 'cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 1, 1, 'number', 'Dozen', 'dz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 1, 1, 'number', 'Gross', 'gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 1, 2, 'length', 'foot', 'ft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 1, 2, 'length', 'yard', 'yd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_uom_type`
--

CREATE TABLE `its_uom_type` (
  `id` int(11) NOT NULL,
  `uom_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `modified_by` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_uom_type`
--

INSERT INTO `its_uom_type` (`id`, `uom_type`, `created_at`, `status`, `created_by`, `modified_by`) VALUES
(1, 'number', '2019-08-16 17:37:18', 0, '', ''),
(2, 'length', '2019-08-16 17:37:18', 0, '', ''),
(3, 'area', '2019-08-16 17:37:18', 0, '', ''),
(4, 'volume', '2019-08-16 17:37:18', 0, '', ''),
(5, 'weight', '2019-08-16 17:37:18', 0, '', ''),
(6, 'time', '2019-08-16 17:37:18', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `its_users`
--

CREATE TABLE `its_users` (
  `id` int(11) NOT NULL,
  `users_role` int(11) DEFAULT NULL,
  `users_type` int(11) DEFAULT NULL COMMENT '''1'' Employee',
  `parent_id` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `username` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` bigint(111) DEFAULT NULL,
  `address` mediumtext COLLATE utf8_unicode_ci,
  `designation` text COLLATE utf8_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token_expire` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '''0'' Inactive , ''1'' Active',
  `generic_id` int(22) NOT NULL DEFAULT '0',
  `user_image` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_deleted` int(11) DEFAULT '0' COMMENT '''1'' =>delete',
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_date` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_users`
--

INSERT INTO `its_users` (`id`, `users_role`, `users_type`, `parent_id`, `emp_id`, `username`, `name`, `password`, `email`, `phone`, `address`, `designation`, `email_verified_at`, `remember_token`, `token_expire`, `status`, `generic_id`, `user_image`, `is_deleted`, `deleted_by`, `deleted_date`, `ip_address`, `modified_date`, `created_at`, `updated_at`, `created_date`, `last_login`) VALUES
(1, 1, 0, 0, 0, 'admin', 'ITSCIENT', '$2a$08$TnLUue010iZQcUVL.b0bPeCaFvVqa221s0MmNopcnzeIg4q4jjxQa', 'amitrajput270@gmail.com', 7409969352, 'Noida 63', NULL, NULL, 'Z2E8jGUCCShUZ7PifWSmHKNg6NvHuof8TCUYlzPF3dxBvktjJzAXW5Zu7fiY', NULL, 0, 0, 'neha.jpg', 0, 0, NULL, '', '2020-02-18 13:48:14', '2019-06-28 09:27:00', '2019-06-28 09:27:00', NULL, NULL),
(41, 2, NULL, NULL, NULL, 'raj', 'Raj', '$2y$10$kziteB7S5wg7pMVLPE9pHetKqfZMqiYNGLMfNL/T9XPESwpxzWB72', 'amit2019.itscient@gmail.com', 7903609225, NULL, 'Web Dev', NULL, NULL, NULL, 1, 0, NULL, 0, NULL, NULL, NULL, '2020-02-10 12:29:45', '2020-02-10 23:59:45', '2020-02-10 23:59:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_user_permission`
--

CREATE TABLE `its_user_permission` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `employer_id` int(11) DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  `permission_value` varchar(255) NOT NULL,
  `is_add` enum('yes','no') NOT NULL DEFAULT 'no',
  `is_edit` enum('yes','no') NOT NULL DEFAULT 'no',
  `is_delete` enum('yes','no') NOT NULL DEFAULT 'no',
  `is_read` enum('yes','no') NOT NULL DEFAULT 'no',
  `is_system_admin` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_user_permission`
--

INSERT INTO `its_user_permission` (`ID`, `user_id`, `employer_id`, `company_id`, `permission_value`, `is_add`, `is_edit`, `is_delete`, `is_read`, `is_system_admin`) VALUES
(1, 41, 1, 1, '1', 'no', 'no', 'no', 'yes', 'no'),
(2, 41, 1, 1, '2', 'no', 'no', 'no', 'yes', 'no'),
(3, 41, 1, 1, '3', 'no', 'no', 'no', 'yes', 'no'),
(4, 41, 1, 1, '4', 'no', 'no', 'no', 'yes', 'no'),
(5, 41, 1, 1, '5', 'no', 'no', 'no', 'yes', 'no'),
(6, 41, 1, 1, '6', 'no', 'no', 'no', 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `its_waste_materials`
--

CREATE TABLE `its_waste_materials` (
  `id` int(11) NOT NULL,
  `waste_materials` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `its_waste_materials`
--

INSERT INTO `its_waste_materials` (`id`, `waste_materials`) VALUES
(1, 'nbvnv'),
(2, 'vcbvc');

-- --------------------------------------------------------

--
-- Table structure for table `its_web_contact`
--

CREATE TABLE `its_web_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Phone` varchar(256) NOT NULL,
  `Message` text NOT NULL,
  `Sent_mail_id` varchar(256) NOT NULL,
  `created_by` varchar(12) NOT NULL,
  `created_at` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_web_contact`
--

INSERT INTO `its_web_contact` (`id`, `name`, `Email`, `Phone`, `Message`, `Sent_mail_id`, `created_by`, `created_at`) VALUES
(1, '', 'amit@gmail.com', '8092181759', '', 'sumit@itscient.com,amit2019.itscient@gmail.com', '', '2019-12-28'),
(2, '', 'amit@gmail.com', '8092181759', '', 'sumit@itscient.com,amit2019.itscient@gmail.com', '', '2019-12-28'),
(3, 'dsfsdf', 'amit@gmail.com', '8092181759', 'dfsdfsdf', 'sumit@itscient.com,amit2019.itscient@gmail.com', 'dsfsdf', '2019-12-28'),
(4, 'amit kumar', 'amit@gmail.com', '8092181759', 'dfsdsdfsd', 'amit2019.itscient@gmail.com', 'amit kumar', '2019-12-28'),
(5, 'amit kumar', 'amit@gmail.com', '8092181759', 'dfsdsdfsd', 'amit2019.itscient@gmail.com', 'amit kumar', '2019-12-28'),
(6, 'amit kumar', 'amit@gmail.com', '8092181759', 'dfsdsdfsd', 'amit2019.itscient@gmail.com', 'amit kumar', '2019-12-28'),
(7, 'amit kumar', 'amit@gmail.com', '8092181759', 'dfsdsdfsd', 'amit2019.itscient@gmail.com', 'amit kumar', '2019-12-28'),
(8, 'amit kumar', 'amit@gmail.com', '8092181759', 'dfsdsdfsd', 'amit2019.itscient@gmail.com', 'amit kumar', '2019-12-28'),
(9, 'amit kumar', 'amit@gmail.com', '8092181759', 'dfsdsdfsd', 'amit2019.itscient@gmail.com', 'amit kumar', '2019-12-28'),
(10, 'amit kumar', 'amit@gmail.com', '8092181759', 'dfsdsdfsd', 'amit2019.itscient@gmail.com', 'amit kumar', '2019-12-28'),
(11, 'amit kumar', 'amit@gmail.com', '8092181759', 'dfsdsdfsd', 'amit2019.itscient@gmail.com', 'amit kumar', '2019-12-28'),
(12, 'amit kumar', 'amit@gmail.com', '8092181759', 'dfsdsdfsd', 'amit2019.itscient@gmail.com', 'amit kumar', '2019-12-28'),
(13, 'amit kumar', 'amit@gmail.com', '8092181759', 'dfdfd', 'amit2019.itscient@gmail.com', 'amit kumar', '2019-12-28'),
(14, 'amit kumar', 'amit@gmail.com', '8092181759', 'dfdfd', 'amit2019.itscient@gmail.com', 'amit kumar', '2019-12-28'),
(15, 'amit kumar', 'amit@gmail.com', '8092181759', 'dfdfd', 'amit2019.itscient@gmail.com', 'amit kumar', '2019-12-28'),
(16, 'amit kumar', 'amit@gmail.com', '8092181759', 'dfdfd', 'amit2019.itscient@gmail.com', 'amit kumar', '2019-12-28'),
(17, 'amit kumar', 'amit@gmail.com', '8092181759', 'dfdfd', 'amit2019.itscient@gmail.com', 'amit kumar', '2019-12-28'),
(18, 'Abhishek', 'abhishek@gmail.com', '8092181759', 'fdd\r\nThis is test Contact', 'amit2019.itscient@gmail.com', 'Abhishek', '2019-12-28'),
(19, 'Abhishek', 'abhi966141shek@gmail.com', '8554545454', 'This test Forwards', 'amit2019.itscient@gmail.com', 'Abhishek', '2019-12-28'),
(20, '', 'amit@gmail.com', '08092181759', '', 'amit2019.itscient@gmail.com', '', '2020-01-06'),
(21, '', 'amit@gmail.com', '08092181759', '', 'amit2019.itscient@gmail.com', '', '2020-01-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `its_category`
--
ALTER TABLE `its_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_cities`
--
ALTER TABLE `its_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_company_product`
--
ALTER TABLE `its_company_product`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `its_company_services`
--
ALTER TABLE `its_company_services`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `its_company_types`
--
ALTER TABLE `its_company_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_conversion`
--
ALTER TABLE `its_conversion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_convertions`
--
ALTER TABLE `its_convertions`
  ADD PRIMARY KEY (`convertions_id`);

--
-- Indexes for table `its_countries`
--
ALTER TABLE `its_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_customers`
--
ALTER TABLE `its_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_customer_company`
--
ALTER TABLE `its_customer_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_departments`
--
ALTER TABLE `its_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_entity_master`
--
ALTER TABLE `its_entity_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_fst`
--
ALTER TABLE `its_fst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_history_inv_item`
--
ALTER TABLE `its_history_inv_item`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `its_history_shipment`
--
ALTER TABLE `its_history_shipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_industries`
--
ALTER TABLE `its_industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_input_details`
--
ALTER TABLE `its_input_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_inventory_location`
--
ALTER TABLE `its_inventory_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_inv_item`
--
ALTER TABLE `its_inv_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_item`
--
ALTER TABLE `its_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_lands`
--
ALTER TABLE `its_lands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_leasedata`
--
ALTER TABLE `its_leasedata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_lease_invoice`
--
ALTER TABLE `its_lease_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_locationusers`
--
ALTER TABLE `its_locationusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_location_block`
--
ALTER TABLE `its_location_block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_location_phase`
--
ALTER TABLE `its_location_phase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_location_zone`
--
ALTER TABLE `its_location_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_manage_pcc_action`
--
ALTER TABLE `its_manage_pcc_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_manufacturing_details`
--
ALTER TABLE `its_manufacturing_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_materials`
--
ALTER TABLE `its_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_module`
--
ALTER TABLE `its_module`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `its_org`
--
ALTER TABLE `its_org`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_organization`
--
ALTER TABLE `its_organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_org_contact_type`
--
ALTER TABLE `its_org_contact_type`
  ADD PRIMARY KEY (`org_contact_type_id`);

--
-- Indexes for table `its_org_designation`
--
ALTER TABLE `its_org_designation`
  ADD PRIMARY KEY (`org_designation_id`);

--
-- Indexes for table `its_org_relation`
--
ALTER TABLE `its_org_relation`
  ADD PRIMARY KEY (`org_relation_id`);

--
-- Indexes for table `its_password_resets`
--
ALTER TABLE `its_password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `its_password_resets_email_index` (`email`);

--
-- Indexes for table `its_pccdata`
--
ALTER TABLE `its_pccdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_pcc_agenda_final_save`
--
ALTER TABLE `its_pcc_agenda_final_save`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_pcc_enitity_record`
--
ALTER TABLE `its_pcc_enitity_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_pcc_master`
--
ALTER TABLE `its_pcc_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_priority_levels`
--
ALTER TABLE `its_priority_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_product`
--
ALTER TABLE `its_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_service`
--
ALTER TABLE `its_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_service_type`
--
ALTER TABLE `its_service_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_shareholders`
--
ALTER TABLE `its_shareholders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_shipment`
--
ALTER TABLE `its_shipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_sst`
--
ALTER TABLE `its_sst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_state`
--
ALTER TABLE `its_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_status`
--
ALTER TABLE `its_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_subcategory`
--
ALTER TABLE `its_subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_subdepartment`
--
ALTER TABLE `its_subdepartment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_sub_industries`
--
ALTER TABLE `its_sub_industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_ticket`
--
ALTER TABLE `its_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_ticket_file`
--
ALTER TABLE `its_ticket_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_ticket_history`
--
ALTER TABLE `its_ticket_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_uom`
--
ALTER TABLE `its_uom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_uom_table`
--
ALTER TABLE `its_uom_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_uom_type`
--
ALTER TABLE `its_uom_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_users`
--
ALTER TABLE `its_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_user_permission`
--
ALTER TABLE `its_user_permission`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `its_waste_materials`
--
ALTER TABLE `its_waste_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_web_contact`
--
ALTER TABLE `its_web_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `its_category`
--
ALTER TABLE `its_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `its_company_product`
--
ALTER TABLE `its_company_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `its_company_services`
--
ALTER TABLE `its_company_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `its_company_types`
--
ALTER TABLE `its_company_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `its_conversion`
--
ALTER TABLE `its_conversion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `its_convertions`
--
ALTER TABLE `its_convertions`
  MODIFY `convertions_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_countries`
--
ALTER TABLE `its_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_customers`
--
ALTER TABLE `its_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `its_customer_company`
--
ALTER TABLE `its_customer_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `its_departments`
--
ALTER TABLE `its_departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `its_entity_master`
--
ALTER TABLE `its_entity_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `its_fst`
--
ALTER TABLE `its_fst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `its_history_inv_item`
--
ALTER TABLE `its_history_inv_item`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `its_history_shipment`
--
ALTER TABLE `its_history_shipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `its_industries`
--
ALTER TABLE `its_industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `its_input_details`
--
ALTER TABLE `its_input_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_inventory_location`
--
ALTER TABLE `its_inventory_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `its_inv_item`
--
ALTER TABLE `its_inv_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `its_item`
--
ALTER TABLE `its_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `its_lands`
--
ALTER TABLE `its_lands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `its_leasedata`
--
ALTER TABLE `its_leasedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `its_lease_invoice`
--
ALTER TABLE `its_lease_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `its_locationusers`
--
ALTER TABLE `its_locationusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `its_location_block`
--
ALTER TABLE `its_location_block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `its_location_phase`
--
ALTER TABLE `its_location_phase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `its_location_zone`
--
ALTER TABLE `its_location_zone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `its_manage_pcc_action`
--
ALTER TABLE `its_manage_pcc_action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `its_manufacturing_details`
--
ALTER TABLE `its_manufacturing_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `its_materials`
--
ALTER TABLE `its_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_module`
--
ALTER TABLE `its_module`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `its_org`
--
ALTER TABLE `its_org`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `its_organization`
--
ALTER TABLE `its_organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `its_org_contact_type`
--
ALTER TABLE `its_org_contact_type`
  MODIFY `org_contact_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `its_org_designation`
--
ALTER TABLE `its_org_designation`
  MODIFY `org_designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `its_org_relation`
--
ALTER TABLE `its_org_relation`
  MODIFY `org_relation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `its_password_resets`
--
ALTER TABLE `its_password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `its_pccdata`
--
ALTER TABLE `its_pccdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `its_pcc_agenda_final_save`
--
ALTER TABLE `its_pcc_agenda_final_save`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `its_pcc_enitity_record`
--
ALTER TABLE `its_pcc_enitity_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `its_pcc_master`
--
ALTER TABLE `its_pcc_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `its_priority_levels`
--
ALTER TABLE `its_priority_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `its_product`
--
ALTER TABLE `its_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `its_service`
--
ALTER TABLE `its_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `its_service_type`
--
ALTER TABLE `its_service_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `its_shareholders`
--
ALTER TABLE `its_shareholders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `its_shipment`
--
ALTER TABLE `its_shipment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `its_sst`
--
ALTER TABLE `its_sst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `its_state`
--
ALTER TABLE `its_state`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `its_status`
--
ALTER TABLE `its_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `its_subcategory`
--
ALTER TABLE `its_subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_subdepartment`
--
ALTER TABLE `its_subdepartment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_sub_industries`
--
ALTER TABLE `its_sub_industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_ticket`
--
ALTER TABLE `its_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `its_ticket_file`
--
ALTER TABLE `its_ticket_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `its_ticket_history`
--
ALTER TABLE `its_ticket_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `its_uom`
--
ALTER TABLE `its_uom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `its_uom_table`
--
ALTER TABLE `its_uom_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `its_uom_type`
--
ALTER TABLE `its_uom_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `its_users`
--
ALTER TABLE `its_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `its_user_permission`
--
ALTER TABLE `its_user_permission`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `its_waste_materials`
--
ALTER TABLE `its_waste_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_web_contact`
--
ALTER TABLE `its_web_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
