-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 03:05 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `access_token` varchar(40) NOT NULL,
  `client_id` varchar(80) NOT NULL,
  `user_id` varchar(80) DEFAULT NULL,
  `expires` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `scope` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`access_token`, `client_id`, `user_id`, `expires`, `scope`) VALUES
('583d93b15957e1d7b372c019ec0a350d2597276f', 'testclient', '45', '2022-01-29 05:09:52', NULL),
('634f61473c74a94010cd7fc841bf97d968856a5c', 'testclient', 'lynnechepkwony', '2022-01-24 02:58:45', 'app'),
('770f9829e2794c75087998290345b89bf528c8f2', 'testclient', '45', '2022-01-29 03:15:50', NULL),
('7a5a77b22ec2bfb60b0ffb75414f225da74cc7bc', 'testclient', 'lynnechepkwony', '2022-01-24 07:28:51', 'app'),
('af97c0198dac055043529c1b281e3c7405ec41c4', 'testclient', '45', '2022-01-29 02:15:14', NULL),
('b92bc504b821a906c9b3687ef8ac698d14ca50d7', 'testclient', 'lynnechepkwony', '2022-01-24 03:25:37', 'app'),
('db0dfb458dfd0bd7767dcd7883d39040466479cc', 'testclient', '45', '2022-01-25 08:17:08', NULL),
('e2b215f864a7fd341bc9cea171ef86e465e01f41', 'testclient', '45', '2022-01-25 08:37:18', NULL),
('f56a702a8417903f5f3f0f889943b2fce5693b57', 'testclient', '45', '2022-01-29 00:27:03', NULL),
('f601c3d534fb07e3bac331b64655c7c6b5445a5a', 'testclient', '45', '2022-01-29 01:06:56', NULL),
('f73a3d8091dabce0b6f2d39edfcbf5c327c66485', 'testclient', '45', '2022-01-27 11:37:14', NULL),
('fe87861aa754ef04597ea6ed5eb8a997b795c807', 'testclient', 'lynnechepkwony', '2022-01-24 02:47:12', 'app');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `client_id` varchar(80) NOT NULL,
  `client_secret` varchar(80) DEFAULT NULL,
  `redirect_uri` varchar(2000) DEFAULT NULL,
  `grant_types` varchar(80) DEFAULT NULL,
  `scope` varchar(4000) DEFAULT NULL,
  `user_id` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`client_id`, `client_secret`, `redirect_uri`, `grant_types`, `scope`, `user_id`) VALUES
('testclient', 'testsecret', NULL, 'password', 'app', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `refresh_token` varchar(40) NOT NULL,
  `client_id` varchar(80) NOT NULL,
  `user_id` varchar(80) DEFAULT NULL,
  `expires` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `scope` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`refresh_token`, `client_id`, `user_id`, `expires`, `scope`) VALUES
('03e049344169596c2959c81f1c1e20b0219b842d', 'testclient', '45', '2022-02-11 23:27:03', NULL),
('0afba6e52f6afddea1f19e74ed454113033b47f4', 'testclient', '45', '2022-02-12 02:15:50', NULL),
('0be21ab72131cc60e7113f5d2ef5d2e72319bbe6', 'testclient', '45', '2022-02-12 00:06:56', NULL),
('24be5b851397ead2bb2910a87939b073c42c1005', 'testclient', 'lynnechepkwony', '2022-02-07 01:58:46', 'app'),
('3a366233a988f5c507b71df392f72fb97990f94e', 'testclient', '45', '2022-02-08 07:17:09', NULL),
('3e18924173a4be88e082bdefa76e9751a6e4b946', 'testclient', 'lynnechepkwony', '2022-02-07 01:47:12', 'app'),
('4ac82a5eab528e619f5849afa158f42c3b861992', 'testclient', 'lynnechepkwony', '2022-02-07 06:28:51', 'app'),
('4d395cdb3050af25ff21dfddcdf6e6ce22ec2580', 'testclient', 'lynnechepkwony', '2022-02-07 02:25:37', 'app'),
('5b3e7fc6a84d6f60e536a77eab7e1b0860046ebf', 'testclient', '45', '2022-02-12 04:09:52', NULL),
('9d3954223efc7251b1383d057ae1833e6338f889', 'testclient', '45', '2022-02-10 10:37:14', NULL),
('d8b6a77acb136de61af5485abef1622124cc7f43', 'testclient', '45', '2022-02-12 01:15:14', NULL),
('ef46a0f2df37e6b8bd1fc12fdb467adf249e0b3c', 'testclient', '45', '2022-02-08 07:37:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_scopes`
--

CREATE TABLE `oauth_scopes` (
  `scope` varchar(80) NOT NULL,
  `is_default` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oauth_scopes`
--

INSERT INTO `oauth_scopes` (`scope`, `is_default`) VALUES
('app', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_users`
--

CREATE TABLE `oauth_users` (
  `username` varchar(80) NOT NULL,
  `password` varchar(80) DEFAULT NULL,
  `first_name` varchar(80) DEFAULT NULL,
  `last_name` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `email_verified` tinyint(1) DEFAULT NULL,
  `scope` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oauth_users`
--

INSERT INTO `oauth_users` (`username`, `password`, `first_name`, `last_name`, `email`, `email_verified`, `scope`) VALUES
('lynnechepkwony', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Lynne', 'Chepkwony', 'lynne@gmail.com', 1, 'app');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apiproducts`
--

CREATE TABLE `tbl_apiproducts` (
  `apiproduct_id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `added_by` int(11) NOT NULL DEFAULT 42,
  `created_by` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_apiproducts`
--

INSERT INTO `tbl_apiproducts` (`apiproduct_id`, `productname`, `product_image`, `added_by`, `created_by`, `updated_on`, `is_deleted`) VALUES
(7, 'Dungarees', 'heee.PNG', 42, '2022-01-25 20:11:40', '2022-01-25 20:11:40', 0),
(8, 'Dungarees', 'heee_1.PNG', 42, '2022-01-27 22:37:59', '2022-01-27 22:37:59', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`category_id`, `category_name`, `is_deleted`) VALUES
(1, 'Men', 0),
(2, 'Women', 0),
(3, 'Children', 0),
(4, 'Pets', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_messages`
--

CREATE TABLE `tbl_messages` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `message_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_messages`
--

INSERT INTO `tbl_messages` (`firstname`, `lastname`, `email`, `message`, `description`, `message_id`) VALUES
('Lynne', 'Chebet', 'lyb@gmail.com', 'Thank you', 'I am grateful for this website', 1),
('Lynne', 'Chebet', 'lyb@gmail.com', 'Thank you', 'Very happy', 2),
('Lynne', 'Chebet', 'lyb@gmail.com', 'Thank you', 'you guys are amazing!', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total` double NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `payment_type` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `total`, `order_status`, `created_at`, `payment_type`, `updated_at`, `is_deleted`) VALUES
(71, 43, 124800, 'pending', '2022-01-23 22:11:57', 5, '2022-01-23 22:11:57', 0),
(72, 43, 124800, 'pending', '2022-01-23 22:13:58', 2, '2022-01-23 22:13:58', 0),
(73, 43, 124800, 'pending', '2022-01-23 22:20:41', 2, '2022-01-23 22:20:41', 0),
(74, 43, 1200, 'pending', '2022-01-24 09:38:24', 2, '2022-01-24 09:38:24', 0),
(75, 43, 2400, 'pending', '2022-01-24 09:41:39', 2, '2022-01-24 09:41:39', 0),
(76, 43, 1200, 'pending', '2022-01-24 13:53:00', 2, '2022-01-24 13:53:00', 0),
(77, 43, 1200, 'pending', '2022-01-25 20:26:56', 5, '2022-01-25 20:26:56', 0),
(78, 43, 122400, 'pending', '2022-01-25 20:29:53', 5, '2022-01-25 20:29:53', 0),
(79, 43, 122400, 'pending', '2022-01-25 21:09:08', 2, '2022-01-25 21:09:08', 0),
(80, 45, 1200, 'pending', '2022-01-25 21:26:42', 5, '2022-01-25 21:26:42', 0),
(81, 45, 121200, 'pending', '2022-01-26 03:26:34', 2, '2022-01-26 03:26:34', 0),
(82, 43, 1200, 'pending', '2022-01-27 10:55:02', 5, '2022-01-27 10:55:02', 0),
(83, 43, 242400, 'pending', '2022-01-27 13:12:52', 2, '2022-01-27 13:12:52', 0),
(84, 43, 325146, 'pending', '2022-01-27 14:55:32', 5, '2022-01-27 14:55:32', 0),
(85, 45, 121200, 'pending', '2022-01-29 11:06:40', 5, '2022-01-29 11:06:40', 0),
(86, 45, 1200, 'pending', '2022-01-29 14:53:54', 2, '2022-01-29 14:53:54', 0),
(87, 45, 122200, 'pending', '2022-01-29 15:21:28', 2, '2022-01-29 15:21:28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderdetails`
--

CREATE TABLE `tbl_orderdetails` (
  `orderdetails_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT 78,
  `product_id` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `order_quantity` int(11) NOT NULL DEFAULT 1,
  `orderdetails_total` double NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orderdetails`
--

INSERT INTO `tbl_orderdetails` (`orderdetails_id`, `order_id`, `product_id`, `product_price`, `order_quantity`, `orderdetails_total`, `created_at`, `updated_at`, `is_deleted`) VALUES
(15, 78, 5, 1200, 1, 122400, '2022-01-25 21:11:25', '2022-01-25 21:11:25', 0),
(16, 78, 2, 1200, 1, 1200, '2022-01-25 21:26:44', '2022-01-25 21:26:44', 0),
(17, 78, 4, 120000, 1, 121200, '2022-01-26 03:26:37', '2022-01-26 03:26:37', 0),
(18, 78, 2, 1200, 1, 1200, '2022-01-27 10:55:05', '2022-01-27 10:55:05', 0),
(19, 78, 4, 120000, 2, 242400, '2022-01-27 13:12:56', '2022-01-27 13:12:56', 0),
(20, 78, 5, 1200, 1, 325146, '2022-01-27 14:55:41', '2022-01-27 14:55:41', 0),
(21, 78, 4, 120000, 1, 121200, '2022-01-29 11:06:44', '2022-01-29 11:06:44', 0),
(22, 78, 2, 1200, 1, 1200, '2022-01-29 14:53:58', '2022-01-29 14:53:58', 0),
(23, 78, 6, 1000, 1, 122200, '2022-01-29 15:21:30', '2022-01-29 15:21:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payments`
--

CREATE TABLE `tbl_payments` (
  `payment_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `card_number` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `CVC_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_payments`
--

INSERT INTO `tbl_payments` (`payment_id`, `name`, `card_number`, `date`, `CVC_no`) VALUES
(2, 'Foulen', 58879, '2022-02', 778),
(3, 'Foulen', 58879, '2022-02', 778),
(4, 'Foulen', 56778980, '2022-02', 12344),
(5, 'Foulen', 56778980, '2022-02', 12344),
(6, 'Curtis', 637383892, '2022-02', 65),
(7, 'James', 0, '2022-02', 0),
(8, 'James', 123, '2022-02', 123),
(9, 'Curtis', 15278728, '2022-02', 12451);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paymenttypes`
--

CREATE TABLE `tbl_paymenttypes` (
  `paymenttype_id` int(11) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `description` varchar(40) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_paymenttypes`
--

INSERT INTO `tbl_paymenttypes` (`paymenttype_id`, `payment_type`, `description`, `is_deleted`) VALUES
(2, 'Paypal', 'Lorem ipsum dolor sit amet, consectetur ', 0),
(5, 'Mpesa', 'Lorem ipsum dolor sit amet, consectetur ', 0),
(9, 'Visa', 'Lorem ipsum dolor sit amet, consectetur ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(40) NOT NULL,
  `unit_price` double NOT NULL,
  `available_quantity` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_description`, `product_image`, `unit_price`, `available_quantity`, `subcategory_id`, `created_at`, `updated_at`, `added_by`, `is_deleted`) VALUES
(2, 'Men\'s shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1640649739_a7ca53ff25de8ab0e3c1.jpg', 1200, 12, 1, '2021-12-28 03:02:19', '2021-12-28 03:02:19', 42, 0),
(4, 'security guard uniform', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1640773185_2d21fe4050817bb22ce1.jpg', 120000, 90, 16, '2021-12-29 13:19:45', '2021-12-29 13:19:45', 42, 0),
(5, 'overall', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1640773235_5f0d465fcccec6c37d6e.jpg', 1200, 80, 17, '2021-12-29 13:20:35', '2021-12-29 13:20:35', 42, 0),
(6, 'sweater', 'lorem ipsum acuador dei', '1643283555_e53a84e198c8f1ec5604.jfif', 1000, 14, 18, '2022-01-27 14:39:15', '2022-01-27 14:39:15', 43, 0),
(7, 'leather jacket', 'Leather jackets are the new trending style', '1643283742_db27cbbae3b7e05092b1.jfif', 26782, 45, 19, '2022-01-27 14:42:22', '2022-01-27 14:42:22', 43, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productimages`
--

CREATE TABLE `tbl_productimages` (
  `productimages_id` int(11) NOT NULL,
  `product_image` varchar(40) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_productimages`
--

INSERT INTO `tbl_productimages` (`productimages_id`, `product_image`, `product_id`, `created_at`, `updated_at`, `added_by`, `is_deleted`) VALUES
(1, 'heee.png', 7, '2022-01-27 21:59:15', '2022-01-27 21:59:15', 42, 0),
(2, 'pic.png', 4, '2022-01-27 21:59:15', '2022-01-27 21:59:15', 42, 0),
(3, 'cat4.png', 5, '2022-01-27 22:00:44', '2022-01-27 22:00:44', 42, 0),
(4, 'cat3.png', 4, '2022-01-27 22:00:44', '2022-01-27 22:00:44', 42, 0),
(5, 'cat1.png', 6, '2022-01-27 22:01:38', '2022-01-27 22:01:38', 42, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(15) NOT NULL DEFAULT 'user',
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`role_id`, `role_name`, `is_deleted`) VALUES
(1, 'admin', 0),
(2, 'user', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategories`
--

CREATE TABLE `tbl_subcategories` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(25) NOT NULL,
  `category` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subcategories`
--

INSERT INTO `tbl_subcategories` (`subcategory_id`, `subcategory_name`, `category`, `is_deleted`) VALUES
(1, 'Formal', 1, 0),
(16, 'Casual', 1, 0),
(17, 'Casual', 1, 0),
(18, 'pet coat', 4, 0),
(19, 'Footwear', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userlogins`
--

CREATE TABLE `tbl_userlogins` (
  `userlogin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_time` datetime NOT NULL DEFAULT current_timestamp(),
  `logout_time` datetime NOT NULL DEFAULT current_timestamp(),
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_userlogins`
--

INSERT INTO `tbl_userlogins` (`userlogin_id`, `user_id`, `login_time`, `logout_time`, `is_deleted`) VALUES
(1, 40, '2022-01-27 23:57:24', '2022-01-27 23:57:24', 0),
(2, 43, '2022-01-27 23:57:24', '2022-01-27 23:57:24', 0),
(3, 40, '2022-01-27 23:58:19', '2022-01-27 23:58:19', 0),
(4, 45, '2022-01-27 23:58:19', '2022-01-27 23:58:19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `age` int(11) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 2,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `first_name`, `email`, `password`, `last_name`, `gender`, `age`, `role`, `is_deleted`) VALUES
(40, 'Jay', 'jay@gmail.com', '$2y$10$2v5VuTrZH03GQ0X6mcZcbO0njqL8C.HdbAhSsC1St3StpgrGiK1ta', 'Taylor', 'Male', 18, 2, 0),
(42, 'Main', 'adminmain@gmail.com', '$2y$10$BfCmNLH74xCxe5YqDKldjOlCi8JXS6mNj83egATDLaTYk8Cj0Zvie', 'Admin', 'Male', 20, 1, 0),
(43, 'Curtis', 'lyb@gmail.com', '$2y$10$Opq61lPDic5XUl3U6SuIbuTi3bSY5yf9RWUmWu3bvuC95CpIU7Ll.', 'Jones', 'Male', 35, 2, 0),
(44, 'Lynne', 'lynne4ad@gmail.com', '$2y$10$FM2/O69DNOX3HkT8Z3e5buC7pM8tZ1mcXJqeUfWzlLlikYIvvw4Zm', 'Chepkwony', 'Female', 47, 2, 0),
(45, 'James', 'jamesm@gmail.com', '$2y$10$dSlmz1gCJyturEhREK5qr.wf4CgS6UFm3jKcm21398D7gpb2Zl.E6', 'Milner', 'Male', 18, 2, 0),
(46, 'Alexander', 'trent@gmail.com', '$2y$10$R6X8aXDr9ap/sbtTH36ltOThg/BSW5BS/LV/U8Z1.ZpZ3HoV/jt6y', 'Arnold', 'Male', 18, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wallet`
--

CREATE TABLE `tbl_wallet` (
  `wallet_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount_available` double NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_wallet`
--

INSERT INTO `tbl_wallet` (`wallet_id`, `customer_id`, `amount_available`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 43, 1200, '2022-01-25 21:16:04', '2022-01-25 21:16:04', 0),
(2, 45, 0, '2022-01-25 21:49:00', '2022-01-25 21:49:00', 0),
(3, 45, 0, '2022-01-25 21:49:02', '2022-01-25 21:49:02', 0),
(4, 45, 1200, '2022-01-26 03:28:06', '2022-01-26 03:28:06', 0),
(5, 43, 12300, '2022-01-27 10:55:14', '2022-01-27 10:55:14', 0),
(6, 43, 12300, '2022-01-27 10:56:17', '2022-01-27 10:56:17', 0),
(7, 43, 12300, '2022-01-27 10:57:37', '2022-01-27 10:57:37', 0),
(8, 43, 12300, '2022-01-27 11:03:23', '2022-01-27 11:03:23', 0),
(9, 43, 12300, '2022-01-27 11:26:19', '2022-01-27 11:26:19', 0),
(10, 43, 12300, '2022-01-27 11:30:01', '2022-01-27 11:30:01', 0),
(11, 43, 12300, '2022-01-27 13:13:00', '2022-01-27 13:13:00', 0),
(12, 43, 544793, '2022-01-27 14:55:49', '2022-01-27 14:55:49', 0),
(13, 45, 40000, '2022-01-29 11:06:53', '2022-01-29 11:06:53', 0),
(14, 45, 40000, '2022-01-29 14:54:04', '2022-01-29 14:54:04', 0),
(15, 45, 132552, '2022-01-29 15:21:35', '2022-01-29 15:21:35', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`access_token`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`refresh_token`);

--
-- Indexes for table `oauth_scopes`
--
ALTER TABLE `oauth_scopes`
  ADD PRIMARY KEY (`scope`);

--
-- Indexes for table `oauth_users`
--
ALTER TABLE `oauth_users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_apiproducts`
--
ALTER TABLE `tbl_apiproducts`
  ADD PRIMARY KEY (`apiproduct_id`),
  ADD KEY `tbl_apiproducts_ibfk_1` (`added_by`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `tbl_order_ibfk_1` (`customer_id`),
  ADD KEY `tbl_order_ibfk_2` (`payment_type`);

--
-- Indexes for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  ADD PRIMARY KEY (`orderdetails_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_paymenttypes`
--
ALTER TABLE `tbl_paymenttypes`
  ADD PRIMARY KEY (`paymenttype_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `subcategory_id` (`subcategory_id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `tbl_productimages`
--
ALTER TABLE `tbl_productimages`
  ADD PRIMARY KEY (`productimages_id`),
  ADD KEY `tbl_productimages_ibfk_1` (`product_id`),
  ADD KEY `tbl_productimages_ibfk_2` (`added_by`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `tbl_subcategories_ibfk_1` (`category`);

--
-- Indexes for table `tbl_userlogins`
--
ALTER TABLE `tbl_userlogins`
  ADD PRIMARY KEY (`userlogin_id`),
  ADD KEY `tbl_userlogins_ibfk_1` (`user_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_roles` (`role`);

--
-- Indexes for table `tbl_wallet`
--
ALTER TABLE `tbl_wallet`
  ADD PRIMARY KEY (`wallet_id`),
  ADD KEY `tbl_wallet_ibfk_1` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_apiproducts`
--
ALTER TABLE `tbl_apiproducts`
  MODIFY `apiproduct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  MODIFY `orderdetails_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_paymenttypes`
--
ALTER TABLE `tbl_paymenttypes`
  MODIFY `paymenttype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_productimages`
--
ALTER TABLE `tbl_productimages`
  MODIFY `productimages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_userlogins`
--
ALTER TABLE `tbl_userlogins`
  MODIFY `userlogin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_wallet`
--
ALTER TABLE `tbl_wallet`
  MODIFY `wallet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_apiproducts`
--
ALTER TABLE `tbl_apiproducts`
  ADD CONSTRAINT `tbl_apiproducts_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `tbl_users` (`id`);

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tbl_users` (`id`),
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`payment_type`) REFERENCES `tbl_paymenttypes` (`paymenttype_id`);

--
-- Constraints for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  ADD CONSTRAINT `tbl_orderdetails_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`order_id`),
  ADD CONSTRAINT `tbl_orderdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`subcategory_id`) REFERENCES `tbl_subcategories` (`subcategory_id`),
  ADD CONSTRAINT `tbl_product_ibfk_2` FOREIGN KEY (`added_by`) REFERENCES `tbl_users` (`id`);

--
-- Constraints for table `tbl_productimages`
--
ALTER TABLE `tbl_productimages`
  ADD CONSTRAINT `tbl_productimages_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`),
  ADD CONSTRAINT `tbl_productimages_ibfk_2` FOREIGN KEY (`added_by`) REFERENCES `tbl_users` (`id`);

--
-- Constraints for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  ADD CONSTRAINT `tbl_subcategories_ibfk_1` FOREIGN KEY (`category`) REFERENCES `tbl_categories` (`category_id`);

--
-- Constraints for table `tbl_userlogins`
--
ALTER TABLE `tbl_userlogins`
  ADD CONSTRAINT `tbl_userlogins_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`);

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `Fk_roles` FOREIGN KEY (`role`) REFERENCES `tbl_roles` (`role_id`);

--
-- Constraints for table `tbl_wallet`
--
ALTER TABLE `tbl_wallet`
  ADD CONSTRAINT `tbl_wallet_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tbl_users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
