-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2025 at 08:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deals`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Per Campaign', '2023-12-05 09:29:09', '2023-12-05 09:29:09'),
(3, 'for another task', '2023-12-05 10:40:11', '2023-12-05 10:40:11'),
(4, 'Contact Influencer', '2023-12-05 10:40:49', '2023-12-05 10:40:49'),
(6, 'per message', '2024-06-18 06:24:27', '2024-06-18 06:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `admincategories`
--

CREATE TABLE `admincategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `iconPath` varchar(255) DEFAULT NULL,
  `isBusiness` varchar(255) NOT NULL,
  `isFestival` varchar(255) NOT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `sequence` int(255) DEFAULT 10,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admincategories`
--

INSERT INTO `admincategories` (`id`, `name`, `iconPath`, `isBusiness`, `isFestival`, `startDate`, `endDate`, `sequence`, `created_at`, `updated_at`) VALUES
(5, 'Good Night', '1677914649.jpg', 'no', 'no', NULL, NULL, 10, '2022-12-13 05:54:19', '2023-03-04 01:54:09'),
(13, 'Technology', '1673517022.webp', 'yes', 'no', NULL, NULL, NULL, '2022-12-28 18:29:59', '2023-01-12 15:50:22'),
(15, 'Doctor', '1673518957.jpg', 'yes', 'no', NULL, NULL, NULL, '2022-12-30 18:23:58', '2023-01-12 16:22:37'),
(16, 'Advocate', '1673417525.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 12:47:04', '2023-01-11 12:12:05'),
(17, 'Agarbatti', '1673417940.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 12:51:07', '2023-01-11 12:19:00'),
(18, 'Agriculture', '1673418286.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 12:51:36', '2023-01-11 12:24:46'),
(19, 'Animal Food', '1673418695.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 12:51:56', '2023-01-11 12:31:35'),
(20, 'Architect', '1673418847.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 12:52:19', '2023-01-11 12:34:07'),
(21, 'Art and Craft', '1677914758.jpg', 'no', 'no', NULL, NULL, 10, '2023-01-03 12:52:51', '2023-03-04 01:55:58'),
(22, 'Astrologer', '1673419288.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 12:53:27', '2023-01-11 12:41:28'),
(23, 'Automobile', '1673419566.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 12:53:46', '2023-01-11 12:46:06'),
(24, 'Ayurvedic', '1673420061.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 12:54:21', '2023-01-11 12:54:21'),
(25, 'Baby Care Product', '1673420188.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 12:54:38', '2023-01-11 12:56:28'),
(26, 'Bag', '1673420326.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 12:55:31', '2023-01-11 12:58:46'),
(27, 'Bakery and Cake', '1673420654.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 12:58:00', '2023-01-11 13:04:14'),
(28, 'Bathroom Accessories', '1673420811.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 12:58:56', '2023-01-11 13:06:51'),
(29, 'Beauty parlor and salon', '1673421163.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 12:59:42', '2023-01-11 13:12:43'),
(30, 'Bicycle', '1673425017.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 12:59:55', '2023-01-11 14:16:57'),
(31, 'Building Chemical', '1673425192.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:00:15', '2023-01-11 14:19:52'),
(32, 'Building Material', '1673425506.png', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:02:33', '2023-01-11 14:25:06'),
(34, 'Business Opportunities', '1673428327.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:05:23', '2023-01-11 15:12:07'),
(35, 'Camera', '1673428529.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:06:34', '2023-01-11 15:15:29'),
(36, 'Camping & Tracking', '1673428638.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:06:57', '2023-01-11 15:17:18'),
(37, 'Ceramic', '1673428765.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:07:23', '2023-01-11 15:19:25'),
(38, 'Chartered Accountant', '1673428940.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:08:00', '2023-01-11 15:22:20'),
(39, 'Chemical', '1673429040.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:08:22', '2023-01-11 15:24:00'),
(40, 'Clothes', '1673429308.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:08:41', '2023-01-11 15:28:28'),
(41, 'Coal & Gas', '1673429900.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:09:02', '2023-01-11 15:38:20'),
(42, 'Cold Storage', '1673430036.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:09:30', '2023-01-11 15:40:36'),
(43, 'Company Secretary', '1673430184.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:09:50', '2023-01-11 15:43:04'),
(44, 'Computer Hardware', '1673430571.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:10:10', '2023-01-11 15:49:31'),
(45, 'Consultant', '1673430702.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:10:31', '2023-01-11 15:51:42'),
(46, 'Cosmetic', '1673430800.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:10:49', '2023-01-11 15:53:20'),
(47, 'Crackers Shop', '1673430968.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:11:05', '2023-01-11 15:56:08'),
(48, 'CSC', '1673431069.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:11:22', '2023-01-11 15:57:49'),
(49, 'Dairy & Sweets', '1673431378.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:11:39', '2023-01-11 16:02:58'),
(50, 'Dance', '1673431514.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:11:55', '2023-01-11 16:05:14'),
(51, 'Decorator', '1673431727.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:12:39', '2023-01-11 16:08:47'),
(52, 'Diamond', '1673431832.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:13:09', '2023-01-11 16:10:32'),
(53, 'Disposable Items', '1673431918.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:13:28', '2023-01-11 16:11:58'),
(54, 'Driving School', '1673432176.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:13:51', '2023-01-11 16:16:16'),
(56, 'Dry Cleaners', '1673432505.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:14:38', '2023-01-11 16:21:45'),
(57, 'Education', '1673432627.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:15:11', '2023-01-11 16:23:47'),
(58, 'Electrical', '1673432787.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:15:31', '2023-01-11 16:26:27'),
(59, 'Elevator', '1673432886.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:15:56', '2023-01-11 16:28:06'),
(60, 'Events', '1673433021.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:16:11', '2023-01-11 16:30:21'),
(61, 'Fabrication', '1673433137.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:16:27', '2023-01-11 16:32:17'),
(62, 'Fashion & Lifestyle', '1675325821.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:16:49', '2023-02-02 03:05:40'),
(63, 'Finance', '1673433486.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:17:12', '2023-01-11 16:38:06'),
(64, 'Fire Safety', '1673433692.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:17:42', '2023-01-11 16:41:32'),
(65, 'Fitness & Nutrition', '1673433810.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:18:14', '2023-01-11 16:43:30'),
(66, 'Flower', '1673433942.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:18:36', '2023-01-11 16:45:42'),
(67, 'FMCG and Grocery', '1673434164.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:18:53', '2023-01-11 16:49:24'),
(68, 'Footwear', '1673434338.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:19:16', '2023-01-11 16:52:18'),
(69, 'Forensic', '1673435450.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:19:34', '2023-01-11 17:10:50'),
(70, 'Fruits and Vegetables', '1673436055.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:19:50', '2023-01-11 17:20:55'),
(71, 'Fun & Masti', '1673436271.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:20:08', '2023-01-11 17:24:31'),
(72, 'Furniture', '1673436535.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:20:40', '2023-01-11 17:28:55'),
(73, 'Gift and Articles', '1673436693.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:21:08', '2023-01-11 17:31:33'),
(74, 'Glass & Hardware', '1673436881.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:21:24', '2023-01-11 17:34:41'),
(75, 'Goggles & Spectacles', '1673436996.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:21:46', '2023-01-11 17:36:36'),
(76, 'Graphic Designing', '1673437116.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:22:17', '2023-01-11 17:38:36'),
(77, 'Gruh Udhyog', '1673437252.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:23:27', '2023-01-11 17:40:52'),
(78, 'GYM and Yoga', '1673437361.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:23:44', '2023-01-11 17:42:41'),
(79, 'Handloom', '1673438869.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:24:19', '2023-01-11 18:07:49'),
(80, 'Hardware', '1673439365.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:24:34', '2023-01-11 18:16:05'),
(81, 'Home Appliances', '1673439470.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:24:55', '2023-01-11 18:17:50'),
(82, 'Home Automation', '1673439586.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:25:29', '2023-01-11 18:19:46'),
(83, 'Homeopathy', '1673439720.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:25:49', '2023-01-11 18:22:00'),
(84, 'Hospital and Clinic', '1673440139.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:26:09', '2023-01-11 18:28:59'),
(85, 'Hostel', '1673439986.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 13:26:54', '2023-01-11 18:26:26'),
(86, 'Hotel', '1673440229.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:20:12', '2023-01-11 18:30:29'),
(87, 'House Cleaning Services', '1673440474.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:20:32', '2023-01-11 18:34:34'),
(88, 'Immigration & Visa Consultants', '1673440708.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:20:57', '2023-01-11 18:38:28'),
(89, 'Import Export', '1673440816.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:22:15', '2023-01-11 18:40:16'),
(90, 'Indian Oil Corporation', '1673440941.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:22:36', '2023-01-11 18:42:21'),
(91, 'Industrial Equipment', '1673441108.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:23:04', '2023-01-11 18:45:08'),
(92, 'Information Technology', '1673441178.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:23:25', '2023-01-11 18:46:18'),
(93, 'Insurance', '1673441448.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:23:43', '2023-01-11 18:50:48'),
(94, 'Interior', '1673441531.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:23:59', '2023-01-11 18:52:11'),
(95, 'Internet Broadband', '1673441579.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:24:30', '2023-01-11 18:52:59'),
(96, 'Investment', '1673441650.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:24:58', '2023-01-11 18:54:10'),
(97, 'Janata Dal (United)', '1673441710.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:26:10', '2023-01-11 18:55:10'),
(98, 'Jewellery', '1673441960.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:26:26', '2023-01-11 18:59:20'),
(99, 'Kangen Water', '1673503062.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:26:57', '2023-01-12 11:57:42'),
(100, 'Laboratory', '1673503493.png', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:27:16', '2023-01-12 12:04:53'),
(101, 'Labour Services', '1673503773.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:27:31', '2023-01-12 12:09:33'),
(102, 'Laser Technology', '1673504226.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:27:47', '2023-01-12 12:17:06'),
(103, 'Logistics & Courier Services', '1673504403.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:28:02', '2023-01-12 12:20:03'),
(104, 'Maid Services', '1673504507.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:28:36', '2023-01-12 12:21:47'),
(106, 'Marketing & Advertising', '1673504572.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:29:27', '2023-01-12 12:22:52'),
(107, 'Matrimony', '1673504952.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:30:26', '2023-01-12 12:29:12'),
(108, 'Mechanical', '1673505069.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:30:44', '2023-01-12 12:31:09'),
(109, 'Medical Equipment', '1673505238.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:31:09', '2023-01-12 12:33:58'),
(110, 'Mobile Store', '1673505546.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:31:35', '2023-01-12 12:39:06'),
(111, 'Musician', '1673505766.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:31:50', '2023-01-12 12:42:46'),
(112, 'Network Marketing Industry', '1673505903.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:32:11', '2023-01-12 12:45:03'),
(113, 'NGO', '1673505989.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:32:43', '2023-01-12 12:46:29'),
(114, 'Oil Analysis', '1673506139.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:33:40', '2023-01-12 12:48:59'),
(115, 'Oxygen Generation Plant', '1673506293.png', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:34:02', '2023-01-12 12:51:33'),
(116, 'P.G.(Paying Guest)', '1673506411.png', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:34:30', '2023-01-12 12:53:31'),
(117, 'Packaging', '1673506523.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:34:52', '2023-01-12 12:55:23'),
(118, 'Packers and Movers', '1673506651.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:36:18', '2023-01-12 12:57:31'),
(119, 'Paint', '1673506782.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:36:39', '2023-01-12 12:59:42'),
(120, 'Pan Parlour', '1673506939.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:37:05', '2023-01-12 13:02:19'),
(121, 'Paper Manufacturing', '1673507004.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:37:27', '2023-01-12 13:03:24'),
(122, 'Patanjali', '1673507058.png', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:38:27', '2023-01-12 13:04:18'),
(123, 'Personal', '1673507158.png', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:38:45', '2023-01-12 13:05:58'),
(124, 'Pest Control', '1673507277.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:39:11', '2023-01-12 13:07:57'),
(125, 'Pet', '1673507376.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:39:30', '2023-01-12 13:09:36'),
(126, 'Petrol Pump', '1673507431.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:39:45', '2023-01-12 13:10:32'),
(127, 'Pharmaceutical', '1673507559.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:40:00', '2023-01-12 13:12:39'),
(128, 'Photography & Videography', '1673507617.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:40:22', '2023-01-12 13:13:37'),
(129, 'Physiotherapy', '1673507666.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:42:00', '2023-01-12 13:14:26'),
(130, 'Pipes', '1673507730.png', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:43:15', '2023-01-12 13:15:30'),
(131, 'Placement Services', '1673507794.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:43:58', '2023-01-12 13:16:34'),
(132, 'Plant Nurseries', '1673507874.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:44:15', '2023-01-12 13:17:54'),
(133, 'Plastic', '1673507962.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:44:40', '2023-01-12 13:19:22'),
(134, 'plywood and Laminate', '1673508010.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:45:19', '2023-01-12 13:20:10'),
(135, 'Politics', '1673508056.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:45:38', '2023-01-12 13:20:56'),
(136, 'Pooja Ghar', '1673508125.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:46:14', '2023-01-12 13:22:05'),
(137, 'Poultry Farm', '1673508230.png', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:46:56', '2023-01-12 13:23:50'),
(138, 'Power Tools', '1673508305.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:48:11', '2023-01-12 13:25:05'),
(139, 'Printing', '1673508427.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:48:35', '2023-01-12 13:27:07'),
(140, 'R.O. Water & Softener', '1673508537.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:48:54', '2023-01-12 13:28:57'),
(141, 'Real Estate', '1673514331.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:49:20', '2023-01-12 15:05:31'),
(143, 'Recharge (DTH/Mobile)', '1673514395.png', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:50:27', '2023-01-12 15:06:35'),
(144, 'Republican Party of India', '1673514531.png', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:50:47', '2023-01-12 15:08:51'),
(145, 'Restaurant, Catering, and Fast food', '1673515089.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:51:56', '2023-01-12 15:18:09'),
(146, 'Scrap', '1673515151.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:52:10', '2023-01-12 15:19:11'),
(147, 'Sculpture & Painting', '1673515218.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:52:31', '2023-01-12 15:20:18'),
(148, 'Seafood', '1673515783.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:53:01', '2023-01-12 15:29:43'),
(149, 'Security Agency', '1673515842.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:54:12', '2023-01-12 15:30:42'),
(150, 'Security Surveillance', '1673515892.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:54:43', '2023-01-12 15:31:32'),
(151, 'Share Stock Market', '1673515939.png', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:56:03', '2023-01-12 15:32:19'),
(152, 'Shelter Home', '1673515993.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:56:19', '2023-01-12 15:33:13'),
(153, 'Social Activist', '1673516060.svg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:56:44', '2023-01-12 15:34:20'),
(154, 'Solar', '1673516100.webp', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:57:15', '2023-01-12 15:35:00'),
(155, 'Sports', '1677914940.jpg', 'yes', 'no', NULL, NULL, 10, '2023-01-03 14:57:39', '2023-10-26 10:53:39'),
(156, 'Stationary', '1673516205.webp', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:58:03', '2023-01-12 15:36:45'),
(157, 'Steel and Aluminium', '1673516246.webp', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:59:14', '2023-01-12 15:37:26'),
(158, 'Submersible Pump', '1673516288.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:59:29', '2023-01-12 15:38:08'),
(159, 'Tailor', '1673516331.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 14:59:54', '2023-01-12 15:38:51'),
(160, 'Tattoo', '1673516371.webp', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 15:00:32', '2023-01-12 15:39:31'),
(161, 'Textile', '1673516427.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 15:00:53', '2023-01-12 15:40:27'),
(162, 'Tour and Travels', '1673516481.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 15:01:20', '2023-01-12 15:41:21'),
(163, 'Toys', '1673516506.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 15:01:35', '2023-01-12 15:41:46'),
(164, 'Transport', '1673516539.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 15:02:12', '2023-01-12 15:42:19'),
(165, 'Utensil', '1673516586.webp', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 15:02:42', '2023-01-12 15:43:06'),
(166, 'Valve', '1673516654.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 15:05:18', '2023-01-12 15:44:14'),
(167, 'Vaterinary', '1673516683.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 15:05:39', '2023-01-12 15:44:43'),
(168, 'Warehouse', '1673516732.webp', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 15:06:32', '2023-01-12 15:45:32'),
(169, 'Watch', '1673516783.webp', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 15:08:12', '2023-01-12 15:46:23'),
(170, 'Water & Waste Water treatment', '1673516839.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 15:08:37', '2023-01-12 15:47:19'),
(171, 'Wellness', '1673516889.png', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 15:09:02', '2023-01-12 15:48:09'),
(173, 'Leaders', '1677910920.webp', 'no', 'no', NULL, NULL, 10, '2023-01-03 16:48:53', '2023-03-04 00:52:00'),
(174, 'Good Morning', '1677914268.jpg', 'no', 'no', NULL, NULL, 2, '2023-01-03 16:59:05', '2023-03-04 01:47:48'),
(175, 'Motivational', '1677915142.jpg', 'no', 'no', NULL, NULL, 10, '2023-01-03 17:16:56', '2023-03-04 02:02:22'),
(176, 'Freelancer', 'default.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-03 19:50:13', '2023-01-03 19:50:13'),
(177, 'Leadership', '1677917389.jpg', 'no', 'no', NULL, NULL, 10, '2023-01-07 19:02:34', '2023-03-04 02:39:49'),
(178, 'Builder', NULL, 'yes', 'no', NULL, NULL, NULL, '2023-01-07 19:11:30', '2023-01-07 19:11:30'),
(179, 'Optician', 'default.jpg', 'yes', 'no', NULL, NULL, NULL, '2023-01-09 11:57:04', '2023-01-09 11:57:04'),
(180, 'Attitude', '1677917688.jpg', 'no', 'no', NULL, NULL, 10, '2023-01-09 12:53:39', '2023-03-04 02:44:48'),
(181, '26th January', NULL, 'no', 'yes', '2023-01-25', '2023-01-26', 10, '2023-01-09 12:58:26', '2023-02-01 06:16:08'),
(182, 'Bollywood', '1677918222.jpg', 'no', 'no', NULL, NULL, 10, '2023-01-09 13:16:58', '2023-03-04 02:53:42'),
(183, 'Teacher', NULL, 'yes', 'no', NULL, NULL, NULL, '2023-01-09 15:30:45', '2023-01-09 15:30:45'),
(185, 'Devotion', '1677915367.png', 'no', 'no', NULL, NULL, 10, '2023-01-09 17:54:52', '2023-03-04 02:06:07'),
(187, 'Wishes message', NULL, 'no', 'no', NULL, NULL, 10, '2023-01-09 18:05:16', '2023-01-10 15:48:42'),
(188, 'Memes', '1677930427.png', 'no', 'no', NULL, NULL, 10, '2023-01-09 18:06:39', '2023-03-04 06:17:07'),
(189, 'Business', '1677914038.jpg', 'no', 'no', NULL, NULL, 10, '2023-01-09 18:11:24', '2023-03-04 01:43:58'),
(191, 'sport academy', '1677912576.jpg', 'yes', 'no', '2023-01-12', '2024-11-11', NULL, '2023-01-12 16:41:19', '2023-03-04 01:19:36'),
(195, 'Today\'s Specials', '1686114361.jpg', 'no', 'no', NULL, NULL, 11, '2023-01-30 00:18:56', '2023-06-06 23:36:01'),
(196, 'Positivity', '1677917797.jpg', 'no', 'no', NULL, NULL, 10, '2023-01-30 04:17:29', '2023-03-04 06:17:57'),
(197, 'Individual', NULL, 'no', 'no', NULL, NULL, 10, '2023-02-01 06:55:52', '2023-02-01 06:55:52'),
(198, 'Festival', NULL, 'no', 'yes', NULL, NULL, NULL, '2023-02-15 00:22:09', '2023-02-15 00:22:09'),
(220, 'Nature', '1698312523.jpg', 'yes', 'no', NULL, NULL, 6, '2023-10-26 14:28:43', '2023-10-26 14:28:43'),
(222, 'car', '1698314818.jpg', 'yes', 'no', NULL, NULL, 2, '2023-10-26 15:06:58', '2023-10-26 15:06:58'),
(223, 'crackers', '1698732643.jpg', 'no', 'yes', '2023-11-01', '2023-11-30', 2, '2023-10-31 11:10:43', '2023-10-31 11:10:43');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `sequence` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `photo`, `sequence`, `created_at`, `updated_at`) VALUES
(2, '1675328920.jpg', 1, '2023-02-02 03:38:40', '2023-02-02 03:38:40'),
(3, '1675328938.jpg', 2, '2023-02-02 03:38:58', '2023-02-02 03:38:58'),
(4, '1675328953.jpg', 3, '2023-02-02 03:39:13', '2023-02-02 03:39:13'),
(6, '1675339331.jpg', 5, '2023-02-02 06:32:11', '2023-02-02 06:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `branddetails`
--

CREATE TABLE `branddetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brandname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branddetails`
--

INSERT INTO `branddetails` (`id`, `brandname`, `name`, `email`, `mobile`, `message`, `created_at`, `updated_at`) VALUES
(1, 'brand', 'parvez irfan bhai jindani', 'parvejjindani005@gmail.com', 8487868595, 'dssd', '2024-06-20 06:12:09', '2024-06-20 06:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `brand_categories`
--

CREATE TABLE `brand_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_categories`
--

INSERT INTO `brand_categories` (`id`, `categoryName`, `icon`, `poster`, `created_at`, `updated_at`) VALUES
(1, 'Fashion', '1707897183.png', '1708764569.jpg', '2023-12-12 11:01:40', '2024-02-24 08:49:29'),
(2, 'IT', '1707897285.png', '1708764823.jpg', '2023-12-12 11:01:50', '2024-02-24 08:53:43'),
(3, 'Beauty', '1707897367.png', '1708764834.avif', '2023-12-12 11:01:57', '2024-02-24 08:53:54'),
(4, 'Restaurant', '1707897420.png', '1708764898.webp', '2024-02-14 07:42:41', '2024-02-24 08:54:58'),
(6, 'Spa', '1707897528.png', '1708764922.jpg', '2024-02-14 07:43:55', '2024-02-24 08:55:22'),
(7, 'Salon', '1707897572.png', '1708764948.avif', '2024-02-14 07:44:00', '2024-02-24 08:55:48'),
(8, 'Games', '1707897620.png', '1708764965.jpg', '2024-02-14 07:44:16', '2024-02-24 08:56:05'),
(9, 'Health', '1707897675.png', '1708764979.webp', '2024-02-14 07:44:51', '2024-02-24 08:56:19'),
(10, 'Online Shopping', '1707897756.png', '1708764998.avif', '2024-02-14 07:45:04', '2024-02-24 08:56:38');

-- --------------------------------------------------------

--
-- Table structure for table `brand_influencer_notifications`
--

CREATE TABLE `brand_influencer_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_read` enum('Yes','No') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visible` enum('B','I','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_influencer_notifications`
--

INSERT INTO `brand_influencer_notifications` (`id`, `userId`, `title`, `type`, `dateTime`, `is_read`, `created_at`, `updated_at`, `visible`) VALUES
(1, 271, 'New Campaign Created', 'Campaign', '2024-06-21 10:11:44', 'No', '2024-05-12 18:24:28', '2024-06-21 10:11:44', 'I'),
(2, 3, 'Someone send you a message', 'General', '2024-05-18 06:23:18', NULL, '2024-05-12 19:25:50', '2024-05-12 19:25:50', 'N'),
(3, 271, 'Alia visit your new campaign', 'General', '2024-05-18 07:05:38', NULL, '2024-05-12 19:40:51', '2024-05-12 19:40:51', 'N'),
(4, 3, 'New Message from Best Resturant', 'General', '2024-05-18 07:30:16', NULL, '2024-05-18 07:30:16', '2024-05-18 07:30:16', 'N'),
(5, 271, 'New Message from Rudrika Dave A', 'General', '2024-05-18 07:32:31', NULL, '2024-05-18 07:32:31', '2024-05-18 07:32:31', 'N'),
(6, 3, 'New Message from Best Resturant', 'General', '2024-05-18 10:26:07', NULL, '2024-05-18 10:26:07', '2024-05-18 10:26:07', 'N'),
(7, 271, 'Best Resturant Created Campaign test', 'Campaign', '2024-06-21 10:11:44', 'No', '2024-05-21 06:33:57', '2024-06-21 10:11:44', 'I'),
(8, 271, 'Best Resturant Created Campaign test2', 'Campaign', '2024-06-21 10:11:44', 'No', '2024-05-21 06:44:26', '2024-06-21 10:11:44', 'I'),
(9, 271, 'Best Resturant Created Campaign test', 'Campaign', '2024-06-21 10:11:44', 'No', '2024-05-21 13:55:35', '2024-06-21 10:11:44', 'I'),
(10, 311, 'Rudrika The Brand Created Campaign Rudrika The Brand Campaign', 'Campaign', '2024-06-21 10:11:44', 'No', '2024-05-28 07:16:53', '2024-06-21 10:11:44', 'I'),
(11, 311, 'New Message from Rudrika Dave A', 'General', '2024-05-28 07:25:24', NULL, '2024-05-28 07:25:24', '2024-05-28 07:25:24', 'N'),
(12, 324, 'brand14624 Created Campaign campaign 14624', 'Campaign', '2024-06-21 10:11:44', 'No', '2024-06-18 05:15:59', '2024-06-21 10:11:44', 'I'),
(13, 324, 'New Message from influencer14624', 'General', '2024-06-21 11:40:32', 'No', '2024-06-18 06:56:34', '2024-06-21 11:40:32', 'N'),
(14, 323, 'New Message from brand14624', 'General', '2024-06-21 10:11:44', 'No', '2024-06-18 06:56:54', '2024-06-21 10:11:44', 'N'),
(15, 324, 'New Message from influencer14624', 'General', '2024-06-21 11:40:32', 'No', '2024-06-18 06:57:07', '2024-06-21 11:40:32', 'N'),
(16, 324, 'New Message from influencer14624', 'General', '2024-06-21 11:40:32', 'No', '2024-06-21 11:40:22', '2024-06-21 11:40:32', 'I'),
(17, 323, 'New Message from brand14624', 'General', '2024-06-21 11:40:51', 'No', '2024-06-21 11:40:46', '2024-06-21 11:40:51', 'N'),
(18, 324, 'New Message from influencer14624', 'General', '2024-06-21 11:44:16', 'No', '2024-06-21 11:44:07', '2024-06-21 11:44:16', 'N'),
(19, 324, 'brand14624 Created Campaign new campaign', 'Campaign', '2024-07-01 11:15:45', 'No', '2024-07-01 11:13:06', '2024-07-01 11:15:45', 'I'),
(20, 324, 'New Message from influencer14624', 'General', '2024-07-01 11:15:45', 'No', '2024-07-01 11:15:25', '2024-07-01 11:15:45', 'I'),
(21, 324, 'New Message from influencer14624', 'General', '2024-07-01 11:17:31', 'No', '2024-07-01 11:16:22', '2024-07-01 11:17:31', 'I'),
(22, 274, 'New Message from influencer14624', 'General', '2024-07-01 11:17:46', 'No', '2024-07-01 11:16:50', '2024-07-01 11:17:46', 'I'),
(23, 323, 'New Message from brand14624', 'General', '2024-07-01 11:17:46', 'No', '2024-07-01 11:17:40', '2024-07-01 11:17:46', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `brand_offers`
--

CREATE TABLE `brand_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `offerPhoto` varchar(255) NOT NULL,
  `offerPrice` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `validity` date NOT NULL,
  `termsAndConditions` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_offers`
--

INSERT INTO `brand_offers` (`id`, `userId`, `title`, `description`, `offerPhoto`, `offerPrice`, `location`, `validity`, `termsAndConditions`, `created_at`, `updated_at`) VALUES
(1, 3, 'TEST OFFER', 'this is test offerss', '1707369585.jpg', 50, 'Ahmedabad', '2024-02-29', 'Terms & Conditions Terms & Conditions Terms & Conditions', '2024-02-08 05:19:45', '2024-02-08 05:27:56'),
(4, 271, 'FLAT 50% OFF', 'Get Flat 50% OFF on resturant visit', '1708322925.jpg', 50, 'Ahmedabad', '2024-02-16', 'Terms & Conditions\r\nTerms & Conditions\r\nTerms & Conditions', '2024-02-08 10:29:20', '2024-02-19 06:10:13'),
(5, 3, 'test', 'test', '1707388187.jpg', 50, 'teste', '2024-02-16', 'test', '2024-02-08 10:29:47', '2024-02-08 10:29:47'),
(7, 271, 'SALE UPTO 80% OFF', 'Top Sale upto 80% off in less price', '1708323859.jpg', 80, 'Ahmedabad', '2024-04-20', 'Terms & Conditions Terms & Conditions', '2024-02-19 06:24:19', '2024-02-19 06:24:19'),
(9, 271, 'FLAT 20% OFF', 'get flat 20% off', '1708324891.png', 20, 'Ahmedabad', '2024-03-06', 'Terms & Conditions Terms & Conditions', '2024-02-19 06:41:31', '2024-02-19 06:41:31'),
(11, 3, 'new offer', 'nice', '1720683425.jpg', 1000, 'ghare', '2024-08-01', 'come fast and join offer', '2024-07-11 07:37:06', '2024-07-11 07:37:06'),
(12, 3, 'new offer', 'come and grab offer soon', '1720689980.jpg', 10, 'ahmedabad', '2024-07-31', 'do fast', '2024-07-11 09:26:20', '2024-07-11 09:26:20'),
(13, 338, 'new offer', 'nice offer', '1720690519.jpg', 100, 'ahmedabad', '2024-07-11', 'grab offer quickly', '2024-07-11 09:35:19', '2024-07-11 09:36:23');

-- --------------------------------------------------------

--
-- Table structure for table `brand_packages`
--

CREATE TABLE `brand_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `points` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_packages`
--

INSERT INTO `brand_packages` (`id`, `title`, `price`, `points`, `created_at`, `updated_at`) VALUES
(1, 'Gold', '999', '1000', '2023-11-23 05:54:31', '2024-07-02 06:23:31'),
(2, 'Silver', '5000', '5000', '2023-11-23 05:55:11', '2023-11-23 06:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `brand_package_details`
--

CREATE TABLE `brand_package_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brandPackageId` int(11) NOT NULL,
  `activityId` int(11) NOT NULL,
  `points` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_package_details`
--

INSERT INTO `brand_package_details` (`id`, `brandPackageId`, `activityId`, `points`, `details`, `created_at`, `updated_at`) VALUES
(2, 1, 1, '150', 'Per Campaign', '2023-11-24 13:01:58', '2023-11-24 13:01:58'),
(3, 2, 1, '200', 'Per Campaign', '2023-11-24 13:02:13', '2023-11-24 13:02:13'),
(4, 1, 3, '300', 'For Another Task', '2023-11-28 08:03:51', '2023-11-28 08:03:51'),
(5, 2, 4, '50', 'For contact influencer', '2023-12-01 15:22:50', '2023-12-01 15:22:50'),
(8, 2, 6, '1', 'per message', '2024-06-18 06:24:48', '2024-06-18 06:24:48'),
(9, 1, 6, '1', 'per message', '2024-07-01 11:31:41', '2024-07-01 11:31:41');

-- --------------------------------------------------------

--
-- Table structure for table `brand_points`
--

CREATE TABLE `brand_points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `points` varchar(255) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_points`
--

INSERT INTO `brand_points` (`id`, `userId`, `email`, `points`, `remark`, `created_at`, `updated_at`) VALUES
(74, 3, 'test@gmail.com', '5000', 'Purchase', '2024-02-06 12:07:56', '2024-02-06 12:07:56'),
(75, 308, 'test@gmail.com', '-200', 'Create Campaign', '2024-02-06 12:25:10', '2024-02-06 12:25:10'),
(76, 308, 'test@gmail.com', '-200', 'Create Campaign', '2024-02-06 12:59:41', '2024-02-06 12:59:41'),
(79, 271, 'newman@gmail.com', '5000', 'Purchase', '2024-02-20 05:15:01', '2024-02-20 05:15:01'),
(80, 3, 'rudrikadave20226@gmail.com', '-50', 'Contact Influencer', '2024-05-07 09:49:45', '2024-05-07 09:49:45'),
(81, 271, 'brand@gmail.com', '-200', 'Create Campaign', '2024-05-12 19:39:59', '2024-05-12 19:39:59'),
(82, 271, 'brand@gmail.com', '-200', 'Create Campaign', '2024-05-12 19:40:51', '2024-05-12 19:40:51'),
(83, 271, 'brand@gmail.com', '-200', 'Create Campaign', '2024-05-21 06:33:57', '2024-05-21 06:33:57'),
(84, 271, 'brand@gmail.com', '-200', 'Create Campaign', '2024-05-21 06:44:26', '2024-05-21 06:44:26'),
(85, 271, 'brand@gmail.com', '-200', 'Create Campaign', '2024-05-21 13:55:35', '2024-05-21 13:55:35'),
(86, 311, 'rudrikabrand@gmail.com', '5000', 'Purchase', '2024-05-28 07:15:27', '2024-05-28 07:15:27'),
(87, 311, 'rudrikabrand@gmail.com', '-200', 'Create Campaign', '2024-05-28 07:16:53', '2024-05-28 07:16:53'),
(88, 324, 'brand14624@gmail.com', '5000', 'Purchase', '2024-06-18 05:14:21', '2024-06-18 05:14:21'),
(89, 324, 'brand14624@gmail.com', '-200', 'Create Campaign', '2024-06-18 05:15:59', '2024-06-18 05:15:59'),
(90, 323, 'influencer14624@gmail.com', '5000', 'Purchase', '2024-06-18 05:20:49', '2024-06-18 05:20:49'),
(91, 323, 'influencer14624@gmail.com', '-1', 'Sent Message', '2024-06-18 06:25:30', '2024-06-18 06:25:30'),
(92, 323, 'influencer14624@gmail.com', '-1', 'Sent Message', '2024-06-18 06:40:51', '2024-06-18 06:40:51'),
(93, 324, 'brand14624@gmail.com', '-1', 'Sent Message', '2024-06-18 06:46:10', '2024-06-18 06:46:10'),
(94, 323, 'influencer14624@gmail.com', '-1', 'Sent Message', '2024-06-18 06:56:34', '2024-06-18 06:56:34'),
(95, 324, 'brand14624@gmail.com', '-1', 'Sent Message', '2024-06-18 06:56:54', '2024-06-18 06:56:54'),
(96, 323, 'influencer14624@gmail.com', '-1', 'Sent Message', '2024-06-18 06:57:07', '2024-06-18 06:57:07'),
(97, 323, 'influencer14624@gmail.com', '-1', 'Sent Message', '2024-06-18 07:06:14', '2024-06-18 07:06:14'),
(98, 323, 'influencer14624@gmail.com', '-1', 'Sent Message', '2024-06-21 11:40:22', '2024-06-21 11:40:22'),
(99, 324, 'brand14624@gmail.com', '-1', 'Sent Message', '2024-06-21 11:40:46', '2024-06-21 11:40:46'),
(100, 323, 'influencer14624@gmail.com', '-1', 'Sent Message', '2024-06-21 11:44:07', '2024-06-21 11:44:07'),
(101, 324, 'brand14624@gmail.com', '-200', 'Create Campaign', '2024-07-01 11:13:06', '2024-07-01 11:13:06'),
(102, 323, 'influencer14624@gmail.com', '-1', 'Sent Message', '2024-07-01 11:15:25', '2024-07-01 11:15:25'),
(103, 323, 'influencer14624@gmail.com', '-1', 'Sent Message', '2024-07-01 11:16:22', '2024-07-01 11:16:22'),
(104, 323, 'influencer14624@gmail.com', '-1', 'Sent Message', '2024-07-01 11:16:50', '2024-07-01 11:16:50'),
(105, 324, 'brand14624@gmail.com', '-1', 'Sent Message', '2024-07-01 11:17:40', '2024-07-01 11:17:40'),
(106, 338, 'parvezjindani003@gmail.com', '5000', 'Purchase', '2024-07-11 09:34:15', '2024-07-11 09:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `brand_with_categories`
--

CREATE TABLE `brand_with_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brandCategoryId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_with_categories`
--

INSERT INTO `brand_with_categories` (`id`, `brandCategoryId`, `brandId`, `created_at`, `updated_at`) VALUES
(9, 4, 3, '2024-01-26 12:18:18', '2024-02-16 10:20:46'),
(10, 2, 308, '2024-02-06 12:54:47', '2024-02-06 12:54:47'),
(11, 4, 274, NULL, NULL),
(12, 6, 287, NULL, NULL),
(13, 1, 318, '2024-05-30 06:25:33', '2024-05-30 06:25:33'),
(14, 2, 318, '2024-05-30 06:25:33', '2024-05-30 06:25:33'),
(15, 3, 318, '2024-05-30 06:25:33', '2024-05-30 06:25:33'),
(16, 7, 318, '2024-05-30 06:25:33', '2024-05-30 06:25:33'),
(33, 1, 271, '2024-06-04 06:15:49', '2024-06-04 06:15:49'),
(34, 2, 271, '2024-06-04 06:15:49', '2024-06-04 06:15:49'),
(35, 3, 271, '2024-06-04 06:15:49', '2024-06-04 06:15:49'),
(36, 4, 271, '2024-06-04 06:15:49', '2024-06-04 06:15:49'),
(91, 1, 324, '2024-07-02 07:32:26', '2024-07-02 07:32:26'),
(92, 2, 324, '2024-07-02 07:32:26', '2024-07-02 07:32:26'),
(93, 6, 324, '2024-07-02 07:32:26', '2024-07-02 07:32:26'),
(94, 7, 324, '2024-07-02 07:32:26', '2024-07-02 07:32:26'),
(95, 8, 324, '2024-07-02 07:32:26', '2024-07-02 07:32:26'),
(96, 9, 324, '2024-07-02 07:32:26', '2024-07-02 07:32:26'),
(98, 2, 338, NULL, '2024-07-11 09:48:52'),
(99, 1, 334, NULL, NULL),
(100, 3, 329, NULL, NULL),
(101, 9, 324, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brochures`
--

CREATE TABLE `brochures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_id` int(11) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brochures`
--

INSERT INTO `brochures` (`id`, `card_id`, `file`, `created_at`, `updated_at`) VALUES
(4, 30, '1672035273.pdf', '2022-12-26 12:14:33', '2022-12-26 12:14:33'),
(5, 33, '1672139227.jpg', '2022-12-27 17:07:07', '2022-12-27 17:07:07'),
(6, 34, '1672403787.jpg', '2022-12-30 18:36:27', '2022-12-30 18:36:27'),
(9, 3, '1673095338.jpg', '2023-01-07 18:42:19', '2023-01-07 18:42:19'),
(13, 35, '1674282908.pdf', '2023-01-21 12:35:08', '2023-01-21 12:35:08'),
(16, 3, '1674642641.jpg', '2023-01-25 16:30:41', '2023-01-25 16:30:41'),
(18, 84, '1674657465.jpg', '2023-01-25 20:37:45', '2023-01-25 20:37:45'),
(19, 88, '1674709556.mp4', '2023-01-26 11:05:56', '2023-01-26 11:05:56'),
(23, 145, '1675765986.pdf', '2023-02-07 05:03:06', '2023-02-07 05:03:06'),
(28, 212, '1697004352.jpg', '2023-10-11 11:05:52', '2023-10-11 11:05:52'),
(29, 203, '1697107220.jpg', '2023-10-12 15:40:20', '2023-10-12 15:40:20'),
(30, 235, '1720247933.png', '2024-07-06 06:38:53', '2024-07-06 06:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `campaignType` enum('Barter','Paid') NOT NULL DEFAULT 'Barter',
  `detail` longtext NOT NULL,
  `userId` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `rule` longtext DEFAULT NULL,
  `eligibleCriteria` varchar(255) DEFAULT NULL,
  `targetGender` varchar(255) DEFAULT NULL,
  `targetAgeGroup` varchar(255) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `applyForLastDate` varchar(255) DEFAULT NULL,
  `task` longtext DEFAULT NULL,
  `maxApplication` varchar(255) DEFAULT '50',
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `title`, `campaignType`, `detail`, `userId`, `price`, `photo`, `rule`, `eligibleCriteria`, `targetGender`, `targetAgeGroup`, `startDate`, `endDate`, `applyForLastDate`, `task`, `maxApplication`, `status`, `created_at`, `updated_at`) VALUES
(3, 'new Campaign', 'Paid', 'details details details details details', 3, '1500', '1707374781.webp', 'rulerulerulerulerulerulerulerulerulerulerule', '15-35', 'male-female', '15-35', '2023-05-06', '2023-06-06', '2023-06-07', 'task1 task2 task3', '15', 'Active', '2023-07-03 17:10:55', '2024-02-08 06:46:21'),
(7, 'Campaign 1', 'Paid', 'New Details For Campaign 1', 3, '1500', '1702288137.png', 'rule 1 : this is rule 1 rule 2 : this is rule 2 rule 3 : this is rule 3', '12', 'Male-Female', '20-30', '2023-07-14', '2023-07-31', '2023-08-01', 'task 1, TASK 2  TASK 3', '15', 'Active', '2023-07-11 11:46:12', '2023-12-11 09:48:57'),
(8, 'Campaign 2', 'Paid', 'Details for Campaign 2', 3, '1200', '1702288123.png', 'rule 1 : this is rule 1 rule 2 : this is rule 2 rule 3 : this is rule 3', '12', 'Male', '12-25', '2023-07-13', '2023-07-24', '2023-08-01', 'task 1, TASK 2  TASK 3', '20', 'Active', '2023-07-11 11:47:14', '2023-12-11 09:48:43'),
(9, 'Campaign 1', 'Paid', 'details details details details details', 3, '1500', '1689569463.webp', 'rulerulerulerulerulerulerulerulerulerulerule', '15-35', 'male-female', '15-35', '2023-05-06', '2023-06-06', '2023-06-07', 'task1 task2 task3', '15', 'Active', '2023-07-12 15:24:54', '2023-07-17 09:51:03'),
(10, 'Campaign 2', 'Paid', 'details details details details details', 273, '1300', '1689399077.webp', 'rulerulerulerulerulerulerulerulerulerulerule', '15-35', 'male-female', '15-35', '2023-05-06', '2023-06-06', '2023-06-07', 'task1 task2 task3', '15', 'Active', '2023-07-12 15:33:35', '2023-07-15 10:31:18'),
(11, 'Campaign 3', 'Paid', 'details details details details details', 273, '1200', '1689399113.webp', 'rulerulerulerulerulerulerulerulerulerulerule', '15-35', 'male-female', '15-35', '2023-05-06', '2023-06-06', '2023-06-07', 'task1 task2 task3', '15', 'Active', '2023-07-12 16:34:43', '2023-07-15 10:31:53'),
(12, 'Campaign 4', 'Paid', 'details details details details details', 273, '2000', '1689399139.webp', 'rulerulerulerulerulerulerulerulerulerulerule', '15-35', 'male-female', '15-35', '2023-05-06', '2023-06-06', '2023-06-07', 'task1 task2 task3', '15', 'Active', '2023-07-13 14:05:31', '2023-07-15 10:32:19'),
(13, 'Campaign 5', 'Paid', 'DESCRIPTION', 273, '3000', '1689399184.webp', 'Rule', '18', 'male', '18', '2023-07-13', '2023-07-13', '2023/07/13', 'task', '15', 'Active', '2023-07-13 14:25:52', '2023-07-15 10:33:04'),
(15, 'car', 'Paid', 'gjhdfbkjhfkj', 277, '700', '1698323635.jpg', 'rule3', '10', 'male', '27', '2023-10-26', '2024-10-26', '2024-10-26', 'vfdbfhdsh', '5', 'Active', '2023-10-26 17:33:55', '2023-10-26 17:34:47'),
(18, 'Testing', 'Paid', 'testing', 271, '1500', '1702288112.png', 'rule 1 : this is rule 1 rule 2 : this is rule 2 rule 3 : this is rule 3', '12', 'Male-Female', '20-30', '2023-11-10', '2023-11-10', '2023-11-11', 'task 1, TASK 2  TASK 3', '25', 'Active', '2023-10-26 17:50:32', '2023-12-11 09:48:32'),
(19, 'watch series', 'Paid', 'Apple watch series 9', 274, '41,900', '1698383575.jpg', '6', '13', 'male', '23', '2023-10-11', '2024-06-27', '2023-12-18', 'watch', '8', 'Active', '2023-10-27 10:12:55', '2023-10-27 10:12:55'),
(20, 'advocate', 'Paid', 'jdgfhdfghjdjkd', 277, '900', '1698397169.jpg', 'rule4', '10', 'female male', '28', '2023-10-27', '2024-10-27', '2024-10-21', 'task2', '4', 'Active', '2023-10-27 13:59:29', '2023-10-27 14:18:37'),
(22, 'flower', 'Paid', 'bring smile', 277, '1100', '1698406347.jpg', 'rule3', '5', 'female male', '21', '2023-10-27', '2024-10-27', '2024-10-26', 'task4', '2', 'Active', '2023-10-27 16:32:27', '2023-10-27 16:32:27'),
(23, 'Books', 'Paid', 'NCERT PANEL APPROVES', 274, '98', '1698409504.webp', '1 : Rule 1, 2 : Rule 2, 3 :Rule 3.', '14', 'female', '23', '2023-10-27', '2023-06-22', '2024-12-08', 'Task 1 Task 2 Task 3', '21', 'Active', '2023-10-27 17:25:04', '2023-11-02 11:03:20'),
(24, 'flower', 'Paid', 'bcwdwe,m,xa', 285, '50', '1698729823.jpg', '1 : Rule 1, 2 : Rule 2, 3 :Rule 3.', '14', 'female', '23', '2023-10-19', '2024-07-03', '2023-12-18', 'Task 1 Task 2 Task 3', '8', 'Active', '2023-10-31 10:23:43', '2023-10-31 10:23:43'),
(25, 'laptop', 'Paid', 'gjggkhuiukjhyujgyujghuihjkjk', 285, '56000', '1698729921.jpg', '1 : Rule 1, 2 : Rule 2, 3 :Rule 3.', '14', 'male', '23', '2023-10-26', '2024-02-29', '2024-07-31', 'Task 1 Task 2 Task 3', '6', 'Active', '2023-10-31 10:25:21', '2023-10-31 10:25:21'),
(27, 'computer', 'Paid', 'ndbf,dsmfndm', 287, '700', '1698906013.jpg', 'rule1rule2rule3', '22-27', 'female', '28', '2023-12-12', '2023-12-12', '2024-10-28', 'task1task2task3', '3', 'Active', '2023-11-02 11:20:13', '2023-11-23 16:05:58'),
(28, 'Testing 2', 'Paid', 'testing 2 testing 2', 271, '600', '1702288097.png', 'rule2 rule2', '25-28', 'female', '30', '2023-12-02', '2023-12-02', '2023-12-02', 'task2 task2', '3', 'Active', '2023-11-02 16:20:39', '2023-12-11 09:48:17'),
(29, 'new Campaign', 'Paid', 'details details details details details', 273, '1500', '1700473889.svg', 'rulerulerulerulerulerulerulerulerulerulerule', '15-35', 'male-female', '15-35', '2023-05-06', '2023-06-06', '2023-06-07', 'task1 task2 task3', '15', 'Active', '2023-11-20 15:51:29', '2023-11-20 15:51:29'),
(30, 'Rangoli 1', 'Paid', 'Create beatyfull rangoli', 302, '1500', '1700568301.jpg', 'use ecofriendly color for rangoli.', '18', 'male-female', '18-21', '2023-11-14', '2023-11-20', '2023/11/20', 'create rangoli\npick rangoli image\nupload on social. media', '20', 'Active', '2023-11-20 16:03:23', '2023-11-21 18:05:01'),
(31, 'new Campaign', 'Paid', 'details details details details details', 27, '1500', '1700475594.svg', 'rulerulerulerulerulerulerulerulerulerulerule', '15-35', 'male-female', '15-35', '2023-05-06', '2023-06-06', '2023-06-07', 'task1 task2 task3', '15', 'Active', '2023-11-20 16:19:54', '2023-11-20 16:19:54'),
(32, 'new Campaign', 'Paid', 'details details details details details', 302, '1500', '1700568964.svg', 'rulerulerulerulerulerulerulerulerulerulerule', '15-35', 'male-female', '15-35', '2023-05-06', '2023-06-06', '2023-06-07', 'task1 task2 task3', '15', 'Active', '2023-11-20 16:23:50', '2023-11-21 18:16:04'),
(33, 'hhh', 'Paid', 'jhkjhkj', 271, 'b,mn,m', '1702287832.webp', 'rule1rule2rule3', '25-28', 'njm', 'mm,', '2023-11-23', '2023-11-23', '2023-11-23', 'task1task2task3', '2', 'Active', '2023-11-23 13:12:55', '2023-12-11 09:43:52'),
(34, 'Cloths', 'Paid', 'bcdbca', 271, '1500', '1702298396.png', 'rule 1 : this is rule 1 rule 2 : this is rule 2 rule 3 : this is rule 3', '12', 'Male-Female', '25-50', '2023-12-12', '2023-12-27', '2023-12-28', 'task 1, TASK 2  TASK 3', '125', 'Active', '2023-12-11 12:39:57', '2023-12-13 08:48:32'),
(35, 'new Campaign', 'Paid', 'details details details details details', 271, '1500', '1702707236.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2023-12-16 06:13:56', '2023-12-16 06:13:56'),
(36, 'new Campaign', 'Paid', 'details details details details details', 271, '1500', '1702707530.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2023-12-16 06:18:50', '2023-12-16 06:18:50'),
(37, 'new Campaign', 'Paid', 'details details details details details', 271, '1500', '1702707563.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2023-12-16 06:19:23', '2023-12-16 06:19:23'),
(38, 'new Campaign', 'Paid', 'details details details details details', 302, '1500', '1702971413.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2023-12-19 07:36:53', '2023-12-19 07:36:53'),
(39, 'test', 'Paid', 'testt', 308, '500', '1707222310.jpg', NULL, '15', NULL, '15-35', '2024-02-07', '2024-02-29', '2024-02-29', 'task 1, TASK 2  TASK 3', '15', 'Active', '2024-02-06 12:25:10', '2024-02-06 12:25:10'),
(40, 'test', 'Paid', 'testestes', 308, '150', '1707224381.jpg', 'rule 1 : this is rule 1 rule 2 : this is rule 2 rule 3 : this is rule 3', '15', 'Female', '10-50', '2024-02-08', '2024-02-27', '2024-02-28', 'task 1, TASK 2  TASK 3', '15', 'Active', '2024-02-06 12:59:41', '2024-02-06 12:59:41'),
(41, 'Best restaurant', 'Paid', 'Best restaurant  create new campaign', 271, '1500', '1715542799.jpg', 'rule rule rule rule rule rule rule rule rule rule', '25', 'Female', '15-30', '2024-05-22', '2024-05-31', '2024-06-06', 'task task', '15', 'Active', '2024-05-12 19:39:59', '2024-05-12 19:39:59'),
(42, 'Best restaurant', 'Paid', 'Best restaurant  create new campaign', 271, '1500', '1715542851.jpg', 'rule rule rule rule rule rule rule rule rule rule', '25', 'Female', '15-30', '2024-05-22', '2024-05-31', '2024-06-06', 'task task', '15', 'Active', '2024-05-12 19:40:51', '2024-05-12 19:40:51'),
(43, 'test', 'Barter', 'test', 271, '1500', '1716273237.jpg', NULL, '15', 'Female', '15-50', '2024-05-22', '2024-05-30', '2024-06-02', NULL, '5', 'Active', '2024-05-21 06:33:57', '2024-05-21 06:33:57'),
(44, 'test2', 'Barter', 'wesr', 271, '1500', '1716273866.jpg', NULL, '12', 'Female', '15-50', '2024-05-22', '2024-05-31', '2024-06-04', NULL, NULL, 'Active', '2024-05-21 06:44:26', '2024-05-21 06:44:26'),
(45, 'test', 'Barter', 'test', 271, '1500', '1716299735.jpg', NULL, '15', 'Female', '15-50', '2024-05-22', '2024-05-25', '2024-06-06', NULL, NULL, 'Active', '2024-05-21 13:55:35', '2024-05-21 13:55:35'),
(46, 'Rudrika The Brand Campaign', 'Barter', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also t', 311, '1500', '1716880613.jpg', NULL, '12', 'Both', '15-50', '2024-05-29', '2024-06-08', '2024-07-06', NULL, NULL, 'Active', '2024-05-28 07:16:53', '2024-05-28 07:16:53'),
(47, 'campaign 14624', 'Barter', 'Good One Come And Enjoy', 324, '1500', '1718687759.jpg', NULL, '18', 'Both', '18-40', '2024-06-19', '2024-06-30', '2024-06-19', NULL, '50', 'Active', '2024-06-18 05:15:59', '2024-06-18 05:15:59'),
(48, 'new campaign', 'Barter', 'nothing', 324, '10000', '1719832386.png', 'nothing', '18', 'Both', '18-50', '2024-07-01', '2024-07-31', '2024-07-30', 'do anything', '50', 'Active', '2024-07-01 11:13:06', '2024-07-01 11:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `cardlinkes`
--

CREATE TABLE `cardlinkes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_id` int(11) NOT NULL,
  `phone1` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` mediumtext DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `paypal` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cardlinkes`
--

INSERT INTO `cardlinkes` (`id`, `card_id`, `phone1`, `phone2`, `email`, `skype`, `facebook`, `instagram`, `twitter`, `youtube`, `linkedin`, `website`, `paypal`, `created_at`, `updated_at`) VALUES
(1, 2, 'email', 'qwzdfghnm', 'Work', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-06 03:02:21', '2022-12-06 03:02:21'),
(2, 2, 'Phone', '+91 8978978978', 'Mobile', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-06 03:02:34', '2022-12-06 03:02:34'),
(3, 4, '9999999999', '6666667778', 'Mobile', 'jdjsifj', 'wkdkfj', 'jsjdcj', 'dkfkfj', 'idfjcjj', 'kdjdcjj', 'www.rudrika.com', NULL, '2022-12-06 03:32:13', '2023-01-05 15:50:36'),
(5, 4, 'email', 'madhvi1@gmail.com', 'Email', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-06 03:38:07', '2022-12-06 03:38:07'),
(6, 4, 'skype', 'skyp.in', 'hiiii', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-06 03:41:14', '2022-12-06 03:41:14'),
(11, 4, 'linkedin', 'www.com', 'hello', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-06 03:53:29', '2022-12-06 03:53:29'),
(12, 4, 'website', 'abc.com', 'web', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-06 03:55:43', '2022-12-06 03:55:43'),
(13, 4, 'paypal', 'googlepay', 'pay', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-06 03:57:54', '2022-12-06 03:57:54'),
(14, 3, '8849683644', '8849683644', 'rudrikadave20226@gmail.com', 'live:.cid.8788e21f8aa8b69e', 'https://www.facebook.com/profile.php?id=100035319137696', 'https://www.instagram.com/', 'https://twitter.com/i/flow/login', 'https://www.youtube.com/', 'https://in.linkedin.com/', 'perfettosolutions.in', NULL, '2022-12-06 04:42:31', '2023-03-14 10:02:27'),
(15, 1, 'Phone', '+91 5896589658', 'Mobile', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-06 23:09:01', '2022-12-06 23:09:01'),
(20, 24, '9876543210', '9687574999', 'ravirajsinh.m.gohil@gmail.com', 'user.skype', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-23 01:47:34', '2022-12-23 03:09:33'),
(21, 28, '9874563210', '9687574999', 'raviraj@gmail.com', 'skype.me', 'https://www.facebook.com/profile.php?id=100035319137696', 'insta.me', 'twitter.me', 'y.me', NULL, 'www.perfettosolutions.in', 'paypal', '2022-12-23 04:00:49', '2022-12-23 05:00:54'),
(22, 29, '9999998888', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-23 06:47:38', '2022-12-23 06:47:38'),
(23, 30, '+919979411148', '9979411148', 'jaydeep@aspireotech.com', 'jaydeep.r.parekh', 'https://www.facebook.com/jaydeep.r.parekh/', 'https://www.instagram.com/aspireotech/', NULL, 'https://www.youtube.com/@aspireotech1838', 'https://www.linkedin.com/company/aspireotech', 'www.aspireotech.com', NULL, '2022-12-23 22:01:14', '2023-01-24 18:56:07'),
(24, 31, '9586701194', '9586701194', 'jayaspireotech@gmail.com', NULL, 'jaypanchal', 'jaypanchal173___', NULL, NULL, NULL, NULL, NULL, '2022-12-27 16:13:42', '2023-01-03 19:46:16'),
(25, 32, '8866006586', '8866006586', 'jagdish.sound@yahoo.com', NULL, 'https://www.facebook.com/profile.php?id=100064240740287', 'jlive_india', NULL, NULL, NULL, NULL, NULL, '2022-12-27 16:19:38', '2023-01-21 16:29:20'),
(26, 33, '9824969003', '9824969003', 'yash.aspireotech@gmail.com', NULL, 'Yash Gohil', 'https://instagram.com/yash_gohil_268', NULL, NULL, NULL, NULL, NULL, '2022-12-27 16:54:00', '2022-12-27 17:25:08'),
(27, 34, '9687574999', '9687574999', 'bhumi@gmail.com', 'live:.cid.8788e21f8aa8b69e', 'https://www.facebook.com/profile.php?id=100035319137696', 'https://www.instagram.com/sem/campaign/emailsignup/?campaign_id=13530338610&extra_1=s|c|547419127631|e|instagram%20%27|&placement=&creative=547419127631&keyword=instagram%20%27&partner_id=googlesem&extra_2=campaignid%3D13530338610%26adgroupid%3D126262414014%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-1321618851291%26loc_physical_ms%3D9075367%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=Cj0KCQiAtbqdBhDvARIsAGYnXBPHIaMykQymbfi735vXP-Ms3040nPkzabuY48R6n3yfEEQmdnlNM9caArKQEALw_wcB', 'https://twitter.com/i/flow/login', 'https://www.youtube.com/', 'https://in.linkedin.com/', 'https://perfettosolution.in', NULL, '2022-12-30 18:23:59', '2022-12-30 18:34:21'),
(28, 35, '9033699459', '9033699459', 'jaybhut007@gmail.com', NULL, 'fb.com/bassino_india', 'https://www.instagram.com/bassino_india/', NULL, NULL, NULL, 'www.bassinoindia.com', NULL, '2022-12-31 16:30:57', '2023-02-21 07:50:25'),
(29, 37, NULL, NULL, 'rinavbhatt@gmail.com', NULL, NULL, 'https://www.instagram.com/rinavbhatt/', NULL, NULL, NULL, NULL, NULL, '2023-01-03 19:50:13', '2023-01-03 19:53:03'),
(30, 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-09 11:57:04', '2023-01-09 11:57:04'),
(31, 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-11 19:10:43', '2023-01-11 19:10:43'),
(32, 43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 17:52:57', '2023-01-13 17:52:57'),
(33, 46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 12:06:53', '2023-01-19 12:06:53'),
(34, 47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 14:51:37', '2023-01-19 14:51:37'),
(35, 48, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 14:51:48', '2023-01-19 14:51:48'),
(36, 49, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 15:22:10', '2023-01-19 15:22:10'),
(37, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 15:22:23', '2023-01-19 15:22:23'),
(38, 51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 15:46:19', '2023-01-19 15:46:19'),
(39, 52, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 15:51:44', '2023-01-19 15:51:44'),
(40, 53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 15:53:18', '2023-01-19 15:53:18'),
(41, 54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:34:35', '2023-01-19 17:34:35'),
(42, 55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:34:52', '2023-01-19 17:34:52'),
(43, 56, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:35:49', '2023-01-19 17:35:49'),
(44, 57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:49:40', '2023-01-19 17:49:40'),
(45, 58, '9574747226', '9574747226', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.urbankharidi.com', NULL, '2023-01-19 17:55:13', '2023-01-24 19:00:30'),
(46, 59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:55:57', '2023-01-19 17:55:57'),
(47, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:56:06', '2023-01-19 17:56:06'),
(48, 61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:56:53', '2023-01-19 17:56:53'),
(49, 62, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 18:06:42', '2023-01-19 18:06:42'),
(50, 63, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 18:16:33', '2023-01-19 18:16:33'),
(51, 64, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-21 17:01:03', '2023-01-21 17:01:03'),
(54, 67, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-24 13:08:57', '2023-01-24 13:08:57'),
(55, 68, '7984448383', '7984448383', 'rakeshsatola.aspireotech@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'www.aspireotech.com', NULL, '2023-01-24 14:45:31', '2023-01-28 21:13:01'),
(56, 69, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-24 14:51:41', '2023-01-24 14:51:41'),
(58, 71, '9428292283', '9428292283', 'shivcomputer.snr@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-24 15:14:22', '2023-01-26 13:24:42'),
(60, 73, '9725051238', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.digilifes.com', NULL, '2023-01-24 18:47:26', '2023-02-11 09:12:11'),
(63, 76, '8128872056', NULL, 'allseaon7773@gmail.com', NULL, NULL, '__all_season__', NULL, NULL, NULL, 'allseason7773@gmail.com', NULL, '2023-01-24 23:27:12', '2023-02-01 00:21:22'),
(64, 77, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-25 12:06:43', '2023-01-25 12:06:43'),
(65, 78, '8347585220', '8347585220', 'kashyaptrivedi2233@gmail.com', '0000', '00000', '0000', '0000', '00000', '000', '00000', NULL, '2023-01-25 12:58:16', '2023-02-01 13:48:45'),
(66, 79, '9737747569', '9737747569', 'gopalgp.92.gp@gmail.com', NULL, 'gopalgp.92.gp@gmail.com', NULL, NULL, NULL, NULL, 'gopalgp.92.gp@gmail.com', NULL, '2023-01-25 15:00:31', '2023-02-17 13:03:13'),
(67, 80, '8469501504', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bisk.pratik46@gmail.com', NULL, '2023-01-25 18:34:30', '2023-01-26 11:20:39'),
(68, 81, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-25 19:14:27', '2023-01-25 19:14:27'),
(69, 82, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-25 19:56:58', '2023-01-25 19:56:58'),
(70, 83, '9426975796', '9426975796', 'shivcomputer.snr@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-25 20:13:27', '2023-01-25 20:26:55'),
(71, 84, 'wtkysjwtuw5u', 'uwyywi5wuwt', '6ieyktwjgwu', '6ieyei6e6ekjye', 'yekey5i5i5i', 'yssyk6wksy', 'shsyyskei', 'ysydk6sk', 'ylydkysk6', 'ydydkysi', NULL, '2023-01-25 20:21:47', '2023-01-25 20:29:14'),
(72, 85, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-25 23:55:41', '2023-01-25 23:55:41'),
(73, 86, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-26 00:30:50', '2023-01-26 00:30:50'),
(74, 87, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-26 08:55:23', '2023-01-26 08:55:23'),
(75, 88, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-26 11:01:57', '2023-01-26 11:01:57'),
(76, 89, '9638697661', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.bassinoindia.com', NULL, '2023-01-26 12:05:55', '2023-02-18 06:18:15'),
(77, 90, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-26 12:21:44', '2023-01-26 12:21:44'),
(78, 91, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-26 16:16:37', '2023-01-26 16:16:37'),
(79, 92, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-26 17:30:31', '2023-01-26 17:30:31'),
(80, 93, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 14:25:01', '2023-01-27 14:25:01'),
(81, 94, '7984561230', '1324657890', 'rakxfnfnc@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'pappu.in', NULL, '2023-01-27 15:49:48', '2023-02-02 06:10:04'),
(82, 95, '8460499596', NULL, 'info@eliteevince.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 18:20:32', '2023-01-27 19:30:56'),
(83, 96, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 18:22:25', '2023-01-27 18:22:25'),
(84, 97, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 19:30:19', '2023-01-27 19:30:19'),
(85, 98, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-29 01:02:53', '2023-01-29 01:02:53'),
(86, 99, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-29 09:08:15', '2023-01-29 09:08:15'),
(87, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-29 12:30:36', '2023-01-29 12:30:36'),
(88, 101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-29 18:36:47', '2023-01-29 18:36:47'),
(89, 102, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-30 08:34:25', '2023-01-30 08:34:25'),
(90, 103, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 06:49:54', '2023-01-31 06:49:54'),
(91, 104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 07:42:12', '2023-01-31 07:42:12'),
(92, 105, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 08:06:16', '2023-01-31 08:06:16'),
(93, 106, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 08:44:39', '2023-01-31 08:44:39'),
(94, 107, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 09:23:37', '2023-01-31 09:23:37'),
(95, 108, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 10:33:35', '2023-01-31 10:33:35'),
(96, 109, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 10:38:33', '2023-01-31 10:38:33'),
(97, 110, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 11:14:49', '2023-01-31 11:14:49'),
(98, 111, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 11:15:52', '2023-01-31 11:15:52'),
(99, 112, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 11:18:12', '2023-01-31 11:18:12'),
(100, 113, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 23:40:17', '2023-01-31 23:40:17'),
(101, 114, '9601663891', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.Gwiby.com', NULL, '2023-02-01 04:17:30', '2023-02-16 05:39:03'),
(102, 115, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-01 07:30:37', '2023-02-01 07:30:37'),
(103, 116, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-01 07:32:34', '2023-02-01 07:32:34'),
(104, 117, '9876543210', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kakakaka', NULL, '2023-02-01 07:34:01', '2023-02-01 07:34:30'),
(105, 118, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-01 07:35:22', '2023-02-01 07:35:22'),
(106, 119, '7890657890', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rakesh', NULL, '2023-02-01 07:39:44', '2023-02-01 07:40:14'),
(107, 120, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-01 23:40:39', '2023-02-01 23:40:39'),
(108, 121, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 00:16:25', '2023-02-02 00:16:25'),
(109, 122, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 01:02:40', '2023-02-02 01:02:40'),
(110, 123, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 01:08:24', '2023-02-02 01:08:24'),
(111, 124, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 01:33:26', '2023-02-02 01:33:26'),
(112, 125, '9586701194', NULL, 'growbrand22@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 03:14:54', '2023-02-02 03:15:27'),
(113, 126, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 03:18:02', '2023-02-02 03:18:02'),
(114, 127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 04:10:11', '2023-02-02 04:10:11'),
(115, 128, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 04:43:29', '2023-02-02 04:43:29'),
(116, 129, '9824969003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 06:19:23', '2023-02-02 06:41:47'),
(117, 130, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 06:23:50', '2023-02-02 06:23:50'),
(118, 131, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 09:07:04', '2023-02-02 09:07:04'),
(119, 132, '7202033369', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.cityofferings.com', NULL, '2023-02-02 11:28:23', '2023-02-02 11:28:58'),
(120, 133, '9725050010', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 15:14:47', '2023-02-02 15:15:00'),
(121, 134, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-04 01:48:33', '2023-02-04 01:48:33'),
(122, 135, '8320311298', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kenxillenterprise', NULL, '2023-02-04 01:56:50', '2023-02-04 02:02:56'),
(123, 136, '8349912719', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sales.gkindore@gmail.com', NULL, '2023-02-04 02:34:51', '2023-02-04 02:35:24'),
(124, 137, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-04 20:03:39', '2023-02-04 20:03:39'),
(125, 138, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-05 02:09:29', '2023-02-05 02:09:29'),
(126, 139, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-05 02:53:11', '2023-02-05 02:53:11'),
(127, 140, '8438083586', '8438083586', 'Enoke107@gmail.com', NULL, 'Enoke Enoke', 'call_me_danger_boy.3', NULL, NULL, NULL, '𝚂𝚄𝙽𝙶𝚄𝚅𝙰𝚁𝙲𝙷𝙰𝚃𝚁𝙰𝙼 602106', NULL, '2023-02-05 13:24:18', '2023-02-05 13:33:00'),
(128, 141, '8120462795', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-05 19:08:15', '2023-02-07 04:07:48'),
(129, 142, '7974222474', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-06 02:33:09', '2023-02-06 02:33:54'),
(130, 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-06 03:11:51', '2023-02-06 03:11:51'),
(131, 144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 01:14:05', '2023-02-07 01:14:05'),
(132, 145, '9909184418', '9909184418', 'deysudeep2002@gmail.com', NULL, NULL, 'https://instagram.com/sudeep.xo?igshid=OGQ2MjdiOTE=', NULL, NULL, NULL, 'https://instagram.com/sudeep.xo?igshid=OGQ2MjdiOTE=', NULL, '2023-02-07 03:13:05', '2023-02-07 07:51:34'),
(133, 146, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 05:38:36', '2023-02-07 05:38:36'),
(134, 147, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 05:53:27', '2023-02-07 05:53:27'),
(135, 148, '9911993651', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 06:16:59', '2023-02-07 06:17:25'),
(136, 149, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 06:46:54', '2023-02-07 06:46:54'),
(137, 150, '7095371719', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 07:32:08', '2023-02-07 07:32:35'),
(138, 151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 14:20:03', '2023-02-07 14:20:03'),
(139, 152, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 14:28:28', '2023-02-07 14:28:28'),
(140, 153, '9047021703', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 15:48:24', '2023-02-07 15:49:41'),
(141, 154, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 23:02:56', '2023-02-07 23:02:56'),
(142, 155, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-09 05:06:39', '2023-02-09 05:06:39'),
(143, 156, '8547963210', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 01:45:39', '2023-02-10 01:45:39'),
(144, 157, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 03:54:01', '2023-02-10 03:54:01'),
(145, 158, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 04:00:53', '2023-02-10 04:00:53'),
(147, 160, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 04:20:14', '2023-02-10 04:20:14'),
(148, 161, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 04:22:18', '2023-02-10 04:22:18'),
(149, 162, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 04:25:15', '2023-02-10 04:25:15'),
(150, 163, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 10:05:10', '2023-02-10 10:05:10'),
(151, 164, '9708932619', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-11 10:24:51', '2023-02-11 10:25:07'),
(152, 165, '9937983831', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 05:14:16', '2023-02-12 05:15:24'),
(153, 166, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 05:26:29', '2023-02-12 05:26:29'),
(154, 167, '8401295807', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 05:31:13', '2023-02-12 05:32:32'),
(155, 168, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:06:28', '2023-02-12 13:06:28'),
(156, 169, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:08:12', '2023-02-12 13:08:12'),
(157, 170, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:13:06', '2023-02-12 13:13:06'),
(158, 171, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:14:08', '2023-02-12 13:14:08'),
(159, 172, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:15:45', '2023-02-12 13:15:45'),
(160, 173, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:20:37', '2023-02-12 13:20:37'),
(161, 174, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:20:42', '2023-02-12 13:20:42'),
(162, 175, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:21:57', '2023-02-12 13:21:57'),
(163, 176, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:22:05', '2023-02-12 13:22:05'),
(164, 177, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-13 04:16:25', '2023-02-13 04:16:25'),
(165, 178, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-14 08:08:10', '2023-02-14 08:08:10'),
(166, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-15 02:21:02', '2023-02-15 02:21:02'),
(167, 180, '8000040201', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.shivantahospital.com', NULL, '2023-02-15 03:17:51', '2023-02-15 03:19:21'),
(168, 181, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-15 05:43:36', '2023-02-15 05:43:36'),
(169, 182, '7987340139', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-15 06:01:58', '2023-02-15 06:02:22'),
(170, 183, '9898080396', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-17 12:38:12', '2023-02-17 12:39:07'),
(171, 184, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-17 13:38:29', '2023-02-17 13:38:29'),
(172, 185, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-21 10:06:29', '2023-02-21 10:06:29'),
(173, 186, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-23 08:10:56', '2023-02-23 08:10:56'),
(174, 187, '9924853154', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA Manjul Soni', NULL, '2023-02-26 01:12:50', '2023-02-27 11:36:50'),
(179, 192, '9876543210', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-16 05:39:03', '2023-03-16 05:39:03'),
(180, 193, '9999999999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-16 06:17:50', '2023-03-16 06:17:50'),
(183, 196, '9426975796', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-23 10:29:32', '2023-03-23 10:29:32'),
(184, 197, '6549732135', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-23 10:46:23', '2023-03-23 10:46:23'),
(185, 198, '6666666666', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-23 12:19:57', '2023-03-23 12:19:57'),
(186, 199, '1111111111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24 05:33:10', '2023-03-24 05:33:10'),
(187, 200, '2222222222', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24 05:36:35', '2023-03-24 05:36:35'),
(188, 201, '3030303030', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-04 09:02:49', '2023-04-04 09:02:49'),
(189, 202, '6656565656', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-04 09:12:24', '2023-04-04 09:12:24'),
(190, 203, '9909004025', '9909004025', 'priyanshihp.1709@gmail.com', 'priyanshi.innovious@gmail.com', 'priyanshi prajapati', '__priyanshi__prajapati__', 'priyanshihp.1709@gmail.com', 'priyanshihp.1709@gmail.com', 'priyanshihp.1709@gmail.com', 'Innovious', NULL, NULL, '2023-10-12 15:22:15'),
(191, 204, '2525252525', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-27 04:08:07', '2023-04-27 04:08:07'),
(192, 205, '1212121212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-27 04:09:15', '2023-04-27 04:09:15'),
(193, 206, '7359392895', '7359392895', 'rics275@gmail.com', NULL, NULL, 'rics030', NULL, NULL, NULL, NULL, NULL, '2023-05-02 14:27:36', '2023-05-02 14:32:05'),
(194, 207, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-11 09:32:20', '2023-05-11 09:32:20'),
(195, 208, '1231231231', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-23 14:26:23', '2023-06-23 14:26:23'),
(196, 209, '0000000007', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-03 13:46:22', '2023-07-03 13:46:22'),
(197, 210, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-03 16:45:09', '2024-06-04 08:46:29'),
(198, 211, '9909004025', '9909004025', 'priyanshihp1709@gmail.com', 'priyanshi.innovious@gmail.com', 'priyanshi', '__priyanshi__prajapati__', 'priyanshihp1709@gmail.com', 'priyanshihp1709@gmail.com', 'priyanshihp1709@gmail.com', 'Innovious', NULL, '2023-10-10 12:13:34', '2023-10-10 16:40:57'),
(199, 212, '9558025483', '9558025483', 'priyanshihp1709@gmail.com', 'priyanshi.innovios@gmail.com', 'priyanshiprajapati', '__priyanshi__prajapati__', 'priyanshihp1709@gmail.com', 'priyanshihp1709@gmail.com', 'priyanshihp1709@gmail.com', 'Brandbeans', NULL, '2023-10-11 10:00:33', '2023-10-11 12:31:41'),
(200, 213, '9909004025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-26 14:12:47', '2023-10-26 14:12:47'),
(201, 214, '9966332255', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-26 14:53:11', '2023-10-26 14:53:11'),
(202, 215, '9687574990', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-26 16:07:15', '2023-10-26 16:07:15'),
(203, 216, '8238649994', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-26 16:23:19', '2023-10-26 16:23:19'),
(204, 217, '8347608320', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-31 10:17:45', '2023-10-31 10:17:45'),
(205, 218, '8238649994', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-31 10:33:24', '2023-10-31 10:33:24'),
(206, 219, '8238649994', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-31 10:38:08', '2023-10-31 10:38:08'),
(207, 220, '8238649994', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-31 10:40:11', '2023-10-31 10:40:11'),
(208, 221, '12345678910', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-31 10:44:05', '2023-10-31 10:44:05'),
(209, 222, '9876543210', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-02 11:09:47', '2023-11-02 11:09:47'),
(210, 223, '1234567809', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-02 11:20:21', '2023-11-02 11:20:21'),
(211, 224, '8758585996', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-02 11:51:06', '2023-11-02 11:51:06'),
(212, 225, '9723511278', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-02 11:55:38', '2023-11-02 11:55:38'),
(213, 226, '9913252048', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-04 11:43:07', '2023-11-04 11:43:07'),
(214, 227, '98765432130', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-29 10:49:17', '2023-12-29 10:49:17'),
(215, 228, '3030303030', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-10 11:40:02', '2024-01-10 11:40:02'),
(216, 229, '4248216485', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-06 11:12:43', '2024-02-06 11:12:43'),
(217, 230, '85471254634', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-20 05:05:54', '2024-02-20 05:05:54'),
(218, 231, '84794324818', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-26 06:20:35', '2024-03-26 06:20:35'),
(219, 232, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-12 07:17:15', '2024-06-12 07:17:15'),
(220, 233, '9624234183', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-05 11:19:45', '2024-07-05 11:19:45'),
(221, 234, '8401414567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-05 11:37:29', '2024-07-05 11:37:29'),
(222, 235, '8487868595', '8487868595', 'parvejjindani005@gmail.com', 'https://join.skype.com/parvez2003', 'https://facebook.com/parvej.jindani', 'https://instagram.com/_parvez_memon', 'https://twitter.com/parvez', 'https://youtube.com/@user123', 'https://linkedin.com/in/parvej-jindani-97b170223', 'https://www.blackbox.ai/chat/TJo8kwz', NULL, '2024-07-06 06:29:56', '2024-07-09 12:13:11');

-- --------------------------------------------------------

--
-- Table structure for table `cardportfoilos`
--

CREATE TABLE `cardportfoilos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cardportfoilos`
--

INSERT INTO `cardportfoilos` (`id`, `card_id`, `type`, `image`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, '1670306589.jpg', '2022-12-06 00:33:09', '2022-12-06 00:33:09'),
(12, 4, NULL, '1670323236.png', '2022-12-06 05:10:36', '2022-12-06 05:10:36'),
(15, 1, NULL, '1670388064.jpg', '2022-12-06 23:11:04', '2022-12-06 23:11:04'),
(16, 3, NULL, '1670395118.jpg', '2022-12-07 01:08:38', '2022-12-07 01:08:38'),
(17, 4, NULL, '1670395137.jpg', '2022-12-07 01:08:57', '2022-12-07 01:08:57'),
(18, 5, NULL, '1671097553.png', '2022-12-15 04:15:53', '2022-12-15 04:15:53'),
(19, 5, NULL, 'cardimage/D:\\xampp\\tmp\\php9146.tmp', '2022-12-19 04:15:13', '2022-12-19 04:15:13'),
(20, 5, NULL, 'cardimage/D:\\xampp\\tmp\\php86D8.tmp', '2022-12-19 04:18:27', '2022-12-19 04:18:27'),
(21, 3, NULL, 'cardimage/1671443903.jpg', '2022-12-19 04:20:19', '2022-12-19 04:28:23'),
(25, 24, NULL, '1671785039.jpg', '2022-12-23 03:13:59', '2022-12-23 03:13:59'),
(27, 3, NULL, '1671785142.jpg', '2022-12-23 03:15:42', '2022-12-23 03:15:42'),
(29, 28, 'Photo', '1671793430.jpg', '2022-12-23 05:33:50', '2022-12-23 05:33:50'),
(30, 28, 'Video', '1671793739.mp4', '2022-12-23 05:38:59', '2022-12-23 05:38:59'),
(39, 34, 'Video', 'https://www.youtube.com/embed/tgbNymZ7vqY', '2022-12-30 18:37:20', '2022-12-30 18:37:20'),
(40, 35, 'Photo', '1672483201.jpg', '2022-12-31 16:40:01', '2022-12-31 16:40:01'),
(42, 15, NULL, '', '2023-01-03 11:09:26', '2023-01-03 11:09:26'),
(44, 2, NULL, '/tmp/phpZKNNL5', '2023-01-05 11:27:16', '2023-01-05 11:27:16'),
(45, 2, NULL, '/tmp/phpvv3gFG', '2023-01-05 11:27:39', '2023-01-05 11:27:39'),
(46, 2, NULL, '/tmp/phpPD5Ryq', '2023-01-05 14:40:29', '2023-01-05 14:40:29'),
(47, 2, NULL, '/tmp/phpGaX4NZ', '2023-01-05 15:57:12', '2023-01-05 15:57:12'),
(54, 30, 'Photo', '1673338006.jpg', '2023-01-10 14:06:46', '2023-01-10 14:06:46'),
(55, 30, 'Photo', '1673338027.jpg', '2023-01-10 14:07:07', '2023-01-10 14:07:07'),
(56, 30, 'Photo', '1673338071.jpg', '2023-01-10 14:07:51', '2023-01-10 14:07:51'),
(57, 30, 'Photo', '1673338098.jpg', '2023-01-10 14:08:18', '2023-01-10 14:08:18'),
(58, 30, 'Photo', '1673338196.jpg', '2023-01-10 14:09:56', '2023-01-10 14:09:56'),
(60, 35, 'Photo', '1674282773.jpg', '2023-01-21 12:32:53', '2023-01-21 12:32:53'),
(61, 35, 'Photo', '1674282788.png', '2023-01-21 12:33:08', '2023-01-21 12:33:08'),
(62, 35, 'Photo', '1674282807.jpg', '2023-01-21 12:33:27', '2023-01-21 12:33:27'),
(63, 32, 'Photo', '1674296216.jpg', '2023-01-21 16:16:56', '2023-01-21 16:16:56'),
(64, 32, 'Photo', '1674296236.jpg', '2023-01-21 16:17:16', '2023-01-21 16:17:16'),
(65, 32, 'Photo', '1674296253.jpg', '2023-01-21 16:17:33', '2023-01-21 16:17:33'),
(66, 32, 'Photo', '1674296290.jpg', '2023-01-21 16:18:10', '2023-01-21 16:18:10'),
(67, 32, 'Photo', '1674296304.jpg', '2023-01-21 16:18:24', '2023-01-21 16:18:24'),
(91, 84, 'Image', '/tmp/phpwF7bJc', '2023-01-25 20:26:31', '2023-01-25 20:26:31'),
(92, 84, 'Image', '/tmp/phpdz07JZ', '2023-01-25 20:27:22', '2023-01-25 20:27:22'),
(97, 86, 'Image', '/tmp/php6A4MQQ', '2023-01-26 00:48:53', '2023-01-26 00:48:53'),
(119, 92, 'Image', '1674737514.png', '2023-01-26 18:51:54', '2023-01-26 18:51:54'),
(120, 85, 'Image', '1674744925.jpg', '2023-01-26 20:55:25', '2023-01-26 20:55:25'),
(123, 145, 'Image', '1675762549.jpg', '2023-02-07 04:05:49', '2023-02-07 04:05:49'),
(124, 145, 'Image', '1675762556.jpg', '2023-02-07 04:05:56', '2023-02-07 04:05:56'),
(125, 145, 'Photo', '1675767514.jpg', '2023-02-07 05:28:34', '2023-02-07 05:28:34'),
(141, 203, 'Photo', '1697106365.jpg', '2023-10-12 15:26:05', '2023-10-12 15:26:05'),
(143, 218, 'Photo', '1700733522.jpg', '2023-11-23 15:58:42', '2023-11-23 15:58:42'),
(157, 3, 'Photo', '1708079614.jpg', '2024-02-16 10:33:34', '2024-02-16 10:33:34'),
(158, 3, 'Photo', '1708079620.jpg', '2024-02-16 10:33:40', '2024-02-16 10:33:40'),
(159, 3, 'Photo', '1708079626.jpg', '2024-02-16 10:33:46', '2024-02-16 10:33:46'),
(160, 3, 'Photo', '1708079631.jpg', '2024-02-16 10:33:51', '2024-02-16 10:33:51'),
(161, 3, 'Photo', '1708172934.jpg', '2024-02-17 12:28:54', '2024-02-17 12:28:54'),
(162, 3, 'Photo', '1708172948.jpg', '2024-02-17 12:29:08', '2024-02-17 12:29:08'),
(163, 3, 'Photo', '1708173043.jpg', '2024-02-17 12:30:43', '2024-02-17 12:30:43'),
(164, 210, 'Photo', '1708324160.jpg', '2024-02-19 06:29:20', '2024-02-19 06:29:20'),
(165, 210, 'Photo', '1708324168.webp', '2024-02-19 06:29:28', '2024-02-19 06:29:28'),
(166, 210, 'Photo', '1708324176.avif', '2024-02-19 06:29:36', '2024-02-19 06:29:36');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `companyname` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `about` longtext DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `user_id`, `name`, `heading`, `companyname`, `category`, `city`, `state`, `address`, `about`, `year`, `logo`, `created_at`, `updated_at`) VALUES
(1, 2, 'Madhvi', 'advocate', 'shiv', 2, 'Rajkot', 'https://www.google.com/maps/place/Rajkot,+Gujarat/@22.2736308,70.7512556,12z/data=!3m1!4b1!4m5!3m4!1s0x3959c98ac71cdf0f:0x76dd15cfbe93ad3b!8m2!3d22.3038945!4d70.8021599', NULL, 'hello', NULL, '1673247719.jpg', '2022-12-05 23:57:29', '2023-01-09 13:01:59'),
(2, 2, 'Arpita Patel', 'CEO', 'ABCF PVT. LTD', 2, 'Ahmedabad', 'Maharastra', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '5 years', '1672984184.png', '2022-12-06 00:19:06', '2023-01-06 11:49:44'),
(3, 3, 'Rudrika Dave A', NULL, NULL, 163, 'Ahmedabad', NULL, 'Sindhu Bhavan Marg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, '1708155743.jpg', '2022-12-06 00:47:20', '2024-02-17 07:42:23'),
(4, 2, 'Keval', 'manager', 'shiv', 2, 'baroda', NULL, NULL, 'hiii', NULL, NULL, '2022-12-06 01:27:26', '2022-12-06 01:27:26'),
(5, 6, 'Rajiv', 'Heading', '-', 2, '-', NULL, NULL, '-', NULL, NULL, '2022-12-15 03:58:35', '2022-12-15 03:58:35'),
(6, 7, 'Ravi', 'ceo', '-', 2, '-', NULL, NULL, '-', NULL, '1676222212.png', '2022-12-15 04:42:00', '2023-02-14 12:02:06'),
(15, 19, 'Hemal', 'Developer', 'Perfetto Solutions', 4, 'Ahmedabad', NULL, NULL, 'This is my About', NULL, NULL, '2022-12-15 23:55:13', '2022-12-15 23:55:49'),
(16, 21, 'Bhavin', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-19 00:51:05', '2022-12-19 00:51:05'),
(19, 24, 'Pranali', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-20 05:54:43', '2022-12-20 05:54:43'),
(20, 25, 'M', 'Developer', 'Perfetto Solutions', 3, 'ahmedabad', 'Gujarat', NULL, 'bcvwugwc wf qfewfe 2yf fehwf euf2 eqwufi fwiufewi fiuh2eufew eiufwqe', NULL, NULL, '2022-12-20 06:33:58', '2022-12-20 07:04:52'),
(21, 26, 'Jinal', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-21 00:24:33', '2022-12-21 00:24:33'),
(22, 29, 'user', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-22 23:51:42', '2022-12-22 23:51:42'),
(27, 31, 'Kashyap', 'CEO', 'ABCF PVT. LTD', 5, 'Ahmedabad', 'Gujarat', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '5 years', NULL, '2022-12-23 01:54:31', '2023-01-25 13:10:03'),
(28, 32, 'raviraj', 'ceo', 'perfetto solution', 3, 'surendranagar', NULL, NULL, 'this is a it company', NULL, NULL, '2022-12-23 04:00:49', '2022-12-23 04:02:20'),
(29, 33, 'Jigar', 'Co-founder', 'Perfetto Solutions', 5, 'Surendranagar', 'Gujarat', NULL, 'Perfetto Solutions is a full-service software development and Mobile App company based in India. Our range of services include Mobile Apps development and Web Development', 'since 2019', '1674284873.png', '2022-12-23 06:47:38', '2023-01-21 16:44:39'),
(30, 34, 'jay', 'Founder', 'Aspireotech Solutions private limited', 13, 'Ahmedabad', 'Gujarat', NULL, 'Hi, I am Jaydeep Parekh, Founder and Director of Aspireotech. \r\n\r\nAspire-O-Tech, a young venture, provides cutting-edge tech solutions and services to clients which help them achieve their business aspirations. We are proficient in providing various tools and solutions for marketing technology. Our capabilities encompass Web Designing, Software Development, E-commerce Configurations, Strategic Digital Marketing, and Brand Building. We are committed to deliver time-bound, result oriented solutions.', '2015', '1674564894.png', '2022-12-23 22:01:14', '2023-01-24 18:54:54'),
(31, 35, 'Jay Panchal', 'Manager', '1920 Tattoo', 9, 'Ahemdabad', 'Gujrat', NULL, NULL, '1999', '1672753926.jpg', '2022-12-27 16:13:42', '2023-01-03 19:52:06'),
(32, 36, 'Malvik Bhavsar', 'Sound Engineer', 'J-live', 10, 'ahmedabad', NULL, NULL, 'Professional Audio , Stage lights & Trussing Rental based company', '1950', NULL, '2022-12-27 16:19:38', '2023-01-21 16:31:12'),
(33, 37, 'Yash Gohil', 'CEO', 'Mahakal IT Solution', 10, 'Ahmedabad', NULL, NULL, 'I am Front End Developer.', '1999', '1674564304.png', '2022-12-27 16:54:00', '2023-01-24 18:45:04'),
(34, 38, 'Bhumi Patel', 'MBBS', 'A B Hospital', 15, 'Ahmedabad', 'gujarat', NULL, 'Doctors, also known as physicians, are licensed health professionals who maintain and restore human health through the practice of medicine. They examine patients, review their medical history, diagnose illnesses or injuries, administer treatment, and counsel patients on their health and well-being.', '2', '1672403293.png', '2022-12-30 18:23:58', '2022-12-30 18:28:13'),
(35, 39, 'Jay Patel', 'Owner', 'Tap and tile', 37, 'Ahmedabad', 'Gujarat', NULL, 'This is jay Patel from Tap and tile,\r\nImporter of Designer sanitaryware & bathroom fittings.', '2019', '1674977262.png', '2022-12-31 16:30:57', '2023-01-29 01:57:42'),
(36, 40, 'Manav', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-02 17:29:52', '2023-01-02 17:29:52'),
(37, 41, 'Reena Bhatt', 'Creative Associate', 'Reena Bhatt', 176, 'Ahmedabad', 'Gujarat', NULL, 'Hi, I am Reena Bhatt. A digital creator, and conceptualizer who has been in the field for more than a decade.', '2020', NULL, '2023-01-03 19:50:13', '2023-01-21 12:12:27'),
(38, 42, 'Jay', NULL, NULL, 179, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-09 11:57:04', '2023-01-09 11:57:04'),
(39, 43, 'Raviraj', 'co-founder', 'Perfetto Solutions', 10, 'Surendranagar', 'Gujarat', NULL, 'Perfetto Solutions is a software development company founded in the year 2010 in Surendranagar, Gujarat. The founder of the company is the Late Mr. Hemal Shukla. He and his allies successfully ventured into Web Development, Software Application Designing, and Programming. Perfetto Solutions has progressed exceptionally and has accomplished more than 100 designing and developing projects on time.', '2010', '1673442769.png', '2023-01-11 19:10:43', '2023-01-11 19:12:49'),
(40, 44, 'Poonam', NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 16:43:19', '2023-01-13 16:43:19'),
(41, 45, 'Poonam', NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 17:22:29', '2023-01-13 17:22:29'),
(42, 46, 'Rajesh Satola', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 17:46:27', '2023-01-13 17:46:27'),
(43, 48, 'Javed', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 17:52:57', '2023-01-13 17:52:57'),
(45, 54, 'Rakesh', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 18:38:13', '2023-01-13 18:38:13'),
(46, 63, 'Ram', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 12:06:53', '2023-01-19 12:06:53'),
(47, 66, 'Ram', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 14:51:36', '2023-01-19 14:51:36'),
(48, 67, 'Ram', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 14:51:48', '2023-01-19 14:51:48'),
(49, 69, 'Ram', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 15:22:10', '2023-01-19 15:22:10'),
(50, 70, 'Ram', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 15:22:23', '2023-01-19 15:22:23'),
(51, 71, 'Rakesh', NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 15:46:19', '2023-01-19 15:46:19'),
(52, 72, 'Rakesh', NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 15:51:44', '2023-01-19 15:51:44'),
(53, 73, 'rakesh', NULL, NULL, 15, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 15:53:18', '2023-01-19 15:53:18'),
(54, 79, 'Ram', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:34:35', '2023-01-19 17:34:35'),
(55, 80, 'Ram', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:34:52', '2023-01-19 17:34:52'),
(56, 81, 'rakesh', NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:35:49', '2023-01-19 17:35:49'),
(57, 86, 'popatlal', NULL, NULL, 15, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:49:40', '2023-01-19 17:49:40'),
(58, 87, 'Urban kharidi', NULL, NULL, 60, NULL, NULL, NULL, NULL, NULL, '1674565114.png', '2023-01-19 17:55:13', '2023-01-24 18:58:34'),
(59, 89, 'Ram', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:55:57', '2023-01-19 17:55:57'),
(60, 90, 'Ram', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:56:06', '2023-01-19 17:56:06'),
(61, 92, 'Ram', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:56:53', '2023-01-19 17:56:53'),
(62, 93, 'Ram', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 18:06:42', '2023-01-19 18:06:42'),
(63, 94, 'rakesh', NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 18:16:33', '2023-01-19 18:16:33'),
(64, 95, 'Priti', 'CEO', 'Shiv computers', 18, NULL, NULL, NULL, 'Perfetto Solutions is a full-service software development and Mobile App company based in India. Our range of services include Mobile Apps development and Web Development', NULL, '1674298942.png', '2023-01-21 17:01:03', '2023-01-21 17:02:22'),
(67, 98, 'shirisha', NULL, NULL, 18, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-24 13:08:57', '2023-01-24 13:08:57'),
(68, 99, 'Rakesh Satola', 'Flutter Developer', 'Aspireotech', 110, 'Surendranagar', 'Gujarat', NULL, 'working as flutter developer in Aspireotech private limited', '2021', '1676183362.png', '2023-01-24 14:45:31', '2023-02-12 00:59:22'),
(69, 100, 'kashyap Trivedi', NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-24 14:51:41', '2023-01-24 14:51:41'),
(71, 102, 'Priti Shukla', 'M D', 'Shiv Computers', 57, 'Sureandranagar', 'Gujarat', NULL, NULL, '1998', '1674717960.png', '2023-01-24 15:14:22', '2023-01-26 13:27:52'),
(73, 104, 'Chirag Parmar', 'Founder', 'Digilife Services', 92, 'Ahmedabad, Baroda, Surat', 'Gujarat', NULL, NULL, '2017', NULL, '2023-01-24 18:47:26', '2023-01-24 20:38:01'),
(76, 107, 'all season', 'Owner', NULL, 145, 'Ahmedabad', NULL, NULL, NULL, NULL, '1675168646.png', '2023-01-24 23:27:12', '2023-01-31 07:07:26'),
(77, 108, 'mudrankan', NULL, NULL, 51, NULL, NULL, NULL, NULL, NULL, '1674627770.jpg', '2023-01-25 12:06:43', '2023-01-25 12:22:50'),
(78, 109, 'Kashyap Trivedi', NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, '1675279520.jpg', '2023-01-25 12:58:16', '2023-02-12 23:39:18'),
(79, 110, 'Gopal patel', 'CEO', 'Digital Electronics', 58, 'Ahembadad', 'Gujarat', NULL, 'LCD LED DISPLAY TV REPAIRING CENTRE', '2022', '1674650065.png', '2023-01-25 15:00:31', '2023-01-25 18:34:25'),
(80, 111, 'Digital Electronics', 'Owner', 'Digital Electronics', 58, 'Ahemdabad', 'Gujrat', NULL, 'Lcd Led Tv and Microwave oven Repairing Center', '2022', '1674710470.jpg', '2023-01-25 18:34:30', '2023-01-26 11:21:10'),
(81, 112, 'Dhruvi', NULL, NULL, 76, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-25 19:14:27', '2023-01-25 19:14:27'),
(82, 113, 'manish', NULL, NULL, 34, 're', NULL, NULL, NULL, NULL, NULL, '2023-01-25 19:56:58', '2023-01-25 20:03:37'),
(83, 114, 'jigar parmar', NULL, 'Shiv Computer', 13, 'Surendranagar', NULL, NULL, 'computer class \nfor all Languages', '1998', '1674656609.jpg', '2023-01-25 20:13:27', '2023-01-25 20:26:03'),
(84, 115, 'abc', 'dgf', 'vvff', 23, '345665', '566gfd', NULL, 'etygde', '45422', '1674656878.png', '2023-01-25 20:21:47', '2023-01-25 20:27:59'),
(85, 116, 'GCA', 'Director', 'GCA MANAGEMENT AND CONSULTANTS', 88, 'Delhi Kota ahemdabad', 'Rajasthan', NULL, 'We are Immigration consultants', '2020', '1674744567.jpg', '2023-01-25 23:55:41', '2023-01-26 20:49:27'),
(86, 117, 'Alpesh Mistry', NULL, 'Digital Electronics', 13, 'AHMEDABAD', 'Gujrat', NULL, 'Electronics Service Providers', '2002', '1674671764.jpg', '2023-01-26 00:30:50', '2023-01-26 00:46:17'),
(87, 118, 'Unnati', NULL, NULL, 183, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-26 08:55:23', '2023-01-26 08:55:23'),
(88, 119, 'rakesh', NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-26 11:01:57', '2023-01-26 11:01:57'),
(89, 120, 'bassino', NULL, 'Tap And Tile', 37, 'Ahmedabad', 'Gujarat', NULL, NULL, NULL, '1675841064.png', '2023-01-26 12:05:55', '2023-02-18 01:28:15'),
(90, 121, 'Nihar', NULL, NULL, 89, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-26 12:21:44', '2023-01-26 12:21:44'),
(91, 122, 'John', NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-26 16:16:37', '2023-01-26 16:16:37'),
(92, 123, 'Rocky', NULL, NULL, 164, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-26 17:30:31', '2023-01-26 17:30:31'),
(93, 124, 'Nitin Prajapati', NULL, NULL, 49, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 14:25:01', '2023-01-27 14:25:01'),
(94, 125, 'Pappu', NULL, 'ghhh', 191, 'fggg', 'fggg', NULL, 'dghg', 'fhhh', '1675338004.png', '2023-01-27 15:49:48', '2023-02-02 06:10:04'),
(95, 126, 'Devang Soni', 'CEO', 'EliteEvince', 13, 'Ahmedabad', 'Gujarat', NULL, NULL, '2013', '1674826196.jpg', '2023-01-27 18:20:32', '2023-01-27 19:29:56'),
(96, 127, 'sailu mehta', NULL, NULL, 44, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 18:22:25', '2023-01-27 18:22:25'),
(97, 128, 'Salvi Yash', NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 19:30:19', '2023-01-27 19:30:19'),
(98, 129, 'Parth V. Patel', NULL, NULL, 176, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-29 01:02:53', '2023-01-29 01:02:53'),
(99, 130, 'parth', NULL, NULL, 15, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-29 09:08:15', '2023-01-29 09:08:15'),
(100, 131, 'Mona', 'Digital marketing head', 'BASSINO IMPEX PVT LTD', 37, 'Ahmedabad', 'Gujarat', NULL, NULL, '2023', NULL, '2023-01-29 12:30:36', '2023-01-30 11:09:56'),
(101, 132, 'mnp', NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-29 18:36:47', '2023-01-29 18:36:47'),
(102, 133, 'Vipul', NULL, NULL, 46, NULL, NULL, NULL, NULL, NULL, '1675087628.jpg', '2023-01-30 08:34:25', '2023-01-30 08:37:08'),
(103, 134, 'harshil shah', NULL, NULL, 63, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 06:49:54', '2023-01-31 06:49:54'),
(104, 135, 'Forrum', NULL, NULL, 164, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 07:42:12', '2023-01-31 07:42:12'),
(105, 136, 'rohit', NULL, NULL, 30, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 08:06:16', '2023-01-31 08:06:16'),
(106, 137, 'Ankur', NULL, NULL, 57, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 08:44:39', '2023-01-31 08:44:39'),
(107, 138, 'khushboo', NULL, NULL, 15, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 09:23:37', '2023-01-31 09:23:37'),
(108, 139, 'kushansinh', NULL, NULL, 22, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 10:33:35', '2023-01-31 10:33:35'),
(109, 140, 'Devbhai', NULL, NULL, 63, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 10:38:33', '2023-01-31 10:38:33'),
(110, 141, 'ashaben', NULL, NULL, 27, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 11:14:49', '2023-01-31 11:14:49'),
(111, 142, 'Divya', NULL, NULL, 40, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 11:15:52', '2023-01-31 11:15:52'),
(112, 143, 'sohebkhan', NULL, NULL, 25, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 11:18:12', '2023-01-31 11:18:12'),
(113, 144, 'sahil', NULL, NULL, 25, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 23:40:17', '2023-01-31 23:40:17'),
(114, 145, 'dhruvi', NULL, NULL, 76, NULL, NULL, NULL, NULL, NULL, '1676545743.jpg', '2023-02-01 04:17:30', '2023-02-16 05:39:03'),
(115, 146, 'rakesh', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-01 07:30:37', '2023-02-01 07:30:37'),
(116, 147, 'Ramm', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-01 07:32:34', '2023-02-01 07:32:34'),
(117, 148, 'rskdkfnfcj', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, '1675256670.png', '2023-02-01 07:34:01', '2023-02-01 07:34:30'),
(118, 149, 'shggcc', NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-01 07:35:22', '2023-02-01 07:35:22'),
(119, 150, 'Rakesh', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, '1675257014.jpg', '2023-02-01 07:39:44', '2023-02-01 07:40:14'),
(120, 151, 'jainil', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-01 23:40:39', '2023-02-01 23:40:39'),
(121, 152, 'Harsh Maniar', NULL, NULL, 141, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 00:16:25', '2023-02-02 00:16:25'),
(122, 153, 'raviraj', NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 01:02:40', '2023-02-02 01:02:40'),
(123, 154, 'pappu', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 01:08:24', '2023-02-02 01:08:24'),
(124, 155, 'Rakesh satola', NULL, NULL, 191, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 01:33:26', '2023-02-02 01:33:26'),
(125, 156, 'nilesh', NULL, NULL, 63, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 03:14:54', '2023-02-02 03:14:54'),
(126, 157, 'Ravirajsinh Gohil', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 03:18:02', '2023-02-02 03:18:02'),
(127, 158, 'laksh', NULL, NULL, 27, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 04:10:11', '2023-02-02 04:10:11'),
(128, 159, 'Rakesh', NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 04:43:29', '2023-02-02 04:43:29'),
(129, 163, 'Yash Gohil', NULL, NULL, 176, NULL, NULL, NULL, NULL, NULL, '1675339526.png', '2023-02-02 06:19:23', '2023-02-02 06:35:26'),
(130, 164, 'Parin', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 06:23:50', '2023-02-02 06:23:50'),
(131, 165, 'Ekta parekh', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 09:07:04', '2023-02-02 09:07:04'),
(132, 166, 'Dhanam', NULL, 'Cityofferings', 197, 'Ahmedabad', 'Gujarat', NULL, NULL, NULL, '1675357506.png', '2023-02-02 11:28:23', '2023-02-02 11:35:06'),
(133, 167, 'inder ojha', NULL, NULL, 72, NULL, NULL, NULL, NULL, NULL, '1675370700.jpg', '2023-02-02 15:14:47', '2023-02-02 15:15:00'),
(134, 168, 'zaman', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-04 01:48:33', '2023-02-04 01:48:33'),
(135, 169, 'Nayan Makadiya', NULL, 'KenXill Enterprise', 176, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-04 01:56:50', '2023-02-04 02:01:30'),
(136, 170, 'Kishan Singh', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, '1675497924.png', '2023-02-04 02:34:51', '2023-02-04 02:35:24'),
(137, 171, 'Krishna', NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-04 20:03:39', '2023-02-04 20:03:39'),
(138, 172, 'jayhind', NULL, NULL, 34, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-05 02:09:29', '2023-02-05 02:09:29'),
(139, 173, 'karan', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-05 02:53:11', '2023-02-05 02:53:11'),
(140, 174, 'Enoke. M. A. B. L', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, '1675623354.jpg', '2023-02-05 13:24:18', '2023-02-05 13:25:54'),
(141, 175, 'Mithilesh Kumar Shah', 'manejer', 'singapure groups', 106, 'singrouli', 'Madhya pradesh', NULL, 'bus stand mada distt.singrouli madhya pradesh', NULL, NULL, '2023-02-05 19:08:15', '2023-02-07 04:11:06'),
(142, 176, 'ayushman payasi', NULL, NULL, 135, NULL, NULL, NULL, NULL, NULL, '1675670634.png', '2023-02-06 02:33:09', '2023-02-06 02:33:54'),
(143, 177, 'DHANANJAY', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-06 03:11:51', '2023-02-06 03:11:51'),
(144, 178, 'Sudeep', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 01:14:05', '2023-02-07 01:14:05'),
(145, 179, 'Samir', 'Founder', 'Krupali Consultancy', 54, 'Ahmedabad', 'Gujarat', NULL, 'Consultancy Services for licence', '2021', '1675763486.jpg', '2023-02-07 03:13:05', '2023-02-07 07:37:13'),
(146, 180, 'selva', NULL, NULL, 86, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 05:38:36', '2023-02-07 05:38:36'),
(147, 181, 'Vijay', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 05:53:27', '2023-02-07 05:53:27'),
(148, 182, 'naveen', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, '1675770445.jpg', '2023-02-07 06:16:59', '2023-02-07 06:17:25'),
(149, 183, 'rima', NULL, NULL, 106, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 06:46:54', '2023-02-07 06:46:54'),
(150, 184, 'prasad', NULL, NULL, 62, NULL, NULL, NULL, NULL, NULL, '1675774955.jpg', '2023-02-07 07:32:08', '2023-02-07 07:32:35'),
(151, 185, 'navaz', NULL, NULL, 123, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 14:20:03', '2023-02-07 14:20:03'),
(152, 186, 'alam', NULL, NULL, 27, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 14:28:28', '2023-02-07 14:28:28'),
(153, 187, 'SUNIL SINGH', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, '1675804781.jpg', '2023-02-07 15:48:24', '2023-02-07 15:49:41'),
(154, 188, 'raj', NULL, NULL, 20, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 23:02:56', '2023-02-07 23:02:56'),
(155, 189, 'Demo', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-09 05:06:39', '2023-02-09 05:06:39'),
(156, 190, 'Darshan', 'Developer', 'Abc Privet Limited', 197, 'Surat', 'Gujarat', NULL, 'abcabcbacbacbcabcabcabcbacbacbacabcabcabcabcabcacbacabcabcacabacbaabacabcabcabcabcabcbacbcbcbchsds', 'since 2019', '1676013502.png', '2023-02-10 01:45:39', '2023-02-10 01:48:22'),
(158, 192, 'Rakesh Satola', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 04:00:53', '2023-02-10 04:00:53'),
(160, 194, 'Rohit Satola', NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 04:20:14', '2023-02-10 04:20:14'),
(161, 195, 'Mehul kaliya', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 04:22:18', '2023-02-10 04:22:18'),
(162, 196, 'Mohini', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 04:25:15', '2023-02-10 04:25:15'),
(163, 197, 'Amritesh Puri', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 10:05:10', '2023-02-10 10:05:10'),
(164, 198, 'dulaari', NULL, NULL, 62, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-11 10:24:51', '2023-02-11 10:24:51'),
(165, 199, 'Sumanta Kumar Sahu', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, '1676198724.jpg', '2023-02-12 05:14:16', '2023-02-12 05:15:24'),
(166, 200, 'GOVIND singh Rajput', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 05:26:29', '2023-02-12 05:26:29'),
(167, 201, 'imran mansuri', NULL, NULL, 148, NULL, NULL, NULL, NULL, NULL, '1676199752.jpg', '2023-02-12 05:31:13', '2023-02-12 05:32:32'),
(168, 202, 'ambik', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:06:28', '2023-02-12 13:06:28'),
(169, 203, 'Ravi', NULL, NULL, 108, NULL, NULL, NULL, NULL, NULL, '1676227262.jpg', '2023-02-12 13:08:12', '2023-02-12 13:11:02'),
(170, 204, 'prabhjot singh', NULL, NULL, 108, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:13:06', '2023-02-12 13:13:06'),
(171, 205, 'Sahida', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:14:08', '2023-02-12 13:14:08'),
(172, 206, 'adi', NULL, NULL, 133, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:15:45', '2023-02-12 13:15:45'),
(173, 207, 'anubhav', NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:20:37', '2023-02-12 13:20:37'),
(174, 208, 'siva', NULL, NULL, 135, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:20:42', '2023-02-12 13:20:42'),
(175, 209, 'છનભા', NULL, NULL, 147, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:21:57', '2023-02-12 13:21:57'),
(176, 210, 'Alan V S', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, '1707918120.png', '2023-02-12 13:22:05', '2023-02-12 13:22:05'),
(177, 211, 'ajubha', NULL, NULL, 26, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-13 04:16:25', '2023-02-13 04:16:25'),
(178, 212, 'Mangesh', NULL, NULL, 23, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-14 08:08:10', '2023-02-14 08:08:10'),
(179, 213, 'kaushal jadwani', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, '1707975096.png', '2023-02-15 02:21:02', '2023-02-15 02:21:02'),
(180, 214, 'dhaval', NULL, NULL, 15, NULL, NULL, NULL, NULL, NULL, '1676450961.png', '2023-02-15 03:17:51', '2023-02-15 03:19:21'),
(181, 215, 'demo1', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-15 05:43:36', '2023-02-15 05:43:36'),
(182, 216, 'Ankita Tripathi', 'Education Head', 'SHANTINIKETAN EDUCATIONAL ACADEMY', 57, 'BILASPUR', 'CHHATTISGARH', NULL, NULL, NULL, '1676460742.jpg', '2023-02-15 06:01:58', '2023-02-15 06:03:55'),
(183, 217, 'Dhaval Patel', NULL, NULL, 58, NULL, NULL, NULL, NULL, NULL, '1676657347.jpg', '2023-02-17 12:38:12', '2023-02-17 12:39:07'),
(184, 218, 'suraj', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-17 13:38:29', '2023-02-17 13:38:29'),
(185, 219, 'abc', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-21 10:06:29', '2023-02-21 10:06:29'),
(186, 220, 'sagar', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-23 08:10:56', '2023-02-23 08:10:56'),
(187, 221, 'Manjul Soni', 'CEO', 'M J Solutions', 38, 'Ahmedabad', 'Gujarat', NULL, 'We provide One-Stop Solutions to your Business needs in terms of Accounting, GST, Income tax and Finance', '2010', NULL, '2023-02-26 01:12:50', '2023-02-26 01:16:58'),
(192, 239, 'Hulk', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-16 05:39:03', '2023-03-16 05:39:03'),
(193, 240, 'Peter', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-16 06:17:50', '2023-03-16 06:17:50'),
(196, 243, 'jigar', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-23 10:29:32', '2023-03-23 10:31:24'),
(197, 244, 'Tom', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-23 10:46:23', '2023-03-23 10:46:23'),
(198, 246, 'thor', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-23 12:19:57', '2023-03-23 12:19:57'),
(199, 247, 'Bheem', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24 05:33:10', '2023-03-24 05:33:10'),
(200, 248, 'doraemon', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24 05:36:35', '2023-03-24 05:36:35'),
(202, 264, 'lllll', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-04 09:12:24', '2023-04-04 09:12:24'),
(203, 1, 'Admin', 'Admin', 'Aspireo Tech', 92, 'Ahmedabad', 'Gujrat', NULL, 'abcdbacbcdcbs', '2', '1680604845.jpg', NULL, '2023-10-30 14:26:28'),
(204, 265, 'sss', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-27 04:08:07', '2023-04-27 04:08:07'),
(205, 266, 'bbb', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-27 04:09:15', '2023-04-27 04:09:15'),
(206, 267, 'richa medatwal', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-02 14:27:36', '2023-05-02 14:27:36'),
(207, 268, 'newUser', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-11 09:32:20', '2023-05-11 09:32:20'),
(208, 269, 'Influencer', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-23 14:26:23', '2023-06-23 14:26:23'),
(209, 270, 'New influence', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-03 13:46:22', '2023-07-03 13:46:22'),
(210, 271, 'Best Resturant', 'Owner', 'Best Resturant', 16, 'Ahmedabad', 'Gujarat', 'Ahmedabad', '<p>Welcome to our restaurant&rsquo;s &ldquo;About Us&rdquo; page! Here, we share the story of how our culinary adventure began and what makes us unique.</p>\r\n\r\n<p>Meet the passionate team behind the scenes, discover our commitment to quality ingredients, and feel the warmth of our inviting ambiance. Join us on this journey as we invite you to be a part of our delicious story.<br />\r\n&nbsp;</p>\r\n\r\n<h1><strong>Introduction To The Restaurant:</strong></h1>\r\n\r\n<ul>\r\n	<li>Briefly introduce your restaurant, providing a snapshot of its history and mission.</li>\r\n	<li>Highlight what makes your restaurant unique or special.</li>\r\n</ul>\r\n\r\n<h1><strong>Founding Story:</strong></h1>\r\n\r\n<ul>\r\n	<li>Share the story of how the restaurant was founded. This personal touch can create a connection with customers.</li>\r\n</ul>\r\n\r\n<h1><strong>Philosophy And Values:</strong></h1>\r\n\r\n<ul>\r\n	<li>Outline the core values and principles that guide your restaurant. This helps customers understand the ethos behind your business.</li>\r\n</ul>\r\n\r\n<h1><strong>Chef And Team:</strong></h1>\r\n\r\n<ul>\r\n	<li>Introduce the chef and key members of the kitchen and service teams.</li>\r\n	<li>Share their backgrounds, expertise, and contributions to the restaurant.</li>\r\n</ul>\r\n\r\n<h1><strong>Environmental Initiatives:</strong></h1>\r\n\r\n<ul>\r\n	<li>If applicable, outline any environmentally friendly practices or sustainability initiatives your restaurant follows.</li>\r\n</ul>\r\n\r\n<h1><strong>Interior Design And Ambiance:</strong></h1>\r\n\r\n<ul>\r\n	<li>Share information about the restaurant&rsquo;s interior design, ambiance, and overall atmosphere.</li>\r\n	<li>Include any unique architectural features or design elements.</li>\r\n</ul>', '2019', '1708337111.jpg', '2023-07-03 16:45:09', '2024-02-20 05:37:08'),
(211, 272, 'priyanshi prajapati', NULL, NULL, 15, NULL, NULL, NULL, NULL, NULL, '1696926659.jpg', '2023-10-10 12:13:34', '2023-10-10 13:30:59'),
(212, 273, 'Prajapati Priyanshi', NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, '1697000707.jpg', '2023-10-11 10:00:32', '2023-10-11 10:05:07'),
(213, 274, 'Priyanshi', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, '1707975096.png', '2023-10-26 14:12:47', '2023-10-27 10:03:18'),
(214, 275, 'Test Influencer', NULL, NULL, 30, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-26 14:53:11', '2024-01-12 07:54:24'),
(215, 276, 'Raviraj', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-26 16:07:15', '2023-10-26 16:07:15'),
(216, 277, 'rajeshri', 'QA', 'lotus', 197, 'paldi', 'gujarat', NULL, NULL, NULL, '1698403703.jpg', '2023-10-26 16:23:19', '2023-10-27 15:48:23'),
(217, 285, 'shivu', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-31 10:17:45', '2023-10-31 10:17:45'),
(218, 287, 'Testing', 'xyz', 'innovius', 15, 'ahmedabad', 'gujarat', NULL, NULL, NULL, '1707975190.png', '2023-10-31 10:33:24', '2023-11-23 18:33:57'),
(219, 288, 'rajeshri', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-31 10:38:08', '2023-10-31 10:38:08'),
(220, 289, 'rajeshri', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-31 10:40:11', '2023-10-31 10:40:11'),
(221, 290, 'shivu', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-31 10:44:04', '2023-10-31 10:44:04'),
(222, 295, 'Rakesh satola', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-02 11:09:47', '2023-11-02 11:09:47'),
(223, 296, 'sdhgjvhsj', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, '1707975261.png', '2023-11-02 11:20:21', '2023-11-02 11:20:21'),
(224, 297, 'kaliya prakash', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-02 11:51:06', '2023-11-02 11:51:06'),
(225, 298, 'gidwani sumit', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-02 11:55:38', '2023-11-02 11:55:38'),
(226, 302, 'gaurav', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-04 11:43:06', '2023-11-04 11:43:06'),
(227, 305, 'testInfluencer1', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-29 10:49:17', '2023-12-29 10:49:17'),
(228, 307, 'user', NULL, NULL, 25, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-10 11:40:02', '2024-01-10 11:40:02'),
(229, 308, 'test', NULL, NULL, 25, NULL, NULL, NULL, NULL, 'since 2019', '1707975332.png', '2024-02-06 11:12:43', '2024-02-06 12:54:47'),
(230, 309, 'newman', NULL, NULL, 100, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-20 05:05:54', '2024-02-20 05:05:54'),
(231, 310, '', NULL, NULL, 29, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-26 06:20:35', '2024-03-26 06:20:35'),
(232, 249, 'writer', NULL, NULL, 220, NULL, NULL, NULL, NULL, '2020', NULL, '2024-06-12 07:02:09', '2024-06-12 09:45:30'),
(233, 336, 'parvez jindani', NULL, NULL, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-05 11:19:45', '2024-07-05 11:19:45'),
(234, 337, 'vishnuprakhash', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-05 11:37:29', '2024-07-05 11:37:29'),
(235, 338, 'parvez jindani', 'Laravel Developer', 'Flipcode Solutions', 27, 'Surendranagar', 'Gujarat', 'mill road juni haveli near school no 15', '<span style=\"font-weight: bold;\">hellow </span><div><span style=\"font-weight: bold;\"><span style=\"font-style: italic;\"><span style=\"font-weight: bold;\"><span style=\"font-weight: bold;\">hey there <span><ul><li>hellow how are you </li><li>I am fine <span><ul><li>dslfakjadsbhf<span><ul><li>dsfadsf<span><ol><li>dsfadsf<span><ol><li>sdfdsaf</li></ol></span></li></ol></span></li></ul></span></li></ul></span></li></ul><p><span></span></p><ul><br></ul></span><p></p></span></span></span></span></div>', '2003', '1720248219.png', '2024-07-06 06:29:56', '2024-07-11 09:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `cardservices`
--

CREATE TABLE `cardservices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cardservices`
--

INSERT INTO `cardservices` (`id`, `card_id`, `category`, `created_at`, `updated_at`) VALUES
(1, 2, 'rurika', '2022-12-06 01:01:33', '2022-12-06 01:01:33'),
(2, 3, 'laravel', '2022-12-06 04:49:08', '2022-12-06 04:49:08'),
(3, 4, 'Fresher', '2022-12-06 04:49:40', '2022-12-06 04:49:40'),
(5, 1, 'laravel devloper', '2022-12-06 23:10:01', '2022-12-06 23:10:01'),
(7, 4, 'php devloper', '2022-12-07 01:21:20', '2022-12-07 01:21:20');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(255) NOT NULL,
  `statid` int(11) NOT NULL,
  `is_delete` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`, `statid`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'Ahmedabad', 1, 'Deactive', '2022-12-19 07:06:56', '2023-10-18 12:22:57'),
(2, 'Pune', 2, 'Active', '2022-12-19 07:07:10', '2022-12-19 07:07:10'),
(3, 'Ahmedabad', 1, 'Active', '2022-12-29 19:21:50', '2022-12-29 19:21:50'),
(4, 'surendranagar', 1, 'Deactive', '2022-12-29 19:22:06', '2022-12-29 19:22:32'),
(5, 'Kalol', 1, 'Active', '2023-10-11 17:44:33', '2023-10-11 17:44:33'),
(6, 'narol', 1, 'Deactive', '2023-10-26 14:58:18', '2023-10-26 15:00:09'),
(7, 'narol', 1, 'Deactive', '2023-10-26 14:58:20', '2023-10-26 15:00:02'),
(8, 'narol', 1, 'Deactive', '2023-10-26 14:58:21', '2023-10-26 14:59:52'),
(9, 'narol', 1, 'Deactive', '2023-10-26 14:58:26', '2023-10-26 14:59:44'),
(10, 'narol', 1, 'Deactive', '2023-10-26 15:00:58', '2023-10-26 15:01:17'),
(11, 'narol', 1, 'Deactive', '2023-10-26 15:01:00', '2023-10-31 16:15:51'),
(12, 'kanchipuram', 8, 'Active', '2023-10-31 16:07:40', '2023-10-31 16:07:40'),
(13, 'bikaner', 9, 'Active', '2023-10-31 16:10:43', '2023-10-31 16:10:43'),
(14, 'kochin', 10, 'Active', '2023-10-31 16:12:05', '2023-10-31 16:12:05'),
(15, 'puri', 11, 'Active', '2023-10-31 16:14:44', '2023-10-31 16:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `costs`
--

CREATE TABLE `costs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `costs`
--

INSERT INTO `costs` (`id`, `userId`, `amount`, `created_at`, `updated_at`) VALUES
(1, 109, 79, '2023-11-01 14:34:04', '2023-11-07 11:03:02'),
(2, 250, 800, '2023-11-01 16:18:42', '2023-11-01 16:18:42'),
(3, 252, 678, '2023-11-01 16:19:04', '2023-11-01 16:19:04'),
(4, 3, 500, '2024-01-30 12:39:54', '2024-01-30 12:39:54');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_id` int(11) NOT NULL,
  `counter` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `card_id`, `counter`, `created_at`, `updated_at`) VALUES
(1, 3, 451, '2022-12-26 19:57:00', '2024-06-12 07:29:58'),
(2, 30, 89, '2022-12-26 20:24:18', '2023-07-26 17:51:49'),
(3, 33, 26, '2022-12-27 17:22:06', '2023-02-02 05:28:59'),
(4, 28, 2, '2022-12-28 12:56:48', '2023-01-02 11:19:11'),
(5, 34, 21, '2022-12-30 18:24:08', '2023-03-15 09:13:27'),
(6, 35, 46, '2022-12-31 16:34:14', '2023-02-21 07:46:25'),
(7, 31, 3, '2023-01-03 19:48:49', '2023-01-24 22:38:31'),
(8, 37, 21, '2023-01-03 21:39:11', '2023-01-21 16:35:35'),
(9, 32, 17, '2023-01-12 11:30:29', '2023-01-21 19:45:15'),
(10, 38, 3, '2023-01-21 12:36:24', '2023-01-21 12:36:43'),
(11, 29, 9, '2023-01-21 13:06:04', '2023-01-21 17:04:21'),
(12, 64, 6, '2023-01-21 17:01:10', '2023-01-21 17:09:50'),
(13, 6, 8, '2023-01-21 17:07:04', '2023-03-16 05:34:53'),
(14, 65, 3, '2023-01-21 22:03:34', '2023-01-21 22:05:10'),
(15, 68, 22, '2023-01-24 15:02:27', '2023-02-24 08:54:43'),
(16, 74, 1, '2023-01-24 21:50:47', '2023-01-24 21:50:47'),
(17, 75, 6, '2023-01-24 23:24:43', '2023-01-25 07:30:01'),
(18, 76, 4, '2023-01-25 10:10:22', '2023-02-06 03:24:46'),
(19, 78, 6, '2023-01-25 13:32:19', '2023-02-01 23:51:29'),
(20, 80, 1, '2023-01-25 19:16:52', '2023-01-25 19:16:52'),
(21, 83, 4, '2023-01-25 20:16:58', '2023-01-25 20:31:30'),
(22, 84, 5, '2023-01-25 20:26:50', '2023-01-25 20:40:55'),
(23, 86, 4, '2023-01-26 00:36:12', '2023-01-26 00:55:06'),
(24, 71, 3, '2023-01-26 13:26:14', '2023-01-26 13:27:54'),
(25, 85, 1, '2023-01-26 13:52:46', '2023-01-26 13:52:46'),
(26, 95, 1, '2023-01-27 19:28:24', '2023-01-27 19:28:24'),
(27, 94, 2, '2023-01-30 04:44:17', '2023-01-31 12:38:50'),
(28, 104, 1, '2023-01-31 07:43:42', '2023-01-31 07:43:42'),
(29, 129, 1, '2023-02-02 06:39:20', '2023-02-02 06:39:20'),
(30, 132, 2, '2023-02-02 11:34:00', '2023-02-02 11:34:08'),
(31, 137, 1, '2023-02-04 20:15:56', '2023-02-04 20:15:56'),
(32, 140, 1, '2023-02-05 13:33:09', '2023-02-05 13:33:09'),
(33, 143, 2, '2023-02-06 03:12:26', '2023-02-06 03:14:35'),
(34, 144, 5, '2023-02-07 01:21:08', '2023-02-10 02:37:24'),
(35, 145, 14, '2023-02-07 04:14:06', '2023-02-10 02:38:54'),
(36, 156, 2, '2023-02-10 01:48:25', '2023-02-10 01:49:00'),
(37, 157, 1, '2023-02-10 03:55:42', '2023-02-10 03:55:42'),
(38, 114, 2, '2023-02-16 06:15:35', '2023-02-16 06:15:45'),
(39, 89, 1, '2023-02-18 01:31:55', '2023-02-18 01:31:55'),
(40, 19, 1, '2023-03-16 05:35:06', '2023-03-16 05:35:06'),
(41, 187, 1, '2023-03-16 05:35:37', '2023-03-16 05:35:37'),
(42, 192, 10, '2023-03-16 05:39:09', '2023-03-16 05:44:50'),
(43, 193, 12, '2023-03-16 06:19:21', '2023-03-16 10:12:20'),
(44, 198, 5, '2023-03-23 12:57:20', '2023-03-23 13:01:05'),
(45, 203, 5, '2023-04-04 11:15:10', '2023-10-12 15:04:37'),
(46, 216, 5, '2023-10-26 16:23:43', '2023-10-27 16:02:02'),
(47, 211, 3, '2023-10-26 17:24:13', '2023-10-26 17:25:56'),
(48, 210, 5, '2023-10-27 12:11:10', '2024-02-21 05:16:20'),
(49, 218, 7, '2023-11-23 16:29:00', '2023-11-23 18:32:01'),
(50, 232, 4, '2024-06-12 07:21:32', '2024-06-12 07:29:26'),
(51, 235, 26, '2024-07-06 06:39:06', '2024-07-11 09:44:18');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `couponCode` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `validUpto` date NOT NULL,
  `couponFor` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `title`, `couponCode`, `discount`, `validUpto`, `couponFor`, `created_at`, `updated_at`) VALUES
(1, '50% OFF', '50BRANDBEAND', '50', '2023-06-10', 5, '2023-05-04 11:37:12', '2023-05-04 11:37:12'),
(2, '20% OFF On your Premium Package', '20BRAND', '20', '2023-05-31', 5, '2023-05-04 11:53:46', '2023-05-04 11:53:46'),
(3, 'yhjcdssbd', 'yewnbejdb', '73', '2023-10-17', 5, '2023-10-18 13:57:12', '2023-10-18 13:57:12'),
(4, '70% Diwali offer', '70DIWALI', '70', '2023-12-06', 5, '2023-10-31 17:58:35', '2023-10-31 17:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `star` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `card_id`, `name`, `email`, `message`, `star`, `created_at`, `updated_at`) VALUES
(1, 4, 'Rajiv', 'rajiv@gmail.com', 'Excellent Web Design & Development Serviecs.', '5', '2022-12-21 07:17:07', '2022-12-21 07:17:07'),
(2, 4, 'Bhargav', 'bhargav@gmail.com', 'This is the Best Digital Business Card Making site', '5', '2022-12-21 07:21:17', '2022-12-21 07:21:17'),
(3, 3, 'Rudrika', 'rudrika@gmail.com', 'nice', '5', '2022-12-22 01:05:00', '2022-12-22 01:05:00'),
(4, 28, 'abcd', 'abcd@gmail.com', 'tghiyhdqscbi cdbabdb ghicg', '5', '2022-12-23 05:40:10', '2022-12-23 05:40:10'),
(5, 28, 'jdf', 'abcd@gmail.com', 'kcebuicf ciweubci', '5', '2022-12-23 05:55:59', '2022-12-23 05:55:59'),
(6, 28, 'abcd', 'admin@demo.com', 'thid iosbsdoc sdioc', '5', '2022-12-23 06:03:16', '2022-12-23 06:03:16'),
(7, 28, 'abcd', 'abcd@gmail.com', 'ibciuechfecf ihwfhwfv', '5', '2022-12-23 06:06:10', '2022-12-23 06:06:10'),
(8, 3, 'raviraj', 'ravirajsinh.m.gohil@gmail.com', 'this is nice', '5', '2022-12-23 19:51:34', '2022-12-23 19:51:34'),
(9, 30, 'parin', 'parin.aspireotech@gmail.com', 'Very good', '5', '2022-12-24 11:23:16', '2022-12-24 11:23:16'),
(10, 34, 'Rajiv', 'rajiv@gmail.com', 'Woooww Such A nice Card', '5', '2022-12-30 18:38:04', '2022-12-30 18:38:04'),
(11, 3, 'Rajvi', 'rajvi@gmail.com', 'this is very good site', '5', '2023-01-09 14:58:26', '2023-01-09 14:58:26'),
(12, 3, 'Rajvi', 'rajvi@gmail.com', 'this is very good site', '5', '2023-01-10 18:20:44', '2023-01-10 18:20:44'),
(13, 30, 'Radhika', 'radhika.bhavsar87@gmail.com', 'Portfolio is Impressive', '5', '2023-01-12 15:06:36', '2023-01-12 15:06:36'),
(14, 145, 'Sanjay', 'deysudeep2002@gmail.com', 'Update your web site', '5', '2023-02-07 04:35:27', '2023-02-07 04:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `card_id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 28, 'asdfasf', 'admin@demo.com', '9876543210', 'fads', '2022-12-23 06:09:20', '2022-12-23 06:09:20'),
(2, 30, 'jaydeep parekh', 'jaydeep.parekh@gmail.com', '9979891148', 'Hello', '2022-12-24 11:22:21', '2022-12-24 11:22:21'),
(3, 34, 'disha', 'disha123@gmail.com', '6587491200', 'this is a test enquiry', '2022-12-30 18:39:21', '2022-12-30 18:39:21'),
(4, 30, 'Jay Patel', 'jaybhut007@gmail.com', '9033699459', 'I am interested in social media', '2022-12-31 16:08:04', '2022-12-31 16:08:04'),
(5, 30, 'Richa Bhavsar', 'richabhavsar9@gmail.com', '9574747226', 'kuyfytedyut', '2023-01-12 15:06:55', '2023-01-12 15:06:55'),
(6, 145, 'Sudeep Dey', 'deysudeep2002@gmail.com', '9773130368', 'Want to make Car Driving Licence', '2023-02-07 04:36:10', '2023-02-07 04:36:10'),
(7, 3, 'Foram', 'foram@gmail.com', '9999999999', 'what is the procedure of making this kind of card', '2023-03-14 10:52:35', '2023-03-14 10:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `i_m_p_g_payments`
--

CREATE TABLE `i_m_p_g_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `payment_request_id` varchar(255) NOT NULL,
  `payment_link` varchar(255) NOT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `i_m_p_g_payments`
--

INSERT INTO `i_m_p_g_payments` (`id`, `name`, `email`, `mobile`, `amount`, `purpose`, `payment_request_id`, `payment_link`, `payment_status`, `payment_id`, `created_at`, `updated_at`) VALUES
(1, 'Brand 1', 'brand@gmail.com', '+918849683644', '499.00', 'IMORDERlzsfdCWcy', 'a6013ca5a5df4886a0f14d94dc952582', 'https://test.instamojo.com/@ravi_kavya01/a6013ca5a5df4886a0f14d94dc952582', 'Pending', NULL, '2023-11-25 09:51:46', '2023-11-25 09:51:46'),
(2, 'Brand 1', 'brand@gmail.com', '+918849683644', '499.00', 'IMORDERgua4aTARx', '44672c0c7b6d43219af0e3f81192ca1d', 'https://test.instamojo.com/@ravi_kavya01/44672c0c7b6d43219af0e3f81192ca1d', 'Pending', NULL, '2023-11-25 09:53:39', '2023-11-25 09:53:39'),
(3, 'Brand 1', 'brand@gmail.com', '+918849683644', '499.00', 'IMORDERrOFeclabs', '0a0e5e65ab6b4feaadeb7c0a5a1dd5a9', 'https://test.instamojo.com/@ravi_kavya01/0a0e5e65ab6b4feaadeb7c0a5a1dd5a9', 'Pending', NULL, '2023-11-25 09:55:09', '2023-11-25 09:55:09'),
(4, 'Brand 1', 'brand@gmail.com', '+918849683644', '499.00', 'IMORDERkIcscj7OI', '1b72d149bf7e4ddd93fc262a542a02b2', 'https://test.instamojo.com/@ravi_kavya01/1b72d149bf7e4ddd93fc262a542a02b2', 'Pending', NULL, '2023-11-27 05:58:10', '2023-11-27 05:58:10'),
(5, 'Brand 1', 'brand@gmail.com', '+919876543210', '499.00', 'IMORDERuqEUs79LZ', 'b78a826530bd49b2a2c733af7410299f', 'https://test.instamojo.com/@ravi_kavya01/b78a826530bd49b2a2c733af7410299f', 'Credit', 'MOJO3b27F05A37068345', '2023-11-27 05:58:34', '2023-11-27 05:59:29'),
(6, 'Brand 1', 'brand@gmail.com', '+919876543210', '499.00', 'IMORDERyVeMfiXMa', '65494dccc7174a69a4a49038a4289ce8', 'https://test.instamojo.com/@lucky_raj1234/65494dccc7174a69a4a49038a4289ce8', 'Credit', 'MOJO3b27U05A37068354', '2023-11-27 06:20:21', '2023-11-27 06:20:48'),
(7, 'Brand 1', 'brand@gmail.com', '+919876543210', '499.00', 'IMORDER81Kideg0C', '5039a86222344b3d8b5662ea72f836a8', 'https://test.instamojo.com/@lucky_raj1234/5039a86222344b3d8b5662ea72f836a8', 'Pending', NULL, '2023-11-28 05:28:22', '2023-11-28 05:28:22'),
(8, 'Brand 1', 'brand@gmail.com', '+919876543210', '499.00', 'IMORDERVUn1Co1Qp', '8b539f413b884364a7761f2749184364', 'https://test.instamojo.com/@lucky_raj1234/8b539f413b884364a7761f2749184364', 'Credit', 'MOJO3b28V05A93393288', '2023-11-28 05:33:59', '2023-11-28 05:35:02'),
(9, 'Brand 1', 'brand@gmail.com', '+919876543210', '499.00', 'IMORDERUZ3MtrZBg', 'a311c2b5fa9244cebbbeda62c1877a83', 'https://test.instamojo.com/@lucky_raj1234/a311c2b5fa9244cebbbeda62c1877a83', 'Credit', 'MOJO3b28105A93393289', '2023-11-28 05:35:37', '2023-11-28 05:36:11'),
(10, 'Brand 1', 'brand@gmail.com', '+919876543210', '499.00', 'IMORDERZlhJMRSfa', '2ae8ddb688ad4ec3a31ef8eda909ef74', 'https://test.instamojo.com/@lucky_raj1234/2ae8ddb688ad4ec3a31ef8eda909ef74', 'Credit', 'MOJO3b28O05A93393292', '2023-11-28 05:38:51', '2023-11-28 05:39:17'),
(11, 'Brand 1', 'brand@gmail.com', '+919876543210', '499.00', 'IMORDERAk4Qm82Ft', '8148b9c20fb04969b02f472e8c10dd6f', 'https://test.instamojo.com/@lucky_raj1234/8148b9c20fb04969b02f472e8c10dd6f', 'Pending', NULL, '2023-11-28 06:30:00', '2023-11-28 06:30:00'),
(12, 'Brand 1', 'brand@gmail.com', '+919876543210', '999.00', 'IMORDERTbLMn5tsv', 'eb7b5e43e3dc4ba9bdcd76ba07aa88ba', 'https://test.instamojo.com/@lucky_raj1234/eb7b5e43e3dc4ba9bdcd76ba07aa88ba', 'Credit', 'MOJO3b28V05A93393298', '2023-11-28 06:30:11', '2023-11-28 06:30:40'),
(13, 'Brand 2', 'brand2@gmail.com', '+919876543210', '499.00', 'IMORDERWVFC7ivNM', '2aa587e4ecae4301a2b3a945b6141a06', 'https://test.instamojo.com/@lucky_raj1234/2aa587e4ecae4301a2b3a945b6141a06', 'Credit', 'MOJO3b28005A93393334', '2023-11-28 08:18:24', '2023-11-28 08:18:50'),
(14, 'Brand 1', 'brand@gmail.com', '+919876543210', '499.00', 'IMORDERVDwdvkITX', 'ac6bafff8aa04a2bb9d49faec2a906c2', 'https://test.instamojo.com/@lucky_raj1234/ac6bafff8aa04a2bb9d49faec2a906c2', 'Credit', 'MOJO3c01805A89188713', '2023-12-01 15:06:32', '2023-12-01 15:08:18'),
(15, 'Brand 1', 'brand@gmail.com', '+919876543210', '499.00', 'IMORDERqlO7RUzNx', '2c74cf3885404ad8b93adc2a4bd2c225', 'https://test.instamojo.com/@lucky_raj1234/2c74cf3885404ad8b93adc2a4bd2c225', 'Credit', 'MOJO3c11405A51514315', '2023-12-11 08:19:37', '2023-12-11 08:20:16'),
(16, 'Brand 1', 'brand@gmail.com', '+919876543210', '499.00', 'IMORDERGubp8OkKa', '617c359f3d20449ca7109b30fde3d0bb', 'https://test.instamojo.com/@lucky_raj1234/617c359f3d20449ca7109b30fde3d0bb', 'Credit', 'MOJO3c11005A51514343', '2023-12-11 10:01:45', '2023-12-11 10:02:12'),
(17, 'Brand 1', 'brand@gmail.com', '+919876543210', '499.00', 'IMORDERS1JX6rQas', 'a6e520a888594cf29f7123ab03436b30', 'https://test.instamojo.com/@lucky_raj1234/a6e520a888594cf29f7123ab03436b30', 'Credit', 'MOJO3c19U05A47501778', '2023-12-19 06:34:41', '2023-12-19 06:35:22'),
(28, 'Brand 1', 'brand@gmail.com', '+919876543210', '499.00', 'IMORDERMQDiTOESz', '5e065dda9c69446e8c0c2d450b0d627c', 'https://test.instamojo.com/@lucky_raj1234/5e065dda9c69446e8c0c2d450b0d627c', 'Pending', NULL, '2023-12-19 08:33:07', '2023-12-19 08:33:07'),
(29, 'gaurav', 'g@gmail.com', '9913252048', '499.00', 'IMORDERdletH7IFo', 'hgvsijhbscvjdvsf45s676s78d', 'uasfduayhsvujfgvuyjhed', 'Credit', 'MOJO6dfg6s5d1gvd6f81sdc', '2023-12-19 09:35:14', '2023-12-19 09:35:14'),
(30, 'Brand 1', 'brand@gmail.com', '+919876543210', '499.00', 'IMORDERRNDwi97Ay', '6e21786a3ae747c081e91d52e73720a4', 'https://test.instamojo.com/@lucky_raj1234/6e21786a3ae747c081e91d52e73720a4', 'Credit', 'MOJO3c19Q05A47501844', '2023-12-19 09:56:03', '2023-12-19 09:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `latitude` decimal(10,7) NOT NULL,
  `longitude` decimal(10,7) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `user_id`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 3, 22.3084544, 73.1873280, '2025-04-03 07:10:19', '2025-04-03 07:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `manual_payments`
--

CREATE TABLE `manual_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `screenshot` varchar(255) NOT NULL,
  `status` enum('Pending','Approved','Rejected') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manual_payments`
--

INSERT INTO `manual_payments` (`id`, `userId`, `screenshot`, `status`, `created_at`, `updated_at`) VALUES
(2, 3, '1704092675.png', 'Pending', '2024-01-01 07:04:35', '2024-01-01 13:02:24'),
(3, 271, '1704093437.png', 'Pending', '2024-01-01 07:17:17', '2024-01-01 12:49:43'),
(4, 7, '1704179542.svg', 'Pending', '2024-01-02 07:12:22', '2024-01-02 07:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_24_045341_create_cards_table', 1),
(6, '2022_09_26_062243_create_cardlinkes_table', 1),
(7, '2022_09_27_091728_create_categories_table', 1),
(8, '2022_09_27_100957_create_cardservices_table', 1),
(9, '2022_11_07_050929_create_permission_tables', 1),
(11, '2022_12_06_050125_create_cardportfoilos_table', 1),
(12, '2022_12_13_093132_create_businessategories_table', 2),
(13, '2022_12_13_093155_create_masters_table', 2),
(14, '2022_12_13_093222_create_multiplecategories_table', 2),
(15, '2022_12_13_093246_create_myposts_table', 2),
(17, '2022_12_13_094255_create_admincategories_table', 3),
(18, '2022_12_14_051825_create_accounts_table', 4),
(19, '2022_12_14_060858_create_businesses_table', 5),
(20, '2022_12_14_070022_create_media_table', 6),
(21, '2022_12_14_094428_create_accountposts_table', 7),
(22, '2022_12_14_102309_create_templatemasters_table', 8),
(23, '2022_12_14_113653_create_subscriptions_table', 9),
(24, '2022_12_14_120048_create_subscriptionpackages_table', 10),
(25, '2022_12_17_045245_create_servicedetails_table', 11),
(26, '2022_12_17_112617_create_payments_table', 12),
(27, '2022_12_19_062222_create_states_table', 13),
(28, '2022_12_19_062724_create_cities_table', 13),
(29, '2022_12_21_044249_create_qrcodes_table', 14),
(30, '2022_12_21_105132_create_feedback_table', 15),
(31, '2022_12_23_111153_create_inquiries_table', 16),
(32, '2022_12_24_084034_create_brochures_table', 24),
(33, '2022_12_24_122318_create_counters_table', 25),
(34, '2023_01_09_060110_create_otps_table', 26),
(35, '2023_01_17_050732_create_subscriptiondetails_table', 25),
(36, '2023_01_18_082911_create_mymedia_table', 26),
(37, '2023_02_02_084217_create_banners_table', 26),
(38, '2023_03_07_122923_create_products_table', 27),
(39, '2023_03_13_104258_create_points_table', 28),
(40, '2023_03_15_155727_create_sliders_table', 29),
(41, '2023_03_15_161913_create_orders_table', 30),
(42, '2023_03_15_170000_create_addtocarts_table', 31),
(43, '2023_03_15_171909_create_orderdetails_table', 32),
(44, '2023_03_17_153711_create_notifications_table', 33),
(45, '2023_03_21_122058_create_offers_table', 34),
(46, '2023_03_21_174126_create_offerdetails_table', 35),
(47, '2023_03_24_182346_create_types_table', 36),
(48, '2023_03_25_102816_create_typedetails_table', 37),
(49, '2023_03_30_161147_create_writerslogans_table', 38),
(50, '2023_03_31_114214_create_designs_table', 39),
(51, '2023_12_08_172439_create_contact_influencers_table', 40),
(52, '2023_12_12_123830_create_brand_categories_table', 41),
(53, '2023_12_12_164920_create_brand_with_categories_table', 42),
(55, '2023_05_04_161719_create_coupons_table', 43),
(56, '2023_05_15_152245_create_stories_table', 44),
(57, '2023_06_19_154321_create_influencer_profiles_table', 45),
(58, '2023_06_19_174918_create_category_influencers_table', 45),
(59, '2023_06_21_123931_create_influencer_portfolios_table', 45),
(60, '2023_06_21_174021_create_campaigns_table', 45),
(61, '2023_06_23_110158_create_campaign_steps_table', 45),
(62, '2023_06_23_164945_create_applies_table', 45),
(63, '2023_06_23_170446_create_check_applies_table', 45),
(64, '2023_07_05_164108_create_brand_influencer_requests_table', 45),
(65, '2023_07_14_121012_add_columns_to_influencer_profiles_table', 45),
(66, '2023_07_20_115028_create_template_details_table', 45),
(67, '2023_07_24_120406_create_campaign_influencer_activity_steps_table', 45),
(68, '2023_07_24_124021_create_campaign_influencer_activities_table', 45),
(69, '2023_08_14_102604_create_passbooks_table', 45),
(70, '2023_08_14_122550_create_reseller_packages_table', 45),
(71, '2023_08_22_174331_create_influencer_packages_table', 45),
(72, '2023_09_25_115127_create_costs_table', 45),
(73, '2023_11_11_141018_create_user_template_masters_table', 45),
(74, '2023_11_23_110240_create_brand_packages_table', 45),
(75, '2023_11_23_113840_create_brand_package_details_table', 45),
(76, '2023_11_25_144846_create_i_m_p_g_payments_table', 45),
(77, '2023_11_27_113208_create_brand_points_table', 45),
(78, '2023_12_04_123445_create_activities_table', 46),
(79, '2023_12_08_172439_create_contact_influencers_table', 45),
(80, '2023_12_12_123830_create_brand_categories_table', 45),
(81, '2023_12_12_164920_create_brand_with_categories_table', 45),
(82, '2023_12_23_164832_create_packages_table', 47),
(83, '2024_01_01_120910_create_manual_payments_table', 48),
(84, '2024_02_03_120453_create_razorpays_table', 48),
(85, '2024_02_07_115204_create_brand_offers_table', 49),
(86, '2024_02_20_134014_create_my_offer_qr_codes_table', 50),
(87, '2024_03_04_112720_create_offer_sliders_table', 51),
(88, '2024_05_08_120424_create_chats_table', 52),
(89, '2024_05_09_124659_create_chat_groups_table', 53),
(91, '2024_05_12_215402_create_brand_influencer_notifications_table', 54),
(92, '2024_06_20_112900_create_branddetails_table', 55),
(93, '2024_09_10_155351_create_locations_table', 56);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 3),
(1, 'App\\Models\\User', 280),
(1, 'App\\Models\\User', 301),
(1, 'App\\Models\\User', 338),
(2, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 19),
(2, 'App\\Models\\User', 21),
(2, 'App\\Models\\User', 22),
(2, 'App\\Models\\User', 23),
(2, 'App\\Models\\User', 24),
(2, 'App\\Models\\User', 25),
(2, 'App\\Models\\User', 26),
(2, 'App\\Models\\User', 27),
(2, 'App\\Models\\User', 28),
(2, 'App\\Models\\User', 29),
(2, 'App\\Models\\User', 30),
(2, 'App\\Models\\User', 31),
(2, 'App\\Models\\User', 32),
(2, 'App\\Models\\User', 33),
(2, 'App\\Models\\User', 34),
(2, 'App\\Models\\User', 35),
(2, 'App\\Models\\User', 36),
(2, 'App\\Models\\User', 37),
(2, 'App\\Models\\User', 38),
(2, 'App\\Models\\User', 39),
(2, 'App\\Models\\User', 40),
(2, 'App\\Models\\User', 41),
(2, 'App\\Models\\User', 42),
(2, 'App\\Models\\User', 43),
(2, 'App\\Models\\User', 44),
(2, 'App\\Models\\User', 45),
(2, 'App\\Models\\User', 46),
(2, 'App\\Models\\User', 48),
(2, 'App\\Models\\User', 51),
(2, 'App\\Models\\User', 54),
(2, 'App\\Models\\User', 55),
(2, 'App\\Models\\User', 61),
(2, 'App\\Models\\User', 63),
(2, 'App\\Models\\User', 66),
(2, 'App\\Models\\User', 67),
(2, 'App\\Models\\User', 69),
(2, 'App\\Models\\User', 70),
(2, 'App\\Models\\User', 71),
(2, 'App\\Models\\User', 72),
(2, 'App\\Models\\User', 73),
(2, 'App\\Models\\User', 79),
(2, 'App\\Models\\User', 80),
(2, 'App\\Models\\User', 81),
(2, 'App\\Models\\User', 86),
(2, 'App\\Models\\User', 87),
(2, 'App\\Models\\User', 89),
(2, 'App\\Models\\User', 90),
(2, 'App\\Models\\User', 92),
(2, 'App\\Models\\User', 93),
(2, 'App\\Models\\User', 94),
(2, 'App\\Models\\User', 95),
(2, 'App\\Models\\User', 96),
(2, 'App\\Models\\User', 97),
(2, 'App\\Models\\User', 98),
(2, 'App\\Models\\User', 99),
(2, 'App\\Models\\User', 100),
(2, 'App\\Models\\User', 101),
(2, 'App\\Models\\User', 102),
(2, 'App\\Models\\User', 103),
(2, 'App\\Models\\User', 104),
(2, 'App\\Models\\User', 105),
(2, 'App\\Models\\User', 106),
(2, 'App\\Models\\User', 107),
(2, 'App\\Models\\User', 108),
(2, 'App\\Models\\User', 109),
(2, 'App\\Models\\User', 110),
(2, 'App\\Models\\User', 111),
(2, 'App\\Models\\User', 112),
(2, 'App\\Models\\User', 113),
(2, 'App\\Models\\User', 114),
(2, 'App\\Models\\User', 115),
(2, 'App\\Models\\User', 116),
(2, 'App\\Models\\User', 117),
(2, 'App\\Models\\User', 118),
(2, 'App\\Models\\User', 119),
(2, 'App\\Models\\User', 120),
(2, 'App\\Models\\User', 121),
(2, 'App\\Models\\User', 122),
(2, 'App\\Models\\User', 123),
(2, 'App\\Models\\User', 124),
(2, 'App\\Models\\User', 125),
(2, 'App\\Models\\User', 126),
(2, 'App\\Models\\User', 127),
(2, 'App\\Models\\User', 128),
(2, 'App\\Models\\User', 129),
(2, 'App\\Models\\User', 130),
(2, 'App\\Models\\User', 131),
(2, 'App\\Models\\User', 132),
(2, 'App\\Models\\User', 133),
(2, 'App\\Models\\User', 134),
(2, 'App\\Models\\User', 135),
(2, 'App\\Models\\User', 136),
(2, 'App\\Models\\User', 137),
(2, 'App\\Models\\User', 138),
(2, 'App\\Models\\User', 139),
(2, 'App\\Models\\User', 140),
(2, 'App\\Models\\User', 141),
(2, 'App\\Models\\User', 142),
(2, 'App\\Models\\User', 143),
(2, 'App\\Models\\User', 144),
(2, 'App\\Models\\User', 145),
(2, 'App\\Models\\User', 146),
(2, 'App\\Models\\User', 147),
(2, 'App\\Models\\User', 148),
(2, 'App\\Models\\User', 149),
(2, 'App\\Models\\User', 150),
(2, 'App\\Models\\User', 151),
(2, 'App\\Models\\User', 152),
(2, 'App\\Models\\User', 153),
(2, 'App\\Models\\User', 154),
(2, 'App\\Models\\User', 155),
(2, 'App\\Models\\User', 156),
(2, 'App\\Models\\User', 157),
(2, 'App\\Models\\User', 158),
(2, 'App\\Models\\User', 159),
(2, 'App\\Models\\User', 163),
(2, 'App\\Models\\User', 164),
(2, 'App\\Models\\User', 165),
(2, 'App\\Models\\User', 166),
(2, 'App\\Models\\User', 167),
(2, 'App\\Models\\User', 168),
(2, 'App\\Models\\User', 169),
(2, 'App\\Models\\User', 170),
(2, 'App\\Models\\User', 171),
(2, 'App\\Models\\User', 172),
(2, 'App\\Models\\User', 173),
(2, 'App\\Models\\User', 174),
(2, 'App\\Models\\User', 175),
(2, 'App\\Models\\User', 176),
(2, 'App\\Models\\User', 177),
(2, 'App\\Models\\User', 178),
(2, 'App\\Models\\User', 179),
(2, 'App\\Models\\User', 180),
(2, 'App\\Models\\User', 181),
(2, 'App\\Models\\User', 182),
(2, 'App\\Models\\User', 183),
(2, 'App\\Models\\User', 184),
(2, 'App\\Models\\User', 185),
(2, 'App\\Models\\User', 186),
(2, 'App\\Models\\User', 187),
(2, 'App\\Models\\User', 188),
(2, 'App\\Models\\User', 189),
(2, 'App\\Models\\User', 190),
(2, 'App\\Models\\User', 191),
(2, 'App\\Models\\User', 192),
(2, 'App\\Models\\User', 193),
(2, 'App\\Models\\User', 194),
(2, 'App\\Models\\User', 195),
(2, 'App\\Models\\User', 196),
(2, 'App\\Models\\User', 197),
(2, 'App\\Models\\User', 198),
(2, 'App\\Models\\User', 199),
(2, 'App\\Models\\User', 200),
(2, 'App\\Models\\User', 201),
(2, 'App\\Models\\User', 202),
(2, 'App\\Models\\User', 203),
(2, 'App\\Models\\User', 204),
(2, 'App\\Models\\User', 205),
(2, 'App\\Models\\User', 206),
(2, 'App\\Models\\User', 207),
(2, 'App\\Models\\User', 208),
(2, 'App\\Models\\User', 209),
(2, 'App\\Models\\User', 210),
(2, 'App\\Models\\User', 211),
(2, 'App\\Models\\User', 212),
(2, 'App\\Models\\User', 213),
(2, 'App\\Models\\User', 214),
(2, 'App\\Models\\User', 215),
(2, 'App\\Models\\User', 216),
(2, 'App\\Models\\User', 217),
(2, 'App\\Models\\User', 218),
(2, 'App\\Models\\User', 219),
(2, 'App\\Models\\User', 220),
(2, 'App\\Models\\User', 221),
(2, 'App\\Models\\User', 222),
(2, 'App\\Models\\User', 223),
(2, 'App\\Models\\User', 226),
(2, 'App\\Models\\User', 227),
(2, 'App\\Models\\User', 229),
(2, 'App\\Models\\User', 231),
(2, 'App\\Models\\User', 233),
(2, 'App\\Models\\User', 234),
(2, 'App\\Models\\User', 235),
(2, 'App\\Models\\User', 237),
(2, 'App\\Models\\User', 238),
(2, 'App\\Models\\User', 239),
(2, 'App\\Models\\User', 240),
(2, 'App\\Models\\User', 241),
(2, 'App\\Models\\User', 242),
(2, 'App\\Models\\User', 243),
(2, 'App\\Models\\User', 244),
(2, 'App\\Models\\User', 245),
(2, 'App\\Models\\User', 246),
(2, 'App\\Models\\User', 247),
(2, 'App\\Models\\User', 248),
(2, 'App\\Models\\User', 249),
(2, 'App\\Models\\User', 250),
(2, 'App\\Models\\User', 251),
(2, 'App\\Models\\User', 252),
(2, 'App\\Models\\User', 253),
(2, 'App\\Models\\User', 254),
(2, 'App\\Models\\User', 256),
(2, 'App\\Models\\User', 257),
(2, 'App\\Models\\User', 259),
(2, 'App\\Models\\User', 262),
(2, 'App\\Models\\User', 263),
(2, 'App\\Models\\User', 267),
(2, 'App\\Models\\User', 268),
(2, 'App\\Models\\User', 269),
(2, 'App\\Models\\User', 270),
(2, 'App\\Models\\User', 271),
(2, 'App\\Models\\User', 272),
(2, 'App\\Models\\User', 273),
(2, 'App\\Models\\User', 274),
(2, 'App\\Models\\User', 275),
(2, 'App\\Models\\User', 276),
(2, 'App\\Models\\User', 280),
(2, 'App\\Models\\User', 294),
(2, 'App\\Models\\User', 295),
(2, 'App\\Models\\User', 296),
(2, 'App\\Models\\User', 297),
(2, 'App\\Models\\User', 298),
(2, 'App\\Models\\User', 299),
(2, 'App\\Models\\User', 300),
(2, 'App\\Models\\User', 301),
(2, 'App\\Models\\User', 302),
(2, 'App\\Models\\User', 304),
(2, 'App\\Models\\User', 305),
(2, 'App\\Models\\User', 307),
(2, 'App\\Models\\User', 308),
(2, 'App\\Models\\User', 309),
(2, 'App\\Models\\User', 334),
(2, 'App\\Models\\User', 336),
(2, 'App\\Models\\User', 338),
(5, 'App\\Models\\User', 3),
(5, 'App\\Models\\User', 249),
(5, 'App\\Models\\User', 251),
(5, 'App\\Models\\User', 253),
(5, 'App\\Models\\User', 263),
(5, 'App\\Models\\User', 274),
(5, 'App\\Models\\User', 299),
(5, 'App\\Models\\User', 300),
(5, 'App\\Models\\User', 304),
(6, 'App\\Models\\User', 3),
(6, 'App\\Models\\User', 109),
(6, 'App\\Models\\User', 250),
(6, 'App\\Models\\User', 252),
(6, 'App\\Models\\User', 254),
(6, 'App\\Models\\User', 257),
(6, 'App\\Models\\User', 272),
(7, 'App\\Models\\User', 3),
(7, 'App\\Models\\User', 271),
(7, 'App\\Models\\User', 274),
(7, 'App\\Models\\User', 280),
(7, 'App\\Models\\User', 287),
(7, 'App\\Models\\User', 296),
(7, 'App\\Models\\User', 308),
(7, 'App\\Models\\User', 309),
(7, 'App\\Models\\User', 310),
(7, 'App\\Models\\User', 311),
(7, 'App\\Models\\User', 314),
(7, 'App\\Models\\User', 316),
(7, 'App\\Models\\User', 318),
(7, 'App\\Models\\User', 323),
(7, 'App\\Models\\User', 324),
(7, 'App\\Models\\User', 330),
(7, 'App\\Models\\User', 331),
(7, 'App\\Models\\User', 332),
(7, 'App\\Models\\User', 334),
(7, 'App\\Models\\User', 337),
(7, 'App\\Models\\User', 338),
(8, 'App\\Models\\User', 3),
(8, 'App\\Models\\User', 269),
(8, 'App\\Models\\User', 270),
(8, 'App\\Models\\User', 275),
(8, 'App\\Models\\User', 276),
(8, 'App\\Models\\User', 280),
(8, 'App\\Models\\User', 295),
(8, 'App\\Models\\User', 297),
(8, 'App\\Models\\User', 298),
(8, 'App\\Models\\User', 300),
(8, 'App\\Models\\User', 301),
(8, 'App\\Models\\User', 302),
(8, 'App\\Models\\User', 304),
(8, 'App\\Models\\User', 305),
(8, 'App\\Models\\User', 307),
(8, 'App\\Models\\User', 312),
(8, 'App\\Models\\User', 319),
(8, 'App\\Models\\User', 321),
(8, 'App\\Models\\User', 322),
(8, 'App\\Models\\User', 329),
(9, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `my_offer_qr_codes`
--

CREATE TABLE `my_offer_qr_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `buyerId` varchar(255) DEFAULT NULL,
  `offerId` int(11) NOT NULL,
  `validity` date DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `my_offer_qr_codes`
--

INSERT INTO `my_offer_qr_codes` (`id`, `uuid`, `buyerId`, `offerId`, `validity`, `status`, `created_at`, `updated_at`) VALUES
(1, '0', '3', 9, '0000-00-00', 'pending', '2024-02-21 05:49:14', '2024-02-21 05:49:14'),
(2, '0', '3', 4, '0000-00-00', 'pending', '2024-02-21 05:50:54', '2024-02-21 05:50:54'),
(3, '0', '3', 4, '0000-00-00', 'pending', '2024-02-21 05:54:29', '2024-02-21 05:54:29'),
(4, '0', '3', 4, '0000-00-00', 'pending', '2024-02-21 05:56:47', '2024-02-21 05:56:47'),
(5, '0', '3', 4, '0000-00-00', 'pending', '2024-02-21 05:59:45', '2024-02-21 05:59:45'),
(6, '0', '3', 4, '0000-00-00', 'pending', '2024-02-21 06:00:55', '2024-02-21 06:00:55'),
(7, '0', '3', 4, '0000-00-00', 'pending', '2024-02-21 06:08:38', '2024-02-21 06:08:38'),
(8, '0', '3', 4, '0000-00-00', 'pending', '2024-02-21 06:12:56', '2024-02-21 06:12:56'),
(9, '0', '3', 9, '0000-00-00', 'pending', '2024-02-21 06:15:06', '2024-02-21 06:15:06'),
(10, '0', '3', 9, NULL, 'pending', '2024-02-21 06:56:08', '2024-02-21 06:56:08'),
(11, '0', '3', 4, NULL, 'pending', '2024-02-21 07:00:22', '2024-02-21 07:00:22'),
(12, '0', '3', 4, NULL, 'pending', '2024-02-21 07:02:47', '2024-02-21 07:02:47'),
(13, '0', '3', 9, NULL, 'pending', '2024-02-21 07:10:32', '2024-02-21 07:10:32'),
(14, '0', '3', 9, NULL, 'pending', '2024-02-21 07:11:09', '2024-02-21 07:11:09'),
(15, '0', '3', 9, NULL, 'pending', '2024-02-21 07:14:17', '2024-02-21 07:14:17'),
(16, '0', '3', 9, NULL, 'pending', '2024-02-21 07:15:31', '2024-02-21 07:15:31'),
(17, '0', '3', 9, NULL, 'pending', '2024-02-21 07:15:38', '2024-02-21 07:15:38'),
(18, '0', '3', 9, NULL, 'pending', '2024-02-21 07:16:08', '2024-02-21 07:16:08'),
(19, '0', '3', 9, NULL, 'pending', '2024-02-21 07:16:57', '2024-02-21 07:16:57'),
(20, '0', '3', 9, NULL, 'pending', '2024-02-21 07:17:06', '2024-02-21 07:17:06'),
(21, '0', '3', 9, NULL, 'pending', '2024-02-21 07:17:18', '2024-02-21 07:17:18'),
(22, '0', '3', 9, NULL, 'pending', '2024-02-21 07:59:49', '2024-02-21 07:59:49'),
(23, '0', '3', 9, NULL, 'pending', '2024-02-21 08:03:34', '2024-02-21 08:03:34'),
(24, '0', '3', 9, NULL, 'pending', '2024-02-21 08:04:02', '2024-02-21 08:04:02'),
(25, '0', '3', 9, NULL, 'pending', '2024-02-21 08:04:33', '2024-02-21 08:04:33'),
(26, '0', '3', 9, NULL, 'pending', '2024-02-21 08:06:53', '2024-02-21 08:06:53'),
(27, '0', '3', 9, NULL, 'pending', '2024-02-21 08:06:58', '2024-02-21 08:06:58'),
(28, '0', '3', 9, NULL, 'pending', '2024-02-21 08:07:37', '2024-02-21 08:07:37'),
(29, '0', '3', 9, NULL, 'pending', '2024-02-21 08:08:55', '2024-02-21 08:08:55'),
(30, '0', '3', 9, '2024-03-06', 'pending', '2024-02-21 10:20:59', '2024-02-21 10:20:59'),
(31, '0', '3', 4, '2024-02-16', 'Active', '2024-02-22 05:31:12', '2024-02-22 05:31:12'),
(32, '0', '3', 7, '2024-04-20', 'Active', '2024-02-23 10:04:38', '2024-02-23 10:04:38'),
(33, '0', '3', 7, '2024-04-20', 'Active', '2024-02-23 10:12:19', '2024-02-23 10:12:19'),
(34, '0', '3', 7, '2024-04-20', 'Active', '2024-02-23 10:38:02', '2024-02-23 10:38:02'),
(35, '0', '3', 9, '2024-03-06', 'Active', '2024-03-01 07:50:21', '2024-03-01 07:50:21'),
(36, '0', '3', 9, '2024-03-06', 'Active', '2024-03-01 07:52:14', '2024-03-01 07:52:14'),
(37, '37b97963-e517-4fb9-861e-714c3e81e885', '3', 9, '2024-03-06', 'Active', '2024-03-01 07:53:14', '2024-03-01 07:53:14'),
(38, 'b93ddedd-3861-498b-a52a-39ec7e8e257f', '3', 9, '2024-03-06', 'Active', '2024-03-01 07:55:03', '2024-03-01 07:55:03'),
(39, 'b7d0a7cf-3baa-41f6-8b6e-d256c9d34d04', '3', 9, '2024-03-06', 'Active', '2024-03-01 10:37:54', '2024-03-01 10:37:54'),
(40, '55fb9f38-f9d0-444d-bdaa-301f3a3a7639', '3', 9, '2024-03-06', 'Active', '2024-03-01 10:48:56', '2024-03-01 10:48:56'),
(41, '45a1f595-8117-4b7f-ba06-cd7c7c5e6c7e', '3', 9, '2024-03-06', 'Active', '2024-03-01 10:53:18', '2024-03-01 10:53:18'),
(42, 'bc6006a2-c70c-4534-af77-b309a0a0ce3e', '3', 7, '2024-04-20', 'Active', '2024-03-07 10:20:20', '2024-03-07 10:20:20'),
(43, 'f983ebc5-22e8-46a3-bc8f-3efaa8685f7f', '3', 4, '2024-02-16', 'Active', '2024-06-14 07:28:02', '2024-06-14 07:28:02');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `typeId` int(255) DEFAULT NULL,
  `contactName` varchar(255) DEFAULT NULL,
  `contactNumber` varchar(255) DEFAULT NULL,
  `birthdate` varchar(10) DEFAULT NULL,
  `birthdayphoto` varchar(255) DEFAULT NULL,
  `anniversaryDate` varchar(255) DEFAULT NULL,
  `anniversaryPhoto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `userId`, `typeId`, `contactName`, `contactNumber`, `birthdate`, `birthdayphoto`, `anniversaryDate`, `anniversaryPhoto`, `created_at`, `updated_at`) VALUES
(5, 3, NULL, 'rudrika', NULL, '1999-01-27', '1680064942.jpg', NULL, NULL, '2023-03-29 04:42:22', '2023-03-29 04:42:22'),
(6, 4, NULL, 'arpita', '985697585', '2023-02-09', '1680067580.jpg', NULL, NULL, '2023-03-29 05:26:20', '2023-03-29 05:26:20'),
(7, 5, NULL, 'arpita', '985697585', '29-03', '1680067771.jpg', '04-04', NULL, '2023-03-29 05:29:32', '2023-03-29 05:29:32'),
(8, 3, NULL, 'rudrika', '9999999999', '2000-04-04', '1680523062.jpg', '2020-03-31', '1680523062.jpg', '2023-04-03 11:57:42', '2023-04-03 11:57:42'),
(9, 3, NULL, 'rudrika', '9999999999', NULL, NULL, NULL, NULL, '2023-04-04 06:53:10', '2023-04-04 06:53:10'),
(10, 3, NULL, 'rudrika', '9999999999', '04-04', '1680612272.jpg', NULL, NULL, '2023-04-04 12:44:32', '2023-04-04 12:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `offerdetails`
--

CREATE TABLE `offerdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `offerId` int(11) NOT NULL,
  `positionLeft` varchar(255) NOT NULL,
  `positionBottom` varchar(255) NOT NULL,
  `imageHeight` varchar(255) NOT NULL,
  `imageWidth` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offerdetails`
--

INSERT INTO `offerdetails` (`id`, `offerId`, `positionLeft`, `positionBottom`, `imageHeight`, `imageWidth`, `created_at`, `updated_at`) VALUES
(5, 6, '24', '24', '15', '15', '2023-03-24 07:07:59', '2023-03-24 07:07:59'),
(10, 16, '265', '125', '825', '825', '2023-07-25 11:49:16', '2023-07-26 10:11:47'),
(11, 17, '386', '130', '594', '594', '2023-07-26 10:16:19', '2023-07-26 10:16:19'),
(12, 18, '0', '109', '854', '540', '2023-07-31 10:04:03', '2023-07-31 10:04:03'),
(13, 19, '425', '186', '624', '624', '2023-07-31 10:10:47', '2023-07-31 10:10:47'),
(15, 22, '24', '8', '15', '15', '2024-01-30 07:33:23', '2024-01-30 07:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `fontSize` varchar(255) NOT NULL,
  `fontFamily` varchar(255) NOT NULL,
  `fontColor` varchar(255) NOT NULL,
  `noOfProduct` varchar(255) NOT NULL,
  `posterHeight` varchar(255) NOT NULL,
  `posterWidth` varchar(255) NOT NULL,
  `titlePositionTop` varchar(255) NOT NULL,
  `titlePositionLeft` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title`, `poster`, `fontSize`, `fontFamily`, `fontColor`, `noOfProduct`, `posterHeight`, `posterWidth`, `titlePositionTop`, `titlePositionLeft`, `created_at`, `updated_at`) VALUES
(16, '22', '1690267724.png', '90', 'Poppins', 'ffffff', '1', '1080', '1080', '438', '60', '2023-07-25 11:48:44', '2023-07-26 10:08:07'),
(17, '50', '1690348473.png', '90', 'Poppins', 'ffffff', '1', '1080', '1080', '619', '867', '2023-07-26 10:14:33', '2023-07-26 10:18:59'),
(18, '15', '1690779810.png', '157', 'Poppins', '86797a', '1', '1080', '1080', '400', '625', '2023-07-31 10:03:30', '2023-07-31 10:07:56'),
(19, '35', '1690780213.png', '80', 'Poppins', '000000', '1', '1080', '1080', '495', '178', '2023-07-31 10:10:13', '2023-11-06 15:17:13'),
(22, 'qq', '1699519800.png', '80', 'yyyy', 'black', '2', '1080', '1080', '450', '180', '2023-11-09 14:50:00', '2023-11-09 14:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `offer_sliders`
--

CREATE TABLE `offer_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer_sliders`
--

INSERT INTO `offer_sliders` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, '1709703658.jpg', 'Active', '2024-03-06 05:40:58', '2024-03-06 05:40:58'),
(3, '1709703692.jpg', 'Active', '2024-03-06 05:41:32', '2024-03-06 05:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `otps`
--

CREATE TABLE `otps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `otp` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `otps`
--

INSERT INTO `otps` (`id`, `otp`, `mobileno`, `time`, `created_at`, `updated_at`) VALUES
(192, '902752', '9979411148', '06:37:31', '2023-07-12 11:37:31', '2023-07-12 11:37:31'),
(193, '736310', '9979411148', '04:25:22', '2023-07-19 09:25:22', '2023-07-19 09:25:22'),
(194, '892708', '9979411148', '04:58:42', '2023-07-19 09:58:42', '2023-07-19 09:58:42'),
(195, '958396', '9979411148', '05:07:26', '2023-07-19 10:07:26', '2023-07-19 10:07:26'),
(196, '154210', '9979411148', '12:51:30', '2023-07-26 17:51:30', '2023-07-26 17:51:30'),
(197, '621702', '9909004025', '06:57:48', '2023-10-10 11:57:48', '2023-10-10 11:57:48'),
(198, '245802', '9909004025', '07:10:11', '2023-10-10 12:10:11', '2023-10-10 12:10:11'),
(199, '422509', '9909004025', '07:11:48', '2023-10-10 12:11:48', '2023-10-10 12:11:48'),
(200, '308028', '9909004025', '07:32:37', '2023-10-10 12:32:37', '2023-10-10 12:32:37'),
(201, '958378', '9909004025', '07:35:15', '2023-10-10 12:35:15', '2023-10-10 12:35:15'),
(202, '202943', '9909004025', '08:30:16', '2023-10-10 13:30:16', '2023-10-10 13:30:16'),
(203, '403303', '9909004025', '08:54:27', '2023-10-10 13:54:27', '2023-10-10 13:54:27'),
(204, '759578', '7984448383', '08:59:45', '2023-10-10 13:59:45', '2023-10-10 13:59:45'),
(205, '309750', '9978909750', '12:42:47', '2023-10-10 17:42:47', '2023-10-10 17:42:47'),
(206, '255799', '9558025483', '04:53:53', '2023-10-11 09:53:53', '2023-10-11 09:53:53'),
(207, '225041', '8849683644', '06:40:26', '2023-10-12 11:40:26', '2023-10-12 11:40:26'),
(208, '254130', '9909004025', '12:11:02', '2023-10-12 17:11:02', '2023-10-12 17:11:02'),
(209, '523307', '8238649994', '09:08:42', '2023-10-30 14:08:42', '2023-10-30 14:08:42'),
(210, '395874', '9909004025', '09:10:30', '2023-10-30 14:10:30', '2023-10-30 14:10:30'),
(211, '223658', '9909004025', '12:39:26', '2023-10-30 17:39:26', '2023-10-30 17:39:26'),
(212, '994899', '9723511278', '10:33:10', '2023-11-02 15:33:10', '2023-11-02 15:33:10'),
(213, '328113', '8758585996', '04:03:07', '2023-11-03 09:03:07', '2023-11-03 09:03:07'),
(214, '215714', '8758585996', '08:46:39', '2023-11-03 13:46:39', '2023-11-03 13:46:39'),
(215, '174121', '8758585996', '10:18:44', '2023-11-03 15:18:44', '2023-11-03 15:18:44'),
(216, '679209', '8758585996', '05:49:30', '2023-11-04 10:49:30', '2023-11-04 10:49:30'),
(217, '323659', '8238649994', '09:03:11', '2023-11-06 15:03:12', '2023-11-06 15:03:12'),
(218, '271034', '8238649994', '09:53:21', '2023-11-06 15:53:21', '2023-11-06 15:53:21'),
(219, '923514', '9909004025', '12:37:11', '2023-11-06 18:37:11', '2023-11-06 18:37:11'),
(220, '412858', '9909004025', '12:37:12', '2023-11-06 18:37:12', '2023-11-06 18:37:12'),
(221, '839202', '9723511278', '09:31:34', '2023-11-20 15:31:34', '2023-11-20 15:31:34'),
(222, '771761', '8758585996', '12:22:57', '2023-11-21 18:22:57', '2023-11-21 18:22:57'),
(223, '721909', '8238649994', '11:52:37', '2023-11-22 17:52:37', '2023-11-22 17:52:37'),
(224, '315554', '8238649994', '05:06:43', '2023-11-23 11:06:43', '2023-11-23 11:06:43'),
(225, '386426', '8238649994', '06:48:58', '2023-11-23 12:48:58', '2023-11-23 12:48:58'),
(226, '486977', '8238649994', '12:15:59', '2023-11-23 18:15:59', '2023-11-23 18:15:59'),
(227, '154871', '7890665432', '12:17:49', '2023-11-23 18:17:49', '2023-11-23 18:17:49'),
(228, '832553', '8238649994', '12:18:41', '2023-11-23 18:18:41', '2023-11-23 18:18:41'),
(229, '551693', '7788991122', '06:09:06', '2023-11-29 12:09:06', '2023-11-29 12:09:06'),
(230, '234112', '8238649994', '12:15:21', '2023-11-29 18:15:21', '2023-11-29 18:15:21'),
(231, '503573', '8238649994', '04:53:12', '2023-11-30 10:53:12', '2023-11-30 10:53:12'),
(232, '922223', '8849683644', '11:43:07', '2023-12-20 06:13:07', '2023-12-20 06:13:07'),
(233, '356402', '8849683644', '11:59:02', '2023-12-22 06:29:03', '2023-12-22 06:29:03'),
(234, '189864', '8849683644', '16:41:55', '2024-02-08 11:11:55', '2024-02-08 11:11:55'),
(235, '871271', '8849683644', '16:49:07', '2024-02-08 11:19:07', '2024-02-08 11:19:07'),
(236, '391108', '8849683644', '18:12:58', '2024-05-24 12:42:58', '2024-05-24 12:42:58'),
(237, '831519', '0120120120', '17:17:45', '2024-05-28 11:47:45', '2024-05-28 11:47:45'),
(238, '561022', '8487868595', '17:40:21', '2024-06-26 12:10:22', '2024-06-26 12:10:22'),
(239, '436468', '9624234183', '16:48:30', '2024-07-05 11:18:30', '2024-07-05 11:18:30'),
(240, '898187', '8401414567', '17:03:37', '2024-07-05 11:33:37', '2024-07-05 11:33:37'),
(241, '117190', '8487868595', '17:26:27', '2024-07-05 11:56:27', '2024-07-05 11:56:27'),
(242, '888051', '8487868595', '17:30:33', '2024-07-05 12:00:33', '2024-07-05 12:00:33'),
(243, '432566', '8487868595', '11:31:21', '2024-07-06 06:01:21', '2024-07-06 06:01:21'),
(244, '493055', '8487868595', '11:58:44', '2024-07-06 06:28:44', '2024-07-06 06:28:44'),
(245, '633484', '8487868595', '16:21:54', '2024-07-09 10:51:54', '2024-07-09 10:51:54'),
(246, '810269', '08487868595', '12:07:11', '2024-07-11 06:37:11', '2024-07-11 06:37:11'),
(247, '462447', '08487868595', '12:08:37', '2024-07-11 06:38:37', '2024-07-11 06:38:37'),
(248, '332345', '08487868595', '12:51:05', '2024-07-11 07:21:05', '2024-07-11 07:21:05'),
(249, '960171', '08487868595', '12:52:12', '2024-07-11 07:22:12', '2024-07-11 07:22:12'),
(250, '471994', '08487868595', '16:12:47', '2024-07-11 10:42:47', '2024-07-11 10:42:47'),
(251, '999469', '8487868595', '21:57:36', '2024-07-24 16:27:36', '2024-07-24 16:27:36'),
(252, '590352', '8849683644', '12:37:28', '2025-04-03 07:07:28', '2025-04-03 07:07:28');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `payment_request_id` varchar(255) NOT NULL,
  `payment_link` varchar(255) NOT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `email`, `mobile`, `amount`, `purpose`, `payment_request_id`, `payment_link`, `payment_status`, `payment_id`, `created_at`, `updated_at`) VALUES
(7, 'Rudrika Dave A', 'rudrikadave20226@gmail.com', '+919876543210', '199.00', 'IMORDERDBL23JC1l', 'bb029e64a7b74d63a0d5def30876c5a4', 'https://test.instamojo.com/@lucky_raj1234/bb029e64a7b74d63a0d5def30876c5a4', 'Credit', 'MOJO3c23L05A31089996', '2023-12-23 11:52:35', '2023-12-23 11:52:57'),
(8, 'Rudrika Dave A', 'rudrikadave20226@gmail.com', '+919876543210', '5000.00', 'IMORDERHtj4JB31g', '2211d8021c294bb7ba21c06ae7936d9b', 'https://test.instamojo.com/@lucky_raj1234/2211d8021c294bb7ba21c06ae7936d9b', 'Credit', 'MOJO3c23Q05A31090001', '2023-12-23 12:05:09', '2023-12-23 12:05:34'),
(9, 'Rudrika Dave A', 'rudrikadave20226@gmail.com', '+919876543210', '199.00', 'IMORDERub0VgeG9C', '2aed42656e904e138f1626c294278b63', 'https://test.instamojo.com/@lucky_raj1234/2aed42656e904e138f1626c294278b63', 'Pending', NULL, '2024-02-02 08:17:40', '2024-02-02 08:17:40'),
(10, 'Rudrika Dave A', 'rudrikadave20226@gmail.com', '+919876543210', '5000.00', 'IMORDERu1gpsR5tV', 'cd1604925e5d4109a76774258cb7bc31', 'https://test.instamojo.com/@lucky_raj1234/cd1604925e5d4109a76774258cb7bc31', 'Pending', NULL, '2024-02-02 08:22:56', '2024-02-02 08:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('srdey4689@gmail.com', '$2y$10$DmFOROnVk7L7rikfzKrhvOoBB3Mti.kpqei7RjIO7oOrzZA6gBmey', '2023-02-08 00:53:54'),
('admin@gmail.com', '$2y$10$J.yzuBdQvSDSHd/HbwcHFeqSlGKzDaYenZv3CXrE4iWYWRSuENbA.', '2023-12-01 13:20:58'),
('rudrikadave20226@gmail.com', '$2y$10$7Ec0YqcRB0TuNwCfFRYRQeWYO.VPRYojtApIxiMLggjA44.EFUXuu', '2023-12-22 07:00:40'),
('parvejjindani005@gmail.com', '$2y$10$t0I8Nd0FEbi5JzoRrJO4SeXMHGxcPipNdPtBgUANAzP5.T9kqJtYO', '2024-07-04 06:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_id` int(11) NOT NULL,
  `bankName` varchar(255) DEFAULT NULL,
  `accountHolderName` varchar(255) DEFAULT NULL,
  `accountNumber` varchar(255) DEFAULT NULL,
  `accountType` varchar(255) DEFAULT NULL,
  `ifscCode` varchar(255) DEFAULT NULL,
  `upidetail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `card_id`, `bankName`, `accountHolderName`, `accountNumber`, `accountType`, `ifscCode`, `upidetail`, `created_at`, `updated_at`) VALUES
(1, 4, 'SBI', 'Amrita', '98765321687621687651', 'Saving', 'sbi13486568765', NULL, '2022-12-20 07:02:19', '2022-12-20 07:02:19'),
(2, 3, 'HDFC', 'Rudrika Dave', '13546516687651687', 'Saving', 'hdfc31684321686', '9999999999@paytm', '2022-12-22 06:41:23', '2023-03-15 09:12:16'),
(3, 22, 'HDFC', 'Rahi Patel', '32168746146519876q', 'Save', 'hdfc31684321686', '9898989@abc', '2022-12-22 23:51:42', '2023-01-25 15:15:39'),
(6, 24, 'HDFC', 'Shruti', '98765321687621687651', 'Saving', 'hdfc31684321686', NULL, '2022-12-23 01:47:34', '2022-12-23 03:11:09'),
(7, 28, 'hdfc', 'raviraj', '123456798', 'saving', 'hdfc12345', NULL, '2022-12-23 04:00:49', '2022-12-23 04:04:35'),
(8, 29, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-23 06:47:38', '2022-12-23 06:47:38'),
(9, 30, 'HDFC BANK', 'ASPIREOTECH SOLUTIONS PRIVATE LIMITED', '50200054467751', 'Current', 'HDFC0000048', '9979891148@paytm', '2022-12-23 22:01:14', '2023-01-11 10:06:43'),
(10, 31, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-27 16:13:42', '2022-12-27 16:13:42'),
(11, 32, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-27 16:19:38', '2022-12-27 16:19:38'),
(12, 33, 'Paytm Payment Bank Ltd', 'YASH GOHIL', '+91 9824969003', 'SAVING', 'PYTM0123456', '-', '2022-12-27 16:54:00', '2023-01-21 16:38:05'),
(13, 34, 'HDFC', 'Bhumi Patel', '9876543216846218', 'saving', 'hdfc641654654654', '9898989@abc', '2022-12-30 18:23:58', '2022-12-30 18:35:33'),
(14, 35, 'Sbi', 'Tap and tile', '123456689', 'Current', 'Sbi12345', '9033699459@ybl', '2022-12-31 16:30:57', '2022-12-31 16:36:18'),
(15, 37, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-03 19:50:13', '2023-01-03 19:50:13'),
(16, 38, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-09 11:57:04', '2023-01-09 11:57:04'),
(17, 39, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-11 19:10:43', '2023-01-11 19:10:43'),
(18, 43, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 17:52:57', '2023-01-13 17:52:57'),
(19, 46, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 12:06:53', '2023-01-19 12:06:53'),
(20, 47, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 14:51:37', '2023-01-19 14:51:37'),
(21, 48, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 14:51:48', '2023-01-19 14:51:48'),
(22, 49, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 15:22:10', '2023-01-19 15:22:10'),
(23, 50, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 15:22:23', '2023-01-19 15:22:23'),
(24, 51, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 15:46:19', '2023-01-19 15:46:19'),
(25, 52, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 15:51:44', '2023-01-19 15:51:44'),
(26, 53, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 15:53:18', '2023-01-19 15:53:18'),
(27, 54, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:34:35', '2023-01-19 17:34:35'),
(28, 55, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:34:52', '2023-01-19 17:34:52'),
(29, 56, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:35:49', '2023-01-19 17:35:49'),
(30, 57, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:49:40', '2023-01-19 17:49:40'),
(31, 58, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:55:13', '2023-01-19 17:55:13'),
(32, 59, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:55:57', '2023-01-19 17:55:57'),
(33, 60, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:56:06', '2023-01-19 17:56:06'),
(34, 61, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 17:56:53', '2023-01-19 17:56:53'),
(35, 62, 'Sbi', 'Tap and tile', '123456689', 'Current', 'Sbi12345', '9033699459@ybl', '2023-01-19 18:06:42', '2023-01-21 16:12:44'),
(36, 63, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 18:16:33', '2023-01-19 18:16:33'),
(37, 64, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-21 17:01:03', '2023-01-21 17:01:03'),
(40, 67, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-24 13:08:57', '2023-01-24 13:08:57'),
(41, 68, 'SBI', 'Rakesh Satola', '38554404514', 'Saving', 'SBIN0013372', 'rakeshsatola31@oksbi', '2023-01-24 14:45:31', '2023-01-25 20:40:14'),
(42, 69, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-24 14:51:41', '2023-01-24 14:51:41'),
(44, 71, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-24 15:14:22', '2023-01-24 15:14:22'),
(46, 73, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-24 18:47:26', '2023-01-24 18:47:26'),
(49, 76, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-24 23:27:12', '2023-01-24 23:27:12'),
(50, 77, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-25 12:06:43', '2023-01-25 12:06:43'),
(51, 78, NULL, NULL, '14725836912', NULL, NULL, NULL, '2023-01-25 12:58:16', '2023-02-01 13:50:06'),
(52, 79, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-25 15:00:31', '2023-01-25 15:00:31'),
(53, 80, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-25 18:34:30', '2023-01-25 18:34:30'),
(54, 81, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-25 19:14:27', '2023-01-25 19:14:27'),
(55, 82, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-25 19:56:58', '2023-01-25 19:56:58'),
(56, 83, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-25 20:13:27', '2023-01-25 20:13:27'),
(57, 84, 'eggf', 'fhyff', '457643356', 'fbvcx', 'gjnvcf', '24654222', '2023-01-25 20:21:47', '2023-01-25 20:28:44'),
(58, 85, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-25 23:55:41', '2023-01-25 23:55:41'),
(59, 86, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-26 00:30:50', '2023-01-26 00:30:50'),
(60, 87, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-26 08:55:23', '2023-01-26 08:55:23'),
(61, 88, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-26 11:01:57', '2023-01-26 11:01:57'),
(62, 89, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-26 12:05:55', '2023-01-26 12:05:55'),
(63, 90, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-26 12:21:44', '2023-01-26 12:21:44'),
(64, 91, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-26 16:16:37', '2023-01-26 16:16:37'),
(65, 92, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-26 17:30:31', '2023-01-26 17:30:31'),
(66, 93, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 14:25:01', '2023-01-27 14:25:01'),
(67, 94, 'rakdjf', 'xjfgjj', '56666894568', 'xjfifjfj', 'xjfjgj', 'dkfkvj', '2023-01-27 15:49:48', '2023-01-30 04:45:50'),
(68, 95, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 18:20:32', '2023-01-27 18:20:32'),
(69, 96, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 18:22:25', '2023-01-27 18:22:25'),
(70, 97, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 19:30:19', '2023-01-27 19:30:19'),
(71, 98, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-29 01:02:53', '2023-01-29 01:02:53'),
(72, 99, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-29 09:08:15', '2023-01-29 09:08:15'),
(73, 100, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-29 12:30:36', '2023-01-29 12:30:36'),
(74, 101, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-29 18:36:47', '2023-01-29 18:36:47'),
(75, 102, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-30 08:34:25', '2023-01-30 08:34:25'),
(76, 103, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 06:49:54', '2023-01-31 06:49:54'),
(77, 104, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 07:42:12', '2023-01-31 07:42:12'),
(78, 105, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 08:06:16', '2023-01-31 08:06:16'),
(79, 106, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 08:44:39', '2023-01-31 08:44:39'),
(80, 107, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 09:23:37', '2023-01-31 09:23:37'),
(81, 108, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 10:33:35', '2023-01-31 10:33:35'),
(82, 109, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 10:38:33', '2023-01-31 10:38:33'),
(83, 110, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 11:14:49', '2023-01-31 11:14:49'),
(84, 111, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 11:15:52', '2023-01-31 11:15:52'),
(85, 112, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 11:18:12', '2023-01-31 11:18:12'),
(86, 113, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31 23:40:17', '2023-01-31 23:40:17'),
(87, 114, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-01 04:17:30', '2023-02-01 04:17:30'),
(88, 115, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-01 07:30:37', '2023-02-01 07:30:37'),
(89, 116, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-01 07:32:34', '2023-02-01 07:32:34'),
(90, 117, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-01 07:34:01', '2023-02-01 07:34:01'),
(91, 118, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-01 07:35:22', '2023-02-01 07:35:22'),
(92, 119, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-01 07:39:44', '2023-02-01 07:39:44'),
(93, 120, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-01 23:40:39', '2023-02-01 23:40:39'),
(94, 121, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 00:16:25', '2023-02-02 00:16:25'),
(95, 122, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 01:02:40', '2023-02-02 01:02:40'),
(96, 123, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 01:08:24', '2023-02-02 01:08:24'),
(97, 124, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 01:33:26', '2023-02-02 01:33:26'),
(98, 125, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 03:14:54', '2023-02-02 03:14:54'),
(99, 126, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 03:18:02', '2023-02-02 03:18:02'),
(100, 127, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 04:10:11', '2023-02-02 04:10:11'),
(101, 128, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 04:43:29', '2023-02-02 04:43:29'),
(102, 129, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 06:19:23', '2023-02-02 06:19:23'),
(103, 130, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 06:23:50', '2023-02-02 06:23:50'),
(104, 131, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 09:07:04', '2023-02-02 09:07:04'),
(105, 132, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 11:28:23', '2023-02-02 11:28:23'),
(106, 133, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 15:14:47', '2023-02-02 15:14:47'),
(107, 134, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-04 01:48:33', '2023-02-04 01:48:33'),
(108, 135, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-04 01:56:50', '2023-02-04 01:56:50'),
(109, 136, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-04 02:34:51', '2023-02-04 02:34:51'),
(110, 137, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-04 20:03:39', '2023-02-04 20:03:39'),
(111, 138, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-05 02:09:29', '2023-02-05 02:09:29'),
(112, 139, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-05 02:53:11', '2023-02-05 02:53:11'),
(113, 140, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-05 13:24:18', '2023-02-05 13:24:18'),
(114, 141, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-05 19:08:15', '2023-02-05 19:08:15'),
(115, 142, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-06 02:33:09', '2023-02-06 02:33:09'),
(116, 143, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-06 03:11:51', '2023-02-06 03:11:51'),
(117, 144, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 01:14:05', '2023-02-07 01:14:05'),
(118, 145, 'State Bank of India', 'Sudeep Rajivkumar Dey', '35898755212', 'Savings', 'SBIN000034', 'deysudeep2002@oksbi', '2023-02-07 03:13:05', '2023-02-07 04:12:46'),
(119, 146, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 05:38:36', '2023-02-07 05:38:36'),
(120, 147, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 05:53:27', '2023-02-07 05:53:27'),
(121, 148, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 06:16:59', '2023-02-07 06:16:59'),
(122, 149, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 06:46:54', '2023-02-07 06:46:54'),
(123, 150, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 07:32:08', '2023-02-07 07:32:08'),
(124, 151, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 14:20:03', '2023-02-07 14:20:03'),
(125, 152, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 14:28:28', '2023-02-07 14:28:28'),
(126, 153, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 15:48:24', '2023-02-07 15:48:24'),
(127, 154, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-07 23:02:56', '2023-02-07 23:02:56'),
(128, 155, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-09 05:06:39', '2023-02-09 05:06:39'),
(129, 156, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 01:45:39', '2023-02-10 01:45:39'),
(130, 157, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 03:54:01', '2023-02-10 03:54:01'),
(131, 158, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 04:00:53', '2023-02-10 04:00:53'),
(133, 160, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 04:20:14', '2023-02-10 04:20:14'),
(134, 161, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 04:22:18', '2023-02-10 04:22:18'),
(135, 162, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 04:25:15', '2023-02-10 04:25:15'),
(136, 163, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-10 10:05:10', '2023-02-10 10:05:10'),
(137, 164, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-11 10:24:51', '2023-02-11 10:24:51'),
(138, 165, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 05:14:16', '2023-02-12 05:14:16'),
(139, 166, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 05:26:29', '2023-02-12 05:26:29'),
(140, 167, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 05:31:13', '2023-02-12 05:31:13'),
(141, 168, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:06:28', '2023-02-12 13:06:28'),
(142, 169, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:08:12', '2023-02-12 13:08:12'),
(143, 170, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:13:06', '2023-02-12 13:13:06'),
(144, 171, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:14:08', '2023-02-12 13:14:08'),
(145, 172, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:15:45', '2023-02-12 13:15:45'),
(146, 173, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:20:37', '2023-02-12 13:20:37'),
(147, 174, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:20:42', '2023-02-12 13:20:42'),
(148, 175, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:21:57', '2023-02-12 13:21:57'),
(149, 176, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-12 13:22:05', '2023-02-12 13:22:05'),
(150, 177, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-13 04:16:25', '2023-02-13 04:16:25'),
(151, 178, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-14 08:08:10', '2023-02-14 08:08:10'),
(152, 179, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-15 02:21:02', '2023-02-15 02:21:02'),
(153, 180, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-15 03:17:51', '2023-02-15 03:17:51'),
(154, 181, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-15 05:43:36', '2023-02-15 05:43:36'),
(155, 182, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-15 06:01:58', '2023-02-15 06:01:58'),
(156, 183, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-17 12:38:12', '2023-02-17 12:38:12'),
(157, 184, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-17 13:38:29', '2023-02-17 13:38:29'),
(158, 185, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-21 10:06:29', '2023-02-21 10:06:29'),
(159, 186, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-23 08:10:56', '2023-02-23 08:10:56'),
(160, 187, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-26 01:12:50', '2023-02-26 01:12:50'),
(165, 192, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-16 05:39:03', '2023-03-16 05:39:03'),
(166, 193, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-16 06:17:50', '2023-03-16 06:17:50'),
(168, 195, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-23 10:24:55', '2023-03-23 10:24:55'),
(169, 196, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-23 10:29:32', '2023-03-23 10:29:32'),
(170, 197, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-23 10:46:23', '2023-03-23 10:46:23'),
(171, 198, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-23 12:19:57', '2023-03-23 12:19:57'),
(172, 199, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24 05:33:10', '2023-03-24 05:33:10'),
(173, 200, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24 05:36:35', '2023-03-24 05:36:35'),
(174, 201, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-04 09:02:49', '2023-04-04 09:02:49'),
(175, 202, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-04 09:12:24', '2023-04-04 09:12:24'),
(176, 203, 'HDFC', 'priyanshi prajapati', '12345678910', 'Savings Account', '123456789', 'priyanshi@123', NULL, '2023-10-12 15:24:23'),
(177, 204, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-27 04:08:07', '2023-04-27 04:08:07'),
(178, 205, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-27 04:09:15', '2023-04-27 04:09:15'),
(179, 206, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-02 14:27:36', '2023-05-02 14:27:36'),
(180, 207, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-11 09:32:20', '2023-05-11 09:32:20'),
(181, 208, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-23 14:26:23', '2023-06-23 14:26:23'),
(182, 209, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-03 13:46:22', '2023-07-03 13:46:22'),
(183, 210, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-03 16:45:09', '2023-07-03 16:45:09'),
(184, 211, 'HDFC', 'prajapati priyanshi', '82468756797', 'ctbsvaysvvh', 'fhsjhebjejn', 'budmdndbskm', '2023-10-10 12:13:34', '2023-10-10 16:39:47'),
(185, 212, 'HDFC', 'Priyanshi Prajapati', '12345678910', 'Savings Account', '987654', 'Priyanshi 123', '2023-10-11 10:00:32', '2023-10-11 10:47:35'),
(186, 213, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-26 14:12:47', '2023-10-26 14:12:47'),
(187, 214, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-26 14:53:11', '2023-10-26 14:53:11'),
(188, 215, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-26 16:07:15', '2023-10-26 16:07:15'),
(189, 216, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-26 16:23:19', '2023-10-26 16:23:19'),
(190, 217, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-31 10:17:45', '2023-10-31 10:17:45'),
(191, 218, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-31 10:33:24', '2023-10-31 10:33:24'),
(192, 219, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-31 10:38:08', '2023-10-31 10:38:08'),
(193, 220, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-31 10:40:11', '2023-10-31 10:40:11'),
(194, 221, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-31 10:44:05', '2023-10-31 10:44:05'),
(195, 222, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-02 11:09:47', '2023-11-02 11:09:47'),
(196, 223, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-02 11:20:21', '2023-11-02 11:20:21'),
(197, 224, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-02 11:51:06', '2023-11-02 11:51:06'),
(198, 225, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-02 11:55:38', '2023-11-02 11:55:38'),
(199, 226, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-04 11:43:07', '2023-11-04 11:43:07'),
(200, 227, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-29 10:49:17', '2023-12-29 10:49:17'),
(201, 228, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-10 11:40:02', '2024-01-10 11:40:02'),
(202, 229, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-06 11:12:43', '2024-02-06 11:12:43'),
(203, 230, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-20 05:05:54', '2024-02-20 05:05:54'),
(204, 231, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-26 06:20:35', '2024-03-26 06:20:35'),
(205, 232, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-12 07:02:09', '2024-06-12 07:02:09'),
(206, 233, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-05 11:19:45', '2024-07-05 11:19:45'),
(207, 234, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-05 11:37:29', '2024-07-05 11:37:29'),
(208, 235, 'state bank of india', 'parvez', '123456789456', 'NORAMAL', 'sbin0018802', 'dsfdsjfndjn', '2024-07-06 06:29:56', '2024-07-11 09:43:16');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2022-12-05 23:50:04', '2022-12-05 23:50:04'),
(2, 'role-create', 'web', '2022-12-05 23:50:04', '2022-12-05 23:50:04'),
(3, 'role-edit', 'web', '2022-12-05 23:50:04', '2022-12-05 23:50:04'),
(4, 'role-delete', 'web', '2022-12-05 23:50:04', '2022-12-05 23:50:04'),
(5, 'product-list', 'web', '2022-12-05 23:50:04', '2022-12-05 23:50:04'),
(6, 'product-create', 'web', '2022-12-05 23:50:04', '2022-12-05 23:50:04'),
(7, 'product-edit', 'web', '2022-12-05 23:50:04', '2022-12-05 23:50:04'),
(8, 'product-delete', 'web', '2022-12-05 23:50:04', '2022-12-05 23:50:04'),
(9, 'users-list', 'web', '2023-02-06 05:06:18', '2023-02-06 05:06:18'),
(10, 'users-create', 'web', '2023-02-06 05:06:18', '2023-02-06 05:06:18'),
(11, 'users-edit', 'web', '2023-02-06 05:06:18', '2023-02-06 05:06:18'),
(12, 'users-delete', 'web', '2023-02-06 05:06:18', '2023-02-06 05:06:18'),
(13, 'users-payment', 'web', '2023-02-06 05:06:18', '2023-02-06 05:06:18'),
(14, 'category-list', 'web', '2023-02-06 05:06:18', '2023-02-06 05:06:18'),
(15, 'category-create', 'web', '2023-02-06 05:06:18', '2023-02-06 05:06:18'),
(16, 'category-edit', 'web', '2023-02-06 05:06:18', '2023-02-06 05:06:18'),
(17, 'category-delete', 'web', '2023-02-06 05:06:18', '2023-02-06 05:06:18'),
(18, 'media-list', 'web', '2023-02-06 05:06:18', '2023-02-06 05:06:18'),
(19, 'media-create', 'web', '2023-02-06 05:11:12', '2023-02-06 05:11:12'),
(20, 'media-edit', 'web', '2023-02-06 05:11:12', '2023-02-06 05:11:12'),
(21, 'media-delete', 'web', '2023-02-06 05:11:12', '2023-02-06 05:11:12'),
(22, 'accountpost-list', 'web', '2023-02-06 05:11:12', '2023-02-06 05:11:12'),
(23, 'accountpost-create', 'web', '2023-02-06 05:11:12', '2023-02-06 05:11:12'),
(24, 'accountpost-edit', 'web', '2023-02-06 05:11:12', '2023-02-06 05:11:12'),
(25, 'accountpost-delete', 'web', '2023-02-06 05:11:12', '2023-02-06 05:11:12'),
(26, 'templatemaster-list', 'web', '2023-02-06 05:11:12', '2023-02-06 05:11:12'),
(27, 'templatemaster-create', 'web', '2023-02-06 05:11:12', '2023-02-06 05:11:12'),
(28, 'templatemaster-edit', 'web', '2023-02-06 05:11:12', '2023-02-06 05:11:12'),
(29, 'templatemaster-delete', 'web', '2023-02-06 05:13:44', '2023-02-06 05:13:44'),
(30, 'subscription-list', 'web', '2023-02-06 05:13:44', '2023-02-06 05:13:44'),
(31, 'subscription-create', 'web', '2023-02-06 05:13:44', '2023-02-06 05:13:44'),
(32, 'subscription-edit', 'web', '2023-02-06 05:13:44', '2023-02-06 05:13:44'),
(33, 'subscription-delete', 'web', '2023-02-06 05:13:44', '2023-02-06 05:13:44'),
(34, 'subscriptionpackage-list', 'web', '2023-02-06 05:13:44', '2023-02-06 05:13:44'),
(35, 'subscriptionpackage-create', 'web', '2023-02-06 05:13:44', '2023-02-06 05:13:44'),
(36, 'subscriptionpackage-edit', 'web', '2023-02-06 05:13:44', '2023-02-06 05:13:44'),
(37, 'subscriptionpackage-delete', 'web', '2023-02-06 05:13:44', '2023-02-06 05:13:44'),
(38, 'state-list', 'web', '2023-02-06 05:13:44', '2023-02-06 05:13:44'),
(39, 'state-create', 'web', '2023-02-06 05:16:31', '2023-02-06 05:16:31'),
(40, 'state-edit', 'web', '2023-02-06 05:16:31', '2023-02-06 05:16:31'),
(41, 'state-delete', 'web', '2023-02-06 05:16:31', '2023-02-06 05:16:31'),
(42, 'city-list', 'web', '2023-02-06 05:16:31', '2023-02-06 05:16:31'),
(43, 'city-create', 'web', '2023-02-06 05:16:31', '2023-02-06 05:16:31'),
(44, 'city-edit', 'web', '2023-02-06 05:16:31', '2023-02-06 05:16:31'),
(45, 'city-delete', 'web', '2023-02-06 05:16:31', '2023-02-06 05:16:31'),
(46, 'banner-list', 'web', '2023-02-06 05:16:31', '2023-02-06 05:16:31'),
(47, 'banner-create', 'web', '2023-02-06 05:16:31', '2023-02-06 05:16:31'),
(48, 'banner-edit', 'web', '2023-02-06 05:16:31', '2023-02-06 05:16:31'),
(49, 'banner-delete', 'web', '2023-02-06 05:16:31', '2023-02-06 05:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 3, 'my-app-token', '2db3a5bbdb9d52ef828347fb0b59aaa082d59408c304c798c25623f42be08c4b', '[\"*\"]', NULL, NULL, '2022-12-19 00:25:20', '2022-12-19 00:25:20'),
(2, 'App\\Models\\User', 3, 'my-app-token', '042a390f724ce8106d561c3bb2c7303424807572fbffe69f0b60c3b89b0f346b', '[\"*\"]', NULL, NULL, '2022-12-19 00:30:24', '2022-12-19 00:30:24'),
(3, 'App\\Models\\User', 3, 'my-app-token', 'fb570e00e40cdef5340c8c33fab128e55a5779465e89bee59cd01846b1d235f5', '[\"*\"]', NULL, NULL, '2022-12-19 00:52:19', '2022-12-19 00:52:19'),
(4, 'App\\Models\\User', 3, 'my-app-token', '244ee767a38b15ed88041b255a109f2def0b8ca7f6c4fa779f158ea120137765', '[\"*\"]', NULL, NULL, '2022-12-21 00:28:37', '2022-12-21 00:28:37'),
(5, 'App\\Models\\User', 3, 'my-app-token', '6885f9e6db22a5da29656841adda3f661da95edd157cffbfd7daf8684d5f57d3', '[\"*\"]', NULL, NULL, '2022-12-21 00:30:09', '2022-12-21 00:30:09'),
(6, 'App\\Models\\User', 3, 'my-app-token', 'aa6f2ad70752f9862495d67a08fa94819d395df41f358133261f011049a415c3', '[\"*\"]', NULL, NULL, '2022-12-21 00:30:31', '2022-12-21 00:30:31'),
(7, 'App\\Models\\User', 3, 'my-app-token', 'c2b1c4944f85b45bb1633eefeaee6036a28d8adbea3939fc9d3e81f305c01113', '[\"*\"]', NULL, NULL, '2023-01-02 11:22:57', '2023-01-02 11:22:57'),
(8, 'App\\Models\\User', 3, 'my-app-token', 'a33ea8de94ae465438ac49f11068a89c6375418948ff2deffa2735b1868ee4cf', '[\"*\"]', NULL, NULL, '2023-01-02 17:15:08', '2023-01-02 17:15:08'),
(9, 'App\\Models\\User', 3, 'my-app-token', 'ac3de6a3da51a923d22d784d01d6247a07433f321100574749f763ca7c9b793f', '[\"*\"]', NULL, NULL, '2023-01-03 17:28:19', '2023-01-03 17:28:19'),
(10, 'App\\Models\\User', 34, 'my-app-token', '332a2ec615bcba3592f3b84d9b5a0d1ce8db0fdaa8f8377c079651d946eddeb7', '[\"*\"]', NULL, NULL, '2023-01-03 19:09:56', '2023-01-03 19:09:56'),
(11, 'App\\Models\\User', 3, 'my-app-token', '5f3f02038854a7cee84fd1c6f29a570c695a54a1a8a91b2c3fe5aed92dd44b59', '[\"*\"]', NULL, NULL, '2023-01-03 19:11:52', '2023-01-03 19:11:52'),
(12, 'App\\Models\\User', 3, 'my-app-token', '4c49abe36122e49d1f1f780850266f80017053660a31adc7d132dace58ffff4a', '[\"*\"]', NULL, NULL, '2023-01-03 19:14:22', '2023-01-03 19:14:22'),
(13, 'App\\Models\\User', 2, 'my-app-token', '6827da127ea830627ad09a595cce3c6f543232f6a85b572d072889b10b0770b1', '[\"*\"]', NULL, NULL, '2023-01-03 19:17:31', '2023-01-03 19:17:31'),
(14, 'App\\Models\\User', 34, 'my-app-token', 'bec7078047c1bfb737e588c92d36ef4f65e75d01d2463699bc8df4351d09ae38', '[\"*\"]', NULL, NULL, '2023-01-03 19:19:48', '2023-01-03 19:19:48'),
(15, 'App\\Models\\User', 34, 'my-app-token', '4ef35a3f9d4fc6afedeb0e7ce7baee0c709dc71517a517098531774778105bda', '[\"*\"]', NULL, NULL, '2023-01-03 19:20:32', '2023-01-03 19:20:32'),
(16, 'App\\Models\\User', 2, 'my-app-token', 'f899507c240262de041cb30a7adc91210d121e4c16dd7e1a249da854b3294451', '[\"*\"]', NULL, NULL, '2023-01-03 19:23:23', '2023-01-03 19:23:23'),
(17, 'App\\Models\\User', 34, 'my-app-token', 'aeac2a3809708984b3364d3b47c8712f4d3e1b49e8528ac8f1d53eddf8e67861', '[\"*\"]', NULL, NULL, '2023-01-03 19:26:36', '2023-01-03 19:26:36'),
(18, 'App\\Models\\User', 34, 'my-app-token', 'f590a0677050477ef5fdc89237a0487b7c03866f5118dfcbe9cd7444ec82cc25', '[\"*\"]', NULL, NULL, '2023-01-03 19:30:44', '2023-01-03 19:30:44'),
(19, 'App\\Models\\User', 34, 'my-app-token', '4e93dbbc1aef3eabba3c8e5ba163d25581da84973013e6527d273106ecb04112', '[\"*\"]', NULL, NULL, '2023-01-04 15:02:57', '2023-01-04 15:02:57'),
(20, 'App\\Models\\User', 34, 'my-app-token', '9f0ada93781a3fb236b5263d79231773bc54eee929cad1e941287ff007a2f0c6', '[\"*\"]', NULL, NULL, '2023-01-04 15:14:58', '2023-01-04 15:14:58'),
(21, 'App\\Models\\User', 34, 'my-app-token', 'dd963e5af1783eb7abdba7f597537b1da7c38a685307b1a6dc24fadefab23569', '[\"*\"]', NULL, NULL, '2023-01-04 16:17:18', '2023-01-04 16:17:18'),
(22, 'App\\Models\\User', 2, 'my-app-token', '881eb1c2c05e1b4535653a3d5a6281e280cf143fbaaa1ce32a5cd53a94f5f02a', '[\"*\"]', NULL, NULL, '2023-01-04 16:54:21', '2023-01-04 16:54:21'),
(23, 'App\\Models\\User', 3, 'my-app-token', 'b9cf16665064500d124afe628a18eecfc224836bb8ea8505f20997a2ff638fd0', '[\"*\"]', NULL, NULL, '2023-01-04 16:56:13', '2023-01-04 16:56:13'),
(24, 'App\\Models\\User', 34, 'my-app-token', '061205f4ac440ea4d6b78e707ccc067b99a66d841724df57bb36cfda3c549b35', '[\"*\"]', NULL, NULL, '2023-01-04 19:08:48', '2023-01-04 19:08:48'),
(25, 'App\\Models\\User', 34, 'my-app-token', 'ba9f030b204f23e091219a2cac3e2aabddbb89a7e04e7ffc8691c58a459b5504', '[\"*\"]', NULL, NULL, '2023-01-05 11:03:05', '2023-01-05 11:03:05'),
(26, 'App\\Models\\User', 3, 'my-app-token', 'f77c9ec50537ce686c98effdf7f4b3057cced1223801c9e85291a5f5b5b346e5', '[\"*\"]', NULL, NULL, '2023-01-05 11:22:06', '2023-01-05 11:22:06'),
(27, 'App\\Models\\User', 34, 'my-app-token', '2768cf66edabcf58158db26c4a0e0d0ac1361196cc049dfdf670d763a68540d2', '[\"*\"]', NULL, NULL, '2023-01-05 18:40:08', '2023-01-05 18:40:08'),
(28, 'App\\Models\\User', 34, 'my-app-token', 'b6f7582dc0c757039065d711b5d9c57da4e2ef51c407066ff3a18e410cc8ab10', '[\"*\"]', NULL, NULL, '2023-01-05 21:10:09', '2023-01-05 21:10:09'),
(29, 'App\\Models\\User', 3, 'my-app-token', '5812c2c84c4cf9f9db2a84569820ab342e10487e7f5e3d948789e0a6dc2d098d', '[\"*\"]', NULL, NULL, '2023-01-06 13:12:46', '2023-01-06 13:12:46'),
(30, 'App\\Models\\User', 3, 'my-app-token', '8d4ce30b54c42d29c93937382596a98a8453cc6d3a3923d2166abbda23c9854d', '[\"*\"]', NULL, NULL, '2023-01-06 15:06:36', '2023-01-06 15:06:36'),
(31, 'App\\Models\\User', 3, 'my-app-token', 'd922f6063da86e5879b81c8dc08caea594069619bffaa6552805e421ef795ebb', '[\"*\"]', NULL, NULL, '2023-01-06 15:41:58', '2023-01-06 15:41:58'),
(32, 'App\\Models\\User', 3, 'my-app-token', '2de208188bbda100569e51591f7aebb5ebb858b10bd5894f9cf8f0dcc6cb9f44', '[\"*\"]', NULL, NULL, '2023-01-06 16:41:51', '2023-01-06 16:41:51'),
(33, 'App\\Models\\User', 3, 'my-app-token', '75b9e969150cfd2d175d3b936094a529423808a92d888731774ef6c8bae51947', '[\"*\"]', NULL, NULL, '2023-01-06 18:03:40', '2023-01-06 18:03:40'),
(34, 'App\\Models\\User', 34, 'my-app-token', '397776db57b80d349228c58897bdff321de5ab6008a658a3d221de2e631ab5cb', '[\"*\"]', NULL, NULL, '2023-01-07 19:28:47', '2023-01-07 19:28:47'),
(35, 'App\\Models\\User', 37, 'my-app-token', '1bb1a128240ddc78b1b923fa2d6a879fac72b921c235432773cc4b78167a10d7', '[\"*\"]', NULL, NULL, '2023-01-07 19:36:06', '2023-01-07 19:36:06'),
(36, 'App\\Models\\User', 34, 'my-app-token', 'f3d2171e9c11e9cc0f2b357950f0fa19ccfa0cf31c9eb07e76df4fce4e2f37c5', '[\"*\"]', NULL, NULL, '2023-01-08 00:15:11', '2023-01-08 00:15:11'),
(37, 'App\\Models\\User', 34, 'my-app-token', 'a69e1b262777dae5bf202271b39b384b17a577873b14b4a62bac2e2a9ea99020', '[\"*\"]', NULL, NULL, '2023-01-08 15:05:04', '2023-01-08 15:05:04'),
(38, 'App\\Models\\User', 3, 'my-app-token', '42aa60c065c08e107d84d2df7ea9a1656791ac97efb0115970648f3f62b6f7a6', '[\"*\"]', NULL, NULL, '2023-01-09 11:38:03', '2023-01-09 11:38:03'),
(39, 'App\\Models\\User', 3, 'my-app-token', '991e82cdebcfad9fdd1222703c536c8cef758bd001cbe949f337689f01219ba2', '[\"*\"]', NULL, NULL, '2023-01-09 12:47:05', '2023-01-09 12:47:05'),
(40, 'App\\Models\\User', 34, 'my-app-token', 'f2d06a0c8d51c2416a22bdbfcca8a15ced6696d7fd98e5681609cfc9a3f7d626', '[\"*\"]', NULL, NULL, '2023-01-09 12:53:56', '2023-01-09 12:53:56'),
(41, 'App\\Models\\User', 2, 'my-app-token', '1fbdc464ca148c1f42d13291218a8017b1e647abe07dbb052d4bc5614cc4402f', '[\"*\"]', NULL, NULL, '2023-01-09 12:55:45', '2023-01-09 12:55:45'),
(42, 'App\\Models\\User', 34, 'my-app-token', '18214a03d3b1aff9ba9720959731e1f9f6706c8413a3e3fd4df0591ec9f91dbd', '[\"*\"]', NULL, NULL, '2023-01-09 13:18:32', '2023-01-09 13:18:32'),
(43, 'App\\Models\\User', 3, 'my-app-token', '3d48a054bf6e63e7e809b34cb57e42936604cf666ce3a229f66f6a8874448a43', '[\"*\"]', NULL, NULL, '2023-01-09 14:52:11', '2023-01-09 14:52:11'),
(44, 'App\\Models\\User', 34, 'my-app-token', '601b2f6d3ab3d29bdf210db59ebbf07e139f614ec1bc425858eb16373017cfc9', '[\"*\"]', NULL, NULL, '2023-01-09 17:23:33', '2023-01-09 17:23:33'),
(45, 'App\\Models\\User', 34, 'my-app-token', '236d7291ea97ef70e617d8b3c3a71d8b865250ea773a0070dfdc981e530befec', '[\"*\"]', NULL, NULL, '2023-01-10 11:35:39', '2023-01-10 11:35:39'),
(46, 'App\\Models\\User', 34, 'my-app-token', '9f6ac13d18c4c30fcd457cc50e7a16b9d13bd5ab10e40dfa8805d8546a801248', '[\"*\"]', NULL, NULL, '2023-01-10 13:20:33', '2023-01-10 13:20:33'),
(47, 'App\\Models\\User', 34, 'my-app-token', 'b3b4e622a6a9699794acbcd006eebcaa6b03a6e4e723db840fb3460ec6e1289b', '[\"*\"]', NULL, NULL, '2023-01-10 14:59:23', '2023-01-10 14:59:23'),
(48, 'App\\Models\\User', 3, 'my-app-token', 'c66cc42471e933ce214150082c80dadb97ace4aa6ccb1e70f0cc824d7469b525', '[\"*\"]', NULL, NULL, '2023-01-10 15:02:33', '2023-01-10 15:02:33'),
(49, 'App\\Models\\User', 34, 'my-app-token', '147ccdd601c105596b02daa0b1685c9779497d8a0e0fed88cdb38307fd9695bc', '[\"*\"]', NULL, NULL, '2023-01-10 15:07:41', '2023-01-10 15:07:41'),
(50, 'App\\Models\\User', 34, 'my-app-token', 'acac27fd2b1a60a08b19119343599cd1b095cd1dffd2d7ab44d6f6146aeaacfe', '[\"*\"]', NULL, NULL, '2023-01-10 15:11:30', '2023-01-10 15:11:30'),
(51, 'App\\Models\\User', 34, 'my-app-token', '9f656662d80bdade59db9027ef49f2e7691b9de748c62d37a1d37ef71c1304fc', '[\"*\"]', NULL, NULL, '2023-01-10 15:12:09', '2023-01-10 15:12:09'),
(52, 'App\\Models\\User', 34, 'my-app-token', '5638d2b6cc8938bd44349a48d1350b7540db67a32ee657b5b7bf1c4f1bbc5b9e', '[\"*\"]', NULL, NULL, '2023-01-10 15:13:42', '2023-01-10 15:13:42'),
(53, 'App\\Models\\User', 34, 'my-app-token', '4b5dd04e84cf0a8cfc7fdb4dc5ea92a101433f14e27164a629188a087956d33b', '[\"*\"]', NULL, NULL, '2023-01-10 15:16:05', '2023-01-10 15:16:05'),
(54, 'App\\Models\\User', 34, 'my-app-token', 'aac9757571b17da28b4a2852ce23fe59d1dcef2075ab15c76c2b4b97c9ed7e82', '[\"*\"]', NULL, NULL, '2023-01-10 15:17:18', '2023-01-10 15:17:18'),
(55, 'App\\Models\\User', 34, 'my-app-token', '86f56d14ca9c7990bdaa8ce052f54efb9507a7b18c35403b6997fa6c6cbd0840', '[\"*\"]', NULL, NULL, '2023-01-10 15:20:14', '2023-01-10 15:20:14'),
(56, 'App\\Models\\User', 36, 'my-app-token', 'd3889943cb7b6fc5ca4aa5eb04c37a2ff1f458a1bb941708d2c7f3ec199548a3', '[\"*\"]', NULL, NULL, '2023-01-10 15:21:42', '2023-01-10 15:21:42'),
(57, 'App\\Models\\User', 3, 'my-app-token', '8de2fe728cbfbac0575b3672e3da4ac4ac0be5509d3aee259de2f56865b66196', '[\"*\"]', NULL, NULL, '2023-01-10 18:17:59', '2023-01-10 18:17:59'),
(58, 'App\\Models\\User', 34, 'my-app-token', '49056ab21abc72dfe88efc78249850b51dbe1a9ad46468911c3e9db41bfc4d57', '[\"*\"]', NULL, NULL, '2023-01-10 19:26:56', '2023-01-10 19:26:56'),
(59, 'App\\Models\\User', 3, 'my-app-token', 'ac24758b2e3d17c01c1c1cb6eec37ca54b09bfede8724fc6a8fd2a74ba4197eb', '[\"*\"]', NULL, NULL, '2023-01-10 19:30:20', '2023-01-10 19:30:20'),
(60, 'App\\Models\\User', 34, 'my-app-token', 'a141fd64778139ebd438de63717abe5ca77c5138f91f84486204c80bb726a527', '[\"*\"]', NULL, NULL, '2023-01-10 19:39:17', '2023-01-10 19:39:17'),
(61, 'App\\Models\\User', 39, 'my-app-token', 'e9ddbc56db38d484fdcd1e7edf037c7c2817b7e59662fb13a0c14bea4b37fe18', '[\"*\"]', NULL, NULL, '2023-01-10 21:43:11', '2023-01-10 21:43:11'),
(62, 'App\\Models\\User', 34, 'my-app-token', '779e38aa47ede30d2908e348b7c0ae1adcaeda62dfe57741117f2ff4f7597590', '[\"*\"]', NULL, NULL, '2023-01-11 18:49:27', '2023-01-11 18:49:27'),
(63, 'App\\Models\\User', 3, 'my-app-token', '034699acc77e217f7c7abbfc0cd70702a749965099e21f0d60f2181d664a412b', '[\"*\"]', NULL, NULL, '2023-01-11 18:55:48', '2023-01-11 18:55:48'),
(64, 'App\\Models\\User', 34, 'my-app-token', '8cb1d26c870bf2e9f57010131cb6af33929714f1d56c1219a221350cf0c50775', '[\"*\"]', NULL, NULL, '2023-01-11 19:21:14', '2023-01-11 19:21:14'),
(65, 'App\\Models\\User', 39, 'my-app-token', 'b5865d79ab389a48824c0dd2a5f6a93effeefd96e0ca5ab1b67780d4bf9edbfd', '[\"*\"]', NULL, NULL, '2023-01-11 19:22:00', '2023-01-11 19:22:00'),
(66, 'App\\Models\\User', 39, 'my-app-token', 'ea35648ef5308a10d04a05cf9bc26df8508e2a20d03a6ef853cb112e61970af5', '[\"*\"]', NULL, NULL, '2023-01-11 19:45:20', '2023-01-11 19:45:20'),
(67, 'App\\Models\\User', 39, 'my-app-token', '35ad965f43bdc41d2f8efd5aec68f48dc69ab5962d377c7e28fa3e8c6af862b6', '[\"*\"]', NULL, NULL, '2023-01-11 19:46:40', '2023-01-11 19:46:40'),
(68, 'App\\Models\\User', 34, 'my-app-token', '750d2790246caec627e60b9f8d79966ff24dc46c6659f1b2e1660dc3e23ce60d', '[\"*\"]', NULL, NULL, '2023-01-11 19:47:12', '2023-01-11 19:47:12'),
(69, 'App\\Models\\User', 39, 'my-app-token', 'b0a8861bc5376d4690a836b7ba2e190cfa97c6cec914e092d36b58878892a613', '[\"*\"]', NULL, NULL, '2023-01-11 19:47:26', '2023-01-11 19:47:26'),
(70, 'App\\Models\\User', 39, 'my-app-token', '96e090a79358f3eedfb8a95bfb6a6ce896bebbf945064c711cabaa3e09f4bb75', '[\"*\"]', NULL, NULL, '2023-01-11 19:57:33', '2023-01-11 19:57:33'),
(71, 'App\\Models\\User', 3, 'my-app-token', '718756fe3e57f554c6b13298036e2a52e0885dc7f39f1fb7055207545d02cf7b', '[\"*\"]', NULL, NULL, '2023-01-11 23:03:21', '2023-01-11 23:03:21'),
(72, 'App\\Models\\User', 34, 'my-app-token', '0af55230071795fad89a96ec8a5ebea549a6afe506859a8ed117f473522564cd', '[\"*\"]', NULL, NULL, '2023-01-12 11:16:25', '2023-01-12 11:16:25'),
(73, 'App\\Models\\User', 3, 'my-app-token', 'ddb0a7df327ec314e1e16036d206947b933734fab42390324c9c6e0fa9d43cc4', '[\"*\"]', NULL, NULL, '2023-01-12 11:40:30', '2023-01-12 11:40:30'),
(74, 'App\\Models\\User', 3, 'my-app-token', '9d2f2a9c77b9263a6a0c4161990e8ab1f6305bf622f18adbc17675e1ad6c3eab', '[\"*\"]', NULL, NULL, '2023-01-12 15:10:44', '2023-01-12 15:10:44'),
(75, 'App\\Models\\User', 3, 'my-app-token', 'ecfc78dbd0dee9b6cce9ad9fc4c5e85c4d651d42fac4b9911abfbaaaa558b797', '[\"*\"]', NULL, NULL, '2023-01-12 15:14:57', '2023-01-12 15:14:57'),
(76, 'App\\Models\\User', 37, 'my-app-token', '1a3a486a276a9d84bf96e4887fb80919aeaedc6830b624403688ecddd14d84c9', '[\"*\"]', NULL, NULL, '2023-01-12 15:45:32', '2023-01-12 15:45:32'),
(77, 'App\\Models\\User', 34, 'my-app-token', '68b0bc3ae6a9e578234e69b3e9572805700d205c3f2777772ee648d6ac843e5e', '[\"*\"]', NULL, NULL, '2023-01-12 16:13:32', '2023-01-12 16:13:32'),
(78, 'App\\Models\\User', 3, 'my-app-token', 'd59ecef9716383fe966b05cc03dda71758bd81addadb1b02aa50189c13f88a51', '[\"*\"]', NULL, NULL, '2023-01-12 16:35:45', '2023-01-12 16:35:45'),
(79, 'App\\Models\\User', 3, 'my-app-token', '6447039a0c2fa9c124bca20d93606cc13ae1465e5c9b22d4e7bc1eece58e7040', '[\"*\"]', NULL, NULL, '2023-01-12 17:28:43', '2023-01-12 17:28:43'),
(80, 'App\\Models\\User', 3, 'my-app-token', '1c764549d12196891682adfae5ff2f6ebaf4e23ec19671c0dffeb82b5793fbec', '[\"*\"]', NULL, NULL, '2023-01-12 17:31:48', '2023-01-12 17:31:48'),
(81, 'App\\Models\\User', 3, 'my-app-token', '01437b6165a1ee4eca60b307b43e5d39c09a5f081faff3f6bbc392412c4ca0ed', '[\"*\"]', NULL, NULL, '2023-01-12 17:39:42', '2023-01-12 17:39:42'),
(82, 'App\\Models\\User', 3, 'my-app-token', 'ba46cbf027ea7fa6808c9ddb9393b466fa5cb252909ecb967ad62ffc1d73ca83', '[\"*\"]', NULL, NULL, '2023-01-12 17:40:00', '2023-01-12 17:40:00'),
(83, 'App\\Models\\User', 7, 'my-app-token', '5554c3f48b525fd521a23275d0aa73c6e25a40224f088f77e7c74c696b18dc57', '[\"*\"]', NULL, NULL, '2023-01-13 12:42:09', '2023-01-13 12:42:09'),
(84, 'App\\Models\\User', 30, 'my-app-token', '9c7251836eb4670aeb2ac13512250249b446c8b38da29d0f0f6ff6ac2978d5e9', '[\"*\"]', NULL, NULL, '2023-01-13 16:40:31', '2023-01-13 16:40:31'),
(85, 'App\\Models\\User', 30, 'my-app-token', '5dc253b15f20152ad1fd37dbc09180d1e526bb7de3f790bf87d8fb47dada78f9', '[\"*\"]', NULL, NULL, '2023-01-13 17:00:27', '2023-01-13 17:00:27'),
(86, 'App\\Models\\User', 30, 'my-app-token', '6a35002b2eb4eec2558208b46f36c4fe96c97781e423bfe3c34e282926f0da2f', '[\"*\"]', NULL, NULL, '2023-01-13 17:05:05', '2023-01-13 17:05:05'),
(87, 'App\\Models\\User', 30, 'my-app-token', '045ba2a2982fc3b7d5b0669c3c9467c16bf2fe687bf26f65dd1cbf50608d6f15', '[\"*\"]', NULL, NULL, '2023-01-13 17:11:19', '2023-01-13 17:11:19'),
(88, 'App\\Models\\User', 45, 'my-app-token', '8345fb597830d1f3162aa416b61450bcad6bceb5262ee1333c8bc7d513f34a19', '[\"*\"]', NULL, NULL, '2023-01-13 17:28:17', '2023-01-13 17:28:17'),
(89, 'App\\Models\\User', 46, 'my-app-token', '77b3e6f0ecbce6aafc636d5b9f244f2d9bcc8fffd3c40f38a1a9dc672a8084bd', '[\"*\"]', NULL, NULL, '2023-01-13 17:46:55', '2023-01-13 17:46:55'),
(90, 'App\\Models\\User', 30, 'my-app-token', 'aeae3eaf400a5f89fb21b900cd3ef6724efa0327598e0611bedf386dbf9cfd35', '[\"*\"]', NULL, NULL, '2023-01-13 17:59:55', '2023-01-13 17:59:55'),
(91, 'App\\Models\\User', 30, 'my-app-token', 'dd61bbac90b4182b843b0e3f57b1a22621aff5add37790ebca3cc11eae53aecd', '[\"*\"]', NULL, NULL, '2023-01-13 18:36:53', '2023-01-13 18:36:53'),
(92, 'App\\Models\\User', 54, 'my-app-token', 'b1100530f8f0af205cb4809019c0dcbbb83e9eddf6dea388b34c0bc1bf574fb3', '[\"*\"]', NULL, NULL, '2023-01-13 18:39:28', '2023-01-13 18:39:28'),
(93, 'App\\Models\\User', 30, 'my-app-token', '8773b0de00538a2285a03e7723764f12cc7087b21902eebd653eced65f02451c', '[\"*\"]', NULL, NULL, '2023-01-13 19:34:07', '2023-01-13 19:34:07'),
(94, 'App\\Models\\User', 34, 'my-app-token', '84e7466e44ffb2e1ca29dae1c04fec9e3404a8b1b1ae6f256f8b2c3fc4ed177f', '[\"*\"]', NULL, NULL, '2023-01-16 11:15:04', '2023-01-16 11:15:04'),
(95, 'App\\Models\\User', 34, 'my-app-token', 'bee3b794a979d66455eefdbfed17b8990fd7be7b1547d7c1a8f081686151a80d', '[\"*\"]', NULL, NULL, '2023-01-17 12:58:17', '2023-01-17 12:58:17'),
(96, 'App\\Models\\User', 34, 'my-app-token', '851bdfae7acc70ba14300b6363a4a18a0e232a7ece4c4fb829893b9b748b5e9c', '[\"*\"]', NULL, NULL, '2023-01-17 12:59:05', '2023-01-17 12:59:05'),
(97, 'App\\Models\\User', 3, 'my-app-token', 'b5bcc6dfdac72d2e305f10c0383cbca326afbb8a3bf716165bfe23f4056da58d', '[\"*\"]', NULL, NULL, '2023-01-19 11:56:34', '2023-01-19 11:56:34'),
(98, 'App\\Models\\User', 63, 'my-app-token', 'd625639b5646a2ff16b8bb0a7f731779dc6499c01e77aff22d1b520363c4dc49', '[\"*\"]', NULL, NULL, '2023-01-19 12:06:53', '2023-01-19 12:06:53'),
(99, 'App\\Models\\User', 34, 'my-app-token', 'fba9c100ae675362b117ab4771b9964ea5100f55bbf3c1e1173d8f19951fd1b4', '[\"*\"]', NULL, NULL, '2023-01-19 12:48:39', '2023-01-19 12:48:39'),
(100, 'App\\Models\\User', 34, 'my-app-token', 'e3dd5406db2ae3897724f7c615968567490c206ca23e155d9e594ee2f282ab14', '[\"*\"]', NULL, NULL, '2023-01-19 13:06:59', '2023-01-19 13:06:59'),
(101, 'App\\Models\\User', 34, 'my-app-token', '1dbd5ae44a642e094d68295fae38f5691364e2be302f94a7b993d397f9ff5cc9', '[\"*\"]', NULL, NULL, '2023-01-19 13:38:07', '2023-01-19 13:38:07'),
(102, 'App\\Models\\User', 66, 'my-app-token', '80afe05e18e37554c35e682e8f0b6ef929148a6fb8718a9de0dec97c99ad9a62', '[\"*\"]', NULL, NULL, '2023-01-19 14:51:37', '2023-01-19 14:51:37'),
(103, 'App\\Models\\User', 67, 'my-app-token', '0531faa2c82c70e6f2f712c9b50ead9828d2db6432ba6c17f0936ceed8bd71a2', '[\"*\"]', NULL, NULL, '2023-01-19 14:51:48', '2023-01-19 14:51:48'),
(104, 'App\\Models\\User', 3, 'my-app-token', '64424fca52be9921c4349adcbed8aa6487346c61a4b5be69cfc886a560893c38', '[\"*\"]', NULL, NULL, '2023-01-19 15:16:53', '2023-01-19 15:16:53'),
(105, 'App\\Models\\User', 69, 'my-app-token', 'e04dc51b6205efb0b990bdd00d5dc353a9577f37983799c39e3e3f38551e58d7', '[\"*\"]', NULL, NULL, '2023-01-19 15:22:10', '2023-01-19 15:22:10'),
(106, 'App\\Models\\User', 70, 'my-app-token', '7058250b8b4a8abaecb72eaee773965408bfbe1f8045afba27d2d73b441637c0', '[\"*\"]', NULL, NULL, '2023-01-19 15:22:23', '2023-01-19 15:22:23'),
(107, 'App\\Models\\User', 71, 'my-app-token', 'f2495912966c8be37f090aafdcf848b28a95dedc87e0714735efc65394095a28', '[\"*\"]', NULL, NULL, '2023-01-19 15:46:19', '2023-01-19 15:46:19'),
(108, 'App\\Models\\User', 72, 'my-app-token', '2194d0bf60fd88ffacb846ada63c700c43631f9662048fc27182b43708c40934', '[\"*\"]', NULL, NULL, '2023-01-19 15:51:44', '2023-01-19 15:51:44'),
(109, 'App\\Models\\User', 73, 'my-app-token', '7f5a722ec03483076586d1fca641ab76697f0fb79b0d60a9942b854c0ffd7181', '[\"*\"]', NULL, NULL, '2023-01-19 15:53:18', '2023-01-19 15:53:18'),
(110, 'App\\Models\\User', 3, 'my-app-token', 'd8711f7d3739fec7bd547d8f2710d639f8e528f7b73cbe00dbe222888518a24c', '[\"*\"]', NULL, NULL, '2023-01-19 16:22:51', '2023-01-19 16:22:51'),
(111, 'App\\Models\\User', 79, 'my-app-token', 'a251edaa4306a7b89a24a34e156edc94573a78c15f56e8fbc7c2e50b2b9e512d', '[\"*\"]', NULL, NULL, '2023-01-19 17:34:35', '2023-01-19 17:34:35'),
(112, 'App\\Models\\User', 80, 'my-app-token', '2c594acdc3db6a4c6beda53162087bf8f33fcbce5cfd555506db32add4f78c77', '[\"*\"]', NULL, NULL, '2023-01-19 17:34:52', '2023-01-19 17:34:52'),
(113, 'App\\Models\\User', 81, 'my-app-token', 'c08b90261beff6cfa087ef6f76688e061dfce61f13e77b7992520a0d696c3fce', '[\"*\"]', NULL, NULL, '2023-01-19 17:35:49', '2023-01-19 17:35:49'),
(114, 'App\\Models\\User', 34, 'my-app-token', 'ea5ead8ef12a9246d8df1f28b433615102313d4fe13f0753009398a0c5d3069f', '[\"*\"]', NULL, NULL, '2023-01-19 17:36:25', '2023-01-19 17:36:25'),
(115, 'App\\Models\\User', 34, 'my-app-token', 'b16eb6d38e2a05a5939861566696766e3aa09d6548d997c4fb275500ebcc6892', '[\"*\"]', NULL, NULL, '2023-01-19 17:42:44', '2023-01-19 17:42:44'),
(116, 'App\\Models\\User', 86, 'my-app-token', 'f67722e61cc98f2af2851ccd0c6d4ce37acd2ad7ec5f7f386b0610d3b4b501c7', '[\"*\"]', NULL, NULL, '2023-01-19 17:49:40', '2023-01-19 17:49:40'),
(117, 'App\\Models\\User', 87, 'my-app-token', 'c6d092337e57e813ab71e6b61eb037d6d58ae3ec829b9eb659686270ad1dcab4', '[\"*\"]', NULL, NULL, '2023-01-19 17:55:13', '2023-01-19 17:55:13'),
(118, 'App\\Models\\User', 89, 'my-app-token', 'c5d2a4c5435f5f15be87728d8ea54a70ff177450194d8fa87054cfc24588d898', '[\"*\"]', NULL, NULL, '2023-01-19 17:55:57', '2023-01-19 17:55:57'),
(119, 'App\\Models\\User', 90, 'my-app-token', '7ce11d4c87a40d06898bb02b4b61b273fd72d771989b3baa0d942666fb11343c', '[\"*\"]', NULL, NULL, '2023-01-19 17:56:06', '2023-01-19 17:56:06'),
(120, 'App\\Models\\User', 92, 'my-app-token', '899182608fd5aa6527cee29a16f6a19af0d6e521f8e6086f005f710d0fa454e6', '[\"*\"]', NULL, NULL, '2023-01-19 17:56:53', '2023-01-19 17:56:53'),
(121, 'App\\Models\\User', 87, 'my-app-token', '4eefbb9f9746f946ebc53076d5d4263a9b0bd72994ad03d01c052c4e97af74e9', '[\"*\"]', NULL, NULL, '2023-01-19 18:00:21', '2023-01-19 18:00:21'),
(122, 'App\\Models\\User', 87, 'my-app-token', '6aa8741c6011813087fad92f23101710ae2e4ed619fe2bc3e0c9b32899982fda', '[\"*\"]', NULL, NULL, '2023-01-19 18:00:27', '2023-01-19 18:00:27'),
(123, 'App\\Models\\User', 93, 'my-app-token', 'b62b2ba1ba24eb7d08a39f38b7f2fda590ccc2822ccaeb0f7b60448a78eca1d8', '[\"*\"]', NULL, NULL, '2023-01-19 18:06:42', '2023-01-19 18:06:42'),
(124, 'App\\Models\\User', 37, 'my-app-token', '7645f12debc23e102c8c1dc06414b077278ad24664918a5d008d8e92657bd908', '[\"*\"]', NULL, NULL, '2023-01-19 18:15:17', '2023-01-19 18:15:17'),
(125, 'App\\Models\\User', 94, 'my-app-token', '9f7bcf8e981b5436d40623516e06307f54f8a2a71b855fbcd2c92c12c0a0dbfb', '[\"*\"]', NULL, NULL, '2023-01-19 18:16:33', '2023-01-19 18:16:33'),
(126, 'App\\Models\\User', 37, 'my-app-token', '4059af83085a67af1eb348c33e8ca56efb5ddb958d9d94bf99c2943e66b3c093', '[\"*\"]', NULL, NULL, '2023-01-19 18:18:41', '2023-01-19 18:18:41'),
(127, 'App\\Models\\User', 37, 'my-app-token', 'f57f7f8af5a67babefa3f5a8cbbcbc198f5ba629619c43b3f644f66ec8a73235', '[\"*\"]', NULL, NULL, '2023-01-19 18:19:36', '2023-01-19 18:19:36'),
(128, 'App\\Models\\User', 3, 'my-app-token', 'f87c04293574a19af9ca1b45cbf4ea0eea8a5e29e081262e860cc8df811775ce', '[\"*\"]', NULL, NULL, '2023-01-19 18:38:42', '2023-01-19 18:38:42'),
(129, 'App\\Models\\User', 3, 'my-app-token', '08a2311cba77346c3e369af33304ad60fd722f2a71fdbac08148b4c7e0c6c6e5', '[\"*\"]', NULL, NULL, '2023-01-19 18:47:40', '2023-01-19 18:47:40'),
(130, 'App\\Models\\User', 3, 'my-app-token', '79ecfc032e6488691685c5f81526cbe923dee9dec9dd0d367c3bf6971b091189', '[\"*\"]', NULL, NULL, '2023-01-19 19:16:54', '2023-01-19 19:16:54'),
(131, 'App\\Models\\User', 34, 'my-app-token', 'c942d9787c9441eba90ae09fe6814fbf8289dd0c17bdf7603fababe0ff398f05', '[\"*\"]', NULL, NULL, '2023-01-19 19:55:50', '2023-01-19 19:55:50'),
(132, 'App\\Models\\User', 34, 'my-app-token', 'ae89f2759b805f557bed722eec027f3d7a1cbdfb765b674bcdb296d3cb8e6889', '[\"*\"]', NULL, NULL, '2023-01-19 21:04:40', '2023-01-19 21:04:40'),
(133, 'App\\Models\\User', 37, 'my-app-token', 'de59d49d5b2d79b83838639fd4c4a7ea6b892b841b0bba34823859f1c5219056', '[\"*\"]', NULL, NULL, '2023-01-19 21:38:26', '2023-01-19 21:38:26'),
(134, 'App\\Models\\User', 87, 'my-app-token', '43a96d1c558269bc481bbb2ac03a449c0426a001628671b83bfe831610b43378', '[\"*\"]', NULL, NULL, '2023-01-19 22:32:13', '2023-01-19 22:32:13'),
(135, 'App\\Models\\User', 3, 'my-app-token', '2a8c37fb71bae8eb0605cf612f147197bb5a84c09de4ea905c6b49ac6c0e460d', '[\"*\"]', NULL, NULL, '2023-01-20 15:44:14', '2023-01-20 15:44:14'),
(136, 'App\\Models\\User', 34, 'my-app-token', '5decf6b1ab5dcbea3191da9af6015b3d9d24cb594ca56ddaea6bef17d9687f39', '[\"*\"]', NULL, NULL, '2023-01-20 15:49:06', '2023-01-20 15:49:06'),
(137, 'App\\Models\\User', 3, 'my-app-token', 'f68decd92b9b94a40b5869d9f15ff6f1b08343d3c25a0963b0c25fdc806bde73', '[\"*\"]', NULL, NULL, '2023-01-20 18:11:41', '2023-01-20 18:11:41'),
(138, 'App\\Models\\User', 3, 'my-app-token', '64f5bf4cecce12b7c35fd3e012cedb957107e404f927466b3ea7f52a69ace9ac', '[\"*\"]', NULL, NULL, '2023-01-20 18:18:28', '2023-01-20 18:18:28'),
(139, 'App\\Models\\User', 3, 'my-app-token', 'b8ee130ef80754ba6f612e2c7ed789d13f28d0f845529e6f2185dc7e57493daa', '[\"*\"]', NULL, NULL, '2023-01-20 18:26:35', '2023-01-20 18:26:35'),
(140, 'App\\Models\\User', 34, 'my-app-token', '886ebd5f1156fc6de6c08befa61b70d1d54ca50f21c2ff3851790659c3a44a46', '[\"*\"]', NULL, NULL, '2023-01-20 18:44:14', '2023-01-20 18:44:14'),
(141, 'App\\Models\\User', 34, 'my-app-token', '804ddf3f56c4e48dca409657c4a40c6810dd21a1db08b8a25e0380595aaf270c', '[\"*\"]', NULL, NULL, '2023-01-20 20:23:33', '2023-01-20 20:23:33'),
(142, 'App\\Models\\User', 34, 'my-app-token', '46e32f6d7e4b44353302f45d74dc5d935629ecff98ad28deee8939c72b6f4089', '[\"*\"]', NULL, NULL, '2023-01-20 23:09:49', '2023-01-20 23:09:49'),
(143, 'App\\Models\\User', 41, 'my-app-token', 'db54dde4554ecf0e222eb093447139da795e4e8d7760461ef8c46c9f2674b450', '[\"*\"]', NULL, NULL, '2023-01-21 11:37:40', '2023-01-21 11:37:40'),
(144, 'App\\Models\\User', 37, 'my-app-token', '8e9c0c7bf8c8a5bcf7aa40e0f321072e692652e543d85e69d43a94b8acc6310a', '[\"*\"]', NULL, NULL, '2023-01-21 12:08:45', '2023-01-21 12:08:45'),
(145, 'App\\Models\\User', 3, 'my-app-token', '8ee87ada07d81a65e6dfccc0230ecf831f93c9b6e2f0f350b3e9f7055f17d933', '[\"*\"]', NULL, NULL, '2023-01-21 12:15:19', '2023-01-21 12:15:19'),
(146, 'App\\Models\\User', 39, 'my-app-token', '23e26aa493006c8e363fa0014cd70cb29593f62588eb3c652d9a7c91ffb9b75f', '[\"*\"]', NULL, NULL, '2023-01-21 12:35:52', '2023-01-21 12:35:52'),
(147, 'App\\Models\\User', 3, 'my-app-token', '6c34aee6880941a03e45983df79f2d9a9404036f69077b49b120957f8d8266b3', '[\"*\"]', NULL, NULL, '2023-01-21 13:20:47', '2023-01-21 13:20:47'),
(148, 'App\\Models\\User', 3, 'my-app-token', '0925f2f11829ffb62d69f78cdcde4dd33ed9f1c03cf8ba8584a9537971560c35', '[\"*\"]', NULL, NULL, '2023-01-21 14:53:55', '2023-01-21 14:53:55'),
(149, 'App\\Models\\User', 39, 'my-app-token', '8efe5321759a9931803282ca9eb16eab8e28044b96ad21d415ed0d321641c2fb', '[\"*\"]', NULL, NULL, '2023-01-21 16:15:11', '2023-01-21 16:15:11'),
(150, 'App\\Models\\User', 39, 'my-app-token', 'ee750640bfbc155b435aff46fad1bc24c349f7b853f769a3da1fa5096e9f9fb8', '[\"*\"]', NULL, NULL, '2023-01-21 16:18:33', '2023-01-21 16:18:33'),
(151, 'App\\Models\\User', 39, 'my-app-token', '76e9d848bfd2788cdfd187dba97aea6ddcea0f23b6aa348da66667ca50c27d70', '[\"*\"]', NULL, NULL, '2023-01-21 16:22:24', '2023-01-21 16:22:24'),
(152, 'App\\Models\\User', 3, 'my-app-token', '6dcdbdcbb8913050f3fd76effc128521f192821c350606a40ef7f14af27f747a', '[\"*\"]', NULL, NULL, '2023-01-21 16:29:55', '2023-01-21 16:29:55'),
(153, 'App\\Models\\User', 34, 'my-app-token', '483a8ec0783b7bd9d53d9c2113b1b9d00b00f28bf4cb116fb51de01966cf087b', '[\"*\"]', NULL, NULL, '2023-01-21 16:42:55', '2023-01-21 16:42:55'),
(154, 'App\\Models\\User', 39, 'my-app-token', '593be2ac2eda8e39fbe37a6784de4c4dde108109c1f8c62b7ba6cf46c8cf4a85', '[\"*\"]', NULL, NULL, '2023-01-21 21:01:26', '2023-01-21 21:01:26'),
(155, 'App\\Models\\User', 3, 'my-app-token', '7c683ff3055a0656426cdb9ec5054549f79a95771d80ddc2c9f175d3d5d320a6', '[\"*\"]', NULL, NULL, '2023-01-22 00:17:00', '2023-01-22 00:17:00'),
(156, 'App\\Models\\User', 3, 'my-app-token', '6dfd3a189ecbe573ede3eb0bbec88cf456201224e142533d5c21b223d11d2967', '[\"*\"]', NULL, NULL, '2023-01-23 11:55:00', '2023-01-23 11:55:00'),
(157, 'App\\Models\\User', 97, 'my-app-token', '653619fdbfbe694a77bb88256c491373c718f7bb4aa1d355536a255465c9e24d', '[\"*\"]', NULL, NULL, '2023-01-23 12:33:37', '2023-01-23 12:33:37'),
(158, 'App\\Models\\User', 3, 'my-app-token', '2d9ea42dbd05134a70311ad6d6a383ae7ad8089971a77cf6ac01a58f36f1adc4', '[\"*\"]', NULL, NULL, '2023-01-23 12:47:08', '2023-01-23 12:47:08'),
(159, 'App\\Models\\User', 3, 'my-app-token', 'fc07871c334ac0878dd399cc120276318874553e4c4d593d0d12dd6480a356f4', '[\"*\"]', NULL, NULL, '2023-01-23 15:10:52', '2023-01-23 15:10:52'),
(160, 'App\\Models\\User', 3, 'my-app-token', '083a974a8f224d0a4e3b6a917023459ba1364299ba143ef2e5c1dd70f7e30db0', '[\"*\"]', NULL, NULL, '2023-01-23 15:27:55', '2023-01-23 15:27:55'),
(161, 'App\\Models\\User', 98, 'my-app-token', '81f65849f097eb4ca5ae3d097425cec3c9fe212b993119c8de0d91f789f78e5d', '[\"*\"]', NULL, NULL, '2023-01-24 13:08:57', '2023-01-24 13:08:57'),
(162, 'App\\Models\\User', 35, 'my-app-token', '15d2e48ecb0e21bcb8b9d1cb8e6e10efc891b4cab88de277552ea49763ba98b1', '[\"*\"]', NULL, NULL, '2023-01-24 14:40:57', '2023-01-24 14:40:57'),
(163, 'App\\Models\\User', 37, 'my-app-token', 'be6430320b61edb71aff266f3b1e65ce3937365e1c75e5314729613983bfcfe2', '[\"*\"]', NULL, NULL, '2023-01-24 14:42:30', '2023-01-24 14:42:30'),
(164, 'App\\Models\\User', 3, 'my-app-token', 'a1fb6d31bfea8e93bd25793a3ffbee8d82e242477c906f3dc010d4e6c499036c', '[\"*\"]', NULL, NULL, '2023-01-24 14:44:15', '2023-01-24 14:44:15'),
(165, 'App\\Models\\User', 99, 'my-app-token', '7bcc7702f1db115dffb5d2de8d45c21d49c9f390514179d9e929e4dc34ca2db4', '[\"*\"]', NULL, NULL, '2023-01-24 14:45:31', '2023-01-24 14:45:31'),
(166, 'App\\Models\\User', 39, 'my-app-token', '1bd00a2380e36e6f1df51897ebc34493bba1c7fabadcd1e8b53fff1a652dd84e', '[\"*\"]', NULL, NULL, '2023-01-24 14:45:35', '2023-01-24 14:45:35'),
(167, 'App\\Models\\User', 41, 'my-app-token', '0f4f4986787ad4964e8fc496dbde22ee22160af2aeb28824cb22193a74c87212', '[\"*\"]', NULL, NULL, '2023-01-24 14:47:17', '2023-01-24 14:47:17'),
(168, 'App\\Models\\User', 34, 'my-app-token', '326af66d930fa39d8601295c80bff2620f460dfb1763c43fd465d90c6d33db62', '[\"*\"]', NULL, NULL, '2023-01-24 14:47:36', '2023-01-24 14:47:36'),
(169, 'App\\Models\\User', 3, 'my-app-token', 'f797b668a6d121b70762f5772c1c226f6752b0f5601e0700280f9236d343e9c6', '[\"*\"]', NULL, NULL, '2023-01-24 14:47:59', '2023-01-24 14:47:59'),
(170, 'App\\Models\\User', 37, 'my-app-token', 'e828bebb6c9b566ad3e4ff13d33ff4c617a8eae745d5521f876c8b302e7b1d2e', '[\"*\"]', NULL, NULL, '2023-01-24 14:49:08', '2023-01-24 14:49:08'),
(171, 'App\\Models\\User', 100, 'my-app-token', 'bb0449adad32243b0dc8c63e10ae90e5b0e63bb6833ddfd9526276495bde28b5', '[\"*\"]', NULL, NULL, '2023-01-24 14:51:41', '2023-01-24 14:51:41'),
(172, 'App\\Models\\User', 87, 'my-app-token', '8e356c9f29340dee9dd5649c31d45ef4d4d26db20946a508ab20d964080271aa', '[\"*\"]', NULL, NULL, '2023-01-24 14:59:16', '2023-01-24 14:59:16'),
(173, 'App\\Models\\User', 101, 'my-app-token', '70505fc7c91ecb749b4e0bd74fa94d3230affad5c9ac6ef067daf6c43925056e', '[\"*\"]', NULL, NULL, '2023-01-24 14:59:19', '2023-01-24 14:59:19'),
(174, 'App\\Models\\User', 99, 'my-app-token', '7766f8ff60e15e162f7ae2b8cac7d3e27f799119a5134a0d2bb2b001a14b9412', '[\"*\"]', NULL, NULL, '2023-01-24 15:02:09', '2023-01-24 15:02:09'),
(175, 'App\\Models\\User', 102, 'my-app-token', '0afe5f4037a0124f1cc70f0d53a2a6212092480ea957789fb7bdc069ad8cac4b', '[\"*\"]', NULL, NULL, '2023-01-24 15:14:22', '2023-01-24 15:14:22'),
(176, 'App\\Models\\User', 103, 'my-app-token', '7cf750cbcb4d508d466281a222ffd264f4450589061b295256ae04b4acacff6d', '[\"*\"]', NULL, NULL, '2023-01-24 15:58:32', '2023-01-24 15:58:32'),
(177, 'App\\Models\\User', 99, 'my-app-token', '4c89c43b668d8204920361b64abe600e7eb7b1ec42712c2a2717e6fabdb8d63a', '[\"*\"]', NULL, NULL, '2023-01-24 16:25:55', '2023-01-24 16:25:55'),
(178, 'App\\Models\\User', 87, 'my-app-token', '56394fda551b1fed8caf54889b570088342253692a4e2d8ab6043f1dd8059e0d', '[\"*\"]', NULL, NULL, '2023-01-24 16:48:39', '2023-01-24 16:48:39'),
(179, 'App\\Models\\User', 34, 'my-app-token', '0b52d8535448904340905b251899daeb35e7016d20b621e7532b32cd1476bdac', '[\"*\"]', NULL, NULL, '2023-01-24 16:53:59', '2023-01-24 16:53:59'),
(180, 'App\\Models\\User', 39, 'my-app-token', '12ca44682b5cc278e0d45604c1e27a40e3bdb52b70d617eb7b503078d8bef960', '[\"*\"]', NULL, NULL, '2023-01-24 17:08:09', '2023-01-24 17:08:09'),
(181, 'App\\Models\\User', 99, 'my-app-token', '5f14fb958a9cb7713f782769a5df178f2762e0093f35e2fe90611b64030822de', '[\"*\"]', NULL, NULL, '2023-01-24 17:29:35', '2023-01-24 17:29:35'),
(182, 'App\\Models\\User', 34, 'my-app-token', '8a6556487012a28183ca80f22df2158f4627eff12410ade2b42aff481dd93a81', '[\"*\"]', NULL, NULL, '2023-01-24 17:42:21', '2023-01-24 17:42:21'),
(183, 'App\\Models\\User', 99, 'my-app-token', 'd1f9d66e5b58b07463c1c3098f7e95423950149adb5bda6fefece87dcdb36162', '[\"*\"]', NULL, NULL, '2023-01-24 17:45:07', '2023-01-24 17:45:07'),
(184, 'App\\Models\\User', 34, 'my-app-token', '46822b5af6a247e24e70dabcf1bb1779745bc9ef175b6f4709cd805571290b7d', '[\"*\"]', NULL, NULL, '2023-01-24 17:47:22', '2023-01-24 17:47:22'),
(185, 'App\\Models\\User', 99, 'my-app-token', '9697f27a4266ddd8671734307e3d58a4fb0cf10c7dc9de8ce0f46a68fffe128e', '[\"*\"]', NULL, NULL, '2023-01-24 17:49:29', '2023-01-24 17:49:29'),
(186, 'App\\Models\\User', 34, 'my-app-token', '02dfb2226c8c8516772bb0ce9927eaf92b1f1c914758897ef4cb21e294ffe796', '[\"*\"]', NULL, NULL, '2023-01-24 17:58:27', '2023-01-24 17:58:27'),
(187, 'App\\Models\\User', 39, 'my-app-token', '1c29ac537a469a363b40e66b62a409bd8cc2ef68cab04b302b23d5f728ae7d51', '[\"*\"]', NULL, NULL, '2023-01-24 17:59:02', '2023-01-24 17:59:02'),
(188, 'App\\Models\\User', 99, 'my-app-token', '992178b60a171f3057b35a2d226239a434039aa05e6aceae6ca9f7c29c23b45b', '[\"*\"]', NULL, NULL, '2023-01-24 18:00:42', '2023-01-24 18:00:42'),
(189, 'App\\Models\\User', 99, 'my-app-token', 'e6c93bde25a6b4434cecd5a5d0c0575a038d590186bc665c881873bf12dfde75', '[\"*\"]', NULL, NULL, '2023-01-24 18:25:04', '2023-01-24 18:25:04'),
(190, 'App\\Models\\User', 39, 'my-app-token', '79072894d16cdcd5ef411bf4b7d648c57bda1df5084255bc372467383946102d', '[\"*\"]', NULL, NULL, '2023-01-24 18:30:50', '2023-01-24 18:30:50'),
(191, 'App\\Models\\User', 34, 'my-app-token', '3b11edc074b9a1a195bf4156422c2b3c736ae0f5c0411321ec7a973840557e4c', '[\"*\"]', NULL, NULL, '2023-01-24 18:38:20', '2023-01-24 18:38:20'),
(192, 'App\\Models\\User', 87, 'my-app-token', '5beb9b1fc820f22c79c7b0636f2a731d49f63099e4d3e154aeaea8d9f11fc78b', '[\"*\"]', NULL, NULL, '2023-01-24 18:39:29', '2023-01-24 18:39:29'),
(193, 'App\\Models\\User', 37, 'my-app-token', 'e770caeaf758100072980309015dbc8b2d354e5b247ea567d91abe5e1981fe62', '[\"*\"]', NULL, NULL, '2023-01-24 18:44:31', '2023-01-24 18:44:31'),
(194, 'App\\Models\\User', 30, 'my-app-token', '44e91181a8b5cb806ecd35573f401d15ee8ba68e61d12695a73ba50296cd1664', '[\"*\"]', NULL, NULL, '2023-01-24 18:45:21', '2023-01-24 18:45:21'),
(195, 'App\\Models\\User', 99, 'my-app-token', 'a1fd08b8a80559b3f907030a3ba1a442ff5a51093b1aa1bffb5b3a07c1277512', '[\"*\"]', NULL, NULL, '2023-01-24 18:45:32', '2023-01-24 18:45:32'),
(196, 'App\\Models\\User', 104, 'my-app-token', '235c5c1eea673e690d420070944568dd924bf2ef283fac1e0c51f5f51819e629', '[\"*\"]', NULL, NULL, '2023-01-24 18:47:26', '2023-01-24 18:47:26'),
(197, 'App\\Models\\User', 39, 'my-app-token', '838de64923571ec2945289a80ceeefa61fe422a936e5d480c7bf5a6a45b779b8', '[\"*\"]', NULL, NULL, '2023-01-24 18:49:25', '2023-01-24 18:49:25'),
(198, 'App\\Models\\User', 3, 'my-app-token', '153d30b6d3da4c6824d72d6bf5aca1bef0b352b9cbdb7e6aa31e10d5bdd1dc22', '[\"*\"]', NULL, NULL, '2023-01-24 18:50:03', '2023-01-24 18:50:03'),
(199, 'App\\Models\\User', 34, 'my-app-token', 'f1b2aa9ed754f1012990848441d2b55a32589e8376591206e2aa86d25a7410d7', '[\"*\"]', NULL, NULL, '2023-01-24 18:54:31', '2023-01-24 18:54:31'),
(200, 'App\\Models\\User', 34, 'my-app-token', '6a5ddfaa88c5cd06e08337c0937e24ebb8e8b43eb118d168f14d52cfae323c5d', '[\"*\"]', NULL, NULL, '2023-01-24 18:54:31', '2023-01-24 18:54:31'),
(201, 'App\\Models\\User', 34, 'my-app-token', '8bcef9061c1b42ad1602ac98a7bc80505cbe37a848f6ebd1974f95aa2fa93b16', '[\"*\"]', NULL, NULL, '2023-01-24 18:57:06', '2023-01-24 18:57:06'),
(202, 'App\\Models\\User', 3, 'my-app-token', 'e4d63a1e9f1eaf64ed84b97a973de8ce146a8a15fcb9067bcca702660699380d', '[\"*\"]', NULL, NULL, '2023-01-24 19:07:00', '2023-01-24 19:07:00'),
(203, 'App\\Models\\User', 34, 'my-app-token', 'b343e33d44ebb613560805ce1143fae7ee94d9c7d1b111d77d94e62f33db56b7', '[\"*\"]', NULL, NULL, '2023-01-24 19:29:39', '2023-01-24 19:29:39'),
(204, 'App\\Models\\User', 3, 'my-app-token', '4aac1654e4a2d510ead5cd0e69abc81a9db3e24678223a54ddc7590adf11fe45', '[\"*\"]', NULL, NULL, '2023-01-24 19:30:20', '2023-01-24 19:30:20'),
(205, 'App\\Models\\User', 34, 'my-app-token', '17d095075269f890dd0af00858f9065ede2180502d6a311d66c8ad0caa580def', '[\"*\"]', NULL, NULL, '2023-01-24 19:30:52', '2023-01-24 19:30:52'),
(206, 'App\\Models\\User', 99, 'my-app-token', 'f41143d95b28db7a73f7f7958a3aea897877f41d9e9d239d5103e3fe0e005a3f', '[\"*\"]', NULL, NULL, '2023-01-24 21:05:42', '2023-01-24 21:05:42'),
(207, 'App\\Models\\User', 103, 'my-app-token', '838c99450d03822cc7e50c4b2f10cc5d355044166f34dd69dc1f8e6d7bc89574', '[\"*\"]', NULL, NULL, '2023-01-24 21:12:27', '2023-01-24 21:12:27'),
(208, 'App\\Models\\User', 39, 'my-app-token', 'e7dc5e119fdf35a1f37c4d4a0a8377a5f1d0535e8ec1bc37fba0d73d5d0a91fc', '[\"*\"]', NULL, NULL, '2023-01-24 21:28:03', '2023-01-24 21:28:03'),
(209, 'App\\Models\\User', 39, 'my-app-token', '505631aad5386a7a3018a7bc68a1e6e9f748e65c58d2fdb59131db4e2b97f148', '[\"*\"]', NULL, NULL, '2023-01-24 21:39:48', '2023-01-24 21:39:48'),
(210, 'App\\Models\\User', 105, 'my-app-token', '88075da109a15d1d2f0da7430e82efffa69aa7ed6761483ae4537619a940b2c2', '[\"*\"]', NULL, NULL, '2023-01-24 21:47:21', '2023-01-24 21:47:21'),
(211, 'App\\Models\\User', 105, 'my-app-token', 'c9673a49f28f44b5eaafd5e8cedc0cc96dc2520e58a20713b79b99b9ed17b84c', '[\"*\"]', NULL, NULL, '2023-01-24 21:53:34', '2023-01-24 21:53:34'),
(212, 'App\\Models\\User', 105, 'my-app-token', '7a176497701796977f7a0d9f8295051c772f285284e3f39ec9cba5e0eed75660', '[\"*\"]', NULL, NULL, '2023-01-24 21:53:58', '2023-01-24 21:53:58'),
(213, 'App\\Models\\User', 105, 'my-app-token', '2f1fbf3a077ad01f779fcae01120b8ac2e7861e13b3399f5f14b9422d7b27c7f', '[\"*\"]', NULL, NULL, '2023-01-24 21:54:20', '2023-01-24 21:54:20'),
(214, 'App\\Models\\User', 105, 'my-app-token', '6f829539c89a7c8c9a5f6d174bd4a39c5c6eaa75d4519294952c8b24a032535d', '[\"*\"]', NULL, NULL, '2023-01-24 22:35:00', '2023-01-24 22:35:00'),
(215, 'App\\Models\\User', 39, 'my-app-token', '1550967e57923a2bae91c0535e5fe4faecf07974cd839d1bc08d4c473f7943e3', '[\"*\"]', NULL, NULL, '2023-01-24 22:37:28', '2023-01-24 22:37:28'),
(216, 'App\\Models\\User', 106, 'my-app-token', 'bb5d7c9a88f6b12b04ac4c8109597ab4a1a328f44a210abf74165ad6c5d21fcc', '[\"*\"]', NULL, NULL, '2023-01-24 22:47:51', '2023-01-24 22:47:51'),
(217, 'App\\Models\\User', 3, 'my-app-token', 'ab9589a41bc516968c997248e89eeb489482ae523b28b55f08f2348ebc08b667', '[\"*\"]', NULL, NULL, '2023-01-24 23:04:50', '2023-01-24 23:04:50'),
(218, 'App\\Models\\User', 3, 'my-app-token', '8b37d421f38912144090a6b465544c354c7aaf80879301a5dbadedb7f38f1ec6', '[\"*\"]', NULL, NULL, '2023-01-24 23:05:02', '2023-01-24 23:05:02'),
(219, 'App\\Models\\User', 3, 'my-app-token', '051f5db6e5c42fc2e0c0c02daa6196fae301733afb6ade5200932615052a7076', '[\"*\"]', NULL, NULL, '2023-01-24 23:05:06', '2023-01-24 23:05:06'),
(220, 'App\\Models\\User', 106, 'my-app-token', 'fac91c58ecff751e020154f48aadb0504dc094bb8bc72ef6e4d44ba703e1e4ea', '[\"*\"]', NULL, NULL, '2023-01-24 23:05:08', '2023-01-24 23:05:08'),
(221, 'App\\Models\\User', 3, 'my-app-token', 'e359fe6ebe52241db1eef150a49c2684d7c046208d87f9fd33c9d538a28d4ca1', '[\"*\"]', NULL, NULL, '2023-01-24 23:05:12', '2023-01-24 23:05:12'),
(222, 'App\\Models\\User', 3, 'my-app-token', 'eed6baf25f2911a59436b33cc5523e3779307ffb41e5b7ab1b6e9475efd917ff', '[\"*\"]', NULL, NULL, '2023-01-24 23:05:16', '2023-01-24 23:05:16'),
(223, 'App\\Models\\User', 3, 'my-app-token', '3ac1521906e536032cf3a8458d480558248aa514d5bb5979fe98c27eaee821b4', '[\"*\"]', NULL, NULL, '2023-01-24 23:05:35', '2023-01-24 23:05:35'),
(224, 'App\\Models\\User', 106, 'my-app-token', 'e509194ad79dab1e511c4f5019a096e137c904f4d5da13b33982d9b4ee669c7e', '[\"*\"]', NULL, NULL, '2023-01-24 23:08:38', '2023-01-24 23:08:38'),
(225, 'App\\Models\\User', 106, 'my-app-token', '380b0318f1f536f72dea8cfb366a3f9d3b1382c378fdc68cdff9dc55f6ad691f', '[\"*\"]', NULL, NULL, '2023-01-24 23:12:03', '2023-01-24 23:12:03'),
(226, 'App\\Models\\User', 99, 'my-app-token', '3d120ef2ae132ac2fd6e192d469e30487a2b3900607deb518a4c111c78fb6b20', '[\"*\"]', NULL, NULL, '2023-01-24 23:20:25', '2023-01-24 23:20:25'),
(227, 'App\\Models\\User', 106, 'my-app-token', '8897f9faabdd1362ed27746e87261ea4c398ee16ebdd122eefd8ea270043b7f0', '[\"*\"]', NULL, NULL, '2023-01-24 23:23:06', '2023-01-24 23:23:06'),
(228, 'App\\Models\\User', 107, 'my-app-token', '4e16d1ef298e131f97a56fc8ce144716388f5d59d69e9688ebcf906e72ee12e8', '[\"*\"]', NULL, NULL, '2023-01-24 23:27:12', '2023-01-24 23:27:12'),
(229, 'App\\Models\\User', 34, 'my-app-token', 'f07a4a55ca01fe0e062b3ab65e23b2527d39b4a5b8770ffd31df94dbb38d5352', '[\"*\"]', NULL, NULL, '2023-01-25 07:21:27', '2023-01-25 07:21:27'),
(230, 'App\\Models\\User', 106, 'my-app-token', 'e235853dd2583c290bfb4fc8a32a6593079f28aa5cc99597a0ccd4351378dbe0', '[\"*\"]', NULL, NULL, '2023-01-25 09:44:53', '2023-01-25 09:44:53'),
(231, 'App\\Models\\User', 100, 'my-app-token', '7adde575bde5d347bfddfc5f8a84bfc113b4233aa705b2e34fa2a0a423a3e756', '[\"*\"]', NULL, NULL, '2023-01-25 10:23:46', '2023-01-25 10:23:46'),
(232, 'App\\Models\\User', 99, 'my-app-token', '8894aff656201eeccba843fb13eedd221b83b3e91512d80f2a9f0f87426123d4', '[\"*\"]', NULL, NULL, '2023-01-25 11:08:21', '2023-01-25 11:08:21'),
(233, 'App\\Models\\User', 100, 'my-app-token', '7e4895508c119f8fb8e68ac9f3844a7fd27a95a03c3fbeba963a866e4bf926c1', '[\"*\"]', NULL, NULL, '2023-01-25 11:15:57', '2023-01-25 11:15:57'),
(234, 'App\\Models\\User', 99, 'my-app-token', '79710b29bb91f1bb10decc21b1f19ecfa7f299e14543d223936534b9d6a931fc', '[\"*\"]', NULL, NULL, '2023-01-25 11:17:27', '2023-01-25 11:17:27'),
(235, 'App\\Models\\User', 39, 'my-app-token', '08259e19d3a1b99cfb0e089b7d8203819f82838fcfa2847484af16471186554c', '[\"*\"]', NULL, NULL, '2023-01-25 11:17:57', '2023-01-25 11:17:57'),
(236, 'App\\Models\\User', 99, 'my-app-token', 'ddc56492b142b222564ee34eb243cf578f0e7423aeaa6913361de272329f1c46', '[\"*\"]', NULL, NULL, '2023-01-25 11:23:05', '2023-01-25 11:23:05'),
(237, 'App\\Models\\User', 99, 'my-app-token', 'd857877dc414e71e0f8c6fbaf43dc3e495f742c76662ed5ba5cc4832eaa72e52', '[\"*\"]', NULL, NULL, '2023-01-25 11:47:43', '2023-01-25 11:47:43'),
(238, 'App\\Models\\User', 108, 'my-app-token', 'e3face99a161a7c8557bb82ee14faa8c913bbc081b986d90d41c5ce869759936', '[\"*\"]', NULL, NULL, '2023-01-25 12:06:43', '2023-01-25 12:06:43'),
(239, 'App\\Models\\User', 3, 'my-app-token', '84c94ec9f325a137f4546f3a34b4d24dbaeb034fee863dbc1a83777737dd7a10', '[\"*\"]', NULL, NULL, '2023-01-25 12:28:25', '2023-01-25 12:28:25'),
(240, 'App\\Models\\User', 107, 'my-app-token', '6ac6a9f4d0703cf7f72ab44a1b50e85c8a81cf604f6926975fd0855cc374b85e', '[\"*\"]', NULL, NULL, '2023-01-25 12:28:53', '2023-01-25 12:28:53'),
(241, 'App\\Models\\User', 99, 'my-app-token', '914124e759076209b8d3996de320dc9e704c929a1c432bdb91972ff9f5465f2c', '[\"*\"]', NULL, NULL, '2023-01-25 12:32:44', '2023-01-25 12:32:44'),
(242, 'App\\Models\\User', 99, 'my-app-token', '5f2aa5a4abb091fc4f453f2effc8c395c923a16f659616a7a39ed8f618e46f04', '[\"*\"]', NULL, NULL, '2023-01-25 12:33:36', '2023-01-25 12:33:36'),
(243, 'App\\Models\\User', 99, 'my-app-token', 'd2eb1801c6810587ab72e16b78740f90dceeae486ddb121148d99a9c18e44d95', '[\"*\"]', NULL, NULL, '2023-01-25 12:33:55', '2023-01-25 12:33:55'),
(244, 'App\\Models\\User', 110, 'my-app-token', 'ce4179ad853af634729a20ccc3cc8cfa6eca69e1a8f66b5180ae376349db9b6a', '[\"*\"]', NULL, NULL, '2023-01-25 15:00:31', '2023-01-25 15:00:31'),
(245, 'App\\Models\\User', 99, 'my-app-token', '8b54b43d3d756944d2cdf180ea6616bd3901bd528a6122bb1a7669e80d63c4af', '[\"*\"]', NULL, NULL, '2023-01-25 15:13:13', '2023-01-25 15:13:13'),
(246, 'App\\Models\\User', 3, 'my-app-token', 'e5a7a7296aa0cb5d316e86fa4170222098072f06ecd28e52382e4600d2b457ed', '[\"*\"]', NULL, NULL, '2023-01-25 15:15:19', '2023-01-25 15:15:19'),
(247, 'App\\Models\\User', 99, 'my-app-token', 'e03c7ac812ec6d6aba58c280c0e8f91a4c5fd09e492cb285b3d970d551430262', '[\"*\"]', NULL, NULL, '2023-01-25 15:16:28', '2023-01-25 15:16:28'),
(248, 'App\\Models\\User', 39, 'my-app-token', '7f7099e22640421675fda82c11ef04cec53af30f8541b9fb75b5dfbee84d06b3', '[\"*\"]', NULL, NULL, '2023-01-25 15:59:35', '2023-01-25 15:59:35'),
(249, 'App\\Models\\User', 99, 'my-app-token', 'ba9a7737daa83ca4e2b3630ea88a5ac1d66566a328f1ba2ed1dc685c16a35403', '[\"*\"]', NULL, NULL, '2023-01-25 16:02:02', '2023-01-25 16:02:02'),
(250, 'App\\Models\\User', 3, 'my-app-token', '08ee6e76152e025d93d038eb369f4a54c0769fbcdae18e3917b22ca3203e1a5e', '[\"*\"]', NULL, NULL, '2023-01-25 16:26:22', '2023-01-25 16:26:22'),
(251, 'App\\Models\\User', 99, 'my-app-token', 'a430f9eff4c498bb98e7770602976b0e3d9911447fe899397fab5f960c1dd91d', '[\"*\"]', NULL, NULL, '2023-01-25 16:48:35', '2023-01-25 16:48:35'),
(252, 'App\\Models\\User', 99, 'my-app-token', '61f3c253a6b5e70c6b4c3bf845e2d657c4b3c21a67a58532ff65c78031d4ca54', '[\"*\"]', NULL, NULL, '2023-01-25 17:01:36', '2023-01-25 17:01:36'),
(253, 'App\\Models\\User', 99, 'my-app-token', 'a69a385190607367ebc89b1f643d0a70d4ca68d396784e9b3fa53a0de5a79245', '[\"*\"]', NULL, NULL, '2023-01-25 18:21:13', '2023-01-25 18:21:13'),
(254, 'App\\Models\\User', 111, 'my-app-token', '6abeb0d3171c75d231d0f0fd71f7d7b9d10380bd3860286302e5c596aa45b2b2', '[\"*\"]', NULL, NULL, '2023-01-25 18:34:30', '2023-01-25 18:34:30'),
(255, 'App\\Models\\User', 99, 'my-app-token', 'fc2cd88b490768c5e1f587b3725d925d34c3659a6437a9d280d5acc4f2fbd44c', '[\"*\"]', NULL, NULL, '2023-01-25 18:35:41', '2023-01-25 18:35:41'),
(256, 'App\\Models\\User', 112, 'my-app-token', 'accbaa32eacaae0eac70cc9863a6337fc55d49071ea9621484af7a84f4370f73', '[\"*\"]', NULL, NULL, '2023-01-25 19:14:27', '2023-01-25 19:14:27'),
(257, 'App\\Models\\User', 107, 'my-app-token', 'c9f1d2fa5e0028c99702750e916ec7c77315dcae4d31e10a8c1844173d540711', '[\"*\"]', NULL, NULL, '2023-01-25 19:40:33', '2023-01-25 19:40:33'),
(258, 'App\\Models\\User', 99, 'my-app-token', 'e6ceeae1aa2b9bf0a5cd0d3172eb309c453750f213ae401d3925321e9bd80aa8', '[\"*\"]', NULL, NULL, '2023-01-25 19:42:01', '2023-01-25 19:42:01'),
(259, 'App\\Models\\User', 113, 'my-app-token', '823cab68f0dfc89ae8b37c55e66b97468098ae40c3511b7885d8728b8682ad1d', '[\"*\"]', NULL, NULL, '2023-01-25 19:56:58', '2023-01-25 19:56:58'),
(260, 'App\\Models\\User', 34, 'my-app-token', 'cbba4d81c3036cef1fd8fe254e4a7232e266cff84942077924f413b0071dcca4', '[\"*\"]', NULL, NULL, '2023-01-25 20:09:05', '2023-01-25 20:09:05'),
(261, 'App\\Models\\User', 114, 'my-app-token', '8fac5c13651a43a9a55fca1f6634d70a18764f7ddb8eb85ae44365ede2a89c67', '[\"*\"]', NULL, NULL, '2023-01-25 20:13:27', '2023-01-25 20:13:27'),
(262, 'App\\Models\\User', 109, 'my-app-token', '299c89c70cbd4b8299d9595fd66a34e8f711009a39cfdc9919856118ab8f1e7f', '[\"*\"]', NULL, NULL, '2023-01-25 20:15:39', '2023-01-25 20:15:39'),
(263, 'App\\Models\\User', 115, 'my-app-token', 'da7b92d7aa9ea4f371d4ac77efcba0efef3ba75759a5e400b5b76ae6c7914398', '[\"*\"]', NULL, NULL, '2023-01-25 20:21:47', '2023-01-25 20:21:47'),
(264, 'App\\Models\\User', 115, 'my-app-token', '97968282a5c7dc5c7891e9b60eab50f8f0c26f4897f6ac7c62b90e2a07d0bf57', '[\"*\"]', NULL, NULL, '2023-01-25 20:34:43', '2023-01-25 20:34:43'),
(265, 'App\\Models\\User', 115, 'my-app-token', 'cf995753727ebd4f742eb541991af7121b72dd43251a74c3499690a60a7d2a90', '[\"*\"]', NULL, NULL, '2023-01-25 20:37:11', '2023-01-25 20:37:11'),
(266, 'App\\Models\\User', 115, 'my-app-token', '8f78c8c351fb31a89aaa27317d975690063b6d61b62f60d506842477adcda05a', '[\"*\"]', NULL, NULL, '2023-01-25 20:39:29', '2023-01-25 20:39:29'),
(267, 'App\\Models\\User', 116, 'my-app-token', '60c7cf59909a6f21c36768b2bf2c7e63ca0947f2ed044acace4d235287295225', '[\"*\"]', NULL, NULL, '2023-01-25 23:55:41', '2023-01-25 23:55:41'),
(268, 'App\\Models\\User', 117, 'my-app-token', 'ca726a76940f0115a8d37287eb6c1ff2093a30524d5e38cedefef1d0217b36ad', '[\"*\"]', NULL, NULL, '2023-01-26 00:30:50', '2023-01-26 00:30:50'),
(269, 'App\\Models\\User', 118, 'my-app-token', '9981f4d74d61e1c45cf1bcebfab22cd995f7df2ec5ad6de970fd31275109da70', '[\"*\"]', NULL, NULL, '2023-01-26 08:55:23', '2023-01-26 08:55:23'),
(270, 'App\\Models\\User', 119, 'my-app-token', 'e485ea04708552ccbce73475ac51f7f5dc7abb2fb4276adf0f529ebdd10497e1', '[\"*\"]', NULL, NULL, '2023-01-26 11:01:57', '2023-01-26 11:01:57'),
(271, 'App\\Models\\User', 99, 'my-app-token', 'd62cb92e593a2208747125f9f0ebcb4bfdcfb5fa7c3a5ed8b1d0fbb8b2e42934', '[\"*\"]', NULL, NULL, '2023-01-26 11:10:14', '2023-01-26 11:10:14'),
(272, 'App\\Models\\User', 111, 'my-app-token', 'a50b884c73f3db3c6fe84c055041faf42472ce10b8059848f8d0116d5e9a5fa6', '[\"*\"]', NULL, NULL, '2023-01-26 11:19:18', '2023-01-26 11:19:18'),
(273, 'App\\Models\\User', 120, 'my-app-token', 'dd7cff451f90ea81ba21210ccca74845d1a98294c8cd306909604000a114eacf', '[\"*\"]', NULL, NULL, '2023-01-26 12:05:55', '2023-01-26 12:05:55');
INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(274, 'App\\Models\\User', 121, 'my-app-token', 'bfbc3fba9e34173d60250d41e79e4eb49bf079f788ccd2ffb52af4601bd70446', '[\"*\"]', NULL, NULL, '2023-01-26 12:21:44', '2023-01-26 12:21:44'),
(275, 'App\\Models\\User', 3, 'my-app-token', '0bac0456dea5dc0d5716a0444c9862c834c115e84d494b09dfdaf9bb12e248c6', '[\"*\"]', NULL, NULL, '2023-01-26 13:29:03', '2023-01-26 13:29:03'),
(276, 'App\\Models\\User', 99, 'my-app-token', 'a871d27905706ef8e960523c68b9af826910e58ad49f928b975f0e8b6ec56578', '[\"*\"]', NULL, NULL, '2023-01-26 15:14:53', '2023-01-26 15:14:53'),
(277, 'App\\Models\\User', 122, 'my-app-token', 'e615293c0bd34caa9876b982ef8131c27df6c1afb8877ab1bed3f674d1e158c7', '[\"*\"]', NULL, NULL, '2023-01-26 16:16:37', '2023-01-26 16:16:37'),
(278, 'App\\Models\\User', 99, 'my-app-token', '5c7288ee06003a6778c09feb7345f3d4fbcc3eed43ecce0cdc227e21407c6e88', '[\"*\"]', NULL, NULL, '2023-01-26 16:58:02', '2023-01-26 16:58:02'),
(279, 'App\\Models\\User', 123, 'my-app-token', 'aae9af23c480dfdea17d90cd23dfe8424b6445f31f23f352282641b6bb67952e', '[\"*\"]', NULL, NULL, '2023-01-26 17:30:31', '2023-01-26 17:30:31'),
(280, 'App\\Models\\User', 99, 'my-app-token', '08509b2bdf12ebfa93183f6dbbcda1999e35abebba8b81627c512d03a9f4b21b', '[\"*\"]', NULL, NULL, '2023-01-26 18:26:29', '2023-01-26 18:26:29'),
(281, 'App\\Models\\User', 114, 'my-app-token', 'bdc4e55ba9864defcce87397aa09597e1b83705c475d70b4d62f8ba255111d26', '[\"*\"]', NULL, NULL, '2023-01-26 21:07:13', '2023-01-26 21:07:13'),
(282, 'App\\Models\\User', 99, 'my-app-token', '7d969f46c99dcee22858587fb7f6e715ecf57d0cd392a7aab21356661ba24c69', '[\"*\"]', NULL, NULL, '2023-01-27 11:36:09', '2023-01-27 11:36:09'),
(283, 'App\\Models\\User', 42, 'my-app-token', 'c3d015e0fce7feebbbd0e779e2983257655771c44800db606017ca59b2ac8e20', '[\"*\"]', NULL, NULL, '2023-01-27 13:00:40', '2023-01-27 13:00:40'),
(284, 'App\\Models\\User', 124, 'my-app-token', '7670e4defa909183a3fc63d3f5359822b778b1c0130c956bb01120c49982b43a', '[\"*\"]', NULL, NULL, '2023-01-27 14:25:01', '2023-01-27 14:25:01'),
(285, 'App\\Models\\User', 99, 'my-app-token', '43c72488aa6f65ab199b8e76c69bf884d227eec4fded9d028b7ddecda9d36c16', '[\"*\"]', NULL, NULL, '2023-01-27 15:16:46', '2023-01-27 15:16:46'),
(286, 'App\\Models\\User', 125, 'my-app-token', '897e7a27fa89ed9b43699c6ba6224153c639b6d244e9c61974e4026befd8a9da', '[\"*\"]', NULL, NULL, '2023-01-27 15:49:48', '2023-01-27 15:49:48'),
(287, 'App\\Models\\User', 3, 'my-app-token', '9dc45a9f8f66a156772766f74ecaffe48c1162ba045ee3596c67c3be2d9bdbd2', '[\"*\"]', NULL, NULL, '2023-01-27 16:17:44', '2023-01-27 16:17:44'),
(288, 'App\\Models\\User', 3, 'my-app-token', 'c0375abaa484fb75e984d7067a2654c6378ad5066f5798360e55bb41e01c28d5', '[\"*\"]', NULL, NULL, '2023-01-27 16:19:10', '2023-01-27 16:19:10'),
(289, 'App\\Models\\User', 3, 'my-app-token', 'cde96c56e20ac7919ccac98087c5992bc6c28d0a4b53f720dc28c9c1d0745417', '[\"*\"]', NULL, NULL, '2023-01-27 16:20:22', '2023-01-27 16:20:22'),
(290, 'App\\Models\\User', 99, 'my-app-token', '5c07d970e7b621c44ecab829971c6edf6b5232cdf224a6a0e91372267b8f5b72', '[\"*\"]', NULL, NULL, '2023-01-27 16:46:44', '2023-01-27 16:46:44'),
(291, 'App\\Models\\User', 126, 'my-app-token', '301910c972618291d0e4fdc5206139092e90b352a0c9ea68916a9b7a8afec9e0', '[\"*\"]', NULL, NULL, '2023-01-27 18:20:32', '2023-01-27 18:20:32'),
(292, 'App\\Models\\User', 127, 'my-app-token', 'd3f34221238b7a925d40f28fef835ee735ee2485cda2822b9676e4ff5cd1d9ed', '[\"*\"]', NULL, NULL, '2023-01-27 18:22:25', '2023-01-27 18:22:25'),
(293, 'App\\Models\\User', 34, 'my-app-token', 'cd863f8c42a6bd27a50672f1bfd83a09e7dd13635b4f115a437397e5f1a70e88', '[\"*\"]', NULL, NULL, '2023-01-27 18:33:45', '2023-01-27 18:33:45'),
(294, 'App\\Models\\User', 128, 'my-app-token', 'bd888f70980c191903daabb7a00bb53b81e230b479472703007ceec9802fdc54', '[\"*\"]', NULL, NULL, '2023-01-27 19:30:19', '2023-01-27 19:30:19'),
(295, 'App\\Models\\User', 99, 'my-app-token', '8c923e11e75efdc8f8df5b7325de59ff328adbc9a32c01924e07ac7622af6b3d', '[\"*\"]', NULL, NULL, '2023-01-28 13:08:52', '2023-01-28 13:08:52'),
(296, 'App\\Models\\User', 99, 'my-app-token', '19c00e5205b81f392fb50edbedf02e1a19783b3dc345b6d3476fede471cbdccd', '[\"*\"]', NULL, NULL, '2023-01-28 14:49:07', '2023-01-28 14:49:07'),
(297, 'App\\Models\\User', 125, 'my-app-token', '3374fab8f77a8dce9be314fbec188ad3a742066f6f66c50ce869eeeb866e5d1d', '[\"*\"]', NULL, NULL, '2023-01-28 15:44:54', '2023-01-28 15:44:54'),
(298, 'App\\Models\\User', 99, 'my-app-token', '105ad11623b4236446be0a6ef895bcdec42c512217a27e3e39c57013618635a7', '[\"*\"]', NULL, NULL, '2023-01-28 15:46:17', '2023-01-28 15:46:17'),
(299, 'App\\Models\\User', 99, 'my-app-token', '2871ae8ef0e8c0d05af6b2a5d329c96e03899143cda9817e4170894eb99875bc', '[\"*\"]', NULL, NULL, '2023-01-28 19:10:05', '2023-01-28 19:10:05'),
(300, 'App\\Models\\User', 99, 'my-app-token', '3ada35de76e1374c9789c845bd302fb1b34234d8f3c1f1939c60a026fdae70b7', '[\"*\"]', NULL, NULL, '2023-01-28 20:47:55', '2023-01-28 20:47:55'),
(301, 'App\\Models\\User', 99, 'my-app-token', 'ac0bf41330727f86af37df7951aa80628060e7f3196166d911396ce78dbb860c', '[\"*\"]', NULL, NULL, '2023-01-28 21:11:53', '2023-01-28 21:11:53'),
(302, 'App\\Models\\User', 34, 'my-app-token', '88908cc92ace1f3fd00685d7c43b29033f34e4d9ad082d19600c9fe7fae2ecf0', '[\"*\"]', NULL, NULL, '2023-01-29 00:14:09', '2023-01-29 00:14:09'),
(303, 'App\\Models\\User', 129, 'my-app-token', '3ac932f756928fddd02b98f62c1255fe5ce28ce3b63de50805bf0dc901c72154', '[\"*\"]', NULL, NULL, '2023-01-29 01:02:53', '2023-01-29 01:02:53'),
(304, 'App\\Models\\User', 39, 'my-app-token', 'e1ac0010d0df1c96a1560101089943cf66bb1a5e1ca8ea80322345aa7ff0f0b3', '[\"*\"]', NULL, NULL, '2023-01-29 01:51:23', '2023-01-29 01:51:23'),
(305, 'App\\Models\\User', 34, 'my-app-token', '929a2360b6cc91e5776df86726f60af6ee14e86a35012f5f2b835166021b0b1d', '[\"*\"]', NULL, NULL, '2023-01-29 07:52:02', '2023-01-29 07:52:02'),
(306, 'App\\Models\\User', 39, 'my-app-token', 'e3a356524e75157768615c517e647253d23e547399b86cd2b6892068b4058157', '[\"*\"]', NULL, NULL, '2023-01-29 08:08:39', '2023-01-29 08:08:39'),
(307, 'App\\Models\\User', 114, 'my-app-token', '8c93a8186a20dffa311fd10f468f0fbe4929b50763ce9e217ad9eb672993538a', '[\"*\"]', NULL, NULL, '2023-01-29 08:38:20', '2023-01-29 08:38:20'),
(308, 'App\\Models\\User', 37, 'my-app-token', 'effea36f5d3eba5d42dd0f5dd5b2def7cacc7e2f9b69314d4b79f8301aef61e2', '[\"*\"]', NULL, NULL, '2023-01-29 08:47:36', '2023-01-29 08:47:36'),
(309, 'App\\Models\\User', 130, 'my-app-token', '91178bc83638de85fc29165659b527d57aba47851a904223e086d4d8671eb547', '[\"*\"]', NULL, NULL, '2023-01-29 09:08:15', '2023-01-29 09:08:15'),
(310, 'App\\Models\\User', 130, 'my-app-token', '4478523ee2d4c21ab7211b57fee5c21f8fbb3183322fc1333f4604f6c0fa44a9', '[\"*\"]', NULL, NULL, '2023-01-29 09:16:12', '2023-01-29 09:16:12'),
(311, 'App\\Models\\User', 39, 'my-app-token', '18ca71540748638425c8a4850a0c29f7074bad6a4ec260b1576fc528795fac8f', '[\"*\"]', NULL, NULL, '2023-01-29 12:23:26', '2023-01-29 12:23:26'),
(312, 'App\\Models\\User', 131, 'my-app-token', '527cdb452c12dc086c3e7047f8d76d3b767e75201b32be8c64c20b90caf1b888', '[\"*\"]', NULL, NULL, '2023-01-29 12:30:36', '2023-01-29 12:30:36'),
(313, 'App\\Models\\User', 132, 'my-app-token', 'a00034371731b07d24823f09af6d007b53b038e0b9657f9b388b355ca1a24383', '[\"*\"]', NULL, NULL, '2023-01-29 18:36:47', '2023-01-29 18:36:47'),
(314, 'App\\Models\\User', 37, 'my-app-token', 'bf122b139502af902362beb6219fd45c1251ad511ac1ad290886ed671e098d9b', '[\"*\"]', NULL, NULL, '2023-01-29 23:49:22', '2023-01-29 23:49:22'),
(315, 'App\\Models\\User', 37, 'my-app-token', '7e10f0718a5dfa888669d951f19d482718e61092d693ece4619bcc192df2483e', '[\"*\"]', NULL, NULL, '2023-01-29 23:51:12', '2023-01-29 23:51:12'),
(316, 'App\\Models\\User', 34, 'my-app-token', 'a940963dae3d4b3170e7c577eabd1283ae74368d1907f2634de4e9877825fcae', '[\"*\"]', NULL, NULL, '2023-01-29 23:53:26', '2023-01-29 23:53:26'),
(317, 'App\\Models\\User', 99, 'my-app-token', '4391bed059b8ae1bc14ede538cfd6d4cba511e8ce7e7b84d8ea1cfeb5cd37116', '[\"*\"]', NULL, NULL, '2023-01-30 00:17:44', '2023-01-30 00:17:44'),
(318, 'App\\Models\\User', 37, 'my-app-token', 'dfda041ea6b451f048bea17566071ba7262a9a2d5a20730782b0817d2772e55b', '[\"*\"]', NULL, NULL, '2023-01-30 00:52:04', '2023-01-30 00:52:04'),
(319, 'App\\Models\\User', 125, 'my-app-token', '32a8e317bb1b3dfbdf97358adc3e2d9d0dfea36483d0728bc636a62b49c0e036', '[\"*\"]', NULL, NULL, '2023-01-30 04:33:21', '2023-01-30 04:33:21'),
(320, 'App\\Models\\User', 99, 'my-app-token', '3a08a4413a3713a6d4829ce67d3ed5131c4017f4d26db0b51703d85b5ca0f164', '[\"*\"]', NULL, NULL, '2023-01-30 07:42:52', '2023-01-30 07:42:52'),
(321, 'App\\Models\\User', 34, 'my-app-token', '3e1d427933996475aa9db461ffb5839a849ea0195ec4741dfacc8c637f907c30', '[\"*\"]', NULL, NULL, '2023-01-30 07:43:54', '2023-01-30 07:43:54'),
(322, 'App\\Models\\User', 99, 'my-app-token', 'c3d13a0add9a18f008915f1126e60fcedbb9178a04c18cf5dc8e00a8ff12b9d8', '[\"*\"]', NULL, NULL, '2023-01-30 08:00:27', '2023-01-30 08:00:27'),
(323, 'App\\Models\\User', 133, 'my-app-token', 'd674d86a6f7e238133b02a79d84d0ffb4dd63e4b7587dc758904ff615ac30c90', '[\"*\"]', NULL, NULL, '2023-01-30 08:34:25', '2023-01-30 08:34:25'),
(324, 'App\\Models\\User', 99, 'my-app-token', 'be7d0edb86dcc6a59975fd9d9d71f1e95fa0e3ec94accdf1f360e1df65252b09', '[\"*\"]', NULL, NULL, '2023-01-31 01:44:24', '2023-01-31 01:44:24'),
(325, 'App\\Models\\User', 99, 'my-app-token', '71568229569204c2d6eedb3b1020a755a128871ea8580da474ab5fdf88e84d77', '[\"*\"]', NULL, NULL, '2023-01-31 04:12:28', '2023-01-31 04:12:28'),
(326, 'App\\Models\\User', 99, 'my-app-token', 'b969b9bae731be4fe4835debf73f1cdf14a1eef2b1dd9d8724cd951cec8dcac0', '[\"*\"]', NULL, NULL, '2023-01-31 05:58:32', '2023-01-31 05:58:32'),
(327, 'App\\Models\\User', 134, 'my-app-token', '482301ee7e60869a258cf798dd7830cd7e126da2c6cfb59c1da561832c66fe54', '[\"*\"]', NULL, NULL, '2023-01-31 06:49:54', '2023-01-31 06:49:54'),
(328, 'App\\Models\\User', 3, 'my-app-token', '1fe77be73386e36151e8350f9d2479d6b9dc1f8bdffd87914fdbb0687f34435a', '[\"*\"]', NULL, NULL, '2023-01-31 06:51:05', '2023-01-31 06:51:05'),
(329, 'App\\Models\\User', 125, 'my-app-token', 'bb563928994e8ffa3bfd2413955b35d73deda3ad1fb6e9abd552f112b42499cc', '[\"*\"]', NULL, NULL, '2023-01-31 07:32:17', '2023-01-31 07:32:17'),
(330, 'App\\Models\\User', 135, 'my-app-token', '5dc8f8672bfb1582049477f7b285946e06b38637e242ff0665652531bb3f157f', '[\"*\"]', NULL, NULL, '2023-01-31 07:42:12', '2023-01-31 07:42:12'),
(331, 'App\\Models\\User', 99, 'my-app-token', 'd795bbd0238156e84da18cf4a6c40a87c494e8eaa1e12ca8cf89345bc985ff7e', '[\"*\"]', NULL, NULL, '2023-01-31 07:54:37', '2023-01-31 07:54:37'),
(332, 'App\\Models\\User', 99, 'my-app-token', '6425695d7de226a581fddbbd93946c0937e07e8d29fb6d7b95a1b0e754428b08', '[\"*\"]', NULL, NULL, '2023-01-31 08:03:31', '2023-01-31 08:03:31'),
(333, 'App\\Models\\User', 136, 'my-app-token', 'dbb6848f9afb3f837755961443cf692a2d3d020958cb26582b4243505827bee8', '[\"*\"]', NULL, NULL, '2023-01-31 08:06:16', '2023-01-31 08:06:16'),
(334, 'App\\Models\\User', 137, 'my-app-token', 'f6a7044f3085cf46bbba043b2e6ba2f49e8a978c7f933256b1169c9e0743e2d6', '[\"*\"]', NULL, NULL, '2023-01-31 08:44:39', '2023-01-31 08:44:39'),
(335, 'App\\Models\\User', 99, 'my-app-token', 'd965af6477f1c7a95598de8686d6bf30ef99689ab02c088366847ed57fbbac95', '[\"*\"]', NULL, NULL, '2023-01-31 09:04:52', '2023-01-31 09:04:52'),
(336, 'App\\Models\\User', 138, 'my-app-token', 'c0d489f21dd597e8edcf17c40854735df85ef335df8273f575283c289a9fb998', '[\"*\"]', NULL, NULL, '2023-01-31 09:23:37', '2023-01-31 09:23:37'),
(337, 'App\\Models\\User', 34, 'my-app-token', 'b8ddd901c8eb8c79d39b3286a74678f5deffc9adb4a4b7ab152ec596dc4bdba4', '[\"*\"]', NULL, NULL, '2023-01-31 09:49:55', '2023-01-31 09:49:55'),
(338, 'App\\Models\\User', 3, 'my-app-token', 'f3d5d6654484504104d96c39167a14997d89170acf5e6520bc31b181713e7841', '[\"*\"]', NULL, NULL, '2023-01-31 10:17:07', '2023-01-31 10:17:07'),
(339, 'App\\Models\\User', 139, 'my-app-token', '5127d8d9ff3b9ccd1326045a310aed9c275f6e0f54560fb690fce85129f43f71', '[\"*\"]', NULL, NULL, '2023-01-31 10:33:35', '2023-01-31 10:33:35'),
(340, 'App\\Models\\User', 140, 'my-app-token', '03d77431447410ea9fcb674c43d55e62a86072752573129886d88a98da40895c', '[\"*\"]', NULL, NULL, '2023-01-31 10:38:33', '2023-01-31 10:38:33'),
(341, 'App\\Models\\User', 141, 'my-app-token', '0283d811a239e4e4472b501a447c550af58eb86b5f510757bbe064470ab55bb2', '[\"*\"]', NULL, NULL, '2023-01-31 11:14:49', '2023-01-31 11:14:49'),
(342, 'App\\Models\\User', 142, 'my-app-token', 'e72553c861c46faa2dfa91d142fc730e633fbe76f69bd273722c88e32ad1087b', '[\"*\"]', NULL, NULL, '2023-01-31 11:15:52', '2023-01-31 11:15:52'),
(343, 'App\\Models\\User', 143, 'my-app-token', '2f23703d8f1a122e60558621e4af12087a5ecf92c700fb79ee68795b50b9f297', '[\"*\"]', NULL, NULL, '2023-01-31 11:18:12', '2023-01-31 11:18:12'),
(344, 'App\\Models\\User', 125, 'my-app-token', '37abf47047cd16e23e76e31efdae0439f6477a31f6382131f4657772b7ee1b83', '[\"*\"]', NULL, NULL, '2023-01-31 12:36:47', '2023-01-31 12:36:47'),
(345, 'App\\Models\\User', 99, 'my-app-token', '9eccb1bc3273cfb4ee568f6baa0980bc70f692a2c7f7727f2613a557ac983d32', '[\"*\"]', NULL, NULL, '2023-01-31 12:40:04', '2023-01-31 12:40:04'),
(346, 'App\\Models\\User', 144, 'my-app-token', 'f5ac73f75e969ea1d0394764d9cf00b83ba482ff25488717bc830f2b24e0f4f1', '[\"*\"]', NULL, NULL, '2023-01-31 23:40:17', '2023-01-31 23:40:17'),
(347, 'App\\Models\\User', 99, 'my-app-token', '41be83ea478db13b47f5650f6a3beb81e9c68977ceedaf3ab8dfa33f96b34f9f', '[\"*\"]', NULL, NULL, '2023-02-01 00:12:06', '2023-02-01 00:12:06'),
(348, 'App\\Models\\User', 99, 'my-app-token', 'f05e85f489bf4e36e907da3e914836fd2a3a1993b2910c4ba49b446bc0a78dcd', '[\"*\"]', NULL, NULL, '2023-02-01 01:32:47', '2023-02-01 01:32:47'),
(349, 'App\\Models\\User', 99, 'my-app-token', 'c871e6d4a8807041d4219a8a1536ba65dff42c7383b23b1f4f9f86bd843d7097', '[\"*\"]', NULL, NULL, '2023-02-01 01:57:10', '2023-02-01 01:57:10'),
(350, 'App\\Models\\User', 145, 'my-app-token', 'c070219b3f593c00c0d8cef509be2c5fd77f6d51ee7de0cf8ad6ed1192ef0dc9', '[\"*\"]', NULL, NULL, '2023-02-01 04:17:30', '2023-02-01 04:17:30'),
(351, 'App\\Models\\User', 87, 'my-app-token', 'aca01a33070a73ad59158df4154f1e19f7d65176be7f56a14fc66f8cce9ced86', '[\"*\"]', NULL, NULL, '2023-02-01 05:04:20', '2023-02-01 05:04:20'),
(352, 'App\\Models\\User', 99, 'my-app-token', '7be3235c1bb74f1ff52e0ee098fec34b043ea796be4537f1b5288c68eabc0bbd', '[\"*\"]', NULL, NULL, '2023-02-01 05:13:33', '2023-02-01 05:13:33'),
(353, 'App\\Models\\User', 99, 'my-app-token', '8190050960f6ac4273d5de06d8a597535d02409265fd46656bda7a1ef4e0bc56', '[\"*\"]', NULL, NULL, '2023-02-01 05:45:38', '2023-02-01 05:45:38'),
(354, 'App\\Models\\User', 99, 'my-app-token', '33a7e5f149f8b7741f8c0162a6fea75cbbd85cca6b7ea67084a417468397a9c5', '[\"*\"]', NULL, NULL, '2023-02-01 06:40:48', '2023-02-01 06:40:48'),
(355, 'App\\Models\\User', 146, 'my-app-token', 'fe4616093d2d9d58499767893f73d8dd7ab341ea203070b1aa3d52305fd9b751', '[\"*\"]', NULL, NULL, '2023-02-01 07:30:37', '2023-02-01 07:30:37'),
(356, 'App\\Models\\User', 147, 'my-app-token', '8ec214a448ca0236b53e33220425a8138509adbd8380f60de256dafbc81e9427', '[\"*\"]', NULL, NULL, '2023-02-01 07:32:34', '2023-02-01 07:32:34'),
(357, 'App\\Models\\User', 148, 'my-app-token', '8a7b0c50539cc54f93a1b6d53e55121d84399a0cb3fbd064edb59123400a4756', '[\"*\"]', NULL, NULL, '2023-02-01 07:34:01', '2023-02-01 07:34:01'),
(358, 'App\\Models\\User', 149, 'my-app-token', 'c29145508d797db3fe36723654f7c65316e407acb50c2b806345d56e97af41b2', '[\"*\"]', NULL, NULL, '2023-02-01 07:35:22', '2023-02-01 07:35:22'),
(359, 'App\\Models\\User', 150, 'my-app-token', 'd7c2956b6348501b3024f2712ead9c405e26939e8026098509edebdd84b13ce6', '[\"*\"]', NULL, NULL, '2023-02-01 07:39:44', '2023-02-01 07:39:44'),
(360, 'App\\Models\\User', 99, 'my-app-token', '6aab211fce379e5c27fdc98e44b31410278851b0848c2226b0bfc2790bcae35d', '[\"*\"]', NULL, NULL, '2023-02-01 07:43:25', '2023-02-01 07:43:25'),
(361, 'App\\Models\\User', 151, 'my-app-token', '5b122abf25931df39392ee5b83a5661d972df984910471a29f012fd9fd999e60', '[\"*\"]', NULL, NULL, '2023-02-01 23:40:39', '2023-02-01 23:40:39'),
(362, 'App\\Models\\User', 152, 'my-app-token', '6fac10bb4640568da1aba03b3f47cfdf62945743d67ea4b2ba3c516b9db9d6b4', '[\"*\"]', NULL, NULL, '2023-02-02 00:16:25', '2023-02-02 00:16:25'),
(363, 'App\\Models\\User', 37, 'my-app-token', '88af37fe98a0f95121ab95422116a95e768690534ae4dfe2427436827a678812', '[\"*\"]', NULL, NULL, '2023-02-02 00:21:57', '2023-02-02 00:21:57'),
(364, 'App\\Models\\User', 3, 'my-app-token', '7f13242c55ded18e5979f4250ef3f21aab3f2b9e0e465dc071dbc779721444f8', '[\"*\"]', NULL, NULL, '2023-02-02 00:33:41', '2023-02-02 00:33:41'),
(365, 'App\\Models\\User', 99, 'my-app-token', '4dcc585ae22c50ef22626d8050d50e583c8679ea69cdff0276f0580546f96977', '[\"*\"]', NULL, NULL, '2023-02-02 00:34:16', '2023-02-02 00:34:16'),
(366, 'App\\Models\\User', 153, 'my-app-token', 'fa23e7cf589f39c4d5d9a8d07390e6a50e330c68811f9bfcf8318394a5e8a0ac', '[\"*\"]', NULL, NULL, '2023-02-02 01:02:40', '2023-02-02 01:02:40'),
(367, 'App\\Models\\User', 99, 'my-app-token', 'f4be8e9297d1481efa10b068f61a0b26fab1c1aec90af3c977efcb21c52b873a', '[\"*\"]', NULL, NULL, '2023-02-02 01:05:39', '2023-02-02 01:05:39'),
(368, 'App\\Models\\User', 154, 'my-app-token', 'c944d86cb86c819c8e9b0bd2b2d93e821002bb23431eebf5acc2d8af1c4209f4', '[\"*\"]', NULL, NULL, '2023-02-02 01:08:24', '2023-02-02 01:08:24'),
(369, 'App\\Models\\User', 107, 'my-app-token', 'cadeaa7bc636bd7018dd7c0efcad67cb0ecbb1709cfc9fda5c29706670565cf9', '[\"*\"]', NULL, NULL, '2023-02-02 01:17:56', '2023-02-02 01:17:56'),
(370, 'App\\Models\\User', 107, 'my-app-token', 'ae728496b7d6fa0773b5de6e41dc89c69a8626fb8f9801de6784c55f206c3d67', '[\"*\"]', NULL, NULL, '2023-02-02 01:24:14', '2023-02-02 01:24:14'),
(371, 'App\\Models\\User', 155, 'my-app-token', '1448461b54895d3e4102ee5591c71cb50546ebd7f1f5ff1abd07fc7d98787ad2', '[\"*\"]', NULL, NULL, '2023-02-02 01:33:26', '2023-02-02 01:33:26'),
(372, 'App\\Models\\User', 155, 'my-app-token', '19172249ad70fd0480401eb6bb45b43a67533fbb9df6062957a0f6397b7d6507', '[\"*\"]', NULL, NULL, '2023-02-02 01:48:40', '2023-02-02 01:48:40'),
(373, 'App\\Models\\User', 107, 'my-app-token', 'e27bde0bfeadb29bf7b552e746e40365b1dd2148538896d852d662fa916bf087', '[\"*\"]', NULL, NULL, '2023-02-02 01:56:33', '2023-02-02 01:56:33'),
(374, 'App\\Models\\User', 107, 'my-app-token', 'e340000a77a9a7b6b31b6f78d5dfaff886c78d9dbc08b9ddcda346abf3b7c5d9', '[\"*\"]', NULL, NULL, '2023-02-02 01:59:03', '2023-02-02 01:59:03'),
(375, 'App\\Models\\User', 99, 'my-app-token', '4370e8a5f936fdbf1500131bc77493b7d93aabc6eb6dc3e3b89ada1ca94fb013', '[\"*\"]', NULL, NULL, '2023-02-02 02:04:55', '2023-02-02 02:04:55'),
(376, 'App\\Models\\User', 156, 'my-app-token', 'a81e2f9c75a0fe2e3c93e75fdf224f4888bfed655c37606a80eaa06b3bf90b42', '[\"*\"]', NULL, NULL, '2023-02-02 03:14:54', '2023-02-02 03:14:54'),
(377, 'App\\Models\\User', 157, 'my-app-token', 'd211223a18b26baf767bc6016f92f8116a7ee383deda5663f7fb689d69122459', '[\"*\"]', NULL, NULL, '2023-02-02 03:18:02', '2023-02-02 03:18:02'),
(378, 'App\\Models\\User', 156, 'my-app-token', '4e3118f8500b4e1d3b9ffa072044918d00ba778621befc6eb3f4f86af3937fd7', '[\"*\"]', NULL, NULL, '2023-02-02 03:29:11', '2023-02-02 03:29:11'),
(379, 'App\\Models\\User', 107, 'my-app-token', 'e69d026cfeb75c21310498a6f2838dace04df2f3b8182d11b60d0980e799b167', '[\"*\"]', NULL, NULL, '2023-02-02 03:32:25', '2023-02-02 03:32:25'),
(380, 'App\\Models\\User', 156, 'my-app-token', '027058bed9c38d4d899323f53cead1e44152dbe94c896306e8a94983d1617794', '[\"*\"]', NULL, NULL, '2023-02-02 03:37:32', '2023-02-02 03:37:32'),
(381, 'App\\Models\\User', 107, 'my-app-token', '6cd185a8c5f1961bbe860704351b1bd89e0b0cb5ae6d6692d59a658775a7602f', '[\"*\"]', NULL, NULL, '2023-02-02 03:55:45', '2023-02-02 03:55:45'),
(382, 'App\\Models\\User', 99, 'my-app-token', 'e74e72c6f9d09174d4dcdd75ec48a4c9a2d47e21aa9a5ee244a29ab6a693bf97', '[\"*\"]', NULL, NULL, '2023-02-02 04:05:22', '2023-02-02 04:05:22'),
(383, 'App\\Models\\User', 158, 'my-app-token', '9ebb1159b12a08f98ccb73fb5d3f4e2b68317ef7dd6b823fe8c04b29cb23d386', '[\"*\"]', NULL, NULL, '2023-02-02 04:10:11', '2023-02-02 04:10:11'),
(384, 'App\\Models\\User', 3, 'my-app-token', '8a4ac427e3e9123200a17d4a43de3b1768d5bbdb9f1843a0bd405e2581cdc761', '[\"*\"]', NULL, NULL, '2023-02-02 04:14:25', '2023-02-02 04:14:25'),
(385, 'App\\Models\\User', 159, 'my-app-token', 'fae8f0b351ce9be87f295e962b23e790a98d6d465ebd569e08b110d861481b20', '[\"*\"]', NULL, NULL, '2023-02-02 04:43:29', '2023-02-02 04:43:29'),
(386, 'App\\Models\\User', 3, 'my-app-token', 'ed25a6c11e1021573e4818ee29e969c6ec5143140c243e68203076b44015ebc5', '[\"*\"]', NULL, NULL, '2023-02-02 05:27:26', '2023-02-02 05:27:26'),
(387, 'App\\Models\\User', 125, 'my-app-token', '7ddf44e2c24d6a3559f9f778bf313a0303137973c2c1ca07870d10d1ac08cdcd', '[\"*\"]', NULL, NULL, '2023-02-02 06:09:40', '2023-02-02 06:09:40'),
(388, 'App\\Models\\User', 99, 'my-app-token', 'b151b4c7d0343f5b62db5715fcc140a13ef50934871d51d722b75007dab70c92', '[\"*\"]', NULL, NULL, '2023-02-02 06:11:04', '2023-02-02 06:11:04'),
(389, 'App\\Models\\User', 163, 'my-app-token', 'd446a633d825cadff4b4af941be0b0aa3398fbe500d468644e78ef7e99917297', '[\"*\"]', NULL, NULL, '2023-02-02 06:19:23', '2023-02-02 06:19:23'),
(390, 'App\\Models\\User', 164, 'my-app-token', '186649b3277f619d7c383c2e8a1ecae1e94285d435bb562a84817ba57d929b27', '[\"*\"]', NULL, NULL, '2023-02-02 06:23:50', '2023-02-02 06:23:50'),
(391, 'App\\Models\\User', 99, 'my-app-token', 'b0034f00ea263598ee8bf5b845fb25bf4fbd5eca327f3c931514b9b657d0f5a2', '[\"*\"]', NULL, NULL, '2023-02-02 06:26:05', '2023-02-02 06:26:05'),
(392, 'App\\Models\\User', 99, 'my-app-token', '46e031c025f52ac23164a3374bbbb741887e4d330d30253edbde0976672614fc', '[\"*\"]', NULL, NULL, '2023-02-02 06:47:08', '2023-02-02 06:47:08'),
(393, 'App\\Models\\User', 99, 'my-app-token', '48eb635897758ee7d0831028a0a689ac00439dd29c7c1a3e45001de827d36db4', '[\"*\"]', NULL, NULL, '2023-02-02 07:10:22', '2023-02-02 07:10:22'),
(394, 'App\\Models\\User', 34, 'my-app-token', 'b489286a5733fc6911416dec2b4400eca3043e69b121ed7b03be62b719e8c716', '[\"*\"]', NULL, NULL, '2023-02-02 07:18:28', '2023-02-02 07:18:28'),
(395, 'App\\Models\\User', 99, 'my-app-token', '23d3a93e671a128f91730e2f7f4187aa1c8d775107b08f81af5bb2aefedc0bc0', '[\"*\"]', NULL, NULL, '2023-02-02 07:33:01', '2023-02-02 07:33:01'),
(396, 'App\\Models\\User', 163, 'my-app-token', 'dff86dc1b641108e906f43ec65956dcf073e31a672f089b7de3dad0ec3779523', '[\"*\"]', NULL, NULL, '2023-02-02 07:39:21', '2023-02-02 07:39:21'),
(397, 'App\\Models\\User', 164, 'my-app-token', '832094adedbf6e7ed98cdf51e114e897d446b4d539f827455a8bb31272a0911b', '[\"*\"]', NULL, NULL, '2023-02-02 07:42:06', '2023-02-02 07:42:06'),
(398, 'App\\Models\\User', 163, 'my-app-token', '08331ae7f3befe102248932a78f4d9874c2f1263e2f7fc28a0f34d964ea67a3e', '[\"*\"]', NULL, NULL, '2023-02-02 07:42:47', '2023-02-02 07:42:47'),
(399, 'App\\Models\\User', 34, 'my-app-token', '59c89a8fb0ab109996361ab9a3150b08e91e5faa6364b3dd44d77978029643e5', '[\"*\"]', NULL, NULL, '2023-02-02 07:44:10', '2023-02-02 07:44:10'),
(400, 'App\\Models\\User', 164, 'my-app-token', '151facc75f1d922786d5b8409cbf7f41bf3716218b7e8915417be67c803cfe2e', '[\"*\"]', NULL, NULL, '2023-02-02 07:45:19', '2023-02-02 07:45:19'),
(401, 'App\\Models\\User', 34, 'my-app-token', '48b97a03ea9283851ae8af74c516dea8c694367538fac2586ae1756a3f9518dd', '[\"*\"]', NULL, NULL, '2023-02-02 07:46:50', '2023-02-02 07:46:50'),
(402, 'App\\Models\\User', 34, 'my-app-token', '7d1182e5f69e907158f75e08255cf1b220fcb9f05a3e951cde3706230f6d1455', '[\"*\"]', NULL, NULL, '2023-02-02 07:48:06', '2023-02-02 07:48:06'),
(403, 'App\\Models\\User', 34, 'my-app-token', '70e0c4af738faffbc11ec1de3187d8afd2ecfed19bf13cfceabf3bea420bdc6c', '[\"*\"]', NULL, NULL, '2023-02-02 07:54:10', '2023-02-02 07:54:10'),
(404, 'App\\Models\\User', 165, 'my-app-token', '1ddb6fc10373b9de0c67fb88500dd94376701398e9e6c61466a90ad2a90f01f9', '[\"*\"]', NULL, NULL, '2023-02-02 09:07:04', '2023-02-02 09:07:04'),
(405, 'App\\Models\\User', 99, 'my-app-token', '134cc6ff4f02abe4ad84fb58e5c6c96b198c00d9323349a03ef7db52c77b967c', '[\"*\"]', NULL, NULL, '2023-02-02 09:20:25', '2023-02-02 09:20:25'),
(406, 'App\\Models\\User', 125, 'my-app-token', '1d16cbe3b468cd94608f2ab795538721a5ed496e8e969ba6e16729ffaef42cd5', '[\"*\"]', NULL, NULL, '2023-02-02 09:42:38', '2023-02-02 09:42:38'),
(407, 'App\\Models\\User', 166, 'my-app-token', '258cf22e8e488e4bee75806a88f79fae30324e75ccb1d5d0e0cb7c20f4d6429f', '[\"*\"]', NULL, NULL, '2023-02-02 11:28:23', '2023-02-02 11:28:23'),
(408, 'App\\Models\\User', 167, 'my-app-token', 'bd5029ba7d51a433576342e54e327e257f8906e38839b07d2afe8de78b7862be', '[\"*\"]', NULL, NULL, '2023-02-02 15:14:47', '2023-02-02 15:14:47'),
(409, 'App\\Models\\User', 99, 'my-app-token', 'ed4a6b6852faf03a9a0867414ae402419670ce7a1f61d32cb06af940ec88501c', '[\"*\"]', NULL, NULL, '2023-02-02 23:36:49', '2023-02-02 23:36:49'),
(410, 'App\\Models\\User', 99, 'my-app-token', '85876c1190a59d2ed5c761ea4edd1ca47f051eebf3cdef4ebc072ec4dbc204b8', '[\"*\"]', NULL, NULL, '2023-02-03 00:16:28', '2023-02-03 00:16:28'),
(411, 'App\\Models\\User', 107, 'my-app-token', '49cc7a31c2181ccb833fe5e78d9142dfbdd428adfca3f79857d63f6116b9106d', '[\"*\"]', NULL, NULL, '2023-02-03 00:40:48', '2023-02-03 00:40:48'),
(412, 'App\\Models\\User', 99, 'my-app-token', '4d59c2c875a0207a8cda4c17a58b26998d96a23d4382401a4a65ba618b77c10b', '[\"*\"]', NULL, NULL, '2023-02-03 07:29:23', '2023-02-03 07:29:23'),
(413, 'App\\Models\\User', 99, 'my-app-token', '6514e325ef26bc34b8714b505a779e0a1b5e1ded83a5ebb959defa3f2aefb037', '[\"*\"]', NULL, NULL, '2023-02-04 00:47:23', '2023-02-04 00:47:23'),
(414, 'App\\Models\\User', 168, 'my-app-token', '981130c830295713084f3dec3697a2725ec941026f793696b30d8733ba04199f', '[\"*\"]', NULL, NULL, '2023-02-04 01:48:33', '2023-02-04 01:48:33'),
(415, 'App\\Models\\User', 169, 'my-app-token', '694c0ff2f5519c02143881a991e78323309df959b6af7c5ced7c788bdca44b1b', '[\"*\"]', NULL, NULL, '2023-02-04 01:56:50', '2023-02-04 01:56:50'),
(416, 'App\\Models\\User', 170, 'my-app-token', 'c6c581d1b366035e7cb6fd88f064aabe8264901d11391f2d760ef5e35c7da4d4', '[\"*\"]', NULL, NULL, '2023-02-04 02:34:51', '2023-02-04 02:34:51'),
(417, 'App\\Models\\User', 171, 'my-app-token', '71fba473b906dcc7d82be335289aea8c6a87f1edc861781baa772fea1d5ff759', '[\"*\"]', NULL, NULL, '2023-02-04 20:03:39', '2023-02-04 20:03:39'),
(418, 'App\\Models\\User', 172, 'my-app-token', '57a915530e525c581613adfa466fdb0012a08fa79ba2226d76680cf364f934fa', '[\"*\"]', NULL, NULL, '2023-02-05 02:09:29', '2023-02-05 02:09:29'),
(419, 'App\\Models\\User', 173, 'my-app-token', '31f48e389081c4e53cb0ebc102a7a194900dd04ee89399b25c6f290b2b1054f3', '[\"*\"]', NULL, NULL, '2023-02-05 02:53:11', '2023-02-05 02:53:11'),
(420, 'App\\Models\\User', 99, 'my-app-token', '2a456b0a1e045b617555453a94c7055006c01fcf804bd38c4856e10d1488ad93', '[\"*\"]', NULL, NULL, '2023-02-05 03:06:56', '2023-02-05 03:06:56'),
(421, 'App\\Models\\User', 174, 'my-app-token', 'a41300c43349e2b7ad76133880b1897bfed88d7a0d4d36e240d3c32fb300cd29', '[\"*\"]', NULL, NULL, '2023-02-05 13:24:18', '2023-02-05 13:24:18'),
(422, 'App\\Models\\User', 175, 'my-app-token', 'b49bfd2d6b3b699f8d4dac89ac51d4a34cdf241410c4ac29dce4f05a888f3f8a', '[\"*\"]', NULL, NULL, '2023-02-05 19:08:15', '2023-02-05 19:08:15'),
(423, 'App\\Models\\User', 163, 'my-app-token', 'f69b90a307aa43f52d132ac6eea3aeb96e0c205dfd0a970533fdf60bacb96fc1', '[\"*\"]', NULL, NULL, '2023-02-06 00:15:40', '2023-02-06 00:15:40'),
(424, 'App\\Models\\User', 99, 'my-app-token', 'ca6826645f2af2c78480bf9654c46a95044f7d1923920b095978ebc22a613253', '[\"*\"]', NULL, NULL, '2023-02-06 01:04:14', '2023-02-06 01:04:14'),
(425, 'App\\Models\\User', 176, 'my-app-token', 'f2254491b7258f88a44f7c16bb845dad6d0be042d1bd53ed3a9f18388708cc27', '[\"*\"]', NULL, NULL, '2023-02-06 02:33:09', '2023-02-06 02:33:09'),
(426, 'App\\Models\\User', 177, 'my-app-token', 'd09b4500089ba6cc73b0d0dccbb686fce29bddff66ad47fbd1f348d018853553', '[\"*\"]', NULL, NULL, '2023-02-06 03:11:51', '2023-02-06 03:11:51'),
(427, 'App\\Models\\User', 99, 'my-app-token', '542d26154eb4d21ad80c9d7e10256118d2fdb97ba0e66082eb2cf104817cd3ce', '[\"*\"]', NULL, NULL, '2023-02-06 03:30:26', '2023-02-06 03:30:26'),
(428, 'App\\Models\\User', 99, 'my-app-token', 'ef861f28505d8ad6f8ac5c949256422d445bfb7d5690cf15c33e4046984e6669', '[\"*\"]', NULL, NULL, '2023-02-06 03:35:38', '2023-02-06 03:35:38'),
(429, 'App\\Models\\User', 34, 'my-app-token', '8a65eac644cde98cd3ca3ca138173f7fc56f5629892297002d95897c5085cbbb', '[\"*\"]', NULL, NULL, '2023-02-06 06:34:48', '2023-02-06 06:34:48'),
(430, 'App\\Models\\User', 34, 'my-app-token', '3d4dbfdb75a06571e610dc5d1411b8d1e9a3bd2ef1881e83658d234d26bf0ceb', '[\"*\"]', NULL, NULL, '2023-02-06 06:49:56', '2023-02-06 06:49:56'),
(431, 'App\\Models\\User', 99, 'my-app-token', 'd623f9751e623d4dfa2a7108053d77da3e85e5f19ae81cd3d4fb9a954a6fd7d3', '[\"*\"]', NULL, NULL, '2023-02-06 07:33:59', '2023-02-06 07:33:59'),
(432, 'App\\Models\\User', 99, 'my-app-token', '6cb498e34931d7fb4ed98e5b2961964c7bb207cea712f89efa64d926455df6b9', '[\"*\"]', NULL, NULL, '2023-02-06 11:33:43', '2023-02-06 11:33:43'),
(433, 'App\\Models\\User', 178, 'my-app-token', '5a1ebd299583482a5e7727c0f9867867a84107edd7c3a6a22e1c007857531ad8', '[\"*\"]', NULL, NULL, '2023-02-07 01:14:05', '2023-02-07 01:14:05'),
(434, 'App\\Models\\User', 163, 'my-app-token', '2219e68a753d91242d0a3400d58babb510aa623de8c7a62fb9c1add1b1f385a6', '[\"*\"]', NULL, NULL, '2023-02-07 03:11:33', '2023-02-07 03:11:33'),
(435, 'App\\Models\\User', 179, 'my-app-token', '69050f3adaccc3871759be54b03e66764e1e4ca274f20b5effd0e0683602270f', '[\"*\"]', NULL, NULL, '2023-02-07 03:13:05', '2023-02-07 03:13:05'),
(436, 'App\\Models\\User', 155, 'my-app-token', 'ec5296856495bab72fecb1ce3344cf0e9f8bd620143d0b899cd073f2632842b0', '[\"*\"]', NULL, NULL, '2023-02-07 04:59:25', '2023-02-07 04:59:25'),
(437, 'App\\Models\\User', 99, 'my-app-token', 'bb272289e72e909bd460a8c41ac666a5464543d4e21d98e2f049f01dc08d0273', '[\"*\"]', NULL, NULL, '2023-02-07 05:01:23', '2023-02-07 05:01:23'),
(438, 'App\\Models\\User', 180, 'my-app-token', '478dc4395a701dc8b64efa8877346e6afa9f67fde51fd258d5502a4dcd8f4fda', '[\"*\"]', NULL, NULL, '2023-02-07 05:38:36', '2023-02-07 05:38:36'),
(439, 'App\\Models\\User', 181, 'my-app-token', '609aca73dd302909ec5ff18a9883389c12fe7adcba3c6dba522a98ca131f41b1', '[\"*\"]', NULL, NULL, '2023-02-07 05:53:27', '2023-02-07 05:53:27'),
(440, 'App\\Models\\User', 182, 'my-app-token', '26e0cf903962c000d8b42bc20df610f8d530516382d86ea94aba845c92909e58', '[\"*\"]', NULL, NULL, '2023-02-07 06:16:59', '2023-02-07 06:16:59'),
(441, 'App\\Models\\User', 183, 'my-app-token', '816e618af70daee92ee7941cb73f566e6a048b92d51e7ab546b3fc0a53d19f70', '[\"*\"]', NULL, NULL, '2023-02-07 06:46:54', '2023-02-07 06:46:54'),
(442, 'App\\Models\\User', 99, 'my-app-token', '21f1f5052728099859323cab11ec6c98f3ed0b09885c7507faccd865fc67d67c', '[\"*\"]', NULL, NULL, '2023-02-07 06:57:44', '2023-02-07 06:57:44'),
(443, 'App\\Models\\User', 184, 'my-app-token', 'ad28426b7911abff17222622f77d57cc3f58155f2c16c57b5763fe2d75abefc1', '[\"*\"]', NULL, NULL, '2023-02-07 07:32:08', '2023-02-07 07:32:08'),
(444, 'App\\Models\\User', 99, 'my-app-token', 'dd5403f8fc0e15b51e00e7bca926a938aea6b1c779d11840fb3f37fdeba2babe', '[\"*\"]', NULL, NULL, '2023-02-07 07:42:14', '2023-02-07 07:42:14'),
(445, 'App\\Models\\User', 99, 'my-app-token', 'a321582e6ce957f661be21e24e0133d75ae141cf37597b516bfc7ed17e5961a0', '[\"*\"]', NULL, NULL, '2023-02-07 07:57:47', '2023-02-07 07:57:47'),
(446, 'App\\Models\\User', 34, 'my-app-token', 'e4b6edf1151ba3b8019d43c680062c60ada89497c7ac15ddddd2acdebd86e63d', '[\"*\"]', NULL, NULL, '2023-02-07 08:58:32', '2023-02-07 08:58:32'),
(447, 'App\\Models\\User', 185, 'my-app-token', 'bb35ed2e8c23c48667c662cb9e6b086089db6011e2750a802a289296273a4c9c', '[\"*\"]', NULL, NULL, '2023-02-07 14:20:03', '2023-02-07 14:20:03'),
(448, 'App\\Models\\User', 186, 'my-app-token', '26f4726dcc222481cd1d7aaa2b79dbeb87b54e03657ddd36d807a4f10ec09c5d', '[\"*\"]', NULL, NULL, '2023-02-07 14:28:28', '2023-02-07 14:28:28'),
(449, 'App\\Models\\User', 187, 'my-app-token', '99564f32f38788e27fff3828b6aea4100f1b49aba2736fd60afba660364263c1', '[\"*\"]', NULL, NULL, '2023-02-07 15:48:24', '2023-02-07 15:48:24'),
(450, 'App\\Models\\User', 188, 'my-app-token', '90edb2976abdb337a3f6427a4092c52672d8fe52e97bee32a071fb03e0a81206', '[\"*\"]', NULL, NULL, '2023-02-07 23:02:56', '2023-02-07 23:02:56'),
(451, 'App\\Models\\User', 99, 'my-app-token', '4c367f1562fb9b8cc0ecf60fad285102bc37259ff41605c485e2d24628e9bb9f', '[\"*\"]', NULL, NULL, '2023-02-08 00:05:51', '2023-02-08 00:05:51'),
(452, 'App\\Models\\User', 99, 'my-app-token', '670f3bfc69f1194256dd8f931620e14c3f79b00d628a669fed6e287a2d0cbf15', '[\"*\"]', NULL, NULL, '2023-02-08 01:29:17', '2023-02-08 01:29:17'),
(453, 'App\\Models\\User', 99, 'my-app-token', '7b380178be18121c443bdd8f29ef35e50e8af4baf9589824048e63e9085fd205', '[\"*\"]', NULL, NULL, '2023-02-08 03:20:30', '2023-02-08 03:20:30'),
(454, 'App\\Models\\User', 99, 'my-app-token', '6cf34a4ba249db27c34d97c5ab37fb0c60c4995df1baff5bb395972d3fed74f8', '[\"*\"]', NULL, NULL, '2023-02-08 04:37:37', '2023-02-08 04:37:37'),
(455, 'App\\Models\\User', 99, 'my-app-token', '14b2943fc14f096f7257d2f654548f6841b5364896b364b86f7d768492fe2450', '[\"*\"]', NULL, NULL, '2023-02-08 05:10:26', '2023-02-08 05:10:26'),
(456, 'App\\Models\\User', 34, 'my-app-token', 'f824da3d49b1a2b4b77cb67d31f4819d0e23fd902f002827208634cc632749a2', '[\"*\"]', NULL, NULL, '2023-02-08 05:10:43', '2023-02-08 05:10:43'),
(457, 'App\\Models\\User', 3, 'my-app-token', '3e05e38cc199be599b6c9b42f61e48ab2453df10c9456344311589e8140aa7b3', '[\"*\"]', NULL, NULL, '2023-02-08 05:14:13', '2023-02-08 05:14:13'),
(458, 'App\\Models\\User', 3, 'my-app-token', 'b9dd49c566e64301bc2fe2b0bbf5f99a95dc3f2e95b8105dceef9b15e316e6ce', '[\"*\"]', NULL, NULL, '2023-02-08 05:31:53', '2023-02-08 05:31:53'),
(459, 'App\\Models\\User', 3, 'my-app-token', '900ded649505b417fff2e12f9adcffc1d1214d6ff7c2793d594b7d06ff100dbf', '[\"*\"]', NULL, NULL, '2023-02-08 06:19:58', '2023-02-08 06:19:58'),
(460, 'App\\Models\\User', 3, 'my-app-token', '65abf2a96daec704a0ce3bc6c87e33ed8a477ff394d54c0a38ea786edc36f02f', '[\"*\"]', NULL, NULL, '2023-02-08 06:40:31', '2023-02-08 06:40:31'),
(461, 'App\\Models\\User', 3, 'my-app-token', '0fcb4ed6e222cbeb2fb6f1499cb6514a091809a08512672b998e316e12a68b6e', '[\"*\"]', NULL, NULL, '2023-02-08 06:53:26', '2023-02-08 06:53:26'),
(462, 'App\\Models\\User', 99, 'my-app-token', 'f53665ba149fef861ac770cdba82eb1fc9dde30c50e00cf4c193eebf773d4542', '[\"*\"]', NULL, NULL, '2023-02-08 06:58:39', '2023-02-08 06:58:39'),
(463, 'App\\Models\\User', 3, 'my-app-token', 'ebdf412c2627d1f68464ebb8c373de28c3551fcae69b25456f3505933167c2b0', '[\"*\"]', NULL, NULL, '2023-02-08 07:22:46', '2023-02-08 07:22:46'),
(464, 'App\\Models\\User', 99, 'my-app-token', '861b11dba99d3781212243628f384a971f5299f9845b960eb5224b2e7fd43edf', '[\"*\"]', NULL, NULL, '2023-02-08 07:47:10', '2023-02-08 07:47:10'),
(465, 'App\\Models\\User', 99, 'my-app-token', 'ecdbd134eddcafd80c4208f271b8372d8b7cf4131a5c7c1447124bc17152c6e1', '[\"*\"]', NULL, NULL, '2023-02-08 07:56:20', '2023-02-08 07:56:20'),
(466, 'App\\Models\\User', 99, 'my-app-token', 'dd059eb1190c424d7ccbf60dccf59be5a01b9a910295c4791f68911c8a245400', '[\"*\"]', NULL, NULL, '2023-02-08 08:08:53', '2023-02-08 08:08:53'),
(467, 'App\\Models\\User', 34, 'my-app-token', 'ca730f1fcaf3e54017714b32ea578ed09e0fd422e085d61718d173f87671dd48', '[\"*\"]', NULL, NULL, '2023-02-08 08:13:24', '2023-02-08 08:13:24'),
(468, 'App\\Models\\User', 107, 'my-app-token', 'fd6d643719530c41d43ecbe712f00f42c07b8f70a3b4758d1bc7b82e1496facf', '[\"*\"]', NULL, NULL, '2023-02-08 08:15:07', '2023-02-08 08:15:07'),
(469, 'App\\Models\\User', 3, 'my-app-token', 'f12010545f3a5b2dd36e9f6714bb161de293d87232040074dcd9cfeb798ee0a3', '[\"*\"]', NULL, NULL, '2023-02-08 23:57:59', '2023-02-08 23:57:59'),
(470, 'App\\Models\\User', 3, 'my-app-token', '4ddc854a0d14e7cbd2b7b43a51ec21574800d6033b2dd496a7c43c5c4ab3bac8', '[\"*\"]', NULL, NULL, '2023-02-09 00:14:41', '2023-02-09 00:14:41'),
(471, 'App\\Models\\User', 99, 'my-app-token', '1fb055c9fee2e5aa883d00d56f1732020d996336d2c71ffe5f316cafbbfcff23', '[\"*\"]', NULL, NULL, '2023-02-09 00:52:08', '2023-02-09 00:52:08'),
(472, 'App\\Models\\User', 178, 'my-app-token', '77450d109d936c506167e3b4f82cbb89d35a5804884b0088cb737642c8420d5a', '[\"*\"]', NULL, NULL, '2023-02-09 01:45:11', '2023-02-09 01:45:11'),
(473, 'App\\Models\\User', 99, 'my-app-token', 'a0fe86223651c35dde648ae7ed2ef24231c4bd39510eff3d0b7a018dc274e1c0', '[\"*\"]', NULL, NULL, '2023-02-09 01:58:31', '2023-02-09 01:58:31'),
(474, 'App\\Models\\User', 99, 'my-app-token', 'd0488cdbc3e7d250363181f6e44fee7a714cf94ad501e66fb89f61435d9313cd', '[\"*\"]', NULL, NULL, '2023-02-09 03:44:46', '2023-02-09 03:44:46'),
(475, 'App\\Models\\User', 99, 'my-app-token', 'c4fcd09e6e9682f014717df3411ed264d6f4562658df87bfaa3b1cf677282e11', '[\"*\"]', NULL, NULL, '2023-02-09 04:36:23', '2023-02-09 04:36:23'),
(476, 'App\\Models\\User', 99, 'my-app-token', '662bd1b613bcc3bb2acd9a2f5aef8c18a1f4b04035c1f806ba27b0388509841b', '[\"*\"]', NULL, NULL, '2023-02-09 04:52:58', '2023-02-09 04:52:58'),
(477, 'App\\Models\\User', 125, 'my-app-token', 'fe91d3159aef4612d0f22b09ab5a1c818975cad3a7d2c06c384fd795b2d8df46', '[\"*\"]', NULL, NULL, '2023-02-09 05:05:30', '2023-02-09 05:05:30'),
(478, 'App\\Models\\User', 189, 'my-app-token', '0e460ffac821a9b31436b935b15b7ab665430f29440b6b7a3b4e930989168c71', '[\"*\"]', NULL, NULL, '2023-02-09 05:06:39', '2023-02-09 05:06:39'),
(479, 'App\\Models\\User', 3, 'my-app-token', '94b491ebb3b5e282e358c4d19e89fa53307981196a64a184052bf80859733caf', '[\"*\"]', NULL, NULL, '2023-02-09 05:07:47', '2023-02-09 05:07:47'),
(480, 'App\\Models\\User', 189, 'my-app-token', '2205109d2d95d5e901faa6079e8c28e4b4bd956b1558df75e331138b3b657696', '[\"*\"]', NULL, NULL, '2023-02-09 05:09:15', '2023-02-09 05:09:15'),
(481, 'App\\Models\\User', 3, 'my-app-token', '494cfd9ef11c7cb134b4d02d66f7c2d8af4dd7cb8de07769a0609fed0e7daa55', '[\"*\"]', NULL, NULL, '2023-02-09 05:10:37', '2023-02-09 05:10:37'),
(482, 'App\\Models\\User', 34, 'my-app-token', 'b77e378ea7cb33d20ee7aded6bf24f973e5d087c61fe4d49596e2ba2501582d6', '[\"*\"]', NULL, NULL, '2023-02-09 05:21:36', '2023-02-09 05:21:36'),
(483, 'App\\Models\\User', 3, 'my-app-token', 'eafd7790f6adcdfcf01a4992d1db75b8d3a4822419b7ade9e24256e8d4a3dc68', '[\"*\"]', NULL, NULL, '2023-02-09 05:25:43', '2023-02-09 05:25:43'),
(484, 'App\\Models\\User', 107, 'my-app-token', 'f7208ea321e4cef5e7a822a92bc2296fd99baf786194bb671c309902df033ed7', '[\"*\"]', NULL, NULL, '2023-02-09 06:04:36', '2023-02-09 06:04:36'),
(485, 'App\\Models\\User', 34, 'my-app-token', '418b32d7b8f58280754f91be61f72431d88bd828a2c06fcd8dd074cfc81fd1f1', '[\"*\"]', NULL, NULL, '2023-02-09 06:08:30', '2023-02-09 06:08:30'),
(486, 'App\\Models\\User', 107, 'my-app-token', 'b1a041cac26bc0f933f574dbc1fcd850715e5eee199c63a0537a983b4ac6fcf6', '[\"*\"]', NULL, NULL, '2023-02-09 06:12:04', '2023-02-09 06:12:04'),
(487, 'App\\Models\\User', 189, 'my-app-token', 'daf007b0416ba67d2650358c5dad18dcbb7d0fe6b3c3f792260751ac776b9747', '[\"*\"]', NULL, NULL, '2023-02-09 06:19:50', '2023-02-09 06:19:50'),
(488, 'App\\Models\\User', 99, 'my-app-token', 'e221d289965a1d36378ecc3905d01fe67b872fe843b8139b3470774ac4996c62', '[\"*\"]', NULL, NULL, '2023-02-09 06:20:33', '2023-02-09 06:20:33'),
(489, 'App\\Models\\User', 34, 'my-app-token', '150fd229adaf90454a078396b3236f2bdebc1577ccb357c6eb694aa075a254c9', '[\"*\"]', NULL, NULL, '2023-02-09 11:02:53', '2023-02-09 11:02:53'),
(490, 'App\\Models\\User', 39, 'my-app-token', 'cc81019f1f6cd398354fd3fb6c0704c88b8dd922d537948a08515593353f9879', '[\"*\"]', NULL, NULL, '2023-02-09 12:41:46', '2023-02-09 12:41:46'),
(491, 'App\\Models\\User', 99, 'my-app-token', '9f0899b32b1865e6747052eb568e9b9efdcf990687db8aee3027ee73bfea15e2', '[\"*\"]', NULL, NULL, '2023-02-09 20:47:59', '2023-02-09 20:47:59'),
(492, 'App\\Models\\User', 179, 'my-app-token', 'e0212301fb7ddac47c7c71e0b9efb47e4f7c64280f55a171dea48cbc76a146a8', '[\"*\"]', NULL, NULL, '2023-02-10 02:38:05', '2023-02-10 02:38:05'),
(493, 'App\\Models\\User', 190, 'my-app-token', '12371d30e003ea0b740d959b74d864515849decaa96e2e2a24f5eebe9017e5ac', '[\"*\"]', NULL, NULL, '2023-02-10 03:24:55', '2023-02-10 03:24:55'),
(494, 'App\\Models\\User', 190, 'my-app-token', 'a486deb5326ed14d6ae2ca4ca7949946d948dab108a0d0917c72bd4b3e3e582c', '[\"*\"]', NULL, NULL, '2023-02-10 03:32:43', '2023-02-10 03:32:43'),
(495, 'App\\Models\\User', 190, 'my-app-token', '8cf7f871e94f6976510e1c965aa6f07a2d0d39e8b49d41d124e42c7cb777cdba', '[\"*\"]', NULL, NULL, '2023-02-10 03:34:04', '2023-02-10 03:34:04'),
(496, 'App\\Models\\User', 191, 'my-app-token', '5b07139c2d7ac60297ff5dcf1124f10786b5dfe975ccc5f200ffecacce1d422a', '[\"*\"]', NULL, NULL, '2023-02-10 03:54:01', '2023-02-10 03:54:01'),
(497, 'App\\Models\\User', 192, 'my-app-token', 'f8be4aef7f1c8cf54d3a98265d9283e83cbe61a1a7b7dc0850ff279048961917', '[\"*\"]', NULL, NULL, '2023-02-10 04:00:53', '2023-02-10 04:00:53'),
(498, 'App\\Models\\User', 193, 'my-app-token', '3b7c2111e52cd6435705bd1e9f0cfacf08d462825e83a6542b2f46e259e108df', '[\"*\"]', NULL, NULL, '2023-02-10 04:03:09', '2023-02-10 04:03:09'),
(499, 'App\\Models\\User', 194, 'my-app-token', '216eb7fefff92b1efa835a845a2672d9bf81f1cf325036d7671058a079e1e712', '[\"*\"]', NULL, NULL, '2023-02-10 04:20:14', '2023-02-10 04:20:14'),
(500, 'App\\Models\\User', 195, 'my-app-token', '143b9f5bf75a6a2c6a4d33b27ab6d74351e4b47ca4ecf7216d9e0350a229dc09', '[\"*\"]', NULL, NULL, '2023-02-10 04:22:18', '2023-02-10 04:22:18'),
(501, 'App\\Models\\User', 196, 'my-app-token', 'ee43eca9ebd09c4d06939497aa3a0a23a68b4202eeb627e017cd8ad58c0fe4ee', '[\"*\"]', NULL, NULL, '2023-02-10 04:25:15', '2023-02-10 04:25:15'),
(502, 'App\\Models\\User', 3, 'my-app-token', '88c9ef3f2f919ad5df3d30f64355902498dc4011bd8061a4e0fee01d31cd16f8', '[\"*\"]', NULL, NULL, '2023-02-10 04:45:48', '2023-02-10 04:45:48'),
(503, 'App\\Models\\User', 3, 'my-app-token', '201810e338370ca471771fe779e475676a7bc19be4cde05d83ba7d42a1ac3677', '[\"*\"]', NULL, NULL, '2023-02-10 05:50:41', '2023-02-10 05:50:41'),
(504, 'App\\Models\\User', 3, 'my-app-token', 'c78bc134e03ebf03dca731eaa46467c78d72779e471d406c7dff0a1a11c121f6', '[\"*\"]', NULL, NULL, '2023-02-10 06:11:49', '2023-02-10 06:11:49'),
(505, 'App\\Models\\User', 34, 'my-app-token', 'a816c4d29e2fb9c26acb086da200281a7a86c469f78d343f8a1ea6eb9660df44', '[\"*\"]', NULL, NULL, '2023-02-10 06:19:26', '2023-02-10 06:19:26'),
(506, 'App\\Models\\User', 107, 'my-app-token', '2d8392f0ccb805127cdb54b2145d27cbe559df01832ef7b037169569259e8d41', '[\"*\"]', NULL, NULL, '2023-02-10 06:40:30', '2023-02-10 06:40:30'),
(507, 'App\\Models\\User', 34, 'my-app-token', '5c2e4c7545a8994330424fc85464e0e0434ff3738bda867f2f676c823b66bb7f', '[\"*\"]', NULL, NULL, '2023-02-10 06:50:40', '2023-02-10 06:50:40'),
(508, 'App\\Models\\User', 34, 'my-app-token', '0beb3741bedeb1ddb15d3a799fc9e7d3be086fb33a7052a71ec094ad72633317', '[\"*\"]', NULL, NULL, '2023-02-10 07:27:39', '2023-02-10 07:27:39'),
(509, 'App\\Models\\User', 3, 'my-app-token', 'd8d3fd4905309c41a2b2773252e5db21fcf7f4f73708abed56229f12fba148d8', '[\"*\"]', NULL, NULL, '2023-02-10 08:04:38', '2023-02-10 08:04:38'),
(510, 'App\\Models\\User', 99, 'my-app-token', 'e3afeb9ada48f7fa97920873cc05ed2bdc1d572b294a8b59cb9e429ba811205a', '[\"*\"]', NULL, NULL, '2023-02-10 08:09:03', '2023-02-10 08:09:03'),
(511, 'App\\Models\\User', 197, 'my-app-token', 'e56ea2ca793050ac77f27c4ba0955cd007be69fbbadaa1e7c85bd4069b7311e2', '[\"*\"]', NULL, NULL, '2023-02-10 10:05:10', '2023-02-10 10:05:10'),
(512, 'App\\Models\\User', 99, 'my-app-token', '85816d1de5e8619e5f47fc284036cb2a040bc536cbae7f56c0a665c47278f443', '[\"*\"]', NULL, NULL, '2023-02-10 23:37:36', '2023-02-10 23:37:36'),
(513, 'App\\Models\\User', 3, 'my-app-token', '3f28c61dc6fbc4d84508b14deab4f2019d3084f97dd0a9e6b211091124716a94', '[\"*\"]', NULL, NULL, '2023-02-10 23:48:54', '2023-02-10 23:48:54'),
(514, 'App\\Models\\User', 99, 'my-app-token', 'b42dc84dcc3fff1a81c86b3d1164bad3e46c3593e5126fd8744c998bbb1e246d', '[\"*\"]', NULL, NULL, '2023-02-11 00:25:13', '2023-02-11 00:25:13'),
(515, 'App\\Models\\User', 109, 'my-app-token', '3441954294e645b93d7dee862330eb83b5d5013884569e8530f6b79c881bff24', '[\"*\"]', NULL, NULL, '2023-02-11 00:32:48', '2023-02-11 00:32:48'),
(516, 'App\\Models\\User', 99, 'my-app-token', 'e81291bcb993fa979dfe16d28a50ed16bb86145c865e9a9d3aeac435813e8432', '[\"*\"]', NULL, NULL, '2023-02-11 00:38:17', '2023-02-11 00:38:17'),
(517, 'App\\Models\\User', 133, 'my-app-token', 'a9a7ab5715a447965f6eefe7c6701daace3df0c2790cef9bd8df83642d598610', '[\"*\"]', NULL, NULL, '2023-02-11 01:36:47', '2023-02-11 01:36:47'),
(518, 'App\\Models\\User', 99, 'my-app-token', '7a67cbd00066b5bf8790c10a44e94324be5f71cc89675b2b9ca80e479b8a9764', '[\"*\"]', NULL, NULL, '2023-02-11 04:01:05', '2023-02-11 04:01:05'),
(519, 'App\\Models\\User', 99, 'my-app-token', '0b4796d96fc4ebe5fbd196ed7194ae3cdda04458c95f517a0e2f459630511cb4', '[\"*\"]', NULL, NULL, '2023-02-11 08:35:35', '2023-02-11 08:35:35'),
(520, 'App\\Models\\User', 34, 'my-app-token', '17c25c5033526ae055c203bfa48444de9b84b1ee0a176daabd5fabe0a2bc63a3', '[\"*\"]', NULL, NULL, '2023-02-11 10:23:39', '2023-02-11 10:23:39'),
(521, 'App\\Models\\User', 198, 'my-app-token', '750a3fb65fe69b49d1cc13340da2dbfda2aa4213ece016c11217ad9755d96f85', '[\"*\"]', NULL, NULL, '2023-02-11 10:24:51', '2023-02-11 10:24:51'),
(522, 'App\\Models\\User', 99, 'my-app-token', '5112e306ae9b41b05e00dadc9dc7a9cac39efb593631393f5709b340259799a2', '[\"*\"]', NULL, NULL, '2023-02-11 12:24:39', '2023-02-11 12:24:39'),
(523, 'App\\Models\\User', 199, 'my-app-token', 'aab1e2ced80af2ae8ca0b3a1504e023423d07bfea1d865a8feccb397a3bd7efe', '[\"*\"]', NULL, NULL, '2023-02-12 05:14:16', '2023-02-12 05:14:16'),
(524, 'App\\Models\\User', 200, 'my-app-token', '3951bbbc03eb66e24b37847261e4c251e2433c3ce1fee38b0a1efd2ad9dcb16a', '[\"*\"]', NULL, NULL, '2023-02-12 05:26:29', '2023-02-12 05:26:29'),
(525, 'App\\Models\\User', 201, 'my-app-token', '87d97b4d5952c64581e7f04815efee0f1d18387f5df90133411905300748eb09', '[\"*\"]', NULL, NULL, '2023-02-12 05:31:13', '2023-02-12 05:31:13'),
(526, 'App\\Models\\User', 7, 'my-app-token', '538bcd281a0c907ed48de8b39922e35eb0dee6a14ccd45eb2fa899697ec836c1', '[\"*\"]', NULL, NULL, '2023-02-12 11:45:10', '2023-02-12 11:45:10'),
(527, 'App\\Models\\User', 202, 'my-app-token', 'ac19a76cef314c29826c8a476244d45c65db3b69fc58ce7a83d0b58a61bc4a26', '[\"*\"]', NULL, NULL, '2023-02-12 13:06:28', '2023-02-12 13:06:28'),
(528, 'App\\Models\\User', 203, 'my-app-token', '96067886eb017a8f0ae6fdde8fe14de2536d5849f8ba00b6041cb6bc9859dcb1', '[\"*\"]', NULL, NULL, '2023-02-12 13:08:12', '2023-02-12 13:08:12'),
(529, 'App\\Models\\User', 204, 'my-app-token', '8473f7e23b88ab8f7f4e19fbb42b84bea21e6ce955ce9f10ea7395eff81353fa', '[\"*\"]', NULL, NULL, '2023-02-12 13:13:06', '2023-02-12 13:13:06'),
(530, 'App\\Models\\User', 205, 'my-app-token', 'a59b2f1a7c49e3058a949c8e052f821138d04888a2f9449537bfe5ac84a64657', '[\"*\"]', NULL, NULL, '2023-02-12 13:14:08', '2023-02-12 13:14:08'),
(531, 'App\\Models\\User', 206, 'my-app-token', '268cfb88f459c8db7926babcd468ad5beddb62058f98794217bb1838450044a8', '[\"*\"]', NULL, NULL, '2023-02-12 13:15:45', '2023-02-12 13:15:45'),
(532, 'App\\Models\\User', 207, 'my-app-token', '9ff96286aa6758387e8b7fe572af9a667e61127d4db9ced14034d2a875935808', '[\"*\"]', NULL, NULL, '2023-02-12 13:20:37', '2023-02-12 13:20:37'),
(533, 'App\\Models\\User', 208, 'my-app-token', '9f7853f95a9f58c64fe8125b2b03f8b5354d17dd91e6694bec1843b80ee13421', '[\"*\"]', NULL, NULL, '2023-02-12 13:20:42', '2023-02-12 13:20:42'),
(534, 'App\\Models\\User', 209, 'my-app-token', 'd5d1f61c43515acb5e69c7d09efc22d04d6db765a46a8c5940159c603bb694e7', '[\"*\"]', NULL, NULL, '2023-02-12 13:21:57', '2023-02-12 13:21:57'),
(535, 'App\\Models\\User', 210, 'my-app-token', '56b72593add5a2bf3c5fe5b80d9c799c7512f422b8f38efbd00b43d03cae5e28', '[\"*\"]', NULL, NULL, '2023-02-12 13:22:05', '2023-02-12 13:22:05'),
(536, 'App\\Models\\User', 210, 'my-app-token', '6a80707f00b1c65b200bc69977b8ff468494666e11ac46034ea641412659620d', '[\"*\"]', NULL, NULL, '2023-02-12 13:24:09', '2023-02-12 13:24:09'),
(537, 'App\\Models\\User', 109, 'my-app-token', '065987d2e5e0b3370575ee5f341388ffd94fa123532ce5dc92a71477b296cd56', '[\"*\"]', NULL, NULL, '2023-02-12 23:38:44', '2023-02-12 23:38:44'),
(538, 'App\\Models\\User', 99, 'my-app-token', '3ecbad416a69a8b735f330010878ad1900e75de2b9922854d6f6dc63cdf30045', '[\"*\"]', NULL, NULL, '2023-02-12 23:39:05', '2023-02-12 23:39:05'),
(539, 'App\\Models\\User', 7, 'my-app-token', 'dccdecb45cf92761f68098f5026a7867baf55ffd421bda4286955d81f3c969ba', '[\"*\"]', NULL, NULL, '2023-02-12 23:40:22', '2023-02-12 23:40:22'),
(540, 'App\\Models\\User', 2, 'my-app-token', 'c2a7b744482d03c2a069490e5bacc1864fddd39db4f575ead7af71bc8526dfb2', '[\"*\"]', NULL, NULL, '2023-02-12 23:54:59', '2023-02-12 23:54:59'),
(541, 'App\\Models\\User', 3, 'my-app-token', 'b5f4855e0e4493a7851430fd5d236c3277593137b2b1ee1852b14661c1184072', '[\"*\"]', NULL, NULL, '2023-02-12 23:55:30', '2023-02-12 23:55:30'),
(542, 'App\\Models\\User', 7, 'my-app-token', '226c690f356d656ad16125b600dc65a4e1c322048b0be5b595c5f94f77cf9f03', '[\"*\"]', NULL, NULL, '2023-02-12 23:59:51', '2023-02-12 23:59:51'),
(543, 'App\\Models\\User', 7, 'my-app-token', 'a67e46e9b5af3a206b9954f4ceb2b02c6901c4a86781810d7a9214c987416db9', '[\"*\"]', NULL, NULL, '2023-02-13 00:28:37', '2023-02-13 00:28:37'),
(544, 'App\\Models\\User', 99, 'my-app-token', '3778d1441e07ba529f0e2bb5cce8bf496fbc061da802b18eb4d6bce2afed215d', '[\"*\"]', NULL, NULL, '2023-02-13 00:31:20', '2023-02-13 00:31:20');
INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(545, 'App\\Models\\User', 107, 'my-app-token', 'f6b039a4ed1636ee597af1d0c7510774ac9f9ba430cff025bd4fdf680f0ff580', '[\"*\"]', NULL, NULL, '2023-02-13 00:51:26', '2023-02-13 00:51:26'),
(546, 'App\\Models\\User', 99, 'my-app-token', '847ddb1cd607e3d7e7332385864f5f225d8ed8762c063eac470c7ba5ea60eceb', '[\"*\"]', NULL, NULL, '2023-02-13 01:01:58', '2023-02-13 01:01:58'),
(547, 'App\\Models\\User', 99, 'my-app-token', '0b30755014072636ef9c07614e13ba5831f4ec54340ff94dc2f7948b9d656c6e', '[\"*\"]', NULL, NULL, '2023-02-13 03:54:31', '2023-02-13 03:54:31'),
(548, 'App\\Models\\User', 211, 'my-app-token', '46905fe8e04045e64c56acd30993acc4830ea9777ad1c13b1c58492b2bf7b706', '[\"*\"]', NULL, NULL, '2023-02-13 04:16:25', '2023-02-13 04:16:25'),
(549, 'App\\Models\\User', 3, 'my-app-token', 'df5d0fb49ec16e5b96234121cdb13042324d935d3f8f46662cfd6d3899fbf34a', '[\"*\"]', NULL, NULL, '2023-02-13 21:03:46', '2023-02-13 21:03:46'),
(550, 'App\\Models\\User', 34, 'my-app-token', '037b443863b530385d3a808a067038269dc5ae6dadb4fd66dbfacc7b623bad42', '[\"*\"]', NULL, NULL, '2023-02-14 00:40:22', '2023-02-14 00:40:22'),
(551, 'App\\Models\\User', 99, 'my-app-token', '9a6ad8e0d720ea7a390e5a2c218f03de4975fe5ef4794111292a5ca828ddf281', '[\"*\"]', NULL, NULL, '2023-02-14 01:46:53', '2023-02-14 01:46:53'),
(552, 'App\\Models\\User', 212, 'my-app-token', '6242fe01b28952f81d0d46b5088a58c98ec0801a649d1ef7e895fca8ee43a2c9', '[\"*\"]', NULL, NULL, '2023-02-14 08:08:10', '2023-02-14 08:08:10'),
(553, 'App\\Models\\User', 7, 'my-app-token', 'a5bed6cc0c57ead3ca9d63b523e18bd60b2f522e7de4e00e715dbc09fa97110b', '[\"*\"]', NULL, NULL, '2023-02-14 11:59:18', '2023-02-14 11:59:18'),
(554, 'App\\Models\\User', 109, 'my-app-token', 'b9600d32407bdb0f7f4d4180b9b700afa2a7906f229fc3a4568b7e873640459a', '[\"*\"]', NULL, NULL, '2023-02-15 01:18:40', '2023-02-15 01:18:40'),
(555, 'App\\Models\\User', 109, 'my-app-token', '5e4180b718e6dd4b3816681e777abe1fe7f0e14217f045f63dfe2e47a892e584', '[\"*\"]', NULL, NULL, '2023-02-15 01:25:19', '2023-02-15 01:25:19'),
(556, 'App\\Models\\User', 213, 'my-app-token', '14f07e2e3d033c8e8a0ae768404a2417b6cb43993d8af9c25e18a948a22dd4c6', '[\"*\"]', NULL, NULL, '2023-02-15 02:21:02', '2023-02-15 02:21:02'),
(557, 'App\\Models\\User', 214, 'my-app-token', 'da19eeefef4d0df40be9d2366c99ab7d2a856f4880b032c37db1b36895b10992', '[\"*\"]', NULL, NULL, '2023-02-15 03:17:51', '2023-02-15 03:17:51'),
(558, 'App\\Models\\User', 34, 'my-app-token', '5911f29fa10a7500868529b5ad2c09a02196fc0b040865abb3defdec7727639c', '[\"*\"]', NULL, NULL, '2023-02-15 04:11:42', '2023-02-15 04:11:42'),
(559, 'App\\Models\\User', 215, 'my-app-token', 'e836703b80c0db8bc06137d8c6ce810db8f68f6deff60adc341f3117ca88f77f', '[\"*\"]', NULL, NULL, '2023-02-15 05:43:36', '2023-02-15 05:43:36'),
(560, 'App\\Models\\User', 99, 'my-app-token', '50cf3ea6a2e57e93dbb3053220c4633ed4536c170b0807cb0028062daf80540a', '[\"*\"]', NULL, NULL, '2023-02-15 05:52:25', '2023-02-15 05:52:25'),
(561, 'App\\Models\\User', 216, 'my-app-token', '70d2e24afc368c779f04f480cbc650d89e53cb20ae7bdc4f645a8ba9441cca65', '[\"*\"]', NULL, NULL, '2023-02-15 06:01:58', '2023-02-15 06:01:58'),
(562, 'App\\Models\\User', 99, 'my-app-token', 'f40487e246160f203d2c3f48653e9b34e5b200d12246584097287038fec86bbd', '[\"*\"]', NULL, NULL, '2023-02-15 06:06:44', '2023-02-15 06:06:44'),
(563, 'App\\Models\\User', 99, 'my-app-token', 'a7d34d9962fe2f28dbb2c428949c802cadb59a25d8866c08e4678c5a5f065d20', '[\"*\"]', NULL, NULL, '2023-02-15 07:59:02', '2023-02-15 07:59:02'),
(564, 'App\\Models\\User', 99, 'my-app-token', '2ac33bb9d9b2041e1b1db80ca7ca5c7f2bda06d98a05d18cedeed0aa28f5e91e', '[\"*\"]', NULL, NULL, '2023-02-15 21:24:30', '2023-02-15 21:24:30'),
(565, 'App\\Models\\User', 3, 'my-app-token', 'a5b0a47a5525ac1d40f84bd5e28e8b4a2c7b8d6135116639b3d9a3bd554e21a6', '[\"*\"]', NULL, NULL, '2023-02-16 07:13:35', '2023-02-16 07:13:35'),
(566, 'App\\Models\\User', 87, 'my-app-token', '58258c4d0b2bd2e891e7efe3377dc1ae1e24dfa3a9bd66d4f078e0f329950d7a', '[\"*\"]', NULL, NULL, '2023-02-17 06:31:46', '2023-02-17 06:31:46'),
(567, 'App\\Models\\User', 3, 'my-app-token', '27731a4604b589a0a97d8eb3d1dde1ced9b7c9e24245f32ba328e3a8981cf637', '[\"*\"]', NULL, NULL, '2023-02-17 06:51:29', '2023-02-17 06:51:29'),
(568, 'App\\Models\\User', 217, 'my-app-token', '4773dc37cf8d4668bcdbda3d13c6f03e952149e5b8ecb3182beee8ece759fb77', '[\"*\"]', NULL, NULL, '2023-02-17 12:38:12', '2023-02-17 12:38:12'),
(569, 'App\\Models\\User', 218, 'my-app-token', 'ed76172c4d05f117fe2374901407c02eb8e5f0c9b2898568b7755b023d5b91f4', '[\"*\"]', NULL, NULL, '2023-02-17 13:38:29', '2023-02-17 13:38:29'),
(570, 'App\\Models\\User', 120, 'my-app-token', '7b7592c804389903aa19fdcd8a4e51a57141fbcc3439688c19f7e8cad0d147ae', '[\"*\"]', NULL, NULL, '2023-02-18 01:29:43', '2023-02-18 01:29:43'),
(571, 'App\\Models\\User', 39, 'my-app-token', '08c8ea4412010f70103c3b5c4bc7184bf9db00d4b3c540d6099891fbb36060ad', '[\"*\"]', NULL, NULL, '2023-02-18 05:04:57', '2023-02-18 05:04:57'),
(572, 'App\\Models\\User', 3, 'my-app-token', '7ef7c8ef7b9369928b0a22706250f51cd55a9fc23af7a6b6ae46c56d819ad85e', '[\"*\"]', NULL, NULL, '2023-02-20 04:33:10', '2023-02-20 04:33:10'),
(573, 'App\\Models\\User', 99, 'my-app-token', '6e88bea8635ae3b32faa6acfc519a45499bccd949aac046681a7758964abf2ec', '[\"*\"]', NULL, NULL, '2023-02-20 06:23:45', '2023-02-20 06:23:45'),
(574, 'App\\Models\\User', 99, 'my-app-token', '4e2b3cf9f43b9c986c6e3b4a032235c4a757e6f38c5dec654e26fedab5a1afc4', '[\"*\"]', NULL, NULL, '2023-02-20 06:52:56', '2023-02-20 06:52:56'),
(575, 'App\\Models\\User', 3, 'my-app-token', 'c3bb7d69f97bbc89a69f7f2038e61cd69036802b6f5505b77b800558893bc5d1', '[\"*\"]', NULL, NULL, '2023-02-20 07:09:23', '2023-02-20 07:09:23'),
(576, 'App\\Models\\User', 219, 'my-app-token', '2436256d5a9f847249271f649657ce838549e64a4705ea5b23c2eb213196a3d7', '[\"*\"]', NULL, NULL, '2023-02-21 10:06:29', '2023-02-21 10:06:29'),
(577, 'App\\Models\\User', 109, 'my-app-token', '58388c5ad18f47ce1f08f6caaddeaa6a9b3e4272c8abe9e5a4669a6092d7cb41', '[\"*\"]', NULL, NULL, '2023-02-22 04:00:24', '2023-02-22 04:00:24'),
(578, 'App\\Models\\User', 99, 'my-app-token', 'e0295b84e510b59f915359d2ac602463017cb9055fcd0dab294b135679a75e96', '[\"*\"]', NULL, NULL, '2023-02-22 04:58:46', '2023-02-22 04:58:46'),
(579, 'App\\Models\\User', 39, 'my-app-token', '49c3da3c8a6c9fc5f1ebb097e8b5e73e5fbe21fa759e9529cfe4db796872e2f7', '[\"*\"]', NULL, NULL, '2023-02-23 00:29:05', '2023-02-23 00:29:05'),
(580, 'App\\Models\\User', 3, 'my-app-token', '8776cc0aa5772072ded5e49161df3786634fe3d3be185eb484753dac809e0e7e', '[\"*\"]', NULL, NULL, '2023-02-23 04:23:55', '2023-02-23 04:23:55'),
(581, 'App\\Models\\User', 99, 'my-app-token', '9d0ee484c78dd483a69b27c6ce8c21ec2dd500013b76516ee37fb7934ad529f0', '[\"*\"]', NULL, NULL, '2023-02-23 04:33:17', '2023-02-23 04:33:17'),
(582, 'App\\Models\\User', 99, 'my-app-token', 'c99070a53bbe3c777867aeda6a00763ebb947dcf512939b08857f617844de36d', '[\"*\"]', NULL, NULL, '2023-02-23 04:35:44', '2023-02-23 04:35:44'),
(583, 'App\\Models\\User', 99, 'my-app-token', '717135da0821340dfe583059da407205f9e723f48592c11e4bcc81a67d404ae5', '[\"*\"]', NULL, NULL, '2023-02-23 04:40:30', '2023-02-23 04:40:30'),
(584, 'App\\Models\\User', 99, 'my-app-token', '2cdd08d2ee00b555d27c74e1710ce04ca6fbbe38cbce96341f1be8751598ac5b', '[\"*\"]', NULL, NULL, '2023-02-23 04:47:57', '2023-02-23 04:47:57'),
(585, 'App\\Models\\User', 99, 'my-app-token', 'b3a60c0c68af496bd0ffb877eaf7dd29c24b6732bf66ec762a62afba72088b16', '[\"*\"]', NULL, NULL, '2023-02-23 05:25:46', '2023-02-23 05:25:46'),
(586, 'App\\Models\\User', 99, 'my-app-token', '32c4e305a3fac21bf291620bdc65994ef0aee2449bef78f8f93ee8964f5e03d2', '[\"*\"]', NULL, NULL, '2023-02-23 06:13:51', '2023-02-23 06:13:51'),
(587, 'App\\Models\\User', 220, 'my-app-token', 'fb02841004d74387ed5e68f2425d182418baf27ab5623750c2cad4c14ad25749', '[\"*\"]', NULL, NULL, '2023-02-23 08:10:56', '2023-02-23 08:10:56'),
(588, 'App\\Models\\User', 99, 'my-app-token', '496b1a378442300c7a18a929580bd0559ac5d8c75976f37f1fe795a6fdb72a3b', '[\"*\"]', NULL, NULL, '2023-02-23 15:56:20', '2023-02-23 15:56:20'),
(589, 'App\\Models\\User', 99, 'my-app-token', 'f963acb306ea796bdc292891104916c9436708bd128e5b712f16b13f5388b863', '[\"*\"]', NULL, NULL, '2023-02-23 23:20:38', '2023-02-23 23:20:38'),
(590, 'App\\Models\\User', 99, 'my-app-token', 'afd994304fb359ed039c70e939d96d36933f3351bfe4b91f4821a74d701772ed', '[\"*\"]', NULL, NULL, '2023-02-24 05:48:53', '2023-02-24 05:48:53'),
(591, 'App\\Models\\User', 99, 'my-app-token', '8df723c201e4aaad9e01f1c102ef91a9479c79b29e09192fbf54e789ef027ca9', '[\"*\"]', NULL, NULL, '2023-02-24 06:01:09', '2023-02-24 06:01:09'),
(592, 'App\\Models\\User', 150, 'my-app-token', 'f4c866a66f047cdea029b5e00667cff486a2d7e78aca4b03882f28f28d3c4856', '[\"*\"]', NULL, NULL, '2023-02-24 06:07:31', '2023-02-24 06:07:31'),
(593, 'App\\Models\\User', 99, 'my-app-token', '6b839e07bfb830239c4ab6a758ca96849524ee318fae2a09d699cc14fec6a38c', '[\"*\"]', NULL, NULL, '2023-02-24 06:09:06', '2023-02-24 06:09:06'),
(594, 'App\\Models\\User', 99, 'my-app-token', 'bc5773a6c5177134053a2ade61dc63577c1ea39a85e7d2a0f44329c2fc6a93d5', '[\"*\"]', NULL, NULL, '2023-02-24 06:10:08', '2023-02-24 06:10:08'),
(595, 'App\\Models\\User', 99, 'my-app-token', '01224258382fe8d7b0538ba640f186dcd6239adc97ac6ddb7bc0f355bf699842', '[\"*\"]', NULL, NULL, '2023-02-24 06:12:48', '2023-02-24 06:12:48'),
(596, 'App\\Models\\User', 99, 'my-app-token', '7c27d6dea79a643bff1e4662525e1f6261e88cf4329e4a474d6f55be3fe6baa0', '[\"*\"]', NULL, NULL, '2023-02-24 06:15:37', '2023-02-24 06:15:37'),
(597, 'App\\Models\\User', 99, 'my-app-token', '019e960f33f5abb01178b7f373c8a191bc73a6d57d942a27102acfbed8f6ec7c', '[\"*\"]', NULL, NULL, '2023-02-24 06:21:00', '2023-02-24 06:21:00'),
(598, 'App\\Models\\User', 99, 'my-app-token', 'a8facb20fe1b3b458cd4c7b0a5502ae10bbbd7c9a32fb44b152be7fc188782a2', '[\"*\"]', NULL, NULL, '2023-02-24 06:33:51', '2023-02-24 06:33:51'),
(599, 'App\\Models\\User', 99, 'my-app-token', 'fbaec31b1303ac2f6b1b33bd1ee6a5ac9fa72e0e34910363433e31518fb9ab26', '[\"*\"]', NULL, NULL, '2023-02-24 06:43:39', '2023-02-24 06:43:39'),
(600, 'App\\Models\\User', 34, 'my-app-token', '01d554d38b7b3d7ff00d9811479031d4e46951733547c94f9e249785ec89a527', '[\"*\"]', NULL, NULL, '2023-02-24 07:17:10', '2023-02-24 07:17:10'),
(601, 'App\\Models\\User', 99, 'my-app-token', 'a852a65428086c934fcaf3c9a186cf1f4323c9b9dd1376eb502145ad6f9e6ada', '[\"*\"]', NULL, NULL, '2023-02-24 23:28:14', '2023-02-24 23:28:14'),
(602, 'App\\Models\\User', 99, 'my-app-token', '84a5f1a876e6dfd061e7f8e89c1d2b706f6bd801aecba3551f680dc4a6456c15', '[\"*\"]', NULL, NULL, '2023-02-25 01:15:08', '2023-02-25 01:15:08'),
(603, 'App\\Models\\User', 221, 'my-app-token', 'f4d0ecb438e582410e0737d0361673841016e7f90abd5d5afe8480ffb2a50bd8', '[\"*\"]', NULL, NULL, '2023-02-26 01:12:50', '2023-02-26 01:12:50'),
(604, 'App\\Models\\User', 99, 'my-app-token', 'e163dd0a800d73da1cecb644ec1f01c66848773bdf5c74c68ef040b05bed180f', '[\"*\"]', NULL, NULL, '2023-02-27 07:42:20', '2023-02-27 07:42:20'),
(605, 'App\\Models\\User', 3, 'my-app-token', '05ccce0840bee3e362d57a29972977a0b38cda69de9524c734c8a665ad1b7b3b', '[\"*\"]', NULL, NULL, '2023-02-28 01:16:30', '2023-02-28 01:16:30'),
(606, 'App\\Models\\User', 3, 'my-app-token', '0760c720efce4146b6bce6fb0c1be0bfaaa5dddb4316c6076a4166530a6c3d43', '[\"*\"]', NULL, NULL, '2023-02-28 01:18:12', '2023-02-28 01:18:12'),
(607, 'App\\Models\\User', 3, 'my-app-token', 'f2a983ba9934700c30287fbfba029af568b15b9d74bb7a5dfb53eb92ba4dc726', '[\"*\"]', NULL, NULL, '2023-02-28 03:16:24', '2023-02-28 03:16:24'),
(608, 'App\\Models\\User', 3, 'my-app-token', 'dea62a858d8013c0bc8e9b3f1bebb80ee0f51cb14face1f05378d81ef0a7606a', '[\"*\"]', NULL, NULL, '2023-02-28 03:45:02', '2023-02-28 03:45:02'),
(609, 'App\\Models\\User', 3, 'my-app-token', '43e91e687b9438bbc9969421a8b1d68b7c602cfce5b9e453b47a7ac8b61cc5e4', '[\"*\"]', NULL, NULL, '2023-02-28 03:54:23', '2023-02-28 03:54:23'),
(610, 'App\\Models\\User', 3, 'my-app-token', '769bfabd51ca3e466cc54ad0be4d27486e3a3af280fd4b3ad1e65621786acfdc', '[\"*\"]', NULL, NULL, '2023-02-28 05:04:38', '2023-02-28 05:04:38'),
(611, 'App\\Models\\User', 3, 'my-app-token', 'b02837ab7e4ea223b2df840bbfb5e1bf414916f413f9d66e87ddf86ef8fc5c59', '[\"*\"]', NULL, NULL, '2023-03-04 06:16:44', '2023-03-04 06:16:44'),
(612, 'App\\Models\\User', 3, 'my-app-token', '0d3b7e584749b9d807c24cc6cd68e6fc9ad5e1d171bc1fdfbe3a2872d0636a90', '[\"*\"]', NULL, NULL, '2023-03-04 06:16:52', '2023-03-04 06:16:52'),
(613, 'App\\Models\\User', 3, 'my-app-token', '601a42fd54f7b70bc892d836ad5d640a1d26291492254c1e7860604f415befbb', '[\"*\"]', NULL, NULL, '2023-03-04 06:17:07', '2023-03-04 06:17:07'),
(614, 'App\\Models\\User', 109, 'my-app-token', '99197d8ab6133e59c748f8b1cf072d743562729df29751c60abbf6b08eeac1c6', '[\"*\"]', NULL, NULL, '2023-03-04 06:24:00', '2023-03-04 06:24:00'),
(615, 'App\\Models\\User', 3, 'my-app-token', '95e1038c6c9fdb6a3ff90254fd47b78eaa9db9ed2303d2dbd01e6e224cd9990c', '[\"*\"]', NULL, NULL, '2023-03-04 06:36:03', '2023-03-04 06:36:03'),
(616, 'App\\Models\\User', 3, 'my-app-token', '63fac034edc4f3b783096319642950a4695337a2d15571705e937ec6fdd801de', '[\"*\"]', NULL, NULL, '2023-03-04 06:36:49', '2023-03-04 06:36:49'),
(617, 'App\\Models\\User', 3, 'my-app-token', '34d53ba377c36390833f411928183f38d64a32d17107773be535bb2e2c6f5597', '[\"*\"]', NULL, NULL, '2023-03-04 09:58:24', '2023-03-04 09:58:24'),
(618, 'App\\Models\\User', 3, 'my-app-token', 'ba784f4bea174ded31f4696a17903ed41a362113392ec338d4c6783ff5f2ef06', '[\"*\"]', NULL, NULL, '2023-03-04 09:59:29', '2023-03-04 09:59:29'),
(619, 'App\\Models\\User', 3, 'my-app-token', '69677540b34eb6bee4a0d495bbaedfe945e6ad1201de0fc3c2dbd96305e9805e', '[\"*\"]', NULL, NULL, '2023-03-04 11:24:43', '2023-03-04 11:24:43'),
(620, 'App\\Models\\User', 3, 'my-app-token', '4f903199d951c0f9a74a63720feca40d7b41109c93c26d6f103740a41848286c', '[\"*\"]', NULL, NULL, '2023-03-13 05:19:33', '2023-03-13 05:19:33'),
(621, 'App\\Models\\User', 231, 'my-app-token', 'ed5f107cd86c6f1037991f2212a0d42e01808174454636ad5bbac9a43fbecc96', '[\"*\"]', NULL, NULL, '2023-03-13 05:36:11', '2023-03-13 05:36:11'),
(622, 'App\\Models\\User', 233, 'my-app-token', 'fe9f10dbf5c748961bc1946e0c6e7f8b46c16d0517a21f6e963063458b144821', '[\"*\"]', NULL, NULL, '2023-03-13 11:47:00', '2023-03-13 11:47:00'),
(623, 'App\\Models\\User', 234, 'my-app-token', '1882f2b9f18ba095de760e4d5424e4ef5d808241fc16e4987defd314b8bbd751', '[\"*\"]', NULL, NULL, '2023-03-13 11:47:38', '2023-03-13 11:47:38'),
(624, 'App\\Models\\User', 238, 'my-app-token', '2259f7f31debdab8c1c2c00f4e5c47b26848e11658a044421b28b8146c8db311', '[\"*\"]', NULL, NULL, '2023-03-13 11:50:26', '2023-03-13 11:50:26'),
(625, 'App\\Models\\User', 3, 'my-app-token', '2a84dd44e97578b8cb9c70080d5c6230937c88038249e485a28b3fe35d614fcb', '[\"*\"]', NULL, NULL, '2023-04-27 06:21:10', '2023-04-27 06:21:10'),
(626, 'App\\Models\\User', 268, 'my-app-token', 'bdca2d0ffd63f431c0ca4c4b20c0cb4bd9465b3b401d8a75bc39252e601a0478', '[\"*\"]', NULL, NULL, '2023-05-11 09:32:20', '2023-05-11 09:32:20'),
(627, 'App\\Models\\User', 269, 'my-app-token', 'f3bdb35b974475a0ec1c454843c0a94e059d0c376caba808d9c89eec6719870b', '[\"*\"]', NULL, NULL, '2023-06-27 10:23:02', '2023-06-27 10:23:02'),
(628, 'App\\Models\\User', 269, 'my-app-token', '21548d0f61d17e21003d874f297feb8a58c2e8709658818363efca5e697c43b7', '[\"*\"]', NULL, NULL, '2023-06-27 14:21:13', '2023-06-27 14:21:13'),
(629, 'App\\Models\\User', 269, 'my-app-token', 'ded5ad0206b8651730a6959e64378435101e66d7441f57f0e5e18295fce36bf8', '[\"*\"]', NULL, NULL, '2023-06-27 16:31:14', '2023-06-27 16:31:14'),
(630, 'App\\Models\\User', 269, 'my-app-token', '251fd4b8c00ecb64e6ae0e01d04eb9eeb58ea5ba4454d7bf5b6beff46a1faee1', '[\"*\"]', NULL, NULL, '2023-06-27 16:32:41', '2023-06-27 16:32:41'),
(631, 'App\\Models\\User', 269, 'my-app-token', '7dbd55a31d161edfb0aad2e29470baa10ea3bb23591b5220762fec3ecba19e91', '[\"*\"]', NULL, NULL, '2023-06-28 10:39:55', '2023-06-28 10:39:55'),
(632, 'App\\Models\\User', 99, 'my-app-token', '6641831e80b84f9893aaf404cffac37a6969938e70f108fc89ae390ee233b556', '[\"*\"]', NULL, NULL, '2023-10-10 11:16:49', '2023-10-10 11:16:49'),
(633, 'App\\Models\\User', 272, 'my-app-token', 'f7e4ddb2f9a0def29ed061f0383afb2e284d9f29f0fab4c0b7e8830871971850', '[\"*\"]', NULL, NULL, '2023-10-10 12:13:34', '2023-10-10 12:13:34'),
(634, 'App\\Models\\User', 272, 'my-app-token', '6803e3a5f75f12af28a3a8191a0c3ac864e8b38f0181f28d7d01f259ebdd2d90', '[\"*\"]', NULL, NULL, '2023-10-10 12:16:48', '2023-10-10 12:16:48'),
(635, 'App\\Models\\User', 272, 'my-app-token', '5ff6c82ed0c45bae47ba40eeb39a1407342ad010e40c053f24d6be7fe13592ce', '[\"*\"]', NULL, NULL, '2023-10-10 12:32:55', '2023-10-10 12:32:55'),
(636, 'App\\Models\\User', 272, 'my-app-token', 'c21e59549340a7869c000cc51449f5703dec158e9706bd3372d55549367b2858', '[\"*\"]', NULL, NULL, '2023-10-10 12:35:31', '2023-10-10 12:35:31'),
(637, 'App\\Models\\User', 272, 'my-app-token', 'bbff32bd0fd8fd0a514f4adc6ae01f4b1b553b5e29f0595c233f984e4677d8e1', '[\"*\"]', NULL, NULL, '2023-10-10 13:30:36', '2023-10-10 13:30:36'),
(638, 'App\\Models\\User', 272, 'my-app-token', 'b47aa56305a0e8590f0bd5e91c554f7156e757a15016e835ab16cdd93581a845', '[\"*\"]', NULL, NULL, '2023-10-10 13:54:45', '2023-10-10 13:54:45'),
(639, 'App\\Models\\User', 272, 'my-app-token', '4bcebe8116f06800c93b76c1d12b38adb7dfcb11d3b7d1fa445de56d16f5393b', '[\"*\"]', NULL, NULL, '2023-10-10 13:54:45', '2023-10-10 13:54:45'),
(640, 'App\\Models\\User', 99, 'my-app-token', '4fb07b81403a6c074dae4d3cacec4cf12ba96a0d9994e0b1b6cb60ae629270ee', '[\"*\"]', NULL, NULL, '2023-10-10 13:58:32', '2023-10-10 13:58:32'),
(641, 'App\\Models\\User', 99, 'my-app-token', '2cc78bf99af9784341c588527ea901ac8a814ae3972ddb4c1089622d2d859a13', '[\"*\"]', NULL, NULL, '2023-10-10 14:00:06', '2023-10-10 14:00:06'),
(642, 'App\\Models\\User', 272, 'my-app-token', '0cb47e7ee034c4e5624db4b6a3a2f8902d6300f8df2839e01f99439027944385', '[\"*\"]', NULL, NULL, '2023-10-10 15:45:59', '2023-10-10 15:45:59'),
(643, 'App\\Models\\User', 272, 'my-app-token', 'c7b6ea133a32b8459f5e289fdf9f8e83e2b109d74637c66658bfe2593cb17a7f', '[\"*\"]', NULL, NULL, '2023-10-10 16:18:36', '2023-10-10 16:18:36'),
(644, 'App\\Models\\User', 272, 'my-app-token', '976a8bd3abf3577b618bf3652f39766ba94eb3a5a0eaef816d1ffb61b27ef369', '[\"*\"]', NULL, NULL, '2023-10-10 18:00:30', '2023-10-10 18:00:30'),
(645, 'App\\Models\\User', 272, 'my-app-token', '50b0d7f6a8d73306ed6f0faa2ecf7db742eea8ae83ae7c5427a0223ffb25ff25', '[\"*\"]', NULL, NULL, '2023-10-11 09:41:04', '2023-10-11 09:41:04'),
(646, 'App\\Models\\User', 272, 'my-app-token', '12fcde2042e6c5e2cf5cbae78da18036c84dd9857967ce697a39827fe1ba3919', '[\"*\"]', NULL, NULL, '2023-10-11 09:50:03', '2023-10-11 09:50:03'),
(647, 'App\\Models\\User', 272, 'my-app-token', '778ee2d32b5b34cacd9b915fddef508b853d7b666c5b8d8ea346feab43cd6d88', '[\"*\"]', NULL, NULL, '2023-10-11 09:51:09', '2023-10-11 09:51:09'),
(648, 'App\\Models\\User', 273, 'my-app-token', '876512dee803be69e30c5d95d959d404fd6e2be5aa04d41e14b867c9ed70128f', '[\"*\"]', NULL, NULL, '2023-10-11 10:00:33', '2023-10-11 10:00:33'),
(649, 'App\\Models\\User', 273, 'my-app-token', '297bb50fcee91b26ffcd0aaab979b05d298c685ebee220d83382d0f4db357a0e', '[\"*\"]', NULL, NULL, '2023-10-11 11:18:12', '2023-10-11 11:18:12'),
(650, 'App\\Models\\User', 273, 'my-app-token', 'df7b782c114325cec77131bedfd1eec0e0ffafc93e771ab27bdc1af00b749e30', '[\"*\"]', NULL, NULL, '2023-10-11 11:19:49', '2023-10-11 11:19:49'),
(651, 'App\\Models\\User', 273, 'my-app-token', '960e4112637bf079d5eec643c02af1c48eaa3191b9317a873ffc023e63354234', '[\"*\"]', NULL, NULL, '2023-10-11 11:30:12', '2023-10-11 11:30:12'),
(652, 'App\\Models\\User', 3, 'my-app-token', '2cd88571687fe99764b3c7f1f605a71f51612bf9a63c164804a64d72502814c1', '[\"*\"]', NULL, NULL, '2023-10-12 11:40:48', '2023-10-12 11:40:48'),
(653, 'App\\Models\\User', 298, 'my-app-token', 'c2ff039580f356b888c84dfc01ac909b8019d263bce0cb0fe39500a7377a2b75', '[\"*\"]', NULL, NULL, '2023-11-02 12:06:12', '2023-11-02 12:06:12'),
(654, 'App\\Models\\User', 298, 'my-app-token', 'abba7380332d3cfbec9c3652b7908fdff1a485c63525a8df5270dc1787007e5e', '[\"*\"]', NULL, NULL, '2023-11-02 12:08:12', '2023-11-02 12:08:12'),
(655, 'App\\Models\\User', 297, 'my-app-token', 'b2fb35af12431272d01d5e60aa3e4d6eafdbf5f90b703fe93e60f1e77d3c4a23', '[\"*\"]', NULL, NULL, '2023-11-03 09:03:29', '2023-11-03 09:03:29'),
(656, 'App\\Models\\User', 297, 'my-app-token', '6a2932f198895df2c72006bdd7ffb50c9b773363cc8c7259368ed318a460b820', '[\"*\"]', NULL, NULL, '2023-11-03 13:46:56', '2023-11-03 13:46:56'),
(657, 'App\\Models\\User', 297, 'my-app-token', 'd08704b3331bab077cbad6cdbeaeaeb9733aefaf004e688e207b200cf0af56b3', '[\"*\"]', NULL, NULL, '2023-11-03 13:51:02', '2023-11-03 13:51:02'),
(658, 'App\\Models\\User', 297, 'my-app-token', '720e9b42c6743d8379e22dd15e22eefd2decb116fe519dcab00aa7668929fd09', '[\"*\"]', NULL, NULL, '2023-11-03 14:10:24', '2023-11-03 14:10:24'),
(659, 'App\\Models\\User', 298, 'my-app-token', '31515d0437be051055d107350bb286abfda9e0b767fe64d15527331528ba5fdd', '[\"*\"]', NULL, NULL, '2023-11-04 10:16:19', '2023-11-04 10:16:19'),
(660, 'App\\Models\\User', 302, 'my-app-token', '6d78c99d15bc36cf80e3d634a5d13d50fee1646fe158fde308cf1159b3a081e8', '[\"*\"]', NULL, NULL, '2023-11-04 14:05:37', '2023-11-04 14:05:37'),
(661, 'App\\Models\\User', 302, 'my-app-token', 'c6db5e75ea3b5c8d3c72db2822037f6fb84f3fb44d7404003be4623da981ee2e', '[\"*\"]', NULL, NULL, '2023-11-04 14:07:53', '2023-11-04 14:07:53'),
(662, 'App\\Models\\User', 297, 'my-app-token', '4b7351908f7bce2fa98c4918214e20bfd2bde8ffedd8ad15cf9239827a9d7f8e', '[\"*\"]', NULL, NULL, '2023-11-04 14:15:29', '2023-11-04 14:15:29'),
(663, 'App\\Models\\User', 302, 'my-app-token', '9d309236673c8db1dc07da51a2db589823b8d7a5890ca61f3a4784ef86d0730b', '[\"*\"]', NULL, NULL, '2023-11-04 14:26:27', '2023-11-04 14:26:27'),
(664, 'App\\Models\\User', 297, 'my-app-token', 'a3f14a697041b8bcb58bee57171fd0c1b14715979fdeed1d37fc754a0af8469d', '[\"*\"]', NULL, NULL, '2023-11-06 15:26:58', '2023-11-06 15:26:58'),
(665, 'App\\Models\\User', 297, 'my-app-token', '293d04793eb422e527ff416298d94df543a5ffbcf86346bac73620f80808c5a9', '[\"*\"]', NULL, NULL, '2023-11-20 14:45:18', '2023-11-20 14:45:18'),
(666, 'App\\Models\\User', 298, 'my-app-token', 'dc092c8c234cc6a6cdcf265bb287b22b7e3734716be94b44a3bd95e120abe7bd', '[\"*\"]', NULL, NULL, '2023-11-20 15:32:05', '2023-11-20 15:32:05'),
(667, 'App\\Models\\User', 298, 'my-app-token', 'd3fe18f33d16df0777efba92b58da16b745ddcc54622ac62dcd9d131f840a909', '[\"*\"]', NULL, NULL, '2023-11-20 15:32:47', '2023-11-20 15:32:47'),
(668, 'App\\Models\\User', 302, 'my-app-token', 'a8fe1a2a540b9d3e6052d782c928c86ddacdfc3cbcfafebaf074c53ba3b0bc3a', '[\"*\"]', NULL, NULL, '2023-11-20 15:33:16', '2023-11-20 15:33:16'),
(669, 'App\\Models\\User', 276, 'my-app-token', 'bffed70035488edb5c1877f4d63b04af64e87dba023bae094cc5496e7030e3b7', '[\"*\"]', NULL, NULL, '2023-11-20 17:41:30', '2023-11-20 17:41:30'),
(670, 'App\\Models\\User', 302, 'my-app-token', 'bfc02d9699678380d43b57277a7e8eea70497f9e417c1eb2991478a17fa913a3', '[\"*\"]', NULL, NULL, '2023-11-20 17:42:48', '2023-11-20 17:42:48'),
(671, 'App\\Models\\User', 302, 'my-app-token', 'f56c12911aa93015ddd8dd9d1561dba4489b08d7bcefed5c938c4c23621fb6b2', '[\"*\"]', NULL, NULL, '2023-11-21 18:03:25', '2023-11-21 18:03:25'),
(672, 'App\\Models\\User', 297, 'my-app-token', '005a424eb7dc16187494914f97008d973ced7c0cf867c7a7f10733ed047e937f', '[\"*\"]', NULL, NULL, '2023-11-21 18:23:20', '2023-11-21 18:23:20'),
(673, 'App\\Models\\User', 302, 'my-app-token', '7bbd376f2b5026ff77e9388e8fc5a9c4fc4546ccc8b61ccaa54eb8bb752d3415', '[\"*\"]', NULL, NULL, '2023-11-22 17:59:45', '2023-11-22 17:59:45'),
(674, 'App\\Models\\User', 298, 'my-app-token', '22625b9ccc695a87283fd04d4383a79eda56a62d238d873028af350b5da17ee8', '[\"*\"]', NULL, NULL, '2023-11-22 17:59:56', '2023-11-22 17:59:56'),
(675, 'App\\Models\\User', 298, 'my-app-token', 'a62763f6d499778bae0d17ecae069239aa15be643e8b97c84e61278f38b0490b', '[\"*\"]', NULL, NULL, '2023-11-22 18:01:33', '2023-11-22 18:01:33'),
(676, 'App\\Models\\User', 298, 'my-app-token', '1a057b2d831363b7d9868fb30d5c0413dc819537e37951019cca03dfed2191e8', '[\"*\"]', NULL, NULL, '2023-11-22 18:24:20', '2023-11-22 18:24:20'),
(677, 'App\\Models\\User', 3, 'my-app-token', '9ddbc678017f4c0fe66e429b461750258f6f4886662099aa7b2762179129eb46', '[\"*\"]', NULL, NULL, '2023-12-22 09:54:06', '2023-12-22 09:54:06'),
(678, 'App\\Models\\User', 3, 'my-app-token', '5bb6fa7f3f7f93935f3942a7c737c4279cc8528b60273b11aee823fdca6521cd', '[\"*\"]', NULL, NULL, '2024-01-31 11:51:50', '2024-01-31 11:51:50'),
(679, 'App\\Models\\User', 3, 'my-app-token', '960350e7219fde073856df434c540bfcd934cde80cdc5db5b46491d9c038defb', '[\"*\"]', NULL, NULL, '2024-01-31 11:52:34', '2024-01-31 11:52:34'),
(680, 'App\\Models\\User', 3, 'my-app-token', '2432b81d1c128c2c0cf47f572c28a03765d362cedf21b6b672cf95a06ed3c171', '[\"*\"]', NULL, NULL, '2024-05-27 11:05:07', '2024-05-27 11:05:07'),
(681, 'App\\Models\\User', 3, 'my-app-token', 'e152a158f35ca46db1d8cb3730e0ddea7e79b7e7bada0489a745d38a4556ab94', '[\"*\"]', NULL, NULL, '2024-05-27 11:06:32', '2024-05-27 11:06:32'),
(682, 'App\\Models\\User', 3, 'my-app-token', '4834037a3ac6955657f90d686af3c705457a84cc2940e0e17e515c7f52d01301', '[\"*\"]', NULL, NULL, '2024-05-27 11:08:05', '2024-05-27 11:08:05'),
(683, 'App\\Models\\User', 3, 'my-app-token', 'fb6a7d15adcae9ba1576ff4d11efb86aa82998986559601f6e095075cccd207b', '[\"*\"]', NULL, NULL, '2024-05-27 11:08:19', '2024-05-27 11:08:19'),
(684, 'App\\Models\\User', 3, 'my-app-token', '5977a944a941dfddf56a9bc73d7b88f4519ae56d12ce59862bab37723b86f064', '[\"*\"]', NULL, NULL, '2024-05-27 11:09:18', '2024-05-27 11:09:18'),
(685, 'App\\Models\\User', 3, 'my-app-token', '0c1b52ddbe5b1801dbc46215622f52c979b4d8f12801da0109a0094d7caf2f2a', '[\"*\"]', NULL, NULL, '2024-05-27 11:35:32', '2024-05-27 11:35:32'),
(686, 'App\\Models\\User', 3, 'my-app-token', '0f316aedb3b4f48ef0b3b848a2a746beb6dac552fd85c55fd35ce6cd309c1058', '[\"*\"]', NULL, NULL, '2024-05-27 11:40:16', '2024-05-27 11:40:16'),
(687, 'App\\Models\\User', 3, 'my-app-token', '135e67915c8705f69ca10ca4f046b43773d8b18c51b9f61e4d279bc56376a4ce', '[\"*\"]', NULL, NULL, '2024-05-27 11:41:01', '2024-05-27 11:41:01'),
(688, 'App\\Models\\User', 313, 'my-app-token', '66f25068c4788b728af679f72af2f7510db7528e909dee5f2c3727f24b2f07bc', '[\"*\"]', NULL, NULL, '2024-05-28 11:48:12', '2024-05-28 11:48:12'),
(689, 'App\\Models\\User', 325, 'my-app-token', '02a09ace7b8c6d43b3ba3e3f20886e829fc0345c46f7fd3c1b2f78a35b2deccd', '[\"*\"]', NULL, NULL, '2024-06-25 07:10:56', '2024-06-25 07:10:56'),
(690, 'App\\Models\\User', 328, 'my-app-token', 'fc0277ca3f20fc049c1908572d4f448751aed3432c8d1899afde8ae105eaada1', '[\"*\"]', NULL, NULL, '2024-06-25 07:19:17', '2024-06-25 07:19:17'),
(691, 'App\\Models\\User', 329, 'my-app-token', '9660bade65ded304e28f46af8cc6ebaf63aaf2bc2f9e72854e37ecbb6a3a71e3', '[\"*\"]', NULL, NULL, '2024-06-25 07:21:18', '2024-06-25 07:21:18'),
(692, 'App\\Models\\User', 328, 'my-app-token', '4f1e78935af80fd158755cadaa8f0a027658487a693b3820d585fa5433c9959c', '[\"*\"]', NULL, NULL, '2024-06-26 12:10:46', '2024-06-26 12:10:46'),
(693, 'App\\Models\\User', 328, 'my-app-token', '2af9aa36e3a22e7bcdbe37b0ce2138917368e6b2f8ae068d5032c613d48a44af', '[\"*\"]', NULL, NULL, '2024-06-26 12:16:29', '2024-06-26 12:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `point` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `userId`, `point`, `created_at`, `updated_at`) VALUES
(1, 3, '100', '2023-03-13 05:36:11', '2023-03-13 05:36:11'),
(2, 1, '100', '2023-03-13 11:46:59', '2023-03-13 11:46:59'),
(3, 1, '200', '2023-03-13 11:47:38', '2023-03-13 11:47:38'),
(4, 3, '100', '2023-03-16 06:17:50', '2023-03-16 06:17:50'),
(5, 3, '100', '2023-03-24 05:33:10', '2023-03-24 05:33:10'),
(6, 3, '100', '2023-03-24 05:36:35', '2023-03-24 05:36:35'),
(7, 3, '100', '2023-04-04 09:02:49', '2023-04-04 09:02:49'),
(8, 3, '100', '2023-05-11 09:32:20', '2023-05-11 09:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `qrcodes`
--

CREATE TABLE `qrcodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qrcodes`
--

INSERT INTO `qrcodes` (`id`, `card_id`, `type`, `number`, `code`, `created_at`, `updated_at`) VALUES
(2, 3, 'GPay', '88745932106', '1671619263.jpg', '2022-12-21 05:11:03', '2022-12-21 05:11:03'),
(3, 24, 'google', '987456410', '1671786824.jpg', '2022-12-23 03:43:44', '2022-12-23 03:43:44'),
(4, 24, 'Paytm', '987456410', '1671786889.jpg', '2022-12-23 03:44:49', '2022-12-23 03:44:49'),
(5, 28, 'Paytm', '9876543210', '1671792542.jpg', '2022-12-23 05:19:02', '2022-12-23 05:19:02'),
(6, 28, 'Gpay', '8849683644', '1671792607.jpg', '2022-12-23 05:20:07', '2022-12-23 05:20:07'),
(7, 34, 'Paytm', '8547321690', '1672403765.jpg', '2022-12-30 18:36:05', '2022-12-30 18:36:05'),
(16, 75, 'jdjsjakak', 'hsjskajsk', '1674582253.png', '2023-01-24 23:44:13', '2023-01-24 23:44:13'),
(18, 84, 'chatgpt', '35yfdw22ch', '1674656984.jpg', '2023-01-25 20:29:44', '2023-01-25 20:29:44'),
(23, 94, 'jnhgg', '5993809008', '1675073842.jpg', '2023-01-30 04:47:22', '2023-01-30 04:47:22'),
(25, 145, 'Google Pay', '9909184418', '1675763037.jpg', '2023-02-07 04:13:58', '2023-02-07 04:13:58'),
(26, 3, 'Paytm', '8849683644', '1678789645.jpg', '2023-03-14 10:27:25', '2023-03-14 10:27:25'),
(27, 211, 'Google pay', '9909004025', '1696935135.jpg', '2023-10-10 15:52:15', '2023-10-10 15:52:15'),
(29, 212, 'GooglePay', '9909004025', '1697004005.jpg', '2023-10-11 11:00:05', '2023-10-11 11:00:05'),
(31, 235, 'test', '8487868595', '1720247915.png', '2024-07-06 06:38:35', '2024-07-06 06:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `razorpays`
--

CREATE TABLE `razorpays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `razorpays`
--

INSERT INTO `razorpays` (`id`, `payment_id`, `user_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'pay_NWKGc4fNakrxmO', 3, '100', '2024-02-03 07:34:32', '2024-02-03 07:34:32'),
(2, 'pay_NWKKgCbsJ1dTgg', 3, '5000', '2024-02-03 07:38:22', '2024-02-03 07:38:22'),
(3, 'pay_NWKROLBbaMwMxf', 3, '5000', '2024-02-03 07:44:42', '2024-02-03 07:44:42'),
(4, 'pay_L7yy1sLqCAHsFE', 3, '999', '2024-02-06 07:11:15', '2024-02-06 07:11:15'),
(5, 'pay_NXaS3OZoDcRN2f', 308, '5000', '2024-02-06 12:03:29', '2024-02-06 12:03:29'),
(6, 'pay_NXaWjcvOozSwoj', 308, '5000', '2024-02-06 12:07:55', '2024-02-06 12:07:55'),
(7, 'pay_NXsPeNyZkDnvBQ', 3, '5000', '2024-02-07 05:37:43', '2024-02-07 05:37:43'),
(8, 'pay_Nd0vtwTXB6Xp2S', 309, '5000', '2024-02-20 05:12:37', '2024-02-20 05:12:37'),
(9, 'pay_Nd0yTibgmux811', 309, '5000', '2024-02-20 05:15:00', '2024-02-20 05:15:00'),
(10, 'pay_Nd1aIDfiuW93kn', 271, '50', '2024-02-20 05:50:49', '2024-02-20 05:50:49'),
(11, 'pay_Nd1clInDPtlca5', 271, '50', '2024-02-20 05:53:10', '2024-02-20 05:53:10'),
(12, 'pay_Nd1euXLQfYOboT', 271, '50', '2024-02-20 05:55:11', '2024-02-20 05:55:11'),
(13, 'pay_Nd1gm9xQAgrNf6', 271, '50', '2024-02-20 05:56:57', '2024-02-20 05:56:57'),
(14, 'pay_Nd1j3SRU8MXeHA', 271, '50', '2024-02-20 05:59:06', '2024-02-20 05:59:06'),
(15, 'pay_Nd1jtvTZ64BDQD', 271, '50', '2024-02-20 05:59:58', '2024-02-20 05:59:58'),
(16, 'pay_Nd1lpToxfopPwX', 271, '50', '2024-02-20 06:01:45', '2024-02-20 06:01:45'),
(17, 'pay_Nd1oQt5Ak8vlAu', 271, '50', '2024-02-20 06:04:11', '2024-02-20 06:04:11'),
(18, 'pay_Nd1pbIMbTvMVNT', 271, '50', '2024-02-20 06:05:17', '2024-02-20 06:05:17'),
(19, 'pay_Nd1vx6dgK0fEhv', 271, '50', '2024-02-20 06:11:18', '2024-02-20 06:11:18'),
(20, 'pay_Nd1xyohzl0mCTI', 271, '50', '2024-02-20 06:13:14', '2024-02-20 06:13:14'),
(21, 'pay_Nd2BM5gXl4Gzlg', 271, '50', '2024-02-20 06:25:54', '2024-02-20 06:25:54'),
(22, 'pay_Nd2GMWWUa75Urw', 271, '50', '2024-02-20 06:30:38', '2024-02-20 06:30:38'),
(23, 'pay_Nd2MGnvDFnAzbt', 271, '50', '2024-02-20 06:36:14', '2024-02-20 06:36:14'),
(24, 'pay_Nd2PmG7jyRJbvq', 271, '50', '2024-02-20 06:39:34', '2024-02-20 06:39:34'),
(25, 'pay_Nd2x2Y7ZKoRa20', 271, '50', '2024-02-20 07:11:07', '2024-02-20 07:11:07'),
(26, 'pay_Nd2yj70nvzvZ3t', 271, '50', '2024-02-20 07:12:39', '2024-02-20 07:12:39'),
(27, 'pay_Nd30IODImqmVKB', 271, '50', '2024-02-20 07:14:08', '2024-02-20 07:14:08'),
(28, 'pay_Nd35qsMXaAe0bM', 271, '50', '2024-02-20 07:19:23', '2024-02-20 07:19:23'),
(29, 'pay_Nd36xSmavkLz86', 271, '50', '2024-02-20 07:20:25', '2024-02-20 07:20:25'),
(30, 'pay_Nd3DLi3y8HPbFz', 271, '50', '2024-02-20 07:26:29', '2024-02-20 07:26:29'),
(31, 'pay_Nd3EvQLyhs8Jt8', 271, '50', '2024-02-20 07:27:57', '2024-02-20 07:27:57'),
(32, 'pay_Nd3GW4KixDol1g', 271, '50', '2024-02-20 07:29:29', '2024-02-20 07:29:29'),
(33, 'pay_Nd3Hiwfk4jRrzs', 271, '50', '2024-02-20 07:30:37', '2024-02-20 07:30:37'),
(34, 'pay_Nd3J8XEG7CkMs9', 271, '50', '2024-02-20 07:31:58', '2024-02-20 07:31:58'),
(35, 'pay_Nd3KGkl7cEwYHW', 271, '50', '2024-02-20 07:33:01', '2024-02-20 07:33:01'),
(36, 'pay_Nd3wMtQJtyHCzo', 271, '50', '2024-02-20 08:09:06', '2024-02-20 08:09:06'),
(37, 'pay_Nd4FxEwb19pWy2', 271, '50', '2024-02-20 08:27:38', '2024-02-20 08:27:38'),
(38, 'pay_Nd4HdahM8Gs59F', 271, '50', '2024-02-20 08:29:15', '2024-02-20 08:29:15'),
(39, 'pay_Nd4JKkYN0pJvzL', 271, '50', '2024-02-20 08:30:49', '2024-02-20 08:30:49'),
(40, 'pay_Nd4LAZwLiL0Ns8', 271, '50', '2024-02-20 08:32:35', '2024-02-20 08:32:35'),
(41, 'pay_NdQ7M9iLT5HPiX', 3, '50', '2024-02-21 05:50:51', '2024-02-21 05:50:51'),
(42, 'pay_NdQBDc2kEvtgs8', 3, '50', '2024-02-21 05:54:28', '2024-02-21 05:54:28'),
(43, 'pay_NdQDVuO0djjryj', 3, '50', '2024-02-21 05:56:46', '2024-02-21 05:56:46'),
(44, 'pay_NdQGizWyVvEvvo', 3, '50', '2024-02-21 05:59:44', '2024-02-21 05:59:44'),
(45, 'pay_NdQI3zJHuuPTQB', 3, '50', '2024-02-21 06:00:54', '2024-02-21 06:00:54'),
(46, 'pay_NdQQBHcevl849T', 3, '50', '2024-02-21 06:08:37', '2024-02-21 06:08:37'),
(47, 'pay_NdQS3aRICM7Jya', 3, '50', '2024-02-21 06:10:28', '2024-02-21 06:10:28'),
(48, 'pay_NdQTWKJuVrSxsQ', 3, '50', '2024-02-21 06:11:48', '2024-02-21 06:11:48'),
(49, 'pay_NdQUidiHoLf1To', 3, '50', '2024-02-21 06:12:55', '2024-02-21 06:12:55'),
(50, 'pay_NdRIpwlzhvwc7v', 3, '50', '2024-02-21 07:00:21', '2024-02-21 07:00:21'),
(51, 'pay_NdRLN9FqLflfcQ', 3, '50', '2024-02-21 07:02:47', '2024-02-21 07:02:47'),
(52, 'pay_NdoJjLkRhJoKLl', 3, '50', '2024-02-22 05:31:10', '2024-02-22 05:31:10'),
(54, '135432138', 3, '80', '2024-02-23 10:04:38', '2024-02-23 10:04:38'),
(55, '135432138', 3, '80', '2024-02-23 10:12:18', '2024-02-23 10:12:18'),
(56, '135432138', 3, '80', '2024-02-23 10:38:02', '2024-02-23 10:38:02'),
(57, 'pay_Nh0kO28zNp90Z7', 3, '50', '2024-03-01 07:37:59', '2024-03-01 07:37:59'),
(58, 'pay_Nh0mXi4sdW76DW', 3, '50', '2024-03-01 07:40:00', '2024-03-01 07:40:00'),
(59, '135432138', 3, '80', '2024-03-07 10:20:20', '2024-03-07 10:20:20'),
(60, 'pay_OFpNWVDwSf9ALJ', 311, '5000', '2024-05-28 07:15:26', '2024-05-28 07:15:26'),
(61, 'pay_OMYfsv0atkaHLt', 3, '50', '2024-06-14 07:28:02', '2024-06-14 07:28:02'),
(62, 'pay_OO6XAynpDhal2e', 324, '5000', '2024-06-18 05:14:21', '2024-06-18 05:14:21'),
(63, 'pay_OO6e184sbkqe8H', 323, '5000', '2024-06-18 05:20:49', '2024-06-18 05:20:49'),
(64, 'pay_OXHFTBp9g6Jzva', 338, '5000', '2024-07-11 09:34:15', '2024-07-11 09:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2022-12-05 23:50:26', '2022-12-05 23:50:26'),
(2, 'User', 'web', '2022-12-19 00:35:02', '2022-12-19 00:35:02'),
(5, 'Writer', 'web', '2023-03-30 10:09:48', '2023-03-30 10:09:48'),
(6, 'Designer', 'web', '2023-03-31 05:22:05', '2023-03-31 05:22:05'),
(7, 'Brand', 'web', '2023-06-23 14:24:24', '2023-06-23 14:24:24'),
(8, 'Influencer', 'web', '2023-06-23 14:24:41', '2023-06-23 14:24:41'),
(9, 'Reseller', 'web', '2023-08-18 10:32:54', '2023-08-18 10:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 5),
(1, 6),
(2, 1),
(2, 2),
(2, 5),
(2, 6),
(2, 9),
(3, 1),
(3, 2),
(3, 5),
(3, 6),
(3, 9),
(4, 1),
(4, 2),
(4, 5),
(4, 6),
(4, 9),
(5, 1),
(5, 2),
(5, 5),
(5, 6),
(6, 1),
(6, 2),
(6, 5),
(6, 6),
(6, 9),
(7, 1),
(7, 2),
(7, 5),
(7, 6),
(7, 9),
(8, 1),
(8, 2),
(8, 5),
(8, 6),
(8, 9),
(9, 1),
(9, 5),
(9, 6),
(9, 9),
(10, 1),
(10, 5),
(10, 6),
(10, 9),
(11, 1),
(11, 5),
(11, 6),
(11, 9),
(12, 1),
(12, 5),
(12, 6),
(12, 9),
(13, 1),
(13, 5),
(13, 6),
(13, 9),
(14, 1),
(14, 5),
(14, 6),
(14, 9),
(15, 1),
(15, 5),
(15, 6),
(15, 7),
(15, 9),
(16, 1),
(16, 5),
(16, 6),
(16, 9),
(17, 1),
(17, 5),
(17, 6),
(17, 9),
(18, 1),
(18, 5),
(18, 6),
(18, 9),
(19, 1),
(19, 5),
(19, 6),
(19, 9),
(20, 1),
(20, 5),
(20, 6),
(20, 9),
(21, 1),
(21, 5),
(21, 6),
(21, 9),
(22, 1),
(22, 5),
(22, 6),
(22, 9),
(23, 1),
(23, 5),
(23, 6),
(23, 9),
(24, 1),
(24, 5),
(24, 6),
(24, 9),
(25, 1),
(25, 5),
(25, 6),
(26, 1),
(26, 5),
(26, 6),
(27, 1),
(27, 5),
(27, 6),
(28, 1),
(28, 5),
(28, 6),
(29, 1),
(29, 5),
(29, 6),
(30, 1),
(30, 5),
(30, 6),
(30, 9),
(31, 1),
(31, 5),
(31, 6),
(31, 9),
(32, 1),
(32, 5),
(32, 6),
(32, 9),
(33, 1),
(33, 5),
(33, 6),
(34, 1),
(34, 5),
(34, 6),
(35, 1),
(35, 5),
(35, 6),
(36, 1),
(36, 5),
(36, 6),
(37, 1),
(37, 5),
(37, 6),
(38, 1),
(38, 5),
(38, 6),
(39, 1),
(39, 5),
(39, 6),
(40, 1),
(40, 5),
(40, 6),
(41, 1),
(41, 5),
(41, 6),
(42, 1),
(42, 5),
(42, 6),
(42, 8),
(43, 1),
(43, 5),
(43, 6),
(44, 1),
(44, 5),
(44, 6),
(45, 1),
(45, 5),
(45, 6),
(46, 1),
(46, 5),
(46, 6),
(47, 1),
(47, 5),
(47, 6),
(48, 1),
(48, 5),
(48, 6),
(49, 1),
(49, 5),
(49, 6);

-- --------------------------------------------------------

--
-- Table structure for table `servicedetails`
--

CREATE TABLE `servicedetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servicedetails`
--

INSERT INTO `servicedetails` (`id`, `card_id`, `title`, `photo`, `description`, `created_at`, `updated_at`) VALUES
(1, 3, 'new', '1678788367.jpg', 'Graphic design is the art of communication, stylizing, and problem-solving through the use of type, space and image.', '2022-12-17 00:26:08', '2023-03-14 10:06:07'),
(2, 3, 'Graphic design', '1678788389.jpg', 'Graphic design is the art of communication, stylizing, and problem-solving through the use of type, space and image.', '2022-12-17 00:44:46', '2023-03-14 10:06:29'),
(4, 6, 'Digital card', '1671785639.jpg', 'fsdfsdff  wefwef e wergfg', '2022-12-23 03:23:59', '2022-12-23 03:23:59'),
(5, 24, 'SDSfasd', '1671785802.jpg', 'fasdfasdf', '2022-12-23 03:26:42', '2022-12-23 03:26:42'),
(6, 24, 'abcde', '1671786716.jpg', 'abcde', '2022-12-23 03:41:56', '2022-12-23 03:41:56'),
(7, 28, 'This is Service', '1671791745.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '2022-12-23 05:05:45', '2022-12-23 05:05:45'),
(10, 35, 'Importer', '1672483065.jpg', 'We are direct importer of designer wash basin', '2022-12-31 16:37:45', '2022-12-31 16:37:45'),
(11, 35, 'Wholesaler', '1672483323.jpg', 'Abcd', '2022-12-31 16:42:03', '2022-12-31 16:42:03'),
(19, 30, 'Website Development', '1673514029.jpg', 'Aspireotech is a well-known website building firm with a staff of experts who have years of experience and solid knowledge in the field.', '2023-01-10 15:01:57', '2023-01-12 15:00:29'),
(20, 30, 'App Development', '1673514050.jpg', 'Leading mobile app development company Aspireotech provides clients all over the world with a variety of mobile app development services. We are specialists in developing innovative hybrid and native app development solutions.', '2023-01-10 15:03:10', '2023-01-12 15:00:50'),
(21, 30, 'E-commerce Development', '1673514083.jpg', 'Online purchasing and selling of goods and services is known as e-commerce. The software programmed used to conduct internet business are known as e-commerce applications.', '2023-01-10 15:06:47', '2023-01-12 15:01:23'),
(29, 75, 'Google', '1674581512.png', 'logo', '2023-01-24 23:29:08', '2023-01-24 23:31:52'),
(33, 82, 'hiring', 'servicedetailimg/1674655512.jpg', 'hiring', '2023-01-25 20:05:12', '2023-01-25 20:05:12'),
(35, 84, 'application', 'servicedetailimg/1674656898.jpg', 'application', '2023-01-25 20:28:18', '2023-01-25 20:28:18'),
(36, 85, 'Immigration services', 'servicedetailimg/1674744594.jpg', 'Study Visa \nwork visa\nTourist visa', '2023-01-26 20:49:54', '2023-01-26 20:49:54'),
(37, 85, 'Immigration services', 'servicedetailimg/1674744639.jpg', 'work visa', '2023-01-26 20:50:39', '2023-01-26 20:50:39'),
(43, 94, 'ghhvhfg', 'servicedetailimg/1675073708.gif', 'ghh', '2023-01-30 04:45:08', '2023-01-30 04:45:15'),
(44, 145, 'Consultancy', 'servicedetailimg/1675762538.jpg', 'Contact for all kind of licence related work', '2023-02-07 04:05:38', '2023-02-07 04:05:38'),
(45, 3, 'my new service', '1678788501.jpg', 'this is new service detail', '2023-02-08 23:32:48', '2023-03-14 10:08:21'),
(48, 3, 'Service', '1678788536.jpg', 'Graphic design is the art of communication, stylizing, and problem-solving through the use of type, space and image.', '2023-02-09 00:12:23', '2023-03-14 10:08:56'),
(51, 211, 'library', '1696934939.jpg', 'books & all materials', '2023-10-10 15:49:00', '2023-10-10 15:49:00'),
(53, 212, 'Library', '1697002262.jpg', 'Books & All Materials', '2023-10-11 10:31:03', '2023-10-11 10:31:03'),
(56, 3, 'Test', '1706510472.png', 'test Image', '2024-01-29 06:41:12', '2024-01-29 06:41:12'),
(57, 232, NULL, NULL, NULL, '2024-06-12 07:02:09', '2024-06-12 07:02:09'),
(58, 235, 'test', '1720247898.png', 'test', '2024-07-06 06:38:18', '2024-07-06 06:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `card_id`, `file`, `created_at`, `updated_at`) VALUES
(6, 203, '1697107197.jpg', '2023-10-12 15:39:57', '2023-10-12 15:39:57'),
(7, 3, '1706510489.png', '2024-01-29 06:41:29', '2024-01-29 06:41:29'),
(8, 235, '1720247925.jpg', '2024-07-06 06:38:45', '2024-07-06 06:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptiondetails`
--

CREATE TABLE `subscriptiondetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `packageId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptionpackages`
--

CREATE TABLE `subscriptionpackages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subscriptionType` varchar(255) NOT NULL,
  `priceType` varchar(255) NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `details` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptionpackages`
--

INSERT INTO `subscriptionpackages` (`id`, `title`, `subscriptionType`, `priceType`, `price`, `discount`, `details`, `created_at`, `updated_at`) VALUES
(4, 'FREE', 'Free', 'FREE', NULL, NULL, '- Total 5 Images Download Per Day', '2023-01-23 12:24:54', '2023-01-23 12:24:54'),
(7, 'package', 'Monthly', 'Paid', '199', '20%', 'next 5 days free', '2023-11-07 10:49:36', '2023-11-07 10:49:36'),
(8, 'SILVER', 'Yearly', 'Paid', '5000', '0', 'Details not available', '2023-11-23 11:39:46', '2023-12-23 12:00:10');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `accountId` int(11) NOT NULL,
  `subscriptionPackageId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `accountId`, `subscriptionPackageId`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2022-12-14 06:30:10', '2022-12-14 06:30:10'),
(2, 2, 1, '2022-12-14 06:58:31', '2022-12-14 06:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `session` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `pin` varchar(255) NOT NULL DEFAULT '123456',
  `mobileno` varchar(255) DEFAULT NULL,
  `profilePhoto` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT 'Gujarat',
  `city` varchar(255) DEFAULT NULL,
  `about` longtext DEFAULT NULL,
  `package` varchar(255) NOT NULL,
  `validity` date DEFAULT NULL,
  `captcha` varchar(255) DEFAULT NULL,
  `refer` varchar(255) DEFAULT NULL,
  `myrefer` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `deviceToken` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `session`, `username`, `email`, `email_verified_at`, `password`, `pin`, `mobileno`, `profilePhoto`, `state`, `city`, `about`, `package`, `validity`, `captcha`, `refer`, `myrefer`, `status`, `deviceToken`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, 'Admin', 'admin@gmail.com', NULL, '$2y$10$m6fYHKnvgrwwX0T95Nqyf.hHA9OwtciC4Hf3dd0033rGe6orXHLQ2$2y$10$ueycsynIzau/Xf2rtwohcOoHgDkArZBxyYjaZKMna3mdSjbABOPOK', '123456', '9687574999', '1680604845.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'Admin1', 'Active', NULL, 'X04nGzmhLBPCHYsmwYFxTRBI3GfzbrhGG2ZRuYVUMDUZwqOzdJ0r1RGXkqar', '2022-12-05 23:50:26', '2023-10-30 14:26:32'),
(2, 'Madhvi', NULL, 'Madhvi', 'madhvi@gmail.com', NULL, '$2y$10$y1POm7XnkaAnKcdGqy2LD.BbFmWYK0kCzjgbuDFLdgrIEmIOxdpRu', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'Madhvi2', 'Active', NULL, NULL, '2022-12-05 23:56:53', '2023-02-20 00:13:48'),
(3, 'Rudrika Dave A', 'brand', '-', 'rudrikadave20226@gmail.com', NULL, '$2y$10$9WkcuLetH2oo/k0hiHjuKO.UmbffAHbEFq.iedC3hemZwJ0Y5bmAO', '123456', '8849683644', '1717065360.webp', NULL, '-', '-', 'SILVER', '2041-02-01', NULL, NULL, '-3', 'Active', '16843213843384635484', 'GNSnjKBkP4vjTcooSRylRyVglbrw3bFpD0Kb69rQ8dJNlCGmz25cLvNOiivv', '2022-12-06 00:47:00', '2024-08-01 10:34:27'),
(4, 'Ramesh', NULL, 'Ramesh', 'ramesh@gmail.com', NULL, '$2y$10$W4LsnqI6.ndMGmRGLG/OOug6oC3wKJyztuf0A8eb.AbmpLHQoa9C6', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2022-12-15 03:41:37', '2022-12-19 00:36:56'),
(5, 'Gaurav', NULL, 'Gaurav', 'gaurav@gmail.com', NULL, '$2y$10$2J2fWP6gcmL9Y7PNQ0c.1O5qG3M/9rIERYlzCLIgFYT01dOAqRjFe', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2022-12-15 03:55:55', '2022-12-19 00:36:46'),
(6, 'Rajiv', NULL, 'Rajiv', 'rajiv@gmail.com', NULL, '$2y$10$GmbwIEEq1LfYCovMyNwUzOL4Fv8KeY7mep4h9LzwYFDqe4KPa9FMS', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2022-12-15 03:58:35', '2022-12-19 00:36:37'),
(7, 'Raviraj', NULL, 'Raviraj', 'ravirajsinh.m.gohil@gmail.com', NULL, '$2y$10$2iG8cOeKucVpcc62mT2DvOto2KzCOaafe/NHMenLvNC.F06cuseNy', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'SILVER', '2024-02-01', NULL, NULL, 'Raviraj7', 'Active', NULL, NULL, '2022-12-15 04:41:59', '2023-10-26 14:03:24'),
(19, 'Hemal', NULL, 'Hemal', 'hemal@gmail.com', NULL, '$2y$10$jUp9NMYQToFLcLw8G429Lu4/dh2kOYjrQDvamVm8c.zVroLlH3NaS', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2022-12-15 06:25:50', '2022-12-19 00:35:47'),
(21, 'Bhavin', NULL, 'Bhavin', 'bhavin@gmail.com', NULL, '$2y$10$I4S7nwoTVUI68sR4D0cSj.moJX3HSLrv9aw5v2KoflwfHXUpiWcpO', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2022-12-19 00:51:04', '2022-12-19 00:51:04'),
(22, 'Aakash', NULL, 'Aakash', 'aakash@gmail.com', NULL, '$2y$10$KLT2H8wVhgd5l0dgZOUuZOtuFv9q8rOQ8Ir1ZJGZVzlW8axBkEaoy', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2022-12-19 00:54:42', '2022-12-19 00:54:42'),
(23, 'Ami', NULL, 'Ami', 'ami@gmail.com', NULL, '$2y$10$upjwKonuKQTjKysMzn7tq.lGKM9p9KBIRm27MGpLzvkiqbxI6p9Im', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2022-12-19 01:07:32', '2022-12-19 01:07:32'),
(24, 'Pranali', NULL, 'Pranali', 'pranali@gmail.com', NULL, '$2y$10$k3ImQFURcQD8ZtTGtyWRJup6uxF6yInyjxyiZryIsY1IQWgnLlKoa', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2022-12-20 05:54:43', '2022-12-20 05:54:43'),
(25, 'M', NULL, 'M', 'm@gmail.com', NULL, '$2y$10$So1Nt8K/AKYqL6SiobvLC.enzvUDJxAwwmFHDrMgRgulewSLwdm1e', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2022-12-20 06:33:58', '2022-12-20 06:33:58'),
(26, 'Jinal', NULL, 'Jinal', 'Jinal@gmail.com', NULL, '$2y$10$0UKaFk/9kM2pf1W1gd/kGuqeUs7A2W/ctzUI/BaG7hKjtCl1pqxVe', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2022-12-21 00:24:33', '2022-12-21 00:24:33'),
(27, 'Binal', NULL, 'Binal', 'binal@gmail.com', NULL, '$2y$10$8OZwXsg31z5XQQpk7oroPOsVT0.30kVS0X7.ZJI2O3FHhKKPLtQLe', '123456', '9876543210', 'istockphoto-1208175274-612x612.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2022-12-21 00:40:35', '2022-12-21 00:40:35'),
(28, 'Rinal', NULL, 'Rinal', 'rinal@gmail.com', NULL, '$2y$10$yCs9rgX72D5ANkirpDNbj.5uvYYsKPd0D2ok1qR6vWfWO1MZ/aiWu', '123456', '9854760213', '1671603268.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'Rinal28', 'Active', NULL, NULL, '2022-12-21 00:44:28', '2023-04-04 06:47:57'),
(29, 'user', NULL, 'user', 'user@gmail.com', NULL, '$2y$10$f4AaAc4669G3XvdDpVuD1OrWnfKjstf5CadKC4XoRXL9sWxSYAlny', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2022-12-22 23:51:42', '2022-12-22 23:51:42'),
(31, 'Kashyap', NULL, 'Kashyap', 'kashyap@gmail.com', NULL, '$2y$10$p5P.7mDr7VbP6ZrcIOqat.HKdbOP.mWVXUqvitNLW.GBUXfFlVP4i', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2022-12-23 01:47:33', '2022-12-23 01:47:33'),
(32, 'raviraj', NULL, 'raviraj', 'raviraj@gmail.com', NULL, '$2y$10$h2.4wTPyNOkpT9zX3.C.6OJJTswNz403qhWZSqCsfCIKZDPNeNVYS', '123456', '4567', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2022-12-23 04:00:49', '2022-12-23 04:00:49'),
(33, 'Jigar', NULL, 'Jigar', 'parmarjigardhirajlal@gmail.com', NULL, '$2y$10$UWmZX4SEzjbWwVQOFKbB2.z7QSDlHTc0rzgs6l1ypoxXt..FA8frm', '123456', '9999998888', '1671799915.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'Jigar33', 'Active', NULL, NULL, '2022-12-23 06:47:38', '2023-03-24 05:30:41'),
(34, 'jaydeep', NULL, 'aspireotech', 'jaydeep.parekh@gmail.com', NULL, '$2y$10$w0T304TS1K/5JJZpRmhUV.VOpilXaWo6t.Tuzq5/VrHvbVQfEiY7C', '123456', '+919979411148', '1671858037.jpg', 'Gujarat', NULL, NULL, 'SILVER', NULL, NULL, NULL, 'aspireotech34', 'Active', NULL, NULL, '2022-12-23 22:01:14', '2023-05-18 18:07:39'),
(35, 'Jay Panchal', NULL, 'Jay Panchal', 'jayaspireotech@gmail.com', NULL, '$2y$10$0vJCL.x7x9PgVvaCJWeHsO8zOPPkL6Z86o05Sv86JqhEDb1b60XG.', '123456', NULL, '1672753926.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2022-12-27 16:13:42', '2023-01-03 19:52:06'),
(36, 'Radhika Bhavsar', NULL, 'Malvik Bhavsar', 'radhika.aspireotech@gmail.com', NULL, '$2y$10$eHJoqd58.e7a0DHLE3V7m.Zg7KpGdIb0I.53ebFo7UnqbqaQzUoOe', '123456', NULL, '1672136555.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2022-12-27 16:19:38', '2023-01-21 16:25:12'),
(37, 'yash gohil', NULL, 'Yash Gohil', 'yash.aspireotech@gmail.com', NULL, '$2y$10$1OzznT/SyDkrVkWrWFwiMuZTnx/Cgy72RyBmFWnIMd2PeY5ld6aUK', '123456', NULL, '1674289599.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2022-12-27 16:54:00', '2023-01-21 16:34:51'),
(38, 'Bhumi Patel', NULL, 'Bhumi Patel', 'bhumi@gmail.com', NULL, '$2y$10$qt3r3qacNCbLp5.0Gs0Mle9cpeuH/04TTwC96ciIc8a44SuXJOgrm', '123456', NULL, '1672403293.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2022-12-30 18:23:58', '2022-12-30 18:28:13'),
(39, 'Jay Patel', NULL, 'tapandtile', 'jaybhut007@gmail.com', NULL, '$2y$10$k0puSq9vY63a/x1.6rIp8enFxVcgAAuGr5ZwgjxkabwHuMXiRPoTy', '123456', '9033699459', '1675138423.jpg', 'Gujarat', NULL, NULL, 'SILVER', NULL, NULL, NULL, 'tapandtile39', 'Active', NULL, NULL, '2022-12-31 16:30:57', '2023-02-17 22:11:18'),
(40, 'Manav', NULL, 'Manav', 'manav1@gmail.com', NULL, '$2y$10$bSgzwx3plIzXVJkZAzy/Xevo6uOvEXAxaavgFQBAm.YfBLvVOn9du', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-02 17:29:52', '2023-01-02 17:29:52'),
(41, 'Reena Bhatt', NULL, 'Reena Bhatt', 'rinavbhatt@gmail.com', NULL, '$2y$10$f2nG8tqFmklBE0rHS0bhS.cHNMCjWcpHKABqDznm/E0sb0Vur/l62', '123456', NULL, '1674281577.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'ReenaBhatt41', 'Active', NULL, NULL, '2023-01-03 19:50:13', '2023-02-11 22:37:34'),
(42, 'Jay', NULL, 'Jay', 'shah_jayu98@yahoo.in', NULL, '$2y$10$l31rp.CF6fjwkp2m.yitEOyBR40ODTAyXCAEQ/RxVQ3nezo2DO7wi', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-09 11:57:04', '2023-01-09 11:57:04'),
(43, 'Perfetto solutions', NULL, 'Perfetto solutions', 'perfettosolutions.snr@gmail.com', NULL, '$2y$10$Lm1PbrKLkhy4H2nDLUru9eSUNEOlyo5QzLeHmGJNEDg0lWbkdcFDm', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-11 19:10:43', '2023-01-11 19:10:43'),
(48, 'Javed', NULL, 'Javed', 'javed@gmail.com', NULL, '$2y$10$04Ap1s3Z5JfpWJzPiAK0GObZApHOvG7IAHLfhFlPHQBr/LxoVvDBq', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-13 17:52:57', '2023-01-13 17:52:57'),
(55, 'prahalad', NULL, 'prahalad1', 'prahaladmankoliya@gmail.com', NULL, '$2y$10$jROfL.ERZGgpGlYx6T3CnOn4arPCIpYECNtF/Jbf2GXen11fLKh5q', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-13 18:51:10', '2023-01-13 18:51:10'),
(61, 'JayPanchal', NULL, 'JayPanchal', 'jaypanchal3656@gmail.com', NULL, '$2y$10$S2D4Y14P9aVmqkTHwsh9cOQnRvkxotvLTI/D5kMEjxB7XfRO3VCna', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-18 17:47:19', '2023-01-18 17:47:19'),
(87, 'radhika', NULL, 'bhavsar', 'radhika.bhavsar87@gmail.com', NULL, '$2y$10$k443e6a6oeuKwTGbSXVUc.cTYidzsX0rk9NFoyQtReCIkRnpwAvsC', '123456', '9574747226', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'bhavsar87', 'Active', NULL, NULL, '2023-01-19 17:55:13', '2023-02-17 06:31:47'),
(95, 'Priti', NULL, 'priti', 'priti@gmail.com', NULL, '$2y$10$yGISmfsjD1kX.ydYt3MOGOGaE0a9ne33E/bu/zyQF9RUsqRKGgKIa', '123456', NULL, '1674298958.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, 'enhfa', NULL, NULL, 'Active', NULL, NULL, '2023-01-21 17:01:03', '2023-01-21 17:02:38'),
(98, 'shirisha', NULL, 'shirishanesa', 'banglorewaveb@gmail.com', NULL, '$2y$10$klL27sxoJFjzsvcL9gbBA.hFickcuNmxU4aW5hsIg8LdwAXaquXxq', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-24 13:08:57', '2023-01-24 13:08:57'),
(99, 'Rakesh', NULL, 'RK', 'rockyrisky2244@gmail.com', NULL, '$2y$10$gNLnJ3RLRRbryDXWGm9OlOn8nQPcuqTCLN3OYWoUGmLp8g5Axy/dC', '123456', '7984448383', '1674659149.jpg', 'Gujarat', NULL, NULL, 'SILVER', '2024-02-01', NULL, NULL, 'RK99', 'Active', NULL, NULL, '2023-01-24 14:45:31', '2023-02-24 01:23:15'),
(100, 'kashyap Trivedi', NULL, 'kashyp7', 'kashyaptrivedi2233@gmail.com', NULL, '$2y$10$lo0r32o9uKh0beduRCGRguisqP44uLLaOtBxQKjUa3g2R7gMpa60K', '123456', '.9.**.*+N+N,*;N,*,N;N;*;*;', '1674620740.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-24 14:51:41', '2023-01-25 20:12:09'),
(102, 'priti', NULL, 'Priti Shukla', 'shuklapriti1577@gmail.com', NULL, '$2y$10$OJNVLUXFXU9wJf/qCWYcWOn8eHr/syLmulJUe7jfuGvS9Yp3CW6D.', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-24 15:14:22', '2023-01-26 13:27:34'),
(104, 'chirag', NULL, 'cvparmar.it', 'cvparmar.it@gmail.com', NULL, '$2y$10$guNy2icdZNpyUKNs5q2XAOzU2E9mIXec7/p/UJ4D9j4FKiVXNCOty', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'cvparmar.it104', 'Active', NULL, NULL, '2023-01-24 18:47:26', '2023-02-11 09:10:53'),
(107, 'all season', NULL, 'all season', 'allseason7773@gmail.com', NULL, '$2y$10$AHJ0aS8Vu7NTn8ukrEFdNupyXI4Cvo8ufZ1trt7BjU7WrOhZlOATK', '123456', '+91 81288 72056', '1675168637.png', 'Gujarat', NULL, NULL, 'SILVER', '2024-02-02', NULL, NULL, 'allseason107', 'Active', NULL, NULL, '2023-01-24 23:27:12', '2023-02-10 07:51:33'),
(108, 'mudrankan', NULL, 'Mudrankan', 'jay161598@gmail.com', NULL, '$2y$10$.UpEU6/uyt2AThCIzdkMeOlwso0x2HqQdzEqP6ZtcpV8k/ql76PoW', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-25 12:06:43', '2023-01-25 12:06:43'),
(109, 'kashyapTrivedi', NULL, 'kashyap77', 'kashyaptrivedi1111@gmail.com', NULL, '$2y$10$9QDPdvInvh/vJRQhXH0mKughUNQXtjZL1152fCfg9TAwWNOkxeAEK', '123456', '8347585220', '1675279520.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, 'unfth', NULL, 'kashyap77109', 'Active', NULL, NULL, '2023-01-25 12:58:16', '2023-02-11 00:32:51'),
(110, 'gopal', NULL, 'patel', 'gopalgp.92.gp@gmail.com', NULL, '$2y$10$RFen1jaTzNv0Nyy.ChED7u0RDCkJX3VskwRb60WNPmttVCWL9KaUK', '123456', NULL, '1674648063.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-25 15:00:31', '2023-01-25 18:01:03'),
(111, 'Digital Electronics', NULL, 'Digital Electronics', 'bisk.pratik46@gmail.com', NULL, '$2y$10$kAKcFy4EckZ1cxgCyC4C9erP0eqUcmk3BMx08nWifYSFvnALzFHoS', '123456', '8469501504', '1674710470.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-25 18:34:30', '2023-01-26 11:21:10'),
(112, 'Dhruvi', NULL, 'dhruvi', 'dhruvibhagat94@gmail.com', NULL, '$2y$10$Lr.G6akR4wU64hyU2ggcROzwaPM8b8HyWu3fTmK9vFfLO10AVAjDW', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-25 19:14:27', '2023-02-01 04:16:24'),
(113, 'manish', NULL, 'manishbarai', 'manishbarai@gmail.com', NULL, '$2y$10$854R8fD2PXZjWFZEq/Ndn.opX/jW.gb6EH/8PWbTcGapPaY405leG', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-25 19:56:58', '2023-01-25 19:56:58'),
(114, 'jigar', NULL, 'shiv computers', 'shivcomputer.snr@gmail.com', NULL, '$2y$10$sfsZfWE5fg2k8CeK7F9EF.DzT/Q.tY8vM.MMnbnQpbB9bT8xINWk.', '123456', NULL, '1674656609.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'shivcomputers114', 'Active', NULL, NULL, '2023-01-25 20:13:27', '2023-02-12 23:40:11'),
(115, 'abc', NULL, 'xyz', 'abcxyztotest@gmail.com', NULL, '$2y$10$QEDOxkWxPLsuQ/cPupPn1.BEUrbosDyVAyp/YDtW3QA3mpY/QXFWa', '123456', '25697444555', '1674657155.png', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-25 20:21:47', '2023-01-25 20:33:25'),
(116, 'Gca', NULL, 'GCA@2021', 'infogca7@gmail.com', NULL, '$2y$10$1lmS/89DD8q9M/18PoGtpeiYtuoI0oMx/iRXJ8MWW1/gx7Gu3RK5a', '123456', '9414193330', '1674719705.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'GCA@2021116', 'Active', NULL, NULL, '2023-01-25 23:55:41', '2023-02-12 02:37:12'),
(117, 'Alpesh Mistry', NULL, 'Alpesh Mistry', 'alpeshmistry034@gmail.com', NULL, '$2y$10$1G0ZFeY2LFMo7zcUy7V55.zaCGm7kAI.zofnkOFqBEUZfHWDxXlbS', '123456', '9825851499', '1674672276.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-26 00:30:50', '2023-01-26 00:49:18'),
(118, 'Unnati', NULL, 'Unnati Shah', 'unnatishah174@gmail.com', NULL, '$2y$10$78ccHqrY5eAuCp2qHVWWJu1EjZYP1BJ8JrMIIBJS5y0I6v0yUyk56', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-26 08:55:23', '2023-01-26 08:55:23'),
(119, 'rakesh', NULL, 'sjcjfjfjf', 'rakesh123@gmail.com', NULL, '$2y$10$DL1yDWqgj4weNdVXpTi.Z.Vk0c3I3688CDnBV0aJ1EqG2zN6WKfra', '123456', '122222222222222222222222222', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-26 11:01:57', '2023-01-26 11:03:00'),
(120, 'bassino', NULL, 'bassino', 'mandaviya.jay1454@gmail.com', NULL, '$2y$10$UyS9MXWFUp1zFbSxR7RQyeAA/piIIv2JKUvUEp7xkLHMSIEQJnNOm', '123456', '9638697661', '1676703387.png', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'bassino120', 'Active', NULL, NULL, '2023-01-26 12:05:55', '2023-02-18 01:26:27'),
(121, 'Nihar', NULL, 'Nihar', 'acharyanihar@gmail.com', NULL, '$2y$10$IJLvBx4L9P25XvzeiKXRwuJKH9ZvNV57ozh054kjiaCfQrq/qdJVi', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-26 12:21:44', '2023-01-26 12:21:44'),
(122, 'John', NULL, 'johnsmith', 'boracay.gpt12021@gmail.com', NULL, '$2y$10$MD9R/iXN3qSM4a/Mh96iy.pyPB9/kR1t8lb43QlSAnITfTSfyfBnq', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-26 16:16:37', '2023-01-26 16:16:37'),
(123, 'Rocky', NULL, 'pappu', 'rakesh@gmail.vom', NULL, '$2y$10$ESxd1Akoz2l5bNIxz3rWkedxBL6YVrdZxX5kRsSkLO.nPZOJ2ypge', '123456', '6968896899', '1674734332.png', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-26 17:30:31', '2023-01-26 17:58:52'),
(124, 'Nitin Prajapati', NULL, 'Nitin Prajapati', 'nitinkoshiya26@gmail.com', NULL, '$2y$10$OaXAUdjnTDF6AKTLbEUOO.DO7OkZ0tPdw3tVP7P3Kol2X/1DhyOky', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-27 14:25:01', '2023-02-08 03:32:23'),
(125, 'Pappu', NULL, 'Kaliya', 'pappu@gmail.com', NULL, '$2y$10$/kPlwFLuJp6BWmu2nm9gRO5BKHmeyjfOJgjyCYNpVw5kAJLAG8hKm', '123456', NULL, '1675073690.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-27 15:49:48', '2023-01-30 04:48:14'),
(126, 'Devang Soni', NULL, 'soni_devang', 'soni.devang0007@gmail.com', NULL, '$2y$10$80xi4JQxM7rSU6siduMUfOxiDeF1ebdfUuq8MMZnoiRQYG1DohEN6', '123456', NULL, '1674826196.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-27 18:20:32', '2023-01-27 19:29:56'),
(127, 'sailu mehta', NULL, 'sailu26', 'Sailumehta26@gmail.com', NULL, '$2y$10$ApXqhzBUqNUTtxGcgo91ZunzWm5BuFsuv6.5/qDn5Kayhd7upuUti', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-27 18:22:25', '2023-01-27 18:22:25'),
(128, 'Salvi Yash', NULL, 'sparksyash', 'sparksvishva12@gmail.com', NULL, '$2y$10$4Te47u9uBW8G/BsYOFqOwOQHWCDy7f3fVfEK3vP3vB8I465LKU.rK', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-27 19:30:19', '2023-01-27 19:30:19'),
(129, 'Parth V. Patel', NULL, 'waggish2211', 'parthpatel93715@gmail.com', NULL, '$2y$10$wmVAxbXxPluRZrRjJIdkQOapY9gXpGuVERzcvRa7nnfxHIa9oZJj2', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'waggish2211129', 'Active', NULL, NULL, '2023-01-29 01:02:53', '2023-02-16 11:01:09'),
(130, 'parth', NULL, 'parth', 'parth@gmail.com', NULL, '$2y$10$ezoGvwSjlfrM/.RCTea1cujw/CApph/.TtYKGyuKAlxo8r7IhIRcu', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-29 09:08:15', '2023-01-29 09:08:15'),
(131, 'Mona', NULL, 'Bassino India', 'mona.kadivar91@gmail.com', NULL, '$2y$10$Z95hyK0oDn7A8Xhx.UDRnOi36GyPUoiWiKqzmA03bPUBaYaLzISvW', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-29 12:30:36', '2023-01-29 12:30:36'),
(132, 'mnp', NULL, 'netdev', 'netdevenv@gmail.com', NULL, '$2y$10$0.GwcxsiUxNnBN5/zFYkqumKysaGYPnJJbop66H6ct9JCGdsQuOGW', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-29 18:36:47', '2023-01-29 18:36:47'),
(133, 'Vipul', NULL, 'vipul', 'vipsol@rediffmail.com', NULL, '$2y$10$pD9ME9tva/lMsOUTIP7vGOqE2HnyPuG9LzYh6fUS/NdDtDY4zwOkC', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'vipul133', 'Active', NULL, NULL, '2023-01-30 08:34:25', '2023-02-11 01:36:49'),
(134, 'harshil shah', NULL, 'harshilshah20', 'harshilshah1992@gmail.com', NULL, '$2y$10$bpf48zMvggxDK7EEXwVOV.vyWL2L8Tv5d6BpSBrERJtTuykYTQ/xm', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-31 06:49:54', '2023-01-31 06:49:54'),
(135, 'Forrum', NULL, 'Vashi', 'forrum14121993@gmail.com', NULL, '$2y$10$qq4e/mJ4HgpYX4uVmEwCz.6zxBnWMOMN0Y8gfd/MIx/ZuoljobYQG', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-31 07:42:12', '2023-01-31 07:42:12'),
(136, 'rohit', NULL, 'rv410619', 'rv410619@gmail.com', NULL, '$2y$10$GYI2Fl6vfylV/iYo.8hOVO8ltlUKIbGZsWgT.284lxWkxgqOW.IY.', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-31 08:06:16', '2023-01-31 08:06:16'),
(137, 'Ankur', NULL, 'ankurshah', 'ankur9981@gmail.com', NULL, '$2y$10$jjxVc8cR0NH.Ke5DK/Y5e.eFM4Zd7p5U7IL5hCnnVJsHK4XhJsYru', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-31 08:44:39', '2023-01-31 08:44:39'),
(138, 'khushboo', NULL, 'khushboo', 'khushboothakor7773@gmail.com', NULL, '$2y$10$Hl.qbudEr0R1ZTu3YL9khOkevwCF3EX7ITDfh6mAI4ATJd7WQzPQq', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'khushboo138', 'Active', NULL, NULL, '2023-01-31 09:23:37', '2023-02-18 00:16:25'),
(139, 'kushansinh', NULL, 'kushansinh', 'karansinhthakur6@gmail.com', NULL, '$2y$10$67hP1C8/HTkAPCnUekuh.O8hL/97Ci1GQS6UQOHW8NMyXfPt1nSDa', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-31 10:33:35', '2023-01-31 10:33:35'),
(140, 'Devbhai', NULL, 'Devbhai', 'sonidev9783@gmail.com', NULL, '$2y$10$1Ut8LclhSSfDHH2ZeTRTW.Z/bpfWQbhg/7A14KC.teR6AvlDjGSOy', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-31 10:38:33', '2023-01-31 10:38:33'),
(141, 'ashaben', NULL, 'ashaben', 'panchalasha1194@gmail.com', NULL, '$2y$10$0219hAOKeuVagBzqabmeQePIZe7/d.WwqKkMZ5EjN0inxSL0ivL8.', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-31 11:14:49', '2023-01-31 11:14:49'),
(142, 'Divya', NULL, 'Divya', 'divyapanchal2903@gmail.com', NULL, '$2y$10$fxlc70MRyXY7EwARTo7LWO1k8MUu1bEPmP8leWGLX2KqOXMXgV6ci', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-31 11:15:52', '2023-01-31 11:15:52'),
(143, 'sohebkhan', NULL, 'sohebkhan', 'pjay4127@gmail.com', NULL, '$2y$10$NaX1B0BaMgwNzdcwvXwkoO2CAAaB5mjlXZ6MZ17/DTHsp5lgxfkw2', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-31 11:18:12', '2023-01-31 11:18:12'),
(144, 'sahil', NULL, 'sahil', 'ninamasahil85@gmail.com', NULL, '$2y$10$lIwThsLL6w..por2KZKPa.g6t.nQ6.wyA/r32j0K7VgKTguTuDPxG', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-01-31 23:40:17', '2023-01-31 23:40:17'),
(145, 'dhruvi', NULL, 'dhruvi@1234', 'shahdhruvi.design@gmail.com', NULL, '$2y$10$k2TAyQ3m/hSYZ1/d2fYxAeWLddvYItA83HUd29aUVD.9gNXe35dSS', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'dhruvi@1234145', 'Active', NULL, NULL, '2023-02-01 04:17:30', '2023-02-15 04:10:52'),
(146, 'rakesh', NULL, 'rrrsss', 'rakeshaatola@gmail.com', NULL, '$2y$10$AnGk.jCfUuPPNWJ5Rd0rteSSiDcvCWqL2.S3NbMENkNzocQm9k8DC', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-01 07:30:37', '2023-02-01 07:30:37'),
(147, 'Ramm', NULL, 'rammm23534t4', 'rdefddfgsgdf@gmail.com11', NULL, '$2y$10$rDPf8v.0APSl1s3rViLvJOwAVcfkICfoHpe/NMx8umdsmxQwCoivG', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-01 07:32:34', '2023-02-01 07:32:34'),
(148, 'rskdkfnfcj', NULL, 'fjffkfjvnvm', 'xkfgjvkvkk@gmail.com', NULL, '$2y$10$/oJf0.aN2YN1NnpZBHo1K.OrM1IIcIac7YjJB8m6KOdoKSdGCm8p.', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-01 07:34:01', '2023-02-01 07:34:01'),
(149, 'shggcc', NULL, 'chhyrdc', 'rajdjfnffjcign@gmail.com', NULL, '$2y$10$mxqBUjO7X8z/nwfNgmBR1O6l7GbNxQhoWLAjsbFfmXO.IDeeusCXe', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-01 07:35:22', '2023-02-01 07:35:22'),
(150, 'Rakesh', NULL, 'Rkrkrkrk', 'rk@gmail.com', NULL, '$2y$10$D9e/snYn.B925PY21KQoweDKrlx2ceuWBmUvyWvS16IAa9Kpr116e', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'SILVER', '2024-02-01', NULL, NULL, 'Rkrkrkrk150', 'Active', NULL, NULL, '2023-02-01 07:39:44', '2023-02-24 06:07:31'),
(151, 'jainil', NULL, 'jainil99', 'jainil@gmail.com', NULL, '$2y$10$oPunDigfD4.e6NAkii4xi.GgnHXTDv9LuFOEGs5y0LeARbzUA4RdC', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-01 23:40:39', '2023-02-01 23:40:39'),
(152, 'Harsh Maniar', NULL, 'harsh77', 'hsmaniar93@gmail.com', NULL, '$2y$10$GTOqacZwqOKLGkGZtp9ivuXl1g2m7NaXE8EgGPJuW14rJsftTgFBa', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-02 00:16:25', '2023-02-03 02:23:40'),
(153, 'raviraj', NULL, 'raviraj1605', 'raviraj1605@gmail.com', NULL, '$2y$10$VE2bxj4GaKUGYITLr9lPzuD.D0i.Xtd3a1SkkfDC.MuzjBVyscwDe', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'raviraj1605153', 'Active', NULL, NULL, '2023-02-02 01:02:40', '2023-02-10 23:57:36'),
(154, 'pappu', NULL, 'p123456', 'ppp@gmail.com', NULL, '$2y$10$fgcU10qim3tjSReHhzXlEu8DqNYQxLlLp1Wtv4Jz0OwGk6zXwvQHW', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-02 01:08:24', '2023-02-02 01:08:24'),
(155, 'Rakesh satola', NULL, 'Rocky123', 'rakeshsatola31@gmail.com', NULL, '$2y$10$lOgS2ErcyOQTdFahj939YuTeNjrW6E/Iju6fHeqGNIkJhtsEERpPq', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'SILVER', '2024-02-02', NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-02 01:33:26', '2023-02-02 01:38:39'),
(156, 'nilesh', NULL, 'nilesh', 'growbrand22@gmail.com', NULL, '$2y$10$cF/Blkfn8vnUP54AOSatRuITIe2ga1VI.S/2UDCCZPN8/JBqIXoO.', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'SILVER', '2024-02-02', NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-02 03:14:54', '2023-10-31 09:36:15'),
(157, 'Ravirajsinh Gohil', NULL, 'Ravi123', 'ravi@gmail.com', NULL, '$2y$10$GU56d5k/t6vQTHSkGjIdKO4/osZz/eaLh2glysVWwTpd.hVwWSvVS', '123456', '1234567890', '1675328595.jpg', 'Gujarat', NULL, NULL, 'SILVER', '2024-02-02', NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-02 03:18:02', '2023-02-02 03:33:15'),
(158, 'laksh', NULL, 'laksh', 'aspireotechlaksh@gmail.com', NULL, '$2y$10$LwvQEwygB7xuiPTR5ak2BuLGc6.RontnJgTG/Uq/jbS1eDkVGS6UO', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-02 04:10:11', '2023-02-02 04:10:11'),
(159, 'Rakesh', NULL, 'Abcd', 'abcd@gmail.com', NULL, '$2y$10$6jDO005utUP.NH.P/XnMfOQng2oGghkNkhA3wFjpHPICSuD.krjG6', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-02 04:43:29', '2023-02-02 04:43:29'),
(163, 'Yash Gohil', NULL, 'yashgohil', 'yashgohil128@gmail.com', NULL, '$2y$10$oikVAHPyuTlWTuhBnYiI4exKrKumi8mTDnU.WwGkVzFjpItUGbWOC', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'SILVER', '2024-02-02', NULL, NULL, 'yashgohil163', 'Active', NULL, NULL, '2023-02-02 06:19:23', '2023-02-14 01:47:54'),
(164, 'Parin', NULL, 'Parin Bhavsar', 'parin.aspireotech@gmail.com', NULL, '$2y$10$8SqNbF8mO4GAwUqvR1iY9uxv.OQIH4fF36pi1QAD72u9BpVNE6Ctq', '123456', '9574747526', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'ParinBhavsar164', 'Active', NULL, NULL, '2023-02-02 06:23:50', '2023-02-11 03:58:39'),
(165, 'Ekta parekh', NULL, 'ektaparekh', 'Ektaambani@gmail.com', NULL, '$2y$10$WraL8dqNuN1h2im7az3MnORMZcvS4m1/2YAeZOMD7KqHY6HaBrNcm', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'SILVER', '2024-02-03', NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-02 09:07:04', '2023-10-31 09:36:03'),
(166, 'dhanam', NULL, 'maniar', 'dhanammaniar2000@gmail.com', NULL, '$2y$10$9/5M45.t1VEph/hOhA0eY.3emVKVMlL.PPeO0DgL1cIldmvFEPfrq', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'maniar166', 'Active', NULL, NULL, '2023-02-02 11:28:23', '2023-02-11 11:10:28'),
(167, 'inder ojha', NULL, 'inder', 'ojhainder2201@gmail.com', NULL, '$2y$10$2/h4uQPHdxBtNz5RskjukO0Ounw6abhYNCYfjsOy2C9VTt3gnjgGu', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-02 15:14:47', '2023-02-02 15:14:47'),
(168, 'zaman', NULL, 'shah', 'mhassanzaman0905@gmail.com', NULL, '$2y$10$juxk1nxg/HAMNfZvRo9QeOAidI6waVWQ3g3jqCs2EQKDRTZpP9/Oq', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-04 01:48:33', '2023-02-04 01:48:33'),
(169, 'Nayan Makadiya', NULL, 'Nayanmakadiya007', 'Kenxillenterprise2022@gmail.com', NULL, '$2y$10$/YWjtKd/mqtKFLsoMZNbheVmcbuyRk7Zsw5NJ8UOwym.TKY3HXImW', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-04 01:56:50', '2023-02-04 01:56:50'),
(170, 'Kishan Singh', NULL, 'kishan_singh2111', 'kishansinghthakur34411@gmail.com', NULL, '$2y$10$eLhiweWSniNA.UUWapy/He/n.6rTRXuSLjT.VFsjFnt01j3c9Sepy', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-04 02:34:51', '2023-02-04 02:34:51'),
(171, 'Krishna', NULL, 'kuku', 'krishg9170@gmail.com', NULL, '$2y$10$EaT5vtaDGSTLEe1Ziq0NpuSumnCynYwb.UYapNmsdt9IcmGtJjE5.', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-04 20:03:39', '2023-02-04 20:03:39'),
(172, 'jayhind', NULL, 'kumar_55533', 'kji564011@gmail.com', NULL, '$2y$10$YGATsIpldTApL4xDMEZSletfgykajX./8KwhmNipsZidtGmklmMdO', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-05 02:09:29', '2023-02-05 02:09:29'),
(173, 'karan', NULL, 'karan bhavsar', 'parinbhavsar55@gmail.com', NULL, '$2y$10$vh89Eq2tIiPA2732IGjRKe5pPgfIgxZ4NZ6N0GHSXp1y3ZsqeujCe', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-05 02:53:11', '2023-02-05 02:53:11'),
(174, 'Enoke. M. A. B. L', NULL, 'Enoke', 'Enoke107@gmail.xom', NULL, '$2y$10$.FMYgjRCc/bxEBSyQRUWeuaksSUbaamwvll.OXkPdmykqs1G6cB1i', '123456', '8438083586', '1675623601.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-05 13:24:18', '2023-02-05 13:30:01'),
(175, 'Mithilesh Kumar Shah', NULL, 'Mithilesh Kumar Shah', 'shahmithileshkumar9@gmail.com', NULL, '$2y$10$xsTxintqn4AjRn8vpq9DG.ttPlwpYs8hRk8JBJgI/Z2KopMWQ5KCK', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-05 19:08:15', '2023-02-05 19:08:15'),
(176, 'ayushman payasi', NULL, 'ayushman_payasi_', 'ayushmanpayasi@gmail.com', NULL, '$2y$10$q6jY1ceTuoyfBFlVk12z/OsNTNU0Sfo4fl8pY5K3H2m0qAK5URSNq', '123456', '7974222474', '1675670675.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-06 02:33:09', '2023-02-06 02:34:35'),
(177, 'DHANANJAY', NULL, 'dhan_ush2820', 'ojhadhananjay37@gmail.com', NULL, '$2y$10$4fVudPyTCqN9BnruLwNi6.sKJaeZcYBSmZiOQDJsITEhTSo0autR2', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-06 03:11:51', '2023-02-06 03:11:51'),
(178, 'Sudeep', NULL, 'sudeep.xo', 'deysudeep2002@gmail.com', NULL, '$2y$10$V/wS2PPT7dMen2UzBhTqteX/w.swXZEyjUOrJeCMhpyE6F3C1gUCa', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-07 01:14:05', '2023-02-09 01:44:44'),
(179, 'Samir', NULL, 'samer.xo', 'srdey4689@gmail.com', NULL, '$2y$10$d71IgWIek/Dd2Po/jpxfO.JAw5ayIY4KsBotGPqwYPMXfzt/da8Va', '123456', NULL, '1675763486.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'samer.xo179', 'Active', NULL, NULL, '2023-02-07 03:13:05', '2023-02-15 01:07:52'),
(180, 'selva', NULL, 'siva', 'selvasivasingh@gmail.com', NULL, '$2y$10$IW6gjGLnaxn0hBFKCH95cO2H4shoqSGgSM/jNH3TlcUinaJ47mBNq', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-07 05:38:36', '2023-02-07 05:38:36'),
(181, 'Vijay', NULL, 'Vijay', 'vjprksh50@gmail.com', NULL, '$2y$10$VP2FLbkukDPsPp3onAVKbuPBdhjBcsgys6EBOsQc4PV7ATwsxmb2O', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-07 05:53:27', '2023-02-07 05:53:27'),
(182, 'naveen', NULL, 'naveen', 'naveenjaibalaji@gmail.com', NULL, '$2y$10$eSDkscYehZ/G9dTSIY2pseNckkAUl6n4x3rD/i48PEll5JjSLyQV2', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-07 06:16:59', '2023-02-07 06:16:59'),
(183, 'rima', NULL, 'Rima', 'rimaharbor@gmail.com', NULL, '$2y$10$ZFeJpJfEgZ9.Nqvz65RtjuTcHkUqIBqTECDkZE8dx2dLcIiO/9d4S', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-07 06:46:54', '2023-02-07 06:46:54'),
(184, 'prasad', NULL, 'prasad143', 'gamingprasad44@gmail.com', NULL, '$2y$10$/8BiL3aIo6JQrmpRUPBxLuSqoQYAZ/2WQzBZl/TQsoJk4QUnsfUdm', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-07 07:32:08', '2023-02-07 07:32:08'),
(185, 'navaz', NULL, 'sharif', 'navaz89sharif@gmail.com', NULL, '$2y$10$pPpRpDHFOC0VWLeDtUS4Y.0irY2.696abXzCzNfu3PU03yiPClLBK', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-07 14:20:03', '2023-02-07 14:20:03'),
(186, 'alam', NULL, 'anas', 'tanha9532694786@gmail.com', NULL, '$2y$10$gnGKAeAYj3CiSz04tjywaeE3Aq55zyYiR5/rDAcxpY01LJyBD7STy', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-07 14:28:28', '2023-02-07 14:28:28'),
(187, 'SUNIL SINGH', NULL, 'SUNIL SINGH', 'sunilsingh198329@gnail.com', NULL, '$2y$10$EwObvoSzHXns2Ag8OBix1OLjyw1IO6AWiFc5P4sff.1Lqt1xmr4AW', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-07 15:48:24', '2023-02-07 15:48:24'),
(188, 'raj', NULL, 'Pandey', 'alone243w@gmail.com', NULL, '$2y$10$IJ7iuM4Po0gOlfFwkBQUnec3gPdt0rZCuhoSasE20xAf7K4DgoLZC', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-07 23:02:56', '2023-02-07 23:02:56'),
(189, 'Demo', NULL, 'demo', 'demo@gmail.com', NULL, '$2y$10$1MNiWQEdbtfdIex1qbR8E.aK6bLRe3EtzI49xGUkPdii7kQyYfjO6', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-02-09 05:06:39', '2023-02-09 05:06:39'),
(190, 'Darshan', NULL, 'darshan', 'darshan@gmail.com', NULL, '$2y$10$umQOVJlmofdszKPlzQ75/uIluWIiFTVQvDJXQOJBxwNXsdr1nwgbm', '123456', NULL, '1676013502.png', 'Gujarat', NULL, NULL, 'FREE', NULL, 'azred', 'Rudrika3', 'darshan190', 'Active', NULL, NULL, '2023-02-10 01:45:39', '2023-02-10 01:48:22'),
(192, 'Rakesh Satola', NULL, 'abcd123', 'asdfg@gmail.com', NULL, '$2y$10$6oDRcAY6DedTSFYMuQ85FeS/QBslTvcRiKZjCiB8r40ecST.yk3l6', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'abcd123192', 'Active', NULL, NULL, '2023-02-10 04:00:53', '2023-02-10 04:00:53'),
(194, 'Rohit Satola', NULL, 'Rohit2244', 'rohit@gmail.com', NULL, '$2y$10$t8oUNwzBV3Q4IvFAZ2c9BOdByk7LmaQ6haNIIFvHMEc0M317oTaC6', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, 'Rudrika3', 'Rohit2244194', 'Active', NULL, NULL, '2023-02-10 04:20:14', '2023-02-10 04:20:14'),
(195, 'Mehul kaliya', NULL, 'mehul5363', 'mehul@gmail.com', NULL, '$2y$10$bQYEDYmtDxsetDOCTuYDzu/pGXB95AsoK54IMUlt7JHrFCjj6Sj0O', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'mehul5363195', 'Active', NULL, NULL, '2023-02-10 04:22:18', '2023-02-10 04:22:18'),
(196, 'Mohini', NULL, 'mohi123', 'mohini123@gmail.com', NULL, '$2y$10$fd84LZ06IlyWSoHSokZ4OOWOje8RbAC4V5SFmkKakChkKwqKEU4eW', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, 'Rudrika3', 'mohi123196', 'Active', NULL, NULL, '2023-02-10 04:25:15', '2023-02-10 04:25:15'),
(197, 'Amritesh Puri', NULL, 'amritesh.puri', 'amriteshpuri@gmail.com', NULL, '$2y$10$lMBvQZK3JzKiWvuvxNBJGe7S/LlVgz5Pi2aCPtqs6ih/HSAXQSSpq', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'amritesh.puri197', 'Active', NULL, NULL, '2023-02-10 10:05:10', '2023-02-10 10:05:10'),
(198, 'dulaari', NULL, 'dulaari', 'dulaari91@gmail.com', NULL, '$2y$10$gcsVEkTQItBXg.KvK4ko3.b.F3qtFKSgDTKmE6lX6ilv5IttIyi2K', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'dulaari198', 'Active', NULL, NULL, '2023-02-11 10:24:51', '2023-02-11 10:24:51'),
(199, 'Sumanta Kumar Sahu', NULL, 'Sumanta123', 'sumantakumarsahu456@gmail.com', NULL, '$2y$10$B.hta5gCmMx.YstQN4hTKuZmtCOPEC6foF3dID1TMjE0XcTzgHdKi', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'Sumanta123199', 'Active', NULL, NULL, '2023-02-12 05:14:16', '2023-02-12 05:14:16'),
(200, 'GOVIND singh Rajput', NULL, 'gsr', 'govindrajput9102001@gmail.com', NULL, '$2y$10$cLdPxDZ6zqmKDfSJWy5he.dColXR1SJTz5gvRR9UWveANftozQ1IW', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'gsr200', 'Active', NULL, NULL, '2023-02-12 05:26:29', '2023-02-12 05:26:29'),
(201, 'imran mansuri', NULL, 'imran', 'imranmansuri710@gmail.com', NULL, '$2y$10$LjSv1QaQJX/897KvjhnVVOAV6TWxQRlv/pHVbd3rjgKPwxFe1Eb/2', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'imran201', 'Active', NULL, NULL, '2023-02-12 05:31:13', '2023-02-12 05:31:13'),
(202, 'ambik', NULL, 'ambika', 'ambikanag48@gmail.com', NULL, '$2y$10$Ju8VVZMmSkBYCxaI7Gk9UejXcGhHVkonvbqWlio2T8c0IWpjsfQN2', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'ambika202', 'Active', NULL, NULL, '2023-02-12 13:06:28', '2023-02-12 13:06:28'),
(203, 'Ravi', NULL, 'ravikumar', 'ravijravikumar0204@gmail.com', NULL, '$2y$10$/8RZmL59oC5nIXy35Lx6M.n7XwQcEVgvMHlu7T8ZvQgo1JB7q5FGO', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'ravikumar203', 'Active', NULL, NULL, '2023-02-12 13:08:12', '2023-02-12 13:08:12'),
(204, 'prabhjot singh', NULL, 'singh', 'prabhjotsingh25071998@gmail.com', NULL, '$2y$10$.vHRtriRdeF.59kRD4E0ne75VJpJs1CMGJWppuQnkofCS0TUetX7m', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'singh204', 'Active', NULL, NULL, '2023-02-12 13:13:06', '2023-02-12 13:13:06'),
(205, 'Sahida', NULL, 'sahida', 'aaishaazzah@gmail.com', NULL, '$2y$10$UgPQQrP/N.Pc7y6FZUj9VuyLfBpjqS33vYAJxNhSpqo5351OqCsle', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'sahida205', 'Active', NULL, NULL, '2023-02-12 13:14:08', '2023-02-12 13:14:08'),
(206, 'adi', NULL, 'adi', 'adarsh.purohit2110@gmail.com', NULL, '$2y$10$WcH6IAtpaL61TH3TxcDCVuolrni9PL8mOHQKCwLwOnslLsAJYqQhy', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'adi206', 'Active', NULL, NULL, '2023-02-12 13:15:45', '2023-02-12 13:15:45'),
(207, 'anubhav', NULL, 'kumar', 'anubhavkumar64@gmail.com', NULL, '$2y$10$zTPSg3UHuhnaIBD/ezfT6.lu6vC1RmbgAfYDHj1jiIgoL77L1in46', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'kumar207', 'Active', NULL, NULL, '2023-02-12 13:20:37', '2023-02-12 13:20:37'),
(208, 'siva', NULL, 's', 'kvm4275@gmail.com', NULL, '$2y$10$DkyxaQvL2/6wFap5UQyLg.FbxViI311SJEwbrlZ5CGMhBnMLjgD2y', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 's208', 'Active', NULL, NULL, '2023-02-12 13:20:42', '2023-02-12 13:20:42'),
(209, 'છનભા', NULL, 'છનભા', 'zampadiyaharshil@gmail.com', NULL, '$2y$10$Sj8S3lsNMQKiEqfu0KMs2OfT6DQTaoT0HViA7tx/MH8lqn1krk9Fm', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'છનભા209', 'Active', NULL, NULL, '2023-02-12 13:21:57', '2023-02-12 13:21:57'),
(210, 'Alan V S', NULL, 'alan1999', 'alanvsanu@gmail.com', NULL, '$2y$10$Tdfh0TKSf/TbpZmjEcbX7e2sYmaENzzC/nc/UyhLYYHmh5O1W4.C2', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'alan1999210', 'Active', NULL, NULL, '2023-02-12 13:22:05', '2023-02-12 13:22:05'),
(211, 'ajubha', NULL, 'manek', 'manekajubha44@gmail.com', NULL, '$2y$10$x9E7.tERdDyBgKJmqzCUfe1mk0iNe/Urf2IxeDOa8pJ.MiH8xjylm', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'manek211', 'Active', NULL, NULL, '2023-02-13 04:16:25', '2023-02-13 04:16:25'),
(212, 'Mangesh P. Kulkarni', NULL, 'radha', 'mangeshkulkarni96@gmail.com', NULL, '$2y$10$YpXEaj5cuNyFHRxsdy/QbOMEHCTuGqpcVwk.HKMknrM.bfkwPd33.', '123456', '8888019319', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'radha212', 'Active', NULL, NULL, '2023-02-14 08:08:10', '2023-02-14 08:13:27'),
(213, 'kaushal jadwani', NULL, 'KJROCKS01', 'kaushaljadwani007@gmail.com', NULL, '$2y$10$rrW1GOSmzAah9QX1bT9z9uPAfIlTBd4gAlL7g4dSYNB.heD7mi/vC', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'KJROCKS01213', 'Active', NULL, NULL, '2023-02-15 02:21:02', '2023-02-15 02:21:02'),
(214, 'dhaval', NULL, 'shivanta22', 'dhaval.shivanta@gmail.com', NULL, '$2y$10$/MbZG/fS6wy2Ib5LmkO1DOL4AxGrXTbUq5yCWWT8xx7f4LeM.JOC.', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'shivanta22214', 'Active', NULL, NULL, '2023-02-15 03:17:51', '2023-02-15 03:17:51'),
(215, 'demo1', NULL, 'demo1', 'demo1@gmail.com', NULL, '$2y$10$Qk1Sf0tUs/0uY8VU7IPoDu/0bbx3zctl.Nro2sXmmZQJhNMJ8b/ru', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'demo1215', 'Active', NULL, NULL, '2023-02-15 05:43:36', '2023-02-15 05:43:36'),
(216, 'Ankita Tripathi', NULL, 'SHANTINIKETAN EDUCATIONAL ACADEMY', 'sbpl07ankita@gmail.com', NULL, '$2y$10$v8PQ8ss61B2GP1F.6WGJY.S6gcgoen1Y0BUOvZykb7xzcS8hFZ/Tm', '123456', '7987340139', '1676460926.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'SHANTINIKETANEDUCATIONALACADEMY216', 'Active', NULL, NULL, '2023-02-15 06:01:58', '2023-02-15 06:06:42'),
(217, 'Dhaval Patel', NULL, 'dhaval', 'itmvu99@gmail.com', NULL, '$2y$10$/wrnxGwnObLz9P2kVTR4j.qR667/CVzegDvkuzbFkVtS97R9S.nsi', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'dhaval217', 'Active', NULL, NULL, '2023-02-17 12:38:12', '2023-02-17 12:38:12'),
(218, 'suraj', NULL, 'surajpatel3856', 'surajpatel38567@gmail.com', NULL, '$2y$10$7xpIr/dsa.eB5lBLgEAsbOuZN0A6ZE/pBsojimVoM5uaSA.gPog1K', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'surajpatel3856218', 'Active', NULL, NULL, '2023-02-17 13:38:29', '2023-02-17 13:38:29'),
(219, 'abc', NULL, 'abc', 'abc@123gmail.com', NULL, '$2y$10$slFAfrhs6NuogYZxtT3Zo.PjQfY2YuvcoALYebYk.JwpbSH5Tx8qm', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'abc219', 'Active', NULL, NULL, '2023-02-21 10:06:28', '2023-02-21 10:06:28'),
(220, 'sagar', NULL, 'sagarhr', 'joshisagar1995@gmail.com', NULL, '$2y$10$WSVoq37kcWUchpbncffPqeUTIhMRxBi0jsDByW7oRW0Dh8dt5tJnq', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'sagarhr220', 'Active', NULL, NULL, '2023-02-23 08:10:56', '2023-02-23 08:10:56'),
(221, 'Manjul Soni', NULL, 'manjulsoni', 'team.mjsolutions@gmail.com', NULL, '$2y$10$wUUwWR2u05BlYV.5OYFGh.LvSXkNbbThAFdnjgIv9IdyIVT/d8ySi', '123456', '9327606430', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'manjulsoni221', 'Active', NULL, NULL, '2023-02-26 01:12:50', '2023-02-26 01:14:27'),
(239, 'Hulk', NULL, 'Hulk', 'hulk@gmail.com', NULL, '$2y$10$T5rCP4DzeB/nEkIpScFqhugw/Qe6X19xk7U/cRXXvvgGGgL/dAIB2', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, '2tnea', 'Rudrika3', 'Hulk239', 'Active', NULL, NULL, '2023-03-16 05:39:03', '2023-03-16 05:39:03'),
(240, 'Peter', NULL, 'Peter', 'peter@gmail.com', NULL, '$2y$10$ZuO9zyAP14hHDBhsd7kw/uOtCUlyj.on8p60V0UT/5DND/PsxOHLe', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, 'pzerz', 'Rudrika3', 'Peter240', 'Active', NULL, NULL, '2023-03-16 06:17:50', '2023-03-16 06:17:50'),
(243, 'jigar', NULL, 'jigar.paramar', 'jigar2611@gmail.com', NULL, NULL, '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'jigar.paramar243', 'Active', NULL, NULL, '2023-03-23 10:29:32', '2023-03-23 10:31:24'),
(244, 'Tom', NULL, 'tom', 'tom@gmail.com', NULL, NULL, '123456', '0002514369', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'tom244', 'Active', NULL, NULL, '2023-03-23 10:46:23', '2023-10-27 12:02:19'),
(245, 'jerry', NULL, 'jerry', 'jerry@gmail.com', NULL, NULL, '123456', '8787878787', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'jerry245', 'Active', NULL, NULL, '2023-03-23 11:20:14', '2023-03-23 11:20:43'),
(246, 'thor', NULL, 'thor', 'thor@gmail.com', NULL, NULL, '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'thor246', 'Active', NULL, NULL, '2023-03-23 12:19:56', '2023-03-23 12:19:57'),
(247, 'Bheem', NULL, 'Bheem', 'bheem@gmail.com', NULL, NULL, '123456', '1111111111', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, 'Rudrika3', 'Bheem247', 'Active', NULL, NULL, '2023-03-24 05:33:10', '2023-03-24 05:33:10'),
(248, 'doraemon', NULL, 'doraemon', 'doraemon@gmail.com', NULL, NULL, '123456', '2222222222', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, 'Rudrika3', 'doraemon248', 'Active', NULL, NULL, '2023-03-24 05:36:35', '2023-03-24 05:36:35'),
(249, 'writer', NULL, 'Writer', 'writer@gmail.com', NULL, '$2y$10$oxQdERuVKCXtfPzaWff.jeMenaK96RAir1plk861OzsLzqTdkMaaG', '123456', '8888888888', '1680171338.webp', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'Writer249', 'Active', NULL, NULL, '2023-03-30 10:15:38', '2024-06-12 09:45:30'),
(250, 'Designer', NULL, 'Designer', 'designer@gmail.com', NULL, '$2y$10$ueycsynIzau/Xf2rtwohcOoHgDkArZBxyYjaZKMna3mdSjbABOPOK', '123456', '7777777777', '1680240584.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'Designer250', 'Active', NULL, NULL, '2023-03-31 05:29:44', '2023-03-31 05:39:43'),
(251, 'Writer2', NULL, 'Writer2', 'writer2@gmail.com', NULL, '$2y$10$4VrjSKBdwuaDUsB1w6XoE.L/JXQlmEATd2bskHHL68PEkwo8ovfVe', '123456', '6666666666', '1680343657.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-04-01 10:07:37', '2023-04-01 10:07:38'),
(252, 'Designer2', NULL, 'Designer2', 'designer2@gmail.com', NULL, '$2y$10$ihocH2rUxt4M5oFwbN8WW.g94pCjiNqNTzouAqHu9qyZWA9kKAY1m', '123456', '5555555555', '1680343742.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-04-01 10:09:02', '2023-04-01 10:09:02'),
(253, 'Writer3', NULL, 'Writer3', 'writer3@gmail.com', NULL, '$2y$10$ZzwoKxt5Tw5p5bPC7OZrSuUTjBmyoluJP3RraPQYbqKsN8VbWkVA2', '123456', '0000000000', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'Writer3253', 'Active', NULL, NULL, '2023-04-01 12:25:25', '2023-04-05 04:57:12'),
(254, 'Designer3', NULL, 'Designer3', 'designer3@gmail.com', NULL, '$2y$10$4aAIAEJ9s/6U/njG83DigONhDCsWr6mxhggBcPLKEktGll8/Jf84y', '123456', '1010101010', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-04-01 12:42:56', '2023-04-01 12:42:56'),
(256, 'Writer4', NULL, 'Writer4', 'writer4@gmail.com', NULL, '$2y$10$d/DDf2ZhWKpHEwyZhY0D2OObTddt8I.L7o4Q/nfJVsoBGWaWb.2Pe', '123456', '3333333333', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'Writer4256', 'Active', NULL, NULL, '2023-04-03 12:54:19', '2023-04-03 13:00:02'),
(257, 'Madhvi', NULL, 'Madhvi', 'madhvi22@gmail.com', NULL, '$2y$10$z1/orWFepSYzm4qKFOBlneyMcjImwKKsY3gqX.Kp3/EP/fTwAUa46', '123456', '7575757575', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-04-04 05:42:00', '2023-10-26 10:47:32'),
(262, 'new User', NULL, 'new user', 'newuser@gmail.com', NULL, NULL, '123456', '3030303030', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, 'Rudrika3', 'newuser262', 'Active', NULL, NULL, '2023-04-04 09:02:49', '2023-04-04 09:02:49'),
(267, 'richa medatwal', NULL, 'rics rics', 'rics275@gmail.com', NULL, '$2y$10$2c/bsIHhPaeBTsDfvCVfGuHPIVM7Lhp.d9Cx2cbtk43mLFBKyiNuC', '123456', '7359392895', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'ricsrics267', 'Active', NULL, NULL, '2023-05-02 14:27:36', '2023-10-26 10:48:52'),
(268, 'newUser', NULL, 'newUser', 'newse0@gmail.com', NULL, '$2y$10$0Ebhf/OXznvj/6QWSRzMvexuFcPdBNwBe40Gtc3dO38qZWw6.wHcK', '123456', NULL, NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, 'Rudrika3', 'newUser268', 'Active', NULL, NULL, '2023-05-11 09:32:20', '2023-05-11 09:32:20'),
(269, 'Influencer', NULL, 'influencer', 'influencer@gmail.com', NULL, '$2y$10$9gyR1HKu/nXfu6LNEhrsROfdQ7agHwFWhCg7u3HhnY9yAk/fGDlB2', '123456', '9876543210', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'influencer269', 'Active', NULL, NULL, '2023-06-23 14:26:23', '2023-07-03 16:43:15'),
(270, 'New influence', NULL, 'Influencer', 'newinfluencer@gmail.com', NULL, '$2y$10$TmVGK43QXHltwo4S7t8NjurkgGTbBRflxoyPQPGwySLTOJErXujwa', '123456', '0000000007', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'Influencer270', 'Active', NULL, NULL, '2023-07-03 13:46:22', '2023-07-03 13:46:31'),
(271, 'Best Resturant', NULL, 'Best Resturant', 'brand@gmail.com', NULL, '$2y$10$36Slz8IlslD8zZsfZL3MU.LczB75gC6xkNKIPBgXU6K8U/lwIth2K', '123456', '8238648884', '1717399815.jpg', 'Gujarat', 'Ahmedabad', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'SILVER', '2055-02-12', NULL, NULL, 'BestResturant271', 'Active', NULL, NULL, '2023-07-03 16:45:09', '2024-06-03 07:30:15'),
(272, 'priyanshi prajapati', NULL, 'priyanshi_prajapati', 'priyanshihp1709@gmail.com', NULL, '$2y$10$e9Ugw2lE1W/.wBPmmJRfYe6u63ngliOHSHJxy2ZSi2IyJQ4xT85m6', '123456', '9909004025', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'priyanshi_prajapati272', 'Active', NULL, NULL, '2023-10-10 12:13:34', '2023-10-10 12:13:34');
INSERT INTO `users` (`id`, `name`, `session`, `username`, `email`, `email_verified_at`, `password`, `pin`, `mobileno`, `profilePhoto`, `state`, `city`, `about`, `package`, `validity`, `captcha`, `refer`, `myrefer`, `status`, `deviceToken`, `remember_token`, `created_at`, `updated_at`) VALUES
(273, 'Prajapati Priyanshi', NULL, 'Priyanshi_123', 'priyanshi.innovios@gmail.com', NULL, '$2y$10$k6toOkw5RMPPghNG5GuMlek2kttIOMNvxcOvz34V/HiBzLtFZpTN6', '123456', '9558025483', '1697004862.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'Priyanshi_123273', 'Active', NULL, NULL, '2023-10-11 10:00:32', '2023-10-26 10:46:30'),
(274, 'Priyanshi', NULL, 'priyanshi@123', 'priyanshihp.1709@gmail.com', NULL, '$2y$10$iIjWtABNQzVm.XWg6BzV0Ol6y/q0BFs63PDUYRCY.bf7eR5T7kuoG', '123456', '9909004025', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'priyanshi@123274', 'Active', NULL, NULL, '2023-10-26 14:12:46', '2023-10-27 10:19:51'),
(275, 'Test Influencer', NULL, 'InfluencerTest', 'testinfluencer@gmail.com', NULL, '$2y$10$CH0dB7YU.NBxhgfgpnGdEu48eQ7CpMae1weuj3CEx.6ji6PQwti3K', '123456', '9966332255', '1705046090.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'InfluencerTest275', 'Active', NULL, NULL, '2023-10-26 14:53:10', '2024-01-12 07:54:50'),
(276, 'Raviraj', NULL, 'Raviraj', 'raviraj123@gmail.com', NULL, '$2y$10$9.K1yd7ijWnjd7w1Pd83SOacKastXMznKwsF9trtxGMqIbL.te17.', '123456', '9687574990', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'Raviraj276', 'Active', NULL, NULL, '2023-10-26 16:07:15', '2023-10-26 16:07:17'),
(287, 'Testing', NULL, 'rajeshri', 'testing1@gmail.com', NULL, '$2y$10$8X2cxi5.I/Zt31E621gNO.ORXqF9VK8FR2nF6vHtUjlggVdWDSyF2', '123456', '8238649994', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'rajeshri287', 'Active', NULL, NULL, '2023-10-31 10:33:23', '2023-11-23 17:16:34'),
(294, 'smita', NULL, 'smita', 'smita@gmail.com', NULL, NULL, '123456', '9909004025', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-11-01 12:17:42', '2023-11-01 14:29:10'),
(295, 'Rakesh satola', NULL, 'rocky2496', 'rocky@gmail.com', NULL, '$2y$10$JO1jBOmfWAh983pgGkW1Ze5/b4IFzP3AQK7EIDIfZCMLJ1isED1ym', '123456', '9876543210', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'rocky2496295', 'Active', NULL, NULL, '2023-11-02 11:09:47', '2023-11-02 11:09:48'),
(296, 'sdhgjvhsj', NULL, 'dsjvdshb', 'sdjgviosdjh@sdhg.com', NULL, '$2y$10$YmZeY6XH6os0wXakDlVA0umt87LGTR5pYTTKetpvU87LW.PbXoXj6', '123456', '1234567809', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'dsjvdshb296', 'Active', NULL, NULL, '2023-11-02 11:20:21', '2023-11-02 11:20:22'),
(297, 'kaliya prakash', NULL, 'prakash', 'kp@gmail.com', NULL, '$2y$10$dTZMlD4eyPqkcyHpB3N3/ujcTAnhnYZ9lYoo9e85k9/zMa.bMei9W', '123456', '8758585996', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'prakash297', 'Active', NULL, NULL, '2023-11-02 11:51:06', '2023-11-02 11:51:07'),
(298, 'gidwani sumit', NULL, 'sumit', 'sg@gmail.com', NULL, '$2y$10$BbDPmSd9smcCQpTQuKzQ1uggdqxJh9OyCfJqqajFfsSkS8hhKKcr6', '123456', '9723511278', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'sumit298', 'Active', NULL, NULL, '2023-11-02 11:55:38', '2023-11-02 11:55:39'),
(299, 'shruti', NULL, 'shruti', 'shruti@gmail.com', NULL, NULL, '123456', '9909004025', '1699005170.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-11-03 14:52:50', '2023-11-03 14:52:50'),
(300, 'nency', NULL, 'nency', 'nency@gmail.com', NULL, NULL, '123456', '9909004025', '1699005735.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-11-03 15:02:14', '2023-11-03 15:02:15'),
(301, 'gudi', NULL, 'gudi', 'gudi@gmail.com', NULL, NULL, '123456', '9909004025', '1699005866.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-11-03 15:04:25', '2023-11-03 15:13:43'),
(302, 'gaurav', NULL, 'gaurav', 'g@gmail.com', NULL, '$2y$10$0AXHpx8TjlchNtQn2kJmhOuBLdBL4Ha0g/tUPN60Wyc52YRzk4BHO', '123456', '9913252048', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'gaurav302', 'Active', NULL, NULL, '2023-11-04 11:43:06', '2023-11-04 11:43:08'),
(304, 'testing writer', NULL, 'testing writer', 'testingwriter@gmail.com', NULL, NULL, '123456', '8238649994', '1699333580.jpg', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2023-11-07 11:06:20', '2023-11-07 11:37:21'),
(305, 'testInfluencer1', NULL, 'testinfluencer1', 'testinfluencer1@gmail.com', NULL, '$2y$10$Ew1MNnDj1FpAK1pqGT.NOuc1YKCD/R/QeQkhm8PRk4rmoZmFD/8D2', '123456', '98765432130', '1712301658.png', 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'testinfluencer1305', 'Active', NULL, NULL, '2023-12-29 10:49:17', '2023-12-29 10:49:18'),
(307, 'user', NULL, 'user', 'user123@gmail.com', NULL, '$2y$10$IrXdPUrWG09gvtnkRmvlKO0RAQhfYGrfHBVbe3a.TJ.Ru5B9ST1eC', '123456', '3030303030', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'user307', 'Active', NULL, NULL, '2024-01-10 11:40:01', '2024-01-30 12:09:14'),
(308, 'test', NULL, 'test', 'test@gmail.com', NULL, '$2y$10$CHh98SMcP29LQmssZFQVL.705DYTS1g2TKujCArzLAczCHQ46sem.', '123456', '4248216485', NULL, 'Gujarat', NULL, NULL, 'FREE', '2025-02-05', NULL, NULL, 'test308', 'Active', NULL, NULL, '2024-02-06 11:12:43', '2024-02-06 12:07:56'),
(309, 'newman', NULL, 'newman', 'newman@gmail.com', NULL, '$2y$10$hINng5iwX26dwNto9J/.A.oEmikIhdDT0jAMRskVXL.Bc2BdxafYy', '123456', '85471254634', NULL, 'Gujarat', NULL, NULL, 'SILVER', '2026-02-19', NULL, NULL, 'newman309', 'Active', NULL, NULL, '2024-02-20 05:05:54', '2024-02-20 05:15:01'),
(310, 'testBrand 22', NULL, 'testBrand 22', 'testbrand22@gmail.com', NULL, '$2y$10$8X2cxi5.I/Zt31E621gNO.ORXqF9VK8FR2nF6vHtUjlggVdWDSyF2', '123456', '84794324818', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2024-03-26 06:20:35', '2024-03-26 06:20:35'),
(311, 'Rudrika The Brand', 'brand', 'RudrikaTheBrand', 'rudrikabrand@gmail.com', NULL, '$2y$10$W1suvwPIF5Q4Axs4yeZ9h.5ddgMkPE.UJf3c/Jvt4SHJhAmRkL95q', '123456', '00009999977', NULL, 'Gujarat', NULL, NULL, 'SILVER', '2025-05-28', NULL, NULL, 'RudrikaTheBrand311', 'Active', NULL, NULL, '2024-05-28 06:02:51', '2024-05-28 07:15:26'),
(312, 'Rudrika The Influencer', 'influencer', 'RudrikaTheInfluencer', 'rudrikainfluencer@gmail.com', NULL, '$2y$10$x96nVzRs3uBnyGZ1wIGnZuUhy6rIVp/Dkdo5HiIsU73BBjz6qyHFi', '123456', '001100220033', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'RudrikaTheInfluencer312', 'Active', NULL, NULL, '2024-05-28 06:14:12', '2024-05-28 06:14:12'),
(313, '', NULL, '', '', NULL, NULL, '123456', '0120120120', NULL, 'Gujarat', NULL, NULL, '', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2024-05-28 11:46:48', '2024-05-28 11:46:48'),
(314, 'testInfbrand22', 'brand', 'test influencer', 'testbrand33@gmail.com', NULL, '$2y$10$IUsVNQznewoxDlP12.qt8uEjYEKctcirGVgMU23Tra2VJSwQ.fEGy', '123456', '9876543210', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2024-05-30 06:16:14', '2024-05-30 06:16:14'),
(316, 'testInfbrand22', 'brand', 'test brans', 'testbrand323@gmail.com', NULL, '$2y$10$WuANgeBmFqYc9eoW.gyRbuK3PCisi.Y1nXOjVYP5EA4Fj4Mnq8XUW', '123456', '9876543210', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2024-05-30 06:17:11', '2024-05-30 06:17:11'),
(318, 'testInfbrand22', 'brand', 'test brans', 'testbrand3223@gmail.com', NULL, '$2y$10$r1Eb9Kin1h6TxjjS6cPhX.dn2D3xvtOkPNfml.Th1TUJbYKbJ76s.', '123456', '9876543210', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'testbrans318', 'Active', NULL, NULL, '2024-05-30 06:25:33', '2024-05-30 06:25:33'),
(319, 'influ', 'influencer', 'influ', 'influ@gmail.com', NULL, '$2y$10$rt1YSUyM8Ikv.UN/99iUWOFvH.1PMOOTx9EovxioqGXU/ouL0KVf6', '123456', '123456854', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2024-05-30 06:33:08', '2024-05-30 06:33:08'),
(321, 'influ', 'influencer', 'influ', 'influ1@gmail.com', NULL, '$2y$10$1C6jP0WtDGZGnyAXUcythOaD35XGHleJ5QzB/7KzMP4dxb3U5IMhO', '123456', '123456854', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, 'influ321', 'Active', NULL, NULL, '2024-05-30 06:33:46', '2024-05-30 06:33:46'),
(322, 'influencer121', 'influencer', 'influencer121', 'influencer121@gmail.com', NULL, '$2y$10$0JAP8/gKDnjTk6/7MBow1uxejxqCV9qWJJusMhvnl8meMtzbaCfla', '123456', '7894561230', '1718863986.png', 'Gujarat', 'SURENDRANAGAR', 'hey there', 'FREE', NULL, NULL, NULL, 'influencer121322', 'Active', NULL, NULL, '2024-06-05 06:00:04', '2024-06-05 06:39:13'),
(323, 'influencer14624', 'influencer', 'influencer  14624', 'influencer14624@gmail.com', NULL, '$2y$10$MsVc5VwYU0Ur9r.g8fprjOe0.z9SsQwoX0xoJ/dnlS0PL8D.NG9OG', '123456', '8798653212', '1719567573.jpg', 'Gujarat', 'Surendranagar', 'an enthusiastic influencer\r\nI can contribute my best to any organization or brands\r\nI am good enough in my work', 'SILVER', '2025-06-18', NULL, NULL, 'influencer14624323', 'Active', NULL, NULL, '2024-06-14 06:06:49', '2024-07-04 11:30:39'),
(324, 'brand14624', 'brand', 'brand14624', 'brand14624@gmail.com', NULL, '$2y$10$NIVvWSSVqW0U8Sh0RkUxpu2UMeoydBnJ2m8xoWpYEYHIryBTr9tlm', '123456', '9879214624', '1718947013.jpg', 'Gujarat', 'surendranagar', 'hey there i am new brand for testing the pages and working on design to create the pages more effective and attractive', 'SILVER', '2025-06-18', NULL, NULL, 'brand14624324', 'Active', NULL, NULL, '2024-06-14 06:09:15', '2024-06-21 05:16:53'),
(329, 'influencer1234', NULL, 'influencer1234', 'influencer1234@gmail.com', NULL, '$2y$10$Y/RSNN5gPRNUSYR1g0CIMOuTCDxMw13VPKUcKCyV.vQpnT/fAkeF6', '123456', '8487864457', NULL, 'Gujarat', NULL, NULL, 'FREE', NULL, NULL, NULL, NULL, 'Active', NULL, NULL, '2024-06-25 07:21:18', '2024-06-25 07:21:18'),
(334, 'parvez irfan bhai jindani', 'influencer', '_parvez_memon', 'parvejjindani005@gmail.com', NULL, '$2y$10$kpDcNhnierbwXbqtc.8x/uLf1O/MAIPlCGFYx6C73dJYjL8Hzz9ye', '123456', '08487868595', '1719559453.jpg', 'Gujarat', 'Surendranagar', 'i am new influencer', 'FREE', NULL, NULL, NULL, '_parvez_memon334', 'Active', NULL, NULL, '2024-06-28 06:40:48', '2024-06-28 07:24:14'),
(338, 'parvez jindani', NULL, 'Parvez003', 'parvezjindani003@gmail.com', NULL, '$2y$10$whfLG1a.2sn13xCkrYxZ7.0.VUQhmiB2sFU3R0iJ3f65UWmCIE8HK', '123456', '8487868595', '1720247797.png', 'Gujarat', NULL, NULL, 'SILVER', '2025-07-11', NULL, NULL, 'Parvez003338', 'Active', NULL, NULL, '2024-07-06 06:29:56', '2024-07-11 09:34:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admincategories`
--
ALTER TABLE `admincategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branddetails`
--
ALTER TABLE `branddetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_categories`
--
ALTER TABLE `brand_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_influencer_notifications`
--
ALTER TABLE `brand_influencer_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_offers`
--
ALTER TABLE `brand_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_packages`
--
ALTER TABLE `brand_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_package_details`
--
ALTER TABLE `brand_package_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_points`
--
ALTER TABLE `brand_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_with_categories`
--
ALTER TABLE `brand_with_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brochures`
--
ALTER TABLE `brochures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cardlinkes`
--
ALTER TABLE `cardlinkes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cardportfoilos`
--
ALTER TABLE `cardportfoilos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cardservices`
--
ALTER TABLE `cardservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costs`
--
ALTER TABLE `costs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i_m_p_g_payments`
--
ALTER TABLE `i_m_p_g_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locations_user_id_foreign` (`user_id`);

--
-- Indexes for table `manual_payments`
--
ALTER TABLE `manual_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `my_offer_qr_codes`
--
ALTER TABLE `my_offer_qr_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offerdetails`
--
ALTER TABLE `offerdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_sliders`
--
ALTER TABLE `offer_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otps`
--
ALTER TABLE `otps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qrcodes`
--
ALTER TABLE `qrcodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `razorpays`
--
ALTER TABLE `razorpays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `servicedetails`
--
ALTER TABLE `servicedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptionpackages`
--
ALTER TABLE `subscriptionpackages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admincategories`
--
ALTER TABLE `admincategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `branddetails`
--
ALTER TABLE `branddetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand_categories`
--
ALTER TABLE `brand_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `brand_influencer_notifications`
--
ALTER TABLE `brand_influencer_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `brand_offers`
--
ALTER TABLE `brand_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `brand_packages`
--
ALTER TABLE `brand_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brand_package_details`
--
ALTER TABLE `brand_package_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `brand_points`
--
ALTER TABLE `brand_points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `brand_with_categories`
--
ALTER TABLE `brand_with_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `brochures`
--
ALTER TABLE `brochures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `cardlinkes`
--
ALTER TABLE `cardlinkes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `cardportfoilos`
--
ALTER TABLE `cardportfoilos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `cardservices`
--
ALTER TABLE `cardservices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `costs`
--
ALTER TABLE `costs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `i_m_p_g_payments`
--
ALTER TABLE `i_m_p_g_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manual_payments`
--
ALTER TABLE `manual_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `my_offer_qr_codes`
--
ALTER TABLE `my_offer_qr_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `offerdetails`
--
ALTER TABLE `offerdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `offer_sliders`
--
ALTER TABLE `offer_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `otps`
--
ALTER TABLE `otps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=694;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `qrcodes`
--
ALTER TABLE `qrcodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `razorpays`
--
ALTER TABLE `razorpays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `servicedetails`
--
ALTER TABLE `servicedetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscriptionpackages`
--
ALTER TABLE `subscriptionpackages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=339;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
